<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>@yield('title', 'Vigilium')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/vigi1.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @stack('styles')
    
</head>
<body>

    @yield('content')

    <!-- jQuery -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Feather Icon JS -->
    <script src="{{ asset('js/feather.min.js') }}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset('plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ asset('plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('plugins/apexchart/chart-data.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/script.js') }}"></script>

    @stack('scripts')
    @if(session('notify'))
        <script>
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: "{{ session('notify.type') }}", 
                title: "{!! session('notify.message') !!}",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        </script>
    @endif

</body>
</html>
