
<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>
<html class="ie ie9"> <![endif]-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description"
          content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
    <meta name="author" content="Ansonika">
    <title>CITY TOURS - City tours and travel site template by Ansonika</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="/frontend/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="/frontend/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="/frontend/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
          href="/frontend/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
          href="/frontend/img/apple-touch-icon-144x144-precomposed.png">

    <!-- Google web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/frontend/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/frontend/css/slick-theme.css"/>


    <!-- CSS -->
    <link href="/frontend/css/base.css" rel="stylesheet">
    <link href="/frontend/css/custom.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="/frontend/js/html5shiv.min.js"></script>
    <script src="/frontend/js/respond.min.js"></script>
    <![endif]-->
    <style>
        .title-over {
            z-index: 100;
            position: absolute;
            width: 358px;
            top: 95px;
        }

        .title-h {
            color: white !important;
            text-align: center;
        }
    </style>

    @yield('styles')

</head>

<body>

<!--[if lte IE 8]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a>.</p>
<![endif]-->

<div id="preloader">
    <div class="sk-spinner sk-spinner-wave">
        <div class="sk-rect1"></div>
        <div class="sk-rect2"></div>
        <div class="sk-rect3"></div>
        <div class="sk-rect4"></div>
        <div class="sk-rect5"></div>
    </div>
</div>
<!-- End Preload -->

<div class="layer"></div>
<!-- Mobile menu overlay mask -->

<!-- Header Plain:  add the id plain to header and change logo.png to logo_sticky.png ======================= -->
<header id="plain">
    <div id="top_line">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6"><i class="icon-phone"></i><strong>0045 043204434</strong>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <ul id="top_links">
                        <li>
                            <div class="dropdown dropdown-access">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="access_link">Sign in</a>
                                <div class="dropdown-menu">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <a href="#" class="bt_facebook"><i class="icon-facebook"></i>Facebook </a>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <a href="#" class="bt_paypal"><i class="icon-paypal"></i>Paypal </a>
                                        </div>
                                    </div>
                                    <div class="login-or">
                                        <hr class="hr-or">
                                        <span class="span-or">or</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="inputUsernameEmail"
                                               placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="inputPassword"
                                               placeholder="Password">
                                    </div>
                                    <a id="forgot_pw" href="#">Forgot password?</a>
                                    <input type="submit" name="Sign_in" value="Sign in" id="Sign_in"
                                           class="button_drop">
                                    <input type="submit" name="Sign_up" value="Sign up" id="Sign_up"
                                           class="button_drop outline">
                                </div>
                            </div>
                            <!-- End Dropdown access -->
                        </li>
                        <li><a href="#" id="wishlist_link">Wishlist</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End container-->
    </div>
    <!-- End top line-->

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3">
                <div id="logo_home">
                    <h1><a href="index.html" title="City tours travel template">City tours travel template</a></h1>
                </div>
            </div>
            <nav class="col-md-9 col-sm-9 col-xs-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                <div class="main-menu">
                    <div id="header_menu">
                        <img src="/frontend/img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">Trang chủ <i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li><a href="javascript:void(0);">Về chúng tôi</a>
                                    <ul>
                                        <li><a href="index.html">Tầm nhìn, sứ mệnh, mục tiêu</a></li>
                                        <li><a href="index_20.html">Giới thiệu chung về Viethouse24</a></li>
                                    </ul>
                                </li>
                                <li><a href="index_12.html">Các môi giới viên</a>

                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">Bản đồ <i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li><a href="all_tours_list.html">Các BĐS theo tỉnh / thành phố</a></li>
                                <li><a href="all_tours_grid.html">Các BĐS tại Bắc Ninh</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">Dự án BĐS <i
                                        class="icon-down-open-mini"></i></a>
                            <ul>
                                <li><a href="all_hotels_list.html">Các dự án đang phân phối/mở bán</a></li>
                                <li><a href="all_hotels_grid.html">Các dự án chuẩn bị mở bán</a></li>
                                <li><a href="all_hotels_map_listing.html">Các dự án đang phát triển (tư vấn)</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- End main-menu -->
                <ul id="top_tools">
                    <li>
                        <div class="dropdown dropdown-search">
                            <a href="#" class="search-overlay-menu-btn" data-toggle="dropdown"><i
                                        class="icon-search"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown dropdown-cart">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class=" icon-basket-1"></i>Cart
                                (0) </a>
                            <ul class="dropdown-menu" id="cart_items">
                                <li>
                                    <div class="image"><img src="/frontend/img/thumb_cart_1.jpg" alt="image"></div>
                                    <strong>
                                        <a href="#">Louvre museum</a>1x $36.00 </strong>
                                    <a href="#" class="action"><i class="icon-trash"></i></a>
                                </li>
                                <li>
                                    <div class="image"><img src="/frontend/img/thumb_cart_2.jpg" alt="image"></div>
                                    <strong>
                                        <a href="#">Versailles tour</a>2x $36.00 </strong>
                                    <a href="#" class="action"><i class="icon-trash"></i></a>
                                </li>
                                <li>
                                    <div class="image"><img src="/frontend/img/thumb_cart_3.jpg" alt="image"></div>
                                    <strong>
                                        <a href="#">Versailles tour</a>1x $36.00 </strong>
                                    <a href="#" class="action"><i class="icon-trash"></i></a>
                                </li>
                                <li>
                                    <div>Total: <span>$120.00</span></div>
                                    <a href="cart.html" class="button_drop">Go to cart</a>
                                    <a href="payment.html" class="button_drop outline">Check out</a>
                                </li>
                            </ul>
                        </div><!-- End dropdown-cart-->
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- container -->
</header>
<!-- End Header -->

