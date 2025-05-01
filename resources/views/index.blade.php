@extends('layouts.frontend2')
@section('title', 'Vigilium - Home')

@section('content')
        <!-- Pre-Loader -->
        <div class="preloader"></div>
    
        <!-- Hero Area -->
    
        <div class="homepage-slides">
            <div class="single-slide-item">
                <div class="image-layer" style="background-image: url('{{ asset('img2/slider/slide-1.jpg') }}');">
                    <div class="overlay"></div>
                </div>
                
                <div class="container">
                    <div class="row align-items-center">                        
                        <div class="col-xl-8 col-lg-8 wow fadeInUp animated" data-wow-delay=".2s">
                            <div class="hero-area-content">
                            <div class="section-title">
                                <h6>Welcome to Ecofix</h6>
                                <h1>Thought Solution to <br> Safe Environment</h1>
                            </div>
                            <p>Ecofix is a household name for having been the pioneer of Recycling and Waste Disposal
                                Services in country from the corporate clients to the average person.</p>
                            <a href="{{ route('about') }}" class="main-btn primary mt-30">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="single-slide-item hero-area-bg-2">
                <div class="image-layer" style="background-image: url('{{asset('img2/slider/slide-2.jpg')}}');">
                    <div class="overlay"></div>
                </div>
                
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-9 col-lg-9 wow fadeInUp animated" data-wow-delay=".2s">
                            <div class="hero-area-content">
                                <div class="section-title">
                                    <h6>Reduce | Reuse | Recycle</h6>
                                    <h1>We Provide Recycling <br> Service Since 1990</h1>
                                </div>
                                <p>Ecofix is a household name for having been the pioneer of Recycling and Waste Disposal
                                    Services in <br> country from the corporate clients to the average person.</p>
                                <a href="{{ route('about') }}" class="main-btn primary mt-30">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- About Section -->
        <div class="about-area section-padding">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="about-content-wrap">
                            <div class="section-title">
                                <p>Waste Disposal & Recycling Services in Commercial & Domestic</p>
                                <h2 class="mt-0">The Pioneers In The Recycling Service!</h2>
                            </div>
                            <div class="about-content">
                                <div class="row">
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="about-content-left">
                                            <p class="highlight">We are providing the effectively waste disposal & recycling service
                                                 with our modern technologies, we serve
                                                commonly, client first priority.</p>
    
                                            <p>How can better environment for future universe to recycling waste disposal? We believe the most effective strategy is to stop waste from entering the ocean in the first place.  
                                            </p>
                                            <div class="row mt-30">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <div class="featured-area">
                                                        <div class="featured-icon">
                                                            <i class="las la-business-time"></i>
                                                        </div>
                                                        <div class="featured-content">
                                                            <div class="featured-title">
                                                                <h5>Ontime <br>Scheduled</h5>
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
        <div class="service-area sky-bg section-padding pb-50">
            <div class="container">
                <div class="section-title">
                    <h6>What we’re doing</h6>
                    <h2>Services We Offer</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms"
                        style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
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
                                    <a href="paper_recycle.html" class="services-one_arrow"><span
                                            class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms"
                        style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
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
                                <h3 class="services-two_title"><a href="plastic_recycle.html">Plastic Recycling</a>
                                </h3>
                                <p class="services-two_text">Lorem ipsum dolor sit donec amet tristique ante vel sem
                                    dictum is rhoncus elit sed.</p>
                                <div class="services-two_bottom">
                                    <a href="plastic_recycle.html" class="services-one_btn">Read More</a>
                                    <a href="plastic_recycle.html" class="services-one_arrow"><span
                                            class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms"
                        style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
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
                                <h3 class="services-two_title"><a href="glass_recycle.html">Glass Recycling</a></h3>
                                <p class="services-two_text">Lorem ipsum dolor sit donec amet tristique ante vel sem
                                    dictum is rhoncus elit sed.</p>
                                <div class="services-two_bottom">
                                    <a href="glass_recycle.html" class="services-one_btn">Read More</a>
                                    <a href="glass_recycle.html" class="services-one_arrow"><span
                                            class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-7 text-center">
                        <div class="service-note mt-50">
                            <p>We Provide Various Category Recycling Services. <a  href="{{ route('service1') }}">Explore Our
                                    Services</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Process Section  -->
    
        <div class="process-area dark-bg section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="section-title">
                            <h6>Recycling Wastage Save Environment!</h6>
                            <h2 class="text-white">Simple Steps Wastage <br> to Recycling Item Processing</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="process-right-content">
                            <p class="text-white">Recycling is the process of converting waste materials into new materials
                                and objects. To do this, recycling often requires both machinery and employees to correctly
                                sort recyclable items based on the material they’re made of. </p>
                            <p class="text-white">This Waste Management video shows the step-by-step process of how
                                materials are processed once they reach a facility.</p>
                            <div class="process-btn">
                                <a href="contact.html" class="main-btn">Get Started</a>
                                <a href="about.html" class="main-btn white">View Our Plans</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="process-item-wrap">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay=".2s">
                            <div class="process-single">
                                <div class="process-icon">
                                    <img src="{{asset('img2/process/1.png')}}" alt="">
                                </div>
                                <div class="process-title">
                                    <h5>Collection Wastage</h5>
                                </div>
                                <div class="process-desc">
                                    <p>Recycling is the process of making used or unwanted products into new.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay=".4s">
                            <div class="process-single two">
                                <div class="process-icon">
                                    <img src="{{asset('img2/process/2.png')}}" alt="">
                                </div>
                                <div class="process-title">
                                    <h5>Pickup Wastage</h5>
                                </div>
                                <div class="process-desc">
                                    <p>Recycling is the process of making used or unwanted products into new.
                                    </p>
                                </div>            
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay=".6s">
                            <div class="process-single three">
                                <div class="process-icon">
                                    <img src="{{asset('img2/process/3.png')}}" alt="">
                                </div>
                                <div class="process-title">
                                    <h5>Reduce Garbage</h5>
                                </div>
                                <div class="process-desc">
                                    <p>Recycling is the process of making used or unwanted products into new.
                                    </p>
                                </div>                        
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay=".8s">
                            <div class="process-single four">
                                <div class="process-icon">
                                    <img src="{{asset('img2/process/4.png')}}" alt="">
                                </div>
                                <div class="process-title">
                                    <h5>Recycling Process</h5>
                                </div>
                                <div class="process-desc">
                                    <p>Recycling is the process of making used or unwanted products into new.
                                    </p>
                                </div>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Project Section  -->
    
        <div class="project-area gray-bg section-padding">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-7">
                        <div class="section-title">
                            <h6>Revolution Ongoing Development</h6>
                            <h2>Recenty Recycling Solutions And Waste Management</h2>
                        </div>
                    </div>
                </div>
                <div class="project-wrap owl-carousel">
                    <div class="project-single">
                        <div class="project-img">
                            <img src="{{asset('img2/project/1.jpg')}}" alt="">
                        </div>
                        <div class="project-content">
                            <div class="project-cat">
                                <a href="project-details.html">Residential, </a>
                                <a href="project-details.html">Commerical</a>
                            </div>
                            <div class="project-title">
                                <h4>Paper Recycling Services</h4>
                            </div>
                            <div class="project-desc">
                                <p>Paper makes up 23 percent of municipal solid waste generated each year, more than
                                    any other material.</p>
                            </div>
                            <div class="project-more">
                                <a class="main-btn border-btn" href="project-details.html">explore more <i
                                        class="las la-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-single">
                        <div class="project-img">
                            <img src="{{asset('img2/project/2.jpg')}}" alt="">
                        </div>
                        <div class="project-content">
                            <div class="project-cat">
                                <a href="project-details.html">Commercial, </a>
                                <a href="project-details.html">Industrial</a>
                            </div>
                            <div class="project-title">
                                <h4>Plastic Recycling Services</h4>
                            </div>
                            <div class="project-desc">
                                <p>More than 35 million tons of plastics were generated in the United States and
                                    only 8.7 percent was recycled. </p>
                            </div>
                            <div class="project-more">
                                <a class="main-btn border-btn" href="project-details.html">explore more <i
                                        class="las la-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-single">
                        <div class="project-img">
                            <img src="{{asset('img2/project/3.jpg')}}" alt="">
                        </div>
                        <div class="project-content">
                            <div class="project-cat">
                                <a href="project-details.html">Industrial, </a>
                                <a href="project-details.html">Commercial</a>
                            </div>
                            <div class="project-title">
                                <h4>Metal Recycling Services</h4>
                            </div>
                            <div class="project-desc">
                                <p>Their primary purpose is to ship normal packages in basically the same ways that the
                                    postal service does.</p>
                            </div>
                            <div class="project-more">
                                <a class="main-btn border-btn" href="project-details.html">explore more <i
                                        class="las la-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-single">
                        <div class="project-img">
                            <img src="{{asset('img2/project/4.jpg')}}" alt="">
                        </div>
                        <div class="project-content">
                            <div class="project-cat">
                                <a href="project-details.html">Residential, </a>
                                <a href="project-details.html">Industrial</a>
                            </div>
                            <div class="project-title">
                                <h4>Aluminium Recycling Services</h4>
                            </div>
                            <div class="project-desc">
                                <p>In 2018, 3.9 million tons of aluminum municipal waste was generated. The total
                                    recycling rate was 34.9 percent. </p>
                            </div>
                            <div class="project-more">
                                <a class="main-btn border-btn" href="project-details.html">explore more <i
                                        class="las la-arrow-alt-circle-right"></i></a>
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
                    <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay=".2s">
                        <div class="choose_us_left">
                            <div class="choose_us_img">
                                <img src="{{asset('img2/choose_us.jpg')}}" alt="">                            
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="choose_us_right">
                            <div class="section-title text-left">
                                <h6>Our Core Feature</h6>
                                <h2>Why You Should Take Our <br> Eco-friendly Services?</h2>
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
    
    
        <!-- Contact Section  -->
    
        <div class="contact-area section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="contact-wrap">
                            <div class="section-title">
                                <h6>Ecology Survive With Sustainable service!</h6>
                                <h2 class="text-white">Time Is The Best Way To Think About Recycling</h2>
                            </div>
                            <div class="contact-desc">
                                <p class="text-white">
                                    Recycling is not just learning which bin to throw an item into. It’s about appreciating the resources that went into making the item and understanding the value of these materials. You will truly understand recycling if you change your mindset.
                                </p>
                            </div>
                            <div class="contact-list-wrap">
                                <div class="row">
                                    <div class="col-12 col-md-4 col-sm-6 col-lg-6">
                                        <ul class="list-unstyled contact-list">
                                            <li><i class="las la-check"></i> Reduce Greenhouse Effect</li>
                                            <li><i class="las la-check"></i>Conserv Natural Resources</li>
                                            <li><i class="las la-check"></i>Reduces Carbon Emissions</li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-4 col-sm-6 col-lg-6">
                                        <ul class="list-unstyled contact-list">
                                            <li><i class="las la-check"></i>Protects Ecosystems </li>
                                            <li><i class="las la-check"></i>Economic Benefits.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-btn">
                                <a class="main-btn white" href="contact.html">Contact Us</a>                            
                            </div>
    
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 offset-xl-1 wow fadeInUp" data-wow-delay=".4s">
                        <div class="quotation-wrap">
                            <div class="quotation-inner">
                                <h5 class="quotation-heading">Request A Quote</h5>
                                <p class="quotation-desc">
                                    There are various ways to reduce waste so you can have the peace of mind that you’re making a positive impact.
                                </p>
                                <form action="https://www.iideainformatics.it/html/devgalaxy/ecofix_v1_1/index.html">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label>Name
                                            </label>
                                            <input class="form-control" type="text" placeholder="Name" required="">
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Company Name
                                            </label>
                                            <input class="form-control" type="text" placeholder="Compnay Name"
                                                required="" >
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Contact Number
                                            </label>
                                            <input class="form-control" type="number" placeholder="Contact Number"
                                                required="" >
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>E-mail
                                            </label>
                                            <input class="form-control" type="email" placeholder="E-mail" required="" >
                                        </div>
                                        <div class="col-lg-6 col-md-12 mb-20">
                                            <label>Service Type
                                            </label>
                                            <div class="quotation-item">
                                                <select class="form-dropdown form-control select_option"
                                                    name="service_provider" data-component="dropdown">
                                                    <option value="0"> Select Service Type </option>
                                                    <option value="1"> Commercial </option>
                                                    <option value="2"> Residential </option>
                                                    <option value="3"> Industrial </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 mb-20">
                                            <label>Recycling Type
                                            </label>
                                            <div class="quotation-item">
                                                <select class="form-dropdown form-control select_option"
                                                    name="service_provider" data-component="dropdown">
                                                    <option value="0"> Select Recycling Type </option>
                                                    <option value="1"> Plastic Recycling </option>
                                                    <option value="2"> Paper Recycling </option>
                                                    <option value="3"> Glass Recycling </option>
                                                    <option value="4"> Aluminium Recycling </option>
                                                    <option value="5"> Electronics Recycling </option>
                                                    <option value="6"> Metal Recycling </option>
    
                                                </select>
                                            </div>
                                        </div>
    
    
                                        <div class="col-12 col-md-6">
                                            <label>Pickup Date
                                            </label>
                                            <input class="form-control" type="date" required="" >
                                        </div>
    
                                        <div class="col-12 col-md-6">
                                            <label>Pickup Time
                                            </label>
                                            <input class="form-control" type="time" required="" >
                                        </div>
    
                                        <div class="col-12">
                                            <button class="main-btn primary">submit request</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
    
        <!-- Blog Section-->
        <div class="blog-area section-padding pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="section-title">
                            <h6>Read Blog About Recycling</h6>
                            <h2>Our Latest News & Articles</h2>
                        </div>
                    </div>
    
                    <div class="col-lg-6 text-end"></div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".2s">
                        <div class="single-blog-item">
                            <div class="blog-bg">
                                <img src="{{asset('img2/blog/1.jpg')}}" alt="" >
                                <span class="blog-date">25 Feb</span>
                            </div>
                            <div class="blog-content">
                                <p class="blog-meta">
                                    <i class="las la-user-circle"></i>Admin
                                    <i class="las la-comments"></i>13
                                </p>
                                <h5>
                                    <a href="blog-details.html">Sainsbury’s Announces New In-Store Wastage Recycling
                                        Scheme</a>
                                </h5>
                                <p>
                                    There are some reason Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Dolorem, facilis perferendis ipsam.
                                </p>
                                <a href="blog-details.html" class="read-more">Read More</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".4s">
                        <div class="single-blog-item">
                            <div class="blog-bg">
                                <img src="{{asset('img2/blog/2.jpg')}}" alt="" >
                                <span class="blog-date">07 Mar</span>
                            </div>
                            <div class="blog-content">
                                <p class="blog-meta">
                                    <i class="las la-user-circle"></i>Admin
                                    <i class="las la-comments"></i>13
                                </p>
                                <h5>
                                    <a href="blog-details.html">Plastic Free July: Who produces the most plastic waste?
                                    </a>
                                </h5>
                                <p>
                                    There are some reason Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Dolorem, facilis perferendis ipsam.
                                </p>
                                <a href="blog-details.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".6s">
                        <div class="single-blog-item">
                            <div class="blog-bg">
                                <img src="{{asset('img2/blog/3.jpg')}}" alt="" >
                                <span class="blog-date">30 Apr</span>
                            </div>
                            <div class="blog-content">
                                <p class="blog-meta">
                                    <i class="las la-user-circle"></i>Admin
                                    <i class="las la-comments"></i>13
                                </p>
                                <h5>
                                    <a href="blog-details.html">Government figures show declining recycling rates in the
                                        UK</a>
                                </h5>
                                <p>
                                    There are some reason Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Dolorem, facilis perferendis ipsam.
                                </p>
                                <a href="blog-details.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection