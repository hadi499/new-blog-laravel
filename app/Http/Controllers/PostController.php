<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() 
    {

        $posts = Post::latest();

        if(request('search')) {
            $posts->where('title', 'like', '%' . request('search') . '%');
        }
        return view('posts', [
            'title' => 'All Posts',
            'active' => 'posts',
            // 'posts' => Post::all()
            // 'posts' => Post::latest()->get()
            'posts' => $posts ->get()
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
