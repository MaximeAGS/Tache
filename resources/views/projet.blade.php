@extends('layouts.frontend2')
@section('title', 'Vigilium - Projets')

@section('content')
<div class="preloader"></div>
<div class="breadcroumb-area project-bg">
    <div class="overlay-2"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcroumb-title text-center">
                    <h1>Projet</h1>
                    <h6><a href="{{ route('index') }}">Accueil</a> / Projet</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Project Section  -->

<div class="project-area gray-bg section-padding pb-80">
    <div class="container">            
        <div class="project-wrap-2">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="project-single">
                        <div class="project-img">
                            <img src="{{asset('img2/project/1.jpg')}}" alt="">
                        </div>
                        <div class="project-content">
                            <div class="project-cat">
                                <a href="standard_courier.html">Residential, </a>
                                <a href="express.html">Commerical</a>
                            </div>
                            <div class="project-title">
                                <h4>Paper Recycling Services</h4>
                            </div>
                            <div class="project-desc">
                                <p>Paper makes up 23 percent of municipal solid waste (trash) generated each year, more than
                                    any other material.</p>
                            </div>
                            <div class="project-more">
                                <a class="main-btn border-btn" href="project-details.html">explore more <i
                                        class="las la-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="project-single">
                        <div class="project-img">
                            <img src="{{asset('img2/project/2.jpg')}}" alt="">
                        </div>
                        <div class="project-content">
                            <div class="project-cat">
                                <a href="standard_courier.html">Commercial, </a>
                                <a href="express.html">Industrial</a>
                            </div>
                            <div class="project-title">
                                <h4>Plastic Recycling Services</h4>
                            </div>
                            <div class="project-desc">
                                <p>More than 35 million tons of plastics were generated in the United States in 2018 and
                                    only 8.7 percent was recycled. </p>
                            </div>
                            <div class="project-more">
                                <a class="main-btn border-btn" href="project-details.html">explore more <i
                                        class="las la-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="project-single">
                        <div class="project-img">
                            <img src="{{asset('img2/project/3.jpg')}}" alt="">
                        </div>
                        <div class="project-content">
                            <div class="project-cat">
                                <a href="standard_courier.html">Industrial, </a>
                                <a href="express.html">Commercial</a>
                            </div>
                            <div class="project-title">
                                <h4>Metal Recycling Services</h4>
                            </div>
                            <div class="project-desc">
                                <p>Their primary purpose is to ship normal packages in basically the same ways that the
                                    metal factory wise service does.</p>
                            </div>
                            <div class="project-more">
                                <a class="main-btn border-btn" href="project-details.html">explore more <i
                                        class="las la-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="project-single">
                        <div class="project-img">
                            <img src="{{asset('img2/project/4.jpg')}}" alt="">
                        </div>
                        <div class="project-content">
                            <div class="project-cat">
                                <a href="standard_courier.html">Residential, Commercial, </a>
                                <a href="express.html">Industrial</a>
                            </div>
                            <div class="project-title">
                                <h4>Aluminium Recycling Services</h4>
                            </div>
                            <div class="project-desc">
                                <p>In 2018, 3.9 million tons of aluminum municipal solid waste was generated. The total
                                    recycling rate was 34.9 percent. </p>
                            </div>
                            <div class="project-more">
                                <a class="main-btn border-btn" href="project-details.html">explore more <i
                                        class="las la-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="project-single">
                        <div class="project-img">
                            <img src="{{asset('img2/project/13.jpg')}}" alt="">
                        </div>
                        <div class="project-content">
                            <div class="project-cat">
                                <a href="standard_courier.html">Residential, Commercial, </a>
                                <a href="express.html">Industrial</a>
                            </div>
                            <div class="project-title">
                                <h4>Electric Recycling Services</h4>
                            </div>
                            <div class="project-desc">
                                <p>In 2018, 3.9 million tons of electrical municipal solid waste was generated. The total
                                    recycling rate was 16.5 percent. </p>
                            </div>
                            <div class="project-more">
                                <a class="main-btn border-btn" href="project-details.html">explore more <i
                                        class="las la-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="project-single">
                        <div class="project-img">
                            <img src="{{asset('img2/project/14.jpg')}}" alt="">
                        </div>
                        <div class="project-content">
                            <div class="project-cat">
                                <a href="standard_courier.html">Residential, Commercial, </a>
                                <a href="express.html">Industrial</a>
                            </div>
                            <div class="project-title">
                                <h4>Glass Recycling Services</h4>
                            </div>
                            <div class="project-desc">
                                <p>In 2018, 6.9 million tons of glass municipal solid waste was generated. The total
                                    recycling rate was 24.5 percent. </p>
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
    </div>
</div>

<!-- Process Section  -->

<div class="process-area-2 section-padding pb-60">
    <div class="container">
        <div class="row">
            <div class="offset-lg-2 col-lg-8 text-center">
                <div class="section-title">
                    <h6>Follow Simple Steps</h6>
                    <h2>Our Working Process</h2>
                </div>
            </div>
        </div>
        <div class="process-wrap">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="single-process-wrap">
                        <div class="process-icon dark-bg">
                            <img src="{{asset('img2/icon/collection.png')}}" alt="" >
                        </div>
                        <div class="process-content">
                            <h3>Collection</h3>
                            <p>
                                Recycling is the process of making used or unwanted products
                                into new.
                            </p>
                        </div>
                        <div class="counting-box"><span>01</span></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="single-process-wrap">
                        <div class="process-icon dark-bg">
                            <img src="{{asset('img2/icon/pickup.png')}}" alt="" >
                        </div>
                        <div class="process-content">
                            <h3>Pickup</h3>
                            <p>
                                Recycling is the process of making used or unwanted products
                                into new.
                            </p>
                        </div>
                        <div class="counting-box top"><span>02</span></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="single-process-wrap">
                        <div class="process-icon dark-bg">
                            <img src="{{asset('img2/icon/processing.png')}}" alt="" >
                        </div>
                        <div class="process-content">
                            <h3>Processing</h3>
                            <p>
                                Recycling is the process of making used or unwanted products
                                into new.
                            </p>
                        </div>
                        <div class="counting-box"><span>03</span></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="single-process-wrap">
                        <div class="process-icon dark-bg">
                            <img src="{{asset('img2/icon/recycling.png')}}" alt="" >
                        </div>
                        <div class="process-content">
                            <h3>Recycling</h3>
                            <p>
                                Recycling is the process of making used or unwanted products
                                into new.
                            </p>
                        </div>
                        <div class="counting-box top"><span>04</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection