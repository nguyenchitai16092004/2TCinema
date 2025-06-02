@extends('frontend.layouts.master')
@section('title', 'Thanh toán thành công')
@section('main')

    <style>


        .container-booking-failure {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .failure-header {
            text-align: center;
            padding: 40px 20px;
            background: white;
        }

        .failure-icon {
            width: 60px;
            height: 60px;
            background: #f44336;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 24px;
        }

        .failure-title {
            font-size: 24px;
            font-weight: bold;
            color: #f44336;
            margin-bottom: 8px;
        }

        .failure-subtitle {
            color: #666;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .error-message {
            background: #ffebee;
            border: 1px solid #ffcdd2;
            border-radius: 8px;
            padding: 15px;
            margin: 20px;
            color: #c62828;
            font-size: 14px;
            text-align: center;
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
            border: 2px solid #ffcdd2;
            border-radius: 8px;
            color: #374151;
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(244, 67, 54, 0.1);
            font-family: 'Courier New', monospace;
            opacity: 0.7;
        }

        .ticket-header {
            background: #ffebee;
            margin: 0;
            padding: 20px 30px;
            border-bottom: 2px dashed #ffcdd2;
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
            border: 2px solid #ffcdd2;
        }

        .ticket-header::before {
            left: -12px;
        }

        .ticket-header::after {
            right: -12px;
        }

        .movie-title {
            background: #757575;
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
            color: #9e9e9e;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
        }

        .movie-info-value {
            font-size: 18px;
            font-weight: bold;
            color: #757575;
            font-family: Arial, sans-serif;
        }

        .cinema-section {
            border-top: 2px dashed #ffcdd2;
            padding-top: 20px;
        }

        .cinema-name {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #757575;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .cinema-address {
            font-size: 13px;
            color: #9e9e9e;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .cinema-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .cinema-room, .cinema-format {
            font-size: 14px;
            font-weight: bold;
            background: #f5f5f5;
            color: #757575;
            padding: 8px 16px;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .ticket-number {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 12px;
            color: #c62828;
            font-weight: bold;
            font-family: 'Courier New', monospace;
        }

        .pricing-section {
            background: #ffebee;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #ffcdd2;
            opacity: 0.7;
        }

        .pricing-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            font-size: 14px;
        }

        .pricing-label {
            color: #757575;
        }

        .pricing-value {
            font-weight: bold;
            color: #757575;
        }

        .seats-row {
            border-top: 1px solid #ffcdd2;
            padding-top: 15px;
            margin-top: 15px;
        }

        .failure-section {
            width: 400px;
            background: linear-gradient(135deg, #f44336, #d32f2f);
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

        .failure-icon-large {
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            font-size: 48px;
        }

        .failure-text {
            font-size: 16px;
            margin-bottom: 15px;
            line-height: 1.4;
            font-weight: bold;
        }

        .failure-reason {
            font-size: 14px;
            margin-bottom: 20px;
            line-height: 1.4;
            opacity: 0.9;
        }


        .contact-button {
            background: transparent;
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.5);
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .contact-button:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .total-section {
            background: #ffebee;
            padding: 15px 20px;
            border-top: 1px solid #ffcdd2;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .total-label {
            font-size: 16px;
            font-weight: bold;
            color: #757575;
        }

        .total-amount {
            font-size: 18px;
            font-weight: bold;
            color: #757575;
            text-decoration: line-through;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            padding: 20px;
        }

        .main-button {
            background: #f44336;
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 25px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .main-button:hover {
            background: #d32f2f;
            transform: translateY(-1px);
        }

        .secondary-button {
            background: transparent;
            color: #f44336;
            border: 2px solid #f44336;
            padding: 13px 30px;
            border-radius: 25px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .secondary-button:hover {
            background: #f44336;
            color: white;
        }

        @media (max-width: 768px) {
            .content-wrapper {
                flex-direction: column;
            }

            .failure-section {
                width: 100%;
            }

            .action-buttons {
                flex-direction: column;
                align-items: center;
            }

            .main-button, .secondary-button {
                width: 80%;
                max-width: 300px;
            }
        }
    </style>
</head>

<body>
    <div class="container-booking-failure">
        <div class="failure-header">
            <div class="failure-icon">✗</div>
            <div class="failure-title">Đặt vé thất bại!</div>
            <div class="failure-subtitle">Rất tiếc, thanh toán không thành công cho đơn hàng #BT720200</div>
        </div>

        <div class="error-message">
            <strong>Lỗi thanh toán:</strong> Giao dịch bị từ chối. Vui lòng kiểm tra thông tin thẻ hoặc thử lại sau.
        </div>

        <div class="content-wrapper">
            <div class="ticket-details">
                <div class="movie-card">
                    <div class="ticket-number">#BT720200</div>
                    <div class="ticket-header">
                        <div class="movie-title">T18 Cái Giá Của Hạnh Phúc</div>
                    </div>

                    <div class="ticket-content">
                        <div class="movie-info">
                            <div class="info-item">
                                <div class="movie-info-label">Thời gian</div>
                                <div class="movie-info-value">10:25 - 12:40</div>
                            </div>
                            <div class="info-item">
                                <div class="movie-info-label">Ngày chiếu</div>
                                <div class="movie-info-value">15/05/2024</div>
                            </div>
                        </div>

                        <div class="cinema-section">
                            <div class="cinema-name">HCinema Aeon Hà Đông</div>
                            <div class="cinema-address">Tầng 3 & 4 - TTTM AEON MALL HÀ ĐÔNG, P. Dương Nội, Q. Hà Đông, Hà Nội</div>

                            <div class="cinema-details">
                                <div class="cinema-room">Cinema 2</div>
                                <div class="cinema-format">2D Phụ đề</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pricing-section">
                    <div class="pricing-row">
                        <span class="pricing-label">GHẾ</span>
                    </div>
                    <div class="pricing-row">
                        <span class="pricing-label">J12, J13, J14, J15</span>
                        <span class="pricing-value">360,000đ</span>
                    </div>

                    <div class="seats-row">
                        <div class="pricing-row">
                            <span class="pricing-label">Tạm tính</span>
                            <span class="pricing-value">360,000đ</span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label">Giảm giá</span>
                            <span class="pricing-value">0đ</span>
                        </div>
                        <div class="pricing-row">
                            <span class="pricing-label">Thành tiền</span>
                            <span class="pricing-value">360,000đ</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="failure-section">
                <div class="failure-icon-large">✗</div>
                <div class="failure-text">Thanh toán thất bại</div>
                <div class="failure-reason">
                    Giao dịch không thể hoàn tất.<br>
                    Vui lòng thử lại hoặc liên hệ hỗ trợ.
                </div>
                <button class="contact-button">Liên hệ hỗ trợ</button>
            </div>
        </div>

        <div class="total-section">
            <div class="total-row">
                <span class="total-label">Tổng cộng</span>
                <span class="total-amount">360,000đ</span>
            </div>
        </div>

        <div class="action-buttons">
            <button class="main-button">Thử lại</button>
            <button class="secondary-button">Quay lại trang chủ</button>
        </div>
    </div>
@stop