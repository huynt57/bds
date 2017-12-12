@extends('frontend')

@section('content')
    <div class="container-fluid" style="margin-top: 20px">
        <form id="form-search-house">
            <div class="row">
                <div class="col-md-2 col-md-offset-1">
                    <div class="form-group">
                        <label>Chọn loại nhà</label>
                        <select class="form-control" name="type" id="type">
                            <option value="">Loại nhà</option>
                            <option @if(request()->input('type') == \App\Models\House::RENT ) selected
                                    @endif value="{{ \App\Models\House::RENT }}">Cho thuê
                            </option>
                            <option @if(request()->input('type') == \App\Models\House::FOR_RENT ) selected
                                    @endif value="{{ \App\Models\House::FOR_RENT }}">Cần thuê
                            </option>
                            <option @if(request()->input('type') == \App\Models\House::SALE ) selected
                                    @endif value="{{ \App\Models\House::SALE }}">Bán
                            </option>
                            <option @if(request()->input('type') == \App\Models\House::FOR_SALE ) selected
                                    @endif value="{{ \App\Models\House::FOR_SALE }}">Cần bán
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Chọn khoảng giá</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="min_price" id="min_price"
                                           placeholder="Giá thấp nhất">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="max_price" id="max_price"
                                           placeholder="Giá lớn nhất">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Chọn diện tích (m2)</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="min_size" id="min_size"
                                           placeholder="Diện tích nhỏ nhất">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="max_size" id="max_size"
                                           placeholder="Diện tích lớn nhất">
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-md-3">
                    <a class="btn btn-warning" href="#add-criteria" data-toggle="modal" style="margin-top: 25px">Thêm
                        tiêu chí</a>
                    <button class="btn btn-success btn-search" style="margin-top: 25px; margin-left: 15px" id="btn-search">Tìm
                        kiếm
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="modal fade" id="add-criteria" tabindex="false" role="add-criteria" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Thêm điều kiện lọc</h4>
            </div>
            <div class="modal-body">


                <form class="form-horizontal" role="form" id="add_course_homepage_form">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Tỉnh / thành phố</label>
                            <div class="col-md-9">
                                <select class="form-control select2" name="province" id="province">

                                    <option>Vui lòng chọn</option>
                                    @php $provinces = \App\Components\Functions::getProvinces(); @endphp
                                    @foreach($provinces as $province)
                                        <option value="{{ $province->provinceid }}">{{ $province->name }}</option>
                                    @endforeach


                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Quận / huyện</label>
                            <div class="col-md-9">
                                <select class="form-control select2" name="district" id="district">

                                    <option>Vui lòng chọn</option>


                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Phường / xã</label>
                            <div class="col-md-9">
                                <select class="form-control select2" name="ward" id="ward">

                                    <option>Vui lòng chọn</option>


                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Số phòng ngủ</label>
                            <div class="col-md-9">
                                <select class="form-control select2" name="beds" id="beds">

                                    <option value="">Vui lòng chọn</option>
                                    @for($i = 1; $i<=8; $i++)
                                        <option value="{{ $i }}">Từ {{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Số phòng tắm</label>
                            <div class="col-md-9">
                                <select class="form-control select2" name="bathrooms" id="bathrooms">

                                    <option value="">Vui lòng chọn</option>
                                    @for($i = 1; $i<=8; $i++)
                                        <option value="{{ $i }}">Từ {{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>


                    </div>

                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal" id="dismiss-modal">Đóng
                </button>
                <button type="button" class="btn btn-success btn-search">Tìm kiếm</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>

    <div class="container-fluid full-height">
        <div class="row row-height">
            <div class="col-md-7 map-right">
                <div class="map" id="map"></div>
            </div>
            <div class="col-md-5 content-left" style="padding-top: 0px !important;">

                @include('frontend.houses_ajax', compact('houses'));
            </div>


        </div><!-- End row-->
    </div>

@endsection

@push('scripts')

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
            }
        });
    });

    $(document).on('click', '.btn-search', function (e) {
        e.preventDefault();

        var data = $('#form-search-house').serialize();

        data = data + '&' + $.param({
                'province': $('#province').val(),
                'district': $('#district').val(),
                'ward': $('#ward').val(),
                'beds': $('#beds').val(),
                'bathrooms' : $('#bathrooms').val()
            });


        $.ajax({
            url: '{{ url('map-ajax') }}',
            type: 'get',
            dataType: 'json',
            data: data,
            cache: false,
            beforeSend: function () {
                $('.content-left').addClass('ht-on-loading');
                for (var key in markers) {
                    markers[key].setMap(null);
                }
                markers = [];
            },
            success: function (response) {
                $('.content-left').removeClass('ht-on-loading').html(response.items);

                markersData = response.markers.data;
                for (var key in markersData) {
                    markersData[key].forEach(function (item) {
                        var marker = map.addMarker({
                            lat: item.location_latitude,
                            lng: item.location_longitude,
                            icon: 'img/pins/' + key + '.png',
                            click: function (e) {
                                map.setCenter(item.location_latitude, item.location_longitude);

                            },
                            infoWindow: {
                                content: item.info_window
                            }
                        });
                        markers.push(marker);

                    });
                }
                center_lat = response.markers.center.lat;
                center_lng = response.markers.center.lng;

                if (center_lat != -1 && center_lng != -1) {
                    map.setCenter(response.markers.center.lat, response.markers.center.lng);
                }

                url_new = response.url.replace('map-ajax?', 'map?');

                var obj = {Title: 'title', Url: url_new};
                history.pushState(obj, obj.Title, obj.Url);

            }

        });
    });

</script>
@endpush

