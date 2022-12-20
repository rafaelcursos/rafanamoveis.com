@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 m-auto">
                <h1>Representantes nesta região</h1>
                <ul>
                    @foreach ($representantes as $r)
                        <li style="border-left: 1px solid #ddd; padding: 1rem;list-style:none;">
                            <h3>Nome: {{ $r->nome }}</h3>
                            <p> <strong>Estado: </strong>{{ $r->estado }}</p>
                            <p> <strong>Cidade: </strong>{{ $r->cidade }}</p>
                            <a href="https://wa.me/55{{ $r->telefone }}"
                                style="padding: 10px 20px;width:60px;height:60px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
            z-index:1000;"
                                target="_blank">
                                <i style="margin-top:16px" class="fa fa-whatsapp"></i>
                            </a>
                        </li>
                        <hr>
                    @endforeach
                </ul>


            </div>
        </div>
        <a class="botao-voltar" href="javascript:void()" onclick="window.history.back()">voltar</a>
    </div>
@endsection
