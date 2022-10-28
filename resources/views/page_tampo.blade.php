@extends('layouts.main')

@section('content')

<div class="row">

    <h2 class="display-5 mt-2">Monte seu Móvel</h2>
    <h3 id="titulo-tampo"></h3>
    <div class="col-md-8">
        <div class="text-center">
            @if (session()->has('msg'))
            <div class="alert alert-danger">
                {{ session('msg') }}
            </div>
            @endif
        </div>
        <div class="container-image">
            <img id="img-tampo-principal" class="img-fluid" src="" alt="">
        </div>
    </div>
    <div class="col-md-4">
        <a id="opentampos" class="btn btn-success btn-tampos" href="javascript:void(0)">Tampos <i id="seta-tampos" class="las la-caret-right"></i></a>
        <h3>Descrição</h3>
        <p id="desc-tampo"></p>


        <a id="tampo-para-bases" href="javascript:void(0)" class="btn btn-success">Proximo Bases</a>

    </div>
</div>

<div id="list-tampos" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul>
        @foreach($tampos as $t)
        <li> <img onclick="trocatampo(this, '{{$t->descricao}}', '{{$t->id}}')" class="img-fluid" src="/img/tampos/{{$t->imagem}}" alt="{{$t->nome}}"> </li>
        @endforeach
    </ul>
</div>

@endsection