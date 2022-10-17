@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('Dashboard') }} </h4>
                    <a class="btn" href="novoproduto">Novo Produto</a>
                    <a class="btn" href="novotipo">Tipo de Produto</a>
                    <a class="btn" href="novacor">Nova Cor</a>
                    <a class="btn" href="novotamanho">Inserir Medidas</a>
                    <a class="btn" href="novotecido">Inserir Tecido</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row">
                        @if (session()->has('msg'))
                        <div class="alert alert-success">
                            {{ session('msg') }}
                        </div>
                        @endif
                        <h3>Produtos</h3>
                        <table class="table table-striped text-center">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Imagem</th>
                                    <th>Preço</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($produtos as $produto)
                                <tr>
                                    <td>{{$produto->nome}}</td>
                                    <td><img width="100" class="img-fluid" src="img/produtos/{{$produto->imagem}}" alt="{{$produto->nome}}"></td>
                                    <td>R${{$produto->preco}}</td>
                                    <td>
                                        <a class="btn btn-warning" href="novoproduto?id={{$produto->id}}">Atualizar</a>
                                        <form action="/novoproduto/{{$produto->id}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection