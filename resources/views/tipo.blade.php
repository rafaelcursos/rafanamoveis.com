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

                        <h3>Inserir Novo Tipo de Produto</h3>
                        <span>Ex: Base, Tampo, Aparador, ...</span>
                        <div class="col-md-6 m-auto">
                            @if (session()->has('msg'))
                            <div class="alert alert-success">
                                {{ session('msg') }}
                            </div>
                            @endif

                            <form action="/novotipo" method="post">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="tipo" class="form-label">Tipo de Produto:</label>
                                    <input type="text" name="tipo" id="tipo" class="form-control">
                                </div>
                                
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