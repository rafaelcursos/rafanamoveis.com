@extends('layouts.main')

@section('content')

<div class="row">
    <h2 class="display-5 mt-2">Monte seu Móvel</h2>
    <h3 id="titulo-tampo">Escolha o Tampo</h3>
    <h3 id="titulo-base">Escolha a Base</h3>
    <div class="col-md-8">
        <div class="container-image">
            <img id="img-tampo-principal" class="img-fluid" src="" alt="">
            <img id="img-base-principal" class="img-fluid" src="" alt="">
        </div>
    </div>
    <div class="col-md-4">
        <a id="opentampos" class="btn btn-success btn-tampos" href="#">Bases <i id="seta-tampos" class="las la-caret-right"></i></a>
        <h3>Descrição</h3>
        <h4>Tampo:</h4>
        <p id="desc-tampo"></p>
        <h4>Base:</h4>
        <p id="desc-base"></p>

        <a id="btn-reset" href="javascript:void(0)" class="btn btn-success">Começar de novo</a>
        <a id="bases-para-cadeiras"  href="javascript:void(0)" class="btn btn-success">Proximo Cadeiras</a>

    </div>
</div>

<div id="list-tampos" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul>
        @foreach($bases as $b)
        <li><img onclick="trocabase(this, `{{$b->descricao}}`, `{{$b->id}}`)" class="img-fluid" src="/img/bases/{{$b->imagem}}" alt="{{$b->nome}}"></li>
        @endforeach
    </ul>
</div>

@endsection