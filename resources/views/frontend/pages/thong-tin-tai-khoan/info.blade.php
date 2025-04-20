@extends('frontend.layouts.master')
@section('title', 'Thông tin tài khoản')
@section('main')
    <section class="filmoja-login-area section_70 container bg-main"
        style="background: #e6e7e9; max-width: 100% !important; border-top: 1px solid;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="auth-box-right">
                        <h3>Th&#244;ng tin c&#225; nh&#226;n</h3>
                        <div class="login-box">

                            <p>Nguyễn Ch&#237; T&#224;i</p>
                            <p>Điện thoại: 0394378614</p>
                            <p>Địa chỉ: Quận 7, Hồ Ch&#237; Minh</p>
                            <p>Email: nguyenchitai16092004@gmail.com</p>
                            <img src="#" style="display:block;width:200px;height:auto;margin: 0 auto;" />
                            <div>
                                <div style="float:left;width:49%">
                                    <p style="font-weight:bold;color:#f37737">Điểm t&#237;ch lũy</p>
                                    <p>0</p>
                                </div>
                                <div style="float:left;width:49%">
                                    <p style="font-weight:bold;color:#f37737">Điểm thưởng</p>
                                    <p>0</p>
                                </div>
                            </div>
                            <a href="/doi-mat-khau.html">Đổi mật khẩu</a>
                            <a href="/cap-nhat-tai-khoan.html">Cập nhật th&#244;ng tin</a>

                            <a href="/online-booking-check.html">Lịch sử giao dịch online</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="auth-box-left margin-top">
                        <h3>Lịch sử giao dịch</h3>
                        <div class="login-box" style="text-align:left;padding:0 !important">
                            <div>
                                <table class="table">
                                    <thead>
                                        <tr style="font-weight:bold;color:#f37737">
                                            <th style="color:#f37737">Rạp</th>
                                            <th style="color:#f37737">T&#234;n phim</th>
                                            <th style="color:#f37737">Tổng tiền</th>
                                            <th style="color:#f37737">Điểm thưởng</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td colspan="4">Kh&#244;ng c&#243; dữ liệu</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
