<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class ManagementController extends Controller
{

    public function viewstore()
    {
        return view('pages/store');
    }
    
    public function viewblog()
    {
        $blogs = Blog::all();
        $categories = Blog::distinct()->get(['category']);
        return view('pages/blog', array('blogs' => $blogs,'categories'=>$categories));
//        return view('pages/blog');
    }
}
