@extends('layouts.app')
@section('content')
<section class="page-title-area text-white bg_cover" style="background-image: url({{ asset('assets/images/bg/page-bg-1.jpg') }});">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Detalle de la noticia</h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ route('welcome') }}">Inicio</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry"><a href="{{ route('noticias') }}">Noticia</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Detalle de la noticia</span>
            </div>
        </div>
    </div>
</section><!--====== End Page-title-area section ======-->
<!--====== Start Blog Details section ======-->
<section class="blog-details-section pt-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <!--=== Blog Details Wrapper ===-->
                <div class="blog-details-wrapper">
                    <!--=== Blog Post ===-->
                    <div class="blog-post wow fadeInUp">
                        <div class="post-meta">
                            <span class="author"><a href="{{ route('noticias-detalle',$noticia->id) }}"><span>Publicado por</span> {{ $noticia->user->name }}</a></span>
                            <span class="date"><a href="{{ route('noticias-detalle',$noticia->id) }}">{{ $noticia->updated_at->format('Y/m/d') }}</a></span>
                            <span class="comment"><a href="{{ route('noticias-detalle',$noticia->id) }}">{{ $noticia->updated_at->diffForHumans() }}</a></span>
                        </div>
                        <div class="entry-content">
                            <h3 class="title">{{ $noticia->titulo }}</h3>
                            @if ($noticia->foto)
                            <div class="block-image text-center"><img src="{{ asset(Storage::url($noticia->foto)) }}" alt="Post Image"></div>
                            @endif
                            <div>
                                {!! html_entity_decode($noticia->detalle) !!}
                            </div>
                        </div>
                        
                    </div>
                  
                </div>
            </div>
            
        </div>
    </div>
</section>
@endsection