@extends('frontend.layouts.master')
@section('title', '404')
@section('main')
    <div style="display:none" class="main-reloader">
        <div class="loader">Loading...</div>
    </div>
    <section class="filmoja-notfound-area section_70" style="background: url(Content/img/bg.jpg);background-size: 100%;height: 100%;">
        <div class="container" style="background: #fff;height: 100%;">
            <div class="row">
                <div class="col-md-12">
                    <div class="notfound-box">
                        <h1>4<span class="fa fa-frown-o"></span>4</h1>
                        <h3 style="font-family:Arial">
                            Xin lỗi, chúng tôi không thể tìm thấy nội dung bạn đang tìm kiếm.
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop