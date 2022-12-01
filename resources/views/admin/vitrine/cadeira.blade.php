@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row py-2">
        <div class="col-12">
            <a class="btn btn-success btn-sm" href="/painel">VOLTAR</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 m-auto">
            <h3>ASSOCIAR CADEIRA AO PRODUTO</h3><hr>

            <h4>NOME DO PRODUTO</h4>
            <form action="" method="post" class="form-group">
                @csrf
                <div class="form-group">
                    <label for="nome" class="form-label">Nome</label>
                    <select class="form-select" name="tampo" id="tampo">
                        <option value="tampo1">Tampo 1</option>
                        <option value="tampo1">Tampo 2</option>
                        <option value="tampo1">Tampo 3</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary btn-sm my-3">ENVIAR</button>
            </form>
        </div>
    </div>
</div>
@endsection