<!-- <section id="hero" class="subheader_plain">
    <div class="intro_title">
        <h3 class="animated fadeInDown">Affordable Paris tours</h3>
        <p class="animated fadeInDown">CITY TOURS / TOUR TICKETS / TOUR GUIDES</p>
        <a href="all_tours_list.html" class="animated fadeInUp button_intro">View Tours</a> <a href="single_tour.html" class="animated fadeInUp button_intro outline">Read more</a>
    </div>
</section> -->
<!-- End section -->

@yield('content')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-3">
                <h3>Liên hệ</h3>
                <a href="tel://004542344599" id="phone">+45 423 445 99</a>
                <a href="mailto:help@citytours.com" id="email_footer">help@citytours.com</a>
            </div>
            <div class="col-md-4 col-sm-3">
                <h3>Liên kết</h3>
                <ul>
                    <li><a href="#">Dự án</a></li>
                    <li><a href="#">Cho thuê</a></li>
                    <li><a href="#">Mua bán</a></li>
                    <li><a href="#">Dịch vụ</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-3">
                <h3>Khách hàng nói về chúng tôi</h3>
                <ul>
                    <li><a href="#">Community blog</a></li>
                    <li><a href="#">Tour guide</a></li>
                    <li><a href="#">Wishlist</a></li>
                    <li><a href="#">Gallery</a></li>
                </ul>
            </div>

        </div><!-- End row -->
        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                    <ul>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-google"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon-vimeo"></i></a></li>
                        <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    </ul>
                    <p>© Citytours 2015</p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

<!-- Search Menu -->
<div class="search-overlay-menu">
    <span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
    <form role="search" id="searchform" method="get">
        <input value="" name="q" type="search" placeholder="Search..."/>
        <button type="submit"><i class="icon_set_1_icon-78"></i>
        </button>
    </form>
</div><!-- End Search Menu -->

<!-- Common scripts -->
<script src="/frontend/js/jquery-2.2.4.min.js"></script>
<script src="/frontend/js/common_scripts_min.js"></script>
<script src="/frontend/js/functions.js"></script>
<script src="/frontend/js/slick.js"></script>

<script type="text/javascript">

    $(document).ready(function () {
        $('.slick-items').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });

    });

</script>

</body>

</html>