<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http;

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
        // get all the blog stuff from database
        // if a category was passed, use that
        // if no category, get all posts
        $categories = Blog::onWriteConnection()->distinct()->get(['category']);
        if ($category)
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

}


