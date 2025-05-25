@extends('frontend.layouts.master')
@section('title', 'Đăng ký')
@section('main')
    <div class="sign section--bg" data-bg="/Content/img/section/section.jpg"
        style="background: #e6e7e9; max-width: 100% !important; border-top: 1px solid;">
        <div class="container register" style="max-width: 100% !important;">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="Content/img/logoCineTick.png" alt="" />
                    <p>Đăng ký tài khoản thành viên và nhận ngay ưu đãi!</p>
                    <br>
                </div>
                <div class="col-md-9 register-right">
                    <h3 class="register-heading">Thông tin tài khoản</h3>
                    <form id="registerForm" action="/dang-ky" method="POST">
                        @csrf
                        <div class="row register-form">
                            <div class="col-md-6">
                                <!-- ID CCCD -->
                                <div class="form-group">
                                    <input type="text" class="form-control" id="rgCCCD" name="ID_CCCD"
                                        placeholder="Số CCCD (*)" value="{{ old('ID_CCCD') }}" required pattern="^\d{12}$"
                                        title="Số CCCD chỉ có thể là 12 chữ số">
                                    @error('ID_CCCD')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Họ tên -->
                                <div class="form-group">
                                    <input type="text" class="form-control" id="rgFullName" name="HoTen"
                                        placeholder="Họ &amp; tên(*)" value="{{ old('HoTen') }}" required>
                                    @error('HoTen')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Email -->
                                <div class="form-group">
                                    <input type="email" class="form-control" id="rgEmail" name="Email"
                                        placeholder="Email (*)" value="{{ old('Email') }}" required>
                                    @error('Email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Số điện thoại -->
                                <div class="form-group">
                                    <input type="tel" class="form-control" id="rgPhone" name="SDT"
                                        placeholder="Điện thoại (*)" value="{{ old('SDT') }}" required
                                        pattern="\d{10,11}" title="Số điện thoại phải là dãy số từ 10 đến 11 chữ số">
                                    @error('SDT')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Ngày sinh -->
                                <div class="form-group">
                                    <input type="date" id="rgBirthDay" name="NgaySinh" class="form-control"
                                        value="{{ old('NgaySinh') }}" required>
                                    @error('NgaySinh')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Tên đăng nhập -->
                                <div class="form-group">
                                    <input type="text" class="form-control" id="rgUserName" name="TenDN"
                                        placeholder="Tên đăng nhập (*)" value="{{ old('TenDN') }}" required>
                                    @error('TenDN')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Mật khẩu -->
                                <div class="form-group">
                                    <input type="password" class="form-control" id="rgPassword" name="MatKhau"
                                        placeholder="Mật khẩu(*)" required>
                                    @error('MatKhau')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Mật khẩu nhập lại -->
                                <div class="form-group">
                                    <input type="password" class="form-control" id="rgPasswordConfirm"
                                        name="MatKhau_confirmation" placeholder="Mật khẩu nhập lại(*)" required>
                                    @error('MatKhau_confirmation')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Giới tính -->
                                <div class="form-group">
                                    <label class="radio inline">
                                        <input type="radio" name="GioiTinh" value="1" checked>
                                        <span> Nam </span>
                                    </label>
                                    <label class="radio inline">
                                        <input type="radio" name="GioiTinh" value="0">
                                        <span> Nữ </span>
                                    </label>
                                    @error('GioiTinh')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <input type="submit" class="btnRegister" value="Đăng ký">
                            </div>
                            <p style="color: #333;">Vui lòng nhập đầy đủ thông tin vào các trường có đánh dấu <b
                                    style="color: red;">(*)</b></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if (session('success'))
        <script>
            $(document).ready(function() {
                $.sweetModal({
                    content: `{{ session('success') }}`,
                    title: 'Thông báo',
                    icon: $.sweetModal.ICON_SUCCESS,
                    theme: $.sweetModal.THEME_DARK,
                    buttons: {
                        'OK': {
                            classes: 'redB',
                            action: function() {
                                window.location.href = "{{ route('login.form') }}";
                            }
                        }
                    }
                });
            });
        </script>
    @endif
@stop
