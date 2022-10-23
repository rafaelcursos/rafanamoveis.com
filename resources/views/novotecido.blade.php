@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-6 m-auto">
        @if (session()->has('msg'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
        @endif
        <h3>Inserir Novo Tecido</h3>

        <form action="/novotecido" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="id" class="form-label">Nome do item:</label><br>
                <select class="form-select" name="id" id="id">
                    @foreach($produtos as $p)
                        <option value="{{$p->id}}">{{$p->nome}}</option>
                    @endforeach
                </select>
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