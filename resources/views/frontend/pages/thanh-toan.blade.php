@extends('frontend.layouts.master')
@section('title', 'Thanh toán vé xem phim')
@section('main')

    <link rel="stylesheet" href="{{ asset('frontend/Content/css/thanh-toan.css') }}">

    <div class="ctn-thanh-toan">
        <div class="left-column">
            <div class="booking-timer">
                Thời gian giữ ghế: <span class="timer">06:00</span>
            </div>

            <div class="movie-details">
                <div class="movie-poster">
                    <img src="{{ $suatChieu->phim->HinhAnh ? asset('storage/' . $suatChieu->phim->HinhAnh) : asset('images/no-image.jpg') }}" alt="{{ $suatChieu->phim->TenPhim }}">
                </div>
                <div class="movie-info">
                    <h3>{{ $suatChieu->phim->TenPhim }}</h3>
                    <div class="movie-meta">{{ $suatChieu->phim->DoHoa }}
                        <span class="age-rating">{{ $suatChieu->phim->DoTuoi }}</span>
                    </div>
                </div>
            </div>

            <div class="ticket-details">
                <div>
                    <div>{{ $suatChieu->rap->TenRap }} - {{ $suatChieu->rap->DiaChi }}</div>
                    <div> Suất:
                        <strong>{{ substr($suatChieu->GioChieu, 0, 5) }} -
                            {{ ucfirst(\Carbon\Carbon::parse($suatChieu->NgayChieu)->translatedFormat('l, d/m/Y')) }}</strong>
                    </div>
                    <strong>
                        <div>{{ $suatChieu->phongChieu->TenPhongChieu ?? '' }}</div>
                    </strong>
                </div>
            </div>

            <div class="ticket-details">
                <div class="ticket-row" style="display: flex; justify-content: space-between;">
                    <div><strong><span>{{ count($selectedSeats) }}x Vé {{ $suatChieu->phim->DoHoa }}</span></strong></div>
                    <div><strong> {{ number_format($totalPrice, 0, ',', '.') }} đ</strong>
                    </div>
                </div>
                <div style="margin-top: 2px;">
                  
                    <br>
                    Ghế:
                    <strong>
                        {{-- Show từng ghế, phân biệt VIP/Thường và giá --}}
                        @foreach($seatDetails as $detail)
                        {{ $detail['TenGhe'] }} ({{ $detail['LoaiGhe'] }}){{ !$loop->last ? ', ' : '' }}
                    @endforeach
                    </strong>
                </div>
            </div>

            <div class="total-row">
                <div>Tổng cộng</div>
                <div class="total-price">
                    {{ number_format($totalPrice, 0, ',', '.') }} đ
                </div>
            </div>
        </div>

        <div class="right-column">
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
                        <input type="radio" name="payment" id="payos" checked>
                        <img id="payos-logo" src="/frontend/Content/img/payos.jpg" alt="payos">
                        <div class="payment-option-text payos-promo">PayOS</div>
                    </div>
                </div>
                <div class="disclaimer">
                    (*) Bằng việc click vào THANH TOÁN bên phải, bạn đã xác nhận hiểu rõ các
                    <a href="{{ route('chinh-sach.thanh-toan') }}">Chính sách thanh toán</a> của CineTick.
                </div>
            </div>

            <form id="paymentForm" method="POST" action="{{ route('payment') }}">
                @csrf
                <input type="hidden" name="ten_khach_hang" value="{{ session('user_fullname') ?? '' }}">
                <input type="hidden" name="email" value="{{ session('user_email') ?? '' }}">
                <input type="hidden" name="selectedSeats" value="{{ implode(',', $selectedSeats) }}">
                <input type="hidden" name="ID_SuatChieu" value="{{ $suatChieu->ID_SuatChieu }}">
                <input type="hidden" name="paymentMethod" value="PAYOS">
            </form>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="action-buttons">
                <button type="button" class="back-button" onclick="window.history.back()">Quay lại</button>
                <button type="button" class="confirm-button" id="payos-submit-btn">Thanh Toán</button>
            </div>
        </div>
    </div>

    {{-- PayOS script --}}
    <script src="https://cdn.payos.vn/payos-checkout/v1/stable/payos-initialize.js"></script>
    <script>
        // Đồng hồ đếm ngược 6 phút
        let timeLeft = 360;

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
                window.location.href = "{{ route('home') }}";
            }
        }
        updateTimer();

    </script>

    <style>
        .payment-confirm-popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .payment-confirm-content {
            background-color: white;
            padding: 25px;
            border-radius: 8px;
            width: 90%;
            max-width: 600px;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
        }

        .payment-confirm-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #e0e0e0;
        }

        .payment-confirm-header h2 {
            margin: 0;
            color: #333;
            font-size: 20px;
        }

        .close-popup {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #666;
        }

        .payment-info-section {
            margin-bottom: 15px;
        }

        .payment-info-section h3 {
            font-size: 16px;
            color: #333;
            margin-bottom: 10px;
        }

        .payment-info-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .payment-info-row .label {
            color: #666;
        }

        .payment-info-row .value {
            font-weight: 500;
        }

        .payment-confirm-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
        }

        .payment-confirm-btn {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
        }

        .cancel-btn {
            background-color: #f1f1f1;
            color: #333;
        }

        .confirm-btn {
            background-color: #f7941d;
            color: white;
        }

        .payment-info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .movie-info-with-poster {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e0e0e0;
        }

        .movie-poster-popup {
            width: 120px;
            height: 180px;
            border-radius: 4px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .movie-poster-popup img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .movie-info-popup {
            flex: 1;
        }

        .payment-note {
            margin-top: 15px;
            padding: 10px;
            background-color: #fff3e0;
            border-radius: 4px;
            font-size: 13px;
            color: #666;
            text-align: center;
            border: 1px solid #ffe0b2;
        }
    </style>

    <!-- Payment Confirmation Popup -->
    <div id="paymentConfirmPopup" class="payment-confirm-popup">
        <div class="payment-confirm-content">
            <div class="payment-confirm-header">
                <h2>Xác nhận thanh toán</h2>
                <button class="close-popup" onclick="closePaymentPopup()">&times;</button>
            </div>
            
            <div class="movie-info-with-poster">
                <div class="movie-poster-popup">
                    <img src="{{ $suatChieu->phim->HinhAnh ? asset('storage/' . $suatChieu->phim->HinhAnh) : asset('images/no-image.jpg') }}" 
                         alt="{{ $suatChieu->phim->TenPhim }}">
                </div>
                <div class="movie-info-popup">
                    <h3>{{ $suatChieu->phim->TenPhim }}</h3>
                    <div class="payment-info-row">
                        <span class="label">Đồ họa:</span>
                        <span class="value">{{ $suatChieu->phim->DoHoa }}</span>
                    </div>
                    <div class="payment-info-row">
                        <span class="label">Độ tuổi:</span>
                        <span class="value">{{ $suatChieu->phim->DoTuoi }}</span>
                    </div>
                </div>
            </div>

            <div class="payment-info-grid">
                <div class="payment-info-section">
                    <h3>Thông tin rạp chiếu</h3>
                    <div class="payment-info-row">
                        <span class="label">Tên rạp:</span>
                        <span class="value">{{ $suatChieu->rap->TenRap }}</span>
                    </div>
                    <div class="payment-info-row">
                        <span class="label">Địa chỉ:</span>
                        <span class="value">{{ $suatChieu->rap->DiaChi }}</span>
                    </div>
                </div>

                <div class="payment-info-section">
                    <h3>Thông tin suất chiếu</h3>
                    <div class="payment-info-row">
                        <span class="label">Ngày chiếu:</span>
                        <span class="value">{{ \Carbon\Carbon::parse($suatChieu->NgayChieu)->format('d/m/Y') }}</span>
                    </div>
                    <div class="payment-info-row">
                        <span class="label">Giờ chiếu:</span>
                        <span class="value">{{ substr($suatChieu->GioChieu, 0, 5) }}</span>
                    </div>
                    <div class="payment-info-row">
                        <span class="label">Phòng chiếu:</span>
                        <span class="value">{{ $suatChieu->phongChieu->TenPhongChieu }}</span>
                    </div>
                </div>

                <div class="payment-info-section">
                    <h3>Thông tin vé</h3>
                    <div class="payment-info-row">
                        <span class="label">Ghế đã chọn:</span>
                        <span class="value">
                            @foreach($seatDetails as $detail)
                                {{ $detail['TenGhe'] }} ({{ $detail['LoaiGhe'] }}){{ !$loop->last ? ', ' : '' }}
                            @endforeach
                        </span>
                    </div>
                    <div class="payment-info-row">
                        <span class="label">Số lượng vé:</span>
                        <span class="value">{{ count($selectedSeats) }} vé</span>
                    </div>
                </div>

                <div class="payment-info-section">
                    <h3>Thông tin thanh toán</h3>
                    <div class="payment-info-row">
                        <span class="label">Phương thức thanh toán:</span>
                        <span class="value">PayOS</span>
                    </div>
                    <div class="payment-info-row">
                        <span class="label">Tổng tiền:</span>
                        <span class="value" style="color: #f7941d; font-weight: bold;">{{ number_format($totalPrice, 0, ',', '.') }} đ</span>
                    </div>
                </div>
            </div>

            <div class="payment-note">
                Vui lòng thanh toán trước khi thời gian giữ ghế kết thúc. Đội ngũ CineTick xin cảm ơn!
            </div>

            <div class="payment-confirm-actions">
                <button class="payment-confirm-btn cancel-btn" onclick="closePaymentPopup()">Hủy</button>
                <button class="payment-confirm-btn confirm-btn" onclick="proceedToPayment()">Xác nhận thanh toán</button>
            </div>
        </div>
    </div>

    <script>
        function showPaymentPopup() {
            document.getElementById('paymentConfirmPopup').style.display = 'flex';
        }

        function closePaymentPopup() {
            document.getElementById('paymentConfirmPopup').style.display = 'none';
        }

        function proceedToPayment() {
            const form = document.getElementById('paymentForm');
            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                    'Accept': 'application/json'
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.checkoutUrl) {
                    window.location.href = data.checkoutUrl;
                } else if (data.error) {
                    alert('Lỗi: ' + data.error);
                } else {
                    alert('Không thể tạo đơn hàng. Vui lòng thử lại.');
                }
            })
            .catch(err => {
                alert('Lỗi khi kết nối tới máy chủ.');
                console.error(err);
            });
        }

        // Replace the old click handler with the new one
        document.getElementById('payos-submit-btn').addEventListener('click', function(e) {
            e.preventDefault();
            showPaymentPopup();
        });

        // Close popup when clicking outside
        document.getElementById('paymentConfirmPopup').addEventListener('click', function(e) {
            if (e.target === this) {
                closePaymentPopup();
            }
        });
    </script>
@stop
