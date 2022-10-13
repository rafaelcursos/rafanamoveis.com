<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/menuofcanvas.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menuofcanvas.css') }}" rel="stylesheet">

</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="menu-hamburguer">
                <div class="menu"><i class="bi bi-list"></i></div>
            </div>

        </div>
    </nav>
    <main>
        <div class="container-fluid">
            @yield('content')
        </div>
    </main>
    <footer>
        <div class="container-fluid">
            <div class="row text-center rodape">
                <div class="col-4">
                    @if($pagina == 'cadeiras')
                        <a href="/" class="btn btn-primary">Voltar</a>
                    @endif
                </div>
                <div class="col-4">
                    &copy;rafanamoveis.com.br
                </div>
                <div class="col-4">
                    @if($pagina == 'montemovel')
                        <a href="/cadeiras" class="btn btn-primary">Proximo Passo</a>
                    @endif
                </div>
            </div>
        </div>
    </footer>
</body>

</html>