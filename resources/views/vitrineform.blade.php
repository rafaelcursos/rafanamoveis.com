@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-md-6 m-auto">
        @if (session()->has('msg'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
        @endif
        <div class="row">
        <h3>Inserir um Produto na vitrine</h3>

            <form action="/novoproduto/vitrine" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="produto" class="form-label">Nome do Produto:</label>
                    <input type="text" name="produto" id="produto" class="form-control">
                </div>
                <div class="form-group">
                    <label for="linha" class="form-label">Qual é a linha deste item?</label>
                    <select class="form-select" name="linha" id="linha">
                        @foreach($linha as $l)
                        <option value="{{$l->linha}}">{{$l->linha}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="imagem" class="form-label">Imagem do Produto:</label><br>
                    <input type="file" name="imagem" id="imagem" class="form-control-file">
                </div><br>
                <div class="form-group">
                    <label for="descricao" class="form-label">Descrição:</label>
                    <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="5"></textarea>
                </div>
                <br>
                <input class="btn btn-primary" type="submit" value="Cadastrar">
            </form>
        
        </div>
    </div>
    @endsection