<!-- Preloader -->
<div style="display:none" class="main-reloader">
    <div class="loader"></div>
</div>
<!-- Preloader End -->
<!-- Main Header -->

<header class="filmoja-header-area">
    <!-- Header Top Area Start -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-3 col-sm-12">
                    <div class="header-top-social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-md-9 col-sm-12">
                    <div class="header-top-menu">
                        <ul>

                            <li><a href="{{ asset('/cau-hoi-thuong-gap') }}">FAQ's</a></li>


                            <li><a href="{{ asset('/dang-nhap') }}" class="btn-member">Đăng nhập</a></li>
                            <li><a href="{{ asset('/dang-ky') }}" class="btn-member">Đăng k&#253;</a></li>


                            <script>
                                function logOut() {
                                    $.ajax({
                                        url: "/MemberRegister/Logout",
                                        type: "POST",
                                        traditional: true,
                                        datatype: "json",
                                        contentType: 'application/json; charset=utf-8',
                                        success: function(result) {
                                            //alert(result);
                                            if (result === "true" || result === true) {
                                                location.href = "index.html";
                                            } else {}
                                        },
                                        error: function() {
                                            return false;
                                        }
                                    });
                                }
                            </script>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Top Area End -->
    <!-- Main Header Area Start -->
    <div class="main-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="site-logo">
                        <a href="{{ asset('/') }}">
                            <img style="margin-top: 8px;" src="Content/img/logo_cinetick.png" alt="filmoja" />
                        </a>
                    </div>
                    <!-- Responsive Menu Start -->
                    <div class="filmoja-responsive-menu"></div>
                    <!-- Responsive Menu End -->
                </div>

                <div class="col-lg-9">
                    <div class="mainmenu">
                        <nav>
                            <ul id="responsive_navigation">
                                <!-- Mobile Search Start -->
                                <!-- Mobile Search End -->
                                <li><a href="{{ asset('/') }}">Trang chủ</a></li>
                                <li>
                                    <a href="{{ asset('/lich-chieu') }}">Lịch chiếu</a>
                                </li>
                                <li><a href="{{ asset('/lich-chieu') }}">Mua Gói</a></li>
                                <li>
                                    <a href="{{ asset('/phim-dang-chieu') }}">Phim</a>
                                    <ul>
                                        <li><a href="{{ asset('/phim-dang-chieu') }}">Phim Đang Chiếu</a></li>
                                        <li><a href="{{ asset('/phim-sap-chieu') }}">Phim Sắp Chiếu</a></li>

                                    </ul>
                                </li>
                                <li><a href="{{ asset('/uu-dai') }}">Khuyến Mãi</a></li>
                                <li><a href="{{ asset('/tin-tuc') }}">Điện Ảnh</a></li>
                                <li><a href="{{ asset('/lien-he') }}">Liên hệ</a></li>
                                <li><a href="{{ asset('/tuyen-dung') }}">Tuyển dụng</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Header Area End -->

</header>
<script>
    function openNav() {
        document.getElementById("mobileMenu").style.width = "300px";
    }

    function closeNav() {
        document.getElementById("mobileMenu").style.width = "0";
    }
</script>

<!-- Main Header End -->
