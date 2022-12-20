@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row py-2">
            <div class="col-12">
                <button class="btn btn-success btn-sm" onclick="window.history.back()">VOLTAR</button>
                @if (session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
            @endif
            </div>
        </div>
        <div class="row ">
            <div class="col-6 m-auto text-center">
                <h3>{{ $representante->nome }}</h3>
                <img class="img-fluid py-3" src="{{ Storage::url($representante->imagem) }}" alt="representantes">
                <div class="d-flex">
                    <a class="btn btn-primary btn-sm" href="/representantes/atualizar/{{ $representante->id }}">ATUALIZAR</a>
                    <form action="/representantes/delete/{{ $representante->id }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Deseja realmente excluir este item?')">DELETAR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
