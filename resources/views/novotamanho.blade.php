@extends('layouts.app')

@section('content')

<div class="row">

    @if (session()->has('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
    @endif
    <h3>Inserir Novo Tamanho</h3>

    <div class="col-lg-6">

        <form action="/admin-tamanhos" method="post">
            @csrf
            <div class="form-group">
                <label for="produto" class="form-label">Bases:</label><br>
                <select style="max-width: 200px;" class="form-select" name="produto" id="produto">
                    @foreach($bases as $b)
                    <option value="{{$b->nome}}">{{$b->nome}}</option>
                    @endforeach
                </select>
            </div><br>
            <div class="form-group">
                <label for="altura" class="form-label">Altura:</label><br>
                <input type="number" step="0.01" name="altura" id="altura" class="form-control">
            </div>
            <div class="form-group">
                <label for="largura" class="form-label">Largura:</label><br>
                <input type="number" step="0.01" name="largura" id="largura" class="form-control">
            </div>
            <div class="form-group">
                <label for="comprimento" class="form-label">Comprimento:</label><br>
                <input type="number" step="0.01" name="comprimento" id="comprimento" class="form-control">
            </div><br>
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>

    <div class="col-lg-6">

        <form action="/admin-tamanhos" method="post">
            @csrf
            <div class="form-group">
                <label for="produto" class="form-label">Tampos:</label><br>
                <select style="max-width: 200px;" class="form-select" name="produto" id="produto">
                    @foreach($tampos as $t)
                    <option value="{{$t->nome}}">{{$t->nome}}</option>
                    @endforeach
                </select>
            </div><br>
            <div class="form-group">
                <label for="altura" class="form-label">Altura:</label><br>
                <input type="number" step="0.01" name="altura" id="altura" class="form-control">
            </div>
            <div class="form-group">
                <label for="largura" class="form-label">Largura:</label><br>
                <input type="number" step="0.01" name="largura" id="largura" class="form-control">
            </div>
            <div class="form-group">
                <label for="comprimento" class="form-label">Comprimento:</label><br>
                <input type="number" step="0.01" name="comprimento" id="comprimento" class="form-control">
            </div><br>
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>
</div>
@endsection