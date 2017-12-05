@extends('frontend')
@section('styles')
    <link href="/frontend/css/shop.css" rel="stylesheet">
@endsection
@section('content')
    @php $slide = \App\Models\Slide::all(); @endphp
    <div class="ht-ht-after-lg-header" style=" background: #fff">
        <div class="home-search-wrapper">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active ht-bgcover" id="demoSearchTab01"
                     style="background-image: url('{{ $slide[0]->path }}')">
                    <div class="container">
                        <div class="text-center">
                            <h1 class="tab-heading-title">{{ $slide[0]->name }}

                            </h1>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane ht-bgcover fade" id="demoSearchTab02"
                     style="background-image: url('{{ $slide[1]->path }}')">
                    <div class="container">
                        <div class="text-center">
                            <h1 class="tab-heading-title">{{ $slide[1]->name }}</h1>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane ht-bgcover fade" id="demoSearchTab03"
                     style="background-image: url('{{ $slide[2]->path }}')">
                    <div class="container">
                        <div class="text-center">
                            <h1 class="tab-heading-title">{{ $slide[2]->name }}</h1>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane ht-bgcover fade" id="demoSearchTab04"
                     style="background-image: url('{{ $slide[3]->path }}')">
                    <div class="container">
                        <div class="text-center">
                            <h1 class="tab-heading-title">{{ $slide[3]->name }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8">
                            <ul class="home-search-nav-tabs ht-nav-justified" role="tablist">
                                <li class="active"><a id="searchTab01" href="#demoSearchTab01" role="tab"
                                                      data-toggle="tab">Mua </a>
                                </li>
                                <li><a id="searchTab02" href="#demoSearchTab02" role="tab" data-toggle="tab">Bán</a>
                                </li>
                                <li><a href="#demoSearchTab03" role="tab" data-toggle="tab">Cho thuê</a></li>
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

                @foreach($partners as $partner)
                    <div class="shop-item col-lg-4 col-md-4 col-sm-6">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="#"><img src="/files/{{ $partner->image }}" alt="">
                                    </a>
                                </figure>
                            </div>
                            <div class="product_description">
                                <h3><a href="#">{{ $partner->name }}</a></h3>
                                <h4><a href="#">{{ $partner->phone }}</a></h4>
                            </div>
                        </div>
                    </div>
                    <!--End Shop Item-->
                @endforeach

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