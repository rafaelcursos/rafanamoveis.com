<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Tamanho;
use Illuminate\Http\Request;

class TamanhoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return view('novotamanho', ['produtos' => $produtos]);
    }

    public function insert(Request $request){
        $tamanho = new Tamanho();

        $tamanho->produto  = $request->produto;
        $tamanho->altura  = $request->altura;
        $tamanho->largura = $request->largura;
        $tamanho->comprimento = $request->comprimento;
        $tamanho->save();

        return redirect('novotamanho')->with('msg', 'Tamanho cadastrado com sucesso!');

    }
}
