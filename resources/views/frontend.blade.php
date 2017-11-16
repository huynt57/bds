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

    <meta name="description" content="Viethouse24">
    @yield('meta')


    <!-- Favicons-->
    <link rel="shortcut icon" href="/frontend/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="/frontend/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72"
          href="/frontend/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
          href="/frontend/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
          href="/frontend/img/apple-touch-icon-144x144-precomposed.png">

    <!-- Google web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/frontend/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/frontend/css/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="/frontend/css/font-awesome.min.css"/>


    <!-- CSS -->
    <link href="/frontend/css/base.css" rel="stylesheet">
    <link href="/frontend/css/custom.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="/frontend/js/html5shiv.min.js"></script>
    <script src="/frontend/js/respond.min.js"></script>
    <!-- Owl Stylesheets -->
    <link rel="stylesheet"
          href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet"
          href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css">
    <![endif]-->

    <style>
        .ht-on-loading {
            display: block;
            position: relative;
        }

        .ht-on-loading:after {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(255, 255, 255, .6);
            background-image: url('/spinner.gif');
            background-position: 50% 50%;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px;
            background-repeat: no-repeat;
        }
    </style>
    <style>
        /*div {*/
        /*transition-duration: 0.5s;*/
        /*}*/
        /*div {*/
        /*transition-timing-function: ease-in-out;*/
        /*}*/
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

        .testimonials {
            background: #4c4c4c;
            padding: 10px 20px;
            position: relative;
        }

        .testimonials:before {
            content: '';
            left: 20%;
            bottom: -15px;
            position: absolute;
            z-index: 999;
            border-color: transparent #4c4c4c transparent transparent;
            border-style: solid;
            border-width: 0 35px 15px 0;
        }

        .testimonials p {
            color: #f4f4f4;
            font-size: 14px;
            line-height: 22px;
            margin: 0;
        }

        .testimonial_autor {
            color: #f4f4f4;
            padding: 20px 0 0 0;
            font-style: italic;
            text-align: right;
        }
    </style>
    <style>html, body {
            height: 100%;
        }</style>

    @yield('styles')

</head>

<body>

<!--[if lte IE 8]>
<p class="chromeframe" Bạn đang sử dụng <strong>trình duyệt lỗi thời</strong>. Vui lòng <a
        href="http://browsehappy.com/">nâng cấp
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
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="access_link">Đăng
                                    nhập</a>
                                <div class="dropdown-menu">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <a href="#" class="bt_facebook"><i class="icon-facebook"></i>Facebook </a>
                                        </div>
                                    </div>
                                    <div class="login-or">
                                        <hr class="hr-or">
                                        <span class="span-or">hoặc</span>
                                    </div>
                                    <form method="post" action="{{ url('process-login') }}" >
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="inputUsernameEmail" name="email"
                                               placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="inputPassword" name="password"
                                               placeholder="Mật khẩu">
                                    </div>
                                    <a id="forgot_pw" href="#">Quên mật khẩu?</a>
                                    <input type="submit" name="Sign_in" value="Đăng nhập" id="Sign_in"
                                           class="button_drop">
                                    <a href="{{ url('dang-ky') }}" name="Sign_up" value="Đăng ký" id="Sign_up"
                                       class="button_drop outline">Đăng ký</a>
                                    </form>
                                </div>
                            </div>
                            <!-- End Dropdown access -->
                        </li>
                        <li><a href="{{ url('yeu-thich') }}" id="wishlist_link">Yêu thích</a>
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
                    <h1><a href="{{ url('/') }}" title="City tours travel template">City tours travel template</a></h1>
                </div>
            </div>
            <nav class="col-md-9 col-sm-9 col-xs-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                <div class="main-menu">
                    <div id="header_menu">
                        <img src="/frontend/img/logo_sticky.png" width="160" height="34" alt="City tours"
                             data-retina="true">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                    <ul>
                        @php $menus = \App\Models\Menu::where('parent_id', null)->orderBy('order', 'asc')->get(); @endphp
                        @foreach($menus as $menu)
                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">{{ $menu->title }} <i
                                        class="icon-down-open-mini"></i></a>
                            @php  \App\Components\Functions::printMenuFrontend($menu); @endphp
                        </li>
                        @endforeach
                    </ul>
                </div><!-- End main-menu -->
                {{--<ul id="top_tools">--}}
                {{--<li>--}}
                {{--<div class="dropdown dropdown-search">--}}
                {{--<a href="#" class="search-overlay-menu-btn" data-toggle="dropdown"><i--}}
                {{--class="icon-search"></i></a>--}}
                {{--</div>--}}
                {{--</li>--}}

                {{--</ul>--}}
            </nav>
        </div>
    </div>
    <!-- container -->
