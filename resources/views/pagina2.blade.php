@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <h3>Monte Seu Móvel!</h3>
        <h4 class="m-0" id="c-t-titulo">...</h4><br>
        <h4 class="m-0" id="c-b-titulo">...</h4>
        <div class="row c-mesa">
            <img id="c-t-img" src="https://via.placeholder.com/1280x300?text=img-tampo" alt="tampo" class="img-fluid" />
            <img id="c-b-img" src="https://via.placeholder.com/1280x300?text=img-base" alt="base" class="img-fluid" />
        </div>
        <div class="row c-cadeira">
            <div class="col-9 m-auto">
                <img id="c-c-img" src="img/cad-gaya-costas.png" alt="tampo" class="img-fluid frente" />
            </div>
        </div>

    </div>
    <div class="col-lg-4 area-cadeira">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-12">
                <h3 class="p-2">Cadeiras</h3>
                <button id="opentampos" class="btn btn-primary m-1">Cadeiras</button><br>
                <img id="c-c-img" src="img/cad-gaya-frent.png" alt="tampo" class="img-fluid" />
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