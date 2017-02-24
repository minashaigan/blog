<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\Like;
use App\Category;
use Illuminate\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        $recents  = Post::orderBy('created_at', 'desc')->take(4)->get();
        if ($category)
            if ($category == 'All') {

                $blogs = Post::all();
            } else {
                $blogs = Post::whereHas('categories', function ($q) use ($category) {
                    $q->where('category_name', $category);
                })->get();
                $important = 0;
                $recents = 0;
            }
        else
            $blogs = Post::all();

        // show the view with blog posts (app/views/blog.blade.php)
        return view('pages/blog', array('blogs' => $blogs,'categories'=>$categories,'important'=>$important,'recents'=>$recents));
//        return view()->make('pages/blog')
//            ->with( array('blogs' => $blogs,'categories'=>$categories));
    }
    public function search() {

        $category = ucfirst(request('category'));
        //$category = Request::get('category');
        //$category = Http\Request::getTrustedHeaderName('category');
        $categories = Category::all();
        $blogs = Post::whereHas('categories',function($q) use ($category){
            $q->where('category_name', $category);
        })->get();
        return view('pages/blog', array('blogs' => $blogs,'categories'=>$categories,'important'=>0,'recents'=>0));
    }
    public function like($id=null){
//        $msg = "This is a simple message.";
        $likecount = Post::select('like_count')->where('blog_id','=',$id);
        $ip_address = \Request::ip();
        $like = new Like();
        $like->ip_address = $ip_address;
        $like->blogid = $id;
        if($like->save()){
            Post::query()->where('blog_id',$id)->increment('like_count');
            $likecount = $likecount +1;
        }
        return response()->json(array('likecount'=> $likecount), 20);
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
        //        $post = Comment::orderBy('created_at','desc')->where('post_id',$id)->post;
        $tags = $post->tags;
        return view('pages/post', array('post'=>$post,'comments'=>$comments,'tags'=>$tags,'all'=>$all));
    }

    public function comment()
    {
        $input = Input::all();
        $this->validate($input, [
            'name' => 'required|max:30',
            'email' =>  'exists:connection.staff,email',
            'comment' => 'required|min:10|max:255',
        ]);
    }
}


