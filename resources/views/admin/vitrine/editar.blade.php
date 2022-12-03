@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row py-2">
            <div class="col-12">
                <a class="btn btn-success btn-sm" href="/home">VOLTAR</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>{{ $vitrine->nome }}</h3>
                <img class="img-fluid py-3" src="{{ Storage::url($vitrine->imagem) }}" alt="vitrine">
                <div class="d-flex">
                    <a class="btn btn-primary btn-sm" href="/vitrine/atualizar/{{ $vitrine->id }}">ATUALIZAR</a>
                    <a class="btn btn-success btn-sm" href="/vitrine/base/{{ $vitrine->id }}">BASES</a>
                    <a class="btn btn-secondary btn-sm" href="#">TAMPOS</a>
                    <a class="btn btn-info btn-sm" href="#">CADEIRAS</a>
                    <form action="/vitrine/delete/{{ $vitrine->id }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Deseja realmente excluir este item?')">DELETAR</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    @if (session('msg'))
                        <div class="alert alert-success">
                            {{ session('msg') }}
                        </div>
                    @endif
                    <div class="col-4">
                        @foreach ($vitrine->bases as $base)
                            <h3>{{ $base->nome }}</h3>
                            <img class="img-fluid py-2" src="{{ Storage::url($base->imagem) }}" alt="{{ $base->nome }}">
                            <a class="btn btn-primary btn-sm"
                                href="/vitrine/base/desassociar/{{ $vitrine->id }}/{{ $base->id }}">DESASSOCIAR</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
