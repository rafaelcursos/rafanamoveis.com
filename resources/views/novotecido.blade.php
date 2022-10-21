@extends('layouts.app')

@section('content')

<div class="row">
    <h3>Inserir Novo Tecido</h3>
    <div class="col-md-6 m-auto">
        @if (session()->has('msg'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
        @endif

        <form action="/novotecido" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="produto" class="form-label">cor do Produto:</label><br>
                <select class="form-select" name="produto" id="produto">
                    @foreach($produtos as $p)
                        <option value="{{$p->nome}}">{{$p->nome}}</option>
                    @endforeach
                </select>
            </div><br>
            <div class="form-group">
                <label for="tecido" class="form-label">Tecido do Produto:</label><br>
                <input type="text" name="tecido" id="tecido" class="form-control">
            </div><br>
            <div class="form-group">
                <label for="imagem" class="form-label">Imagem deste produto/tecido:</label><br>
                <input type="file" name="imagem" id="imagem" class="form-control-file">
            </div><br>
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>
</div>
@endsection