@extends('frontend')

@section('styles')
    <link href="/frontend/css/slider-pro.min.css" rel="stylesheet">
    <link href="/frontend/css/date_time_picker.css" rel="stylesheet">
    <link href="/frontend/css/owl.carousel.css" rel="stylesheet">
    <link href="/frontend/css/owl.theme.css" rel="stylesheet">
@endsection

@section('content')
    <section class="parallax-window" data-parallax="scroll" data-image-src="{{ $house->main_images }}"
             data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class=" icon-star-empty"></i></span>
                        <h1>{{ $house->name }}</h1>
                        <span>{{ $house->address }}</span>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div id="price_single_main" class="hotel">
                            <span>{{ $house->price_text }} <sup>VNĐ</sup></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End section -->

    <main>
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="{{ url('/') }}">Trang chủ</a>
                    </li>
                    <li>{{ $house->name }}</li>
                </ul>
            </div>
        </div>
        <!-- End Position -->

        <div class="collapse" id="collapseMap">
            <div id="map" class="map"></div>
        </div>
        <!-- End Map -->

        <div class="container margin_60">
            <div class="row">
                <div class="col-md-8" id="single_tour_desc">
                    {{--<div id="single_tour_feat">--}}
                    {{--<ul>--}}
                    {{--<li><i class="icon_set_2_icon-116"></i>Plasma TV</li>--}}
                    {{--<li><i class="icon_set_1_icon-86"></i>Free Wifi</li>--}}
                    {{--<li><i class="icon_set_2_icon-110"></i>Poll</li>--}}
                    {{--<li><i class="icon_set_1_icon-59"></i>Breakfast</li>--}}
                    {{--<li><i class="icon_set_1_icon-22"></i>Pet allowed</li>--}}
                    {{--<li><i class="icon_set_1_icon-13"></i>Accessibiliy</li>--}}
                    {{--<li><i class="icon_set_1_icon-27"></i>Parking</li>--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                    <p class="visible-sm visible-xs"><a class="btn_map" data-toggle="collapse" href="#collapseMap"
                                                        aria-expanded="false" aria-controls="collapseMap"
                                                        data-text-swap="Hide map" data-text-original="View on map">View
                            on map</a>
                    </p>
                    <!-- Map button for tablets/mobiles -->
                    <div id="Img_carousel" class="slider-pro">
                        <div class="sp-slides">

                            @foreach($house->images as $image)
                                <div class="sp-slide">
                                    <img alt="Image" class="sp-image" src="css/images/blank.gif"
                                         data-src="{{ $image->path }}" data-small="{{ $image->path }}"
                                         data-medium="{{ $image->path }}" data-large="{{ $image->path }}"
                                         data-retina="{{ $image->path }}">
                                </div>
                            @endforeach
                        </div>
                        <div class="sp-thumbnails">
                            @foreach($house->images as $image)
                                <img alt="Image" class="sp-thumbnail" src="{{ $image->path }}">
                            @endforeach
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-3">
                            <h3>Miêu tả</h3>
                        </div>
                        <div class="col-md-9">
                            <p>
                                {!! $house->description !!}
                            </p>
                            <h4>Tiện ích căn hộ</h4>

                            <div class="row">
                                @php $featuresJson = $house->features; $featuredecoded = json_decode($featuresJson); $features = collect($featuredecoded); @endphp

                                @php $items = $features->chunk(6); @endphp

                                @foreach($items as $item)
                                    <div class="col-md-6 col-sm-6">
                                        <ul class="list_ok">
                                            @foreach($item as $fe)
                                                <li>{{ $fe }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                            <!-- End row  -->
                        </div>
                        <!-- End col-md-9  -->
                    </div>
                    <!-- End row  -->

                    <hr>


                </div>
                <!--End  single_tour_desc-->

                <aside class="col-md-4">
                    <p class="hidden-sm hidden-xs">
                        <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false"
                           aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">Xem
                            trên bản đồ</a>
                    </p>
                    <form id="form-agent">
                        <div class="box_style_1 expose">
                            <h3 class="inner">Liên lạc với môi giới viên</h3>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label><i class="fa fa-user"></i> Tên của bạn</label>
                                        <input class="form-control" type="text" name="name">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label><i class="fa fa-phone"></i> SĐT</label>
                                        <input class="form-control" type="text" name="phone">
                                    </div>
                                </div>
                                @if($house instanceof \App\Models\House)
                                    <input type="hidden" name="house_id" value="{{ $house->id }}">
                                    @else
                                    <input type="hidden" name="project_id" value="{{ $house->id }}">
                                @endif

                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label><i class="fa fa-envelope"></i> Email</label>
                                        <input class="form-control" type="text" name="email">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label><i class="fa fa-newspaper-o"></i> Nội dung liên hệ</label>
                                        <textarea class="form-control" name="message"></textarea>
                                    </div>
                                </div>

                            </div>
                            <br>

                            <a class="btn_full" href="javascript:;" id="send_agent">Gửi ngay</a>
                            <a class="btn_full_outline" href="javascript:;" onclick="addWishlist('{{ $house->id }}')"><i
                                        class=" icon-heart"></i>Thêm vào yêu thích</a>
                        </div>
                    </form>
                    <!--/box_style_1 -->
                    @if($house->agent)

                        <div class="box_style_4">
                            <i class="icon_set_1_icon-90"></i>
                            <h4><span>Thông tin</span> Môi giới viên</h4>
                            <h4>{{ $house->agent->name }}</h4>
                            <a href="tel://{{ $house->agent->phone }}" class="phone">{{ $house->agent->phone }}</a>
                        </div>
                    @endif

                </aside>
            </div>
            <!--End row -->
        </div>
        <!--End container -->

        <div id="overlay"></div>
        <!-- Mask on input focus -->

    </main>
@endsection

@push('scripts')

<!-- Specific scripts -->
<script src="/frontend/js/icheck.js"></script>
<script>
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-grey',
        radioClass: 'iradio_square-grey'
    });
</script>
<!-- Date and time pickers -->
<script src="/frontend/js/jquery.sliderPro.min.js"></script>
<script type="text/javascript">
    $(document).ready(function ($) {
        $('#Img_carousel').sliderPro({
            width: 960,
            height: 500,
            fade: true,
            arrows: true,
            buttons: false,
            fullScreen: false,
            smallSize: 500,
            startSlide: 0,
            mediumSize: 1000,
            largeSize: 3000,
            thumbnailArrows: true,
            autoplay: false
        });
    });
</script>


<!-- Date and time pickers -->
<script src="/frontend/js/bootstrap-datepicker.js"></script>
<script>
    $('input.date-pick').datepicker('setDate', 'today');
</script>
<!-- Map -->
{{--<script src="http://maps.googleapis.com/maps/api/js"></script>--}}
{{--<script src="/frontend/js/map.js"></script>--}}
{{--<script src="/frontend/js/infobox.js"></script>--}}
<!-- Carousel -->
{{--<script src="/frontend/js/owl.carousel.min.js"></script>--}}
<script>
    $(document).ready(function () {
        $(".carousel").owlCarousel({
            items: 4,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3]
        });

        $('#send_agent').click(function () {
            alert('123');
            var data = $('#form-agent').serialize();
            $.ajax({
                url: '{{ url('connect-house-agent') }}',
                type: 'post',
                data: data,
                dataType: 'json',
                success: function (response) {
                    if (response.status == 1) {
                        toastr.success('Thành công');
                    } else {
                        toastr.error('Có lỗi xảy ra vui lòng thử lại sau');
                    }
                }
            });
        });
    });


</script>
@endpush