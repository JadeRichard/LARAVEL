<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Back
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet" />
</head>

<body class="">
            @yield('content')
            @yield('users.all')
            @yield('users.show')
            @yield('users.edit')
            @yield('users.create')
            @yield('roles.all')
            @yield('roles.show')
            @yield('roles.edit')
            @yield('roles.create')
  <!--   Core JS Files   -->
  <script src="{{ asset("js/core/jquery.min.js") }}"></script>
  <script src="{{ asset("js/core/bootstrap.min.js") }}"></script>
</body>

</html>
