@extends('frontend.layouts.master')
@section('title', 'Đăng nhập')
@section('main')
    <div class="sign section--bg" style="background: #e6e7e9; max-width: 100%; border-top: 1px solid;">
        <div class="container register" style="max-width: 100%;">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="Content/img/logo_cinetick.png" alt="Logo" />
                    <p>Đăng nhập với tài khoản của bạn!</p>
                </div>
                <div class="col-md-9 register-right">
                    <div class="tab-content">
                        <div class="tab-pane fade show active">
                            <h3 class="register-heading">Đăng nhập</h3>
                            <form action="/dang-nhap-tai-khoan" method="POST">
                                @csrf
                                <div class="row register-form">
                                    <div class="col-md-9">

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="TenDN"
                                                placeholder="Email / Tên đăng nhập" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control" name="MatKhau"
                                                placeholder="Mật khẩu" required minlength="6">
                                        </div>

                                        <div class="form-group">
                                            <ul style="display: flex; gap: 10px; padding-left: 0; list-style: none;">
                                                <li><a href="{{ route('register.form') }}">Đăng ký</a></li>
                                                <li><a href="#">/ Quên mật khẩu?</a></li>
                                            </ul>
                                        </div>

                                        <button type="submit" class="btnRegister">Đăng nhập</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
