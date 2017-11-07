@extends('admin')

@section('styles')

    <link href="/assets/css/fileinput.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/pages/css/search.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css"/>
    <link href="/css/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
    <link href="/esg/slick/slick.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="/esg/slick/slick-theme.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        #myMap {
            height: 350px;
            width: auto;
        }
    </style>
    <style>
        .form-horizontal .form-group {
            margin-left: 0px;
            margin-right: 0px;
        }

        .col-lg-6 {
            padding-left: 0px;
        }

        .bien-the .portlet.light {
            padding-left: 0px;
            padding-right: 0px;
        }

        .xoa-bien-the {
            text-align: center;
            vertical-align: middle !important;
            cursor: pointer;
        }

        .xoa-bien-the i {
            font-size: 21px;
            color: red;
        }

        .img-input .div-img {
            width: 100%;
            margin-bottom: 5px;
            margin-top: 10px;
            height: 140px;
            background-size: cover !important;
        }

        .img-input .col-lg-3 {
            padding-left: 0px;
        }

        .img-input input[type="file"] {
            display: none;
        }

        .custom-file-upload {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
        }

        .img-input span {
            position: absolute;
            right: 22px;
            top: 18px;
        }

        .img-input span i {
            font-size: 23px;
            color: #fff;
            text-shadow: 1px 0px 0px #5d5d5d, -1px 0px 0px #5d5d5d, 0px 1px 0px #5d5d5d, 0px -1px 0px #5d5d5d, 1px 1px #5d5d5d, -1px -1px 0px #5d5d5d, 1px -1px 0px #5d5d5d, -1px 1px 0px #5d5d5d;
        }

        .bootstrap-tagsinput .tag [data-role="remove"]::after {
            content: "*" !important;
        }

        .bootstrap-tagsinput .tag {
            font-size: 13px;
        }

        .span-pro {
            position: absolute;
            right: 110px;
            z-index: 999;
            top: 10px;
        }

        .pop-up .span-pro {
            display: none;
        }

        .span-pro i {
            font-size: 23px;
            color: #fff;
            text-shadow: 1px 0px 0px #000, -1px 0px 0px #000, 0px 1px 0px #000, 0px -1px 0px #000, 1px 1px #000, -1px -1px 0px #000, 1px -1px 0px #000, -1px 1px 0px #000;
        }

        .slide-bsp .tile-thumbnail {
            position: relative;
            width: 295px;
        }

        .slide-bsp .product-select-name {
            display: block;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 200px;
        }
    </style>
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
    <h3>Thêm bài viết mới</h3>

    <form action="{{url('admin/post/store')}}" id="create-form" class="form-horizontal" method="post"
          enctype="multipart/form-data">

        {{ csrf_field() }}
        <div class="portlet light bordered col-lg-12">
            <div class="col-lg-6">

                <div class="form-body">
                    <div class="form-group">
                        <label>Title</label>
                        <div>
                            <input type="text" name="title" class="form-control" placeholder="Điền title bài viết"
                                   value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group dmc0">
                        <label>Danh mục *</label>
                        <div>
                            <select class="form-control select2" name="category_id">
                                <option value="">Chọn danh mục</option>
                                @php $categories = \App\Models\Category::all();@endphp

                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Miêu tả ngắn</label>
                        <div>
                            <textarea type="text" name="short_desc" class="form-control"
                                      placeholder="Điền miêu tả ngắn" rows="5">{{ old('short_desc') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Ảnh đại diện *</label>
                        <div>
                            <input type="file" class="product-image form-control" name="image">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="col-md-3 control-label">Có được hiển thị ?</div>
                            <div class="col-md-9">
                                <div class="mt-checkbox-inline">
                                    <label class="mt-checkbox mt-checkbox-outline">
                                        <input type="checkbox" name="status">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-12 form-group">
            <label>Nội dung bài viết</label>
            <div>
                                <textarea class="form-control ckeditor" placeholder="Điền miêu tả" rows="10"
                                          name="desc">{{ old('desc') }}</textarea>
            </div>
        </div>

        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn green">Thêm</button>
                    <button type="button" class="btn default">Hủy</button>
                </div>
            </div>
        </div>


    </form>

@endsection

@push('scripts')

<script type="text/javascript" src="/js/jquery-ui.js"></script>
<script type="text/javascript" src="/js/bootstrap-tagsinput.js"></script>
<script src="/assets/js/fileinput.min.js"></script>
<script src="../assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/esg/slick/slick.min.js"></script>
<script>

    $(document).on('ready', function () {


        $(".product-image").fileinput({
            showCaption: false, language: "vi",
            allowedFileExtensions: ["jpg", "png", "gif"],
            allowedFileTypes: ['image'],
            maxFileCount: 5
        });
    });
</script>
@endpush