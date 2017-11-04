@extends('admin')
@section('content')
    <h3 class="inline">Quản lý danh mục</h3>

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
            <a href="#add-category" data-toggle="modal" class="btn btn-success">Thêm</a>
        </div>
        <div class="col-md-12">
            <table class="table table-striped table-bordered table-hover" id="orders-table">
                <thead>
                <tr>
                    {{--<th>Id</th>--}}
                    <th>Tên</th>
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
                url: '{!! url('admin/category/category.data') !!}',
                data: {
                    start_time: startTime,
                    end_time: endTime,
                    time_range: timeRange,
                }
            },
            columns: [
//                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
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
                url: '{!! url('admin/category/category.data') !!}',
            },
            columns: [

                {data: 'name', name: 'name'},
                {data: 'action', name: 'action'},
            ]
        });
    });


</script>
@endpush