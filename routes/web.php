<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Utilisation d'un controller pour afficher la vue. On nomme la route "home".
// route('home') retournera l'url de la page d'accueil
Route::get('/', [
    'as' => 'home',
    'uses' => 'WelcomeController@index'
]);

// Utilisation du Controller pour afficher la vue article
Route::get('article/{n}', [
    'as' => 'article',
    'uses' => 'ArticleController@show'
])->where('n', '[0-9]+');


Route::get('test', function(){
    return view('test');
});

//Permet juste de faire une routes pour .../public/1 2 et 3
Route::get('{n}', function($n) {
    return 'Je suis la page ' . $n . ' !';
})->where('n', '[1-3]');


//Route qui fonctionne comme celle des articles mais pour des factures.
//Contenu de la vue facture + ou - identique à article donc on fabrique un template
Route::get('facture/{n}', function($n){
    return view('facture', ['numero' => $n]);
})->where('n', '[0-9]+');

//Inputs et formulaires
Route::get('users', 'UsersController@getInfos');
Route::post('users', 'UsersController@postInfos');

//Formulaire de contact
Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');

//Formulaire d'envoi de photo
Route::get('photo', 'PhotoController@getForm');
Route::post('photo', 'PhotoController@postForm');

// Formulaire email. On nomme la route post "storeEmail"
Route::get('email', 'EmailController@getForm');
Route::post('email', ['uses' => 'EmailController@postForm', 'as' => 'storeEmail']);
