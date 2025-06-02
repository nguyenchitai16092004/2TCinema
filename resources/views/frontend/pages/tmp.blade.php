@extends('frontend.layouts.master')
@section('title', 'Đặt vé xem phim')
@section('main')
    <link rel="stylesheet" href="{{ asset('frontend/Content/css/dat-ve.css') }}">
    <div class="container">
        <!-- Booking Steps -->
        <div class="booking-steps">
            <div class="step active">Chọn phim / Rạp / Suất</div>
            <div class="step active">Chọn ghế</div>
            <div class="step">Thanh toán</div>
            <div class="step">Xác nhận</div>
        </div>

        <!-- Main Content -->
        <div class="content">
            <!-- Left Panel - Seating -->
            <div class="left-panel">
         

                {{-- Cột sơ đồ ghế --}}
                <h5 class="card-title fw-bold text-center text-primary mb-3">
                    <i class="bi bi-grid-3x3-gap-fill me-1"></i> Sơ đồ ghế ngồi
                </h5>
                <div id="seatLayout" class="seat-container">
                    {{-- Sơ đồ ghế được render bằng JavaScript --}}
                </div>
                <div class="seat-legend mt-3">
                    <div class="legend-item">
                        <div class="legend-box legend-normal"></div>
                        <span>Ghế thường</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-box legend-vip"></div>
                        <span>Ghế VIP</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-box legend-booked"></div>
                        <span>Đã đặt</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-box legend-disabled"></div>
                        <span>Không hoạt động</span>
                    </div>
                </div>
                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <small id="seatCount" class="text-muted">Số ghế: {{ $phongChieu->SoLuongGhe }}</small>
                    <small class="text-muted">Tối đa 8 ghế/lần đặt</small>
                </div>
            </div>

            <!-- Right Panel - Movie Info & Summary -->
            <div class="right-panel">
                <div class="movie-info">
                    <div class="movie-poster">
                        <img src="{{ $suatChieu->phim->HinhAnh }}" alt="{{ $suatChieu->phim->TenPhim }}">
                        <div class="movie-badge">T{{ $suatChieu->phim->DoTuoi }}</div>
                    </div>
                    <h3 class="movie-title">{{ $suatChieu->phim->TenPhim }}</h3>
                    <div class="movie-meta">
                        {{ $suatChieu->phim->DoHoa }}
                        <span class="age-rating">T{{ $suatChieu->phim->DoTuoi }}</span>
                    </div>
                    <p class="cinema-info">{{ $suatChieu->rap->TenRap }} - {{ $suatChieu->rap->DiaChi }}</p>
                    <p class="showtime-info">
                        <span>Suất: {{ substr($suatChieu->GioChieu, 0, 5) }}</span> -
                        {{ ucfirst(\Carbon\Carbon::parse($suatChieu->NgayChieu)->translatedFormat('l, d/m/Y')) }}
                    </p>
                </div>

                <div class="ticket-summary">
                    <div class="ticket-item">
                        <div class="ticket-info">
                            <div class="seat-summary" style="margin-top: 5px; font-weight: bold;"></div>
                            <div style="display: flex; align-items: center;">
                                Ghế: <div class="seat-numbers" style="margin-left: 5px;"></div>
                            </div>
                        </div>
                        <div class="ticket-price"></div>
                    </div>

                    <div class="total-section">
                        <div>Tổng cộng</div>
                        <div class="total-price">0 đ</div>
                    </div>

                    <div class="button-group">
                        <a href="{{ route('phim.chiTiet', ['slug' => $suatChieu->phim->Slug]) }}" class="btn btn-back">Quay
                            lại</a>
                        <button id="btn-continue" class="btn btn-continue" disabled>Tiếp tục</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form id="form-chuyen-thanh-toan" method="GET" action="{{ route('dat-ve.thanh-toan') }}" style="display:none;">
        <input type="hidden" name="ID_SuatChieu" value="{{ $suatChieu->ID_SuatChieu }}">
        <input type="hidden" name="selectedSeats" id="selectedSeatsInput">
    </form>
    <script>
        document.getElementById('btn-continue').addEventListener('click', function () {
            // Lấy danh sách ghế đã chọn từ JS (giả sử biến selectedSeats lưu mảng ghế)
            let selectedSeats = window.selectedSeats || [];
            if (selectedSeats.length === 0) {
                showBookingNotification('Thông báo', 'Vui lòng chọn ít nhất 1 ghế!', 'warning');
                return;
            }
            document.getElementById('selectedSeatsInput').value = selectedSeats.join(',');
            document.getElementById('form-chuyen-thanh-toan').submit();
        });
    
        // Đảm bảo cập nhật window.selectedSeats mỗi khi chọn ghế (bổ sung vào JS render ghế)
        // window.selectedSeats = [...]; // cập nhật khi chọn ghế
    </script>
    {{-- Pass data to JavaScript --}}
    <script>
        // Global booking data for JavaScript
        window.bookingData = {
            seatLayout: @json($seatLayout),
            rowAisles: @json($rowAisles),
            colAisles: @json($colAisles),
            bookedSeats: @json($bookedSeats),
            suatChieuId: {{ $suatChieu->ID_SuatChieu }},
            ticketPrice: {{ $suatChieu->GiaVe }},
            vipSurcharge: 20000
        };

        // Route URLs
        window.thanhToanUrl = "{{ route('thanh-toan') }}";
    </script>
