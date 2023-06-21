@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Empresa
                    
                </div>
                <div class="card-body">
                    <form action="{{ route('empresa.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" name="email" value="{{ old('email',$empresa->email??'') }}" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="tel" name="telefono" value="{{ old('telefono',$empresa->telefono??'') }}" class="form-control" id="telefono">
                        </div>
                        <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <input type="text" name="direccion" value="{{ old('direccion',$empresa->direccion??'') }}" class="form-control" id="direccion">
                        </div>
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="url" name="facebook" value="{{ old('facebook',$empresa->facebook??'') }}" class="form-control" id="facebook">
                        </div>
                        <div class="form-group">
                            <label for="twitter">twitter</label>
                            <input type="url" name="twitter" value="{{ old('twitter',$empresa->twitter??'') }}" class="form-control" id="twitter">
                        </div>
                        <div class="form-group">
                            <label for="instagram">Instagram</label>
                            <input type="url" name="instagram" value="{{ old('instagram',$empresa->instagram??'') }}" class="form-control" id="instagram">
                        </div>
                        <div class="form-group">
                            <label for="youtube">Youtube</label>
                            <input type="url" name="youtube" value="{{ old('youtube',$empresa->youtube??'') }}" class="form-control" id="youtube">
                        </div>

                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <input type="file" name="logo" class="form-control-file" id="logo">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">descripcion</label>
                            <input type="text" name="descripcion" value="{{ old('descripcion',$empresa->descripcion??'') }}" class="form-control" id="descripcion">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Autoridad
                </div>
                <div class="card-body">
                    <form action="{{ route('autoridad.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="nombres_completos">Nombres completos</label>
                          <input type="text" name="nombres_completos" value="{{ old('nombres_completos',$autoridad->nombres_completos??'') }}" class="form-control" id="nombres_completos">
                        </div>
                        <div class="form-group">
                            <label for="rol">rol</label>
                            <input type="text" name="rol" value="{{ old('rol',$autoridad->rol??'') }}" class="form-control" id="rol">
                        </div>
                        <div class="form-group">
                            <label for="frase">Frase</label>
                            <input type="text" name="frase" value="{{ old('frase',$autoridad->frase??'') }}" class="form-control" id="frase">
                        </div>
                        <div class="form-group">
                            <label for="logro_1">Logro 1</label>
                            <input type="text" name="logro_1" value="{{ old('logro_1',$autoridad->logro_1??'') }}" class="form-control" id="logro_1">
                        </div>
                        <div class="form-group">
                            <label for="logro_2">Logro 2</label>
                            <input type="text" name="logro_2" value="{{ old('logro_2',$autoridad->logro_2??'') }}" class="form-control" id="logro_2">
                        </div>
                        <div class="form-group">
                            <label for="logro_3">Logro 3</label>
                            <input type="logro_3" name="logro_3" value="{{ old('logro_3',$autoridad->logro_3??'') }}" class="form-control" id="logro_3">
                        </div>
                        <div class="form-group">
                            <label for="logro_4">Logro 4</label>
                            <input type="logro_4" name="logro_4" value="{{ old('logro_4',$autoridad->logro_4??'') }}" class="form-control" id="logro_4">
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" name="foto" class="form-control-file" id="foto">
                        </div>
                        <div class="form-group">
                            <label for="anio_experiencia">Año de experiencia</label>
                            <input type="number" name="anio_experiencia" value="{{ old('anio_experiencia',$autoridad->anio_experiencia??'') }}" class="form-control" id="anio_experiencia">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
                
            </div>
        </div>
        <div class="col-md-6">

        </div>
        <div class="col-md-6">

        </div>
    </div>
</div>
@endsection
