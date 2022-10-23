<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Linha;

class LinhaController extends Controller
{
    
    public function index(){
        return view('linhaform');
    }

    public function insert(Request $request){
        $linha = new Linha();

        $linha->linha = $request->linha;
        $linha->save();
        return redirect('novalinha')->with('msg', 'Nova linha de produto inserida!');
    }
}
