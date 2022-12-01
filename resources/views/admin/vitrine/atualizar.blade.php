@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row py-2">
        <div class="col-12">
            <button class="btn btn-success btn-sm" onclick="window.history.back()">VOLTAR</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 m-auto">
            <h3>Atualizando {{$vitrine->nome}}</h3>
            <form action="/vitrine/atualizar/{{$vitrine->id}}" method="post" class="form-group" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control" value="{{$vitrine->nome}}">
                </div>

                <div class="form-group">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="5">{{$vitrine->descricao}}</textarea>
                </div>

                <div class="form-group">
                    <label for="imagem" class="form-label">Imagem</label>
                    <input type="file" name="imagem" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary btn-sm my-3">ENVIAR</button>
            </form>
        </div>
    </div>
</div>
@endsection