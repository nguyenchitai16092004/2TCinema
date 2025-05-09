<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <base href="{{ asset('/frontend') }}/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('frontend/Content/img/lgCineTick.png') }}" type="image/png">

        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- External CSS -->
    <link href="Content/Stylebf25.css" rel="stylesheet" />


</head>

<body>


    @include('frontend.partials.header')
    @yield('main')
    @include('frontend.partials.footer')


</body>


</html>
