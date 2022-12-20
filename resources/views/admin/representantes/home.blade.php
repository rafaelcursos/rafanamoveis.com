@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row py-2">
            <div class="col-12">
                <a class="btn btn-success btn-sm" href="/representantes/novo">NOVO</a>
                @if (session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
            @endif
            </div>
        </div>
        <div class="row">
            @foreach ($representantes as $r)
                <div class="col-md-3">
                    <img class="img-fluid py-2" src="{{Storage::url($r->imagem)}}" alt="bases">
                    <h3>{{$r->nome}}</h3>
                    <p>Telefone: {{$r->telefone}}</p>
                    <a class="btn btn-primary btn-sm" href="/representantes/editar/{{$r->id}}">Editar</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
