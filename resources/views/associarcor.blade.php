@extends('layouts.app')

@section('content')

<!-- Nesta view nos estamos mostrando um formulário para associar um produto a uma cor -->

<h2>Escolha a cor do produto se ouver variação</h2>

@if (session()->has('msg'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
        @endif

<form class="form-group" action="/associar/cor" method="post">

    @csrf

    <select class="form-select" name="produto" id="produto">
        @foreach($produtos as $p)
        <option value="{{$p->id}}">{{$p->nome}}</option>
        @endforeach
    </select>
    <br>

    <select class="form-select" name="cor" id="cor">
        @foreach($cores as $cor)
        <option value="{{$cor->id}}">{{$cor->cor}}</option>
        @endforeach
    </select>
    <br>

    <input class="btn btn-primary" type="submit" value="Cadastrar">
    
</form>
@endsection