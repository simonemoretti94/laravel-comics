<header>
    <div class="container d-flex justify-content-between align-items-center">
        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" class="img-fluid rounded-top" alt=""/>
        <ul>
            <a href="{{route('json-api')}}">json</a>
            <li href="">characters</li>
            <li href="">comics</li>
            <li href="">movies</li>
            <li href="">tv</li>
            <li href="">games</li>
            <li href="">collectibles</li>
            <li href="">videos</li>
            <li href="">fans</li>
            <li href="">news</li>
            <li href="">shop</li>
        </ul>
    </div>
    {{-- <a href="{{route('index')}}" class="{{Route::currentRouteName() === 'home' ? '' : ''}}">Home</a> --}}
    {{-- <a href="{{route('index')}}" class="{{Route::currentRouteName() === 'index' ? '' : ''}}"></a> --}}
</header>