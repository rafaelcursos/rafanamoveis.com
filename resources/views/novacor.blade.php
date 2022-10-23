@extends('layouts.app')

@section('content')

<div class="row">

    <h3>Inserir Nova Cor</h3>
    <div class="col-md-6 m-auto">
        @if (session()->has('msg'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
        @endif

        <form action="/novacor" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="id" class="form-label">Produto:</label><br>
                <select class="form-select" name="id" id="id">
                    @foreach($produtos as $p)
                        <option value="{{$p->id}}">{{$p->nome}}</option>
                    @endforeach
                </select>
            </div><br>
            <div class="form-group">
                <label for="cor" class="form-label">cor do Produto:</label><br>
                <select class="form-select" name="cor" id="cor">
                    @foreach($cornome as $c)
                    <option value="{{$c->cornome}}">{{$c->cornome}}</option>
                    @endforeach
                </select>
            </div><br>
            <div class="link-cor">
                <span>Não encontrou a cor desejada? <a href="/cornome">Clique aqui</a></span>
            </div>
            <div class="form-group">
                <label for="imagem" class="form-label">Imagem deste produto/cor:</label><br>
                <input type="file" name="imagem" id="imagem" class="form-control-file">
            </div><br>
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>
</div>
@endsection