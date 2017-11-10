@extends('admin')

@section('content')

    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title"> Bảng điều khiển admin Viethouse24
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <!-- BEGIN DASHBOARD STATS 1-->
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 blue" href="{{ url('admin/house/list') }}">
                <div class="visual">
                    <i class="fa fa-comments"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="{{ $houses }}">{{ $houses }}</span>
                    </div>
                    <div class="desc"> Tổng số nhà</div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 yellow" href="{{ url('admin/project/list') }}">
                <div class="visual">
                    <i class="fa fa-comments"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="{{ $projects }}">{{ $projects }}</span>
                    </div>
                    <div class="desc"> Tổng số dự án</div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 red" href="{{ url('admin/user/list') }}">
                <div class="visual">
                    <i class="fa fa-bar-chart-o"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="{{ $users }}">{{ $users }}</span>
                    </div>
                    <div class="desc"> Tổng người dùng hệ thống</div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 green" href="{{ url('admin/contact') }}">
                <div class="visual">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="{{ $contacts }}">{{ $contacts }}</span>
                    </div>
                    <div class="desc"> Tổng liên hệ khách hàng</div>
                </div>
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- END DASHBOARD STATS 1-->
    <div class="row">
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <!-- BEGIN PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bar-chart font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Nhà đăng gần đây</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Ảnh</th>
                                <th> Tên nhà </th>
                                <th> Địa chỉ </th>
                                <th> Loại nhà </th>
                                <th> Trạng thái </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($houseLists as $houseList)
                            <tr>
                                <td> <img src="{{ $houseList->main_images }}" style="max-width: 150px" /> </td>
                                <td> {{ $houseList->name }} </td>
                                <td> {{ $houseList->address }} </td>
                                <td> {{ $houseList->type }} </td>
                                <td>
                                    {{ $houseList->status }}
                                </td>
                            </tr>
                           @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <!-- BEGIN PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bar-chart font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Liên hệ khách hàng gần đây</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th> Tên </th>
                                <th> SĐT </th>
                                <th> Yêu cầu </th>
                                <th> Trạng thái </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contactLists as $contactList)
                                <tr>
                                    <td> {{ $contactList->name }} </td>
                                    <td> {{ $contactList->phone }} </td>
                                    <td> {{ $contactList->message }} </td>
                                    <td>
                                        {{ $contactList->status }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END PORTLET-->
        </div>

    </div>
    <div class="row">
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <!-- BEGIN PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bar-chart font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Dự án gần đây</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Ảnh</th>
                                <th> Tên nhà </th>
                                <th> Địa chỉ </th>
                                <th> Loại nhà </th>
                                <th> Trạng thái </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projectLists as $projectList)
                                <tr>
                                    <td> <img src="{{ $projectList->main_images }}" style="max-width: 150px" /> </td>
                                    <td> {{ $projectList->name }} </td>
                                    <td> {{ $projectList->address }} </td>
                                    <td> {{ $projectList->type }} </td>
                                    <td>
                                        {{ $projectList->status }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <!-- BEGIN PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bar-chart font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Người dùng mới nhất</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th> Ảnh </th>
                                <th> Tên </th>
                                <th> SĐT </th>
                                <th> Loại </th>
                                <th> Trạng thái </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($userLists as $userList)
                                <tr>
                                    <td> <img src="/files/{{ $userList->image }}" style="max-width: 150px" /> </td>
                                    <td> {{ $userList->name }} </td>
                                    <td> {{ $userList->phone }} </td>
                                    <td> {{ $userList->type }} </td>
                                    <td> {{ $userList->status }} </td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END PORTLET-->
        </div>

    </div>

@endsection