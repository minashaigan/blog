<?php

namespace App\Http\Controllers;

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
        if ($category)
            if($category == 'All')
                $blogs = Post::all();
            else
                $blogs = Post::whereHas('categories',function($q) use ($category){
                  $q->where('category_name', $category);
              })->get();
        else
            $blogs = Post::all();

        // show the view with blog posts (app/views/blog.blade.php)
        return view('pages/blog', array('blogs' => $blogs,'categories'=>$categories));
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
        return view('pages/blog', array('blogs' => $blogs,'categories'=>$categories));
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

}


