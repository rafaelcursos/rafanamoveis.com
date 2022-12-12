@extends('layouts.site')

@section('content')
    <div class="container-fluid body">
        <div class="row">
            <div class="col-12 mt-2">
                <a onclick="limpar()" href="javascript:void(0)">
                    <img width="150" src="/img/statics/logo.png" alt="">
                </a>
            </div>
        </div>
        <hr>
        <div class="row m-0">

            {{-- primeira coluna reservada para a imagem principal --}}
            <div class="col-lg-9 mb-5 m-0 p-0">
                <div class="text-center">
                    <h5 class="display-5">Dimenções do Tampo</h5>
                    <h3 id="tampoTamanho"></h3>
                </div>
                {{-- coluna reservada para imagem --}}
                <div class="image-primary">
                    {{-- area da imagem principal --}}
                    <img id="tampo" class="img-fluid " src="/img/statics/tampo.gif" alt="imagem do tampo">
                    <img id="base" class="img-fluid " src="" alt="imagem da base">
                </div>
            </div>

            <div class="col-lg-3 ">
                <div class="row ">
                    <div class="cards-container">
                        @foreach ($tampos as $t)
                            <div 
                                class="cards">
                                <div class="img-card ">
                                    <img class="img-fluid py-2" src="{{ Storage::url($t->imagem) }}" alt="">
                                    <div style="border: 1px solid #ddd; width: 100%;" onclick="trocatampo(`{{ Storage::url($t->imagem) }}`, `{{ $t->nome }}`, `{{ $t->descricao }}`)">
                                        <div class="row">
                                            <div class="col-4 py-2">
                                                <h5 class="p-2">Tamanhos</h5>
                                            </div>
                                            <div class="col-8 py-2 text-center">
                                                @foreach ($t->tamanhos as $tamanho)
                                                    <span style="cursor: pointer;"
                                                        onclick="setTamanho(`{{ $tamanho->altura }}`, `{{ $tamanho->largura }}`, `{{ $tamanho->comprimento }}`)"
                                                        >
                                                         {{ $tamanho->largura }} X {{ $tamanho->comprimento }}
                                                         <button class="btn btn-success btn-sm my-1">Clique</button>
                                                    </span>
                                                    <br>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>

        <a class="botao-voltar" href="#" onclick="window.history.back()">voltar</a>
        <a class="botao-pages" href="/site/cadeiras/{{ $vitrine->id }}">Próximo</a>
    </div>
    </div>
@endsection
