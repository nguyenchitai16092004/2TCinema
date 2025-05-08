@extends('frontend.layouts.master')
@section('title', 'Chi tiết phim')
@section('main')
    <section class="filmoja-breadcrumb-area section_30 container "
        style="background: #e6e7e9; max-width: 100% !important; border-top: 1px solid;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="movie-details-banner">

                        <div class="row">
                            <div class="col-lg-3 col-sm-4">
                                <div class="details-banner-thumb">
                                    <img src="{{$phim->HinhAnh}}"
                                        alt="{{$phim->TenPhim}}">
                                </div>
                            </div>
                            <div class="col-lg-9 col-sm-8">
                                <div class="details-banner-info">
                                    <h3 style="color: #22272b">{{$phim->TenPhim}}</h3>
                                    <p style="color: #22272b"></p>
                                    <p
                                        style="background: #f37737; width: 35px; height: 35px; text-align: center; line-height: 35px; border-radius: 2px; color: white; font-weight: bold; letter-spacing: 2px; box-shadow: 1px 1px 4px 0px #4e4e54;">
                                        T18</p>
                                    <p style="color: #22272b" class="details-genre">Kinh dị - <span>2D</span></p>
                                    <a href="https://www.youtube.com/watch?v=-EORS34ruHY"
                                        class="filmoja-btn tablet-action popup-youtube"><i
                                            class="fa fa-play"></i>trailer</a>
                                    <ul>
                                        <li><b>Đạo diễn</b> : {{$phim->DaoDien}}</li>
                                        <li><b>Ngày chiếu</b> : {{$phim->NgayKhoiChieu}}</li>
                                        <li><b>Diễn viên</b> : {{$phim->DienVien}}</li>
                                        <li><b>Thời lượng</b> : {{$phim->ThoiLuong}}</li>
                                    </ul>
                                    <div class="fb-share-button"
                                        data-href="https://starlight.vn/film/nguoi-soi-t18/700eb769-4e56-4435-a7b0-ce9e4b65b44c.html"
                                        data-layout="button" data-size="small"><a target="_blank"
                                            href="https://www.facebook.com/sharer/sharer.php?u=https://starlight.vn/film/nguoi-soi-t18/700eb769-4e56-4435-a7b0-ce9e4b65b44c.html"
                                            class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                                </div>

                                <div class="movie-details-page-box">
                                    <div class="tv-panel-list">

                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade active show" id="pills-brief" role="tabpanel"
                                                aria-labelledby="pills-brief-tab">
                                                <div class="tab-movies-details">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="tab-body">
                                                                <p>Một gia đ&#236;nh chuyển đến sinh sống tại một ng&#244;i
                                                                    nh&#224; của người cha bị mất t&#237;ch b&#237; ẩn.
                                                                    V&#224;o đ&#234;m trăng tr&#242;n, họ bị tấn c&#244;ng
                                                                    bởi một người s&#243;i, khiến người chồng bị c&#224;o
                                                                    v&#224;o tay. Khi cố thủ trong nh&#224;, anh bắt đầu
                                                                    biến đổi th&#224;nh một sinh vật đ&#225;ng sợ, đe dọa
                                                                    t&#237;nh mạng vợ v&#224; con g&#225;i.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Row -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="filmoja-movie-details-page section_70 container bg-main"
        style="background: #e6e7e9; max-width: 100% !important;">
        <div class="container" style="padding:0">
            <div class="row">
                <div class="col-lg-12 offset-lg-12">
                    <div class="col-lg-12">
                        <h4
                            style="margin-bottom: 15px; text-transform: uppercase; font-weight: 500; color: #444444; text-decoration: underline; background-image: url(../../Content/img/tag.png); -webkit-background-size: 21px 6px; background-size: 21px 6px; background-position: left center; background-repeat: no-repeat; padding-left: 30px;">
                            Lịch chiếu</h4>
                    </div>


                    <div class="col-md-12 col-sm-12 collaps_theater"
                        style="height: 100px; overflow: hidden; margin-bottom: 15px; " id="theater_1">
                        <div style="width: 100%; display: flex; justify-content: space-between; height: 100px; "
                            onclick="collapseTheater('theater_1')">
                            <h2
                                style="background: #e6e7e9; color: #f37737; text-align: left; padding: 10px; width: 95%; font-size: 23px; border: 2px solid;">
                                STARLIGHT BUÔN MA THUỘT
                                <br />
                                <small style="font-size: 13px; color: #333;">Tầng 6 Tòa Nhà Vincom - 78 Lý Thường Kiệt - TP.BMT</small>
                            </h2>
                            <div style="width: 5%; height: 100px " onclick="collapseTheater('theater_1')">
                                <i onclick="collapseTheater('theater_1')" class="fa fa-angle-double-up"
                                    style="font-size: 30px;background: #f37737;width: 100%;text-align: center;color: #fbfbfb;padding-top: 25px;height:100%"></i>
                            </div>
                        </div>
                        <div style="width: 100%; display: flex; justify-content: space-between; margin: 15px 0; border-bottom: 1px dotted; padding-bottom: 10px;"
                            class="collaps_theater_content">
                            <div style="padding:0" class="col-lg-2 col-md-3 col-sm-12">
                                <span class="time"
                                    style="background: #444444; display: inline-flex; width: 100%; height: 100%; align-content: center; align-items: center; min-height: 50px; margin-bottom: 5px ">02/03/2025</span>
                            </div>

                            <div style="padding-right:0" class="col-lg-10 col-md-9 col-sm-12">
                                <div class="clearfix" style="clear:both"></div>
                            </div>
                        </div>
                        <div class="clearfix" style="clear:both"></div>
                        <div style="width: 100%; display: flex; justify-content: space-between; margin: 15px 0; border-bottom: 1px dotted; padding-bottom: 10px;"
                            class="collaps_theater_content">
                            <div style="padding:0" class="col-lg-2 col-md-3 col-sm-12">
                                <span class="time"
                                    style="background: #444444; display: inline-flex; width: 100%; height: 100%; align-content: center; align-items: center; min-height: 50px; margin-bottom: 5px ">03/03/2025</span>
                            </div>

                            <div style="padding-right:0" class="col-lg-10 col-md-9 col-sm-12">
                                <a href="{{ asset('/dat-ve') }}"
                                    style="display: inline-flex;margin-bottom: 3px;"><span
                                        class="time item">11:10</span></a>
                            </div>
                        </div>
                        <div class="clearfix" style="clear:both"></div>
                        <div style="width: 100%; display: flex; justify-content: space-between; margin: 15px 0; border-bottom: 1px dotted; padding-bottom: 10px;"
                            class="collaps_theater_content">
                            <div style="padding:0" class="col-lg-2 col-md-3 col-sm-12">
                                <span class="time"
                                    style="background: #444444; display: inline-flex; width: 100%; height: 100%; align-content: center; align-items: center; min-height: 50px; margin-bottom: 5px ">04/03/2025</span>
                            </div>

                            <div style="padding-right:0" class="col-lg-10 col-md-9 col-sm-12">
                                <a href="../../dat-ved9a0.html?film_name=NG%c6%af%e1%bb%9cI%20S%c3%93I%20(T18)&amp;time_id=88e7a5e6-3039-4923-a10c-fe05a32ea3af&amp;date=04/03/2025&amp;format=2D&amp;room=05&amp;image=https://starlight.vn/Areas/Admin/Content/Fileuploads/images/Poster2024/ng-soi(1).jpg&amp;time=09:10&amp;server_id=1&amp;r_date=04/03/2025"
                                    style="display: inline-flex;margin-bottom: 3px;"><span
                                        class="time item">09:10</span></a>
                            </div>
                        </div>
                        <div class="clearfix" style="clear:both"></div>
                    </div>

                    <script>
                        function collapseTheater(id) {
                            var theaterDiv = document.getElementById(id);
                            if (theaterDiv.style.height == "auto") {
                                theaterDiv.style.height = "100px";
                                $($(theaterDiv).find("i")[0]).attr("class", "fa fa-angle-double-up");
                            } else {
                                theaterDiv.style.height = "auto";
                                $($(theaterDiv).find("i")[0]).attr("class", "fa fa-angle-double-down");
                            }
                        }
                    </script>

                </div>
            </div>
        </div>
    </section>
@stop
