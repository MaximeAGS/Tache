        <!-- Header Top Area -->
        
        <div class="header-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-xs-12">
                        <div class="contact-info">
                            <i class="las la-map-marker"></i> Cotonou, Bénin.
                            <i class="las la-envelope"></i> info@vigilium.com
                            <i class="las la-phone"></i> +229 0166539345
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-xs-12 text-end">
                        <div class="header_top_right">
                            <div class="social-area">
                                <a href="#"><i class="lab la-facebook-f"></i></a>
                                <a href="#"><i class="lab la-youtube"></i></a>
                                <a href="#"><i class="lab la-twitter"></i></a>
                            </div>
                            <div class="quick_link">
                                <ul>
                                    @auth
                                        @if(Auth::user()->is_admin)
                                            <li>
                                                @if(Auth::user()->profile_photo)
                                                    <img src="{{ asset('storage/profile/' . Auth::user()->profile_photo) }}" alt="Profile Image" width="30" class="rounded-circle" />
                                                @else
                                                    <i class="fas fa-user-circle fa-lg"></i>
                                                @endif
                                                <a href="{{ route('admin.index') }}">Tableau de bord</a>
                                            </li>
                                        @else
                                            <li>
                                                @if(Auth::user()->profile_photo)
                                                    <img src="{{ asset('storage/profile/' . Auth::user()->profile_photo) }}" alt="Profile Image" width="30" class="rounded-circle" />
                                                @else
                                                    <i class="fas fa-user-circle fa-lg"></i>
                                                @endif
                                                <a href="{{ route('user.index') }}">Tableau de bord</a>
                                            </li>
                                        @endif
                                    @else
                                        <li><a href="{{ route('user.register') }}">S'inscrire</a></li>
                                        <li><a href="{{ route('login') }}">Se connecter</a></li>
                                    @endauth
                                </ul>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Header Area -->
    
        <div class="header-area">
            <div class="sticky-area">
                <div class="navigation">
                    <div class="container-fluid">
                        <div class="header-inner-box">
                            <div class="logo">
                                <a class="navbar-brand" href="{{ route('index') }}">
                                    <img src="{{ asset('img/vigi.png') }}" alt="" style="max-width: 150px;">
                                </a>
                            </div>                            
    
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                        <span class="navbar-toggler-icon"></span>
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
    
                                    <div class="collapse navbar-collapse justify-content-center"
                                        id="navbarSupportedContent">
                                        <ul class="navbar-nav m-auto">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="{{ route('index') }}">Accueil
                                                    <span class="sub-nav-toggler"> </span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"href="{{ route('about') }}">A Propos
                                                    <span class="sub-nav-toggler"> </span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('service1') }}">Services
                                                    <span class="sub-nav-toggler"> </span>
                                                </a>
                                            </li>                                        
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('projet') }}">Projet
                                                    <span class="sub-nav-toggler"> </span>
                                                </a>
                                            </li>
    
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Blog
                                                    <span class="sub-nav-toggler"> </span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog-standard.html">Blog-Standard</a></li>
                                                    <li><a href="blog-classic.html">Blog-Classic</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('contact') }}">Contactez-Nous</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
    
                            <div class="icon-wrapper">
                                <div class="search-icon search-trigger"><i class="las la-search"></i></div>
                            </div>
    
                            {{-- <div class="header-btn">
                                <a href="quotation.html" class="main-btn primary">Get a Quote</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Search Dropdown Area -->
    
        <div class="search-popup">
            <span class="search-back-drop"></span>
    
            <div class="search-inner">
                <div class="container">
                    <div class="upper-text">
                        <div class="text">Search for anything.</div>
                        <button class="close-search"><span class="la la-times"></span></button>
                    </div>
    
                    <form method="post" action="https://www.iideainformatics.it/html/devgalaxy/ecofix_v1_1/index.html">
                        <div class="form-group">
                            <input type="search" name="search-field" value="" placeholder="Search..." required="">
                            <button type="submit"><i class="la la-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>