<script>
    // console.log('Debug info:', {
    //     thanhToanUrl: "{{ route('thanh-toan') }}",
    //     csrfToken: "{{ csrf_token() }}",
    //     suatChieuId: {{ $suatChieu->ID_SuatChieu }}
    // });
    </script>
    {{-- Legacy support for existing JavaScript --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Legacy variables for backward compatibility
            let seats = @json($seatLayout);
            let rowAisles = @json(json_decode($phongChieu->HangLoiDi ?: '[]')).map(Number);
            let colAisles = @json(json_decode($phongChieu->CotLoiDi ?: '[]')).map(Number);
            let seatCount = {{ $phongChieu->SoLuongGhe }};
            let bookedSeats = @json($bookedSeats);

            // console.log('Legacy data initialized:', {
            //     seats: seats,
            //     rowAisles: rowAisles,
            //     colAisles: colAisles,
            //     seatCount: seatCount,
            //     bookedSeats: bookedSeats
            // });

            // Handle showtime button clicks
            const timeButtons = document.querySelectorAll('.time-btn');
            const showtimeInfo = document.querySelector('.showtime-info');

            timeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    timeButtons.forEach(btn => btn.classList.remove('active'));

                    // Add active class to clicked button
                    button.classList.add('active');

                    // Get showtime info
                    const gioChieu = button.getAttribute('data-gio');
                    const suatChieuId = button.getAttribute('data-id');
                    const ngayChieu =
                        "{{ ucfirst(\Carbon\Carbon::parse($suatChieu->NgayChieu)->translatedFormat('l, d/m/Y')) }}";

                    // Update showtime info display
                    if (showtimeInfo) {
                        showtimeInfo.innerHTML = `<span>Suất: ${gioChieu}</span> - ${ngayChieu}`;
                    }

                    // Redirect to new showtime if different
                    if (suatChieuId != {{ $suatChieu->ID_SuatChieu }}) {
                        const phimSlug = "{{ $suatChieu->phim->Slug }}";
                        const ngay = "{{ $suatChieu->NgayChieu }}";
                        const gio = gioChieu.replace(':', '-');

                        window.location.href = `/dat-ve/${phimSlug}/${ngay}/${gio}`;
                    }
                });
            });
        });
    </script>

    {{-- Load the enhanced booking seat JavaScript --}}
    <script src="{{ asset('backend/assets/js/booking-seat.js') }}" defer></script>

    {{-- SweetModal for notifications --}}
    <script>
        // Ensure SweetModal notification function is available
        function showBookingNotification(title, message, type = 'info') {
            if (typeof $ !== 'undefined' && $.sweetModal) {
                $.sweetModal({
                    content: message,
                    title: title,
                    icon: type === 'warning' ? $.sweetModal.ICON_WARNING : $.sweetModal.ICON_INFO,
                    theme: $.sweetModal.THEME_DARK,
                    buttons: {
                        'OK': {
                            classes: 'redB'
                        }
                    }
                });
            } else {
                alert(title + ': ' + message);
            }
        }

        // Make it globally available
        window.showBookingNotification = showBookingNotification;
    </script>
@stop
