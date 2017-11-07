@extends('admin')

@section('styles')
    <link href="/assets/global/plugins/jquery-nestable/jquery.nestable.css" rel="stylesheet" type="text/css"/>

@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bubble font-green"></i>
                        <span class="caption-subject font-green sbold uppercase">Danh sách menu trang chủ</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-success" data-toggle="modal" href="#add-menu">Thêm menu mới</a>
                    </div>
                </div>
                <div class="portlet-body ">
                    <div class="dd" id="nestable_list_1">
                        <ol class="dd-list">
                            @foreach($menus as $menu)
                            <li class="dd-item" data-id="{{ $menu->id }}">
                                <div class="dd-handle"> {{ $menu->title }}</div>

                                @php  \App\Components\Functions::printMenu($menu); @endphp

                            </li>
                            @endforeach

                        </ol>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="modal fade" id="add-menu" tabindex="false" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Thêm menu mới</h4>
                </div>
                <div class="modal-body">
                    <form role="form" class="form-horizontal" id="form-menu">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Tên</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Điền tên" name="title">
                                </div>
                            </div>
                        </div>
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Chọn menu cha</label>
                                <div class="col-md-9">
                                   <select class="form-control select2" name="parent_id">
                                       <option value="">Không có menu cha</option>
                                       @php $menus = \App\Models\Menu::all(); @endphp

                                       @foreach($menus as $menu)
                                       <option value="{{ $menu->id }}">
                                           {{ $menu->title }}
                                       </option>
                                           @endforeach

                                   </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Liên kết tới bài viết</label>
                                <div class="col-md-9">
                                    <select class="form-control select2" name="post_id">
                                        <option value="">Không liên kết tới bài viết</option>
                                        @php $posts = \App\Models\Post::all(); @endphp

                                        @foreach($posts as $post)
                                            <option value="{{ $post->id }}">
                                                {{ $post->title }}
                                            </option>
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
<script src="/assets/global/plugins/jquery-nestable/jquery.nestable.js" type="text/javascript"></script>
<script src="/assets/pages/scripts/ui-nestable.min.js" type="text/javascript"></script>

<script>

    $(document).on('click', '#btn-save', function(e) {
       e.preventDefault();

       var data = $('#form-menu').serialize();

       $.ajax({
           url: '{{ url('admin/menu/store') }}',
           data: data,
           type: 'post',
           dataType: 'json',
           success: function(response)
           {
               if(response.status == 1)
               {
                   location.reload();
               }

           }
       });

    });

    $(document).ready(function() {

        $('.select2').select2();

    });

</script>
@endpush