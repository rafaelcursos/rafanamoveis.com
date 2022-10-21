@extends('layouts.app')

@section('content')

<div class="row">

    <h3>Inserir Novo Produto</h3>
    <div class="col-md-6 m-auto">
        @if (session()->has('msg'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>

        <div class="row">
            <div class="col-lg-6">
            
            </div>
            <div class="col-lg-6">
            <h2>Escolha o tecido do produto se ouver</h2>

            <form action="/novoproduto/tecido" method="post">
            @csrf
            <select name="tecido" id="tecido">
                @foreach($tecidos as $tecido)
                <option value="{{$tecido->id}}">{{$tecido->tecido}}</option>
                @endforeach
            </select><br>
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
            </div>
        </div>
        @else
        <form action="/novoproduto" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nome" class="form-label">Nome do Produto:</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>
            <div class="form-group">
                <label for="tipo" class="form-label">Tipo de Produto:</label><br>
                @if($tipos)
                <select class="form-select" name="tipo" id="tipo">
                    @foreach($tipos as $tipo)
                    <option value="{{$tipo->tipo}}">{{$tipo->tipo}}</option>
                    @endforeach
                </select>
                @else
                <span>Por favor Cadastre um tipo <a href="/novotipo">clicando aqui</a></span>
                @endif
            </div>
            <div class="form-group">
                <label for="imagem" class="form-label">Imagem do Produto:</label><br>
                <input type="file" name="imagem" id="imagem" class="form-control-file">
            </div><br>
            <div class="form-group">
                <label for="descricao" class="form-label">Descrição:</label>
                <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="preco" class="form-label">Preço:</label>
                <input type="number" step="0.01" name="preco" id="preco" class="form-control">
            </div>
            <br>
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
        @endif

        
    </div>
</div>
@endsection