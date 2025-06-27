@extends('layouts.front')
@section('content')
<!-- banner-section -->
<section class="banner-section">
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
                @foreach ($banners as $banner)
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url({{ asset('storage/' . $banner->banner_image) }})"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h3>{{$banner->title}}</h3>
                            <h2>{{$banner->short_description}}</h2>
                            <div class="btn-box">
                                <a href="#" class="theme-btn btn-one">{{$banner->button_text}}</a>
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
                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <div class="icon-box"><img src="assets/images/icons/icon-2.png" alt=""></div>
                                <h5>Wild Animals</h5>
                                <p>Ranipur’s Big five: Bear, Deer, Ground Pangolin, Tiger and Leopards with other unique species.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <div class="icon-box"><img src="assets/images/icons/icon-3.png" alt=""></div>
                                <h5>Gypsy Safari</h5>
                                <p>Explore Ranipur’s landscapes and wildlife up close on an exciting Gypsy Safari.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <div class="icon-box"><img src="assets/images/icons/icon-4.png" alt=""></div>
                                <h5>Birds Watching</h5>
                                <p>Ranipur hosts hundreds of bird species, including the waterfall and many more.</p>
                            </div>
                        </div>
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
                                <figure class="image"><img src="assets/images/resource/about-1.jpg" alt=""></figure>
                                <div class="icon-box"><img src="assets/images/icons/icon-1.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_one">
                            <div class="content-box">
                                <div class="sec-title">
                                    <h2>Cultural and Ecological Heritage</h2>
                                </div>
                                <div class="text">
                                    <p>Ranipur Tiger Reserve, nestled in the Vindhya hills of
                                        southern Uttar Pradesh, is a rich tapestry of history,
                                        culture, and nature. At its heart lies the mystical Bedakh
                                        forest, an ancient, untouched woodland linked to the epic
                                        tales of the Ramayana, one of India’s most revered
                                        scriptures. The very name 'Bedakh' evokes the image of a
                                        pristine forest, reminiscent of the landscapes where Lord
                                        Ram, Sita, and Lakshman took refuge during their exile.
                                        Today, the Bedakh forest not only shelters wildlife such as
                                        tigers and leopards but also stands as a living testament to
                                        India's deeply rooted heritage. These sacred woods, once
                                        walked by Lord Ram, still preserve the rich biodiversity of
                                        the region through their hills, rivers, and trees. This unique
                                        confluence of myth, history, and conservation makes
                                        Ranipur Tiger Reserve a place where India's past seamlessly
                                        blends with its present natural landscape, symbolizing both
                                        cultural and ecological preservation.</p>
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
                <div class="parallax-inner back-img" style="background-image: url(assets/images/background/chooseus-bg.jpg);"></div>
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
                    <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                        <div class="safari__cart">
                            <figure><img src="assets/images/banner/Main Entrance Gate-min.jpg" alt=""></figure>
                            <div class="safari__cart-heading">Facilities for tourists</div>
                            <div class="hero__outline__cta">
                                <a href="#" class="theme-btn">Explore More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                        <div class="safari__cart">
                            <figure><img src="assets/images/banner/Attractions-2.jpg" alt=""></figure>
                            <div class="safari__cart-heading">Religious site</div>
                            <div class="hero__outline__cta">
                                <a href="#" class="theme-btn">Explore More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                        <div class="safari__cart">
                            <figure><img src="assets/images/banner/Attractions-3.jpg" alt=""></figure>
                            <div class="safari__cart-heading">Jungle Safari</div>
                            <div class="hero__outline__cta">
                                <a href="#" class="theme-btn">Explore More</a>
                            </div>
                        </div>
                    </div>
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
                    <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                        <div class="inner-content">
                            <div class="events-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/banner/plan.jpg" alt=""></figure>
                                    </div>
                                    <div class="inner">
                                        <h3>By Air</h3>
                                        <p>The airport at Devangana, approximately 12 km from Chitrakoot district, has been operational since March 2024. It offers
                                            connecting flights from New Delhiand Mumbai, as well as direct
                                            flights from Lucknow.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                        <div class="inner-content">
                            <div class="events-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/banner/bus.jpg" alt=""></figure>
                                    </div>
                                    <div class="inner">
                                        <h3>By Road</h3>
                                        <ul class="list-style-one clearfix">
                                            <li>Route from New Delhi to Chitrakoot: Yamuna Expressway
                                                and Bundelkhand Expressway.</li>
                                            <li>Route from Lucknow to Chitrakoot: via Raebareli or
                                                Fatehpur Unchahar, Manjhanpur (Kaushambi).</li>
                                            <li>Route from Prayagraj to Chitrakoot: via Shankargarh or
                                                Manjhanpur (Kaushambi).</li>
                                            <li>Route from Jhansi to Chitrakoot: via Bundelkhand
                                                Expressway.</li>
                                            <li>Route from Kanpur to Chitrakoot: via Fatehpur or Banda.</li>
                                            <li>Route from Jabalpur to Chitrakoot: via Katni-Maihar or
                                                Katni-Kalinjar.</li>
                                            <li>Route from Satna to Chitrakoot.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                        <div class="inner-content">
                            <div class="events-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/banner/rail.jpg" alt=""></figure>
                                    </div>
                                    <div class="inner">
                                        <h3>By Rail</h3>
                                        <ul class="list-style-one clearfix">
                                            <li>From Hazrat Nizamuddin to Chitrakoot.</li>
                                            <li>From Lucknow to Chitrakoot via Kanpur.</li>
                                            <li>From Mumbai to Chitrakoot via Bhopal, Jhansi or via Lalitpur, Khajuraho.</li>
                                            <li>From Prayagraj to Chitrakoot via Chiwaki or via Naini, Manikpur.</li>
                                            <li>From Jhansi to Chitrakoot via Banda.</li>
                                            <li>From Satna to Chitrakoot.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <div class="gallery-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/gallery/gallery-1.jpg" alt=""></figure>
                            <!-- <div class="content-box">
                                <h3><a href="index-2.html">deer</a></h3>
                            </div> -->
                            <div class="overlay-content">
                                <h3>Bear</h3>
                                <!-- <p>There are many type of <br />variations pass not available</p>
                                <div class="link"><a href="index-2.html"><i class="flaticon-right-arrow"></i></a></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="gallery-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/gallery/gallery-2.jpg" alt=""></figure>
                            <div class="overlay-content">
                                <h3>Deer</h3>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/gallery/gallery-3.jpg" alt=""></figure>
                            <div class="overlay-content">
                                <h3>Ground Pangolin</h3>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/gallery/gallery-4.jpg" alt=""></figure>
                            <div class="overlay-content">
                                <h3>Leopard</h3>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/gallery/gallery-5.jpg" alt=""></figure>
                            <div class="overlay-content">
                                <h3>Tiger</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery-section end -->

        <!-- Geographical-section -->
        <section class="about-section sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 image-column">
                        <div class="image_block_one">
                            <div class="image-box">
                                <!-- <div class="shape" style="background-image: url(assets/images/shape/shape-1.png);"></div> -->
                                <div class="content-box">
                                    <div class="sec-title">
                                        <h2>Geographical Location of Chitrakoot</h2>
                                    </div>
                                    <div class="text">
                                        <p>Chitrakoot, often referred to as "the hills of many wonders," is a unique gift bestowed upon Uttar Pradesh by nature. Located along the banks of the Payasvani/Mandakini River in the northern part of the Vindhya mountain range, its name derives from the Sanskrit word "Chitra," meaning Ashoka, and "Koot," meaning peak or summit. It is believed that this area was once abundant with Ashoka trees in ancient times. Chitrakoot is renowned not only for its religious and cultural significance but also as an environmentally and historically vital part of the Bundelkhand cultural region.

                                            Ranipur Tiger Reserve, situated in this area, adds to the geographical importance of Chitrakoot. Nestled in Chitrakoot district of Uttar Pradesh, the reserve borders Banda and Prayagraj to the north, while to the southwest, it adjoins the districts of Satna and Rewa in Madhya Pradesh. Set in the lap of the Vindhya mountain range, the reserve features dense forests, vast valleys, and rolling hills. The area's dry deciduous vegetation and diverse topography make it geographically rich and unique. The Mandakini River and other water sources provide a lifeline to the region. Located on the border of Uttar Pradesh and Madhya Pradesh, the reserve plays a crucial role in connecting the ecosystems of both states, making it an ideal location for the conservation of natural resources and biodiversity.

                                            Overall, the region encompassing Chitrakoot and the Ranipur Tiger Reserve is significant not only from an environmental perspective but also for its cultural, religious, and natural beauty, securing a distinctive place in the geography and history of the country.</p>
                                    </div>
                                    <br />
                                    <h2>Key Information for Tourists</h2>
                                    <br />
                                    <ul class="list-style-one clearfix">
                                        <li>Maintain patience and calmness during jungle safari tours and visits to the Tulsi complex.</li>
                                        <li>Wear dark-colored clothing during forest visits. Avoid carrying valuable items like jewelry. Travel in small groups.</li>
                                        <li>Swimming and bathing in the waterfall area are prohibited and considered a punishable offense.</li>
                                        <li>If possible, carry a pocket diary or notebook to write about your travel experiences and memories.</li>
                                        <li>Do not use plastic, cans, or any such items in the forest area, and ensure that you do not litter anywhere.</li>
                                        <li>Taking selfies in risky places can be life-threatening.</li>
                                        <li>Smoking and consuming alcohol in the forest area are strictly prohibited and considered punishable offenses.</li>
                                        <li>It is mandatory to take a nature guide for jungle safaris and visits to the Tulsi Waterfall complex.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <figure class="footer-logo"><a href="index-2.html"><img src="assets/images/footer-logo.png" alt=""></a></figure>
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
                                         <li><i class="flaticon-pin"></i>RANIPUR TIGER RESERVE, CHITRAKOOT, UTTAR PRADESH , 210205</li>
                                        <li><i class="flaticon-telephone"></i><a href="tel:+91 78394 35142">+91 78394 35142</a></li>
                                        <li><i class="flaticon-email"></i><a href="mailto:dfochitrakoot1@gmail.com">dfochitrakoot1@gmail.com</a></li>
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
@endsection
