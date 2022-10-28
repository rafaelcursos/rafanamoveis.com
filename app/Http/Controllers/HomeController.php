<?php

namespace App\Http\Controllers;

use App\Models\Base;
use App\Models\Cadeira;
use App\Models\Produto;
use App\Models\Tampo;
use App\Models\User;
use App\Models\Vitrine;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        
        return view('/home', ['users' => $users]);
    }

}
