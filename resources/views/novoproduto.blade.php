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
        <h3>Inserir Novo Produto</h3>

            <form action="/novoproduto" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nome" class="form-label">Nome do Produto:</label>
                    <input type="text" name="nome" id="nome" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tipo" class="form-label">Tipo de Produto:</label><br>
                    <select  style="width: 100px ;"  class="form-select" name="tipo" id="tipo">
                        @foreach($tipos as $tipo)
                        <option value="{{$tipo->tipo}}">{{$tipo->tipo}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="linha" class="form-label">Qual é a linha deste item?:</label><br>
                    <select style="width: 100px ;" class="form-select" name="linha" id="linha">
                        @foreach($linha as $l)
                        <option  value="{{$l->linha}}">{{$l->linha}}</option>
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
                <div class="form-group ">
                    <label for="preco" class="form-label">Preço:</label>
                    <input style="width: 100px ;" type="number" step="0.01" name="preco" id="preco" class="form-control">
                </div>
                <br>
                <input class="btn btn-success" type="submit" value="Cadastrar">
            </form>
        
        </div>
    </div>
    @endsection