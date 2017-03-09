<?php

namespace App\Http\Controllers;

use App\Reply;
use App\Comment;
use App\Post;
use App\Like;
use App\Category;
use App\User;
use App\Tag;
use Illuminate\Http;
use Illuminate\Support\Facades\DB;
use Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Validator;


class ManagementController extends Controller
{

    public function viewstore()
    {
        return view('pages/store');
    }

    public function checktest()
    {
        $posts=Post::find(1);
//        foreach ($posts as $post)
//        {
//            return  $post->categories();
//            echo "<BR>";
//        }
        return $posts->categories->category_name;
    }

//    public function viewblog()
//    {
//        $blogs = Blog::all();
//        $categories = Blog::distinct()->get(['category']);
//        return view('pages/blog', array('blogs' => $blogs,'categories'=>$categories));
////        return view('pages/blog');
//    }
    public function viewblog($category = null){
        //$categories = Post::all()->category->category_name;
        $categories = Category::all();
        //$categories = Post::all()->categories;
        //Post::onWriteConnection()->distinct()->get(['category']);
        $important = Post::all()->where('important',1);
        $recents  = Post::orderBy('created_at', 'desc')->take(10)->get();
        if ($category)
            if ($category == 'All') {

                $blogs = Post::paginate(3);
            } else {
                $blogs = Post::whereHas('categories', function ($q) use ($category) {
                    $q->where('category_name', $category);
                })->get();
                $important = 0;
                $recents = 0;
            }
        else
            $blogs = Post::paginate(3);

        // show the view with blog posts (app/views/blog.blade.php)
        return view('pages/blog', array('blogs' => $blogs,'categories'=>$categories,'important'=>$important,'recents'=>$recents,'tags_search'=>0));
//        return view()->make('pages/blog')
//            ->with( array('blogs' => $blogs,'categories'=>$categories));
    }

    public function search() {
        $tagname = strtolower(request('search'));
        //$tags_search //= array();
        //array_push($tags_search,$tagname);
        //$category = Request::get('category');
        //$category = Http\Request::getTrustedHeaderName('category');
        $tags = Tag::all();
        $blogs = Post::whereHas('tags',function($q) use ($tagname){
            $q->where('tag_name', 'LIKE', "%$tagname%");
        })->get();
        $categories = Category::all();
        return view('pages/blog', array('blogs' => $blogs,'categories'=>$categories,'important'=>0,'recents'=>0,'tags_search'=>$tagname));
    }
    public function like($id=null){
        $userlike = Like::where([['ip_address',Request::ip()],['post_id',$id]])->first();
        if(is_null($userlike)){
            $like = new Like();
            $like->ip_address = Request::ip();
            $like->post_id = $id;
            $like->save();
            return Redirect::back();
        }
        else{
            $userlike = Like::where([['ip_address',Request::ip()],['post_id',$id]])->delete();
            return Redirect::back();
        }
//        $msg = "This is a simple message.";
//        $likecount = Post::select('like_count')->where('blog_id','=',$id);
//        $ip_address = \Request::ip();
//        $like = new Like();
//        $like->ip_address = $ip_address;
//        $like->blogid = $id;
//        if($like->save()){
//            Post::query()->where('blog_id',$id)->increment('like_count');
//            $likecount = $likecount +1;
//        }
//        return response()->json(array('likecount'=> $likecount), 20);
        //return view('pages/blog');
        //$likes = Ip_user::all();
        //$is_insert = Ip_user::query()->insert($id);
    }
    public function viewpost($id){
//      Comment::all()
        //        $comments = Comment::orderBy('created_at', 'desc')->where('post_id',$id);
        $post = Post::findOrFail($id);
        $all = Post::all();
        //        $posts = Post::all()->where('post_id',$id);
        //        $post = Post::find($id);
        $comments = $post->comments;
        $replies = array();
        foreach ($comments as $comment){
            array_push($replies, $comment->replies);
        }
//        foreach ($comments as $comment){
//            echo $comment;
//        }
        //        $post = Comment::orderBy('created_at','desc')->where('post_id',$id)->post;
        $tags = $post->tags;
        $likes = $post->likes;
        return view('pages/post', array('post'=>$post,'comments'=>$comments,'tags'=>$tags,'all'=>$all,'likes'=>$likes,'replies'=>$replies));
    }

