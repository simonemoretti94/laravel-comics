<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    //referred to config/comics
    $comics = config('comics');
    //dd($comics);

    return view('index' , compact('comics'));
})->name('index');


Route::get('/json' , function(){

    $comics = config('comics');

    return $comics;
})->name('json-api');



//test route

Route::get('/test', function(){
     //referred to config/comics
     $comics = config('comics');
     //dd($comics);

    return view('/test', compact('comics') );
})->name('test');