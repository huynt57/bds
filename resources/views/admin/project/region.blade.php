@extends('admin')
@section('styles')

    <link href="/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="/assets/global/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css"
          rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/bootstrap-editable/inputs-ext/address/address.css" rel="stylesheet"
          type="text/css"/>
    <link href="/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css"/>

@endsection
@section('content')
    <h3 class="inline">Lựa chọn khu vực hiển thị</h3>

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
            <a href="#add-region" data-toggle="modal" class="btn btn-success">Thêm</a>
        </div>
        <div class="col-md-12">
            <table class="table table-striped table-bordered table-hover" id="orders-table">
                <thead>
                <tr>
                    {{--<th>Id</th>--}}
                    <th>Tên khu vực</th>
                    <th>Hình ảnh</th>
                    <th>Hành động</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>

    <div class="modal fade" id="add-region" tabindex="false" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Thêm khu vực mới</h4>
                </div>
                <div class="modal-body">
                    <form role="form" class="form-horizontal" id="form-category">
                        <div class="form-body">
                            {{--<div class="form-group">--}}

                            {{--<label class="col-md-3 control-label">Chọn loại khu vực</label>--}}
                            {{--<div class="col-md-9">--}}
                            {{--<select class="form-control select2" name="region_type" id="region_type">--}}
                            {{--<option value="">Vui lòng chọn</option>--}}
                            {{--<option value="{{ config('constants.WARD') }}">Phường xã</option>--}}
                            {{--<option value="{{ config('constants.DISTRICT') }}">Quận huyện</option>--}}
                            {{--<option value="{{ config('constants.PROVINCE') }}">Tỉnh thành</option>--}}
                            {{--</select>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-group">
                                <label class="col-md-3 control-label">Chọn khu vực</label>
                                <div class="col-md-9">
                                    <select class="form-control select2" name="region_id" id="region_id">
                                        <option value="">Vui lòng chọn</option>

                                        @php $cities = \App\Components\Functions::getProvinces(); @endphp

                                        @foreach($cities as $city)
                                            <option value="{{ $city->provinceid }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn green" id="btn-save">Lưu</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection

@push('scripts')

<script src="/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"
        type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"
        type="text/javascript"></script>
<script src="/assets/global/plugins/moment.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery.mockjax.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.js"
        type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-editable/inputs-ext/address/address.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-editable/inputs-ext/wysihtml5/wysihtml5.js"
        type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-typeahead/bootstrap3-typeahead.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
{{--<script src="/assets/pages/scripts/form-editable.min.js" type="text/javascript"></script>--}}

@endpush


@push('scripts')
<script>

    {{--$('#region_type').change(function () {--}}
        {{--$.ajax({--}}
            {{--url: '{{  url('admin/get-region-by-type') }}',--}}
            {{--data: {--}}
                {{--type: $(this).val()--}}
            {{--},--}}
            {{--success: function (response) {--}}
                {{--$('#region_id').html(response);--}}
            {{--}--}}
        {{--});--}}
    {{--});--}}

    $('#btn-save').click(function () {

    });
    $(function () {
        table = $('#orders-table').DataTable({
            "bDestroy": true,
            processing: true,
            searching: true,
            "aaSorting": [],
            serverSide: true,
            ajax: {
                url: '{!! url('admin/house/region.data') !!}',
            },
            columns: [

                {data: 'name', name: 'name'},
                {
                    "render": function (data, type, full, meta) {
                        return '<img src="' + full.image + '" style="max-width: 150px">';
                    }
                },
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