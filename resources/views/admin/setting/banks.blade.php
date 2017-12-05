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
    <h3 class="inline">Quản lý danh sách ngân hàng liên kết</h3>

    <div class="row">
        <div class="col-md-12" style="margin-bottom: 12px; margin-top: 12px">
            <a href="#add-testimonial" data-toggle="modal" class="btn btn-success">Thêm</a>
        </div>
        <div class="col-md-12">
            <table class="table table-striped table-bordered table-hover" id="orders-table">
                <thead>
                <tr>
                    {{--<th>Id</th>--}}
                    <th>Tên ngân hàng</th>
                    <th>Lãi suất</th>
                    <th>Hành động</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>

    <div class="modal fade" id="add-testimonial" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Thêm ngân hàng</h4>
                </div>
                <div class="modal-body">
                    <form role="form" class="form-horizontal" id="form-testimonial">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Tên ngân hàng</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Điền tên" name="bank">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Lãi suất</label>
                                <div class="col-md-9">
                                    <input type="number" step="0.01" class="form-control" placeholder="Điền lãi suất (không chứa dấu %)" name="rate" />
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

    var table;
    $(document).on('click', '#btn-save', function(e) {
        e.preventDefault();

        var data = $('#form-testimonial').serialize();

        $.ajax({
            url: '{{ url('admin/settings/bank/store') }}',
            data: data,
            type: 'post',
            dataType: 'json',
            success: function(response)
            {

                if(response.status == 1)
                {
                    swal('Thành công', '', 'success');
                    $('#add-testimonial').modal('hide');
                    table.draw();
                } else {
                    swal('Có lỗi xảy ra', response.message, 'warning');
                }
            }
        });
    });

    $(function () {
        table = $('#orders-table').DataTable({
            "bDestroy": true,
            processing: true,
            searching: true,
            "aaSorting": [],
            serverSide: true,
            ajax: {
                url: '{!! url('admin/settings/bank.data') !!}',
            },
            columns: [
                {data: 'bank', name: 'bank'},
                {data: 'rate', name: 'rate'},
                {data: 'action', name: 'action'},
            ],
            initComplete: function () {
                $('.editable').editable();
            },
            "fnDrawCallback": function() {
                $('.editable').editable();
            }
        });
    });


</script>
@endpush

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
