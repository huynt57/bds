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
    <h1 class="page-title"> Thêm mới tài khoản
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
                            </div>
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <!-- PERSONAL INFO TAB -->
                                    <div class="tab-pane active" id="tab_1_1">
                                        <form role="form" action="{{ url('/admin/user/store') }}" method="POST" enctype="multipart/form-data">
                                            {!! csrf_field() !!}
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6"><label class="control-label">Ảnh đại
                                                                diện</label>
                                                            <div class="form-group">


                                                                <div class="fileinput fileinput-new"
                                                                     data-provides="fileinput">

                                                                    <div class="fileinput-new thumbnail"
                                                                         style="width: 200px; height: 180px;">
                                                                        <img src="http://www.placehold.it/200x180/EFEFEF/AAAAAA&amp;text=no+image"
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
                                                            <div class="form-group">
                                                                <label class="control-label">Tên</label>
                                                                <input type="text" placeholder="Điền tên người dùng"
                                                                       class="form-control" name="name" value="{{ old('name') }}"></div>
                                                            <div class="form-group">
                                                                <label class="control-label">SĐT</label>
                                                                <input type="text" name="phone" placeholder="0123456789" value="{{ old('phone') }}"
                                                                       class="form-control"></div>
                                                            <div class="form-group">
                                                                <label class="control-label">Email</label>
                                                                <input type="text" name="email" placeholder="Điền email người dùng" value="{{ old('email') }}"
                                                                       class="form-control"></div>
                                                            <input type="hidden" value="{{ \App\Models\User::INVESTOR }}" name="type">
                                                            <div class="form-group">
                                                                <label class="control-label">Website Url</label>
                                                                <input type="text" name="website"
                                                                       placeholder="http://www.mywebsite.com" value="{{ old('website') }}"
                                                                       class="form-control"></div>
                                                        </div>

                                                        <div class="col-md-6">

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="margiv-top-10">
                                                <button type="submit" class="btn green"> Lưu </button>
                                            </div>
                                        </form>
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