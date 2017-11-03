@extends('admin')
@section('content')
    @if(($type == App\Post::tintuc) || ($type == \App\Post::NEWS_ISHOPGO) || ($type == \App\Post::NEWS))
        <h3 class="inline">Quản lý tin tức</h3>
        @include('terms')
    @elseif ($type == App\Post::chinhsach)
        <h3 class="inline">Quản lý chính sách</h3>
        @include('terms')
    @elseif ($type == App\Post::daotao)
        <h3 class="inline">Quản lý đào tạo</h3>
        @include('terms')
    @elseif ($type == App\Post::tuyendung)
        <h3 class="inline">Quản lý tuyển dụng</h3>
        @include('terms')
    @endif

    @include('admin.flash_message')

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
            @if(auth('frontend')->user()->can('add-new') and (request()->input('type') == \App\Post::tintuc || $type == \App\Post::NEWS_ISHOPGO) || ($type == \App\Post::NEWS))
                <a href="{{ url('admin/add-post') }}?type={{ $type }}" class="btn btn-success">Thêm</a>
            @endif
            @if(auth('frontend')->user()->can('add-policy') and request()->input('type') == \App\Post::chinhsach)
                <a href="{{ url('admin/add-post') }}?type={{ request()->input('type') }}" class="btn btn-success">Thêm</a>
            @endif
            @if(auth('frontend')->user()->can('add-trainning') and request()->input('type') == \App\Post::daotao)
                <a href="{{ url('admin/add-post') }}?type={{ request()->input('type') }}" class="btn btn-success">Thêm</a>
            @endif
            @if(auth('frontend')->user()->can('add-recruitment') and request()->input('type') == \App\Post::tuyendung)
                <a href="{{ url('admin/add-post') }}?type={{ request()->input('type') }}" class="btn btn-success">Thêm</a>
            @endif
        </div>
        <div class="col-md-12">
            <table class="table table-striped table-bordered table-hover" id="orders-table">
                <thead>
                <tr>
                    {{--<th>Id</th>--}}
                    <th>Tiêu đề</th>
                    <th>Người tạo</th>
                    <th>Trạng thái</th>
                    <th>Sửa lúc </th>
                    <th>Tạo lúc</th>
                    <th>Tùy chọn</th>
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
                url: '{!! url('admin/post.data') !!}',
                data: {
                    start_time: startTime,
                    end_time: endTime,
                    time_range: timeRange,
                    type: '{{ $type }}'
                }
            },
            columns: [
//                {data: 'id', name: 'id'},
                {data: 'title', name: 'title'},
                {data: 'account', name: 'account'},
                {data: 'status', name: 'status'},
                {data: 'updated_at', name: 'updated_at'},
                {data: 'created_at', name: 'created_at'},
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
            // serverSide: true,
            ajax: {
                url: '{!! url('admin/post.data') !!}',
                data: {
                    type: '{{ $type }}'
                }
            },
            columns: [

                {data: 'title', name: 'title'},
                {data: 'account', name: 'account'},
                {data: 'status', name: 'status'},
                {data: 'updated_at', name: 'updated_at'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action'},
            ]
        });
    });


</script>
@endpush