</header>
<!-- End Header -->

{{--<section id="hero" class="subheader_plain">--}}
{{--<div class="intro_title">--}}
{{--<h3 class="animated fadeInDown">Affordable Paris tours</h3>--}}
{{--<p class="animated fadeInDown">CITY TOURS / TOUR TICKETS / TOUR GUIDES</p>--}}
{{--<a href="all_tours_list.html" class="animated fadeInUp button_intro">View Tours</a> <a href="single_tour.html" class="animated fadeInUp button_intro outline">Read more</a>--}}
{{--</div>--}}
{{--</section>--}}
<!-- End section -->

@yield('content')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-3">
                <h3>Liên hệ</h3>
                <ul class="contact_footer">
                    <li>
                        <i class="fa fa-envelope"></i> <a href="#">0905786996</a>
                    </li>
                    <li>
                        <i class="fa fa-headphones"></i> <a href="mailto:lienhe@viethouse24.com">lienhe@viethouse
                            24.com</a>
                    </li>
                    <li class="location">
                        <i class="fa fa-home"></i> <a href="#"> 39 Lý Thái Tổ, Võ Cường, Tp. Bắc Ninh, Bắc Ninh, Việt
                            Nam</a>
                    </li>
                    <li class="location">
                        <i class="fa fa-skype"></i> <a href="skype:Hoangpn86"> Hoangpn86 </a>
                    </li>
                </ul>
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
            <div class="col-md-4 testimonial-carousel-container">
                <ul class="testimonial-carousel">
                    <!-- Item Testimonial -->
                    @php $testimonials = cache()->get('testimonials'); @endphp

                    @foreach($testimonials as $testimonial)
                    <li>
                        <div class="testimonials">
                            <p>{{ $testimonial->content }}</p>
                            <span class="arrow_testimonials"></span>
                        </div>
                        <h6 class="testimonial_autor">{{$testimonial->user}} - {{$testimonial->address}}</h6>
                    </li>
                    @endforeach
                    <!-- Item Testimonial -->



                </ul>
            </div>

        </div><!-- End row -->
        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                    <ul>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>

                        <li><a href="#"><i class="icon-google"></i></a></li>
                    </ul>
                    <p>© Viethouse24 2017</p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

<!-- Search Menu -->


<!-- Common scripts -->
<script src="/frontend/js/jquery-2.2.4.min.js"></script>
<script src="/frontend/js/common_scripts_min.js"></script>
<script src="/frontend/js/functions.js"></script>
<script src="/frontend/js/slick.js"></script>

<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCydLs7dhJPuozABFQjJO-uk1PITW18oo8"></script>

<script type="text/javascript" src="http://map.fitme.vn/js/gmaps.js"></script>
<script type="text/javascript" src="http://map.fitme.vn/js/prettify.js"></script>


<script src="/frontend/js/map_listing_tours.js"></script>

<!--owlcarousel-->
<script type='text/javascript' src="http://viethouse24.com/assets/frontend/js/owlcarousel/owl.carousel.js"></script>
<script type="text/javascript">

    $(document).on('click', '.ajax-pagination', function () {

        var url = $(this).attr('data-href');

        $.ajax({
            url: url,
            type: 'get',
            dataType: 'json',
            success: function (response) {
                $('.content-left').html(response.items);
            }
        });
    });

    $(document).ready(function () {
        $('.slick-items').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });

    });

    $(document).ready(function () {

        var owl = $('.testimonial-carousel');
        owl.owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true
        });

        owl.on('mousewheel', '.owl-stage', function (e) {
            if (e.deltaY > 0) {
                owl.trigger('next.owl');
            } else {
                owl.trigger('prev.owl');
            }
            e.preventDefault();
        });
    });

</script>

@stack('scripts')

</body>

</html>