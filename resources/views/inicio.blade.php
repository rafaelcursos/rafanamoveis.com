<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/menuofcanvas.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
    <script src="{{ asset('js/cadeiras.js') }}" defer></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menuofcanvas.css') }}" rel="stylesheet">

</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-3">
        <div class="container">
            <div class="menu-hamburguer">
                <div class="menu"><i onclick="abrirmenu()" id="menu-top" class="bi bi-list"></i></div>
            </div>
        </div>
    </nav>
    <!-- ------------------------------------------------------------------------------------ -->
    <!-- Menu top -->
    <div id="menu" class="sidenav-menu">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <ul>
            <li>
                <a href="https://rafanamoveis.com.br">Site da Rafana</a>
            </li>
        </ul>
    </div>
    <!-- ------------------------------------------------------------------------------------ -->

    <main>
        <div class="container">
            <div class="row">
                @foreach($produtos as $p)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div style="min-height: 300px;"  class="card">
                        <img style="max-width:80%; margin:auto; padding: 1rem 0;" src="img/vitrine/{{$p->imagem}}" class="card-img-top" alt="{{$p->nome}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$p->produto}}</h5>
                            <p class="card-text">{{$p->descricao}}</p>
                            <a href="pagina1/{{$p->linha}}" class="btn btn-primary">Personalize este produto</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
    <footer>
        <div class="container-fluid">
            <div class="row text-center rodape">
                <div class="col-4">

                </div>
                <div class="col-4 contato-rodape">
                    &copy;<span>rafanamoveis.com.br</span>
                </div>
                <div class="col-4">

                </div>
            </div>
        </div>
    </footer>
</body>

</html>