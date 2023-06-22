@extends('layouts.app')
@section('content')
<section class="page-title-area text-white bg_cover" style="background-image: url({{ asset('assets/images/bg/page-bg-1.jpg') }});">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Contacto</h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ route('welcome') }}">Inicio</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Contacto</span>
            </div>
        </div>
    </div>
</section><!--====== End Page-title-area section ======-->
<!--====== Start Contact Info section ======-->
<section class="contact-info-section pt-100">
    <div class="container">
        <div class="contact-info-wrapper wow fadeInUp">
            <div class="row no-gutters justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <!--====== Contact Info Item ======-->
                    <div class="contact-info-item text-center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/icon/icon-1.png') }}" alt="icon">
                        </div>
                        <div class="info">
                            <span class="title">Dirección</span>
                            <h6>{{ $empresa->direccion }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!--====== Contact Info Item ======-->
                    <div class="contact-info-item text-center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/icon/icon-2.png') }}" alt="icon">
                        </div>
                        <div class="info">
                            <span class="title">Email Address</span>
                            <h6><a href="mailto:{{ $empresa->email }}"><span class="__cf_email__">{{ $empresa->email }}</span></a></h6>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!--====== Contact Info Item ======-->
                    <div class="contact-info-item text-center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/icon/icon-3.png') }}" alt="icon">
                        </div>
                        <div class="info">
                            <span class="title">WhatsApp</span>
                            <h6><a href="tel:{{ $empresa->telefono }}">{{ $empresa->telefono }}</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-section pt-95 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <!--====== Section-title ======-->
                <div class="section-title wow fadeInRight mb-50">
                    <span class="sub-title"><i class="flaticon-plant"></i>Contact Us</span>
                    <h2>Ready to Work 
                        With Us</h2>
                </div>
            </div>
        </div>
        <div class="contact-wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <!--=== Map Box ===-->
                    <div class="map-box wow fadeInLeft mb-50">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7975.039109654753!2d-77.99617061337104!3d-1.9450432421492312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d226275460f64f%3A0x75a0b93881140684!2sHuamboya!5e0!3m2!1ses!2sec!4v1687452980899!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!--====== Contact Form Wrapper ======-->
                    <div class="contact-form-wrapper mb-50 wow fadeInRight">
                        <form class="contact-form" method="POST" action="{{ route('contactoEnviar') }}">
                            @csrf
                            <div class="form_group">
                                <label><i class="far fa-user"></i></label>
                                <input type="text" class="form_control" placeholder="Nombres y apellidos" name="name" required>
                            </div>
                            <div class="form_group">
                                <label><i class="far fa-envelope"></i></label>
                                <input type="email" class="form_control" placeholder="Correo Electrónico" name="email" required>
                            </div>
                            <div class="form_group">
                                <label><i class="far fa-phone-plus"></i></label>
                                <input type="text" class="form_control" placeholder="Número teléfonico" name="number" required>
                            </div>
                            <div class="form_group">
                                <label><i class="far fa-map-marker-exclamation"></i></label>
                                <input type="text" class="form_control" placeholder="Asunto" name="subject" required>
                            </div>
                            <div class="form_group">
                                <label><i class="far fa-pen-fancy"></i></label>
                                <textarea class="form_control" rows="3" placeholder="Detalle su mensaje" name="message"></textarea>
                            </div>
                            <div class="form_group">
                                <button class="main-btn primary-btn">Enviar mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection