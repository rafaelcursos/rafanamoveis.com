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
                <h3>{{ $tampo->nome }}</h3>
                <img class="img-fluid py-3" src="{{ Storage::url($tampo->imagem) }}" alt="tampos">
                <div class="d-flex">
                    <a class="btn btn-primary btn-sm" href="/tampos/atualizar/{{ $tampo->id }}">ATUALIZAR</a>
                    <a class="btn btn-secondary btn-sm" href="/tampos/tamanho/{{ $tampo->id }}">TAMANHO</a>
                    <a class="btn btn-success btn-sm" href="/tampos/cor/{{ $tampo->id }}">COR</a>
                    <form action="/tampos/delete/{{ $tampo->id }}" method="post">
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
                        @foreach ($tampo->tamanhos as $tamanho)
                            <li>
                                <div class="d-flex">
                                    {{ $tamanho->altura }} X {{ $tamanho->largura }} X {{ $tamanho->comprimento }}
                                    <form action="/tampos/tamanho/delete/{{ $tamanho->id }}" method="post">
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
                    @foreach ($tampo->cores as $cor)
                        <div class="col-6">
                            <h5>{{ $cor->nome }}</h5>
                            <img class="img-fluid py-2" src="{{ Storage::url($cor->imagem) }}" alt="tampos">
                            <a class="btn btn-primary btn-sm" href="/tampos/cor/desassociar/{{ $cor->id }}/{{$tampo->id}}">DESASSOCIAR</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
