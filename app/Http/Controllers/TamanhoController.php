<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Tamanho;
use Illuminate\Http\Request;

class TamanhoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('/novotamanho', ['produtos' => $produtos]);
    }

    public function insert(Request $request)
    {
        $produto = Produto::find($request->id);

        $tamanho = new Tamanho();

        $tamanho->produto  = $produto->nome;
        $tamanho->altura  = $request->altura;
        $tamanho->largura = $request->largura;
        $tamanho->comprimento = $request->comprimento;
        $tamanho->save();

        $tamanhoId = $tamanho->id;
        $produto->tamanhos()->attach($tamanhoId);

        return redirect('/novotamanho')->with('msg', 'Tamanho cadastrado com sucesso!');
    }
}
