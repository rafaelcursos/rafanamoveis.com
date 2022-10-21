@extends('layouts.app')

@section('content')
<!-- Nesta view nos estamos mostrando um formulário para associar um produto a um tamanho -->

<h2>Associe um tamanho a um produto!</h2>

@if (session()->has('msg'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
        @endif

<form class="form-group" action="/associar/tamanho" method="post">

    @csrf

    <select class="form-select" name="produto" id="produto">
        @foreach($produtos as $p)
        <option value="{{$p->id}}">{{$p->nome}}</option>
        @endforeach
    </select>
    <br>

    <select class="form-select" name="tamanho" id="tamanho">
        @foreach($tamanhos as $t)
        <option value="{{$t->id}}">{{$t->tamanho}}</option>
        @endforeach
    </select>
    <br>

    <input class="btn btn-primary" type="submit" value="Cadastrar">

</form>
@endsection