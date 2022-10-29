<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/tampos.js') }}" defer></script>
    <script src="{{ asset('js/bases.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
    <script src="{{ asset('js/menuofcanvas.js') }}" defer></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Icones -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pagetampo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pagebase.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menuofcanvas.css') }}" rel="stylesheet">

</head>

<body class="antialiased">

    <main>
        <div class="container-fluid">
            @yield('content')
        </div>
    </main>
    <footer>
        <div class="container-fluid">
            <div class="row text-center rodape">
                <div>
                    &copy;<span>rafanamoveis.com.br</span>
                </div>
            </div>
        </div>
    </footer>



</body>

</html>