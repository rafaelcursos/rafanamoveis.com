<?php

namespace App\Http\Controllers;

use App\Models\Base;
use App\Models\Tampo;
use Illuminate\Http\Request;

class PageBaseController extends Controller
{
    public function index($id){

        if($id == 'null'){
            return redirect('/')->with('msg', 'Por favor escolha o tampo no botão ao lado!');
        }

        $tampo = Tampo::find($id);
        $bases = $tampo->bases;

        return view('page_base', ['bases' => $bases]);
    }
}
