<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TEOFANIA') }} Login</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="image">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="https://scontent.fplu11-1.fna.fbcdn.net/v/t1.0-9/s960x960/58374414_839294843075563_2299146347745378304_o.jpg?_nc_cat=110&_nc_sid=dd9801&_nc_ohc=JceSV8QoDHkAX8hnIM7&_nc_ht=scontent.fplu11-1.fna&_nc_tp=7&oh=0d16d9817136d919166914a3f364e56a&oe=5EC882AA" width="350">
        </a>
    </div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'TEOFANIA') }}
                </a> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                {{-- @if (Route::has('register'))
                   <a class="nav-link" id="link" href="{{ route('register') }}">{{ __('Novo Usuário') }}</a>
                @endif --}}
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div class="divisory-primary">
        {{-- <button class="btn btn-outline-success" id="categoria">Nova Categoria</button> --}}
        <a href="/category"><button class="btn btn-outline-success" id="categoria">Nova Categoria</button></a>
        <a href="/biblia/create"><button class="btn btn-outline-success" id="categoria">Nova Bíblia</button></a>
        {{-- <button class="btn btn-outline-success" id="produto">Nova Bíblia</button> --}}
    </div>
</body>
<style>
    #link
    {
        color: #7f7f7f;
    }

    .btn-outline-success
    {
        background-color: #bf3d03;
        color: #f8fafc;
        border: 0px;
        margin: 0% 1% 0% ;
    }

    .btn-outline-success:hover
    {
        background-color: #bf3d03;
    }


    .btn-outline-success:focus
    {
        box-shadow: 0 0 0 .2rem #5a3e09;
    }

    .image
    {
        background-color: #ffffff;
    }
</style>
</html>
