@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row py-2">
            <div class="col-12">
                <a class="btn btn-success btn-sm" href="/representantes">VOLTAR</a>
                @if (session('msg'))
                    <div class="alert alert-success">
                        {{ session('msg') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 m-auto">
                <h3>NOVO REPRESENTANTE</h3>
                <form action="/representantes/novo" method="post" class="form-group" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="imagem" class="form-label">Imagem</label>
                        <input type="file" name="imagem" id="imagem" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Seu nome aqui.">
                    </div>

                    <div class="form-group">
                        <label for="telefone" class="form-label">Telefone: Ex. 32988776655</label>
                        <input type="phone" name="telefone" id="telefone" class="form-control" placeholder="Telefone com DDD, tudo junto.">
                    </div>

                    <div class="form-group">
                        <label for="regiao" class="form-label">Região</label>
                        <select class="form-select" name="regiao" id="regiao">
                            @foreach($regiao as $r)
                                <option value="{{$r->regiao}}">{{$r->regiao}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="estado" class="form-label">Estado</label>
                        <select class="form-select" name="estado" id="estado">
                            @foreach($estado as $e)
                                <option value="{{$e->estado}}">{{$e->estado}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="cidade" class="form-label">Cidade</label>
                        <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Sua cidade">
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm my-3">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>
@endsection
