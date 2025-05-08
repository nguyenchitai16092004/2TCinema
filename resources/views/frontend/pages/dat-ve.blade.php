@extends('frontend.layouts.master')
@section('title', 'Đặt vé xem phim')
@section('main')
    <link rel="stylesheet" href="{{ asset('frontend/Content/css/dat-ve.css') }}">



    <div class="container">
        <!-- Booking Steps -->
        <div class="booking-steps">
            <div class="step active">Chọn phim / Rạp / Suất</div>
            <div class="step active">Chọn ghế</div>
            <div class="step">Chọn thức ăn</div>
            <div class="step">Thanh toán</div>
            <div class="step">Xác nhận</div>
        </div>
        
        <!-- Main Content -->
        <div class="content">
            <!-- Left Panel - Seating -->
            <div class="left-panel">
                <div class="time-selection">
                    <label>Đổi suất chiếu</label>
                    <button class="time-btn active">21:30</button>
                    <button class="time-btn">22:15</button>
                </div>
                
                <div class="seating-chart">
                    <!-- Row G -->
                    <div class="seat-row">
                        <div class="row-label row-seat-left">G</div>
                        <div class="seat">16</div>
                        <div class="seat">15</div>
                        <div class="seat">14</div>
                        <div class="seat">13</div>
                        <div class="seat">12</div>
                        <div class="seat">11</div>
                        <div class="seat">10</div>
                        <div class="seat">9</div>
                        <div class="seat">8</div>
                        <div class="seat">7</div>
                        <div class="seat">6</div>
                        <div class="seat">5</div>
                        <div class="seat">4</div>
                        <div class="seat">3</div>
                        <div class="seat">2</div>
                        <div class="seat">1</div>
                        <div class="row-label row-seat-right">G</div>
                    </div>
                    
                    <!-- Row F -->
                    <div class="seat-row">
                        <div class="row-label row-seat-left">F</div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat">12</div>
                        <div class="seat">11</div>
                        <div class="seat">10</div>
                        <div class="seat">9</div>
                        <div class="seat">8</div>
                        <div class="seat">7</div>
                        <div class="seat">6</div>
                        <div class="seat">5</div>
                        <div class="seat">4</div>
                        <div class="seat">3</div>
                        <div class="seat">2</div>
                        <div class="seat">1</div>
                        <div class="row-label row-seat-right">F</div>
                    </div>
                    
                    <!-- Row E -->
                    <div class="seat-row">
                        <div class="row-label row-seat-left">E</div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat">12</div>
                        <div class="seat">11</div>
                        <div class="seat">10</div>
                        <div class="seat">9</div>
                        <div class="seat">8</div>
                        <div class="seat">7</div>
                        <div class="seat">6</div>
                        <div class="seat">5</div>
                        <div class="seat">4</div>
                        <div class="seat">3</div>
                        <div class="seat">2</div>
                        <div class="seat">1</div>
                        <div class="row-label row-seat-right">E</div>
                    </div>
                    
                    <!-- Row D -->
                    <div class="seat-row">
                        <div class="row-label row-seat-left">D</div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat">12</div>
                        <div class="seat">11</div>
                        <div class="seat">10</div>
                        <div class="seat">9</div>
                        <div class="seat">8</div>
                        <div class="seat">7</div>
                        <div class="seat">6</div>
                        <div class="seat">5</div>
                        <div class="seat">4</div>
                        <div class="seat">3</div>
                        <div class="seat">2</div>
                        <div class="seat">1</div>
                        <div class="row-label row-seat-right">D</div>
                    </div>
                    
                    <!-- Row C -->
                    <div class="seat-row">
                        <div class="row-label row-seat-left">C</div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat">12</div>
                        <div class="seat">11</div>
                        <div class="seat">10</div>
                        <div class="seat">9</div>
                        <div class="seat">8</div>
                        <div class="seat">7</div>
                        <div class="seat">6</div>
                        <div class="seat">5</div>
                        <div class="seat">4</div>
                        <div class="seat">3</div>
                        <div class="seat">2</div>
                        <div class="seat">1</div>
                        <div class="row-label row-seat-right">C</div>
                    </div>
                    
                    <!-- Row B -->
                    <div class="seat-row">
                        <div class="row-label row-seat-left">B</div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat">15</div>
                        <div class="seat">14</div>
                        <div class="seat">13</div>
                        <div class="seat">12</div>
                        <div class="seat">11</div>
                        <div class="seat">10</div>
                        <div class="seat">9</div>
                        <div class="seat">8</div>
                        <div class="seat">7</div>
                        <div class="seat">6</div>
                        <div class="seat selected">5</div>
                        <div class="seat">4</div>
                        <div class="seat">3</div>
                        <div class="seat">2</div>
                        <div class="seat">1</div>
                        <div class="row-label row-seat-right">B</div>
                    </div>
                    
                    <!-- Row A -->
                    <div class="seat-row">
                        <div class="row-label row-seat-left">A</div>
                        <div class="seat" style="visibility: hidden;"></div>
                        <div class="seat">15</div>
                        <div class="seat">14</div>
                        <div class="seat">13</div>
                        <div class="seat">12</div>
                        <div class="seat">11</div>
                        <div class="seat">10</div>
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
                        <div class="legend-item">
                            <div class="legend-box legend-double"></div>
                            <span>Ghế đôi</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-box legend-special"></div>
                            <span>Ghế ba</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Panel - Movie Info & Summary -->
            <div class="right-panel">
                <div class="movie-info">
                    <div class="movie-poster">
                        <img src="/api/placeholder/400/320" alt="Thám Tử Kiến: Kỳ Án Không Đầu">
                        <div class="movie-badge">T16</div>
                    </div>
                    <h3 class="movie-title">Thám Tử Kiến: Kỳ Án Không Đầu</h3>
                    <p class="cinema-info">2D Phụ Đề &bull; T16</p>
                    <p class="cinema-info">Galaxy Parc Mall Q8 - RAP 5</p>
                    <p class="showtime-info"><span>Suất: 21:30</span> - Thứ Năm, 08/05/2025</p>
                </div>
                
                <div class="ticket-summary">
                    <div class="ticket-item">
                        <div class="ticket-info">
                            <div>2x Ghế đơn</div>
                            <div class="seat-numbers">Ghế: B5, B4</div>
                        </div>
                        <div class="ticket-price">150.000 đ</div>
                    </div>
                    
                    <div class="total-section">
                        <div>Tổng cộng</div>
                        <div class="total-price">150.000 đ</div>
                    </div>
                    
                    <div class="button-group">
                        <button class="btn btn-back">Quay lại</button>
                        <button class="btn btn-continue">Tiếp tục</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
