<?php

namespace App\Http\Controllers\User;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    
    public function index(){

        $posts = Post::notDraft()->wherePublish(true)->get();
        return view('user.post.index', compact('posts'));
    }

    // public function show(Post $post)
    // {
    //     return view('user.posts.show', compact('post'));
    // }

    public function show($id)
    {
        return view('user.post.show');
    }

}