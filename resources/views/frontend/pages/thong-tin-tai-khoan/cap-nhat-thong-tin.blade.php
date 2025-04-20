@extends('frontend.layouts.master')
@section('title', 'Cập nhật thông tin tài khoản')
@section('main')


<div class="sign section--bg" data-bg="/Content/img/section/section.jpg" style="background: #e6e7e9; max-width: 100% !important; border-top: 1px solid;">
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
                                    <input type="text" class="form-control" id="rgFullName" value="Nguyễn Ch&#237; T&#224;i" placeholder="Họ &amp; t&#234;n(*)">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="rgAddress" value="Quận 7, Hồ Ch&#237; Minh" placeholder="Địa chỉ(*)">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="rgCMND" placeholder="CMND(*)" value="083501010425">
                                </div>


                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="rgBirthDay" class="form-control" placeholder="Ng&#224;y sinh" value="16/09/2004">
                                </div>
                                <div class="form-group">
                                    <input type="tel" minlength="10" maxlength="10" id="rgPhone" name="txtEmpPhone" class="form-control" placeholder="Điện thoại(*)" value="0394378614">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="rgEmail" placeholder="Email (*)" value="nguyenchitai16092004@gmail.com">
                                </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" id="rgGenderTrue" name="optradio" value="Nam" checked>
                                                <span> Nam </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" id="rgGenderFalse" name="optradio" value="Nữ">
                                                <span> Nữ </span>
                                            </label>
                                        </div>
                                    </div>

                                <input type="submit" class="btnRegister" onclick="register()" value="Cập nhật">
                            </div>
                            <p style="color: #333;">Vui lòng nhập đầy đủ thông tin vào các trường có đánh dấu <b style="color: red;">(*)</b></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

@stop