<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailRequest;
use App\Repositories\EmailRepository;

class EmailController extends Controller
{
    public function getForm(){
        return view('email');
    }

    public function postForm(EmailRequest $request, EmailRepository $repository){
        $repository->save($request->input('email'));

        return view('email_confirm');
    }
}
