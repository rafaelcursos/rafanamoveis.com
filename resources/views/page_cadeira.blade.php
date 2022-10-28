@extends('layouts.main')

@section('content')

<div class="row">
    <h2 class="display-5 mt-2">Monte seu Móvel</h2>
    <h3 id="titulo-tampo"></h3>
    <h3 id="titulo-base"></h3>
    <div class="col-md-8">
        <div class="container-image">
            <div id="fundo-tampo"></div>
            <div id="fundo-base"></div>
            <!-- <img width="300" id="img-cadeira-principal" class="img-fluid" src="/img/bases/efb1aa0b4006eb42005ab6c59223efd7.jpg" alt=""> -->
        </div>
    </div>
    <div class="col-md-4">
        <a id="opentampos" class="btn btn-success" href="#">Cadeiras <i id="seta-tampos" class="las la-caret-right"></i></a>
        <h3 id="titulo-cadeira">Cadeira:</h3>
        <img src="" alt="" class="img-fluid img-cadeira-costas">
        <p id="desc-Cadeira"></p>

        <a id="btn-reset" href="javascript:void(0)" class="btn btn-success">Começar de novo</a>
        <a id="bases-para-cadeiras" href="javascript:void(0)" class="btn btn-success">Proximo Cadeiras</a>

    </div>
</div>

<div id="list-tampos" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul>
        @foreach($cadeiras as $c)
        <li><img onclick="trocabase(this, '{{$c->descricao}}', '{{$c->id}}')" class="img-fluid" src="/img/bases/{{$c->imagem}}" alt="{{$c->nome}}"></li>
        @endforeach
    </ul>
</div>

@endsection