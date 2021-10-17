<?php

namespace App\Http\Controllers\User;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class PostController extends Controller
{
    
    public function index() : View
    {
        $posts = Post::notDraft()->wherePublish(true)->get();
        return view('user.post.index', compact('posts'));
    }

    public function show(int $id) : View
    {
        return view('user.post.show');
    }

}