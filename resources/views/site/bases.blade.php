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

            <div class="col-lg-9 mb-5 m-0 p-0">


                <div class="image-primary">
                    <div style="height: 180px" class="area-tampo">

                    </div>
                    <img id="base" class="img-fluid " src="/img/statics/base.gif" alt="imagem da base">
                </div>

            </div>

            <div class="col-lg-3">
                <div class="row ">
                    <div class="cards-container">
                        @foreach ($bases as $b)
                            <div onclick="trocabase(`{{ Storage::url($b->imagem) }}`, `{{ $b->nome }}`, `{{ $b->descricao }}`)"
                                class="cards">
                                <div class="cards">
                                    <div class="img-card">
                                        <img id="miniatura" class="img-fluid" src="{{ Storage::url($b->imagem) }}"
                                            alt="{{ $b->nome }}">
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>

            </div>
        </div>
        <a class="botao-voltar" onclick="limpar()" href="javascript:void(0)">voltar</a>
        <a class="botao-pages" href="/site/tampos/{{$vitrine->id}}">Próximo</a>
    </div>
    </div>
@endsection
