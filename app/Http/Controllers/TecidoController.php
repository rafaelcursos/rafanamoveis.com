<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tecido;

class TecidoController extends Controller
{
    public function index()
    {
        return view('novotecido');
    }

    public function insert(Request $request)
    {
        $tecido = new Tecido();

        $tecido->tecido = $request->tecido;
        if ($request->hasfile('imagem') && $request->file('imagem')->isvalid()) {
            $imagem = $request->imagem;
            $extensao = $imagem->extension();
            $imagemNome = md5($imagem->getClientOriginalName() . strtotime('now')) . '.' . $extensao;
            $imagem->move(public_path('img/tecidos'), $imagemNome);

            $tecido->imagem = $imagemNome;
        }

        $tecido->save();

        return redirect('home')->with('msg', 'Tecido cadastrado com sucesso!');

    }
}
