@extends('layouts.app')
@section('content')

<section class="page-title-area text-white bg_cover" style="background-image: url({{ asset('assets/images/bg/page-bg-1.jpg') }});">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">{{ $tranparencia->nombre??'' }}</h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ route('welcome') }}">Inicio</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Transparencia</span>
            </div>
        </div>
    </div>
</section><!--====== End Page-title-area section ======-->
<section class="faq-section pt-95">
    <div class="container">
        <div class="accordion" id="accordionOne">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-content-box wow fadeInLeft">
                        @foreach ($meses as $mes)
                            <div class="accordion-card mb-15">
                                <div class="accordion-header">
                                    <h6 class="accordion-title collapsed" data-toggle="collapse" data-target="#collapse{{ $mes->id }}" aria-expanded="false">
                                        {{ $mes->nombre }}
                                    </h6>
                                </div>
                                <div id="collapse{{ $mes->id }}" class="accordion-collapse collapse" data-parent="#accordionOne">
                                    <div class="accordion-body">
                                        @php
                                            $archivos=$mes->archivos()->where('transparencia_id',$tranparencia->id)->get();
                                        @endphp
                                        @if ($archivos->count()>0)

                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Archivo</th>
                                                        <th scope="col">Ver</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                        
                                                    @foreach ($archivos as $arc)
                                                        <tr class="">
                                                            <td scope="row">{{ $arc->titulo_archivo }}</td>
                                                            <td style="width: 10%;">
                                                                <a target="_blank" class="btn btn-success btn-sm btn-block" href="{{ asset(Storage::url($arc->archivo)) }}">Ver <i class="fas fa-file-pdf"></i></a>
                                                            </td>
                                                        </tr>    
                                                    @endforeach
                                                    

                                                </tbody>
                                            </table>
                                        </div>
                                        


                                        @endif
                                       
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection