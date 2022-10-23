<?php

namespace App\Http\Controllers;

use App\Models\Cornome;
use Illuminate\Http\Request;
use App\Models\Corproduto;
use App\Models\Produto;

class CorController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        $cornome = Cornome::all();
        return view('novacor', ['produtos' => $produtos, 'cornome' => $cornome]);
    }

    public function insert(Request $request)
    {
        $produto = Produto::find($request->id);

        $cor = new Corproduto();
        $cor->produto = $produto->nome;
        $cor->cor = $request->cor;
        if($request->hasfile('imagem') && $request->file('imagem')->isvalid()){
            $imagem = $request->imagem;
            $extensao = $imagem->extension();
            $imagemNome = md5($imagem->getClientOriginalName() . strtotime('now')). '.' . $extensao;
            $imagem->move(public_path('img/cores'), $imagemNome);

            $cor->imagem = $imagemNome;
        }
        $cor->save();

        $corId = $cor->id;

        $produto->corprodutos()->attach($corId);

        return redirect('novacor')->with('msg', 'Nova cor cadastrada com sucesso!');

    }
}
