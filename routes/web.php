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
//Route::get('blog', [ 'uses' => 'ManagementController@viewblog','as' => 'blog']);
Route::get('blog/{category?}', [ 'uses' => 'ManagementController@viewblog','as' => 'blog']);
Route::get('search', [ 'uses' => 'ManagementController@search','as' => 'search']);
//Route::get('like/{id?}', [ 'uses' => 'ManagementController@like','as' => 'like']);
Route::post('/getmsg/{id?}','ManagementController@like');
Route::get('/tet','ManagementController@checktest');
Route::get('posts/{id?}',[ 'uses' => 'ManagementController@viewpost','as' => 'posts']);

Route::post('posts/comment/{id?}', [ 'uses' => 'ManagementController@comment','as' => 'posts/comment']);

Route::post('posts/reply/{id?}', [ 'uses' => 'ManagementController@reply','as' => 'posts/reply']);

Route::get('posts/like/{id?}', [ 'uses' => 'ManagementController@like','as' => 'posts/like']);
//Route::get('blog', [ 'uses' => 'ManagementController@blogsearch','as' => 'blogsearch']);
//Route::resource('blogs', 'BlogController');
//
//Route::get('blog/{category?}', );
//Route::get('blog/{category?}', function($category = null) {
//    // get all the blog stuff from database
//    // if a category was passed, use that
//    // if no category, get all posts
//    $categories = App\Blog::distinct()->get(['category']);
//    if ($category)
//        $blogs = App\Blog::where('category', '=', $category);
//    else
//        $blogs = App\Blog::all();
//
//    // show the view with blog posts (app/views/blog.blade.php)
//    return View::make('pages/blog')
//        ->with( array('blogs' => $blogs,'categories'=>$categories));
//})->name('blog');