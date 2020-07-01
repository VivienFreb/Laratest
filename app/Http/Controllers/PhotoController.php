<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImagesRequest;
use App\Gestion\PhotoGestionInterface;

class PhotoController extends Controller
{

    public function getForm()
    {
        return view('photo');
    }

    public function postForm(ImagesRequest $request, PhotoGestionInterface $gestion)
    {
        if($gestion->save($request->file('image'))){
            return view('photo_confirm');
        }
        return redirect('photo')
            ->with('error','Sorry, your picture can\'t be uploaded!');
    }

}
