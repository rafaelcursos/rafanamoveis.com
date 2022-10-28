<?php

namespace App\Http\Controllers;

use App\Models\Cadeira;
use App\Models\Linha;
use Illuminate\Http\Request;

class CadeiraController extends Controller
{
    public function index(){
        $cadeiras = Cadeira::orderBy('id', 'DESC')->get();

        return view('novacadeira', ['cadeiras' => $cadeiras]);
    }

    public function insert(Request $request){
        $base = new Cadeira();

        $base->nome = $request->nome;
        if ($request->hasfile('imagem') && $request->file('imagem')->isvalid()) {
            $imagem = $request->imagem;
            $extensao = $imagem->extension();
            $imagemNome = md5($imagem->getClientOriginalName() . strtotime('now')) . '.' . $extensao;
            $imagem->move(public_path('img/cadeiras'), $imagemNome);

            $base->imagem = $imagemNome;
        }
        $base->descricao = $request->descricao;
        $base->preco = $request->preco;

        $base->save();

        return redirect('/admin-cadeiras')->with('msg', 'Produto cadastrado com sucesso!');
    }
}
