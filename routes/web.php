<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/',[PagesController::class, 'index'])->name('index');


Route::get('/json' , function(){

    $comics = config('comics');

    return $comics;
})->name('json-api');



//test route

Route::get('/test', [PagesController::class , 'test'])->name('test');