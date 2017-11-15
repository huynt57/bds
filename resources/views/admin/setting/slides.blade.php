@extends('admin')
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
    <h3 class="inline">Quản lý Slide trang chủ</h3>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered table-hover" id="orders-table">
                <thead>
                <tr>
                    {{--<th>Id</th>--}}
                    <th>Ảnh</th>
                    <th>Slogan</th>
                    <th>Hành động</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>

    <div class="modal fade" id="update-slide" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Cập nhật slide</h4>
                </div>
                <div class="modal-body">
                    <form role="form" class="form-horizontal" id="form-slide" method="post" enctype="multipart/form-data" action="{{ url('admin/settings/slide/update') }}">
                        {!! csrf_field() !!}
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Slogan</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Điền tên" name="name">
                                </div>
                            </div>
                        </div>
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
<script>
    $(document).on('click', '.update', function() {
        var id = $(this).attr('data-id');
        var url = '{{ url('admin/settings/slide/update')}}' + '/' +id;
        $.ajax({
           url: '{{ url('admin/get-image-slide') }}',
            data: {
               id: id
            },
            dataType: 'json',
            success: function(response)
            {
                $('#inp-image').attr('src', response.data);
                $('input[name="name"]').val(response.name);
            }
        });
        $('#form-slide').attr('action', url);
    });


    $(function () {
        table = $('#orders-table').DataTable({
            "bDestroy": true,
            processing: true,
            searching: true,
            "aaSorting": [],
            serverSide: true,
            ajax: {
                url: '{!! url('admin/settings/slide.data') !!}',
            },
            columns: [

                {
                    "render": function (data, type, full, meta) {
                        return '<img src="'+full.path+'" style="max-width: 150px">';
                    }
                },
                {data: 'name', name: 'name'},
                {data: 'action', name: 'action'},
            ]
        });
    });


</script>
@endpush

