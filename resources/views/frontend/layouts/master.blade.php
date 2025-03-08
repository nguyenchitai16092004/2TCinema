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
    <meta name='revisit-after' content='7 days' />
    <title>@yield('title')</title>
    <meta itemprop='name' content='Rạp phim Starlight'>
    <meta property='og:title' content='Rạp phim Starlight' />
    <meta name='twitter:title' content ='Rạp phim Starlight' />
    <meta name='twitter:card' content ='summary' />
    <meta name='description' content ='Rạp phim Starlight' />
    <meta name='twitter:description' content ='Rạp phim Starlight' />
    <meta itemprop='description' content='Rạp phim Starlight' />
    <meta property='og:description' content='Rạp phim Starlight' />
    <meta property='og:locale' content='vi_VN' />
    <link rel='alternate' hreflang='vi_VN' href='index.html'>
    <meta property='og:type' content='website' />
    <meta name='keywords' content='Rạp phim Starlight' />
    <meta property='og:site_name' content='StarLightSITE' />
    <meta name='twitter:site' content ='StarLightSITE' />
    <meta name='robots' content='index,follow' />
    <meta property='fb:admins' content='' />
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:thin,extra-light,light,bold,100,200,300,400,500,600,700,800"
        rel="stylesheet">
    <!-- External CSS -->
    <link href="Content/Stylebf25.css?v=2eyCs_lCoVJbkUS9Odb-D-LO5Gx5E3OJs8QOHVYOmFc1" rel="stylesheet" />


    <!-- Google Fonts -->
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico">
    <script src="../cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
        var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "d17589a4-68d3-451d-98d8-ffef22409a32",
            });
        });
    </script>
</head>

<body>


    @include('frontend.partials.header')
    @yield('main')
    @include('frontend.partials.footer')


</body>

<!-- Mirrored from starlight.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Mar 2025 13:00:14 GMT -->

</html>
