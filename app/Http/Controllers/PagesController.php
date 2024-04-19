<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\word;


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
   
        $parole = word::all();

        dd($parole);

       return view('/test', compact('comics') );
   }
}
