<div class="about-bg bg_cover wow fadeInLeft" style="background-image: url({{ asset(Storage::url($autoridad->foto)) }});"></div>
<div class="container">
    <div class="row align-items-center justify-content-end">
        <div class="col-lg-6">
            <!--====== About Content Box ======-->
            <div class="about-two_content-box pb-80 wow fadeInRight">
                <div class="section-title">
                    <div class="section-title mb-50">
                        <span class="sub-title"><i class="flaticon-plant"></i>{{ $autoridad->rol }}</span>
                        <h2>{{ $autoridad->nombres_completos }}</h2>
                    </div>
                    <p class="mb-45">{{ $autoridad->frase }}</p>
                    <div class="about-inner-content d-flex justify-content-between">
                        <div class="inner-content">
                            <ul class="check-style-one mb-45">
                                <li><i class="far fa-check"></i>{{ $autoridad->logro_1 }}</li>
                                <li><i class="far fa-check"></i>{{ $autoridad->logro_2 }}</li>
                                <li><i class="far fa-check"></i>{{ $autoridad->logro_3 }}</li>
                                <li><i class="far fa-check"></i>{{ $autoridad->logro_4 }}</li>
                            </ul>
                            
                        </div>
                        <div class="experience-box-two">
                            <h2 class="number"><span class="count">{{ $autoridad->anio_experiencia }}</span>+</h2>
                            <h6>Años de experiencia</h6>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>