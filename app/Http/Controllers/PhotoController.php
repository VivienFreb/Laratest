<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImagesRequest;
use App\Gestion\PhotoGestion;

class PhotoController extends Controller
{

    public function getForm()
    {
        return view('photo');
    }

    public function postForm(ImagesRequest $request, PhotoGestion $gestion)
    {
        if($gestion->save($request->file('image'))){
            return view('photo_confirm');
        }
        return redirect('photo')
            ->with('error','Sorry, your picture can\'t be uploaded!');
    }

}
