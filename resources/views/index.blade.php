@extends('layouts.app')

@section('title')

index

@endsection

@section('body-class')

bg-dark

@endsection

@section('content')

<div id="jumbotron" ></div>

<div id="cards-container" class="container" >
    <span id="absolute" >current series</span>
    {{-- <h1>content goes here</h1> --}}
    <div id="cards-row" class="row">
        @foreach ($comics as $comic)
            <div id="col" class="col-lg-3 col-md-6 col-sm-12">
                <div id="col-wrapper">
                        <p>{{$comic['title']}}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>



@endsection