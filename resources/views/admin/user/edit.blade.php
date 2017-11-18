@extends('admin')


@section('styles')
    <link href="/assets/pages/css/profile.min.css" rel="stylesheet" type="text/css"/>

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
    <h1 class="page-title"> Cập nhật tài khoản {{ $user->name }}
    </h1>
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PROFILE SIDEBAR -->
            <div class="profile-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light ">
                            <div class="portlet-title tabbable-line">
                                <div class="caption caption-md">
                                    <i class="icon-globe theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Thông tin tài khoản</span>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_1_1" data-toggle="tab">Thông tin cá nhân</a>
                                    </li>
                                    @if($user->type != \App\Models\User::INVESTOR)
                                    <li>
                                        <a href="#tab_1_2" data-toggle="tab">Thay đổi mật khẩu</a>
                                    </li>
                                        @endif
                                </ul>
                            </div>
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <!-- PERSONAL INFO TAB -->
                                    <div class="tab-pane active" id="tab_1_1">
                                        <form role="form" action="{{ url('/admin/user/edit', ['id'=> $user->id]) }}" method="POST" enctype="multipart/form-data">
                                            {!! csrf_field() !!}
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-3"><label class="control-label">Ảnh đại
                                                                diện</label>
                                                            <div class="form-group">


                                                                <div class="fileinput fileinput-new"
                                                                     data-provides="fileinput">

                                                                    <div class="fileinput-new thumbnail"
                                                                         style="width: 200px; height: 180px;">
                                                                        <img src="/files/{{ $user->image }}"
                                                                             alt=""></div>
                                                                    <div class="fileinput-preview fileinput-exists thumbnail"
                                                                         style="max-width: 250px; max-height: 300px;"></div>
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

                                                        <div class="col-md-9">
                                                            <div class="form-group">
                                                                <label class="control-label">Tên</label>
                                                                <input type="text" placeholder="Điền tên người dùng"
                                                                       class="form-control" name="name" value="{{ $user->name }}"></div>
                                                            <div class="form-group">
                                                                <label class="control-label">SĐT</label>
                                                                <input type="text" name="phone" placeholder="0123456789" value="{{ $user->phone }}"
                                                                       class="form-control"></div>
                                                            <div class="form-group">
                                                                <label class="control-label">Email</label>
                                                                <input type="text" name="email" placeholder="Điền email người dùng" value="{{ $user->email }}"
                                                                       class="form-control"></div>
                                                            @if($user->type != \App\Models\User::INVESTOR)
                                                            <div class="form-group">
                                                                <label class="control-label">Loại người dùng</label>
                                                                <select class="form-control" name="type">

                                                                    <option value="">Vui lòng chọn</option>
                                                                    <option @if($user->type ==  \App\Models\User::ADMIN) selected @endif value="{{ \App\Models\User::ADMIN }}"> Quản
                                                                        trị viên
                                                                    </option>
                                                                    <option @if($user->type ==  \App\Models\User::AGENT) selected @endif value="{{ \App\Models\User::AGENT }}"> Môi
                                                                        giới viên
                                                                    </option>

                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label">Trạng thái</label>
                                                                <select class="form-control" name="status">

                                                                    <option value="">Vui lòng chọn</option>
                                                                    <option @if($user->type ==  \App\Models\User::ACTIVE) selected @endif value="{{ \App\Models\User::ACTIVE }}"> Kích
                                                                        hoạt
                                                                    </option>
                                                                    <option @if($user->type ==  \App\Models\User::IN_ACTIVE) selected @endif value="{{ \App\Models\User::IN_ACTIVE }}">
                                                                        Không kích hoạt
                                                                    </option>

                                                                </select>
                                                            </div>
                                                            @endif
                                                            <div class="form-group">
                                                                <label class="control-label">Website Url</label>
                                                                <input type="text" name="website"
                                                                       placeholder="http://www.mywebsite.com" value="{{ $user->website }}"
                                                                       class="form-control"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="margiv-top-10">
                                                <button type="submit" class="btn green"> Lưu </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab_1_2">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                    <form action="{{ url('admin/user/update-password') }}" method="post">
                                                        <div class="form-group">
                                                            <label class="control-label">Mật khẩu hiện tại</label>
                                                            <input type="password" class="form-control"> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Mật khẩu mới</label>
                                                            <input type="password" class="form-control"> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Nhập lại mật khẩu</label>
                                                            <input type="password" class="form-control"> </div>
                                                        <div class="margin-top-10">
                                                            <a href="javascript:;" class="btn green"> Cập nhật mật khẩu</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PROFILE CONTENT -->
        </div>
    </div>

@endsection

@push('scripts')
<script src="/assets/pages/scripts/profile.min.js" type="text/javascript"></script>
@endpush