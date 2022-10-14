@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <h3>Monte Seu Móvel!</h3>
        <h4 class="m-0" id="c-t-titulo">Escolha o Tampo</h4><br>
        <h4 class="m-0" id="c-b-titulo">Escolha a Base</h4>
        <img id="c-t-img" src="https://via.placeholder.com/1280x300?text=img-tampo" alt="tampo" class="img-fluid" />
        <img id="c-b-img" src="https://via.placeholder.com/1280x300?text=img-base" alt="base" class="img-fluid" />
    </div>
    <div class="col-lg-4">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-12">
                <h3 class="p-2">Cadeiras</h3>
                <button id="opentampos" class="btn btn-primary m-1">Cadeiras</button><br>
                <img src="https://via.placeholder.com/300?text=cadeira" alt="mesa com cadeira" class="img-fluid" /><br>
                <button id="openvidros" class="btn btn-primary m-1">Tecido</button>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-12">
                <h3 class="p-2">Dimenções</h3>
            </div>
        </div>
    </div>
</div>
</div>

<div id="list-tampos" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <p>Lisat de tampos</p>
</div>

<div id="list-vidros" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <p>lista de vidros</p>
</div>

<div id="list-bases" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <p>lista de bases</p>
</div>
@endsection