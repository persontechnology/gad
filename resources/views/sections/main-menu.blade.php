<ul>
    @auth
        <li class="menu-item has-children"><a href="#">Administración</a>
            <ul class="sub-menu">
                <li><a href="{{ route('noticias-admin.index') }}">Noticias</a></li>
                <li><a href="{{ route('slider.index') }}">Slider</a></li>
                <li><a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Salir</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </ul>
        </li>
    @else
        <li class="menu-item {{ Route::is('welcome')?'border-bottom':'' }}"><a href="{{ url('/') }}">Inicio</a></li>
        <li class="menu-item has-children"><a href="#">El cantoń</a>
            <ul class="sub-menu">
                <li><a href="service.html">Our Service</a></li>
                <li><a href="service-details.html">Service Details</a></li>
            </ul>
        </li>
        <li class="menu-item has-children"><a href="#">Municipalidad</a>
            <ul class="sub-menu">
                <li><a href="project-grid.html">Misión</a></li>
                <li><a href="project-grid-2-column.html">Visión</a></li>
                <li><a href="project-masonry.html">Valores</a></li>
                <li><a href="project-details.html">Organigrama</a></li>
            </ul>
        </li>
        <li class="menu-item has-children"><a href="#">Transparencia</a>
            <ul class="sub-menu">
                <li><a href="blog-standard.html">Blog Standard</a></li>
                <li><a href="blog-details.html">Blog Details</a></li>
            </ul>
        </li>
        <li class="menu-item"><a href="{{ route('noticias') }}">Noticias</a></li>
        <li class="menu-item"><a href="{{ route('login') }}">Login</a></li>
    @endauth
</ul>