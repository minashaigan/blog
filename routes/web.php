<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages/one');
})->name('home');
Route::get('store', [ 'uses' => 'ManagementController@viewstore','as' => 'store']);
Route::get('blog', [ 'uses' => 'ManagementController@viewblog','as' => 'blog']);
//Route::get('blog', [ 'uses' => 'ManagementController@blogsearch','as' => 'blogsearch']);
//Route::resource('blogs', 'BlogController');

//Route::get('blog/{category?}', function($category = null)
//{
//    // get all the blog stuff from database
//    // if a category was passed, use that
//    // if no category, get all posts
//    if ($category)
//        $posts = Post::where('category', '=', $category);
//    else
//        $posts = Post::all();
//
//    // show the view with blog posts (app/views/blog.blade.php)
//    return View::make('blog')
//        ->with('posts', $posts);
//});