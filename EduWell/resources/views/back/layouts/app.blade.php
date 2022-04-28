<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <link rel='stylesheet' href='{{ asset('css/app.css') }}'>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset("css/fontawesome.css") }}">
    <link rel="stylesheet" href="{{ asset("css/templatemo-eduwell-style.css") }}">
    <link rel="stylesheet" href="{{ asset("css/owl.css") }}">
    <link rel="stylesheet" href="{{ asset("css/lightbox.css") }}">
</head>
<body>
    
    @include('back.partials.navback')
    @yield('content')
    
    <script src='{{ asset('js/app.js') }}'></script>
</body>
</html>
