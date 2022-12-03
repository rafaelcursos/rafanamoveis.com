@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row py-2">
            <div class="col-12">
                <a class="btn btn-success btn-sm" href="/vitrine/novo">NOVO</a>
                @if (session('msg'))
                    <div class="alert alert-success">
                        {{ session('msg') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            @foreach ($vitrine as $v)
                <div class="col-md-3">
                    <h3>{{ $v->nome }}</h3>
                    <img class="img-fluid py-2" src="{{ Storage::url($v->imagem) }}" alt="vitrine">
                    <a class="btn btn-primary btn-sm" href="/vitrine/editar/{{ $v->id }}">Editar</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
