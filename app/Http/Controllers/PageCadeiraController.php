<?php

namespace App\Http\Controllers;

use App\Models\Cadeira;
use Illuminate\Http\Request;

class PageCadeiraController extends Controller
{
    public function index(){
        $cadeiras = Cadeira::all();
        return view('page_cadeira', ['cadeiras' => $cadeiras]);
    }
}
