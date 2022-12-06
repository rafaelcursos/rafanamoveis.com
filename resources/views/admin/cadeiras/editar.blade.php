@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row py-2">
            <div class="col-12">
                <button class="btn btn-success btn-sm" onclick="window.history.back()">VOLTAR</button>
                @if (session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
            @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>{{ $cadeira->nome }}</h3>
                <img class="img-fluid py-3" src="{{ Storage::url($cadeira->imagem) }}" alt="cadeiras">
                <div class="d-flex">
                    <a class="btn btn-primary btn-sm" href="/cadeiras/atualizar/{{ $cadeira->id }}">ATUALIZAR</a>
                    <a class="btn btn-secondary btn-sm" href="/cadeiras/tamanho/{{ $cadeira->id }}">TAMANHO</a>
                    <a class="btn btn-success btn-sm" href="/cadeiras/cor/{{ $cadeira->id }}">COR</a>
                    <form action="/cadeiras/delete/{{ $cadeira->id }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Deseja realmente excluir este item?')">DELETAR</button>
                    </form>
                </div>
                <div class="py-5">
                    <h3>Tamanhos do produto</h3>
                    <hr>
                    <ul>
                        @foreach ($cadeira->tamanhos as $tamanho)
                            <li>
                                <div class="d-flex">
                                    {{ $tamanho->altura }} X {{ $tamanho->largura }} X {{ $tamanho->comprimento }}
                                    <form action="/cadeiras/tamanho/delete/{{ $tamanho->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Deseja realmente excluir este item?')">DELETAR</button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <h3>Cores do produto</h3>
                <hr>
                <div class="row">
                    @foreach ($cadeira->cores as $cor)
                        <div class="col-6">
                            <h5>{{ $cor->nome }}</h5>
                            <img class="img-fluid py-2" src="{{ Storage::url($cor->imagem) }}" alt="cadeiras">
                            <a class="btn btn-primary btn-sm" href="/cadeiras/cor/desassociar/{{ $cor->id }}/{{$cadeira->id}}">DESASSOCIAR</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
