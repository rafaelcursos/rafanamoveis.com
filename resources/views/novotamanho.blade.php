@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-6 m-auto">
        @if (session()->has('msg'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
        @endif
        <h3>Inserir Novo Tamanho</h3>

        <form action="/novotamanho" method="post">
            @csrf
            <div class="form-group">
                <label for="id" class="form-label">cor do Produto:</label><br>
                <select name="id" id="id">
                    @foreach($produtos as $p)
                        <option value="{{$p->id}}">{{$p->nome}}</option>
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