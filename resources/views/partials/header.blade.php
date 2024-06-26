<header>
    <div class="container d-flex align-items-center {{!Route::currentRouteName('index') ? 'justify-content-center' : 'justify-content-between'}}">
        <a href="{{route('index')}}"><img id="logo" src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="logo" class="{{!Route::currentRouteName('index') ? 'd-none' : ''}}"/></a>
        <ul>
            <a href="{{route('index')}}" class="{{!Route::currentRouteName('index') ? '' : 'd-none'}} text-dark" style="font-size: 20px"><strong><i>Home</i></strong></a>
            <a href="{{route('json-api')}}" class="{{!Route::currentRouteName('index') ? 'd-none' : ''}}">json</a>
            <a href="#" class="{{!Route::currentRouteName('index') ? 'd-none' : ''}}">characters</a>
            <a href="#" class="{{!Route::currentRouteName('index') ? 'd-none' : ''}}">comics</a>
            <a href="#" class="{{!Route::currentRouteName('index') ? 'd-none' : ''}}">movies</a>
            <a href="#" class="{{!Route::currentRouteName('index') ? 'd-none' : ''}}">tv</a>
            <a href="#" class="{{!Route::currentRouteName('index') ? 'd-none' : ''}}">games</a>
            <a href="#" class="{{!Route::currentRouteName('index') ? 'd-none' : ''}}">collectibles</a>
            <a href="#" class="{{!Route::currentRouteName('index') ? 'd-none' : ''}}">videos</a>
            <a href="#" class="{{!Route::currentRouteName('index') ? 'd-none' : ''}}">fans</a>
            <a href="#" class="{{!Route::currentRouteName('index') ? 'd-none' : ''}}">news</a>
            <a href="#" class="{{!Route::currentRouteName('index') ? 'd-none' : ''}}">shop</a>
        </ul>
    </div>
</header>
