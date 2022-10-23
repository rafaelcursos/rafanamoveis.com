<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use App\Models\Tecido;

class TecidoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();

        return view('/novotecido', ['produtos' => $produtos]);
    }

    public function insert(Request $request)
    {
        $produto = Produto::find($request->id);

        $tecido = new Tecido();

        $tecido->produto = $produto->nome;

        if($request->hasfile('imagem') && $request->file('imagem')->isvalid()){
            $imagem = $request->imagem;
            $extensao = $imagem->extension();
            $imagemNome = md5($imagem->getClientOriginalName() . strtotime('now')). '.' . $extensao;
            $imagem->move(public_path('img/tecidos'), $imagemNome);

            $tecido->imagem = $imagemNome;
        }
        $tecido->save();

        $tecidoId = $tecido->id;
        $produto->tecidos()->attach($tecidoId);

        return redirect('/novotecido')->with('msg', 'Novo tecido cadastrado para este produto!');

    }
}
