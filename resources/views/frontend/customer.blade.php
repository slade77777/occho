
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <style>
        body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
    </style>
    <title>CREATION</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="assets/js/modernizr.custom.js"></script>
    <script>
        window.addEventListener("load", function(){
            var load_screen = document.getElementById("load_screen");
            document.body.removeChild(load_screen);
        });
    </script>

</head>

<body>
<div id="load_screen"><div id="loading">&nbsp;</div></div>
<!-- Menu -->
<nav class="menu" id="theMenu">
    <div class="menu-wrap">
        <h1 class="logo"><a href="{{ url('/home') }}">CREATION</a></h1>
        <i class="fa fa-arrow-right menu-close"></i>
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/service') }}">Services</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/material') }}">Material</a>
        <a href="{{ url('/customer') }}">Customer</a>
        <a href="#contact">Contact</a>
    </div>

    <!-- Menu button -->
    <div id="menuToggle"><i class="fa fa-bars"></i></div>
</nav>

<!-- MAIN IMAGE SECTION -->
<div id="headerwrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h1><img src="assets/img/logo.png" alt="Mountain View" style="width:304px;height:150px;"></h1>
                <h2 style="font-family: Helvetica, Arial, sans-serif;"><b>Công Ty Cổ Phần Dịch Vụ Sáng Tạo Mới</b></h2>
                <div class="spacer"></div>
                <i class="fa fa-angle-down"></i>
            </div>
        </div><!-- row -->
    </div><!-- /container -->
</div><!-- /headerwrap -->

<!-- WELCOME SECTION -->
<div class="container">
    <div class="row mt">
        <div class="col-lg-8">
            <h1 style="font-family: Helvetica, Arial, sans-serif;" >Chúng Tôi Luôn Cung Cấp Sự Đổi Mới, Sáng Tạo và Các Sản Phẩm Dịch Vụ Công Nghệ Mới</h1>

        </div>
        <div class="col-lg-4">

        </div>
    </div><!-- /row -->
</div><!-- /.container -->

<!-- PORTFOLIO SECTION -->
<div id="portfolio" style="background: white;font-family: Helvetica, Arial, sans-serif;">
    <div class="container">
        <div class="row mt">
            <ul class="grid effect-2" id="grid">
                <?php
                foreach($customer as $item) {
                ?>
                <li><a href="{{url('/single/'.$item->product_id)}}"><div><img src="assets/customers/<?php echo $item->customer_picture ?>" width="150px" height="150px" /><p><?php echo $item->customer_name ?></p></div>
                    </a></li>
                <?php
                }
                ?>
            </ul>
        </div><!-- row -->
    </div><!-- container -->
</div><!-- portfolio -->


<!-- SERVICES SECTION -->
<div id="services" style="font-family: Helvetica, Arial, sans-serif;">
    <div class="container">
        <div class="row mt">
            <div class="col-lg-1 centered">
                <i class="fa fa-certificate"></i>
            </div>
            <div class="col-lg-3" >
                <h3>Chất Lượng Sản Phẩm</h3>
                <p>Chúng Tôi Luôn Luôn Hướng Tới Và Cam Kết Sẽ Mang Đến Một Chất Lượng Sản Phẩm Tốt Nhất Đến Khách Hàng.</p>
            </div>

            <div class="col-lg-1 centered">
                <i class="fa fa-question-circle"></i>
            </div>
            <div class="col-lg-3">
                <h3>Hỗ Trợ Tận Tình</h3>
                <p>Đội Ngũ Hỗ Trợ Và Giải Quyết Mọi Vấn Đề Khó Khăn Của Khách Hàng Mọi Lúc Mọi Nơi.</p>
            </div>


            <div class="col-lg-1 centered">
                <i class="fa fa-globe"></i>
            </div>
            <div class="col-lg-3">
                <h3>Dịch Vụ Toàn Cầu</h3>
                <p>Với Sức Mạnh Công Nghệ Đột Phá.Chúng Tôi Mang Đến Một Dịch Vụ Trên Toàn Thế Giới.</p>
            </div>

        </div><!-- row -->
    </div><!-- container -->
</div><!-- services section -->


<!-- CLIENTS LOGOS -->
<div id="lg" style="background: white;">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-2 col-lg-offset-1">
                <img src="assets/img/clients/rsz_intel.png" alt="">
            </div>
            <div class="col-lg-2">
                <img src="assets/img/clients/rsz_kocom.jpg" alt="">
            </div>
            <div class="col-lg-2">
                <img src="assets/img/clients/rsz_microengine.png" alt="">
            </div>
            <div class="col-lg-2">
                <img src="assets/img/clients/rsz_panasonic.png" alt="">
            </div>
            <div class="col-lg-2">
                <img src="assets/img/clients/rsz_sony.jpg" alt="">
            </div>
        </div><!-- row -->
    </div><!-- container -->
</div><!-- dg -->





<!-- SOCIAL FOOTER --->
<section id="contact"></section>
<div id="sf">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 dg">
                <h4 class="ml">FACEBOOK</h4>
                <p class="centered"><a href="#"><i class="fa fa-facebook"></i></a></p>
                <p class="ml">> Become A Friend</p>
            </div>
            <div class="col-lg-4 lg">
                <h4 class="ml">TWITTER</h4>
                <p class="centered"><a href="#"><i class="fa fa-twitter"></i></a></p>
                <p class="ml">> Follow Us</p>
            </div>
            <div class="col-lg-4 dg">
                <h4 class="ml">GOOGLE +</h4>
                <p class="centered"><a href="#"><i class="fa fa-google-plus"></i></a></p>
                <p class="ml">> Add Us To Your Circle</p>
            </div>
        </div><!-- row -->
    </div><!-- container -->
</div><!-- Social Footer -->

<!-- CONTACT FOOTER --->
<div id="cf">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div id="mapwrap">
                    <iframe height="400" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.es/maps?t=m&amp;ie=UTF8&amp;ll=52.752693,22.791016&amp;spn=67.34552,156.972656&amp;z=6&amp;output=embed"></iframe>
                </div>
            </div><!--col-lg-8-->
            <div class="col-lg-4" style="font-family: Helvetica, Arial, sans-serif;">
                <h4>Công Ty Cổ Phần Dịch Vụ Sáng Tạo Mới</h4>
                <br>
                <p>
                    Số 20 Nhuệ Giang, Phường Nguyễn Trãi, Quận Hà Đông<br/>
                    Thành Phố Hà Nội
                </p>
                <p>
                    P: 04.66753319<br/>
                    <br/>
                    E: <a href="mailto:#">info@ncvietnam.com</a><br>
                    W: <a href="mailto:#">www.ncvietnam.com</a>
                </p>
            </div><!--col-lg-4-->
        </div><!-- row -->
    </div><!-- container -->
</div><!-- Contact Footer -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.js"></script>
<script src="assets/js/classie.js"></script>
<script src="assets/js/AnimOnScroll.js"></script>
<script>
    new AnimOnScroll( document.getElementById( 'grid' ), {
        minDuration : 0.4,
        maxDuration : 0.7,
        viewportFactor : 0.2
    } );
</script>
</body>
</html>
