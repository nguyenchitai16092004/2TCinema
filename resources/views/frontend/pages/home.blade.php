@extends('frontend.layouts.master')
@section('title', 'Trang chủ')
@section('main')
    <!-- Slider Area Start -->
    <section class="filmoja-slider-area fix">
        <div class="filmoja-slide owl-carousel">

            <a href="film/nha-gia-tien-t18/b046f0d2-c828-408e-9c89-a4cdb8db0daa.html">
                <div class="filmoja-main-slide">
                    <img src="Areas/Admin/Content/Fileuploads/images/Slide2024/nha-gia-tien.jpg" style="max-height:550px" />

                </div>
            </a>
            <a href="film/nu-tu-bong-toi-t16/b3cab74d-6def-49c9-ae08-3ade07b0ef19.html">
                <div class="filmoja-main-slide">
                    <img src="Areas/Admin/Content/Fileuploads/images/Slide2024/nu-tu-bong-toi.jpg" style="max-height:550px" />

                </div>
            </a>
            <div class="filmoja-main-slide">
                <img src="Areas/Admin/Content/Fileuploads/images/Slide2024/nu-hon-bac-ty.jpg" style="max-height:550px" />
            </div>
        </div>
    </section>
    <!-- Slider Area End -->
    <div class="booking-form" style="">
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
                                {{-- <div class="amy-movie-item">
                                    <div class="amy-movie-item-inner">
                                        <div class="amy-movie-item-front">
                                            <div class="slick-arrows"></div>
                                            <div class="amy-movie-item-poster">
                                                <a href="film/lac-troi-p/83a20d0c-769a-4280-bc94-0233291c94b6.html">
                                                    <img width="258" height="387"
                                                        src="Areas/Admin/Content/Fileuploads/images/Poster2024/flow.jpg"
                                                        class="attachment-258x444 size-258x444" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="amy-movie-item-back">
                                            <div class="amy-movie-item-back-inner">
                                                <div class="amy-movie-item-content">
                                                    <span class="amy-movie-field-imdb">P</span>
                                                    <h3 class="amy-movie-field-title"><a
                                                            href="film/lac-troi-p/83a20d0c-769a-4280-bc94-0233291c94b6.html">LẠC
                                                            TR&#212;I (P)</a></h3>
                                                    <div class="amy-movie-item-meta">
                                                        <span class="amy-movie-field-mpaa">2D</span>
                                                        <span class="amy-movie-field-duration"><i
                                                                class="fa fa-clock-o"></i>1 giờ 24 ph&#250;t</span>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-language">
                                                        <div class="amy-movie-custom-field-content">
                                                            Hoạt h&#236;nh
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-language">
                                                        <label class="amy-movie-custom-field-label">Đạo diễn:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            Gints Zilbalodis
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-release_date">
                                                        <label class="amy-movie-custom-field-label">Diễn
                                                            vi&#234;n:</label>
                                                        <div class="amy-movie-custom-field-content">

                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-field-desc">
                                                        <p style="color:#333">Trước bối cảnh hậu tận thế, ch&#250;
                                                            m&#232;o x&#225;m nh&#250;t nh&#225;t, vốn lu&#244;n sợ nước
                                                            phải rời bỏ v&#249;ng an to&#224;n khi căn nh&#224;
                                                            th&#226;n y&#234;u bị cuốn tr&#244;i bởi cơn lũ dữ.
                                                            Tr&#234;n h&#224;nh tr&#236;nh vượt đại dương m&#234;nh
                                                            m&#244;...</p>
                                                    </div>
                                                </div>
                                                <div class="amy-movie-item-button">
                                                    <a href="film/lac-troi-p/83a20d0c-769a-4280-bc94-0233291c94b6.html"
                                                        class="amy-btn-icon-text link-detail fancybox.iframe amy-fancybox">
                                                        <i class="fa fa-ticket"></i>Đặt v&#233;
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="amy-movie-item">
                                    <div class="amy-movie-item-inner">
                                        <div class="amy-movie-item-front">
                                            <div class="slick-arrows"></div>
                                            <div class="amy-movie-item-poster">
                                                <a
                                                    href="film/cuoc-dao-tau-tren-khong-t16/c5ebbe96-dcfb-4955-86d1-a564c24b436f.html">
                                                    <img width="258" height="387"
                                                        src="Areas/Admin/Content/Fileuploads/images/Poster2024/cuoc-dao-tau-tren-ko.jpg"
                                                        class="attachment-258x444 size-258x444" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="amy-movie-item-back">
                                            <div class="amy-movie-item-back-inner">
                                                <div class="amy-movie-item-content">
                                                    <span class="amy-movie-field-imdb">T16</span>
                                                    <h3 class="amy-movie-field-title"><a
                                                            href="film/cuoc-dao-tau-tren-khong-t16/c5ebbe96-dcfb-4955-86d1-a564c24b436f.html">CUỘC
                                                            Đ&#192;O TẨU TR&#202;N KH&#212;NG (T16)</a></h3>
                                                    <div class="amy-movie-item-meta">
                                                        <span class="amy-movie-field-mpaa">2D</span>
                                                        <span class="amy-movie-field-duration"><i
                                                                class="fa fa-clock-o"></i>1 giờ 32 ph&#250;t</span>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-language">
                                                        <div class="amy-movie-custom-field-content">
                                                            H&#224;nh Động
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-language">
                                                        <label class="amy-movie-custom-field-label">Đạo diễn:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            Mel Gibson
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-release_date">
                                                        <label class="amy-movie-custom-field-label">Diễn
                                                            vi&#234;n:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            Mark Wahlberg, Michelle Dockery, Topher Grace, ...
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-field-desc">
                                                        <p style="color:#333">Một phi c&#244;ng chịu tr&#225;ch nhiệm
                                                            đưa Thống chế Kh&#244;ng qu&#226;n đến &#225;p giải một kẻ
                                                            chạy trốn về hầu t&#242;a. Khi cả ba bay qua địa phận
                                                            Alaska, căng thẳng leo thang, niềm tin bị thử th&#225;ch,
                                                            bởi ...</p>
                                                    </div>
                                                </div>
                                                <div class="amy-movie-item-button">
                                                    <a href="film/cuoc-dao-tau-tren-khong-t16/c5ebbe96-dcfb-4955-86d1-a564c24b436f.html"
                                                        class="amy-btn-icon-text link-detail fancybox.iframe amy-fancybox">
                                                        <i class="fa fa-ticket"></i>Đặt v&#233;
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="amy-movie-item">
                                    <div class="amy-movie-item-inner">
                                        <div class="amy-movie-item-front">
                                            <div class="slick-arrows"></div>
                                            <div class="amy-movie-item-poster">
                                                <a
                                                    href="film/cuoi-ma-hien-me-cho-quy-t18/b6a87f4d-c1d4-494d-adfa-f0373598b34d.html">
                                                    <img width="258" height="387"
                                                        src="Areas/Admin/Content/Fileuploads/images/Poster2024/cuoi-ma.jpg"
                                                        class="attachment-258x444 size-258x444" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="amy-movie-item-back">
                                            <div class="amy-movie-item-back-inner">
                                                <div class="amy-movie-item-content">
                                                    <span class="amy-movie-field-imdb">T18</span>
                                                    <h3 class="amy-movie-field-title"><a
                                                            href="film/cuoi-ma-hien-me-cho-quy-t18/b6a87f4d-c1d4-494d-adfa-f0373598b34d.html">CƯỚI
                                                            MA HIẾN MẸ CHO QUỶ (T18)</a></h3>
                                                    <div class="amy-movie-item-meta">
                                                        <span class="amy-movie-field-mpaa">2D</span>
                                                        <span class="amy-movie-field-duration"><i
                                                                class="fa fa-clock-o"></i>1 giờ 37 ph&#250;t</span>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-language">
                                                        <div class="amy-movie-custom-field-content">
                                                            Kinh dị
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-language">
                                                        <label class="amy-movie-custom-field-label">Đạo diễn:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            Azhar Kinoi Lubis
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-release_date">
                                                        <label class="amy-movie-custom-field-label">Diễn
                                                            vi&#234;n:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            Taskya Namya, Wafda Saifan Lubis, Arla Ailani
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-field-desc">
                                                        <p style="color:#333">Mỗi ng&#224;y trong cuộc sống Ranti đều
                                                            xoay quanh bởi sự cay nghiệt của mẹ chồng c&#249;ng những
                                                            lời vu c&#225;o của em d&#226;u khiến c&#244; v&#244;
                                                            c&#249;ng thống khổ. Mọi việc trở n&#234;n b&#249;ng nổ khi
                                                            họ lần lượt p...</p>
                                                    </div>
                                                </div>
                                                <div class="amy-movie-item-button">
                                                    <a href="film/cuoi-ma-hien-me-cho-quy-t18/b6a87f4d-c1d4-494d-adfa-f0373598b34d.html"
                                                        class="amy-btn-icon-text link-detail fancybox.iframe amy-fancybox">
                                                        <i class="fa fa-ticket"></i>Đặt v&#233;
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                @foreach ($dsPhimDangChieu as $phim)
                                    <div class="amy-movie-item">
                                        <div class="amy-movie-item-inner">
                                            <div class="amy-movie-item-front">
                                                <div class="slick-arrows"></div>
                                                <div class="amy-movie-item-poster">
                                                    <a href="film/nguoi-soi-t18/700eb769-4e56-4435-a7b0-ce9e4b65b44c.html">
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
                                                                href="film/nguoi-soi-t18/700eb769-4e56-4435-a7b0-ce9e4b65b44c.html">{{ $phim->TenPhim }}</a>
                                                        </h3>
                                                        <div class="amy-movie-item-meta">
                                                            <span class="amy-movie-field-mpaa">2D</span>
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
                                                                vi&#234;n:</label>
                                                            <div class="amy-movie-custom-field-content">
                                                                {{ $phim->DienVien }}
                                                            </div>
                                                        </div>
                                                        <div class="amy-movie-field-desc">
                                                            <p style="color:#333">{{ $phim->MoTaPhim }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-item-button">
                                                        <a href="film/nguoi-soi-t18/700eb769-4e56-4435-a7b0-ce9e4b65b44c.html"
                                                            class="amy-btn-icon-text link-detail fancybox.iframe amy-fancybox">
                                                            <i class="fa fa-ticket"></i>Đặt v&#233;
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- <div class="amy-movie-item">
                                    <div class="amy-movie-item-inner">
                                        <div class="amy-movie-item-front">
                                            <div class="slick-arrows"></div>
                                            <div class="amy-movie-item-poster">
                                                <a href="film/nha-gia-tien-t18/b046f0d2-c828-408e-9c89-a4cdb8db0daa.html">
                                                    <img width="258" height="387"
                                                        src="Areas/Admin/Content/Fileuploads/images/Poster2024/NGT.jpg"
                                                        class="attachment-258x444 size-258x444" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="amy-movie-item-back">
                                            <div class="amy-movie-item-back-inner">
                                                <div class="amy-movie-item-content">
                                                    <span class="amy-movie-field-imdb">T18</span>
                                                    <h3 class="amy-movie-field-title"><a
                                                            href="film/nha-gia-tien-t18/b046f0d2-c828-408e-9c89-a4cdb8db0daa.html">NH&#192;
                                                            GIA TI&#202;N (T18)</a></h3>
                                                    <div class="amy-movie-item-meta">
                                                        <span class="amy-movie-field-mpaa">2D</span>
                                                        <span class="amy-movie-field-duration"><i
                                                                class="fa fa-clock-o"></i>1 giờ 57 ph&#250;t</span>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-language">
                                                        <div class="amy-movie-custom-field-content">
                                                            Gia Đ&#236;nh, H&#224;i
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-language">
                                                        <label class="amy-movie-custom-field-label">Đạo diễn:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            Huỳnh Lập
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-release_date">
                                                        <label class="amy-movie-custom-field-label">Diễn
                                                            vi&#234;n:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            Huỳnh Lập, Phương Mỹ Chi, NSƯT Hạnh Thu&#253;, NSƯT Huỳnh
                                                            Đ&#244;ng, Puka, Đ&#224;o Anh Tuấn, Trung D&#226;n, Kiều
                                                            Linh, L&#234; Nam, Ch&#237; T&#226;m, Thanh Thức, Tr&#225;c
                                                            Thu&#253; Mi&#234;u, Mai Thế Hiệp, NS Mạnh Dung, NSƯT Thanh
                                                            Dậu, NS Thanh Hiền, Nguyễn Anh T&#250;,…
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-field-desc">
                                                        <p style="color:#333">Nh&#224; Gia Ti&#234;n xoay quanh
                                                            c&#226;u chuyện đa g&#243;c nh&#236;n về c&#225;c thế hệ
                                                            kh&#225;c nhau trong một gia đ&#236;nh, c&#243; hai
                                                            nh&#226;n vật ch&#237;nh l&#224; Gia Minh (Huỳnh Lập)
                                                            v&#224; Mỹ Ti&#234;n (Phương Mỹ Chi). Trở về căn nh&#224;
                                                            ...</p>
                                                    </div>
                                                </div>
                                                <div class="amy-movie-item-button">
                                                    <a href="film/nha-gia-tien-t18/b046f0d2-c828-408e-9c89-a4cdb8db0daa.html"
                                                        class="amy-btn-icon-text link-detail fancybox.iframe amy-fancybox">
                                                        <i class="fa fa-ticket"></i>Đặt v&#233;
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="amy-movie-item">
                                    <div class="amy-movie-item-inner">
                                        <div class="amy-movie-item-front">
                                            <div class="slick-arrows"></div>
                                            <div class="amy-movie-item-poster">
                                                <a
                                                    href="film/nu-tu-bong-toi-t16/b3cab74d-6def-49c9-ae08-3ade07b0ef19.html">
                                                    <img width="258" height="387"
                                                        src="Areas/Admin/Content/Fileuploads/images/Poster2024/dark%20nun.jpg"
                                                        class="attachment-258x444 size-258x444" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="amy-movie-item-back">
                                            <div class="amy-movie-item-back-inner">
                                                <div class="amy-movie-item-content">
                                                    <span class="amy-movie-field-imdb">T16</span>
                                                    <h3 class="amy-movie-field-title"><a
                                                            href="film/nu-tu-bong-toi-t16/b3cab74d-6def-49c9-ae08-3ade07b0ef19.html">NỮ
                                                            TU B&#211;NG TỐI (T16)</a></h3>
                                                    <div class="amy-movie-item-meta">
                                                        <span class="amy-movie-field-mpaa">2D</span>
                                                        <span class="amy-movie-field-duration"><i
                                                                class="fa fa-clock-o"></i>1 giờ 54 ph&#250;t</span>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-language">
                                                        <div class="amy-movie-custom-field-content">
                                                            Kinh dị
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-language">
                                                        <label class="amy-movie-custom-field-label">Đạo diễn:</label>
                                                        <div class="amy-movie-custom-field-content">

                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-release_date">
                                                        <label class="amy-movie-custom-field-label">Diễn
                                                            vi&#234;n:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            Song Hye-kyo; Jeon Yeo-been; Lee Jin-wook
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-field-desc">
                                                        <p style="color:#333">Hai nữ tu Junia (Song Hye-kyo) v&#224;
                                                            Michaela (Jeon Yeo-been) d&#249;ng mọi nỗ lực thực hiện nghi
                                                            lễ trừ t&#224; để cứu rỗi cậu b&#233; Hee Joon đang bị linh
                                                            hồn t&#224; &#225;c chiếm giữ. Một cuộc chiến kh&#244;n...
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="amy-movie-item-button">
                                                    <a href="film/nu-tu-bong-toi-t16/b3cab74d-6def-49c9-ae08-3ade07b0ef19.html"
                                                        class="amy-btn-icon-text link-detail fancybox.iframe amy-fancybox">
                                                        <i class="fa fa-ticket"></i>Đặt v&#233;
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="amy-movie-item">
                                    <div class="amy-movie-item-inner">
                                        <div class="amy-movie-item-front">
                                            <div class="slick-arrows"></div>
                                            <div class="amy-movie-item-poster">
                                                <a
                                                    href="film/rider-giao-hang-cho-ma-lt-t16/731bb75c-a9eb-488d-95e9-7a5315f4970a.html">
                                                    <img width="258" height="387"
                                                        src="Areas/Admin/Content/Fileuploads/images/Poster2024/giao-hang-cho-ma.jpg"
                                                        class="attachment-258x444 size-258x444" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="amy-movie-item-back">
                                            <div class="amy-movie-item-back-inner">
                                                <div class="amy-movie-item-content">
                                                    <span class="amy-movie-field-imdb">T16</span>
                                                    <h3 class="amy-movie-field-title"><a
                                                            href="film/rider-giao-hang-cho-ma-lt-t16/731bb75c-a9eb-488d-95e9-7a5315f4970a.html">RIDER
                                                            GIAO H&#192;NG CHO MA (LT) - (T16)</a></h3>
                                                    <div class="amy-movie-item-meta">
                                                        <span class="amy-movie-field-mpaa">2D</span>
                                                        <span class="amy-movie-field-duration"><i
                                                                class="fa fa-clock-o"></i>1 giờ 44 ph&#250;t</span>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-language">
                                                        <div class="amy-movie-custom-field-content">
                                                            H&#224;i, Kinh Dị
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-language">
                                                        <label class="amy-movie-custom-field-label">Đạo diễn:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            Nitivat Cholvanichsiri
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-release_date">
                                                        <label class="amy-movie-custom-field-label">Diễn
                                                            vi&#234;n:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            MARIO MAURER, FREEN SAROCHA CHANKIMHA, MARUT CHUENSOMBOON,
                                                            PUWANET SEECHOMPU
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-field-desc">
                                                        <p style="color:#333">Nat, một người giao h&#224;ng trẻ,
                                                            t&#236;nh cờ quen một c&#244; g&#225;i xinh đẹp t&#234;n
                                                            Pie, nhưng khi Pie biến mất một c&#225;ch b&#237; ẩn, Nat
                                                            v&#224; hai người bạn giao h&#224;ng kh&#225;c đ&#227; đi
                                                            t&#236;m c&#244; ấy.</p>
                                                    </div>
                                                </div>
                                                <div class="amy-movie-item-button">
                                                    <a href="film/rider-giao-hang-cho-ma-lt-t16/731bb75c-a9eb-488d-95e9-7a5315f4970a.html"
                                                        class="amy-btn-icon-text link-detail fancybox.iframe amy-fancybox">
                                                        <i class="fa fa-ticket"></i>Đặt v&#233;
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="amy-movie-item">
                                    <div class="amy-movie-item-inner">
                                        <div class="amy-movie-item-front">
                                            <div class="slick-arrows"></div>
                                            <div class="amy-movie-item-poster">
                                                <a
                                                    href="film/phi-vu-nghin-can-lt-p/ceac535a-eb7c-440e-bbae-68f86824f09f.html">
                                                    <img width="258" height="387"
                                                        src="Areas/Admin/Content/Fileuploads/images/Poster2024/phi-vu-nghin-can.jpg"
                                                        class="attachment-258x444 size-258x444" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="amy-movie-item-back">
                                            <div class="amy-movie-item-back-inner">
                                                <div class="amy-movie-item-content">
                                                    <span class="amy-movie-field-imdb">P</span>
                                                    <h3 class="amy-movie-field-title"><a
                                                            href="film/phi-vu-nghin-can-lt-p/ceac535a-eb7c-440e-bbae-68f86824f09f.html">PHI
                                                            VỤ NGH&#204;N C&#194;N (LT) - (P)</a></h3>
                                                    <div class="amy-movie-item-meta">
                                                        <span class="amy-movie-field-mpaa">2D</span>
                                                        <span class="amy-movie-field-duration"><i
                                                                class="fa fa-clock-o"></i>1 giờ 25 ph&#250;t</span>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-language">
                                                        <div class="amy-movie-custom-field-content">
                                                            Hoạt h&#236;nh
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-language">
                                                        <label class="amy-movie-custom-field-label">Đạo diễn:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            Cinzia Angelini, David Feiss
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-release_date">
                                                        <label class="amy-movie-custom-field-label">Diễn
                                                            vi&#234;n:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            Jason Sudeikis, Lilly Singh, Rainn Wilson
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-field-desc">
                                                        <p style="color:#333">C&#226;u chuyện xoay quanh ch&#250; heo
                                                            Qu&#253; Hợi chuy&#234;n nghề t&#236;m kiếm th&#250; đi lạc
                                                            trả về cho chủ. Mọi chuyện vẫn diễn ra &#234;m đềm cho đến
                                                            ng&#224;y Qu&#253; Hợi nhận lời &#244;ng chủ g&#225;nh xiếc
                                                            đi t&#236;m b&#233; voi Dư...</p>
                                                    </div>
                                                </div>
                                                <div class="amy-movie-item-button">
                                                    <a href="film/phi-vu-nghin-can-lt-p/ceac535a-eb7c-440e-bbae-68f86824f09f.html"
                                                        class="amy-btn-icon-text link-detail fancybox.iframe amy-fancybox">
                                                        <i class="fa fa-ticket"></i>Đặt v&#233;
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}


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
                        {{-- <div class="single-top-movie">
                            <div class="top-movie-wrap">
                                <div class="top-movie-img">
                                    <a
                                        href="film/emma-va-vuong-quoc-ti-hon-p-long-tieng/543c21ef-d9ee-4334-85ec-9dc57ee19b88.html">
                                        <img src="Areas/Admin/Content/Fileuploads/images/Poster2024/emma.jpg"
                                            alt="emma-va-vuong-quoc-ti-hon-p-long-tieng" />
                                    </a>
                                </div>
                                <div class="thumb-hover">
                                    <a class="play-video"
                                        href="https://www.youtube.com/watch?v=https://www.youtube.com/watch?v=kraUpgr_IE4"><i
                                            class="fa fa-play"></i></a>
                                    <div class="thumb-date">
                                    </div>
                                </div>
                            </div>
                            <div class="top-movie-details">
                                <h4><a
                                        href="film/emma-va-vuong-quoc-ti-hon-p-long-tieng/543c21ef-d9ee-4334-85ec-9dc57ee19b88.html">EMMA
                                        V&#192; VƯƠNG QUỐC T&#205; HON (P) (Lồng tiếng)</a></h4>
                            </div>
                        </div>
                        <div class="single-top-movie">
                            <div class="top-movie-wrap">
                                <div class="top-movie-img">
                                    <a
                                        href="film/sat-thu-vo-cung-cuc-hai-pd-t16/126573c3-7e88-4385-8b9e-5ca87d51e8fa.html">
                                        <img src="Areas/Admin/Content/Fileuploads/images/Poster2024/hitman2.jpg"
                                            alt="sat-thu-vo-cung-cuc-hai-pd-t16" />
                                    </a>
                                </div>
                                <div class="thumb-hover">
                                    <a class="play-video"
                                        href="https://www.youtube.com/watch?v=https://www.youtube.com/watch?v=II4FHZN83ck"><i
                                            class="fa fa-play"></i></a>
                                    <div class="thumb-date">
                                    </div>
                                </div>
                            </div>
                            <div class="top-movie-details">
                                <h4><a
                                        href="film/sat-thu-vo-cung-cuc-hai-pd-t16/126573c3-7e88-4385-8b9e-5ca87d51e8fa.html">S&#193;T
                                        THỦ V&#212; C&#217;NG CỰC H&#192;I (PĐ) - (T16)</a></h4>
                            </div>
                        </div>
                        <div class="single-top-movie">
                            <div class="top-movie-wrap">
                                <div class="top-movie-img">
                                    <a href="film/mickey-17/6e3d8f4f-57d1-4871-8e4c-eff9edd0a6cb.html">
                                        <img src="Areas/Admin/Content/Fileuploads/images/Poster2024/mickey-17.jpg"
                                            alt="mickey-17" />
                                    </a>
                                </div>
                                <div class="thumb-hover">
                                    <a class="play-video"
                                        href="https://www.youtube.com/watch?v=https://www.youtube.com/watch?v=VFjVjNhEq2A"><i
                                            class="fa fa-play"></i></a>
                                    <div class="thumb-date">
                                    </div>
                                </div>
                            </div>
                            <div class="top-movie-details">
                                <h4><a href="film/mickey-17/6e3d8f4f-57d1-4871-8e4c-eff9edd0a6cb.html">MICKEY 17</a>
                                </h4>
                            </div>
                        </div>
                        <div class="single-top-movie">
                            <div class="top-movie-wrap">
                                <div class="top-movie-img">
                                    <a
                                        href="film/sat-thu-vo-cung-cuc-hai-lt-t16/45779aa2-fc0a-49bf-8030-4db587f600b9.html">
                                        <img src="Areas/Admin/Content/Fileuploads/images/Poster2024/sat-thu-vo-cung-cuc-hai.jpg"
                                            alt="sat-thu-vo-cung-cuc-hai-lt-t16" />
                                    </a>
                                </div>
                                <div class="thumb-hover">
                                    <a class="play-video"
                                        href="https://www.youtube.com/watch?v=https://www.youtube.com/watch?v=II4FHZN83ck"><i
                                            class="fa fa-play"></i></a>
                                    <div class="thumb-date">
                                    </div>
                                </div>
                            </div>
                            <div class="top-movie-details">
                                <h4><a
                                        href="film/sat-thu-vo-cung-cuc-hai-lt-t16/45779aa2-fc0a-49bf-8030-4db587f600b9.html">S&#193;T
                                        THỦ V&#212; C&#217;NG CỰC H&#192;I (LT) - (T16)</a></h4>
                            </div>
                        </div>
                        <div class="single-top-movie">
                            <div class="top-movie-wrap">
                                <div class="top-movie-img">
                                    <a href="film/anh-khong-dau/43fdadd5-9d3f-4c0e-b5e7-0bc66e6a52f7.html">
                                        <img src="Areas/Admin/Content/Fileuploads/images/Poster2024/anh-ko-dau.jpg"
                                            alt="anh-khong-dau" />
                                    </a>
                                </div>
                                <div class="thumb-hover">
                                    <a class="play-video"
                                        href="https://www.youtube.com/watch?v=https://www.youtube.com/watch?v=FNBbFHgPzyY"><i
                                            class="fa fa-play"></i></a>
                                    <div class="thumb-date">
                                    </div>
                                </div>
                            </div>
                            <div class="top-movie-details">
                                <h4><a href="film/anh-khong-dau/43fdadd5-9d3f-4c0e-b5e7-0bc66e6a52f7.html">ANH
                                        KH&#212;NG ĐAU</a></h4>
                            </div>
                        </div>
                        <div class="single-top-movie">
                            <div class="top-movie-wrap">
                                <div class="top-movie-img">
                                    <a href="film/nang-bach-tuyet/c86a1d81-e930-4385-a591-5bad8d87463e.html">
                                        <img src="Areas/Admin/Content/Fileuploads/images/Poster2024/snow-white.jpg"
                                            alt="nang-bach-tuyet" />
                                    </a>
                                </div>
                                <div class="thumb-hover">
                                    <a class="play-video"
                                        href="https://www.youtube.com/watch?v=https://www.youtube.com/watch?v=_lSVVn1Os0o"><i
                                            class="fa fa-play"></i></a>
                                    <div class="thumb-date">
                                    </div>
                                </div>
                            </div>
                            <div class="top-movie-details">
                                <h4><a href="film/nang-bach-tuyet/c86a1d81-e930-4385-a591-5bad8d87463e.html">N&#192;NG
                                        BẠCH TUYẾT</a></h4>
                            </div>
                        </div>
                        <div class="single-top-movie">
                            <div class="top-movie-wrap">
                                <div class="top-movie-img">
                                    <a href="film/nghi-le-truc-quy-t18/242e4a97-afbe-4857-ae34-cfc2b479173e.html">
                                        <img src="Areas/Admin/Content/Fileuploads/images/Poster2024/nghi-le-truc-quy.jpg"
                                            alt="nghi-le-truc-quy-t18" />
                                    </a>
                                </div>
                                <div class="thumb-hover">
                                    <a class="play-video"
                                        href="https://www.youtube.com/watch?v=https://www.youtube.com/watch?v=2ccFBW62x9o"><i
                                            class="fa fa-play"></i></a>
                                    <div class="thumb-date">
                                    </div>
                                </div>
                            </div>
                            <div class="top-movie-details">
                                <h4><a href="film/nghi-le-truc-quy-t18/242e4a97-afbe-4857-ae34-cfc2b479173e.html">NGHI
                                        LỄ TRỤC QUỶ (T18)</a></h4>
                            </div>
                        </div>
                        <div class="single-top-movie">
                            <div class="top-movie-wrap">
                                <div class="top-movie-img">
                                    <a href="film/nghe-sieu-kho-noi/9c2bd502-9e30-4216-9094-760fc1d8c299.html">
                                        <img src="Areas/Admin/Content/Fileuploads/images/Poster2024/nghe-siu-kho-noi.jpg"
                                            alt="nghe-sieu-kho-noi" />
                                    </a>
                                </div>
                                <div class="thumb-hover">
                                    <a class="play-video"
                                        href="https://www.youtube.com/watch?v=https://www.youtube.com/watch?v=rfopcf05HCE"><i
                                            class="fa fa-play"></i></a>
                                    <div class="thumb-date">
                                    </div>
                                </div>
                            </div>
                            <div class="top-movie-details">
                                <h4><a href="film/nghe-sieu-kho-noi/9c2bd502-9e30-4216-9094-760fc1d8c299.html">NGHỀ
                                        SI&#202;U KH&#211; N&#211;I</a></h4>
                            </div>
                        </div>
                        <div class="single-top-movie">
                            <div class="top-movie-wrap">
                                <div class="top-movie-img">
                                    <a href="film/am-duong-lo/ea9016ea-555b-4911-9bd3-006792eb39ff.html">
                                        <img src="Areas/Admin/Content/Fileuploads/images/Poster2024/am-duong-lo.jpg"
                                            alt="am-duong-lo" />
                                    </a>
                                </div>
                                <div class="thumb-hover">
                                    <a class="play-video"
                                        href="https://www.youtube.com/watch?v=https://www.youtube.com/watch?v=e3B4opKG3Ts"><i
                                            class="fa fa-play"></i></a>
                                    <div class="thumb-date">
                                    </div>
                                </div>
                            </div>
                            <div class="top-movie-details">
                                <h4><a href="film/am-duong-lo/ea9016ea-555b-4911-9bd3-006792eb39ff.html">&#194;M DƯƠNG
                                        LỘ</a></h4>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Movies Area End -->

    <!-- Top Movies Area Start -->


    <section class="filmoja-top-movies-area section_30"
        style=" background: url(Content/img/bgs5.jpg) no-repeat scroll 0 0; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filmoja-heading">
                        <h2>Khuyến m&#227;i v&#224; sự kiện</span></h2>
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
                            <a href="uu-dai/bang-gia-ve-ap-dung-hien-hanh-cac-rap-starlight-cinema-1043.html"
                                style="cursor:pointer">
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
                            <a href="uu-dai/bang-gia-ve-starlight-kid-18.html" style="cursor:pointer">
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
    <section class="filmoja-top-movies-area section_30" style="background: #22272b;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filmoja-heading">
                        <h2>Phim hot :<span> Tháng 3</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="fw-tabs movies ui-tabs ui-widget ui-widget-content ui-corner-all">
                        <div id="Mon" aria-labelledby="ui-id-1"
                            class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="false"
                            style="display: block;">
                            <div class="row movie-tabs">
                                <div class="col-md-2 col-sm-12">
                                    <a href="film/lac-troi-p/83a20d0c-769a-4280-bc94-0233291c94b6.html"
                                        title="The end of days">
                                        <img src="Areas/Admin/Content/Fileuploads/images/Poster2024/flow.jpg"
                                            alt="The end of days">
                                    </a>
                                </div>
                                <div class="col-md-10 col-sm-12">

                                    <header>
                                        <h3 class="no-underline">LẠC TR&#212;I (P)</h3>
                                    </header>
                                    <span class="title">
                                        Hoạt h&#236;nh
                                    </span>
                                    <div class="col-lg-12" style="padding-left:0 !important">
                                        <p class="time">2D</p>&nbsp;<p class="time red">P</p>
                                    </div>
                                    <p class="desc">
                                        <b>Đạo diễn: </b>Gints Zilbalodis
                                    </p>
                                    <p class="desc">
                                        <b>Diễn vi&#234;n: </b>
                                    </p>
                                    <p>
                                        <b>Mô tả: </b> Trước bối cảnh hậu tận thế, ch&#250; m&#232;o x&#225;m nh&#250;t
                                        nh&#225;t, vốn lu&#244;n sợ nước phải rời bỏ v&#249;ng an to&#224;n khi căn
                                        nh&#224; th&#226;n y&#234;u bị cuốn tr&#244;i bởi cơn lũ dữ. Tr&#234;n h&#224;nh
                                        tr&#236;nh vượt đại dương m&#234;nh m&#244;ng, ch&#250; m&#232;o c&#249;ng những
                                        người bạn đồng h&#224;nh (Capybara, ch&#243; Labrador Ret...
                                    </p>
                                    <div class="col-lg-12" style="padding-left:0 !important">
                                        <a href="film/lac-troi-p/83a20d0c-769a-4280-bc94-0233291c94b6.html">
                                            <p class="time red">&nbsp;<i class="fa fa-ticket"></i> &nbsp;Đặt
                                                v&#233;&nbsp;&nbsp;</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row movie-tabs">
                                <div class="col-md-2 col-sm-12">
                                    <a href="film/cuoc-dao-tau-tren-khong-t16/c5ebbe96-dcfb-4955-86d1-a564c24b436f.html"
                                        title="The end of days">
                                        <img src="Areas/Admin/Content/Fileuploads/images/Poster2024/cuoc-dao-tau-tren-ko.jpg"
                                            alt="The end of days">
                                    </a>
                                </div>
                                <div class="col-md-10 col-sm-12">

                                    <header>
                                        <h3 class="no-underline">CUỘC Đ&#192;O TẨU TR&#202;N KH&#212;NG (T16)</h3>
                                    </header>
                                    <span class="title">
                                        H&#224;nh Động
                                    </span>
                                    <div class="col-lg-12" style="padding-left:0 !important">
                                        <p class="time">2D</p>&nbsp;<p class="time red">T16</p>
                                    </div>
                                    <p class="desc">
                                        <b>Đạo diễn: </b>Mel Gibson
                                    </p>
                                    <p class="desc">
                                        <b>Diễn vi&#234;n: </b>Mark Wahlberg, Michelle Dockery, Topher Grace, ...
                                    </p>
                                    <p>
                                        <b>Mô tả: </b> Một phi c&#244;ng chịu tr&#225;ch nhiệm đưa Thống chế Kh&#244;ng
                                        qu&#226;n đến &#225;p giải một kẻ chạy trốn về hầu t&#242;a. Khi cả ba bay qua
                                        địa phận Alaska, căng thẳng leo thang, niềm tin bị thử th&#225;ch, bởi
                                        kh&#244;ng phải ai tr&#234;n m&#225;y bay cũng như họ nghĩ.
                                    </p>
                                    <div class="col-lg-12" style="padding-left:0 !important">
                                        <a
                                            href="film/cuoc-dao-tau-tren-khong-t16/c5ebbe96-dcfb-4955-86d1-a564c24b436f.html">
                                            <p class="time red">&nbsp;<i class="fa fa-ticket"></i> &nbsp;Đặt
                                                v&#233;&nbsp;&nbsp;</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row movie-tabs">
                                <div class="col-md-2 col-sm-12">
                                    <a href="film/cuoi-ma-hien-me-cho-quy-t18/b6a87f4d-c1d4-494d-adfa-f0373598b34d.html"
                                        title="The end of days">
                                        <img src="Areas/Admin/Content/Fileuploads/images/Poster2024/cuoi-ma.jpg"
                                            alt="The end of days">
                                    </a>
                                </div>
                                <div class="col-md-10 col-sm-12">

                                    <header>
                                        <h3 class="no-underline">CƯỚI MA: HIẾN MẸ CHO QUỶ (T18)</h3>
                                    </header>
                                    <span class="title">
                                        Kinh dị
                                    </span>
                                    <div class="col-lg-12" style="padding-left:0 !important">
                                        <p class="time">2D</p>&nbsp;<p class="time red">T18</p>
                                    </div>
                                    <p class="desc">
                                        <b>Đạo diễn: </b>Azhar Kinoi Lubis
                                    </p>
                                    <p class="desc">
                                        <b>Diễn vi&#234;n: </b>Taskya Namya, Wafda Saifan Lubis, Arla Ailani
                                    </p>
                                    <p>
                                        <b>Mô tả: </b> Mỗi ng&#224;y trong cuộc sống Ranti đều xoay quanh bởi sự cay
                                        nghiệt của mẹ chồng c&#249;ng những lời vu c&#225;o của em d&#226;u khiến
                                        c&#244; v&#244; c&#249;ng thống khổ. Mọi việc trở n&#234;n b&#249;ng nổ khi họ
                                        lần lượt phớt lờ việc cứu lấy c&#244; con g&#225;i gặp tai nạn, th&#250;c đẩy
                                        Ranti phải “ tiến...
                                    </p>
                                    <div class="col-lg-12" style="padding-left:0 !important">
                                        <a
                                            href="film/cuoi-ma-hien-me-cho-quy-t18/b6a87f4d-c1d4-494d-adfa-f0373598b34d.html">
                                            <p class="time red">&nbsp;<i class="fa fa-ticket"></i> &nbsp;Đặt
                                                v&#233;&nbsp;&nbsp;</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row movie-tabs">
                                <div class="col-md-2 col-sm-12">
                                    <a href="film/nguoi-soi-t18/700eb769-4e56-4435-a7b0-ce9e4b65b44c.html"
                                        title="The end of days">
                                        <img src="Areas/Admin/Content/Fileuploads/images/Poster2024/ng-soi(1).jpg"
                                            alt="The end of days">
                                    </a>
                                </div>
                                <div class="col-md-10 col-sm-12">

                                    <header>
                                        <h3 class="no-underline">NGƯỜI S&#211;I (T18)</h3>
                                    </header>
                                    <span class="title">
                                        Kinh dị
                                    </span>
                                    <div class="col-lg-12" style="padding-left:0 !important">
                                        <p class="time">2D</p>&nbsp;<p class="time red">T18</p>
                                    </div>
                                    <p class="desc">
                                        <b>Đạo diễn: </b>Leigh Whannell
                                    </p>
                                    <p class="desc">
                                        <b>Diễn vi&#234;n: </b>Julia Garner, Christopher Abbott, Sam Jaeger
                                    </p>
                                    <p>
                                        <b>Mô tả: </b> Một gia đ&#236;nh chuyển đến sinh sống tại một ng&#244;i nh&#224;
                                        của người cha bị mất t&#237;ch b&#237; ẩn. V&#224;o đ&#234;m trăng tr&#242;n, họ
                                        bị tấn c&#244;ng bởi một người s&#243;i, khiến người chồng bị c&#224;o v&#224;o
                                        tay. Khi cố thủ trong nh&#224;, anh bắt đầu biến đổi th&#224;nh một sinh vật
                                        đ&#225;ng sợ, đe dọa ...
                                    </p>
                                    <div class="col-lg-12" style="padding-left:0 !important">
                                        <a href="film/nguoi-soi-t18/700eb769-4e56-4435-a7b0-ce9e4b65b44c.html">
                                            <p class="time red">&nbsp;<i class="fa fa-ticket"></i> &nbsp;Đặt
                                                v&#233;&nbsp;&nbsp;</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row movie-tabs">
                                <div class="col-md-2 col-sm-12">
                                    <a href="film/nha-gia-tien-t18/b046f0d2-c828-408e-9c89-a4cdb8db0daa.html"
                                        title="The end of days">
                                        <img src="Areas/Admin/Content/Fileuploads/images/Poster2024/NGT.jpg"
                                            alt="The end of days">
                                    </a>
                                </div>
                                <div class="col-md-10 col-sm-12">

                                    <header>
                                        <h3 class="no-underline">NH&#192; GIA TI&#202;N (T18)</h3>
                                    </header>
                                    <span class="title">
                                        Gia Đ&#236;nh, H&#224;i
                                    </span>
                                    <div class="col-lg-12" style="padding-left:0 !important">
                                        <p class="time">2D</p>&nbsp;<p class="time red">T18</p>
                                    </div>
                                    <p class="desc">
                                        <b>Đạo diễn: </b>Huỳnh Lập
                                    </p>
                                    <p class="desc">
                                        <b>Diễn vi&#234;n: </b>Huỳnh Lập, Phương Mỹ Chi, NSƯT Hạnh Thu&#253;, NSƯT Huỳnh
                                        Đ&#244;ng, Puka, Đ&#224;o Anh Tuấn, Trung D&#226;n, Kiều Linh, L&#234; Nam,
                                        Ch&#237; T&#226;m, Thanh Thức, Tr&#225;c Thu&#253; Mi&#234;u, Mai Thế Hiệp, NS
                                        Mạnh Dung, NSƯT Thanh Dậu, NS Thanh Hiền, Nguyễn Anh T&#250;,…
                                    </p>
                                    <p>
                                        <b>Mô tả: </b> Nh&#224; Gia Ti&#234;n xoay quanh c&#226;u chuyện đa g&#243;c
                                        nh&#236;n về c&#225;c thế hệ kh&#225;c nhau trong một gia đ&#236;nh, c&#243; hai
                                        nh&#226;n vật ch&#237;nh l&#224; Gia Minh (Huỳnh Lập) v&#224; Mỹ Ti&#234;n
                                        (Phương Mỹ Chi). Trở về căn nh&#224; gia ti&#234;n để quay c&#225;c video “triệu
                                        view” tr&#234;n mạng x&#227; hội, Mỹ Ti&#234;n - mộ...
                                    </p>
                                    <div class="col-lg-12" style="padding-left:0 !important">
                                        <a href="film/nha-gia-tien-t18/b046f0d2-c828-408e-9c89-a4cdb8db0daa.html">
                                            <p class="time red">&nbsp;<i class="fa fa-ticket"></i> &nbsp;Đặt
                                                v&#233;&nbsp;&nbsp;</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row movie-tabs">
                                <div class="col-md-2 col-sm-12">
                                    <a href="film/nu-tu-bong-toi-t16/b3cab74d-6def-49c9-ae08-3ade07b0ef19.html"
                                        title="The end of days">
                                        <img src="Areas/Admin/Content/Fileuploads/images/Poster2024/dark%20nun.jpg"
                                            alt="The end of days">
                                    </a>
                                </div>
                                <div class="col-md-10 col-sm-12">

                                    <header>
                                        <h3 class="no-underline">NỮ TU B&#211;NG TỐI (T16)</h3>
                                    </header>
                                    <span class="title">
                                        Kinh dị
                                    </span>
                                    <div class="col-lg-12" style="padding-left:0 !important">
                                        <p class="time">2D</p>&nbsp;<p class="time red">T16</p>
                                    </div>
                                    <p class="desc">
                                        <b>Đạo diễn: </b>
                                    </p>
                                    <p class="desc">
                                        <b>Diễn vi&#234;n: </b>Song Hye-kyo; Jeon Yeo-been; Lee Jin-wook
                                    </p>
                                    <p>
                                        <b>Mô tả: </b> Hai nữ tu Junia (Song Hye-kyo) v&#224; Michaela (Jeon Yeo-been)
                                        d&#249;ng mọi nỗ lực thực hiện nghi lễ trừ t&#224; để cứu rỗi cậu b&#233; Hee
                                        Joon đang bị linh hồn t&#224; &#225;c chiếm giữ. Một cuộc chiến kh&#244;ng hồi
                                        kết giữa đức tin v&#224; quỷ dữ, giữa b&#237; ẩn t&#226;m linh v&#224; niềm tin
                                        y họ...
                                    </p>
                                    <div class="col-lg-12" style="padding-left:0 !important">
                                        <a href="film/nu-tu-bong-toi-t16/b3cab74d-6def-49c9-ae08-3ade07b0ef19.html">
                                            <p class="time red">&nbsp;<i class="fa fa-ticket"></i> &nbsp;Đặt
                                                v&#233;&nbsp;&nbsp;</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Movies Area End -->
    <!-- News Area Start -->
    <section class="filmoja-news-area section_70">
        <div class="container">
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
