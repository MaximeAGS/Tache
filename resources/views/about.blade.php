@extends('layouts.frontend2')
@section('title', 'Vigilium - About')

@section('content')
<div class="preloader"></div>
<div class="breadcroumb-area bread-bg">
    <div class="overlay-2"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcroumb-title text-center">
                    <h1>A Propos</h1>
                    <h6><a href="{{ route('index') }}">Accueil</a> / A Propos</h6>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- About Section  -->

<div class="about-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="about-content-wrap">
                    <div class="section-title">
                        <p>Waste Disposal & Recycling Services in Commercial & Domestic</p>
                        <h2>The Pioneers In The Recycling Service!</h2>
                    </div>
                    <div class="about-content">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="about-content-left">
                                    <p class="highlight">We are providing the effectively waste disposal & recycling service
                                         with our modern technologies, we serve
                                        commonly, client first priority.</p>

                                    <p>How can better environment for future universe to recycling waste disposal? We believe the most effective strategy is to stop waste from entering the ocean in the first place.  
                                    </p>
                                    <div class="row mt-20">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="featured-area">
                                                <div class="featured-icon">
                                                    <i class="las la-business-time"></i>
                                                </div>
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h5>Ontime at <br>Services</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="featured-area">
                                                <div class="featured-icon">
                                                    <i class="las la-stopwatch"></i>
                                                </div>
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h5>24/7 <br>Services</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="featured-area">
                                                <div class="featured-icon">
                                                    <i class="las la-money-check-alt"></i>
                                                </div>
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h5>Affordable <br>Cost</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 wow fadeInLeft" data-wow-delay=".4s">
                <div class="about-img">
                    <img src="{{asset('img2/about/about.jpg')}}" alt="">
                    <div class="about-counter">
                        <div class="counter-icon">
                            <img src="{{asset('img2/icon/customer-service.png')}}" alt="">
                        </div>
                        <div class="counter-number">
                            <span class="counting" data-counterup-nums="154">4754</span>
                        </div>
                        <h6>Happy Customers</h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--Service Area-->

<div class="service-area sky-bg section-padding">
    <div class="container">
        <div class="section-title">
            <h6>What we’re doing</h6>
            <h2>Services We Offer</h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                <!--Services Single-->
                <div class="services-two_single">
                    <div class="services-two_img-box">
                        <div class="services-two_img">
                            <img src="{{asset('img2/service/service_1.jpg')}}" alt="">
                        </div>
                        <div class="services-two_icon">
                            <img src="{{asset('img2/icon/paper.png')}}" alt="">
                        </div>
                    </div>
                    <div class="services-two_content">
                        <h3 class="services-two_title"><a href="paper_recycle.html">Capboard/Paper Recycling</a>
                        </h3>
                        <p class="services-two_text">Lorem ipsum dolor sit donec amet tristique ante vel sem
                            dictum is rhoncus elit sed.</p>
                        <div class="services-two_bottom">
                            <a href="paper_recycle.html" class="services-one_btn">Read More</a>
                            <a href="paper_recycle.html" class="services-one_arrow"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                <!--Services Two Single-->
                <div class="services-two_single">
                    <div class="services-two_img-box">
                        <div class="services-two_img">
                            <img src="{{asset('img2/service/service_2.jpg')}}" alt="">
                        </div>
                        <div class="services-two_icon">
                            <img src="{{asset('img2/icon/plastic.png')}}" alt="">
                        </div>
                    </div>
                    <div class="services-two_content">
                        <h3 class="services-two_title"><a href="plastic_recycle-2.html">Plastic Recycling</a>
                        </h3>
                        <p class="services-two_text">Lorem ipsum dolor sit donec amet tristique ante vel sem
                            dictum is rhoncus elit sed.</p>
                        <div class="services-two_bottom">
                            <a href="plastic_recycle.html" class="services-one_btn">Read More</a>
                            <a href="plastic_recycle.html" class="services-one_arrow"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                <!--Services Two Single-->
                <div class="services-two_single">
                    <div class="services-two_img-box">
                        <div class="services-two_img">
                            <img src="{{asset('img2/service/service_3.jpg')}}" alt="">
                        </div>
                        <div class="services-two_icon">
                            <img src="{{asset('img2/icon/glass.png')}}" alt="">
                        </div>
                    </div>
                    <div class="services-two_content">
                        <h3 class="services-two_title"><a href="glass_recycle-2.html">Glass Recycling</a></h3>
                        <p class="services-two_text">Lorem ipsum dolor sit donec amet tristique ante vel sem
                            dictum is rhoncus elit sed.</p>
                        <div class="services-two_bottom">
                            <a href="glass_recycle.html" class="services-one_btn">Read More</a>
                            <a href="glass_recycle.html" class="services-one_arrow"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Choose Us Area  -->

