<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;


class ProdutoController extends Controller
{
    public function index(){
        return view('novoproduto');
    }

    public function insert(Request $request){
        $produto = new Produto();
        // ---------------------------------------------------------------------------------
        $produto->nome = $request->nome;
        $produto->tipo = $request->tipo;
        if($request->hasfile('imagem') && $request->file('imagem')->isvalid()){
            $imagem = $request->imagem;
            $extensao = $imagem->extension();
            $imagemNome = md5($imagem->getClientOriginalName() . strtotime('now')). '.' . $extensao;
            $imagem->move(public_path('img/produtos'), $imagemNome);

            $produto->imagem = $imagemNome;
        }
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->cor = $request->cor;
        $produto->tecido = $request->tecido;
        $produto->tamanho = $request->tamanho;

        $produto->save();

        return redirect('home')->with('msg', 'Produto criado com sucesso!');
        
    }
}
