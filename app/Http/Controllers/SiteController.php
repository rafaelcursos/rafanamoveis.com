<?php

namespace App\Http\Controllers;

use App\Models\Vitrine;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $vitrine = Vitrine::all();
        return view('site.vitrine', [
            'vitrine' => $vitrine,
        ]);
    }

    public function bases($id)
    {
        $vitrine = Vitrine::find($id);
        $bases = $vitrine->bases()->get();        
        return view('site.bases', [
            'vitrine' => $vitrine,
            'bases' => $bases
        ]);
    }

    public function tampos($id)
    {
        $vitrine = Vitrine::find($id);
        $tampos = $vitrine->tampos()->get();        
        return view('site.tampos', [
            'vitrine' => $vitrine,
            'tampos' => $tampos
        ]);
    }

    public function cadeiras($id)
    {
        $vitrine = Vitrine::find($id);
        $cadeiras = $vitrine->cadeiras()->get();  
        return view('site.cadeiras', [
            'vitrine' => $vitrine,
            'cadeiras' => $cadeiras
        ]);
    }

    public function imprimir(){
        return view('site.imprimir');
    }
}
