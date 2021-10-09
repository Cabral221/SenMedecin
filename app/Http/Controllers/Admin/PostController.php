<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index() : View
    {
        $posts = Post::notDraft()->get();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create() : View
    {
        $post = Post::draft();
        return view('admin.posts.edit', [
            'post' => $post,
            'titlePage' => 'Cration de l\'article' ,
            'action' => route('admin.posts.update', $post->id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return View
     */
    public function edit(Post $post) : View
    {
        // dd($post);
        return view('admin.posts.edit', [
            'post' => $post,
            'titlePage' => 'Edition de l\'article',
            'action' => route('admin.posts.update', $post->id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return View
     */
    public function update(Request $request, $id) : View
    {
        $this->validate($request, [
            'title' => 'required|string|min:3',
            'subTitle' => 'required|string|min:3',
            'content' => 'required|string|min:20',
        ]);

        $post = Post::find($id);
        $post->update([
            'title' => $request->title,
            'subTitle' => $request->subTitle,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'publish' => $request->publish ? true : false,
        ]);
        $post->save();

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Post $post
     * @return RedirectResponse
     */
    public function destroy(Post $post) : RedirectResponse
    {   
        $post->delete();
        return redirect()->back();
    }
}
