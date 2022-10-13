@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="row">
            <div class="col-sm-4 ">
                <h3>Monte Seu Móvel!</h3>
                <h4 class="m-0" id="t-titulo">Escolha o Tampo</h4><br>
                <h4 class="m-0" id="b-titulo">Escolha a Base</h4>
            </div>
            <div class="col-sm-8 ">
                <button id="opentampos" class="btn btn-primary m-1">Tampos</button>
                <button id="openvidros" class="btn btn-primary m-1">Vidros</button>
            </div>
        </div>
        <img id="t-img" src="https://via.placeholder.com/1280x300?text=img-tampo" alt="tampo" class="img-fluid" />
        <img id="b-img" src="https://via.placeholder.com/1280x300?text=img-base" alt="base" class="img-fluid" />
        <button id="openbases" class="btn btn-primary m-1">Bases</button>
    </div>
    <div class="col-lg-4">
        <div class="row">
            <div class="col-lg-12">
                <h3>Descrição</h3>
                <p id="t-descricao"></p>
                <p id="b-descricao"></p>
            </div>
            <div class="col-lg-12">
                <hr>
                <h3>Dimenções</h3>
                <h4>Tampo:</h4>
                <span id="t-altura">altura</span> X <span id="t-largura">largura</span> X <span id="t-comprimento">comprimento</span><hr>
                <h4>Base:</h4>
                <span id="b-altura">altura</span> X <span id="b-largura">largura</span> X <span id="b-comprimento">comprimento</span>

            </div>
        </div>
    </div>
</div>
</div>

<div id="list-tampos" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul>
        @foreach($tampos as $tampo)
        <li><img onclick="tampoAtual(`{{$tampo->titulo}}`, ` {{$tampo->descricao}}`,` {{$tampo->imagem}}`,` {{$tampo->altura}}`,` {{$tampo->largura}}`,` {{$tampo->comprimento}}`)" style="width: 200px;" src="img/produtos/{{$tampo->imagem}}" alt="{{$tampo->titulo}}"></li>
        @endforeach
    </ul>
</div>

<div id="list-vidros" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul>
        @foreach($vidros as $vidro)
        <li><img id="{{$vidro->id}}" style="width: 200px;" src="img/produtos/{{$vidro->imagem}}" alt="{{$vidro->titulo}}"></li>
        @endforeach
    </ul>
</div>

<div id="list-bases" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul>
        @foreach($bases as $base)
        <li><img onclick="baseAtual(`{{$base->titulo}}`, ` {{$base->descricao}}`,` {{$base->imagem}}`,` {{$base->altura}}`,` {{$base->largura}}`,` {{$base->comprimento}}`)" style="width: 200px;" src="img/produtos/{{$base->imagem}}" alt="{{$base->titulo}}">
        </li>
        @endforeach
    </ul>
</div>
@endsection