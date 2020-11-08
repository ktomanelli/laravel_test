<?php

// namespace App\Http\Controllers;


use Illuminate\Support\Facades\Route;

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

Route::get('/',function(){
    return view('welcome');
});

Route::get('about',function(){
    $articles = App\Models\Article::latest()->get();
    return view('about',[
        'articles'=>App\Models\Article::latest()->get()
    ]);
});

Route::get('articles/{article}','App\Http\Controllers\ArticlesController@show');


// Route::get('posts/{post}',function($post){
//     $posts=[
//         'my-first-post'=>'hello this is my first blog post.',
//         'my-second-post'=>'now i am getting the hang of this blogging thing.'
//     ];
//     if(! array_key_exists($post,$posts)){
//         abort(404,'Sorry that post was not found');
//     }
//     return view('post',[
//         'post'=>$posts[$post]
//     ]);
// });

// Route::get('posts/{post}', 'PostsController@show');
