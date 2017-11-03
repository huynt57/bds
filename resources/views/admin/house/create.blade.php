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
    <h3>Thêm nhà mới</h3>

    <form action="{{url('admin/add-house')}}" id="create-form" class="form-horizontal" method="post"
          enctype="multipart/form-data">

        {{ csrf_field() }}
        <div class="portlet light bordered col-lg-12">
            <div class="col-lg-6">

                <div class="form-body">
                    <div class="form-group">
                        <label>Tên nhà *</label>
                        <div>
                            <input type="text" name="name" class="form-control" placeholder="Điền tên sản phẩm"
                                   value="{{ old('name') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <div>
                            <input type="text" name="address" class="form-control"
                                   placeholder="Địa chỉ" value="{{ old('code') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <div>
                            <input type="text" name="price" id="price" class="form-control"
                                   placeholder="Điền giá thị trường" value="{{ old('price') }}">
                        </div>
                    </div>
                    <div class="form-group dmc0">
                        <label>Loại nhà</label>
                        <div>
                            <select class="form-control" name="categories[]" id="shop_cate" data-index="0">
                                <option value="">Chọn danh mục</option>
                                @php $categories = \App\Models\Category::all();@endphp

                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6" style="padding-right: 0px;">
                <div class="form-group dmc0">
                    <label>Danh mục *</label>
                    <div>
                        <select class="form-control" name="categories[]" id="shop_cate" data-index="0">
                            <option value="">Chọn danh mục</option>
                            @php $categories = \App\Models\Category::all();@endphp

                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group dmc0">
                    <label>Tỉnh / thành phố *</label>
                    <div>
                        <select class="form-control" name="categories[]" id="shop_cate" data-index="0">
                            <option value="">Chọn danh mục</option>
                            @php $categories = \App\Models\Category::all();@endphp

                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group dmc0">
                    <label>Quận / huyện *</label>
                    <div>
                        <select class="form-control" name="categories[]" id="shop_cate" data-index="0">
                            <option value="">Chọn danh mục</option>
                            @php $categories = \App\Models\Category::all();@endphp

                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group dmc0">
                    <label>Phường / xã *</label>
                    <div>
                        <select class="form-control" name="categories[]" id="shop_cate" data-index="0">
                            <option value="">Chọn danh mục</option>
                            @php $categories = \App\Models\Category::all();@endphp

                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


            </div>
        </div>

        <div class="form-group col-lg-12">
            <label>Ảnh đại diện *</label>
            <div>
                <input type="file" class="product-image form-control" name="image">
            </div>
        </div>
        <div class="form-group col-lg-12">
            <label>Danh sách miêu tả</label>
            <div>
                <input type="file" class="product-image form-control" multiple name="images[]"
                       rel="post_status_images">
            </div>
        </div>
        {{--<div class="col-lg-12 form-group">--}}
        {{--<label>Miêu tả nổi bật</label>--}}
        {{--<div>--}}
        {{--<textarea class="form-control ckeditor" placeholder="Điền miêu tả"--}}
        {{--name="short_description">{{ old('short_description') }}</textarea>--}}
        {{--</div>--}}
        {{--</div>--}}
        <div class="col-lg-12 form-group">
            <label>Miêu tả chi tiết</label>
            <div>
                                <textarea class="form-control ckeditor" placeholder="Điền miêu tả"
                                          name="description">{{ old('description') }}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Có được hiển thị ?</label>
            <div class="col-md-9">
                <div class="mt-checkbox-inline">
                    <label class="mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="status">
                        <span></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="modal fade bs-modal-lg" id="thong-so-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Thiết lập thông số sản phẩm</h4>
                    </div>
                    <div class="modal-body" id="thong-so-list">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_1_1" data-toggle="tab" id="tab_1_1_btn"> Thêm mới </a>
                            </li>
                            <li>
                                <a href="#tab_1_2" data-toggle="tab" id="kho-ts-tab"> Lấy từ kho thông số </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="tab_1_1">
                                <div class="row" style="padding: 0px 10px">
                                    <div class="portlet-body">
                                        <table class="table table-hover table-striped table-bordered thong-so-table">
                                            <tbody>
                                            <tr>
                                                <td class="col-md-5" style="text-align: center;font-weight: bold;">
                                                    Thông số
                                                </td>
                                                <td class="col-md-5" style="text-align: center;font-weight: bold;">
                                                    Giá trị
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-5">
                                                    <div class="form-group" style="margin: 0px;">
                                                        <input class="form-control unicase-form-control text-input"
                                                               name="ts_key[]">
                                                    </div>
                                                </td>
                                                <td class="col-md-5">
                                                    <div class="form-group" style="margin: 0px;">
                                                        <input class="form-control unicase-form-control text-input"
                                                               name="ts_value[]">
                                                    </div>
                                                </td>
                                                <td class="col-md-2" style="text-align: center">
                                                    <button type="button" class="btn red xoa-ts-btn"
                                                            style="margin-right: 0px;">Xóa
                                                    </button>
                                                </td>
                                                <input type="hidden" name="ts_id[]">
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div style="text-align: center">
                                            <a class="btn red btn-outline sbold uppercase" id="add_row"> Thêm mới </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn green" data-dismiss="modal">Xong</button>
                                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Đóng
                                    </button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab_1_2">
                                <div class="mt-checkbox-list">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn green" id="collect-ts">Lấy</button>
                                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Đóng
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
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
    var index_file = 0;
    var loadFile = function (event) {
        var html = '';
        index_file += 1;

        var x = $('#file-upload').clone();
        x.attr('id', 'file-upload-' + index_file);
        x.attr('name', 'image-bt[]');

        for (var i = 0; i < event.target.files.length; i++) {
            var url = "url('" + URL.createObjectURL(event.target.files[i]) + "')"
            html += '<div class="col-lg-3 col-' + index_file + '">' +
                '<span class="close-img"><i class="fa fa-times-circle"></i></span>' +
                '<div class="div-img" style="background: ' + url + ' center;"></div>' +
                '    <input type="text" class="form-control" placeholder="Giá trị" name="color-bt[]">' +
                '</div>';
        }

        $('.img-input').append(html);

        x.appendTo('.col-' + index_file);
    };

    $(document).ready(function () {
        $(document).on('blur', "input[name='color-bt[]']", function (e) {
            var current_value = $(this).val();

            if (current_value != '') {
                var ind = 0;
                $("input[name='color-bt[]']").each(function () {
                    if ($(this).val() == current_value) {
                        ind += 1;
                    }
                });

                if (ind == 2) {
                    $(this).val('');
                    bootbox.alert('Màu sắc các biến thể không được trùng nhau');
                }
            }
        });


        $(document).on('click', '.close-img', function (e) {
            $(this).parent().remove();
        });

        $(document).on('click', '.xoa-bien-the', function (e) {
            $(this).parent().remove();
        });
    });

    $(document).ready(function () {

        $(document).on('click', '.xoa-ts-btn', function (e) {
            $(this).parent().parent().remove();
        });

        var danh_muc_2_kho = '';
        $(document).on('click', '#kho-ts-tab', function (e) {
            var old_danh_muc_2_kho = danh_muc_2_kho;
            $.ajax({
                type: 'get',
                url: '{{ url('admin/get-param-suggest') }}',
                dataType: 'html',
                data: {category_id: $('#ts_sp_input').val()},
                success: function (response) {
                    $('#tab_1_2 .mt-checkbox-list').html(response);
                }
            });
        });


        $('#collect-ts').click(function (e) {
            var ts_html = '';

            var selected = [];
            $('.mt-checkbox-list input:checked').each(function () {
                var id_cb = $(this).attr('data-id');
                var name_cb = $(this).attr('data-name');

                ts_html = ts_html + '<tr>' +
                    '    <td class="col-md-5">' +
                    '        <div class="form-group" style="margin: 0px;">' +
                    '            <input class="form-control unicase-form-control text-input" disabled value="' + name_cb + '">' +
                    '        </div>' +
                    '    </td>' +
                    '<input type="hidden" value="' + name_cb + '" name="ts_key[]">' +
                    '    <td class="col-md-5">' +
                    '        <div class="form-group" style="margin: 0px;">' +
                    '            <input class="form-control unicase-form-control text-input" name="ts_value[]">' +
                    '        </div>' +
                    '    </td>' +
                    '    <td class="col-md-2" style="text-align: center">' +
                    '        <button type="button" class="btn red xoa-ts-btn" style="margin-right: 0px;">Xóa</button>' +
                    '    </td>' +
                    '    <input type="hidden" name="ts_id[]" value="' + id_cb + '">' +
                    '</tr>';

            });

            $('.thong-so-table tbody').html(
                '<tr>' +
                '<td class="col-md-5" style="text-align: center;font-weight: bold;">' +
                'Thông số' +
                '</td>' +
                '<td class="col-md-5" style="text-align: center;font-weight: bold;">' +
                'Giá trị' +
                '</td>' +
                '</tr>' + ts_html
            );

            $('#tab_1_1_btn').click();
        });
    });


    function getProductCollectionAttr() {
        var industry = $('#select-category').val();

        var department = $('#select-department').val();

        $.ajax({
            url: '{{ url('admin/product-store') }}',
            type: 'get',
            dataType: 'html',
            data: {industry: industry, department: department},
            success: function (response) {
                $('#pro-list-div').html("");
                $('#pro-list-div').html(response);
            }
        });
    }

    $(document).ready(function () {

        $('#add-product-collection').click(function (e) {
            $('#name_bsp').val($('#name-bsp-modal').val());

            $('#sp-lien-quan-modal').modal('hide');
        });

        $('#create-form').on('keyup keypress', function (e) {
            var keyCode = e.keyCode || e.which;
            if (keyCode === 13) {
                e.preventDefault();
                return false;
            }
        });

        $(".product-image").fileinput({
            'showUpload': false, 'previewFileType': 'any',
            'showCaption': false
        });

        $('#size').select2({
            tags: true
        });

        $('#color').select2({
            tags: true
        });

        $('#category_id_phu').select2({
            tags: true
        });

        $('#dm_cap4').select2({
            tags: true
        });


    });

    $(document).on('ready', function () {
        $('.slide-bsp').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            variableWidth: true,
        });

        $(".product-image").fileinput({
            showCaption: false, language: "vi",
            allowedFileExtensions: ["jpg", "png", "gif"],
            allowedFileTypes: ['image'],
            maxFileCount: 5
        });

        $('#add_row').click(function (e) {
            $('.thong-so-table tbody').append(
                '<tr>' +
                '<td class="col-md-5">' +
                '    <div class="form-group" style="margin: 0px;">' +
                '        <input class="form-control unicase-form-control text-input" name="ts_key[]">' +
                '    </div>' +
                '</td>' +
                '<td class="col-md-5">' +
                '    <div class="form-group" style="margin: 0px;">' +
                '        <input class="form-control unicase-form-control text-input" name="ts_value[]">' +
                '    </div>' +
                '</td>' +
                '<td class="col-md-2" style="text-align: center">' +
                '<button type="button" class="btn red xoa-ts-btn" style="margin-right: 0px">Xóa</button>' +
                '</td>' +
                '<input type="hidden" name="ts_id[]">' +
                '</tr>'
            );
        })
    });

    $("#sp-lien-quan-modal").on("show.bs.modal", function (e) {
        $.ajax({
            url: '{{ url('admin/product-store') }}',
            type: 'get',
            dataType: 'html',
            success: function (response) {
                $('#pro-list-div').html("");
                $('#pro-list-div').html(response);

                var bsp = $('#products_bsp').val();
                bsp = bsp.split(',');

                $("#sp-lien-quan-modal .product-select").each(function (index) {
                    var p_id = $(this).attr('data-product-id');

                    if (jQuery.inArray(p_id, bsp) !== -1) {
                        var parent = $(this).parent().parent();
                        parent.css({
                            'border': '2px solid',
                            'border-color': 'green'
                        }).addClass('selected');
                    }
                });
            }
        });
    });

    $('#input-domain-btn').on('click', function () {
        var domain = $('#input-domain').val();
        $.ajax({
            url: '{{ url('admin/product-system') }}',
            type: 'get',
            data: {
                domain: domain
            },
            dataType: 'html',
            success: function (response) {
                $('#product-list').append(response);
            }
        });
    });

    var products = [];

    function getSliderSettings() {
        return {
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            variableWidth: true,
        }
    }

    $(document).on('click', '.pop-up .product-select', function () {

        var product_id = $(this).attr('data-product-id');

        var parent = $(this).parent().parent();

        if (!parent.hasClass('selected')) {
            $('.slide-bsp').append(
                '<div id="slide-' + product_id + '">' + parent.html() + '</div>'
            );

            $('.slide-bsp').slick('destroy');
            $('.slide-bsp').slick(getSliderSettings());

            parent.css({
                'border': '2px solid',
                'border-color': 'green'
            }).addClass('selected');

            products.push(product_id);
        } else {
            $('.slide-bsp').slick('destroy');

            $('#slide-' + product_id).remove();

            $('.slide-bsp').slick(getSliderSettings());

            parent.css({
                'border': '0px',
                'border-color': 'green'
            }).removeClass('selected');

            products = jQuery.grep(products, function (value) {
                return value != product_id;
            });
        }

        console.log(products);

        $('#products_bsp').val(products);
    });

    $(document).on('click', '.pop-up .product-select-name', function () {

        var product_id = $(this).attr('data-product-id');

        var parent = $(this).parent().parent().parent();

        if (!parent.hasClass('selected')) {
            $('.slide-bsp').append(
                '<div id="slide-' + product_id + '">' + parent.html() + '</div>'
            );

            $('.slide-bsp').slick('destroy');
            $('.slide-bsp').slick(getSliderSettings());

            parent.css({
                'border': '2px solid',
                'border-color': 'green'
            }).addClass('selected');
            products.push(product_id);
        } else {
            $('.slide-bsp').slick('destroy');

            $('#slide-' + product_id).remove();

            $('.slide-bsp').slick(getSliderSettings());

            parent.css({
                'border': '0px',
                'border-color': 'green'
            }).removeClass('selected');

            products = jQuery.grep(products, function (value) {
                return value != product_id;
            });
        }

        $('#products_bsp').val(products);
    });

    $(document).on('click', '.product-system-pagination', function () {
        var href = $(this).attr('data-href');

        $.ajax({
            type: 'get',
            url: href,
            dataType: 'html',
            success: function (response) {
                $('#pro-list-div').html(response);
            }
        });
    });

    $(document).on('click', '.span-pro', function (e) {
        var product_id = $(this).attr('data-product-id');
        $('.slide-bsp').slick('destroy');

        $('#slide-' + product_id).remove();

        $('.slide-bsp').slick(getSliderSettings());

        products = jQuery.grep(products, function (value) {
            return value != product_id;
        });

        $('#products_bsp').val(products);
    });

</script>
@endpush