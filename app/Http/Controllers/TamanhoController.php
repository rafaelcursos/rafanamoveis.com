<?php

namespace App\Http\Controllers;

use App\Models\Tampo;
use App\Models\Base;
use App\Models\Tamanho;
use Illuminate\Http\Request;

class TamanhoController extends Controller
{
    public function index()
    {
        $tampos = Tampo::all();
        $bases = Base::all();
        return view('/novotamanho', ['bases' => $bases, 'tampos' => $tampos]);
    }

    public function insert(Request $request)
    {
        $tamanho = new Tamanho();
        
        $tamanho->produto  = $request->produto;
        $tamanho->altura  = $request->altura;
        $tamanho->largura = $request->largura;
        $tamanho->comprimento = $request->comprimento;
        $tamanho->save();


        return redirect('/admin-tamanhos')->with('msg', 'Tamanho cadastrado com sucesso!');
    }
}
