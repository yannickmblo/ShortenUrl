<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('', function () {
    dd(request('url'));
});


// cree le formulaire
// enregistrer les information en base.
    // si il existe deja on affiche l'ancien
    // si il n'existe pas encore on enregistre den base et on affiche le resultat.
