@extends('frontend')

@section('content')
    <div class="ht-ht-after-lg-header" style=" background: #fff">
        <div class="home-search-wrapper">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active ht-bgcover" id="demoSearchTab01"
                     style="background-image: url('stock/stock-01.jpg')">
                    <div class="container">
                        <div class="text-center">
                            <h1 class="tab-heading-title">Đường về mái ấm

                            </h1>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane ht-bgcover fade" id="demoSearchTab02"
                     style="background-image: url('stock/stock-02.jpg')">
                    <div class="container">
                        <div class="text-center">
                            <h1 class="tab-heading-title">Ngôi nhà bạn sẽ thuê</h1>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane ht-bgcover fade" id="demoSearchTab03"
                     style="background-image: url('stock/stock-03.jpg')">
                    <div class="container">
                        <div class="text-center">
                            <h1 class="tab-heading-title">Hãy trở thành nhà đầu tư thông thái</h1>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane ht-bgcover fade" id="demoSearchTab04"
                     style="background-image: url('stock/stock-04.jpg')">
                    <div class="container">
                        <div class="text-center">
                            <h1 class="tab-heading-title">Hiện thực hóa giấc mơ</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8">
                            <ul class="home-search-nav-tabs ht-nav-justified" role="tablist">
                                <li class="active"><a id="searchTab01" href="#demoSearchTab01" role="tab" data-toggle="tab">Mua bán</a>
                                </li>
                                <li><a id="searchTab02" href="#demoSearchTab02" role="tab" data-toggle="tab">Cho thuê</a></li>
                                <li><a href="#demoSearchTab03" role="tab" data-toggle="tab">Giải pháp tài chính</a></li>
                                <li><a href="#demoSearchTab04" role="tab" data-toggle="tab">Tư vấn BĐS</a></li>
                            </ul>
                            <form action="{{ url('map') }}" class="home-search-form">
                                <div class="form-group">
                                    <label for="#" class="hidden">Tìm kiếm</label>
                                    <input type="text" class="ht-form-control" placeholder="Điền từ khóa cần tìm kiếm"
                                           name="keyword">
                                    <input type="hidden" value="" name="type" id="type_search">
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

            @include('frontend.item_frontend', [
            'items' => $features])
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

            @include('frontend.item_frontend', [
           'items' => $sells])
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

                @include('frontend.item_frontend', [
               'items' => $rents])

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

                @foreach($regions as $region)
                    <div class="col-md-4 col-sm-6 wow zoomIn animated" data-wow-delay="0.1s"
                         style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                        <div class="tour_container">
                            <div class="img_container">
                                <a href="{{ url('map?city_id='.$region->region_id) }}">
                                    <img src="{{ $region->image }}" class="img-responsive" alt=""
                                         style="height: 239px; width: 358px;">

                                </a>
                            </div>
                            <div class="title-over">
                                <h3 class="title-h"><strong>{{ $region->name }}</strong></h3>

                            </div>
                        </div><!-- End box tour -->
                    </div><!-- End col-md-4 -->
                @endforeach
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

@push('scripts')

<script>

    $(document).ready(function () {
        $('#type_search').val('{{ \App\Models\House::BOTH_SALE }}');

        $('#searchTab01').click(function () {

            $('#type_search').val('{{ \App\Models\House::BOTH_SALE }}')
        });

        $('#searchTab02').click(function () {
            $('#type_search').val('{{ \App\Models\House::BOTH_RENT }}')
        });
    });


</script>
@endpush