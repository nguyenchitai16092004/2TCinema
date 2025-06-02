a@extends('frontend.layouts.master')
@section('title', 'Thanh toán thành công')
@section('main')

    <style>
        .container-baking-success {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .success-header {
            text-align: center;
            padding: 40px 20px;
            background: white;
        }

        .success-icon {
            width: 60px;
            height: 60px;
            background: #4CAF50;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 24px;
        }

        .success-title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
        }

        .success-subtitle {
            color: #666;
            font-size: 14px;
        }

        .content-wrapper {
            display: flex;
            padding: 0 20px 20px;
            gap: 20px;
        }

        .ticket-details {
            flex: 1;
        }

        .movie-card {
            background: white;
            border: 2px solid #e5e7eb;
            border-radius: 0;
            color: #374151;
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            font-family: 'Courier New', monospace;
        }




        .ticket-header {
            background: #f9fafb;
            margin: 0;
            padding: 20px 30px;
            border-bottom: 2px dashed #d1d5db;
            position: relative;
        }

        .ticket-header::before,
        .ticket-header::after {
            content: '';
            position: absolute;
            top: 100%;
            width: 24px;
            height: 24px;
            background: #f5f5f5;
            border-radius: 50%;
            transform: translateY(-50%);
            border: 2px solid #e5e7eb;
        }

        .ticket-header::before {
            left: -12px;
        }

        .ticket-header::after {
            right: -12px;
        }

        .movie-title {
            background: #374151;
            color: white;
            padding: 8px 16px;
            border-radius: 4px;
            font-size: 14px;
            display: inline-block;
            font-weight: bold;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .ticket-content {
            padding: 25px 30px;
            position: relative;
            z-index: 2;
        }

        .movie-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 25px;
        }

        .info-item {
            text-align: left;
        }

        .movie-info-label {
            font-size: 12px;
            color: #6b7280;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
        }

        .movie-info-value {
            font-size: 18px;
            font-weight: bold;
            color: #111827;
            font-family: Arial, sans-serif;
        }

        .cinema-section {
            border-top: 2px dashed #d1d5db;
            padding-top: 20px;
        }

        .cinema-name {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #111827;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .cinema-address {
            font-size: 13px;
            color: #6b7280;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .cinema-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .cinema-room {
            font-size: 14px;
            font-weight: bold;
            background: #f3f4f6;
            color: #374151;
            padding: 8px 16px;
            border: 1px solid #d1d5db;
            border-radius: 4px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .cinema-format {
            font-size: 14px;
            font-weight: bold;
            background: #f3f4f6;
            color: #374151;
            padding: 8px 16px;
            border: 1px solid #d1d5db;
            border-radius: 4px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .ticket-number {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 12px;
            color: #9ca3af;
            font-weight: bold;
            font-family: 'Courier New', monospace;
        }

        .pricing-section {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
        }

        .pricing-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            font-size: 14px;
        }

        .pricing-label {
            color: #666;
        }

        .pricing-value {
            font-weight: bold;
            color: #333;
        }

        .seats-row {
            border-top: 1px solid #eee;
            padding-top: 15px;
            margin-top: 15px;
        }

        .total-section {
            background: white;
            padding: 15px 20px;
            border-top: 1px solid #eee;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .total-label {
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }

        .total-amount {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .qr-section {
            width: 400px;
            background: linear-gradient(135deg, #E91E63, #9C27B0);
            padding: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            margin: 0 auto;
            border-radius: 8px;
        }

        .qr-code {
            width: 200px;
            height: 200px;
            background: white;
            border-radius: 8px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .qr-placeholder {
            width: 100px;
            height: 100px;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><rect width="100" height="100" fill="white"/><rect x="0" y="0" width="20" height="20" fill="black"/><rect x="80" y="0" width="20" height="20" fill="black"/><rect x="0" y="80" width="20" height="20" fill="black"/><rect x="40" y="40" width="20" height="20" fill="black"/></svg>') no-repeat center;
            background-size: contain;
        }

        .qr-text {
            font-size: 14px;
            margin-bottom: 15px;
            line-height: 1.4;
        }

        .qr-button {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 12px 24px;
            border-radius: 25px;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .qr-button:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .main-button {
            background: #E91E63;
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 25px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin: 20px auto;
            display: block;
            transition: all 0.3s ease;
        }

        .main-button:hover {
            background: #C2185B;
            transform: translateY(-1px);
        }

        @media (max-width: 768px) {


            .content-wrapper {
                flex-direction: column;
            }

            .qr-section {
                width: 100%;
            }
        }
    </style>
    </head>

    <body>


        <div class="container-baking-success">
            <div class="success-header">
                <div class="success-icon">✓</div>
                <div class="success-title">Đặt vé thành công!</div>
                <div class="success-subtitle">
                    Cảm ơn bạn đã thanh toán thành công đơn hàng #{{ $hoaDon->ID_HoaDon ?? '---' }}
                </div>
            </div>

            <div class="content-wrapper">
                <div class="ticket-details">
                    <div class="movie-card">
                        <div class="ticket-number">#{{ $hoaDon->ID_HoaDon ?? '---' }}</div>
                        <div class="ticket-header">
                            <div class="movie-title">
                                T{{ $suatChieu->phim->DoTuoi }} {{ $suatChieu->phim->TenPhim }}
                            </div>
                        </div>
                        <div class="ticket-content">
                            <div class="movie-info">
                                <div class="info-item">
                                    <div class="movie-info-label">Thời gian</div>
                                    <div class="movie-info-value">
                                        {{ substr($suatChieu->GioChieu, 0, 5) }}
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="movie-info-label">Ngày chiếu</div>
                                    <div class="movie-info-value">
                                        {{ \Carbon\Carbon::parse($suatChieu->NgayChieu)->format('d/m/Y') }}
                                    </div>
                                </div>
                            </div>
                            <div class="cinema-section">
                                <div class="cinema-name">{{ $suatChieu->rap->TenRap }}</div>
                                <div class="cinema-address">{{ $suatChieu->rap->DiaChi }}</div>
                                <div class="cinema-details">
                                    <div class="cinema-room">
                                        {{ $suatChieu->phongChieu->TenPhong ?? '---' }}
                                    </div>
                                    <div class="cinema-format">
                                        {{ $suatChieu->phim->DoHoa ?? '2D' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pricing-section">
                        <div class="pricing-row">
                            <span class="pricing-label">GHẾ</span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label">
                                {{ implode(', ', $selectedSeats) }}
                            </span>
                            <span class="pricing-value">
                                {{ number_format($hoaDon->TongTien, 0, ',', '.') }}đ
                            </span>
                        </div>
                        <div class="seats-row">
                            <div class="pricing-row">
                                <span class="pricing-label">Tạm tính</span>
                                <span class="pricing-value">
                                    {{ number_format($hoaDon->TongTien, 0, ',', '.') }}đ
                                </span>
                            </div>
                            <div class="pricing-row">
                                <span class="pricing-label">Giảm giá</span>
                                <span class="pricing-value">0đ</span>
                            </div>
                            <div class="pricing-row">
                                <span class="pricing-label">Thành tiền</span>
                                <span class="pricing-value">
                                    {{ number_format($hoaDon->TongTien, 0, ',', '.') }}đ
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="qr-section">
                    <div class="qr-code">
                        {{-- Nếu có mã QR thực tế, thay thế src bên dưới --}}
                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data={{ $hoaDon->ID_HoaDon ?? '---' }}"
                            alt="QR Code">
                    </div>
                    <div class="qr-text">Mã QR được sử dụng khi quét vé tại rạp</div>
                    <a href="https://api.qrserver.com/v1/create-qr-code/?size=400x400&data={{ $hoaDon->ID_HoaDon ?? '---' }}"
                        download="QRCode-{{ $hoaDon->ID_HoaDon ?? '' }}.png" class="qr-button">Tải xuống QRCode</a>
                </div>
            </div>

            <div class="total-section">
                <div class="total-row">
                    <span class="total-label">Tổng cộng</span>
                    <span class="total-amount">
                        {{ number_format($hoaDon->TongTien, 0, ',', '.') }}đ
                    </span>
                </div>
            </div>

            <a href="{{ route('home') }}" class="main-button">Quay lại trang chủ</a>
        </div>

    @stop
