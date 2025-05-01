@extends('layouts.frontend2')
@section('title', 'Vigilium - Services')

@section('content')
<div class="preloader"></div>
<div class="breadcroumb-area glass-bg">
    <div class="overlay-2"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcroumb-title text-center">
                    <h1>Services</h1>
                    <h6><a href="{{ route('index') }}">Accueil</a> / Services</h6>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Service Details Start-->
<section class="service-details pb-100">
<div class="container">
    <div class="row gx-5">
        <div class="col-xl-4 col-lg-5">
            <div class="service-details_sidebar">
                <div class="service-details_sidebar-service">
                    <ul class="service-details_sidebar-service-list list-unstyled">
                        <li class="d-block"><a href="{{ route('service1') }}">Service 1<span> <i class="las la-long-arrow-alt-right"></i></span></a></li>
                        <li class="d-block"><a href="{{ route('service2') }}">Service 2<span> <i class="las la-long-arrow-alt-right"></i></span></a></li>
                        <li class="d-block current"><a href="{{ route('service3') }}">Service 3<span> <i class="las la-long-arrow-alt-right"></i></span></a></li>
                        <li class="d-block"><a href="{{ route('service4') }}">Service 4<span> <i class="las la-long-arrow-alt-right"></i></span></a></li>
                        <li class="d-block"><a href="{{ route('service5') }}">Service 5<span> <i class="las la-long-arrow-alt-right"></i></span></a></li>
                        <li class="d-block"><a href="{{ route('service6') }}">Service 6<span> <i class="las la-long-arrow-alt-right"></i></span></a></li>
                    </ul>
                </div>
                <div class="service-details_need-help">
                    <div class="service-details_need-help-bg">
                    </div>
                    <h2 class="service-details_need-help-title">Contact with us for any advice</h2>
                    <div class="service-details_need-help-icon">
                        <i class="las la-phone"></i>
                    </div>
                    <div class="service-details_need-help-contact">
                        <p>Call Anytime</p>
                        <a href="tel:13077760608">+229 0166539345</a>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-xl-8 col-lg-7">
            <div class="service-details_right">
                <div class="service-details_img">
                    <img src="{{asset('img2/service-details/glass_recycle.jpg')}}" alt="">
                    <div class="service-details_img-icon">
                        <img src="{{asset('img2/icon/glass.png')}}" alt="">
                    </div>
                </div>
                <div class="service-details_content">
                    <h3 class="service-details_title">Glass Recycling</h3>
                    <p class="service-details_text-1">Glass, especially glass food and beverage containers, can be recycled over and over again. In the United States in 2018, 12.3 million tons of glass were generated, 31.3 percent of which was recycled. Making new glass from recycled glass is typically cheaper than using raw materials. Most curbside recycling programs accept different glass colors and types mixed together and then sort the glass at the recovery facility. </p>
                    <p class="service-details_text-2">Check what your community or office program accepts before you put it in the bin. Look for products that are made from recycled paper when you shop. Better yet, consider if you really need to print in the first place.</p>
                    <p class="service-details_text-2">If the book is still in good condition, try donating it! Schools, places of faith, charities, and non-profits will often accept book donations. If the book is not in usable condition, it can be recycled. Paperback books can be recycled as-is; remove the cover from a hardcover book before recycling it.</p>
                </div>
                <ul class="service-details_two-icons list-unstyled">
                    <li class="service-details_two-icon-single">
                        <div class="service-details_two-icon">
                            <span class="service-icon">
                                <img src="{{asset('img2/icon/1.png')}}" alt="">
                            </span>
                        </div>
                        <p class="service-details_two-icon-content">Recycling also helps create clean environment & save ecology.</p>
                    </li>
                    <li class="service-details_two-icon-single">
                        <div class="service-details_two-icon">
                            <span class="service-icon">
                                <img src="{{asset('img2/icon/2.png')}}" alt="">
                            </span>
                        </div>
                        <p class="service-details_two-icon-content">We can all make a difference by practicing proper recycling.</p>
                    </li>
                </ul>
                <p class="service-details_text-3">Paper gift wrap often is not recyclable when it has a shiny or laminated coating. If you use gift wrap, purchase a type that can be recycled or is made from recycled content. EPA encourages consumers to reuse gift bags, boxes, and tissue paper. Newspaper is an excellent alternative to gift wrap. </p>
                <div class="service-details_bottom">
                    <div class="service-details_bottom-icon">
                        <img src="{{asset('img2/icon/recycling.png')}}" alt="">
                    </div>
                    <p class="service-details_bottom-text">Recycling is the process of collecting and processing materials that would otherwise be thrown away as trash and turning them into new products. Recycling can benefit your community, the economy and the environment.</p>
                </div>								
            </div>
        </div>
    </div>
</div>
</section>
@endsection