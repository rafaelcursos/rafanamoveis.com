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
                <h3>ASSOCIAR BASE AO PRODUTO</h3>
                <hr>

                <h4>{{ $vitrine->nome }}</h4>
                <form action="/vitrine/base/{{ $vitrine->id }}" method="post" class="form-group">
                    @csrf
                    <div class="form-group">
                        <label for="base" class="form-label">Base</label>
                        <select class="form-select" name="base" id="base">
                            @foreach ($bases as $base)
                                <option value="{{ $base->id }}">{{ $base->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm my-3">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>
@endsection
