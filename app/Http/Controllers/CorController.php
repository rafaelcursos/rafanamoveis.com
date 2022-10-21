<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Corproduto;
use App\Models\Produto;

class CorController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();

        return view('novacor', ['produtos' => $produtos]);
    }

    public function insert(Request $request)
    {
        $cor = new Corproduto();
        $cor->produto = $request->produto;
        $cor->cor = $request->cor;
        if($request->hasfile('imagem') && $request->file('imagem')->isvalid()){
            $imagem = $request->imagem;
            $extensao = $imagem->extension();
            $imagemNome = md5($imagem->getClientOriginalName() . strtotime('now')). '.' . $extensao;
            $imagem->move(public_path('img/cores'), $imagemNome);

            $cor->imagem = $imagemNome;
        }
        $cor->save();

        return redirect('novacor')->with('msg', 'Nova cor cadastrada com sucesso!');

    }
}
