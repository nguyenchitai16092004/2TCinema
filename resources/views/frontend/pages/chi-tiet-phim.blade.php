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
                                STARLIGHT BU&#212;N MA THUỘT
                                <br />
                                <small style="font-size: 13px; color: #333;">Tầng 6 T&#242;a Nh&#224; Vincom - 78 L&#253;
                                    Thường Kiệt - TP.BMT</small>
                            </h2>
                            <div style="width: 5%; height: 100px " onclick="collapseTheater('theater_1')">
                                <i class="fa fa-angle-double-up"
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
                                <a href="../../dat-ve76c5.html?film_name=NG%c6%af%e1%bb%9cI%20S%c3%93I%20(T18)&amp;time_id=a2fd39bd-b050-4bbb-8b8e-59fc2eb51498&amp;date=03/03/2025&amp;format=2D&amp;room=05&amp;image=https://starlight.vn/Areas/Admin/Content/Fileuploads/images/Poster2024/ng-soi(1).jpg&amp;time=11:10&amp;server_id=1&amp;r_date=03/03/2025"
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
                    <div class="col-md-12 col-sm-12 collaps_theater"
                        style="height: 100px; overflow: hidden; margin-bottom: 15px; " id="theater_2">
                        <div style="width: 100%; display: flex; justify-content: space-between; height: 100px; "
                            onclick="collapseTheater('theater_2')">
                            <h2
                                style="background: #e6e7e9; color: #f37737; text-align: left; padding: 10px; width: 95%; font-size: 23px; border: 2px solid;">
                                STARLIGHT Đ&#192; NẴNG
                                <br />
                                <small style="font-size: 13px; color: #333;">Tầng 4 T&#242;a nh&#224; Nguyễn Kim, 46 Điện
                                    Bi&#234;n Phủ, TP. Đ&#224; Nẵng</small>
                            </h2>
                            <div style="width: 5%; height: 100px " onclick="collapseTheater('theater_2')">
                                <i class="fa fa-angle-double-up"
                                    style="font-size: 30px;background: #f37737;width: 100%;text-align: center;color: #fbfbfb;padding-top: 25px;height:100%"></i>
                            </div>
                        </div>
                        <div style="width: 100%; display: flex; justify-content: space-between; margin: 15px 0; border-bottom: 1px dotted; padding-bottom: 10px;"
                            class="collaps_theater_content">
                            <div style="padding:0" class="col-lg-2 col-md-3 col-sm-12">
                                <span class="time"
                                    style="background: #444444; display: inline-flex; width: 100%; height: 100%; align-content: center; align-items: center; min-height: 50px; margin-bottom: 5px">02/03/2025</span>
                            </div>

                            <div style="padding-right:0" class="col-lg-10 col-md-9 col-sm-12">
                            </div>
                        </div>
                        <div class="clearfix" style="clear:both"></div>
                        <div style="width: 100%; display: flex; justify-content: space-between; margin: 15px 0; border-bottom: 1px dotted; padding-bottom: 10px;"
                            class="collaps_theater_content">
                            <div style="padding:0" class="col-lg-2 col-md-3 col-sm-12">
                                <span class="time"
                                    style="background: #444444; display: inline-flex; width: 100%; height: 100%; align-content: center; align-items: center; min-height: 50px; margin-bottom: 5px">03/03/2025</span>
                            </div>

                            <div style="padding-right:0" class="col-lg-10 col-md-9 col-sm-12">
                                <a href="../../dat-ve2d53.html?film_name=NG%c6%af%e1%bb%9cI%20S%c3%93I%20(T18)&amp;time_id=d0c142d8-fc39-4684-b17a-e2446d212af9&amp;date=03/03/2025&amp;format=2D&amp;room=02&amp;image=https://starlight.vn/Areas/Admin/Content/Fileuploads/images/Poster2024/ng-soi(1).jpg&amp;time=09:40&amp;server_id=2&amp;r_date=2025-03-03"
                                    style="display: inline-flex;margin-bottom: 3px;"><span
                                        class="time item">09:40</span></a>
                            </div>
                        </div>
                        <div class="clearfix" style="clear:both"></div>
                        <div style="width: 100%; display: flex; justify-content: space-between; margin: 15px 0; border-bottom: 1px dotted; padding-bottom: 10px;"
                            class="collaps_theater_content">
                            <div style="padding:0" class="col-lg-2 col-md-3 col-sm-12">
                                <span class="time"
                                    style="background: #444444; display: inline-flex; width: 100%; height: 100%; align-content: center; align-items: center; min-height: 50px; margin-bottom: 5px">04/03/2025</span>
                            </div>

                            <div style="padding-right:0" class="col-lg-10 col-md-9 col-sm-12">
                                <a href="../../dat-ve1da1.html?film_name=NG%c6%af%e1%bb%9cI%20S%c3%93I%20(T18)&amp;time_id=63ea3dcb-ebd5-42ac-a448-7decdd098fe6&amp;date=04/03/2025&amp;format=2D&amp;room=02&amp;image=https://starlight.vn/Areas/Admin/Content/Fileuploads/images/Poster2024/ng-soi(1).jpg&amp;time=09:00&amp;server_id=2&amp;r_date=2025-03-04"
                                    style="display: inline-flex;margin-bottom: 3px;"><span
                                        class="time item">09:00</span></a>
                            </div>
                        </div>
                        <div class="clearfix" style="clear:both"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 collaps_theater"
                        style="height: 100px; overflow: hidden; margin-bottom: 15px; " id="theater_3">
                        <div style="width: 100%; display: flex; justify-content: space-between; height: 100px; "
                            onclick="collapseTheater('theater_3')">
                            <h2
                                style="background: #e6e7e9; color: #f37737; text-align: left; padding: 10px; width: 95%; font-size: 23px; border: 2px solid;">
                                STARLIGHT QUY NHƠN
                                <br />
                                <small style="font-size: 13px; color: #333;">52A Tăng Bạt Hổ, Phường L&#234; Lợi,
                                    Th&#224;nh phố Qui Nhơn, B&#236;nh Định, Việt Nam</small>
                            </h2>
                            <div style="width: 5%; height: 100px " onclick="collapseTheater('theater_3')">
                                <i class="fa fa-angle-double-up"
                                    style="font-size: 30px;background: #f37737;width: 100%;text-align: center;color: #fbfbfb;padding-top: 25px;height:100%"></i>
                            </div>
                        </div>
                        <div style="width: 100%; display: flex; justify-content: space-between; margin: 15px 0; border-bottom: 1px dotted; padding-bottom: 10px;"
                            class="collaps_theater_content">
                            <div style="padding:0" class="col-lg-2 col-md-3 col-sm-12">
                                <span class="time"
                                    style="background: #444444; display: inline-flex; width: 100%; height: 100%; align-content: center; align-items: center; min-height: 50px; margin-bottom: 5px">02/03/2025</span>
                            </div>

                            <div style="padding-right:0" class="col-lg-10 col-md-9 col-sm-12">
                            </div>
                        </div>
                        <div class="clearfix" style="clear:both"></div>
                        <div style="width: 100%; display: flex; justify-content: space-between; margin: 15px 0; border-bottom: 1px dotted; padding-bottom: 10px;"
                            class="collaps_theater_content">
                            <div style="padding:0" class="col-lg-2 col-md-3 col-sm-12">
                                <span class="time"
                                    style="background: #444444; display: inline-flex; width: 100%; height: 100%; align-content: center; align-items: center; min-height: 50px; margin-bottom: 5px">03/03/2025</span>
                            </div>

                            <div style="padding-right:0" class="col-lg-10 col-md-9 col-sm-12">
                                <a href="../../dat-ve0ef7.html?film_name=NG%c6%af%e1%bb%9cI%20S%c3%93I%20(T18)&amp;time_id=f92c87e3-e563-4033-b950-9e2598860401&amp;date=03/03/2025&amp;format=2D&amp;room=12&amp;image=https://starlight.vn/Areas/Admin/Content/Fileuploads/images/Poster2024/ng-soi(1).jpg&amp;time=11:10&amp;server_id=3&amp;r_date=2025-03-03"
                                    style="display: inline-flex;margin-bottom: 3px;"><span
                                        class="time item">11:10</span></a>
                            </div>
                        </div>
                        <div class="clearfix" style="clear:both"></div>
                        <div style="width: 100%; display: flex; justify-content: space-between; margin: 15px 0; border-bottom: 1px dotted; padding-bottom: 10px;"
                            class="collaps_theater_content">
                            <div style="padding:0" class="col-lg-2 col-md-3 col-sm-12">
                                <span class="time"
                                    style="background: #444444; display: inline-flex; width: 100%; height: 100%; align-content: center; align-items: center; min-height: 50px; margin-bottom: 5px">04/03/2025</span>
                            </div>

                            <div style="padding-right:0" class="col-lg-10 col-md-9 col-sm-12">
                                <a href="../../dat-ved81e.html?film_name=NG%c6%af%e1%bb%9cI%20S%c3%93I%20(T18)&amp;time_id=18858609-f447-4c87-b560-0a8fe877cf0b&amp;date=04/03/2025&amp;format=2D&amp;room=12&amp;image=https://starlight.vn/Areas/Admin/Content/Fileuploads/images/Poster2024/ng-soi(1).jpg&amp;time=09:10&amp;server_id=3&amp;r_date=2025-03-04"
                                    style="display: inline-flex;margin-bottom: 3px;"><span
                                        class="time item">09:10</span></a>
                            </div>
                        </div>
                        <div class="clearfix" style="clear:both"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 collaps_theater"
                        style="height: 100px; overflow: hidden; margin-bottom: 15px; " id="theater_7">
                        <div style="width: 100%; display: flex; justify-content: space-between; height: 100px; "
                            onclick="collapseTheater('theater_7')">
                            <h2
                                style="background: #e6e7e9; color: #f37737; text-align: left; padding: 10px; width: 95%; font-size: 23px; border: 2px solid;">
                                STARLIGHT GIA LAI
                                <br />
                                <small style="font-size: 13px; color: #333;">Tầng 5, t&#242;a nh&#224; Kim Center, 53 Quang
                                    Trung, TP. Pleiku, Gia Lai</small>
                            </h2>
                            <div style="width: 5%; height: 100px " onclick="collapseTheater('theater_7')">
                                <i class="fa fa-angle-double-up"
                                    style="font-size: 30px;background: #f37737;width: 100%;text-align: center;color: #fbfbfb;padding-top: 25px;height:100%"></i>
                            </div>
                        </div>
                        <div style="width: 100%; display: flex; justify-content: space-between; margin: 15px 0; border-bottom: 1px dotted; padding-bottom: 10px;"
                            class="collaps_theater_content">
                            <div style="padding:0" class="col-lg-2 col-md-3 col-sm-12">
                                <span class="time"
                                    style="background: #444444; display: inline-flex; width: 100%; height: 100%; align-content: center; align-items: center; min-height: 50px; margin-bottom: 5px">02/03/2025</span>
                            </div>

                            <div style="padding-right:0" class="col-lg-10 col-md-9 col-sm-12">
                            </div>
                        </div>
                        <div class="clearfix" style="clear:both"></div>
                        <div style="width: 100%; display: flex; justify-content: space-between; margin: 15px 0; border-bottom: 1px dotted; padding-bottom: 10px;"
                            class="collaps_theater_content">
                            <div style="padding:0" class="col-lg-2 col-md-3 col-sm-12">
                                <span class="time"
                                    style="background: #444444; display: inline-flex; width: 100%; height: 100%; align-content: center; align-items: center; min-height: 50px; margin-bottom: 5px">03/03/2025</span>
                            </div>

                            <div style="padding-right:0" class="col-lg-10 col-md-9 col-sm-12">
                                <a href="../../dat-veea8a.html?film_name=NG%c6%af%e1%bb%9cI%20S%c3%93I%20(T18)&amp;time_id=d4874838-bbac-443b-ae7f-e8762ec21a4c&amp;date=03/03/2025&amp;format=2D&amp;room=03&amp;image=https://starlight.vn/Areas/Admin/Content/Fileuploads/images/Poster2024/ng-soi(1).jpg&amp;time=13:20&amp;server_id=7&amp;r_date=2025-03-03"
                                    style="display: inline-flex;margin-bottom: 3px;"><span
                                        class="time item">13:20</span></a>
                            </div>
                        </div>
                        <div class="clearfix" style="clear:both"></div>
                        <div style="width: 100%; display: flex; justify-content: space-between; margin: 15px 0; border-bottom: 1px dotted; padding-bottom: 10px;"
                            class="collaps_theater_content">
                            <div style="padding:0" class="col-lg-2 col-md-3 col-sm-12">
                                <span class="time"
                                    style="background: #444444; display: inline-flex; width: 100%; height: 100%; align-content: center; align-items: center; min-height: 50px; margin-bottom: 5px">04/03/2025</span>
                            </div>

                            <div style="padding-right:0" class="col-lg-10 col-md-9 col-sm-12">
                                <a href="../../dat-vef383.html?film_name=NG%c6%af%e1%bb%9cI%20S%c3%93I%20(T18)&amp;time_id=675c98a8-e360-4673-b9ba-8bc65b4fc87b&amp;date=04/03/2025&amp;format=2D&amp;room=03&amp;image=https://starlight.vn/Areas/Admin/Content/Fileuploads/images/Poster2024/ng-soi(1).jpg&amp;time=13:20&amp;server_id=7&amp;r_date=2025-03-04"
                                    style="display: inline-flex;margin-bottom: 3px;"><span
                                        class="time item">13:20</span></a>
                            </div>
                        </div>
                        <div class="clearfix" style="clear:both"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 collaps_theater"
                        style="height: 100px; overflow: hidden; margin-bottom: 15px; " id="theater_5">
                        <div style="width: 100%; display: flex; justify-content: space-between; height: 100px; "
                            onclick="collapseTheater('theater_5')">
                            <h2
                                style="background: #e6e7e9; color: #f37737; text-align: left; padding: 10px; width: 95%; font-size: 23px; border: 2px solid;">
                                STARLIGHT BẢO LỘC
                                <br />
                                <small style="font-size: 13px; color: #333;">729 Trần Ph&#250;, Phường B’Lao, TP Bảo Lộc,
                                    tỉnh L&#226;m Đồng</small>
                            </h2>
                            <div style="width: 5%; height: 100px " onclick="collapseTheater('theater_5')">
                                <i class="fa fa-angle-double-up"
                                    style="font-size: 30px;background: #f37737;width: 100%;text-align: center;color: #fbfbfb;padding-top: 25px;height:100%"></i>
                            </div>
                        </div>
                        <div style="width: 100%; display: flex; justify-content: space-between; margin: 15px 0; border-bottom: 1px dotted; padding-bottom: 10px;"
                            class="collaps_theater_content">
                            <div style="padding:0" class="col-lg-2 col-md-3 col-sm-12">
                                <span class="time"
                                    style="background: #444444; display: inline-flex; width: 100%; height: 100%; align-content: center; align-items: center; min-height: 50px; margin-bottom: 5px">02/03/2025</span>
                            </div>

                            <div style="padding-right:0" class="col-lg-10 col-md-9 col-sm-12">
                            </div>
                        </div>
                        <div class="clearfix" style="clear:both"></div>
                        <div style="width: 100%; display: flex; justify-content: space-between; margin: 15px 0; border-bottom: 1px dotted; padding-bottom: 10px;"
                            class="collaps_theater_content">
                            <div style="padding:0" class="col-lg-2 col-md-3 col-sm-12">
                                <span class="time"
                                    style="background: #444444; display: inline-flex; width: 100%; height: 100%; align-content: center; align-items: center; min-height: 50px; margin-bottom: 5px">03/03/2025</span>
                            </div>

                            <div style="padding-right:0" class="col-lg-10 col-md-9 col-sm-12">
                                <a href="../../dat-ve0ea3.html?film_name=NG%c6%af%e1%bb%9cI%20S%c3%93I%20(T18)&amp;time_id=2b44b226-d30f-4ada-a1d1-bab2515e749c&amp;date=03/03/2025&amp;format=2D&amp;room=01&amp;image=https://starlight.vn/Areas/Admin/Content/Fileuploads/images/Poster2024/ng-soi(1).jpg&amp;time=11:10&amp;server_id=5&amp;r_date=2025-03-03"
                                    style="display: inline-flex;margin-bottom: 3px;"><span
                                        class="time item">11:10</span></a>
                            </div>
                        </div>
                        <div class="clearfix" style="clear:both"></div>
                        <div style="width: 100%; display: flex; justify-content: space-between; margin: 15px 0; border-bottom: 1px dotted; padding-bottom: 10px;"
                            class="collaps_theater_content">
                            <div style="padding:0" class="col-lg-2 col-md-3 col-sm-12">
                                <span class="time"
                                    style="background: #444444; display: inline-flex; width: 100%; height: 100%; align-content: center; align-items: center; min-height: 50px; margin-bottom: 5px">04/03/2025</span>
                            </div>

                            <div style="padding-right:0" class="col-lg-10 col-md-9 col-sm-12">
                                <a href="../../dat-veb90d.html?film_name=NG%c6%af%e1%bb%9cI%20S%c3%93I%20(T18)&amp;time_id=0b3353c5-8670-48c6-b610-19d0d3c63da8&amp;date=04/03/2025&amp;format=2D&amp;room=01&amp;image=https://starlight.vn/Areas/Admin/Content/Fileuploads/images/Poster2024/ng-soi(1).jpg&amp;time=11:10&amp;server_id=5&amp;r_date=2025-03-04"
                                    style="display: inline-flex;margin-bottom: 3px;"><span
                                        class="time item">11:10</span></a>
                            </div>
                        </div>
                        <div class="clearfix" style="clear:both"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 collaps_theater"
                        style="height: 100px; overflow: hidden; margin-bottom: 15px; " id="theater_6">
                        <div style="width: 100%; display: flex; justify-content: space-between; height: 100px; "
                            onclick="collapseTheater('theater_6')">
                            <h2
                                style="background: #e6e7e9; color: #f37737; text-align: left; padding: 10px; width: 95%; font-size: 23px; border: 2px solid;">
                                STARLIGHT LONG AN
                                <br />
                                <small style="font-size: 13px; color: #333;">Lầu 1, Lầu 3, Vincom Plaza L.A, g&#243;c đường
                                    H&#249;ng Vương v&#224; Mai Thị Tốt, Phường 2, TP. T&#226;n An</small>
                            </h2>
                            <div style="width: 5%; height: 100px " onclick="collapseTheater('theater_6')">
                                <i class="fa fa-angle-double-up"
                                    style="font-size: 30px;background: #f37737;width: 100%;text-align: center;color: #fbfbfb;padding-top: 25px;height:100%"></i>
                            </div>
                        </div>
                        <div style="width: 100%; display: flex; justify-content: space-between; margin: 15px 0; border-bottom: 1px dotted; padding-bottom: 10px;"
                            class="collaps_theater_content">
                            <div style="padding:0" class="col-lg-2 col-md-3 col-sm-12">
                                <span class="time"
                                    style="background: #444444; display: inline-flex; width: 100%; height: 100%; align-content: center; align-items: center; min-height: 50px; margin-bottom: 5px">02/03/2025</span>
                            </div>

                            <div style="padding-right:0" class="col-lg-10 col-md-9 col-sm-12">
                            </div>
                        </div>
                        <div class="clearfix" style="clear:both"></div>
                        <div style="width: 100%; display: flex; justify-content: space-between; margin: 15px 0; border-bottom: 1px dotted; padding-bottom: 10px;"
                            class="collaps_theater_content">
                            <div style="padding:0" class="col-lg-2 col-md-3 col-sm-12">
                                <span class="time"
                                    style="background: #444444; display: inline-flex; width: 100%; height: 100%; align-content: center; align-items: center; min-height: 50px; margin-bottom: 5px">03/03/2025</span>
                            </div>

                            <div style="padding-right:0" class="col-lg-10 col-md-9 col-sm-12">
                                <a href="../../dat-vebf75.html?film_name=NG%c6%af%e1%bb%9cI%20S%c3%93I%20(T18)&amp;time_id=9baec75c-b7a3-4ce7-860d-8028e4998d3f&amp;date=03/03/2025&amp;format=2D&amp;room=04&amp;image=https://starlight.vn/Areas/Admin/Content/Fileuploads/images/Poster2024/ng-soi(1).jpg&amp;time=11:10&amp;server_id=6&amp;r_date=2025-03-03"
                                    style="display: inline-flex;margin-bottom: 3px;"><span
                                        class="time item">11:10</span></a>
                            </div>
                        </div>
                        <div class="clearfix" style="clear:both"></div>
                        <div style="width: 100%; display: flex; justify-content: space-between; margin: 15px 0; border-bottom: 1px dotted; padding-bottom: 10px;"
                            class="collaps_theater_content">
                            <div style="padding:0" class="col-lg-2 col-md-3 col-sm-12">
                                <span class="time"
                                    style="background: #444444; display: inline-flex; width: 100%; height: 100%; align-content: center; align-items: center; min-height: 50px; margin-bottom: 5px">04/03/2025</span>
                            </div>

                            <div style="padding-right:0" class="col-lg-10 col-md-9 col-sm-12">
                                <a href="../../dat-vee362.html?film_name=NG%c6%af%e1%bb%9cI%20S%c3%93I%20(T18)&amp;time_id=2556e270-090b-43dc-b00c-16bb1f73d57e&amp;date=04/03/2025&amp;format=2D&amp;room=04&amp;image=https://starlight.vn/Areas/Admin/Content/Fileuploads/images/Poster2024/ng-soi(1).jpg&amp;time=09:10&amp;server_id=6&amp;r_date=2025-03-04"
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
