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
                {{-- coluna reservada para imagem --}}
                <div class="image-primary">
                    {{-- area reservada para dar um espaço entre o tampo e a base --}}
                    <div style="height: 180px" class="area-tampo"></div>
                    {{-- area da imagem principal --}}
                    <img id="tampo" class="img-fluid " src="/img/statics/tampo.gif" alt="imagem do tampo">
                    <img id="base" class="img-fluid " src="" alt="imagem da base">
                </div>

            </div>

            <div class="col-lg-3 ">
                <div class="row ">
                    <div class="cards-container">
                        @foreach ($tampos as $t)
                            <div onclick="trocatampo(`{{ Storage::url($t->imagem) }}`, `{{ $t->nome }}`, `{{ $t->descricao }}`)"
                                class="cards">
                                <div class="img-card ">
                                    <img class="img-fluid" src="{{ Storage::url($t->imagem) }}" alt="">
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
