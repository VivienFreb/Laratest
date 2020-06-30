<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function getForm(){
        return view('contact');
    }

    public function postForm(ContactRequest $request){
        Mail::send('email_contact', $request->all(), function($message)
        {
            $message->to('vivien.frebourg@outlook.com')->subject('Nouveau message');
        });

        return view('confirm');
    }
}
