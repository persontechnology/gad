<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="Landscaping, Gardening, Florists, Groundskeeping">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--====== Title ======-->
        <title>{{ config('app.name', 'Laravel') }}</title>
         

        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/png">
        <!--====== Google Fonts ======-->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <!--====== Flaticon css ======-->
        <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/flaticon_gadden.css') }}">
        <!--====== FontAwesome css ======-->
        <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/all.min.css') }}">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
        <!--====== magnific-popup css ======-->
        <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/dist/magnific-popup.css') }}">
        <!--====== Slick-popup css ======-->
        <link rel="stylesheet" href="{{ asset('assets/vendor/slick/slick.css') }}">
        <!--====== Jquery UI css ======-->
        <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.css') }}">
        <!--====== Nice Select css ======-->
        <link rel="stylesheet" href="{{ asset('assets/vendor/nice-select/css/nice-select.css') }}">
        <!--====== Animate css ======-->
        <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css') }}">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    </head>
    <body>

        @php
            $empresa=App\Models\Empresa::first();
        @endphp

        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loader">
                <div class="pre-shadow"></div>
                <div class="pre-box"></div>
            </div>
        </div><!--====== End Preloader ======-->
        <!--====== Search From ======-->
		<div class="modal fade search-modal" id="search-modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form>
                        <div class="form_group">
                        	<input type="text" class="form_control" placeholder="Search here" name="search">
                        	<label><i class="fa fa-search"></i></label>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--====== Search From ======-->
        <!--====== Sidebar Wrapper ======-->
        <div class="modal fade sidebar-panel-wrapper" id="sidebar-modal">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <button class="close" data-dismiss="modal"><i class="far fa-times"></i></button>
                    <div class="sidebar-wrapper">
                        <div class="sidebar-information-area">
                            <div class="row no-gutters">
                                <div class="col-lg-4 sidebar-widget">
                                    <div class="sidebar-info-widget">
                                        <a href="index.html" class="footer-logo"><img src="assets/images/logo/logo-white.png" alt="Brand Logo"></a>
                                        <p>Sed ut perspiciatis unde omni natus voluptatem accusantium doloremque laudantium aperia maquep quae abillo
                                            inventore veritatis architecto</p>
                                        <div class="social-item">
                                            <h6>Follow Us</h6>
                                            <ul class="social-link">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 sidebar-widget">
                                    <div class="sidebar-info-widget">
                                        <h4 class="title">Get In Touch</h4>
                                        <div class="contact-info-item-two">
                                            <h6 class="title"><i class="far fa-map-marker-alt"></i>Location</h6>
                                            <p>558 Main Street, 2nd Block
                                                Melbourne, Australia</p>
                                        </div>
                                        <div class="contact-info-item-two">
                                            <h6 class="title"><i class="far fa-envelope-open"></i>Email Us</h6>
                                            <p><a href="/cdn-cgi/l/email-protection#70030500001f020430171d11191c5e131f1d"><span class="__cf_email__" data-cfemail="afdcdadfdfc0dddbefc8c2cec6c381ccc0c2">[email&#160;protected]</span></a></p>
                                        </div>
                                        <div class="contact-info-item-two">
                                            <h6 class="title"><i class="far fa-phone-plus"></i>Hotline</h6>
                                            <p><a href="tel:+000(123)45688">+000 (123) 456 88</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 sidebar-widget">
                                    <div class="sidebar-info-widget">
                                        <h4 class="title">Newsletter</h4>
                                        <form>
                                            <div class="form_group">
                                                <input type="email" class="form_control" placeholder="Email Address" required>
                                                <button class="main-btn secondary-btn">Subscribe Now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-gallery pt-80">
                            <div class="row">
                                <div class="col-lg-2 col-md-4 col-4">
                                    <div class="single-gallery-item">
                                        <div class="gallery-img">
                                            <img src="assets/images/gallery/sgl-1.jpg" alt="Gallery Image">
                                            <div class="hover-overlay">
                                                <a href="assets/images/gallery/sgl-1.jpg" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-4">
                                    <div class="single-gallery-item">
                                        <div class="gallery-img">
                                            <img src="assets/images/gallery/sgl-2.jpg" alt="Gallery Image">
                                            <div class="hover-overlay">
                                                <a href="assets/images/gallery/sgl-2.jpg" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-4">
                                    <div class="single-gallery-item">
                                        <div class="gallery-img">
                                            <img src="assets/images/gallery/sgl-3.jpg" alt="Gallery Image">
                                            <div class="hover-overlay">
                                                <a href="assets/images/gallery/sgl-3.jpg" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-4">
                                    <div class="single-gallery-item">
                                        <div class="gallery-img">
                                            <img src="assets/images/gallery/sgl-4.jpg" alt="Gallery Image">
                                            <div class="hover-overlay">
                                                <a href="assets/images/gallery/sgl-4.jpg" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-4">
                                    <div class="single-gallery-item">
                                        <div class="gallery-img">
                                            <img src="assets/images/gallery/sgl-5.jpg" alt="Gallery Image">
                                            <div class="hover-overlay">
                                                <a href="assets/images/gallery/sgl-6.jpg" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-4">
                                    <div class="single-gallery-item">
                                        <div class="gallery-img">
                                            <img src="assets/images/gallery/sgl-6.jpg" alt="Gallery Image">
                                            <div class="hover-overlay">
                                                <a href="assets/images/gallery/sgl-6.jpg" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--====== Sidebar Wrapper ======-->
        <!--====== Start Header ======-->
        <header class="header-area header-three">
            @include('sections.header-top-bar-two',['empresa'=>$empresa])
            <!--======= Header Navigation ======-->
            <div class="header-navigation main-bg navigation-white">
                <div class="nav-overlay"></div>
                <div class="container-fluid">
                    <!--======= Primary Menu ======-->
                    <div class="primary-menu">
                        <!--======= Site Branding ======-->
                        <div class="site-branding">
                            <a href="{{ url('/') }}" class="brand-logo"><img src="{{ asset(Storage::url($empresa->logo)) }}" alt=""></a>
                            <!-- <a href="index.html" class="sticky-logo"><img src="assets/images/logo/logo-white.png" alt="Site Logo"></a> -->
                        </div>
                        <!--======= Nav Menu ======-->
                        <div class="nav-menu">
                            <!-- Mobile Logo -->
                            <div class="mobile-logo mb-30 d-block d-xl-none text-center">
                                <a href="index.html" class="brand-logo"><img src="assets/images/logo/logo-black.png" alt="Site Logo"></a>
                            </div>
                            <!--=== Nav Search ===-->
                            <div class="nav-search mb-30 d-block d-xl-none ">
                                <form>
                                    <div class="form_group">
                                        <input type="email" class="form_control" placeholder="Search Here" name="email" required>
                                        <button class="search-btn"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!--=== Main menu ===-->
                            <nav class="main-menu">
                                @include('sections.main-menu')
                            </nav>
                            <!--====== Menu Button ======-->
                            <div class="menu-button mt-40 d-xl-none">
                                <a href="contact.html" class="main-btn secondary-btn">Get a Quote</a>
                            </div>
                        </div>
                        <!--======= Nav Right Item ======-->
                        <div class="nav-right-item d-flex align-items-center">
                            
                            <div class="lang-dropdown">
                                <select class="wide">
                                    <option value="English">English</option>
                                    <option value="French">French</option>
                                </select>
                            </div>

                            <div class="search-btn" data-toggle="modal" data-target="#search-modal"><i class="far fa-search"></i></div>
                            
                            <div class="menu-button d-xl-block d-none">
                                <a href="contact.html" class="main-btn secondary-btn">Book now</a>
                            </div>

                            <div class="bar-button" data-toggle="modal" data-target="#sidebar-modal"><img src="assets/images/bar2.png" alt="Image"></div>
                            <div class="navbar-toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main>
            @yield('content')
        </main>
        

        <footer class="footer-area footer-wave pt-100 p-r z-1">
            <div class="wave-shapes">
                <img src="{{ asset('assets/images/shape/wave-shape-1.png') }}" class="w-shape one" alt="wave shape">
                <img src="{{ asset('assets/images/shape/wave-shape-2.png') }}" class="w-shape two" alt="wave shape">
            </div>
            <div class="footer-wrapper text-white main-bg p-r z-1">
                
                <div class="container">
                    <!--====== Footer Widget ======-->
                    <div class="footer-widget-area pt-55 pb-40 p-r z-1">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <!--====== Footer Widget ======-->
                                <div class="footer-widget footer-about-widget mb-40 pr-lg-70 wow fadeInDown">
                                    <div class="widget-content">
                                        <div class="footer-logo mb-25">
                                            <a href="index.html"><img src="{{ asset(Storage::url($empresa->logo)) }}" alt="Logo"></a>
                                        </div>
                                        <p>
                                            {{ $empresa->descripcion }}
                                        </p>
                                        <a href="contact.html" class="main-btn filled-btn filled-white">Contacto</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <!--====== Footer Widget ======-->
                                <div class="footer-widget contact-info-widget mb-40 wow fadeInUp">
                                    <h4 class="widget-title">Ponerse en contacto</h4>
                                    <div class="widget-content">
                                        <ul class="info-list">
                                            <li>{{ $empresa->direccion }}</li>
                                            <li><a href="mailto:{{ $empresa->email }}"><span class="__cf_email__">{{ $empresa->email }}</span></a></li>
                                            <li><a href="tel:{{ $empresa->telefono }}">{{ $empresa->telefono }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12">
                                <!--====== Footer Widget ======-->
                                <div class="footer-widget footer-nav-widget mb-40 wow fadeInDown">
                                    <h4 class="widget-title">Enlace rápido</h4>
                                    <div class="widget-content">
                                        <ul class="footer-nav">
                                            <li><a href="#">El cantón</a></li>
                                            <li><a href="#">Municipalidad</a></li>
                                            <li><a href="#">Noticias</a></li>
                                            <li><a href="#">Contacto</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!--====== Footer Widget ======-->
                                <div class="footer-widget footer-gallery-widget float-lg-right mb-40 wow fadeInUp">
                                    <h4 class="widget-title">Galería</h4>
                                    <div class="widget-content">
                                        <ul class="gallery-list">
                                            <li>
                                                <a href="#">
                                                    <img src="assets/images/gallery/thumb-widget-1.jpg" alt="Image">
                                                    <div class="hover-overlay">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="assets/images/gallery/thumb-widget-2.jpg" alt="Image">
                                                    <div class="hover-overlay">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="assets/images/gallery/thumb-widget-3.jpg" alt="Image">
                                                    <div class="hover-overlay">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="assets/images/gallery/thumb-widget-4.jpg" alt="Image">
                                                    <div class="hover-overlay">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="assets/images/gallery/thumb-widget-5.jpg" alt="Image">
                                                    <div class="hover-overlay">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="assets/images/gallery/thumb-widget-6.jpg" alt="Image">
                                                    <div class="hover-overlay">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=== Copyright Area ===-->
                    <div class="copyright-area">
                        <div class="row">
                            <div class="col-lg-6">
                                <!--====== Copyright Text ======-->
                                <div class="copyright-text">
                                    <p>Copy&copy; {{ date('Y') }} <a href="https://persontechnology.com/">Person Technology.</a> Todos derechos reservados.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!--====== Copyright Nav ======-->
                                <div class="copyright-nav float-lg-right">
                                    <ul>
                                        <li><a href="#">Setting & Privacy</a></li>
                                        <li><a href="#">Faqs</a></li>
                                        <li><a href="#">Food Menu</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </footer><!--====== End Footer ======-->
        <!--====== Back To Top  ======-->
        <a href="#" class="back-to-top" ><i class="far fa-angle-up"></i></a>
        <!--====== Jquery js ======-->
        <script src="{{ asset('assets/vendor/jquery-3.6.0.min.js') }}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{ asset('assets/vendor/popper/popper.min.js') }}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <!--====== Slick js ======-->
        <script src="{{ asset('assets/vendor/slick/slick.min.js') }}"></script>
        <!--====== Magnific js ======-->
        <script src="{{ asset('assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
        <!--====== Isotope js ======-->
        <script src="{{ asset('assets/vendor/isotope.min.js') }}"></script>
        <!--====== Imagesloaded js ======-->
        <script src="{{ asset('assets/vendor/imagesloaded.min.js') }}"></script>
        <!--====== Counterup js ======-->
        <script src="{{ asset('assets/vendor/jquery.counterup.min.js') }}"></script>
        <!--====== Waypoints js ======-->
        <script src="{{ asset('assets/vendor/jquery.waypoints.js') }}"></script>
        <!--====== Nice-select js ======-->
        <script src="{{ asset('assets/vendor/nice-select/js/jquery.nice-select.min.js') }}"></script>
        <!--====== jquery UI js ======-->
        <script src="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
        <!--====== WOW js ======-->
        <script src="{{ asset('assets/vendor/TweenMax.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery.wavify.js') }}"></script>
        <!--====== WOW js ======-->
        <script src="{{ asset('assets/vendor/wow.min.js') }}"></script>
        <!--====== Main js ======-->
        <script src="{{ asset('assets/js/theme.js') }}"></script>
    </body>
</html>