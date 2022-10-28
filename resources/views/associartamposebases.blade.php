@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-md-6 m-auto">
        @if (session()->has('msg'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
        @endif
        <div class="row">
        <h3>Associar Tampos e Bases</h3>

            <form action="/associartamposebases" method="post">
                @csrf
                
                <div class="form-group">
                    <label for="tampoId" class="form-label">Tampos:</label><br>
                    <select  class="form-select" name="tampoId" id="tampoId">
                        @foreach($tampos as $t)
                        <option  value="{{$t->id}}">{{$t->nome}}</option>
                        @endforeach
                    </select>
                </div><br>
                <div class="form-group">
                    <label for="baseId" class="form-label">Bases:</label><br>
                    <select  class="form-select" name="baseId" id="baseId">
                        @foreach($bases as $b)
                        <option  value="{{$b->id}}">{{$b->nome}}</option>
                        @endforeach
                    </select>
                </div><br>
                <input class="btn btn-success" type="submit" value="Cadastrar">
            </form>
        
        </div>
    </div>
    @endsection