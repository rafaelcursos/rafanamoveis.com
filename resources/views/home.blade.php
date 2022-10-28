@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">

        @if (session()->has('msg'))
        <div class="alert alert-success col-md-6 m-auto">
            {{ session('msg') }}
        </div>
        @endif

    </div>
</div>

<div class="row">

    <div class="col-12">
    <nav class="navbar navbar-expand">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/register" class="nav-link">Novo Usuário</a>
                </li>
            </ul>
        </nav>
    <h3>Usuários</h3>
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $u)
                <tr>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td>
                        <a class="btn btn-success edit-btn btn-width" href="novoproduto?id={{$u->id}}">Atualizar</a>
                        <form action="/novoproduto/{{$u->id}}" method="post">
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