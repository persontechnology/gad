<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('noticia-admin.index',['categorias'=>Categoria::get(),'noticias'=>Noticia::get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $no=new Noticia();
        $no->titulo=$request->titulo_1;
        $no->detalle=$request->detalle;
        $no->foto=$request->foto;
        $no->user_id=Auth::id();
        $no->categoria_id=$request->categoria;
        $no->save();

        if($request->fondo){
            $path = $request->fondo->storeAs('public/noticias', $no->id.'.'.$request->fondo->extension());
            $no->foto=$path;
            $no->save();
        }
        return redirect()->route('noticias-admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Noticia $noticia)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($noticiaId)
    {
        $noticia=Noticia::find($noticiaId);
        return view('noticia-admin.edit',['noticia'=>$noticia,'categorias'=>Categoria::get()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $noticiaId)
    {
        $no=Noticia::find($noticiaId);

        $no->titulo=$request->titulo_1;
        $no->detalle=$request->detalle;
        $no->foto=$request->foto;
        $no->user_id=Auth::id();
        $no->categoria_id=$request->categoria;
        $no->vista=$request->vista;
        
        $no->save();

        if($request->foto){
            if(Storage::exists($no->foto)){
                Storage::delete($no->foto);
            }
            $path = $request->foto->storeAs('public/noticias', $no->id.'.'.$request->foto->extension());
            $no->foto=$path;
            $no->save();
        }
        return redirect()->route('noticias-admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($noticiaId)
    {
        try {
            $no=Noticia::find($noticiaId);
            $no->delete();
            if(Storage::exists($no->foto??'oo.pbg')){
                Storage::delete($no->foto);
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
        return redirect()->route('noticias-admin.index');
    }

    public function guardarCategoria(Request $request)  {
        $c=new Categoria();
        $c->nombre=$request->nombre;
        $c->save();
        return redirect()->route('noticias-admin.index');
    }
}
