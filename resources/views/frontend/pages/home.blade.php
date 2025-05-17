@extends('frontend.layouts.master')
@section('title', 'Trang chủ')
@section('main')
    <!-- Slider Area Start -->
    <section class="filmoja-slider-area fix">
        <div class="filmoja-slide owl-carousel">

            <a href="film/nha-gia-tien-t18/b046f0d2-c828-408e-9c89-a4cdb8db0daa.html">
                <div class="filmoja-main-slide">
                    <img style="height: 560px;" src="Areas/Admin/Content/Fileuploads/images/Slide2024/nha-gia-tien.jpg"
                        style="max-height:400px" />

                </div>
            </a>
            <a href="film/nu-tu-bong-toi-t16/b3cab74d-6def-49c9-ae08-3ade07b0ef19.html">
                <div class="filmoja-main-slide">
                    <img style="height: 560px;" src="Areas/Admin/Content/Fileuploads/images/Slide2024/nu-tu-bong-toi.jpg"
                        style="max-height:400px" />

                </div>
            </a>
            <div class="filmoja-main-slide">
                <img style="height: 560px;" src="Areas/Admin/Content/Fileuploads/images/Slide2024/tham-tu-kien.jpg"
                    style="max-height:400px" />
            </div>
        </div>
    </section>
    <!-- Slider Area End -->
    <div class="booking-form">
        <div class="col-lg-12">
            <div class="booking-form-item" style="width:20%;">
                <div class="select-box slTheater">

                    <div class="select-box__current uServer" tabindex="1">


                        <div class="select-box__value">
                            <input class="select-box__input" type="radio" id="s0" value="0" name="inputServer"
                                checked="checked">
                            <p class="select-box__input-text">Rạp</p>
                        </div>

                        <img class="select-box__icon" src="Content/img/black-ar-down.png" alt="Arrow Icon"
                            aria-hidden="true">
                    </div>
                    <ul class="select-box__list">

                        <li>
                            <label class="select-box__option" data-value="0" style="background-color: #36373b; color: #fff;"
                                onclick="selectServer(this)" for="s0" aria-hidden="aria-hidden">Rạp</label>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="booking-form-item" style="width:20%;">
                <div class="select-box slFilm">
                    <div class="select-box__current uFilm" tabindex="1">


                        <div class="select-box__value">
                            <input class="select-box__input" type="radio" id="0" value="0" name="inputFilm"
                                checked="checked">
                            <p class="select-box__input-text">Phim</p>
                        </div>
                        <img class="select-box__icon" src="Content/img/black-ar-down.png" alt="Arrow Icon"
                            aria-hidden="true">
                    </div>
                    <ul class="select-box__list">

                        <li>
                            <label class="select-box__option" data-value="0" for="0"
                                aria-hidden="aria-hidden">Phim</label>
                        </li>
                    </ul>
                </div>
            </div>



            <div class="booking-form-item" style="width:20%;">
                <div class="select-box slDate">
                    <div class="select-box__current uDate" tabindex="1">
                        <div class="select-box__value">
                            <input class="select-box__input" type="radio" id="0" value="0" name="inputDate"
                                checked="checked">
                            <p class="select-box__input-text">Ngày xem</p>
                        </div>
                        <img class="select-box__icon" src="Content/img/black-ar-down.png" alt="Arrow Icon"
                            aria-hidden="true">
                    </div>
                    <ul class="select-box__list">
                        <li>
                            <label class="select-box__option" data-value="0" for="0" aria-hidden="aria-hidden">Ngày
                                xem</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="booking-form-item" style="width:20%;">
                <div class="select-box slTime">
                    <div class="select-box__current uTime" tabindex="1">
                        <div class="select-box__value">
                            <input class="select-box__input" type="radio" id="0" value="0" name="inputTime"
                                checked="checked">
                            <p class="select-box__input-text">Suất chiếu</p>
                        </div>
                        <img class="select-box__icon" src="Content/img/black-ar-down.png" alt="Arrow Icon"
                            aria-hidden="true">
                    </div>
                    <ul class="select-box__list">
                        <li>
                            <label class="select-box__option" data-value="0" for="0"
                                aria-hidden="aria-hidden">Suất chiếu</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>




    <!-- Top Movies Area Start -->
    <section class="filmoja-top-movies-area section_30">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filmoja-heading">
                        <h2>Phim:<span> Đang chiếu</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="amy-movie-carousel-2 ">
                        <div class="amy-movie-list">
                            <div class="amy-movie-items">
                                @foreach ($dsPhimDangChieu as $phim)
                                    <div class="amy-movie-item">
                                        <div class="amy-movie-item-inner">
                                            <div class="amy-movie-item-front">
                                                <div class="slick-arrows"></div>
                                                <div class="amy-movie-item-poster">
                                                    <a href="{{ route('phim.chiTiet', ['id' => $phim->ID_Phim]) }}">
                                                        <img width="258" height="387" src="{{ $phim->HinhAnh }}"
                                                            class="attachment-258x444 size-258x444" alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="amy-movie-item-back">
                                                <div class="amy-movie-item-back-inner">
                                                    <div class="amy-movie-item-content">
                                                        <span class="amy-movie-field-imdb">{{ $phim->DoTuoi }}</span>
                                                        <h3 class="amy-movie-field-title"><a
                                                                href="{{ route('phim.chiTiet', ['id' => $phim->ID_Phim]) }}">{{ $phim->TenPhim }}</a>
                                                        </h3>
                                                        <div class="amy-movie-item-meta">
                                                            <span class="amy-movie-field-mpaa">{{ $phim->DoHoa }}</span>
                                                            <span class="amy-movie-field-duration"><i
                                                                    class="fa fa-clock-o"></i>{{ $phim->ThoiLuong }}</span>
                                                        </div>
                                                        <div class="amy-movie-custom-field-group amy-movie-field-language">
                                                            <div class="amy-movie-custom-field-content">
                                                                Kinh dị
                                                            </div>
                                                        </div>
                                                        <div class="amy-movie-custom-field-group amy-movie-field-language">
                                                            <label class="amy-movie-custom-field-label">Đạo diễn:</label>
                                                            <div class="amy-movie-custom-field-content">
                                                                {{ $phim->DaoDien }}
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="amy-movie-custom-field-group amy-movie-field-release_date">
                                                            <label class="amy-movie-custom-field-label">Diễn
                                                                viên:</label>
                                                            <div class="amy-movie-custom-field-content">
                                                                {{ $phim->DienVien }}
                                                            </div>
                                                        </div>
                                                        <div class="amy-movie-field-desc">
                                                            <p style="color:#333">{{ $phim->MoTaPhim }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-item-button">
                                                        <a href="{{ route('phim.chiTiet', ['id' => $phim->ID_Phim]) }}"
                                                            class="amy-btn-icon-text link-detail fancybox.iframe amy-fancybox">
                                                            <i class="fa fa-ticket"></i>Đặt v&#233;
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Movies Area End -->
    <!-- Top Movies Area Start -->
    <section class="filmoja-top-movies-area section_30">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filmoja-heading">
                        <h2>Phim:<span> Sắp chiếu</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="top-movie-slider owl-carousel">
                        @foreach ($dsPhimSapChieu as $phim)
                            <div class="single-top-movie">
                                <div class="top-movie-wrap">
                                    <div class="top-movie-img">
                                        <a href="{{ asset('/chi-tiet-phim') }}">
                                            <img src="{{ $phim->HinhAnh }}" alt="{{ $phim->TenPhim }}" />
                                        </a>
                                    </div>
                                    <div class="thumb-hover">
                                        <a class="play-video"
                                            href="https://www.youtube.com/watch?v=https://www.youtube.com/watch?v=fQKxDM-hxoU"><i
                                                class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                        </div>
                                    </div>
                                </div>
                                <div class="top-movie-details">
                                    <h4><a
                                            href="{{ route('phim.chiTiet', ['id' => $phim->ID_Phim]) }}">{{ $phim->TenPhim }}</a>
                                    </h4>


                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Movies Area End -->

    <!-- Top Movies Area Start -->


    <section class="filmoja-top-movies-area section_30">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filmoja-heading">
                        <h2>Khuyến mãi và sự kiện</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="top-movie-slider-1 owl-carousel">

                        <div>
                            <a href="uu-dai/thu-3-phim-viet-1046.html" style="cursor:pointer">
                                <img
                                    src="Areas/Admin/Content/Fileuploads/images/Poster2024/z3970954913942_5553a1bb37330ee79929701b4eb55b53.jpg">
                            </a>
                        </div>
                        <div>
                            <a href="uu-dai/thong-bao-tien-hanh-reset-diem-theo-thong-le-nam-2024-1044.html"
                                style="cursor:pointer">
                                <img
                                    src="Areas/Admin/Content/Fileuploads/images/Poster2024/z6057107298197_1deb166a52863f663f624695d88647d4.jpg">
                            </a>
                        </div>
                        <div>
                            <a href="#" style="cursor:pointer">
                                <img src="Areas/Admin/Content/Fileuploads/images/POSTER/bang%20gia%20ve(1).jpg">
                            </a>
                        </div>
                        <div>
                            <a href="uu-dai/bang-gia-rap-gold-1033.html" style="cursor:pointer">
                                <img
                                    src="Areas/Admin/Content/Fileuploads/images/POSTER/z5122303837558_7d7bc7bd94c57b848d3ca4eb8c7b3221.jpg">
                            </a>
                        </div>
                        <div>
                            <a href="uu-dai/uu-dai-combo-sieu-tiet-kiem-26.html" style="cursor:pointer">
                                <img
                                    src="Areas/Admin/Content/Fileuploads/images/POSTER/z4617615300123_917f45ad5907843f14d7614bfbda2f2c(1).jpg">
                            </a>
                        </div>
                        <div>
                            <a href="#" style="cursor:pointer">
                                <img src="Areas/Admin/Content/Fileuploads/images/POSTER/BANG%20GIA.jpg">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Movies Area End -->
    <!-- Top Movies Area Start -->
    <section class="filmoja-top-movies-area section_30">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filmoja-heading">
                        <h2>Phim hot :<span> Tháng {{ \Carbon\Carbon::now()->month }}</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="fw-tabs movies ui-tabs ui-widget ui-widget-content ui-corner-all">
                        <div id="Mon" aria-labelledby="ui-id-1"
                            class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="false"
                            style="display: block;">
                            @foreach ($dsPhimTheoThang as $phim)
                                <div class="row movie-tabs">
                                    <div class="col-md-2 col-sm-12">
                                        <a href="{{ route('phim.chiTiet', ['id' => $phim->ID_Phim]) }}">
                                            <img src="{{ $phim->HinhAnh }}" alt="{{ $phim->TenPhim }}"
                                                class="movie-poster">
                                        </a>
                                    </div>
                                    <div class="col-md-10 col-sm-12">

                                        <header>
                                            <h3 class="no-underline">{{ $phim->TenPhim }} T{{ $phim->DoTuoi }}</h3>
                                        </header>
                                        {{-- <span class="title">
                                            {{ $phim->TheLoai }}
                                        </span> --}}
                                        <div class="col-lg-12" style="padding-left:0 !important">
                                            <p class="time">{{ $phim->DoHoa }}</p>&nbsp;<p class="time red">
                                                T{{ $phim->DoTuoi }}</p>
                                        </div>
                                        <p class="desc">
                                            <b>Đạo diễn: </b>{{ $phim->DaoDien }}
                                        </p>
                                        <p class="desc">
                                            <b>Diễn viên: </b>{{ $phim->DienVien }}
                                        </p>
                                        <p>
                                            <b>Mô tả: </b> {{ $phim->MoTaPhim }}
                                        </p>
                                        <div class="col-lg-12" style="padding-left:0 !important">
                                            <a href="{{ route('phim.chiTiet', ['id' => $phim->ID_Phim]) }}">
                                                <p class="time red">&nbsp;<i class="fa fa-ticket"></i> &nbsp;Đặt vé</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Movies Area End -->
    <!-- News Area Start -->
    <section class="filmoja-news-area section_70">
        <div style="positon-relative; right: 200px;" class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filmoja-heading">
                        <h2>Tin Điện Ảnh</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="news-side-list">
                        <div class="single-news-side">
                            <div class="news-side-img">
                                <a
                                    href="tin-tuc/quy-nhap-trang-phim-kinh-di-lay-cam-hung-tu-cau-chuyen-co-that-tung-trailer-ron-toc-gay-1085.html"><img
                                        src="Areas/Admin/Content/Fileuploads/images/Tintuc/quy-nhap-trang.jpg"
                                        alt="quy-nhap-trang-phim-kinh-di-lay-cam-hung-tu-cau-chuyen-co-that-tung-trailer-ron-toc-gay" /></a>

                            </div>
                            <div class="news-side-text">
                                <h4><a
                                        href="tin-tuc/quy-nhap-trang-phim-kinh-di-lay-cam-hung-tu-cau-chuyen-co-that-tung-trailer-ron-toc-gay-1085.html">&quot;Quỷ
                                        nhập tr&#224;ng&quot; - Phim kinh dị lấy cảm hứng từ c&#226;u chuyện c&#243;
                                        thật tung trailer rợn t&#243;c g&#225;y</a></h4>
                                <div class="post-meta">
                                    <p><a href="#"><i class="fa fa-user"></i>admin</a></p>
                                    <p><a href="#"><i class="fa fa-tags"></i>26/02/2025</a></p>
                                </div>
                                <div class="post-content">
                                    <p>D&#224;n diễn vi&#234;n thực lực hai miền Nam - Bắc hội trong bom tấn kinh dị đậm
                                        chất văn h&#243;a Việt &quot;Quỷ nhập tr&#224;ng&quot;.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="news-side-list">
                        <div class="single-news-side">
                            <div class="news-side-img">
                                <a href="tin-tuc/bo-phim-gay-chan-dong-the-gioi-cong-bo-lich-chieu-tai-viet-nam-1084.html"><img
                                        src="Areas/Admin/Content/Fileuploads/images/Tintuc/flow.jpg"
                                        alt="bo-phim-gay-chan-dong-the-gioi-cong-bo-lich-chieu-tai-viet-nam" /></a>

                            </div>
                            <div class="news-side-text">
                                <h4><a
                                        href="tin-tuc/bo-phim-gay-chan-dong-the-gioi-cong-bo-lich-chieu-tai-viet-nam-1084.html">Bộ
                                        phim g&#226;y chấn động thế giới c&#244;ng bố lịch chiếu tại Việt Nam</a></h4>
                                <div class="post-meta">
                                    <p><a href="#"><i class="fa fa-user"></i>admin</a></p>
                                    <p><a href="#"><i class="fa fa-tags"></i>26/02/2025</a></p>
                                </div>
                                <div class="post-content">
                                    <p>&quot;Flow&quot; (Lạc tr&#244;i) - bộ phim hoạt h&#236;nh g&#226;y chấn động thế
                                        giới sẽ ra mắt kh&#225;n giả Việt Nam từ 7/3 tới.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="news-side-list">
                        <div class="single-news-side">
                            <div class="news-side-img">
                                <a href="tin-tuc/nha-gia-tien-chua-lanh-vet-seo-tuoi-tho-1083.html"><img
                                        src="Areas/Admin/Content/Fileuploads/images/Tintuc/nha-gia-tien.jpg"
                                        alt="nha-gia-tien-chua-lanh-vet-seo-tuoi-tho" /></a>

                            </div>
                            <div class="news-side-text">
                                <h4><a href="tin-tuc/nha-gia-tien-chua-lanh-vet-seo-tuoi-tho-1083.html">&#39;Nh&#224;
                                        gia ti&#234;n&#39; - chữa l&#224;nh vết sẹo tuổi thơ</a></h4>
                                <div class="post-meta">
                                    <p><a href="#"><i class="fa fa-user"></i>admin</a></p>
                                    <p><a href="#"><i class="fa fa-tags"></i>26/02/2025</a></p>
                                </div>
                                <div class="post-content">
                                    <p>Trong phim 18+ &quot;Nh&#224; gia ti&#234;n&quot;, nh&#226;n vật Mỹ Ti&#234;n
                                        (Phương Mỹ Chi) vượt nỗi đau bị hắt hủi để h&#224;n gắn m&#226;u thuẫn v...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="news-side-list">
                        <div class="single-news-side">
                            <div class="news-side-img">
                                <a
                                    href="tin-tuc/dao-dien-phim-nghin-ty-muon-khan-gia-cuoi-tha-ga-voi-phim-tet-2025-1082.html"><img
                                        src="Areas/Admin/Content/Fileuploads/images/Tintuc/bo-tu-bao-thu.jpg"
                                        alt="dao-dien-phim-nghin-ty-muon-khan-gia-cuoi-tha-ga-voi-phim-tet-2025" /></a>

                            </div>
                            <div class="news-side-text">
                                <h4><a
                                        href="tin-tuc/dao-dien-phim-nghin-ty-muon-khan-gia-cuoi-tha-ga-voi-phim-tet-2025-1082.html">Đạo
                                        diễn phim ngh&#236;n tỷ muốn kh&#225;n giả cười thả ga với phim tết 2025</a>
                                </h4>
                                <div class="post-meta">
                                    <p><a href="#"><i class="fa fa-user"></i>admin</a></p>
                                    <p><a href="#"><i class="fa fa-tags"></i>21/01/2025</a></p>
                                </div>
                                <div class="post-content">
                                    <p>&quot;B&#225;o thủ&quot; cuối c&#249;ng trong Bộ tứ b&#225;o thủ lộ diện: L&#224;
                                        t&#244;i - Cậu Mười Một. Nh&#226;n vật cuối c&#249;ng của bộ tứ kh&#244;ng ai
                                        ...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="news-side-list">
                        <div class="single-news-side">
                            <div class="news-side-img">
                                <a href="tin-tuc/kaity-nguyen-yeu-nham-ban-than-trong-friend-zone-ban-viet-1081.html"><img
                                        src="Areas/Admin/Content/Fileuploads/images/Tintuc/yeu-nham-ban-than.jpg"
                                        alt="kaity-nguyen-yeu-nham-ban-than-trong-friend-zone-ban-viet" /></a>

                            </div>
                            <div class="news-side-text">
                                <h4><a href="tin-tuc/kaity-nguyen-yeu-nham-ban-than-trong-friend-zone-ban-viet-1081.html">Kaity
                                        Nguyễn y&#234;u nhầm bạn th&#226;n trong Friend zone bản Việt</a></h4>
                                <div class="post-meta">
                                    <p><a href="#"><i class="fa fa-user"></i>admin</a></p>
                                    <p><a href="#"><i class="fa fa-tags"></i>21/01/2025</a></p>
                                </div>
                                <div class="post-content">
                                    <p>Kaity Nguyễn sẽ thủ vai ch&#237;nh của Baifern Pimchanok trong bộ phim Y&#234;u
                                        nhầm bạn th&#226;n bản Việt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="news-side-list">
                        <div class="single-news-side">
                            <div class="news-side-img">
                                <a href="tin-tuc/nu-hon-bac-ty-phim-tet-khai-thac-chu-de-tinh-chi-em-doc-dao-1080.html"><img
                                        src="Areas/Admin/Content/Fileuploads/images/Tintuc/nu-hun-bac-ty.jpg"
                                        alt="nu-hon-bac-ty-phim-tet-khai-thac-chu-de-tinh-chi-em-doc-dao" /></a>

                            </div>
                            <div class="news-side-text">
                                <h4><a
                                        href="tin-tuc/nu-hon-bac-ty-phim-tet-khai-thac-chu-de-tinh-chi-em-doc-dao-1080.html">&quot;Nụ
                                        h&#244;n bạc tỷ&quot; - phim Tết khai th&#225;c chủ đề t&#236;nh chị em độc
                                        đ&#225;o</a></h4>
                                <div class="post-meta">
                                    <p><a href="#"><i class="fa fa-user"></i>admin</a></p>
                                    <p><a href="#"><i class="fa fa-tags"></i>21/01/2025</a></p>
                                </div>
                                <div class="post-content">
                                    <p>
                                        Nh&#224; sản xuất v&#224; đạo diễn Thu Trang mang đến lễ hội b&#225;nh m&#236;
                                        cực kỳ ho&#224;nh tr&#225;ng trong buổi giới thiệu phim &quot;Nụ...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- News Area End -->

    {{-- <script>
        window.onload = function() {
            var modal = getCookie("key");
            if (modal != "") {

            } else {
                $.ajax({
                    url: "/Home/GetAdsImage",
                    type: "GET",
                    traditional: true,
                    dataType: "text",
                    contentType: 'application/json; charset=utf-8',
                    success: function(data) {
                        //alert(data);
                        if (data != "" && data != null) {
                            $("#adsImage").attr("src", data);
                            $("#adsImageModal").modal('show');
                            sessionStorage.setItem("key", "modal");
                            return false;
                        } else {

                            return false;
                        }
                    },
                    error: function() {
                        return false;
                    }
                });
            }

        }

        function getCookie(cname) {
            var ca = sessionStorage.getItem(cname);
            if (ca == null || ca == "") {
                return "";
            } else
                return ca;
        }
    </script> --}}
@stop
