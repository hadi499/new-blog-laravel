<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() 
    {
        return view('posts', [
            'title' => 'posts',
            'posts' => Post::all()
        ]);
    }

    //route model binding
    public function show(Post $post) 
    {
        return view('post', [
            'title' => 'single post',
            'post' => $post
        ]);

    }
}
