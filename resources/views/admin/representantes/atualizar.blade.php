@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row py-2">
        <div class="col-12">
            <a class="btn btn-success btn-sm" href="/representantes">VOLTAR</a>
            @if (session('msg'))
            <div class="alert alert-success">
                {{ session('msg') }}
            </div>
        @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 m-auto">
            <h3>Atualizando {{$representante->nome}}</h3>
            <form action="/representantes/atualizar/{{$representante->id}}" method="post" class="form-group" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="imagem" class="form-label">Imagem</label>
                    <input type="file" name="imagem" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control" value="{{$representante->nome}}">
                </div>

                <div class="form-group">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" name="telefone" id="telefone" class="form-control" value="{{$representante->telefone}}">
                </div>

                <div class="form-group">
                    <label for="regiao" class="form-label">Região</label>
                    <input type="text" name="regiao" id="regiao" class="form-control" value="{{$representante->regiao}}">
                </div>

                <div class="form-group">
                    <label for="estado" class="form-label">Estado</label>
                    <input type="text" name="estado" id="estado" class="form-control" value="{{$representante->estado}}">
                </div>

                <div class="form-group">
                    <label for="cidade" class="form-label">Cidade</label>
                    <input type="text" name="cidade" id="cidade" class="form-control" value="{{$representante->cidade}}">
                </div>

                <button type="submit" class="btn btn-primary btn-sm my-3">ENVIAR</button>
            </form>
        </div>
    </div>
</div>
@endsection