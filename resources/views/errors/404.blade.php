@extends('frontend.layouts.master')
@section('title', '404')
@section('main')
    <link rel="stylesheet" href="{{ asset('frontend/Content/css/404.css') }}">
    <div style="display:none" class="main-reloader">
        <div class="loader">Loading...</div>
    </div>
    <div class="content">
        <h1 class="title-404">404</h1>
        <img class="img-404" src="{{ asset('frontend/Content/img/error.gif') }}" alt="">        <div class="text-404">
            <h2>Có vẻ bạn đang tìm gì đó?</h2>
            <p>Trang bạn đang tìm kiếm hiện <b> không tồn tại</b>. Vui lòng thử <b>tải lại trang</b> hoặc quay lại <b>Trang
                    chủ!</b></p>
            <!-- From Uiverse.io by catraco -->



        </div>
    </div>
@stop
