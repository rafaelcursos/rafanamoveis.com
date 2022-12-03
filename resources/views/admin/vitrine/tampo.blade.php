@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row py-2">
            <div class="col-12">
                <a class="btn btn-success btn-sm" href="/vitrine/editar/{{$vitrine->id}}">VOLTAR</a>
                @if (session('msg'))
                    <div class="alert alert-success">
                        {{ session('msg') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 m-auto">
                <h3>ASSOCIAR TAMPO AO PRODUTO</h3>
                <hr>

                <h4>{{ $vitrine->nome }}</h4>
                <form action="/vitrine/tampo/{{ $vitrine->id }}" method="post" class="form-group">
                    @csrf
                    <div class="form-group">
                        <label for="tampo" class="form-label">tampo</label>
                        <select class="form-select" name="tampo" id="tampo">
                            @foreach ($tampos as $tampo)
                                <option value="{{ $tampo->id }}">{{ $tampo->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm my-3">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>
@endsection
