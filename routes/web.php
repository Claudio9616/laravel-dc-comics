<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $comics = config('comics');
    return view('index', compact('comics'));
})->name('index');

Route::get('/show/{index}', function ($index){
    $comics = config('comics');
    return view('show', ['comics' => $comics[$index]]);
})->name('show');

Route::get('/games', function(){
    return view('games');
})->name('games');

 Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
//  nella view creiamo una cartella con il nome della risorsa al plurale, poi crei un controller con il nome della risorsa al singolare,
//  in questo file metti, dopo il get, il nome della risorsa al plurale, il nome del controller e la funzione index, il nome della rotta
//  sarà il nome della risorsa al plurale.index

// fare rotta con controller per lo show 
