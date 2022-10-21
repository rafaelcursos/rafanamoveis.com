@extends('layouts.app')

@section('content')

<div class="row">

    <h3>Inserir Novo Produto</h3>
    <div class="col-md-6 m-auto">
        @if (session()->has('msg'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
        @endif

        <form action="/relacionarproduto" method="post">
            @csrf
            <div class="form-group">
                <label for="tipo" class="form-label">Produto:</label><br>
                <select class="form-select" name="produto" id="produto">
                    @foreach($produtos as $p)
                    <option value="{{$p->nome}}">{{$p->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tipo" class="form-label">Produto Relacionado:</label><br>
                <select class="form-select" name="relacao" id="relacao">
                    @foreach($produtos as $p)
                    <option value="{{$p->nome}}">{{$p->nome}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>
</div>
@endsection