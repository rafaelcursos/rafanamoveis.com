@extends('layouts.site')

@section('content')
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12 mapa-area my-3">
                <h1 class="text-center">Em Qual Região Você esta?</h1>
                <div class="regiao-container m-auto">
                    <div class="norte regiao">
                        <a href="/site/representantes/norte"><h3>Norte</h3></a>
                    </div>
                    <div class="nordeste regiao">
                        <a href="/site/representantes/nordeste"><h3>Nordeste</h3></a>
                    </div>
                    <div class="centro-oeste regiao">
                        <a href="/site/representantes/centro-oeste"><h3>Centro-Oeste</h3></a>
                    </div>
                    <div class="sudeste regiao">
                        <a href="/site/representantes/sudeste"><h3>Sudeste</h3></a>
                    </div>
                    <div class="sul regiao">
                        <a href="/site/representantes/sul"><h3>Sul</h3></a>
                    </div>
                </div>
            </div>
        </div>
        <a class="botao-voltar" href="javascript:void()" onclick="window.history.back()">voltar</a>
    </div>
@endsection
