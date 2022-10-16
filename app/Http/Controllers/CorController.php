<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cor;


class CorController extends Controller
{
    public function index()
    {
        return view('novacor');
    }

    public function insert(Request $request)
    {
        $cor = new Cor();
        $cor->cor = $request->cor;
        if ($request->hasfile('imagem') && $request->file('imagem')->isvalid()) {
            $imagem = $request->imagem;
            $extensao = $imagem->extension();
            $imagemNome = md5($imagem->getClientOriginalName() . strtotime('now')) . '.' . $extensao;
            $imagem->move(public_path('img/cores'), $imagemNome);

            $cor->imagem = $imagemNome;
        }

        $cor->save();

        return redirect('home')->with('msg', 'Nova cor cadastrada com sucesso!');

    }
}
