@extends('layouts.app')

@section('content')

<!-- Nesta view nos estamos mostrando um formulário para associar um produto a um tecido -->

<h2>Associe um tecido a um produto!</h2>

@if (session()->has('msg'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
        @endif
        
<form class="form-group" action="/associar/tecido" method="post">

    @csrf

    <select class="form-select" name="produto" id="produto">
        @foreach($produtos as $p)
        <option value="{{$p->id}}">{{$p->nome}}</option>
        @endforeach
    </select>
    <br>

    <select class="form-select" name="tecido" id="tecido">
        @foreach($tecidos as $t)
        <option value="{{$t->id}}">{{$t->tecido}}</option>
        @endforeach
    </select>
    <br>

    <input class="btn btn-primary" type="submit" value="Cadastrar">

</form>
@endsection