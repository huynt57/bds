@extends('admin')

@section('styles')

    <link href="/assets/css/fileinput.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/pages/css/search.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css"/>
    <link href="/css/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
    <link href="/esg/slick/slick.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="/esg/slick/slick-theme.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        #myMap {
            height: 350px;
            width: auto;
        }
    </style>
    <style>
        .form-horizontal .form-group {
            margin-left: 0px;
            margin-right: 0px;
        }

        .col-lg-6 {
            padding-left: 0px;
        }

        .bien-the .portlet.light {
            padding-left: 0px;
            padding-right: 0px;
        }

        .xoa-bien-the {
            text-align: center;
            vertical-align: middle !important;
            cursor: pointer;
        }

        .xoa-bien-the i {
            font-size: 21px;
            color: red;
        }

        .img-input .div-img {
            width: 100%;
            margin-bottom: 5px;
            margin-top: 10px;
            height: 140px;
            background-size: cover !important;
        }

        .img-input .col-lg-3 {
            padding-left: 0px;
        }

        .img-input input[type="file"] {
            display: none;
        }

        .custom-file-upload {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
        }

        .img-input span {
            position: absolute;
            right: 22px;
            top: 18px;
        }

        .img-input span i {
            font-size: 23px;
            color: #fff;
            text-shadow: 1px 0px 0px #5d5d5d, -1px 0px 0px #5d5d5d, 0px 1px 0px #5d5d5d, 0px -1px 0px #5d5d5d, 1px 1px #5d5d5d, -1px -1px 0px #5d5d5d, 1px -1px 0px #5d5d5d, -1px 1px 0px #5d5d5d;
        }

        .bootstrap-tagsinput .tag [data-role="remove"]::after {
            content: "*" !important;
        }

        .bootstrap-tagsinput .tag {
            font-size: 13px;
        }

        .span-pro {
            position: absolute;
            right: 110px;
            z-index: 999;
            top: 10px;
        }

        .pop-up .span-pro {
            display: none;
        }

        .span-pro i {
            font-size: 23px;
            color: #fff;
            text-shadow: 1px 0px 0px #000, -1px 0px 0px #000, 0px 1px 0px #000, 0px -1px 0px #000, 1px 1px #000, -1px -1px 0px #000, 1px -1px 0px #000, -1px 1px 0px #000;
        }

        .slide-bsp .tile-thumbnail {
            position: relative;
            width: 295px;
        }

        .slide-bsp .product-select-name {
            display: block;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 200px;
        }
    </style>
@endsection

