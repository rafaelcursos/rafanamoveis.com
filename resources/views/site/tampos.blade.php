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
                {{-- <div class="text-center">
                    <h5 class="display-5">Dimenções do Tampo</h5>
                    <h3 id="tampoTamanho"></h3>
                </div> --}}

                <div class="row">
                    <div class="col-10">
                        {{-- coluna reservada para imagem --}}
                        <div class="image-primary">
                            {{-- area da imagem principal --}}
                            <img id="img-tampo-area" class="img-fluid " src="/img/statics/tampo.gif" alt="imagem do tampo">
                            <img id="img-base-area" class="img-fluid " src="" alt="imagem da base">
                        </div>
                    </div>
                    <div class="col-2">
                        <h5>Tampo</h5>
                        <p id="nome-tampo-area"></p><hr>
                        <h5>Tamanho:</h5>
                        <h6 id="tampo-tamanho"></h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 ">
                <div class="row ">
                    <div class="cards-container">
                        @foreach ($tampos as $t)
                            <div class="cards">
                                <div class="img-card ">
                                    <img class="img-fluid py-3" src="{{ Storage::url($t->imagem) }}" alt="">
                                    <div
                                        onclick="trocatampo(`{{ Storage::url($t->imagem) }}`, `{{ $t->nome }}`, `{{ $t->descricao }}`)">
                                        <div class="row">
                                            <div class="col-5">
                                                <h5>Tamanhos</h5>
                                            </div>
                                            <div class="col-7 text-center">
                                                @foreach ($t->tamanhos as $tamanho)
                                                    <p onclick="setTamanho(`{{ $tamanho->altura }}`, `{{ $tamanho->largura }}`, `{{ $tamanho->comprimento }}`, this)"
                                                        class="btn-tamanhos">
                                                        {{ $tamanho->largura }} X {{ $tamanho->comprimento }}
                                                    </p>
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
