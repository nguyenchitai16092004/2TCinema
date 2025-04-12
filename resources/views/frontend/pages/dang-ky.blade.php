@extends('frontend.layouts.master')
@section('title', 'Đăng ký')
@section('main')
    <div class="sign section--bg" data-bg="/Content/img/section/section.jpg"
        style="background: #e6e7e9; max-width: 100% !important; border-top: 1px solid;">
        <div class="container register" style="max-width: 100% !important;">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="Content/img/logo_cinetick.png" alt="" />
                    <p>Đăng ký tài khoản thành viên và nhận ngay ưu đãi!</p>
                    <br>
                </div>
                <div class="col-md-9 register-right">

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Thông tin tài khoản</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="rgFullName"
                                            placeholder="Họ &amp; t&#234;n(*)" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="rgAddress" placeholder="Địa chỉ(*)"
                                            value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="rgCMND" placeholder="CMND(*)"
                                            value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="rgBirthDay" class="form-control"
                                            placeholder="Ng&#224;y sinh" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" minlength="10" maxlength="10" id="rgPhone"
                                            name="txtEmpPhone" class="form-control" placeholder="Điện thoại(*)"
                                            value="">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="rgEmail" placeholder="Email (*)"
                                            value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="rgUserName"
                                            placeholder="Email / T&#234;n đăng nhập (*)" value="">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" id="rgPassword"
                                            placeholder="Mật khẩu(*)" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="rgPasswordConfirm"
                                            placeholder="Mật khẩu nhập lại(*)" value="">
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" id="rgGenderTrue" name="optradio" value="Nam"
                                                    checked>
                                                <span> Nam </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" id="rgGenderFalse" name="optradio" value="Nữ">
                                                <span> Nữ </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <select class="form-control" id="rgStore">
                                                <option value="38">STARLIGHT BU&#212;N MA THUỘT</option>
                                                <option value="39">STARLIGHT Đ&#192; NẴNG</option>
                                                <option value="42">STARLIGHT QUY NHƠN</option>
                                                <option value="43">STARLIGHT BẢO LỘC</option>
                                                <option value="44">STARLIGHT LONG AN</option>
                                                <option value="46">STARLIGHT GIA LAI</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="submit" class="btnRegister" onclick="register()" value="Đăng k&#253;">
                                </div>
                                <p style="color: #333;">Vui lòng nhập đầy đủ thông tin vào các trường có đánh dấu <b
                                        style="color: red;">(*)</b></p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        function MemberRegisViewModel(userName, password, rePassword, address, identifi, phone, email, birthday, gender,
            isActive, fullName, storeId) {
            var t = this;
            t.UserName = userName,
                t.Password = password,
                t.RePassword = rePassword,
                t.Address = address,
                t.Identifi = identifi,
                t.Phone = phone,
                t.Email = email,
                t.BirthDay = birthday,
                t.Gender = gender,
                t.FullName = fullName,
                t.DateCreated = null,
                t.Isactive = isActive,
                t.StoreId = storeId;
        }

        function register() {
            $(".main-reloader").css("display", "block");
            var fullName = $("#rgFullName").val();
            var userName = $("#rgUserName").val();
            var password = $("#rgPassword").val();
            var rePassword = $("#rgPasswordConfirm").val();
            var address = $("#rgAddress").val();
            var identifi = $("#rgCMND").val();
            var phone = $("#rgPhone").val();
            var email = $("#rgEmail").val();
            var birthday = $("#rgBirthDay").val();
            var storeId = $("#rgStore").val();
            var gender = "1";
            var isActive = false;

            if (fullName == "" || fullName == undefined) {
                $.sweetModal({
                    content: 'Vui lòng nhập họ tên.',
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
            if (address == "" || address == undefined) {
                $.sweetModal({
                    content: 'Vui lòng nhập địa chỉ',
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
            if (identifi == "" || identifi == undefined) {
                $.sweetModal({
                    content: 'Vui lòng nhập cmnd',
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
            if (email == "" || email == undefined) {
                $.sweetModal({
                    content: 'Vui lòng nhập email',
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
            if (phone == "" || phone == undefined) {
                $.sweetModal({
                    content: 'Vui lòng nhập số điện thoại',
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
            if (birthday == "" || birthday == undefined) {
                $.sweetModal({
                    content: 'Vui lòng nhập ngày sinh',
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
            if (userName == "" || userName == undefined) {
                $.sweetModal({
                    content: 'Vui lòng nhập Tên đăng nhập.',
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
            if (password == "" || password == undefined) {
                $.sweetModal({
                    content: 'Vui lòng nhập mật khẩu.',
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
            if (rePassword == "" || rePassword == undefined) {
                $.sweetModal({
                    content: 'Vui lòng nhập mật khẩu nhập lại',
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

            //alert(userName + password+ rePassword+ address+ identifi+ phone+ email+ birthday+ gender+ isActive+ fullName);
            if (document.getElementById("rgGenderTrue").checked == true) {
                gender = "1";
            } else {
                gender = "0";
            }

            var data = JSON.stringify(new MemberRegisViewModel(userName, password, rePassword, address, identifi, phone,
                email, birthday, gender, isActive, fullName, storeId));
            //alert(data);
            $.ajax({
                url: "/MemberRegister/Register",
                type: "POST",
                data: data,
                traditional: true,
                datatype: "json",
                contentType: 'application/json; charset=utf-8',
                success: function(result) {
                    //alert(result);
                    if (result === "true" || result === true) {
                        clearForm();
                        $.sweetModal({
                            content: 'Đăng ký thành công. Vui lòng kiểm tra Email để xác nhận việc đăng ký của bạn. Và đăng nhập <a href="/dang-nhap.html">tại đây</a>',
                            title: 'Thông báo',
                            icon: $.sweetModal.ICON_WARNING,
                            theme: $.sweetModal.THEME_DARK,
                            buttons: {
                                'OK': {
                                    classes: 'redB'
                                }
                            }
                        }, function() {
                            location.href = "dang-nhap.html";
                        });
                        setTimeout(function() {
                            location.href = "dang-nhap.html";
                        }, 500);

                    } else {
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
                        $(".main-reloader").css("display", "none");
                    }
                },
                error: function() {
                    return false;
                }
            });
        }

        function clearForm() {
            $("#rgFullName").val("");
            $("#rgUserName").val("");
            $("#rgPassword").val("");
            $("#rgPasswordConfirm").val("");
            $("#rgAddress").val("");
            $("#rgCMND").val("");
            $("#rgPhone").val("");
            $("#rgEmail").val("");
            $("#rgBirthDay").val("");
        }
    </script>
@stop
