<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-bubble font-green"></i>
            <span class="caption-subject font-green sbold uppercase">Chi tiết menu</span>
        </div>
    </div>
    <div class="portlet-body">
        <form role="form" class="form-horizontal" id="form-menu-2">
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Tên</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Điền tên" name="title"
                               value="{{ $item->title }}">
                    </div>
                </div>
            </div>
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Chọn menu cha</label>
                    <div class="col-md-9">
                        <select class="form-control select2" name="parent_id">
                            <option value="">Không có menu cha</option>
                            @php $menus = \App\Models\Menu::where('id', '<>', $item->id)->get(); @endphp

                            @foreach($menus as $menu)
                                <option @if($menu->id == $item->parent_id) selected @endif value="{{ $menu->id }}">
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
                                <option @if($post->id == $item->post_id) selected @endif value="{{ $post->id }}">
                                    {{ $post->title }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </div>
            </div>
            <input type="hidden" name="id" value="{{ $item->id }}">
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Liên kết tới đường dẫn</label>
                    <div class="col-md-9">
                        <select class="form-control select2" name="post_id">
                            <option value="">Không liên kết tới đường dẫn nào</option>
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
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="button" class="btn green"  id="btn-save-2">Lưu</button>
                        <button type="button" class="btn red"  id="btn-delete-2">Xóa menu
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>