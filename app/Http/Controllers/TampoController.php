<?php

namespace App\Http\Controllers;

use App\Models\Linha;
use App\Models\Tampo;
use Illuminate\Http\Request;

class TampoController extends Controller
{
    public function index(){
        $tampos = Tampo::orderBy('id', 'DESC')->get();

        return view('novotampo', ['tampos' => $tampos]);
    }

    public function insert(Request $request){
        $tampo = new Tampo();

        $tampo->nome = $request->nome;
        if ($request->hasfile('imagem') && $request->file('imagem')->isvalid()) {
            $imagem = $request->imagem;
            $extensao = $imagem->extension();
            $imagemNome = md5($imagem->getClientOriginalName() . strtotime('now')) . '.' . $extensao;
            $imagem->move(public_path('img/tampos'), $imagemNome);

            $tampo->imagem = $imagemNome;
        }
        $tampo->descricao = $request->descricao;
        $tampo->preco = $request->preco;

        $tampo->save();

        return redirect('/admin-tampos')->with('msg', 'Produto cadastrado com sucesso!');
    }
}
