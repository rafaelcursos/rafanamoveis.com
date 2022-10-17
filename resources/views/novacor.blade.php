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

                            <form action="/novacor" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="tipo" class="form-label">Nome do Produto:</label><br>
                                    <select class="form-select" name="tipo" id="tipo">
                                        @foreach($produtos as $produto)
                                        <option value="{{$produto->nome}}">{{$produto->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="cor" class="form-label">cor do Produto:</label><br>
                                    <input type="text" name="cor" id="cor" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="imagem" class="form-label">Imagem do Produto:</label><br>
                                    <input type="file" name="imagem" id="imagem" class="form-control-file">
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