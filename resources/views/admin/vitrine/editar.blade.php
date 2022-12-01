@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row py-2">
            <div class="col-12">
                <button class="btn btn-success btn-sm" onclick="window.history.back()">VOLTAR</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>{{ $vitrine->nome }}</h3>
                <img class="img-fluid py-3" src="{{ Storage::url($vitrine->imagem) }}" alt="vitrine">
                <div class="d-flex">
                    <a class="btn btn-primary btn-sm" href="/vitrine/atualizar/{{ $vitrine->id }}">ATUALIZAR</a>
                    <a class="btn btn-secondary btn-sm" href="#">TAMPOS</a>
                    <a class="btn btn-success btn-sm" href="#">BASES</a>
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
                    <div class="col-6">
                        <h3>Título</h3>
                        <img class="img-fluid py-2" src="https://via.placeholder.com/300x200" alt="vitrine">
                        <a class="btn btn-primary btn-sm" href="#">DESASSOCIAR</a>
                    </div>
                    <div class="col-6">
                        <h3>Título</h3>
                        <img class="img-fluid py-2" src="https://via.placeholder.com/300x200" alt="vitrine">
                        <a class="btn btn-primary btn-sm" href="#">DESASSOCIAR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
