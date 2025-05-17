@extends('frontend.layouts.master')
@section('title', 'Thanh toán vé xem phim')
@section('main')
    <link rel="stylesheet" href="{{ asset('frontend/Content/css/thanh-toan.css') }}">

    <div class="ctn-thanh-toan">
        <div class="left-column">
            <div class="steps">
                <div class="step active">Chọn phim / Rạp / Suất</div>
                <div class="step active">Chọn ghế</div>
                <div class="step active">Thanh toán</div>
                <div class="step">Xác nhận</div>
            </div>

            <div class="promotion-section">
                <h2>Khuyến mãi</h2>
                <div class="promo-code">
                    <input type="text" placeholder="Mã khuyến mãi">
                    <button>Áp Dụng</button>
                </div>



            </div>

            <div class="payment-method-section">
                <h2>Phương thức thanh toán</h2>

                <div class="payment-options">
                    <div class="payment-option">
                        <input type="radio" name="payment" id="momo">
                        <img id="momo-logo" src="/frontend/Content/img/momo.png" alt="MoMo">
                        <div class="payment-option-text">Ví Điện Tử MoMo</div>
                    </div>

                    <div class="payment-option">
                        <input type="radio" name="payment" id="zalopay">
                        <img id="zalopay-logo" src="/frontend/Content/img/zalopay.png" alt="ZaloPay">
                        <div class="payment-option-text zalopay-promo">Zalopay</div>
                    </div>
                </div>

                <div class="disclaimer">
                    (*) Bằng việc click vào THANH TOÁN bên phải, bạn đã xác nhận hiểu rõ các <a
                        href="{{ asset('chinh-sach-thanh-toan') }}">Chính sách thanh toán</a> của CineTick.
                </div>
            </div>
        </div>

        <div class="right-column">
            <div class="booking-timer">
                Thời gian giữ ghế: <span class="timer">06:00</span>
            </div>

            <div class="movie-details">
                <div class="movie-poster">
                    <img src="{{ $suatChieu->phim->HinhAnh }}" alt="{{ $suatChieu->phim->TenPhim }}">
                </div>
                <div class="movie-info">
                    <h3>{{ $suatChieu->phim->TenPhim }}</h3>
                    <div class="movie-meta">{{ $suatChieu->phim->DoHoa }} <span
                            class="age-rating">T{{ $suatChieu->phim->DoTuoi }}</span></div>

                </div>
            </div>

            <div class="ticket-details">
                <div>
                    <div>{{ $suatChieu->rap->TenRap }} - {{ $suatChieu->rap->DiaChi }}</div>
                    <div> Suất: <strong>{{ substr($suatChieu->GioChieu, 0, 5) }} -
                            {{ ucfirst(\Carbon\Carbon::parse($suatChieu->NgayChieu)->translatedFormat('l, d/m/Y')) }}</strong>
                    </div>
                    <strong>
                        <div>{{ $suatChieu->phongChieu->TenPhongChieu ?? '' }}</div>
                    </strong>
                </div>
            </div>
            <div class="ticket-details">
                <div class="ticket-row" style="display: flex; justify-content: space-between;">
                    <div>
                        <strong><span>{{ count($selectedSeats) }}x Vé {{ $suatChieu->phim->DoHoa }} </span></strong>
                    </div>
                    <div>
                        <strong>{{ number_format(count($selectedSeats) * $suatChieu->GiaVe, 0, ',', '.') }} đ</strong>
                    </div>
                </div>
                <div style="margin-top: 2px;">
                    Ghế: <strong>{{ implode(', ', $selectedSeats) }}</strong>
                </div>
            </div>

            <div class="total-row">
                <div>Tổng cộng</div>
                <div class="total-price">
                    {{ number_format(count($selectedSeats) * $suatChieu->GiaVe, 0, ',', '.') }} đ
                </div>
            </div>

            <div class="action-buttons">
                <button type="button" class="back-button">Quay lại</button>
                <button type="button" class="confirm-button">Thanh Toán</button>
            </div>
        </div>
    </div>
    <form id="form-thanh-toan" method="POST" action="{{ route('thanh-toan.momo') }}">
        @csrf
        <input type="hidden" name="TongTien" value="{{ count($selectedSeats) * $suatChieu->GiaVe }}">
        <input type="hidden" name="TenPhim" value="{{ $suatChieu->phim->TenPhim }}">
        <input type="hidden" name="NgayXem" value="{{ $suatChieu->NgayChieu }}">
        <input type="hidden" name="DiaChi" value="{{ $suatChieu->rap->DiaChi }}">
        <input type="hidden" name="GiaVe" value="{{ $suatChieu->GiaVe }}">
        <input type="hidden" name="ID_SuatChieu" value="{{ $suatChieu->ID_SuatChieu }}">
        @foreach ($selectedSeats as $seat)
            <input type="hidden" name="selectedSeats[]" value="{{ $seat }}">
        @endforeach
    </form>
    <form id="form-thanh-toan-zalopay" method="POST" action="{{ route('thanh-toan.zalopay') }}">
        @csrf
        <input type="hidden" name="TongTien" value="{{ count($selectedSeats) * $suatChieu->GiaVe }}">
        <input type="hidden" name="TenPhim" value="{{ $suatChieu->phim->TenPhim }}">
        <input type="hidden" name="NgayXem" value="{{ $suatChieu->NgayChieu }}">
        <input type="hidden" name="DiaChi" value="{{ $suatChieu->rap->DiaChi }}">
        <input type="hidden" name="GiaVe" value="{{ $suatChieu->GiaVe }}">
        <input type="hidden" name="ID_SuatChieu" value="{{ $suatChieu->ID_SuatChieu }}">
        @foreach ($selectedSeats as $seat)
            <input type="hidden" name="selectedSeats[]" value="{{ $seat }}">
        @endforeach
    </form>
    <script>
        document.querySelector('.confirm-button').addEventListener('click', function() {
            if (document.getElementById('momo').checked) {
                document.getElementById('form-thanh-toan').submit();
            } else if (document.getElementById('zalopay').checked) {
                document.getElementById('form-thanh-toan-zalopay').submit();
            } else {
                alert('Vui lòng chọn phương thức thanh toán!');
            }
        });
        document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
            toggle.addEventListener('click', function() {
                this.classList.toggle('open');
            });
        });

        let timeLeft = 360; //phút

        function updateTimer() {
            const minutes = Math.floor(timeLeft / 60);
            const seconds = timeLeft % 60;
            document.querySelector('.timer').textContent =
                `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

            if (timeLeft > 0) {
                timeLeft--;
                setTimeout(updateTimer, 1000);
            } else {
                alert('Thời gian giữ ghế đã hết!');
            }
        }

        updateTimer();
    </script>
@stop
