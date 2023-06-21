@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Slider
                </div>
                <div class="card-body">
                    <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      
                        <div class="form-group">
                            <label for="titulo_1">Título 1</label>
                            <input type="text" name="titulo_1" value="{{ old('titulo_1') }}" class="form-control" id="titulo_1">
                        </div>
                        <div class="form-group">
                            <label for="titulo_2">Título 2</label>
                            <input type="text" name="titulo_2" value="{{ old('titulo_2') }}" class="form-control" id="titulo_2">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">descripcion</label>
                            <input type="text" name="descripcion" value="{{ old('descripcion',$empresa->descripcion??'') }}" class="form-control" id="descripcion">
                        </div>

                        <div class="form-group">
                            <label for="url_explorar_mas">Url explorar más</label>
                            <input type="url" name="url_explorar_mas" value="{{ old('url_explorar_mas') }}" class="form-control" id="url_explorar_mas">
                        </div>
                        
                        <div class="form-group">
                            <label for="fondo">Imagen de fondo</label>
                            <input type="file" name="fondo" class="form-control-file" id="fondo">
                            <i>Formato: Anchura=1920,Altura=870|.png .jpg .jpeg</i>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
                
            </div>
        </div>
        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Título 1</th>
                            <th scope="col">Título 2</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Url explorar más</th>
                            <th scope="col">Vista</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $sl)
                        <tr class="">
                            
                            <td>{{ $sl->titulo_1 }}</td>
                            <td>{{ $sl->titulo_2 }}</td>
                            <td>{{ $sl->descripcion }}</td>
                            <td>
                                <a href="{{ $sl->url_explorar_mas }}">URL</a>
                            </td>
                            <td>
                                <form action="{{ route('slider.update',$sl) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <select class="form-control" onchange="this.form.submit()">
                                        <option value="SI" {{ $sl->vista==='SI'?'selected':'' }}>SI</option>
                                        <option value="NO" {{ $sl->vista==='NO'?'selected':'' }}>NO</option>
                                      </select>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('slider.destroy',$sl) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">X</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
        <div class="col-md-6">

        </div>
        <div class="col-md-6">

        </div>
    </div>
</div>

<script>
    function cambiarVista(arg){
        $(arg).submit();
    }
</script>
@endsection
