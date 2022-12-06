@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 mt-2">
            <a onclick="limpar()" href="javascript:void(0)">
                <img width="150" src="/img/statics/logo.png" alt="">
            </a>
        </div>
    </div>
    <hr>
    <div class="row">
        <h1>Personalize seu Móvel</h1>
        <h3>Escolha um modelo abaixo!</h3>

        @foreach($vitrine as $v)

        <div class="col-lg-6">
            <a href="/site/bases/{{$v->id}}">
                <div class="vitrine-card">
                    <img class="img-fluid" src="{{Storage::url($v->imagem)}}" alt="{{$v->nome}}">
                    <div class="d-flex justify-content-around">
                        <h3 class="d-flex align-items-center">{{$v->nome}}</h3><h3><ion-icon name="arrow-forward-outline"></ion-icon></h3>
                    </div>
                    
                </div>
            </a>
        </div>
        @endforeach

    </div>

</div>
@endsection