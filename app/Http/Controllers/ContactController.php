<?php

namespace App\Http\Controllers;

use App\Mail\ContractMail;
use Illuminate\Mail\Mailer;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request, Mailer $mailer)
    {
        $this->validate($request, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'content' => 'required'
        ]);

        $mailer->to('alonetogether061@gmail.com')->send(new ContractMail($request->except('_token')));

        return redirect()->back();
    }
}
