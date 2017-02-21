<?php

namespace App\Http\Controllers;

use App\Blog;
use App\LikeBlog;
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
    
//    public function viewblog()
//    {
//        $blogs = Blog::all();
//        $categories = Blog::distinct()->get(['category']);
//        return view('pages/blog', array('blogs' => $blogs,'categories'=>$categories));
////        return view('pages/blog');
//    }
    public function viewblog($category = null)
    {
        $categories = Blog::onWriteConnection()->distinct()->get(['category']);
        if ($category)
            if($category == 'All')
                $blogs = Blog::all();
            else
                $blogs = Blog::all()->where('category','=', $category);
        else
            $blogs = Blog::all();

        // show the view with blog posts (app/views/blog.blade.php)
        return view('pages/blog', array('blogs' => $blogs,'categories'=>$categories));
//        return view()->make('pages/blog')
//            ->with( array('blogs' => $blogs,'categories'=>$categories));
    }
    public function search() {

        $category = ucfirst(request('category'));
        //$category = Request::get('category');
        //$category = Http\Request::getTrustedHeaderName('category');
        $categories = Blog::onWriteConnection()->distinct()->get(['category']);
        $blogs = Blog::all()->where('category','=', $category);
        return view('pages/blog', array('blogs' => $blogs,'categories'=>$categories));
    }
    public function like($id=null){
//        $msg = "This is a simple message.";
        $likecount = Blog::select('like_count')->where('blog_id','=',$id);
        $ip_address = \Request::ip();
        $like = new LikeBlog();
        $like->ip_address = $ip_address;
        $like->blogid = $id;
        if($like->save()){
            Blog::query()->where('blog_id',$id)->increment('like_count');
            $likecount = $likecount +1;
        }
        return response()->json(array('likecount'=> $likecount), 20);
        //return view('pages/blog');
        //$likes = Ip_user::all();
        //$is_insert = Ip_user::query()->insert($id);
    }

}


