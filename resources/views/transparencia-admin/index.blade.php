@extends('layouts.app')

@section('content')



<div class="container mt-2">
    <div class="row">
        
        
        <div class="col-md-6 my-2">
            <div class="card">
                <div class="card-header">
                    Archivos
                </div>
                <div class="card-body">
                    <form action="{{ route('guardar-archivo-transparencia') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="transparencia">Seleccione Transparencia</label>
                                <div class="select">
                                    <select class="wide standard-select" name="transparencia" id="transparencia" required>
                                        @foreach ($transparencias as $tra)
                                            <option value="{{ $tra->id }}">{{ $tra->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mes">Seleccione mes</label>
                                <div class="select">
                                    <select class="wide standard-select" name="mes" id="mes" required>
                                        @foreach ($meses as $mes)
                                            <option value="{{ $mes->id }}">{{ $mes->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nombre">Título del archivo</label>
                            <input type="text" name="nombre" value="{{ old('nombre') }}" class="form-control" id="nombre">
                        </div>

                        <div class="form-group">
                            <label for="archivo">Seleccione el archivo .PDF</label>
                            <input type="file" name="archivo" accept="application/pdf" class="form-control-file" id="archivo">
                            <i>Formato: .PDF</i>
                        </div>
                        

                        <button class="btn btn-primary">Guardar</button>
                    </form>

                </div>
                
            </div>
        </div>
        
        <div class="col-md-6 my-2" >
           <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Tipo</th>
                        <th scope="col">Mes</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Archivo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($archivos as $ar)
                    <tr class="">
                        <td scope="row">{{ $ar->transparencia->tipo }}</td>
                        <td>{{ $ar->mes->nombre }}</td>
                        <td>{{ $ar->titulo_archivo }}</td>
                        <td>
                            @if ($ar->archivo)
                            <a href="{{ asset(Storage::url($ar->archivo)) }}">ver</a>
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('eliminar-archivo-transparencia',$ar->id) }}" method="post">
                                @csrf
                                <button class="btn btn-danger" type="submit">X</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
           </div>
           
        </div>
        <div class="col-md-6 my-2">
            <div class="card">
                <div class="card-header">
                    Transparencia & Rendicion de cuentas
                </div>
                <div class="card-body">
                    <form action="{{ route('transparencia-admin.store') }}" method="POST">
                        @csrf

                        <div class="form-group ">
                            <label for="transparencia">Seleccione Transparencia</label>
                            <div class="select">
                                <select class="wide standard-select" name="tipo" id="tipo" required>
                                    <option value="Transparencia">Transparencia</option>
                                    <option value="Rendición de cuentas">Rendición de cuentas</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" value="{{ old('nombre') }}" class="form-control" id="nombre" required>
                        </div>
                        

                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
<main style="height: 250px;"></main>

<script>
    function cambiarVista(arg){
        $(arg).submit();
    }
</script>

<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'detalle' );
</script>
@endsection