@section('content')
    @if (session()->has('error'))
        <div class="alert alert-danger">{{ session()->get('error') }}</div>
    @endif
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h3>Cập nhật thông tin nhà</h3>

    <form action="{{url('admin/house/update', ['id'=>$house->id])}}" id="create-form" class="form-horizontal"
          method="post"
          enctype="multipart/form-data">

        {{ csrf_field() }}
        <div class="portlet light bordered col-lg-12">
            <div class="portlet-title">
                <div class="caption font-red-sunglo">
                    <i class="fa fa-home font-red-sunglo"></i>
                    <span class="caption-subject bold uppercase">Thông tin nhà</span>
                </div>
            </div>
            <div class="col-lg-6">

                <div class="form-body">
                    <div class="form-group">
                        <label>Tên nhà *</label>
                        <div>
                            <input type="text" name="name" class="form-control" placeholder="Điền tên nhà"
                                   value="{{ $house->name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <div>
                            <input type="text" name="address" class="form-control"
                                   placeholder="Địa chỉ" id="address" value="{{ $house->address }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <div>
                            <input type="text" name="price" id="price" class="form-control"
                                   placeholder="Điền giá thị trường" value="{{ $house->price }}">
                        </div>
                    </div>
                    <div class="form-group dmc0">
                        <label>Loại nhà</label>
                        <div>
                            <select class="form-control" name="type">
                                <option value="">Chọn loại nhà</option>
                                <option @if($house->type == \App\Models\House::RENT) selected
                                        @endif value="{{ \App\Models\House::RENT }}">Cho thuê
                                </option>
                                <option @if($house->type == \App\Models\House::FOR_RENT) selected
                                        @endif  value="{{ \App\Models\House::FOR_RENT }}">Cần thuê
                                </option>
                                <option @if($house->type == \App\Models\House::SALE) selected
                                        @endif  value="{{ \App\Models\House::SALE }}">Bán
                                </option>
                                <option @if($house->type == \App\Models\House::FOR_SALE) selected
                                        @endif  value="{{ \App\Models\House::FOR_SALE }}">Cần bán
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group dmc0">
                        <label>Số phòng ngủ</label>
                        <div>
                            <input type="number" name="beds" id="beds" class="form-control"
                                   placeholder="Điền số phòng ngủ" value="{{ $house->beds }}">
                        </div>
                    </div>
                    <div class="form-group dmc0">
                        <label>Số phòng tắm</label>
                        <div>
                            <input type="number" name="bathrooms" id="bathrooms" class="form-control"
                                   placeholder="Điền số phòng tắm" value="{{ $house->bath }}">
                        </div>
                    </div>
                    <div class="form-group dmc0">
                        <label>Kích thước (m2)</label>
                        <div>
                            <input type="number" name="size" id="size" class="form-control"
                                   placeholder="Điền kích thước" value="{{ $house->size }}">
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-6" style="padding-right: 0px;">
                <div class="form-group dmc0">
                    <label>Xây dựng năm</label>
                    <div>
                        <input type="number" name="begin_year" id="begin_year" class="form-control"
                               placeholder="Điền năm xây dựng" value="{{ $house->begin_year }}">
                    </div>
                </div>
                <div class="form-group dmc0">
                    <label>Chọn môi giới viên</label>
                    <div>
                        <select class="form-control select2" name="agent_id">
                            <option value="">Chọn môi giới viên</option>
                            @php $agents = \App\Models\User::agent()->get();@endphp

                            @foreach($agents as $agent)
                                <option @if($house->agent_id == $agent->id) selected
                                        @endif value="{{ $agent->id }}">{{ $agent->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group dmc0">
                    <label>Danh mục *</label>
                    <div>
                        <select class="form-control select2" name="category_id">
                            <option value="0">Chọn danh mục</option>
                            @php $categories = \App\Models\Category::all();@endphp

                            @foreach($categories as $category)
                                <option @if($house->category_id == $category->id) selected
                                        @endif value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group dmc0">
                    <label>Tỉnh / thành phố *</label>
                    <div>
                        <select class="form-control select2" name="city_id" id="province" data-index="0">
                            <option value="0">Chọn thành phố</option>
                            @php $cities = \App\Components\Functions::getProvinces();@endphp

                            @foreach($cities as $city)
                                <option @if($house->city_id == $city->provinceid) selected
                                        @endif value="{{ $city->provinceid }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group dmc0">
                    <label>Quận / huyện *</label>
                    <div>
                        <select class="form-control select2" name="district_id" id="district">
                            <option value="0">Chọn quận huyện</option>

                            @if($district = DB::table('district')->where('districtid', $house->district_id)->first())
                            <option selected value="{{ $house->district_id }}">{{ $district->name }}</option>
                                @endif

                        </select>
                    </div>
                </div>
                <div class="form-group dmc0">
                    <label>Phường / xã *</label>
                    <div>
                        <select class="form-control select2" name="ward_id" id="ward">
                            <option value="">Chọn phường xã</option>
                            @if($ward = DB::table('district')->where('districtid', $house->district_id)->first())
                                <option selected
                                        value="{{ $house->district_id }}">{{  $ward->name }}</option>
                            @endif
                        </select>
                    </div>
                </div>

            </div>
        </div>

        <div class="portlet light bordered col-lg-12">
            <div class="portlet-title">
                <div class="caption font-red-sunglo">
                    <i class="fa fa-info font-red-sunglo"></i>
                    <span class="caption-subject bold uppercase">Trạng thái</span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Có được hiển thị ?</label>
                <div class="col-md-9">
                    <div class="mt-checkbox-inline">
                        <label class="mt-checkbox mt-checkbox-outline">
                            <input type="checkbox" name="status" @if($house->status) checked @endif>
                            <span></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Có được nổi bật ?</label>
                <div class="col-md-9">
                    <div class="mt-checkbox-inline">
                        <label class="mt-checkbox mt-checkbox-outline">
                            <input type="checkbox" name="is_feature" @if($house->is_feature) checked @endif >
                            <span></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="portlet light bordered col-lg-12">
            <div class="portlet-title">
                <div class="caption font-red-sunglo">
                    <i class="icon-settings font-red-sunglo"></i>
                    <span class="caption-subject bold uppercase">Các tiện ích khác</span>
                </div>
            </div>
            <div class="mt-checkbox-inline">
                @php $features = collect(config('constants.features'))->chunk(3); @endphp
                @foreach($features as $feature)
                    <div class="col-md-3">
                        @foreach($feature as $item)
                            <label class="mt-checkbox">
                                <input type="checkbox" name="features[]" value="{{ $item }}"> {{ $item }}
                                <span></span>
                            </label>
                        @endforeach
                    </div>

                @endforeach
            </div>
        </div>

        <div class="form-group col-lg-12">
            <label>Ảnh đại diện *</label>
            <div>
                <input type="file" class="product-image form-control main-preview" name="main_image">
            </div>
        </div>
        <div class="form-group col-lg-12">
            <label>Ảnh phụ (có thể đính kèm nhiều ảnh)</label>
            <div>
                <input type="file" class="product-image form-control other-image" multiple name="images[]"
                       rel="post_status_images">
            </div>
        </div>
        {{--<div class="col-lg-12 form-group">--}}
        {{--<label>Miêu tả nổi bật</label>--}}
        {{--<div>--}}
        {{--<textarea class="form-control ckeditor" placeholder="Điền miêu tả"--}}
        {{--name="short_description">{{ old('short_description') }}</textarea>--}}
        {{--</div>--}}
        {{--</div>--}}

        <div class="form-group col-lg-12">
            <label>Latitude</label>
            <div>
                <input type="text" name="lat" id="latitude" class="form-control"
                       placeholder="Điền Latitude" value="{{ old('lat') }}">
            </div>
        </div>
        <div class="form-group col-lg-12">
            <label>Longitude</label>
            <div>
                <input type="text" name="lng" id="longitude" class="form-control"
                       placeholder="Điền Longitude" value="{{ old('lng') }}">
            </div>
        </div>
        <div class="col-lg-12 form-group">
            <label>Bản đồ (Kéo thả biểu tượng để chọn vị trí)</label>
            <div id="myMap">

            </div>
        </div>
        <div class="col-lg-12 form-group">
            <label>Miêu tả chi tiết</label>
            <div>
                                <textarea class="form-control ckeditor" placeholder="Điền miêu tả" rows="10"
                                          name="desc">{!! $house->desc !!}</textarea>
            </div>
        </div>

        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn green">Cập nhật</button>
                    <button type="button" class="btn default">Hủy</button>
                </div>
            </div>
        </div>


        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <input style="width: 300px; margin-top: 10px" id="pac-input" class="controls_map form-control"
                       type="text" placeholder="Tìm địa chỉ">
                <div id="myMap"></div>
            </div>
        </div>
    </form>

@endsection

@push('scripts')

<script type="text/javascript" src="/js/jquery-ui.js"></script>
<script type="text/javascript" src="/js/bootstrap-tagsinput.js"></script>
<script src="/assets/js/fileinput.min.js"></script>
<script src="../assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/esg/slick/slick.min.js"></script>
<script src="//maps.googleapis.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyBRy4cuNgPMeS5sDUj8rZ8Ql4_BkMMf4TM"></script>
<script>
    $(document).on('change', '#province', function (e) {
        $.ajax({
            url: '{{ url('get-sub-location') }}',
            type: 'get',
            data: {
                'id': $(this).val(),
                'type': 'province'
            },
            dataType: 'html',
            success: function (response) {
                $('#district').html(response);
                $('.select2').select2();
            }
        });
    });

    $(document).on('change', '#district', function (e) {
        $.ajax({
            url: '{{ url('get-sub-location') }}',
            type: 'get',
            data: {
                'id': $(this).val(),
                'type': 'district'
            },
            dataType: 'html',
            success: function (response) {
                $('#ward').html(response);
                $('.select2').select2();
            }
        });
    });
</script>
<script>
    var map;
    var marker;
    var myLatlng = new google.maps.LatLng({{ $house->lat }}, {{ $house->lng }});
    var geocoder = new google.maps.Geocoder();
    var infowindow = new google.maps.InfoWindow();
    function initialize() {
        var mapOptions = {
            zoom: 12,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        map = new google.maps.Map(document.getElementById("myMap"), mapOptions);

        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        // Bias the SearchBox results towards current map's viewport.
        google.maps.event.addListener(searchBox, 'places_changed', function () {
            searchBox.set('map', null);


            var places = searchBox.getPlaces();

            var bounds = new google.maps.LatLngBounds();
            var i, place;
            for (i = 0; place = places[i]; i++) {
                (function (place) {

                    marker.setPosition(place.geometry.location);
                    google.maps.event.addListener(marker, 'map_changed', function () {
                        if (!this.getMap()) {
                            this.unbindAll();
                        }
                    });
                    bounds.extend(place.geometry.location);


                }(place));

            }
            map.fitBounds(bounds);
            searchBox.set('map', map);
            map.setZoom(Math.min(map.getZoom(), 12));

        });


        marker = new google.maps.Marker({
            map: map,
            position: myLatlng,
            draggable: true
        });

        geocoder.geocode({'latLng': myLatlng}, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (results[0]) {
                    $('#latitude,#longitude').show();

                    // $('#zip').val(results[0].address_components[7].long_name);

                    //$('#city').val(results[0].address_components[3].long_name);
                    //$('#state').val(results[0].address_components[5].long_name);
                    $('#address').val(results[0].formatted_address);
                    $('#latitude').val(marker.getPosition().lat());
                    $('#longitude').val(marker.getPosition().lng());
                    infowindow.setContent(results[0].formatted_address);
                    infowindow.open(map, marker);
                }
            }
        });

        google.maps.event.addListener(marker, 'dragend', function () {

            geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        console.log(results[0].address_components);
                        //if (results[0].address_components[7].long_name != "") {
                        //  $('#zip').val(results[0].address_components[7].long_name);
                        //}
                        //$('#city').val(results[0].address_components[3].long_name);
                        //$('#state').val(results[0].address_components[5].long_name);
                        $('#address').val(results[0].formatted_address);
                        $('#latitude').val(marker.getPosition().lat());
                        $('#longitude').val(marker.getPosition().lng());
                        infowindow.setContent(results[0].formatted_address);
                        infowindow.open(map, marker);
                    }
                }
            });
        });

    }
    google.maps.event.addDomListener(window, 'load', initialize);


    $(document).on('ready', function () {


        $(".main-preview").fileinput({
            'initialPreview': [
                "'<img src='{{ $house->main_images }}' class='kv-preview-data file-preview-image' style='width:auto;height:160px;'>",
            ],
            showCaption: false, language: "vi",
            allowedFileExtensions: ["jpg", "png", "gif"],
            allowedFileTypes: ['image'],
            maxFileCount: 5
        });

        $(".other-image").fileinput({
            'initialPreview': [
                @php  $images = \App\Models\Image::where('house_id', $house->id)->get();@endphp
                        @foreach ($images as $image)
                    '<img src=" {{$image->path }} " class="kv-preview-data file-preview-image" style="width:auto;height:160px;">',
                @endforeach
            ],
            showCaption: false, language: "vi",
            allowedFileExtensions: ["jpg", "png", "gif"],
            allowedFileTypes: ['image'],
            maxFileCount: 5
        });

        $('#add_row').click(function (e) {
            $('.thong-so-table tbody').append(
                '<tr>' +
                '<td class="col-md-5">' +
                '    <div class="form-group" style="margin: 0px;">' +
                '        <input class="form-control unicase-form-control text-input" name="ts_key[]">' +
                '    </div>' +
                '</td>' +
                '<td class="col-md-5">' +
                '    <div class="form-group" style="margin: 0px;">' +
                '        <input class="form-control unicase-form-control text-input" name="ts_value[]">' +
                '    </div>' +
                '</td>' +
                '<td class="col-md-2" style="text-align: center">' +
                '<button type="button" class="btn red xoa-ts-btn" style="margin-right: 0px">Xóa</button>' +
                '</td>' +
                '<input type="hidden" name="ts_id[]">' +
                '</tr>'
            );
        })
    });

    $("#sp-lien-quan-modal").on("show.bs.modal", function (e) {
        $.ajax({
            url: '{{ url('admin/product-store') }}',
            type: 'get',
            dataType: 'html',
            success: function (response) {
                $('#pro-list-div').html("");
                $('#pro-list-div').html(response);

                var bsp = $('#products_bsp').val();
                bsp = bsp.split(',');

                $("#sp-lien-quan-modal .product-select").each(function (index) {
                    var p_id = $(this).attr('data-product-id');

                    if (jQuery.inArray(p_id, bsp) !== -1) {
                        var parent = $(this).parent().parent();
                        parent.css({
                            'border': '2px solid',
                            'border-color': 'green'
                        }).addClass('selected');
                    }
                });
            }
        });
    });

    $('#input-domain-btn').on('click', function () {
        var domain = $('#input-domain').val();
        $.ajax({
            url: '{{ url('admin/product-system') }}',
            type: 'get',
            data: {
                domain: domain
            },
            dataType: 'html',
            success: function (response) {
                $('#product-list').append(response);
            }
        });
    });

    var products = [];

    function getSliderSettings() {
        return {
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            variableWidth: true,
        }
    }

    $(document).on('click', '.pop-up .product-select', function () {

        var product_id = $(this).attr('data-product-id');

        var parent = $(this).parent().parent();

        if (!parent.hasClass('selected')) {
            $('.slide-bsp').append(
                '<div id="slide-' + product_id + '">' + parent.html() + '</div>'
            );

            $('.slide-bsp').slick('destroy');
            $('.slide-bsp').slick(getSliderSettings());

            parent.css({
                'border': '2px solid',
                'border-color': 'green'
            }).addClass('selected');

            products.push(product_id);
        } else {
            $('.slide-bsp').slick('destroy');

            $('#slide-' + product_id).remove();

            $('.slide-bsp').slick(getSliderSettings());

            parent.css({
                'border': '0px',
                'border-color': 'green'
            }).removeClass('selected');

            products = jQuery.grep(products, function (value) {
                return value != product_id;
            });
        }

        console.log(products);

        $('#products_bsp').val(products);
    });

    $(document).on('click', '.pop-up .product-select-name', function () {

        var product_id = $(this).attr('data-product-id');

        var parent = $(this).parent().parent().parent();

        if (!parent.hasClass('selected')) {
            $('.slide-bsp').append(
                '<div id="slide-' + product_id + '">' + parent.html() + '</div>'
            );

            $('.slide-bsp').slick('destroy');
            $('.slide-bsp').slick(getSliderSettings());

            parent.css({
                'border': '2px solid',
                'border-color': 'green'
            }).addClass('selected');
            products.push(product_id);
        } else {
            $('.slide-bsp').slick('destroy');

            $('#slide-' + product_id).remove();

            $('.slide-bsp').slick(getSliderSettings());

            parent.css({
                'border': '0px',
                'border-color': 'green'
            }).removeClass('selected');

            products = jQuery.grep(products, function (value) {
                return value != product_id;
            });
        }

        $('#products_bsp').val(products);
    });

    $(document).on('click', '.product-system-pagination', function () {
        var href = $(this).attr('data-href');

        $.ajax({
            type: 'get',
            url: href,
            dataType: 'html',
            success: function (response) {
                $('#pro-list-div').html(response);
            }
        });
    });

    $(document).on('click', '.span-pro', function (e) {
        var product_id = $(this).attr('data-product-id');
        $('.slide-bsp').slick('destroy');

        $('#slide-' + product_id).remove();

        $('.slide-bsp').slick(getSliderSettings());

        products = jQuery.grep(products, function (value) {
            return value != product_id;
        });

        $('#products_bsp').val(products);
    });

</script>
@endpush