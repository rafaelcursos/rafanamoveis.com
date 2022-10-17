<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    public function index(){
        return view('tipo');
    }

    public function insert(Request $request){
        $tipo = new Tipo();

        $tipo->tipo = $request->tipo;
        $tipo->save();
        return redirect('novotipo')->with('msg', 'Novo tipo de produto inserido!');
    }
}
