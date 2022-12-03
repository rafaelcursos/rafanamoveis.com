@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row py-2">
            <div class="col-12">
                <a class="btn btn-success btn-sm" href="/bases/novo">NOVO</a>
                @if (session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
            @endif
            </div>
        </div>
        <div class="row">
            @foreach ($bases as $b)
                <div class="col-md-3">
                    <h3>{{$b->nome}}</h3>
                    <img class="img-fluid py-2" src="{{Storage::url($b->imagem)}}" alt="bases">
                    <a class="btn btn-primary btn-sm" href="/bases/editar/{{$b->id}}">Editar</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
