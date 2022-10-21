@extends('layouts.app')

@section('content')

<div class="row">
    @if (session()->has('msg'))
    <div class="alert alert-success col-md-6 m-auto">
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
                    <a class="btn btn-success edit-btn" href="novoproduto?id={{$produto->id}}">Atualizar</a>
                    <form action="/novoproduto/{{$produto->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Atenção! Deseja realmente excluir?')" type="submit" class="btn btn-danger delete-btn">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection