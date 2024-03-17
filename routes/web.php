<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

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

Route::get('/', function(){
    return view('games');
})->name('games');

 Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
//  nella view creiamo una cartella con il nome della risorsa al plurale e il file al suo interno si chiamerà index, poi crei un controller con il nome della risorsa al singolare,
//  in questo file metti, dopo il get, il nome della risorsa al plurale, il nome del controller e la funzione index, il nome della rotta
//  sarà il nome della risorsa al plurale.index

Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');
// Quando le rotte hanno lo stesso verbo prima metti quella generica in cima, poi quelle che hanno un qualcosa dopo il nome della risorsa 
// bada bene che le rotte JOLLY tipo lo show {QUALCOSA}, vanno messe all'ultimo perchè sennò ti si spacca tutto

Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');
// ricorda che a differenza di verbo questa rotta POST comics, non si scontrearà mai con GET comics

Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');
// Questa rotta non si scontra con quella della show perchè dopo il {QUALCOSA}, per differenziarsi si aggiunge il nome della funzione

Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');
