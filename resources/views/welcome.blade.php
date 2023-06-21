@extends('layouts.app')

@section('content')
    <!--====== Start Banner Section ======-->
    <section class="banner-section">
        <!--====== Hero Wrapper ======-->
        <div class="hero-wrapper-three">
            <div class="hero-waves">
                <img src="{{ asset('assets/images/hero/bg-2.png') }}" class="waves one" alt="">
                <img src="{{ asset('assets/images/hero/bg.png') }}" class="waves two" alt="">
            </div>
            <!--====== Hero Slider ======-->
            @include('sections.hero-slider',['sliders'=>$sliders])
        </div>
    </section><!--====== End Banner Section ======-->
    <!--====== Start Features Section ======-->
    {{-- <section class="features-section pt-95">
        <div class="container">
            <div class="row align-items-xl-center">
                <div class="col-lg-6">
                    <div class="section-title mb-55 wow fadeInLeft">
                        <span class="sub-title"><i class="flaticon-plant"></i>What We Do For Gardening</span>
                        <h2>We Care Your Garden
                            & Landscaping</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="features-content-box mb-55 wow fadeInRight">
                        <p>Sed perspiciatis unde omnis isnatu volunteer accusantium doloremque laudantium totam rem apeira eaque ipsa quae ab
                            eillo inventore veritatis et quasi architecto beatae vitae</p>
                        <a href="about.html" class="btn-link">Learn More<i class="far fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="features-thumb-item-two mb-40 wow fadeInDown" data-wow-delay=".2s">
                        <div class="thumb">
                            <img src="assets/images/features/features-6.jpg" alt="Image">
                        </div>
                        <div class="text">
                            <div class="icon">
                                <i class="flaticon-landscape-1"></i>
                            </div>
                            <h5 class="title">Gardens</h5>
                            <p>Sed perspiciatis unde omnis
                                volunteer accusantium</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="features-thumb-item-two mb-40 wow fadeInUp" data-wow-delay=".25s">
                        <div class="thumb">
                            <img src="assets/images/features/features-7.jpg" alt="Image">
                        </div>
                        <div class="text">
                            <div class="icon">
                                <i class="flaticon-watering-can"></i>
                            </div>
                            <h5 class="title">Urbans</h5>
                            <p>Sed perspiciatis unde omnis
                                volunteer accusantium</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="features-thumb-item-two mb-40 wow fadeInDown" data-wow-delay=".3s">
                        <div class="thumb">
                            <img src="assets/images/features/features-8.jpg" alt="Image">
                        </div>
                        <div class="text">
                            <div class="icon">
                                <i class="flaticon-lawnmower"></i>
                            </div>
                            <h5 class="title">Maintenance</h5>
                            <p>Sed perspiciatis unde omnis
                                volunteer accusantium</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="features-thumb-item-two mb-40 wow fadeInUp" data-wow-delay=".35s">
                        <div class="thumb">
                            <img src="assets/images/features/features-9.jpg" alt="Image">
                        </div>
                        <div class="text">
                            <div class="icon">
                                <i class="flaticon-spider-plant"></i>
                            </div>
                            <h5 class="title">Event & Programs</h5>
                            <p>Sed perspiciatis unde omnis
                                volunteer accusantium</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--====== End Features Section ======-->
    <!--====== Start About Section ======-->
    <section class="about-bg-section">
        <!--====== About BG ======-->
        @include('sections.about-bg',['autoridad'=>$autoridad])
    </section><!--====== End About Section ======-->
    <!--====== Start Service Section ======-->
    <section class="service-bgc-section p-r z-1 main-bg pt-150 pb-70">
        <div class="shape shape-one"><span><img src="assets/images/shape/leaf-1.png" alt="Leaf Png"></span></div>
        <div class="shape shape-two"><span><img src="assets/images/shape/leaf-2.png" alt="Leaf Png"></span></div>
        <div class="shape shape-three"><span><img src="assets/images/shape/leaf-3.png" alt="Leaf Png"></span></div>
        <div class="container">
            {{-- <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-12">
                    <!--====== Section Title ======-->
                    <div class="section-title text-white text-center mb-50 wow fadeInDown">
                        <span class="sub-title"><i class="flaticon-plant"></i>ADMINISTRACIÓN</span>
                        <h2>2023</h2>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="row">
                <div class="col-xl-4 col-lg-6 col-sm-12">
                    <!--====== Service Item ======-->
                    <div class="single-service-item mb-30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-info">
                            <div class="shape icon-shape"><i class="flaticon-agriculture"></i></div>
                            <div class="icon">
                                <i class="flaticon-agriculture"></i>
                            </div>
                            <h4 class="title"><a href="service-details.html">Yard Cleaning</a></h4>
                        </div>
                        <div class="service-img">
                            <a href="service-details.html" class="icon-btn"><i class="far fa-plus"></i></a>
                            <img src="assets/images/service/sv-1.jpg" alt="Service Image">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-12">
                    <!--====== Service Item ======-->
                    <div class="single-service-item mb-30 wow fadeInDown" data-wow-delay=".25s">
                        <div class="service-info">
                            <div class="shape icon-shape"><i class="flaticon-field-1"></i></div>
                            <div class="icon">
                                <i class="flaticon-field-1"></i>
                            </div>
                            <h4 class="title"><a href="service-details.html">Garden Makeup</a></h4>
                        </div>
                        <div class="service-img">
                            <a href="service-details.html" class="icon-btn"><i class="far fa-plus"></i></a>
                            <img src="assets/images/service/sv-2.jpg" alt="Service Image">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-12">
                    <!--====== Service Item ======-->
                    <div class="single-service-item mb-30 wow fadeInUp" data-wow-delay=".3s">
                        <div class="service-info">
                            <div class="shape icon-shape"><i class="flaticon-farming"></i></div>
                            <div class="icon">
                                <i class="flaticon-farming"></i>
                            </div>
                            <h4 class="title"><a href="service-details.html">Landscaping</a></h4>
                        </div>
                        <div class="service-img">
                            <a href="service-details.html" class="icon-btn"><i class="far fa-plus"></i></a>
                            <img src="assets/images/service/sv-3.jpg" alt="Service Image">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-12">
                    <!--====== Service Item ======-->
                    <div class="single-service-item mb-30 wow fadeInDown" data-wow-delay=".35s">
                        <div class="service-info">
                            <div class="shape icon-shape"><i class="flaticon-park"></i></div>
                            <div class="icon">
                                <i class="flaticon-park"></i>
                            </div>
                            <h4 class="title"><a href="service-details.html">Lawn Mowing</a></h4>
                        </div>
                        <div class="service-img">
                            <a href="service-details.html" class="icon-btn"><i class="far fa-plus"></i></a>
                            <img src="assets/images/service/sv-4.jpg" alt="Service Image">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-12">
                    <!--====== Service Item ======-->
                    <div class="single-service-item mb-30 wow fadeInUp" data-wow-delay=".4s">
                        <div class="service-info">
                            <div class="shape icon-shape"><i class="flaticon-rake"></i></div>
                            <div class="icon">
                                <i class="flaticon-rake"></i>
                            </div>
                            <h4 class="title"><a href="service-details.html">Decorative Plants</a></h4>
                        </div>
                        <div class="service-img">
                            <a href="service-details.html" class="icon-btn"><i class="far fa-plus"></i></a>
                            <img src="assets/images/service/sv-5.jpg" alt="Service Image">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-12">
                    <!--====== Service Item ======-->
                    <div class="single-service-item mb-30 wow fadeInDown" data-wow-delay=".45s">
                        <div class="service-info">
                            <div class="shape icon-shape"><i class="flaticon-growth-1"></i></div>
                            <div class="icon">
                                <i class="flaticon-growth-1"></i>
                            </div>
                            <h4 class="title"><a href="service-details.html">Yard Maintaince</a></h4>
                        </div>
                        <div class="service-img">
                            <a href="service-details.html" class="icon-btn"><i class="far fa-plus"></i></a>
                            <img src="assets/images/service/sv-6.jpg" alt="Service Image">
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section><!--====== End Service Section ======-->
    <!--====== Start Skills Section  ======-->
    {{-- <section class="skills-section pt-100 pb-50">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-xl-6 col-lg-12">
                    <!--====== Skill Content Box ======-->
                    <div class="skill-content-box mb-35 mr-lg-50 wow fadeInLeft">
                        <!--====== Section-title ======-->
                        <div class="section-title mb-25">
                            <span class="sub-title"><i class="flaticon-plant"></i>We’re Skilled Full</span>
                            <h2>Experience Gardening
                                & Landscape Center</h2>
                        </div>
                        <p class="mb-30">Sed ut perspiciatis unde omnis iste natus voluptatem accusantiue doloremque laudantium totam rem aperiam, eaque ipsa quae abilloy inventore veritatis et quasi architecto beatae vitae dicta sunt</p>
                        <!--====== Skills List ======-->
                        <ul class="skills-list">
                            <li>
                                <div class="single-skill-bar mb-15">
                                    <h5 class="title">Gardening</h5>
                                    <div class="progress-bar">
                                        <div class="progress wow slideInLeft" style="width:89%"></div>
                                    </div>
                                    <span class="number">89%</span>
                                </div>
                            </li>
                            <li>
                                <div class="single-skill-bar mb-15">
                                    <h5 class="title">Landscape</h5>
                                    <div class="progress-bar">
                                        <div class="progress wow slideInLeft" style="width:83%"></div>
                                    </div>
                                    <span class="number">83%</span>
                                </div>
                            </li>
                            <li>
                                <div class="single-skill-bar mb-15">
                                    <h5 class="title">Maintenance</h5>
                                    <div class="progress-bar">
                                        <div class="progress wow slideInLeft" style="width:93%"></div>
                                    </div>
                                    <span class="number">93%</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <!--====== Skills Image Box ======-->
                    <div class="skill-two_image-box mb-20 p-r z-1 wow fadeInRight">
                        <img src="assets/images/skill/skill-4.jpg" class="skill-img-one" alt="Skill Image">
                        <img src="assets/images/skill/skill-5.jpg" class="skill-img-two" alt="Skill Image">
                        <div class="circle-logo">
                            <div class="inner-circle">
                                <i class="flaticon-carnivorous-plant"></i>
                                <h5>Gadden</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--====== End Skills Section  ======-->
    <!--====== Start CTA Section ======-->
    {{-- <section class="cta-section">
        <div class="container">
            <!--====== CTA Wrapper ======-->
            <div class="cta-wrapper pt-60 border-top-1">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <!--====== CTA Content Box ======-->
                        <div class="cta-content-box d-flex align-items-center mb-40 wow fadeInLeft">
                            <img src="assets/images/gallery/circle-logo.png" class="circle-logo" alt="Circle Logo">
                            <h2>Looking For a Experience
                                Garden Specialist?</h2>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <!--====== CTA Button ======-->
                        <div class="cta-button float-lg-right mb-40 wow fadeInRight">
                            <a href="team.html" class="main-btn golden-btn">Find Specialist</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--====== End CTA Section ======-->
    <!--====== Start Gallery Section ======-->
    {{-- <section class="gallery-section">
        <div class="container-fluid">
            <!--====== Gallery Slider ======-->
            <div class="projects-slider-two wow fadeInDown">
                <!--====== Project Item ======-->
                <div class="single-project-item-two">
                    <div class="project-img">
                        <img src="assets/images/gallery/gl-4.jpg" alt="Gallery Image">
                        <div class="project-overlay">
                            <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            <div class="hover-content text-white text-center">
                                <h3 class="title"><a href="product-details.html">Garden Caring</a></h3>
                                <p>Water The Plants</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== Project Item ======-->
                <div class="single-project-item-two">
                    <div class="project-img">
                        <img src="assets/images/gallery/gl-5.jpg" alt="Gallery Image">
                        <div class="project-overlay">
                            <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            <div class="hover-content text-white text-center">
                                <h3 class="title"><a href="product-details.html">Garden Caring</a></h3>
                                <p>Water The Plants</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== Project Item ======-->
                <div class="single-project-item-two">
                    <div class="project-img">
                        <img src="assets/images/gallery/gl-6.jpg" alt="Gallery Image">
                        <div class="project-overlay">
                            <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            <div class="hover-content text-white text-center">
                                <h3 class="title"><a href="product-details.html">Garden Caring</a></h3>
                                <p>Water The Plants</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== Project Item ======-->
                <div class="single-project-item-two">
                    <div class="project-img">
                        <img src="assets/images/gallery/gl-7.jpg" alt="Gallery Image">
                        <div class="project-overlay">
                            <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            <div class="hover-content text-white text-center">
                                <h3 class="title"><a href="product-details.html">Garden Caring</a></h3>
                                <p>Water The Plants</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== Project Item ======-->
                <div class="single-project-item-two">
                    <div class="project-img">
                        <img src="assets/images/gallery/gl-6.jpg" alt="Gallery Image">
                        <div class="project-overlay">
                            <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            <div class="hover-content text-white text-center">
                                <h3 class="title"><a href="product-details.html">Garden Caring</a></h3>
                                <p>Water The Plants</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--====== End Gallery Section ======-->
    <!--====== Start Pricing Section ======-->
    {{-- <section class="pricing-section pt-95 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-12">
                    <!--====== Section-title ======-->
                    <div class="section-title text-center mb-50 wow fadeInDown">
                        <span class="sub-title"><i class="flaticon-plant"></i>Pricing Plan</span>
                        <h2>Smart Pricing Package</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!--====== Pricing Item ======-->
                    <div class="single-pricing-item mb-40 wow fadeInUp" data-wow-delay=".2s">
                        <div class="pricing-img">
                            <img src="assets/images/pricing/pricing-1.jpg" alt="Pricing Image">
                        </div>
                        <div class="pricing-body">
                            <div class="shape shape-one"><span><img src="assets/images/pricing/leaf.png" alt="Image"></span></div>
                            <div class="pricing-title text-center mb-35">
                                <h3 class="title">Residential Package</h3>
                            </div>
                            <ul class="mb-35">
                                <li><i class="fas fa-badge-check"></i>Install a Patio or Pathway</li>
                                <li><i class="fas fa-badge-check"></i>Install Landscaping</li>
                                <li><i class="fas fa-badge-check"></i>Waterproof a Deck Costs</li>
                                <li><i class="fas fa-badge-check"></i>Remove a Tree Stump</li>
                            </ul>
                            <h2 class="price"><span class="currency">$</span>19.36<span class="duration">/Per Month</span></h2>
                            <div class="pricing-button text-center">
                                <a href="#" class="main-btn primary-btn">Choose Package</a>
                                <p>Get 23% Save For Services</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!--====== Pricing Item ======-->
                    <div class="single-pricing-item mb-40 wow fadeInUp" data-wow-delay=".25s">
                        <div class="pricing-img">
                            <img src="assets/images/pricing/pricing-2.jpg" alt="Pricing Image">
                        </div>
                        <div class="pricing-body">
                            <div class="shape shape-one"><span><img src="assets/images/pricing/leaf.png" alt="Image"></span></div>
                            <div class="pricing-title text-center mb-35">
                                <h3 class="title">Commercial Package</h3>
                            </div>
                            <ul class="mb-35">
                                <li><i class="fas fa-badge-check"></i>Install a Patio or Pathway</li>
                                <li><i class="fas fa-badge-check"></i>Install Landscaping</li>
                                <li><i class="fas fa-badge-check"></i>Waterproof a Deck Costs</li>
                                <li><i class="fas fa-badge-check"></i>Remove a Tree Stump</li>
                            </ul>
                            <h2 class="price"><span class="currency">$</span>39.47<span class="duration">/Per Month</span></h2>
                            <div class="pricing-button text-center">
                                <a href="#" class="main-btn primary-btn">Choose Package</a>
                                <p>Get 23% Save For Services</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!--====== Pricing Item ======-->
                    <div class="single-pricing-item mb-40 wow fadeInUp" data-wow-delay=".3s">
                        <div class="pricing-img">
                            <img src="assets/images/pricing/pricing-3.jpg" alt="Pricing Image">
                        </div>
                        <div class="pricing-body">
                            <div class="shape shape-one"><span><img src="assets/images/pricing/leaf.png" alt="Image"></span></div>
                            <div class="pricing-title text-center mb-35">
                                <h3 class="title">Industrial Package</h3>
                            </div>
                            <ul class="mb-35">
                                <li><i class="fas fa-badge-check"></i>Install a Patio or Pathway</li>
                                <li><i class="fas fa-badge-check"></i>Install Landscaping</li>
                                <li><i class="fas fa-badge-check"></i>Waterproof a Deck Costs</li>
                                <li><i class="fas fa-badge-check"></i>Remove a Tree Stump</li>
                            </ul>
                            <h2 class="price"><span class="currency">$</span>92.36<span class="duration">/Per Month</span></h2>
                            <div class="pricing-button text-center">
                                <a href="#" class="main-btn primary-btn">Choose Package</a>
                                <p>Get 15% Save For Services</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--====== End Pricing Section ======-->
    <!--====== Start Testimonial Section  ======-->
    {{-- <section class="testimonial-section">
        <div class="container-fluid">
            <!--====== Testimonial Wrapper ======-->
            <div class="testimonial-wrapper main-bg wow fadeInDown">
                <div class="shape shape-one"><span><img src="assets/images/testimonial/img-1.jpg" alt="image"></span></div>
                <div class="shape shape-two"><span><img src="assets/images/testimonial/img-2.jpg" alt="image"></span></div>
                <div class="shape shape-three"><span><img src="assets/images/testimonial/img-3.jpg" alt="image"></span></div>
                <div class="shape shape-four"><span><img src="assets/images/testimonial/tree.png" alt="Tree image"></span></div>
                <div class="shape shape-five"><span><img src="assets/images/testimonial/tree2.png" alt="Tree image"></span></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <!--====== Testimonial Slider  ======-->
                            <div class="testimonial-slider-two">
                                <!--====== Single Testimonial Item  ======-->
                                <div class="single-testimonial-item-two">
                                    <div class="quote-rating-box">
                                        <div class="icon">
                                            <img src="assets/images/testimonial/quote2.png" alt="quote icon">
                                        </div>
                                        <div class="ratings-box">
                                            <h3>Quality Services</h3>
                                            <ul class="ratings">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>Sed persiciatis unde omnis iste natus voluptatem accusantium doloremquey
                                        laudantium totam rem aperiam eaque
                                        psa quae abillo inventore veritatis quas
                                        architecto beatae dicta explicabo</p>
                                    <div class="author-thumb-title">
                                        <div class="author-thumb">
                                            <img src="assets/images/testimonial/thumb-1.jpg" alt="Author Image">
                                        </div>
                                        <div class="author-title">
                                            <h6 class="title">Douglas D. Hall</h6>
                                            <p class="position">CEO & Founder</p>
                                        </div>
                                    </div>
                                </div>
                                <!--====== Single Testimonial Item  ======-->
                                <div class="single-testimonial-item-two mb-60">
                                    <div class="quote-rating-box">
                                        <div class="icon">
                                            <img src="assets/images/testimonial/quote2.png" alt="quote icon">
                                        </div>
                                        <div class="ratings-box">
                                            <h3>Quality Services</h3>
                                            <ul class="ratings">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>Sed persiciatis unde omnis iste natus voluptatem accusantium doloremquey
                                        laudantium totam rem aperiam eaque
                                        psa quae abillo inventore veritatis quas
                                        architecto beatae dicta explicabo</p>
                                    <div class="author-thumb-title">
                                        <div class="author-thumb">
                                            <img src="assets/images/testimonial/thumb-1.jpg" alt="Author Image">
                                        </div>
                                        <div class="author-title">
                                            <h6 class="title">Douglas D. Hall</h6>
                                            <p class="position">CEO & Founder</p>
                                        </div>
                                    </div>
                                </div>
                                <!--====== Single Testimonial Item  ======-->
                                <div class="single-testimonial-item-two mb-60">
                                    <div class="quote-rating-box">
                                        <div class="icon">
                                            <img src="assets/images/testimonial/quote2.png" alt="quote icon">
                                        </div>
                                        <div class="ratings-box">
                                            <h3>Quality Services</h3>
                                            <ul class="ratings">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>Sed persiciatis unde omnis iste natus voluptatem accusantium doloremquey
                                        laudantium totam rem aperiam eaque
                                        psa quae abillo inventore veritatis quas
                                        architecto beatae dicta explicabo</p>
                                    <div class="author-thumb-title">
                                        <div class="author-thumb">
                                            <img src="assets/images/testimonial/thumb-1.jpg" alt="Author Image">
                                        </div>
                                        <div class="author-title">
                                            <h6 class="title">Douglas D. Hall</h6>
                                            <p class="position">CEO & Founder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--====== End Testimonial Section  ======-->
    <!--====== Start Blog Section  ======-->
    <section class="blog-section pt-100 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-12">
                    <div class="section-title text-center mb-50 wow fadeInDown">
                        <span class="sub-title"><i class="flaticon-plant"></i>Noticias y blogs</span>
                        <h2>Lea las últimas noticias y el blog</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($noticias as $item)
                    
                
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="single-blog-post-two mb-40 wow wow fadeInUp" data-wow-delay=".2s">
                        <div class="entry-content">
                            <div class="post-meta">
                                <span class="date"><a href="blog-details.html">{{ $item->updated_at->format('Y/m/d') }}</a></span>
                                <span class="comment"><a href="blog-details.html">{{ $item->updated_at->diffForHumans() }}</a></span>
                            </div>
                            <h4 class="entry-title"><a href="blog-details.html">{{ Str::limit($item->titulo,50) }}</a></h4>
                            <div class="author">
                                <h6><span>Publicado por:</span><a href="#!">{{ $item->user->name }}</a></h6>
                            </div>
                        </div>
                        <div class="post-thumbnail">
                            
                            @if ($item->foto)
                            <img src="{{ asset(Storage::url($item->foto)) }}" alt="Post Thumbnail">
                            @else
                            <img src="{{ asset('assets/images/blog/blog-4.jpg') }}" alt="Post Thumbnail">    
                            @endif
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section><!--====== End Blog Section  ======-->
    <!--====== Start Partners Section ======-->
    {{-- <section class="partners-section">
        <div class="container">
            <!--=== Partners Slider ===-->
            <div class="partner-slider-one pt-80 pb-70 border-top-1 wow fadeInDown">
                <div class="single-partner-item">
                    <div class="partner-img">
                        <a href="#"><img src="assets/images/partners/partner-1.png" alt="Partner Image"></a>
                    </div>
                </div>
                <div class="single-partner-item">
                    <div class="partner-img">
                        <a href="#"><img src="assets/images/partners/partner-2.png" alt="Partner Image"></a>
                    </div>
                </div>
                <div class="single-partner-item">
                    <div class="partner-img">
                        <a href="#"><img src="assets/images/partners/partner-3.png" alt="Partner Image"></a>
                    </div>
                </div>
                <div class="single-partner-item">
                    <div class="partner-img">
                        <a href="#"><img src="assets/images/partners/partner-4.png" alt="Partner Image"></a>
                    </div>
                </div>
                <div class="single-partner-item">
                    <div class="partner-img">
                        <a href="#"><img src="assets/images/partners/partner-5.png" alt="Partner Image"></a>
                    </div>
                </div>
                <div class="single-partner-item">
                    <div class="partner-img">
                        <a href="#"><img src="assets/images/partners/partner-4.png" alt="Partner Image"></a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--====== End Partners Section ======-->
    <!--====== Start Footer ======-->
@endsection