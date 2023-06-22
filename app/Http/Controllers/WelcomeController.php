<?php

namespace App\Http\Controllers;

use App\Models\Autoridad;
use App\Models\Empresa;
use App\Models\Meses;
use App\Models\Noticia;
use App\Models\Slider;
use App\Models\Transparencia;
use App\Models\User;
use App\Notifications\EnviarContacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    function misionvision() {
        
        $aut=Autoridad::first();
        return view('municipalidad.misionvison',['autoridad'=>$aut]);
    }

    public function transparencia($id) {
        $tranparencia=Transparencia::find($id);
        $data = array(
            'tranparencia'=>$tranparencia,
            'meses'=>Meses::get()
        );
        return view('transparencia.index',$data);
    }

    public function contacto()  {
        $empresa=Empresa::first();
        return view('contacto',['empresa'=>$empresa]);
    }

    public function contactoEnviar(Request $request) {
        
        $user=new User();
        $user->email='david.criollo14@gmail.com';
        $user->notify(new EnviarContacto($request));
        Session::flash('success','Contacto enviado exitosamente');
        return redirect()->route('contacto');
    }
}
