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
                                    <img src="{{ $phim->HinhAnh }}" alt="{{ $phim->TenPhim }}">
                                </div>
                            </div>
                            <div class="col-lg-9 col-sm-8">
                                <div class="details-banner-info">
                                    <h3 style="color: #22272b">{{ $phim->TenPhim }}</h3>
                                    <p style="color: #22272b"></p>
                                    <p
                                        style="background: #f37737; width: 35px; height: 35px; text-align: center; line-height: 35px; border-radius: 2px; color: white; font-weight: bold; letter-spacing: 2px; box-shadow: 1px 1px 4px 0px #4e4e54;">
                                        T{{ $phim->DoTuoi }}</p>
                                    <p style="color: #22272b" class="details-genre">{{ $phim->DoHoa }}</span></p>
                                    <a href="https://www.youtube.com/watch?v=-EORS34ruHY"
                                        class="filmoja-btn tablet-action popup-youtube"><i
                                            class="fa fa-play"></i>trailer</a>
                                    <ul>
                                        <li><b>Đạo diễn</b> : {{ $phim->DaoDien }}</li>
                                        <li><b>Ngày chiếu</b> : {{ $phim->NgayKhoiChieu }}</li>
                                        <li><b>Diễn viên</b> : {{ $phim->DienVien }}</li>
                                        <li><b>Thời lượng</b> : {{ $phim->ThoiLuong }}</li>
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
                                                                <p>{{ $phim->MoTaPhim }}</p>
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
                    @foreach ($suatChieu as $groupKey => $group)
                    @php
                        // Tách NgayChieu và DiaChi từ groupKey
                        [$ngayChieu, $diaChi] = explode('|', $groupKey);
                    @endphp
                    <div class="col-md-12 col-sm-12 collaps_theater"
                        style="height: auto; overflow: hidden; margin-bottom: 15px;"
                        id="theater_{{ $loop->index }}">
                        <div style="width: 100%; display: flex; justify-content: space-between; height: auto;"
                            onclick="collapseTheater('theater_{{ $loop->index }}')">
                            <h2
                                style="background: #e6e7e9; color: #f37737; text-align: left; padding: 10px; width: 95%; font-size: 23px; border: 2px solid;">
                                {{ $group->first()->rap->TenRap ?? 'Thông tin rạp không khả dụng' }}
                                <br />
                                <small style="font-size: 13px; color: #333;">{{ $diaChi }}</small>
                            </h2>
                            {{-- <div style="width: 5%; height: auto;">
                                <i class="fa fa-angle-double-up"
                                    style="font-size: 30px; background: #f37737; width: 100%; text-align: center; color: #fbfbfb; padding-top: 25px; height: 100%;"></i>
                            </div> --}}
                        </div>
                        <div class="clearfix" style="clear:both"></div>
                        <div style="width: 100%; display: flex; flex-wrap: wrap; margin: 15px 0; border-bottom: 1px dotted; padding-bottom: 10px;"
                            class="collaps_theater_content">
                            <div style="padding:0" class="col-lg-2 col-md-3 col-sm-12">
                                <span class="time"
                                    style="background: #444444; display: inline-flex; width: 100%; height: 100%; align-content: center; align-items: center; min-height: 50px; margin-bottom: 5px;">
                                    {{ ucfirst(\Carbon\Carbon::parse($ngayChieu)->translatedFormat('l, d/m/Y')) }} 
                                </span>
                            </div>
                            <div style="padding-right:0" class="col-lg-10 col-md-9 col-sm-12">
                                @foreach ($group as $suat)
                                    <a href="{{ route('dat-ve.show', $suat->ID_SuatChieu) }}"
                                        style="display: inline-flex; margin-bottom: 3px; margin-right: 10px;">
                                        <span class="time item">{{ substr($suat->GioChieu, 0, 5) }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
                    {{-- <script>
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
                    </script> --}}

                </div>
            </div>
        </div>
    </section>
@stop
