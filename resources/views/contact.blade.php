@extends('layouts.front')
@section('content')
    <div class="boxed_wrapper">

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index-2.html"><img src="{{ asset('assets/images/backgrond-main.jpg') }}" alt=""
                            title=""></a>
                </div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>RANIPUR TIGER RESERVE, CHITRAKOOT, UTTAR PRADESH , 210205</li>
                        <li><a href="tel:+91 78394 35142">+91 78394 35142</a></li>
                        <li><a href="mailto:dfochitrakoot1@gmail.com">dfochitrakoot1@gmail.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index-2.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- Page Title -->
        <section class="page-title">
            <div class="img-wrap parallax-demo-1">
                <div class="parallax-inner back-img" style="background-image: url(assets/images/banner/banner-5.jpg);">
                </div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact</li>
                    </ul>
                    <div class="title">
                        <h1>Contact</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- google-map-section -->
        <section class="google-map-section">
            <div class="auto-container">
                <div class="map-inner">
                    <div class="map-canvas">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14470.280069483788!2d81.13216336136176!3d24.946713884155326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398495d85008aa27%3A0x665acd01b16fb458!2sRanipur%20Tiger%20reserve!5e0!3m2!1sen!2sin!4v1737516774178!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="content-box">
                        <h2>get in touch with us</h2>
                        <ul class="info clearfix">
                            <li><i class="flaticon-telephone"></i><a href="tel:+91 78394 35142">+91 78394 35142</a></li>
                            <li><i class="flaticon-email"></i><a
                                    href="mailto:dfochitrakoot1@gmail.com">dfochitrakoot1@gmail.com</a></li>
                            <li><i class="flaticon-pin"></i>RANIPUR TIGER RESERVE, CHITRAKOOT, UTTAR PRADESH , 210205</li>
                        </ul>
                        <div class="inner">
                            <div class="icon-box"><i class="flaticon-clock-1"></i></div>
                            <p>Monday - Sunday</p>
                            <h4>9:00am to 6:00pm</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- google-map-section end -->


        <!-- contact-section -->
        <section class="contact-section centred">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-12 offset-xl-2 big-column">
                        <div class="sec-title centred">
                            <h2>have question? <br />drop a line</h2>
                        </div>
                        <div class="form-inner">
                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="post" action="{{ route('contact.submit') }}" id="contact-form" class="default-form" novalidate="novalidate">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Full name" required="" aria-required="true" value="{{ old('username') }}">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email address" required="" aria-required="true" value="{{ old('email') }}">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="phone" required="" placeholder="Phone" aria-required="true" value="{{ old('phone') }}">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="subject" required="" placeholder="Subject" aria-required="true" value="{{ old('subject') }}">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Write a message">{{ old('message') }}</textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0">
                                        <button class="theme-btn btn-one" type="submit" name="submit-form"><span>Submit</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->

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
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
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
                                                35142</a>
                                        </li>
                                        <li><i class="flaticon-email"></i><a href="mailto:dfochitrakoot1@gmail.com">dfochitrakoot1@gmail.com</a></li>
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
    </div>
@endsection
