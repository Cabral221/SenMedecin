<?php

namespace App\Http\Controllers\User;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request) : RedirectResponse
    {
        // dd($request->all);
         $this->validate($request,[
            'full_name' => 'required',
            'email' => 'required',
            'comment' => 'required',
         ]);

         $comment_store = new Comment;
         $comment_store->full_name = $request->full_name;
         $comment_store->email = $request->email;
         $comment_store->comment = $request->comment;
         $comment_store->post_id = 1;
         $comment_store->save();
         // Flashy::success('Votre message a ete envoyer');
        return back();
    }
}
