<?php

namespace App\Http\Controllers;

use App\Models\Tamanho;
use Illuminate\Http\Request;

class TamanhoController extends Controller
{
    public function index(){
        return view('novotamanho');
    }

    public function insert(Request $request){
        $tamanho = new Tamanho();

        $tamanho->tamanho = $request->tamanho;
        $tamanho->altura  = $request->altura;
        $tamanho->largura = $request->largura;
        $tamanho->comprimento = $request->comprimento;
        $tamanho->save();

        return redirect('home')->with('msg', 'Tamanho cadastrado com sucesso!');

    }
}
