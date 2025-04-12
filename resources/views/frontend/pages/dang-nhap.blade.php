@extends('frontend.layouts.master')
@section('title', 'Đăng nhập')
@section('main')
    <div class="sign section--bg" data-bg="/Content/img/section/section.jpg"
        style="background: #e6e7e9; max-width: 100% !important; border-top: 1px solid;">
        <div class="container register" style="max-width: 100% !important;">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="Content/img/logo_cinetick.png" alt="" />
                    <p>Đăng nhập với tài khoản của bạn!</p>
                </div>
                <div class="col-md-9 register-right">

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Đăng nhập</h3>
                            <div class="row register-form">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="lgUserName"
                                            placeholder="Email / T&#234;n đăng nhập" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" minlength="6" maxlength="50" name="txtEmpPhone"
                                            class="form-control" id="lgPassword" placeholder="Mật khẩu(*)" value="">
                                    </div>
                                    <div class="form-group">
                                        <ul style="display:flex">
                                            <li>
                                                <a href="dang-ky.html">Đăng ký / </a>
                                            </li>
                                            <li>
                                                <a href="quen-mat-khau.html">Qu&#234;n mật khẩu?</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <input type="submit" class="btnRegister" onclick="logIn()" value="Đăng nhập">
                                    <div class="clearfix"></div>
                                    <p style="color: #333;font-size: 15px;">Hoặc đăng nhập với</p>
                                    <div class="clearfix"></div>
                                    <div class="row"
                                        style="margin-top: 5px; padding-top: 20px; border-top: 1px dotted #f37737;justify-content:center">

                                        <a href="#" class="fb-btn"><i class="fa fa-facebook" title="Facebook"></i></a>
                                        <a href="#" class="gg-btn"><i class="fa fa-google" title="Facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        function MemberLoginModel(userName, passWord) {
            var t = this;
            t.UserName = userName,
                t.Password = passWord;
        }

        function logIn() {
            $(".main-reloader").css("display", "block");
            var userName = $("#lgUserName").val();
            var passWord = $("#lgPassword").val();
            if (userName == "" || userName == undefined) {
                $.sweetModal({
                    content: 'Vui lòng nhập Email hoặc Tên đăng nhập.',
                    title: '',
                    icon: $.sweetModal.ICON_WARNING,
                    theme: $.sweetModal.THEME_DARK,
                    buttons: {
                        'OK': {
                            classes: 'redB'
                        }
                    }
                });
                $(".main-reloader").css("display", "none");
                return false;
            }

            if (passWord == "" || passWord == undefined) {
                $.sweetModal({
                    content: 'Vui lòng nhập mật khẩu đăng nhập.',
                    title: '',
                    icon: $.sweetModal.ICON_WARNING,
                    theme: $.sweetModal.THEME_DARK,
                    buttons: {
                        'OK': {
                            classes: 'redB'
                        }
                    }
                });
                $(".main-reloader").css("display", "none");
                return false;
            }

            var data = JSON.stringify(new MemberLoginModel(userName, passWord));
            $.ajax({
                url: "/MemberRegister/Login",
                type: "POST",
                data: data,
                traditional: true,
                datatype: "json",
                contentType: 'application/json; charset=utf-8',
                success: function(result) {
                    //alert(result);
                    if (result === "true" || result === true) {
                        window.location.href = document.referrer;
                    } else {
                        $(".main-reloader").css("display", "none");
                        $.sweetModal({
                            content: result,
                            title: '',
                            icon: $.sweetModal.ICON_WARNING,
                            theme: $.sweetModal.THEME_DARK,
                            buttons: {
                                'OK': {
                                    classes: 'redB'
                                }
                            }
                        });
                    }
                },
                error: function() {
                    return false;
                }
            });
        }
    </script>
@stop