<div class="choose_us section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-12">
                <div class="choose_us_left">
                    <div class="choose_us_img">
                        <img src="{{asset('img2/choose_us.jpg')}}" alt="">                            
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-12">
                <div class="choose_us_right">
                    <div class="section-title text-left">
                        <h6>Our Core Feature</h6>
                        <h2>Why You Should Take Our Services?</h2>
                    </div>
                    <p class="choose_us_right-text">There might be a lot of talk about reusing and recycling these days but taking discarded materials and turning them into something new is by no means a modern concept. People have been discarding and reusing materials for a very long time ago.</p>
                    <ul class="list-unstyled choose_us_points">
                        <li>
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <div class="text">
                                <p>Convenient Pickup</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <div class="text">
                                <p>Reducing Waste</p>
                            </div>
                        </li>
                    </ul>

                    <div class="progress-bar-area">
                        <div class="single-bar-item">
                            <h4>Recycling Service</h4>
                            <div id="bar1" class="barfiller">
                                <span class="tip">90%</span>
                                <span class="fill" data-percentage="90"></span>
                            </div>
                        </div>

                        <div class="single-bar-item">
                            <h4>Waste Management</h4>
                            <div id="bar2" class="barfiller">
                                <span class="tip">70%</span>
                                <span class="fill" data-percentage="70"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA -->
<div class="cta-area-2 dark-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6">
                <h2>Let's Get Your Project Started Today!</h2>
            </div>
            <div class="col-xl-6 col-lg-6 offset-xl-1 col-12">                    
                <div class="cta-btn-2 mt-20">
                    <a href="#" class="main-btn">Request a Pickup</a>
                    <a href="#" class="main-btn white">Contact with Us</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonial Section  -->

<div class="testimonial-area sky-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial-wrap owl-carousel">
                    <div class="testimonial-inner">
                        <div class="testimonial-img">
                            <img src="{{asset('img2/testimonial/1.jpg')}}" alt="" >
                        </div>
                        <div class="testimonial-content">
                            <p>
                                “They helped lead me through the process of system
                                selection, site layout and place my order. They were informed and has provided guidance each step.”
                            </p>
                            <div class="testimonial-meta">
                                <h6>Pat Cummins,</h6>
                                <span>Delta Inc.</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-inner">
                        <div class="testimonial-img">
                            <img src="{{asset('img2/testimonial/2.jpg')}}" alt="" >
                        </div>
                        <div class="testimonial-content">
                            <p>
                                “They helped lead me through the process of system
                                selection, site layout and place my order. They were informed and has provided guidance each step.”
                            </p>
                            <div class="testimonial-meta">
                                <h6>Lin Nathasha,</h6>
                                <span>Expoint Logistics</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Team Start-->
 <div class="team-section section-padding pb-60">
    <div class="container">
        <div class="section-title text-center">
            <h6>Professional Worker</h6>
            <h2>Meet Our Experts</h2>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">                    
                <div class="team-single">
                    <div class="team-img">
                        <img src="{{asset('img2/team/1.jpg')}}" alt="">
                        <ul class="list-unstyled team-social">
                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#"><i class="lab la-facebook"></i></a></li>
                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h4 class="team-name">Joseph Gill</h4>
                        <p class="team-title">Recycling Worker</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">                    
                <div class="team-single">
                    <div class="team-img">
                        <img src="{{asset('img2/team/2.jpg')}}" alt="">
                        <ul class="list-unstyled team-social">
                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#"><i class="lab la-facebook"></i></a></li>
                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h4 class="team-name">Sarah Albert</h4>
                        <p class="team-title">Recycling Worker</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">                    
                <div class="team-single">
                    <div class="team-img">
                        <img src="{{asset('img2/team/3.jpg')}}" alt="">
                        <ul class="list-unstyled team-social">
                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#"><i class="lab la-facebook"></i></a></li>
                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h4 class="team-name">Alex Carry</h4>
                        <p class="team-title">Recycling Worker</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">                    
                <div class="team-single">
                    <div class="team-img">
                        <img src="{{asset('img2/team/4.jpg')}}" alt="">
                        <ul class="list-unstyled team-social">
                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#"><i class="lab la-facebook"></i></a></li>
                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h4 class="team-name">Watson Craig</h4>
                        <p class="team-title">Recycling Worker</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection