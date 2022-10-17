@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> <a href="home">Voltar ao Painel</a></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row">

                        <h3>Inserir Novo Produto</h3>
                        <div class="col-md-6 m-auto">
                            @if (session()->has('msg'))
                            <div class="alert alert-success">
                                {{ session('msg') }}
                            </div>
                            @endif

                            <form action="/novotamanho" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="produto" class="form-label">Nome do Produto:</label><br>
                                    <select class="form-select" name="produto" id="produto">
                                        @foreach($produtos as $produto)
                                        <option value="{{$produto->nome}}">{{$produto->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="altura" class="form-label">Altura:</label><br>
                                    <input type="number" name="altura" id="altura" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="largura" class="form-label">Largura:</label><br>
                                    <input type="number" name="largura" id="largura" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="comprimento" class="form-label">Comprimento:</label><br>
                                    <input type="number" name="comprimento" id="comprimento" class="form-control">
                                </div><br>
                                <input class="btn btn-primary" type="submit" value="Cadastrar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection