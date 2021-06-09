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
    $array_comics = config('comics');

    $data = [
        'array_comics' => $array_comics
    ];

    return view('home', $data);
})->name('home');

Route::get('/comic/{id}', function ($id) {
    $array_comics = config('comics');

    $comic = [];

    foreach($array_comics as $single_comic) {
        if( $id == $single_comic['id']) {
            $comic = $single_comic;
        }
    }

    if(empty($comic)) {
        abort('404');
    }

    $data = [
        'comic' => $comic
    ];

    return view('comic', $data);
})->name('comic');