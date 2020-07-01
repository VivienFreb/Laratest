<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImagesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PhotoController extends Controller
{

    public function getForm()
    {
        return view('photo');
    }

    public function postForm(ImagesRequest $request)
    {
        $image = $request->file('image');

        if($image->isValid())
        {
            $chemin = config('images.path'); //Return "uploads" de images.php dans config
            
            $extension = $image->getClientOriginalExtension();

            do {
                $nom = Str::random(10) . '.' . $extension;
            } while(file_exists($chemin . '/' . $nom));

            if($image->move($chemin, $nom)) {
                return view('photo_confirm');
            }
        }

        return redirect('photo')
            ->with('error','Sorry, your picture can\'t be uploaded!');
    }

}
