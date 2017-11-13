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
        .seo_preview {
            display: block;
            min-height: 100px;
        }

        .seo_title #render_seo_title {
            color: #1e0fbe;
            font-size: 18px;
            font-weight: 400;
            line-height: 1.2;
        }

        .seo_title{
            display: inline-block;
            overflow: hidden;
            width: 100%;
            vertical-align: top;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .seo_preview {
            position: relative;
            background-color: #fff;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
        }

        .seo_heading {
            margin: 0 0 15px;
            padding: 8px 20px;
            color: #555;
            font-family: "Open Sans", sans-serif;
            font-size: 15px;
            font-weight: 300;
        }

        .seo_preview_view {
            width: 50%;
            max-width: 100%;
            padding: 0 20px;
        }

        .seo_url {
            width: 50%;
            line-height: 1;
            white-space: nowrap;
        }

        #render_seo_url {
            color: #006621;
            font-style: normal;
        }

        #render_seo_description {
            color: #777;
        }

        .text-dot {
            display: block;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
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
    <h3>Cập nhật bài viết {{ $post->title }}</h3>

    <form action="{{url('admin/post/update', ['id' => $post->id])}}" id="create-form" class="form-horizontal" method="post"
          enctype="multipart/form-data">

        {{ csrf_field() }}
        <div class="portlet light bordered col-lg-12">
            <div class="col-lg-6">

                <div class="form-body">
                    <div class="form-group">
                        <label>Title</label>
                        <div>
                            <input type="text" name="title" class="form-control" placeholder="Điền title bài viết"
                                   value="{{ $post->title }}" id="title">
                        </div>
                    </div>
                    <div class="form-group dmc0">
                        <label>Danh mục *</label>
                        <div>
                            <select class="form-control select2" name="category_id">
                                <option value="">Chọn danh mục</option>
                                @php $categories = \App\Models\Category::all();@endphp

                                @foreach($categories as $category)
                                    <option @if($post->category_id == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Miêu tả ngắn</label>
                        <div>
                            <textarea type="text" name="short_desc" class="form-control"
                                      placeholder="Điền miêu tả ngắn" rows="5">{{  $post->short_desc  }}</textarea>
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
                                        <input type="checkbox" name="status" @if($post->status) checked @endif>
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-12">
            <div class="portlet box red">
                <div class="portlet-title">
                    <div class="caption">SEO</div>



                </div>
                <div class="portlet-body" style="display: block;">

                    <section class="seo_preview">
                        <div class="seo_preview_view">
                            <div class="seo_title">
                                <span id="render_seo_title">
                                        Vui lòng cung cấp tiêu đề
                                </span>
                            </div>
                            <div class="seo_url">
                                 <span id="render_seo_url">
                                    viethouse24.com
                                </span>
                            </div>
                            <div class="seo_description text-dot">
                                     <span id="render_seo_description">

                                     </span>
                            </div>
                        </div>

                    </section>
                    <section class="seo_preview" style="padding-bottom: 20px">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-2 control-label">Meta description</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="input_seo_description" placeholder="Meta description" name="meta_description">{{ $post->meta_description }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-2 control-label">keyword</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" placeholder="keyword" name="meta_keyword">{{ $post->meta_keyword }}</textarea>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>



        <div class="col-lg-12 form-group">
            <label>Nội dung bài viết</label>
            <div>
                                <textarea class="form-control ckeditor" placeholder="Điền miêu tả" rows="10"
                                          name="desc">{!!  $post->desc !!}</textarea>
            </div>
        </div>


        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn green">Cập nhật</button>
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
    $('#title').bind('input', function () {
        var title = $(this).val();
        if(!title) {
            title = 'Vui lòng cung cấp tiêu đề';
        }
        $('#render_seo_title').html(title);
    });

    $('#input_seo_description').bind('input',function () {
        var content = $(this).val();
        if(!content){
            content = 'Vui lòng cung cấp meta description';
        }
        $('#render_seo_description').html(content);
    });

    $(document).on('ready', function () {
        $('#render_seo_title').html($('#title').val());

        $(".product-image").fileinput({
            showCaption: false, language: "vi",
            allowedFileExtensions: ["jpg", "png", "gif"],
            allowedFileTypes: ['image'],
            maxFileCount: 5
        });
    });
</script>
@endpush