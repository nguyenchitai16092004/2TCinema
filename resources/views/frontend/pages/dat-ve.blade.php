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
                <div class="time-selection">
                    <label>Đổi suất chiếu</label>
                    @if ($suatChieuCungNgay->isEmpty())
                        <p>Không có suất chiếu nào cùng ngày và cùng rạp.</p>
                    @else
                        @foreach ($suatChieuCungNgay as $suat)
                            <button class="time-btn {{ $suat->ID_SuatChieu == $suatChieu->ID_SuatChieu ? 'active' : '' }}"
                                data-id="{{ $suat->ID_SuatChieu }}" data-gio="{{ substr($suat->GioChieu, 0, 5) }}"
                                data-gia="{{ $suat->GiaVe }}">
                                {{ substr($suat->GioChieu, 0, 5) }}
                            </button>
                        @endforeach
                    @endif
                </div>

                <div class="seating-chart">
                    <!-- Row G -->
                    <div class="seat-row">
                        <div class="row-label row-seat-left">G</div>
                        <div class="seat">G16</div>
                        <div class="seat">G15</div>
                        <div class="seat">G14</div>
                        <div class="seat">G13</div>
                        <div class="seat">G12</div>
                        <div class="seat">G11</div>
                        <div class="seat">G10</div>
                        <div class="seat">G9</div>
                        <div class="seat">G8</div>
                        <div class="seat">G7</div>
                        <div class="seat">G6</div>
                        <div class="seat">G5</div>
                        <div class="seat">G4</div>
                        <div class="seat">G3</div>
                        <div class="seat">G2</div>
                        <div class="seat">G1</div>
                        <div class="row-label row-seat-right">G</div>
                    </div>

                    <!-- Row F -->
                    <div class="seat-row">
                        <div class="row-label row-seat-left">F</div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat">F12</div>
                        <div class="seat">F11</div>
                        <div class="seat">F10</div>
                        <div class="seat">F9</div>
                        <div class="seat">F8</div>
                        <div class="seat">F7</div>
                        <div class="seat">F6</div>
                        <div class="seat">F5</div>
                        <div class="seat">F4</div>
                        <div class="seat">F3</div>
                        <div class="seat">F2</div>
                        <div class="seat">F1</div>
                        <div class="row-label row-seat-right">F</div>
                    </div>

                    <!-- Row E -->
                    <div class="seat-row">
                        <div class="row-label row-seat-left">E</div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat">E12</div>
                        <div class="seat">E11</div>
                        <div class="seat">E10</div>
                        <div class="seat">E9</div>
                        <div class="seat">E8</div>
                        <div class="seat">E7</div>
                        <div class="seat">E6</div>
                        <div class="seat">E5</div>
                        <div class="seat">E4</div>
                        <div class="seat">E3</div>
                        <div class="seat">E2</div>
                        <div class="seat">E1</div>
                        <div class="row-label row-seat-right">E</div>
                    </div>

                    <!-- Row D -->
                    <div class="seat-row">
                        <div class="row-label row-seat-left">D</div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat">D12</div>
                        <div class="seat">D11</div>
                        <div class="seat">D10</div>
                        <div class="seat">D9</div>
                        <div class="seat">D8</div>
                        <div class="seat">D7</div>
                        <div class="seat">D6</div>
                        <div class="seat">D5</div>
                        <div class="seat">D4</div>
                        <div class="seat">D3</div>
                        <div class="seat">D2</div>
                        <div class="seat">D1</div>
                        <div class="row-label row-seat-right">D</div>
                    </div>

                    <!-- Row C -->
                    <div class="seat-row">
                        <div class="row-label row-seat-left">C</div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat">C12</div>
                        <div class="seat">C11</div>
                        <div class="seat">C10</div>
                        <div class="seat">C9</div>
                        <div class="seat">C8</div>
                        <div class="seat">C7</div>
                        <div class="seat">C6</div>
                        <div class="seat">C5</div>
                        <div class="seat">C4</div>
                        <div class="seat">C3</div>
                        <div class="seat">C2</div>
                        <div class="seat">C1</div>
                        <div class="row-label row-seat-right">C</div>
                    </div>

                    <!-- Row B -->
                    <div class="seat-row">
                        <div class="row-label row-seat-left">B</div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat">B15</div>
                        <div class="seat">B14</div>
                        <div class="seat">B13</div>
                        <div class="seat">B12</div>
                        <div class="seat">B11</div>
                        <div class="seat">B10</div>
                        <div class="seat">B9</div>
                        <div class="seat">B8</div>
                        <div class="seat">B7</div>
                        <div class="seat">B6</div>
                        <div class="seat">B5</div>
                        <div class="seat">B4</div>
                        <div class="seat">B3</div>
                        <div class="seat">B2</div>
                        <div class="seat">B1</div>
                        <div class="row-label row-seat-right">B</div>
                    </div>

                    <!-- Row A -->
                    <div class="seat-row">
                        <div class="row-label row-seat-left">A</div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat">A15</div>
                        <div class="seat">A14</div>
                        <div class="seat">A13</div>
                        <div class="seat">A12</div>
                        <div class="seat">A11</div>
                        <div class="seat">A10</div>
                        <div class="seat">A9</div>
                        <div class="seat">A8</div>
                        <div class="seat">A7</div>
                        <div class="seat">A6</div>
                        <div class="seat">A5</div>
                        <div class="seat">A4</div>
                        <div class="seat">A3</div>
                        <div class="seat">A2</div>
                        <div class="seat">A1</div>
                        <div class="row-label row-seat-right">A</div>
                    </div>

                    <div class="screen">Màn hình</div>

                    <!-- Seat Legend -->
                    <div class="seat-legend">
                        <div class="legend-item">
                            <div class="legend-box legend-sold"></div>
                            <span>Ghế đã bán</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-box legend-selected"></div>
                            <span>Ghế đang chọn</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-box legend-vip"></div>
                            <span>Ghế VIP</span>
                        </div>
                    </div>

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
                    <p class="cinema-info">{{ $suatChieu->phim->DoHoa }} &bull; T{{ $suatChieu->phim->DoTuoi }}</p>
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
                        <div class="total-price">0 đ</div> <!-- Tổng giá tiền sẽ được cập nhật tại đây -->
                    </div>

                    <div class="button-group">
                        <a href="{{ route('phim.chiTiet', ['id' => $suatChieu->ID_Phim]) }}" class="btn btn-back">Quay
                            lại</a>
                        <button id="btn-continue" class="btn btn-continue">Tiếp tục</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- Thêm SweetAlert -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectedSeats = new Set(); // Tập hợp ghế đã chọn
            const seatElements = document.querySelectorAll('.seat'); // Lấy tất cả các ghế
            const btnContinue = document.getElementById('btn-continue'); // Nút "Tiếp tục"
            const seatNumbersElement = document.querySelector('.seat-numbers'); // Hiển thị danh sách ghế
            const totalPriceElement = document.querySelector('.total-price'); // Hiển thị tổng giá tiền
            const seatSummaryElement = document.querySelector('.seat-summary'); // Hiển thị số lượng ghế
            const ticketPrice = {{ $suatChieu->GiaVe }}; // Giá vé
            const maxSeats = 8; // Giới hạn số ghế tối đa

            // Xử lý sự kiện chọn ghế
            seatElements.forEach(seat => {
                seat.addEventListener('click', function() {
                    if (seat.classList.contains('selected')) {
                        // Nếu ghế đã được chọn, bỏ chọn
                        seat.classList.remove('selected');
                        selectedSeats.delete(seat.textContent);
                    } else {
                        // Nếu số ghế đã chọn đạt giới hạn, hiển thị cảnh báo
                        if (selectedSeats.size >= maxSeats) {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Giới hạn ghế',
                                text: `Bạn chỉ được chọn tối đa ${maxSeats} ghế.`,
                                confirmButtonText: 'OK'
                            });
                            return;
                        }
                        // Chọn ghế
                        seat.classList.add('selected');
                        selectedSeats.add(seat.textContent);
                    }

                    // Cập nhật danh sách ghế
                    const seatArray = Array.from(selectedSeats);
                    seatNumbersElement.textContent = seatArray.length > 0 ? 'Ghế ' + seatArray.join(
                        ', ') : '';

                    // Cập nhật tổng giá tiền
                    totalPriceElement.textContent = (selectedSeats.size * ticketPrice)
                        .toLocaleString('vi-VN') + ' đ';

                    // Cập nhật số lượng ghế
                    const seatCount = seatArray.length;
                    if (seatCount > 0) {
                        seatSummaryElement.textContent = `x${seatCount} Ghế đơn`;
                        seatSummaryElement.style.display = 'block'; // Hiển thị nếu có ghế
                    } else {
                        seatSummaryElement.style.display = 'none'; // Ẩn nếu không có ghế
                    }
                });
            });

            // Xử lý sự kiện nhấn nút "Tiếp tục"
            btnContinue.addEventListener('click', function() {
                if (selectedSeats.size === 0) {
                    // Nếu chưa chọn ghế, hiển thị cảnh báo
                    Swal.fire({
                        icon: 'error',
                        title: 'Chưa chọn ghế',
                        text: 'Vui lòng chọn ít nhất một ghế trước khi tiếp tục.',
                        confirmButtonText: 'OK'
                    });
                } else {
                    // Tạo form để gửi dữ liệu ghế đã chọn
                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = "{{ route('thanh-toan') }}";

                    // Thêm CSRF token
                    const csrfInput = document.createElement('input');
                    csrfInput.type = 'hidden';
                    csrfInput.name = '_token';
                    csrfInput.value = "{{ csrf_token() }}";
                    form.appendChild(csrfInput);

                    // Thêm danh sách ghế đã chọn
                    const seatsInput = document.createElement('input');
                    seatsInput.type = 'hidden';
                    seatsInput.name = 'selectedSeats';
                    seatsInput.value = Array.from(selectedSeats).join(',');
                    form.appendChild(seatsInput);

                    // Thêm ID suất chiếu
                    const suatChieuInput = document.createElement('input');
                    suatChieuInput.type = 'hidden';
                    suatChieuInput.name = 'suatChieuId';
                    suatChieuInput.value = "{{ $suatChieu->ID_SuatChieu }}";
                    form.appendChild(suatChieuInput);

                    // Thêm form vào body và submit
                    document.body.appendChild(form);
                    form.submit();
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const timeButtons = document.querySelectorAll('.time-btn');
            const showtimeInfo = document.querySelector('.showtime-info');

            timeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Xóa trạng thái active khỏi tất cả các nút
                    timeButtons.forEach(btn => btn.classList.remove('active'));

                    // Đặt trạng thái active cho nút được chọn
                    button.classList.add('active');

                    // Lấy thông tin từ nút được chọn
                    const gioChieu = button.getAttribute('data-gio');
                    const ngayChieu =
                        "{{ ucfirst(\Carbon\Carbon::parse($suatChieu->NgayChieu)->translatedFormat('l, d/m/Y')) }}";

                    // Cập nhật nội dung của phần tử showtime-info
                    showtimeInfo.innerHTML = `<span>Suất: ${gioChieu}</span> - ${ngayChieu}`;
                });
            });
        });
        function updateUI() {
        const seatArray = Array.from(selectedSeats);
        seatNumbersElement.textContent = seatArray.length > 0 ? 'Ghế ' + seatArray.join(', ') : '';
        totalPriceElement.textContent = (selectedSeats.size * ticketPrice).toLocaleString('vi-VN') + ' đ';

        const seatCount = seatArray.length;
        if (seatCount > 0) {
            seatSummaryElement.textContent = `x${seatCount} Ghế đơn`;
            seatSummaryElement.style.display = 'block';
        } else {
            seatSummaryElement.style.display = 'none';
        }
    }
    </script>
@stop
