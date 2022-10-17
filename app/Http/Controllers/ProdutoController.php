<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Tipo;

class ProdutoController extends Controller
{
    public function index(){

        $tipos = Tipo::all();
        return view('novoproduto',['tipos' => $tipos]);
    }

    public function pagina1(){
        $tampos = Produto::all();
        $vidros = Produto::all();
        $bases = Produto::all();
        return view('welcome', ['tampos' => $tampos, 'vidros' => $vidros, 'bases' => $bases, 'pagina' => 'pagina1']);
    }
    public function pagina2(){
        $tampos = Produto::all();
        $vidros = Produto::all();
        $bases = Produto::all();
        return view('welcome', ['tampos' => $tampos, 'vidros' => $vidros, 'bases' => $bases, 'pagina' => 'pagina2']);
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

        $produto->save();

        return redirect('novoproduto')->with('msg', 'Produto criado com sucesso!');
        
    }

    public function update($id){
        Produto::findOrfail($id);
        return redirect('home')->with('msg', 'Produto deletado com sucesso!');
    }
}
