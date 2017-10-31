<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
            data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <!-- END SIDEBAR TOGGLER BUTTON -->
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->

                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>

            @if(!cache()->has('is_system_off'))

                @if(auth('frontend')->user()->type != config('constants.STAFF') && auth('frontend')->user()->type != config('constants.CUSTOMER'))
                    @if(auth('frontend')->user()->type != config('constants.STAFF_WAREHOUSE'))
                        <li class="nav-item  ">
                            <a href="{{ url('/admin') }}" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">Quản lý thu nhập</span>
                            </a>
                        </li>
                    @endif
                @endif

            @endif



            @if(auth('frontend')->user()->can('edit-admin'))
                <li class="nav-item  ">
                    <a href="{{url('admin/staff')}}" class="nav-link nav-toggle">
                        <i class="icon-users"></i>
                        <span class="title">Quản lý admin</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{url('admin/nhan-vien-chi-nhanh')}}" class="nav-link nav-toggle">
                        <i class="icon-users"></i>
                        <span class="title">Nhân viên chi nhánh</span>

                    </a>
                </li>
            @endif


            @if(!cache()->has('is_system_off'))
                @if(auth('frontend')->user()->can('edit-payment-history'))
                    <li class="nav-item  ">
                        <a href="{{url('admin/payment-history')}}" class="nav-link nav-toggle">
                            <i class="icon-envelope-letter"></i>
                            <span class="title">Lịch sử thanh toán</span>
                        </a>
                    </li>
                @endif
            @endif
            @if(!cache()->has('is_system_off'))
                @if(auth('frontend')->user()->can('view-collect-spend'))
                    @if(auth('frontend')->user()->type != config('constants.STAFF_WAREHOUSE'))
                        <li class="nav-item  ">
                            <a href="{{url('admin/thu-chi')}}" class="nav-link nav-toggle">
                                <i class="icon-credit-card"></i>
                                <span class="title">Quản lý thu chi</span>
                            </a>
                        </li>
                    @endif
                @endif
            @endif
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">Thông tin tài khoản</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{url('admin/thong-tin-ca-nhan')}}" class="nav-link ">
                            <span class="title">Xem thông tin</span>
                        </a>
                    </li>

                    <li class="nav-item  ">
                        <a href="{{ url('admin/thay-mat-khau') }}" class="nav-link ">
                            <span class="title">Bảo mật</span>
                        </a>
                    </li>

                    <li class="nav-item  ">
                        <a href="{{ url('admin/thay-mat-khau') }}" class="nav-link ">
                            <span class="title">Thoát</span>
                        </a>
                    </li>

                </ul>
            </li>
            @if(!cache()->has('is_system_off'))
                @if(auth('frontend')->user()->can('view-mdt'))
                    <li class="nav-item  ">
                        <a href="{{url('admin/ma-mua-do-tot')}}" class="nav-link nav-toggle">
                            <i class="icon-users"></i>
                            <span class="title">Quản lý mã mua đồ tốt</span>
                        </a>
                    </li>
                @endif
            @endif
            @if(auth('frontend')->user()->can('view-order'))

                @if(auth('frontend')->user()->type == config('constants.STAFF_WAREHOUSE'))
                    <li class="nav-item  ">
                        <a href="{{url('admin/don-hang')}}" class="nav-link nav-toggle">
                            <i class="icon-basket"></i>
                            <span class="title">Quản lý đơn hàng CN</span>

                        </a>
                    </li>
                @else
                    <li class="nav-item  ">
                        <a href="{{url('admin/don-hang')}}" class="nav-link nav-toggle">
                            <i class="icon-basket"></i>
                            <span class="title">Quản lý đơn hàng</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{url('admin/don-hang')}}?pay_back=true" class="nav-link nav-toggle">
                            <i class="icon-basket"></i>
                            <span class="title">Quản lý đơn hàng trả</span>
                        </a>
                    </li>
                @endif
            @endif


            @if(auth('frontend')->user()->type == config('constants.CUSTOMER') )
                <li class="nav-item  ">
                    <a href="{{url('admin/don-hang-khach')}}" class="nav-link nav-toggle">
                        <i class="icon-basket"></i>
                        <span class="title">Quản lý đơn hàng</span>
                    </a>
                </li>
            @endif

            @if(!cache()->has('is_system_off'))

                @if(auth('frontend')->user()->can('view-provider'))
                    <li class="nav-item  ">
                        <a href="{{url('admin/provider')}}" class="nav-link nav-toggle">
                            <i class="icon-users"></i>
                            <span class="title">Quản lý nhà cung cấp</span>
                        </a>
                    </li>
                @endif
            @endif
            @if(!cache()->has('is_system_off'))
                @if(auth('frontend')->user()->can('view-contributor'))
                    <li class="nav-item  ">
                        <a href="{{url('admin/contributor')}}" class="nav-link nav-toggle">
                            <i class="icon-users"></i>
                            <span class="title">Quản lý nhà phân phối</span>
                        </a>
                    </li>
                @endif
            @endif
            @if(!cache()->has('is_system_off'))
                @if(auth('frontend')->user()->can('view-shop'))
                    <li class="nav-item  ">
                        <a href="{{url('admin/shop')}}" class="nav-link nav-toggle">
                            <i class="icon-users"></i>
                            <span class="title">Quản lý shop</span>
                        </a>
                    </li>
                @endif
            @endif
            @if(!cache()->has('is_system_off'))
                @if(auth('frontend')->user()->can('view-customer') || auth('frontend')->user()->can('view-customer-care'))
                    <li class="nav-item  ">
                        <a href="{{url('admin/khach-hang')}}" class="nav-link nav-toggle">
                            <i class="icon-user-following"></i>
                            <span class="title">Quản lý khách hàng</span>
                        </a>
                    </li>

                @endif
            @endif
            @if(auth('frontend')->user()->can('view-potential-customer-care'))
                <li class="nav-item  ">
                    <a href="{{url('admin/khach-hang-tiem-nang')}}?type={{ \App\CustomerLoyalty::LE }}"
                       class="nav-link nav-toggle">
                        <i class="icon-user-following"></i>
                        <span class="title">Khách lẻ tiềm năng</span>

                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{url('admin/khach-hang-tiem-nang')}}?type={{ \App\CustomerLoyalty::SI }}"
                       class="nav-link nav-toggle">
                        <i class="icon-user-following"></i>
                        <span class="title">Khách sỉ tiềm năng</span>

                    </a>
                </li>
            @endif
            @if(auth('frontend')->user()->can('add-album'))
                <li class="nav-item  ">
                    <a href="{{url('admin/album')}}" class="nav-link nav-toggle">
                        <i class="icon-picture"></i>
                        <span class="title">Quản lý album</span>
                    </a>
                </li>
            @endif
            @if(cache()->has('is_system_off'))
                @if(auth('frontend')->user()->can('view-product'))
                    @if(auth('frontend')->user()->type == config('constants.STAFF_WAREHOUSE'))
                        <li class="nav-item  ">
                            <a href="{{url('admin/san-pham')}}" class="nav-link nav-toggle">
                                <i class="icon-present"></i>
                                <span class="title">Quản lý kho CN</span>
                            </a>
                        </li>
                    @else
                        <li class="nav-item  ">
                            <a href="{{url('admin/san-pham')}}" class="nav-link nav-toggle">
                                <i class="icon-present"></i>
                                <span class="title">Quản lý sản phẩm</span>
                            </a>
                        </li>
                    @endif
                @endif
            @endif

            @if(cache()->has('is_system_off'))
                @if(auth('frontend')->user()->id == 32)



                    <li class="nav-item  ">
                        <a href="{{url('admin/chi-nhanh')}}" class="nav-link nav-toggle">
                            <i class="icon-map"></i>
                            <span class="title">Quản lý chi nhánh</span>
                        </a>
                    </li>
                @endif
            @endif

            @if(cache()->has('is_system_off'))

                @if(auth('frontend')->user()->can('view-product-stock-change'))
                    @if(auth('frontend')->user()->type == config('constants.STAFF_WAREHOUSE'))
                        <li class="nav-item  ">
                            <a href="{{url('admin/san-pham-kho')}}" class="nav-link nav-toggle">
                                <i class="icon-calendar"></i>
                                <span class="title">Lịch sử chỉnh kho CN</span>
                            </a>
                        </li>
                    @else
                        <li class="nav-item  ">
                            <a href="{{url('admin/san-pham-kho')}}" class="nav-link nav-toggle">
                                <i class="icon-calendar"></i>
                                <span class="title">Lịch sử chỉnh kho SVH</span>
                            </a>
                        </li>
                    @endif
                @endif
            @endif

            @if(cache()->has('is_system_off'))
                @if(auth('frontend')->user()->can('view-warehouse-product-total'))
                    <li class="nav-item  ">
                        <a href="{{url('admin/san-pham')}}?total=true" class="nav-link nav-toggle">
                            <i class="icon-notebook"></i>
                            <span class="title">Xem tổng hợp kho</span>

                        </a>
                    </li>
                @endif
            @endif

            @if(cache()->has('is_system_off'))

                @if(auth('frontend')->user()->type == config('constants.STAFF_WAREHOUSE'))
                    <li class="nav-item  ">
                        <a href="{{url('admin/thu-chi')}}" class="nav-link nav-toggle">
                            <i class="icon-credit-card"></i>
                            <span class="title">Quản lý quỹ CN</span>

                        </a>
                    </li>
                @endif
            @endif

            @if(auth('frontend')->user()->can('view-bo-san-pham'))
                <li class="nav-item  ">
                    <a href="{{url('admin/bo-san-pham')}}" class="nav-link nav-toggle">
                        <i class="icon-drawer"></i>
                        <span class="title">Quản lý bộ sản phẩm</span>
                    </a>
                </li>
            @endif
            @if(auth('frontend')->user()->can('view-department'))

                <li class="nav-item  ">
                    <a href="{{url('admin/gian-hang')}}" class="nav-link ">
                        <i class="icon-badge"></i>
                        <span class="title">Quản lý thương hiệu</span>
                    </a>
                </li>
            @endif
            @if(auth('frontend')->user()->can('view-industry'))
                <li class="nav-item  ">
                    <a href="{{ url('admin/danh-muc?type='.config('constants.MDT_CAT')).'&rank='.config('constants.NGANH_HANG') }}"
                       class="nav-link ">
                        <i class="icon-list"></i>
                        <span class="title">Danh mục ngành hàng</span>
                    </a>
                </li>
            @endif
            @if(auth('frontend')->user()->can('view-group-category'))
                <li class="nav-item  ">
                    <a href="{{ url('admin/danh-muc?type='.config('constants.MDT_CAT')).'&rank='.config('constants.NHOM_DANH_MUC') }}"
                       class="nav-link ">
                        <i class="icon-list"></i>
                        <span class="title">Danh mục chính</span>
                    </a>
                </li>
            @endif
            @if(auth('frontend')->user()->can('view-children-category'))
                <li class="nav-item  ">
                    <a href="{{ url('admin/danh-muc?type='.config('constants.MDT_CAT')).'&rank='.config('constants.DANH_MUC') }}"
                       class="nav-link ">
                        <i class="icon-list"></i>
                        <span class="title">Danh mục con</span>
                    </a>
                </li>
            @endif
            @if(cache()->has('is_system_off'))
                @if(auth('frontend')->user()->can('view-member'))
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-users"></i>
                            <span class="title">Quản lý thành viên</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="{{url('admin/cong-tac-vien')}}" class="nav-link ">
                                    <span class="title">Danh sách</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="{{ url('admin/tao-thanh-vien') }}" class="nav-link ">
                                    <span class="title">Thêm</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                @endif
            @endif
            @if(auth('frontend')->user()->can('edit-introduction'))
                <li class="nav-item  ">
                    <a href="{{ url('admin/huong-dan') }}" class="nav-link nav-toggle">
                        <i class="icon-info"></i>
                        <span class="title">Quản lý thông tin</span>
                    </a>
                </li>
            @endif
            @if(auth('frontend')->user()->can('edit-post'))
                <li class="nav-item  ">
                    <a href="{{ url('admin/dao-tao') }}" class="nav-link nav-toggle">
                        <i class="icon-briefcase"></i>
                        <span class="title">Quản lý đào tạo</span>
                    </a>
                </li>
            @endif


            @if(auth('frontend')->user()->type != config('constants.STAFF_WAREHOUSE'))

                <li class="nav-item  ">
                    <a href="{{url('cong-dong')}}" class="nav-link nav-toggle">
                        <i class="icon-like"></i>
                        <span class="title">Phản hồi khách hàng</span>
                    </a>
                    @endif
                    {{--<ul class="sub-menu">--}}
                    {{--<li class="nav-item  ">--}}
                    {{--<a href="portlet_boxed.html" class="nav-link ">--}}
                    {{--<span class="title">Danh sách</span>--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item  ">--}}
                    {{--<a href="portlet_light.html" class="nav-link ">--}}
                    {{--<span class="title">Thêm</span>--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--</ul>--}}
                </li>

                @if(auth('frontend')->user()->can('view-hotface'))
                    <li class="nav-item  ">
                        <a href="{{ url('admin/hotface') }}" class="nav-link nav-toggle">
                            <i class="icon-user-follow"></i>
                            <span class="title">Quản lý hotface</span>

                        </a>
                    </li>
                @endif
                @if(auth('frontend')->user()->id == 32)
                    <li class="nav-item  ">
                        <a href="{{ url('admin/press') }}" class="nav-link nav-toggle">
                            <i class="icon-link"></i>
                            <span class="title">Quản lý báo chí</span>

                        </a>
                    </li>
                @endif

                @if(auth('frontend')->user()->can('edit-notification'))
                    <li class="nav-item  ">
                        <a href="{{ url('admin/thong-bao') }}" class="nav-link nav-toggle">
                            <i class="icon-energy"></i>
                            <span class="title">Quản lý thông báo</span>

                        </a>
                    </li>
                @endif

                @if(auth('frontend')->user()->id == 32)
                    <li class="nav-item  ">
                        <a href="{{ url('admin/album') }}" class="nav-link nav-toggle">
                            <i class="icon-picture"></i>
                            <span class="title">Quản lý album</span>

                        </a>
                    </li>
                @endif

                @if(cache()->has('is_system_off'))
                    @if(auth('frontend')->user()->type != config('constants.STAFF_WAREHOUSE'))

                        <li class="nav-item">
                            <a target="_blank" href="{{url('tin-tuc')}}" class="nav-link nav-toggle">
                                <i class="icon-docs"></i>
                                <span class="title">Xem đào tạo</span>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/tim-thanh-vien')}}" class="nav-link nav-toggle">
                                <i class="icon-eyeglasses"></i>
                                <span class="title">Tìm thành viên</span>

                            </a>
                        </li>
                    @endif
                @endif

                {{--@if(auth('frontend')->user()->can('edit-feedback'))--}}
                {{--<li class="nav-item  ">--}}
                {{--<a href="{{url('admin/phan-hoi')}}" class="nav-link nav-toggle">--}}
                {{--<i class="icon-pointer"></i>--}}
                {{--<span class="title">Quản lý ý kiến phản hồi</span>--}}
                {{--<span class="arrow"></span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--@endif--}}

                {{--<li class="nav-item  ">--}}
                {{--<a href="{{url('admin/them-phan-hoi')}}" class="nav-link nav-toggle">--}}
                {{--<i class="icon-pointer"></i>--}}
                {{--<span class="title">Hòm thư ý kiến phản hồi</span>--}}
                {{--<span class="arrow"></span>--}}
                {{--</a>--}}
                {{--</li>--}}

                {{--<li class="nav-item  ">--}}
                {{--<a href="javascript:;" class="nav-link nav-toggle">--}}
                {{--<i class="icon-pointer"></i>--}}
                {{--<span class="title">Đề xuất sản phẩm</span>--}}
                {{--<span class="arrow"></span>--}}
                {{--</a>--}}
                {{--<ul class="sub-menu">--}}
                {{--<li class="nav-item  ">--}}
                {{--<a href="{{ url('admin/danh-sach-san-pham-de-xuat') }}" class="nav-link ">--}}
                {{--<span class="title">Danh sách</span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item  ">--}}
                {{--<a href="{{ url('admin/them-san-pham-de-xuat') }}" class="nav-link ">--}}
                {{--<span class="title">Thêm</span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--@if(auth('frontend')->user()->can('edit-banner'))--}}
                {{--<li class="nav-item  ">--}}
                {{--<a href="javascript:;" class="nav-link nav-toggle">--}}
                {{--<i class="icon-settings"></i>--}}
                {{--<span class="title">Banner</span>--}}
                {{--<span class="arrow"></span>--}}
                {{--</a>--}}
                {{--<ul class="sub-menu">--}}
                {{--<li class="nav-item  ">--}}
                {{--<a href="{{url('admin/danh-sach-banner')}}" class="nav-link ">--}}
                {{--<span class="title">Danh sách</span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item  ">--}}
                {{--<a href="{{ url('admin/them-banner') }}" class="nav-link ">--}}
                {{--<span class="title">Thêm</span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--@endif--}}

                @if(auth('frontend')->user()->can('edit-setting'))

                    {{--<li class="nav-item  ">--}}
                    {{--<a href="{{ url('admin/cai-dat') }}" class="nav-link">--}}
                    {{--<i class="icon-settings"></i>--}}
                    {{--<span class="title">Cài đặt</span>--}}

                    {{--</a>--}}
                    {{--</li>--}}

                    {{--<li class="nav-item  ">--}}
                    {{--<a href="{{ url('admin/hoi-dap') }}" class="nav-link">--}}
                    {{--<i class="icon-settings"></i>--}}
                    {{--<span class="title">Quản lý hỏi đáp</span>--}}
                    {{--<span class="arrow"></span>--}}
                    {{--</a>--}}
                    {{--</li>--}}

                    {{--<li class="nav-item  ">--}}
                    {{--<a href="{{ url('admin/tu-ngu-nhay-cam') }}" class="nav-link">--}}
                    {{--<i class="icon-settings"></i>--}}
                    {{--<span class="title">Quản lý từ ngữ xấu</span>--}}
                    {{--<span class="arrow"></span>--}}
                    {{--</a>--}}
                    {{--</li>--}}

                @endif
        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>