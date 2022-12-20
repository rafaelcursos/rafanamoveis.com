@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto text-center">
                @if($base->cores)
                <h1 class="py-5">Escolha a cor da base</h1>
                @foreach ($base->cores as $cor)
                    <div class="py-3">
                        <img class="img-fluid" src="{{ Storage::url($cor->imagem) }}" alt="{{ $cor->nome }}">

                        <button
                            onclick="trocacor(`{{ Storage::url($cor->imagem) }}`, `{{ $cor->nome }}`, `{{ $vitrine->id }}`)"
                            class="btn btn-primary">Esta Cor</button>
                    </div>
                    <hr>
                @endforeach
                @else
                <h1>Não existe variação de cor para este produto!</h1>
                <a id="btn-tampos" class="botao-pages" href="/site/tampos/{{$vitrine->id}}">Próximo</a>
                @endif
            </div>
        </div>
        <a class="botao-voltar" href="#" onclick="window.history.back()">voltar</a>
    </div>
@endsection
