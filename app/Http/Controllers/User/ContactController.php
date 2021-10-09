<?php

namespace App\Http\Controllers\User;
use App\Models\Contact;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index() : View
    {
        return view('user.contact.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request) : RedirectResponse
    {
        $validator = $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'object' => 'required',
            'content' => 'required',
        ]);

       $contact = Contact::create($request->all());
       $contact->save();
        // Flashy::success('Votre message a ete envoyer');
        return back();
    }
}
