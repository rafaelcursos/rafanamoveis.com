@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row py-2">
            <div class="col-12">
                <a class="btn btn-success btn-sm" href="/tampos/editar/{{$tampo->id}}">VOLTAR</a>
                @if (session('msg'))
                    <div class="alert alert-success">
                        {{ session('msg') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 m-auto">
                <h3>Cor para {{$tampo->nome}}</h3>
                <form action="/tampos/cor/{{$tampo->id}}" method="post" class="form-group" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="nome" class="form-label">nome</label>
                        <input type="text" name="nome" id="nome" class="form-control">
                    </div>

                    
                    <div class="form-group">
                        <label for="imagem" class="form-label">imagem</label>
                        <input type="file" name="imagem" id="imagem" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm my-3">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>
@endsection
