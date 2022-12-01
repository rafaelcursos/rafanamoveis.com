<?php

namespace App\Http\Controllers;

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
        $vitrine = Vitrine::all();

        return view('admin.vitrine.home', [
            'vitrine' => $vitrine
        ]);
    }
}
