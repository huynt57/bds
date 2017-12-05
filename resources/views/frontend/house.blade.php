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
                        {{--<span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i--}}
                        {{--class="icon-star voted"></i><i class="icon-star voted"></i><i--}}
                        {{--class=" icon-star-empty"></i></span>--}}
                        <h1>{{ $house->name }}</h1>
                        <span>{{ $house->type_text }}</span><br>
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
                                {!! $house->desc !!}
                            </p>

                        </div>
                        <!-- End col-md-9  -->
                    </div>
                    <!-- End row  -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Thông tin</h3>
                        </div>
                        <div class="col-md-9">
                            <div class="row">

                                <div class="col-md-6 col-sm-6">
                                    <ul class="list_ok">
                                        <li>Năm xây dựng: {{ $house->begin_year }}</li>
                                        <li>Diện tích xây dựng: {{ $house->size }}</li>
                                        <li>Số phòng ngủ: {{ $house->beds }}</li>
                                        <li>Số phòng tắm: {{ $house->bath }}</li>

                                    </ul>
                                </div>

                            </div>
                            <!-- End row  -->

                            <!-- End row  -->
                        </div>
                        <!-- End col-md-9  -->
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Tiện ích BĐS</h3>
                        </div>
                        <div class="col-md-9">
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

                            <!-- End row  -->
                        </div>
                        <!-- End col-md-9  -->
                    </div>

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
            <div class="row">
                <h2>Thông tin hỗ trợ cho vay</h2>
                <div class="col-md-6">
                    <form>
                    <div class="form-group mamount">
                        <label for="loanamount" class="col-md-12 control-label">Tổng giá trị vay</label>
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="number" value="{{ $house->price }}" name="loanamount" id="loanamount" class="form-control">
                                <span class="input-group-addon">VND</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mamount">
                        <label for="loanamount" class="col-md-12 control-label">Thanh toán trước</label>
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="number" value="20" name="downpayment" id="downpayment" class="form-control">
                                <span class="input-group-addon">%</span>
                            </div>
                        </div>
                    </div>
                        <div class="form-group mamount">
                            <label for="loanamount" class="col-md-12 control-label">Chọn ngân hàng</label>
                            @php $banks = cache()->get('banks'); @endphp
                            <div class="col-md-12">
                                <select class="form-control" id="bank">

                                    <option value="0"> Vui lòng chọn </option>
                                    @foreach($banks as $bank)
                                        <option value="{{ $bank->rate }}"> {{ $bank->bank }} </option>
                                        @endforeach

                                </select>
                            </div>
                        </div>

                    <div class="form-group mamount">
                        <label for="loanamount" class="col-md-12 control-label">Lãi suất</label>
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="number" value="5" name="loanintrest" id="loanintrest" class="form-control">
                                <span class="input-group-addon">%</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mamount">
                        <label for="loanamount" class="col-md-12 control-label">Khoảng thời gian thanh toán</label>
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="number" value="5" name="period" id="period" class="form-control">
                                <span class="input-group-addon">Năm</span>
                            </div>
                        </div>
                    </div>

                    </form>

                </div>
                <div class="col-md-6">
                    <h3>Thống kê</h3>
                    <h4> Tổng giá trị vay :<strong> <span style="float:right" id="loanamount_total"> 0 </span> </strong> </h4>
                    <h4> Thanh toán trước :<strong> <span style="float:right" id="downpament_a"> 0 </span> </strong> </h4>
                    <h4> Tổng tiền lãi :<strong> <span style="float:right" id="total_interest"> 0 </span> </strong> </h4>
                    <h4> Mỗi tháng, bạn thanh toán  : <strong > <span style="float:right" id="permonth"> 0 </span> </strong> </h4>
                    <h4> Tổng bạn phải thanh toán :<strong> <span style="float:right" id="total_amount"> 0 </span> </strong> </h4>


                </div>


<div class="col-md-12" style="margin-top: 20px">
    <div id="hightcart_container" style=""></div>
