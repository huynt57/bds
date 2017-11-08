@extends('frontend')

@section('content')
<div class="ht-ht-after-lg-header" style="margin-top: 98px; background: #fff">
    <div class="home-search-wrapper">
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active ht-bgcover" id="demoSearchTab01"
                 style="background-image: url('stock/stock-01.jpg')">
                <div class="container">
                    <div class="text-center">
                        <h1 class="tab-heading-title">Mua bán</h1>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane ht-bgcover fade" id="demoSearchTab02"
                 style="background-image: url('stock/stock-02.jpg')">
                <div class="container">
                    <div class="text-center">
                        <h1 class="tab-heading-title">Cho thuê</h1>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane ht-bgcover fade" id="demoSearchTab03"
                 style="background-image: url('stock/stock-03.jpg')">
                <div class="container">
                    <div class="text-center">
                        <h1 class="tab-heading-title">Phương án tài chính</h1>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane ht-bgcover fade" id="demoSearchTab04"
                 style="background-image: url('stock/stock-04.jpg')">
                <div class="container">
                    <div class="text-center">
                        <h1 class="tab-heading-title">Môi giới</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8">
                        <ul class="home-search-nav-tabs ht-nav-justified" role="tablist">
                            <li class="active"><a href="#demoSearchTab01" role="tab" data-toggle="tab">Mua bán</a></li>
                            <li><a href="#demoSearchTab02" role="tab" data-toggle="tab">Cho thuê</a></li>
                            <li><a href="#demoSearchTab03" role="tab" data-toggle="tab">Phương án tài chính</a></li>
                            <li><a href="#demoSearchTab04" role="tab" data-toggle="tab">Môi giới</a></li>
                        </ul>
                        <form action="{{ url('map') }}" class="home-search-form">
                            <div class="form-group">
                                <label for="#" class="hidden">Tìm kiếm</label>
                                <input type="text" class="ht-form-control" placeholder="Điền từ khóa cần tìm kiếm" name="keyword">
                                <input type="hidden" value="" name="type">
                                <button class="ht-btn ht-btn-search">Tìm kiếm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<main>
    <div class="container" style="margin-top: 60px">

        <div class="main_title">
            <h2 style="text-transform: none; font-weight: bold">Bất động sản nổi bật</h2>
            <!-- <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p> -->
        </div>

        <div class="row slick-items">

            @foreach($features as $feature)
            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.{{ $loop->index + 1 }}s">
                <div class="tour_container">
                    {{--<div class="ribbon_3 popular"><span>Popular</span>--}}
                    {{--</div>--}}
                    <div class="img_container">
                        <a href="{{ url('house/view/'.$feature->slug) }}">
                            <div alt="Image" style="width:360px; height:240px; background-size: cover; background-image: url('{{ $feature->main_images }}');"></div>
                            <div class="short_info">
                                <i class="icon_set_1_icon-44"></i>{{ $feature->name }}<span
                                        class="price"><sup>$</sup>39</span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>{{ $feature->name }}</strong></h3>
                        {{--<div class="rating">--}}
                            {{--<i class="icon-star voted"></i><i class="icon-star voted"></i><i--}}
                                    {{--class="icon-star voted"></i><i class="icon-star voted"></i><i--}}
                                    {{--class="icon-star-empty"></i>--}}
                            {{--<small>(75)</small>--}}
                        {{--</div>--}}
                        <!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span
                                        class="tooltip-content-flip"><span
                                            class="tooltip-back">Thêm vào mục yêu thích</span></span></a>
                        </div>
                        <!-- End wish list-->
                    </div>
                </div>
                <!-- End box tour -->
            </div>
            @endforeach
            <!-- End col-md-4 -->
        </div>
        <!-- End row -->
        <!-- <p class="text-center nopadding">
            <a href="#" class="btn_1 medium"><i class="icon-eye-7"></i>View all tours (144) </a>
        </p> -->
    </div>
    <!-- End container -->

    <div class="container">

        <div class="main_title">
            <h2 style="text-transform: none; font-weight: bold">Nhà đất mua bán</h2>
            <!-- <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p> -->
        </div>

        <div class="row slick-items">

            @foreach($sells as $sell)
                <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.{{ $loop->index + 1 }}s">
                    <div class="tour_container">
                        {{--<div class="ribbon_3 popular"><span>Popular</span>--}}
                        {{--</div>--}}
                        <div class="img_container">
                            <a href="{{ url('house/view/'.$sell->slug) }}">
                                <div alt="Image" style="width:360px; height:240px; background-size: cover; background-image: url('{{ $sell->main_images }}');"></div>
                                <div class="short_info">
                                    <i class="icon_set_1_icon-44"></i>{{ $sell->name }}<span
                                            class="price"><sup>$</sup>39</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>{{ $sell->name }}</strong></h3>
                        {{--<div class="rating">--}}
                        {{--<i class="icon-star voted"></i><i class="icon-star voted"></i><i--}}
                        {{--class="icon-star voted"></i><i class="icon-star voted"></i><i--}}
                        {{--class="icon-star-empty"></i>--}}
                        {{--<small>(75)</small>--}}
                        {{--</div>--}}
                        <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span
                                            class="tooltip-content-flip"><span
                                                class="tooltip-back">Thêm vào mục yêu thích</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
        @endforeach
            <!-- End col-md-4 -->
        </div>
        <!-- End row -->
        <!-- <p class="text-center nopadding">
            <a href="#" class="btn_1 medium"><i class="icon-eye-7"></i>View all tours (144) </a>
        </p> -->
    </div>
    <!-- End container -->

    <div class="container">

        <div class="main_title">
            <h2 style="text-transform: none; font-weight: bold">Nhà đất cho thuê</h2>
            <!-- <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p> -->
        </div>

        <div class="row slick-items">

            @foreach($rents as $rent)
                <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.{{ $loop->index + 1 }}s">
                    <div class="tour_container">
                        {{--<div class="ribbon_3 popular"><span>Popular</span>--}}
                        {{--</div>--}}
                        <div class="img_container">
                            <a href="{{ url('house/view/'.$rent->slug) }}">
                                <div alt="Image" style="width:360px; height:240px; background-size: cover; background-image: url('{{ $rent->main_images }}');"></div>
                                <div class="short_info">
                                    <i class="icon_set_1_icon-44"></i>{{ $rent->name }}<span
                                            class="price"><sup>$</sup>39</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>{{ $rent->name }}</strong></h3>
                        {{--<div class="rating">--}}
                        {{--<i class="icon-star voted"></i><i class="icon-star voted"></i><i--}}
                        {{--class="icon-star voted"></i><i class="icon-star voted"></i><i--}}
                        {{--class="icon-star-empty"></i>--}}
                        {{--<small>(75)</small>--}}
                        {{--</div>--}}
                        <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span
                                            class="tooltip-content-flip"><span
                                                class="tooltip-back">Thêm vào mục yêu thích</span></span></a>
                            </div>
                            <!-- End wish list-->
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
            @endforeach


        </div>
        <!-- End row -->
        <!-- <p class="text-center nopadding">
            <a href="#" class="btn_1 medium"><i class="icon-eye-7"></i>View all tours (144) </a>
        </p> -->
    </div>
    <!-- End container -->
    <div class="container">
        <div class="main_title">
            <h2 style="text-transform: none; font-weight: bold">Bất động sản theo khu vực</h2>

        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 wow zoomIn animated" data-wow-delay="0.1s"
                 style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="/filterHouse?province=01">
                            <img src="https://onho.vn/themes/frontend/assets/img/01.jpg" class="img-responsive" alt=""
                                 style="height: 239px; width: 358px;">

                        </a>
                    </div>
                    <div class="title-over">
                        <h3 class="title-h"><strong>Hà Nội</strong></h3>

                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->
            <div class="col-md-4 col-sm-6 wow zoomIn animated" data-wow-delay="0.1s"
                 style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="/filterHouse?province=02">
                            <img src="https://onho.vn/themes/frontend/assets/img/02.jpg" class="img-responsive" alt=""
                                 style="height: 239px; width: 358px;">

                        </a>
                    </div>
                    <div class="title-over">
                        <h3 class="title-h"><strong>Hà Giang</strong></h3>

                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->
            <div class="col-md-4 col-sm-6 wow zoomIn animated" data-wow-delay="0.1s"
                 style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="/filterHouse?province=22">
                            <img src="https://onho.vn/themes/frontend/assets/img/22.jpg" class="img-responsive" alt=""
                                 style="height: 239px; width: 358px;">

                        </a>
                    </div>
                    <div class="title-over">
                        <h3 class="title-h"><strong>Quảng Ninh</strong></h3>

                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->
            <div class="col-md-4 col-sm-6 wow zoomIn animated" data-wow-delay="0.1s"
                 style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="/filterHouse?province=31">
                            <img src="https://onho.vn/themes/frontend/assets/img/31.jpg" class="img-responsive" alt=""
                                 style="height: 239px; width: 358px;">

                        </a>
                    </div>
                    <div class="title-over">
                        <h3 class="title-h"><strong>Hải Phòng</strong></h3>

                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->
            <div class="col-md-4 col-sm-6 wow zoomIn animated" data-wow-delay="0.1s"
                 style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="/filterHouse?province=46">
                            <img src="https://onho.vn/themes/frontend/assets/img/46.jpg" class="img-responsive" alt=""
                                 style="height: 239px; width: 358px;">

                        </a>
                    </div>
                    <div class="title-over">
                        <h3 class="title-h"><strong>Thừa Thiên Huế</strong></h3>

                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->
            <div class="col-md-4 col-sm-6 wow zoomIn animated" data-wow-delay="0.1s"
                 style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="/filterHouse?province=48">
                            <img src="https://onho.vn/themes/frontend/assets/img/48.jpg" class="img-responsive" alt=""
                                 style="height: 239px; width: 358px;">

                        </a>
                    </div>
                    <div class="title-over">
                        <h3 class="title-h"><strong>Đà Nẵng</strong></h3>

                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->
            <div class="col-md-4 col-sm-6 wow zoomIn animated" data-wow-delay="0.1s"
                 style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="/filterHouse?province=56">
                            <img src="https://onho.vn/themes/frontend/assets/img/56.jpg" class="img-responsive" alt=""
                                 style="height: 239px; width: 358px;">

                        </a>
                    </div>
                    <div class="title-over">
                        <h3 class="title-h"><strong>Khánh Hòa</strong></h3>

                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->
            <div class="col-md-4 col-sm-6 wow zoomIn animated" data-wow-delay="0.1s"
                 style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="/filterHouse?province=79">
                            <img src="https://onho.vn/themes/frontend/assets/img/79.jpg" class="img-responsive" alt=""
                                 style="height: 239px; width: 358px;">

                        </a>
                    </div>
                    <div class="title-over">
                        <h3 class="title-h"><strong>Hồ Chí Minh</strong></h3>

                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->
            <div class="col-md-4 col-sm-6 wow zoomIn animated" data-wow-delay="0.1s"
                 style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="/filterHouse?province=92">
                            <img src="https://onho.vn/themes/frontend/assets/img/92.jpg" class="img-responsive" alt=""
                                 style="height: 239px; width: 358px;">

                        </a>
                    </div>
                    <div class="title-over">
                        <h3 class="title-h"><strong>Cần Thơ</strong></h3>

                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->
        </div>

    </div>
    <div class="container margin_60">

        <div class="main_title">
            <h2>Đối tác liên kết</h2>

        </div>

        <div class="row slick-items">

            <div class="col-md-4 wow zoomIn animated" data-wow-delay="0.2s"
                 style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                <div class="feature_home">
                    <i class="icon_set_1_icon-41"></i>
                    <h3><span>+100</span> Địa điểm tuyệt vời</h3>
                    <p>
                        Chúng tôi có rất nhiều điểm đến tuyệt vời cho bạn
                    </p>
                    <!--                <a href="#" class="btn_1 outline">Read more</a>-->
                </div>
            </div>
            <div class="col-md-4 wow zoomIn animated" data-wow-delay="0.2s"
                 style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                <div class="feature_home">
                    <i class="icon_set_1_icon-41"></i>
                    <h3><span>+100</span> Địa điểm tuyệt vời</h3>
                    <p>
                        Chúng tôi có rất nhiều điểm đến tuyệt vời cho bạn
                    </p>
                    <!--                <a href="#" class="btn_1 outline">Read more</a>-->
                </div>
            </div>


            <div class="col-md-4 wow zoomIn animated" data-wow-delay="0.4s"
                 style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                <div class="feature_home">
                    <i class="icon_set_1_icon-30"></i>
                    <h3><span>+1000</span> Người sử dụng</h3>
                    <p>
                        Mọi người khắp nơi đang cùng nhau chia sẻ thông tin với Onho, bạn thì sao ?
                    </p>
                    <!--                <a href="#" class="btn_1 outline">Read more</a>-->
                </div>
            </div>

            <div class="col-md-4 wow zoomIn animated" data-wow-delay="0.6s"
                 style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                <div class="feature_home">
                    <i class="icon_set_1_icon-57"></i>
                    <h3><span>H24 </span> Hỗ trợ</h3>
                    <p>
                        Chúng tôi luôn nố lực và cố gắng đem lại sự hỗ trợ tốt nhất cho bạn
                    </p>
                    <!--                <a href="#" class="btn_1 outline">Read more</a>-->
                </div>
            </div>

        </div><!--End row -->
    </div>

    <hr>


</main>
<!-- End main -->
    @endsection