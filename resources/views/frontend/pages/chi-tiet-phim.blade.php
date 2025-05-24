@extends('frontend.layouts.master')
@section('title', 'Chi tiết phim')
@section('main')

    <link rel="stylesheet" href="{{ asset('frontend/Content/css/chi-tiet-phim.css') }}">

    <section class="movie-detail-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-5">
                    <div class="movie-poster-hero">
                        <img src="{{ $phim->HinhAnh }}" alt="{{ $phim->TenPhim }}" class="movie-poster-img">
                        <a href="{{ $phim->Trailer }}" class="trailer-btn-hero popup-youtube" target="_blank">
                            <span class="trailer-hero-icon">
                                <i class="fa fa-play"></i>
                            </span>
                            <span class="trailer-hero-text">Xem Trailer</span>
                        </a>
                        <div class="poster-overlay"></div>
                        <span class="badge badge-age badge-hero">{{ $phim->DoTuoi }}</span>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="movie-info-box">
                        <h1 class="movie-title">{{ $phim->TenPhim }}</h1>
                        <div class="movie-meta">
                            <span class="badge badge-format">{{ $phim->DoHoa }}</span>
                        </div>
                        <ul class="movie-attributes">
                            <li><b>Đạo diễn:</b> {{ $phim->DaoDien }}</li>
                            <li><b>Ngày khởi chiếu:</b> {{ \Carbon\Carbon::parse($phim->NgayKhoiChieu)->format('d/m/Y') }}
                            </li>
                            <li><b>Diễn viên:</b> {{ $phim->DienVien }}</li>
                            <li><b>Thời lượng:</b>
                                @php
                                    $gio = floor($phim->ThoiLuong / 60);
                                    $phut = $phim->ThoiLuong % 60;
                                @endphp
                                {{ $gio > 0 ? $gio . ' giờ ' : '' }}{{ $phut > 0 ? $phut . ' phút' : '' }}
                            </li>
                            <li><b>Thể loại:</b> {{ $phim->theLoai->TenTheLoai ?? '' }}</li>
                        </ul>
                        <div class="movie-description">
                            <h4>Tóm tắt nội dung</h4>
                            <p>{{ $phim->MoTaPhim }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="showtime-section section_70 container bg-main">
        <div class="container px-0">
            <div class="row">
                <div class="col-12">
                    <h4 class="lich-chieu-title">
                        <i class="fa-solid fa-calendar-days"></i> Lịch chiếu
                    </h4>
                </div>
                <div class="col-12">
                    @if ($suatChieu->isEmpty())
                        <div class="showtime-empty text-center my-5">
                            <div class="showtime-empty-icon animate-pop">
                                <i class="fa-solid fa-clapperboard"></i>
                            </div>
                            <div class="showtime-empty-title">Các suất chiếu dành cho phim này đã hết!</div>
                            <div class="showtime-empty-desc">
                                Xin cảm ơn bạn đã ghé thăm.<br>
                                Suất chiếu mới sẽ được cập nhật ngay thôi, bạn vui lòng quay lại sớm nhé!
                            </div>
                        </div>
                    @else
                        <div class="showtime-timeline">
                            @foreach ($suatChieu as $groupKey => $group)
                                @php
                                    [$ngayChieu, $diaChi] = explode('|', $groupKey);
                                @endphp
                                <div class="showtime-card mb-4 timeline-item">
                                    <div class="timeline-dot"></div>
                                    <div class="showtime-card-header">
                                        <div class="showtime-cinema">
                                            <i class="fa-solid fa-film"></i>
                                            {{ $group->first()->rap->TenRap ?? 'Thông tin rạp không khả dụng' }}
                                        </div>
                                        <div class="showtime-address">
                                            <i class="fa-solid fa-location-dot"></i>
                                            {{ $diaChi }}
                                        </div>
                                        <div class="showtime-date">
                                            <i class="fa-solid fa-calendar-day"></i>
                                            {{ ucfirst(\Carbon\Carbon::parse($ngayChieu)->translatedFormat('l, d/m/Y')) }}
                                        </div>
                                    </div>
                                    <div class="showtime-card-body">
                                        @foreach ($group as $suat)
                                            <a href="{{ route('dat-ve.show.slug', [
                                                'phimSlug' => $phim->Slug,
                                                'ngay' => $suat->NgayChieu,
                                                'gio' => $suat->GioChieu,
                                            ]) }}"
                                                class="showtime-btn animate-btn">
                                                <i class="fa-regular fa-clock"></i>
                                                {{ substr($suat->GioChieu, 0, 5) }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('frontend/Content/js/chi-tiet-phim.js') }}"></script>
@stop
