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

    $comics = config('db.comics');

    return view('comics.index', compact('comics'));

})->name('home');


Route::get('/{comic}', function ($id) {

    $comics = config('db.comics');

    $comic = $comics[$id];

    if ($comic){

        return view('comics.show', compact('comic'));

    } else{
        
        abort('404');
    }

})->name('comic');