
<div class="hero-slider-two">
    <!--====== Single Slider ======-->
    @foreach ($sliders as $sl)
        <div class="single-slider">
            {{-- assets/images/hero/hero_two-slider-1.jpg --}}
            <div class="image-layer bg_cover" style="background-image: url({{ asset(Storage::url($sl->fondo)) }});"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <!--====== Hero Content ======-->
                        <div class="hero-content text-center">
                            
                            @if ($sl->titulo_1)
                                <span class="sub-title" data-animation="fadeInUp" data-delay=".4s">{{ $sl->titulo_1 }}</span>    
                            @endif
                            
                            @if ($sl->titulo_2)
                                <h1 data-animation="fadeInDown" data-delay=".5s">{{ $sl->titulo_2 }}</h1>
                            @endif

                            @if ($sl->descripcion)
                            <p data-animation="fadeInUp" data-delay=".6s">{{ $sl->descripcion }}</p>
                            @endif
                            
                            
                            @if ($sl->url_explorar_mas)
                                <div class="hero-button mb-30" data-animation="fadeInDown" data-delay=".7s">
                                    <a href="{{ $sl->url_explorar_mas }}" class="main-btn golden-btn mb-10">Explorar más</a>
                                </div>    
                            @endif
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    
  
</div>