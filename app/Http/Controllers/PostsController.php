<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    function show($slug){
        $post = Post::where('slug',$slug)->firstOrFail();
        // $post = \DB::table('posts')->where('slug',$slug)->first();
        return view('post',[
            'post'=>$post
        ]);
    }
}