    public function comment($id)
    {
        $input = Input::all();
        $rules = array(
            'Name'      => 'Required|Min:3|Max:80',                       // just a normal required validation
            'Email'     => 'Required|Min:0|Max:80|Email',    // required and must be unique in the ducks table
            'Comment'   => 'Required|Min:7'
        );
        $messages = [
            'Name.required' => 'وارد کردن نام شما ضروری است ',
            'Comment.required' => 'وارد کردن پیام  شما ضروری است ',
            'Name.min' => 'نام کامل خود را وارد نمایید ( حداقل ۷ کاراکتر) ',
            'Comment.min' => 'حداقل ۷ کاراکتر لازم است'
        ];
        $validator = Validator::make($input,$rules,$messages);
        if (!$validator->fails()) {
            $comment = new Comment();
            //$comment->user()->name = $input['Name'];
            $comment->post_id = $id;
            //*****************************************
            // Is there any better ways to add comment??????
            //****************************************
            $comment->comment = $input['Comment'];
            $user = new User();
            $userid = User::select('id')->where([['name',$input['Name']],['email',$input['Email']]])->first();
            if(is_null($userid)) {
                $user->name = $input['Name'];
                $user->email = $input['Email'];
                $user->save();
                $comment->user_id = $user->id;
            }
            else {
                $comment->user_id = $userid->id;
//                return   $userid->id;
//                echo "<BR>";

            }
            try{
                $comment->save();
            }
            catch ( \Illuminate\Database\QueryException $e){

                return Redirect::back()->withErrors(['errorr'=>'. مشکلی در ثبت پیام شما به وجود آمد مججدا تلاش بفرمایید']);
            }
            return Redirect::back();
        }
        else{
            return Redirect::back()
                ->withErrors($validator)->withInput();
        }
    }
    public function reply($id)
    {
        $input = Input::all();
        $rules = array(
            'Name'      => 'Required|Min:3|Max:80',                       // just a normal required validation
            'Email'     => 'Required|Min:0|Max:80|Email',    // required and must be unique in the ducks table
            'Comment'   => 'Required|Min:7'
        );
        $messages = [
            'Name.required' => 'وارد کردن نام شما ضروری است ',
            'Comment.required' => 'وارد کردن پیام  شما ضروری است ',
            'Name.min' => 'نام کامل خود را وارد نمایید ( حداقل ۷ کاراکتر) ',
            'Comment.min' => 'حداقل ۷ کاراکتر لازم است'
        ];
        $validator = Validator::make($input,$rules,$messages);
        if (!$validator->fails()) {
            $reply = new Reply();
            //$comment->user()->name = $input['Name'];
            $reply->comment_id = $id;
            //$reply->post_id = Comment::select('post_id')->where('id',$id)->first('post_id');
            //*****************************************
            // Is there any better ways to add reply??????
            //****************************************
            $reply->comment = $input['Comment'];
            $user = new User();
            $userid = User::select('id')->where([['name',$input['Name']],['email',$input['Email']]])->first();
            if(is_null($userid)) {
                $user->name = $input['Name'];
                $user->email = $input['Email'];
                $user->save();
                $reply->user_id = $user->id;
            }
            else {
                $reply->user_id = $userid->id;
//                return   $userid->id;
//                echo "<BR>";

            }
            try{
                $reply->save();
            }
            catch ( \Illuminate\Database\QueryException $e){

                return Redirect::back()->withErrors(['. مشکلی در ثبت پاسخ شما به وجود آمد مججدا تلاش بفرمایید']);
            }
            return Redirect::back();
        }
        else{
            return Redirect::back()
                ->withErrors($validator)->withInput();
        }
    }
}


