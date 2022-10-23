@extends('layouts.app')

@section('content')

<div class="row">

    <h3>Inserir Nova linha de Produto</h3>
    <span>Ex: Ares, Diana, ...</span>
    <div class="col-md-6 m-auto">
        @if (session()->has('msg'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
        @endif

        <form action="/novalinha" method="post">
            @csrf

            <div class="form-group">
                <label for="linha" class="form-label">Nova Linha de Produto:</label>
                <input type="text" name="linha" id="linha" class="form-control">
            </div>

            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>
</div>
@endsection