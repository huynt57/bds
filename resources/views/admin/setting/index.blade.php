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

    <div class="portlet light portlet-fit bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject font-dark sbold uppercase">Cấu hình hệ thống</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="row">
                <div class="col-md-12">
                    <table id="user" class="table table-bordered table-striped">
                        <tbody>
                        <tr>
                            <td style="width:15%">Logo (rộng 160px; cao 34px)</td>
                            <td style="width:50%">
                                <img src="/files/{{ $logo->value }}" style="max-height: 150px; max-width: 150px" />
                                <a href="#update-logo" data-toggle="modal"  class="btn btn-success">Cập nhật</a>
                            </td>
                        </tr>
                        @foreach($settings as $setting)
                            <tr>
                                <td style="width:15%">{{ $setting->display_name }}</td>
                                <td style="width:50%">
                                    <a href="javascript:;" data-type="text" data-pk="1" data-name="value"
                                       data-pk=" {{ $setting->id }} " data-url=" {{ url('admin/settings/update-inline', ['id' => $setting->id]) }}"
                                       data-original-title="Điền {{ $setting->display_name }}" class="editable editable-click">
                                        {{ $setting->value }} </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="update-logo" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Cập nhật logo website</h4>
                </div>
                <div class="modal-body">
                    <form role="form" class="form-horizontal" id="form-slide" method="post" enctype="multipart/form-data" action="{{ url('admin/settings/logo/update') }}">
                        {!! csrf_field() !!}

                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Ảnh đại diện</label>
                                <div class="col-md-9">



                                    <div class="fileinput fileinput-new"
                                         data-provides="fileinput">

                                        <div class="fileinput-new thumbnail"
                                             style="width: 200px; height: 180px;">
                                            <img id="inp-image" src="http://www.placehold.it/200x180/EFEFEF/AAAAAA&amp;text=no+image"
                                                 alt=""></div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"
                                             style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                                                            <span class="btn default btn-file">
                                                                                <span class="fileinput-new"> Chọn hình ảnh </span>
                                                                                <span class="fileinput-exists"> Thay đổi </span>
                                                                                <input type="file" name="image"> </span>
                                            <a href="javascript:;"
                                               class="btn default fileinput-exists"
                                               data-dismiss="fileinput"> Xóa </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">Lưu</button>
                                    <button type="button" class="btn default" data-dismiss="modal">Đóng</button>
                                </div>
                            </div>
                        </div>
                    </form>

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

<script>
    $(document).ready(function() {
       $('.editable').editable();
    });
</script>
@endpush