@extends('frontend')

@section('content')
    <div class="container-fluid" style="margin-top: 20px">
        <form id="form-search-house">
            <div class="row">
                <div class="col-md-1">
                    <div class="form-group">
                        <label>Chọn loại dự án</label>
                        <select class="form-control" name="type" id="type">
                            <option value="">Loại nhà</option>
                            <option @if(request()->input('type') == \App\Models\Project::DEVELOPING ) selected
                                    @endif value="{{ \App\Models\Project::DEVELOPING }}">Đang phát triển
                            </option>
                            <option @if(request()->input('type') == \App\Models\Project::PREPARE_SALE ) selected
                                    @endif value="{{ \App\Models\Project::PREPARE_SALE }}">Chuẩn bị mở bán
                            </option>
                            <option @if(request()->input('type') == \App\Models\Project::SALING  ) selected
                                    @endif value="{{ \App\Models\Project::SALING }}">Đang bán
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
                <div class="col-md-1">
                    <div class="form-group">
                        <label>Số phòng ngủ</label>
                        <select class="form-control" name="beds" id="beds">
                            <option value="">Chọn</option>
                            @for($i = 1; $i<=8; $i++)
                                <option value="{{ $i }}">Từ {{$i}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label>Số phòng tắm</label>
                        <select class="form-control" name="bathrooms" id="bathrooms">
                            <option value="">Chọn</option>
                            @for($i = 1; $i<=8; $i++)
                                <option value="{{ $i }}">Từ {{$i}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Từ khóa tìm kiếm</label>
                        <input type="text" class="form-control" name="key_word" id="key_word"
                               placeholder="Từ khóa tìm kiếm">
                    </div>
                </div>
                <div class="col-md-1">
                    <button class="btn btn-success" style="margin-top: 25px" id="btn-search">Tìm kiếm</button>
                </div>
            </div>
        </form>
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

    $(document).on('click', '#btn-search', function (e) {
        e.preventDefault();

        var data = $('#form-search-house').serialize();


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