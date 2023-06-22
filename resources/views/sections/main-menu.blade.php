<ul>
    @auth
        <li class="menu-item has-children"><a href="#">Administración</a>
            <ul class="sub-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('transparencia-admin.index') }}">Transparencia & Rendición de Cuentas</a></li>
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
       
        <li class="menu-item has-children"><a href="#">Municipalidad</a>
            <ul class="sub-menu">
                <li><a href="{{ route('misionvision') }}">Misión y Visión</a></li>
                <li><a href="project-masonry.html">Valores</a></li>
                <li><a href="project-details.html">Organigrama</a></li>
            </ul>
        </li>
        <li class="menu-item has-children"><a href="#">Transparencia</a>
            <ul class="sub-menu">
                @foreach (App\Models\Transparencia::where('tipo','Transparencia')->orderBy('nombre','desc')->get() as $tra)
                <li><a href="{{ route('transparencia',$tra->id) }}">{{ $tra->nombre }}</a></li>
                @endforeach
            </ul>
        </li>
        <li class="menu-item has-children"><a href="#">Rendición de cuentas</a>
            <ul class="sub-menu">
                @foreach (App\Models\Transparencia::where('tipo','Rendición de cuentas')->orderBy('nombre','desc')->get() as $tra)
                <li><a href="{{ route('transparencia',$tra->id) }}">{{ $tra->nombre }}</a></li>
                @endforeach
            </ul>
        </li>
        <li class="menu-item"><a href="{{ route('noticias') }}">Noticias</a></li>
        <li class="menu-item"><a href="{{ route('login') }}">Ingresar</a></li>
    @endauth
</ul>