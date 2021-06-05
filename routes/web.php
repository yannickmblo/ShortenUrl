<?php

use Illuminate\Support\Facades\Route;
use App\Models\Url;


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

function nombrealeatoire(){
    $shorturl = strtolower(Str::random(5));

    if (Url::whereShorturl($shorturl)->count() > 0) {
      return nombrealeatoire();
    }

    return $shorturl;
}

Route::post('/', function () {
     //dd(request('url'));
     // vérifier si l'url a déja été Racourcir
    $url =  Url::where('longurl',request('url') )->first();

    if ($url) {
        return view('result')->with('shorturl', $url->shorturl) ;
    }
    else {
      $row = Url::create(
          [
            'longurl' => request('url'),
            'shorturl'=> nombrealeatoire(),

          ]);
    }

    if ($row) {
        return view('result')->with('shorturl', $row->shorturl) ;
    }
});



Route::get('/{shorturl}', function ($shorturl) {
    $url =  Url::where('shorturl', $shorturl )->first();

    if (! $url) {
        return redirect('/');
    }
    else {
      return redirect($url->longurl);
    }
});
