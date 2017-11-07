@extends('admin')
@section('styles')
    <link href="/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <h3 class="inline">Quản lý danh sách bài viết</h3>

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
            <a href="{{ url('admin/post/create') }}" class="btn btn-success">Thêm</a>
        </div>
        <div class="col-md-12">
            <table class="table table-striped table-bordered table-hover" id="orders-table">
                <thead>
                <tr>
                    {{--<th>Id</th>--}}
                    <th>Ảnh</th>
                    <th>Tiêu đề</th>
                    <th>Miêu tả ngắn</th>
                    <th>Trạng thái</th>
                    <th>Danh mục</th>
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
<script src="/assets/pages/scripts/components-bootstrap-switch.min.js" type="text/javascript"></script>

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
                url: '{!! url('admin/post/post.data') !!}',
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
                        return '<img src="' + full.image + '" style="max-width: 150px">';
                    }
                },
                {data: 'title', name: 'title'},
                {data: 'short_desc', name: 'short_desc'},
                {data: 'status', name: 'status'},
                {data: 'category', name: 'categories.name'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action'},
            ]
        });
    }

    $(function () {
        $(".make-switch").bootstrapSwitch();
        table = $('#orders-table').DataTable({
            "bDestroy": true,
            processing: true,
            searching: true,
            "aaSorting": [],
            serverSide: true,
            ajax: {
                url: '{!! url('admin/post/post.data') !!}',
            },
            columns: [
                {
                    "render": function (data, type, full, meta) {
                        return '<img src="' + full.image + '" style="max-width: 150px">';
                    }
                },
                {data: 'title', name: 'title'},
                {data: 'short_desc', name: 'short_desc'},
                {data: 'status', name: 'status'},
                {data: 'category', name: 'categories.name'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action'},
            ]
        });
    });


</script>
@endpush