</div>
                <br><br>
                <div class="col-md-12">
                    <table style="width:100%" id="printTable">
                        <thead style="background:#DEEEFE;width:100%;">
                        <tr style="width:100%">
                            <td style=" width:25%; padding:6px">  # </td>
                            <td style=" width:20%" > Thanh toán trên tháng </td>
                            <td style=" width:20%" > Tiền gốc </td>
                            <td style=" width:20%" > Tiền lãi </td>
                            <td style=" width:20%"> Còn lại </td>
                        </tr>
                        </thead>
                        <tbody id="tbody">

                        </tbody>
                        <thead style="background:#DEEEFE;width:100%;">
                        <tr style="width:100%">
                            <td style=" width:25%; padding:6px">  # </td>
                            <td style=" width:20%" > Thanh toán trên tháng </td>
                            <td style=" width:20%" > Tiền gốc </td>
                            <td style=" width:20%" > Tiền lãi </td>
                            <td style=" width:20%"> Còn lại </td>
                        </tr>
                        </thead>
                    </table>
                </div>



            </div>
        </div>
        <!--End container -->

        <div id="overlay"></div>
        <!-- Mask on input focus -->

    </main>
@endsection

@push('scripts')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script>

    function change() {
        var loanamount_total = $("#loanamount").val();
        var loanintrest = $("#loanintrest").val();
        var period = $("#period").val();
        var per_year = $("#per_year").val();
        var downpayment_percent = $("#downpayment").val();
        var downpayment = (Number(downpayment_percent) * Number(loanamount_total)) / 100;

        var loanamount = Number(loanamount_total) - Number(downpayment);
        var intrest = (loanintrest / 100) / 12;



        var permonth = calculate(loanamount , Number(period) * 12 );
        var total_amount = permonth * Number(period) * 12;

        var total_intrest =  total_amount - loanamount;
        $("#permonth").text("VND" + permonth);
        $("#downpament_a").text("VND" + downpayment.toFixed(2));
        $("#loanamount_total").text("VND" + Number(loanamount_total).toFixed(2));
        $("#total_interest").text("VND" + total_intrest.toFixed(2));
        $("#total_amount").text("VND" + total_amount.toFixed(2));

        var total_intrest_percent = (Number(total_intrest) * 100) / Number(total_amount);
        var total_amount_precent = (Number(loanamount) * 100) / Number(total_amount);

        var left_amount = Number(total_amount);
        var loanamount_left = Number(loanamount);
        $( "#tbody" ).html("");
        for(var i=1; i <= Number(period) * 12; i++) {
            var intrest_l = intrest * loanamount_left;
            left_amount = left_amount - permonth;
            var principle = permonth - intrest_l;
            loanamount_left = loanamount_left - principle;
            $( "#tbody" ).append( "<tr style='background-color: #FBFCFF;border-top: dotted #DEEEFE 1px;'><td style='padding:5px'> "+ i +" </td><td> VND"+ permonth  +" </td> <td>VND" + principle.toFixed(2) +" </td><td>VND" + intrest_l.toFixed(2)  + "</td>  <td> VND"+ left_amount.toFixed(2) +" </td></tr>" );
        }


        $('#hightcart_container').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Biểu đồ tính toán khoản vay'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend : true
                }
            },
            series: [{
                name: 'Tỉ lệ',
                colorByPoint: true,
                data: [{
                    name: 'Lãi suất',
                    y: total_intrest_percent
                }, {
                    name: 'Tiền gốc',
                    y: total_amount_precent,
                    sliced: true,
                    selected: true
                }]
            }]
        });

    }






    $("body").on("keyup", "#downpayment , #loanintrest , #loanamount , #period, #per_year", function () {
        change();
    });

    $("body").on("change", "#bank", function () {
        $('#loanintrest').val($(this).val());
        change();
    });

    $(function () {
        change();
    });


    function calculate(amount , term)
    {
        // Standard Mortgage Formula:
        // M = P[i(1+i)n] / [(1+i)n - 1]
        // x = (1+i)n

        var P = amount;
        var i = ($('#loanintrest').val().replace(/[^0-9\.]/g, '') / 100) / 12;
        var n = term;
        var x = Math.pow((1 + i ), n);
        var M = ( P * ((i * x) / (x - 1)) ).toFixed(2);
        return M;
    }


</script>

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

        if ($('.sp-thumbnails').children().length > 0) {
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
        }
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
            var data = $('#form-agent').serialize();
            $.ajax({
                url: '{{ url('connect-house-agent') }}',
                type: 'post',
                data: data,
                dataType: 'json',
                success: function (response) {
                    if (response.status == 1) {
                        toastr.success('Thành công');
                        $('#form-agent')[0].reset();
                    } else {
                        toastr.error(response.message);
                    }
                }
            });
        });
    });


</script>
@endpush