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

                            <li><a href="cau-hoi-thuong-gap.html">FAQ's</a></li>


                            <li><a href="dang-nhap.html" class="btn-member">Đăng nhập</a></li>
                            <li><a href="dang-ky.html" class="btn-member">Đăng k&#253;</a></li>


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
                        <a href="index.html">
                            <img src="Content/img/logo.png" alt="filmoja" />
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
                                <li><a href="index.html">Trang chủ</a></li>
                                <li>
                                    <a href="lich-chieu.html">Lịch chiếu</a>
                                </li>
                                <li><a href="packets.html">Mua Gói</a></li>
                                <li>
                                    <a href="#">Phim</a>
                                    <ul>
                                        <li><a href="phim.html">Phim Đang Chiếu</a></li>
                                        <li><a href="phim-sap-chieu.html">Phim Sắp Chiếu</a></li>

                                    </ul>
                                </li>
                                <li><a href="uu-dai.html">Khuyến Mãi</a></li>
                                <li><a href="tin-tuc.html">Điện Ảnh</a></li>
                                <li><a href="lien-he.html">Liên hệ</a></li>
                                <li><a href="tuyen-dung.html">Tuyển dụng</a></li>
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
