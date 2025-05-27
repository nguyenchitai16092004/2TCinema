@extends('frontend.layouts.master')
@section('title', 'Trang chủ')
@section('main')
    <link rel="stylesheet" href="{{ asset('frontend/Content/css/home.css') }}">

    <!-- Slider Area Start -->
    {{-- <section class="filmoja-slider-area fix">
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
    </section> --}}
    <div class="filmoja-slider-area fix">
        <div class="floating-particles" id="particles"></div>
        <div class="progress-bar" id="progressBar"></div>

        <div class="slide-number">
            <span class="current" id="currentNumber">01</span>
            <span>/</span>
            <span id="totalNumber">05</span>
        </div>

        <div class="carousel-wrapper">
            <div class="carousel-track" id="carouselTrack">
                <!-- Slide 1 -->
                <div class="carousel-slide active">
                    <img src="https://cdn.galaxycine.vn/media/2025/5/16/until-dawn-2048_1747365952336.jpg" alt="Until Dawn">
                    <div class="slide-content">
                        <div class="slide-title">UNTIL DAWN</div>
                        <div class="slide-subtitle">ÁC MỘNG KINH HOÀNG TRỖI DẬY MỖI ĐÊM</div>
                        <div class="slide-description">Từ đạo diễn của LIGHTS OUT và ANNABELLE: CREATION. Một đêm định mệnh
                            sẽ thay đổi cuộc sống của nhóm bạn trẻ mãi mãi.</div>
                        <div class="cta-buttons">
                            <button class="primary-btn">XEM TRAILER</button>
                            <button class="secondary-btn">CHI TIẾT</button>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-slide">
                    <img src="https://cdn.galaxycine.vn/media/2025/5/16/glx-2048x682_1747389452013.png" alt="Lilo & Stitch">
                    <div class="slide-content">
                        <div class="slide-title">LILO & STITCH</div>
                        <div class="slide-subtitle">PHIÊU LƯU CÙNG NGƯỜI BẠN NGOÀI HÀNH TINH</div>
                        <div class="slide-description">Bộ phim hoạt hình Disney kinh điển trở lại với câu chuyện về tình bạn
                            và gia đình đầy cảm động.</div>
                        <div class="cta-buttons">
                            <button class="primary-btn">XEM TRAILER</button>
                            <button class="secondary-btn">CHI TIẾT</button>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-slide">
                    <img src="https://cdn.galaxycine.vn/media/2025/5/23/doraemon-movie-44-1_1748017461000.jpg"
                        alt="Doraemon Movie">
                    <div class="slide-content">
                        <div class="slide-title">DORAEMON</div>
                        <div class="slide-subtitle">NOBITA'S ART WORLD TALES</div>
                        <div class="slide-description">Cuộc phiêu lưu mới trong thế giới nghệ thuật đầy màu sắc và kỳ diệu
                            cùng Doraemon và những người bạn.</div>
                        <div class="cta-buttons">
                            <button class="primary-btn">XEM TRAILER</button>
                            <button class="secondary-btn">CHI TIẾT</button>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="carousel-slide">
                    <img src="https://cdn.galaxycine.vn/media/2025/5/15/mua-lua-2048_1747295237842.jpg" alt="Mưa Lửa">
                    <div class="slide-content">
                        <div class="slide-title">MƯA LỬA</div>
                        <div class="slide-subtitle">ANH TRAI VƯỢT NGÀN CHÔNG GAI</div>
                        <div class="slide-description">Hành trình đầy cam go và thử thách của những người anh em trong cuộc
                            chiến sinh tồn khốc liệt.</div>
                        <div class="cta-buttons">
                            <button class="primary-btn">XEM TRAILER</button>
                            <button class="secondary-btn">CHI TIẾT</button>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="carousel-slide">
                    <img src="https://cdn.galaxycine.vn/media/2025/5/9/mi8-2048_1746763282349.jpg"
                        alt="Mission Impossible 8">
                    <div class="slide-content">
                        <div class="slide-title">MISSION</div>
                        <div class="slide-subtitle">IMPOSSIBLE: THE FINAL RECKONING</div>
                        <div class="slide-description">Nhiệm vụ cuối cùng và nguy hiểm nhất của Ethan Hunt trong hành trình
                            đầy kịch tính và bất ngờ.</div>
                        <div class="cta-buttons">
                            <button class="primary-btn">XEM TRAILER</button>
                            <button class="secondary-btn">CHI TIẾT</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <button class="carousel-nav carousel-prev" onclick="previousSlide()">‹</button>
            <button class="carousel-nav carousel-next" onclick="nextSlide()">›</button>

            <!-- Dots -->
            <div class="carousel-dots" id="carouselDots">
                <span class="dot active" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
            </div>
        </div>
    </div>
    <!-- Slider Area End -->
    <div class="booking-container">
        <div class="booking-header">
            <div class="booking-title">ĐẶT VÉ NHANH</div>
        </div>

        <div class="steps-indicator">
            <div class="step active" id="step-1">
                <div class="step-number">1</div>
                <div class="step-label">Rạp</div>
            </div>
            <div class="step-separator" id="separator-1"></div>
            <div class="step" id="step-2">
                <div class="step-number">2</div>
                <div class="step-label">Phim</div>
            </div>
            <div class="step-separator" id="separator-2"></div>
            <div class="step" id="step-3">
                <div class="step-number">3</div>
                <div class="step-label">Ngày</div>
            </div>
            <div class="step-separator" id="separator-3"></div>
            <div class="step" id="step-4">
                <div class="step-number">4</div>
                <div class="step-label">Suất</div>
            </div>
        </div>

        <div class="booking-form">
            <div class="booking-dropdown" id="theater-dropdown">
                <button class="dropdown-btn" id="theater-btn">
                    <span>1. Chọn Rạp</span>
                    <span><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="dropdown-content" id="theater-content">
                    <div class="dropdown-item" data-value="cinestar-quoc-thanh"><span class="marquee-text">Cinestar Quốc
                            Thạnh (TP.HCM)</span></div>
                    <div class="dropdown-item" data-value="cinestar-satra"><span class="marquee-text">Cinestar Satra Quận
                            6
                            (TP.HCM)</span></div>
                    <div class="dropdown-item" data-value="cinestar-hai-ba-trung"><span class="marquee-text">Cinestar Hai
                            Bà
                            Trưng (TP.HCM)</span></div>
                    <div class="dropdown-item" data-value="cinestar-sinh-vien"><span class="marquee-text">Cinestar Sinh
                            Viên
                            (Bình Dương)</span></div>
                    <div class="dropdown-item" data-value="cinestar-hue"><span class="marquee-text">Cinestar Huế (TP.
                            Huế)</span></div>
                    <div class="dropdown-item" data-value="cinestar-da-lat"><span class="marquee-text">Cinestar Đà Lạt
                            (TP.
                            Đà Lạt)</span></div>
                    <div class="dropdown-item" data-value="cinestar-lam-dong"><span class="marquee-text">Cinestar Lâm
                            Đồng
                            (Đức Trọng)</span></div>
                    <div class="dropdown-item" data-value="cinestar-my-tho"><span class="marquee-text">Cinestar Mỹ Tho
                            (Tiền
                            Giang)</span></div>
                </div>
            </div>

            <div class="booking-dropdown" id="movie-dropdown">
                <button class="dropdown-btn disabled" id="movie-btn">
                    <span>2. Chọn Phim</span>
                    <span><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="dropdown-content" id="movie-content">
                    <div class="dropdown-item" data-value="buon-than-ban-than"><span class="marquee-text">BUỒN THÂN BẠN
                            THÂN</span></div>
                    <div class="dropdown-item" data-value="godzilla-x-kong"><span class="marquee-text">GODZILLA X KONG:
                            ĐẾ
                            QUỐC MỚI</span></div>
                    <div class="dropdown-item" data-value="kung-fu-panda-4"><span class="marquee-text">KUNG FU PANDA
                            4</span></div>
                    <div class="dropdown-item" data-value="thanh-guom-diet-quy"><span class="marquee-text">THANH GƯƠM
                            DIỆT
                            QUỶ: LÀNG RÈN KIẾM</span></div>
                    <div class="dropdown-item" data-value="gia-dinh-croods"><span class="marquee-text">GIA ĐÌNH
                            CROODS</span></div>
                </div>
            </div>

            <div class="booking-dropdown" id="date-dropdown">
                <button class="dropdown-btn disabled" id="date-btn">
                    <span>3. Chọn Ngày</span>
                    <span><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="dropdown-content" id="date-content">
                    <div class="dropdown-item" data-value="2025-05-22"><span class="marquee-text">Thứ Năm, 22/05</span>
                    </div>
                    <div class="dropdown-item" data-value="2025-05-23"><span class="marquee-text">Thứ Sáu, 23/05</span>
                    </div>
                    <div class="dropdown-item" data-value="2025-05-24"><span class="marquee-text">Thứ Bảy, 24/05</span>
                    </div>
                    <div class="dropdown-item" data-value="2025-05-25"><span class="marquee-text">Chủ Nhật, 25/05</span>
                    </div>
                </div>
            </div>

            <div class="booking-dropdown" id="time-dropdown">
                <button class="dropdown-btn disabled" id="time-btn">
                    <span>4. Chọn Suất</span>
                    <span><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="dropdown-content" id="time-content">
                    <div class="dropdown-item" data-value="10:15"><span class="marquee-text">10:15 - 2D Deluxe</span>
                    </div>
                    <div class="dropdown-item" data-value="13:30"><span class="marquee-text">13:30 - 2D Standard</span>
                    </div>
                    <div class="dropdown-item" data-value="16:20"><span class="marquee-text">16:20 - 3D Deluxe</span>
                    </div>
                    <div class="dropdown-item" data-value="19:45"><span class="marquee-text">19:45 - 2D Deluxe</span>
                    </div>
                    <div class="dropdown-item" data-value="22:10"><span class="marquee-text">22:10 - 2D Standard</span>
                    </div>
                </div>
            </div>

            <button class="book-btn disabled" id="book-btn">ĐẶT NGAY</button>
        </div>

        <div class="selected-info" id="theater-info"></div>

        <div class="booking-summary" id="booking-summary">
            <div class="movie-poster" id="movie-poster">
                <i class="fas fa-film"></i>
            </div>
            <div class="summary-details">
                <div class="movie-title" id="summary-movie-title"></div>
                <div class="movie-details" id="summary-movie-details"></div>
                <div class="summary-item">
                    <div class="summary-label">Rạp:</div>
                    <div class="summary-value" id="summary-theater"></div>
                </div>
                <div class="summary-item">
                    <div class="summary-label">Ngày:</div>
                    <div class="summary-value" id="summary-date"></div>
                </div>
                <div class="summary-item">
                    <div class="summary-label">Suất chiếu:</div>
                    <div class="summary-value" id="summary-time"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header-2">
            <h1 class="twinkle-title-pro">
                <span class="star-pro star-pro-1"></span>
                <span class="star-pro star-pro-2"></span>
                <span class="star-pro star-pro-3"></span>
                Phim Đang Chiếu
                <span class="star-pro star-pro-4"></span>
                <span class="star-pro star-pro-5"></span>
                <span class="star-pro star-pro-6"></span>
            </h1>
            <p>Trải nghiệm điện ảnh đỉnh cao tại rạp chiếu phim CineTick</p>
        </div>

        <div class="movies-carousel">
            <div class="carousel-container">
                <div class="movies-grid" id="moviesGrid">
                    @foreach ($dsPhimDangChieu as $phim)
                        <div class="movie-card">
                            <div class="movie-poster">
                                <img src="{{ $phim->HinhAnh }}" alt="{{ $phim->TenPhim }}" />
                                <div class="play-button" data-trailer="{{ $phim->Trailer }}">
                                    <div class="play-icon"></div>
                                </div>
                                <div class="age-rating">T{{ $phim->DoTuoi }}</div>
                            </div>
                            <div class="movie-info">
                                <a href="{{ route('phim.chiTiet', ['slug' => $phim->Slug]) }}"><h3 class="movie-title">{{ $phim->TenPhim }}</h3></a>
                                <p class="movie-genre">{{ $phim->theLoai->TenTheLoai ?? '' }}</p>
                                <div class="movie-rating">
                                    <div class="stars">
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                    </div>
                                    <span class="rating-number">8.2</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <button class="nav-button prev" id="prevBtn" aria-label="Trước">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                        <circle cx="20" cy="20" r="20" fill="#fff" opacity="0.85" />
                        <path d="M24 12L16 20L24 28" stroke="#222" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                <button class="nav-button next" id="nextBtn" aria-label="Sau">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                        <circle cx="20" cy="20" r="20" fill="#fff" opacity="0.85" />
                        <path d="M16 12L24 20L16 28" stroke="#222" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>

            <div class="dots-indicator" id="dotsIndicator"></div>
        </div>
    </div>

    <div class="container">
        <div class="header">
            <h1>Phim Sắp Chiếu</h1>
            <p>Trải nghiệm điện ảnh đỉnh cao tại rạp chiếu phim CineTick</p>
        </div>

        <div class="movies-carousel-2">
            <div class="carousel-container">
                <div class="movies-grid" id="moviesGridUpcoming">
                    @foreach ($dsPhimSapChieu as $phim)
                        <div class="movie-card">
                            <div class="movie-poster">
                                <img src="{{ $phim->HinhAnh }}" alt="{{ $phim->TenPhim }}" />
                                <div class="play-button" data-trailer="{{ $phim->Trailer }}">
                                    <div class="play-icon"></div>
                                </div>
                                
                                <div class="age-rating">T{{ $phim->DoTuoi }}</div>
                            </div>
                            <div class="movie-info">
                               <a href="{{ route('phim.chiTiet', ['slug' => $phim->Slug]) }}"> <h3 class="movie-title">{{ $phim->TenPhim }}</h3></a>
                                <p class="movie-genre">{{ $phim->theLoai->TenTheLoai ?? '' }}</p>
                                <div class="movie-rating">
                                    <div class="stars">
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                    </div>
                                    <span class="rating-number">8.2</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <button class="nav-button prev" id="prevBtnUpcoming" aria-label="Trước">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                        <circle cx="20" cy="20" r="20" fill="#fff" opacity="0.85" />
                        <path d="M24 12L16 20L24 28" stroke="#222" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                <button class="nav-button next" id="nextBtnUpcoming" aria-label="Sau">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                        <circle cx="20" cy="20" r="20" fill="#fff" opacity="0.85" />
                        <path d="M16 12L24 20L16 28" stroke="#222" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>

            <div class="dots-indicator" id="dotsIndicatorUpcoming"></div>
        </div>
    </div>

    <!-- Top Movies Area Start -->
    {{-- <section class="filmoja-top-movies-area section_30">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filmoja-heading">
                        <h1 class="title">Phim đang chiếu</h1>
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
                                                    <a href="{{ route('phim.chiTiet', ['slug' => $phim->Slug]) }}">
                                                        <img src="{{ $phim->HinhAnh }}" alt="{{ $phim->TenPhim }}" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="amy-movie-item-back">
                                                <div class="amy-movie-item-back-inner">
                                                    <div class="amy-movie-item-content">
                                                        <span class="amy-movie-field-imdb">{{ $phim->DoTuoi }}</span>
                                                        <h3 class="amy-movie-field-title"><a
                                                                href="{{ route('phim.chiTiet', ['slug' => $phim->Slug]) }}">{{ $phim->TenPhim }}</a>
                                                        </h3>
                                                        <div class="amy-movie-item-meta">
                                                            <span class="amy-movie-field-mpaa">{{ $phim->DoHoa }}</span>
                                                            <span class="amy-movie-field-duration"><i
                                                                    class="fa fa-clock-o"></i>@php
                                                                        $gio = floor($phim->ThoiLuong / 60);
                                                                        $phut = $phim->ThoiLuong % 60;
                                                                    @endphp
                                                                {{ $gio > 0 ? $gio . ' giờ ' : '' }}{{ $phut > 0 ? $phut . ' phút' : '' }}</span>
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
                                                            <p style="color:#333">
                                                                {{ Str::words($phim->MoTaPhim, 40, '...') }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-item-button">
                                                        <a href="{{ route('phim.chiTiet', ['slug' => $phim->Slug]) }}"
                                                            class="amy-btn-icon-text link-detail fancybox.iframe amy-fancybox">
                                                            <i class="fa fa-ticket"></i>Đặt vé
                                                        </a>
                                                        <a href="{{ $phim->Trailer }}"
                                                            class="amy-btn-icon-text link-detail fancybox.iframe amy-fancybox popup-youtube">
                                                            <i class="fa fa-circle-play"></i>Xem Trailer
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
    </section> --}}



    <!-- Top Movies Area End -->
    <!-- Top Movies Area Start -->
    {{-- <section class="filmoja-top-movies-area section_30">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filmoja-heading">
                        <h1 class="title">Phim sắp chiếu</h1>
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
                                        <a href="{{ route('phim.chiTiet', ['slug' => $phim->Slug]) }}">
                                            <img src="{{ $phim->HinhAnh }}" alt="{{ $phim->TenPhim }}" />
                                        </a>
                                    </div>
                                    <div class="thumb-hover">
                                        <a class="play-video" href="{{ $phim->Trailer }}"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                        </div>
                                    </div>
                                </div>
                                <div class="top-movie-details">
                                    <h4><a
                                            href="{{ route('phim.chiTiet', ['slug' => $phim->Slug]) }}">{{ $phim->TenPhim }}</a>
                                    </h4>


                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Top Movies Area End -->

    <!-- Top Movies Area Start -->


    {{-- <section class="filmoja-top-movies-area section_30">
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
    </section> --}}



    <!-- Top Movies Area End -->
    <!-- Top Movies Area Start -->
    {{-- <section class="filmoja-top-movies-area section_30">
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
                                        <a href="{{ route('phim.chiTiet', ['slug' => $phim->Slug]) }}">
                                            <img src="{{ $phim->HinhAnh }}" alt="{{ $phim->TenPhim }}"
                                                class="movie-poster">
                                        </a>
                                    </div>
                                    <div class="col-md-10 col-sm-12">

                                        <header>
                                            <h3 class="no-underline">{{ $phim->TenPhim }} T{{ $phim->DoTuoi }}</h3>
                                        </header>
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
                                            <b>Mô tả: </b> {{ Str::words($phim->MoTaPhim, 40, '...') }}
                                        </p>
                                        <div class="col-lg-12" style="padding-left:0 !important">
                                            <a href="{{ route('phim.chiTiet', ['slug' => $phim->Slug]) }}">
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
    </section> --}}

    <!-- Top Movies Area End -->
    <!-- News Area Start -->
    {{-- <section class="filmoja-news-area section_70">
        <div style="positon-relative; right: 200px;" class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filmoja-heading">
                        <h2>Góc Điện Ảnh</h2>
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
    </section> --}}
    <div class="floating-elements">
        <div class="floating-circle"></div>
        <div class="floating-circle"></div>
        <div class="floating-circle"></div>
        
    </div>

    <div class="container">
        <header class="header">
            <h1 class="main-title">Góc Điện Ảnh</h1>
            <nav class="nav-tabs">
                {{-- <a href="#" class="nav-tab">Bình luận phim</a> --}}
                <a href="#" class="nav-tab active">Blog điện ảnh</a>
            </nav>
        </header>

        <main class="content-grid">
            <article class="main-article">
                <div class="main-article-image">
                    <img src="https://images.unsplash.com/photo-1489599417793-4d8f4dfc6b10?w=800&h=400&fit=crop" alt="Final Destination Bloodlines">
                    <div class="main-article-overlay">
                        <div class="article-meta">
                            <span class="article-tag">Thích</span>
                            <div class="article-views">
                                <span>👁</span>
                                <span>54</span>
                            </div>
                        </div>
                        <h2 class="main-article-title">Final Destination Bloodlines: Hé Lộ Bí Mật Về Vòng Lặp Tử Thần</h2>
                    </div>
                </div>
            </article>

            <aside class="sidebar">
                <article class="sidebar-article">
                    <div class="sidebar-image">
                        <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=150&h=150&fit=crop" alt="Bùi Thạc Chuyên">
                    </div>
                    <div class="sidebar-content">
                        <h3 class="sidebar-title">Bùi Thạc Chuyên Và 11 Năm Tâm Huyết Với Địa Đạo: Mặt Trời Trong Bóng Tối</h3>
                        <div class="article-meta">
                            <span class="article-tag">Thích</span>
                            <div class="article-views">
                                <span>👁</span>
                                <span>104</span>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="sidebar-article">
                    <div class="sidebar-image">
                        <img src="https://images.unsplash.com/photo-1579952363873-27d3bfad9c0d?w=150&h=150&fit=crop" alt="Oscar 2025">
                    </div>
                    <div class="sidebar-content">
                        <h3 class="sidebar-title">Tổng Hợp Oscar 2025: Anora Thắng Lớn</h3>
                        <div class="article-meta">
                            <span class="article-tag">Thích</span>
                            <div class="article-views">
                                <span>👁</span>
                                <span>33</span>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="sidebar-article">
                    <div class="sidebar-image">
                        <img src="https://images.unsplash.com/photo-1594908900066-3f4adf00b6f6?w=150&h=150&fit=crop" alt="Nụ Hôn Bạc Tỷ">
                    </div>
                    <div class="sidebar-content">
                        <h3 class="sidebar-title">Nụ Hôn Bạc Tỷ: Thúy Kiều - Thúy Vân Phiên Bản 2025?</h3>
                        <div class="article-meta">
                            <span class="article-tag">Thích</span>
                            <div class="article-views">
                                <span>👁</span>
                                <span>114</span>
                            </div>
                        </div>
                    </div>
                </article>
            </aside>
        </main>

        <div class="view-more">
            <a href="#" class="view-more-btn">Xem thêm</a>
        </div>
    </div>
    <div class="container">
        <header class="section-header">
            <h1 class="section-title">Tin Khuyến Mãi</h1>
        </header>

        <div class="promotions-grid">
            <div class="promotion-card promotion-special">
                <div class="promotion-badge">New</div>
                <div class="promotion-image">
                    <img src="https://images.unsplash.com/photo-1489599417793-4d8f4dfc6b10?w=400&h=250&fit=crop" alt="U22 Vui Vẻ - Bắp Nước Siêu Hạt Dẻ">
                </div>
                <div class="promotion-content">
                    <h3 class="promotion-title">U22 Vui Vẻ - Bắp Nước Siêu Hạt Dẻ</h3>
                    <div class="promotion-meta">
                        <span class="promotion-date">Còn 5 ngày</span>
                        <button class="promotion-cta">Xem Chi Tiết</button>
                    </div>
                </div>
            </div>

            <div class="promotion-card">
                <div class="promotion-badge">Hot</div>
                <div class="promotion-image">
                    <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=400&h=250&fit=crop" alt="Snack Dư Vị - Xem Phim Hay Hết Ý">
                </div>
                <div class="promotion-content">
                    <h3 class="promotion-title">Snack Dư Vị - Xem Phim Hay Hết Ý</h3>
                    <div class="promotion-meta">
                        <span class="promotion-date">Còn 12 ngày</span>
                        <button class="promotion-cta">Khám Phá</button>
                    </div>
                </div>
            </div>

            <div class="promotion-card">
                <div class="promotion-badge">Premium</div>
                <div class="promotion-image">
                    <img src="https://images.unsplash.com/photo-1579952363873-27d3bfad9c0d?w=400&h=250&fit=crop" alt="Trọn Vẹn Cảm Giác Điện Ảnh">
                </div>
                <div class="promotion-content">
                    <h3 class="promotion-title">Trọn Vẹn Cảm Giác Điện Ảnh: Từ Rạp Phim Về Đến Nhà</h3>
                    <div class="promotion-meta">
                        <span class="promotion-date">Còn 8 ngày</span>
                        <button class="promotion-cta">Tham Gia</button>
                    </div>
                </div>
            </div>

            <div class="promotion-card">
                <div class="promotion-badge">25% Off</div>
                <div class="promotion-image">
                    <img src="https://images.unsplash.com/photo-1594908900066-3f4adf00b6f6?w=400&h=250&fit=crop" alt="Bánh Phồng Đế Rec Rec">
                </div>
                <div class="promotion-content">
                    <h3 class="promotion-title">Bánh Phồng Đế Rec Rec - Snack Để Giàu Đạm Nhiều Dinh Dưỡng</h3>
                    <div class="promotion-meta">
                        <span class="promotion-date">Còn 15 ngày</span>
                        <button class="promotion-cta">Mua Ngay</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="view-all-section">
            <a href="#" class="view-all-btn">Xem Tất Cả Khuyến Mãi</a>
        </div>
    </div>
    <script src=" {{ asset('frontend/Content/js/home.js') }}"></script>
@stop
