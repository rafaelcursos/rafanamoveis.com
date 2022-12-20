<?php

namespace App\Http\Controllers;

use App\Models\Vitrine;
use App\Models\Base;
use App\Models\Representante;
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

    public function baseCor($vitrineId, $baseId){
        $base = Base::find($baseId);
        $vitrine = Vitrine::find($vitrineId);
        return view('site.corbase', [
            'base' => $base,
            'vitrine' => $vitrine
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

    public function regiao(){
        return view('site.regiao');
    }

    public function representantes($regiao){
        $representantes = Representante::where('regiao', '=', $regiao)->get();
        return view('site.representantes', [
            'representantes' => $representantes
        ]);
    }
}
