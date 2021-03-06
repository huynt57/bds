@extends('admin')
@section('styles')

    <link href="/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap-editable/inputs-ext/address/address.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />

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
    <h3 class="inline">Quản lý danh sách nhà</h3>

    <div class="portlet-title">

    </div>
    <div class="portlet-body form">
        <div class="form-body">
            <div class="form-group">
                <form action="#" class="mt-repeater form-horizontal">
                    <div data-repeater-list="group-a">
                        <div data-repeater-item="" class="mt-repeater-item">

                            <div class="mt-repeater-input">
                                <label class="control-label">Khoảng thời gian</label>
                                <br>
                                <select name="time_range" class="form-control" id="time_range">
                                    <option value="" selected="">Tự chọn</option>
                                    <option value="yesterday">Hôm qua</option>
                                    <option value="today">Hôm nay</option>
                                    <option value="week">Tuần này</option>
                                    <option value="last_7_days">7 ngày qua</option>
                                    <option value="last_week">Tuần trước</option>
                                    <option value="month">Tháng này</option>
                                    <option value="last_30_days">30 ngày qua</option>
                                    <option value="last_month">Tháng trước</option>
                                </select>
                            </div>

                            <div class="mt-repeater-input">
                                <label class="control-label">Chọn khoảng thời gian</label>
                                <br>
                                <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012"
                                     data-date-format="dd/mm/yyyy">
                                    <input type="text" class="form-control" name="from" id="start_time">
                                    <span class="input-group-addon"> to </span>
                                    <input type="text" class="form-control" name="to" id="end_time"></div>
                                <!-- /input-group -->
                            </div>
                            <div class="mt-repeater-input">
                                <a href="javascript:;" onclick="getPostByAttr()" data-repeater-delete=""
                                   class="btn btn-danger mt-repeater-delete">
                                    <i class="fa fa-check"></i> Lọc</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12" style="margin-bottom: 12px">
            <a href="{{ url('admin/house/create') }}" class="btn btn-success">Thêm</a>
        </div>
        <div class="col-md-12">
            <table class="table table-striped table-bordered table-hover" id="orders-table">
                <thead>
                <tr>
                    {{--<th>Id</th>--}}
                    <th>Ảnh</th>
                    <th>Tiêu đề</th>
                    <th>Giá</th>
                    <th>Loại</th>
                    {{--<th>Miêu tả</th>--}}
                    <th>Danh mục</th>
                    <th>Người môi giới</th>
                    <th>Nổi bật</th>
                    <th>Trạng thái</th>
                    <th>Tạo lúc</th>
                    <th>Hành động</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12" id="detail">
        </div>
    </div>
@endsection

@push('scripts')

<script src="/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/moment.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery.mockjax.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-editable/inputs-ext/address/address.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-editable/inputs-ext/wysihtml5/wysihtml5.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-typeahead/bootstrap3-typeahead.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
{{--<script src="/assets/pages/scripts/form-editable.min.js" type="text/javascript"></script>--}}

@endpush


@push('scripts')
<script>

    function getPostByAttr() {
        var startTime = $('#start_time').val();
        var endTime = $('#end_time').val();
        var timeRange = $('#time_range').val();


        $('#orders-table').DataTable({
            "bDestroy": true,
            processing: true,
            //  serverSide: true,
            "aaSorting": [],
            searching: true,
            ajax: {
                url: '{!! url('admin/post.data') !!}',
                data: {
                    start_time: startTime,
                    end_time: endTime,
                    time_range: timeRange,
                }
            },
            columns: [
//                {data: 'id', name: 'id'},
                {
                    "render": function (data, type, full, meta) {
                        return '<img src="'+full.main_images+'" style="max-width: 150px">';
                    }
                },
                {data: 'name', name: 'name'},
                {data: 'price', name: 'price'},
                {data: 'type', name: 'type'},
                {data: 'category', name: 'category'},
                {data: 'agent', name: 'agent'},
                {data: 'is_feature', name: 'is_feature'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action'},
            ]
        });
    }

    $(function () {
        table = $('#orders-table').DataTable({
            "bDestroy": true,
            processing: true,
            searching: true,
            "aaSorting": [],
             serverSide: true,
            ajax: {
                url: '{!! url('admin/house/house.data') !!}',
            },
            columns: [

                {
                    "render": function (data, type, full, meta) {
                        return '<img src="'+full.main_images+'" style="max-width: 150px">';
                    }
                },
                {data: 'name', name: 'name'},
                {data: 'price', name: 'price'},
                {data: 'type', name: 'type'},
                {data: 'category', name: 'category'},
                {data: 'agent', name: 'agent'},
                {data: 'is_feature', name: 'is_feature'},
                {data: 'status', name: 'status'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action'},
            ],
            initComplete: function () {
                $('.editable').editable({
                    prepend: "Chưa chọn",
                    source: [{
                        value: 1,
                        text: 'Có'
                    }, {
                        value: 0,
                        text: 'Không'
                    }],
                });
            }
        });
    });


</script>
@endpush