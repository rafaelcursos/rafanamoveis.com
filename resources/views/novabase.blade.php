@extends('layouts.app')

@section('content')

<div class="row">

    @if (session()->has('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
    @endif
    <div class="col-md-6 mb-5">

        <h3>Inserir Nova Base</h3>

        <form action="/admin-bases" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nome" class="form-label">Nome da Base:</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>
            <div class="form-group">
                <label for="imagem" class="form-label">Imagem do Produto:</label><br>
                <input type="file" name="imagem" id="imagem" class="form-control-file">
            </div><br>
            <div class="form-group">
                <label for="descricao" class="form-label">Descrição:</label>
                <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="5"></textarea>
            </div>
            <div class="form-group ">
                <label for="preco" class="form-label">Preço:</label>
                <input style="width: 100px ;" type="number" step="0.01" name="preco" id="preco" class="form-control">
            </div>
            <br>
            <input class="btn btn-success" type="submit" value="Cadastrar">
        </form>

    </div>
    <div class="col-lg-6">
        <h3>Bases</h3>
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Imagem</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bases as $b)
                <tr>
                    <td>{{$b->nome}}</td>
                    <td><img width="100" class="img-fluid" src="img/bases/{{$b->imagem}}" alt="{{$b->nome}}"></td>
                    <td>
                        <a class="btn btn-success edit-btn btn-width" href="novoproduto?id={{$b->id}}">Atualizar</a>
                        <form action="/novoproduto/{{$b->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Atenção! Deseja realmente excluir?')" type="submit" class="btn btn-secondary btn-width delete-btn">Deletar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection