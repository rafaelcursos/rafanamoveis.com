@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="row">
            <div class="col-sm-4 ">
                <h3>Monte Seu Móvel!</h3>
                <h4 class="m-0">{{$produto[0]->id}}</h4><br>
                <h4 class="m-0" >{{$produto[0]->id}}</h4>
            </div>
            <div class="col-sm-8 ">
                <button id="openvidros" class="btn btn-success m-1">Personalizar</button>
            </div>
        </div>
        <img  src="/img/produtos/{{$produto[0]->imagem}}" alt="{{$produto[0]->id}}" class="img-fluid" />
        <img  src="/img/produtos/" alt="{{$produto[0]->id}}" class="img-fluid" />
    </div>
    <div class="col-lg-4">
        <div class="row">
            <div class="col-lg-12">
                <h3>Descrição</h3>
                <p>{{$produto[0]->descricao}}</p>
                <p></p>
                <ul>
                @foreach($produto[0]->corprodutos as $cor)
                <li>{{$cor->cor}}</li>
                @endforeach
                </ul>
            </div>
            <div class="col-lg-12">
                <hr>
                <h3>Dimenções</h3>
                <h4>Tampo:</h4>
                <ul>
                @foreach($produto[0]->tamanhos as $tamanho)
                <li>{{$tamanho->altura}} X {{$tamanho->largura}} X {{$tamanho->comprimento}}</li>
                @endforeach
                </ul>
                <h4>Base:</h4>
                <ul>

                </ul>
            </div>
        </div>
    </div>
</div>
</div>

<div id="list-tampos" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul>
        <hr>
    </ul>
</div>

<div id="list-vidros" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul>
        <hr>
    </ul>
</div>

<div id="list-bases" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul>
        </li>
        <hr>
    </ul>
</div>
@endsection