<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Arr;

Route::get('/',[PagesController::class, 'index'])->name('index');


Route::get('/json' , function(){

    $comics = config('comics');

    return $comics;
})->name('json-api');

//$comics = config('comics');

Route::get('/comic/{id}' , function($id){

    $comics = config('comics');
    
    $film = Arr::first($comics , fn($comic) => $comic['id'] == $id);
    
    //dd($id);
    //dd($film);

    return view('comic' , compact('film'));
});



//test route

//Route::get('/test', [PagesController::class , 'test'])->name('test');