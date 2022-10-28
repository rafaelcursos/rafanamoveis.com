<?php

namespace App\Http\Controllers;

use App\Models\Tampo;
use Illuminate\Http\Request;

class PageTampoController extends Controller
{
    public function index(){
        $tampos = Tampo::all();        
        return view('page_tampo', ['tampos' => $tampos]);
    }
}
