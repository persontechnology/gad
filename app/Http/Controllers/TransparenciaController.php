<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Meses;
use App\Models\Transparencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class TransparenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $meses=Meses::get();
        $transparencia=Transparencia::get();
        $archivos=Archivo::get();
        $data=[
            'meses'=>$meses,
            'transparencias'=>$transparencia,
            'archivos'=>$archivos
        ];

        return view('transparencia-admin.index',$data);
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
        $request->validate([
            'nombre'=>'required|unique:transparencias,nombre'
        ]);
        try {
            $tra=new Transparencia();
            $tra->nombre=$request->nombre;
            $tra->tipo=$request->tipo;
            $tra->save();

            // esto es para notificar
            Session::flash('success',$tra->tipo.' ingresado corectamente');
            return redirect()->route('transparencia-admin.index');

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Transparencia $transparencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transparencia $transparencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transparencia $transparencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transparencia $transparencia)
    {
        //
    }


    public function guardarArchivo(Request $request) {
        set_time_limit(120);
        $request->validate([
            'transparencia'=>'required',
            'mes'=>'required',
            'nombre'=>'required',
            'archivo'=>'required',
        ]);
        $ar=new Archivo();
        $ar->transparencia_id=$request->transparencia;
        $ar->mes_id=$request->mes;
        $ar->titulo_archivo=$request->nombre;
        $ar->archivo='';
        $ar->save();
        if($request->archivo){
            $path = $request->archivo->storeAs('public/archivos', $ar->id.'.'.$request->archivo->extension());
            $ar->archivo=$path;
            $ar->save();
        }
        Session::flash('success','Ingresado exitosamente');
        return redirect()->route('transparencia-admin.index');
        
    }

    public function eliminarArchivo($id) {
        $ar=Archivo::find($id);
        try {
            if($ar->delete()){
                if(Storage::exists($ar->archivo??'sjbsjs.pnj')){
                    Storage::delete($ar->archivo);
                }
            }
            Session::flash('success','Eliminado');
        } catch (\Throwable $th) {
            Session::flash('danger','No eliminado');
        }
        return redirect()->route('transparencia-admin.index');
    }
}
