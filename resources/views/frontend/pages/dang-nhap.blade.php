@extends('frontend.layouts.master')
@section('title', 'Đăng nhập')
@section('main')
    <div class="sign section--bg" style="background: #e6e7e9; max-width: 100%; border-top: 1px solid;">
        <div class="contain er register" style="max-width: 100%;">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="Content/img/logoCineTick.png" alt="Logo" />
                    <p>Đăng nhập với tài khoản của bạn!</p>
                </div>
                <div class="col-md-9 register-right">
                    <div class="tab-content">
                        <div class="tab-pane fade show active">
                            <h3 class="register-heading">Đăng nhập</h3>
                            <form id="loginForm" action="{{ route('login') }}" method="POST">
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
                                                <li><a href="{{ asset('/dang-ky') }}">Đăng ký</a></li>


                                                <li><a href="{{ asset('/quen-mat-khau') }}">/ Quên mật khẩu?</a></li>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#loginForm').on('submit', function(e) {
    e.preventDefault();
    $('.main-reloader').show().text('Đang kiểm tra...');
    $.ajax({
        url: $(this).attr('action'),
        type: 'POST',
        data: $(this).serialize(),
        success: function(res) {
            if (res.success) {
                window.location.href = '/';
            }
        },
        error: function(xhr) {
            let msg = 'Sai tên đăng nhập hoặc mật khẩu';
            if (xhr.responseJSON && xhr.responseJSON.error) {
                msg = xhr.responseJSON.error;
            }
            $('.main-reloader').hide();
            $.sweetModal({
                content: msg,
                title: 'Thông báo',
                icon: $.sweetModal.ICON_WARNING,
                theme: $.sweetModal.THEME_DARK,
                buttons: {
                    'OK': { classes: 'redB' }
                }
            });
        }
    });
});
    </script>
@endsection
