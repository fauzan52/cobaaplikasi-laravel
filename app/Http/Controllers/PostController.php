<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('postingan', [
            "title" => "Postingan",
            //            "posts" => Post::all()
            "posts" => $posts
        ]);
    }

    public function show(Post $post)
    {
        // dd($post->category()->toArray());
        return view('post', [
            'title' => 'Post',
            'post' => $post
        ]);
    }
}
