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
                <h3>Tamanho para {{$tampo->nome}}</h3>
                <form action="/tampos/tamanho/{{$tampo->id}}" method="post" class="form-group">
                    @csrf

                    <div class="form-group">
                        <label for="altura" class="form-label">altura</label>
                        <input type="number" name="altura" id="altura" class="form-control">
                    </div>

                    
                    <div class="form-group">
                        <label for="largura" class="form-label">largura</label>
                        <input type="number" name="largura" id="largura" class="form-control">
                    </div>

                    
                    <div class="form-group">
                        <label for="comprimento" class="form-label">comprimento</label>
                        <input type="number" name="comprimento" id="comprimento" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm my-3">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>
@endsection
