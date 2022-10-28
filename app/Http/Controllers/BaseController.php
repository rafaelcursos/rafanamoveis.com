<?php

namespace App\Http\Controllers;

use App\Models\Base;
use App\Models\Linha;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index(){
        $bases = Base::orderBy('id', 'DESC')->get();

        return view('novabase', ['bases' => $bases]);
    }

    public function insert(Request $request){
        $base = new Base();

        $base->nome = $request->nome;
        if ($request->hasfile('imagem') && $request->file('imagem')->isvalid()) {
            $imagem = $request->imagem;
            $extensao = $imagem->extension();
            $imagemNome = md5($imagem->getClientOriginalName() . strtotime('now')) . '.' . $extensao;
            $imagem->move(public_path('img/bases'), $imagemNome);

            $base->imagem = $imagemNome;
        }
        $base->descricao = $request->descricao;
        $base->preco = $request->preco;

        $base->save();

        return redirect('/admin-bases')->with('msg', 'Produto cadastrado com sucesso!');
    }
}
