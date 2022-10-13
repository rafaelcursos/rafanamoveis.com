@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

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
                            <form action="/insert" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="produto" class="form-label">Tipo de Produto:</label>
                                    <select class="form-select" name="produto" id="produto">
                                        <option value="base" selected>Base</option>
                                        <option value="tampo">Tampo</option>
                                        <option value="vidro">Vidro</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="imagem" class="form-label">Imagem do Produto:</label><br>
                                    <input type="file" name="imagem" id="imagem" class="form-control-file">
                                </div><br>
                                <div class="form-group">
                                    <label for="titulo" class="form-label">Título:</label>
                                    <input type="text" name="titulo" id="titulo" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="descricao" class="form-label">Descrição:</label>
                                    <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="preco" class="form-label">Preço:</label>
                                    <input type="number" name="preco" id="preco" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="altura" class="form-label">Altura:</label>
                                    <input type="number" name="altura" id="altura" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="largura" class="form-label">Largura:</label>
                                    <input type="number" name="largura" id="largura" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="comprimento" class="form-label">Comprimento:</label>
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