@extends('layouts.app')

@section('title')

index

@endsection

@section('content')

<h1>Hello Wordl!</h1>
.<div
    class="container"
>
    <div
        class="row justify-content-center align-items-center g-2"
    >
    @foreach ($comics as $comic)
        
        <div class="col">
        <p>{{$comic['title']}}</p>
        <p>{{$comic['description']}}</p>
        </div>
    
    @endforeach
       
    </div>
    
</div>


@endsection