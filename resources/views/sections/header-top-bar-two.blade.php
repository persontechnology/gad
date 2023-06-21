<div class="header-top-bar-two white-bg d-none d-xl-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <!--====== Top Left ======-->
                <div class="top-left">
                    <span><i class="far fa-envelope"></i><b class="title">Email :</b><a href="mailto:{{ $empresa->email??'' }}"><span class="__cf_email__">{{ $empresa->email??'' }}</span></a></span>
                    <span><i class="far fa-phone-plus"></i><b class="title">WhatsApp :</b><a href="tel:{{ $empresa->telefono??'' }}">{{ $empresa->telefono??'' }}</a></span>
                    <span><i class="far fa-map-marker-alt"></i><b class="title">Dirección :</b>{{ $empresa->direccion??'' }}</span>
                </div>
            </div>
            <div class="col-lg-4">
                <!--====== Top Right ======-->
                <div class="top-right float-lg-right">
                    <ul class="social-link">
                        <li><a target="_blank" href="{{ $empresa->facebook??'' }}">Facebook</a></li>
                        <li><a target="_blank" href="{{ $empresa->twitter??'' }}">Twitter</a></li>
                        <li><a target="_blank" href="{{ $empresa->instagram??'' }}">Instagram</a></li>
                        <li><a target="_blank" href="{{ $empresa->youtube??'' }}">YouTube</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>