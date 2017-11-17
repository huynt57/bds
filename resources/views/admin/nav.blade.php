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

            <li class="nav-item  ">
                <a href="{{ url('admin') }}" class="nav-link nav-toggle">
                    <i class="fa fa-tachometer"></i>
                    <span class="title">Bảng điều khiển</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{ url('admin/menu') }}" class="nav-link nav-toggle">
                    <i class="fa fa-bars"></i>
                    <span class="title">Quản lý menu</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{ url('admin/category') }}" class="nav-link nav-toggle">
                    <i class="fa fa-tasks"></i>
                    <span class="title">Quản lý danh mục</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title">Quản lý người dùng</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{ url('admin/user/list') }}" class="nav-link ">
                            <span class="title">Danh sách</span>
                        </a>
                    </li>

                    <li class="nav-item  ">
                        <a href="{{ url('admin/user/create') }}" class="nav-link ">
                            <span class="title">Thêm mới</span>
                        </a>
                    </li>


                </ul>
            </li>
            <li class="nav-item  ">
                <a href="{{ url('admin/investor/list') }}" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title">Quản lý nhà đầu tư - đối tác</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-home"></i>
                    <span class="title">Quản lý danh sách nhà</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{url('admin/house/list')}}" class="nav-link ">
                            <span class="title">Danh sách</span>
                        </a>
                    </li>

                    <li class="nav-item  ">
                        <a href="{{ url('admin/house/create') }}" class="nav-link ">
                            <span class="title">Thêm mới</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-folder"></i>
                    <span class="title">Quản lý dự án</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{url('admin/project/list')}}" class="nav-link ">
                            <span class="title">Danh sách</span>
                        </a>
                    </li>

                    <li class="nav-item  ">
                        <a href="{{ url('admin/project/create') }}" class="nav-link ">
                            <span class="title">Thêm mới</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item  ">
                <a href="{{ url('admin/house/region') }}" class="nav-link nav-toggle">
                    <i class="fa fa-map"></i>
                    <span class="title">BĐS theo khu vực</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-cogs"></i>
                    <span class="title">Quản lý cài đặt</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{url('admin/settings/list')}}" class="nav-link ">
                            <span class="title">Cấu hình chung</span>
                        </a>
                    </li>

                    <li class="nav-item  ">
                        <a href="{{ url('admin/settings/slides') }}" class="nav-link ">
                            <span class="title">Slides trang chủ</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ url('admin/settings/testimonials') }}" class="nav-link ">
                            <span class="title">Cảm nhận khách hàng</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="{{ url('admin/contact') }}" class="nav-link nav-toggle">
                    <i class="fa fa-envelope"></i>
                    <span class="title">Quản lý thông tin liên hệ</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-newspaper-o"></i>
                    <span class="title">Quản lý bài viết</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{url('admin/post/list')}}" class="nav-link ">
                            <span class="title">Danh sách</span>
                        </a>
                    </li>

                    <li class="nav-item  ">
                        <a href="{{ url('admin/post/create') }}" class="nav-link ">
                            <span class="title">Thêm mới</span>
                        </a>
                    </li>

                </ul>
            </li>


            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-user"></i>
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
                        <a href="{{ url('admin/logout') }}" class="nav-link ">
                            <span class="title">Thoát</span>
                        </a>
                    </li>

                </ul>
            </li>

        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>