<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from starlight.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Mar 2025 12:59:37 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <base href="{{ asset('/frontend') }}/">
    <!-- Site information -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:thin,extra-light,light,bold,100,200,300,400,500,600,700,800"
        rel="stylesheet">
    <!-- External CSS -->
    <link href="Content/Stylebf25.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link rel="icon" href="Content/img/logo_favicon.png">

</head>

<body>


    @include('frontend.partials.header')
    @yield('main')
    @include('frontend.partials.footer')


</body>

<!-- Mirrored from starlight.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Mar 2025 13:00:14 GMT -->

</html>
