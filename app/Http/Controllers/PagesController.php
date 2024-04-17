<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// gitbash artisan make:controller PagesController

class PagesController extends Controller
{
    public function index(){

        $comics = config('comics');
        return view('index' , compact('comics'));
    }

    public function test(){
        //referred to config/comics
        $comics = config('comics');
        //dd($comics);
   
       return view('/test', compact('comics') );
   }
}
