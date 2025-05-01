<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>@yield('title', 'Vigilium')</title>

    <!--Favicon-->
    <link rel="icon" href="{{asset('img/vigi1.png')}}" type="image/jpg" >
    <!-- Bootstrap CSS -->
    <link href="{{asset('css2/bootstrap.min.css')}}" rel="stylesheet" >
    <!-- Line Awesome CSS -->
    <link href="{{asset('css2/line-awesome.min.css')}}" rel="stylesheet" >
    <!-- Animate CSS-->
    <link href="{{asset('css2/animate.css')}}" rel="stylesheet" >
    <!-- Bar Filler CSS -->
    <link href="{{asset('css2/barfiller.css')}}" rel="stylesheet" >
    <!-- Magnific Popup Video -->
    <link href="{{asset('css2/magnific-popup.css')}}" rel="stylesheet" >
    <!-- Flaticon CSS -->
    <link href="{{asset('css2/flaticon.css')}}" rel="stylesheet" >
    <!-- Owl Carousel CSS -->
    <link href="{{asset('css2/owl.carousel.css')}}" rel="stylesheet" >
    <!-- Slick CSS -->
    <link href="{{asset('css2/slick.css')}}" rel="stylesheet" >
    <!-- Nice Select  -->
    <link href="{{asset('css2/nice-select.css')}}" rel="stylesheet" >
    <!-- Style CSS -->
    <link href="{{asset('css2/style.css')}}" rel="stylesheet" >
    <!-- Responsive CSS -->
    <link href="{{asset('css2/responsive.css')}}" rel="stylesheet" >

    <!-- jquery -->
    <script src="{{asset('js2/jquery-1.12.4.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
    <!-- Popper JS -->
    <script src="{{asset('js2/popper.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('js2/bootstrap.min.js')}}"></script>
    <!-- Wow JS -->
    <script src="{{asset('js2/wow.min.js')}}"></script>
    <!-- Way Points JS -->
    <script src="{{asset('js2/jquery.waypoints.min.js')}}"></script>
    <!-- Counter Up JS -->
    <script src="{{asset('js2/jquery.counterup.min.js')}}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{asset('js2/owl.carousel.min.js')}}"></script>
    <!-- Slick JS -->
    <script src="{{asset('js2/slick.js')}}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{asset('js2/magnific-popup.min.js')}}"></script>
    <!-- Sticky JS -->
    <script src="{{asset('js2/jquery.sticky.js')}}"></script>
    <!-- Nice Select JS -->
    <script src="{{asset('js2/jquery.nice-select.min.js')}}"></script>
    <!-- Progress Bar JS -->
    <script src="{{asset('js2/jquery.barfiller.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('js2/main.js')}}"></script>
</body>
</html>