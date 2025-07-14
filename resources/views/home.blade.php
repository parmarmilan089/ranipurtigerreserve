@extends('layouts.front')
@section('content')
    <!-- banner-section -->
    <section class="banner-section">
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
            @foreach ($banners as $banner)
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url({{ asset('storage/' . $banner->banner_image) }})">
                    </div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>{{ $banner->title }}</h3>
                                <h2>{{ $banner->short_description }}</h2>
                                <div class="btn-box">
                                    <a href="#" class="theme-btn btn-one">{{ $banner->button_text }}</a>
                                </div>
                                </div>

                                <div class="col-md-6">
                                    <figure>
                                        <img src="{{ asset('assets/images/banner-1.png')}}" alt="" />
                                    </figure>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- banner-section end -->


    <!-- info-section -->
    <section class="info-section">
        <div class="bg-layer"></div>
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    @foreach ($infosection as $section)
                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <div class="icon-box"><img src="{{ asset('storage/' . $section['image']) }}" alt="">
                                </div>
                                <h5>{{ $section['title'] }}</h5>
                                <p>{{ $section['short_description'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- info-section end -->

    <!-- about-section -->
    <section class="about-section sec-pad" id="about">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_one">
                        <div class="image-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                            <figure class="image"><img src="{{ asset('storage/' . $about->image) }}" alt="">
                            </figure>
                            <div class="icon-box"><img src="assets/images/icons/icon-1.png" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_one">
                        <div class="content-box">
                            <div class="sec-title">
                                <h2>{{ $about->title }}</h2>
                            </div>
                            <div class="text">
                                <p>{{ $about->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->


    <!-- attractions-section -->
    <section class="chooseus-section sec-pad" id="attractions">
        <div class="img-wrap parallax-demo-1">
            <div class="parallax-inner back-img" style="background-image: url(assets/images/background/chooseus-bg.jpg);">
            </div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="sec-title">
                        <h2>There are 3 Main <span>Attractions</span></h2>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                @foreach ($attractions as $attraction)
                    <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                        <div class="safari__cart">
                            <figure><img src="{{ asset('storage/' . $attraction['image']) }}" alt=""></figure>
                            <div class="safari__cart-heading">{{ $attraction['title'] }}</div>
                            <div class="hero__outline__cta">
                                <a href="#" class="theme-btn">{{ $attraction['button_text'] }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- chooseus-section end -->


    <!-- events-section -->
    <section class="events-section sec-pad" id="reach">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="sec-title">
                        <h2>How to Reach <span>Ranipur Tiger Reserve?</span></h2>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                @foreach ($events as $event)
                    <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                        <div class="inner-content">
                            <div class="events-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{ asset('storage/' . $event['image']) }}"
                                                alt="">
                                        </figure>
                                    </div>
                                    <div class="inner">
                                        <h3>{{ $event['title'] }}</h3>
                                        <p>{{ $event['description'] }}</p>
                                        @if ($event['bullet_points'] != null)
                                            <ul class="list-style-one clearfix">

                                                @foreach (explode(',', $event['bullet_points']) as $bullet)
                                                    <li>{{ $bullet }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- events-section end -->


    <!-- gallery-section -->
    <section class="gallery-section">
        <div class="auto-container">
            <div class="sec-title centred">
                <h2>Photos Gallery</h2>
            </div>
        </div>
        <div class="outer-container">
            <div class="gallery-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                @foreach ($photogallerys as $photogallery)
                    <div class="gallery-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('storage/' . $photogallery->image) }}"
                                    alt="">
                            </figure>
                            <div class="overlay-content">
                                <h3>Deer</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- gallery-section end -->

    <!-- Geographical-section -->
    <section class="about-section sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                @foreach ($geographicals as $geographical)
                    <div class="col-lg-12 col-md-12 col-sm-12 image-column">
                        <div class="image_block_one">
                            <div class="image-box">
                                <!-- <div class="shape" style="background-image: url(assets/images/shape/shape-1.png);"></div> -->
                                <div class="content-box">
                                    <div class="sec-title">
                                        <h2>{{ $geographical['title'] }}</h2>
                                    </div>
                                    <div class="text">
                                        <p>{{ $geographical['description'] }}</p>
                                    </div>
                                    <br />
                                    <h2>{{ $geographical['bullet_title'] }}</h2>
                                    <br />
                                    <ul class="list-style-one clearfix">
                                        @foreach (explode(',', $geographical['bullet_points'] ?? '') as $point)
                                            <li>{{ $point }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- about-section end -->

    <!-- news-section -->
    <!-- <section class="news-section centred">
                                                    <div class="auto-container">
                                                        <div class="sec-title centred">
                                                            <h2>News and Alerts</h2>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                                                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                                                    <div class="inner-box">
                                                                        <div class="image-box">
                                                                            <figure class="image"><a href="blog-details.html"><img src="assets/images/news/news-1.jpg" alt=""></a></figure>
                                                                            <div class="post-date"><h6>16<span>dec</span></h6></div>
                                                                        </div>
                                                                        <div class="lower-content">
                                                                            <h3><a href="blog-details.html">how Interaction with Animal can Release</a></h3>
                                                                            <div class="link"><a href="blog-details.html"><i class="flaticon-right-arrow"></i></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                                                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                                                    <div class="inner-box">
                                                                        <div class="image-box">
                                                                            <figure class="image"><a href="blog-details.html"><img src="assets/images/news/news-2.jpg" alt=""></a></figure>
                                                                            <div class="post-date"><h6>15<span>dec</span></h6></div>
                                                                        </div>
                                                                        <div class="lower-content">
                                                                            <h3><a href="blog-details.html">Donec eget condimentum sapien</a></h3>
                                                                            <div class="link"><a href="blog-details.html"><i class="flaticon-right-arrow"></i></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                                                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                                                    <div class="inner-box">
                                                                        <div class="image-box">
                                                                            <figure class="image"><a href="blog-details.html"><img src="assets/images/news/news-3.jpg" alt=""></a></figure>
                                                                            <div class="post-date"><h6>14<span>dec</span></h6></div>
                                                                        </div>
                                                                        <div class="lower-content">
                                                                            <h3><a href="blog-details.html">Etiam vel porttitor mi convallis</a></h3>
                                                                            <div class="link"><a href="blog-details.html"><i class="flaticon-right-arrow"></i></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section> -->
    <!-- news-section end -->

    <!-- main-footer -->
    <section class="main-footer">
        <div class="footer-top">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-4.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget logo-widget">
                            <figure class="footer-logo"><a href="{{ route('home') }}"><img src="assets/images/footer-logo.png"
                                        alt=""></a></figure>
                            <ul class="footer-social clearfix">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget">
                            <div class="widget-title">
                                <h5>Links</h5>
                            </div>
                            <div class="widget-content">
                                <ul class="links-list clearfix">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Hotels & Resorts</a></li>
                                    <li><a href="#">Attractions</a></li>
                                    <li><a href="#">How to Reach</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget contact-widget">
                            <div class="widget-title">
                                <h5>Contact</h5>
                            </div>
                            <div class="widget-content">
                                <ul class="info clearfix">
                                    <li><i class="flaticon-pin"></i>RANIPUR TIGER RESERVE, CHITRAKOOT, UTTAR PRADESH ,
                                        210205</li>
                                    <li><i class="flaticon-telephone"></i><a href="tel:+91 78394 35142">+91 78394
                                            35142</a></li>
                                    <li><i class="flaticon-email"></i><a
                                            href="mailto:dfochitrakoot1@gmail.com">dfochitrakoot1@gmail.com</a></li>
                                    <!-- <li><i class="flaticon-pin"></i>66 broklyn golden street line new york</li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom centred">
            <div class="auto-container">
                <div class="copyright">
                    <p>&copy; 2025. All rights reserved by <a href="#">Ranipur Tiger Reserve</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- main-footer end -->



    <!-- scroll to top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fal fa-long-arrow-up"></i>
    </button>

    <style>
        .banner-carousel .slide-item:before {
    position: absolute;
    content: '';
    width: 100%;
    height: 100%;
    background: #0e131f;
    left: 0px;
    top: 0px;
    right: 0px;
    z-index: 1;
    opacity: 0.6;
}
    </style>
@endsection
