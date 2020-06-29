<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getInfos(){
        return view('infos');
    }

    public function postInfos(Request $request){
        //On récupère la valeur de l'input 'nom'
        return 'Vous êtes : ' . $request->input('nom') . ' ' . $request->input('prenom');
    }
}
