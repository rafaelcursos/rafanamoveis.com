@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto text-center">
                <h1 class="py-5">Escolha a cor da base</h1>


                {{-- NESTE LOCAL DEVO FAZER UMA FUNÇÃO EM JAVASCRIPT PARA SETAR OS TAMANHOS SEM RECARREGAR A PAGINA 
                    NÃO SERA NESCESSARIO CLICAR NO BOTAO ENVIAR PARA SETAR O TAMANHO, ISSO SERA FEITO IMEDIATAMANTE--}}

                @foreach($base->tamanhos as $t)
                    {{$t->altura}} X {{$t->largura}} X {{$t->comprimento}} 
                    <input type="radio" onclick="setTamanho(`{{$t->altura}}`, `{{$t->largura}}`, `{{$t->comprimento}}`)">
                @endforeach

                {{-- ##############################################################################################3## --}}

                @foreach ($base->cores as $cor)
                    <div class="py-3">
                        <img class="img-fluid" src="{{ Storage::url($cor->imagem) }}" alt="{{ $cor->nome }}">
                        
                        <button onclick="trocacor(`{{ Storage::url($cor->imagem) }}`, `{{ $cor->nome }}`, `{{$vitrine->id}}`)" class="btn btn-primary">Enviar</button>
                    </div><hr>
                @endforeach
            </div>
        </div>
    </div>
@endsection
