<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
    </script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TEOFANIA') }} Categorias</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<div class="image">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="https://scontent.fplu11-1.fna.fbcdn.net/v/t1.0-9/s960x960/58374414_839294843075563_2299146347745378304_o.jpg?_nc_cat=110&_nc_sid=dd9801&_nc_ohc=JceSV8QoDHkAX8hnIM7&_nc_ht=scontent.fplu11-1.fna&_nc_tp=7&oh=0d16d9817136d919166914a3f364e56a&oe=5EC882AA" width="350">
    </a>
</div>

<body>
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
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <button type="button" class="btn btn-default" aria-label="Left Align">
        <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
    </button>
    {{-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
    <div class="tabela-categoria col-10">
        <button class="btn btn-success" id="categoria">Adicionar nova Categoria</button>
        <table class="table table-striped">
            <tr>
                <th style="text-align: center;">ID</th>
                <th style="text-align: center;">Categoria</th>
                <th style="text-align: center;">Opções</button></th>
            </tr>

            @foreach($category as $categoria)
            <tr>
                <td style="text-align: -webkit-center;width: 10%;">{{$categoria->id}}</td>
                <td style="text-align: -webkit-center;width: 80%;">{{$categoria->name}}</td>
                <td style="text-align: -webkit-center;width: 10%">
                    {{-- <a href="" class="btn btn-warning"  data-placement="top" title ="Editar">
                        <i class="far fa-edit"></i>
                    </a> --}}
                    <a href="{{route('categoria.delete', $categoria->id)}}" class="btn btn-danger" id="delet" data-placement="top" title ="Excluir">
                        <i class="far fa-trash-alt"></i>
                    </a>
                </td>

            </tr>
            @endforeach
        </table>
    </div>
</body>
{{-- ///////////////////////////////////////////////////////////////////////////////////////////////////// --}}
<div class="modal" tabindex="-1" role="dialog" id="ModalAdd">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Adicionar Nova Categoria</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                @if( isset ($errors) && count($errors) >0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="category">
                    @csrf
                    <div class="input-group col-12">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nome da categoria">
                        <div class="input-group-append">
                        <button class="btn btn-success" type="submit" id="button-addon">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- ///////////////////////////////////////////////////////////////////////////////////////////////////// --}}
<script>
    $('#categoria').click(function(){
        $('#ModalAdd').modal();
        $('#name').focus();
    });

    $('#delet').click(function(){
        alert("função");
    });

</script>
<style>

    .image
    {
        background-color: #ffffff;
    }

    #categoria
    {
        float: right;
    }

    .tabela-categoria
    {
       margin: auto;
    }

</style>
</html>
