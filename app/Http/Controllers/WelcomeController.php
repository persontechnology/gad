<?php

namespace App\Http\Controllers;

use App\Models\Autoridad;
use App\Models\Noticia;
use App\Models\Slider;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $slider=Slider::where('vista','SI')->latest()->take(5)->get();
        $data = array(
            'sliders'=>$slider,
            'autoridad'=>Autoridad::first(),
            'noticias'=>Noticia::where('vista','SI')->latest()->take(3)->get()
        );
        return view('welcome',$data);
    }

    public function noticias()  {
        return view('noticias.index',['noticias'=>Noticia::where('vista','SI')->latest()->paginate(8)]);
    }
    public function noticiasDetalle($id) {
        $no=Noticia::find($id);
        return view('noticias.detalle',['noticia'=>$no]);
    }
}
