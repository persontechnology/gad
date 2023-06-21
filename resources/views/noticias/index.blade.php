@extends('layouts.app')

@section('content')
    <!--====== Start Page-title-area section ======-->
    <section class="page-title-area text-white bg_cover" style="background-image: url(assets/images/bg/page-bg-1.jpg);">
        <div class="container">
            <!--======  Page-title-Inner ======-->
            <div class="page-title-inner text-center">
                <h1 class="page-title">Últimas noticias</h1>
                <div class="gd-breadcrumb">
                    <span class="breadcrumb-entry"><a href="{{ route('welcome') }}">Inicio</a></span>
                    <span class="separator"></span>
                    <span class="breadcrumb-entry active">Noticias</span>
                </div>
            </div>
        </div>
    </section><!--====== End Page-title-area section ======-->
    <section class="blog-standard-section pt-100 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-standard-wrapper">
                        @foreach ($noticias as $item)
                            <div class="single-blog-post-three mb-30 wow fadeInUp">
                                <div class="post-thumbnail">
                                    @if ($item->foto)
                                    <img src="{{ asset(Storage::url($item->foto)) }}" alt="Post Image">
                                    @else
                                    <img src="{{ asset('assets/images/blog/blog-7.jpg') }}" alt="Post Image">
                                    @endif
                                </div>
                                <div class="entry-content">
                                    <div class="post-meta">
                                        <span class="date"><a href="{{ route('noticias-detalle',$item->id) }}">{{ $item->updated_at->format('Y/m/d') }}</a></span>
                                        <span class="comment"><a href="{{ route('noticias-detalle',$item->id) }}">{{ $item->updated_at->diffForHumans() }}</a></span>
                                    </div>
                                    <h3 class="title"><a href="{{ route('noticias-detalle',$item->id) }}">{{ Str::limit($item->titulo,150,'...') }}</a></h3>
                                    <div class="author">
                                        
                                        <h6><span>Publicado por</span><a href="{{ route('noticias-detalle',$item->id) }}">{{ $item->user->name }}</a></h6>
                                    </div>
                                    
                                </div>
                            </div>    
                        @endforeach
                        
                        
                        {{ $noticias->links() }}
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar-widget-area">
                        <!--=== Search Widget ===-->
                        <div class="sidebar-widget widget-search gray-bg mb-40 wow fadeInUp">
                            <h4 class="widget-title">Search</h4>
                            <form>
                                <div class="form_group">
                                    <label><i class="far fa-search"></i></label>
                                    <input type="text" class="form_control" placeholder="Search" name="search" required>
                                </div>
                            </form>
                        </div>
                        <!--=== Author Widget ===-->
                        <div class="sidebar-widget widget-post-author mb-40 wow fadeInUp">
                            <div class="author-img">
                                <img src="assets/images/blog/author-1.jpg" alt="Author Image">
                            </div>
                            <div class="author-content text-center">
                                <div class="author-title-box">
                                    <h4>Jason C. Cavazos</h4>
                                    <span class="posiiton">CEO & Founder</span>
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium totam</p>
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--=== Category Widget ===-->
                        <div class="sidebar-widget widget-category gray-bg mb-40 wow fadeInUp">
                            <h4 class="widget-title">Category</h4>
                            <ul>
                                <li><a href="#">Yard Cleaning<i class="far fa-angle-double-right"></i></a></li>
                                <li><a href="#">Garden Makeup<i class="far fa-angle-double-right"></i></a></li>
                                <li><a href="#">Landscaping<i class="far fa-angle-double-right"></i></a></li>
                                <li><a href="#">Lawn Mowing<i class="far fa-angle-double-right"></i></a></li>
                                <li><a href="#">Decorative Plants<i class="far fa-angle-double-right"></i></a></li>
                                <li><a href="#">Yard Maintenance<i class="far fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                        <!--=== Recent Post Widget ===-->
                        <div class="sidebar-widget widget-recent-post mb-40 wow fadeInUp">
                            <h4 class="widget-title">Recent News</h4>
                            <ul class="recent-post-list">
                                <li class="post-thumbnail-content">
                                    <img src="assets/images/blog/post-thumb-1.jpg" alt="post thumb">
                                    <div class="post-title-date">
                                        <span class="posted-on"><a href="#">25 Dec 2022</a></span>
                                        <h6><a href="blog-details.html">Build Progre Enhany
                                            Acces Filterable</a></h6>
                                    </div>
                                </li>
                                <li class="post-thumbnail-content">
                                    <img src="assets/images/blog/post-thumb-2.jpg" alt="post thumb">
                                    <div class="post-title-date">
                                        <span class="posted-on"><a href="#">25 Dec 2022</a></span>
                                        <h6><a href="blog-details.html">JavaScript Requirem
                                            For Acces ponen</a></h6>
                                    </div>
                                </li>
                                <li class="post-thumbnail-content">
                                    <img src="assets/images/blog/post-thumb-3.jpg" alt="post thumb">
                                    <div class="post-title-date">
                                        <span class="posted-on"><a href="#">25 Dec 2022</a></span>
                                        <h6><a href="blog-details.html">Build Progre Enhany
                                            Acces Filterable</a></h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--=== Banner Widget ===-->
                        <div class="sidebar-widget widget-banner mb-40 wow fadeInUp">
                            <div class="banner-content text-white">
                                <h3 class="title">Looking For 
                                    Special Gardener!</h3>
                                <p>You’re in right place</p>
                                <a href="contact.html" class="main-btn secondary-btn">Contact Us</a>
                                <img src="assets/images/sidebar/b-w-1.png" alt="Banner Image">
                            </div>
                        </div>
                        <!--=== Tag Widget ===-->
                        <div class="sidebar-widget widget-tag-cloud mb-40 wow fadeInUp">
                            <h4 class="widget-title">Tags</h4>
                            <a href="#">Gardening</a>
                            <a href="#">Landscaping</a>
                            <a href="#">Plants</a>
                            <a href="#">Trimming</a>
                            <a href="#">Yard</a>
                            <a href="#">Yard Maintenance</a>
                            <a href="#">Tree</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection