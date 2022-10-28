<?php

namespace App\Http\Controllers;

use App\Models\Base;
use App\Models\Tampo;
use Illuminate\Http\Request;

class AssociartamposebsesController extends Controller
{
    public function index()
    {
        $tampos = Tampo::all();
        $bases = Base::all();
        return view('associartamposebases', ['tampos' => $tampos, 'bases' => $bases]);
    }

    public function insert(Request $request)
    {
        $tampo = Tampo::find($request->tampoId);
        $base_id = $request->baseId;

 
        $tampo->bases()->attach($base_id);

        return redirect('/associartamposebases')->with('msg', 'Associação realizada com sucesso!');
    }
}
