@extends('frontend.layouts.master')
@section('title', 'Thông tin tài khoản')
@section('main')
    <section class="filmoja-login-area section_70 container bg-main"
        style="background: #e6e7e9; max-width: 100% !important; border-top: 1px solid;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="auth-box-right">
                        <h3>Thông tin cá nhân</h3>
                        <div class="login-box">

                            <img src="{{ asset('frontend/Content/img/user.avif') }}"
                                style="display:block;width:200px;height:auto;margin: 0 auto;" />
                            <p>{{ session('user_fullname') }}</p>
                            <p>Điện thoại: {{ session('user_phone') }}</p>
                            <p>Email: {{ session('user_email') }}</p>
                            <p>Ngày sinh: {{ \Carbon\Carbon::parse(session('user_date'))->format('d-m-Y') }}</p>
                            <p>Giới tính: {{ session('user_sex') == 1 ? 'Nam' : 'Nữ' }}</p>
                            <a href="{{ route('doi-mat-khau.get') }}">Đổi mật khẩu</a>
                            <a href="{{ route('user.updateInfo.get') }}">Cập nhật thông tin</a>

                            <a href="{{ route('user.lichsugiaodich') }}">Lịch sử giao dịch online</a>
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
