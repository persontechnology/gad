<?php

namespace App\Http\Controllers;

use App\Models\Autoridad;
use App\Models\Empresa;
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
        $empresa=Empresa::first();

        $data = array(
            'empresa'=>$empresa,
            'autoridad'=>Autoridad::first()
        );

        return view('home',$data);
    }
}
