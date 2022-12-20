@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-2">
                <a onclick="limpar()" href="javascript:void(0)">
                    <img width="150" src="/img/statics/logo.png" alt="">
                </a>
            </div>
        </div>
        <hr>
        <div class="relatorio">

            <button onclick="window.print()" class="btn btn-sm btn-print" href="">Imprimir</button>

            <div class="row mb-5 mt-5">


                <h1>Relatório do Produto</h1>

                <div class="col-md-8 m-auto mb-3 mt-3">
                    <img id="img-tampo-area" class="img-fluid " src="" alt="imagem do tampo">
                    <img id="img-base-area" class="img-fluid " src="" alt="imagem da base">
                </div>

                <hr>
                <hr>

                <div class="col-12 mb-3 mt-3">
                    <h2 id="nome-tampo-area"></h2>
                    <p id="descricao-tampo-area"></p>
                </div>

                <div class="col-12 mb-3 mt-3">
                    <h2 id="nome-base-area"></h2>
                    <p id="descricao-base-area"></p>
                </div>

            </div>

            <hr>
            <hr>

            <div class="row mb-3 mt-3">
                <div class="col-md-6 mb-3 mt-3 text-center">
                    <img width="200" id="img-cadeira-area" class="img-fluid" src="" alt="imagem da cadeira">
                </div>

                <div class="col-md-6 mb-3 mt-3">
                    <h2 id="nome-cadeira-area"></h2>
                    <p id="descricao-cadeira-area"></p>
                </div>
            </div>
            <a href="/site/regiao"
                style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
            z-index:1000;">
                <i style="margin-top:16px" class="fa fa-whatsapp"></i>
            </a>

            <a class="botao-voltar" href="#" onclick="window.history.back()">voltar</a>
        </div>
    @endsection
