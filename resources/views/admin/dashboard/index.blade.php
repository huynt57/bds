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
            <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                <div class="visual">
                    <i class="fa fa-comments"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="1349">1349</span>
                    </div>
                    <div class="desc"> Tổng số nhà</div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                <div class="visual">
                    <i class="fa fa-bar-chart-o"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="12,5">12,5</span>M$
                    </div>
                    <div class="desc"> Tổng người dùng hệ thống</div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                <div class="visual">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="549">549</span>
                    </div>
                    <div class="desc"> New Orders</div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                <div class="visual">
                    <i class="fa fa-globe"></i>
                </div>
                <div class="details">
                    <div class="number"> +
                        <span data-counter="counterup" data-value="89">89</span>%
                    </div>
                    <div class="desc"> Brand Popularity</div>
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
                        <span class="caption-subject font-dark bold uppercase">Site Visits</span>
                        <span class="caption-helper">weekly stats...</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                            <label class="btn red btn-outline btn-circle btn-sm active">
                                <input type="radio" name="options" class="toggle" id="option1">New</label>
                            <label class="btn red btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Returning</label>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="site_statistics_loading" style="display: none;">
                        <img src="../assets/global/img/loading.gif" alt="loading"></div>
                    <div id="site_statistics_content" class="display-none" style="display: block;">
                        <div id="site_statistics" class="chart" style="padding: 0px; position: relative;">
                            <canvas class="flot-base" width="757" height="300"
                                    style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 757px; height: 300px;"></canvas>
                            <div class="flot-text"
                                 style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                <div class="flot-x-axis flot-x1-axis xAxis x1Axis"
                                     style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                    <div style="position: absolute; max-width: 84px; top: 285px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 10px; text-align: center;">
                                        02/2013
                                    </div>
                                    <div style="position: absolute; max-width: 84px; top: 285px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 98px; text-align: center;">
                                        03/2013
                                    </div>
                                    <div style="position: absolute; max-width: 84px; top: 285px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 186px; text-align: center;">
                                        04/2013
                                    </div>
                                    <div style="position: absolute; max-width: 84px; top: 285px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 274px; text-align: center;">
                                        05/2013
                                    </div>
                                    <div style="position: absolute; max-width: 84px; top: 285px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 363px; text-align: center;">
                                        06/2013
                                    </div>
                                    <div style="position: absolute; max-width: 84px; top: 285px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 451px; text-align: center;">
                                        07/2013
                                    </div>
                                    <div style="position: absolute; max-width: 84px; top: 285px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 539px; text-align: center;">
                                        08/2013
                                    </div>
                                    <div style="position: absolute; max-width: 84px; top: 285px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 627px; text-align: center;">
                                        09/2013
                                    </div>
                                    <div style="position: absolute; max-width: 84px; top: 285px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 715px; text-align: center;">
                                        10/2013
                                    </div>
                                </div>
                                <div class="flot-y-axis flot-y1-axis yAxis y1Axis"
                                     style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                    <div style="position: absolute; top: 273px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 20px; text-align: right;">
                                        0
                                    </div>
                                    <div style="position: absolute; top: 220px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 1px; text-align: right;">
                                        1000
                                    </div>
                                    <div style="position: absolute; top: 166px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 1px; text-align: right;">
                                        2000
                                    </div>
                                    <div style="position: absolute; top: 113px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 1px; text-align: right;">
                                        3000
                                    </div>
                                    <div style="position: absolute; top: 59px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 1px; text-align: right;">
                                        4000
                                    </div>
                                    <div style="position: absolute; top: 6px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 1px; text-align: right;">
                                        5000
                                    </div>
                                </div>
                            </div>
                            <canvas class="flot-overlay" width="757" height="300"
                                    style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 757px; height: 300px;"></canvas>
                        </div>
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
                        <i class="icon-share font-red-sunglo hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Revenue</span>
                        <span class="caption-helper">monthly stats...</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <a href="#" class="btn dark btn-outline btn-circle btn-sm dropdown-toggle"
                               data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Filter Range
                                <span class="fa fa-angle-down"> </span>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;"> Q1 2014
                                        <span class="label label-sm label-default"> past </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;"> Q2 2014
                                        <span class="label label-sm label-default"> past </span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="javascript:;"> Q3 2014
                                        <span class="label label-sm label-success"> current </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;"> Q4 2014
                                        <span class="label label-sm label-warning"> upcoming </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="site_activities_loading" style="display: none;">
                        <img src="../assets/global/img/loading.gif" alt="loading"></div>
                    <div id="site_activities_content" class="display-none" style="display: block;">
                        <div id="site_activities" style="height: 228px; padding: 0px; position: relative;">
                            <canvas class="flot-base" width="757" height="228"
                                    style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 757px; height: 228px;"></canvas>
                            <div class="flot-text"
                                 style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                <div class="flot-x-axis flot-x1-axis xAxis x1Axis"
                                     style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                    <div style="position: absolute; max-width: 75px; top: 209px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 18px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 21px; text-align: center;">
                                        DEC
                                    </div>
                                    <div style="position: absolute; max-width: 75px; top: 209px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 18px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 101px; text-align: center;">
                                        JAN
                                    </div>
                                    <div style="position: absolute; max-width: 75px; top: 209px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 18px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 180px; text-align: center;">
                                        FEB
                                    </div>
                                    <div style="position: absolute; max-width: 75px; top: 209px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 18px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 257px; text-align: center;">
                                        MAR
                                    </div>
                                    <div style="position: absolute; max-width: 75px; top: 209px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 18px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 338px; text-align: center;">
                                        APR
                                    </div>
                                    <div style="position: absolute; max-width: 75px; top: 209px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 18px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 416px; text-align: center;">
                                        MAY
                                    </div>
                                    <div style="position: absolute; max-width: 75px; top: 209px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 18px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 498px; text-align: center;">
                                        JUN
                                    </div>
                                    <div style="position: absolute; max-width: 75px; top: 209px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 18px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 578px; text-align: center;">
                                        JUL
                                    </div>
                                    <div style="position: absolute; max-width: 75px; top: 209px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 18px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 654px; text-align: center;">
                                        AUG
                                    </div>
                                    <div style="position: absolute; max-width: 75px; top: 209px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 18px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 736px; text-align: center;">
                                        SEP
                                    </div>
                                </div>
                                <div class="flot-y-axis flot-y1-axis yAxis y1Axis"
                                     style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                    <div style="position: absolute; top: 197px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 20px; text-align: right;">
                                        0
                                    </div>
                                    <div style="position: absolute; top: 149px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 7px; text-align: right;">
                                        500
                                    </div>
                                    <div style="position: absolute; top: 100px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 1px; text-align: right;">
                                        1000
                                    </div>
                                    <div style="position: absolute; top: 52px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 1px; text-align: right;">
                                        1500
                                    </div>
                                    <div style="position: absolute; top: 3px; font-style: normal; font-variant: small-caps; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 14px; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(111, 123, 138); left: 1px; text-align: right;">
                                        2000
                                    </div>
                                </div>
                            </div>
                            <canvas class="flot-overlay" width="757" height="228"
                                    style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 757px; height: 228px;"></canvas>
                        </div>
                    </div>
                    <div style="margin: 20px 0 10px 30px">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                <span class="label label-sm label-success"> Revenue: </span>
                                <h3>$13,234</h3>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                <span class="label label-sm label-info"> Tax: </span>
                                <h3>$134,900</h3>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                <span class="label label-sm label-danger"> Shipment: </span>
                                <h3>$1,134</h3>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                <span class="label label-sm label-warning"> Orders: </span>
                                <h3>235090</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <div class="portlet light bordered">
                <div class="portlet-title tabbable-line">
                    <div class="caption">
                        <i class="icon-bubbles font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Comments</span>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#portlet_comments_1" data-toggle="tab"> Pending </a>
                        </li>
                        <li>
                            <a href="#portlet_comments_2" data-toggle="tab"> Approved </a>
                        </li>
                    </ul>
                </div>
                <div class="portlet-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="portlet_comments_1">
                            <!-- BEGIN: Comments -->
                            <div class="mt-comments">
                                <div class="mt-comment">
                                    <div class="mt-comment-img">
                                        <img src="../assets/pages/media/users/avatar1.jpg"></div>
                                    <div class="mt-comment-body">
                                        <div class="mt-comment-info">
                                            <span class="mt-comment-author">Michael Baker</span>
                                            <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                        </div>
                                        <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry.
                                        </div>
                                        <div class="mt-comment-details">
                                            <span class="mt-comment-status mt-comment-status-pending">Pending</span>
                                            <ul class="mt-comment-actions">
                                                <li>
                                                    <a href="#">Quick Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#">View</a>
                                                </li>
                                                <li>
                                                    <a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-comment">
                                    <div class="mt-comment-img">
                                        <img src="../assets/pages/media/users/avatar6.jpg"></div>
                                    <div class="mt-comment-body">
                                        <div class="mt-comment-info">
                                            <span class="mt-comment-author">Larisa Maskalyova</span>
                                            <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                        </div>
                                        <div class="mt-comment-text"> It is a long established fact that a reader will
                                            be distracted.
                                        </div>
                                        <div class="mt-comment-details">
                                            <span class="mt-comment-status mt-comment-status-rejected">Rejected</span>
                                            <ul class="mt-comment-actions">
                                                <li>
                                                    <a href="#">Quick Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#">View</a>
                                                </li>
                                                <li>
                                                    <a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-comment">
                                    <div class="mt-comment-img">
                                        <img src="../assets/pages/media/users/avatar8.jpg"></div>
                                    <div class="mt-comment-body">
                                        <div class="mt-comment-info">
                                            <span class="mt-comment-author">Natasha Kim</span>
                                            <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                        </div>
                                        <div class="mt-comment-text"> The generated Lorem or non-characteristic Ipsum is
                                            therefore or non-characteristic.
                                        </div>
                                        <div class="mt-comment-details">
                                            <span class="mt-comment-status mt-comment-status-pending">Pending</span>
                                            <ul class="mt-comment-actions">
                                                <li>
                                                    <a href="#">Quick Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#">View</a>
                                                </li>
                                                <li>
                                                    <a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-comment">
                                    <div class="mt-comment-img">
                                        <img src="../assets/pages/media/users/avatar4.jpg"></div>
                                    <div class="mt-comment-body">
                                        <div class="mt-comment-info">
                                            <span class="mt-comment-author">Sebastian Davidson</span>
                                            <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                        </div>
                                        <div class="mt-comment-text"> The standard chunk of Lorem or non-characteristic
                                            Ipsum used since the 1500s or non-characteristic.
                                        </div>
                                        <div class="mt-comment-details">
                                            <span class="mt-comment-status mt-comment-status-rejected">Rejected</span>
                                            <ul class="mt-comment-actions">
                                                <li>
                                                    <a href="#">Quick Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#">View</a>
                                                </li>
                                                <li>
                                                    <a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Comments -->
                        </div>
                        <div class="tab-pane" id="portlet_comments_2">
                            <!-- BEGIN: Comments -->
                            <div class="mt-comments">
                                <div class="mt-comment">
                                    <div class="mt-comment-img">
                                        <img src="../assets/pages/media/users/avatar4.jpg"></div>
                                    <div class="mt-comment-body">
                                        <div class="mt-comment-info">
                                            <span class="mt-comment-author">Michael Baker</span>
                                            <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                        </div>
                                        <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum has been the industry's standard
                                            dummy.
                                        </div>
                                        <div class="mt-comment-details">
                                            <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                            <ul class="mt-comment-actions">
                                                <li>
                                                    <a href="#">Quick Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#">View</a>
                                                </li>
                                                <li>
                                                    <a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-comment">
                                    <div class="mt-comment-img">
                                        <img src="../assets/pages/media/users/avatar8.jpg"></div>
                                    <div class="mt-comment-body">
                                        <div class="mt-comment-info">
                                            <span class="mt-comment-author">Larisa Maskalyova</span>
                                            <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                        </div>
                                        <div class="mt-comment-text"> It is a long established fact that a reader will
                                            be distracted by.
                                        </div>
                                        <div class="mt-comment-details">
                                            <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                            <ul class="mt-comment-actions">
                                                <li>
                                                    <a href="#">Quick Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#">View</a>
                                                </li>
                                                <li>
                                                    <a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-comment">
                                    <div class="mt-comment-img">
                                        <img src="../assets/pages/media/users/avatar6.jpg"></div>
                                    <div class="mt-comment-body">
                                        <div class="mt-comment-info">
                                            <span class="mt-comment-author">Natasha Kim</span>
                                            <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                        </div>
                                        <div class="mt-comment-text"> The generated Lorem Ipsum is therefore always free
                                            from repetition, injected humour, or non-characteristic words etc.
                                        </div>
                                        <div class="mt-comment-details">
                                            <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                            <ul class="mt-comment-actions">
                                                <li>
                                                    <a href="#">Quick Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#">View</a>
                                                </li>
                                                <li>
                                                    <a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-comment">
                                    <div class="mt-comment-img">
                                        <img src="../assets/pages/media/users/avatar1.jpg"></div>
                                    <div class="mt-comment-body">
                                        <div class="mt-comment-info">
                                            <span class="mt-comment-author">Sebastian Davidson</span>
                                            <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                        </div>
                                        <div class="mt-comment-text"> The standard chunk of Lorem Ipsum used since the
                                            1500s
                                        </div>
                                        <div class="mt-comment-details">
                                            <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                            <ul class="mt-comment-actions">
                                                <li>
                                                    <a href="#">Quick Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#">View</a>
                                                </li>
                                                <li>
                                                    <a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Comments -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <div class="portlet light bordered">
                <div class="portlet-title tabbable-line">
                    <div class="caption">
                        <i class=" icon-social-twitter font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Quick Actions</span>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab_actions_pending" data-toggle="tab"> Pending </a>
                        </li>
                        <li>
                            <a href="#tab_actions_completed" data-toggle="tab"> Completed </a>
                        </li>
                    </ul>
                </div>
                <div class="portlet-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_actions_pending">
                            <!-- BEGIN: Actions -->
                            <div class="mt-actions">
                                <div class="mt-action">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar10.jpg"></div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">
                                                <div class="mt-action-icon ">
                                                    <i class="icon-magnet"></i>
                                                </div>
                                                <div class="mt-action-details ">
                                                    <span class="mt-action-author">Natasha Kim</span>
                                                    <p class="mt-action-desc">Dummy text of the printing</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt-action-date">3 jun</span>
                                                <span class="mt-action-dot bg-green"></span>
                                                <span class="mt=action-time">9:30-13:00</span>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-outline green btn-sm">Appove
                                                    </button>
                                                    <button type="button" class="btn btn-outline red btn-sm">Reject
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-action">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar3.jpg"></div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">
                                                <div class="mt-action-icon ">
                                                    <i class=" icon-bubbles"></i>
                                                </div>
                                                <div class="mt-action-details ">
                                                    <span class="mt-action-author">Gavin Bond</span>
                                                    <p class="mt-action-desc">pending for approval</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt-action-date">3 jun</span>
                                                <span class="mt-action-dot bg-red"></span>
                                                <span class="mt=action-time">9:30-13:00</span>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-outline green btn-sm">Appove
                                                    </button>
                                                    <button type="button" class="btn btn-outline red btn-sm">Reject
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-action">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar2.jpg"></div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">
                                                <div class="mt-action-icon ">
                                                    <i class="icon-call-in"></i>
                                                </div>
                                                <div class="mt-action-details ">
                                                    <span class="mt-action-author">Diana Berri</span>
                                                    <p class="mt-action-desc">Lorem Ipsum is simply dummy text</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt-action-date">3 jun</span>
                                                <span class="mt-action-dot bg-green"></span>
                                                <span class="mt=action-time">9:30-13:00</span>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-outline green btn-sm">Appove
                                                    </button>
                                                    <button type="button" class="btn btn-outline red btn-sm">Reject
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-action">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar7.jpg"></div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">
                                                <div class="mt-action-icon ">
                                                    <i class=" icon-bell"></i>
                                                </div>
                                                <div class="mt-action-details ">
                                                    <span class="mt-action-author">John Clark</span>
                                                    <p class="mt-action-desc">Text of the printing and typesetting
                                                        industry</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt-action-date">3 jun</span>
                                                <span class="mt-action-dot bg-red"></span>
                                                <span class="mt=action-time">9:30-13:00</span>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-outline green btn-sm">Appove
                                                    </button>
                                                    <button type="button" class="btn btn-outline red btn-sm">Reject
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-action">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar8.jpg"></div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">
                                                <div class="mt-action-icon ">
                                                    <i class="icon-magnet"></i>
                                                </div>
                                                <div class="mt-action-details ">
                                                    <span class="mt-action-author">Donna Clarkson </span>
                                                    <p class="mt-action-desc">Simply dummy text of the printing</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt-action-date">3 jun</span>
                                                <span class="mt-action-dot bg-green"></span>
                                                <span class="mt=action-time">9:30-13:00</span>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-outline green btn-sm">Appove
                                                    </button>
                                                    <button type="button" class="btn btn-outline red btn-sm">Reject
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-action">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar9.jpg"></div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">
                                                <div class="mt-action-icon ">
                                                    <i class="icon-magnet"></i>
                                                </div>
                                                <div class="mt-action-details ">
                                                    <span class="mt-action-author">Tom Larson</span>
                                                    <p class="mt-action-desc">Lorem Ipsum is simply dummy text</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt-action-date">3 jun</span>
                                                <span class="mt-action-dot bg-green"></span>
                                                <span class="mt=action-time">9:30-13:00</span>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-outline green btn-sm">Appove
                                                    </button>
                                                    <button type="button" class="btn btn-outline red btn-sm">Reject
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Actions -->
                        </div>
                        <div class="tab-pane" id="tab_actions_completed">
                            <!-- BEGIN:Completed-->
                            <div class="mt-actions">
                                <div class="mt-action">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar1.jpg"></div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">
                                                <div class="mt-action-icon ">
                                                    <i class="icon-action-redo"></i>
                                                </div>
                                                <div class="mt-action-details ">
                                                    <span class="mt-action-author">Frank Cameron</span>
                                                    <p class="mt-action-desc">Lorem Ipsum is simply dummy</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt-action-date">3 jun</span>
                                                <span class="mt-action-dot bg-red"></span>
                                                <span class="mt=action-time">9:30-13:00</span>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-outline green btn-sm">Appove
                                                    </button>
                                                    <button type="button" class="btn btn-outline red btn-sm">Reject
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-action">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar8.jpg"></div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">
                                                <div class="mt-action-icon ">
                                                    <i class="icon-cup"></i>
                                                </div>
                                                <div class="mt-action-details ">
                                                    <span class="mt-action-author">Ella Davidson </span>
                                                    <p class="mt-action-desc">Text of the printing and typesetting
                                                        industry</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt-action-date">3 jun</span>
                                                <span class="mt-action-dot bg-green"></span>
                                                <span class="mt=action-time">9:30-13:00</span>
                                            </div>
                                            <div class="mt-action-buttons">
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-outline green btn-sm">Appove
                                                    </button>
                                                    <button type="button" class="btn btn-outline red btn-sm">Reject
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-action">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar5.jpg"></div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">
                                                <div class="mt-action-icon ">
                                                    <i class=" icon-graduation"></i>
                                                </div>
                                                <div class="mt-action-details ">
                                                    <span class="mt-action-author">Jason Dickens </span>
                                                    <p class="mt-action-desc">Dummy text of the printing and typesetting
                                                        industry</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt-action-date">3 jun</span>
                                                <span class="mt-action-dot bg-red"></span>
                                                <span class="mt=action-time">9:30-13:00</span>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-outline green btn-sm">Appove
                                                    </button>
                                                    <button type="button" class="btn btn-outline red btn-sm">Reject
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-action">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar2.jpg"></div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">
                                                <div class="mt-action-icon ">
                                                    <i class="icon-badge"></i>
                                                </div>
                                                <div class="mt-action-details ">
                                                    <span class="mt-action-author">Jan Kim</span>
                                                    <p class="mt-action-desc">Lorem Ipsum is simply dummy</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt-action-date">3 jun</span>
                                                <span class="mt-action-dot bg-green"></span>
                                                <span class="mt=action-time">9:30-13:00</span>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div class="btn-group btn-group-circle">
                                                    <button type="button" class="btn btn-outline green btn-sm">Appove
                                                    </button>
                                                    <button type="button" class="btn btn-outline red btn-sm">Reject
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Completed -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-directions font-green hide"></i>
                        <span class="caption-subject bold font-dark uppercase "> Activities</span>
                        <span class="caption-helper">Horizontal Timeline</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <a class="btn blue btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown"
                               data-hover="dropdown" data-close-others="true"> Actions
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;"> Action 1</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="javascript:;">Action 2</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Action 3</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Action 4</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="cd-horizontal-timeline mt-timeline-horizontal loaded" data-spacing="60">
                        <div class="timeline">
                            <div class="events-wrapper">
                                <div class="events" style="width: 1800px;">
                                    <ol>
                                        <li>
                                            <a href="#0" data-date="16/01/2014"
                                               class="border-after-red bg-after-red selected" style="left: 120px;">16
                                                Jan</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="28/02/2014" class="border-after-red bg-after-red"
                                               style="left: 300px;">28 Feb</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="20/04/2014" class="border-after-red bg-after-red"
                                               style="left: 480px;">20 Mar</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="20/05/2014" class="border-after-red bg-after-red"
                                               style="left: 600px;">20 May</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="09/07/2014" class="border-after-red bg-after-red"
                                               style="left: 780px;">09 Jul</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="30/08/2014" class="border-after-red bg-after-red"
                                               style="left: 960px;">30 Aug</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="15/09/2014" class="border-after-red bg-after-red"
                                               style="left: 1020px;">15 Sep</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="01/11/2014" class="border-after-red bg-after-red"
                                               style="left: 1200px;">01 Nov</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="10/12/2014" class="border-after-red bg-after-red"
                                               style="left: 1380px;">10 Dec</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="19/01/2015" class="border-after-red bg-after-red"
                                               style="left: 1500px;">29 Jan</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="03/03/2015" class="border-after-red bg-after-red"
                                               style="left: 1680px;">3 Mar</a>
                                        </li>
                                    </ol>
                                    <span class="filling-line bg-red" aria-hidden="true"
                                          style="transform: scaleX(0.0769271);"></span>
                                </div>
                                <!-- .events -->
                            </div>
                            <!-- .events-wrapper -->
                            <ul class="cd-timeline-navigation mt-ht-nav-icon">
                                <li>
                                    <a href="#0" class="prev inactive btn btn-outline red md-skip">
                                        <i class="fa fa-chevron-left"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="next btn btn-outline red md-skip">
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- .cd-timeline-navigation -->
                        </div>
                        <!-- .timeline -->
                        <div class="events-content">
                            <ol>
                                <li class="selected" data-date="16/01/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">New User</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_3.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">16 January 2014 : 7:45 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod
                                            eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis
                                            eu, mi felis, aliquam at iaculis mi felis, aliquam
                                            at iaculis finibus eu ex. Integer efficitur tincidunt malesuada. Sed sit
                                            amet molestie elit, vel placerat ipsum. Ut consectetur odio non est rhoncus
                                            volutpat.</p>
                                        <a href="javascript:;" class="btn btn-circle red btn-outline">Read More</a>
                                        <a href="javascript:;" class="btn btn-circle btn-icon-only blue">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <a href="javascript:;" class="btn btn-circle btn-icon-only green pull-right">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>
                                </li>
                                <li data-date="28/02/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Sending Shipment</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_3.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Hugh Grant</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">28 February 2014 : 10:15 AM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod
                                            eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis
                                            eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc.
                                            Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet
                                            molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare,
                                            lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras
                                            commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle btn-outline green-jungle">Download
                                            Shipment List</a>
                                        <div class="btn-group dropup pull-right">
                                            <button class="btn btn-circle blue-steel dropdown-toggle" type="button"
                                                    data-toggle="dropdown" data-hover="dropdown"
                                                    data-close-others="true" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li>
                                                    <a href="javascript:;">Action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Another action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Something else here </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="javascript:;">Separated link </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li data-date="20/04/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Blue Chambray</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_1.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue">Rory Matthew</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">20 April 2014 : 10:45 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod
                                            eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis
                                            eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc.
                                            Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet
                                            molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare,
                                            lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras
                                            commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio,
                                            dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa
                                            ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut. </p>
                                        <a href="javascript:;" class="btn btn-circle red">Read More</a>
                                    </div>
                                </li>
                                <li data-date="20/05/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">20 May 2014 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod
                                            eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis
                                            eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc.
                                            Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet
                                            molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare,
                                            lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras
                                            commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                                <li data-date="09/07/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Event Success</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_1.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Matt Goldman</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">9 July 2014 : 8:15 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio,
                                            dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa
                                            ad debitis unde.</p>
                                        <a href="javascript:;" class="btn btn-circle btn-outline purple-medium">View
                                            Summary</a>
                                        <div class="btn-group dropup pull-right">
                                            <button class="btn btn-circle green dropdown-toggle" type="button"
                                                    data-toggle="dropdown" data-hover="dropdown"
                                                    data-close-others="true" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li>
                                                    <a href="javascript:;">Action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Another action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Something else here </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="javascript:;">Separated link </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li data-date="30/08/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Conference Call</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_1.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Rory Matthew</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">30 August 2014 : 5:45 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <img class="timeline-body-img pull-left" src="../assets/pages/media/blog/5.jpg"
                                             alt="">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio,
                                            dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa
                                            ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut. </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio,
                                            dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa
                                            ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut. </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio,
                                            dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa
                                            ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut. </p>
                                        <a href="javascript:;" class="btn btn-circle red">Read More</a>
                                    </div>
                                </li>
                                <li data-date="15/09/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Conference Decision</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_5.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Jessica Wolf</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">15 September 2014 : 8:30 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <img class="timeline-body-img pull-right" src="../assets/pages/media/blog/6.jpg"
                                             alt="">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio,
                                            dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa
                                            ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut.</p>
                                        <a href="javascript:;" class="btn btn-circle green-sharp">Read More</a>
                                    </div>
                                </li>
                                <li data-date="01/11/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">1 November 2014 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod
                                            eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis
                                            eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc.
                                            Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet
                                            molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare,
                                            lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras
                                            commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                                <li data-date="10/12/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">10 December 2015 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod
                                            eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis
                                            eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc.
                                            Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet
                                            molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare,
                                            lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras
                                            commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                                <li data-date="19/01/2015">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">19 January 2015 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod
                                            eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis
                                            eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc.
                                            Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet
                                            molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare,
                                            lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras
                                            commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                                <li data-date="03/03/2015">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">3 March 2015 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod
                                            eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis
                                            eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc.
                                            Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet
                                            molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare,
                                            lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras
                                            commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <!-- .events-content -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-directions font-green hide"></i>
                        <span class="caption-subject bold font-dark uppercase"> Events</span>
                        <span class="caption-helper">Horizontal Timeline</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                            <label class="btn green btn-outline btn-circle btn-sm active">
                                <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                            <label class="btn  green btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Tools</label>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="cd-horizontal-timeline mt-timeline-horizontal loaded" data-spacing="60">
                        <div class="timeline mt-timeline-square">
                            <div class="events-wrapper">
                                <div class="events" style="width: 1800px;">
                                    <ol>
                                        <li>
                                            <a href="#0" data-date="16/01/2014"
                                               class="border-after-blue bg-after-blue selected" style="left: 120px;">Expo
                                                2016</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="28/02/2014" class="border-after-blue bg-after-blue"
                                               style="left: 300px;">New Promo</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="20/04/2014" class="border-after-blue bg-after-blue"
                                               style="left: 480px;">Meeting</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="20/05/2014" class="border-after-blue bg-after-blue"
                                               style="left: 600px;">Launch</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="09/07/2014" class="border-after-blue bg-after-blue"
                                               style="left: 780px;">Party</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="30/08/2014" class="border-after-blue bg-after-blue"
                                               style="left: 960px;">Reports</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="15/09/2014" class="border-after-blue bg-after-blue"
                                               style="left: 1020px;">HR</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="01/11/2014" class="border-after-blue bg-after-blue"
                                               style="left: 1200px;">IPO</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="10/12/2014" class="border-after-blue bg-after-blue"
                                               style="left: 1380px;">Board</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="19/01/2015" class="border-after-blue bg-after-blue"
                                               style="left: 1500px;">Revenue</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="03/03/2015" class="border-after-blue bg-after-blue"
                                               style="left: 1680px;">Dinner</a>
                                        </li>
                                    </ol>
                                    <span class="filling-line bg-blue" aria-hidden="true"
                                          style="transform: scaleX(0.084158);"></span>
                                </div>
                                <!-- .events -->
                            </div>
                            <!-- .events-wrapper -->
                            <ul class="cd-timeline-navigation mt-ht-nav-icon">
                                <li>
                                    <a href="#0" class="prev inactive btn blue md-skip">
                                        <i class="fa fa-chevron-left"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="next btn blue md-skip">
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- .cd-timeline-navigation -->
                        </div>
                        <!-- .timeline -->
                        <div class="events-content">
                            <ol>
                                <li class="selected" data-date="16/01/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Expo 2016 Launch</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Lisa Bold</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">23 February 2014</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod mi
                                            felis, aliquam at iaculis eleifend ipsum, at posuere augue. Pellentesque mi
                                            felis, aliquam at iaculis mi felis, aliquam
                                            at iaculis eu, onsectetur adipiscing elit finibus eu ex. Integer efficitur
                                            leo eget dolor tincidunt, et dignissim risus lacinia. Nam in egestas
                                            onsectetur adipiscing elit nunc. Suspendisse
                                            potenti</p>
                                        <a href="javascript:;" class="btn btn-circle dark btn-outline">Read More</a>
                                        <a href="javascript:;" class="btn btn-circle btn-icon-only green pull-right">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>
                                </li>
                                <li data-date="28/02/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Sending Shipment</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_3.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Hugh Grant</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">28 February 2014 : 10:15 AM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod
                                            eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis
                                            eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc.
                                            Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet
                                            molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare,
                                            lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras
                                            commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle btn-outline green-jungle">Download
                                            Shipment List</a>
                                        <div class="btn-group dropup pull-right">
                                            <button class="btn btn-circle blue-steel dropdown-toggle" type="button"
                                                    data-toggle="dropdown" data-hover="dropdown"
                                                    data-close-others="true" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li>
                                                    <a href="javascript:;">Action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Another action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Something else here </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="javascript:;">Separated link </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li data-date="20/04/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Blue Chambray</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_1.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue">Rory Matthew</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">20 April 2014 : 10:45 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod
                                            eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis
                                            eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc.
                                            Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet
                                            molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare,
                                            lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras
                                            commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio,
                                            dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa
                                            ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut. </p>
                                        <a href="javascript:;" class="btn btn-circle red">Read More</a>
                                    </div>
                                </li>
                                <li data-date="20/05/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">20 May 2014 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod
                                            eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis
                                            eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc.
                                            Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet
                                            molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare,
                                            lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras
                                            commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                                <li data-date="09/07/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Event Success</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_1.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Matt Goldman</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">9 July 2014 : 8:15 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio,
                                            dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa
                                            ad debitis unde.</p>
                                        <a href="javascript:;" class="btn btn-circle btn-outline purple-medium">View
                                            Summary</a>
                                        <div class="btn-group dropup pull-right">
                                            <button class="btn btn-circle green dropdown-toggle" type="button"
                                                    data-toggle="dropdown" data-hover="dropdown"
                                                    data-close-others="true" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li>
                                                    <a href="javascript:;">Action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Another action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Something else here </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="javascript:;">Separated link </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li data-date="30/08/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Conference Call</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_1.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Rory Matthew</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">30 August 2014 : 5:45 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <img class="timeline-body-img pull-left" src="../assets/pages/media/blog/5.jpg"
                                             alt="">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio,
                                            dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa
                                            ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut. </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio,
                                            dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa
                                            ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut. </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio,
                                            dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa
                                            ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut. </p>
                                        <a href="javascript:;" class="btn btn-circle red">Read More</a>
                                    </div>
                                </li>
                                <li data-date="15/09/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Conference Decision</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_5.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Jessica Wolf</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">15 September 2014 : 8:30 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <img class="timeline-body-img pull-right" src="../assets/pages/media/blog/6.jpg"
                                             alt="">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio,
                                            dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa
                                            ad debitis unde? Iste voluptatibus minus veritatis
                                            qui ut.</p>
                                        <a href="javascript:;" class="btn btn-circle green-sharp">Read More</a>
                                    </div>
                                </li>
                                <li data-date="01/11/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">1 November 2014 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod
                                            eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis
                                            eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc.
                                            Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet
                                            molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare,
                                            lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras
                                            commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                                <li data-date="10/12/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">10 December 2014 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod
                                            eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis
                                            eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc.
                                            Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet
                                            molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare,
                                            lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras
                                            commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                                <li data-date="19/01/2015">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">19 January 2015 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod
                                            eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis
                                            eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc.
                                            Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet
                                            molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare,
                                            lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras
                                            commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                                <li data-date="03/03/2015">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">3 March 2015 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod
                                            eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis
                                            eu, finibus eu ex. Integer efficitur leo eget
                                            dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc.
                                            Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet
                                            molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare,
                                            lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras
                                            commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <!-- .events-content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-share font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Recent Activities</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <a class="btn btn-sm blue btn-outline btn-circle" href="javascript:;" data-toggle="dropdown"
                               data-hover="dropdown" data-close-others="true"> Filter By
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                                <label class="mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox"> Finance
                                    <span></span>
                                </label>
                                <label class="mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox" checked=""> Membership
                                    <span></span>
                                </label>
                                <label class="mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox"> Customer Support
                                    <span></span>
                                </label>
                                <label class="mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox" checked=""> HR
                                    <span></span>
                                </label>
                                <label class="mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox"> System
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="slimScrollDiv"
                         style="position: relative; overflow: hidden; width: auto; height: 300px;">
                        <div class="scroller" style="height: 300px; overflow: hidden; width: auto;"
                             data-always-visible="1" data-rail-visible="0" data-initialized="1">
                            <ul class="feeds">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 4 pending tasks.
                                                    <span class="label label-sm label-warning "> Take action
                                                                        <i class="fa fa-share"></i>
                                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> Just now</div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Finance Report for year 2013 has been released.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-danger">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick
                                                    review.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> New order received with
                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 30 mins</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick
                                                    review.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                    <span class="label label-sm label-default "> Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 2 hours</div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-default">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> IPO Report for year 2013 has been released.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 4 pending tasks.
                                                    <span class="label label-sm label-warning "> Take action
                                                                        <i class="fa fa-share"></i>
                                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> Just now</div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-danger">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Finance Report for year 2013 has been released.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick
                                                    review.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> New order received with
                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 30 mins</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick
                                                    review.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-warning">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                    <span class="label label-sm label-default "> Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 2 hours</div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> IPO Report for year 2013 has been released.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="slimScrollBar"
                             style="background: rgb(187, 187, 187); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 186.335px;"></div>
                        <div class="slimScrollRail"
                             style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div>
                    </div>
                    <div class="scroller-footer">
                        <div class="btn-arrow-link pull-right">
                            <a href="javascript:;">See All Records</a>
                            <i class="icon-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <div class="portlet light tasks-widget bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-share font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Tasks</span>
                        <span class="caption-helper">tasks summary...</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <a class="btn blue-oleo btn-circle btn-sm" href="javascript:;" data-toggle="dropdown"
                               data-hover="dropdown" data-close-others="true"> More
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;"> All Project </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="javascript:;"> AirAsia </a>
                                </li>
                                <li>
                                    <a href="javascript:;"> Cruise </a>
                                </li>
                                <li>
                                    <a href="javascript:;"> HSBC </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="javascript:;"> Pending
                                        <span class="badge badge-danger"> 4 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;"> Completed
                                        <span class="badge badge-success"> 12 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;"> Overdue
                                        <span class="badge badge-warning"> 9 </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="task-content">
                        <div class="slimScrollDiv"
                             style="position: relative; overflow: hidden; width: auto; height: 312px;">
                            <div class="scroller" style="height: 312px; overflow: hidden; width: auto;"
                                 data-always-visible="1" data-rail-visible1="1" data-initialized="1">
                                <!-- START TASK LIST -->
                                <ul class="task-list">
                                    <li>
                                        <div class="task-checkbox">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1">
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp"> Present 2013 Year IPO Statistics at Board Meeting </span>
                                            <span class="label label-sm label-success">Company</span>
                                            <span class="task-bell">
                                                                <i class="fa fa-bell-o"></i>
                                                            </span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group">
                                                <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown"
                                                   data-hover="dropdown" data-close-others="true">
                                                    <i class="fa fa-cog"></i>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-check"></i> Complete </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-pencil"></i> Edit </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-trash-o"></i> Cancel </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="task-checkbox">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1">
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp"> Hold An Interview for Marketing Manager Position </span>
                                            <span class="label label-sm label-danger">Marketing</span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group">
                                                <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown"
                                                   data-hover="dropdown" data-close-others="true">
                                                    <i class="fa fa-cog"></i>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-check"></i> Complete </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-pencil"></i> Edit </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-trash-o"></i> Cancel </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="task-checkbox">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1">
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp"> AirAsia Intranet System Project Internal Meeting </span>
                                            <span class="label label-sm label-success">AirAsia</span>
                                            <span class="task-bell">
                                                                <i class="fa fa-bell-o"></i>
                                                            </span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group">
                                                <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown"
                                                   data-hover="dropdown" data-close-others="true">
                                                    <i class="fa fa-cog"></i>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-check"></i> Complete </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-pencil"></i> Edit </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-trash-o"></i> Cancel </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="task-checkbox">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1">
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp"> Technical Management Meeting </span>
                                            <span class="label label-sm label-warning">Company</span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group">
                                                <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown"
                                                   data-hover="dropdown" data-close-others="true">
                                                    <i class="fa fa-cog"></i>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-check"></i> Complete </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-pencil"></i> Edit </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-trash-o"></i> Cancel </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="task-checkbox">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1">
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp"> Kick-off Company CRM Mobile App Development </span>
                                            <span class="label label-sm label-info">Internal Products</span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group">
                                                <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown"
                                                   data-hover="dropdown" data-close-others="true">
                                                    <i class="fa fa-cog"></i>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-check"></i> Complete </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-pencil"></i> Edit </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-trash-o"></i> Cancel </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="task-checkbox">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1">
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp"> Prepare Commercial Offer For SmartVision Website Rewamp </span>
                                            <span class="label label-sm label-danger">SmartVision</span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group">
                                                <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown"
                                                   data-hover="dropdown" data-close-others="true">
                                                    <i class="fa fa-cog"></i>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-check"></i> Complete </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-pencil"></i> Edit </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-trash-o"></i> Cancel </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="task-checkbox">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1">
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp"> Sign-Off The Comercial Agreement With AutoSmart </span>
                                            <span class="label label-sm label-default">AutoSmart</span>
                                            <span class="task-bell">
                                                                <i class="fa fa-bell-o"></i>
                                                            </span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group dropup">
                                                <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown"
                                                   data-hover="dropdown" data-close-others="true">
                                                    <i class="fa fa-cog"></i>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-check"></i> Complete </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-pencil"></i> Edit </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-trash-o"></i> Cancel </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="task-checkbox">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1">
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp"> Company Staff Meeting </span>
                                            <span class="label label-sm label-success">Cruise</span>
                                            <span class="task-bell">
                                                                <i class="fa fa-bell-o"></i>
                                                            </span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group dropup">
                                                <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown"
                                                   data-hover="dropdown" data-close-others="true">
                                                    <i class="fa fa-cog"></i>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-check"></i> Complete </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-pencil"></i> Edit </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-trash-o"></i> Cancel </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="last-line">
                                        <div class="task-checkbox">
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1">
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp"> KeenThemes Investment Discussion </span>
                                            <span class="label label-sm label-warning">KeenThemes </span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group dropup">
                                                <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown"
                                                   data-hover="dropdown" data-close-others="true">
                                                    <i class="fa fa-cog"></i>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-check"></i> Complete </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-pencil"></i> Edit </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-trash-o"></i> Cancel </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- END START TASK LIST -->
                            </div>
                            <div class="slimScrollBar"
                                 style="background: rgb(187, 187, 187); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 271.153px;"></div>
                            <div class="slimScrollRail"
                                 style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div>
                        </div>
                    </div>
                    <div class="task-footer">
                        <div class="btn-arrow-link pull-right">
                            <a href="javascript:;">See All Records</a>
                            <i class="icon-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-cursor font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">General Stats</span>
                    </div>
                    <div class="actions">
                        <a href="javascript:;" class="btn btn-sm btn-circle red easy-pie-chart-reload">
                            <i class="fa fa-repeat"></i> Reload </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="easy-pie-chart">
                                <div class="number transactions" data-percent="55">
                                    <span>+55</span>%
                                    <canvas height="75" width="75"></canvas>
                                </div>
                                <a class="title" href="javascript:;"> Transactions
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="margin-bottom-10 visible-sm"></div>
                        <div class="col-md-4">
                            <div class="easy-pie-chart">
                                <div class="number visits" data-percent="85">
                                    <span>+85</span>%
                                    <canvas height="75" width="75"></canvas>
                                </div>
                                <a class="title" href="javascript:;"> New Visits
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="margin-bottom-10 visible-sm"></div>
                        <div class="col-md-4">
                            <div class="easy-pie-chart">
                                <div class="number bounce" data-percent="46">
                                    <span>-46</span>%
                                    <canvas height="75" width="75"></canvas>
                                </div>
                                <a class="title" href="javascript:;"> Bounce
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Server Stats</span>
                        <span class="caption-helper">monthly stats...</span>
                    </div>
                    <div class="tools">
                        <a href="#" class="collapse" data-original-title="" title=""> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title=""
                           title=""> </a>
                        <a href="#" class="reload" data-original-title="" title=""> </a>
                        <a href="#" class="remove" data-original-title="" title=""> </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="sparkline-chart">
                                <div class="number" id="sparkline_bar5">
                                    <canvas width="113" height="55"
                                            style="display: inline-block; width: 113px; height: 55px; vertical-align: top;"></canvas>
                                </div>
                                <a class="title" href="javascript:;"> Network
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="margin-bottom-10 visible-sm"></div>
                        <div class="col-md-4">
                            <div class="sparkline-chart">
                                <div class="number" id="sparkline_bar6">
                                    <canvas width="107" height="55"
                                            style="display: inline-block; width: 107px; height: 55px; vertical-align: top;"></canvas>
                                </div>
                                <a class="title" href="javascript:;"> CPU Load
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="margin-bottom-10 visible-sm"></div>
                        <div class="col-md-4">
                            <div class="sparkline-chart">
                                <div class="number" id="sparkline_line">
                                    <canvas width="100" height="55"
                                            style="display: inline-block; width: 100px; height: 55px; vertical-align: top;"></canvas>
                                </div>
                                <a class="title" href="javascript:;"> Load Rate
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <!-- BEGIN REGIONAL STATS PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-share font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Regional Stats</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" data-container="false"
                           data-placement="bottom" href="javascript:;" data-original-title="" title=""> </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="region_statistics_loading" style="display: none;">
                        <img src="../assets/global/img/loading.gif" alt="loading"></div>
                    <div id="region_statistics_content" class="display-none" style="display: block;">
                        <div class="btn-toolbar margin-bottom-10">
                            <div class="btn-group btn-group-circle" data-toggle="buttons">
                                <a href="#" class="btn grey-salsa btn-sm active"> Users </a>
                                <a href="#" class="btn grey-salsa btn-sm"> Orders </a>
                            </div>
                            <div class="btn-group pull-right">
                                <a href="#" class="btn btn-circle grey-salsa btn-sm dropdown-toggle"
                                   data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Select Region
                                    <span class="fa fa-angle-down"> </span>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;" id="regional_stat_world"> World </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" id="regional_stat_usa"> USA </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" id="regional_stat_europe"> Europe </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" id="regional_stat_russia"> Russia </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" id="regional_stat_germany"> Germany </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="vmap_world" class="vmaps display-none"
                             style="width: 757px; display: block; position: relative; overflow: hidden;">
                            <svg width="757" height="300">
                                <g transform="scale(0.5454545454545454) translate(218.91666666666674, 0)">
                                    <path d="M781.68,324.4l-2.31,8.68l-12.53,4.23l-3.75-4.4l-1.82,0.5l3.4,13.12l5.09,0.57l6.79,2.57v2.57l3.11-0.57l4.53-6.27v-5.13l2.55-5.13l2.83,0.57l-3.4-7.13l-0.52-4.59L781.68,324.4L781.68,324.4M722.48,317.57l-0.28,2.28l6.79,11.41h1.98l14.15,23.67l5.66,0.57l2.83-8.27l-4.53-2.85l-0.85-4.56L722.48,317.57L722.48,317.57M789.53,349.11l2.26,2.77l-1.47,4.16v0.79h3.34l1.18-10.4l1.08,0.3l1.96,9.5l1.87,0.5l1.77-4.06l-1.77-6.14l-1.47-2.67l4.62-3.37l-1.08-1.49l-4.42,2.87h-1.18l-2.16-3.17l0.69-1.39l3.64-1.78l5.5,1.68l1.67-0.1l4.13-3.86l-1.67-1.68l-3.83,2.97h-2.46l-3.73-1.78l-2.65,0.1l-2.95,4.75l-1.87,8.22L789.53,349.11L789.53,349.11M814.19,330.5l-1.87,4.55l2.95,3.86h0.98l1.28-2.57l0.69-0.89l-1.28-1.39l-1.87-0.69L814.19,330.5L814.19,330.5M819.99,345.45l-4.03,0.89l-1.18,1.29l0.98,1.68l2.65-0.99l1.67-0.99l2.46,1.98l1.08-0.89l-1.96-2.38L819.99,345.45L819.99,345.45M753.17,358.32l-2.75,1.88l0.59,1.58l8.75,1.98l4.42,0.79l1.87,1.98l5.01,0.4l2.36,1.98l2.16-0.5l1.97-1.78l-3.64-1.68l-3.14-2.67l-8.16-1.98L753.17,358.32L753.17,358.32M781.77,366.93l-2.16,1.19l1.28,1.39l3.14-1.19L781.77,366.93L781.77,366.93M785.5,366.04l0.39,1.88l2.26,0.59l0.88-1.09l-0.98-1.49L785.5,366.04L785.5,366.04M790.91,370.99l-2.75,0.4l2.46,2.08h1.96L790.91,370.99L790.91,370.99M791.69,367.72l-0.59,1.19l4.42,0.69l3.44-1.98l-1.96-0.59l-3.14,0.89l-1.18-0.99L791.69,367.72L791.69,367.72M831.93,339.34l-4.17,0.47l-2.68,1.96l1.11,2.24l4.54,0.84v0.84l-2.87,2.33l1.39,4.85l1.39,0.09l1.2-4.76h2.22l0.93,4.66l10.83,8.96l0.28,7l3.7,4.01l1.67-0.09l0.37-24.72l-6.29-4.38l-5.93,4.01l-2.13,1.31l-3.52-2.24l-0.09-7.09L831.93,339.34L831.93,339.34z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b4d794" original="#b4d794"
                                          id="jqvmap1_id" class="jvectormap-region"></path>
                                    <path d="M852.76,348.29l-0.37,24.44l3.52-0.19l4.63-5.41l3.89,0.19l2.5,2.24l0.83,6.9l7.96,4.2l2.04-0.75v-2.52l-6.39-5.32l-3.15-7.28l2.5-1.21l-1.85-4.01l-3.7-0.09l-0.93-4.29l-9.81-6.62L852.76,348.29L852.76,348.29M880.48,349l-0.88,1.25l4.81,4.26l0.66,2.5l1.31-0.15l0.15-2.57l-1.46-1.32L880.48,349L880.48,349M882.89,355.03l-0.95,0.22l-0.58,2.57l-1.82,1.18l-5.47,0.96l0.22,2.06l5.76-0.29l3.65-2.28l-0.22-3.97L882.89,355.03L882.89,355.03M889.38,359.51l1.24,3.45l2.19,2.13l0.66-0.59l-0.22-2.28l-2.48-3.01L889.38,359.51L889.38,359.51z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_pg" class="jvectormap-region"></path>
                                    <path d="M137.49,225.43l4.83,15.21l-2.25,1.26l0.25,3.02l4.25,3.27v6.05l5.25,5.04l-2.25-14.86l-3-9.83l0.75-6.8l2.5,0.25l1,2.27l-1,5.79l13,25.44v9.07l10.5,12.34l11.5,5.29l4.75-2.77l6.75,5.54l4-4.03l-1.75-4.54l5.75-1.76l1.75,1.01l1.75-1.76h2.75l5-8.82l-2.5-2.27l-9.75,2.27l-2.25,6.55l-5.75,1.01l-6.75-2.77l-3-9.57l2.27-12.07l-4.64-2.89l-2.21-11.59l-1.85-0.79l-3.38,3.43l-3.88-2.07l-1.52-7.73l-15.37-1.61l-7.94-5.97L137.49,225.43L137.49,225.43z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b3d695" original="#b3d695"
                                          id="jqvmap1_mx" class="jvectormap-region"></path>
                                    <path d="M517.77,143.66l-5.6-0.2l-3.55,2.17l-0.05,1.61l2.3,2.17l7.15,1.21L517.77,143.66L517.77,143.66M506.76,147.64l-1.55-0.05l-0.9,0.91l0.65,0.96l1.55,0.1l0.8-1.16L506.76,147.64L506.76,147.64z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_ee" class="jvectormap-region"></path>
                                    <path d="M473.88,227.49l-4.08-1.37l-16.98,3.19l-3.7,2.81l2.26,11.67l-6.75,0.27l-4.06,6.53l-9.67,2.32l0.03,4.75l31.85,24.35l5.43,0.46l18.11-14.15l-1.81-2.28l-3.4-0.46l-2.04-3.42v-14.15l-1.36-1.37l0.23-3.65l-3.62-3.65l-0.45-3.88l1.58-1.14l-0.68-4.11L473.88,227.49L473.88,227.49z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6d993" original="#b6d993"
                                          id="jqvmap1_dz" class="jvectormap-region"></path>
                                    <path d="M448.29,232.28h-11.55l-2.26,5.02l-5.21,2.51l-4.3,11.64l-8.38,5.02l-11.77,19.39l11.55-0.23l0.45-5.7h2.94v-7.76h10.19l0.23-10.04l9.74-2.28l4.08-6.62l6.34-0.23L448.29,232.28L448.29,232.28z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_ma" class="jvectormap-region"></path>
                                    <path d="M404.9,276.66l2.18,2.85l-0.45,12.32l3.17-2.28l2.26-0.46l3.17,1.14l3.62,5.02l3.4-2.28l16.53-0.23l-4.08-27.61l4.38-0.02l-8.16-6.25l0.01,4.06l-10.33,0.01l-0.05,7.75l-2.97-0.01l-0.38,5.72L404.9,276.66L404.9,276.66z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_mr" class="jvectormap-region"></path>
                                    <path d="M412.03,289.84L410.12,290.31L406.18,293.18L405.28,294.78L405,296.37L406.43,297.40L411.28,297.34L414.40,296.5L414.75,298.03L414.46,300.06L414.53,300.09L406.78,300.21L408.03,303.21L408.71,301.37L418,302.15L418.06,302.21L419.03,302.25L422,302.37L422.12,300.62L418.53,296.31L414.53,290.87L412.03,289.84z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_sn" class="jvectormap-region"></path>
                                    <path d="M406.89,298.34l-0.13,1.11l6.92-0.1l0.35-1.03l-0.15-1.04l-1.99,0.81L406.89,298.34L406.89,298.34z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_gm" class="jvectormap-region"></path>
                                    <path d="M408.6,304.53l1.4,2.77l3.93-3.38l0.04-1.04l-4.63-0.67L408.6,304.53L408.6,304.53z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_gw" class="jvectormap-region"></path>
                                    <path d="M410.42,307.94l3.04,4.68l3.96-3.44l4.06-0.18l3.38,4.49l2.87,1.89l1.08-2.1l0.96-0.54l-0.07-4.62l-1.91-5.48l-5.86,0.65l-7.25-0.58l-0.04,1.86L410.42,307.94L410.42,307.94z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_gn" class="jvectormap-region"></path>
                                    <path d="M413.93,313.13l5.65,5.46l4.03-4.89l-2.52-3.95l-3.47,0.35L413.93,313.13L413.93,313.13z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_sl" class="jvectormap-region"></path>
                                    <path d="M420.17,319.19l10.98,7.34l-0.26-5.56l-3.32-3.91l-3.24-2.87L420.17,319.19L420.17,319.19z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_lr" class="jvectormap-region"></path>
                                    <path d="M432.07,326.75l4.28-3.03l5.32-0.93l5.43,1.17l-2.77-4.19l-0.81-2.56l0.81-7.57l-4.85,0.23l-2.2-2.1l-4.62,0.12l-2.2,0.35l0.23,5.12l-1.16,0.47l-1.39,2.56l3.58,4.19L432.07,326.75L432.07,326.75z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_ci" class="jvectormap-region"></path>
                                    <path d="M419.46,295.84l3.08-2.11l17.12-0.1l-3.96-27.54l4.52-0.13l21.87,16.69l2.94,0.42l-1.11,9.28l-13.75,1.25l-10.61,7.92l-1.93,5.42l-7.37,0.31l-1.88-5.41l-5.65,0.4l0.22-1.77L419.46,295.84L419.46,295.84z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_ml" class="jvectormap-region"></path>
                                    <path d="M450.59,294.28l3.64-0.29l5.97,8.44l-5.54,4.18l-4.01-1.03l-5.39,0.07l-0.87,3.16l-4.52,0.22l-1.24-1.69l1.6-5.14L450.59,294.28L450.59,294.28z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_bf" class="jvectormap-region"></path>
                                    <path d="M460.89,302l2.55-0.06l2.3-3.45l3.86-0.69l4.11,2.51l8.77,0.25l6.78-2.76l2.55-2.19l0.19-2.88l4.73-4.77l1.25-10.53l-3.11-6.52l-7.96-1.94l-18.42,14.36l-2.61-0.25l-1.12,9.97l-9.4,0.94L460.89,302L460.89,302z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_ne" class="jvectormap-region"></path>
                                    <path d="M444.34,317.05l1.12,2.63l2.92,4.58l1.62-0.06l4.42-2.51l-0.31-14.29l-3.42-1l-4.79,0.13L444.34,317.05L444.34,317.05z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_gh" class="jvectormap-region"></path>
                                    <path d="M455.22,321.25l2.68-1.57l-0.06-10.35l-1.74-2.82l-1.12,0.94L455.22,321.25L455.22,321.25z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_tg" class="jvectormap-region"></path>
                                    <path d="M458.71,319.49h2.12l0.12-6.02l2.68-3.89l-0.12-6.77l-2.43-0.06l-4.17,3.26l1.74,3.32L458.71,319.49L458.71,319.49z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_bj" class="jvectormap-region"></path>
                                    <path d="M461.57,319.37l3.92,0.19l4.73,5.27l2.3,0.63l1.8-0.88l2.74-0.38l0.93-3.82l3.73-2.45l4.04-0.19l7.4-13.61l-0.12-3.07l-3.42-2.63l-6.84,3.01l-9.15-0.13l-4.36-2.76l-3.11,0.69l-1.62,2.82l-0.12,7.96l-2.61,3.7L461.57,319.37L461.57,319.37z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d993" original="#b5d993"
                                          id="jqvmap1_ng" class="jvectormap-region"></path>
                                    <path d="M474.91,227.33l5.53-2.23l1.82,1.18l0.07,1.44l-0.85,1.11l0.13,1.97l0.85,0.46v3.54l-0.98,1.64l0.13,1.05l3.71,1.31l-2.99,4.65l-1.17-0.07l-0.2,3.74l-1.3,0.2l-1.11-0.98l0.26-3.8l-3.64-3.54l-0.46-3.08l1.76-1.38L474.91,227.33L474.91,227.33z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_tn" class="jvectormap-region"></path>
                                    <path d="M480.05,248.03l1.56-0.26l0.46-3.6h0.78l3.19-5.24l7.87,2.29l2.15,3.34l7.74,3.54l4.03-1.7l-0.39-1.7l-1.76-1.7l0.2-1.18l2.86-2.42h5.66l2.15,2.88l4.55,0.66l0.59,36.89l-3.38-0.13l-20.42-10.62l-2.21,1.25l-8.39-2.1l-2.28-3.01l-3.32-0.46l-1.69-3.01L480.05,248.03L480.05,248.03z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_ly" class="jvectormap-region"></path>
                                    <path d="M521.93,243.06l2.67,0.07l5.2,1.44l2.47,0.07l3.06-2.56h1.43l2.6,1.44h3.29l0.59-0.04l2.08,5.98l0.59,1.93l0.55,2.89l-0.98,0.72l-1.69-0.85l-1.95-6.36l-1.76-0.13l-0.13,2.16l1.17,3.74l9.37,11.6l0.2,4.98l-2.73,3.15L522.32,273L521.93,243.06L521.93,243.06z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d993" original="#b5d993"
                                          id="jqvmap1_eg" class="jvectormap-region"></path>
                                    <path d="M492.79,296l0.13-2.95l4.74-4.61l1.27-11.32l-3.16-6.04l2.21-1.13l21.4,11.15l-0.13,10.94l-3.77,3.21v5.64l2.47,4.78h-4.36l-7.22,7.14l-0.19,2.16l-5.33-0.07l-0.07,0.98l-3.04-0.4l-2.08-3.93l-1.56-0.77l0.2-1.2l1.96-1.5v-7.02l-2.71-0.42l-3.27-2.43L492.79,296L492.79,296L492.79,296z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_td" class="jvectormap-region"></path>
                                    <path d="M520.15,292.43l0.18-11.83l2.46,0.07l-0.28-6.57l25.8,0.23l3.69-3.72l7.96,12.73l-4.36,5.14v7.85l-6.86,14.75l-2.36,1.04l0.75,4.11h2.94l3.99,5.79l-3.2,0.41l-0.82,1.49l-0.08,2.15l-9.6-0.17l-0.98-1.49l-6.71-0.38l-12.32-12.68l1.23-0.74l0.33-2.98l-2.95-1.74l-2.69-5.31l0.15-4.94L520.15,292.43L520.15,292.43z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_sd" class="jvectormap-region"></path>
                                    <path d="M477.82,324.28l3.22,2.96l-0.23,4.58l17.66-0.41l1.44-1.62l-5.06-5.45l-0.75-1.97l3.22-6.03l-2.19-4l-1.84-0.99v-2.03l2.13-1.39l0.12-6.32l-1.69-0.19l-0.03,3.32l-7.42,13.85l-4.54,0.23l-3.11,2.14L477.82,324.28L477.82,324.28z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_cm" class="jvectormap-region"></path>
                                    <path d="M556.71,294.7l-0.25-5.89l3.96-4.62l1.07,0.82l1.95,6.52l9.36,6.97l-1.7,2.09l-6.85-5.89H556.71L556.71,294.7z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_er" class="jvectormap-region"></path>
                                    <path d="M571.48,301.54l-0.57,3.36l3.96-0.06l0.06-4.94l-1.45-0.89L571.48,301.54L571.48,301.54z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_dj" class="jvectormap-region"></path>
                                    <path d="M549.49,311.76l7.28-16.2l7.23,0.04l6.41,5.57l-0.45,4.59h4.97l0.51,2.76l8.04,4.81l4.96,0.25l-9.43,10.13l-12.95,3.99h-3.21l-5.72-4.88l-2.26-0.95l-4.38-6.45l-2.89,0.04l-0.34-2.96L549.49,311.76L549.49,311.76z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_et" class="jvectormap-region"></path>
                                    <path d="M575.74,305.04l4.08,2.78l1.21-0.06l10.13-3.48l1.15,3.71l-0.81,3.13l-2.19,1.74l-5.47-0.35l-7.83-4.81L575.74,305.04L575.74,305.04M591.97,304.05l4.37-1.68l1.55,0.93l-0.17,3.88l-4.03,11.48l-21.81,23.36l-2.53-1.74l-0.17-9.86l3.28-3.77l6.96-2.15l10.21-10.78l2.67-2.38l0.75-3.48L591.97,304.05L591.97,304.05z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap1_so" class="jvectormap-region"></path>
                                    <path d="M599.62,299.65l2.13,2.38l2.88-1.74l1.04-0.35l-1.32-1.28l-2.53,0.75L599.62,299.65L599.62,299.65M571.99,289.23l1.44,4.28v4.18l3.46,3.14l24.38-9.93l0.23-2.73l-3.91-7.02l-9.81,3.13l-5.63,5.54l-6.53-3.86L571.99,289.23L571.99,289.23z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_ye" class="jvectormap-region"></path>
                                    <path d="M495.66,324.05l4.66,5.04l1.84-2.38l2.93,0.12l0.63-2.32l2.88-1.8l5.98,4.12l3.45-3.42l13.39,0.59L519,311.18l1.67-1.04l0.23-2.26l-2.82-1.33h-4.14l-6.67,6.61l-0.23,2.72l-5.29-0.17l-0.17,1.16l-3.45-0.35l-3.11,5.91L495.66,324.05L495.66,324.05z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_cf" class="jvectormap-region"></path>
                                    <path d="M470.74,337.15l1.15-0.58l0.86,0.7l-0.86,1.33l-1.04-0.41L470.74,337.15L470.74,337.15M473.05,333.5l1.73-0.29l0.58,1.1l-0.86,0.93l-0.86-0.12L473.05,333.5L473.05,333.5z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_st" class="jvectormap-region"></path>
                                    <path d="M476.84,327.41l-0.46,1.97l1.38,0.75l1.32-0.99l-0.46-2.03L476.84,327.41L476.84,327.41M480.99,332.69l-0.06,1.39l4.54,0.23l-0.06-1.57L480.99,332.69L480.99,332.69z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_gq" class="jvectormap-region"></path>
                                    <path d="M486.39,332.63l-0.12,2.49l-5.64-0.12l-3.45,6.67l8.11,8.87l2.01-1.68l-0.06-1.74l-1.38-0.64v-1.22l3.11-1.97l2.76,2.09l3.05,0.06l-0.06-10.49l-4.83-0.23l-0.06-2.2L486.39,332.63L486.39,332.63z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_ga" class="jvectormap-region"></path>
                                    <path d="M491,332.52l-0.06,1.45l4.78,0.12l0.17,12.41l-4.37-0.12l-2.53-1.97l-1.96,1.1l-0.09,0.55l1.01,0.49l0.29,2.55l-2.7,2.32l0.58,1.22l2.99-2.32h1.44l0.46,1.39l1.9,0.81l6.1-5.16l-0.12-3.77l1.27-3.07l3.91-2.9l1.05-9.81l-2.78,0.01l-3.22,4.41L491,332.52L491,332.52z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_cg" class="jvectormap-region"></path>
                                    <path d="M486.55,353.23l1.74,2.26l2.25-2.13l-0.66-2.21l-0.56-0.04L486.55,353.23L486.55,353.23M488.62,356.71l3.41,12.73l-0.08,4.02l-4.99,5.36l-0.75,8.71l19.2,0.17l6.24,2.26l5.15-0.67l-3-3.76l0.01-10.74l5.9-0.25v-4.19l-4.79-0.2l-0.96-9.92l-2.02,0.03l-1.09-0.98l-1.19,0.06l-1.58,3.06H502l-1.41-1.42l0.42-2.01l-1.66-2.43L488.62,356.71L488.62,356.71z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_ao" class="jvectormap-region"></path>
                                    <path d="M489.38,355.71l10.31-0.18l2.09,2.97l-0.08,2.19l0.77,0.7h5.12l1.47-2.89h2.09l0.85,0.86l2.87-0.08l0.85,10.08l4.96,0.16v0.78l13.33,6.01l0.62,1.17h2.79l-0.31-4.22l-5.04-2.42l0.31-3.2l2.17-5.08l4.96-0.16l-4.26-14.14l0.08-6.01l6.74-10.54l0.08-1.48l-1.01-0.55l0.04-2.86l-1.23-0.11l-1.24-1.58l-20.35-0.92l-3.73,3.63l-6.11-4.02l-2.15,1.32l-1.56,13.13l-3.86,2.98l-1.16,2.64l0.21,3.91l-6.96,5.69l-1.85-0.84l0.25,1.09L489.38,355.71L489.38,355.71z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_cd" class="jvectormap-region"></path>
                                    <path d="M537.82,339.9l2.81,2.59l-0.12,2.77l-4.36,0.09v-3.06L537.82,339.9L537.82,339.9z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_rw" class="jvectormap-region"></path>
                                    <path d="M536.21,346.21l4.27-0.09l-1.11,3.74l-1.08,0.94h-1.32l-0.94-2.53L536.21,346.21L536.21,346.21z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_bi" class="jvectormap-region"></path>
                                    <path d="M538.3,339.09l3.03,2.84l1.9-1.21l5.14-0.84l0.88,0.09l0.33-1.95l2.9-6.1l-2.44-5.08l-7.91,0.05l-0.05,2.09l1.06,1.02l-0.16,2.09L538.3,339.09L538.3,339.09z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_ug" class="jvectormap-region"></path>
                                    <path d="M550.83,326.52l2.66,5.19l-3.19,6.69l-0.42,2.03l15.93,9.85l4.94-7.76l-2.5-2.03l-0.05-10.22l3.13-3.42l-4.99,1.66l-3.77,0.05l-5.9-4.98l-1.86-0.8l-3.45,0.32l-0.61,1.02L550.83,326.52L550.83,326.52z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_ke" class="jvectormap-region"></path>
                                    <path d="M550.57,371.42l17.47-2.14l-3.93-7.6l-0.21-7.28l1.27-3.48l-16.62-10.44l-5.21,0.86l-1.81,1.34l-0.16,3.05l-1.17,4.23l-1.22,1.45l-1.75,0.16l3.35,11.61l5.47,2.57l3.77,0.11L550.57,371.42L550.57,371.42z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_tz" class="jvectormap-region"></path>
                                    <path d="M514.55,384.7l3.17,4.4l4.91,0.3l1.74,0.96l5.14,0.06l4.43-6.21l12.38-5.54l1.08-4.88l-1.44-6.99l-6.46-3.68l-4.31,0.3l-2.15,4.76l0.06,2.17l5.08,2.47l0.3,5.37l-4.37,0.24l-1.08-1.81l-12.14-5.18l-0.36,3.98l-5.74,0.18L514.55,384.7L514.55,384.7z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_zm" class="jvectormap-region"></path>
                                    <path d="M547.16,379.4l3.11,3.25l-0.06,4.16l0.6,1.75l4.13-4.46l-0.48-5.67l-2.21-1.69l-1.97-9.95l-3.41-0.12l1.55,7.17L547.16,379.4L547.16,379.4z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_mw" class="jvectormap-region"></path>
                                    <path d="M541.17,413.28l2.69,2.23l6.34-3.86l1.02-5.73v-9.46l10.17-8.32l1.74,0.06l6.16-5.91l-0.96-12.18L552,372.17l0.48,3.68l2.81,2.17l0.66,6.63l-5.5,5.37l-1.32-3.01l0.24-3.98l-3.17-3.44l-7.78,3.62l7.24,3.68l0.24,10.73l-4.79,7.11L541.17,413.28L541.17,413.28z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_mz" class="jvectormap-region"></path>
                                    <path d="M524.66,392.3l8.97,10.13l6.88,1.75l4.61-7.23l-0.36-9.58l-7.48-3.86l-2.81,1.27l-4.19,6.39l-5.8-0.06L524.66,392.3L524.66,392.3z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_zw" class="jvectormap-region"></path>
                                    <path d="M496.55,421.96l3.35,0.24l1.97,1.99l4.67,0.06l1.14-13.26v-8.68l2.99-0.6l1.14-9.1l7.6-0.24l2.69-2.23l-4.55-0.18l-6.16,0.84l-6.64-2.41h-18.66l0.48,5.3l6.22,9.16l-1.08,4.7l0.06,2.47L496.55,421.96L496.55,421.96z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_na" class="jvectormap-region"></path>
                                    <path d="M508.51,411.23l2.15,0.66l-0.3,6.15l2.21,0.3l5.08-4.58l6.1,0.66l1.62-4.1l7.72-7.05l-9.27-10.67l-0.12-1.75l-1.02-0.3l-2.81,2.59l-7.3,0.18l-1.02,9.1l-2.87,0.66L508.51,411.23L508.51,411.23z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_bw" class="jvectormap-region"></path>
                                    <path d="M540.87,414l-2.51,0.42l-1.08,2.95l1.92,1.75h2.33l1.97-2.83L540.87,414L540.87,414z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_sz" class="jvectormap-region"></path>
                                    <path d="M527.41,425.39l3.05-2.35l1.44,0.06l1.74,2.17l-0.18,2.17l-2.93,1.08v0.84l-3.23-0.18l-0.78-2.35L527.41,425.39L527.41,425.39z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_ls" class="jvectormap-region"></path>
                                    <path d="M534.16,403.63l-7.9,7.3l-1.88,4.51l-6.26-0.78l-5.21,4.63l-3.46-0.34l0.28-6.4l-1.23-0.43l-0.86,13.09l-6.14-0.06l-1.85-2.18l-2.71-0.03l2.47,7.09l4.41,4.17l-3.15,3.67l2.04,4.6l4.72,1.8l3.76-3.2l10.77,0.06l0.77-0.96l4.78-0.84l16.17-16.1l-0.06-5.07l-1.73,2.24h-2.59l-3.15-2.64l1.6-3.98l2.75-0.56l-0.25-8.18L534.16,403.63L534.16,403.63z M530.37,422.13l1.51-0.06l2.45,2.66l-0.07,3.08l-2.87,1.45l-0.18,1.02l-4.38,0.05l-1.37-3.3l1.25-2.42L530.37,422.13L530.37,422.13z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d894" original="#b5d894"
                                          id="jqvmap1_za" class="jvectormap-region"></path>
                                    <path d="M321.13,50.07l-1.36,2.17l2.45,2.45l-1.09,2.45l3.54,4.62l4.35-1.36l5.71-0.54l6.53,7.07l4.35,11.69l-3.53,7.34l4.89-0.82l2.72,1.63l0.27,3.54l-5.98,0.27l3.26,3.26l4.08,0.82l-8.97,11.96l-1.09,7.34l1.9,5.98l-1.36,3.54l2.45,7.61l4.62,5.17l1.36-0.27l2.99-0.82l0.27,4.35l1.9,2.72l3.53-0.27l2.72-10.06l8.16-10.06l12.24-4.89l7.61-9.52l3.53,1.63h7.34l5.98-5.98l7.34-2.99l0.82-4.62l-4.62-4.08l-4.08-1.36l-2.18-5.71l5.17-2.99l8.16,4.35l2.72-2.99l-4.35-2.45l9.25-12.51l-1.63-5.44l-4.35-0.27l1.63-4.89l5.44-2.45l11.15-9.79l-3.26-3.53l-12.51,1.09l-6.53,6.53l3.81-8.43l-4.35-1.09l-2.45,4.35l-3.53-2.99l-9.79,1.09l2.72-4.35l16.04-0.54l-4.08-5.44l-17.4-3.26l-7.07,1.09l0.27,3.54l-7.34-2.45l0.27-2.45l-5.17,1.09l-1.09,2.72l5.44,1.9l-5.71,4.08l-4.08-4.62l-5.71-1.63l-0.82,4.35h-5.71l-2.18-4.62l-8.97-1.36l-4.89,2.45l-0.27,3.26l-6.25-0.82l-3.81,1.63l0.27,3.81v1.9l-7.07,1.36l-3.26-2.17l-2.18,3.53l3.26,3.54l6.8-0.82l0.54,2.18l-5.17,2.45L321.13,50.07L321.13,50.07M342.89,92.49l1.63,2.45l-0.82,2.99h-1.63l-2.18-2.45l0.54-1.9L342.89,92.49L342.89,92.49M410.87,85.69l4.62,1.36l-0.27,3.81l-4.89-2.45l-1.09-1.36L410.87,85.69L410.87,85.69z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap1_gl" class="jvectormap-region"></path>
                                    <path d="M761.17,427.98l-0.35,25.38l-3.9,2.86l-0.35,2.5l5.32,3.57l13.13-2.5h6.74l2.48-3.58l14.9-2.86l10.64,3.22l-0.71,4.29l1.42,4.29l8.16-1.43l0.35,2.14l-5.32,3.93l1.77,1.43l3.9-1.43l-1.06,11.8l7.45,5.72l4.26-1.43l2.13,2.14l12.42-1.79l11.71-18.95l4.26-1.07l8.51-15.73l2.13-13.58l-5.32-6.79l2.13-1.43l-4.26-13.23l-4.61-3.22l0.71-17.87l-4.26-3.22l-1.06-10.01h-2.13l-7.1,23.59l-3.9,0.36l-8.87-8.94l4.97-13.23l-9.22-1.79l-10.29,2.86l-2.84,8.22l-4.61,1.07l-0.35-5.72l-18.8,11.44l0.35,4.29l-2.84,3.93h-7.1l-15.26,6.43L761.17,427.98L761.17,427.98M825.74,496.26l-1.77,7.15l0.35,5l5.32-0.36l6.03-9.29L825.74,496.26L825.74,496.26z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b3d595" original="#b3d595"
                                          id="jqvmap1_au" class="jvectormap-region"></path>
                                    <path d="M913.02,481.96l1.06,11.8l-1.42,5.36l-5.32,3.93l0.35,4.65v5l1.42,1.79l14.55-12.51v-2.86h-3.55l-4.97-16.8L913.02,481.96L913.02,481.96M902.38,507.7l2.84,5.36l-7.81,7.51l-0.71,3.93l-5.32,0.71l-8.87,8.22l-8.16-3.93l-0.71-2.86l14.9-6.43L902.38,507.7L902.38,507.7z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6d993" original="#b6d993"
                                          id="jqvmap1_nz" class="jvectormap-region"></path>
                                    <path d="M906.64,420.47l-0.35,1.79l4.61,6.43l2.48,1.07l0.35-2.5L906.64,420.47L906.64,420.47z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap1_nc" class="jvectormap-region"></path>
                                    <path d="M764.14,332.92l3.02,3.49l11.58-4.01l2.29-8.84l5.16-0.37l4.72-3.42l-6.12-4.46l-1.4-2.45l-3.02,5.57l1.11,3.2l-1.84,2.67l-3.47-0.89l-8.41,6.17l0.22,3.57L764.14,332.92L764.14,332.92M732.71,315.45l2.01,4.51l0.45,5.86l2.69,4.17l6.49,3.94l2.46,0.23l-0.45-4.06l-2.13-5.18l-3.12-6.63l-0.26,1.16l-3.76-0.17l-2.7-3.88L732.71,315.45L732.71,315.45z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d993" original="#b5d993"
                                          id="jqvmap1_my" class="jvectormap-region"></path>
                                    <path d="M779.77,319.25l-2.88,3.49l2.36,0.74l1.33-1.86L779.77,319.25L779.77,319.25z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_bn" class="jvectormap-region"></path>
                                    <path d="M806.14,368.42l-5.11,4.26l0.49,1.09l2.16-0.4l2.55-2.38l5.01-0.69l-0.98-1.68L806.14,368.42L806.14,368.42z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_tl" class="jvectormap-region"></path>
                                    <path d="M895.43,364.65l0.15,2.28l1.39,1.32l1.31-0.81l-1.17-2.43L895.43,364.65L895.43,364.65M897.18,370.31l-1.17,1.25l1.24,2.28l1.46,0.44l-0.07-1.54L897.18,370.31L897.18,370.31M900.03,368.99l1.02,2.5l1.97,2.35l1.09-1.76l-1.46-2.5L900.03,368.99L900.03,368.99M905.14,372.74l0.58,3.09l1.39,1.91l1.17-2.42L905.14,372.74L905.14,372.74M906.74,379.65l-0.51,0.88l1.68,2.21l1.17,0.07l-0.73-2.87L906.74,379.65L906.74,379.65M903.02,384.05l-1.75,0.81l1.53,2.13l1.31-0.74L903.02,384.05L903.02,384.05z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_sb" class="jvectormap-region"></path>
                                    <path d="M920.87,397.22l-1.24,1.66l0.52,1.87l0.62,0.42l1.13-1.46L920.87,397.22L920.87,397.22M921.49,402.31l0.1,1.35l1.34,0.42l0.93-0.52l-0.93-1.46L921.49,402.31L921.49,402.31M923.45,414.37l-0.62,0.94l0.93,1.04l1.55-0.52L923.45,414.37L923.45,414.37z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_vu" class="jvectormap-region"></path>
                                    <path d="M948.62,412.29l-1.24,1.66l-0.1,1.87l1.44,1.46L948.62,412.29L948.62,412.29z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_fj" class="jvectormap-region"></path>
                                    <path d="M789.37,297.53l-0.86,1.64l-0.48,2.02l-4.78,6.07l0.29,1.25l2.01-0.29l6.21-6.94L789.37,297.53L789.37,297.53M797.11,295.22l-0.1,5.01l1.82,1.83l0.67,3.56l1.82,0.39l0.86-2.22l-1.43-1.06l-0.38-6.26L797.11,295.22L797.11,295.22M802.28,297.15l-0.1,4.43l1.05,1.73l1.82-2.12l-0.48-3.85L802.28,297.15L802.28,297.15M803.42,293.29l1.82,2.41l0.86,2.31h1.63l-0.29-3.95l-1.82-1.25L803.42,293.29L803.42,293.29M806.96,302.35l0.38,2.89l-3.35,2.7l-2.77,0.29l-2.96,3.18l0.1,1.45l2.77-0.87l1.91-1.25l1.63,4.14l2.87,2.02l1.15-0.39l1.05-1.25l-2.29-2.31l1.34-1.06l1.53,1.25l1.05-1.73l-1.05-2.12l-0.19-4.72L806.96,302.35L806.96,302.35M791.38,272.97l-2.58,1.83l-0.29,5.78l4.02,7.8l1.34,1.06l1.72-1.16l2.96,0.48l0.57,2.6l2.2,0.19l1.05-1.44l-1.34-1.83l-1.63-1.54l-3.44-0.38l-1.82-2.99l2.1-3.18l0.19-2.79l-1.43-3.56L791.38,272.97L791.38,272.97M792.72,290.21l0.76,2.7l1.34,0.87l0.96-1.25l-1.53-2.12L792.72,290.21L792.72,290.21z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6d993" original="#b6d993"
                                          id="jqvmap1_ph" class="jvectormap-region"></path>
                                    <path d="M759.83,270.17l-2.39,0.67l-1.72,2.12l1.43,2.79l2.1,0.19l2.39-2.12l0.57-2.79L759.83,270.17L759.83,270.17M670.4,170.07l-3.46,8.7l-4.77-0.25l-5.03,11.01l4.27,5.44l-8.8,12.15l-4.52-0.76l-3.02,3.8l0.75,2.28l3.52,0.25l1.76,4.05l3.52,0.76l10.81,13.93v7.09l5.28,3.29l5.78-1.01l7.29,4.3l8.8,2.53l4.27-0.51l4.78-0.51l10.05-6.58l3.27,0.51l1.25,2.97l2.77,0.83l3.77,5.57l-2.51,5.57l1.51,3.8l4.27,1.52l0.75,4.56l5.03,0.51l0.75-2.28l7.29-3.8l4.52,0.25l5.28,5.82l3.52-1.52l2.26,0.25l1.01,2.79l1.76,0.25l2.51-3.54l10.05-3.8l9.05-10.89l3.02-10.38l-0.25-6.84l-3.77-0.76l2.26-2.53l-0.5-4.05l-9.55-9.62v-4.81l2.76-3.54l2.76-1.27l0.25-2.79h-7.04l-1.26,3.8l-3.27-0.76l-4.02-4.3l2.51-6.58l3.52-3.8l3.27,0.25l-0.5,5.82l1.76,1.52l4.27-4.3l1.51-0.25l-0.5-3.29l4.02-4.81l3.02,0.25l1.76-5.57l2.06-1.09l0.21-3.47l-2-2.1l-0.17-5.48l3.85-0.25l-0.25-14.13l-2.7,1.62l-1.01,3.62l-4.51-0.01l-13.07-7.35l-9.44-11.38l-9.58-0.1l-2.44,2.12l3.1,7.1l-1.08,6.66l-3.86,1.6l-2.17-0.17l-0.16,6.59l2.26,0.51l4.02-1.77l5.28,2.53v2.53l-3.77,0.25l-3.02,6.58l-2.76,0.25l-9.8,12.91l-10.3,4.56l-7.04,0.51l-4.77-3.29l-6.79,3.55l-7.29-2.28l-1.76-4.81l-12.31-0.76l-6.53-10.63h-2.76l-2.22-4.93L670.4,170.07z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#a7c29e" original="#a7c29e"
                                          id="jqvmap1_cn" class="jvectormap-region"></path>
                                    <path d="M787.46,248.31l-3.54,2.7l-0.19,5.2l3.06,3.56l0.76-0.67L787.46,248.31L787.46,248.31z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d894" original="#b5d894"
                                          id="jqvmap1_tw" class="jvectormap-region"></path>
                                    <path d="M803.23,216.42l-1.63,1.64l0.67,2.31l1.43,0.1l0.96,5.01l1.15,1.25l2.01-1.83l0.86-3.28l-2.49-3.56L803.23,216.42L803.23,216.42M812.03,213.15l-2.77,2.6l-0.1,2.99l0.67,0.87l3.73-3.18l-0.29-3.18L812.03,213.15L812.03,213.15M808.2,206.98l-4.88,5.59l0.86,1.35l2.39,0.29l4.49-3.47l3.16-0.58l2.87,3.37l2.2-0.77l0.86-3.28l4.11-0.1l4.02-4.82l-2.1-8l-0.96-4.24l2.1-1.73l-4.78-7.22l-1.24,0.1l-2.58,2.89v2.41l1.15,1.35l0.38,6.36l-2.96,3.66l-1.72-1.06l-1.34,2.99l-0.29,2.79l1.05,1.64l-0.67,1.25l-2.2-1.83h-1.53l-1.34,0.77L808.2,206.98L808.2,206.98M816.43,163.44l-1.53,1.35l0.77,2.89l1.34,1.35l-0.1,4.43l-1.72,0.67l-1.34,2.99l3.92,5.39l2.58-0.87l0.48-1.35l-2.77-2.5l1.72-2.22l1.82,0.29l1.43,1.54l0.1-3.18l3.92-3.18l2.2-0.58l-1.82-3.08l-0.86-1.35l-1.43,0.96l-1.24,1.54l-2.68-0.58l-2.77-1.83L816.43,163.44L816.43,163.44z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#a8c39d" original="#a8c39d"
                                          id="jqvmap1_jp" class="jvectormap-region"></path>
                                    <path d="M506.61,151.72l-1.5-0.15l-2.7,3.23v1.51l0.9,0.35l1.75,0.05l2.9-2.37l0.4-0.81L506.61,151.72L506.61,151.72M830.86,160.45l-2.68,3.76l0.19,1.83l1.34-0.58l3.15-3.95L830.86,160.45L830.86,160.45M834.4,154.96l-0.96,2.6l0.1,1.73l1.63-1.06l1.53-3.08V154L834.4,154.96L834.4,154.96M840.04,132.03l-1.24,1.54l0.1,2.41l1.15-0.1l1.91-3.37L840.04,132.03L840.04,132.03M837.75,137.91v4.24l1.34,0.48l0.96-1.54v-3.27L837.75,137.91L837.75,137.91M798.64,122.59l-0.09,6.17l7.74,11.95l2.77,10.4l4.88,9.25l1.91,0.67l1.63-1.35l0.76-2.22l-6.98-7.61l0.19-3.95l1.53-0.67l0.38-2.31l-13.67-19.36L798.64,122.59L798.64,122.59M852.57,103.42l-1.91,0.19l1.15,1.64l2.39,1.64l0.67-0.77L852.57,103.42L852.57,103.42M856.29,104.58l0.29,1.64l2.96,0.87l0.29-1.16L856.29,104.58L856.29,104.58M547.82,38.79l1.72,0.69l-1.21,2.08v2.95l-2.58,1.56H543l-1.55-1.91l0.17-2.08l1.21-1.56h2.41L547.82,38.79L547.82,38.79M554.36,36.88v2.08l1.72,1.39l2.41-0.17l2.07-1.91v-1.39h-1.89l-1.55,0.52l-1.21-1.39L554.36,36.88L554.36,36.88M564.18,37.06l1.21,2.6l2.41,0.17l1.72-0.69l-0.86-2.43l-2.24-0.52L564.18,37.06L564.18,37.06M573.99,33.59l-1.89-0.35l-1.72,1.74l0.86,1.56l0.52,2.43l2.24-1.73l0.52-1.91L573.99,33.59L573.99,33.59M584.49,51.98l-0.52,2.43l-3.96,3.47l-8.44,1.91l-6.89,11.45l-1.21,3.3l6.89,1.74l1.03-4.16l2.07-6.42l5.34-2.78l4.48-3.47l3.27-1.39h1.72v-4.68L584.49,51.98L584.49,51.98M562.28,77.31l4.65,0.52l1.55,5.38l3.96,4.16l-1.38,2.78h-2.41l-2.24-2.6l-4.99-0.17l-2.07-2.78v-1.91l3.1-0.87L562.28,77.31L562.28,77.31M634.95,18.15l-2.24-1.39h-2.58l-0.52,1.56l-2.75,1.56l-2.07,0.69l-0.34,2.08l4.82,0.35L634.95,18.15L634.95,18.15M640.28,18.67l-1.21,2.6l-2.41-0.17l-3.79,2.78l-1.03,3.47h2.41l1.38-2.26l3.27,2.43l3.1-1.39l2.24-1.91l-0.86-2.95l-1.21-2.08L640.28,18.67L640.28,18.67M645.28,20.58l1.21,4.86l1.89,4.51l2.07-3.64l3.96-0.87v-2.6l-2.58-1.91L645.28,20.58L645.28,20.58M739.76,12.8l2.69,2.26l1.91-0.79l0.56-3.17L741,8.39l-2.58,1.7l-6.28,0.57v2.83l-6.62,0.11v4.63l7.74,5.76l2.02-1.47l-0.45-4.07l4.94-1.24l-1.01-1.92l-1.79-1.81L739.76,12.8L739.76,12.8M746.94,10.09l1.79,3.39l6.96-0.79l1.91-2.49l-0.45-2.15l-1.91-0.79l-1.79,1.36l-5.16,1.13L746.94,10.09L746.94,10.09M746.49,23.31l-3.48-0.9L741,24.56l-0.9,2.94l4.71-0.45l3.59-1.81L746.49,23.31L746.49,23.31M836.68,3.76l-2.92-0.9L830.4,4.1l-1.68,2.49l2.13,2.83l5.61-2.49l1.12-1.24L836.68,3.76L836.68,3.76M817.97,72.93l1.76,6.08l3.52,1.01l3.52-5.57l-2.01-3.8l0.75-3.29h5.28l-1.26,2.53l0.5,9.12l-7.54,18.74l0.75,4.05l-0.25,6.84l14.07,20.51l2.76,0.76l0.25-16.71l2.76-2.53l-3.02-6.58l2.51-2.79l-5.53-7.34l-3.02,0.25l-1-12.15l7.79-2.03l0.5-3.55l4.02-1.01l2.26,2.03l2.76-11.14l4.77-8.1l3.77-2.03l3.27,0.25v-3.8l-5.28-1.01l-7.29-6.08l3.52-4.05l-3.02-6.84l2.51-2.53l3.02,4.05l7.54,2.79l8.29,0.76l1.01-3.54l-4.27-4.3l4.77-6.58l-10.81-3.8l-2.76,5.57l-3.52-4.56l-19.85-6.84l-18.85,3.29l-2.76,1.52v1.52l4.02,2.03l-0.5,4.81l-7.29-3.04l-16.08,6.33l-2.76-5.82h-11.06l-5.03,5.32l-17.84-4.05l-16.33,3.29l-2.01,5.06l2.51,0.76l-0.25,3.8l-15.83,1.77l1.01,5.06l-14.58-2.53l3.52-6.58l-14.83-0.76l1.26,6.84l-4.77,2.28l-4.02-3.8l-16.33,2.79l-6.28,5.82l-0.25,3.54l-4.02,0.25l-0.5-4.05l12.82-11.14v-7.6l-8.29-2.28l-10.81,3.54l-4.52-4.56h-2.01l-2.51,5.06l2.01,2.28l-14.33,7.85l-12.31,9.37l-7.54,10.38v4.3l8.04,3.29l-4.02,3.04l-8.54-3.04l-3.52,3.04l-5.28-6.08l-1.01,2.28l5.78,18.23l1.51,0.51l4.02-2.03l2.01,1.52v3.29l-3.77-1.52l-2.26,1.77l1.51,3.29l-1.26,8.61l-7.79,0.76l-0.5-2.79l4.52-2.79l1.01-7.6l-5.03-6.58l-1.76-11.39l-8.04-1.27l-0.75,4.05l1.51,2.03l-3.27,2.79l1.26,7.6l4.77,2.03l1.01,5.57l-4.78-3.04l-12.31-2.28l-1.51,4.05l-9.8,3.54l-1.51-2.53l-12.82,7.09l-0.25,4.81l-5.03,0.76l1.51-3.54v-3.54l-5.03-1.77l-3.27,1.27l2.76,5.32l2.01,3.54v2.79l-3.77-0.76l-0.75-0.76l-3.77,4.05l2.01,3.54l-8.54-0.25l2.76,3.55l-0.75,1.52h-4.52l-3.27-2.28l-0.75-6.33l-5.28-2.03v-2.53l11.06,2.28l6.03,0.51l2.51-3.8l-2.26-4.05l-16.08-6.33l-5.55,1.38l-1.9,1.63l0.59,3.75l2.36,0.41l-0.55,5.9l7.28,17.1l-5.26,8.34l-0.36,1.88l2.67,1.88l-2.41,1.59l-1.6,0.03l0.3,7.35l2.21,3.13l0.03,3.04l2.83,0.26l4.33,1.65l4.58,6.3l0.05,1.66l-1.49,2.55l3.42-0.19l3.33,0.96l4.5,6.37l11.08,1.01l-0.48,7.58l-3.82,3.27l0.79,1.28l-3.77,4.05l-1,3.8l2.26,3.29l7.29,2.53l3.02-1.77l19.35,7.34l0.75-2.03l-4.02-3.8v-4.81l-2.51-0.76l0.5-4.05l4.02-4.81l-7.21-5.4l0.5-7.51l7.71-5.07l9.05,0.51l1.51,2.79l9.3,0.51l6.79-3.8l-3.52-3.8l0.75-7.09l17.59-8.61l13.53,6.1l4.52-4.05l13.32,12.66l10.05-1.01l3.52,3.54l9.55,1.01l6.28-8.61l8.04,3.55l4.27,0.76l4.27-3.8l-3.77-2.53l3.27-5.06l9.3,3.04l2.01,4.05l4.02,0.25l2.51-1.77l6.79-0.25l0.75,1.77l7.79,0.51l5.28-5.57l10.81,1.27l3.27-1.27l1-6.08l-3.27-7.34l3.27-2.79h10.3l9.8,11.65l12.56,7.09h3.77l0.5-3.04l4.52-2.79l0.5,16.46l-4.02,0.25v4.05l2.26,2.79l-0.42,3.62l1.67,0.69l1.01-2.53l1.51,0.51l1,1.01l4.52-1.01l4.52-13.17l0.5-16.46l-5.78-13.17l-7.29-8.86l-3.52,0.51v2.79l-8.54-3.29l3.27-7.09l2.76-18.74l11.56-3.54l5.53-3.54h6.03L805.86,96l1.51,2.53l5.28-5.57l3.02,0.25l-0.5-3.29l-4.78-1.01l3.27-11.9L817.97,72.93L817.97,72.93z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b2d496" original="#b2d496"
                                          id="jqvmap1_ru" class="jvectormap-region"></path>
                                    <path d="M69.17,53.35l3.46,6.47l2.22-0.5v-2.24L69.17,53.35L69.17,53.35M49.66,110.26l-0.17,3.01l2.16-0.5v-1.34L49.66,110.26L49.66,110.26M46.34,111.6l-4.32,2.18l0.67,2.34l1.66-1.34l3.32-1.51L46.34,111.6L46.34,111.6M28.39,114.44l-2.99-0.67l-0.5,1.34l0.33,2.51L28.39,114.44L28.39,114.44M22.07,114.28l-2.83-1.17l-1,1.84l1.83,1.84L22.07,114.28L22.07,114.28M12.27,111.6l-1.33-1.84l-1.33,0.5v2.51l1.5,1L12.27,111.6L12.27,111.6M1.47,99.71l1.66,1.17l-0.5,1.34H1.47V99.71L1.47,99.71M10,248.7l-0.14,2.33l2.04,1.37l1.22-1.09L10,248.7L10,248.7M15.29,252.13l-1.9,1.37l1.63,2.05l1.9-1.64L15.29,252.13L15.29,252.13M19.1,255.41l-1.63,2.19l0.54,1.37l2.31-1.09L19.1,255.41L19.1,255.41M21.81,259.65l-0.95,5.47l0.95,2.05l3.12-0.96l1.63-2.74l-3.4-3.15L21.81,259.65L21.81,259.65M271.05,281.06l-2.64-0.89l-2.12,1.33l1.06,1.24l3.61,0.53L271.05,281.06L271.05,281.06M93.11,44.89l-8.39,1.99l1.73,9.45l9.13,2.49l0.49,1.99L82.5,65.04l-7.65,12.68l2.71,13.43L82,94.13l3.46-3.23l0.99,1.99l-4.2,4.97l-16.29,7.46l-10.37,2.49l-0.25,3.73l23.94-6.96l9.87-2.74l9.13-11.19l10.12-6.71l-5.18,8.7l5.68,0.75l9.63-4.23l1.73,6.96l6.66,1.49l6.91,6.71l0.49,4.97l-0.99,1.24l1.23,4.72h1.73l0.25-7.96h1.97l0.49,19.64l4.94-4.23l-3.46-20.39h-5.18l-5.68-7.21l27.89-47.25l-27.64-21.63l-30.85,5.97l-1.23,9.45l6.66,3.98l-2.47,6.47L93.11,44.89L93.11,44.89M148.76,158.34l-1,4.02l-3.49-2.26h-1.74l-1,4.27l-12.21,27.36l3.24,23.84l3.99,2.01l0.75,6.53h8.22l7.97,6.02l15.69,1.51l1.74,8.03l2.49,1.76l3.49-3.51l2.74,1.25l2.49,11.54l4.23,2.76l3.49-6.53l10.71-7.78l6.97,3.26l5.98,0.5l0.25-3.76l12.45,0.25l2.49,2.76l0.5,6.27l-1.49,3.51l1.74,6.02h3.74l3.74-5.77l-1.49-2.76l-1.49-6.02l2.24-6.78l10.21-8.78l7.72-2.26l-1-7.28l10.71-11.55l10.71-1.76L272.8,199l10.46-6.02v-8.03l-1-0.5l-3.74,1.25l-0.5,4.92l-12.43,0.15l-9.74,6.47l-15.29,5l-2.44-2.99l6.94-10.5l-3.43-3.27l-2.33-4.44l-4.83-3.88l-5.25-0.44l-9.92-6.77L148.76,158.34L148.76,158.34z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#909cae" original="#909cae"
                                          id="jqvmap1_us" class="jvectormap-region"></path>
                                    <path d="M613.01,398.99l-1.52,1.99l0.3,2.15l3.2-2.61L613.01,398.99L613.01,398.99z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_mu" class="jvectormap-region"></path>
                                    <path d="M607.38,402.37l-2.28,0.15l-0.15,1.99l1.52,0.31l2.28-1.07L607.38,402.37L607.38,402.37z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap1_re" class="jvectormap-region"></path>
                                    <path d="M592.3,372.92l-2.13,5.06l-3.65,6.44l-6.39,0.46l-2.74,3.22l0.46,9.82l-3.96,4.6l0.46,7.82l3.35,3.83l3.96-0.46l3.96-2.92l-0.91-4.6l9.13-15.8l-1.83-1.99l1.83-3.83l1.98,0.61l0.61-1.53l-1.83-7.82l-1.07-3.22L592.3,372.92L592.3,372.92z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_mg" class="jvectormap-region"></path>
                                    <path d="M577.69,371.23l0.46,1.53l1.98,0.31l0.76-1.99L577.69,371.23L577.69,371.23M580.58,374.3l0.76,1.69h1.22l0.61-2.15L580.58,374.3L580.58,374.3z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_km" class="jvectormap-region"></path>
                                    <path d="M602.35,358.34l-0.61,1.23l1.67,1.38l1.22-1.38L602.35,358.34L602.35,358.34M610.88,349.14l-1.83,1.23l1.37,2.15h1.83L610.88,349.14L610.88,349.14M611.64,354.51l-1.22,1.38l0.91,1.38l1.67,0.31l0.15-2.92L611.64,354.51L611.64,354.51z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_sc" class="jvectormap-region"></path>
                                    <path d="M656.4,320.76l0.3,2.61l1.67,0.61l0.3-2.3L656.4,320.76L656.4,320.76M658.53,326.28l-0.15,3.22l1.22,0.61l1.07-2.15L658.53,326.28L658.53,326.28M658.84,332.57l-1.07,1.07l1.22,1.07l1.52-1.07L658.84,332.57L658.84,332.57z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_mv" class="jvectormap-region"></path>
                                    <path d="M372.64,217.02l-1.36,1.37l2.44,1.37l0.27-1.91L372.64,217.02L372.64,217.02M379.97,216.2l-1.63,1.09l1.36,1.09l2.17-0.55L379.97,216.2L379.97,216.2M381.05,220.03l-0.81,2.19l1.08,1.37l1.36-1.09L381.05,220.03L381.05,220.03M387.56,224.4l-0.54,1.37l0.81,0.82l2.17-1.37L387.56,224.4L387.56,224.4M408.18,236.42l-1.08,1.37l1.08,1.37l1.63-0.82L408.18,236.42L408.18,236.42M430.93,211.24l-0.62,8.65l-1.77,1.6l0.18,0.98l1.24,2.05l-0.8,2.5l1.33,0.45l3.1-0.36l-0.18-2.5l2.03-11.59l-0.44-1.6L430.93,211.24L430.93,211.24z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d993" original="#b5d993"
                                          id="jqvmap1_pt" class="jvectormap-region"></path>
                                    <path d="M415.62,253.73l-1.75,1.01l0.81,0.82L415.62,253.73L415.62,253.73M409.54,253.92l-2.17,0.55l1.08,1.64h1.63L409.54,253.92L409.54,253.92M404.38,252.28l-1.36,1.37l1.9,1.64l1.08-2.46L404.38,252.28L404.38,252.28M448.36,205h-12.74l-2.57-1.16l-1.24,0.09l-1.5,3.12l0.53,3.21l4.87,0.45l0.62,2.05l-2.12,11.95l0.09,2.14l3.45,1.87l3.98,0.27l7.96-1.96l3.89-4.9l0.09-4.99l6.9-6.24l0.35-2.76l-6.28-0.09L448.36,205L448.36,205M461.1,217.21l-1.59,0.54l0.35,1.43h2.3l0.97-1.07L461.1,217.21L461.1,217.21z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b2d496" original="#b2d496"
                                          id="jqvmap1_es" class="jvectormap-region"></path>
                                    <path d="M387.56,290.54l-1.9,1.09l1.36,1.09l1.63-0.82L387.56,290.54L387.56,290.54M392.23,292.74l-1.24,1.1l0.88,1.63l2.12-0.95L392.23,292.74L392.23,292.74M389.52,295.83l-1.59,0.95l1.71,2.29l1.35-0.71L389.52,295.83L389.52,295.83z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_cv" class="jvectormap-region"></path>
                                    <path d="M27.25,402.68l-1.9-0.14l-0.14,1.78l1.49,0.96l1.77-1.09L27.25,402.68L27.25,402.68M33.77,404.6l-2.72,1.78l2.04,2.46l1.77-0.41l0.95-1.23L33.77,404.6L33.77,404.6z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap1_pf" class="jvectormap-region"></path>
                                    <path d="M276.6,283.37l-1.5,0.62l0.53,1.33l1.76-1.15l-0.35-0.36L276.6,283.37L276.6,283.37z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_kn" class="jvectormap-region"></path>
                                    <path d="M279.07,284.88l-0.88,1.87l1.06,1.42l1.32-1.15L279.07,284.88L279.07,284.88z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_ag" class="jvectormap-region"></path>
                                    <path d="M282.07,290.03l-1.06,0.98l0.79,1.6l1.5-0.44L282.07,290.03L282.07,290.03z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_dm" class="jvectormap-region"></path>
                                    <path d="M281.98,294.03l-0.71,1.51l1.15,1.24l1.5-0.8L281.98,294.03L281.98,294.03z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_lc" class="jvectormap-region"></path>
                                    <path d="M282.07,297.85l-1.23,0.89l0.97,1.78l1.59-0.89L282.07,297.85L282.07,297.85z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_bb" class="jvectormap-region"></path>
                                    <path d="M280.57,301.31l-1.15,1.15l0.44,0.71h1.41l0.44-1.16L280.57,301.31L280.57,301.31z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_gd" class="jvectormap-region"></path>
                                    <path d="M282.24,304.78l-1.06,0.98l-1.15,0.18v1.42l2.12,1.95l0.88-1.42l0.53-1.6l-0.18-1.33L282.24,304.78L282.24,304.78z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_tt" class="jvectormap-region"></path>
                                    <path d="M263.11,280.44l-5.29-3.46l-2.5-0.85l-0.84,6l0.88,1.69l1.15-1.33l3.35-0.89l2.91,0.62L263.11,280.44L263.11,280.44z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_do" class="jvectormap-region"></path>
                                    <path d="M250.86,275.38l3.44,0.36l-0.41,4.22l-0.34,2.22l-4.01-0.22l-0.71,1.07l-1.23-0.09l-0.44-2.31l4.23-0.35l-0.26-2.4l-1.94-0.8L250.86,275.38L250.86,275.38z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_ht" class="jvectormap-region"></path>
                                    <path d="M307.95,508.18l-2.63-0.29l-2.62,1.76l1.9,2.06L307.95,508.18L307.95,508.18M310.57,506.86l-0.87,2.79l-2.48,2.2l0.15,0.73l4.23-1.62l1.75-2.2L310.57,506.86L310.57,506.86z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap1_fk" class="jvectormap-region"></path>
                                    <path d="M406.36,117.31l-1.96-1.11l-2.64,1.67l-2.27,2.1l0.06,1.17l2.94,0.37l-0.18,2.1l-1.04,1.05l0.25,0.68l2.94,0.19v3.4l4.23,0.74l2.51,1.42l2.82,0.12l4.84-2.41l3.74-4.94l0.06-3.34l-2.27-1.92l-1.9-1.61l-0.86,0.62l-1.29,1.67l-1.47-0.19l-1.47-1.61l-1.9,0.18l-2.76,2.29l-1.66,1.79l-0.92-0.8l-0.06-1.98l0.92-0.62L406.36,117.31L406.36,117.31z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_is" class="jvectormap-region"></path>
                                    <path d="M488.26,53.96l-1.65-1.66l-3.66,1.78h-6.72L475.17,58l3.77,3.33l1.65-0.24l2.36-4.04l2,1.43l-1.42,2.85l-0.71,4.16l1.65,2.61l3.54-5.94l4.6-5.59l-1.77-1.54L488.26,53.96L488.26,53.96M490.26,46.83l-2.95,2.73l1.77,2.73h3.18l1.3,1.78l3.89,2.02l4.48-2.61l3.07-2.61l-1.06-2.14l-3.07-1.78l-2.24,2.02l-1.53-1.9l-1.18,0.12l-1.53,3.33l-2.24-2.26l-0.24-1.54L490.26,46.83L490.26,46.83M496.98,59.07l-2.36,2.14l-2,1.54l0.94,1.66l1.89,0.59l3.07-1.43l1.42-1.78l-1.3-2.14L496.98,59.07L496.98,59.07M515.46,102.14l2.02-1.48L517.3,99l-1.28-0.74l0.18-2.03h1.1v-1.11l-4.77-1.29l-7.15,0.74l-0.73,3.14L503,97.16l-1.1-1.85l-3.49,0.18L498.04,99l-1.65,0.74l-0.92-1.85l-7.34,5.91l1.47,1.66l-2.75,1.29l-6.24,12.38l-2.2,1.48l0.18,1.11l2.2,1.11l-0.55,2.4l-3.67-0.19l-1.1-1.29l-2.38,2.77l-1.47,1.11l-0.37,2.59l-1.28,0.74l-3.3,0.74l-1.65,5.18l1.1,8.5l1.28,3.88l1.47,1.48l3.3-0.18l4.77-4.62l1.83-3.14l0.55,4.62l3.12-5.54l0.18-15.53l2.54-1.6l0.76-8.57l7.7-11.09l3.67-1.29l1.65-2.03l5.5,1.29l2.75,1.66l0.92-4.62l4.59-2.77L515.46,102.14L515.46,102.14z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d894" original="#b5d894"
                                          id="jqvmap1_no" class="jvectormap-region"></path>
                                    <path d="M680.54,308.05l0.25,2.72l0.25,1.98l-1.47,0.25l0.74,4.45l2.21,1.24l3.43-1.98l-0.98-4.69l0.25-1.73l-3.19-2.96L680.54,308.05L680.54,308.05z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_lk" class="jvectormap-region"></path>
                                    <path d="M220.85,266.92v1.27l5.32,0.1l2.51-1.46l0.39,1.07l5.22,1.27l4.64,4.19l-1.06,1.46l0.19,1.66l3.87,0.97l3.87-1.75l1.74-1.75l-2.51-1.27l-12.95-7.6l-4.54-0.49L220.85,266.92L220.85,266.92z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap1_cu" class="jvectormap-region"></path>
                                    <path d="M239.61,259.13l-1.26-0.39l-0.1,2.43l1.55,1.56l1.06-1.56L239.61,259.13L239.61,259.13M242.12,262.93l-1.74,0.97l1.64,2.34l0.87-1.17L242.12,262.93L242.12,262.93M247.73,264.68l-1.84-0.1l0.19,1.17l1.35,1.95l1.16-1.27L247.73,264.68L247.73,264.68M246.86,262.35l-3-1.27l-0.58-3.02l1.16-0.49l1.16,2.34l1.16,0.88L246.86,262.35L246.86,262.35M243.96,256.21l-1.55-0.39l-0.29-1.95l-1.64-0.58l1.06-1.07l1.93,0.68l1.45,0.88L243.96,256.21L243.96,256.21z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_bs" class="jvectormap-region"></path>
                                    <path d="M238.93,279.59l-3.48,0.88v0.97l2.03,1.17h2.13l1.35-1.56L238.93,279.59L238.93,279.59z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_jm" class="jvectormap-region"></path>
                                    <path d="M230.2,335.85l-4.73,2.94l-0.34,4.36l-0.95,1.43l2.98,2.86l-1.29,1.41l0.3,3.6l5.33,1.27l8.07-9.55l-0.02-3.33l-3.87-0.25L230.2,335.85L230.2,335.85z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_ec" class="jvectormap-region"></path>
                                    <path d="M203.73,35.89l0.22,4.02l-7.98,8.27l2,6.7l5.76-1.56l3.33-4.92l8.42-3.13l6.87-0.45l-5.32-5.81l-2.66,2.01l-2-0.67l-1.11-2.46l-2.44-2.46L203.73,35.89L203.73,35.89M214.15,24.05l-1.77,3.13l8.65,3.13l3.1-4.69l1.33,3.13h2.22l4.21-4.69l-5.1-1.34l-2-1.56l-2.66,2.68L214.15,24.05L214.15,24.05M229.23,30.31l-6.87,2.9v2.23l8.87,3.35l-2,2.23l1.33,2.9l5.54-2.46h4.66l2.22,3.57l3.77-3.8l-0.89-3.58l-3.1,1.12l-0.44-4.47l1.55-2.68h-1.55l-2.44,1.56l-1.11,0.89l0.67,3.13l-1.77,1.34l-2.66-0.22l-0.67-4.02L229.23,30.31L229.23,30.31M238.32,23.38l-0.67,2.23l4.21,2.01l3.1-1.79l-0.22-1.34L238.32,23.38L238.32,23.38M241.64,19.58l-3.1,1.12l0.22,1.56l6.87-0.45l-0.22-1.56L241.64,19.58L241.64,19.58M256.5,23.38l-0.44,1.56l-1.11,1.56v2.23l4.21-0.67l4.43,3.8h1.55v-3.8l-4.43-4.92L256.5,23.38L256.5,23.38M267.81,27.85l1.77,2.01l-1.55,2.68l1.11,2.9l4.88-2.68v-2.01l-2.88-3.35L267.81,27.85L267.81,27.85M274.24,22.71l0.22,3.57h5.99l1.55,1.34l-0.22,1.56l-5.32,0.67l3.77,5.14l5.1,0.89l7.09-3.13l-10.2-15.42l-3.1,2.01l0.22,2.68l-3.55-1.34L274.24,22.71L274.24,22.71M222.58,47.96l-8.42,2.23l-4.88,4.25l0.44,4.69l8.87,2.68l-2,4.47l-6.43-4.02l-1.77,3.35l4.21,2.9l-0.22,4.69l6.43,1.79l7.76-0.45l1.33-2.46l5.76,6.48l3.99-1.34l0.67-4.47l2.88,2.01l0.44-4.47l-3.55-2.23l0.22-14.07l-3.1-2.46L231.89,56L222.58,47.96L222.58,47.96M249.63,57.79l-2.88-1.34l-1.55,2.01l3.1,4.92l0.22,4.69l6.65-4.02v-5.81l2.44-2.46l-2.44-1.79h-3.99L249.63,57.79L249.63,57.79M263.82,55.78l-4.66,3.8l1.11,4.69h2.88l1.33-2.46l2,2.01l2-0.22l5.32-4.47L263.82,55.78L263.82,55.78M263.37,48.4l-1.11,2.23l4.88,1.79l1.33-2.01L263.37,48.4L263.37,48.4M260.49,39.91l-4.88,0.67l-2.88,2.68l5.32,0.22l-1.55,4.02l1.11,1.79l1.55-0.22l3.77-6.03L260.49,39.91L260.49,39.91M268.92,38.35l-2.66,0.89l0.44,3.57l4.43,2.9l0.22,2.23l-1.33,1.34l0.67,4.47l17.07,5.58l4.66,1.56l4.66-4.02l-5.54-4.47l-5.1,1.34l-7.09-0.67l-2.66-2.68l-0.67-7.37l-4.43-2.23L268.92,38.35L268.92,38.35M282.88,61.59L278,61.14l-5.76,2.23l-3.1,4.24l0.89,11.62l9.53,0.45l9.09,4.47l6.43,7.37l4.88-0.22l-1.33,6.92l-4.43,7.37l-4.88,2.23l-3.55-0.67l-1.77-1.56l-2.66,3.57l1.11,3.57l3.77,0.22l4.66-2.23l3.99,10.28l9.98,6.48l6.87-8.71l-5.76-9.38l3.33-3.8l4.66,7.82l8.42-7.37l-1.55-3.35l-5.76,1.79l-3.99-10.95l3.77-6.25l-7.54-8.04l-4.21,2.9l-3.99-8.71l-8.42,1.12l-2.22-10.5l-6.87,4.69l-0.67,5.81h-3.77l0.44-5.14L282.88,61.59L282.88,61.59M292.86,65.61l-1.77,1.79l1.55,2.46l7.32,0.89l-4.66-4.92L292.86,65.61L292.86,65.61M285.77,40.36v2.01l-4.88,1.12l1.33,2.23l5.54,2.23l6.21,0.67l4.43,3.13l4.43-2.46l-3.1-3.13h3.99l2.44-2.68l5.99-0.89v-1.34l-3.33-2.23l0.44-2.46l9.31,1.56l13.75-5.36l-5.1-1.56l1.33-1.79h10.64l1.77-1.79l-21.51-7.6l-5.1-1.79l-5.54,4.02l-6.21-5.14l-3.33-0.22l-0.67,4.25l-4.21-3.8l-4.88,1.56l0.89,2.46l7.32,1.56l-0.44,3.57l3.99,2.46l9.76-2.46l0.22,3.35l-7.98,3.8l-4.88-3.8l-4.43,0.45l4.43,6.26l-2.22,1.12l-3.33-2.9l-2.44,1.56l2.22,4.24h3.77l-0.89,4.02l-3.1-0.45l-3.99-4.25L285.77,40.36L285.77,40.36M266.01,101.85l-4.23,5.32l-0.26,5.86l3.7-2.13h4.49l3.17,2.93l2.91-2.4L266.01,101.85L266.01,101.85M317.52,171.05l-10.57,10.12l1.06,2.4l12.94,4.79l1.85-3.19l-1.06-5.32l-4.23,0.53l-2.38-2.66l3.96-3.99L317.52,171.05L317.52,171.05M158.22,48.66l1.99,3.01l1,4.02l4.98,1.25l3.49-3.76l2.99,1.51l8.47,0.75l5.98-2.51l1,8.28h3.49V57.7l3.49,0.25l8.72,10.29l5.73,3.51l-2.99,4.77l1.25,1.25L219,80.03l0.25,5.02l2.99,0.5l0.75-7.53l4.73-1.25l3.49,5.27l7.47,3.51l3.74,0.75l2.49-3.01l0.25-4.77l4.48-2.76l1.49,4.02l-3.99,7.03l0.5,3.51l2.24-3.51l4.48-4.02l0.25-5.27l-2.49-4.02l0.75-3.26l5.98-3.01l2.74,2.01l0.5,17.57l4.23-3.76l2.49,1.51l-3.49,6.02l4.48,1l6.48-10.04l5.48,5.77l-2.24,10.29l-5.48,3.01l-5.23-2.51l-9.46,2.01l1,3.26l-2.49,4.02l-7.72,1.76l-8.72,6.78l-7.72,10.29l-1,3.26l5.23,2.01l1.99,5.02l7.22,7.28l11.46,5.02l-2.49,11.54l-0.25,3.26l2.99,2.01l3.99-5.27l0.5-10.04l6.23-0.25l2.99-5.77l0.5-8.78l7.97-15.56l9.96,3.51l5.23,7.28l-2.24,7.28l3.99,2.26l9.71-6.53l2.74,17.82l8.97,10.79l0.25,5.52l-9.96,2.51l-4.73,5.02l-9.96-2.26l-4.98-0.25l-8.72,6.78l5.23-1.25l6.48-1.25l1.25,1.51l-1.74,5.52l0.25,5.02l2.99,2.01l2.99-0.75l1.5-2.26h1.99l-3.24,6.02l-6.23,0.25l-2.74,4.02h-3.49l-1-3.01l4.98-5.02l-5.98,2.01l-0.27-8.53l-1.72-1l-5.23,2.26l-0.5,4.27h-11.96l-10.21,7.03l-13.7,4.52l-1.49-2.01l6.9-10.3l-3.92-3.77l-2.49-4.78l-5.07-3.87l-5.44-0.45l-9.75-6.83l-70.71-11.62l-1.17-4.79l-6.48-6.02v-5.02l1-4.52l-0.5-2.51l-2.49-2.51l-0.5-4.02l6.48-4.52l-3.99-21.58l-5.48-0.25l-4.98-6.53L158.22,48.66L158.22,48.66M133.83,128.41l-1.7,3.26l0.59,2.31l1.11,0.69l-0.26,0.94l-1.19,0.34l0.34,3.43l1.28,1.29l1.02-1.11l-1.28-3.34l0.76-2.66l1.87-2.49l-1.36-2.31L133.83,128.41L133.83,128.41M139.45,147.95l-1.53,0.6l2.81,3.26l0.68,3.86l2.81,3l2.38-0.43v-3.94l-2.89-1.8L139.45,147.95L139.45,147.95z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b2d396" original="#b2d396"
                                          id="jqvmap1_ca" class="jvectormap-region"></path>
                                    <path d="M194.88,291.52l5.93,4.34l5.98-7.43l-1.02-1.54l-2.04-0.07v-4.35l-1.53-0.93l-4.63,1.38l1.77,4.08L194.88,291.52L194.88,291.52z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_gt" class="jvectormap-region"></path>
                                    <path d="M207.55,288.78l9.24-0.35l2.74,3.26l-1.71-0.39l-3.29,0.14l-4.3,4.04l-1.84,4.09l-1.21-0.64l-0.01-4.48l-2.66-1.78L207.55,288.78L207.55,288.78z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_hn" class="jvectormap-region"></path>
                                    <path d="M201.65,296.27l4.7,2.34l-0.07-3.71l-2.41-1.47L201.65,296.27L201.65,296.27z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_sv" class="jvectormap-region"></path>
                                    <path d="M217.74,292.11l2.19,0.44l0.07,4.49l-2.55,7.28l-6.87-0.68l-1.53-3.51l2.04-4.26l3.87-3.6L217.74,292.11L217.74,292.11z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_ni" class="jvectormap-region"></path>
                                    <path d="M217.38,304.98l1.39,2.72l1.13,1.5l-1.52,4.51l-2.9-2.04l-4.74-4.34v-2.87L217.38,304.98L217.38,304.98z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_cr" class="jvectormap-region"></path>
                                    <path d="M220.59,309.61l-1.46,4.56l4.82,1.25l2.99,0.59l0.51-3.53l3.21-1.62l2.85,1.47l1.12,1.79l1.36-0.16l1.07-3.25l-3.56-1.47l-2.7-1.47l-2.7,1.84l-3.21,1.62l-3.28-1.32L220.59,309.61L220.59,309.61z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_pa" class="jvectormap-region"></path>
                                    <path d="M253.73,299.78l-2.06-0.21l-13.62,11.23l-1.44,3.95l-1.86,0.21l0.83,8.73l-4.75,11.65l5.16,4.37l6.61,0.42l4.54,6.66l6.6,0.21l-0.21,4.99H256l2.68-9.15l-2.48-3.12l0.62-5.82l5.16-0.42l-0.62-13.52l-11.56-3.74l-2.68-7.28L253.73,299.78L253.73,299.78z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d994" original="#b5d994"
                                          id="jqvmap1_co" class="jvectormap-region"></path>
                                    <path d="M250.46,305.92l0.44,2.59l3.25,1.03l0.74-4.77l3.43-3.55l3.43,4.02l7.89,2.15l6.68-1.4l4.55,5.61l3.43,2.15l-3.76,5.73l1.26,4.34l-2.15,2.66l-2.23,1.87l-4.83-2.43l-1.11,1.12v3.46l3.53,1.68l-2.6,2.81l-2.6,2.81l-3.43-0.28l-3.45-3.79l-0.73-14.26l-11.78-4.02l-2.14-6.27L250.46,305.92L250.46,305.92z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d994" original="#b5d994"
                                          id="jqvmap1_ve" class="jvectormap-region"></path>
                                    <path d="M285.05,314.13l7.22,6.54l-2.87,3.32l-0.23,1.97l3.77,3.89l-0.09,3.74l-6.56,2.5l-3.93-5.31l0.84-6.38l-1.68-4.75L285.05,314.13L285.05,314.13z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_gy" class="jvectormap-region"></path>
                                    <path d="M293.13,321.14l2.04,1.87l3.16-1.96l2.88,0.09l-0.37,1.12l-1.21,2.52l-0.19,6.27l-5.75,2.34l0.28-4.02l-3.71-3.46l0.19-1.78L293.13,321.14L293.13,321.14z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_sr" class="jvectormap-region"></path>
                                    <path d="M302.13,321.8l5.85,3.65l-3.06,6.08l-1.11,1.4l-3.25-1.87l0.09-6.55L302.13,321.8L302.13,321.8z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap1_gf" class="jvectormap-region"></path>
                                    <path d="M225.03,349.52l-1.94,1.96l0.13,3.13l16.94,30.88l17.59,11.34l2.72-4.56l0.65-10.03l-1.42-6.25l-4.79-8.08l-2.85,0.91l-1.29,1.43l-5.69-6.52l1.42-7.69l6.6-4.3l-0.52-4.04l-6.72-0.26l-3.49-5.86l-1.94-0.65l0.13,3.52l-8.66,10.29l-6.47-1.56L225.03,349.52L225.03,349.52z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6d993" original="#b6d993"
                                          id="jqvmap1_pe" class="jvectormap-region"></path>
                                    <path d="M258.71,372.79l8.23-3.59l2.72,0.26l1.81,7.56l12.54,4.17l2.07,6.39l5.17,0.65l2.2,5.47l-1.55,4.95l-8.41,0.65l-3.1,7.95l-6.6-0.13l-2.07-0.39l-3.81,3.7l-1.88-0.18l-6.47-14.99l1.79-2.68l0.63-10.6l-1.6-6.31L258.71,372.79L258.71,372.79z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_bo" class="jvectormap-region"></path>
                                    <path d="M291.76,399.51l2.2,2.4l-0.26,5.08l6.34-0.39l4.79,6.13l-0.39,5.47l-3.1,4.69l-6.34,0.26l-0.26-2.61l1.81-4.3l-6.21-3.91h-5.17l-3.88-4.17l2.82-8.06L291.76,399.51L291.76,399.51z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_py" class="jvectormap-region"></path>
                                    <path d="M300.36,431.93l-2.05,2.19l0.85,11.78l6.44,1.87l8.19-8.21L300.36,431.93L300.36,431.93z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_uy" class="jvectormap-region"></path>
                                    <path d="M305.47,418.2l1.94,1.82l-7.37,10.95l-2.59,2.87l0.9,12.51l5.69,6.91l-4.78,8.34l-3.62,1.56h-4.14l1.16,6.51l-6.47,2.22l1.55,5.47l-3.88,12.38l4.79,3.91l-2.59,6.38l-4.4,6.91l2.33,4.82l-5.69,0.91l-4.66-5.73l-0.78-17.85l-7.24-30.32l2.19-10.6l-4.66-13.55l3.1-17.59l2.85-3.39l-0.7-2.57l3.66-3.34l8.16,0.56l4.56,4.87l5.27,0.09l5.4,3.3l-1.59,3.72l0.38,3.76l7.65-0.36L305.47,418.2L305.47,418.2M288.92,518.79l0.26,5.73l4.4-0.39l3.75-2.48l-6.34-1.3L288.92,518.79L288.92,518.79z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d994" original="#b5d994"
                                          id="jqvmap1_ar" class="jvectormap-region"></path>
                                    <path d="M285.04,514.1l-4.27,9.38l7.37,0.78l0.13-6.25L285.04,514.1L285.04,514.1M283.59,512.63l-3.21,3.55l-0.39,4.17l-6.21-3.52l-6.6-9.51l-1.94-3.39l2.72-3.52l-0.26-4.43l-3.1-1.3l-2.46-1.82l0.52-2.48l3.23-0.91l0.65-14.33l-5.04-2.87l-3.29-74.59l0.85-1.48l6.44,14.85l2.06,0.04l0.67,2.37l-2.74,3.32l-3.15,17.87l4.48,13.76l-2.07,10.42l7.3,30.64l0.77,17.92l5.23,6.05L283.59,512.63L283.59,512.63M262.28,475.14l-1.29,1.95l0.65,3.39l1.29,0.13l0.65-4.3L262.28,475.14L262.28,475.14z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d993" original="#b5d993"
                                          id="jqvmap1_cl" class="jvectormap-region"></path>
                                    <path d="M314.24,438.85l6.25-12.02l0.23-10.1l11.66-7.52h6.53l5.13-8.69l0.93-16.68l-2.1-4.46l12.36-11.28l0.47-12.45l-16.79-8.22l-20.28-6.34l-9.56-0.94l2.57-5.4l-0.7-8.22l-2.09-0.69l-3.09,6.14l-1.62,2.03l-4.16-1.84l-13.99,4.93l-4.66-5.87l0.75-6.13l-4.4,4.48l-4.86-2.62l-0.49,0.69l0.01,2.13l4.19,2.25l-6.29,6.63l-3.97-0.04l-4.02-4.09l-4.55,0.14l-0.56,4.86l2.61,3.17l-3.08,9.87l-3.6,0.28l-5.73,3.62l-1.4,7.11l4.97,5.32l0.91-1.03l3.49-0.94l2.98,5.02l8.53-3.66l3.31,0.19l2.28,8.07l12.17,3.86l2.1,6.44l5.18,0.62l2.47,6.15l-1.67,5.47l2.18,2.86l-0.32,4.26l5.84-0.55l5.35,6.76l-0.42,4.75l3.17,2.68l-7.6,11.51L314.24,438.85L314.24,438.85z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b1d197" original="#b1d197"
                                          id="jqvmap1_br" class="jvectormap-region"></path>
                                    <path d="M204.56,282.4l-0.05,3.65h0.84l2.86-5.34h-1.94L204.56,282.4L204.56,282.4z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_bz" class="jvectormap-region"></path>
                                    <path d="M673.8,170.17l5.82-7.72l6.99,3.23l4.75,1.27l5.82-5.34l-3.95-2.91l2.6-3.67l7.76,2.74l2.69,4.41l4.86,0.13l2.54-1.89l5.23-0.21l1.14,1.94l8.69,0.44l5.5-5.61l7.61,0.8l-0.44,7.64l3.33,0.76l4.09-1.86l4.33,2.14l-0.1,1.08l-3.14,0.09l-3.27,6.86l-2.54,0.25l-9.88,12.91l-10.09,4.45l-6.31,0.49l-5.24-3.38l-6.7,3.58l-6.6-2.05l-1.87-4.79l-12.5-0.88l-6.4-10.85l-3.11-0.2L673.8,170.17L673.8,170.17z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_mn" class="jvectormap-region"></path>
                                    <path d="M778.28,194.27l1.84,0.77l0.56,6.44l3.65,0.21l3.44-4.03l-1.19-1.06l0.14-4.32l3.16-3.82l-1.61-2.9l1.05-1.2l0.58-3l-1.83-0.83l-1.56,0.79l-1.93,5.86l-3.12-0.27l-3.61,4.26L778.28,194.27L778.28,194.27z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap1_kp" class="jvectormap-region"></path>
                                    <path d="M788.34,198.2l6.18,5.04l1.05,4.88l-0.21,2.62l-3.02,3.4l-2.6,0.14l-2.95-6.37l-1.12-3.04l1.19-0.92l-0.28-1.27l-1.47-0.66L788.34,198.2L788.34,198.2z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b3d695" original="#b3d695"
                                          id="jqvmap1_kr" class="jvectormap-region"></path>
                                    <path d="M576.69,188.62l4.1-1.75l4.58-0.16l0.32,7h-2.68l-2.05,3.34l2.68,4.45l3.95,2.23l0.36,2.55l1.45-0.48l1.34-1.59l2.21,0.48l1.11,2.23h2.84v-2.86l-1.74-5.09l-0.79-4.13l5.05-2.23l6.79,1.11l4.26,4.29l9.63-0.95l5.37,7.63l6.31,0.32l1.74-2.86l2.21-0.48l0.32-3.18l3.31-0.16l1.74,2.07l1.74-4.13l14.99,2.07l2.52-3.34l-4.26-5.25l5.68-12.4l4.58,0.32l3.16-7.63l-6.31-0.64l-3.63-3.5l-10,1.16l-12.88-12.45l-4.54,4.03l-13.77-6.25l-16.89,8.27l-0.47,5.88l3.95,4.61l-7.7,4.35l-9.99-0.22l-2.09-3.07l-7.83-0.43l-7.42,4.77l-0.16,6.52L576.69,188.62L576.69,188.62z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6d993" original="#b6d993"
                                          id="jqvmap1_kz" class="jvectormap-region"></path>
                                    <path d="M593.85,207.59l-0.62,2.63h-4.15v3.56l4.46,2.94l-1.38,4.03v1.86l1.85,0.31l2.46-3.25l5.54-1.24l11.84,4.49l0.15,3.25l6.61,0.62l7.38-7.75l-0.92-2.48l-4.92-1.08l-13.84-8.99l-0.62-3.25h-5.23l-2.31,4.34h-2.31L593.85,207.59L593.85,207.59z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap1_tm" class="jvectormap-region"></path>
                                    <path d="M628.92,219.06l3.08,0.16v-5.27l-2.92-1.7l4.92-6.2h2l2,2.33l5.23-2.01l-7.23-2.48l-0.28-1.5l-1.72,0.42l-1.69,2.94l-7.29-0.24l-5.35-7.57l-9.4,0.93l-4.48-4.44l-6.2-1.05l-4.5,1.83l2.61,8.68l0.03,2.92l1.9,0.04l2.33-4.44l6.2,0.08l0.92,3.41l13.29,8.82l5.14,1.18L628.92,219.06L628.92,219.06z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_uz" class="jvectormap-region"></path>
                                    <path d="M630.19,211.84l4.11-5.1h1.55l0.54,1.14l-1.9,1.38v1.14l1.25,0.9l6.01,0.36l1.96-0.84l0.89,0.18l0.6,1.92l3.57,0.36l1.79,3.78l-0.54,1.14l-0.71,0.06l-0.71-1.44l-1.55-0.12l-2.68,0.36l-0.18,2.52l-2.68-0.18l0.12-3.18l-1.96-1.92l-2.98,2.46l0.06,1.62l-2.62,0.9h-1.55l0.12-5.58L630.19,211.84L630.19,211.84z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_tj" class="jvectormap-region"></path>
                                    <path d="M636.81,199.21l-0.31,2.53l0.25,1.56l8.7,2.92l-7.64,3.08l-0.87-0.72l-1.65,1.06l0.08,0.58l0.88,0.4l5.36,0.14l2.72-0.82l3.49-4.4l4.37,0.76l5.27-7.3l-14.1-1.92l-1.95,4.73l-2.46-2.64L636.81,199.21L636.81,199.21z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_kg" class="jvectormap-region"></path>
                                    <path d="M614.12,227.05l1.59,12.46l3.96,0.87l0.37,2.24l-2.84,2.37l5.29,4.27l10.28-3.7l0.82-4.38l6.47-4.04l2.48-9.36l1.85-1.99l-1.92-3.34l6.26-3.87l-0.8-1.12l-2.89,0.18l-0.26,2.66l-3.88-0.04l-0.07-3.55l-1.25-1.49l-2.1,1.91l0.06,1.75l-3.17,1.2l-5.85-0.37l-7.6,7.96L614.12,227.05L614.12,227.05z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_af" class="jvectormap-region"></path>
                                    <path d="M623.13,249.84l2.6,3.86l-0.25,1.99l-3.46,1.37l-0.25,3.24h3.96l1.36-1.12h7.54l6.8,5.98l0.87-2.87h5.07l0.12-3.61l-5.19-4.98l1.11-2.74l5.32-0.37l7.17-14.95l-3.96-3.11l-1.48-5.23l9.64-0.87l-5.69-8.1l-3.03-0.82l-1.24,1.5l-0.93,0.07l-5.69,3.61l1.86,3.12l-2.1,2.24l-2.6,9.59l-6.43,4.11l-0.87,4.49L623.13,249.84L623.13,249.84z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6d993" original="#b6d993"
                                          id="jqvmap1_pk" class="jvectormap-region"></path>
                                    <path d="M670.98,313.01l4.58-2.24l2.72-9.84l-0.12-12.08l15.58-16.82v-3.99l3.21-1.25l-0.12-4.61l-3.46-6.73l1.98-3.61l4.33,3.99l5.56,0.25v2.24l-1.73,1.87l0.37,1l2.97,0.12l0.62,3.36h0.87l2.23-3.99l1.11-10.46l3.71-2.62l0.12-3.61l-1.48-2.87l-2.35-0.12l-9.2,6.08l0.58,3.91l-6.46-0.02l-2.28-2.79l-1.24,0.16l0.42,3.88l-13.97-1l-8.66-3.86l-0.46-4.75l-5.77-3.58l-0.07-7.37l-3.96-4.53l-9.1,0.87l0.99,3.96l4.46,3.61l-7.71,15.78l-5.16,0.39l-0.85,1.9l5.08,4.7l-0.25,4.75l-5.19-0.08l-0.56,2.36l4.31-0.19l0.12,1.87l-3.09,1.62l1.98,3.74l3.83,1.25l2.35-1.74l1.11-3.11l1.36-0.62l1.61,1.62l-0.49,3.99l-1.11,1.87l0.25,3.24L670.98,313.01L670.98,313.01z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b2d496" original="#b2d496"
                                          id="jqvmap1_in" class="jvectormap-region"></path>
                                    <path d="M671.19,242.56l0.46,4.27l8.08,3.66l12.95,0.96l-0.49-3.13l-8.65-2.38l-7.34-4.37L671.19,242.56L671.19,242.56z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_np" class="jvectormap-region"></path>
                                    <path d="M695.4,248.08l1.55,2.12l5.24,0.04l-0.53-2.9L695.4,248.08L695.4,248.08z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_bt" class="jvectormap-region"></path>
                                    <path d="M695.57,253.11l-1.31,2.37l3.4,6.46l0.1,5.04l0.62,1.35l3.99,0.07l2.26-2.17l1.64,0.99l0.33,3.07l1.31-0.82l0.08-3.92l-1.1-0.13l-0.69-3.33l-2.78-0.1l-0.69-1.85l1.7-2.27l0.03-1.12h-4.94L695.57,253.11L695.57,253.11z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_bd" class="jvectormap-region"></path>
                                    <path d="M729.44,303.65l-2.77-4.44l2.01-2.82l-1.9-3.49l-1.79-0.34l-0.34-5.86l-2.68-5.19l-0.78,1.24l-1.79,3.04l-2.24,0.34l-1.12-1.47l-0.56-3.95l-1.68-3.16l-6.84-6.45l1.68-1.11l0.31-4.67l2.5-4.2l1.08-10.45l3.62-2.47l0.12-3.81l2.17,0.72l3.42,4.95l-2.54,5.44l1.71,4.27l4.23,1.66l0.77,4.65l5.68,0.88l-1.57,2.71l-7.16,2.82l-0.78,4.62l5.26,6.76l0.22,3.61l-1.23,1.24l0.11,1.13l3.92,5.75l0.11,5.97L729.44,303.65L729.44,303.65z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_mm" class="jvectormap-region"></path>
                                    <path d="M730.03,270.47l3.24,4.17v5.07l1.12,0.56l5.15-2.48l1.01,0.34l6.15,7.1l-0.22,4.85l-2.01-0.34l-1.79-1.13l-1.34,0.11l-2.35,3.94l0.45,2.14l1.9,1.01l-0.11,2.37l-1.34,0.68l-4.59-3.16v-2.82l-1.9-0.11l-0.78,1.24l-0.4,12.62l2.97,5.42l5.26,5.07l-0.22,1.47l-2.8-0.11l-2.57-3.83h-2.69l-3.36-2.71l-1.01-2.82l1.45-2.37l0.5-2.14l1.58-2.8l-0.07-6.44l-3.86-5.58l-0.16-0.68l1.25-1.26l-0.29-4.43l-5.14-6.51l0.6-3.75L730.03,270.47L730.03,270.47z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d994" original="#b5d994"
                                          id="jqvmap1_th" class="jvectormap-region"></path>
                                    <path d="M740.48,299.47l4.09,4.37l7.61-5.64l0.67-8.9l-3.93,2.71l-2.04-1.14l-2.77-0.37l-1.55-1.09l-0.75,0.04l-2.03,3.33l0.33,1.54l2.06,1.15l-0.25,3.13L740.48,299.47L740.48,299.47z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_kh" class="jvectormap-region"></path>
                                    <path d="M735.47,262.93l-2.42,1.23l-2.01,5.86l3.36,4.28l-0.56,4.73l0.56,0.23l5.59-2.71l7.5,8.38l-0.18,5.28l1.63,0.88l4.03-3.27l-0.33-2.59l-11.63-11.05l0.11-1.69l1.45-1.01l-1.01-2.82l-4.81-0.79L735.47,262.93L735.47,262.93z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_la" class="jvectormap-region"></path>
                                    <path d="M745.06,304.45l1.19,1.87l0.22,2.14l3.13,0.34l3.8-5.07l3.58-1.01l1.9-5.18l-0.89-8.34l-3.69-5.07l-3.89-3.11l-4.95-8.5l3.55-5.94l-5.08-5.83l-4.07-0.18l-3.66,1.97l1.09,4.71l4.88,0.86l1.31,3.63l-1.72,1.12l0.11,0.9l11.45,11.2l0.45,3.29l-0.69,10.4L745.06,304.45L745.06,304.45z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_vn" class="jvectormap-region"></path>
                                    <path d="M555.46,204.16l3.27,4.27l4.08,1.88l2.51-0.01l4.31-1.17l1.08-1.69l-12.75-4.77L555.46,204.16L555.46,204.16z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_ge" class="jvectormap-region"></path>
                                    <path d="M569.72,209.89l4.8,6.26l-1.41,1.65l-3.4-0.59l-4.22-3.78l0.23-2.48L569.72,209.89L569.72,209.89z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_am" class="jvectormap-region"></path>
                                    <path d="M571.41,207.72l-1.01,1.72l4.71,6.18l1.64-0.53l2.7,2.83l1.17-4.96l2.93,0.47l-0.12-1.42l-4.82-4.22l-0.92,2.48L571.41,207.72L571.41,207.72z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_az" class="jvectormap-region"></path>
                                    <path d="M569.65,217.95l-1.22,1.27l0.12,2.01l1.52,2.13l5.39,5.9l-0.82,2.36h-0.94l-0.47,2.36l3.05,3.9l2.81,0.24l5.63,7.79l3.16,0.24l2.46,1.77l0.12,3.54l9.73,5.67h3.63l2.23-1.89l2.81-0.12l1.64,3.78l10.51,1.46l0.31-3.86l3.48-1.26l0.16-1.38l-2.77-3.78l-6.17-4.96l3.24-2.95l-0.23-1.3l-4.06-0.63l-1.72-13.7l-0.2-3.15l-11.01-4.21l-4.88,1.1l-2.73,3.35l-2.42-0.16l-0.7,0.59l-5.39-0.35l-6.8-4.96l-2.53-2.77l-1.16,0.28l-2.09,2.39L569.65,217.95L569.65,217.95z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d994" original="#b5d994"
                                          id="jqvmap1_ir" class="jvectormap-region"></path>
                                    <path d="M558.7,209.19l-2.23,2.36l-8.2-0.24l-4.92-2.95l-4.8-0.12l-5.51,3.9l-5.16,0.24l-0.47,2.95h-5.86l-2.34,2.13v1.18l1.41,1.18v1.3l-0.59,1.54l0.59,1.3l1.88-0.94l1.88,2.01l-0.47,1.42l-0.7,0.95l1.05,1.18l5.16,1.06l3.63-1.54v-2.24l1.76,0.35l4.22,2.48l4.57-0.71l1.99-1.89l1.29,0.47v2.13h1.76l1.52-2.95l13.36-1.42l5.83-0.71l-1.54-2.02l-0.03-2.73l1.17-1.4l-4.26-3.42l0.23-2.95h-2.34L558.7,209.19L558.7,209.19M523.02,209.7l-0.16,3.55l3.1-0.95l1.42-0.95l-0.42-1.54l-1.47-1.17L523.02,209.7L523.02,209.7z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b4d794" original="#b4d794"
                                          id="jqvmap1_tr" class="jvectormap-region"></path>
                                    <path d="M598.38,280.84l7.39-4.26l1.31-6.25l-1.62-0.93l0.67-6.7l1.41-0.82l1.51,2.37l8.99,4.7v2.61l-10.89,16.03l-5.01,0.17L598.38,280.84L598.38,280.84z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_om" class="jvectormap-region"></path>
                                    <path d="M594.01,264.94l0.87,3.48l9.86,0.87l0.69-7.14l1.9-1.04l0.52-2.61l-3.11,0.87l-3.46,5.23L594.01,264.94L594.01,264.94z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d993" original="#b5d993"
                                          id="jqvmap1_ae" class="jvectormap-region"></path>
                                    <path d="M592.63,259.02l-0.52,4.01l1.54,1.17l1.4-0.13l0.52-5.05l-1.21-0.87L592.63,259.02L592.63,259.02z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6d993" original="#b6d993"
                                          id="jqvmap1_qa" class="jvectormap-region"></path>
                                    <path d="M583.29,247.17l-2.25-1.22l-1.56,1.57l0.17,3.14l3.63,1.39L583.29,247.17L583.29,247.17z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_kw" class="jvectormap-region"></path>
                                    <path d="M584,253.24l7.01,9.77l2.26,1.8l1.01,4.38l10.79,0.85l1.22,0.64l-1.21,5.4l-7.09,4.18l-10.37,3.14l-5.53,5.4l-6.57-3.83l-3.98,3.48L566,279.4l-3.8-1.74l-1.38-2.09v-4.53l-13.83-16.72l-0.52-2.96h3.98l4.84-4.18l0.17-2.09l-1.38-1.39l2.77-2.26l5.88,0.35l10.03,8.36l5.92-0.27l0.38,1.46L584,253.24L584,253.24z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d894" original="#b5d894"
                                          id="jqvmap1_sa" class="jvectormap-region"></path>
                                    <path d="M546.67,229.13l-0.35,2.54l2.82,1.18l-0.12,7.04l2.82-0.06l2.82-2.13l1.06-0.18l6.4-5.09l1.29-7.39l-12.79,1.3l-1.35,2.96L546.67,229.13L546.67,229.13z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_sy" class="jvectormap-region"></path>
                                    <path d="M564.31,225.03l-1.56,7.71l-6.46,5.38l0.41,2.54l6.31,0.43l10.05,8.18l5.62-0.16l0.15-1.89l2.06-2.21l2.88,1.63l0.38-0.36l-5.57-7.41l-2.64-0.16l-3.51-4.51l0.7-3.32l1.07-0.14l0.37-1.47l-4.78-5.03L564.31,225.03L564.31,225.03z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_iq" class="jvectormap-region"></path>
                                    <path d="M548.9,240.78l-2.46,8.58l-0.11,1.31h3.87l4.33-3.82l0.11-1.45l-1.77-1.81l3.17-2.63l-0.46-2.44l-0.87,0.2l-2.64,1.89L548.9,240.78L548.9,240.78z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_jo" class="jvectormap-region"></path>
                                    <path d="M546.2,232.44l0.06,1.95l-0.82,2.96l2.82,0.24l0.18-4.2L546.2,232.44L546.2,232.44z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_lb" class="jvectormap-region"></path>
                                    <path d="M545.32,238.06l-1.58,5.03l2.05,6.03l2.35-8.81v-1.89L545.32,238.06L545.32,238.06z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d993" original="#b5d993"
                                          id="jqvmap1_il" class="jvectormap-region"></path>
                                    <path d="M543.21,229.84l1.23,0.89l-3.81,3.61l-1.82-0.06l-1.35-0.95l0.18-1.77l2.76-0.18L543.21,229.84L543.21,229.84z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_cy" class="jvectormap-region"></path>
                                    <path d="M446.12,149.08l-1.83,2.77l0.73,1.11h4.22v1.85l-1.1,1.48l0.73,3.88l2.38,4.62l1.83,4.25l2.93,1.11l1.28,2.22l-0.18,2.03l-1.83,1.11l-0.18,0.92l1.28,0.74l-1.1,1.48l-2.57,1.11l-4.95-0.55l-7.71,3.51l-2.57-1.29l7.34-4.25l-0.92-0.55l-3.85-0.37l2.38-3.51l0.37-2.96l3.12-0.37l-0.55-5.73l-3.67-0.18l-1.1-1.29l0.18-4.25l-2.2,0.18l2.2-7.39l4.04-2.96L446.12,149.08L446.12,149.08M438.42,161.47l-3.3,0.37l-0.18,2.96l2.2,1.48l2.38-0.55l0.92-1.66L438.42,161.47L438.42,161.47z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b0d097" original="#b0d097"
                                          id="jqvmap1_gb" class="jvectormap-region"></path>
                                    <path d="M439.51,166.55l-0.91,6l-8.07,2.96h-2.57l-1.83-1.29v-1.11l4.04-2.59l-1.1-2.22l0.18-3.14l3.49,0.18l1.6-3.76l-0.21,3.34l2.71,2.15L439.51,166.55L439.51,166.55z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d993" original="#b5d993"
                                          id="jqvmap1_ie" class="jvectormap-region"></path>
                                    <path d="M497.72,104.58l1.96,1.81h3.67l2.02,3.88l0.55,6.65l-4.95,3.51v3.51l-3.49,4.81l-2.02,0.18l-2.75,4.62l0.18,4.44l4.77,3.51l-0.37,2.03l-1.83,2.77l-2.75,2.4l0.18,7.95l-4.22,1.48l-1.47,3.14h-2.02l-1.1-5.54l-4.59-7.04l3.77-6.31l0.26-15.59l2.6-1.43l0.63-8.92l7.41-10.61L497.72,104.58L497.72,104.58M498.49,150.17l-2.11,1.67l1.06,2.45l1.87-1.82L498.49,150.17L498.49,150.17z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d894" original="#b5d894"
                                          id="jqvmap1_se" class="jvectormap-region"></path>
                                    <path d="M506.79,116.94l2.07,0.91l1.28,2.4l-1.28,1.66l-6.42,7.02l-1.1,3.7l1.47,5.36l4.95,3.7l6.6-3.14l5.32-0.74l4.95-7.95l-3.67-8.69l-3.49-8.32l0.55-5.36l-2.2-0.37l-0.57-3.91l-2.96-4.83l-3.28,2.27l-1.29,5.27l-3.48-2.09l-4.84-1.18l-1.08,1.26l1.86,1.68l3.39-0.06l2.73,4.41L506.79,116.94L506.79,116.94z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d993" original="#b5d993"
                                          id="jqvmap1_fi" class="jvectormap-region"></path>
                                    <path d="M518.07,151.37l-6.85-1.11l0.15,3.83l6.35,3.88l2.6-0.76l-0.15-2.92L518.07,151.37L518.07,151.37z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_lv" class="jvectormap-region"></path>
                                    <path d="M510.81,154.7l-2.15-0.05l-2.95,2.82h-2.5l0.15,3.53l-1.5,2.77l5.4,0.05l1.55-0.2l1.55,1.87l3.55-0.15l3.4-4.33l-0.2-2.57L510.81,154.7L510.81,154.7z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_lt" class="jvectormap-region"></path>
                                    <path d="M510.66,166.29l1.5,2.47l-0.6,1.97l0.1,1.56l0.55,1.87l3.1-1.76l3.85,0.1l2.7,1.11h6.85l2-4.79l1.2-1.81v-1.21l-4.3-6.05l-3.8-1.51l-3.1-0.35l-2.7,0.86l0.1,2.72l-3.75,4.74L510.66,166.29L510.66,166.29z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_by" class="jvectormap-region"></path>
                                    <path d="M511.46,174.76l0.85,1.56l0.2,1.66l-0.7,1.61l-1.6,3.08l-1.35,0.61l-1.75-0.76l-1.05,0.05l-2.55,0.96l-2.9-0.86l-4.7-3.33l-4.6-2.47l-1.85-2.82l-0.35-6.65l3.6-3.13l4.7-1.56l1.75-0.2l-0.7,1.41l0.45,0.55l7.91,0.15l1.7-0.05l2.8,4.29l-0.7,1.76l0.3,2.07L511.46,174.76L511.46,174.76z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d894" original="#b5d894"
                                          id="jqvmap1_pl" class="jvectormap-region"></path>
                                    <path d="M477.56,213.38l-2.65,1.34l0.35,5.17l2.12,0.36l1.59-1.52v-4.9L477.56,213.38L477.56,213.38M472.27,196.98l-0.62,1.57l0.17,1.71l2.39,2.79l3.76-0.13l8.3,9.64l5.18,1.5l3.06,2.89l0.73,6.59l1.64-0.96l1.42-3.59l-0.35-2.58l2.43-0.22l0.35-1.46l-6.85-3.28l-6.5-6.39l-2.59-3.82l-0.63-3.63l3.31-0.79l-0.85-2.39l-2.03-1.71l-1.75-0.08l-2.44,0.67l-2.3,3.22l-1.39,0.92l-2.15-1.32L472.27,196.98L472.27,196.98M492.44,223.02l-1.45-0.78l-4.95,0.78l0.17,1.34l4.45,2.24l0.67,0.73l1.17,0.17L492.44,223.02L492.44,223.02z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b1d197" original="#b1d197"
                                          id="jqvmap1_it" class="jvectormap-region"></path>
                                    <path d="M477.83,206.96l-1.95,1.96l-0.18,1.78l1.59,0.98l0.62-0.09l0.35-2.59L477.83,206.96L477.83,206.96M460.4,178.7l-2.21,0.54l-4.42,4.81l-1.33,0.09l-1.77-1.25l-1.15,0.27l-0.88,2.76l-6.46,0.18l0.18,1.43l4.42,2.94l5.13,4.1l-0.09,4.9l-2.74,4.81l5.93,2.85l6.02,0.18l1.86-2.14l3.8,0.09l1.06,0.98l3.8-0.27l1.95-2.5l-2.48-2.94l-0.18-1.87l0.53-2.05l-1.24-1.78l-2.12,0.62l-0.27-1.6l4.69-5.17v-3.12l-3.1-1.78l-1.59-0.27L460.4,178.7L460.4,178.7z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#afcf98" original="#afcf98"
                                          id="jqvmap1_fr" class="jvectormap-region"></path>
                                    <path d="M470.09,168.27l-4.53,2.23l0.96,0.87l0.1,2.23l-0.96-0.19l-1.06-1.65l-2.53,4.01l3.89,0.81l1.45,1.53l0.77,0.02l0.51-3.46l2.45-1.03L470.09,168.27L470.09,168.27z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b4d794" original="#b4d794"
                                          id="jqvmap1_nl" class="jvectormap-region"></path>
                                    <path d="M461.61,176.52l-0.64,1.6l6.88,4.54l1.98,0.47l0.07-2.15l-1.73-1.94h-1.06l-1.45-1.65L461.61,176.52L461.61,176.52z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d894" original="#b5d894"
                                          id="jqvmap1_be" class="jvectormap-region"></path>
                                    <path d="M471.14,167.88l3.57-0.58v-2.52l2.99-0.49l1.64,1.65l1.73,0.19l2.7-1.17l2.41,0.68l2.12,1.84l0.29,6.89l2.12,2.82l-2.79,0.39l-4.63,2.91l0.39,0.97l4.14,3.88l-0.29,1.94l-3.85,1.94l-3.57,0.1l-0.87,1.84h-1.83l-0.87-1.94l-3.18-0.78l-0.1-3.2l-2.7-1.84l0.29-2.33l-1.83-2.52l0.48-3.3l2.5-1.17L471.14,167.88L471.14,167.88z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#adcc99" original="#adcc99"
                                          id="jqvmap1_de" class="jvectormap-region"></path>
                                    <path d="M476.77,151.5l-4.15,4.59l-0.15,2.99l1.89,4.93l2.96-0.56l-0.37-4.03l2.04-2.28l-0.04-1.79l-1.44-3.73L476.77,151.5L476.77,151.5M481.44,159.64l-0.93-0.04l-1.22,1.12l0.15,1.75l2.89,0.08l0.15-1.98L481.44,159.64L481.44,159.64z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d994" original="#b5d994"
                                          id="jqvmap1_dk" class="jvectormap-region"></path>
                                    <path d="M472.91,189.38l-4.36,4.64l0.09,0.47l1.79-0.56l1.61,2.24l2.72-0.96l1.88,1.46l0.77-0.44l2.32-3.64l-0.59-0.56l-2.29-0.06l-1.11-2.27L472.91,189.38L472.91,189.38z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d894" original="#b5d894"
                                          id="jqvmap1_ch" class="jvectormap-region"></path>
                                    <path d="M488.43,184.87h2.97h1.46l2.37,1.69l4.39-3.65l-4.26-3.04l-4.22-2.04l-2.89,0.52l-3.92,2.52L488.43,184.87L488.43,184.87z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d993" original="#b5d993"
                                          id="jqvmap1_cz" class="jvectormap-region"></path>
                                    <path d="M495.84,187.13l0.69,0.61l0.09,1.04l7.63-0.17l5.64-2.43l-0.09-2.47l-1.08,0.48l-1.55-0.83l-0.95-0.04l-2.5,1l-3.4-0.82L495.84,187.13L495.84,187.13z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_sk" class="jvectormap-region"></path>
                                    <path d="M480.63,190.12l-0.65,1.35l0.56,0.96l2.33-0.48h1.98l2.15,1.82l4.57-0.83l3.36-2l0.86-1.35l-0.13-1.74l-3.02-2.26l-4.05,0.04l-0.34,2.3l-4.26,2.08L480.63,190.12L480.63,190.12z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d894" original="#b5d894"
                                          id="jqvmap1_at" class="jvectormap-region"></path>
                                    <path d="M496.74,189.6l-1.16,1.82l0.09,2.78l1.85,0.95l5.69,0.17l7.93-6.68l0.04-1.48l-0.86-0.43l-5.73,2.6L496.74,189.6L496.74,189.6z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6d993" original="#b6d993"
                                          id="jqvmap1_hu" class="jvectormap-region"></path>
                                    <path d="M494.8,191.99l-2.54,1.52l-4.74,1.04l0.95,2.74l3.32,0.04l3.06-2.56L494.8,191.99L494.8,191.99z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_si" class="jvectormap-region"></path>
                                    <path d="M495.62,195.16l-3.53,2.91h-3.58l-0.43,2.52l1.64,0.43l0.82-1.22l1.29,1.13l1.03,3.6l7.07,3.3l0.7-0.8l-7.17-7.4l0.73-1.35l6.81-0.26l0.69-2.17l-4.44,0.13L495.62,195.16L495.62,195.16z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_hr" class="jvectormap-region"></path>
                                    <path d="M494.8,198.94l-0.37,0.61l6.71,6.92l2.46-3.62l-0.09-1.43l-2.15-2.61L494.8,198.94L494.8,198.94z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_ba" class="jvectormap-region"></path>
                                    <path d="M492.61,230.47l-1.67,0.34l0.06,1.85l1.5,0.5l0.67-0.56L492.61,230.47L492.61,230.47z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_mt" class="jvectormap-region"></path>
                                    <path d="M515.57,173.15l-2.9,1.63l0.72,3.08l-2.68,5.65l0.02,2.49l1.26,0.8l8.08,0.4l2.26-1.87l2.42,0.81l3.47,4.63l-2.54,4.56l3.02,0.88l3.95-4.55l2.26,0.41l2.1,1.46l-1.85,2.44l2.5,3.9h2.66l1.37-2.6l2.82-0.57l0.08-2.11l-5.24-0.81l0.16-2.27h5.08l5.48-4.39l2.42-2.11l0.4-6.66l-10.8-0.97l-4.43-6.25l-3.06-1.05l-3.71,0.16l-1.67,4.13l-7.6,0.1l-2.47-1.14L515.57,173.15L515.57,173.15z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6d993" original="#b6d993"
                                          id="jqvmap1_ua" class="jvectormap-region"></path>
                                    <path d="M520.75,187.71l3.1,4.77l-0.26,2.7l1.11,0.05l2.63-4.45l-3.16-3.92l-1.79-0.74L520.75,187.71L520.75,187.71z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_md" class="jvectormap-region"></path>
                                    <path d="M512.18,187.6l-0.26,1.48l-5.79,4.82l4.84,7.1l3.1,2.17h5.58l1.84-1.54l2.47-0.32l1.84,1.11l3.26-3.71l-0.63-1.86l-3.31-0.85l-2.26-0.11l0.11-3.18l-3-4.72L512.18,187.6L512.18,187.6z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6d993" original="#b6d993"
                                          id="jqvmap1_ro" class="jvectormap-region"></path>
                                    <path d="M505.55,194.54l-2.05,1.54h-1l-0.68,2.12l2.42,2.81l0.16,2.23l-3,4.24l0.42,1.27l1.74,0.32l1.37-1.86l0.74-0.05l1.26,1.22l3.84-1.17l-0.32-5.46L505.55,194.54L505.55,194.54z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_rs" class="jvectormap-region"></path>
                                    <path d="M511.44,202.39l0.16,4.98l1.68,3.5l6.31,0.11l2.84-2.01l2.79-1.11l-0.68-3.18l0.63-1.7l-1.42-0.74l-1.95,0.16l-1.53,1.54l-6.42,0.05L511.44,202.39L511.44,202.39z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_bg" class="jvectormap-region"></path>
                                    <path d="M504.02,209.76v4.61l1.32,2.49l0.95-0.11l1.63-2.97l-0.95-1.33l-0.37-3.29l-1.26-1.17L504.02,209.76L504.02,209.76z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_al" class="jvectormap-region"></path>
                                    <path d="M510.92,208.01l-3.37,1.11l0.16,2.86l0.79,1.01l4-1.86L510.92,208.01L510.92,208.01z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap1_mk" class="jvectormap-region"></path>
                                    <path d="M506.71,217.6l-0.11,1.33l4.63,2.33l2.21,0.85l-1.16,1.22l-2.58,0.26l-0.37,1.17l0.89,2.01l2.89,1.54l1.26,0.11l0.16-3.45l1.89-2.28l-5.16-6.1l0.68-2.07l1.21-0.05l1.84,1.48l1.16-0.58l0.37-2.07l5.42,0.05l0.21-3.18l-2.26,1.59l-6.63-0.16l-4.31,2.23L506.71,217.6L506.71,217.6M516.76,230.59l1.63,0.05l0.68,1.01h2.37l1.58-0.58l0.53,0.64l-1.05,1.38l-4.63,0.16l-0.84-1.11l-0.89-0.53L516.76,230.59L516.76,230.59z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d994" original="#b5d994"
                                          id="jqvmap1_gr" class="jvectormap-region"></path>
                                </g>
                            </svg>
                            <div class="jqvmap-zoomin">+</div>
                            <div class="jqvmap-zoomout">−</div>
                        </div>
                        <div id="vmap_usa" class="vmaps display-none"
                             style="width: 757px; display: none; position: relative; overflow: hidden;">
                            <svg width="757" height="300">
                                <g transform="scale(0.5059021922428331) translate(268.66833333333335, 0)">
                                    <path d="m244.66,512.25c-2.48,3.8 2.23,4.04 4.74,5.38 3.06,0.16 3.51,-4.28 2.66,-6.56 -2.72,-0.77 -5.01,-0.19 -7.41,1.19z m-9.31,3.97c-4.02,5.11 3.64,0.48 0.63,-0.09l-0.5,0.07 -0.14,0.02z m39.69,7.97c-0.62,2.09 1.91,6.73 4.39,6.2 2.41,-1.46 3.73,1.73 6.48,0.56 1.23,-1.48 -3.77,-3.2 -3.7,-6.08 -0.95,-3.8 -3.28,-3.2 -5.96,-1.28 -0.41,0.2 -0.81,0.4 -1.22,0.6z m19.94,10.03c3.58,0.95 7.91,2.99 11.25,0.47 -1.05,-1.63 -5.06,-0.59 -7.1,-0.86 -1.44,0.01 -3.54,-1.63 -4.15,0.39z m12.13,4.38c2.33,2.45 3.64,6.83 7.24,7.4 2.36,-0.69 6.84,-0.66 7.32,-3.43 -2.09,-2.51 -5.77,-3.35 -8.88,-4.29 -2.53,-1.2 -4.11,-3.25 -5.68,0.33z m-7.06,1c-0.29,3.69 5.55,3.98 3.67,0.55 -0.27,-1.25 -3.83,-1.74 -3.67,-0.55z m23.66,14.69c0.27,2.45 3.18,3.93 0.47,6.15 -0.65,2.42 -5.54,2.87 -2.52,5.53 2.36,1.46 2.01,4.85 2.92,7.14 -0.72,2.69 -1.43,6.78 1.72,8.06 2.8,2.95 4.5,-1.93 6.19,-3.68 1.27,-1.69 3.85,-4.1 5.94,-2.59 3.04,-0.81 6.3,-2.42 7.78,-5.22 -2.79,-1.31 -4.88,-3.19 -5.57,-6.29 -2.4,-5.33 -8.95,-6.26 -13.58,-8.98 -1.29,-0.52 -2.26,-1.62 -3.34,-0.11z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_hi" class="jvectormap-region"></path>
                                    <path d="m107.84,436.56c-2.27,0.55 -4.87,0.32 -6.84,-0.34 -2.41,1.22 -5.63,4.03 -8.25,1.88 -3.1,0.93 -3.51,3.84 -5.22,5.97 -1.82,2.52 -4.21,3.65 -7.31,3.14 -2.5,-0.94 -5.49,-1.15 -7.5,0.98 2.03,4.34 6.39,8.13 5.82,13.23 -1.85,2.94 6.31,2.99 2.68,5.02 0.15,2.8 3.07,5.68 2.91,7.88 -2.35,2.21 -5.24,-0.38 -7.71,-1.06 -3.24,-0.64 -2.73,-3.35 -0.82,-5.22 -1.57,-1.51 -7.35,-1.81 -6.51,1.12 -2.01,0.04 -3.81,-1.66 -6.27,-0.77 -3.72,-0.44 -5.97,0.65 -2.94,4.05 3.68,1.45 1.06,4.72 1.17,7.57 0.76,2.63 3.66,4.89 6.67,4.17 3.2,-0.06 5.87,3.59 9.21,1.65 2.16,-1.3 5.33,-0.99 4.79,1.89 -2.53,2.07 -1.36,6.13 -2.78,8.75 -1.96,1.88 -4.53,1.59 -6.59,0.16 -1.52,1.37 -4.7,3.68 -6.28,2.22 0.72,-3.71 -4.77,-3.63 -5.51,-0.61 -1.21,3.97 -6.27,4.46 -8.31,7.63 -0.7,2.42 -1.55,6.7 1.74,6.3 1.26,1.11 -1.2,4.8 -2.77,5.52 1.62,2.19 2.65,4.59 2.72,7.34 1.71,1.55 6.35,1.98 7.5,-0.16 2.45,-0.95 1.79,4.1 2.08,5.97 2.47,2.95 -4.02,1.28 -1.61,4.56 -0.85,2.93 -1.76,5.02 2,2.72 2.76,-0.47 5.11,-0.69 5.66,2.09 2.59,-3.91 2.26,2.78 3.25,4.66 0.59,-0.75 1.3,-5.69 3.94,-3.06 -0.17,4.52 5.33,-0.45 5.78,-0.04 0.54,2.92 -1.63,4.24 -2.86,6.41 -1.51,2.24 -2.07,5.63 -4.21,7.17 -3.87,-0.42 -3.37,4.1 -5.5,5.02 -2.65,-0.72 -5.73,0.71 -8.44,1.41 -1.35,2.41 -3.61,4.2 -5.78,1.81 -2.56,0.05 -5.63,0.68 -7.63,2.33 -2.48,2.43 -6.32,3.11 -9.66,2.29 -2.78,-1.91 -7.11,3.41 -3.11,2.31 2.5,-1.91 4.66,0.64 7.25,0.63 2.21,-1.15 4.17,-2.75 6.84,-2.06 2.32,-3.35 5.1,-0.32 7.92,-1.16 2.31,-0.39 7.01,-3.91 5.26,0.66 0.09,-2.91 3.42,-2.73 5.54,-2.04 4.21,0.96 0.29,-3.16 2.08,-3.43 3.47,-2.05 7.52,-2.41 11.2,-3.72 5.48,-3.19 11.62,-5.7 16.21,-10.1 4.27,-2.97 -2.78,-3.48 -1.21,-6.32 1.68,-2.43 4.58,-3.81 7.47,-4.5 1.5,-3.07 3.53,-6.11 5.88,-8.52 2.49,-1.32 4.83,-3.39 7.83,-2.32 2.67,0.71 3.74,5.32 -0.52,3.66 -1.27,-1.88 -5.56,-0.09 -5.25,2.41 -0.21,2.44 -2.56,4.22 -3.06,6.66 4.79,0.85 0.24,3.54 -1.38,3.8 1.67,1.91 5.66,0.6 7.57,-1.14 1.25,-1.85 3.43,-3.8 5.41,-4.22 1.81,2.8 5.1,-1.16 5.74,2.72 0.71,2.78 6.02,-4.86 3.34,-3.1 -3.03,3.11 -3.78,2.86 -1.94,-1.24 1.43,-4.85 -1.76,6.17 -1.45,0.81 -0.81,-3.19 -0.93,-6.03 3.05,-6.4 2.7,-0.86 5.37,-0.87 5.79,2.52 0.42,3.48 3.8,2.84 5.95,4.76 2.41,2.2 4.76,1.95 7.8,1.78 4.34,-0.47 8.01,4.04 12.28,3.17 2.49,-0.42 5.1,-5.2 4.29,-0.23 -2.26,2.83 -0.02,4.12 2.5,5.41 3.13,1.35 5.87,3.14 7.94,5.85 1.31,3.02 6.05,0.28 6.18,2.43 -3.83,1.25 -1.23,3.54 0.21,5.47 1.81,1.95 0.33,5.72 3.64,5.82 1.14,1.28 3.49,7.44 4.01,5.38 -0.35,-2.32 -0.7,-7.86 1.61,-3.76 0.37,1.42 1.04,8.7 2.07,4.74 1.07,-4.88 3.18,0.18 2.22,2.93 3.33,1.69 -1.23,3.33 0.69,4.88 0.69,-3.24 1.31,-0.36 2.16,1.56 1.05,1 1.54,3.94 3.13,3.72 -1.68,-1.72 -2.94,-6.23 0.4,-3 2.42,2.79 4.05,2.12 2.74,-1.66 -2.65,-2.66 0.28,-4.96 2.58,-2.29 3.12,-0.05 2.84,5.21 5.28,4.53 3.31,-3.17 1.5,-7.87 0.69,-11.7 -3.3,-1.55 -7.04,-2.54 -10.22,-4.06 -1.5,-5.33 -6.29,-8.69 -8.4,-13.77 -0.44,-3.33 -4.71,-2.62 -5.75,-5.23 -2.32,-1.72 -2.7,-4.4 -4.56,-6.35 -1.65,-1.53 -5.22,0.95 -5.51,2.94 0.59,3.09 -3.23,3.04 -5.06,4.72 0.05,-4.27 -4.3,-6.15 -6.7,-9.1 -1.33,-1.99 -1.32,-5.36 -4.45,-2.34 -2.37,0.24 -6.38,-0.31 -5.34,-3.62 0.1,-27.7 0.2,-55.4 0.31,-83.09 -2.75,-1.88 -5.88,-4.17 -9.15,-4.4 -2.52,1.72 -5.07,1.09 -7.39,-0.62 -2.72,0.23 -5.12,-0.65 -7.7,-2.89 -3.08,-2.74 -8.58,0.17 -10.98,-3.65 1.13,-3.56 -3.22,-4.83 -5,-2.09 -2.09,0.26 -0.65,-4.31 -3.64,-4.93 -2.57,-2.85 -4.01,-1.28 -5.86,1.21z M36.38,480.63c-0.67,3.11 4.27,1.31 4.72,4.66 0.24,3.82 5.37,3.9 2.34,-0.08 -0.1,-3.22 -3.92,-1.83 -5.06,-4.43 -0.76,-2.02 -0.9,-1.86 -2,-0.16z m-17.16,23.16c2.57,4.06 1.45,1.37 0.13,-1.28 -0.36,0.01 0,1 -0.13,1.28z m21.84,14.81c1.27,1.79 4.99,5.58 6.22,2.03 2.26,-3.3 -3.27,-2.89 -5.23,-3.68 -1.83,-0.9 -0.88,0.54 -0.99,1.65z m91.72,18.78c0.06,3.21 2.81,-1.98 0,0z m-31.47,14.69c-3.2,2.91 -7.24,4.67 -10.56,7.38 0.22,2.75 0.99,7.64 4.67,5.15 2.5,-1.44 4.98,-2.9 7.45,-4.37 -1.84,-3.31 -0.81,-3.15 -4.55,-3.48 -4.15,0.09 1.06,-3.73 2.64,-1.62 3.74,-1.04 3.95,-2.36 1.5,-3.66 0.7,-1.08 -1,0.61 -1.16,0.59z M55.75,570.75c1.42,2.83 3.53,-1.99 0,0z m-35.78,0.34c0.53,2.46 -4.04,4.84 1.05,3.59 4.2,0.47 3.46,-4.35 0.01,-3.84 -0.35,0.08 -0.7,0.16 -1.06,0.24z m62.19,0.69c1.57,2.91 1.31,-2.03 0,0z M58.63,573.13c3.23,0.49 0.99,-3.05 0,0z m-49,0.09c-4.84,2.56 -0.44,1.81 2.29,0.58 2.89,0.16 5.05,-0.48 0.84,-1.46 -1.04,0.29 -2.08,0.58 -3.13,0.88z m7.25,1.38c1.28,0.21 -2.23,-0.59 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_ak" class="jvectormap-region"></path>
                                    <path d="m748.38,439.94c1.69,2.92 1.5,6.12 1.16,9.34 -4.12,0.54 -2.15,-4.69 -5.56,-3.99 -6.18,-0.07 -12.34,1.13 -18.54,1.19 -10.09,0.29 -20.37,2.14 -30.33,0.64 -2.57,-1.57 -2.84,-6.15 -6.5,-5.33 -9.12,-0.12 -18.18,1.79 -27.26,2.55 -5.82,0.63 -11.62,1.37 -17.43,2.12 -1.42,3.25 2.6,4.37 4.06,6.34 0.8,2.28 -1.56,8.42 2.19,7.1 4.11,-1.2 8.08,-2.93 12.48,-2.72 3.34,-0.82 6.63,-0.73 9.89,0.45 4.09,0.8 7.77,3.09 11.41,4.98 1.77,1.94 5.5,1.87 5.97,5 -0.14,3.27 4.32,-0.94 6.5,0.53 3.19,-0.8 5.24,-3.68 7.69,-5.5 4.86,1.69 0.62,-2.9 3.27,-3.97 3.13,-0.83 6.62,-1.39 9.35,0.79 3.04,0.57 5.43,2 6.57,4.99 3.68,0.02 2.88,4.13 5.48,5.3 2.96,0.49 2.98,4.52 6.3,4.3 2.91,0.36 5.45,1.15 5.84,4.45 2.05,2.11 3.92,4.26 3.09,7.41 0.18,3.68 0.12,7.33 -1.44,10.75 0.39,3.68 1.37,7.94 3.28,10.78 2.25,-3.46 0.17,-3.87 -1.74,-6.03 2.19,-1.76 4.86,-0.22 7.3,0.16 0.82,3.15 -2.16,5.6 -3.48,8.19 -3.3,2.21 1.65,4.09 2.73,6.3 3.11,3.34 4.35,7.94 7.53,11.26 0.78,2.29 2.51,7.47 4.63,3.09 2.54,-0.24 3.88,3.44 5.28,5.41 -0.02,2.26 1.93,7.04 3.59,6.44 2.88,-0.8 6.04,0.65 8.28,2.59 2.56,3.3 4.58,6.98 4.56,11.27 1.37,2.73 4.55,0.44 5.81,-1.14 3.74,0.45 7.26,-1.25 9.22,-4.47 -1.01,-2.36 -0.57,-4.83 -0.32,-7.17 -0.04,-2.18 4.33,-3.19 2.25,-6.51 -0.98,-6.33 -0.19,-12.96 -1.87,-19.25 -2.46,-6.93 -7.54,-12.74 -10.4,-19.56 -1.51,-2.41 -4.24,-3.92 -4.62,-7.04 -0.94,-2.28 -2.67,-4.95 -0.07,-6.71 -0.39,-3.56 -4.86,-5.42 -6.84,-8.41 -5.38,-5.57 -8.29,-12.94 -12.35,-19.44 -2.15,-5.53 -4.29,-11.07 -5.91,-16.78 -3.43,0.07 -7.3,-1.03 -10.46,-0.35l-0.34,0.37 -0.26,0.29z m52.91,109.22c-1.9,4.58 0.72,0.38 0.66,-1.91 -0.22,0.64 -0.44,1.27 -0.66,1.91z m-4.69,9.91c2.56,-1.97 3.68,-6.84 1.04,-1.68 -0.35,0.56 -0.69,1.12 -1.04,1.68z m-2.25,2.22c1.46,-1.22 2.04,-2.07 0.18,-0.18l-0.18,0.18z m-5.72,4.16c-5.23,3.69 4.03,-2.14 0.33,-0.19l-0.33,0.19z m-10.72,3.22c-3.41,3.16 5.71,-0.32 4.1,-0.81 -1.8,-0.56 -2.56,-0.71 -4.1,0.81z m-4.59,3.16c0.08,0.16 0.4,-0.3 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_fl" class="jvectormap-region"></path>
                                    <path d="m862.56,94c-1.4,-0.41 -3.87,-0.72 -3.05,3 0.22,3.63 -0.73,7.84 2.23,10.59 0.33,2.78 0.08,5.36 -2.17,7.29 -0.19,2.83 -5.98,2.58 -3.35,5.32 1.16,7.35 -0.56,15.03 -0.62,22.51 1.2,1.95 0.98,4.39 0.76,6.75 -1.07,3.79 4.84,-0.05 6.89,0.06 3.93,-1.29 8.46,-1.74 12.04,-3.54 0.77,-3.1 4.37,-2.75 5.94,-4.96 2.59,-3.52 -3.01,-2.73 -2,-6.59 -3.83,0.01 -4.27,-2.46 -4.66,-5.62 -3.84,-11.98 -7.32,-24.45 -11.49,-36.1 -0.18,0.43 -0.35,0.85 -0.53,1.28z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_nh" class="jvectormap-region"></path>
                                    <path d="M697.86,177.24L694.63,168.99L692.36,159.94L689.94,156.71L687.35,154.93L685.74,156.06L681.86,157.84L679.92,162.85L677.17,166.57L676.04,167.21L674.58,166.57C674.58,166.57 671.99,165.11 672.16,164.47C672.32,163.82 672.64,159.45 672.64,159.45L676.04,158.16L676.84,154.77L677.49,152.18L679.92,150.56L679.59,140.54L677.98,138.28L676.68,137.47L675.87,135.37L676.68,134.56L678.3,134.88L678.46,133.27L676.04,131L674.74,128.42L672.16,128.42L667.63,126.96L662.13,123.57L659.38,123.57L658.74,124.21L657.77,123.73L654.7,121.46L651.79,123.24L648.88,125.51L649.2,129.06L650.17,129.39L652.27,129.87L652.76,130.68L650.17,131.49L647.58,131.81L646.13,133.59L645.81,135.69L646.13,137.31L646.45,142.8L642.9,144.9L642.25,144.74L642.25,140.54L643.54,138.12L644.19,135.69L643.38,134.88L641.44,135.69L640.47,139.89L637.72,141.02L635.94,142.96L635.78,143.93L636.43,144.74L635.78,147.33L633.52,147.81L633.52,148.95L634.33,151.37L633.2,157.51L631.58,161.56L632.23,166.24L632.71,167.38L631.9,169.8L631.58,170.61L631.26,173.36L634.81,179.34L637.72,185.8L639.18,190.65L638.37,195.34L637.4,201.32L634.97,206.5L634.65,209.25L631.39,212.33L635.8,212.17L657.22,209.91L664.5,208.92L664.59,210.58L671.45,209.37L681.74,207.87L685.6,207.41L685.74,206.82L685.9,205.37L688,201.65L690,199.91L689.78,194.86L691.37,193.26L692.46,192.92L692.69,189.36L694.22,186.33L695.27,186.94L695.44,187.58L696.24,187.74L698.18,186.77L697.86,177.24z M581.62,82.06L583.45,80L585.62,79.2L590.99,75.31L593.28,74.74L593.74,75.2L588.59,80.34L585.28,82.29L583.22,83.2L581.62,82.06z M667.79,114.19L668.44,116.69L671.67,116.85L672.97,115.64C672.97,115.64 672.89,114.19 672.56,114.03C672.24,113.86 670.95,112.17 670.95,112.17L668.76,112.41L667.15,112.57L666.82,113.7L667.79,114.19z M567.49,111.21L568.21,110.63L570.96,109.82L574.51,107.56L574.51,106.59L575.16,105.94L581.14,104.97L583.57,103.03L587.93,100.93L588.09,99.64L590.03,96.73L591.81,95.92L593.1,94.14L595.37,91.88L599.73,89.46L604.42,88.97L605.55,90.1L605.23,91.07L601.51,92.04L600.06,95.11L597.79,95.92L597.31,98.35L594.88,101.58L594.56,104.17L595.37,104.65L596.34,103.52L599.89,100.61L601.19,101.9L603.45,101.9L606.68,102.87L608.14,104L609.59,107.08L612.34,109.82L616.22,109.66L617.68,108.69L619.29,109.99L620.91,110.47L622.2,109.66L623.33,109.66L624.95,108.69L628.99,105.14L632.39,104L639.02,103.68L643.54,101.74L646.13,100.45L647.58,100.61L647.58,106.27L648.07,106.59L650.98,107.4L652.92,106.91L659.06,105.3L660.19,104.17L661.65,104.65L661.65,111.6L664.88,114.67L666.17,115.32L667.47,116.29L666.17,116.61L665.37,116.29L661.65,115.81L659.55,116.45L657.28,116.29L654.05,117.75L652.27,117.75L646.45,116.45L641.28,116.61L639.34,119.2L632.39,119.85L629.96,120.66L628.83,123.73L627.54,124.86L627.05,124.7L625.6,123.08L621.07,125.51L620.42,125.51L619.29,123.89L618.48,124.05L616.54,128.42L615.57,132.46L612.39,139.46L611.22,138.42L609.85,137.39L607.9,127.1L604.36,125.73L602.31,123.45L590.19,120.7L587.33,119.67L579.1,117.5L571.21,116.36L567.49,111.21z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_mi" class="jvectormap-region"></path>
                                    <path d="m833.16,106.59c0.19,6 4.65,11.21 3.72,17.28 -2.48,4.23 4.52,7.29 2.22,11.58 0.9,1.59 4.66,1.96 4.06,5.25 1.08,4.21 2.86,8.34 1.84,12.76 3.35,-0.51 7.06,-1.17 10.13,-1.97 -0.21,-2.13 1.51,-5.75 -0.53,-7.81 0.2,-7.64 1.01,-15.26 1.13,-22.91 -3.25,-2.41 0.32,-3.79 2.12,-5.18 1.96,-2.28 3.9,-5.07 2.6,-8.1 -2.62,-1.63 -1.02,-5.94 -2.39,-7.22 -8.3,2.1 -16.59,4.21 -24.89,6.31z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_vt" class="jvectormap-region"></path>
                                    <path d="m889.88,40.22c-2.16,1.31 -3.69,2.74 -4.84,4.69 -2.29,0.6 -4.99,-1.37 -4.88,-3.94 -2.97,-0.82 -3.33,3.68 -4.37,5.71 -1.09,4.29 -3.27,8.39 -3.97,12.69 -0.06,3.04 1,6.63 -1.35,9.09 0.08,2.92 -0.75,6.18 2,8.16 -1.37,5.7 -6.23,10.36 -5.41,16.56 -4.27,-2.21 -1.74,2.47 -1.09,4.73 3.51,11.08 7.19,22.16 10.25,33.35 0.21,3.01 5.81,1.35 4.53,5.7 2.9,2 2.06,-3.92 2.66,-5.87 -1.01,-3.29 2.7,-4.63 0.66,-7.62 0.94,-1.05 2.92,-5.9 4.61,-3.46 2.03,1.03 5.28,-1.89 6.74,-3.19 -0.98,-4.02 4.21,-1.75 4.73,-5.32 -1.11,-2.61 0.74,-5.45 -0.57,-7.44 -2.42,-1.59 3.53,-4.63 3.31,-0.78 2.27,0.48 2.15,2.8 3.66,3.93 1.94,-2.82 -2.15,-3.81 0.35,-6.03 2.43,-0.81 3.1,-3.96 6,-3.31 -0.17,1.46 1.03,3.34 2.26,1.38 2.94,-2.9 5.24,-7.08 9.37,-8.34 1.17,-2.61 3.34,-5.74 0.71,-8.24 -0.55,-1.64 -3.68,-4.84 -4.15,-2.58 -0.75,2.6 -4.66,-0.65 -4.92,-2.22 0.1,-2.8 0.29,-7.17 -3.8,-5.81 -3.96,1.36 -3.64,-3.04 -4.69,-5.61C905.22,58.3 902.75,50.15 900.28,42c-2.86,-1.25 -5.71,-2.92 -8.81,-3.38 -0.53,0.53 -1.06,1.06 -1.59,1.59z m20.47,61c-2.81,1.7 1.87,5.16 1.13,1.22 1.48,-0.9 0.13,-2.4 -1.13,-1.22z m-7.81,7.81c3.16,6.67 2.63,-3.59 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap2_me" class="jvectormap-region"></path>
                                    <path d="m871,164.28c1.15,4.66 2.29,9.31 3.44,13.97 2.56,-0.49 4.66,-2.29 5.84,-4.56 4.17,0.76 4,-2.64 1.51,-4.97 -1.79,-1.94 -3.16,-5.31 -5.74,-5.92 -1.68,0.49 -3.37,0.99 -5.05,1.48z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_ri" class="jvectormap-region"></path>
                                    <path d="m825.56,108.66c-2.7,1.12 -5.45,1.68 -8.33,1.43 -5.07,0.72 -10.17,2.73 -12.92,7.31 -2.84,3.43 -4.89,7.49 -7.18,11.2 -1.65,2.36 -5.82,3.73 -5.55,6.84 -0.17,3.56 5.77,0.73 4.43,4.38 -2.69,2.3 0.8,4.23 0.56,6.59 0.5,3.47 -4.26,1.99 -5.36,4 -1.62,2.71 -3.35,6.62 -7.22,6.05 -3.04,-0.43 -5.35,2.05 -7.98,2.63 -2.5,-0.75 -4.7,-2.05 -7.59,-1.31 -5.31,0.21 -10.62,1.98 -15.23,4.53 -0.29,1.77 0.61,6.25 3.17,6.14 1.55,2.48 2.09,4.96 -0.63,6.72 -1.51,1.76 -1.8,4.25 -4.16,5.3 -1.93,1.14 -2.68,3.51 -4.8,4.54 0.33,3.07 -0.22,7.29 4.08,5.12 22.14,-4.26 44.26,-8.68 66.23,-13.74 0.98,3.85 5.67,1.32 6.44,4 0.64,2.93 1.36,7.4 5.33,6.88 3.14,1.9 6.9,3.68 10.69,4.22 2.71,0.47 7.18,1.43 6.44,5.06 -0.33,1.97 -1.62,7.56 1.97,5.93 5.3,-1.65 10.96,-2.84 15.06,-6.85 3.23,-2.49 6.76,-4.64 9.35,-7.86 -2.99,-2.44 -4.65,0.46 -6.81,2.42 -2.91,1.56 -6.01,3.51 -9.16,4.32 -2.6,-0.63 -4.83,-0.86 -6.18,2.07 -1.03,2.04 -4.86,2.98 -3.98,-0.15 4.26,-1.87 -2.17,-3.97 -0.33,-6.21 1.19,-3.13 0.56,-6.87 0.42,-10.21 -1.43,-7.38 -3.69,-14.76 -2.54,-22.36 -0.08,-4.46 1.55,-8.97 -0.51,-13.21 -1.22,-2.56 -0.47,-6.83 -4.05,-7.34 -2.99,-0.66 0.75,-4.31 -1.57,-6.2 -1.7,-2.43 -3.17,-4.91 -1.54,-7.81 0.38,-5.77 -3.83,-10.57 -3.55,-16.35 -2.32,0.65 -4.65,1.29 -6.97,1.94z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_ny" class="jvectormap-region"></path>
                                    <path d="m798.88,181.63c-17.5,3.38 -34.87,7.42 -52.47,10.28 -0.61,-2 0.48,-8.42 -2.41,-4.31 -2.18,2.73 -5.48,3.74 -8.09,5.97 1.52,9.75 2.63,19.57 5.44,29.05 1.14,6.09 2.27,12.17 3.41,18.26 8.85,-1.42 17.79,-2.25 26.51,-4.41 16.39,-3.45 33.03,-6.46 49.33,-9.87 2.48,-3.07 8.03,-1.69 8.97,-6.19 0.64,-2.36 4.86,-3.99 4.33,-5.9 -2.3,-1.89 -5.94,-2.77 -6.39,-6.13 -3.14,1.09 -4.42,-3.94 -3.12,-5.32 3.86,-1.1 -0.49,-3.68 0.55,-5.96 2.52,-1.88 1.12,-5.15 2.81,-7.07 3.87,-2.7 -2.98,-1.1 -3.72,-3.99 -1.35,-2.18 -0.28,-7.24 -4.16,-5.92 -2.34,-1.13 -3.87,-3.75 -7.09,-1.7 -4.64,1.07 -9.28,2.15 -13.92,3.22z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap2_pa" class="jvectormap-region"></path>
                                    <path d="m827.84,191.34c1.03,2.99 -1.82,4.8 -2.06,7.47 2.86,1.63 0.49,4.87 -0.92,5.73 -0.41,3.86 4.01,1.68 4.16,5.14 1.37,2.19 4.72,3.02 6.26,4.94 -0.15,2.61 -3.85,3.5 -4.69,6.06 -0.26,3.07 -4.09,3.19 -4.18,5.96 -0.99,2.38 -0.74,5.09 1.7,6.47 2.85,2.76 6.86,3.99 10.73,4.38 0.48,1.55 -1.84,7.18 1.1,3.59 1.5,-2.42 0.59,-5.95 3.11,-8.01 2.5,-4.08 5.03,-8.84 4.88,-13.61 -1.35,-4.07 0.8,-9.01 -1.81,-12.82 -1.1,1.32 -6.17,1.23 -4.13,-0.8 2.39,-1.39 3.37,-3.62 2.39,-6.31 0.21,-2.31 1.58,-5.42 -1.69,-6.19 -4.35,-1.15 -8.82,-2.13 -12.88,-4.26 -0.66,0.75 -1.31,1.5 -1.97,2.25z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_nj" class="jvectormap-region"></path>
                                    <path d="m824.88,225.34c-3.72,0.25 -3.47,3.52 -1.91,6.13 3.35,6.89 3.86,14.58 6.03,21.81 3.45,0.11 6.81,-0.49 10.16,-1.25 -1.2,-2.17 -0.68,-6.38 -3.32,-6.38 -2.9,-1.2 -4.17,-3.69 -4.9,-6.58 -0.91,-3.11 -3.62,-4.96 -5.48,-7.35 -1.85,-1.82 0.94,-5.5 -0.26,-6.47l-0.33,0.09z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#adcc99" original="#adcc99"
                                          id="jqvmap2_de" class="jvectormap-region"></path>
                                    <path d="m813.59,229.19c-17.31,3.18 -34.53,6.83 -51.78,10.28 0.74,3.02 1.31,6.08 1.78,9.16 2.14,-1.9 3.29,-5.35 6.59,-5.34 2.14,-1.85 2.67,-5.25 5.77,-3.55 3.46,0.18 5.43,-5.35 9.01,-3.85 2.63,1.63 5.66,2.79 7.34,5.59 4.19,0.11 3.68,3.73 5.74,4.96 2.73,1.11 5.02,1.18 6.38,-0.53 4.29,1.38 2.24,3.74 1.44,6.9 0.09,2.97 -3.7,4.92 -1.66,7.97 3.1,1.31 6.4,1.2 9.63,1.4 2.17,1.58 6.83,1.03 3.79,-2.1 0.41,-2.74 -3.08,-3.35 -3.32,-6.04 -1.7,-2.67 -1.42,-5.47 -0.36,-8.32 1.68,-2.42 -2.83,-3.82 -0.4,-5.41 1.25,-1.53 0.43,-4.16 2.98,-4.7 1.62,-3.02 5.1,-1.45 2.35,1.02 -2.54,2.98 -0.81,4.5 0.57,6.3 1.41,3.55 -0.68,5.07 -1.53,7.31 -0.22,-0.81 3.62,-1.01 3.22,1.79 -3.15,1.64 -1.45,6.12 1.09,7.31 2.98,0.99 5.58,-1.8 6.98,2.14 1.5,3.75 4.92,0.81 7.41,-0.02 2.74,-1.21 3.47,-4.93 2.78,-7.7 -1.13,-1.58 -4.82,0.92 -7.13,0.4 -3.86,1.26 -4.9,-1.25 -5.28,-4.64 -1.68,-5.97 -2.14,-12.33 -5.16,-17.9 -0.04,-4.32 -2.71,-4.2 -6.07,-2.91 -0.73,0.16 -1.45,0.31 -2.18,0.47z m10.94,32.59c1.32,0.99 0.59,4.97 2.06,4.63 -0.48,-1.31 -0.36,-4.99 -2.06,-4.63z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap2_md" class="jvectormap-region"></path>
                                    <path d="m792.88,242.88c-0.16,1.46 0.24,5.89 -2.4,4.29 -2.58,-0.67 -6.42,-3.2 -8.23,-2.73 0.7,3.72 -1.46,6.77 -2.99,9.94 -3.05,1.14 -2.29,5.83 -5.84,5.58 -1.62,1.74 -1.47,5.31 -2.45,7.73 -3.09,1.14 -5.37,-0.48 -7.28,-1.75 0.11,6.5 -3.72,11.95 -5.91,17.84 -1.69,1.73 1.19,3.8 -0.74,5.77 -1.35,3.56 -3.79,2.72 -6.19,4.19 -2.72,1.1 -4.9,0.5 -5.4,4.61 -2.07,1.14 -4.83,2.63 -6.91,0.47 -2.38,1.51 -5.02,3.21 -7.81,1.6 -2.69,-0.01 -3.9,-6.55 -6.07,-2.94 -3.27,4.09 -7.89,7.48 -10.21,12.09 0.43,3.25 -4.46,3.32 -6.42,5.15 -4.27,1.95 3.62,-0.11 5.16,-0.07 5.56,-0.79 11.14,-1.37 16.76,-1.36 1.95,-2.65 4.98,-1.81 7.77,-1.65 7.86,-0.32 15.65,-2.12 23.48,-2.99 12.85,-1.4 25.44,-4.27 38.04,-7.05 11.65,-2.52 23.3,-5.03 34.96,-7.55 -1.64,-2.66 -2.75,-6.67 -6.42,-4.14 -1.99,2.03 -6.61,-1.82 -2.7,-2.48 2.65,-1.62 -1.75,-4.07 -1.8,-5.97 -2.73,-0.62 -2.88,-5.12 0.54,-3.6 -0.17,-1.37 -1.24,-3.62 -1.62,-5.68 1.47,-3.51 -0.84,-4.97 -3.72,-5.16 0.31,-3.42 -2.9,-2.93 -5.22,-3.97 -3.33,0.21 -7.06,-0.25 -9.91,-1.66 -1.22,-2.41 -0.91,-5.12 1.25,-6.88 1.39,-2.83 -0.28,-5.7 -3.3,-6.27 -2.65,-0.83 -6.97,-0.29 -5.73,-4.3 -0.83,-0.3 -2.05,-1.06 -2.69,-1.06z m39.16,21.59c0.44,4.71 -3.15,8.7 -2.62,13.48 -0.34,4.11 2.64,5.72 3.48,0.92 1.71,-3.04 -0.23,-6.47 0.8,-9.73 0.4,-2.53 3.66,-3.88 3.52,-6.73 -1.73,0.69 -3.46,1.38 -5.19,2.06z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_va" class="jvectormap-region"></path>
                                    <path d="m739.75,223.25c-1.6,2.23 1.3,5.02 0.25,7.75 -0.18,4.04 -0.63,8.11 -0.84,12.13 -1.94,3.58 -4.43,7.35 -8.16,9.13 -3.15,-1.33 -3.92,3.25 -5.76,4.98 -1.56,2.28 2.64,4.93 -0.3,6.69 -2.57,3.58 -2.6,-4.8 -4.46,-0.71 -1.32,2.59 0.02,6.02 -1.35,8.33 -1.82,1.54 -0.53,5.19 -4.16,4.81 -2.23,0.13 -1.45,6.19 1,6.81 2.24,1.47 2.49,4.74 5.5,5.92 1.92,1.96 2.28,5.18 5.39,6.05 1.64,2.19 3.07,4.96 6.25,4.88 2.63,0.5 4.77,-3.86 7.22,-1.35 1.49,0.81 3.93,-0.57 4.58,-1.83 0.43,-4.57 3.42,-2.71 6.03,-4.39 2.39,-0.94 4.82,-0.98 5.62,-4.44 -1.26,-2.59 0.3,-5 1.56,-7.64 2.23,-4.81 4.72,-9.61 4.67,-15.05 2.65,-2.31 3.72,3.56 7.05,1.41 1.64,-1.77 1.12,-5.67 2.6,-7.59 3.47,0.39 2.97,-3.96 5.76,-5.21 2.29,-3.11 3.52,-6.8 3.06,-10.7 1.06,-1.29 5.1,1.62 7.23,2.15 3.3,3.35 4.34,-1.98 2.85,-4.05 -2,-2.28 -5.12,-3.7 -7.62,-4.75 -3.31,0.98 -5.44,5.47 -9.38,3.97 -1.86,-0.23 -2.38,3.98 -4.86,3.88 -2.89,0.71 -3.79,4.38 -6.03,6.22 -1.1,-0.06 -0.99,-4.82 -1.62,-6.64 -0.01,-3.93 -1.77,-5.3 -5.48,-3.82 -4.21,0.6 -8.41,1.23 -12.61,1.91 -1.17,-6.45 -2.29,-12.92 -3.44,-19.38l-0.35,0.35 -0.18,0.18z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_wv" class="jvectormap-region"></path>
                                    <path d="m729.5,197.78c-4.85,2.06 -7.38,6.9 -11.47,9.97 -4.08,0.86 -8.09,1.75 -11.72,3.88 -3.41,1.61 -4.39,-4.09 -7.67,-2.63 -3.13,1.35 -5.49,-1.1 -8.11,-2.41 -8.6,1.15 -17.15,2.64 -25.66,4.38 1.45,17.83 4.12,35.53 5.87,53.33 -0.69,3.82 4.06,2.26 6.23,1.48 2.74,0.41 4.83,2.16 5.48,4.94 1.26,2.48 5.82,-0.87 6.96,2.54 2.19,1.53 4.46,-2.33 7.03,-0.58 2.52,0.04 5.62,1.51 6.84,-1.56 1.49,-0.55 5.37,-3.85 5.41,-0.71 0.38,2.53 3.82,3.57 5.77,4.7 3.53,0.63 2.32,-3.91 4.21,-5.51 -0.11,-2.74 0.21,-5.73 1.39,-8.13 2.53,-2.81 3.8,4.53 4.98,0.39 -2.02,-2.27 -0.99,-5.41 0.93,-7.41 1.07,-4.06 4.05,-2.41 6.5,-4.39 2.93,-3.16 6.59,-6.57 5.97,-11.27 0.44,-4.71 1.18,-9.75 -0.53,-14.23 1.47,-2.48 2.58,-4.29 0.96,-7.33 -2.04,-7.53 -2.56,-15.37 -3.93,-23.04 -1.81,1.2 -3.63,2.4 -5.44,3.59z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_oh" class="jvectormap-region"></path>
                                    <path d="m658.66,210.31c-9.12,0.93 -18.35,1.98 -27.41,2.68 -2.6,0.39 -4.21,5.08 -6.89,2.98 -3.83,-2.84 -2.64,1.83 -2.41,4.45 1.1,14.81 2.73,29.61 3.44,44.42 -0.76,3.69 -1.39,7.89 1.36,10.91 0.1,2.99 1.4,6.28 -1.14,8.65 -1.83,2.73 -2.55,6.09 -5.02,8.42 0.09,2.08 -2.02,8.2 1.63,5.16 3.49,-0.6 7.25,-1.53 10.69,-1.34 2.36,4.08 2.67,-0.62 5.26,-1.29 2.03,-2.62 4.78,2.05 5.34,1.04 -1.26,-3.41 3.05,-3.77 5.1,-5.22 1.09,0.63 6.05,3.38 5.3,-0.64 -0.46,-2.47 2.02,-4.71 3.65,-6.34 3.11,-1.39 4.33,-3.9 4.16,-7.23 1.83,-1 4.93,-1.01 6.97,-2.47 4.23,-1.03 0.26,-3.48 1.22,-5.92 -0.83,-12.56 -2.8,-25.13 -4.08,-37.69 -0.85,-6.99 -1.44,-14.01 -2.14,-21.02 -1.68,0.16 -3.35,0.31 -5.03,0.47z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b2d496" original="#b2d496"
                                          id="jqvmap2_in" class="jvectormap-region"></path>
                                    <path d="m569.75,200.44c-0.29,2.58 4.2,1.83 3.73,5.07 2.07,2.09 5.71,4.21 4.38,7.77 -0.31,3.04 -2.61,5.44 -3.08,8.4 -2.38,2.71 -6.06,2.98 -9.31,3.94 -1.61,2.47 -1.05,4.91 1.28,6.47 0.63,3.25 -1.08,5.07 -2.74,7.38 1.41,3.63 -2.39,2.86 -3.56,5.02 1.08,3.12 -2.11,3.8 -2.53,6.64 0.19,3.95 1.33,8.21 3.28,11.58 3.68,3.96 7.38,7.9 12.21,10.47 -0.61,2.88 -0.64,6.7 3.43,5.71 2.05,0 6.18,0.38 6.26,2.68 -0.19,4.39 -3.6,8.24 -3.28,12.53 1.6,3.83 5.33,6.26 8.59,8.42 3.37,-0.29 5.36,1.27 5.9,4.6 1.01,2.64 3.84,4.73 1.73,7.67 0.55,1.74 2.58,7.7 4.31,4.05 1.21,-2.98 5.41,-4.78 8.07,-2.46 3.1,2.46 5.94,0.47 3.13,-2.8 -0.98,-3.39 2.61,-4.96 5.37,-5.33 1.01,-1.55 -1.6,-4.46 1.4,-5.97 1.8,-3.97 -0.56,-9.39 3.32,-12.49 1.43,-2.97 3.23,-5.97 4.4,-8.97 0.13,-3 -0.7,-5.7 -2.34,-8.16 -0.45,-4.59 1.31,-9.09 0.02,-13.65 -1.16,-15 -2.22,-30.05 -3.67,-45.01 -1.02,-3.1 -1.61,-6.46 -4.04,-8.77 -2.27,-1.83 -0.51,-5.93 -1.97,-7.32 -14.76,0.83 -29.52,1.67 -44.28,2.5z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d993" original="#b5d993"
                                          id="jqvmap2_il" class="jvectormap-region"></path>
                                    <path d="m865.78,165.41c-6.91,1.54 -13.81,3.08 -20.72,4.63 2.17,6.2 2.74,12.83 2.44,19.34 -2.62,4.3 2.61,2.38 3.97,-0.21 2.09,-1.89 4.19,-3.71 5.99,-5.88 2.06,1.35 4.78,-1.86 7.44,-1.46 2.98,-0.68 5.69,-2.24 8.56,-3.26 -1.15,-4.67 -2.29,-9.33 -3.44,-14 -1.42,0.28 -2.83,0.56 -4.25,0.84z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_ct" class="jvectormap-region"></path>
                                    <path d="m559.53,104.97c-4.06,2.75 -8.71,4.92 -13.53,5.84 -2.88,-1.08 -5.54,-1.12 -5.57,2.68 -0.48,3.34 0.51,7.03 -0.47,10.17 -2.02,3.26 -6.91,4.03 -7.36,8.38 -2.63,2.78 2.21,3.06 2.23,5.53 1.79,2.9 -2.13,4.74 -1.33,7.65 0.29,2.93 -0.4,6.49 1.14,8.93 1.33,3.48 5.88,0.21 6.64,3.93 1.56,2.26 5.47,1.03 6.19,4.78 2.15,5.1 9.7,4.85 11.21,10.39 0.68,3.38 0.35,7.34 1.94,10.32 3.26,1.05 1.94,4.34 0.25,6.21 -0.79,3.96 2.53,8.34 6.75,8.25 2.28,1.6 4.86,1.65 7.83,1.19 13.03,-0.77 26.07,-1.53 39.1,-2.3 -0.02,-4.45 -1.98,-8.61 -1.86,-13.13 -1.7,-2.04 -0.86,-4.17 -0.04,-6.39 0.32,-2.84 3.07,-4.93 1.51,-7.87 -1.05,-2.94 -0.88,-6.21 1.73,-8.27 -0.2,-2.83 -0.5,-5.03 -0.16,-7.93 -1.14,-4.2 2.64,-7.5 3.69,-11.36 0.92,-1.13 3.15,-8.34 0.73,-4.93 -2.65,3.81 -4.99,8.01 -8.18,11.29 -0.86,2.06 -3.21,4.55 -5.21,4.5 -2.57,-1.26 0.28,-4.49 0.9,-6.41 0.47,-2.94 3.2,-4.25 4.09,-6.85 -3.31,-1.29 -2.77,-5.03 -3.54,-7.92 0.02,-3.09 -1.23,-5.08 -4.29,-5.57 -2.14,-3.67 -7.04,-2.78 -10.59,-4.12 -7.13,-1.87 -14.21,-4.39 -21.67,-4.99 -2.48,-0.54 -2.84,-5.51 -5.51,-4.73 -1.71,-1.54 -3.85,-0.7 -5.82,0.13 -2.8,-1.32 0.68,-4.59 1.5,-6.38 2.18,-1.34 -1.53,-2.14 -2.31,-1z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_wi" class="jvectormap-region"></path>
                                    <path d="m830.06,295.97c-18.3,3.8 -36.53,8 -54.86,11.65 -12.74,1.51 -25.38,4.07 -38.18,4.94 -3.32,-0.82 -1.17,3.72 -2.5,5.53 -2.62,1.34 -3.49,4.59 -5.03,6.38 -3.24,-1.36 -5.07,1.46 -6.34,3.97 -1.09,-0.57 -2.96,0.03 -3.41,-1.41 -2.02,1.96 -4.37,3.73 -4.31,6.81 -3.66,1.1 -6.31,3.82 -9.28,5.96 -2.64,0.94 -5.76,2.16 -7.4,4.35 0.73,4.06 -2.98,3.3 -5.1,5.29 -1.98,4.69 2.74,2.66 5.58,2.5 6.41,-1.19 13.32,-0.49 19.18,-3.73 5.04,-1.9 9.41,-5.9 15.06,-5.67 6.5,-0.64 13.15,-0.6 19.62,-0.69 2.99,0.53 3.36,4.79 5.58,5.01 5.37,-0.81 10.87,-1.67 16.25,-1.79 5.38,1.36 9.61,5.45 14.52,7.93 3.59,2.64 6.93,5.66 10.43,8.44 3.15,-0.86 6.32,-1.58 9.59,-1.72 1.06,-4.55 2.04,-9.29 5.39,-12.78 4.2,-4.27 9.23,-8.29 15.33,-9.29 2.91,1.95 3.69,-2.9 5.27,-4.53 2.72,-5 -2.44,3.91 -2.46,-1.22 -3.87,0.7 -5.43,-0.26 -3.29,-4 2.77,-4.25 -2.73,-2.51 -2.12,-6.02 -1.42,-3.76 2.84,2.19 5.06,0.81 2.81,0.12 5.1,-1.87 5.59,-4.6 0.45,-2.9 4.59,-2.7 3.28,-6.48 -4.02,-2.43 4.25,-0.66 0.4,-3.93 -3.52,-3.44 -5.24,-8.33 -7.23,-12.76 -1.54,0.35 -3.08,0.71 -4.63,1.06z m17.13,23.72c1.55,2.61 -4.64,4.26 -0.52,2.69 1.38,-1.92 0.21,-5.22 0.24,-7.62 -0.74,-2.05 0.37,4.57 0.28,4.94z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_nc" class="jvectormap-region"></path>
                                    <path d="m803.44,248.16c2.67,3.43 3.85,-1.02 0.55,-0.75l-0.29,0.4 -0.25,0.35z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_dc" class="jvectormap-region"></path>
                                    <path d="m877.59,144.41c-1.04,3.1 -4.01,3.5 -6.79,4.13 -8.62,2.32 -17.17,4.6 -25.96,6.12 -0.11,4.77 -1.17,9.59 -0.03,14.31 10.66,-2.6 21.54,-4.29 32,-7.44 3.57,2.81 6.01,6.73 8.28,10.59 2.13,-0.78 0.01,-5.15 3.77,-5.38 2.93,-3.28 1.83,4.78 3.17,2.62 2.13,-3.09 6.1,-3.9 9.41,-5.21 -0.11,-3.41 -2.21,-8.55 -6.38,-7.53 1.64,-0.1 4.89,0.87 4.91,3.82 0.85,2.24 -2.55,3.71 -4.35,4.24 -3.37,0.51 -4.99,-1.76 -6.32,-4.47 -1.38,-2.05 -3.58,-6.56 -6.3,-3.6 -1.89,-1.72 -3.13,-4.04 -1.33,-6.3 2.3,-2.34 1.23,-6.2 -1.28,-7.16 -0.93,0.41 -1.86,0.82 -2.79,1.24z M902.25,172.69c-1.6,2.76 3.05,-2.44 0.08,-0.32l-0.08,0.32z m-11.28,1.28c1.59,0.78 6.09,-2.26 1.78,-2.03 -0.59,0.68 -1.19,1.35 -1.78,2.03z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap2_ma" class="jvectormap-region"></path>
                                    <path d="m730.41,314.34c-8.87,-0.11 -17.76,1.5 -26.57,2.73 -10.24,2.86 -20.99,2.66 -31.48,4.02 -16.34,1.45 -32.65,3.29 -48.96,4.95 -4.57,-1.71 -0.43,5.74 -5.06,4.14 -6.97,0.06 -13.87,1.23 -20.84,0.71 -0.95,4.26 -1.37,9.04 -3.6,12.76 -3.45,1.82 -4.01,5.81 -4.43,9.33 -3.1,1.1 -4.68,2.61 -2.53,5.59 -1.75,3.9 -0.58,5.24 3.51,3.98 33.91,-3.26 67.83,-6.53 101.74,-9.79 -0.23,-2.54 0.72,-5.31 3.53,-5.69 3.11,-0.4 0.99,-5.41 4.88,-5.81 2.77,-2.02 6.49,-2.19 8.62,-5.18 1.76,-2.26 6.31,-1.64 5.78,-5.38 1.19,-1.77 3.1,-3.84 5.03,-4.85 1.04,-0.39 0.28,1.78 1.72,1.19 2.38,0.56 2.2,-4.36 5.22,-3.86 3.3,1.27 2.68,-2.92 4.96,-4.18 2.05,-0.94 3.81,-6.68 0.92,-6.59 -0.81,0.64 -1.63,1.27 -2.44,1.91z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap2_tn" class="jvectormap-region"></path>
                                    <path d="m509.47,335.31c1.73,4.9 1.5,10.02 1.53,15.12 2.15,12.21 1.13,24.64 1.47,36.97 0.02,3.71 0.04,7.42 0.06,11.13 2.06,3.2 5.05,-1.45 7.69,1.47 1.53,1.76 -0.88,7.54 2.97,6.49 17.61,-0.36 35.23,-0.72 52.84,-1.08 1.97,-2.6 0.41,-5.9 -1.28,-8.22 3.3,-1.61 -1.59,-3.96 0.84,-6.53 0.75,-2.77 0.62,-6.34 3.78,-7.69 -1.88,-3.07 2.08,-5.24 3.19,-7.88 3.77,-0.38 1.58,-3.3 2.64,-5.42 1.12,-2.67 2.56,-5.28 4.85,-6.58 1.2,-4.12 0.21,-2.67 -1.53,-5.61 -2.76,-3.32 1.95,-3.96 2.36,-6.84 -0.05,-1.94 3.31,-6.69 1.22,-6.75 -2.65,0.85 -5.34,-0.18 -8.02,-0.33 -0.09,-3.38 4.4,-3.88 4.22,-7.3 0.58,-3.87 -3.58,-3.68 -6.34,-3.26 -24.17,0.77 -48.34,1.54 -72.5,2.31z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d994" original="#b5d994"
                                          id="jqvmap2_ar" class="jvectormap-region"></path>
                                    <path d="m490.44,245.63c-2.39,-0.46 -0.19,4.05 0.07,5.6 2.45,3.32 4.51,7.86 8.55,9.22 2.81,-0.24 3.61,2.67 2.79,4.84 -3.22,1.64 -1.72,5.03 0.19,7.07 0.9,2.55 4.61,3.05 4.89,5.61 2.1,12.97 1.12,26.14 1.51,39.22 0,5.72 0.08,11.44 0.72,17.13 24.99,-0.94 49.98,-1.8 74.97,-2.51 3.02,-1.12 4.35,1.72 5.31,3.98 0.52,3.48 -2.86,4.46 -4.14,6.86 2.37,0.64 5.57,0.65 8.21,-0.08 1.46,-3.59 1.87,-7.45 2.38,-11.22 0.84,-2.83 5.27,-2.89 4.61,-6.03 1.37,-2.94 0.14,-4.6 -2.22,-4.28 -2.15,-1.81 -2.84,-5.03 -2.86,-7.6 1.45,-2.84 -2.08,-5.07 -2.44,-7.89 -0.66,-3.24 -5.34,-0.87 -6.89,-3.66 -2.64,-2.34 -6.24,-3.94 -6.91,-7.76 -0.94,-3.21 1.52,-6.47 2.17,-9.64 2.2,-3.53 -1.34,-4.7 -4.33,-4.5 -2.66,0.39 -5.34,-1.15 -4.81,-4.1 0.86,-4.07 -4.71,-4.05 -6.43,-6.93 -2.7,-3.4 -6.72,-6.05 -7.25,-10.67 -1.1,-3.16 -2.12,-6.86 -0.62,-10.06 -2.3,-1.34 -2.28,-5.77 -5.37,-4.89 -20.69,0.77 -41.38,1.53 -62.06,2.3z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_mo" class="jvectormap-region"></path>
                                    <path d="m672.78,356c-0.74,7.06 4.28,12.69 5.29,19.4 1.36,6.57 3.44,12.96 5.03,19.44 0.94,4.88 2.17,9.95 5.53,13.75 -0.85,3.5 3.37,3.17 2.59,6.44 -1.89,4.45 -3.57,9.65 -0.84,14.13 0.05,2.63 0.94,5.4 -0.38,7.88 2.95,0.94 1.45,4.01 3.07,6.01 1.35,2.67 3.68,4.75 6.83,4 12.35,-0.01 24.69,-1.31 37.03,-1.92 3.32,-0.58 6.67,-0.74 10.04,-0.59 -0.78,4.24 3.04,4.15 2.09,-0.09 -0.9,-2.14 -2.94,-6.23 0.59,-6.62 3.2,0.5 6.42,0.91 9.66,1.02 -0.84,-3.8 -0.8,-7.57 0.5,-11.27 0.2,-3.54 2.62,-6.73 2.21,-10.21 -0.72,-2.93 3.26,-5.26 2.85,-8.05 -2.19,1.37 -5.29,-0.71 -5.34,-3.19 -0.56,-3.12 -2.71,-5.83 -6.03,-6.06 -1.33,-3.9 -2.62,-8.17 -4.99,-11.43 -3.12,-1.07 -6.13,-2.99 -7.17,-6.29 -2.06,-2.33 -5.23,-3.21 -6.66,-6.16 -2.08,-2.2 -5.24,-2.83 -7.66,-4.19 -0.76,-2.53 -3.21,-4.09 -3.94,-6.67 -1.36,-2.63 -2.97,-4.65 -6.15,-3.77 -2.33,-1.57 -7.15,-3.38 -5.31,-6.97 2.02,-2.01 3.76,-4.11 -0.8,-3.11 -12.68,1.51 -25.37,3.01 -38.05,4.52z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap2_ga" class="jvectormap-region"></path>
                                    <path d="m737.03,343.19c-4.26,0.4 -8.64,0.43 -12.24,3.07 -3.2,1.75 -6.48,3.19 -9.88,4.49 2.21,3.31 -4.28,2.74 -2.34,6.44 2.27,2.24 5.2,4.13 8.5,3.28 2.53,3.15 3.83,6.94 6.53,9.88 0.91,2.76 5.13,2.06 6.85,4.46 2.18,1.38 2.96,4.25 5.62,5.01 2.99,1.95 3.36,6.38 7.26,7.24 3.61,0.62 3.77,4.77 5.34,7.38 0.38,3.35 2.02,4.84 4.79,5.96 3.36,1.79 1.76,7.23 5.67,8.16 3.63,-1.38 5.8,-4.63 8.38,-7.34 -2.35,-3.93 0.29,-3.32 3.01,-4.44 1.95,-2.4 5.02,-3.3 6.25,-6.28 2.17,-2 3.86,-4.52 5.4,-6.9 2.81,-0.17 3.42,-3.58 4.92,-5.03 -0.28,-4.13 1.3,-7.89 3.12,-11.47 1.03,-2.11 7.03,-4.5 3.47,-6.34 -5.97,-5.35 -12.78,-9.5 -19.71,-13.47 -4.45,-2.68 -9.74,-0.07 -14.57,-0.06 -2.57,-0.23 -6.63,2.48 -7.32,-1.28 -1.66,-4.5 -6.93,-2.82 -10.63,-2.96 -2.8,0.07 -5.61,0.14 -8.41,0.21z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap2_sc" class="jvectormap-region"></path>
                                    <path d="m675,267.5c-2.76,-0.77 -6,1.11 -3.38,3.78 1.52,3.15 -3.12,4.12 -5.19,5.27 -2.94,0.53 -4.71,1.29 -4.3,4.82 -1.15,2.66 -5.3,3.24 -6.32,6.32 -2.16,1.4 0.74,6.22 -2.84,5.92 -3.06,0.61 -4.36,-2.79 -7.09,0.11 -2.26,0.51 -1.1,6.98 -3.85,3.1 -2.27,-2.54 -5.57,0.14 -6.16,2.81 -1.91,1.07 -3.4,-3.73 -6.02,-1.91 -3.32,0.61 -7.48,0.47 -9.92,2.91 0.08,2.65 -3.39,3.78 -1.7,6.05 2.34,2.66 -2.23,2.68 -3.86,3.3 -3.57,1.35 -0.68,4.35 -0.76,6.72 0.33,3.45 -3.76,1.44 -5.49,0.72 -2.5,-2.29 -6.26,-0.38 -7.13,2.53 2.86,2.28 -0.04,4.76 0.41,7.66 -3.47,2.04 -3.19,2.73 0.94,2.35 5.84,0.01 11.64,-0.95 17.5,-0.76 -0.7,-3.74 0.98,-4.99 4.56,-4.19 24.33,-3.01 48.82,-4.7 73.16,-7.43 4.3,-0.7 8.2,-2.38 11.75,-4.88 3.3,-0.8 4.04,-2.71 5.12,-5.35 3.46,-4.09 7.13,-8.06 10.79,-12 -3.27,-1.24 -3.03,-5.51 -6.21,-6.95 -2.6,-1.25 -2.07,-4.66 -5.16,-5.36 -2.38,-2.64 0.8,-7.28 -3.02,-8.87 -3.02,-0.01 -2.37,-4.65 -4.57,-3.51 -2.95,0.61 -3.67,4.78 -7.02,3.29 -2.69,-0.23 -5.51,-1.19 -7.82,0.71 -3,0.83 -3.99,-3.61 -7.44,-2.06 -3.51,0.82 -2.17,-5.19 -5.65,-5.26C677.17,266.43 676.21,267.17 675,267.5z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_ky" class="jvectormap-region"></path>
                                    <path d="m628.53,359.63c-0.2,14.37 0.12,28.75 -0.54,43.12 -0.04,9.01 -0.88,18.1 -0.07,27.07 1.55,10 2.94,20.01 3.85,30.09 3.07,1.09 3.69,-1.92 4.4,-4.18 -0.3,-3.89 4.27,-3.02 4.89,-0.04 0.72,2.06 4.08,5.27 0.77,6.65 -0.15,0.92 6.17,-0.9 5.88,-2.89 -0.44,-3.01 0.64,-6.86 -2.87,-8.19 -2.29,-0.88 -3.03,-5.59 -0.32,-5.67 14.08,-1.86 28.21,-3.59 42.35,-4.8 2.7,1.07 6.76,-0.25 2.97,-2.5 -1.8,-2 0.95,-5.03 -0.27,-7.65 -0.31,-3.1 -2.63,-5.9 -1.31,-9.15 0.01,-2.92 2.49,-5.36 1.93,-8.3 -3.52,-0.45 -1.34,-5.11 -4.26,-6.7 -3.48,-5.82 -3.36,-13.04 -5.96,-19.21 -2.02,-8.09 -3.34,-16.41 -7.25,-23.88 -0.51,-2.39 -1.08,-4.85 -0.72,-7.31 -14.49,1.18 -28.98,2.35 -43.47,3.53z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap2_al" class="jvectormap-region"></path>
                                    <path d="m521.09,407.28c0.1,7.53 -0.24,15.32 1.67,22.61 2.08,2.49 2.82,5.51 3.15,8.67 1.87,2.78 5.27,4.95 4.59,8.72 1.61,2.18 -0.21,5.69 0.08,8.38 0.42,2.64 -4.36,4.89 -2.01,7.12 1.07,2.26 -0.92,5.31 -0.53,7.95 0.38,3.22 -2.37,5.7 -1.55,8.93 5.18,-2.4 10.98,-0.86 16.47,-1.09 5.72,1.7 11.56,4.87 17.56,4.26 2.93,-2.25 5.94,0.36 8.98,0.93 1.08,-3.4 -4.22,-0.81 -5.8,-2.2 -1.91,-0.36 -2.89,-2.3 -1.17,-3.4 2.08,-1.1 4.08,-1.09 5.66,0.04 2.15,-1.39 5.6,-0.24 6.26,2.38 -0.33,3.62 3.42,1.7 5.28,3.15 3.83,1.5 -1.41,4.07 0.83,5.37 2.88,0.97 5.73,2.94 8.62,3.29 3.51,-0.05 2.81,-4.53 6.47,-4.17 1.83,-2.9 4.44,-0.25 4.39,2.31 1.53,1.64 4,-3.68 1.98,-3.66 0.22,-3.37 2.17,-3.21 4.31,-5.41 1.59,0.95 0.91,2.82 1.41,4.16 3.33,0.39 7.44,1.09 9.34,4.06 2.79,0.08 5.17,1.1 5.56,-2.56 -2.68,-0.27 -4.15,-3.88 -7.35,-3.19 -2.31,0.06 -6.3,-1.62 -6.15,-3.77 1.62,-3.62 2.23,-1.74 2.03,-4.38 2.88,1.09 5.69,-2.27 3.22,-4.47 0.46,-4.62 -3.73,-0.15 -3.34,2.19 -1.36,1.21 -6.35,-0.96 -4.6,-3.27 1.71,-1.84 4.2,-4.5 2.19,-6.95 -0.13,-3.26 -2.69,-5.21 -4.47,-7.38 0.52,-2.7 2.26,-7.35 -2.36,-5.46 -10.43,1.28 -20.97,0.69 -31.45,1.12 -1.61,-3.72 -0.02,-7.76 0.16,-11.59 2.66,-4.86 5.46,-9.65 8.25,-14.44 -2.04,-2.82 3.52,-4.45 -0.74,-6.48 -0.53,-2.15 -1.29,-4.65 -2.32,-6.83 -0.08,-3.1 0.9,-7.3 -3.62,-5.79 -17,0.28 -34,0.57 -51,0.85z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap2_la" class="jvectormap-region"></path>
                                    <path d="m591.03,363.5c-1.45,1.74 -4.03,3.15 -4.63,6.03 -1.4,2.22 1.43,5.74 -2.69,6.07 -1.48,1.97 -4.77,4.42 -3.4,7.17 -1.36,1.83 -3.59,3.95 -3.48,7.01 -2.16,2.66 1.55,5.28 -0.27,7.12 -0.45,1.84 2.25,4.42 1.35,7.03 -1.92,2.71 -1.63,6.55 -0.61,9.53 1.6,2.4 0.78,5.54 3.73,6.94 -0.95,2.53 -1.41,3.75 -1.87,6.31 -2.55,4.96 -6.07,9.62 -7.89,14.84 0.01,2.98 -1.44,6.14 -0.14,8.97 11.4,-0.36 22.87,0.25 34.19,-1.5 2.75,2.21 -2.19,6.39 1.33,8.15 2.82,1.62 2.28,5.18 3.89,7.63 2.07,-1.86 2.51,-6.19 5.82,-4.07 3.21,-0.67 6.85,-3.02 9.89,-0.64 3.62,0.73 6.01,-0.27 4.42,-4.26 -0.81,-10.1 -2.99,-20.07 -3.84,-30.15 0.14,-21.99 1.48,-43.98 0.64,-65.97 -12.15,1.26 -24.29,2.52 -36.44,3.78z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_ms" class="jvectormap-region"></path>
                                    <path d="m476.25,181.16c-3.42,-0.05 -2.16,5.68 0.72,6.29 0.54,2.07 -0.75,5.06 -1.41,7.35 -2.13,2.82 -0.93,5.45 1.04,7.92 1.22,4.34 2.24,8.85 4.05,13.06 0.6,3.22 1.29,6.38 3.41,9 0.02,3.49 1.27,6.69 2.3,9.91 -0.04,3.54 0.03,7.05 2.08,10.09 22.2,-1.02 44.44,-1.75 66.66,-2.63 0.77,1.43 3.25,7.11 4.37,4.25 -0.96,-2.5 1.19,-4.52 3.57,-4.72 -0.88,-2.62 1.19,-4.59 2.5,-6.28 1.27,-2.92 -1.39,-4.02 -2.41,-6.31 0.69,-2.9 1.79,-5.3 5.13,-5.46 2.88,-0.83 6.57,-1.81 6.65,-5.41 1.76,-3.04 3.73,-8.01 -0.26,-10.18 -2.74,-1.06 -1.75,-5.27 -5.21,-5.14 -0.64,-1.97 -0.85,-4.76 -4.19,-4.21 -2.75,-0.8 -4.55,-3.47 -5.37,-6 -1.36,-2.89 2.01,-4.72 1.65,-7.28 -3.82,-0.4 -1.19,-6.5 -5.03,-5.47 -26.75,0.41 -53.5,0.81 -80.25,1.22z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_ia" class="jvectormap-region"></path>
                                    <path d="m497.03,53.84c-0.69,2.52 0.93,7.42 -1.31,8.34 -9.65,-0.01 -19.29,-0.02 -28.94,-0.03 1.16,2.87 2.18,5.76 0.97,8.81 0.05,5.74 -0.79,11.86 2.51,16.95 2.04,3.78 0.64,8.47 1.5,12.6 0.82,6.84 1.76,13.67 3.55,20.32 0.05,3.83 0.88,7.8 0.03,11.53 -1.57,1.74 -4.91,3.29 -2.22,5.78 1.89,1.83 5.05,2.94 4.58,6.1 0.28,11.9 0.25,23.83 0.42,35.75 26.72,-0.38 53.44,-0.75 80.16,-1.13 -0.15,-3.62 -0.46,-7.93 -4.36,-9.47 -3.02,-1.66 -6.24,-3.1 -7.63,-6.5 -0.72,-3.61 -5.32,-1.16 -6.05,-4.61 -1.56,-2.09 -5.29,-0.37 -6.57,-3.78 -1.66,-2.1 -0.52,-5.5 -1.1,-8.1 -1.34,-2.93 1.65,-4.99 1.47,-7.54 -0.2,-3.22 -5.36,-3.85 -2.24,-7.43 0.41,-4.47 5.39,-5.33 7.61,-8.59 0.24,-3.87 -0.73,-8.14 0.52,-11.77 1.76,-3.14 5.17,-5.1 8.28,-6.26 1.92,-2.08 3.66,-4.57 6.13,-5.81 2.54,-4.97 6.04,-9.99 11.81,-11.4 4.55,-1.98 9.12,-3.92 13.6,-6.04 0.73,-3.15 -3.7,-0.18 -5.06,0.03 -0.82,-3.87 -4.2,-3.09 -7.28,-2.87 -2.25,-0.87 -5.34,2.83 -6,-0.66 -1.13,-3.5 -4.51,0.72 -5.88,2.13 -2.33,1.63 -6.22,1.16 -8.06,-0.56 0.94,-3.05 -4.61,-0.39 -4.53,-3.96 -0.16,-2.3 -3.48,1.3 -5.77,-1.2 -3.04,-0.91 -5.5,-3.22 -8.29,-4.38 -2.49,0.4 -5.86,-2.38 -6.7,1.5 -1.17,0.79 -7.15,1.83 -5.93,-1.54 -2.99,0.03 -6.03,-0.05 -7.53,-1.75 -2.6,0.59 -5.72,-0.41 -5.9,-3.43 -0.88,-3.28 -1.44,-6.61 -1.88,-9.98 -1.23,-0.6 -2.54,-1.02 -3.91,-1.06z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap2_mn" class="jvectormap-region"></path>
                                    <path d="m363.31,330.03c17.51,1.12 35.04,1.73 52.56,2.47 -1.37,13.62 -2.89,27.23 -2.83,40.93 -0.92,3.93 3.48,5.78 6.14,7.66 0.56,-5.56 2.96,1.46 4.25,-1.31 0.93,-1.5 5.57,1.68 3.39,4.42 1.59,0.66 4.76,0.51 6.73,1.82 2.79,-0.99 5.16,3.32 7.03,1.26 1.82,-1.93 5.59,-0.31 6.5,2.02 2.44,0.79 1.71,5.84 4.76,3.05 1.39,-1.65 6.25,-1.17 6.69,1.21 1.28,1.5 5.69,3.72 7.39,1.92 0.33,-2.75 3.38,-5.95 4.59,-1.83 3.59,0.38 6.96,2 10.46,3 2.28,-1.86 2.44,-4.68 6.53,-3.41 2.53,1.92 3.8,-1.41 6.31,-1.16 0.85,2.42 5.2,2.41 6.19,-0.5 3.2,-0.2 3.66,3.71 6.55,4.35 1.86,0.4 6.31,3.63 5.36,0.18 -0.32,-12.27 0.1,-24.59 -0.7,-36.82 -1.15,-6.03 -1.01,-12.18 -1.43,-18.25 -1.32,-5.29 -2.05,-10.73 -2.07,-16.18 -20.01,0.66 -40.04,-0.04 -60.06,-0.22 -27.85,-1.32 -55.73,-2.3 -83.53,-4.56 -0.27,3.31 -0.54,6.63 -0.81,9.94z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_ok" class="jvectormap-region"></path>
                                    <path d="m359.47,330.97c2.34,-0.11 -0.86,-1.81 0,0z m0.72,18.31c-1.64,20.84 -2.52,41.75 -4.68,62.55 -0.51,4.33 -0.99,8.66 -1.51,12.98 -17.84,-0.87 -35.67,-1.93 -53.42,-3.89 -4.16,-0.41 -8.32,-0.76 -12.48,-1.11 -0.67,3.74 2.27,3.68 4.04,6.12 2.26,1.83 1.13,6.03 4.65,6.5 3.52,0.48 2.9,4.6 5.45,6.34 3.38,3.15 5.5,7.91 10.27,9.06 1.91,1.27 4,3.22 4.53,5.46 0.69,3.96 4.53,7.02 3.47,11.33 -0.88,5.15 2.22,9.63 5.93,12.88 2.18,2.95 5.14,4.76 8.63,5.78 1.88,1.95 3.01,3.88 5.72,4.88 2.59,0.18 5.38,4.34 7.35,1.18 2.59,-3.14 5.48,-6.41 6.05,-10.55 1.26,-2.82 3.58,-4.32 6.5,-5.06 2.72,-1.59 5.32,-2.13 7.47,0.62 4.91,0.57 10.2,0.53 14.79,2.22 2.83,1.43 2.56,4.53 5.17,6.33 1.73,2.05 4.83,3.37 5.81,5.82 1.37,2.07 2.66,4.26 2.69,7.03 1.62,4.34 4.17,8.51 5.31,12.94 -0.24,2.77 4.65,2.49 4.95,5.51 2.24,4.08 4.37,9.17 9.21,10.49 3.28,2 0.03,5.04 0.91,7.5 3.28,0.87 -0.01,4.68 0.94,6.67 2.53,1.36 4.37,3.2 4.22,6.44 0.39,3.34 2.13,6.83 5.69,7.54 3.01,1.93 6.69,2.13 9.87,3.4 2.28,1.79 5.15,4.09 8.16,2.83 3.46,0.46 6.77,1.29 9.37,3.75 1.43,2.54 6.51,-0.91 4.31,-2.89 -2.04,-3.39 -1.3,-7.79 -2.83,-11.46 -0.63,-3.07 -2.39,-5.95 -0.99,-9.1 1.17,-4.9 2.87,-9.76 4.04,-14.71 -3.37,-1.01 -2.07,-5.47 1.21,-4.71 3.99,0.42 3.65,-6.43 7.81,-6.05 5.25,-1.56 9.07,-6 14.16,-8.05 6.91,-2.81 13.62,-6.46 18.72,-12.05 2.58,-2.98 7.09,-3.95 8.69,-7.75 5,-2.22 9.8,-4.93 15.22,-6 -0.97,-2.64 0.52,-4.86 1.32,-7.22 0.39,-2.99 0.19,-6.07 1.18,-8.94 -3.15,-2.27 0.38,-4.91 1.38,-7.41 -0.2,-2.8 1.42,-6.25 0.09,-8.66 0.3,-2.93 -1.49,-5.14 -3.35,-7.29 -2.46,-2.64 -1.11,-6.91 -3.87,-9.52 -2.53,-4.57 -1.59,-10.19 -2.25,-15.22 0.02,-5 0.19,-10 -0.5,-14.97 -2.63,-2.31 -5.52,2.33 -7.52,-1.37 -3.1,-2.07 -7.66,-2.1 -9.73,-5.68 -2.31,-2.48 -3.82,2.84 -7.18,0.96 -1.91,-2.73 -3.59,0.03 -5.98,0.18 -2.27,-1.15 -6.07,-1.48 -6.09,1.76 -2.76,2.37 -5.95,-0.93 -8.94,-1.28 -3,1.38 -5.23,-3.83 -6.3,-1.87 -0.15,2.66 -2.52,5.1 -5.13,3.34 -3.23,-0.15 -4.91,-2.49 -6.57,-3.89 -2.95,-1.74 -4.3,2.32 -6.94,0.88 -1.48,-1.39 -1.87,-3.6 -3.92,-5.65 -3.06,-2.83 -5.03,3.17 -7.13,0.23 -2.05,-2.11 -5.57,-0.83 -7.94,-2.69 -3.56,0.59 -5.54,-0.24 -4.13,-4.11 -1.89,-1.85 -2.28,1.21 -4.77,-0.14 -0.59,-0.41 -3.45,1.78 -5,-1.11 -1.9,-1.9 -5.13,-3.22 -4.18,-6.45 0.03,-10.58 0.25,-21.15 1.66,-31.65 0.3,-2.99 0.6,-5.98 0.89,-8.98 -17.65,-0.63 -35.3,-1.27 -52.94,-2.22 -0.52,6.07 -1.04,12.15 -1.56,18.22z M466.53,518.63c-5.2,7.17 2.93,-3.27 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_tx" class="jvectormap-region"></path>
                                    <path d="m242.72,428.78c4.82,0.63 9.65,1.25 14.47,1.88 0.43,-3.33 0.85,-6.67 1.28,-10 9.7,0.89 19.4,1.86 29.09,2.78 -0.9,-3.14 -1.39,-5.98 2.84,-4.5 18.29,1.28 36.48,3.79 54.81,4.49 2.45,-0.6 7.66,2.13 7.99,-1.01 3.06,-22.93 3.75,-46.09 5.59,-69.14 0.54,-7.79 1.39,-15.56 2.02,-23.34 3.21,0.65 1.17,-4.81 2.07,-6.86 1.79,-4.38 -2.87,-3.37 -5.73,-3.85 -32.35,-3.3 -64.71,-6.59 -97.06,-9.89 -5.79,39.81 -11.58,79.63 -17.38,119.44z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_nm" class="jvectormap-region"></path>
                                    <path d="m380.53,320.34c25.06,1.17 50.11,2.71 75.19,3.35 17.22,0.07 34.44,0.63 51.66,0.18 -0.25,-12.69 0.23,-25.42 -0.47,-38.08 -0.61,-2.83 -0.17,-6.27 -1.38,-8.74 -3.04,-2.03 -6.02,-5.19 -6.68,-8.77 -0.43,-2.51 4.3,-4.59 1.29,-6.64 -3.02,0.54 -4.05,-3.34 -7.17,-2.43 -36.21,-0.82 -72.43,-1.33 -108.63,-2.5 -1.27,21.21 -2.54,42.42 -3.81,63.63z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_ks" class="jvectormap-region"></path>
                                    <path d="m353.38,230.59c10.76,0.96 21.27,2.72 32.03,3.66 -0.37,7.11 -0.71,14.23 -1.06,21.34 36.49,1.29 73,1.84 109.5,2.56 -0.31,-1.17 -3.13,-4.05 -4.03,-6.15 -1.99,-2.11 -0.36,-5.13 -2.45,-7.34 -2.42,-3.19 -1.66,-7.14 -2.2,-10.79 -1.66,-2.86 -1.45,-6.25 -2.29,-9.26 -2.94,-2.85 -2.34,-7.01 -3.95,-10.49 -1.13,-3.1 -2.18,-6.19 -2.62,-9.47 -3.51,1.32 -2.89,-3.07 -4.85,-4.29 -2.4,-1.68 -5.57,-1.85 -7.72,-3.93 -3.79,0.07 -7.65,1.04 -11.13,1.94 -2.52,-2.2 -6.03,-3.13 -7.91,-6.06 -13.61,0.96 -27.23,-0.49 -40.83,-1.11 -15.5,-1.05 -31.02,-1.79 -46.51,-2.86 -1.67,14.08 -2.83,28.17 -4,42.25z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap2_ne" class="jvectormap-region"></path>
                                    <path d="m357.44,187.41c25.68,1.58 51.37,3.15 77.06,4.26 3.58,-0.01 7.34,-0.51 10.81,-0.23 1.8,2.9 5.24,3.85 7.69,6 3.55,-1.45 7.52,-1.89 11.25,-1.91 2.45,2.67 7.26,2.29 9.15,5.33 1.32,4.76 3.27,1.86 0.18,-1.15 -1.53,-2.17 1.46,-4.6 1.56,-6.99 1.2,-2.87 1.38,-5.28 -1.58,-6.75 -0.5,-2.04 -0.73,-6.65 2.41,-5.84 2.62,-0.28 0.39,-5.28 1.06,-7.5 -0.32,-9.7 0.19,-19.47 -0.64,-29.13 -0.24,-3.58 -6.26,-4.19 -5.42,-8.4 1.09,-1.22 5.81,-4.38 2.75,-5.4 -27.23,-0.89 -54.5,-1.01 -81.67,-3.15 -9.79,-0.62 -19.57,-1.24 -29.36,-1.86 -1.75,20.91 -3.5,41.81 -5.25,62.72z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap2_sd" class="jvectormap-region"></path>
                                    <path d="m362.88,123.72c26.46,1.49 52.89,3.7 79.4,3.91 10.84,0.26 21.67,0.52 32.51,0.78 0.01,-5.53 -1.38,-10.82 -2.5,-16.17 -1.27,-7.42 -2.05,-14.89 -2.13,-22.42 -2.61,-4.16 -4.11,-9 -3.48,-13.94 -0.44,-3.25 0.67,-6.57 0.3,-9.7 -0.15,-4.01 -2.83,-4.61 -6.31,-4.12 -25.15,-0.47 -50.33,-1.05 -75.41,-3.06 -5.17,-0.49 -10.33,-0.98 -15.5,-1.47 -2.29,22.06 -4.58,44.13 -6.88,66.19z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_nd" class="jvectormap-region"></path>
                                    <path d="m240.16,217.84c37.4,4.49 74.29,8.23 111.69,12.72 2.5,-29.2 5.5,-57.65 8,-86.84 -35.26,-4.45 -70.52,-8.9 -105.78,-13.34 -4.64,29.16 -9.27,58.31 -13.91,87.47z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_wy" class="jvectormap-region"></path>
                                    <path d="m192.59,52.19c0.84,2.76 3.25,5.4 3.2,8.23 -1.5,2.79 -1,5.49 0.52,8.15 3.4,0.39 4.18,3.44 5.26,6.16 1.43,3.34 2.55,6.88 5.37,9.34 0.88,2.21 5.27,1.18 4.34,4.72 -2.23,6.21 -5.45,12.23 -7.06,18.56 0.02,3.34 3.4,5.25 5.73,2.22 1.61,-2.43 5.63,-3.04 4.69,0.97 -0.5,5.3 1.81,10.35 2.59,15.53 1.9,2 5.27,3.44 5.68,6.31 -0.71,1.91 -0.39,8.78 2.32,5.14 1.85,-1.89 4.93,-0.29 6.85,0.86 3.28,-1.63 7.26,-1.21 10.34,0.69 3.69,0.41 1.52,-5 5.95,-4.08 2.71,-0.42 2.01,6.69 3.21,4.1 0.56,-3.26 1.09,-6.54 1.68,-9.8 35.57,4.49 71.15,8.96 106.72,13.44 2.9,-28.44 5.79,-56.88 8.69,-85.31 -28.84,-2.29 -57.55,-5.91 -86.19,-9.99 -26.71,-4.12 -53.36,-8.71 -79.73,-14.68 -3.05,-0.61 -6.99,-2.59 -6.53,2.19 -1.21,5.75 -2.42,11.51 -3.62,17.26z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap2_mt" class="jvectormap-region"></path>
                                    <path d="m260.17,308.53c39.89,4.09 79.51,8.26 119.39,11.91 1.61,-28.46 3.23,-56.92 4.84,-85.38 -37.47,-4.17 -74.94,-8.33 -112.41,-12.5 -4.03,28.98 -7.8,56.99 -11.83,85.97z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d994" original="#b5d994"
                                          id="jqvmap2_co" class="jvectormap-region"></path>
                                    <path d="m169.84,91.72c0.52,3.07 2.27,5.25 4.94,6.78 0.4,3.02 -0.61,5.46 -3.03,7.31 -2.3,2.7 -4.38,5.97 -6.09,8.83 0.39,2.93 -2.57,3.54 -4.23,4.8 -1.77,2.31 -4.28,4.3 -3.93,7.5 -0.64,2.43 4.69,0.57 4.09,4.34 -5.19,11.17 -6.78,23.51 -10.13,35.32 -0.79,3.16 -1.22,4.91 -2.01,8.08 56.92,12.84 62.26,13.45 93.58,19.41 2.75,-17.6 5.5,-35.21 8.25,-52.81 -2.66,-0.84 -0.58,-6.52 -4.23,-4.97 -1.24,1.7 -1.62,4.95 -5.17,3.47 -3.11,-1.99 -6.81,-1.34 -10.13,-0.56 -2.53,-1.76 -5.91,-2.01 -7.69,0.88 -1.75,-0.05 -3.29,-3.39 -2.79,-5.36 1.91,-3.98 -2.85,-5.89 -5.05,-8.27 -0.98,-5.88 -3.48,-11.64 -2.5,-17.69 -1.86,-0.01 -4.25,2.69 -6.47,3.63 -2.21,0.18 -4.52,-3.09 -4.1,-5.31 1.19,-5.37 4.07,-10.37 5.88,-15.6 1.95,-2.64 1.12,-5.57 -2.41,-5.62 -1.55,-3.37 -4.92,-5.66 -5.61,-9.53 -1.31,-2.63 -1.42,-6.47 -5.06,-6.76 -0.99,-1.85 -3.18,-4.47 -1.91,-6.73 2.09,-2.98 -0.34,-5.7 -1.53,-8.5 -2.13,-3.05 0.55,-6.68 0.67,-10.01 0.9,-4.35 1.8,-8.69 2.69,-13.04 -4.18,-0.78 -8.35,-1.56 -12.53,-2.34 -4.5,20.92 -9,41.83 -13.5,62.75z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b4d794" original="#b4d794"
                                          id="jqvmap2_id" class="jvectormap-region"></path>
                                    <path d="m176.34,297.78c27.57,3.92 55.15,7.83 82.72,11.75 4.04,-29.08 8.08,-58.17 12.13,-87.25 -10.83,-1.14 -21.65,-2.33 -32.47,-3.59 1.43,-7.93 2.82,-15.85 3.84,-23.84 -15.27,-2.85 -30.54,-5.71 -45.81,-8.56 -6.8,37.17 -13.6,74.33 -20.41,111.5z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_ut" class="jvectormap-region"></path>
                                    <path d="m173.19,314.66c-2.49,-0.06 -3.05,4.43 -6.38,2.94 -0.74,-2.87 -3.59,-2.82 -5.59,-4.22 -3.74,0.74 -2.37,4.58 -2.68,7.41 -0.52,5.04 -0.42,10.21 -0.89,15.22 -2.19,2.33 -2.44,5.78 -0.24,8.19 2.32,2.62 0.58,7.52 4.09,9.09 0.98,3.59 -2.89,4.83 -5.41,6.09 -3.29,2.46 -3.28,6.86 -3.88,10.47 -1.25,2.44 -4.81,2.39 -4.92,4.97 0.47,2.18 6.18,0.38 3.42,4.54 -0.65,2.75 -3.14,3.45 -5.62,3.78 -3.6,1.45 -2.69,4.7 0.77,5.44 14.69,7.84 28.52,17.13 43.01,25.32 5.79,3.19 11.27,7.21 17.27,9.88 11.71,2.83 23.75,3.45 35.68,4.87 5.71,-39.38 11.42,-78.75 17.13,-118.13 -27.58,-3.93 -55.17,-7.85 -82.75,-11.78 -1,5.31 -2,10.63 -3,15.94z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap2_az" class="jvectormap-region"></path>
                                    <path d="m84.84,232.41c22.96,34.61 45.92,69.23 68.88,103.84 3.66,2.65 3.19,-3.47 3.27,-5.71 0.37,-5.43 0.36,-11.24 1.08,-16.44 2.05,-2.03 4.26,-2 6.08,-0.39 2.62,-0.16 3.86,5.9 6.03,1.27 2.74,-0.82 2.66,-3.64 3.13,-6.41 7.5,-40.87 15,-81.75 22.51,-122.62 -30.72,-6.81 -61.44,-13.63 -92.16,-20.44 -6.27,22.3 -12.54,44.6 -18.81,66.91z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_nv" class="jvectormap-region"></path>
                                    <path d="M67.16,62.81C64.24,70.42 62.73,78.57 58.5,85.63c-2.86,8.53 -5.96,16.93 -10.17,24.89 -3.06,6.61 -8,12.31 -11.32,18.7 -1.03,6.5 -0.64,13.05 -0.36,19.6 37.23,8.7 74.46,16.69 111.69,25.39 3.45,-13.15 6.51,-25.75 10.19,-38.81 1.2,-2.48 3.15,-6.06 -1.1,-5.42 -2.58,-1.78 -0.23,-4.45 -0.38,-6.91 2.3,-2.82 4.36,-5.82 7.47,-7.75 1.75,-5.08 5.43,-9.19 9.03,-13.06 1.66,-3.48 -2.46,-3.92 -3.39,-6.47 -0.25,-3.79 -3.56,-4.26 -6.62,-4.99 -7.63,-2.2 -15.38,-4.2 -23.21,-5.54 -4.9,0.03 -9.79,0.06 -14.69,0.09 -0.95,-2.84 -4.67,1.86 -7.11,0.5 -2.61,0.82 -4.42,-2.63 -6.57,-1.28 -2.61,-0.06 -5.23,0.11 -7.15,-1.87 -3.09,-1.53 -6.33,-1.81 -9.5,-3.1 -1.87,3.03 -5.69,1.22 -8.53,1.31 -1.65,-1.64 -5.79,-3.02 -6.03,-4.81 1.1,-2.44 0.78,-5.93 0.53,-8.59 -0.42,-3.92 -4.72,-2.63 -6.25,-4.49C74.59,58.67 69.45,62.45 67.16,62.81z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_or" class="jvectormap-region"></path>
                                    <path d="m101.38,8.72c0.05,2.75 2.93,5.39 3.25,8.16 -1.92,2.33 -1.78,5.19 -1.32,7.71 -1.81,2.64 1.63,4.82 0.67,7.42 -3.6,1.52 -2.43,-3.7 -4.86,-4.99 -3.34,-2.24 1.47,-3.87 1.17,-5.42 -2.5,-1.11 -2.24,3.88 -3.69,4.17C92.33,26.39 88.86,23.04 84.76,22.57 79.82,20.66 75.28,17.69 72.25,13.25c-3.13,-0.98 -1.96,4.97 -3.25,6.95 -0.63,2.8 2.59,5.06 1.41,8.21 0.52,3.86 -1.29,7.55 0.18,11.29 -1.06,2.88 4.75,5.54 2.94,6.39 -3.45,-1.05 -6.2,3.2 -2.25,4.34 1.57,0.97 -0.61,6.32 -3.3,5.43 -1.83,2.15 1.28,6.86 4.14,4.17 3.77,-1.55 2.75,3.51 5.83,3.13 2.81,-0.24 4.26,3.31 4.54,5.61 0.04,2.48 -0.15,6.02 -0.26,7.78 2.63,1.76 5.01,4.26 8.46,3.62 3.2,0.66 4.7,-3.26 7.97,-0.5 3.01,0.48 6.37,1.55 8.79,3.66 3.03,0.92 6.02,-1.78 8.19,1.05 3.44,1.3 6.67,0.03 9.84,-1.4 0.99,1.78 4.42,1.32 7,1.3 5.35,-0.19 10.68,-0.16 15.82,1.55 6.99,1.44 13.78,3.45 20.65,5.4 4.47,-20.85 8.94,-41.71 13.41,-62.56 -19.81,-3.93 -39.37,-9.21 -58.73,-14.66 -7.27,-1.53 -14.4,-3.52 -21.46,-5.87L101.75,8.45 101.38,8.72z M95.5,15.16C94.05,13.72 92.15,14.26 94.72,17.63 94.39,13.84 99.19,18.11 98.98,14.18 98.24,12.75 96.05,14.08 95.5,15.16z m2.31,1.91c-3.13,3.04 1.36,2.18 0.16,-0.25l-0.16,0.25z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap2_wa" class="jvectormap-region"></path>
                                    <path d="m35.06,153.94c-0.1,4.04 0.4,8.21 -1.99,11.75 -1.86,3.68 -2.55,8.24 -6.48,10.38 -1.19,2.11 -3.49,3.38 -3.59,6.45 -1.94,3.49 2.49,5.65 2.91,8.98 1.54,3.39 2.34,6.94 1.63,10.65 0,2.92 -2.79,5.01 -2.24,8.14 0.05,2.97 -2.24,5.87 0.04,8.54 2.58,5 6.38,9.93 6.71,15.69 -0.54,2.77 -0.99,5.37 1.81,7.17 1.6,1.95 4.49,3.66 2.79,6.46 -1.73,3.87 -1.14,8.04 -1.09,12.16 1.68,2.67 2.83,6.76 6.66,6.53 1.48,2.33 0.97,4.84 -0.22,7.13 -2.5,1.53 -4.36,2.73 -3.66,6.08 0.27,3.49 4.27,5.34 4.36,9.01 1.46,6.2 4.13,11.92 7.59,17.25 0.71,2.57 2.16,4.34 2.9,6.41 -0.24,3.33 -1.93,6.49 -2.41,9.87 -1.66,2.61 1.19,5.52 3.99,5.12 4.03,0.15 7.27,3.31 11.01,4.04 3,-0.55 4.74,2.9 6.07,5.11 1.54,2.71 2.37,6 5.76,6.88 2.51,1.14 6.19,0.05 7.17,3.45 2.41,2.72 -2.39,5.05 1.41,5.17 2.73,1.87 5.56,-1.74 7.56,-0.74 2.13,2.06 4.05,4.2 4.93,7.05 4.3,4.9 1.44,11.77 2.79,17.52 14.73,1.94 29.44,4.72 44.27,5.38 2.78,1.19 6.19,-4.43 2.84,-4.65 -3.13,0.64 -2.83,-4.02 -1.36,-4.66 3.15,-0.88 4.92,-3.83 4.65,-7.04 0.47,-3.98 3.27,-7.43 7.22,-8.4 3.43,-2.04 -0.33,-3.58 -0.79,-5.79 -0.23,-3.65 -1.95,-6.81 -3.62,-9.89 2.02,-3.66 -2.22,-3.32 -3.16,-6.24 -22.6,-34.1 -45.2,-68.19 -67.81,-102.29 6.27,-22.44 12.54,-44.88 18.81,-67.31 -22.04,-5.16 -44.08,-10.31 -66.13,-15.47 -0.45,1.38 -0.9,2.75 -1.34,4.13z m24.13,184.72c-0.27,3.05 7.99,3.06 4.7,2.07 -1.63,-0.35 -3.17,-2.46 -4.7,-2.07z m-5.16,0.38c0.33,3.71 5.81,0.51 1.31,-0.04 -0.44,0.01 -0.88,0.02 -1.31,0.04z M79.69,357.5c-0.2,1.58 4.42,6 3.16,2.37C82.22,358.91 80.8,357.6 79.69,357.5z M77.75,369.13c-0.14,1.55 3.2,3.89 1.32,1.26C78.6,369.72 77.39,366.55 77.75,369.13z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b2d396" original="#b2d396"
                                          id="jqvmap2_ca" class="jvectormap-region"></path>
                                </g>
                            </svg>
                            <div class="jqvmap-zoomin">+</div>
                            <div class="jqvmap-zoomout">−</div>
                        </div>
                        <div id="vmap_europe" class="vmaps display-none"
                             style="width: 757px; display: none; position: relative; overflow: hidden;">
                            <svg width="757" height="300">
                                <g transform="scale(0.5769230769230769) translate(316.0666666666667, 0)">
                                    <path d="M13.47,93.57C12.35,92.52 12.34,90 10.44,89.14 10.62,88.14 13.84,87.66 11.35,86.39 10.05,87.17 9.25,86.92 8.71,87.58 6.27,88.12 8.6,85.09 6.17,85.17 5.23,84.47 10.33,84.75 9.98,83.14 11.32,83.4 14.67,82.04 12.37,81.03 11.23,81.19 6.54,82.06 10.06,81.32 13.04,80.64 9.92,76.6 8.71,79.05 9.24,77.06 11.03,78.05 12.88,77.78 14.68,74.59 9.38,77.17 8.23,75.54 7.26,73.61 12.43,77.09 11.48,74.6c2.44,-0.76 -0.97,1.23 1.21,1.43 1,0.07 3.06,0.24 1.26,-0.8C15.39,74.51 14.27,73.05 14.04,72.76 16.26,70.08 9.73,69.39 11.65,72.54 9.43,70.77 7.4,69.72 5.62,68.37 4.84,67.27 3.62,65.14 5.75,64.54 6.27,63.17 3.83,63.23 6.08,62.64 8.52,60.62 3.8,58.38 3.79,56.87 4.78,56.07 3.39,53.57 4.92,55.82c2,1.48 -1.5,0.05 -0.41,1.67 0.7,1.18 4.94,4.58 4.09,1.22C7.96,57.37 6.11,57.21 8.09,56.47 5.75,56.14 4.83,52.58 8.11,53.61c1.58,0.65 2.17,-1 2.13,-1.24 1.86,-0.56 0.99,-3.89 0.14,-5.02 -2.29,-0.92 1.59,-2.34 -1.23,-2.91 0.6,-3.73 4.98,-2.29 7.51,-3.37 2.78,-1.33 -1.33,-1.73 -1.69,-3.06 -3.07,-1.99 2.8,-0.5 3.28,-2.76 2.87,0.22 -2.67,-2.82 -1.49,-3.84 1.34,0.59 4.57,3.1 4.27,-0.2C20.58,29.48 17.09,31.14 17.33,29.6c1.78,1.02 0.79,-3.69 2.33,-1.12 1.76,1.21 4.05,-0.81 1.11,-1.21 -0.72,-0.16 1.96,-1.91 2.18,-0.31 2.04,0.89 2.39,3.26 4.86,3.29 1.12,-1.58 -2.89,-2.38 -0.16,-2.31 1.35,-1.83 -5.03,-0.94 -1.14,-2.29 1.39,-1.55 1.81,4.29 2.64,1.36 -0.57,-1.39 -0.41,-4.67 1.53,-2.59 0.16,2.02 -2.74,3.73 -1.03,6.23 2.7,1.13 0.11,-4.85 3.69,-4.25 2.74,-0.7 0.37,-3.01 -1.39,-3.16 0.93,-1.59 -0.48,-0.52 -0.91,-1.1 -1.26,0.42 -2.63,-0.27 -1.15,-1.19 -0.81,-1.9 -3.85,0.74 -5.54,0.53 -3.44,0.64 1.14,-2.76 2.36,-3.3 2.28,-0.77 4.66,2.97 6.55,0.04C34.81,17.14 33.04,17.79 32.17,17.97 30.61,18.81 30.38,17.32 30.54,16.77 29.14,17.79 26.4,16.27 29.42,16.34 29.89,14.12 31.85,14.39 33.58,13.44c0.27,-2.21 -3.96,0.03 -1.92,-1.94 2.34,1.37 5.29,0.49 7.37,1.6 0.49,1.25 2.93,3.07 2.07,0.58C40.16,10.86 37.07,10.79 34.89,10.94 32.01,10.71 38.39,8.92 36.45,6.69 35.49,6.8 33.31,6.65 34.75,5.53c1.74,0.57 3.45,1.31 2.13,3.63 0.97,-0.77 3.6,0.14 4.92,-0.01C42.62,6.51 37.36,8.29 39.31,5.97 39.94,4.69 35.39,5.71 36.07,3.41c2.18,-0.52 6.21,0.1 8.48,1.64 1.78,-0.72 2.84,-0.23 4.07,0.55 1.73,-0.23 3.46,0.06 2.78,2.25C52.75,9.86 54.51,8.35 52.72,6.73 52.71,4.07 54.56,10.07 55.78,8.98 56.01,5.87 52.57,4.02 49.87,3.57 48.45,2.66 43.96,4.29 45.02,2.48 44.96,1.07 43.75,0.16 45.71,1.28 47.56,3.52 50.55,-0.47 53.01,0.78 55.13,-0.05 52.02,4.62 54.57,4.07 55.09,3.62 56.43,7.62 57.26,5.53 57.36,3.28 54.5,4.61 54.71,2.93 54.66,0.68 56.28,0.89 57.93,0.78 59.1,1.36 57.92,5.72 60.98,5.64 61.74,4.33 57.63,0.17 61.09,2.11 61.53,3.09 65.18,3.43 63.42,2.17 61.88,1.53 60.02,-0.12 62.69,1.24c1.18,0.74 1.27,-0.27 2.37,-0.09 0.49,-0.8 2.06,-0.17 3.01,-0.37 45.89,0 91.78,0 137.67,0 0.61,1.21 1.15,3.04 -0.24,1.09 -2.48,-0.7 1.23,2.94 1.58,3.94 1.63,2.86 -1.86,0.67 -3.36,1.88 1.28,-1.72 -2.26,-4.24 -1.57,-1.36 0.03,2.25 1.64,3.73 3.68,2.39 1.03,0.77 -1.42,2.8 -1.62,3.53 -3.09,0.12 0.02,1.62 1.04,2.22 0.66,2.09 4.04,0.64 2.3,3.22 -1.05,1.95 -3.92,1.82 -3.21,-0.86 0.14,-3.28 -4.67,-1.36 -4.04,-5.02 -2.02,-0.71 -0.18,3.84 -2.96,2.48 -0.73,0.74 0.41,1.75 -1.42,1.32 -2.61,0.54 1.71,4.84 -0.38,4.25 -1.39,0.66 -1.21,4.72 0.33,2.08 -0.04,-1.13 1.18,-4.09 2.39,-2.05 0.43,1.69 3.14,3.16 0.34,3.59 0.86,3.33 -3.29,2.48 -4.22,0.42 -0.56,1.42 -4.92,2.25 -4.96,-1.01 -1.09,-1.09 -0.61,-6.28 0.38,-2.79 -0.38,2.15 4.88,3.94 3.74,1.34 -3.75,0.99 -2.13,-7.24 -6.06,-4.79 -0.93,1.3 -1.66,1.94 -1.57,-0.09 0.87,-1.48 -0.65,-6.36 -1.62,-2.76 -0.29,1.71 1.87,5.7 -1.38,4.23 -1.61,0.79 -3.43,1.95 -3.68,-0.56 -1.68,-1 0.16,-4.48 -2.68,-3.04 -0.67,1.11 2.68,6.25 0.02,3.71 -0.94,-1.89 -3.02,-1.6 -4.56,-0.77 1.83,0.09 2.37,0.85 0.57,2.18 0.59,2.05 2.81,-2.2 3.66,0.12 1.38,0.4 3.13,-0.11 3.81,2.17 2.43,3.24 -2.95,0.83 -4.01,1.04 -0.05,-1.82 -4.79,-3.3 -3.23,-1.13 1.49,0.95 1.71,0.82 0.15,1.51 -1.1,2.37 1.53,3.48 2.9,1.87 3.12,-1.53 5.02,4.79 1.15,3.53 -2.62,-0.97 -1.48,2.05 -3.89,2.7 -0.43,2.18 2.56,-0.04 2.88,-0.79 2.47,-0.74 2.4,2.46 3.26,3.28 -2.41,2.08 2.06,1.61 0.72,3.86 0.87,0.94 2.37,2.01 0.05,2.28 -2.05,0.35 -0.86,2.02 0.59,1.45 -1.67,-0.11 -1.69,1.85 -1.36,2.27 -1.73,0.52 -2.08,4.37 -0.55,3.78 -0.25,-2.23 4.33,-2.23 2.08,-0.24 -2.82,-0.46 -0.7,2.99 -3.43,2.2 2.08,0.81 0.22,1 -1.03,1.19 -1.32,0.16 3.49,1.1 1.39,1.26 -1.9,0.07 -0.29,1.99 -2.31,1.42 1.18,0.54 1.34,1.84 1.35,2.8 -2.18,2.04 -4.44,-0.74 -2.18,-2.64 1.63,-0.69 0.76,-4.19 -0.17,-2.1 -0.64,2.71 -4.66,4.66 -4.98,0.68 -0.13,-3.43 1.98,-6.57 2.12,-10.01 -0.26,-1.47 -2.38,-1.12 -1.92,-3.26 0.2,-2.67 -2.43,-4.09 -3.97,-4.66 0.54,-2.82 0.04,-5.39 -1.15,-7.72 0.49,-2.96 -3.2,-2.36 -2.3,0.29 0.39,1.99 2.16,3.98 1.82,5.79 -0.98,-1.18 -4.72,-2.37 -4.53,0.09 1.53,0.74 4.96,0.32 3.23,3.09 -0.36,0.92 2.65,-0.97 2.92,1.14 1.39,1.16 4.2,3.13 1.09,4.33 -2.3,0.81 -7.78,0.76 -7.23,-2.79 1.56,-1.72 -2.19,-2.27 -1.32,0.16 -1.72,-2.55 -3.53,-0.09 -1.9,1.66 -2.13,2.01 -4.41,0.62 -6.81,0.57 -2.19,2.71 4.76,1.16 2.08,3.05 0.58,1.9 4.08,1.91 5.81,2.83 1.96,1.43 -0.47,2.15 -1.35,0.46 -1.82,-1.08 -3.45,2.21 -4.74,-0.62 -0.64,-2.28 -4.68,1.1 -2.47,0.81 1.98,0.42 2.27,5.38 5.07,2.98 1.84,-3.35 3.57,2.14 6.26,0.44 1.29,-0.17 2.13,-0.02 0.67,0.65 1.09,1.24 2.33,0.17 2.6,1.96 1.19,2.8 4.25,5.41 6.32,6.4 -0.65,1.36 -3.26,-1.74 -3.14,1.07 -0.24,-1.71 -1.8,-0.78 -1.41,0.45 -1.2,-0.78 -1.84,-2.07 -1.82,0.08 -0.39,2.77 -2.92,-1.74 -2.76,-0.46 0.55,1.51 -0.55,2.28 -0.85,0.45 -2.38,-1.66 -2.14,3.66 -3.7,0.79 -1.88,-0.98 -0.85,3.28 -2.38,0.99 -2,-0.69 -1.48,2.95 -3.73,1.98 -1.43,0.57 -1.73,-1.87 -2.48,0.33 -1.28,0.15 -2.02,-1.77 -3.67,-0.49 -1.51,-0.59 -3.89,-0.69 -5.18,-1.79 -1.83,0.4 -3.94,-2.71 -4.99,0.05 -1.52,0.2 0.6,-5.44 -2.51,-2.84 -0.5,1.46 -2.44,2.79 -1.46,0.41 -0.04,-2.08 -3.47,-2.35 -1.81,-0.01 -0.33,2.95 -2.47,-1.46 -3.31,-2.22 2.66,-0.66 -1.9,-3.4 0.58,-4.85 0.98,-1.25 -0.43,-3.9 -1.29,-1.57 -2.2,1.2 0.59,4.8 -2.3,3.1 0.07,1.58 0.73,2.33 -0.49,2.37 -0.31,3.19 -2.4,-0.77 -3.7,1.08 -1.26,-0.57 -3.86,-0.58 -3.24,0.73 -1.86,1.54 -5.17,-0.4 -5.06,3.18 -2.02,-0.95 -3.43,1.13 -4.24,1.49 -0.67,-0.74 -1.24,2.48 -2,1.23 2.12,-2.45 -2.15,-1.8 -1.8,0.58 -2.16,1.39 -3.92,0.18 -2.08,-1.7 -1.67,0.05 -3.09,2.47 -2.5,-0.4 -0.88,-2.96 -1.92,-0.22 -2,1.13 -1.96,-0.26 -4.27,2.16 -3.76,-0.97 -0.78,-1.12 -2.93,1.49 -3.4,-0.02 1.83,-0.91 0.7,-3.4 -0.63,-1.07 -0.78,1.04 -1.78,1.59 -1.04,-0.05 -2.35,-3.54 3.85,-1.66 4.59,-3.73 -0.17,-1.96 -2.75,-5.32 -4.26,-2.64 1.79,0.66 -1.44,2.8 -2.07,2.43 -1.51,-3.02 -4.63,-0.57 -2.13,1.56 0.17,1.83 -2.38,1.81 -1.85,-0.14 -1.36,-2.38 -2.64,3.42 -2.69,-0.09 0.92,-1.47 0.05,-4.47 -1.39,-1.81 0.69,-2.4 -1.59,-1.67 -2.42,-0.69 -1.63,-2.6 -2.81,-0.08 -1.32,1.39 -0.12,2.09 -5.82,3.27 -3.43,0.33 -0.7,-1.39 -2.14,-1.09 -2.9,-2.54 -1.31,0.12 -1.87,1.12 -2.63,1.96 -0.18,2.43 -0.75,4.74 -2.05,6.98 -0.56,-1.99 -3.06,-1.81 -4.45,-3.2 -2.37,1.32 0.55,4.85 0.85,5.51 -2.93,-1.09 -0.49,5.23 -3.18,2.66C53.03,69.44 53.8,64.37 51.35,66.72c-0.01,1.25 1.67,5.14 1.03,4.67 -0.53,-2.51 -2.88,0.37 -2.61,-2.21 -1.56,-2.63 -4.32,1.46 -2.75,2.77 0.01,1.17 -1.56,2.39 -0.5,0.42 0.86,-3.51 -4.59,-2.97 -3.27,0.28 1.49,1.65 -0.07,2.95 -1.09,0.84 -1.55,-1.63 -4.28,0.31 -4.69,-2.84 -1.38,-1.87 -1.94,1.56 -0.77,2.26 -0.06,1.31 -0.47,2.49 -0.74,0.56 -1.54,-2.22 -1.58,2.78 -0.86,3.53 1.64,2.36 -5.86,1.67 -2.64,3.82 2.3,1.03 -2.22,1.12 -2.82,0.61 -1.74,0.43 1.87,2.58 -0.75,1.83C27.52,82.87 27.84,78.97 25.72,81.05c-0.33,1.79 3.97,2.08 0.81,3.67C24.18,85.6 27.77,81.48 24.7,81.96c-1.65,-0.58 -3.25,0.94 -2.07,2.52 -0.13,-1.56 -3.34,-2.97 -2.3,-0.65 0.92,1 3.65,4.19 0.68,3.11 -0.39,-1.36 -2.18,-3.54 -2.55,-1.53 -2.1,0.36 1.98,3.44 0.79,3.95 -0.52,-1.87 -2.86,-1.68 -1.64,0.35 -0.16,0.51 -2.67,-2.78 -2.9,-4.29 -1.64,-2.64 -1.84,0.81 -1.4,1.86 -0.78,1.52 2.24,0.79 1.57,2.42 -1.75,-0.73 -3.2,1.28 -0.75,1.28 -0.16,0.78 0.34,2.28 -0.65,2.59z M34.12,18.3c-1.05,0.6 -2.47,3.81 -0.57,3.47 1.95,-0.22 4.06,-4.82 0.57,-3.47z m-22.97,56.17c-2.31,-0.35 -0.79,-1.58 0,0z M2.14,66.59c-1.38,-1.11 -0.95,-1.35 0.46,-0.36 -0.18,-0.08 -0.27,0.6 -0.46,0.36z m168.23,-6.32c-0.28,-1.85 2.85,0.02 0.03,0l-0.03,0z M7.85,51.96c-0.57,-0.92 1.55,0.27 0,0z m1.18,-1.63C7.41,50.26 7.17,48.77 8.95,49.87 10,50.07 10.77,49.96 9.03,50.33z M184.09,37.53c-0.77,-1.48 -1.43,-4.23 -2.73,-6.24 -2.01,-2.67 1.21,-6.02 3.05,-2.64 0.95,1.04 0.93,3.38 1.44,4.42 -4.98,-0.16 0.39,3.51 -1.76,4.46z M23.01,25.35c-1.12,-0.81 -0.79,-3.25 0.17,-0.92 0.17,0.37 -0.49,0.58 -0.17,0.92z M209.99,8.88c0.65,-1.41 0.2,-3.29 -1.61,-3.21 -0.07,-1.5 -1.95,-5.46 0.62,-4.89 1.44,0 2.88,0 4.31,0 1.06,2.38 -1.6,4.58 -1.58,7.24 -0.32,0.7 -1.06,0.8 -1.74,0.86z M44.32,3.05c-1.74,-0.98 -6.31,0.12 -6.14,-2.09 1.47,1.81 3.05,0.95 2.25,-0.17 2.2,-0.52 2.82,0.46 3.89,2.27z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap3_gl" class="jvectormap-region"></path>
                                    <path d="m151.61,141.44c-2.42,-0.05 -4.73,-1.12 -5.95,-3.36 -0.71,-2.06 -4.34,-1.68 -3.81,-4.38 0.8,-0.95 3.4,-0.95 1.03,-1.6 -1.69,0.92 -0.37,-1.61 -2.18,-0.86 -0.88,-0.03 -1.32,-2.12 -2.96,-2.05 -1.43,-1.13 -6,-1.27 -4.53,-3.48 1.4,1.45 5.16,1.15 5.29,-1.63 0.95,-0.08 4.39,1.14 2.46,-0.91 -1.28,-0.31 -3.16,-1.27 -0.58,-1.35 2.41,0.51 2.39,-2.69 -0.02,-1.57 -1.25,0.39 -2.36,1.06 -1.66,-0.43 -0.34,-1.62 1.57,-4.11 -1.54,-3.94 -1.49,-1.7 -3.83,-2.36 -5.98,-2.91 1.9,-1.43 2.13,2 4.45,0.36 0.58,-0.11 0.84,1.82 1.93,0.36 1.45,0.02 2.12,1.75 4.12,1.85 1.57,1.88 4.72,-0.08 2.56,-1.73 -1.13,0.23 -4.71,-0.08 -2.41,-1.51 1.13,0.1 5.66,-0.35 3.94,-1.58 -2.53,-0.05 -1.4,-0.83 -0.29,-1.63 0.84,-2.83 -2.64,-1.96 -3.34,-1.81 -1.47,-0.72 -2,-0.85 -1.64,-2.44 2.52,0.42 0.64,-2.75 -0.27,-3.56 -0.04,-0.34 1.76,2 1.91,-0.11 -0.65,-3.43 1.88,0.34 1.11,2 -0.95,4.21 5.86,2.44 3.19,-0.73 -1.94,-1.31 0.11,-2.67 -1.13,-4.2 1.13,0.42 1.67,1.6 2.04,1.18 1.98,0.31 -0.01,2.5 1.33,3.37 0.86,1.89 -0.77,4.19 1.64,5.57 -1.28,0.64 -3.87,-0.52 -2.63,1.99 -0.4,1.18 -1.92,2.25 -0.42,2.93 -1.31,1.46 -1.09,4.59 1.22,2.7 0.49,-1.4 2.89,-6.12 2.22,-2.37 2.69,2.22 4.53,-3.04 4.48,-5.25 2.58,0.03 -0.68,6.63 3.51,5.53 -0.01,-0.74 0.05,-5.1 1.81,-2.72 1.08,-2.01 3.5,-0.36 1.83,1.62 2.1,1.36 -0.53,3.45 0.95,5.46 2.69,-0.06 0.02,-7.39 2.92,-6.07 -0.32,2.52 1.49,4.92 3.27,1.85 1.68,-2.37 1.62,3.33 3.69,1.28 1.71,-0.8 1.1,-6.38 3.47,-3.02 -0.81,1.5 1.32,1.54 -0.24,3.29 -0.5,2.17 2.82,1.16 2.36,3.29 2.02,0.52 2.1,1.62 0.19,2.57 -2.6,1.53 3.45,1.86 0.49,3.25 -0.74,0.55 -3.68,1.15 -1.27,1.34 1.72,-0.23 4.34,-1.28 4.35,1.54 -0.04,2.17 -4.93,1.21 -2.47,3.09 1.83,0.33 2.75,2.38 0.41,2.2 -1.18,-0.56 -1.74,-0.63 -0.71,0.56 -0.6,-0.3 -3.92,0.12 -2.06,0.55 2.71,0.87 -0.55,1.36 -1.7,1.52 -1.06,0.04 -2.49,1.02 -2.87,2.69 -1.35,-0.83 -1.72,1.98 -2.29,-0.35 -0.72,-2.57 -2.1,-0.68 -2.71,0.31 -2.09,-0.1 -4.17,0.18 -5.78,1.63 -1.89,0.57 -3.52,-3.04 -3.52,0.21 -2.4,-1.75 -5.62,-1.53 -6.88,1.4l-0.35,0.08 0,0z m24.31,-7.94c-1.58,1.64 1.17,1.65 0.84,-0.23 -0.28,0.08 -0.56,0.15 -0.84,0.23z M147.49,99.76c-2.33,0.02 -1.42,1.38 0.2,1.79 0.14,-0.38 0.69,-1.97 -0.2,-1.79z m33.62,15.99c1.19,-0.59 1.6,-0.17 0,0z m-44.05,-9.09c-1.62,-0.01 -0.68,-1.6 0.37,-0.74 1.34,-0.47 -0.84,-4.6 0.49,-2.48 -0.6,1.82 2.54,3.42 -0.86,3.22z m-1.42,-1.5c-1.66,0.2 -1.5,-3.06 -0.29,-0.86 -0.05,0.3 1.22,0.95 0.29,0.86z m4.48,-1.49c-0.86,-0.96 -0.83,-1.57 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_is" class="jvectormap-region"></path>
                                    <path d="m126.31,476.79c-3.11,-0.89 -5.74,-4.21 -9.28,-3.12 -1.78,0.38 1.76,-2.58 1.47,-3.95 0.39,-1.92 1.56,-3.11 1.18,-4.56 -0.46,-1.65 0.47,-3.6 1.4,-5.27 -0.61,-1.65 3.07,-0.14 2.33,-1.74 -1.59,-1.17 -2.48,-2.71 -4.71,-1.61 -1.89,-0.04 -2.12,-3.1 -2.67,-4.46 0.27,-2.21 3.57,-4.27 2.21,-6.5 2.42,0.37 3.47,-2.17 4.77,-3.81 0.98,-1.71 1.87,-3.43 3.16,-4.47 -0.79,-1.76 1.02,-5.31 3.28,-5.87 1.59,-1.26 -0.95,-2.63 0.8,-4.09 0.23,-2.53 -1.05,-5.19 -0.11,-7.75 2.54,0.06 0.15,-1.87 0.17,-2.24 1.59,-1.44 4.74,-3.3 6.49,-1.31 -3.35,1.53 -0.16,3.98 2.09,3.19 1.85,-0.17 3.87,2.53 6.45,0.97 1.56,-0.13 6.26,-0.07 4.22,3.05 0.22,1.77 4.81,2.08 1.88,3.98 -2.66,0.33 -4.02,2.88 -6.33,3.35 -0.97,1.66 1.09,4.53 -0.81,6.49 -1.07,1.01 0.55,2.39 -1.62,2.77 -2.6,1.54 1.62,6.06 -2.82,6.49 -1.74,-0.37 -5.6,-2.08 -3.57,1.31 1.07,1.89 -0.41,4.57 2.03,6.2 1.92,2.91 -3.81,2.81 -3.68,5.95 -1.09,1.6 0.5,5.45 2.67,5.41 -1.19,1.2 -4.31,1 -5,3.34 -3.07,2.07 -0.28,7.22 -4.25,7.62 -0.55,0.29 -1.11,0.63 -1.75,0.65z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d993" original="#b5d993"
                                          id="jqvmap3_pt" class="jvectormap-region"></path>
                                    <path d="m114.26,519.26c5.38,-1.06 11.75,-0.39 15.9,-4.63 5.26,-4.88 8.22,-11.54 11.83,-17.6 2.3,-1.64 3.11,0.89 3.7,2.43 3.25,0.06 3.27,5.03 6.51,6.18 2.01,2.4 5.02,1.6 7.69,1.35 1.26,1.84 3.78,-0.68 5.41,1.5 1.48,1.09 4.97,-1.46 5.09,1.72 1.76,1.07 3.75,0.97 5.94,1.12 1.21,2.49 5.27,4 3.5,6.77 1.55,1.82 -0.97,1 -2.11,1.18 -21.15,0 -42.31,0 -63.46,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_ma" class="jvectormap-region"></path>
                                    <path d="m170.08,507.95c-0.69,-0.45 0.64,-1.19 0,0z m-23.1,-9.15c-1.89,-0.27 -1.23,-3.36 0.81,-2.76 -1.01,0.61 -0.28,2.16 -0.81,2.76z m-1.53,-5.41c-1.92,-1.84 -4.81,-3.55 -4.78,-6.5 1.74,-1.65 -3.05,-2.72 0.06,-3.62 1.8,0.08 1.95,-2.62 0.29,-1.71 -1.68,1.92 -1.49,-3.2 -3.57,-3.37 -1.21,-2.54 -5.06,-1.7 -6.26,-3.7 0.08,-2.72 1.22,-5.37 3.58,-6.95 1.91,0.46 5.66,-3.3 1.98,-3.27 -1.9,-2.17 -1.67,-5.74 1.14,-6.99 3.7,-0.95 1.1,-4.57 -0.28,-6.35 0.58,-1.68 0.45,-3.01 -0.84,-4.53 2.46,2.34 7.45,0.07 6.4,-3.43 -2.26,-2.56 3.15,-2.71 1.97,-5.34 1.81,-1.67 0.28,-5.41 1.17,-6.21 1.77,-2.14 4.99,-2.46 6.88,-4.55 1.92,-2.79 -4.07,-2.45 -2.2,-4.91 0.43,-3.16 -4.07,-2.3 -5.69,-3.2 -1.8,2.37 -3.89,-1.02 -6.23,-0.51 -0.28,-1.34 -3.49,1.05 -2.42,-0.88 2.82,-1.19 -0.75,-4.5 -2.73,-2.96 -2.11,1.45 -3.86,-0.78 -1.34,-1.64 0.94,0.28 2.32,-1.98 0.72,-1.58 2.23,-1.63 -2.16,-0.92 -0.24,-2.66 2.41,-1.99 0.28,-4.66 -2.06,-3.75 -2.26,-1.66 -0.12,-3.23 1.07,-4.13 3.66,0.29 6.76,-2.08 9.92,-3.51 1.78,-2.19 1.34,2.22 3.29,-0.21 3.33,-0.27 2.62,6.64 6.6,4.09 2.47,1.16 5.51,0.94 8.02,1.44 1.9,-1.24 3.14,2.45 5.32,2.3 2.35,0.57 4.3,2.34 6.75,2.93 2.65,1.41 5.29,-0 7.84,-0 2.13,0.65 4.69,5.39 6.5,1.98 2.5,1.32 5.04,3.91 8.46,3.08 1.39,-0.01 3.8,0.79 4.14,1.8 -1.87,1.22 0.06,2.67 1.22,2.4 1.66,1.57 5.29,1.19 5.34,4 1.46,0.54 4.43,-0.57 4.33,1.92 1.41,-0.29 3.73,0.98 4.54,0.5 1.54,0.01 3.53,0.67 3.72,-1.35 1.63,1.02 3.94,2.12 5.05,3.3 -0.62,2.48 1.62,2.94 3.4,2.37 1.23,1.43 2.74,2.23 4.47,1.42 1.62,0.92 3.85,2.1 4.94,-0.04 1.38,-0.43 5.47,1.31 2.5,2.25 -0.52,2.49 0.35,5.62 -3.02,6.24 -3.95,0.65 -6.55,3.99 -10.24,4.85 -4,0.26 -8.86,0.24 -11.41,3.91 0.64,1.13 2.06,1.75 -0.08,1.82 -2.98,1.35 -3.8,5 -6.55,6.72 -2.04,2.09 -4.6,4.27 -5.09,7.29 -0.14,3.13 0.72,6.8 3.86,8.19 -0.28,2.13 -4.94,1.61 -6.14,3.93 -1.51,0.81 -1.84,2.35 -3.08,3.65 0.22,1.68 -4.27,3.01 -1.46,5.03 -0.94,1.1 -4.96,-1.49 -6.88,0.41 -2.79,1.13 -4.55,3.71 -5.69,6.37 -2.11,3.74 -4.63,-2.34 -7.31,0.69 -2.28,0.2 -4.7,-1.72 -7.4,-1.1 -2.51,-0.92 -5.12,-1.75 -7.89,-1.82 -2.99,0.03 -4.54,3.25 -7.74,1.83 -3.45,-0.48 -3.73,3.46 -6.83,4.06z M229.67,469.73c-3.03,-0.94 2.34,-1.17 0,0z m-3.28,-1.86c-1.31,-1.98 3.63,-2.8 0.96,-0.55 -0.28,0.23 -0.58,0.51 -0.96,0.55z m8.15,-0.95c-0.99,-1.19 -3.24,-1.21 -2.69,-3.07 -1.57,-0.61 -4.43,-0.57 -1.44,-1.83 1.82,-0.69 5.61,-3.6 5.15,-0.13 1.01,1.13 4.03,0.64 1.76,2.77 -0.83,0.87 -1.8,1.58 -2.78,2.26z m11.67,-5.53c-0.43,-1.32 -5.6,-1.9 -2.47,-2.15 1.42,0.04 2.4,0.66 2.47,2.15z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b2d496" original="#b2d496"
                                          id="jqvmap3_es" class="jvectormap-region"></path>
                                    <path d="m284.9,519.26c-2.21,-1.12 0.73,-3.64 -0.95,-5.51 -1.46,-3.16 2.15,-6.93 -0.12,-9.45 -0.67,-0.73 2.93,-1.29 1.98,-2.95 2.23,-0.03 1.46,-2.58 3.74,-2.85 2.52,-1.83 5.41,-3.02 8.35,-3.78 1.3,0.18 -1.34,3.29 1.51,2.64 0.71,-1.15 1.1,-2.15 2.08,-1.26 -0.76,0.27 1.03,1.6 0.03,2.09 1.72,0.55 2.13,5.46 4.03,3.7 1.46,-0.73 4.4,-5.15 5.37,-2.71 -0.9,2.37 -2.28,5.07 -4.51,6.35 -3.22,1.82 -2.27,6.37 0.87,7.67 1.26,0.82 1.66,2.08 3.04,2.36 -0.15,1.99 1.01,4.41 -1.79,3.68 -7.88,0 -15.77,-0.01 -23.63,0.01z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_tn" class="jvectormap-region"></path>
                                    <path d="m181.84,519.26c-2.16,-1 0.09,-2.29 0.05,-3.03 -0.8,-1.48 -5.28,-4.37 -1.47,-3.7 2.83,-0.51 5.98,-1.33 7.84,-3.67 1.17,-2.46 3.66,-2.95 5.89,-2.07 1.44,-0.79 2.77,-2.77 3.38,-0.29 3.67,1.9 4.38,-3.05 7.15,-3.91 3.27,-1.17 6.41,-3.1 10.01,-2.8 3.04,0.05 6.13,0.57 9.13,-0.19 2.74,1.56 5.53,-0.24 7.63,-1.26 2.46,0.75 5.2,0.79 7.75,-0.34 2.83,-0.67 5.62,0.67 8.61,0.23 3.35,0.17 5.17,6.05 8.94,3.1 1.43,-2.77 7.09,0.3 7.33,-3.88 2.03,-1.62 1.87,1.59 2.96,1.23 1.79,0.05 6.14,2.99 6.01,-0.61 2.5,-2 5.17,3.33 8.12,2.16 1.57,-1.13 4.46,-0.6 5.35,-0.15 -1.62,-0.02 -2.54,1.2 -1.93,2.18 -1.87,0.63 -3.58,2.5 -1.04,3.3 0.38,2.87 -2.09,5.94 -0.27,8.63 -0.06,1.4 0.31,4.98 -0.86,5.05 -33.52,0 -67.05,0 -100.57,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6d993" original="#b6d993"
                                          id="jqvmap3_dz" class="jvectormap-region"></path>
                                    <path d="m265.32,343.64c-0.99,-1.16 -1.81,-2.49 -3.73,-3.37 -2.08,-0.35 -0.28,-1.85 -1.25,-2.79 1.47,-1.88 -0.53,-2.73 -1.47,-0.87 -1.28,2.32 -4.46,0.99 -3.2,-0.74 -0.78,-0.74 1.11,-3.63 -1.62,-3.19 -2.17,0.83 -2.23,-1.41 -2.67,-2.1 -3.94,1.05 -1.51,-5.53 -5.39,-3.71 -2.36,1.07 -3.02,-4.27 -0.45,-4.53 1.73,-0.62 4.14,-3.17 4.52,-0.63 2.42,-0.22 3.66,2.56 5.83,0.13 1.3,-0.02 1.88,1.91 1.96,-0.36 0.89,-2.95 2.67,0.31 4.45,-0.43 0.58,-0.7 1.45,3.34 3.54,2.07 2.55,0.01 1.99,1.94 1.4,3.06 -1.22,1.97 -0.15,4.06 2.13,3.5 1.5,1.19 1.36,3.16 2.63,4.39 -1.48,2.22 -4.2,1.28 -5.1,4.2 -1.39,2.28 2.74,5.98 -1.59,5.37z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d894" original="#b5d894"
                                          id="jqvmap3_be" class="jvectormap-region"></path>
                                    <path d="m350.4,500.36c-1.75,-1.38 -4.77,0.56 -6.21,-2.11 -0.98,-3.12 -4.25,-2.35 -6.74,-3.12 -2.11,-1.47 -4.61,-1.93 -6.58,-3.76 -2.2,-1.23 -6.25,0.31 -6.1,-3.66 0.15,-1.98 2.31,-4.17 3.5,-1.8 2.52,0.49 3.53,-4.85 5.24,-0.9 2.01,0.26 4.02,2.27 5.97,0.45 2.63,-0.1 5.81,0.01 7.46,-2.47 1.45,0.01 4.12,1.89 4.36,-0.76 1.1,1.6 3.69,-2.6 2.02,0.26 -1.4,3.25 -4.08,7.31 -3.12,10.66 1.21,0.69 0.93,2.35 2.17,3.37 -1.93,0.14 -1.88,2.41 -1.97,3.84z m7.22,-15.37c-2.78,-0.14 -2.87,-3.99 -0.28,-4.55 1.37,-2.08 -1.36,-4.79 2.17,-5.13 3.25,-2.22 -1.35,-4.63 -1.21,-7.46 -1.16,-2.63 -2.56,-4.66 -3.09,-7.45 -1.59,-2.98 -4.91,-0.29 -6.78,-2.73 -1.65,-0.84 -0.12,-5.17 -3.33,-5.63 -1.56,-0.37 -4.03,2.8 -2.57,0.22 0.06,-2.91 -3.33,-1.3 -4.25,-2.37 -0.69,-2.23 -3.26,-6.17 -5.36,-4.2 -1.73,-2.18 -4.5,1.85 -5.25,-1.44 -2.69,-0.65 -4.1,-2.62 -6.18,-4.28 -0.73,-3.32 -5.19,-3.11 -5.74,-6.57 -1.05,-1.9 -5.27,-0.02 -4.05,-2.26 -1.1,-2.38 -3.86,-3.39 -4.73,-5.46 -3.13,0.51 0.07,-2.73 -1.71,-4.47 -2.14,-2.56 -1.2,-6.42 -3.6,-8.63 -2.19,-1.12 -4.5,-0.88 -6.03,-3.28 -2.22,-0.9 -4.82,-2.51 -7.33,-1.86 -1.74,1.89 -3.46,3.3 -4.61,5.48 -1.55,2.14 -5.91,2.59 -3.27,-0.76 1.07,-4.25 -4.16,-0.46 -5.52,-3.08 -2.08,-1.9 -1.08,-4.02 0.62,-5.53 0.76,-2.12 -4.77,-3.84 -2.88,-4.68 2.55,0.23 5.53,-3.6 2.83,-5.28 -0.93,-1.94 -2.92,-4.5 0.7,-3.9 2.4,0.04 4.29,-1.2 6.65,-0.24 1.85,-1.05 2.45,-2.98 2.51,-4.87 1.03,-0.35 2.29,-2.18 1.57,0.13 -0.67,2.56 4.99,2.17 2.47,4.45 0.19,0.08 2.08,0.32 2.23,1.7 1.41,1.01 2.54,-1.65 0.98,-2.25 0.53,-2.02 3.41,-3.57 2.37,-5.9 0.68,2.09 2.82,3.69 4.41,1.42 0.81,0.91 2.52,3.75 3.07,0.97 -0.97,-1.55 1.29,-1.81 -0.84,-2.7 -0.29,-2.99 3.05,2.3 3.43,-1.02 -1.77,-2.29 0.88,-4.07 2.84,-1.92 2.41,1.34 1.9,-4.15 4.64,-2.65 2.33,0.51 5.21,-2.28 6.13,0.74 1.38,2.34 4.22,3.29 6.93,3.47 1.41,0.44 5.26,-0.07 4.99,0.93 -2.13,0.92 -2.35,3.92 0.43,3.72 -1.26,1.22 -1.47,2.53 -0.57,3.56 0.79,3.16 -4.05,-1.16 -3.93,2.42 -2.22,1.73 -5.54,2.13 -7.33,4.03 -0.52,1.97 1.06,2.99 1.39,4.46 3.61,0.71 -1.06,2.87 -0.87,4.28 0.35,2.85 0.62,6.32 3.48,7.85 2.75,2.1 5.47,4.43 8.75,5.58 2.03,1.86 2.11,4.88 3.12,7.29 0.93,3.7 3.47,6.75 6.72,8.67 2.2,2.52 5.18,4.19 8.71,3.54 1.79,0.5 5.88,-2.59 5.92,0.29 -0.8,1.53 -3.65,2.89 -1.29,4.86 4.13,2.94 10.13,1.81 13.75,5.65 1.89,1.55 5.85,0.5 6.34,3.52 1.71,1.18 6.04,2.73 4.13,5.37 0.4,1.63 -0.95,3.55 -2.34,1.36 -0.96,-2.97 -3.23,-5.68 -6.54,-4.48 -2.32,-1.32 -6.05,-2.69 -6.78,1.09 -1.28,2.2 -1.32,4.97 -2.42,7.17 0.64,2.84 4.59,1.65 5.83,3.73 1.59,0.26 0.35,2.98 1.81,3.8 -0.21,3.1 -5.83,1.6 -5.88,5 0.28,1.92 0.81,4.68 -1.72,5.06 -1.23,1.65 -1.39,4.64 -3.63,5.25z m-35.56,-71.98c1.98,1.43 0.5,-2.39 0,0z m-33.54,62.41c-0.72,-1.6 -3.1,-3.35 -3.37,-5.68 1.54,-2 1.07,-4.81 2.16,-7.03 -3.26,0.28 0.82,-2.8 -0.89,-4.55 -0.02,-1.96 -1.35,-4.24 -2.94,-4.22 0.19,-1.55 0.4,-3.39 2.06,-1.78 3.1,0.15 5.25,-2.55 7.52,-4.29 0.91,-0.84 5.63,1.48 2.53,2.55 -0.36,1.47 2.3,1.33 1.41,2.66 3.07,1.36 0.3,4.08 -0.53,6.16 1.23,2.67 0.22,5.65 0.3,8.76 -0.33,1.29 -0.37,5.73 -2.35,3.37 -1.49,-1.18 -4.61,-1.6 -3.46,1.11 -0.38,1.17 -0.94,2.88 -2.43,2.94z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b1d197" original="#b1d197"
                                          id="jqvmap3_it" class="jvectormap-region"></path>
                                    <path d="m402.72,308.87c0.99,-3.18 0.27,-7 -3.79,-7.04 -0.71,-2.3 3.14,-4.07 4.34,-6.18 -0.26,-5.15 -3.83,-9.19 -5.74,-13.77 2.18,-0.83 4.01,-0.87 5.95,-0.9 0.86,-1.84 2.51,-1.83 3.98,-0.84 -1.05,-1.12 -2.37,-3.07 0.28,-3.17 1.9,0.02 -0.71,-2.58 2.17,-2.24 -1.28,2.76 4.76,1.14 2.24,-1.38 -2.85,-0.47 0.33,-3.89 -1.4,-5.76 0.96,-1.56 2.7,-3.08 2.72,-4.65 2.53,0.76 4.43,-4.49 0.94,-3.47 -1.1,-1.17 0.25,-4.78 1.91,-6.11 2.45,0.48 4.37,-0.43 4.51,-3.22 0.17,-2.25 2.08,-1.78 3.18,-1.85 2.02,-2.32 2.15,2.85 3.69,0.14 1.75,-1.51 3.73,-0.83 3.53,1.45 2.17,2.99 3.24,-2.73 5.87,-2.54 1.93,0.2 3.24,2.17 5.04,1.95 0.25,2.02 -0.47,3.85 1.8,5.15 0.82,1.65 -1.87,4.51 1.47,4.95 2.1,-0.08 0.99,1.32 1.56,1.96 1.72,2.18 3.98,3.94 6.71,3.73 0,1.84 0.71,4.69 2.92,2.85 2.09,-1.22 3.09,0.78 3.28,1.76 2.02,-0.38 3.13,1.46 1.26,2.31 -0.06,3.07 -3.04,4.09 -5.35,2.65 -3.54,0.27 -2.85,5.57 0.51,5.52 0.97,2.55 1.33,5.72 3.91,7.42 -2.66,1.35 -6.88,2 -6.85,5.76 -1.23,2.53 1.43,5.57 1.33,7.2 -1.16,-1.33 -5.51,-3.73 -5.13,-0.77 -2.24,-2.52 -3.75,4.16 -4.59,0.03 -1.77,-2.65 -4.04,1.4 -4.28,1.56 -1.22,-2.58 -2.82,1.6 -3.58,-0.67 -1.01,0.66 -2.93,1.68 -4.34,1.01 -1.39,0.16 -1.96,2.41 -2.67,0.56 -2.3,-2.34 -5.69,0.72 -8.43,-0.73 -2.87,-0.21 -5.7,0.69 -8.51,0.87 -1.69,1.51 -4.3,1.17 -5.72,2.79 -0.82,1.63 -1.2,4.18 -3.37,2.88 -0.54,-0.03 -1.11,0.27 -1.34,0.78z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_by" class="jvectormap-region"></path>
                                    <path d="m378.8,342.69c0.85,-2.71 -2.77,-1.44 -3.2,-3.81 -2.16,-0.74 -2.68,4.74 -4.1,1.6 -1.34,-0.42 -0.38,-2.05 -2.3,-2.3 -1.38,-1.23 -0.72,-3.2 -2.99,-2.63 -1.39,-1.14 -3.17,-0.83 -4.08,-0.27 -2.65,-1 1.12,-2.8 -1.66,-3.95 -1.04,2.08 -3.71,0.51 -5.13,-0.34 -2.56,-1.21 -1.29,2 -1.13,2.64 -1.27,1.67 -2.44,1.3 -2.92,-0.65 -1.25,-0.75 -2.67,-1.29 -0.72,-2.16 1.16,-2.1 -2.17,-2.93 -3.11,-1.63 -1.5,-2.25 -5.49,-1.16 -6.45,-4 -1.21,-1.39 -2.59,1.06 -1.9,-1.41 0.23,-2.18 -0.48,-4.58 -2.34,-5.49 -1.37,-2.65 0.61,-5.37 -0.78,-8.1 -2.17,-1.37 0.53,-5.96 -3.41,-5.97 -3.09,-2.11 2.9,-5.25 0.3,-8.13 -0.64,-1.64 -2.11,-4.93 -1.01,-5.69 2.39,-0.86 4.49,-2.6 7.02,-3.34 1.88,-0.91 4.34,-1.13 5.97,-2.18 0.73,-2.97 3.72,-4.13 6.19,-5.25 2.44,-1.51 5.22,-3.64 8.26,-2.74 0.34,2.92 2.37,6.29 5.83,5.11 2.32,-0.46 3.66,-2.87 6.19,-1.88 5.94,0.22 12.06,0.04 17.77,-1.75 2.19,-1.89 4.37,-0.56 6.59,0.69 0.91,5.68 5.67,10 6.52,15.73 -0.74,2.77 -4.55,3.76 -4.71,6.89 0.95,2.08 5.51,0.97 4.43,4.48 -0.75,3.1 1.11,5.48 1.99,8.14 0.77,2 4.89,2.48 3.07,4.57 1.18,1.35 3.03,3.77 0.15,4.64 -2.63,0.49 -3.02,4.28 -4.54,6.17 -0.82,2.29 -3.04,4.17 -2.56,6.78 1.11,1.72 -0.12,4.53 2.39,4.91 -2.96,0.2 -5.66,-0.81 -7.88,-2.64 -2.12,-1.23 -4.34,-0.31 -6.37,0.12 -1.06,0.6 -0.02,2.66 -2.03,1.15 -2.7,-1.27 -4.67,0.77 -6.02,2.87 -0.44,-0.92 -1.49,0.48 -1.34,-0.18z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d894" original="#b5d894"
                                          id="jqvmap3_pl" class="jvectormap-region"></path>
                                    <path d="m566.3,519.26c-0.01,-4.69 -2.26,-8.97 -3.12,-13.51 1.51,-3.32 4.45,-0.15 6.76,0.1 3.02,0.33 6.94,0.22 8.51,-2.87 4.44,-5.57 8.37,-11.53 12.83,-17.08 1.86,2.51 3.76,5 5.38,7.68 -2.06,2.03 2.19,4.71 3.12,1.72 0.91,2.72 -2.48,4.53 -4.03,6.38 -4,3.47 -8.47,6.39 -12.72,9.51 -2.44,0.61 -3.15,3.3 -0.46,3.9 2.58,1.36 5.17,2.72 7.71,4.17 -7.99,0 -15.99,-0 -23.98,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_jo" class="jvectormap-region"></path>
                                    <path d="m449.88,508.26c-1.41,-0.44 -0.91,-2.43 -2.98,-2.05 -2.92,-1.02 -4.66,0.87 -7.49,-0.12 -2.89,2.86 -3.34,-3.03 -1.84,-3.28 2.13,1.48 4.85,0.78 6.99,2.27 2.66,-1.89 5.67,-2.41 8.68,-1.61 1.64,-0.07 3.7,-0.37 4.57,-0.83 -1.03,2.5 2.95,2.63 3.64,0.39 1.59,-1.01 2.86,-0.15 1.23,1.36 -4.14,0.67 -8.27,1.86 -12.04,3.72l-0.39,0.1 -0.37,0.03 0,0z m-26.29,-13.55c-0.61,-2.64 -1.46,-5.84 -4.37,-6.76 -3.02,-0.62 -1.68,2.8 -1.92,4.11 -2.48,0.25 -0.03,-2.58 -2.33,-3.13 -1.56,-1.69 2.11,-3.33 -0.42,-5.29 -1.75,-1.46 -3.48,-2.23 -4.88,-3.8 -1.71,-0.32 1.67,-2.18 0.95,-3.89 1.31,0.41 3.43,-0.58 4.2,-2.4 2.31,-0.03 5.27,1.8 8.03,2.01 1.1,0.72 3.08,0.98 3.24,1.46 1.77,0.36 1.5,3.47 4.29,3.78 1.97,0.86 -3.33,1.22 -3.75,-0.39 -3.29,-1.87 -3.6,3.04 -0.88,3.97 1.42,2.4 3.54,4.49 2.98,7.25 0.93,1.21 1.93,2.16 0.11,0.68 -1.13,-1.37 -3.59,-4.36 -5,-1.33 -0.38,1.2 -0.28,2.48 -0.25,3.72z m12.62,-17.67c-0.61,-1.76 -3.37,-2.18 -4.61,-3.83 -1.54,-1.35 -1.12,2.07 -3.22,1.63 -1.32,1.11 -3.33,0.37 -1.06,-0.31 2.53,-1.38 -0.23,-3.22 -1.98,-2.17 -2.19,0.64 -2.76,-3.59 -4.29,-0.5 0.28,-1.81 -1.78,-2.98 -1.95,-0.63 -1.85,0.67 -5.66,-0.17 -7.42,2.31 -1.43,-1.51 -2.69,-1.73 -3.58,0.32 -0.06,-3.13 -3.02,-4.71 -4.64,-5.97 -0.05,-3.03 -3.45,-4.15 -5.3,-5.69 0.58,-2.13 -4.66,-2.22 -1.22,-2.7 1.45,0.13 1.31,-1.81 1.97,-2.79 -2.74,-2.59 4.57,-2.51 2.29,-5.81 0.57,-2.27 3.93,-4.04 1.77,-6.57 2.29,-1.19 5.68,-0.59 7.21,-3.12 0.92,-4.2 5.51,-0.91 7.7,-3.66 0.88,-0.81 0.03,-3.12 2.26,-2.13 2.68,-1.49 5.94,-1.98 8.75,-3.4 1.35,-1.69 4.25,-2.43 5.72,-0.71 1.88,0.93 3.48,-0.95 5.39,0.66 2.83,0.48 5.06,-1.99 7.75,-2.56 2.63,-1.48 -0.92,-3.81 -0.19,-4.93 2.53,-0.82 6.54,2.78 3.07,4.45 -2.66,1.03 1.16,6.08 -1.92,6.2 -2.59,-1.16 -5.58,1.42 -8.08,-0.62 -2.31,-0.06 -3.98,4.61 -5.94,1.87 -2.75,-0.21 -2.93,5.39 -5.82,3.29 -2.56,0.13 -2.19,2.87 -0.61,3.88 1.51,1.31 -0.02,1.67 -0.46,3.12 -2.01,-0.91 -2.94,1.12 -4.72,-0.3 -3.05,1.25 -3.01,-2.2 -1.76,-3.97 -0.09,-0.54 -2.81,1.81 -3.44,2.49 -1.02,1.92 0.18,3.87 -0.21,6.03 1.55,1.98 3.8,3.4 4.84,5.84 0.92,0.8 4.25,2.4 3.42,2.64 -2.14,-2.19 -4.85,-0.02 -3.78,2.46 1.31,0.13 3.2,1.7 0.6,2.21 -1.13,0.04 -4.23,2.36 -2.68,2.49 2.62,-1.25 4.96,1.17 7.41,0.98 0.52,2.36 2.91,0.77 3.98,2.53 2.06,0.36 4.93,0.25 3.64,2.95 0.1,1.33 1.96,3.02 1.13,4.05z m-32.41,-12.35c-2.66,1.97 2.35,4.76 3.65,1.72 0.88,-3.08 -2.48,0.37 -3.25,-1.63l-0.4,-0.09 0,0z m1.2,12.17c-2.12,0.67 -3.94,-2.49 -2.24,-3.05 -0.52,2.11 1.79,2.11 2.24,3.05z m35.21,-4.75c-1.33,-0.45 -3.15,-2.25 -0.48,-1.45 1.91,-0.84 2.27,1.01 0.48,1.45z m-3.1,-3.76c-1.98,-1.68 -5.22,0.85 -5.86,-2.11 -1.43,-1.48 -5.05,-2.2 -5.77,-2.78 2.78,-2.67 4.14,2.1 7.15,1.68 1.66,0.78 3.06,-0.62 3.9,1.22 0.4,0.59 0.43,1.32 0.58,1.99z m-10.1,-17.81c-3.53,-1.73 2.32,0.07 0,0z m3.59,-1.57c-2.32,-1.62 -0.44,-1.62 0.45,0.12l-0.11,0.22 -0.34,-0.34z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d994" original="#b5d994"
                                          id="jqvmap3_gr" class="jvectormap-region"></path>
                                    <path d="m679.06,344.59c-1.21,-0.72 -0.78,-2.05 -2.51,-2.48 -0.91,-2.53 -0.44,-5.74 -2.11,-7.9 1.43,2.3 3.65,0.44 4.81,-0.09 -0.04,3.47 0.02,6.95 -0.03,10.42l-0.16,0.04z m-9.11,-14.43c-1.83,0.29 -2,-1.85 -2.97,-2.07 -2.67,-0.77 0.57,-4.63 0.48,-6.52 1.65,-3.13 3.89,-6.16 6.88,-8.09 1.36,-0.18 5.09,-1.73 4.9,0.43 0,2.65 0,5.3 0,7.95 -2.35,-1.52 -3.83,-5.43 -6.79,-5.11 -2.41,2.22 -6.24,4.38 -5.17,8.26 -0.05,1.27 0.71,3.09 1.95,2.4 0.34,0.89 0.41,1.85 0.72,2.75z m9.29,-40.46c-2.98,-4.77 -6.29,-9.32 -9.41,-14 0.44,-3.11 3.69,-4.89 4.74,-7.82 1.56,-2.45 3.21,-4.85 4.68,-7.37 0,9.73 0,19.46 0,29.19z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap3_tm" class="jvectormap-region"></path>
                                    <path d="m665.18,326.25c-2.97,-1.86 -1.2,-5.67 -2.65,-8.21 0.53,-3.17 -3.51,-2.8 -4.88,-0.83 -1.79,-1.67 -2.48,2.95 -4.91,0.84 -1.43,-2.21 -3.22,-0.68 -4.76,0.52 -0.4,-3.09 -3.28,-5.18 -6.16,-5.75 -2.02,-1.36 -4.24,-5.19 -6.86,-2.37 -2.9,1.87 -4.15,-4.1 -0.51,-3.35 1.06,-1.32 1.8,-1.79 3.42,-0.84 1.53,-0.78 2.76,-2.24 4.06,-3.11 -1.44,-2.18 -5.78,0.43 -7.07,-2.22 0.12,-1.34 3.47,-2.2 0.83,-3.45 -1.26,-2.14 2.16,-2.43 1.45,-4.52 2.51,-0.62 4.01,-2.7 6.42,-3.67 1.55,-0.68 5.82,-1.56 4.27,-3.73 -2.44,0.42 -5.53,1.2 -4.64,-2.51 0.27,-3.12 -0.67,-6.7 -3.34,-8.56 -1.46,-0.11 0.78,-3.59 -1.86,-3.15 -1.5,-2.77 -4.84,0.02 -6.51,0.7 0.1,2.2 -0.93,4.69 -3.45,3.61 -2.4,0.56 -6.57,-0.38 -7.49,3.29 -0,2.58 -2.65,3.31 -2.68,6 -1.27,1.57 -1.07,5.37 -3.43,5.36 -2.12,-0.08 -2.2,2.62 -2.46,3.63 -1.26,0.74 -5.86,0.39 -4.64,-0.82 3.5,0.56 3.47,-4.4 0.06,-4.32 -3.14,-1.51 -5.73,-4.02 -8.93,-5.36 -2.47,-0.32 -4.25,2.11 -6.54,2.07 -0.12,1.28 0.37,2.59 -1.35,1.17 -1.8,-0.93 0.01,-2.79 -2.21,-3.3 0,-2.52 -4.2,-0.23 -5.74,-0.66 -0.96,-2.72 -0.8,-5.85 -0.41,-8.82 0.73,-3.23 -4.34,-1.07 -3.74,-4.61 -1.48,-2.21 -1.17,-5.16 0.32,-7.28 -2.58,-1.5 -1.53,-6.73 1.82,-4.04 2.29,0.54 4.78,3.98 7.13,1.98 1.97,-1.65 2.09,-5.06 -0.41,-5.79 -0.5,-2.08 -4.31,-2.93 -1.9,-4.7 0.1,-1.7 1.79,-4.1 2.05,-4.93 -2.7,-0.86 -1.25,-3.39 0.39,-3.59 0.3,-2.73 3.83,-4.97 2.24,-7.88 -1.16,-1.26 2.12,-0.49 0.87,-2.37 -0.73,-0.82 1.71,-0.82 1.99,-1.86 2.14,-0.45 -1.05,2.08 1.69,2.02 1.48,-0.55 1.41,-1.96 2.93,-1.7 0.29,-1.63 -1.06,-3.26 1.01,-4 0.5,-1.63 0.88,-2.2 1.87,-0.46 3.2,2.4 4.8,-3.1 7.46,-3.43 1.62,1.55 3.73,2.04 5.43,0.37 1.27,1.42 3.01,1.43 4.62,1.61 -0.26,2.56 4.05,4.44 3.68,0.87 -0.11,-2.04 -2.23,-3.06 -3.52,-3.49 2.49,-1.89 5.28,1.44 8.06,-0.13 2.65,1.71 2.89,-3.09 2.88,-4.82 -0.94,-1.46 1.32,-2.87 0.36,-4.29 1.64,0.4 1.75,-1.1 1.34,-1.85 1.08,-2.25 2.79,-1.39 4.44,-0.52 1,-0.8 1.78,-2.46 2.98,-2.01 -1.89,-1.21 -2.16,-3.64 0.61,-3.9 -0.26,-1.23 0.14,-1.29 1.28,-1.45 1.06,-0.94 2.07,2.58 4.01,1.26 1.98,1.74 4.96,-3.12 5.37,-1.36 0.29,1.89 3.37,-0.99 2.39,-2.55 -0.11,-1.94 -1.41,-4.21 1.46,-3.17 2.91,-0.36 4.26,-3.79 5.34,-6.17 1.47,-2.93 -2.47,-4.1 -2.09,-6.64 -1.36,-2.25 -4.48,-0.11 -5.91,0.2 -2.22,-2.09 -4.58,3.81 -4.91,0.16 -1.29,-0.68 -2.71,2.23 -3.65,0.73 1.29,-1.47 1.19,-4.25 2.39,-6.18 1.51,-3.13 -2.02,-3.28 -3.58,-4.22 -3.1,0.97 0.81,-3.99 -1.61,-4.03 1.01,-2.42 4.84,-2.6 5.47,-5.2 -0.01,-2.9 -4.66,-1.68 -5.74,0.02 -1.13,1.71 -4.5,-0.24 -1.75,-0.92 2.16,-2.49 -2.77,-3.66 -2.05,-1.2 -2.33,3.55 -0.85,-4.14 -3.83,-1.64 1.26,-0.48 -0.31,-3.76 1.92,-2.68 1.3,1.04 0.21,-2.26 2.14,-1.3 2.74,-0.21 -1.15,-2.68 1.49,-3.26 1.26,2.1 3.9,-0.29 1.53,-1.19 0.54,-2.35 2.7,-4.74 3.28,-7.51 1.48,-0.31 3.12,-1.58 1.37,-2.69 1.12,-2.77 3.18,-4.87 5.44,-6.15 -0.1,-1.8 -3.04,-1.6 -1.06,-3.51 0.73,-2.38 2.55,-3.81 3.48,-6.49 2.08,-2.53 2.36,-5.49 3.47,-8.34 0.29,-1.69 3.72,-3.96 0.35,-4.97 -1.01,-0.43 2.31,-2.04 0.29,-3.41 -1.75,-1.68 3.22,-0.78 0.65,-2.37 -1.73,-0.49 3.06,-0.82 1.8,-2.5 2.25,-1.54 6.79,-0.26 5.35,-4.64 -0.2,-2.91 3.08,-0.72 4.32,0.28 1.69,1.75 4.12,-0.2 4.78,2.52 1.5,0.9 1.01,3.62 3.74,3.35 2.67,0.01 -0.81,-3.38 2.11,-2.14 1.93,-0.51 -0.97,-4.41 1.41,-3.27 0,52.65 0,105.3 0,157.95 -2.28,4.16 -5.07,8.03 -7.49,12.09 -2.11,1.94 -4.29,5.26 -1.49,7.58 3.01,4.53 6.37,8.91 8.98,13.65 0.02,6.62 -0.04,13.29 0.04,19.87 -3.05,0.34 -6.58,0.54 -8.5,3.49 -2.48,2.8 -4.81,5.91 -5.35,9.73 -0.09,0.46 -0.18,0.92 -0.25,1.38z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6d993" original="#b6d993"
                                          id="jqvmap3_kz" class="jvectormap-region"></path>
                                    <path d="m382.62,208.07c0.7,-3.07 -2.78,1.32 -3.86,-1.32 0.05,-0.96 1.56,-3.75 -0.71,-2.21 -1.13,1.69 -1.33,-1.45 -2.92,-0.68 -0.94,0.89 -2.97,-0.9 -3.55,-0.42 -0.14,-2.36 -1.97,-0.15 -2.25,-0.03 -0.63,-1.67 -0.91,-3.6 -2.08,-5.17 1.86,-0.74 1.72,-4.06 0.26,-5.25 -0.34,-1.47 3.17,-0.38 1.07,-2.02 -1.2,-2.15 -2.78,-4.06 -3.52,-6.25 0.62,-2.08 -0.63,-3.97 -1.49,-4.42 0.49,-1.2 -0.5,-2.29 -0.95,-2.29 0.13,-1.71 3.82,-4.59 2.52,-5.52 -3.07,-0.18 0.32,-3.17 1.17,-0.45 1.02,-1.23 3.05,-2.66 2.12,-4.84 0.01,-1.7 0.15,-2.94 1.36,-1.21 0.12,-2.42 1.26,-4.91 3.64,-5.85 -0.72,-2.45 1.54,-4.8 2.24,-7.01 -0.27,-2.84 0.9,-5.24 3.71,-6.24 1.6,-1.13 1.77,-3.36 -0.51,-2.84 -0.44,-2.27 -0.12,-5.32 -2.74,-6.02 -2.3,1.99 -2.43,-3.68 -4.97,-1.88 -1.75,-2.03 -4.37,-4.52 -3.48,-7.48 1.52,-3.03 -0.83,-5.16 -2.34,-7.18 -0.2,-1.46 0.87,-4.46 -1.6,-3.74 -0.01,-2.39 -0.15,-4.83 -1.27,-7.01 -2.48,-1.84 -4.57,-4.14 -8.05,-4.18 -1.93,-1.7 -6.43,-2.88 -5.46,-6.12 -0.41,-2.16 1.14,-3.53 2.73,-1.48 2.59,1.31 1.85,6.17 5.39,5.44 2.27,0.35 4.34,-0.45 4.98,-2.51 2.4,-0.26 6.27,3.96 5.78,-0.87 -0.39,-2.02 3.32,-1.43 1.97,-3.98 -1.32,-3.02 -2.11,-7.03 -0.35,-9.99 -0.31,-2.74 4.21,-0.11 4.22,-3.35 1.47,-1.91 3.36,2.08 5.49,1.78 2.95,0.9 3.14,3.84 1.7,6.03 1.41,1.64 0.21,2.38 -0.46,3.84 1.14,0.8 2.75,1.02 1.72,2.87 -0.47,3.13 2.02,6.77 5.45,6.28 1.67,2.35 6.13,3.59 3.92,7.14 -0.75,2.27 -1.97,4.85 -0.96,7.21 3.59,3.29 6.5,7.25 9.05,11.36 0.06,1.49 -2.83,0.38 -0.84,2.06 -0.22,2.17 0.21,4.77 1.29,6.07 -1.26,3.74 5.08,3.34 3.58,6.82 0.48,3.1 6.13,1.5 4.41,5.52 -0.25,1.99 -2.95,4.48 0.53,5.03 2.93,1.69 6.43,2.67 8.87,5.07 1.06,2.48 -0.3,5.24 -0.57,7.75 -2.26,6.49 -4.21,13.14 -7.27,19.3 -1.55,2.69 -3.59,5.26 -4.3,8.32 -1.76,0.21 -3.5,-1.24 -4.38,1.19 1.52,0.77 -3.01,1.75 -1.49,-0.16 -0.76,-2.31 -1.99,0.16 -1.56,1.47 -1.82,-2.09 -4.5,1.44 -1.45,2.01 0.62,2.53 -3.67,-2.15 -3.14,-0.28 0.89,2.06 -2.52,3.25 -2.85,3.52 -2.72,0.33 -4.14,2.39 -6.64,3.79l-0.57,0.27 -0.58,0.1 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d993" original="#b5d993"
                                          id="jqvmap3_fi" class="jvectormap-region"></path>
                                    <path d="m302.45,372.15c0.39,-0.91 1.99,-2.77 0.16,-1.49 -1.57,0.93 -2.11,-2.91 -4.19,-2.08 -2.04,1.85 -3.44,-2.27 -6.01,-1.15 -2.15,0.46 -2.02,-2.87 -4.5,-1.23 -1.72,0.52 0.38,3.76 -1.44,1.73 -1.84,0.2 -4.84,0.84 -5.69,-0.07 -0.64,-1 1.16,-4.13 0.65,-5.99 1.9,-2.36 0.91,-6.25 3.86,-7.87 2.56,-1.63 0.59,-4.12 -1.86,-3.67 -2.56,0.2 -2.84,-3.15 -5.48,-1.32 -1.23,0.08 -2.11,-2.54 -3.28,-1.12 -0.17,-2.33 -4.09,-3.23 -1.38,-5.35 1.81,-3.01 -5.32,-3.18 -1.88,-6.63 1.67,-1.33 2.21,-2.89 0.22,-4.22 1.95,-2 -1.2,-0.75 -1.34,-2.77 1.01,-1.22 0.18,-2.51 -0.16,-3.21 1.78,-1.86 2.88,-5.05 1.22,-7.64 -2.19,-2.06 0.71,-2.52 2.29,-1.67 2.39,0.34 3.33,-2.08 3.64,-3.33 2.38,-1.19 2.15,-5.11 -0.59,-5.64 -0.03,-1.55 3.42,0.08 2.83,-2.66 0.31,-2.54 1.52,-4.9 2.38,-7.37 -0.34,-0.18 -3.53,0.96 -2.22,-1.41 0.9,-2.9 4.25,-1.28 6.2,-2.15 0.16,2.03 2.57,6.54 4.4,3.34 0.14,-1.85 -1,-6.59 2.18,-4.76 1.27,0.28 4.88,-0.75 2.09,-1.66 -3.15,0.44 1.18,-4.81 -1.98,-5.31 4.2,-1.72 -2.92,-4.5 -0.43,-6.3 2.37,1.37 6.56,0.38 7.64,2.55 -0.45,0.53 1.55,0.68 -0.04,1.71 -1.46,1.22 0.47,2.21 1.51,1.23 -1.09,2.31 1.04,2.07 1.81,0.68 1.67,1.18 3.81,1.56 5.14,0.49 0.21,1.77 -4.56,3.93 -2.04,5 1.38,0.2 3.65,-1.17 3.27,1.31 2.66,-0.01 2.46,-4.21 4.91,-4.12 1.43,1.57 3,-1.39 3.56,-2.49 0.61,-2.1 3.54,-0.7 4.16,-0.17 0.88,1.8 2.57,3.83 4.93,3.32 -0.95,4 4.51,3.57 4.6,6.93 3.14,3.28 -3.49,6.24 0.16,9.19 2.04,0.76 2.91,2.01 2.23,4.17 0.93,1.99 2.9,4.81 0.48,6.79 1.68,1.23 1.03,4.11 3.18,4.83 0.68,1.92 0.82,5.65 -0.66,6.5 -0.87,-1.78 -4.46,-3.53 -3.95,-0.41 1.16,0.88 -2.8,1.08 -3.3,2.22 -2.5,0.18 -3.71,2.69 -5.8,3.41 -0.73,-0.12 -0.57,1.65 -2.06,0.72 -2.78,-0.99 -2.28,4.11 -4.17,1.96 -3.51,0.44 1.56,4.5 2.19,5.46 -2.26,2.79 1.42,6 3.88,7.15 1.53,1.88 3.04,3.44 5.43,4.44 2.44,1.22 2.24,4.86 -1.02,3.8 -0.57,1.52 -0.37,3.53 -2.79,3.73 -3.29,0.46 -2.9,3.65 -1.01,5.5 0.76,1.93 -3,3.3 -3.36,1.75 -0.45,-0 -3.6,-1.29 -2.93,0.98 -3.48,-0.65 -5.56,1.87 -8.47,2.95 -1.59,-0.45 -2.06,-3.03 -4.27,-1.95 -2.85,-1.05 -0.37,3.13 -2.89,3.37z m-6.7,-79.27c-0.21,2.06 4.44,6.44 3.78,2.2 -1.59,0.14 -2.26,-2.95 -3.66,-2.25L295.75,292.88z m29,76.43c-1.59,-1.17 -0.3,-3.24 0.69,-1.13 -0.04,0.43 -0.23,0.99 -0.69,1.13z m-0.01,-83.07c-2.42,-0.16 -2.07,-4.22 0.32,-2.83 -1.17,-1.29 -0.5,-0.74 0.89,-0.58 -1.82,1.06 2.32,2.92 -0.86,3.34l-0.35,0.07 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#adcc99" original="#adcc99"
                                          id="jqvmap3_de" class="jvectormap-region"></path>
                                    <path d="m323.06,272.38c-2.85,0.68 -1.5,-2.92 -0.88,-3.47 -1.34,-1.73 -2.37,-3.77 -4.04,-5.01 0.79,-1.22 -1.53,-2.8 1.01,-1.48 2.77,0.18 -2.19,-2.84 0.98,-2.65 2.38,-2.15 -2.21,-3.59 -2.38,-5.5 -2.18,-0.93 -1.38,-4.24 -3.57,-5.03 -0.5,-2.35 -1.05,-4.69 -2.37,-6.57 0.36,-2.06 3.34,-6.36 -0.08,-6.96 -1.38,2.23 -3.39,1.39 -2.89,-1.18 0.66,-1.66 -0.9,-5.32 -0.3,-5.55 1.22,1.95 2.5,1.63 3.29,-0.5 0.91,-2.52 -0.9,-5.03 -0.38,-7.57 2.08,-1.14 -0.02,-3.96 3.05,-4 2.39,-1.51 1.37,-4.54 1.71,-6.85 0.8,-2.58 -4.53,-6.31 0,-6.91 1.04,-0.81 1.22,-3.31 1.37,-4.79 -1.12,-2.38 -6.01,-2.81 -4.1,-6.25 1.84,-3.74 -1.45,-6.92 -1.02,-10.47 0.52,-2.44 0.53,-5.73 -0.14,-7.32 0.64,-2.96 1.19,-6.43 4.34,-7.91 2.35,-0.49 6.23,1.31 6.51,-2.71 0.96,-3.43 -4.73,-4.28 -1.85,-7.71 0.9,-2.93 3.32,-5.66 2.42,-8.87 0.15,-1.92 0.67,-3.87 -0.11,-5.73 -1.01,-2.32 3.73,-0.74 3.99,-3.33 -0.13,-2.25 -0.54,-4.21 1.52,-5.81 2.69,-2.56 2.7,-6.48 0.46,-8.94 2.93,-1.39 1.66,-4.89 3.52,-7.09 1.35,-0.88 5.1,1.96 4.84,-1.65 -0.51,-1.95 -1.78,-6.23 1.75,-4.92 2.24,0.45 5.5,2.66 7.12,-0.07 1.29,-1.53 -2.75,-1.44 -0.66,-3.53 0.95,-1.42 0.76,-3.57 -0.83,-4.28 3.02,-0.52 2.64,2.5 5.35,3.5 2.17,2.8 6.24,2.01 8.45,4.17 1.81,1.26 3.78,2.76 3.22,5.22 1.03,1.27 -0.68,4.42 1.98,4.24 -0.85,2.83 1.11,4.63 2.62,6.51 0.04,2.86 -1.49,6.25 1.05,8.57 1.6,1.29 3.31,4.27 -0.1,3.45 -1.76,0.14 -2.91,-0.92 -2.17,1.42 -0.95,1.6 -5.22,-2.83 -4.14,0.58 0.84,1.65 -2.05,2.45 -1.57,1.13 -2.06,-0.65 -0.53,1.54 0.66,1.49 -0.6,0.2 -1.52,0.57 -0.3,1.82 -1.49,0.26 -4.7,1.58 -1.68,2.64 2.32,2.25 -3.2,4.64 -1.02,7.19 1.54,0.9 4.4,2.82 1.64,4.33 -1.68,2.21 -0.66,5.89 -3.12,7.17 -0.94,1.59 -3.16,2.96 -4.81,3.45 -0.21,1.34 -1.22,2.8 -1.35,4.54 -1.77,-1.72 -2.61,0.56 -2.76,1.85 -1.12,0.81 -2.56,2.13 0.01,2.01 -0.44,1.31 -4.33,0.73 -2.47,3.43 -0.06,0.73 -0.49,2.94 -1.88,1.95 -2.76,-0.24 -2.07,3.37 0.06,3.69 -0.77,1.95 -1.46,4.89 0.24,6.81 -3.74,-1.85 -2.36,2.41 -0.94,3.91 0.18,1.27 -3.07,0.5 -0.73,1.44 0.84,1.85 1.12,4.66 1.43,6.67 -0.32,2.79 5.02,-0.22 4.86,2.53 0.7,1.96 4.04,1.71 4.48,1.82 -3.19,-0.43 -0.28,3.53 1.17,3.32 1.13,1.08 3.55,2.93 0.69,3.17 -0.96,1.32 -2.08,3.54 -3.42,3.71 1.54,1.27 -2.79,1.25 -1.63,-0.68 0.49,-2.21 -4.13,-4.8 -3.64,-1.69 1.43,0.51 0.2,2.21 2.13,2.69 -1.79,0.21 -3.94,-2.79 -5.52,-0.41 -0.59,-1.15 -2.36,-1.3 -1.99,0.35 -2.53,-0.76 -3.68,2.49 -1.03,1.96 1.95,-0.49 4.14,0.17 6.05,0.67 -0.71,2.97 4.28,-1.28 2.88,1.93 -0.14,2.13 -0.95,4.88 -3.12,4.77 0.18,1.44 -0.14,1.56 -2.15,1.24 -1.48,-0.93 -5.69,1.16 -2.24,1.59 0.93,-0.93 4.88,0.08 2.51,0.95 -1.3,-0.74 -2.65,-1.15 -1.6,0.7 1.1,0.49 3.58,1.85 1.37,2.42 -0.48,1.93 2.49,4.34 -0.83,3.78 -1.22,1.55 3.46,2.55 0.79,3.59 -0.59,1.57 1.8,1.83 -0.1,3.07 -0.36,1.71 1.22,3.68 -0.24,4.3 0.8,1.29 0.72,4.62 -0.49,4.51 -0.92,1.99 -0.01,8.09 -3.9,5.74 -0.75,-0.04 -1.2,1.04 -1.28,-0.03 -1.81,1.13 -4.91,0.3 -5.24,2.54 -3.47,0.86 -2.77,5.15 -1.48,7.22 -1.25,2.12 -3.78,-0.71 -5.21,1.44 -0.58,0.2 -1.19,0.28 -1.8,0.28z m21.76,-13.69c-0.6,-1.64 -0.03,-5.51 0.58,-5.62 -0.47,1.84 -0.07,3.79 -0.58,5.62z m11.16,-10.28c-1.47,-2.04 -0.57,-3.97 -1.15,-6.17 0.13,-1.54 3.5,-5.82 3.93,-3.32 -1.59,1.67 -1.23,4.3 -0.42,5.29 -0.56,1.58 -2.33,2.58 -2.36,4.21z m-6.04,-22.62c-0.58,-0.9 -1.01,-2.64 0.37,-3.19 0.51,-2.57 3.62,1.5 0.73,1.06 -0.71,0.44 -0.93,1.57 -1.1,2.14z m3.41,-4.74c-1.71,-0.56 1.15,-0.98 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d894" original="#b5d894"
                                          id="jqvmap3_se" class="jvectormap-region"></path>
                                    <path d="m283.92,239.69c-2.05,0.82 -1.04,-2.38 -3.04,-0.45 -2.25,0.63 -2.45,-1.19 -0.48,-1.71 1.16,-1.98 -1.94,-1.69 -2.54,-0.89 -1.88,-1.69 -4.73,-3.13 -5.46,-5.54 0.16,-1.17 0.04,-2.84 1.26,-1.53 2.45,-0.31 0.5,-3.28 2.63,-3.15 -0.92,-1.74 3.6,-1.24 2.16,-3.19 -1.49,-0.01 -3.77,0.75 -1.5,-1.08 1.07,-1.87 -4.03,-2.48 -3.95,0.31 -0.43,1.99 -1.31,-1.27 0.03,-1.59 -0.59,-1.71 3.37,0.46 2.3,-1.73 2.11,-0.09 3.7,-3.31 0.62,-1.92 -2.12,1.06 -0.9,-1.62 0.69,-0.69 -1.77,-1.8 3.78,-2.21 0.57,-3.6 -0.56,-4.05 -3.61,3.53 -2.9,-0.4 -0.09,-1.07 2.45,-2.14 0.56,-2.38 1.23,-1.75 0.14,-1.45 -1.12,-1.67 -0.48,-2.03 3.39,-0.54 1.29,-2.62 -1.57,-0.11 -2.3,1.01 -2.92,1.83 0.23,-1.47 -0.96,-1.1 0.71,-1.97 1.17,-0.81 3,-0.92 0.68,-1.9 -1.68,1.41 -3.48,-0.55 -1.63,-1.27 2.35,2.15 4.25,-2.5 6.35,0.43 1.83,1.86 1.2,0.18 2.05,-1.15 2.54,-0.3 -0.18,4.44 3.17,3.6 2.08,-1.21 -0.36,-4.05 -1.72,-4.82 -1.87,-1.19 -2.86,1.17 -4.77,-0.24 -1.71,-0.32 -5.74,2.24 -5.21,-1.12 1.24,-0.84 -1.48,-1.91 1.02,-1.63 0.93,-0.21 -1.41,2 0.86,1.55 1.15,0.42 4.11,-2.74 2.32,-2.56 -1.17,0.24 -3.58,0.07 -2.04,-0.78 0.01,-1.15 -2.86,-0.72 -1.37,-2.6 1.92,-1.21 1.67,-2.06 2.44,-3.76 1.13,0.7 1.55,1.95 2.59,0.89 1.71,1.83 3.67,-1.21 0.78,-1.26 -1.72,-1.7 2.02,-2.98 1.47,-0.81 -0.08,1.94 2.1,2.28 1.49,0.15 -1.54,-0.73 -0.39,-3.26 1.26,-2.04 -0.9,2.54 1.99,2.46 3.2,1.29 -0.57,-1.07 -3.07,-0.84 -2.76,-2.61 -1.93,-0.78 -0.88,-1.18 0.63,-1.75 -0.31,2.53 1.54,0.84 1.46,0.89 0.76,2.66 4.97,0.16 2.35,-0.64 -1.68,1.13 0.97,-2.47 -1.62,-1.35 -1.33,0.1 -1.92,0.19 -0.62,-0.55 0.77,-1.45 -3.3,-3.11 -0.25,-2.56 1.36,2.34 4.5,0.23 4.77,-0.42 0.76,1.21 1.99,4.78 3.9,2.5 -0.19,-1.38 -1.61,-1.13 -0.15,-1.91 -0.52,-0.88 -3.96,-0.82 -1.31,-0.98 2.56,1.07 3.94,-2.68 1.6,-3.22 -2.38,3 -0.29,-2.57 1.23,-0.79 -1.13,2.54 3.47,1.05 2.52,-0.37 0.79,-1.1 1.41,-2.4 1.63,-0.68 1.42,0.16 -1.15,3.34 1.22,2.27 1.23,1.9 3.05,-0.32 1.25,-1.45 2.02,0.81 5.84,0.23 4.08,-2.68 2.55,-0.11 3.44,-2.71 1.89,-3.48 2.7,-0.44 1.04,-4.25 -0.61,-2.47 -0.94,0.99 -4.98,3.53 -3.32,4.59 1.36,-0.14 -3.55,4.36 -3.84,1.11 1.8,-0.4 1.59,-2.97 -0.14,-1.47 -1.54,1.59 -1.58,-0.15 0.05,-0.55 1.29,-0.12 3.11,-2.23 0.74,-1.96 0.49,-1.84 0.69,-1.57 2.55,-2.66 -0.01,-1.8 3.87,-1.75 1.44,-3.46 1.6,-3.11 2.62,3.25 4.94,0.36 -0.07,-0.91 1.83,-2.92 -0.44,-2.32 -1.97,0.37 0.51,-3.35 0.91,-3.77 2.46,-0.4 5.23,-2.14 6.04,-4.52 -0.69,-1.41 -1.97,0.46 -0.84,-1.25 0.83,-2.9 -4.58,-0.06 -1.84,-2.23 2.88,-0.42 -1.2,-4.08 2.2,-4.17 1.93,2.26 1.6,-1.88 -0.02,-2.41 1.79,-0.55 2.5,-1.55 4.25,-0.42 0.51,-2.76 -3.45,-2.33 -4.43,-3.58 -0.26,-3.01 2.59,-3.12 4.58,-3.67 0.29,-0.78 -0.81,-3.13 0.47,-2.48 2.46,0.65 2.45,-2.36 2.11,-3.23 1.27,-0.62 3.06,1.08 2.81,-1.49 0.06,-2.75 -4.88,2.23 -2.7,-0.53 -0.33,-1.84 3.17,-2.65 3.79,-1 0.44,2.38 2.69,0.96 0.74,-0.53 -0.37,-0.19 2.89,-3.12 0.16,-2.12 -1.52,1.62 -2.69,-1.67 -0.67,-0.49 2.18,0.6 1.78,-2.26 0.1,-2.63 1.64,-0.99 1.76,-1.25 3.09,0.31 2.65,0.05 -0.04,3.53 -1.13,3.83 -0.13,2.43 3.49,4.78 1.03,6.94 -1.52,2.38 -4.26,5.02 -2.96,8.1 -1.03,2.23 -5.62,0.34 -3.97,3.87 1.08,2.24 -0.41,4.62 0.29,6.91 -0.21,2.4 -1.5,4.65 -2.48,6.84 -1.89,2.33 -0.64,4.78 1.42,6.24 1.36,2.71 -1.06,4.75 -3.56,3.4 -3.47,0.13 -6.05,3.54 -6.55,6.75 -0.09,2.61 -2.39,4.76 -0.87,7.58 1.7,0.33 -0.26,3.51 0.65,5.09 0.93,2.11 2.11,4.27 1.04,6.66 -1.85,3.6 1.33,5.61 3.87,7.28 0.34,1.26 -0.49,2.52 -0.69,3.78 -4.37,0.5 -1.64,4.45 -0.68,6.73 -0.19,2.39 0.87,5.69 -1.37,7.29 -2.33,-0.08 -2.37,2.05 -2.44,3.42 -2.81,2.64 1.45,6.5 -0.89,9.33 -0.63,-0.51 -0.86,-4.28 -3.41,-3.07 -1.98,0.66 -1.1,-2.02 -2.18,-2.85 0.06,-1.66 0.25,-4.8 -1.34,-6.05 -1.51,0.96 0.6,3.37 -1.47,1.82 -1.6,1.08 1.29,3.05 0.43,4.75 1.82,1.57 -1.36,1.57 -0.61,3.28 -0.57,0.33 -1.78,3.28 -2.33,0.68 -1.69,-2.25 -3.03,0.06 -1.93,1.1 -2.37,0.2 -1.22,2.58 -3.27,2.72 0.26,1.74 0.63,2.15 -0.66,0.4 -0.55,-0.29 -0.31,3.24 -1.72,3.89 -1.13,1.13 -2.53,1.14 -2.96,2.81 -1.25,-1.4 -1.53,-2.14 -2.1,0.08 -0.58,1.07 -1.97,0.9 -2.97,1.19z m1.79,-42.62c-2.02,0.59 -1.81,3.69 -1.92,5.35 2.29,1.58 5.16,-1.56 2.82,-2.47 -2.51,1.62 -0.41,-2.26 1.2,-2.22 -0.69,-0.24 -1.35,-0.63 -2.1,-0.66z m-8.26,-3.48c1.26,1.05 1.96,-0.59 3.75,0.18 2.86,-0.7 0.32,-3.31 -1.23,-1.63 -0.54,1.11 -4.66,-2.16 -3.53,0.83 -0.64,0.74 0.98,1.54 1.01,0.63z m-1.56,-1.31c1.64,-1.54 -2.29,-0.9 0,0l0,0z m-3.39,20.54c-1.15,-1.48 -0.79,-2.31 1.27,-2.09 -0.5,0.65 -0.76,1.45 -1.27,2.09z m20.58,-43.12c1.89,-0.99 1.05,0.09 0,0z m18.74,-19.12c-0.11,-1.35 1.21,-2.72 0.71,-0.65l-0.24,0.29 -0.47,0.36 0,0z m7.46,-19.18c-1.61,-0.55 0.1,-1.14 0,0l0,0z m3.95,-10.61c-1.42,-0.85 2.16,-3.22 0.98,-0.56 -0.23,0.31 -0.59,0.56 -0.98,0.56z m8.03,-3.21c-0.35,-1.4 -4.22,-5.53 -0.69,-3.55 1.98,-0.66 -2.87,-2.41 0.24,-2.21 2.34,-1.07 1.29,3.96 3.81,2.24 0.12,-1.58 -1.95,-2.83 0.76,-2.09 1.98,-2.01 2.51,5.82 -0.36,3.01 -2.2,-1.1 -3.01,1.06 -3.76,2.6z m-5.57,-1.57c-2.14,-0.36 2.05,-0.11 0,0z m-7.93,-1.09c-0.6,-2.04 2.47,-0.64 0,0z m7.12,-4.13c0.59,-2.37 4.58,-1.01 4.01,-4.46 0.66,-1.69 0.95,3.05 2.77,1.99 1.53,1.25 -2.5,3.06 -1.7,0.6 -1.05,-1.01 -2.27,1.66 -3.77,0.7 -0.56,0.22 -0.96,0.7 -1.3,1.17z m7.58,-0.78c-1.19,-2.28 3.86,-0.43 2.34,-2.88 -3.7,-0.04 1.43,-1.56 0.6,-2.56 -2.52,-1.2 0.41,-2.37 1.15,-2.81 0.41,-3.22 -2.85,-1.84 -4.06,-0.47 -1.59,-2.04 2.26,-2.36 2.32,-4.57 0.14,1.33 0.46,2.85 1.65,2.42 0.8,1.52 3.32,1.84 3.24,-0.37 1.68,1.68 2.77,1.67 2.31,-0.48 0.79,-1.17 0.35,-2.79 1.61,-3.02 -0.4,-0.66 -1.42,-3.92 0.2,-3.31 0.95,2.39 -0.14,5.28 -0.89,7.26 2.94,1.88 1.55,-3.57 4.12,-3.05 0.22,-1.76 -3.3,-2.79 -1.17,-4.59 1.11,2.64 2.9,-1.39 2.9,-1.08 0.95,0.44 4.33,3.19 2.86,0.58 0.52,-1.54 -0.4,-5.86 -2.92,-3.36 -3.05,-0.22 1.04,-4.05 2.23,-1.43 1.8,-0.47 3.36,-0.55 3.65,1.78 1.6,2.82 3.68,-1.17 2.1,-1.52 0.07,-0.51 -0.69,-2.47 -0.41,-3.71 -0.86,-0.45 -2.21,1.67 -1.86,-0.59 0.28,-1.23 2.77,-3.11 1.94,-0.75 0.94,1.47 4.41,-0.15 2,-1.03 0.6,-1.49 3.48,0.04 1.97,-2.16 -0.79,-0.71 -2.04,-3.95 0.25,-3.13 1.93,-0.42 3.84,0.45 2.02,2.21 -1.75,1.98 -0.56,3.61 -0.42,5.65 -2.28,2.68 3.1,3.87 2.24,0.45 -0.18,-2.74 0.93,-5.32 1.76,-8.05 1.89,-3.05 -1.06,3.6 0.33,2.81 1.3,-1.62 0.64,3.35 2.9,1.4 2.12,-1.22 -1.68,-4.46 1.77,-4.91 0.72,-1.47 -2.34,-1.18 -0.57,-2.18 -0.51,-2.17 4.79,-1.62 2.39,1.11 -1.65,1.09 -1.95,4.14 -0.56,3.08 -0.4,2.24 2.84,0.85 3.62,0.4 -0.89,-1.13 -1.79,-4.79 0.32,-4.87 0.09,2.52 4.6,3.29 3.84,0.25 1.3,0.25 1.81,0.78 0.68,1.44 0.12,2.4 2.78,-0.68 3.9,1.46 2.08,1.26 -1.72,0.74 -1.03,2.68 -0.51,3.31 -7.08,0.08 -6.25,3.51 1.53,-0.19 4.57,0.06 4.67,1.27 -0.73,2.54 2.28,1.63 2.62,2.01 1.41,2.24 -3.5,3.67 -1.9,6.17 0.12,3.04 -1.51,0.49 -0.35,-1.03 0.73,-2.35 -0.61,-5.22 -3.22,-5.51 -2.52,-0.23 -4.95,-4.8 -6.83,-0.86 -0.98,2.59 -3.07,-0.98 -3.73,2.03 -1.82,2.85 -1.43,6.39 -0.81,9.47 1.12,1.85 1.17,3.38 -0.82,4.1 -0.7,1.31 0.29,4.41 -1.67,2.5 -2.14,-1.69 -5.02,-0.86 -5.85,1.4 -2.54,0.85 -4.72,0.04 -5.34,-2.66 -0.99,-2.14 -5.91,-6.2 -6.14,-1.61 0.57,2.13 -0.39,0.96 -1.13,1.23 -0.7,0.99 -4.96,0.92 -2.14,2.3 2.85,1.94 -1.88,4.5 0.34,5.92 1.59,3.24 -4.12,0.39 -5.68,0.21 -2.06,-1.04 -3.15,2.55 -4.42,0.38 -1.01,-0.36 -2.16,1.19 -2.67,1.07z m-9.01,-1c0.11,-2.56 2.91,0.13 0,0z m-1.13,-1.28c-0.8,-1.29 3.49,-1.49 0.69,-0.52l-0.34,0.34 -0.36,0.18 0,0z m4.3,-0.48c-1.71,-0.47 -0.9,-2.93 0.17,-2.2 -0,0.74 -0.11,1.47 -0.17,2.2z m4.79,-4.64c0.18,-0.78 1.29,-1.07 0,0z m7.64,-3.83c-2.24,0.29 -1.11,-3.47 -0.22,-0.75 0.06,0.35 1.74,0.98 0.22,0.75z m2.2,-0.62c-2.38,-0.91 -2.84,-5.4 0.1,-4.68 0.37,1.54 -0.1,3.12 -0.1,4.68z m-1.72,-6.1c-4,-0.97 3.45,-2.52 1.03,-0.52 -0.42,0.05 -0.59,0.56 -1.03,0.52z m5.27,-4.48c-0.27,-0.28 0.7,-0.67 0,0z m42.25,-2.91c-1.73,0.39 -2.88,-3.16 -0.45,-1.74 1.34,-0.78 2.3,1.96 0.45,1.74z m-35.9,-2.93c0.17,-2 2.33,-0.17 0,0z m1.12,-1.12c1.6,0.69 0.37,-2.16 2.16,-2.14 -0.43,0.5 -1.9,3.93 -2.16,2.14z m20.87,-4.79c0.68,-1.68 0.54,-0.43 0,0z m-9.67,-2.21c-2.58,-0.52 -0.4,-3.09 0.65,-0.8 -0.07,0.3 -0.24,0.8 -0.65,0.8z M319.32,12.08c-0.3,-1.14 -1.45,-2.77 -2.39,-2.03 -1.57,-1.66 3.97,-2.79 -0.11,-4.02 -1.19,0.78 -1.7,1.41 -2.54,-0.32 -1.8,0.29 -3.52,-4 -2,-4.15 0.28,2.4 2.41,-1.85 3.57,0.39 1.62,1.46 1.99,-0.61 1.81,-1.03 1.1,0 2.2,0 3.3,0 -1.65,1.5 0.79,4.98 -1.45,5.97 1.81,0.96 -0.87,3.73 0.84,4.72 -0.27,0.27 -0.64,0.46 -1.03,0.47z M334.56,1.41c-0.71,-0.78 1.26,-0.59 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d894" original="#b5d894"
                                          id="jqvmap3_no" class="jvectormap-region"></path>
                                    <path d="m458.88,376.43c-1.65,0.13 -4.78,-1.76 -1.5,-2.12 1.11,-0.94 -0.88,-2.9 1.02,-4.06 0.62,-1.77 2.75,-4.95 1.17,-6.55 -2.35,-0.6 0.77,-4.92 0.58,-1.37 1.22,0.09 1.33,-0.46 2.29,-1.4 1.42,1.03 2.11,1.68 2.01,-0.49 0.8,-0.31 0.98,2.31 1.91,0.48 2.09,-0.77 2.07,-2.38 0.02,-2.62 0.48,-3.05 -2.01,-4.08 -4.34,-4.76 -1.03,-1.35 0.14,-4.1 -2.32,-4.58 -0.19,2.48 -3.85,-0.68 -2.94,-2.62 0.58,-1.57 -1.58,-5.77 -2.62,-3.02 -1.32,-0.9 -3.45,-3.78 -4.76,-1.05 -0.61,-1.26 -0.31,-1.31 -2.39,-0.85 -1.59,-0.19 -3.7,-2.91 -5.96,-1.05 -1.9,1.41 -4.52,1.99 -6.34,2.49 -0.3,1.21 -2.98,2.87 -3.26,4.06 0.69,2.88 -3.92,2.94 -5.88,3.36 -1.91,1.06 -2.85,5.5 -5.12,2.22 -2.55,-1.4 -4.85,1.16 -7.45,0.17 -2.78,0.68 -6.22,-1.81 -7.42,1.27 -1.7,-1.79 -4.36,-1.99 -6.08,-3.8 -1.69,-1.99 1.67,-4.76 1.1,-7.32 0.71,-2.08 3.89,1.72 3.03,-0.71 -0.43,-1.86 -2.14,-2.21 -2.09,-4.41 -1.6,-2.52 1.02,-5.01 1.85,-7.4 1.48,-2.09 2.06,-5.46 4.76,-6.09 3,-1.14 0.85,-4.79 0.14,-5.51 2.5,-2.1 -3.76,-3.23 -3.93,-5.84 -0.3,-1.41 -1.88,-4.75 0.96,-3.25 2.78,-0.65 2.08,-4.77 5.31,-4.83 2.44,-2.13 5.65,-1.09 8.41,-2.29 2.86,0.12 5.82,0.8 8.71,-0.13 1.44,0.02 2.96,3.43 4.46,0.67 0.48,-0.61 1.02,3.11 2.27,0.92 -0.68,-2.01 1.68,-0.28 2.33,-1.83 1.72,1.64 3.14,-2.06 4.36,1.19 0.98,-0.83 1.53,-5.36 3.12,-2.13 0.91,1.83 2.9,1.59 3.18,-0.37 1.11,-0.89 4.84,0.77 2.92,-1.35 2.22,-0.55 3.94,4.29 5.74,0.82 -0.53,-2.27 -3.24,-4.21 -1.65,-7.03 0.3,-2.91 3.55,-3.36 5.73,-4.62 2.8,0.98 5.55,-1.1 4.6,-3.99 2.15,-0.59 4.74,-0.01 5.62,-2.79 1.28,-1.72 2.08,2.03 2.83,-0.54 3.15,-1.7 3.09,3.74 6.17,3.78 2.69,0.81 -2.77,1.83 -0.06,3.34 0.97,1.1 0.27,1.92 1.66,2.64 0.13,1.93 0.76,2.76 1.8,0.93 1.75,0.21 3.63,-0.42 4.86,-1.04 1.22,1.6 2.86,1.33 3.58,3.44 0.66,2.12 2.97,6.38 5.86,3.86 0.95,-2.66 2.98,0.62 4.61,-0.26 2.96,0.38 3.76,-3.58 5.99,-4.66 2.15,1.36 3.87,3.07 6.32,3.78 2.39,1.73 1.46,-2.06 1.83,-2.22 2.04,0.83 3.63,-0.35 5.65,0.78 1.64,-1.06 3.29,-0.67 5.4,-0.98 -0.34,2.96 3.78,0.35 3.93,-0.21 -1.54,1.79 2.89,1.91 1.36,4.34 -0.91,1.71 -3.3,4.32 0.42,4.36 1.34,-0.17 -2.51,1.76 -0.87,3.22 0.73,1.16 4.31,0.82 2.94,3.4 -1.12,2.14 2.56,-1.79 1.05,1.32 0.04,1.92 1.74,4.67 -1.56,4.6 -2.59,0.04 -5.57,1.58 -4.88,4.34 -1.93,1.59 -3.46,4.3 -2.04,6.74 1.21,-0.9 1.4,3.27 -0.48,2.33 -2.61,-0.17 -4.34,2.86 -4.47,4.25 -3.32,-0.37 -1.93,5.58 -4.94,3.83 -1.97,0.68 -1.55,3.31 -3.9,2.83 -2.31,2.16 -4.28,4.87 -4.46,8.16 0.05,2.37 -1.89,1.63 -2.69,0.94 -1.43,2.66 1.92,4.83 3.49,6.52 1.72,1.52 4.3,4.21 6.67,2.42 1.12,-1.05 0.41,-2.57 2.09,-1.56 1.41,-0.15 1,-2.82 3.17,-2.37 1.15,-0 0.13,2.98 0.5,4.21 -1.72,0.79 -3.13,2.24 -5.41,1.17 -2.72,0.19 -1.51,3.05 -3.33,4.45 -1.46,1.36 -5.27,2.16 -5.39,5.34 -0.65,2.52 -2.91,5.33 -5.63,3.62 -2.92,-0.52 2.13,-0.53 -0.45,-1.77 -0.6,-1.76 -0.24,-6.9 -3.31,-5.63 -2.51,0.74 -5.09,-2.4 -7.49,-0.19 -0.84,-1.11 2.17,-2.44 2.5,-3.9 1.15,-2.11 4.76,-3.17 5,-5.4 -1.21,-0.47 -1.1,-4.45 -2.98,-2.14 -0.01,2.53 -3.55,-2.55 -3,-0.06 -1.18,1.35 -4.02,3.26 -6.29,3.26 -0.55,-2.41 -5.82,0.8 -2.84,-2.01 -2.07,-2.11 3.13,-0.37 2.51,-2.12 0.43,-0.87 2.54,-3.83 0.04,-2.33 -1.67,2.49 -5.64,0.74 -4.34,-2.2 -3.44,-0.71 0.17,4.67 -3.05,4.35 -0.95,0.4 -1.24,-2.89 -2.18,-0.81 1.19,3.1 -5.65,1.69 -4.31,5.43 -0.19,2.64 -0.71,6.16 -2.65,8.5 -1.92,0.15 -2.28,-0.37 -1.97,1.56 1.06,2.6 -1.47,1.65 -1.44,-0.04 -3.03,0.54 1.86,5.97 -1.63,4.84 -1.69,1.04 -2.76,2.58 -4.85,3.23 -0.33,0.68 0.22,1.06 -0.9,0.94z m8.84,-3.13c-1.24,-0.5 0.31,-1.59 0,0z M480,354.71c-2.02,-0.24 1.4,-0.94 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6d993" original="#b6d993"
                                          id="jqvmap3_ua" class="jvectormap-region"></path>
                                    <path d="m564.91,519.32c-2.79,-0.13 -5.59,-0.02 -8.39,-0.06 1.03,-3 0.55,-6.35 0.36,-9.47 -0.77,-1.89 -0.08,-3.97 0.69,-5.38 -2.21,-3.68 3.62,-1.36 3.34,-4.63 0.16,-2.5 0.5,0.45 0.78,1.3 0.41,1.74 0.97,3.45 0.64,5.26 0.64,4.15 2.85,8.05 2.93,12.32 -0.33,0.17 0.28,0.88 -0.36,0.66z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d993" original="#b5d993"
                                          id="jqvmap3_il" class="jvectormap-region"></path>
                                    <path d="m593.15,519.31c-2.83,-0.62 -5.1,-2.77 -7.77,-3.86 -1.58,-0.98 -5.22,-1.86 -2.02,-3.26 5.2,-3.81 10.77,-7.23 15.26,-11.9 1.43,-2.99 4.63,-3.12 7.49,-3.98 3.73,-1.26 7.76,-1.54 11.57,-0.41 3.34,1.04 6.79,1.79 10.32,1.49 3.1,-0.23 6.16,0.27 9.07,1.36 7.05,2.14 14.23,3.86 21.25,6.06 3.22,1.22 7.13,2.8 10.33,0.7 3.47,-1.54 7.12,-2.66 10.59,-4.19 0,5.98 0,11.96 0,17.94 -28.52,0 -57.04,0 -85.55,0l-0.54,0.05z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d894" original="#b5d894"
                                          id="jqvmap3_sa" class="jvectormap-region"></path>
                                    <path d="m665.09,505.54c-3.93,-0.14 -7.37,-2.41 -11.2,-3.08 -6.98,-1.9 -13.93,-3.92 -20.88,-5.88 -4.51,-0.55 -9.21,0.46 -13.56,-1.25 -4.06,-1.23 -8.45,-1.67 -12.53,-0.27 -2.28,0.01 -6.14,3.28 -6.23,-0.28 -1.25,-1.52 -3.9,2.58 -3.26,-0.38 2.09,0.09 -1.51,-3.02 -1.67,-4.04 -1.32,-2.57 -5.49,-5.02 -2.13,-7.49 4.5,-5.84 9.16,-11.56 13.6,-17.45 2.04,-3.07 2.39,-7.4 0.02,-10.4 -1.41,-3.28 0.38,-7.66 -2.62,-10.31 -3.09,-2.29 -2.71,-6.73 0.85,-8.16 2.5,-2.92 2.33,-7.04 4.39,-10.19 0.66,-2.04 0.93,-3.47 3.19,-3.89 2.1,-2.75 5.72,-0.13 8.03,-2.44 0.9,-1.04 2.2,-3.85 2.95,-0.99 0.24,2.01 2.47,2.98 2.75,0.39 0.38,-1.99 1.84,-3.41 3.5,-1.73 2.25,0.16 -1.13,2.67 1.73,2.71 2.42,-0.18 1.65,4.3 5.21,2.73 1.14,1.18 1.93,5.76 4.16,3.01 2.6,0.76 5.25,0.47 7.14,-1.59 0.61,0.22 -3.19,2.13 -1.4,3.83 1.09,1.94 5.9,4.19 1.79,5.59 0.41,2.25 -2.38,5.11 0.78,6.65 -2.86,-0.58 -2.74,5.86 0.16,4.24 -0.52,2.48 -0.45,5.39 2.6,5.52 0.99,0.71 1.98,1.43 2.96,2.14 0.34,-1.31 1.06,-1.78 0.88,-0.17 1.65,-0.62 3.99,0.32 4.03,2.59 0.12,1.35 0.91,3.75 2.75,1.76 3.33,-1.46 6.61,1.38 9.97,1.03 2.56,-1.77 4.83,0.86 6.18,2.91 0,13.19 0,26.38 0,39.57 -4.3,1.87 -8.8,3.32 -13.06,5.23 -0.36,0.05 -0.72,0.08 -1.09,0.08z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_iq" class="jvectormap-region"></path>
                                    <path d="m625.84,392.01c-2.29,-1.74 -6.12,-1.39 -7.67,-4.17 -2.87,-0.9 2.82,-3.1 1.5,0.21 -0.29,2.16 0.66,-0.38 1.38,-0.86 1.98,0.67 2.99,-0.38 4.14,-1.97 0.78,0.36 1.17,3.12 3.09,2.25 0.41,1.86 5.4,3.6 1.25,3.88 -1.24,0.15 -2.44,0.52 -3.69,0.66z m9.25,-4.53c-1.22,-1.31 -1.37,-1.74 -0.58,-3.22 -0.7,-1.79 -4.05,0.28 -2.18,-2.45 -0.71,-3.07 -3.86,1.6 -5.74,-0.73 -1.12,-1.04 -4.8,-0.64 -2.24,-1.72 1.66,-3.91 -3.46,-4.05 -5.96,-4.45 -3.06,-0.54 1.31,-0.13 -0.04,-1.79 -1.74,-0.11 0.76,-3.32 -2.15,-2.78 -1.13,-2.07 -3.77,1.24 -3.43,-1.3 -3.83,0.78 -1.14,-4.07 1.25,-3.79 1.55,-0.11 2.45,2.19 4.64,1.11 1.17,-0.47 1.66,-2.32 3.53,-1.24 4.04,0.44 2.81,-5.63 -0.82,-5.09 -1.19,-0.23 -4.57,-0.92 -2.6,-1.97 -1.03,-3.22 2.59,-2.79 4.29,-1.55 1.8,0.76 4.71,-0.66 4.29,1.94 2.3,1.27 5.96,-0.02 6.83,-2.57 -0.51,-2.81 0.78,-5.44 1.5,-8.17 0.77,-1.87 3.93,1.21 5.57,1.75 2.04,2.28 4.63,3.86 7.4,4.84 2.72,2.9 5,-2.29 8.05,-0.66 2.42,0.7 -1.69,0.86 -2.16,1.8 -1.58,1 -0.94,2.98 -2.64,4.05 -0.87,2.65 2.35,4.7 1.48,7.28 0.01,2.24 2,3.06 1.53,5.18 2.05,2.31 -2.94,0.21 -1.67,3.07 0.41,2.71 2.06,5.63 2.66,7.96 -1.4,1.58 -3.89,-2.8 -4.72,-0.12 -0.51,-2.33 -5.01,-0.05 -2.24,-2.75 1.89,-2.25 -0.89,-2.79 -2.14,-3.4 -0.39,-1.7 3.13,-2.19 0.43,-2.98 -2.55,-2.17 -6.8,-1.82 -7.18,2.01 -1.56,2.2 -2.45,4.87 -3.2,7.25 -1.02,1.28 -1.42,2.9 -1.76,4.47z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_az" class="jvectormap-region"></path>
                                    <path d="m679.21,458.81c-1.85,-0.64 -2.96,-4.67 -5.07,-2.4 -2.51,1.13 -4.99,-0.69 -7.5,-0.94 -1.54,-1.25 -4.65,1.4 -4.88,0.3 -0.35,-2 -1.76,-5.08 -4.31,-4.59 -0.55,-2.48 -2.8,0.93 -4,-1.28 -1.15,-1.36 -3.82,-0.5 -2.7,-3.18 1.2,-2.24 -1.18,-2.93 -1.92,-2.92 -0.76,-2.14 0.85,-1.8 1.93,-2.95 -0.87,-1.54 -2.25,-2.23 -1.18,-3.98 1.41,-1.22 -0.93,-2.74 1.62,-3.12 2.22,-2.84 -3.32,-4.02 -3.44,-6.68 1.23,-0.62 3.69,-3.96 0.62,-3.5 -2.16,1.88 -4.6,2.34 -7.4,1.61 -2.13,2.68 -1.52,-4.01 -4.35,-3.02 -2.59,1.12 -1.74,-3.71 -4.6,-2.9 0.47,-2.81 -2.6,-2.62 -3.34,-4.74 -3.51,-0.37 -2.73,-5.88 -6.79,-4.9 -2.43,-0.23 0.88,-4.74 -1.15,-6.42 -2.63,1.81 -2.65,-3.09 -4,-4.32 -2.26,0.51 -1.17,-4.01 -3.82,-4.01 -1.08,-1.34 3.43,-0.98 2.24,-3.41 -0.62,-1.73 -1.46,-4.27 1.42,-2.93 2.06,1.49 5.14,2.91 7.63,3.88 2.25,1.24 5.18,-0.04 7.5,-0.74 2.07,-1.71 5.07,-2.61 4.75,-5.97 2.3,-2.33 1.71,-5.53 3.7,-8.09 0.98,-2.61 2.58,-5.68 5.71,-3.44 1.82,0.32 -1.95,3.66 1.08,3.95 4.06,-0.35 -2.73,4.32 1.52,4.83 1.27,-1.49 2.59,2.44 3.8,0.15 1.45,1.58 3.99,1.1 4.87,0.71 1.82,2.85 3.68,6.92 7.62,6.9 3.17,0.36 5.34,-2.56 8.13,-3.02 2.01,0.9 4.99,2.01 6.34,2.88 -0.02,22.74 0.03,45.49 -0.03,68.23z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d994" original="#b5d994"
                                          id="jqvmap3_ir" class="jvectormap-region"></path>
                                    <path d="m581.92,380.27c-2.26,-0.5 1.41,-3.83 -0.72,-5.4 -1.82,-2.3 -4.05,-4.17 -5.45,-6.77 -1.72,-2.18 -4.46,-0.36 -5.95,-2.58 -2.48,-1.15 -5.99,1.77 -7.69,-0.38 -1.24,-0.61 -3.4,-1.34 -1.11,-2.52 2.92,-1.18 5.31,-0.74 8.31,-1.17 2.62,-0.64 4.81,0.81 7.27,-1.05 1.64,-1.03 2.03,-2.53 4.37,-2.32 3.09,-1.55 5.23,0.93 8.34,0.23 1.97,-0.34 3.8,-1.06 3.76,1.37 3.33,1.16 4.09,-3.43 6.09,-4.97 1.82,1.19 3.56,0.44 3.29,-1.84 2.38,1.1 4.89,0.94 6.98,-0.29 0.1,2.19 0.6,4.52 3.44,3.9 1.82,0.87 6.7,-2.08 4.44,1.62 -1.04,4.09 6.18,1.33 6.51,4.88 -0.55,2.71 -3.63,-0.63 -4.78,1.93 -2.42,2.07 -3.95,-2.25 -6.59,-0.28 -2.88,0.84 -1.75,4.15 -4.11,5.26 -2.15,1.64 -6.02,2.97 -7.99,5.72 -1.4,1.55 -3.24,0.61 -4.57,1.11 -0.32,-2.7 -4.41,-0.39 -5.08,-2.59 -2.74,0.39 -1.4,4.41 -4.46,3.55 -2.08,-0.04 -2.63,2.5 -4.3,2.58z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_ge" class="jvectormap-region"></path>
                                    <path d="m570.98,505.1c-2.37,-0.06 -4.22,-2.23 -6.66,-1.9 -1.76,1.54 -0.95,-3.61 -2.17,-4.66 0.26,-2.1 3.06,-4.25 2.48,-6.23 -2.86,0.37 -0.12,-3.18 1.61,-2.81 1.41,-1.1 -2.08,-2 0.23,-3.24 2.46,-1.85 0.82,-6.41 -2.32,-5.73 1.74,-2.54 -3.41,-1.48 -4.52,-0.5 -2.16,-1.45 -1.71,-4.59 -2.2,-6.89 -0.72,-2.13 -3.63,-2.2 -2.69,-4.95 -1.91,-3.07 4.61,0.44 2.96,-3.37 1.96,-1.34 -0.54,-4.12 2.56,-4.37 1.92,-1.95 -2.9,-3.08 -1.96,-5.67 -0.17,-2.68 3.53,-1.88 4.07,-0.24 2.8,-1.4 6.26,-2.87 7.96,-6.08 1.77,-3.87 6.01,-0.57 8.96,-1.32 4.89,-1.98 9.3,-5.28 12.15,-9.78 2.06,-3.09 5.52,-4.42 8.88,-5.51 3.15,-0.62 4.71,-4.01 6.68,-5.54 2.16,2.06 -0.35,4.49 -0.71,6.75 -0.34,2.94 -3.64,3.54 -4.67,5.93 -0.77,2.72 0.96,5.34 2.92,7.06 1.91,2.86 0.25,6.61 2.05,9.52 1.43,2.7 2.07,6.08 0.11,8.71 -2.41,4.04 -5.84,7.35 -8.54,11.19 -6.92,8.84 -13.8,17.72 -20.31,26.87 -1.64,2.62 -4.19,2.66 -6.86,2.76z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_sy" class="jvectormap-region"></path>
                                    <path d="m494.91,482.2c-2.64,-0.83 -6.61,0.7 -6.69,-3.38 -0.28,-2.26 -4.06,-2.7 -3.32,0.14 -2.13,0.72 -2.01,-4.36 -4.24,-2.06 -1.1,1.64 -1.71,4.09 -2.75,1.3 -0.06,-0.7 3.87,-0.84 1.58,-2.85 -2.66,-0.75 -4.9,2.05 -7.56,2.3 -3.22,0.12 2.63,-2.09 -0.16,-3.58 -1.02,-1.26 -2.59,-1.78 -3.85,-0.25 0.8,-2.14 -2.11,-2.59 -0.3,-4.42 0.7,-2.91 -3.46,-4.14 -4.72,-3.08 -0.35,-2.13 -2.41,-1.66 -2.94,-0.12 -0.96,-0.52 -4.49,-1.13 -1.65,-1.67 1.95,-1.12 -0.35,-1.93 -0.64,-2.3 -0.1,-2.91 1.76,1.21 2.44,2.3 1.21,0.53 0.61,-1.54 2.32,-0.91 2.14,0.31 3.08,-4.19 0.9,-2.3 -2.98,0.71 -3.35,-2.88 -0.63,-3.63 1.42,-2.31 -2.41,-1.49 -2.02,-3.47 -1.48,-1.26 -3.08,-1.7 -1.12,-3.61 1.88,-4.06 -3.41,-1.44 -4.89,-0.21 -3.22,2.13 -1.41,-2.71 -2.53,-4.43 0.27,-1.5 2.4,-1.02 1.65,-3 1.08,-2.79 3.49,-3.54 5.85,-4.95 1.33,-0.2 3.18,2.13 5.06,0.5 2.19,-0.32 0.53,-4.12 2.21,-2.66 -1.01,2.78 3.65,-0.5 5.07,-0.34 1.73,-0.22 7.01,-0.13 5.15,-2.97 -1.48,-0.21 -3.18,0.39 -0.99,-0.95 1.96,-1.62 4.19,-2.4 6.66,-2.8 2.77,-0.54 1.2,-2.91 -0.89,-1.86 -1.93,1.45 -3.4,0.81 -4.38,0.32 -3.58,0.35 -2.31,-4.79 0.81,-3.52 2.71,0.01 5.57,-0.39 7.64,-2.28 2.46,-0.32 5.31,1.16 7.39,-0.69 2.9,-0.41 1.41,-4.52 4.23,-5.54 2.71,-2.98 4.61,-6.84 8.39,-8.68 2.29,-1.78 4.29,-3.83 7.39,-4.02 3.16,-0.7 6.47,-1.22 9.26,-2.97 -0.18,-2.01 2.92,-3.03 2.12,-0.46 1.09,2.77 5.37,3.22 7.04,0.72 1.14,-1.37 -0.27,2.45 1.16,0.14 2.04,-1.94 2.88,3.79 5.57,2.83 1.27,-1.86 4.62,-3.78 5.67,-1.09 1.67,-0.99 4.1,0.27 5.52,-0.17 -0.07,-1.45 1.44,-1.93 0.76,-0.72 3.48,0.31 7.66,-0.08 9.71,-3.32 2.34,-1.18 4.33,-4.18 7.15,-3.36 2.71,-0.07 6.67,-0.67 7.5,-3.83 1.38,-2.88 4.81,-4.34 5.49,-7.63 0.34,-3.02 3.69,-0.01 3.89,-2.79 0.79,-1.71 6.06,-0.8 5.2,-2.54 -0.27,-1.98 1.64,-2.11 0.91,-0.61 1.97,-1.13 4.24,-0.33 5.11,0.95 0.95,1.76 2.34,-1.7 3.43,0.93 2.07,0.94 4.5,1.8 3.64,4.81 0.12,2.83 2.56,6.38 5.64,4.35 1.45,-1.61 6.05,-1.12 6.12,-0.28 -2.87,1.25 2.28,4.65 -1.45,5.76 -2.31,0.86 -1.86,1.74 0.02,2.55 2.07,1.41 1.16,4.02 3.6,4.69 1.23,1.57 1.59,5.71 3.8,4.2 0.43,2.37 -1.79,7.52 2.74,6.05 2.64,-0.44 0.94,3.97 3.94,4.02 3.58,1.02 -1.74,2.3 -1.12,4.76 -1.2,0.98 -0.5,-3.85 -3.12,-2.67 -1.98,1.2 -2.57,4.14 -5.61,3.29 -2.88,-0.31 -4.84,1.72 -7.02,2.7 -0.69,1.88 -0.86,5.21 -2.91,2.44 -2.75,-0.22 -2.61,4.46 -5.58,4.92 -2.98,1.72 -6.75,1.93 -9.15,4.66 -2.61,2.66 -4.36,6.14 -7.61,8.16 -2.25,1.32 -4.52,3.36 -7.26,3.28 -3.54,-1.52 -7.49,-0.78 -9.08,3.03 -1.68,2.28 -5.43,4.75 -7.39,2.82 -3.82,-1.14 -4.64,3.62 -2.75,6 0.73,1.14 2.5,1.57 0.17,2.12 -3,0.1 0.83,3.76 -2.09,4.07 1.59,1.89 -1.39,2.48 -1.35,0.31 -1.32,-1.73 -3.85,-3.07 -1.43,-5.18 3.46,-2.09 -0.87,-8.48 -3.12,-4.45 -0.21,1.09 -4.52,4.06 -1.07,3.29 -0.14,0.32 -3.7,3.62 -5.39,1.57 -3.14,-1.5 -6.7,0.91 -7.75,3.93 -2.31,1.12 0.64,5.77 -2.52,4.44 -0.89,2.68 -3.25,3.27 -5.84,4.06 -1.96,1.06 -3.83,3.65 -6.37,2.47 -2.84,-1.55 -5.07,-4.65 -8.7,-4.14 -2.94,-0.38 -6,-0.94 -8.9,-0.06 -3.48,-0.29 -3.26,3.57 -2.85,5.62 -0.19,1.75 1.15,3.5 -1.34,2.67 -2.13,0.36 -2.94,2.88 -4.85,3.38z m-22.48,-0.92c1.54,-1.56 1.67,0.46 0,0z m4.91,-2.51c-0.79,-0.93 0.97,-1.15 0,0z m-7.81,-0.87c-2.21,-0.79 -0.04,-1.14 0.54,-0.39 -0.12,0.2 -0.29,0.4 -0.54,0.39z m-17.07,-35.78c-2.05,-1.66 3.84,-4.8 1.02,-1.64 -0.17,0.27 -1.7,3.54 -1.02,1.64z m-2.5,-4.63c-2.27,-0.95 2.99,-3.59 0.8,-5.77 -1.18,-2.59 4.67,-3.55 1.64,-6.24 -1.25,-1.27 -3.7,-1.75 -1.56,-3.41 0.31,-2.43 2.93,-0.92 3.7,-3.21 1.99,-1.8 4.08,2.49 6.12,-0.22 3,-2.82 1.8,3.03 4.59,3.75 2.54,1.72 5.71,1.31 8.59,1.46 1.59,1.71 -1.83,5.17 -3.31,2.87 -1.59,0.83 -4.21,-0.49 -5.46,2.07 -2.23,0.06 -4.36,0.17 -4.68,3.06 -0.43,2.55 -2.87,5.66 -5.23,3.75 -1.9,0.1 -3.3,1.78 -5.2,1.9z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b4d794" original="#b4d794"
                                          id="jqvmap3_tr" class="jvectormap-region"></path>
                                    <path d="m631.96,389.85c-1.96,-0.78 -2.5,-4.05 -4.9,-3.4 0,-2.98 -2.99,-2.85 -3.89,-0.42 -0.72,0.59 -2.05,-1 -2.73,0.47 -1.44,-4.24 -3.82,2.15 -6.08,-0.34 -2.43,-1.36 -5.05,-0.13 -7.33,0.88 -1.6,1.02 -2.24,-1.35 -3.25,-2.19 -0.22,-2.63 -0.35,-6.8 -3.95,-6.8 -1.56,-1.33 3.34,-2.22 3.67,-4.1 2.01,-1.81 4.84,-2.17 7,-3.75 -1.93,-0.72 2.92,-0.35 0.29,0.72 0.12,2.73 3.55,-1.6 5.25,0.33 2.07,0.17 -1.51,3.12 1.09,4.06 1.57,1.97 7.78,-0.09 6.04,3.56 -1.81,0.88 -2.21,2.81 0.36,2.27 2.62,0.26 4.73,3.06 7.3,0.67 1.25,-0.38 -1.56,2.52 0.95,2.4 1.37,0.14 2.22,0.32 0.58,1.07 -0.16,1.55 3.78,3 0.58,4.04l-0.53,0.37 -0.44,0.16 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_am" class="jvectormap-region"></path>
                                    <path d="m527.35,491.44c-2,0.03 -5.42,-2.87 -2.34,-3.85 0.27,-2.84 4.77,-0.45 3.78,-3.88 -1.1,-2.02 2.82,-0.4 4.03,-1.67 3.21,-1.08 5.34,-3.84 7.9,-5.9 -1.85,1.69 -5.66,5.67 -1.55,7.09 -1.16,0.96 -4.02,1.69 -3.88,3.92 -1.79,0.94 -4.14,2.55 -4.75,3.95 -1.18,-1.33 -2.1,0.23 -3.19,0.34z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_cy" class="jvectormap-region"></path>
                                    <path d="m160.13,300.45c-1.94,-0.73 -5.41,-0.29 -5.93,-1.1 2.68,-0.96 1.02,-3.47 -1.27,-2.29 -2.17,-0.03 4.61,-0.27 1.86,-1.87 -1.29,0.35 -5.82,0.84 -4.6,-0.88 0.33,-2.41 5.15,0.07 4.57,-2.91 -1.5,-0.99 -3.62,0.6 -3.81,-1.26 1.2,-0.91 6.26,2.54 3.91,-0.67 0.38,-1.38 3.44,-1.82 5,-1.34 1.1,0.96 5.65,0.21 3.16,-0.84 -0.11,-2.83 -2.54,-0.03 -3.01,-0.47 -0.23,-0.23 -3.43,-0.5 -1.1,-1.34 2.22,-1.01 0.54,-4 2.82,-3.42 2.56,1.02 3.91,-3.17 0.52,-2.46 -1.68,0.14 -2.56,-0.23 -2,-1.83 -0.18,-2.01 -5.12,-1.21 -3.94,-2.82 2.15,0.5 2.19,-2.65 4.57,-1.69 2.67,-0.16 1.13,-2.7 -0.21,-3.26 0.29,-1.31 0.02,-3.18 -0.75,-3.28 2.65,-0.82 4.91,0.87 5.93,2.56 1.46,-1.86 3.2,1.45 5.23,1.05 -1.45,-1.4 -1.04,-3.03 1.32,-2.78 1.21,-0.78 -0.05,1.72 1.32,2.45 1.11,1.84 4.55,5.05 6.16,2.17 -0.49,-1.92 2.26,-1.77 1.43,0.13 0.94,1.15 1.06,2.27 0.8,3.26 0.63,1.48 4.47,-0.64 2.75,0.86 -2.34,0.42 -0.05,3.2 -0.77,4.83 0.46,1.62 -0.08,2.98 -1.28,2.32 1.02,2.41 1.46,5.54 -0.48,7.61 -1.25,2.01 -3.34,4.38 -4.14,6.02 -2.56,-0.85 -5.09,-0.34 -7.67,-1.06 -1.16,0.41 -0.62,2.52 -2.3,1.42 -1.5,0.14 -2.91,2.49 -3.4,0.19 -2.29,-1.05 -1.04,2.27 -2.69,2.29 -0.11,0.95 -1.6,-1.12 -2.01,0.4z m13.73,-33.46c2.33,-2.06 -0.9,-1.95 -2,-2.14 -1.29,-0.53 -2.55,-1.96 -0.25,-1.08 1.89,0.69 2.47,-1.66 2.15,-3.1 -1.16,-1.71 7.03,-1.16 4.23,1.31 -0.31,1.85 2.66,-0.08 1.09,1.63 -0.53,1.73 -5.09,0.69 -2.83,2.72 -0.77,0.31 -1.61,0.36 -2.38,0.64z m6.45,-5.05c0.02,-0.88 0.61,0.23 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d993" original="#b5d993"
                                          id="jqvmap3_ie" class="jvectormap-region"></path>
                                    <path d="m182.64,325.46c0.06,-1.95 -4.47,-2.09 -0.74,-2.3 2.67,-0.61 3.94,-3.31 6.49,-4.14 2.12,-0.77 1.4,-4.5 3.94,-3.31 1.45,-3.67 5.43,-1.45 8.06,-0.26 2.91,0.6 2.6,-3.72 5.07,-4.06 1.35,-0.1 4.35,-3.93 1.42,-2.57 -1.86,1.99 -5.05,0.84 -6.82,2.84 -2.27,-0.51 -2.72,-5.62 -5.77,-3.31 0.24,-2.37 -1.53,-4.27 -3.69,-2.44 -0.87,0.75 -2.94,0.79 -1.58,-0.17 0.16,-1.27 -3.6,-0.88 -1.52,-2.98 1.52,-0.74 3.44,0.29 4.82,-1.36 2.13,0.95 4.49,-1.92 5.83,-3.38 1.68,-2.26 0.05,-8.36 -3.37,-5.58 -1.46,1.33 -0.19,-1.41 0.97,-0.91 1.28,-1.84 2.91,-2.79 5,-2.8 1.2,0.32 4.62,-0.54 5.23,2.01 0.71,1.84 0.61,0.28 0.62,-0.81 -0.49,-1.45 0.01,-1.88 0.83,-1.63 -1.44,-2.21 1.58,-2.99 1.67,-4.6 -1.45,-0.49 -1.63,-2.14 0.09,-1.51 0.69,-1.16 0.79,-2.38 1.37,-3.56 -0.63,-2.27 -3.62,2.01 -2.38,-1.12 -0.36,-1.35 -2.39,0.41 -1.46,-1.51 -2.08,-2.31 0.12,-6.19 3.07,-5.98 2.74,-1.73 -0.83,-1.86 -2.08,-2.37 -0.92,0.48 -3.28,2.29 -4.42,1.19 -1.32,1.2 -1.79,-3.4 -3.43,-0.83 0.32,2.13 0.14,1.46 -0.76,0.01 -1.33,-0.68 -2.66,-1.39 -1.32,-3.18 1.13,-2.26 5.13,-4.6 2.33,-7.17 0.52,-2.42 1.47,-4.31 0.99,-6.83 -1.19,-2.25 -5.91,3.7 -3.96,0.19 -1.17,-1.95 1,-2.29 1.54,-3.39 -1.93,-1.31 3.92,-1.92 1.97,-3.06 1.93,-2.14 -1.4,-1.12 -1.91,0.17 -2.64,0.37 -2.78,2.95 -5.17,3.25 1.64,-1.88 1.56,-3.32 4.36,-3.1 0.45,-1.67 -5.98,-1.25 -1.81,-1.19 1.82,-0.7 -1.08,-3.69 1.83,-2.58 2.2,1.18 2.55,-1.86 1.62,-2.28 3.21,-0.32 0.94,-5 -0.12,-6.67 -1.49,-3.19 1.62,1.59 1.66,-1.31 -0.16,-0.99 3.11,1.17 2.06,-1.21 -1.02,-1.19 -0.29,-1.17 0.73,-0.82 0.07,-1.49 0.01,-1.71 1.64,-1.31 1.56,-1.15 -0.74,-2.21 0.86,-3.26 -0.88,-3.08 1.49,-0.59 1.87,-0.27 0.74,0.04 0.92,2.92 2,0.79 2.21,-0.9 6.43,0.18 7.86,0.3 -1.51,1.12 -1.16,3.83 -3.76,4.28 -1.25,1.24 -5.25,2.21 -4.45,4.19 2.02,-0.77 1.46,0.73 0.51,0.2 -2.65,-1.31 -3.91,3.83 -0.65,3.27 1.6,-1 4.76,-1.27 6.96,-0.43 2.15,0.77 9,0.4 6.36,4.13 -2.17,1.32 -1.95,4.3 -3.79,5.88 -1.36,2.24 -3.73,4.99 -6.67,3.85 -2.54,0.88 -0.66,2.52 1.1,1.38 0.78,-0.5 3.15,3.35 0.84,1.99 -2.07,-0.28 -3.16,1.31 -5.18,1.63 -0.02,2.53 4.56,1.95 5.82,1.47 2.3,1.2 3.8,3.55 4.55,5.85 2,2.23 0.13,5.79 1.35,8.49 -0.45,3.02 1.26,4.86 3.81,6.01 1.66,1.49 2.34,4.19 3.57,5.37 -2.57,1.95 1.1,5.12 0.44,6.31 -2.04,-0.08 1.34,3.78 1.3,5.11 0.78,2.24 -5.08,2.32 -2.09,4.71 1.56,2.69 3.3,0.05 4.83,-1 2.51,1.1 6.37,1.79 6.61,5.25 -0.28,2.6 -1.71,7.67 -4.87,6.84 -2.14,0.29 1.39,3.23 -1.35,2.01 -1.64,-1.62 -4.38,2.64 -1.7,1.39 1.98,0.5 -1.21,2.23 -2.35,1.41 -3.04,0.03 -0.52,3.18 1.11,2.57 2.13,-1.55 -0.82,1.67 1.85,1 1.37,0.01 4.16,-1.13 2.4,1.04 0.18,1.94 -3.04,1.77 -3.79,3.01 -3.03,-0.26 -5.14,2.46 -7.81,0.22 -2.14,-0.87 -5.12,1.06 -5.71,-1.04 -0.97,0.35 -1.61,-1.39 -2.37,0.11 -0.34,-1.96 -3.3,-2.15 -1.9,0.13 -1.76,0.29 -4.97,-1.2 -5.38,0.98 -2.03,-0.7 -3.26,-0.69 -4.99,-2.14 -2.67,-1.4 -6.68,-1.13 -6.68,2.71 -0.68,3.61 -3.23,0.34 -4.72,-0.57 -1.81,-0.09 -4.28,-1.13 -5.91,0.19 -1.52,-0.34 -2.18,1.47 -2.78,2.5z m18.76,-70.13c1.65,1.54 3.03,-0.19 0.57,-0.92 -0.47,-0.23 -0.39,0.68 -0.57,0.92z m-3.12,31.93c0.55,0.53 0.27,0.88 0,0z m-1.17,-10.07c0.02,-1.53 3.39,-4.02 1.66,-1.22 -0.39,0.58 -0.96,1.08 -1.66,1.22z m-10.63,-1.73c-1.59,-0.31 -2.08,-2.29 -3.03,-0.36 -1.91,-0.73 1.49,-2.2 -1,-2.29 0.13,-2.31 -2.8,-4.88 -3.79,-2.04 0.08,3.32 -3.97,-0.09 -4.6,-1.78 -1.85,-2.46 4.1,-0.54 2.7,-3.31 3.07,0.55 2.59,-4.32 5.36,-2.92 1.06,-1.19 2,-1.61 3.15,-1.03 2.23,-0.98 4.88,1.21 3.52,3.35 -0.19,2.26 3.15,1.24 0.87,3.27 -2.06,1.44 -0.04,2.03 1.25,1.47 1.84,1.95 -0.91,4.87 -2.77,3.75 -0.28,0.8 -0.67,1.84 -1.67,1.88z m10.61,-7.92c-1.67,-0.09 0.88,-0.41 0,0z m-4.29,-6.97c1.08,-0.83 2.3,-4.85 2.33,-3.8 -0.86,1.14 -0.52,3.62 -2.33,3.8z m2.73,-6.13c0.35,-1.24 0.97,-0.17 0,0l0,0z m-3.97,-25.03c-1.05,-1.04 1.79,-1.33 0,0z m1.85,-1.48c-0.51,-1.01 -1.32,-1.32 -0.4,-1.6 -1.54,-1.3 0.12,-2.32 1.22,-0.9 1.22,-0.53 0.35,-2.59 1.9,-1.78 0.84,-0.86 3.02,-1.98 1.27,-0.28 -1.41,1.61 -1.17,5.41 -3.42,2.95 -0.74,0.32 -0.1,1.35 -0.58,1.61z m38.33,-20.76c-1.93,-1.65 4.17,-0.89 0.99,-0.51l-0.47,0.12 -0.53,0.39 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b0d097" original="#b0d097"
                                          id="jqvmap3_gb" class="jvectormap-region"></path>
                                    <path d="m292.05,389.98c-1.12,-2.03 -1.49,-3.96 -4.14,-4.68 0.24,-1.27 0.28,-4.19 -2.02,-2.48 -2.76,1.07 -0.98,6.19 -4.8,5.6 -1.34,-2.05 -4.35,2.18 -5.85,-0.49 -0.66,-1.9 -1.54,-2.82 -1.22,-5.23 -0.26,-1.58 -4.49,-1.34 -5.35,0.35 0,0.96 -0.92,3.04 -1.36,2.14 2.08,-0.65 -0.4,-3.99 1.78,-5.21 1.94,-0.57 2.18,-1.6 2.3,-3.5 2.42,-0.82 3.23,-3.53 5.4,-5.02 0.92,-1.36 3.51,-0.53 3.7,-1.93 2.51,-0.36 5.31,-0.33 7.48,-0.01 1.57,-0.63 0.5,-2.03 0.36,-2.23 1.31,-1.57 1.36,1.33 2.5,0.98 1.1,0.96 4.91,-0.68 5.97,2.04 0.36,1.7 -2.95,6.33 1.28,6.08 1.9,0.87 4.09,3.47 5.78,0.3 -0.28,1.18 -0.17,4.33 -0.42,4.42 -1.87,-2.39 -4.17,0.79 -2.27,2.33 0.4,3.64 -0.7,-1.85 -2.69,-0.06 -1.62,2.46 -2.25,-1.46 -3.43,-1.76 -2.43,0.76 -0.07,4.33 -2.78,4.97 -1.02,0.89 -0.72,2.33 -0.22,3.4z M275.63,370.8c0.49,-1.83 2.92,0.14 0.45,0.04l-0.53,0.11 0.08,-0.14 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d894" original="#b5d894"
                                          id="jqvmap3_ch" class="jvectormap-region"></path>
                                    <path d="m338.89,381.72c-2.92,-0.37 -5.68,-0.8 -8.68,-1.29 -3.41,-0.44 -7.47,0 -10.13,-2.59 -0.49,-1.79 -2.01,-0.99 -0.74,-2.9 -1.54,-1.34 -4.15,1.63 -6.36,0.74 -2.58,-0.56 -3.71,1.14 -4.67,3.02 -0.77,-1.61 -4.07,-0.58 -3.15,-2.45 -2.02,-1.72 -4.43,3.34 -5.34,-0.45 -2.71,0.05 -3.32,-2.5 -1.76,-4.48 -0.11,-1.92 0.65,-1.26 2.03,-1.24 0.77,2.34 2.91,4.54 4.57,1.3 -0.46,-2.13 1.09,-1.56 2.51,-1.62 1.01,3.44 4.52,1.32 6.34,0.3 1.07,-2.1 5.55,-0.39 5.96,-2.32 1.02,0.88 3.01,0.37 3.69,0.59 0.18,3.89 5.07,0.73 2.69,-1.53 -0.2,-1.43 -1.39,-3.39 -2.11,-5.03 1.93,-1.47 5.36,-2.58 5.54,-5.05 1.88,0.9 2.55,-1.98 3.13,-1.73 2,1.9 4.33,0.91 6.33,0.45 0.7,-1.97 2.92,-2.39 2.31,-5.03 1.96,0.92 4.91,0.17 6.97,1.75 1.9,2.39 4.37,-0.77 6.11,0.38 1.43,-0.03 2.77,1.31 1.21,2.94 -0.45,2.79 3.86,4.35 2.35,7.1 1.97,3.48 -4.51,0.08 -4.56,2.79 1.63,1.11 3.27,1.96 0.42,2.95 -0.98,1.81 1.97,4.01 -0.88,5.49 -1.01,1.14 -3.1,1.64 -2.24,3.63 -2.75,-0.79 -4.87,2.27 -7.7,0.89 -1.89,0.31 -2.39,2.61 -3.87,3.38z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d894" original="#b5d894"
                                          id="jqvmap3_at" class="jvectormap-region"></path>
                                    <path d="m335.18,355.05c-3.65,-0.41 -4.96,-4.57 -8.41,-5.66 -1.31,-1.75 -2.19,-2.91 -4.32,-3.66 -1.8,-1.56 -2.64,-3.53 -1.6,-5.57 -0.16,-1.57 -4.02,-3.53 -3.2,-4.17 1.42,3.2 2.44,-2.24 4.26,-2.25 1.35,1.3 3.09,-0.63 3.77,-1.12 1.58,-1.86 4.18,-2.74 6.59,-3.91 1.63,-0.69 3.11,-2.35 4.59,-0.56 2.65,1.13 2.61,-4.69 4.17,-1.06 1.38,1.66 3.64,0.69 5.11,2.36 0.67,1.75 5.33,-1.17 2.84,1.24 -1.67,2.06 2.09,2.81 2.61,4.74 2.09,1.86 2.12,-0.93 3.96,-1.42 0.43,-1.39 -1.9,-2.7 0.65,-1.55 1.23,1.3 3.29,0.96 4.4,0.53 -3.27,0.95 2.17,5.16 3.09,2.65 2.93,0.44 4.53,2.63 6.07,4.63 -2.15,1.71 -4.92,3.04 -5,6.15 -1.22,2.56 -3.35,3.75 -6.24,3.67 -1.85,1 -3.16,2.67 -5.05,0.79 -2.11,1.83 -4.69,0.96 -6.9,-0.42 -1.92,-1.1 -4.07,-0.45 -5.85,-0.93 -0.34,2.31 -2.03,3.48 -2.87,5.34 -1.07,-1.47 -1.28,0.34 -2.66,0.17z m-0.68,-28.45c-2.43,-2.03 2.32,0.24 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d993" original="#b5d993"
                                          id="jqvmap3_cz" class="jvectormap-region"></path>
                                    <path d="m364.44,362.94c-2.39,-2.37 -6.56,-2.63 -7.73,-6.02 -0.46,-2.43 0.4,-6.56 3.64,-6.16 3.23,0.29 4.91,-3 5.9,-5.48 0.17,-1.96 3.95,-5.08 5.19,-3.02 2.43,1.82 3.49,-4.97 4.66,-0.89 1.56,0.35 1.91,0.85 1.91,2.52 2.64,1.02 3.89,-1.84 5.57,-3.22 1.58,-0.07 4.26,1.88 5.1,-0.34 0.99,-1.59 4.74,-1.57 6.47,-0.13 1.28,2.35 6.24,0.73 4.22,4.32 -1.5,2.17 -0.53,7.67 -4.43,6.22 -0.53,-3.18 -3.88,-1.31 -5.83,-0.46 -2.77,-2.02 -4.98,0.68 -5.07,3.51 -1.08,0.67 -2.09,-0.14 -2.29,1.79 -1.29,1.17 -3.96,-2.16 -4.46,1.1 -0.72,2.43 -5.78,-0.07 -5.66,3.66 1.11,2.54 -4.04,1.94 -5.84,2.51 -0.44,0.04 -0.88,0.07 -1.32,0.1z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_sk" class="jvectormap-region"></path>
                                    <path d="m369.77,387.01c-2.75,-0.58 -5.39,-1.37 -7.78,-2.73 -2.27,-2.63 -5.77,-3.91 -7.5,-7.04 -1.21,-1.85 -2.06,-2.65 0.1,-3.74 1.43,-1.97 -1.64,-4.55 1.32,-5.48 2.04,-1.7 -3.3,-3.48 -0.09,-2.71 2.81,1.04 3.86,-1.91 3.11,-3.93 1.93,-1.05 3.43,2.43 5.44,2.58 3.24,-0.18 6.53,-0.68 9.48,-2.09 -2.94,-1.84 0.68,-3.88 2.85,-2.99 1.75,-0.27 1.26,-4.31 3.33,-2 2.26,0.8 3.01,-1.99 4.8,-2.5 0.41,-2.48 1.52,-4.92 4.25,-3.08 1.93,-0.18 4.28,-2.95 5.05,0.14 2.1,1.7 4.8,-1.81 6.38,0.84 2.12,-0.07 1.45,3.23 3.34,1.35 3.46,3.21 -4.18,3.49 -4.55,6.38 0.35,2.87 -2.65,4.72 -2.5,7.52 0.37,3.17 -2.46,5.43 -2.51,8.54 0.01,3.02 -4.16,0.17 -4.1,3.12 -3.14,1.57 -7.09,0.21 -9.73,1.82 -1.24,2.36 -3.12,1.16 -4.53,3 -2.57,0.36 -3.31,3.42 -6.16,3.01z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6d993" original="#b6d993"
                                          id="jqvmap3_hu" class="jvectormap-region"></path>
                                    <path d="m397.76,280.99c-1.28,-1.32 -1.63,-4.58 -4.11,-3.7 -1.13,-2.07 -4.01,-0.28 -3.26,-3.14 1.62,-3.48 -2.4,-7.19 -5.64,-5.13 -2.28,0.26 -5.13,-1.48 -6.05,-2.17 -0.51,-2.23 -1.53,-3.51 -2.2,-5.4 -1.37,-2.68 1.24,-5.63 3.5,-7 1.88,-1.44 4.85,-0.65 6.6,-1.37 0.56,-1.26 2.33,2.09 2.82,-0.31 2.06,-0.86 4.97,0.1 6.62,-0.3 1.76,-0.28 3.35,-0.61 3.78,-2.83 1.19,2.4 3.3,3.12 5.7,2.26 2.79,0.52 4.16,3.86 7.04,4.08 1.64,1.42 -0.82,5.15 2.39,4.69 0.41,1.84 -3.75,0.79 -2.82,3.52 -2.05,1.6 -2.93,3.79 -1.88,6.23 -0.12,2.13 -0.68,3.69 -2.75,4.26 -0.43,1.13 -0.04,1.82 -1.97,2.11 -0.51,1.51 -1.38,2.09 -2.67,3.35 -1.72,-1.32 -3.41,0.53 -5.09,0.87z m13.27,-5.67c-0.11,-1.17 -1.77,-2.09 0.31,-1.22 0.43,0.34 0.36,1.19 -0.31,1.22z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_lt" class="jvectormap-region"></path>
                                    <path d="m375.49,257.31c-1.25,-2.79 -1.57,-6.54 -0.19,-9.24 2.63,-2.07 -0.8,-6.67 2.34,-8.6 1.69,0.07 4.11,-4.27 4.4,-1.32 2.44,1.48 4.79,3.19 5.76,5.78 2.55,1.96 6.17,0.07 7.13,-2.71 1.39,-2.75 -1.14,-5.3 -1.86,-7.82 1.34,-1.86 3.66,-3.57 5.64,-3.47 0.08,-0.9 1.63,1.08 2.69,0.67 1.72,0.06 3.13,2.25 4.97,3.22 2.21,0.36 3.53,-2.11 5.72,-1.12 1.76,-0.72 2.78,1.38 4.4,2.33 -0.55,1.5 -1.61,1.77 0.06,2.4 -0.17,1.1 -0.46,3.72 1.44,2.57 1.53,2.66 6.04,5.32 2.65,8.5 -1.42,1.56 -0.49,4.51 -3.48,3.69 -2.28,0.64 -3.94,4.9 -6.51,1.93 -2.03,-2.26 -5.06,-3.95 -7.91,-2.78 -1.1,-1.49 -3.6,-4.26 -4.46,-0.94 -1.47,1.77 -5.35,0.57 -7.87,1.17 -1.87,0.26 -2.16,0.89 -3.44,-0.06 -2.37,1.98 -6.1,0.17 -8.37,2.54 -1.6,0.14 -2,4.17 -3.11,3.25z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_lv" class="jvectormap-region"></path>
                                    <path d="m454.92,374.42c-0.33,-2.09 -1.86,-4.78 -2.23,-7.4 0.38,-3.56 0.07,-7.47 -2.96,-9.91 -3.2,-3.43 -7.96,-5.44 -9.93,-9.93 -0.24,-2.34 -6.31,-3.34 -2.39,-4.03 2.67,0.33 3.73,-3.48 6.57,-2.14 1.32,0.97 1.83,2.54 3.78,1.18 -0.02,0.82 2.42,2.73 2.56,0.37 1.33,-1.44 3.96,3.6 4.43,1.55 1.2,-1.55 0.65,3.03 1.22,3.93 0.07,2.32 4.57,4.13 4.42,2.59 -0.43,1.81 0.64,4.31 3.01,4.64 2.61,-0.41 1.35,4.32 2.84,4.34 -0.24,1.12 -3.35,-2.1 -2.5,0.78 -1.04,0.18 -2.3,-2.64 -2.02,-0.03 -1.22,0.21 -2.31,-1.71 -3.62,0.36 -1.34,1.85 1.39,3.73 0.77,5.48 -0.5,2.25 -2.95,4.34 -2.23,7.32 -0.82,-0.46 -1.48,0.35 -1.72,0.91z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_md" class="jvectormap-region"></path>
                                    <path d="m414.71,404.53c-2.94,-0.37 2.3,-2.82 -0.89,-3.86 -1.36,-0.38 -6.12,-1.72 -3.63,-3.39 3.62,-1.4 -2.29,-3.42 -3.82,-3.63 -1.25,0.73 1.78,4.33 -1.06,3.46 -0.47,-2.42 -4.24,0.23 -4.49,-2.27 -1.54,0.07 -1.87,0.1 -0.31,-0.74 0.46,-1.41 -2.15,-1.17 -0.71,-2.27 0.07,-4.02 -6.25,-1.24 -6.86,-4.86 0.56,-2.93 -2.25,-4.23 -4.45,-5.46 -1.23,-1.35 3.36,-1.23 3.59,-2.71 4.37,0.45 2.54,-4.6 4.68,-6.55 1.28,-2.95 0.7,-6.3 2.76,-8.97 0.62,-2.75 1.58,-5.21 4.69,-5.79 2.24,-1.25 2.4,-5.8 5.34,-3.67 2.44,-0.6 4.8,0.38 7.17,-0.21 2.51,-1.94 3.7,1.15 5.91,1.18 2.03,-1.31 2.68,-4.39 5.67,-3.96 2.31,-0.28 4.86,-1.95 4.49,-4.32 1.75,-2.97 4.98,-1.01 6.29,1.29 1.93,4.74 7.06,6.72 10.28,10.39 2.93,2.37 2.34,6.09 2.36,9.35 0.53,2.52 1.69,4.86 1.92,7.13 1.82,1.67 4.12,3.74 6.83,2.36 1.37,-1.24 4.51,-5.35 6.51,-2.84 1.18,1.97 2.1,5.63 -1.2,6.33 -1.85,1.04 -1.42,-3.67 -3.88,-1.61 -1.51,1.92 1.84,2.51 -0.11,4.51 -0.61,2.57 2.04,-0.86 0.82,1.98 -2.28,2.63 -0.38,5.59 -0.04,8.5 -1.15,2.51 -5.2,-0 -6.02,-1.11 -1.09,1.46 -1.67,-0.92 -3.54,0.54 -1.82,0.49 -3.31,-1.46 -5.44,0.01 -3.08,1.35 -6.52,2.81 -8.17,5.95 -1.31,3.55 -4.97,3.29 -8.01,2.77 -2.75,-0.48 -4.92,1.71 -7.44,1.75 -2.74,-0.25 -5.83,-1.37 -8.31,0.42l-0.52,0.24 -0.43,0.06 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6d993" original="#b6d993"
                                          id="jqvmap3_ro" class="jvectormap-region"></path>
                                    <path d="m419.98,434.43c-0.77,-1.6 0.33,-5.03 -1.67,-6.74 -1.14,-2.34 -7.05,-2.04 -4.41,-5.19 -0.49,-1.45 -2.46,-4.37 -1,-5.23 2.16,0.54 4.75,-3.78 2.92,-5.59 -2.57,-1.55 -5.66,-2.78 -5.98,-6.24 -0.97,-2.47 2.74,-1.99 1.69,-4.32 2.08,-0.06 3.2,1.11 1.22,2.59 -0.15,3.28 3.83,0.6 5.65,0.71 2.58,-0.64 5.13,0.94 7.65,0.08 2.61,-1.18 5.46,-2.28 8.27,-1.01 3.32,0.37 5.6,-2.51 6.93,-5.13 2.16,-2.35 5.29,-3.61 8.27,-4.56 1.69,0.75 3.92,0.92 5.2,0.32 0.77,1.61 2.46,-1.39 3.17,1.07 1.58,2.18 6.09,-1.71 5.26,2.45 0.21,2.63 -4.48,0.38 -4.02,3.94 -1.88,1.85 1.39,5.32 -0.17,7.14 -1.24,1.25 -1.7,3.03 -2.93,4.26 0.82,1.66 4.27,-0.37 3.64,2.02 1.44,0.86 3.71,1.89 1.23,2.18 -1.9,3.08 -4.18,-1.08 -6.49,0.5 -1.52,1.95 -4.37,1.58 -4.82,4.55 -1.37,1.04 -4.43,1.49 -2.91,4.13 3.08,3.26 -3.78,2.7 -5.13,4.68 -1.95,0.62 -4.22,-2.41 -5.93,-0.29 -2.04,-2.63 -5.18,-1.43 -7.46,0.15 -2.06,2.52 -5.54,1.17 -7.76,3.47l-0.43,0.06 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_bg" class="jvectormap-region"></path>
                                    <path d="m396.5,458.88c-2.16,0.08 -0.81,-2.55 -2.74,-3.41 -0.91,-2.13 -5.81,-2.06 -5.48,-3.81 2.36,-1.04 -1.62,-3.19 -0.48,-4.99 0.36,-1.26 2.66,-2.2 0.57,-3.3 1.39,-2.49 -3.57,-5.96 0.77,-6.52 2.37,-0.03 -1.92,-0.89 -0.55,-2.51 -0.14,-2.15 -3.24,-0.23 -2.21,-2.9 -1.48,-2.28 0.07,-4.41 1.36,-6.71 1.01,3.42 4.23,-2.13 4.66,1.78 1.21,1.69 4.6,1.07 3.88,4.25 -0.33,2.87 -0.02,5.6 0.51,8.19 0.21,1.77 2.38,5.51 4.15,4.74 1.69,-0.32 2.5,4.45 0.05,5.02 -0.86,1.75 -0.27,5.37 -3.24,5.56 -2.01,1.26 1.3,2.75 -0.81,3.98l-0.23,0.5 -0.19,0.12 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_al" class="jvectormap-region"></path>
                                    <path d="m378.18,234.33c-0.29,-1.42 0.77,-0.85 0,0z m29.34,-1.46c-2.55,-0.18 -3.15,-3.15 -5.39,-3.23 -0.21,-1.76 -1.21,1.44 -2.27,-0.65 -2.12,-1.63 -4.52,1.21 -6.27,2.48 -1.26,-0.67 1.67,-5.98 -1.81,-5.74 -1.1,1.92 -1.82,2.36 -3.83,1.3 -0.08,-2.54 -3.43,-2.95 -2.01,-5.67 0.96,-2.03 -3.8,-2.6 -0.62,-3.95 1.35,-0.61 4.23,-0.97 2.3,-2.67 2.82,-0.9 4.5,-2.4 7.47,-2.41 1.66,-0.56 1.5,-2.75 3.42,-1.67 0.91,-1.72 4.64,0.07 6.63,-0.66 2.13,-0.1 4.26,0.22 6.03,-1.29 -1.43,2.67 -1.02,5.84 -2.24,8.62 2.11,2.2 1.2,5.64 3.15,7.83 0.24,0.52 1.89,2.24 1.35,2.38 -0.73,0.83 -0.81,2.27 -1.35,2.68 1.66,2.85 -2.28,0.25 -2.89,1.26 -0.29,0.68 -0.83,1.4 -1.65,1.38z m-28.89,-1.28c-1.29,-0.43 -2.59,-1.4 -0.92,-2.29 -0.22,-0.67 0.59,-1.5 0.99,-0.78 -0.53,-2.4 4.69,-3.37 4.19,-1.27 0.07,2.48 -3,2.5 -4.26,4.33z m1.02,-7.14c-0.54,-0.34 -0.96,-2.14 -1.01,-2.27 0.8,-1.29 0.79,-1.32 2,-0.55 1.89,-0.4 1.35,1.06 -0.17,0.69 0.83,0.84 0.55,2.1 -0.81,2.14z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_ee" class="jvectormap-region"></path>
                                    <path d="m557.2,501.39c0.58,-2.8 0.32,-5.88 1.17,-8.53 -0.92,-2.02 1.77,-3.87 0.09,-5.88 -0.28,-2.6 2.65,-3.83 2.23,-6.01 1.03,-0.93 3.35,-2.1 2.42,0.09 1.64,0.57 3.96,0.89 3.49,3.25 -1.11,1.34 -2.61,3.51 -1.84,4.51 -2.48,0.69 -2.89,3.8 -1.53,5.08 -0.04,2.15 -2.43,3.34 -3.12,4.26 0.57,1.87 -1.28,3.1 -2.91,3.25z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_lb" class="jvectormap-region"></path>
                                    <path d="m225.99,427.08c-4.4,2.06 -0.81,-5.33 0.49,-0.98l-0.2,0.53 -0.29,0.45z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap3_ad" class="jvectormap-region"></path>
                                    <path d="m321.66,413.68c0.71,-2.83 1.59,1.21 0,0z" stroke="#333333" stroke-width="1"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-opacity="0.5"
                                          fill="#c6c6c6" original="#c6c6c6" id="jqvmap3_sm"
                                          class="jvectormap-region"></path>
                                    <path d="m273.92,416.64c-2.8,-1.65 2.23,-1.64 0.39,-0.13l-0.39,0.13 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap3_mc" class="jvectormap-region"></path>
                                    <path d="m268.7,344.38c-1.34,-0.37 0.48,-2.79 -0.9,-3.99 -1.47,-1.94 2.76,-5.38 1.98,-1.49 0.37,1.78 4.79,2.33 1.84,4.09 -0.47,1.66 -1.49,1.22 -2.93,1.39z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_lu" class="jvectormap-region"></path>
                                    <path d="m292.72,444.55c-0.12,-2 -3.86,-0.94 -2.75,-2.99 -2.34,-0.62 -0.11,-2.51 0.75,-3.57 0.35,-0.55 -3.76,1.07 -1.24,-0.63 0.32,-1.34 -2.6,-2.05 -0.51,-3.01 -0.25,-1.14 -1.13,-1.51 -0.02,-1.71 -0.89,-2.66 3.14,-1.71 3.48,-3.51 1.94,0.96 2.98,-0.2 2.33,-2.11 1.79,-2.18 -0.99,3.51 1.02,4.43 1.2,3.29 -2.09,6.35 -1.33,9.73 -0.95,0.89 -1.15,2.64 -1.75,3.36z m-58.87,-15.16c-2.27,-2.01 -5.59,-0.28 -7.2,-2.87 1.48,-2.11 -2.14,-2.13 -2.92,-2.19 -1.78,-1.34 -3.82,-2.36 -5.67,-3.53 -1.54,0.58 -1.53,2.27 -3.51,1.46 -1.54,0.07 -2.66,-0.59 -3.93,-0.35 -0.8,-2.33 -2.93,-1.69 -4.53,-2.09 -1.06,-2 -2.81,-3.32 -5.06,-3.18 -1.57,-1.15 -1.33,-1.7 -1.45,-3.5 -1.23,-0.24 -3.44,-0.96 -1.02,-1.55 3.04,-3.75 2.96,-8.84 4.5,-13.21 0.85,-1.4 2.99,0.68 2.08,-1.85 -1.2,-1.06 -2.14,-0.84 -1.15,-2.81 1.1,-1.59 0.63,-5.99 2.35,-6.1 1.89,1.55 0.82,3.87 1.88,5.79 -0.05,2.01 2.7,3.12 1.93,0.38 -2.25,-2.11 -0.08,-5.11 -2.23,-7.23 -1.52,-1.07 -0.74,-1.21 -0.52,-2.39 -2.12,-1.87 0.87,-2.79 -0.3,-5.08 -0.91,-0.78 2.06,-4.15 0.31,-2.92 -1.7,1.58 -2.8,-0.99 -4.34,-1.54 -1.66,-0.48 -1.34,-4.04 -3.07,-5.27 1.45,-1.37 2.03,-3.5 -0.17,-4.21 -1.28,-1.38 -1.85,-1.7 -0.64,-3.42 1.28,-3.05 -5.85,-0.88 -2.14,-2.3 -0.4,-2.26 -4.49,0.28 -3.4,-2.31 -0.36,-2.67 -3.56,0.62 -4,-1.74 -2.28,-0.09 -2.42,-4.2 -4.81,-1.84 -1.78,1.57 -0.33,-2.39 -2.37,-2.56 1.59,0.62 3.87,-0.51 1.92,-2.13 1.84,1.1 2.88,-0.7 0.65,-1.01 0.13,0.05 1.59,-2.28 -0.46,-1.5 -1.34,1.45 -4.19,-0.07 -1.73,-1.25 1.3,-0.76 2.79,-0.81 2.95,-0 1.4,-0.85 2.87,-0.97 3.66,0.09 0.65,-1.02 3.21,1.35 3.19,-1.26 2.43,-1.62 2.22,2.03 2.47,2.06 1.69,-2.75 1.86,2.19 3.17,3.11 1.26,-0.74 3.83,-3.16 3.73,-0.14 1.62,2.63 2.82,-1.65 4.78,0.11 0.83,-0.47 4.32,1.06 3.36,-0.07 -1.65,-1.65 -2.42,-4.02 -1.35,-6.19 0.76,-2.4 -2.42,-4.6 -1.19,-7.04 1.21,1.81 5.2,-0.98 3.31,2.03 -0.19,2.43 1.93,3.76 3.68,2.84 2.59,0.56 5.12,3.56 7.68,1.11 2.16,-0.17 1.32,-1.39 0.53,-2.64 1.54,-3 5.41,-2.03 8.05,-3.16 1.81,-0.67 4.58,-1.88 5.31,-3.4 -1.75,-1.03 0.04,-4.18 -0.3,-6.15 0.44,-3.1 4.2,-2.36 6.44,-2.8 0.98,0.77 1.49,6.24 4.58,4.17 1.46,-0.35 0.7,4.82 3.67,3.62 -0.14,3.07 3.12,1.53 4.18,2.82 -0.64,1.44 -0.56,1.83 -0.25,2.78 -0.88,2.67 3.93,2.4 4.83,0.49 0.88,1.69 -1.1,3.55 1.66,3.61 2.55,0.29 2.49,4.49 5.21,3.37 2.65,1.52 6.43,-0.33 7.5,3.53 0.45,0.9 2.96,3.41 2.01,0.96 0.54,-1.16 0.79,1.42 0.5,1.49 1.47,-0.3 3.92,-1.81 4.53,0.32 1.92,0.28 7.08,0.84 3.22,2.94 -2.39,2.02 -1.66,5.55 -3.51,7.88 -0.4,2.45 -0.29,5.21 -1.25,7.67 -1.85,0.33 -4.65,-1.22 -4.94,2.33 0.2,1.24 -1.59,3.49 -3.64,4.12 -0.97,0.48 0.4,3.01 -1.75,3.44 -3.21,1.4 -0.53,4.69 -2.87,6.5 1.14,2.08 4.46,-0.29 3.63,-2.44 2.64,-1.79 4.27,0.65 3.32,3.02 0.97,1.33 2.7,2.42 0.16,3.24 -1.7,2.56 4.01,4.8 1.9,7.11 -0.78,1.84 -6.17,0.54 -3.47,3.57 1.68,1.38 4.39,3.16 1.43,4.85 -1.24,3.13 2.12,7 5.6,6.15 2.64,-0.69 -0.62,4.28 -2,4.64 -1.17,-0.72 -4.03,-3.03 -4.38,0.05 0.55,1.28 1.71,2.84 -0.72,3.26 -2.25,0.54 -0.87,3.61 -3.15,2.9 -1.62,1.27 -2.66,0.82 -4.12,0.04 -1.35,1.82 -1.33,-1.1 -3.38,-0.87 -2.84,0.75 -0.64,-3.44 -1.53,-2.84 -0.63,0.89 -3.09,1.3 -1.09,0.56 1.49,-2.74 -3.49,-2.8 -2.54,-0.31 -2.24,0.5 -1.46,-2.79 -1.57,-3.36 -1.08,1.05 -1.96,2.65 -0.52,3.91 -1.04,-0.28 -1.31,-2.83 -3.36,-2.08 -2.5,-1.7 -5.52,-1.71 -6.96,1.2 -2.68,0.79 -5.03,2.02 -5.69,4.77 0.13,1.89 -0.47,3.75 0.65,5.49 -1.42,-0.84 -3.32,-0.38 -4.33,0.88z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#afcf98" original="#afcf98"
                                          id="jqvmap3_fr" class="jvectormap-region"></path>
                                    <path d="m296.51,373.48c1.45,1.4 -0.83,3.11 -0.11,0.58 0.04,-0.19 0.08,-0.38 0.11,-0.58z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap3_li" class="jvectormap-region"></path>
                                    <path d="m269.04,328.72c-2.4,0.87 -0.84,-4.47 0.3,-2.01 0.8,0.23 0,1.75 -0.3,2.01z m-0.07,-3.78c0.6,-3.32 -5.02,-1.6 -5.27,-4.51 -0.12,-2.74 -3.14,1.24 -2.06,-1.29 -0.99,-0.79 -2.22,1.2 -3.22,-0.45 -0.9,0.27 -1.14,2.68 -1.08,0.81 0.68,-2.17 -1.32,-2.87 -3.53,-3.17 2.34,0.11 2.58,-2.07 3,-3.35 2.89,-2.17 4.59,-5.57 4.61,-9.18 -0.19,-3.29 4.06,-0.89 5.3,-3.43 1.14,-2.76 4.56,-2.87 7.04,-3.65 2.21,-0.91 4.28,0.51 5.07,2.25 2.56,1.19 -1.21,4.26 -0.45,6.54 -1.09,0.31 -2.87,-0.17 -2.83,1.81 -1.46,0.58 -1.58,0.91 0.09,0.93 3.35,-0.05 2.57,4.59 -0.38,4.58 -2.35,0.19 2.62,1.25 -0.12,2.19 -2.05,1.07 -3.43,-1.35 -5.33,0.59 -1.38,2.19 2.97,4.39 0.94,6.8 -0.8,0.77 -1.72,1.2 -0.27,1.66 -0.44,0.36 -0.82,1.02 -1.51,0.87z m-14.99,-3c-0.33,-1.2 -5.07,-0.99 -2.8,-1.87 1.14,1.13 2.85,1.22 3.93,0.81 -0.06,0.56 -0.57,1.04 -1.13,1.06z m0.03,-2.7c-1.37,-0.05 -4.02,-1.94 -1,-1.43 0.49,-0.33 2.23,1.73 1,1.43z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b4d794" original="#b4d794"
                                          id="jqvmap3_nl" class="jvectormap-region"></path>
                                    <path d="m376.75,425.9c-1.98,-1.6 -4.83,-1.93 -6.41,-4.05 -1.67,0.65 -0.52,0.38 -0.54,-0.48 -1.09,-2.31 -4.84,-2.74 -4.68,-5.7 -3.06,-0.33 -4.09,-3.71 -6.36,-5.29 -1.63,-1.9 -4.06,-2.19 -3.82,-4.87 -1.04,-2.44 -3.06,-3.46 -4.21,-5.63 -0.7,-2.04 0.84,-4.87 2.73,-2.36 1.15,1.84 2.68,1.49 3.04,-0.59 0.75,-2.51 2.6,0.54 3.87,-1.57 1.61,1.11 3.76,0.32 5.58,0.98 1.67,0.69 2.8,0.63 3.98,-0.64 1.28,0.32 2.43,1.79 1.94,-0.33 2.34,0.41 3.8,0.76 5.26,2.77 1.51,0.59 4.58,-2.46 3.33,0.9 -1.48,2.62 -1.55,6.27 2.2,6.4 -0.16,1.48 3,1.5 0.7,2.04 -2.41,-1.63 -1.77,2 -0.04,2.77 1.22,1.2 1.32,2.1 -0.54,1.97 -0.8,1.43 -2.82,1.15 -3.55,0.9 0.15,1.26 1.77,2.85 -0.32,2.67 -1.22,1.98 -1.74,4.24 -3.03,5.92 0.2,1.48 1.25,2.79 0.88,4.2z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_ba" class="jvectormap-region"></path>
                                    <path d="m332.96,393.93c-2.25,0.07 3.69,-1.78 0.33,-3.25 -2.05,-0.05 -1.39,-3.19 -2.18,-3.5 2.21,-1.77 -0.2,-2.6 -1.36,-3.11 1.58,-3.35 4.85,-1.64 7.7,-1.58 3.3,1.9 3.73,-4.65 7.02,-2.86 2.43,0.1 4.45,-1.78 6.8,-1.33 -0.07,-1.25 0.26,-3.28 1.79,-1.82 0.58,1.34 2.29,2.96 -0.11,2.97 0.07,3.17 -6.44,2.43 -4.97,6.04 0.89,1.87 0.62,3.86 -1.85,3.13 -2.37,0.85 1.33,6.35 -2.15,4.17 -1.76,0.02 -2.78,0.57 -3.81,-1.48 -1.83,-1 -1.59,2.92 -3.88,1.76 -1.41,-0.46 -2.2,0.65 -3.34,0.85z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_si" class="jvectormap-region"></path>
                                    <path d="m403.18,443.19c-1.28,-0.84 -1.77,-0.72 -3.14,-0.4 -2.27,-2.33 -2.73,-5.58 -2.85,-8.64 -1.26,-2.44 2.39,-0.6 1.33,-3.13 0.23,-2.42 3.43,-3.85 5.06,-1.8 1.38,1.18 -1.35,-3.28 1.33,-2.73 2.83,0.6 4.67,-2.89 7.49,-1.79 1.51,2.18 4.77,1.95 5.79,4.72 1.29,2.63 0.37,4.95 -1.12,7.01 -1.05,2.69 -5.33,0.11 -7.05,2.7 -0.97,2.88 -4.09,3.39 -6.84,4.04z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_mk" class="jvectormap-region"></path>
                                    <path d="m375.93,426.49c-1.17,-0.64 -1.03,-0.77 0,0z m-5.08,-2.9c-0.73,0.27 -1.25,-2.08 0,0z m-2.28,-1.81c-3.23,-1.04 -5.06,-4.7 -8.53,-5.08 -1.74,-1.23 -4.13,-1.36 -6.19,-0.38 -0.54,-3.7 -5.51,-3.9 -7.37,-6.92 -1.68,-2.86 2.16,-0.38 2.91,-1.43 -1.18,-2.05 -5.06,-2.05 -5.62,-5.05 0.07,-2.45 -0.12,-5.23 -2.77,-6.41 -1.46,-3.02 -5.35,-1.33 -4.75,1.8 -0.1,1.22 -1.81,1.15 -1.78,3.18 -0.42,-0.02 -2.43,-3.25 -2.8,-4.77 0.5,-1.41 -1.33,-2.59 0.97,-1.85 1.93,-0.05 3.32,-1.26 5.49,-0.87 1.75,-0.28 1.19,-2.99 2.55,-0.54 1.83,1.65 2.98,0.1 5.14,0.7 1.63,-0.59 0.6,-2.35 1.05,-3.41 -2.13,-1.84 3.84,-0.57 2.93,-3.42 -1.1,-1.62 -1.88,-3.53 0.82,-4.04 1.16,-1.26 3.54,-0.9 3.14,-3.3 3.59,0.79 6.21,3.61 8.62,6.19 2.91,-0.18 5.33,2.55 8.31,1.69 2.32,0.95 5.06,-5.2 5.33,-0.4 0.15,1.9 1.2,2.64 1.4,4.46 1.55,0.76 2.24,0.37 1.04,2.01 -0.17,1.69 1.08,1.86 -0.44,2.99 -1.42,0.96 -2.53,-3.66 -4.34,-2.06 -2.98,-1.4 -5.14,1.63 -8.13,0.38 -2.22,0.17 -4.52,-1.28 -6.44,-0.34 -1.8,-0.84 -3.54,0.72 -3.99,2.64 -1.51,-1.59 -4.97,-3.78 -5.35,0.02 -1.16,3.92 2.99,5.58 4.38,8.58 -0.13,1.41 -1.05,2.05 0.83,2.59 2.9,1.5 4.8,4.21 6.98,6.53 2.65,1.59 3.98,4.49 6.78,6.28l-0.16,0.23 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_hr" class="jvectormap-region"></path>
                                    <path d="m311.37,281.37c-1.81,-0.13 -3.63,-2.95 -0.99,-2.75 0.71,0.89 2.21,0.72 1.2,1.27 0.93,0.68 0.95,1.07 -0.21,1.48z m2.12,-1.04c1.35,-0.18 -0.34,1.13 0,0z m0.84,-0.24c-0.07,-1 -2.35,-2.59 0.16,-1.62 2.08,0.28 -0.51,1.71 -0.16,1.62z m-17.99,-0.84c-2.31,-0.88 -6.15,-0.22 -4.5,-3.71 0.81,-2.84 -1.69,-4.3 -3.84,-4.7 -1.19,-2.12 0.77,-2.92 1.79,-2.7 1.1,-1.9 -0.71,-4.04 -1.69,-4.68 0.35,-1.37 0.2,-5.41 0.68,-4.97 1.59,3.78 6.34,-5.25 4.96,-0.56 0.24,2.86 4.45,-0.07 2.01,-1.61 0.04,-2.03 -0.06,-3.57 2.27,-2.05 0.18,-1.79 3.93,-0.45 2.6,-2.4 -2.36,-1.07 -4.97,1.4 -7.44,0.51 -0.9,0.41 -2.06,0.6 -1.03,-0.46 2.89,0.74 6.43,-0.56 7.07,-3.76 0.42,-1.7 4.2,-3.59 3.75,-0.9 2.01,1.66 -0.21,4.73 -1.55,6.01 0.4,0.87 0.32,2.52 0.39,3.1 -1.16,1.34 2.36,4.31 4.12,3.09 1.32,1.67 -1.85,5.56 -2.69,2.65 -3.21,0.21 -0.77,4.74 -2.69,6.35 -0.74,1.02 -5.24,-0.82 -2.77,1.37 1.61,1.85 3.89,1.32 5.37,0.39 1.04,1.32 2.66,0.54 1.88,1.61 2.2,1.44 0.71,6.32 -1.89,3.8 -0.99,-0.9 -2.97,-2.42 -3.55,-4.38 -0.8,-2.14 -4.39,1.02 -3.28,1.06 2.19,-0.86 -0.04,1.87 1.38,2.68 -1.87,1.01 -1.25,3.06 -0.58,3.35 -0.3,0.27 -0.55,0.59 -0.78,0.92z m18.96,-2.29c-1.92,-0.02 -1.04,-3.7 -3.92,-2.81 -3.51,-0.09 0.22,-3.64 -2.76,-5.02 -1.79,-1.21 3.2,0.15 3.13,-2.28 0.04,-2.46 4.91,0.23 1.92,1.9 1.06,2.45 3.33,-0.76 2,-2.36 -0.51,-1.34 -2.25,-2.02 0.21,-1.96 2.33,-0.37 1.21,1.23 1.29,2.13 2.22,2.03 -1.98,3.78 -1.88,4.86 2.05,0.87 2.04,2.76 -0.28,2.66 -0.97,0.83 0.11,2.08 0.29,2.88z m-25.23,-19.54c-1.89,-1.51 1.09,-5.6 1.21,-4.99 -1.52,1.21 -1.11,3.3 -1.21,4.99z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d994" original="#b5d994"
                                          id="jqvmap3_dk" class="jvectormap-region"></path>
                                    <path d="m558.98,364.3c-2.56,-0.91 -4.97,-2.14 -7.36,-3.43 -2.39,-1.15 -4.94,-2.06 -7.59,-2.35 -2.81,2.28 -5.5,-0.94 -8.06,-1.85 -1.23,0.3 0.78,2.15 -1.52,1.8 -2.42,-0.25 -3.69,-3.69 -6.4,-2.82 -1.31,0.16 -4.41,0.18 -1.55,-0.66 1.64,-0.7 0.81,-3.34 -0.75,-1.74 0.37,-1.63 2.93,0.94 3.87,-1 1.25,-0.31 2.74,-1.24 3.63,-1.06 1.16,-2.32 -3.44,-3.39 -1.08,-5.92 0.57,-0.81 -0.94,-4.08 0.12,-2.72 0.39,2.37 2.24,1.11 1.25,-0.78 -1.26,-3.41 3.86,0.53 3.04,-2.81 -1.97,-1.81 -4.99,-1.7 -7.55,-2.54 -2.06,-0.94 2.06,-1.24 1.86,-3.16 2.06,1.7 4.87,-1.76 1.32,-1.4 -0.21,-1.02 3.11,-2.69 3.56,-4.64 3.16,0.27 3.03,-5.1 -0.28,-4.48 -2.62,0.21 -2.08,3.91 -4.95,4.14 -2.31,1.85 -0.59,-0.97 -1.26,-1.15 -2.27,0.02 -1.28,-3.82 0.48,-4.34 1.4,-2.13 0.73,-5.08 4.3,-4.68 2.91,0.1 4.24,-2.66 2.99,-5.05 -0.44,-0.81 1.31,-4.54 -0.5,-3.12 -0.89,0.38 -1.08,-3.79 -3.06,-2.28 -2.61,-1.85 3.34,-2.5 1.03,-4.59 -1.03,0.14 -4.3,0.91 -2.02,-0.74 1.96,-2.14 1.02,-4.53 -0.68,-6.4 1.16,-2.59 -2.93,-0.35 -3.64,0.61 0.41,-2.95 -3.61,-0.32 -4.74,-2.01 -1.3,0.69 -2.17,2.73 -3.44,0.57 -1.62,0.46 -2.9,0.42 -4.52,-0.03 -1.18,0.97 0.35,3.57 -1.91,1.94 -2.66,-0.03 -3.84,-4.48 -6.19,-3.24 -2.12,0.99 -3.16,6.03 -6.01,3.79 -0.55,1.88 -3.23,-1.75 -4.12,0.93 -2.26,2.15 -4.17,-0.6 -4.14,-2.64 -1.31,-0.74 -1.67,-2.47 -1.76,-3.17 -1.84,0.68 -2.55,-1.54 -3.04,-1.81 -1.53,1.29 -5.9,2.64 -6.27,0.53 -0.46,-1.43 -3.35,-2.71 -0.58,-3.43 0.87,-2.91 -3.85,-2.55 -4.29,-5.27 -1.34,-1.28 -2.82,-2.7 -4.07,-0.62 -2.6,-1.29 -3.34,1.16 -4.86,2.57 -2.29,-0.64 -4.88,0.47 -3.99,3.28 -1.64,3.09 -5.33,-1.16 -5.28,-3.38 0.29,-1.54 -1.99,-0.85 -0.93,-2.73 -1.04,-1.23 -5.06,-2.53 -2.44,-4.58 2.85,1.31 6.86,-0.11 6.98,-3.34 2.36,-1.51 -0.16,-3.89 -1.6,-4.2 -0.58,-2.91 -4.71,-0.88 -5.61,-1.07 0.65,-2.69 -1.62,-3.41 -3.71,-3.4 -2.11,-1.16 -3.32,-2.8 -3.81,-4.83 -2.42,0.17 -3.41,-1.67 -2.18,-3.83 -0.02,-1.71 -2.9,-2.44 -1.99,-4.84 -0.01,-1.79 -0.45,-2.87 -2.15,-2.08 -2.12,-2.07 -5.85,-2.66 -7.51,0.31 -0.95,2.92 -2.17,-0.33 -1.92,-1.55 -1.94,-2.34 -4.43,2.65 -5.64,-0.22 -1.71,0.04 -3.09,1.26 -3.28,-1.31 -0.9,-2.65 -2.85,-5.01 -4.71,-6.53 -1.83,-1.02 1.04,-5.27 -2.45,-5.76 -1.67,-0.51 -0.04,-2.71 -2.19,-1.57 0.05,-1.42 0.26,-2.99 1.68,-3.72 -0.54,-0.99 -1.34,-2.16 -1.45,-2.96 -2.84,-0.69 -1.01,-4.26 -2.77,-5.86 -2.08,-2.24 0.85,-4.53 0.39,-6.92 -1.01,-2.41 3.22,-2.6 0.55,-4.16 -0.83,-1.3 -2.35,-4.31 0.18,-2.28 1.51,-0.56 0.02,-3.79 2.55,-2.16 2.03,-0.4 0.55,-4.34 3.6,-3.39 1.61,0.41 6.06,0.64 4.72,-1.87 -2.47,0.38 -3.46,-3.31 -5.66,-1.7 -1.73,1.59 -3.35,0.22 -4.28,-0.75 -2.83,1.04 -0.5,-5.97 -3.43,-3.33 -0.79,1.95 -3.72,3.09 -1.67,0.48 4.94,-7.07 7.08,-15.55 9.98,-23.55 0.44,-3.03 2.51,-7.51 -0.31,-9.8 -2.38,-1.89 -5.29,-2.93 -7.96,-4.32 -3.88,-1.06 2.38,-6.07 -1.12,-8.02 -2.45,-0.36 -4.96,-1.94 -3.33,-4.47 -1.48,-1.21 -6.02,-2.28 -3.05,-4.86 0.42,-0.7 -3.23,-0.64 -2.08,-2.79 0.39,-2.06 -0.85,-2.94 1.09,-3.89 -0.82,-2.4 -2.73,-4.51 -4.14,-6.68 -1.51,-2.32 -3.78,-4.06 -5.41,-6.21 -0.98,-3.34 2.21,-6.3 1.62,-9.59 -0.91,-2.31 -3.95,-2.73 -4.86,-5.04 -3.1,0.98 -6.11,-2.82 -4.58,-5.63 1.26,-2.13 -3.52,-2.39 -0.66,-3.49 1.51,-2.49 0.64,-5.59 3.12,-7.72 -0.6,-2.56 3.46,0.62 3.16,-2.41 -2.11,-2.17 1.85,-1.54 2.99,-1.35 2.03,1.63 4.11,1.29 6.52,0.08 0.37,0.23 -0.76,2.57 1.13,2.81 -1.22,0.77 -1.32,4.65 0.4,2.88 0.2,-1.73 1.36,-3.42 1.9,-5.04 3.21,0.08 6.07,-1.95 9.29,-1.34 2.75,0.76 5.58,1.26 8.28,2.2 2.14,0.82 4.03,2.32 6.18,3.01 2,-1.35 5.54,1.61 7.21,-0.07 2.23,0.7 3.31,3.46 5.54,1.69 1.16,1.01 0.65,2.43 2.18,2.82 1.01,2.1 3.8,2.21 3.29,5.21 -0.09,3.44 0.15,7.2 -2.11,10.07 -2.26,3.09 -6,5.79 -10.02,4.97 -2.84,-0.74 -5.34,0.99 -8.08,1.16 -2.01,0.97 -5.49,-2.15 -6.54,-0.13 -1.33,0.97 -2.24,-0.89 -2.89,-1.46 -1,2.57 -7.21,1.52 -6.06,-1.62 -0.53,-0.64 -4.07,0.19 -5.44,0.48 -1.33,1.22 -0,2.41 1.25,1.32 2.16,-0.38 0.62,2.19 3.06,2.74 1.23,1.53 6.57,0.25 5.42,2.51 -1.91,3.1 2.22,0.91 3.81,1.72 2.09,0.58 5.78,2.19 4.56,4.13 2.75,1.59 0.23,3.96 -0.48,5.25 2.3,-0.18 4.43,1.99 4.35,4.27 2,-0.84 0.78,1.8 1.68,2.47 0.1,3.23 4.49,3.53 6.69,2.22 2.28,0.22 3.06,3.83 6.02,2.68 3.14,0.7 6.51,-0.4 7.17,-3.81 0.24,-2.71 -4.02,-6.69 -5.49,-3.3 -2.65,0.34 -5.44,-2.93 -6.7,-4.13 2.45,-0.62 0.68,-2.65 0.87,-3.74 2.98,-0.53 5.18,2.7 8.25,1.24 2.42,-0.59 5.57,1.81 7.6,-0.26 0.47,-1.42 5.9,0.3 3.69,-2.76 -1.12,-2.61 -3.65,-4.39 -6.37,-5.3 -3.26,-1.55 -1.48,-4.68 -0.67,-7 0.13,-2.98 3,-4.72 3.48,-7.44 -0.29,-1.95 -0.01,-6.22 2.42,-3.58 1.94,-2.25 5.82,-1.29 7.83,0.68 1.2,2.1 3.32,0.53 1.22,-1.06 -2.48,-1.87 -1.81,-4.87 -2.24,-7.47 -1.88,-1.57 -2.53,-5.38 -5.87,-5.07 -3.66,0.72 -1.05,-5.18 -3.4,-6.67 -1.19,-0.92 0.46,-3.75 -1.48,-3.55 -1.01,-2.39 -5.64,-2.94 -6.17,-3.55 2.64,0.97 4.98,-0.76 6.95,-2.52 2.55,-2.21 4.69,1.32 7.17,1.82 2.66,0.14 2.98,2.58 0.58,3.55 -1.44,1.01 -3.37,2.5 -1.86,4.15 -2.05,2.82 1.45,5.04 4.18,4.46 2.24,0.66 3.9,4.74 5.89,0.83 -0.45,2.74 1.7,0.82 1.6,-0.76 0.67,-1.92 4.97,-2.44 2.12,-4.7 -0.88,-2.08 -0.93,-5.08 -2.83,-6.29 1.51,-0.41 1.74,-3.36 4.33,-3.14 0.74,-1.52 -4.26,-0.47 -1.65,-2.01 1.38,-2.03 1.95,-4.13 2.25,-6.48 -0.71,-3 2.32,-4.04 2.61,-6.78 0.79,-1.07 0.87,-3.3 2.02,-0.85 0.37,3.39 3.79,-1.54 1.28,-2.71 -2.87,-0.55 -1.44,-3.38 -0.47,-5.41 0.59,0.58 1.75,-1.54 1.49,0.66 0.07,2.26 4.9,2.03 2.07,4.51 -3.06,1.89 2.52,2.73 3.16,0.29 0.8,-0.58 2.28,-0.85 1.45,-2.12 2.18,1.11 3.08,-1.11 1.14,-2.24 -0.63,-3.15 1.27,-6.2 4.04,-7.12 3.15,-0.33 1.76,-4.5 2.46,-6.7 2.68,1.91 1.44,-1.23 0.17,-1.57 -0.24,-1.73 3.07,-1.64 3.49,-0.99 -0.52,3.68 4.93,5.45 5.98,1.6 -0.74,-2.19 -4.02,-2.52 -1.51,-4.94 1.37,-2.71 -0.97,-5.14 -3.64,-5.47 -2.06,-0.69 -6.98,-0.83 -4,-3.86 -2.84,-2.24 1.77,-2.66 3.14,-4.1 2.67,-3.27 6.84,-5.01 10.97,-5.41 2.08,0.66 3.04,-0.42 5.04,-0.78 3.26,-0.69 5.53,-2.7 8.88,-1.89 1.83,0.09 3.72,-0.92 5.18,-0.23 3.3,-0.51 -0.59,-3.78 0.31,-4.05 7.13,0.01 14.26,-0.01 21.38,0.01 2.09,0.14 -2,3.01 0.93,2.93 1.33,0.5 2.97,0.39 1.78,1.28 0.04,1.2 -0.09,5.95 -1.36,3.75 0.88,-1.97 -1.47,-3.03 -1.4,-0.65 -0.13,1.49 -3.77,0.21 -3.69,2.55 -3.37,1.5 0.23,4.73 2.72,4.05 3.82,-0.71 6.21,-3.84 8.09,-6.94 1.84,-0.32 4.98,-2.24 2.66,-4.31C557.34,3.94 555.66,1.55 558.62,2.18c40.17,0 80.35,0 120.52,0 0,32.42 0,64.83 0,97.25 -2.09,0.36 -2.95,2.3 -1.54,3.74 -2.44,-1.53 -2.16,1.82 -2.17,2.03 -1.83,-0.06 -0.41,-2.79 -2.86,-3.06 -0.55,-1.54 -1.56,-2.65 -3.54,-1.77 -1.52,-1.23 -4.42,-2.86 -6,-3.08 -2.3,1.54 0.4,6.71 -3.71,5.55 -1.63,0.21 -3.74,1.9 -3.4,2.86 -1.22,-0.25 -2.92,1.14 -1.43,2.07 -2.82,1.19 1.7,2.9 -0.94,4.55 -2.72,2.09 2.48,0.44 1.29,3.06 -2.53,0.4 -0.3,2.61 -2.09,4 -0.4,3.26 -2.41,5.93 -3.86,8.82 0.28,0.79 -3.1,0.12 -1.27,1.6 -1.02,2.01 -3.11,4.53 -0.2,6.39 -2.52,0.22 -3.43,3.38 -5,5.17 -0.91,1.5 1.12,2.54 -1.32,2.93 -1.23,2.37 -2.15,5.27 -3.97,7.32 1.46,1.7 -3.54,1.33 -2.2,4 0.89,0.84 -2.06,0.35 -2,1.51 -2.16,-0.19 -3.58,4.12 -1.57,4.8 2.75,-1.67 -0.46,5.07 2.92,2.57 1.47,-1.64 1.11,3.68 3.89,2.06 1.15,-1.3 4.64,-3.43 5.55,-1.97 -0.97,2.34 -5.83,2.91 -5.32,5.59 1.65,1.51 -1.67,5.32 2.05,4.87 0.58,1.25 3.67,-0.2 3.17,2.56 -0.46,2.07 -2.09,3.57 -1.96,5.92 -2.28,1.79 1.99,3.07 3.27,1.27 1.22,3.88 3.54,-2.53 5.73,-0.07 1.71,0.15 3.48,-3.04 4.82,-0.75 0.7,2.54 3.93,4.85 1.33,7.39 -0.96,2.05 -3.49,5.21 -5.83,2.98 -2.18,1.39 0.8,4.71 -0.35,6.74 -1.64,-3.35 -4.19,2.67 -7,1.13 -1.58,0.37 -1.77,-1.65 -2.62,-1.81 -0.7,0.72 -4.76,0.36 -3.34,1.66 -0.36,0.87 -3.77,2.22 -1.73,4.23 -0.31,2.89 -2.88,-1.51 -4.31,1.09 -1.46,1.61 -3.55,2.49 -3.46,4.75 -0.41,1.43 -0.54,3.48 -0.05,5.34 -0.27,1.74 -0.64,1.81 -2.46,1.7 -2.35,1.24 -5.67,-2 -7.94,0.36 -1.02,1.19 0.11,2.72 -2.11,2.54 -1.91,-2.74 -5.13,1.42 -6.94,-1.53 -3.68,-1.24 -4.83,6.16 -8.08,2.91 -0.68,-0.31 -3.05,-3.22 -2.23,-1.07 0.44,2 -3.21,4.32 -1.91,5.59 -1.58,-0.54 -1.24,3.52 -1.64,0.7 -1.39,-2.07 -3.9,0.94 -5.63,0.87 0.37,1.37 0.82,0.9 -0.34,1.77 -0.21,2.03 1.56,4.11 -0.43,6.09 -0.26,2.82 -3.85,3.15 -3.39,6.04 1.82,1.79 -0.1,4.43 -1.07,6.43 -3.76,0.87 1.99,2.12 2.03,4.1 0.89,1.78 3.76,2.19 1.71,4.57 -2.3,2.9 -5.15,-1.81 -7.83,-2.01 -3.78,-1.12 -4.32,3.77 -2.19,5.82 -2.31,2.78 -0.33,6.19 0.38,9.1 0.77,1.86 4.43,0.77 3.16,3.54 -0.62,2.49 -0.11,4.99 0.21,7.43 1.17,3.44 5.88,-1.22 6.9,2.2 0.63,0.39 -1.33,1.3 0.64,1.71 0.61,2 4.71,2.89 4.1,0.07 2.42,-0.19 4.16,-3.38 6.65,-1.26 2.61,1.3 4.67,3.68 7.51,4.49 2.44,-0.41 2.29,3.63 -0.15,2.17 -3.16,1.33 0.69,4.72 2.95,3.33 2.69,-1.74 4.67,2.16 2.98,3.28 -1.53,-1.48 -3.23,1.37 -1.51,2.46 -1.66,0.09 -1.17,4.59 -3.15,5.57 -2.16,-0.57 -0.01,3.21 -2.03,1.18 -1.51,-0.51 -1.63,0.74 -2.82,1.17 0.46,1.78 3.76,-0.82 2.44,1.78 0.45,1.46 -0.73,2.48 0.5,3.94 -0.91,1.42 1.06,4.29 -0.87,5.01 0.89,2.05 -1.39,4.46 -0.11,6.57 1.6,2.36 2.84,-1.08 4.63,0.84 2.19,0.61 6.36,2.5 5.42,5.48 1.51,1.9 3.6,2.8 3.89,5.79 1.08,1.98 3.28,1.24 4.3,3.24 2.25,0.68 4.45,1.39 6.37,2.79 1.16,1.48 3.78,2.23 4.69,2.86 -0.38,2.65 -2.37,5.25 -1.49,7.93 0.05,2.46 -6.1,4.34 -5.15,1.14 -2.52,-0.74 -5.24,-0.5 -7.55,-1.88 -1.49,0.54 -3.24,0.69 -4.5,0.55 -1.71,1.13 -6.19,1.11 -5.4,-1.84 -0.88,-3.94 -4.63,1.38 -6.95,-0.97 -1.81,-1.22 -2.73,1 -2.64,2.13 -3.4,-2.47 -4.1,3.12 -6.37,4.33 -1.56,1.14 -0.42,-3.07 -2.75,-1.69 -2.4,0.37 -5.28,1.01 -7,-0.66 -2.78,0.67 -5.63,0.98 -8.42,1.61 1.94,1.66 -2.76,2.56 -3.79,2.43 -2.67,-0.72 -5.06,0.99 -7.69,0.02 -2.34,1.37 -6.27,0.31 -6.05,4.11l-0.04,0.01 0,0z m57.81,-33.85c-0.89,-1.57 0.49,-2.17 0,0z m-241.23,-51.26c-1.5,-0.26 -4.88,0.4 -5.3,-0.46 2.59,-1.58 -0.9,-5.56 2.71,-5.44 2.09,-0.97 5.31,1.36 6.88,-1.15 -0.17,-1.75 -1.39,-4.59 1.04,-3 2.58,1.66 5.83,-0.05 8.09,1.03 2.4,1.17 -0.19,4.14 1.51,6.12 -0.91,2.05 -4.72,1.7 -6.85,2.38 -2.67,0.39 -5.38,0.53 -8.08,0.53z m245.17,-54.27c-0.96,-0.5 -1.79,-4.14 -0.7,-1.7 0.41,0.34 1.1,1.13 0.7,1.7z m15.47,-62.08c-0.5,-1.68 1.86,0.26 0,0z M392.43,81.96c-1.18,-1.24 -0.52,-3.74 1,-1.58 0.97,0.64 4.51,-0.85 3.11,1.22 -1.28,-0.1 -4.06,-2.2 -4.11,0.36z m69.72,-22.48c-3.13,-0.37 -5.18,-4.96 -3.51,-7.6 1.49,-0.95 5.9,-1.19 6.08,0.31 -0.75,2.23 0.93,5.01 -1.2,6.83 -0.37,0.32 -0.88,0.46 -1.36,0.46z m1.2,-32.66c0.64,-1.98 -0.94,-1.7 -1.81,-2.37 0.83,-0.97 3.57,-1.76 1.01,-2.23 -1.29,0.52 -2.78,0.7 -3.28,0.14 -1.2,0.89 -3.04,-4.18 -2.96,-0.9 1.94,3.97 -3.66,-2.01 -2.98,1.25 2.3,2.87 -2.86,2.37 -3.53,0.29 -1.84,-1.41 -2.9,-5.04 0.07,-4.98 -0.36,-1.21 -1.52,-2.86 -0.18,-4.45 -3.01,0.94 -0.61,-2.79 -2.49,-3.65 -1.26,2.21 -4.03,0.25 -1.58,-1.13 2.3,-1.91 -4.09,-1.91 -1.43,-4.6 0.66,-1.81 2.03,-2.29 3.79,-2.01 1.73,-0.33 3.25,0.66 4.85,0.17 2.53,-1.3 -3.03,3.08 0.48,2.2 3.11,-1.44 -1.22,5.41 2.65,3.83 2.34,0.52 1.33,4.72 3.21,4.64 2.81,0.65 4.59,3.49 7.55,3.98 2.95,1.5 6.52,1.02 9.42,1.43 -0.95,0.85 -5.31,2.46 -4.34,3.45 -1.86,0.24 -4.2,1.89 -2.01,3.36 -1.56,0.82 -3.63,-0.42 -4.9,1.06 -0.87,-0.61 -1.05,-0.3 -1.52,0.53z m23.35,-5.93c-1.68,-0.42 -4.33,-0.5 -2.76,-2.36 -1.89,0.07 -1.65,-3.14 0.36,-1.62 2.48,0.8 5.12,0.27 7.63,0.6 2.21,1.62 -2.46,4.83 -3.16,1.83 -0.45,0.12 -0.96,1.84 -2.07,1.55z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b2d496" original="#b2d496"
                                          id="jqvmap3_ru" class="jvectormap-region"></path>
                                    <path d="m343.65,509.08c-1.52,-0.23 -1.75,-0.24 0,0z m1.95,2.72c-1.32,-0.63 -1.5,-0.7 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_mt" class="jvectormap-region"></path>
                                    <path d="m385.29,433.13c-1.98,-1.45 -3.12,-5.3 -6.16,-4.27 -0.68,-0.6 -0.46,-1.87 -1.44,-2.17 0.16,-1.66 0.06,-3.3 -0.89,-4.86 1.96,-1.05 1.28,-4.74 3.12,-5.09 1.81,3.01 2.14,-1.15 0.71,-2.43 2.24,-0.2 3.4,-2.11 5.57,-0.36 3.49,0.56 2.95,4.72 6.22,5.9 -2.5,0.45 -0.84,6.17 -3.72,4.67 0.19,-3.37 -2.81,0.5 -2.99,1.87 -0.8,1.83 -2.3,3.26 -0.46,4.87 0.08,0.47 0.4,1.59 0.03,1.87z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_me" class="jvectormap-region"></path>
                                    <path d="m397.48,431.57c-0.16,-2.49 -1.05,-5.46 -3.99,-5.18 -0.83,-1.86 -3.16,-3.89 -0.74,-5.1 2.42,-2.35 -3,-3.15 -2.73,-5.8 -1.28,-2.34 -5.16,-1.7 -5.47,-5.07 -0.61,-1.48 -2.43,-2.36 0.08,-2.14 2.37,-1.69 -1.79,-3.25 -2.79,-4.49 -3.49,-0.35 0.76,-4.99 -0.07,-7.08 -1.54,-0.41 -2.38,-0.6 -2.22,-2.53 -0.29,-0.9 3.52,-0.03 1.84,-1.89 -1.99,-0.46 -4.18,-1.03 -2.61,-2.61 0.5,-1.92 -2.64,0.29 -1.69,-2.2 -0.12,-1.58 -1.93,-2.81 0.65,-3.27 2.64,-1.35 4.3,-3.64 7.52,-3.04 2.34,-0.11 4.56,2.67 6.11,3.82 1,0.92 0.22,4.94 3.24,4.94 1.65,0.3 5.5,0.5 3.47,2.78 1.27,1.27 0.97,1.07 -0.4,2.22 0.32,1.47 3.21,0.4 3.09,2.01 1.78,0.14 4.21,-0.13 4.93,1.74 2.85,0.45 1.17,-3.79 1.99,-3.56 1.66,0.7 3.37,1 1.04,1.99 -1.64,2.21 4.19,3.86 0.86,5.71 -2.2,2.75 0.34,6.72 2.98,8.19 2.92,0.51 3.82,2.98 1.52,5.06 -0.82,0.05 -2.7,-0.25 -2.65,1.85 -1.23,2.37 3.66,5.04 -0.48,5.54 -2.42,1.11 -4.61,2.18 -7.35,2.39 -1.32,2.74 -6.31,0.55 -6.16,5.74z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap3_rs" class="jvectormap-region"></path>
                                </g>
                            </svg>
                            <div class="jqvmap-zoomin">+</div>
                            <div class="jqvmap-zoomout">−</div>
                        </div>
                        <div id="vmap_russia" class="vmaps display-none"
                             style="width: 757px; display: none; position: relative; overflow: hidden;">
                            <svg width="757" height="300">
                                <g transform="scale(0.5059021922428331) translate(268.66833333333335, 0)">
                                    <path d="m34.939,403.74,2.6516,1.2627,3.6618,0.50507,1.7678-2.0203,2.1466,2.0203,2.3991-1.6415,0.25254-1.7678,1.6415-2.1466,3.0305,0.50508,3.7881-2.9042-0.50508-1.894-4.7982-0.50508,0.75762-3.1567-1.0102-0.63134,0.63135-2.2728-3.1567-2.7779,1.5152-0.50508,3.9143,0.88388,0-1.389-1.0102-1.2627,8.3338-0.25254,4.9245,5.4296,1.2627,1.894-0.37881,2.2728-5.3033-0.3788,0.50508,2.5254,1.5152,3.0304-1.0102,3.5355-2.3991,2.7779-1.2627,0.25254,4.5457,0.75761-5.5558,2.1466-0.50508,2.0203-0.75762,0.50508-3.0305,0.50507-0.25254,4.7982-1.2627,0.88388-1.1364,13.132-9.0914-0.12627-3.6618-2.2728-1.389-0.88388,0-11.617-3.283-5.9346,0.37881-2.9042,1.2627-0.37881z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_da" class="jvectormap-region"></path>
                                    <path d="M671.25,126.75l-1.44,1.06-1.25,1.63s1.44,0.87,2.16,0.87c0.71,0,2.69-1.97,2.69-1.97l-2.16-1.59zm18.47,12.09c-0.18-0.01-0.4,0.02-0.63,0.07-1.78,0.35-4.81,1.93-4.81,1.93s-1.41,1.1-2.12,1.1c-0.72,0-2.35-0.38-2.35-0.38-0.71,0-2.5,1.25-2.5,1.25l-1.4,1.78s-1.1-0.51-1.1,0.38-0.35,1.96,0.72,2.5c1.07,0.53,1.61,1.06,2.5,1.06s3.22-0.72,3.22-0.72l1.97-0.87,1.97,1.06s0.51-0.9,1.4-1.44c0.9-0.53,3.4-2.31,3.75-3.03,0.36-0.71,0.72-3.22,0.72-3.22s-0.11-1.36-1.34-1.47zm-19.81,7.1c-0.15,0.01-0.29,0.05-0.44,0.09-1.25,0.36-2.85,0.19-3.56,0.19-0.72,0-0.91,0.19-0.91,0.19s-0.88,1.58-1.59,1.93c-0.72,0.36-1.99,0.74-3.07,0.57-1.07-0.18-3.75-1.25-3.75-1.25s-1.93-0.02-1.93,1.59,3.03,3.41,3.03,3.41l1.06,1.4s-2.51,0.73-3.41,0.38c-0.89-0.36-2.65-2.16-2.65-2.16l-3.22-0.72s-2.88,0.2-2.88,1.1c0,0.89-0.68,2.67-0.68,3.56s-0.9,3.04,0.53,3.94c1.43,0.89,1.79,3.03,1.97,3.75,0.17,0.71,0.7,1.77,2.84,2.31,2.14,0.53,4.29,0.53,5,1.06,0.71,0.54,1.77,1.07,2.84,0.53,1.08-0.53,1.82-2.65,1.82-2.65l2.12-1.97s1.61-1.44,2.5-2.16c0.89-0.71,2.7-0.54,4.13-1.44,1.42-0.89,2.31-3.75,2.31-3.75v-5l-0.38-4.43s-0.68-0.58-1.68-0.47zm106.25,5.62c-0.45,0.09-0.75,4.1-0.75,4.1l-7.32,1.65-3.28,0.63-4.53-6.06-7.84-0.13-0.38,0.87-5.68,1.66-1.76,2.13-6.06,6.31v2.78l-2.15,1.91-3.29,5.03-4.93-2.38-3.41-0.37-1.75,2h-4.56l-3.41,1.78-1.75-1.53,4.28-2.91-2.28-1.62-3.03-0.13-8.84,4.03,1.9,5.44-0.87,4.78-2.66,2.91-1.65-2.13,3.03-7.47-1.75-0.37-2.66,4.03-3.03,2.03-1-0.75,1-3.16,2.28-0.74,2.91-2.66-7.1,1.75-9.22,5.31-6.68,0.25,3.65,3.66-3.65,3.4-0.5,3.03,0.37,1.16,3.91-1.78-1,4.03,4.81,2.91-0.91,2.9-2-1.37-3.68,1,1.28,3.41,2.4-0.26-1.03,2.66-3.9-0.5-4.28-1.66-3.53,0.26-2.41,3.15-0.63,4.06h-6.46l-1.76-1.53-2.4-2-0.5,4.41,0.87,0.87-0.12,1.41,1.65,0.87-0.9,2.54,1.66,6.18-3.29-1.4-1,1.15-9.87-5.31v-4.94l-2.25,0.13-1.78,2.41-2-3.41,3.65-0.63-0.5-2.9-4.43-1.66,0.75-0.87,0.12-2.53-5.28-4.04-5.31-2.53-1,3.66-7.35,0.65-2.37-1.65-4.19,2.15v2.13l4.19,4.69-10.94,5.31-10.28-1.16,0.44-4.4-12.07,0.19-3.96,3.78h-2.85l-1.09,1.09,2.66,2.87h-2.13l-2.91-2.06,1.19-2.09-0.87-1.38-1.54-1.78,0.07,2.28-1.5,1.07-3.85-1.32s-2.9,3.53-2.84,3.78c0.06,0.26,2.66,3.29,2.66,3.29l-1.41,3.34,1.59,2.09,0.19,2.78,7.38,5.82-0.32,5.47,2.53,1.9,1.63,2.53-2.53,2.72-4.41,3.03-0.69,2.63-4.81,2.78,0.25,6.12-2.25,1.1-2.97-1.28-5.65,4.75-4.44,0.09,0.06,1.97,5.38,6.59,1.78,20.1-6.35,1.97,4.19,3.4-1.78,4.19v1.25l7.16,8.84-4.57,6.69,0.97,1.6-2.4,1.87,0.09,2.25,5.63,0.34,0.71,0.72,9.1,0.19,3.31,3.31-0.53,1.6-3.31,0.34,0.19,3.94,4.03-1.06,5.06,6.59-0.53,5.53,3.84,5.19-1.97,3.4,0.53,2.13,7.69,6.53v4.37l-3.75,6.44,0.28,10.78,3.85,4.13,3.37-3.94,3.75,0.09,1.88-1.34,2.68-0.62,2.41-2.07,3.56,3.85,0.38,2.31,4-5.06,0.09-4.13,5.38-2.75-0.29-6.25,2.32-4.12,3.84-1.5,4.91,1.06,6.15,4.91,0.57,3.84,1.31,0.87,4.03-1.4,2.5-2.06,2.69,1.06,0.87,4.47,3.13,4.56,2.15,1.78v3.03l2.32,1.35,0.71,4.71,3.94,0.19,0.97,1.35,1.53,4.09,8.38-0.25,3.31-1.97,5.53,1.16,3.56,1.97,11-0.72,5.54,3.75,2.21,0.53,5.19-2.6h2.6l3.03,2.26,2.78-0.19,3.22-3.94,5.68-0.06,2.5-1.97h7.88l0.19-3.75,10.68-5.09,0.82-3.04-4.28-4.12,2.31-1.69,0.62-4.03-1.34-1.69-2.41,0.38-2.03-1.44,2.75-4.03-2.84-1.6,0.25-1.87,1.53-1.97-1.44-1.44-3.47-1.15-0.53-1.6,3.38-1.43-1.88-0.91-0.19-5.25-0.87-0.62-0.19-1.88,2.78-1.25-1.62-1.25v-2.94l5.47-1.97,3.12,0.16,0.25-1.78,6.53,0.09v-2.75l-1.25-1.53,1.16-1.25,3.47-0.62,3.31-2.22,1.34-6,5-0.44,0.1-2.06s-5.29-4.9-5.47-5.25c-0.18-0.36-0.88-3.94-0.88-3.94l-3.56-2.59v-5.97l2.94-7.16-1.69-9.19,0.78-3.12,13.5,0.72,0.25-5.28,5.19-1.16,3.47,1.87,0.81-2.31-2.41-3.69,1.69-0.62,0.19-2.75-7.16-8.5,0.1-4.37-3.13-1.5-0.09-4.04-1.78-1.15,1.09-2.13,3.81-0.47,1.35-1.78,4.28,0.38,0.09-2.44-3.37-1.5,0.15-3.31,5.47-0.53v-3.57l5.63,0.44,5.62-8.03,0.44-2.5-6.06-6.06-0.19-1.88,2.31-3.4-0.97-1.79-3.31,0.19-1.5-2.34,4.72-1.41-0.09-1.53-2.07-0.97-0.25-1.34,2.13-3.75,5.72-1.97-0.78-3.56,5.15,0.68-0.62-5.43,1.34,0.28,0.19-3.59-2.69-0.63-2.94-4.53-7.59-0.28-4.19-1.88,0.72-3.47h-3.12l-0.19-1.62,8.12-10.44,1.07-7.84s-9.81-5.72-10.25-5.63zm-135.1,8.56c-0.12,0.03-0.23,0.08-0.34,0.19-0.89,0.9-1.07,1.79-0.53,2.5,0.53,0.72,1.06,1.63,1.78,2.35,0.71,0.71,2.31,1.25,2.31,1.25s0.71-1.1,0.53-1.82c-0.18-0.71-1.97-2.84-1.97-2.84s-0.94-1.78-1.78-1.63zm28.94,7.35l-2.31,0.34s-1.07,0.91-1.25,1.63c-0.18,0.71-0.9,1.24,0,1.78,0.89,0.53,3.75,1.25,3.75,1.25s1.6-0.02,1.78,0.87c0.18,0.9,0.18,1.8,0,2.69s-0.53,1.78-0.53,1.78l0.72,0.72,1.93-0.53s0.74-0.72,1.82-0.72h2.65s1.44-0.53,1.97-1.25c0.54-0.71,1.97-1.25,1.97-1.25h2.69s1.41-0.52,0.87-1.59c-0.53-1.07-1.76-1.62-2.65-2.16-0.9-0.53-3.22-2.31-3.22-2.31h-2.5l-3.6,0.34-2.84,0.38-1.25-1.97zm-17,10.15c-0.12,0-0.22,0.01-0.31,0.04-0.72,0.17-1.44,1.4-1.44,1.4s0.37,1.78,2.16,1.78c1.78,0,2.3,0.55,2.65-0.34,0.36-0.89-0.87-2.31-0.87-2.31s-1.37-0.55-2.19-0.57z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d894" original="#b5d894"
                                          id="jqvmap4_sa" class="jvectormap-region"></path>
                                    <path d="m45.583,387.43-2.2728,2.6516-4.1669-2.6516-2.0203,1.1364-0.37881,5.8084-1.1364,1.389-2.2728-0.12627-5.9346-2.6516-3.0305-3.283,0.12627-4.9245,4.672,0.75761,0.37881-0.88388,2.5254-0.12627,3.283,1.5152,4.0406-1.894s-0.12627-3.5355,0.75761-2.7779c0.88388,0.75762,1.389,1.2627,1.389,1.2627l0.25254,3.5355z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_so" class="jvectormap-region"></path>
                                    <path d="m20.982,375.86c0.26786,0.35715,2.5893,4.7322,2.5893,4.7322l0.98214,3.9286,4.6429,1.1607,2.8571-1.0714,3.2143,1.5179,4.375-1.875,0.26786-3.125-5.9821-2.3214-1.875-5.0893-2.2321-1.1607-4.375,0.71429z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_kb" class="jvectormap-region"></path>
                                    <path d="m13.482,361.39,2.2321,8.4821,5.0893,6.25,4.375-2.6786,5.3571-0.89286,0.08929-3.3928,3.75-1.0714-6.6964-7.2321-2.2321,2.4107-2.8571,0.26786-1.6071-4.5536,0.44643-2.1429z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_kc" class="jvectormap-region"></path>
                                    <path d="m33.929,367.73-3.4821,0.98215,0.17857,3.75,1.5179,1.25,1.7857,4.6428,6.5179,3.0357,1.3393,1.3393,0.08929,3.0357,3.8393,1.7857,1.6071,2.5893,3.2143,0.625,0.71429-1.4286-2.8571-3.125,1.5179-0.53572,3.5714,0.80357,0.17857-1.1607-0.98214-1.3393,7.7679-0.0893,1.6964-1.5179,0.26786-3.5714-5.2679-7.5-0.17857-9.4643-3.4821-6.0714-4.9107-0.98214-1.5179-2.7679-5.0893-5.7143-0.98214-0.625-1.5179,1.3393-2.7679-2.0536-1.4286,0.80357-0.80357,1.0714-0.08929,1.6071,0.35714,1.3393,0.35714,1.1607-0.71429,1.6071-0.98214,1.4286-1.9643,2.2322-1.875,1.0714-0.71428,0.98214-0.98214,2.3214z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap4_st" class="jvectormap-region"></path>
                                    <path d="m21.607,356.48-0.08929,2.0536,0.98214,3.8393,0.35714,0.80357,2.2321,0.0893,3.75-4.5536,1.4286-1.9643,1.9643-1.0714,2.6786-4.0178-0.26786-3.3929,0.17857-1.6964,0.89286-1.5179,1.3393,0,1.7857,1.5179,1.3393,0,2.5893-3.0357,0.08929-1.9643-0.89286-0.98214-2.2321-1.3393,0.17857-2.9464,2.8571-3.125,0.08929-1.4286-2.7679-2.9464-3.75-0.71428-0.80357-0.89286,1.6071-1.25,0.17857-2.4107-2.1429-1.6072-2.5893-0.80357-1.6071-1.6964-1.25-0.98214-0.89286-0.0893-1.3393,2.2322-0.625,0.98214,1.0714,1.4286-0.35714,1.5179-0.80357,0.625-2.7679-0.26786-0.89286-0.89286-1.9643,0.0893-1.875,0.71429-3.0357,1.7857-1.6964,0-1.3393-1.4286-1.6071-0.625-1.1607-1.4286,0-2.6786-2.2321-0.26786-1.25,0.625-0.35714,2.9464-0.089286,13.214,0.71429,5.8929,0.98214,3.6607-0.089286,2.3214-0.625,2.7679-0.089286,2.4107,0.17857,2.0536,1.5179,0.89285,0.71429,0.625,1.6071,1.5179,0.89286,1.0714,0.89286,0.89286l7.947-4.27-0.804-1.25-0.357-1.43-5.089,2.68h-1.875l-1.25-1.875,0.35714-3.5714,6.25-1.4286,2.7679-2.3214,0.71429-2.5893-1.3393-0.80357-1.9643,0.44642-1.1607-1.5178-0.71429-2.6786-1.3393-1.7857-0.17857-1.25,0.08929-1.1607,1.3393-0.80357,1.3393,0.625,1.0714,1.3393,1.0714,1.9643,1.3393,1.7857,2.3214,1.3393,1.6964,0.89285s0.625,0.26786,0.71429,0.625c0.08929,0.35715,0.89286,2.6786,0.89286,2.6786v4.0178l-0.08929,1.3393-1.0714,1.0714-1.875,1.5178-1.6071,1.4286z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_ks" class="jvectormap-region"></path>
                                    <path d="m37.5,323.45,2.0536,0.98214,1.4286-0.17857,0.625-0.89286-0.44643-1.1607-1.25-0.89286-1.9643-1.3393-0.89286-1.1607-0.35714-0.71428,1.0714-1.4286l2.231-1.08,1.6071-0.26786,1.0714,0.35714,1.4286,1.3393,1.5179,0.35714,1.6964-0.89286,0.89286,0.44643,1.072,1.06,1.339,1.79,0.268,1.33,1.607-0.08,1.3393-0.80358,1.6964-0.0893,1.3393-0.0893,0.35714-1.5178,0.53571-1.4286,1.25-1.6071,1.3393-1.0714,1.6964,1.0714,0.71429,0.35714,0.89286-1.875,0.44643-0.71428,2.6786-0.26786,1.875-1.6964,2.3214-0.17857,2.0536,1.1607,2.1429,1.25,0.98214,0.53571,3.9286,0.0893h2.2321l1.5179-0.98215h1.3393l0.71429,0.625,0.26786,1.6964-0.08929,1.9643v1.875l-0.08929,1.0714-0.981,1.34-1.25,0.98214-1.25,0.71429-0.80357,0.35714-0.35714,1.25-0.44643,1.6072-0.08929,1.4286-0.44643,1.1607-0.625,1.4286-1.4286,1.5179-1.6964,0.53571h-3.125l-1.608-0.36-1.518,0.53-0.625,1.97-0.982,0.62-0.80357,0.53572,0.17857,0.89285,1.3393,1.4286,0.71429,1.4286-1.1607,1.4286-1.3393,0.89285-0.80357,1.7857-0.08929,0.80357,0.98214,0.53571,1.1607,1.1607,0.625,1.0714,0.80357,0.80357,0.71429,1.3393v1.0714l-0.71429,0.80357,0.53572,0.625,1.4286,0.35715,0.625-0.53572,0.71429-0.0893,0.35714,0.98214v1.4286l-1.3393,1.3393-2.1429,1.0714-2.0536,1.1607-3.3929,0.0893-0.80357,0.80357-1.3393,0.80357-1.696,0.46-1.429-0.71-1.696-0.71-0.893-0.9-0.178-2.23-0.179-1.52-1.696-2.14-1.1607-0.80357-0.17857-1.25-0.80357-0.89286-1.7857-0.0893h-2.7679l-2.8571-0.0893-1.3393-0.17857-1.6071-1.7857-0.98214-0.71429v-0.89286l1.3393-1.5178v-1.5179l-0.625-1.25-1.875-1.4286-0.71429-0.625,0.26786-2.2322,2.7679-3.2143,0.08928-1.6071-1.9643-2.2322-1.3393-0.89285-2.411-0.55-1.0714-0.35714-0.08929-0.71429,1.0714-1.0714,0.26786-1.1607z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6d993" original="#b6d993"
                                          id="jqvmap4_ro" class="jvectormap-region"></path>
                                    <path d="m44.554,348.71,0.98214,1.6071,1.1607,1.0714,1.1607,1.6964,0.80357,1.1607,1.1607,0.71429,2.5893,0.44643,1.3393,0.625,0.98214,1.6071s0.98214,1.7857,1.25,2.2321c0.26786,0.44643,0.98214,2.4107,0.98214,2.4107l0.17857,4.9107v3.2143l0.89286,2.2321,3.3036,4.1964,1.25,2.0536-0.17857,2.5893-1.4286,1.875,0.89286,1.3393,4.375,4.7321,0.53571,1.25,0.35714,0.98215,0.89286,0.53571,1.4286,0.0893,1.6071-0.26786,1.7857-0.53572,2.2321-0.89285,2.3214-0.26786,0.713-0.71,0.625-2.15-0.268-1.16-2.232-1.34-0.982-0.71,0.08928-1.3393,1.0714-0.625,1.7857,0.0893,1.4286-1.25-0.53572-0.71428-0.71428-2.0536-0.268-1.7-0.179-1.16h1.0714l1.6964,1.25,1.7857,0.80357,2.6786-0.17857h0.89286l0.53571-1.1607-0.17857-2.4107-0.08929-3.8393v-6.3393-0.98214l-0.08929-2.2321,2.9464-2.8572,0.17857-1.3393-1.4286-0.625v-3.2143l-1.0714-1.1607-1.1607-0.35715-2.5-0.17857-0.625-1.4286-0.17857-0.80357-1.25,0.26786-0.625,1.0714h-1.3393l-1.25-0.0893-1.071-0.98-0.804-0.71-2.321-0.27-0.98214,0.35715-0.71429,0.80357-0.71429,0.35714-0.26786,1.1607-0.35714,0.80357,0.35714,0.625,1.0714,0.35714,1.0714-0.44643,0.89286,0.35714,0.08929,0.98215-0.44643,1.5178-5,3.125-3.3929,0.26786-2.3214,1.3393-1.5179,0.53571-3.8393-1.7857-0.53571-0.35715-0.08929-3.3928-0.71429-1.4286-2.3214-2.2322-0.625-1.25-1.9643-0.80357h-3.5714z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_kk" class="jvectormap-region"></path>
                                    <path d="m86.873,350.94,1.6415-1.389,1.1364-0.63135,1.7678,1.2627,2.0203,0.63135,2.2728,0.50508,0.88388,1.0102,2.1466,0.88388,0.75761,1.1364,0.63134,1.1364,0,1.389,0,0.88389-1.5152,0.3788-1.1364,1.389-0.12627,1.0102,0.63134,1.389,1.0102,1.1364-0.37881,2.1466-0.75762,1.0102-1.7678,0.88389-0.25254,1.1364,0.50508,0.88388,1.7678,1.1364,2.2728,1.5152,1.389,1.6415,0.63134,1.0102,0,1.5152-1.0102,1.1364-0.25254,2.0203-1.0102,1.0102,0,2.2728,0,2.7779-0.75761,0.3788-1.7678-0.3788-1.894-0.75762-0.63134,0.37881-0.37881,2.1466,1.6415,2.1466,1.1364,1.2627,0.88388,1.0102,0.50508,0.63134,0.12627,1.2627-3.9143,0.25253-3.0305,0.63135-2.1466,0-1.894-1.2627-2.0203-1.5152-5.4296,0-1.0102-0.37881-1.1364-1.1364,0.37881-2.9042-0.88388-1.0102-2.2728-1.6415,0-1.6415,1.0102-0.3788,1.5152,0,1.389-1.0102-0.63134-1.389-0.75761-4.0406,0.63134-0.3788,1.2627,0.75761,2.9042,1.389,2.0203-0.25254,1.2627-0.12627,0.50508-1.6415-0.25254-5.4296,0.12627-5.0508-0.25254-4.2931,2.1466-2.2728,1.0102-1.1364,0.12627-1.389-1.2627-0.50508-0.25254-2.1466z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_as" class="jvectormap-region"></path>
                                    <path d="m21.786,356.21,2.4107-1.4286,2.5-2.6786,0.35714-2.1428-0.26786-3.9286-1.0714-2.7679-2.9464-0.98214l-2.412-1.78-2.232-3.75-1.5179-1.1607-1.3393,0.71428-0.17857,2.1429,1.6071,1.875,0.80357,2.5893,1.1607,1.6964,1.6071-0.35714,1.5179,0.44643-0.44643,2.9464-2.9464,2.3214-3.394,0.71-2.8571,0.35715-0.17857,3.8393,1.0714,1.7857h1.7857l5.3571-2.9464,0.35714,1.7857z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_ad" class="jvectormap-region"></path>
                                    <path d="m85.893,313.18,1.5179-0.98214,1.875-0.0893,1.1607-1.0714,1.1607-1.6072,0-1.25,1.1607-0.98214,1.9643,1.25,2.5,1.9643,3.3036,2.1428,3.9286,1.5179,1.4286,1.5179,0.625,2.1428,0.44643,1.4286,2.8571,0.35714,0.44643,1.4286,2.5893,0.80357,1.7857,1.7857,1.6964,1.6964,0.17857,2.2322-1.5179,1.25-1.6071,2.2321-1.4286,1.3393-0.26786,1.25,0.89286,2.2321,2.9464,1.875,1.6964,1.875,1.7857,1.1607,1.25,3.3036,1.0714,1.875,0.0893,1.25-0.71428,0.53572-1.3393,0.44643-0.71429,0.53571-2.8571,0.26786-4.6429-0.0893-1.6964,0.26786-0.71429,1.6071,0,2.8572-0.17857,1.1607-1.6964,1.25-1.3393,0.98214-4.0178-0.0893-1.0714-0.0893-1.3393-3.0357-1.4286-1.0714-1.875-1.0714-1.0714-0.625l-2.256-0.46-2.054-1.25-1.071-0.18-1.1607,0.625-0.98214,0.71429-1.25,0.26785-2.1429-0.0893-0.89286-1.1607-0.35714-1.25-1.4286,0.26786-0.89286,1.1607h-1.25l-1.875-0.71428-1.25-0.80357-1.3393-0.35715-1.4286,0.17858-1.4286,1.25h-0.89286l-1.4286-2.5-1.25-1.4286-1.0714-0.71428,0.448-1.44,0.893-1.52,1.607-1.43,0.179-0.89-1.6964-2.1429-0.44643-1.0714,1.4286-0.80358,0.625-1.875,0.625-0.53571,1.25-0.35714,1.6071,0.0893h3.0357l1.7857-0.625,1.9643-2.5893,0.89286-4.0179,0.625-1.4286,2.8571-2.0536,1.1607-1.6964,0.35714-3.3036v-2.2322z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_vl" class="jvectormap-region"></path>
                                    <path d="m70.089,310.77,0-6.0714,0.08929-1.1607,3.75-3.2143,2.5-3.6607,1.3393-1.4286,0.35714-1.875,2.4107-0.71428,0.35714-2.5893,0.625-1.7857,1.0714-0.35714,0.625-2.0536,1.3393-1.7857,1.1607-1.0714,0.98214-0.53571,0.89286,1.1607,0.44643,0,0.71429-1.0714,0.53571-0.71428,1.1607-0.17857,0.89286,0.89285,1.25,1.1607,1.4286,1.4286,1.1607,1.5179,0.80357,0.89285-0.26786,2.1429,0,1.6071,1.875,1.0714,2.3214,1.3393,0.80357,1.3393-0.0893,1.7857-0.89285,1.5178-0.44643,0.98215,1.5179,1.25,1.875,1.7857,1.9643,2.2321,1.3393,1.6964,1.1607,1.9643-0.26786,2.3214,0,2.0536-2.1429,1.0714-0.71428,0.17857-4.2857-1.875-2.6786-1.7857-2.1429-1.4286-1.6964-1.1607-0.53571-0.17857-0.71429,0.80357-0.44643,1.25-1.4286,1.9643-1.6964,0.44643-2.8571,0.80357-3.5714,1.1607-3.2143,0.0893-2.5-0.17857-2.3214-1.25-2.3214-1.0714z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap4_vn" class="jvectormap-region"></path>
                                    <path d="m63.304,272.29-5.4464,3.3036,0.08928,2.6786,1.6964,1.875,0.08929,3.125,0.44643,1.6964,2.8571,1.6071,2.8571,0.44643l1.608,2.23-2.5,3.3036-0.35714,2.1429,1.0714,1.6071,2.3214,1.5179,0.17857,2.9464,1.1607,1.5179,0.71428,0.89285,4.7321-4.375,3.75-5.4464,2.0536-0.89285,0.80357-4.1072,1.0714-0.89285,0.53571-1.3393-2.5-2.8571-3.5714-4.1071-2.7679-0.26786-2.9464-1.1607-2.6786-1.6964-2.5893-1.6072-1.9643-1.6071z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_bl" class="jvectormap-region"></path>
                                    <path d="m63.482,271.84,0-4.6429l-0.357-1.61-1.786-1.97-0.714-1.07,1.3393-1.0714,3.75-1.3393,2.7679-1.3393,2.6786,0.0893,0.53571,1.0714,1.25-0.0893,1.7857-1.1607h0.80357l0.98214,0.44643,1.4286,1.6071,0.53571,0.80357,0.08929,1.6964,1.0714,0.89286,1.0714,0.71428h0.89286l1.0714,1.25,0.17857,3.2143v2.4107l-0.89286,0.98214v1.5179,1.1607l1.0714,1.25,1.1607,0.98214,0.89286,0.17857,1.5179,0.53571,1.0714,1.6072,1.6071,1.5178-0.71429,1.1607-0.80357,0.89286-0.89286-0.80358-1.9643,1.25-1.4286,1.1607-0.53571,0.80357-3.4821-4.1071-2.2321-2.3214-0.98214-0.53572-3.3036-0.625-2.8571-1.5178-3.6607-2.1429-2.4107-1.9643z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_ky" class="jvectormap-region"></path>
                                    <path d="m74.732,258.27,1.0714-1.875,2.2321-0.26786,0.89286-1.6071,0.89286-0.53572,1.9643,0.89286,1.6964-0.0893,1.6071-0.71429,1.0714-1.5179,0.89286-0.53571,0.98214,0.17857,1.3393,0.98214,1.9643,0.89286,1.1607,0.89286,0.35714,0.89285,0.71429,1.3393,0.17857,2.0536,0,3.6607,0.98214,1.7857,1.4286,1.875,0.80357,1.25,0.71429,1.7857-0.26786,1.5179-3.9286,1.875-1.9643,0.98214-1.0714,2.1429-1.875,1.0714-1.875,1.0714-2.4107-0.89286-1.9643-1.6071-0.44643-1.6964,0.44643-1.9643,0.44643-0.89285,0.08928-4.4643-0.89286-1.6964-1.7857-0.53571-1.7857-1.4286-0.08929-1.6072-1.3393-1.5178-1.6071-1.6964z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_or" class="jvectormap-region"></path>
                                    <path d="m86.875,278.45,1.5179,1.875,1.0714,0.89286,1.1607,0.71428,1.1607,1.0714,2.5,2.2321,1.25,1.5179,0.625,1.4286-0.44643,2.5893,0.53572,0.625,2.5,1.3393,1.875,1.7857,1.0714-0.17857,1.0714-0.625,0.44643-0.80357,0.0893-5.8036,0.35714-0.71428,1.4286-0.80357,2.3214-0.17857,2.0536-1.1607,1.3393-0.44643,0.17857-1.6964,0.625-1.3393,1.25-1.5179-0.80357-1.1607-2.6786-0.98215-0.53571-0.53571-0.17858-0.71429,1.0714-1.3393,0-1.6071-2.1428-0.35715-1.0714,0.44643-1.6072,0.80357-0.98214,0.89286-1.1607,0.625-1.4286,0.0893-1.3393-1.5179-1.6964-1.6964-0.80357-0.98214-2.4107,0.89285-3.125,1.6964-1.1607,1.6072-1.6071,1.4286z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_lp" class="jvectormap-region"></path>
                                    <path d="m93.482,256.3,3.2143-2.0536,0.98214-0.17857,1.6071,0.80357,0.98215-0.80357,0.71428-1.0714,3.125,0,1.6072,0.625,2.0536,0.35714,1.4286,0.80358,2.4107,0.35714,1.4286,0.71428,0.53572,1.0714,0.98214,1.0714,1.25,1.4286,0.71429,1.6072-0.35715,1.6964-0.98214,1.1607-0.71428,1.6964-1.3393,1.9643-1.6964,2.0536-1.0714,1.875-0.71428,0.98215-0.53572,0.35714-1.7857,0-2.5,0.89286-1.5179,1.0714-1.3393,0.26785-2.0536-1.3393-2.0536-2.5893-0.26786-2.0536-0.53571-1.4286-1.6071-2.5l-1.413-2.14-0.179-2.23z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap4_tl" class="jvectormap-region"></path>
                                    <path d="m67.679,258.62,0.26786-1.7857,2.3214-1.5179,0.44643-1.1607,0-1.4286-1.6071-1.9643-1.7857-2.1429-1.6964-1.9643-2.3214-1.875-1.5179-0.89286-1.6964-0.26786-0.89286-1.1607,0.17857-2.3214,1.3393-1.6071,3.125-2.1429,2.6786-1.875,0.89286-1.7857,0.98214-0.71428,1.6964,0.26786,0.625,1.25,0.625,1.5178,1.0714,2.2322,1.1607,0.80357,5.8929,0.26785,2.1429-0.35714,1.4286,0.53572,3.125,0.89285,2.3214,0,0.71429,1.9643,0,2.2321-0.17857,1.1607-0.98214,1.5178-0.71429,0.53572-0.26786,1.4286,0.26786,1.5179,0,1.25-0.80357,1.4286-1.4286,1.5178-1.7857,0.71429-1.6964,0.17857-1.7857-0.71428-1.4286,0.71428-0.26786,0.89286-2.4107,0.80357-1.0714,1.4286-1.3393,1.25-1.4286,0.17857-1.4286-0.71428z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap4_bn" class="jvectormap-region"></path>
                                    <path d="m89.196,239.61,1.6071-1.25,1.6071-1.3393l1.161-0.27,1.429,0.63,0.80357,1.4286,1.0714,1.25,1.7857,0.80357,1.7857,0.35715,3.125,0.0893,1.875-0.0893,1.6071-1.0714,2.4107-0.0893,1.4286,0.44643,0.98214,2.0536,0.26786,1.4286,1.25,0.625,1.6071,0.98215,0.98214,0.80357,0.53572,1.25-0.53572,2.0536-1.0714,1.7857-1.4286,1.9643-1.1607,1.25-0.89286,0.44643-3.75-1.25-2.6786-1.0714-2.6786,0.0893-1.875,0.44642-1.0714,1.25-1.5179-0.44642-1.0714,0.0893-1.0714,0.80357-2.0536,1.0714-0.89286-0.89286-1.0714-0.80357-1.9643-1.25-1.5179-0.89285-0.89286-0.44643v-1.0714-2.4107l-0.08929-0.625,1.1607-1.6964,1.0714-1.875v-1.7857l-0.26786-1.6071z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_kj" class="jvectormap-region"></path>
                                    <path d="M79.375,237.55,80,235.95,80.179,234.52,79.732,233l-0.08928-1.4286,1.5179-1.3393,0.71429-1.6071,0.08929-3.125,0.35714-1.875,2.4107-2.5,2.5-1.9643,1.875-1.7857s1.875-1.3393,2.2321-1.5179c0.35714-0.17857,2.5-1.5178,2.5-1.5178l2.5,0.0893,3.0357,3.4822,1.875,3.4821,2.5,3.6607,1.4286,0.89286,2.7679,0.53571h2.0536l0.80357,0.71429,1.1607,1.875,1.1607,1.3393,1.25,1.6071,1.0714,1.4286,0.17857,1.3393-0.98214,1.25-1.875,0.89285-1.875,0.53572-0.89286,1.25-0.44643,0.89285-1.875,0.44643-1.7857,0.625-1.6072,0.35715h-3.0357l-3.75-0.80358-1.7857-1.7857-1.4286-1.3393-1.1607-0.26785-1.1607,0.71428-2.2321,1.5179-1.1607,0.44643-1.7857-0.44643-4.1071-0.98214-2.4107-0.35715z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_sm" class="jvectormap-region"></path>
                                    <path d="m116.07,234.16,3.5714,0.26785,2.3214-0.89285,1.4286-0.44643,0.53571,0.625,0.0893,1.7857,0,1.1607-0.17857,1.3393,1.5178,0.89286,2.9464,0.44643,1.7857,0.89285,2.0536,0.89286,2.7678,0.89286,1.7857,0.26786,1.25,0.53571,0.26786,1.6071-0.0893,1.5179-0.44643,1.6964-1.5179,0.625-2.1428,1.1607-1.6072,1.3393-0.0893,1.25-0.625,1.7857-1.1607,1.5179-0.35714,1.6071,0.17857,1.6072,0.0893,0.89285,1.1607,1.0714,1.0714,0.625,1.1607-1.0714,0.625,0.44643,0,1.5179-0.0893,3.2143-0.44643,1.1607-1.3393-0.44643-1.875-0.17857-1.6072,0.17857-0.80357,0.89286-2.0536,0.0893-1.6071-0.35714-1.25-0.71429-1.0714-1.1607-1.6071-0.625-1.6964,0-0.44643,0.80357-0.17857,1.1607-1.0714,0.53571-1.4286,0.0893-0.80357-0.80358-0.17858-0.625,1.1607-2.4107,0.26786-1.9643-0.53572-1.6964-1.1607-1.5179-1.1607-1.5179-1.0714-0.89286,0.625-1.25,2.5-2.9464,1.1607-2.6786-0.71429-1.7857-1.6071-1.6071-1.6071-0.98215-0.53572-0.35714-0.625-1.875-0.80357-1.25-0.80357-0.80357,0.625-1.5179,2.5893-1.3393z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_mc" class="jvectormap-region"></path>
                                    <path d="m114.55,265.59-1.9643,2.6786-2.1429,3.125-0.625,2.7679-0.80357,1.7857,0.17857,0.80357,1.6964,0.71429,1.9643,1.3393,0.44643,1.5179-0.26786,0.89286,1.4286,1.1607,1.9643,0,1.1607,0.71429,0.0893,1.875,0.44643,1.1607,1.25,0.44643,1.5179-0.625,1.9643,0,1.5179,0.98214,0.625,1.7857,1.0714,1.1607,2.6786-0.17857,3.125,0,2.9464-2.0536,3.0357-2.9464,1.5179-2.2321,1.0714-1.7857-0.98214-2.2321-0.53572-3.125-2.0536-2.0536-1.25-1.6964-0.44643-2.8571-0.53571-1.6072-0.35715-0.98214-2.1428-0.35714-3.4822,0.26786-0.625,0.80357-2.1428-0.17857-1.875-0.71429-1.875-1.0714-1.9643-0.89286-1.0714,0.35715-0.80357,1.4286-1.4286,0.89286-1.6071-0.44643z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_rz" class="jvectormap-region"></path>
                                    <path d="m112.77,279.43-1.6964,2.1429-0.35714,1.7857-0.80358,0.89286-2.6786,0.98214-1.875,0.44643-1.5178,0.71429-0.71429,1.4286,0,2.1429,0.26786,2.3214-0.71429,1.875-1.5179,0.53571-0.44642,1.4286-0.44643,1.6964-0.625,1.1607,0.08928,0.625,2.3214,2.1429,2.2321,2.1429,1.6072,2.2321,1.4286,2.0536,0.98214,0,2.1429,0,1.9643-1.25,2.5-1.25,1.6964-1.0714,4.0179-0.26785,1.0714-0.98215v-3.6607c0-0.35714,0.0893-2.3214,0.0893-2.3214l1.5179-1.1607s0.71429-0.71429,0.80357-1.0714c0.0893-0.35714-0.26785-4.6429-0.26785-4.6429l1.4286-1.0714-0.80357-2.1428-1.7857-1.4286-2.3214,0.26786-0.89285,0.625-1.1607-0.80357-0.89286-1.3393v-1.3393l-1.875-0.80357h-1.3393l-0.89286-1.0714-0.26786-1.3393z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_tb" class="jvectormap-region"></path>
                                    <path d="m44.107,152.55,0,2.2322,0.53571,2.5,2.0536,5.1786,1.4286,3.4821,1.9643,3.6607,2.5,1.0714,3.75-0.44642,1.9643-1.3393,0.625-1.7857-0.44643-4.2857-0.89286-2.8571-1.5179-1.6071-2.4107-0.53572-0.98214-0.71428,0-3.0357-0.80357-1.4286-1.6964-1.6071-1.6071-0.26786-0.35714,1.25-0.625,1.3393-0.625,0.89285-1.4286-0.35714z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap4_kn" class="jvectormap-region"></path>
                                    <path d="m95.268,213.98,0.35714-2.1428-0.26786-2.1429-1.4286-1.875-1.3393-1.4286-0.08929-1.6964,0.98214-0.71429,0.17857-1.6964-0.89286-0.98215-1.25-1.875,0-4.1964,1.5179-0.89285,3.75-2.2322,0.80357-2.4107,0.53572-1.7857,1.875-1.25,2.4107-0.0893,1.3393-1.6071,0.98214-1.6964s1.25-0.625,1.6072-0.80357c0.35714-0.17857,2.8571-0.71429,2.8571-0.71429l1.5179-0.0893,1.0714,0.53571-0.625,1.5179-0.71428,0.89285-0.17857,0.98215,1.6071,0.26785,1.25-1.7857,0.98214-2.0536,1.1607-1.5179,1.6071-0.71428h1.6071l1.5179-1.5179,1.1607-0.625h1.4286l0.98214,0.98214,0.625,1.5179,0.98214,1.6071-0.26786,1.6964-0.89285,0.98214-0.35715,1.3393-0.80357,1.6071-0.17857,1.1607h-1.4286-0.80357l-0.71429-0.53572-0.80357,0.53572-0.625,0.80357-0.53571,1.5178-0.53572,2.1429-0.0893,2.5-0.35715,1.875-1.1607,1.25-1.3393,0.98214h-1.7857l-1.5179,1.3393-0.53571,1.7857-1.3393,0.53572-0.44643,1.0714-0.17857,1.4286-1.7857,0.89286-1.7857,0.80357-0.625,1.6964,0.625,1.5178,0.625,0.625-0.26785,1.4286s-0.0893,0.44643-0.44643,0.80358c-0.35714,0.35714-1.1607,1.3393-1.1607,1.3393l-1.4286,0.80357-2.3214,0.89286-1.0714,0.0893-1.1607-0.89286-0.89286-0.89286z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_ps" class="jvectormap-region"></path>
                                    <path d="m123.12,188.27,1.5179,1.25,2.1428,0.35714,2.1429,0.17857,1.25,1.1607,2.5,0.53571,2.3214-0.0893,1.0714-0.89286,0.44643,0.625,0.0893,1.7857,2.1429-0.53571,2.3214,0.0893,0.80357,0.80358,0.17857,2.5,0.17857,2.5,0.53572,1.0714,1.3393,0.17858,1.3393,0.44642,0.26785,2.1429,0.71429,1.6964,0.98214,0.80357,0.44643,2.9464,0.0893,2.2321,0.89285,1.4286-0.53571,0.98215-0.71429,0.53571,0,1.6071,0.17858,1.5179,1.4286,1.3393,0.625,0.53571,0.0893,1.9643,0,1.9643-0.17857,1.3393-1.25,0.53571-0.71428-0.26785-0.625-0.80358-0.71429-0.80357-0.17857-1.1607-0.98214-0.80357-0.80358-0.625-2.0536,0-1.5178-0.53572-0.53572-0.35714-1.5178-0.53571-0.71429-0.26786,0-0.44643s-0.26786-1.25-0.26786-1.6964c0-0.44643-0.0893-2.0536-0.0893-2.0536l-0.625-0.98214h-1.7857l-0.89285-0.44643-0.44643-0.98214-0.98215-0.625-0.53571,0.625-0.89286,1.0714-1.6964,1.4286h-2.1428c-0.35715,0-1.5179,0.0893-1.5179,0.0893l-0.71429-1.0714-1.0714-0.71428-2.3214-0.17857-2.6786-0.0893-1.5179-0.44643-1.3393-0.98214-2.3214-0.44643h-2.1428l-0.89286-1.1607-1.25-1.0714-0.53571-0.71429-1.1607-0.71428,0.98214-2.7679,0.71429-0.44643,1.1607-1.5179,1.0714-1.0714,2.0536-0.625,2.5-1.9643,0.625-1.9643,0.0893-3.5714,0.98214-2.5893,1.0714-1.25,1.1607,0.26786z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d894" original="#b5d894"
                                          id="jqvmap4_no" class="jvectormap-region"></path>
                                    <path d="m98.661,216.66,3.2143-0.625,2.2321-1.6072,1.3393-1.6071,0.17857-1.4286-0.80357-1.4286-0.26786-1.3393,0.35714-0.89286,1.4286-0.89285,1.6964-0.625,1.1607,0.44643,1.5179,1.5178,1.0714,0.98215,0.98215,0.53571,1.6964,0.17857,2.4107,0.35714,1.3393,0.98215,1.3393,0.26785,3.2143,0.44643,1.5178,0,1.25,0.71429,0.80358,0.71428,1.875,0.35715,1.7857-0.17857,1.875-1.6072,1.25-1.25,0.71429,0.44643,0.625,0.80357,1.4286,0.44643,1.4286,0.17857,0.53571,1.5179,0.17857,2.4107,0.35715,0.80358,1.1607,0.71428,1.4286,0.80357,1.0714,0.26786,1.875,0.35714,0.98214,0.26786,1.25,1.0714,0.44643,1.3393,0.98214,1.0714,0.80358,0.53572,1.7857-0.35715,1.3393,0.0893,1.25,0.71429,1.6071,0.89285,0,1.5179-0.625,1.6964-1.25,1.6071-1.6071,0.44643-1.25,0.98214-1.5179,1.3393-0.89286,1.0714-0.44643,0.71428-0.26785,1.5179-0.44643,1.0714-1.25,1.4286-0.53572,1.4286-0.35714,2.0536-2.0536,1.9643-2.0536,1.3393-1.0714,0.17858-0.53571-0.71429-0.26786-1.7857-1.6964-0.71429-3.8393-0.89286-3.8393-1.6071-3.0357-0.80357-1.5178-1.0714-0.0893-3.0357-0.35714-1.6964-3.3036,0.80357-3.4822,0.26786-1.3393-0.89286-3.4821-4.4643-1.5179-2.0536-3.3036-0.625-2.7679-0.53571-1.4286-1.7857z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b4d794" original="#b4d794"
                                          id="jqvmap4_tr" class="jvectormap-region"></path>
                                    <path d="m137.41,247.73,1.6072,1.7857,2.0536,1.25,1.1607,1.0714,1.3393,0.35714,0.80357,0.89286,0.0893,1.5178-0.89285,1.7857-0.35715,1.0714,1.25,0.625,1.7857,0.26785,1.0714,1.1607,0.17857,1.9643,0.98214,1.875,1.0714,1.25,1.3393,1.25,1.3393,1.3393,1.3393,1.1607,1.7857,1.875,0.89286,1.3393-0.17857,0.98214-0.89286,0.71429l-0.18,0.98,0.53571,0.71429,0.44643,0.71428,0.0893,1.6072-1.7857,0.53571-2.2321-0.0893-1.1607-1.0714-4.4643-0.0893h-5.1786l-1.7857,0.53571-0.71429-1.6964-1.6964-1.9643-1.6071-2.6786-0.80357-4.1964-0.0893-4.1071-0.17857-2.0536-0.44643-0.44643-0.71428,0.44643-1.1607,0.26785-1.4286-1.25-0.26786-2.5893,0.71429-2.0536,1.1607-2.0536,0.44643-1.7857,1.3393-1.0714z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_vm" class="jvectormap-region"></path>
                                    <path d="m127.05,289.96,1.6964,1.7857,2.0536,1.5179,1.25,0.98214,1.6964,0.625,1.25,1.875,0.71429,1.6071,0.26785,1.9643,0.98215,0.98214,1.0714,1.0714,2.6786,0.17857,1.6964,0.0893,0.625,2.1429,0.89286,1.7857,1.6964,0.71429,2.1429,0.26785,1.4286,1.0714,0.625,1.0714-1.5179,0.89286-0.89286,0.98214,0.0893,4.1071-0.26786,3.4822-2.7679,1.25-1.0714-0.0893-0.89286,1.6071-1.9643,0.98215-1.1607-1.7857-0.98214-0.98214-5.9822-0.0893-1.1607-1.875-0.89286-0.89285-3.125-0.71429-0.98214-1.6071-1.25-1.6964-2.1429-0.71429-2.4107-1.3393-1.6071-1.0714-2.5,0.0893-0.71429-1.875,0.26786-2.5,1.1607-0.89285,3.8393-0.80357,0.89285-2.4107,0-3.4821,1.3393-1.6964,1.3393-1.6071-0.26786-2.5893,0-1.9643,1.1607-0.89286z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_pz" class="jvectormap-region"></path>
                                    <path d="m107.23,308.27-0.17857,3.0357-0.26786,1.25-2.2321,1.1607,1.4286,1.6964,1.0714,3.2143,2.2321,0.71429,0.98215,0.80357,0.89285,1.0714,1.7857,0.625,2.5893,2.5,0.89286,1.0714,0,1.875-1.5179,2.0536-2.4107,2.8571-0.44643,1.25,0.44643,1.6964,0.71429,0.89286,2.1428,1.1607,4.0179,3.9286,1.7857,4.5536,1.25,1.4286,1.25,1.3393,0.26786,1.9643-0.71428,2.5-0.53572,2.4107,0.26786,1.7857,0.89286,1.0714,1.6071,0.44643,1.6964,0,1.6964-1.1607,1.25-1.0714,0.44642-2.6786,0.0893-1.875,2.2321-0.625,3.3036,1.25,1.6964,0.35714,1.6072,0,1.3393-1.5179,0.44643-0.53571,1.6071,0.35714,1.3393,1.0714,1.5178,0.89286,4.6429,0,1.1607-1.1607,1.3393,0.17857,0.89286,0.80358,1.6071-0.53572,0-1.7857-0.89286-1.9643-0.35714-1.3393-0.17857-3.9286-0.0893-2.0536-0.71428-1.25,0.0893-2.8571-0.35714-1.6071,0-2.5-0.80357-1.3393-1.1607-1.6071-2.5-1.0714-1.6072-2.0536-2.5893-0.0893-1.0714-0.35714-1.7857-1.6964-0.625-1.25-0.44642-0.89286-1.7857-2.4107-5.625-0.26786-0.53571-0.17857-1.9643-2.5893-3.125-0.89286-2.2321-2.9464-6.1607-3.3036-2.3214,0-1.0714-1.6964,0.44643-2.5-0.80357-0.35714-3.8393,2.1428-1.5179,0.35715z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap4_sr" class="jvectormap-region"></path>
                                    <path d="m127.59,290.05,1.875,2.1429,2.6786,1.7857,1.7857,1.1607,1.7857,2.7679,0.44642,2.4107,2.0536,2.1429,2.5893,0.0893,1.6071,0.26786,0.89286,2.2321,0.71429,1.4286,2.0536,0.89286,1.7857,0.35714,1.25,0.625,0.53572,0.80358,5.8928,0.17857,2.6786-3.5714,0.35715-0.53572,0.71428-1.3393,0.0893-2.1429-0.0893-1.9643-1.7857-0.98215-0.35714-2.5-0.0893-0.80357-1.6964,0,0,0.17857-0.80357,0.89286-1.3393,0.80357-5.2678,0-2.5893-2.3214,0.17857-3.5714-1.1607-1.0714-0.17857-0.80358,1.0714-1.0714,0-1.6072-2.5893-0.53571-1.7857-0.0893-0.80357-1.25-0.71429-1.6964-1.25,1.1607-2.1429,2.3214-2.4107,1.5178-1.5179,0.98215-2.9464,0.26785z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap4_mr" class="jvectormap-region"></path>
                                    <path d="m159.11,299.07,1.3393-0.89286,2.9464,0.44643,1.3393,0.44643,1.0714-1.3393,0.26786-1.7857,2.2321-1.1607,2.2321-2.2322,3.125,0.0893,2.6786,0,1.25,1.5179,0.35715,2.9464-0.17857,1.5179,0.35714,1.25,0.71428,1.1607-0.0893,0.71428-1.3393,0.625-4.1071-0.0893-1.3393,0.53571-0.80357,0.80357,0,0.89286,1.1607,0.71428-0.17857,0.89286-1.3393,1.1607-1.7857,1.25-2.1429,0.98214-1.3393,0.44643-1.3393-1.3393-2.5-0.44643-0.98215-0.625-0.98214-1.3393-0.80357-0.80357,0.80357-3.5714z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_cu" class="jvectormap-region"></path>
                                    <path d="m158.57,305.32-1.875,2.6786-0.98215,1.4286-4.8214-0.26785-0.80358,0.26785-1.7857,1.4286-0.80357,1.1607,0,2.3214,0,2.5893,0,1.6964-1.7857,1.4286-1.0714,0.26786-0.89286,0-1.25,1.25-1.25,1.0714-0.625,0.26786,0.89286,1.9643,1.6071,1.6071,2.3214,0.44643,1.5178,0.17857,1.25,1.6072,1.5179,0.80357,2.1429,0.17857,0.89286-0.625,0.0893-1.875,0.17857-1.6964,1.0714-1.6964,0.35714-1.3393,1.3393-0.26786,0.80357,0.53571,1.3393,0.625,1.875-0.17857,1.3393-0.98214,1.0714,0.17857,1.6964,1.4286,2.0536,1.875,1.5179,1.6072,0.80357,1.4286,2.3214,0.17857,1.1607-1.5179,2.8572-2.0536,2.0536-1.1607,0.26785-2.3214,0-3.5714-1.875-1.1607-3.6607-0.0893-2.0536-1.4286-0.98214-1.1607-2.5-0.26785-0.98215-1.5179-3.0357-1.5179-0.80357-1.5179-0.625-2.0536z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_ul" class="jvectormap-region"></path>
                                    <path d="m150.98,329.96,1.3393,2.1428,0.71428,2.8572,0.44643,2.8571,0,2.1429,0.625,2.3214-0.0893,2.8571,0.35714,2.4107,0.53571,2.1429,0.625,1.9643,0.71429,0.98214,5.8929,0.0893,3.0357-1.6071,1.25-1.9643,1.9643-0.35715,1.6964-0.0893,2.1429-1.4286,1.4286-0.89286,1.25-0.17857,1.6072,0.625,1.7857-0.17857,0.80357-1.875,1.0714-2.3214,4.375-2.5893,1.7857-1.4286,1.1607-2.0536-0.625-1.5179-0.80357-1.7857-0.35715-2.5-1.1607-1.25-0.71429-2.4107-3.6607-0.26785-2.3214-1.6964-1.4286-0.80357-3.5714,2.3214-1.9643,2.2322-2.4107,0.0893-0.98214-0.98214-2.2321-2.4107-2.4107-1.875-1.0714-1.0714-0.89285,0.26785-1.6072,0.71429-1.6964-0.0893-1.5178-0.80357-1.0714,0-0.625,0.98215-0.53572,1.0714-0.80357,1.5179-0.17857,1.3393,0,0.98214-0.0893,0.71429z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_ss" class="jvectormap-region"></path>
                                    <path d="m155.89,352.82,0.53571,1.4286,0.71429,1.6071-1.0714,1.6072,1.0714,1.4286,3.0357,0.17857,1.9643-0.35714,2.5,0,0.17857,2.3214-0.89286,2.6786,0.35714,1.0714,3.5714,1.6071,2.1429,1.4286,0.17857,3.5714,0,4.1071,0,1.4286-1.25,0.89286,0,1.9643,0,0.71428,0.71429,1.0714,1.0714,0.89286,1.7857-2.5,0-1.4286,0.89286-0.89286,1.4286,0,1.0714,2.3214-0.17858,1.4286-0.71428,1.25-0.35714,1.4286l0.36,1.43,1.25,0.89286,2.3214,1.25,1.7857,0.89286h1.9643,2.5l1.4286-1.0714,1.6071,0.17857,1.9643,1.0714,0.89285,1.6071,0.35715,1.7857,1.0714,1.25h1.7857l0.89286-0.89285h1.25l1.6071,0.53571,1.25,1.4286,0.53571,2.6786-0.17857,3.5714,1.7857,1.6072,1.4286,0.89285,1.0714,1.6072,1.0714,0.53571,1.6071-0.71429,1.4286-0.17857,1.6071,1.4286v1.25l1.9643,1.7857,1.25,0.71428,2.1429,0.35715h2.6786l1.4286-0.17857,1.25-0.89286,1.25-1.0714,0.89286-0.89286-0.17858-1.25-2.3214-3.2143-1.0714-1.25v-3.75l-0.71429-2.1429-0.17857-2.1429,1.0714-2.3214,1.9643-1.4286-1.4286-1.7857-3.0357-2.8571-1.9643,0.35714-1.4286-0.17857-0.89286-1.25h-2.3214l-1.4286,1.25-1.0714,1.25-0.53572,1.0714h-2.5l-1.0714-2.5-3.2143-0.17858-2.8572-0.35714-0.89285-2.5-1.08,0.33-1.79,0.89h-1.4286l-0.17857-1.0714,1.4286-1.7857,2.5-2.5-0.53-1.78-0.71-0.36v-0.89286l2.5-1.9643,0.35715-1.0714v-2.1429h-1.7857l-2.1429,0.71429-1.6071,0.17857-1.4286-1.9643-0.53571-2.3214,1.25-1.7857,1.0714-0.89286v-1.6071l-0.35714-2.3214,1.0714-0.89285,0.17857-3.0357-1.25-1.9643-1.7857-1.7857-0.17857-1.6071,1.0714-2.8571,1.6072-2.5,0.89285-1.7857-0.53571-1.25-2.1429-1.6071-1.4286-2.1429-1.25-1.4286-1.6071,1.7857-1.4286,1.4286-4.1072,2.5-1.4286,1.9643-0.35714,1.9643-0.53571,0.35714-1.9643,0.17857-2.1429-0.35714-1.9643,0.53571-1.9643,1.4286-2.8571,0.53572-1.0714,0.71428-1.4286,1.7857-2.1429,1.25h-2.5z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_ob" class="jvectormap-region"></path>
                                    <path d="m156.25,271.57,4.2857-0.53571,2.5-1.4286,3.5714-0.71428,2.6786-1.0714,1.25-0.17857,2.3214,1.25,1.7857,1.0714,2.6786-0.17857,1.4286,0,2.6786-1.0714,1.25,0.17857,1.4286,1.9643,1.0714,2.1429,2.5,0.17857,2.5,1.7857,1.0714,1.25,0.89286,2.5,1.25,1.4286-0.17858,1.6071-1.25,0.89286-1.7857,0.17857-0.71429,0.89286-1.6071,0-0.71428-0.89286-1.7857-1.0714-1.6071,0.71429,0,1.6071-1.25,1.4286-1.25,0.53572-2.1429-0.89286-2.1429-1.6071-3.0357-0.89286-1.7857,0-1.0714,0.89286-0.71429,1.7857,0,2.8571-0.17857,2.8572,0.53571,1.0714-1.0714,1.4286-2.3214,1.4286-1.4286,0.89285,0,1.4286-0.35715,0.89285-0.89285,0.71429-2.8572-0.35714-1.0714-0.17858-0.89285,0-0.71429,0.53572-0.38692,0.34215-0.69448-0.12626-0.44194-0.50508-0.50508-3.0936-1.5784-0.12627-1.5784,1.4521-2.2097,0.44194-3.9775-0.25253-2.0834-2.0203,0.1894-3.3461-1.2627-1.389-0.0631-0.75761,1.0102-1.4521-0.0631-1.0733-3.7249-0.63135-1.1996-0.75761-1.0733-2.7148,1.1364-2.336-1.1996-3.3461,2.0203-0.50507,3.283-0.12627,5.9978,0.12627,1.2627,0.88388,2.0203,0.1894,2.0203-0.75761,0.12627-1.5152-0.94702-1.4521,0.63135-1.0733z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_nn" class="jvectormap-region"></path>
                                    <path d="m181.51,286.29,2.2728,2.336,2.4622,2.0834,2.7779,1.1364,2.9673,0.0631,2.4622,2.0834,1.5784,1.6415,0.44194,1.3258,0.63134,0.94702-0.3788,1.6415-0.56821,1.1364-0.0631,1.8309-1.5152,1.389-0.88388,0.56821-1.4521-0.12627-1.1996-1.5152-1.1996-0.44194-1.389-0.82075-1.7046-0.12627-0.50508,0.88389-1.7046,0.88388-2.5885,0.12627-1.9572-0.82075-1.1364-0.69448-0.88388-3.0305-0.37881-4.7351-1.1996-1.4521-4.0406-0.0631-1.3258-0.1894-0.63134-1.0733,0-2.0834,0.0631-3.0936,0.37881-1.8309,1.0102-1.0733,0.82075-0.63134,2.5885,0.3788,2.2728,0.88389,2.9673,1.7678z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap4_ml" class="jvectormap-region"></path>
                                    <path d="m160.93,308.14,0.0631,1.1364,0.44194,1.0733,0.88389,1.0102,1.5152,0.63134,1.8309,1.4521,1.5152,0.75762,1.389,0.44194,1.4521,1.0733,1.389,1.0102,2.4622,0.44194,1.4521,0.0631,1.7046,0.88388,0.12627,2.2097-0.37881,2.9042,0.44195,1.4521,2.0834,1.1996,1.0733,0.75761,2.9042,0.18941,0.82075,0.69448,0.56821,1.7046,1.3258,2.1466,0.63134,2.5885,0.88389,1.7678,1.6415,1.894,1.389,2.2728,1.6415,1.1364,0.88388,0.88388,1.1996,0.0631,2.9042-1.8309,2.9042-2.7148,0.44194-0.63135,0-1.894-1.0102-1.0102-0.0631-0.88388,1.8309-0.25254,1.2627,0.31567,0.75762,0.56822,1.3258,0.3788,1.6415-0.31567,1.1996-0.69448,2.9042-0.12627,1.5152-0.37881,0-0.94701-0.37881-1.2627-1.1996-1.5784-0.63134-1.2627-1.5152-0.44194-0.88389-1.2627s1.2627-1.0102,1.5784-1.1364c0.31567-0.12627,2.2728-0.75762,2.2728-0.75762l0.0631-1.4521s-1.1364-0.18941-1.389-0.50508c-0.25254-0.31567-0.69448-0.94702-0.69448-0.94702l2.0203-1.3258,2.0203-1.389,0.12626-1.1364-0.69447-0.82075h-1.5152l-0.69448,0.0631-1.1364,1.3258-0.56821,0.69448h-1.894l-0.12627,0.88388-0.12627,1.3258-0.82075,1.1364-1.5152-0.12627-0.75761-1.4521-1.1364-0.94702-0.82075,1.0102-1.7678-0.31567-0.56821-2.2728-1.4521-0.88388-0.63135-1.2627,0.12627-1.3258-1.1364-1.3258,0.0631-2.6516,0.12627-3.0936,0.63135-0.94702-0.25254-1.0102-0.69448-1.0733-0.56821-0.56821-1.0102,0.44194-0.88388,0.37881-1.0102-0.12627-1.0733-0.88389-0.88388-0.82074-1.8309-0.69448-1.4521-0.44195-0.94702,0.94702-1.8309,0.75762-1.8309,0.1894-1.6415-0.31567-1.9572-1.0733-1.389,0.50508h-2.7148l-2.0834,0.0631-1.389,1.1364-0.0631,0.88389,0.69448,0.50507,0.12627,0.82075-0.82075,1.0733-1.5152,1.2627-2.6516,1.0733-1.5784,0.69448-1.1364-0.75762-2.0834-0.82075z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_ta" class="jvectormap-region"></path>
                                    <path d="m144.26,252.7,2.0203-1.1364s0.94702-0.50507,1.1996-0.50507c0.25254,0,2.5885,0.31567,2.5885,0.31567l2.7148,1.1364,2.3991,1.1364,1.2627,1.1996s1.4521,1.0102,1.7046,1.1996c0.25254,0.18941,1.4521,1.2627,1.4521,1.2627l1.7046,0.63135,1.1364-0.88388h0.88388l0.50508,0.82074,0.1894,1.1996,1.0102,0.75762,1.5152,0.82074,1.0102,0.63135,0.44194,1.0102-0.69448,1.0733-0.12626,0.88388,0.75761,0.37881,0.88388-0.56821,1.389,0.63134,0.69448,0.94702,0.25254,1.2627-0.25254,0.50508-1.894,0.69448-2.9673,0.82075-3.0936,0.50507-2.3991,1.5152-3.4724,0.50508-0.94702-0.12627-1.7678-2.3991-3.5987-3.4724-2.7148-3.3461-0.82075-2.7779-0.88388-1.0102-2.1466-0.44195-0.69448-0.56821,0.50507-1.4521,0.56821-1.3258z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_iv" class="jvectormap-region"></path>
                                    <path d="m154.11,228.33,1.7678,1.5784,1.9572,0.50507,1.7678,0.50508,1.3258,1.6415,1.9572,1.5784,1.5784,0.0631,1.0733-0.69448,0.82075,0.31568,0.3788,1.4521,0.12627,3.4093-0.0631,2.6516,0.25254,1.5152,0.88388,1.0102,0.56821,0.94702-0.37881,1.0733-1.7046,1.1364-2.7148,1.3258-3.283,2.2097-1.6415,1.0733-3.3461,0.88388-2.4622-0.1894-2.1466-0.63135-2.6516-0.69448-2.1466,0.63135-1.8309,1.0733-1.7046-0.88388-1.4521-1.0102-1.894-1.1364-1.1364-1.1996-0.25254-1.3258,0.56821-1.4521,2.0203-0.88388,2.2097-1.1996,1.6415-2.7779,1.0102-2.9673,1.1996-1.2627,0.75762-2.4622,1.6415-1.8309,1.9572-1.8309,2.7148-1.5152z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_yr" class="jvectormap-region"></path>
                                    <path d="m168.7,245,1.389,0.12627,1.2627-0.75762,1.5152-1.389,1.894-0.75762,1.894,1.1364,1.894,1.5152,2.5254,0.12627,0.63135-0.75761,0.75761,0.50507,1.2627,2.1466,2.2728,2.2728,1.5152,1.5152,1.1364,1.894,0.3788,2.2728,1.2627,1.7678,1.5152,1.6415,2.5254,1.389,1.7678,1.5152,1.7678,1.894,2.0203,0.88388,1.894,0.12627,2.0203-2.0203,1.6415-0.3788,0.63135,1.894,1.1364,1.0102-0.12627,1.6415-1.6415,1.5152-0.12627,1.894-0.3788,2.5254s-1.7678,0.75761-2.3991,0.75761c-0.63134,0-6.3134-0.12626-6.3134-0.12626l-3.1567,0.12626-1.1364,1.1364-1.2627,0.50507-2.0203-0.75761-1.5152-0.75762-2.0203-0.3788-1.0102-1.5152-0.88388-1.6415-0.75762-0.63135-1.1364-0.12627-0.88388,0.50508-2.1466,0.75762-3.283-0.25254-1.7678-0.50508-2.0203-1.2627-0.50508-0.50508,0.25254-0.63134v-1.1364l-1.389-1.2627-0.88389-0.50508-0.63134,0.37881-0.38556,0.10695-0.53571-0.35714,0.0893-0.89286,0.71429-0.625,0.0893-0.98214-0.89285-0.71429-1.7857-1.0714-0.98214-0.98215-0.26786-0.98214-0.71428-0.89286h-0.98215l-0.89285,0.625-0.625,0.0893-1.25-0.71429-1.4286-0.80357-1.3393-1.25-1.7857-1.3393-0.69-0.57,1.07-0.71,2.05-0.54,2.3214-0.71428,2.8571-2.0536,3.3036-1.6964z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_kt" class="jvectormap-region"></path>
                                    <path d="m123.49,177.57,1.7678-1.6415,1.5152,0,2.2728-1.894,2.5254-0.50507,2.2728,0.63134,2.9042,2.1466,2.7779,1.5152,0.75761,2.5254,0.12627,1.389,1.0102,1.1364,1.1364-0.37881,0.75761-2.0203-0.12627-2.3991-0.88388-1.6415-0.88388-1.894,0.12626-2.0203,1.1364-1.2627-0.25254-1.894-0.75762-1.0102,0-0.37881,1.2627-0.25254,3.283,0.25254,3.5355,1.2627,2.2728,0.12627,1.894,0.12627,1.2627,1.1364,0.63135,1.2627,0,1.7678-0.37881,1.6415-0.25254,2.1466-0.63134,1.7678-2.1466,1.2627-0.75761,1.0102-1.0102,1.894-1.0102,1.1364-1.7678,1.1364-0.63135,1.2627,0.25254,1.1364,1.389,0.75762,2.1466,0.25253,1.0102,0.88389,0.25254,1.6415,1.0102,0.75762,2.1466,0.12627,1.1364-0.50508,3.4093-0.25254,1.7678-0.63134,2.0203-0.25254,1.5152,0.75761,1.0102,1.6415,1.1364-1.2627,1.389-1.7678,0.75762,0.88388,0.50507,2.0203,0.63135,2.2728,2.1466,0.50507,1.2627,0.75762,1.1364,1.0102,0.12626,1.2627,0.12627,1.6415-0.12627,1.7678-1.2627,0.75761-2.2728-0.25254-1.389-0.88388-1.389-0.25254-0.75761,0.88388-1.5152,1.0102-3.0305,0-1.5152,0.3788-2.7779,3.0305-1.0102,1.389-0.37881,2.1466-1.6415,1.0102-1.1364,0.12627-0.3788,1.2627-1.2627,0.63134-0.63135-1.0102-1.1364-1.1364-2.2728-0.12627-0.75761,0-1.1364-3.0305,0-2.9042-1.0102-1.5152-0.88389-1.894-0.12627-1.6415-2.2728-0.88388-0.88388-0.63135s-0.37881-1.0102-0.37881-1.5152c0-0.50507-0.25254-3.4093-0.25254-3.4093l-0.75761-1.1364-2.3991-0.25254-1.389,0.75761-0.75762-0.50507-0.12627-1.2627-0.63134-0.88389-1.0102,0.63135-2.1466,0.3788-2.7779-0.88388-1.5152-0.88388-3.283-0.37881-1.2627-0.88388-1.0102-0.75762,0.63135-1.2627,0.88388-2.1466,0.88388-1.389,0.12627-1.2627z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_le" class="jvectormap-region"></path>
                                    <path d="m207.59,265.33,1.2627-0.88388,0.12627-2.0203,0-2.0203-1.0102-1.389-0.12627-1.6415,1.5152-0.37881,3.9143,0.25254,2.5254-0.88388,2.6516-1.1364,0.63134-1.389,1.1364-0.63134,2.7779,0.25254,1.389,1.7678,0.12627,2.7779-0.63134,3.0305-1.0102,1.389-0.75761,2.7779-1.894,0.75762-2.0203,0.12626-1.6415,1.7678-0.63134,1.6415-1.0102,0.63134-0.75761,0.88389,0.75761,1.389,1.6415,0.88388,1.0102,1.389-1.6415,1.894,0.12626,1.894,1.1364,0.88389,1.2627,0.50507,0.88388-1.389,0.88388-1.894,2.7779,0,3.1567,0.3788,4.2932,1.2627,1.7678,2.2728,2.1466-0.12627,2.1466-1.6415,1.6415,0.37881,1.2627,1.0102,0.75762,1.894s1.0102,1.5152,1.389,1.7678c0.3788,0.25254,2.5254,1.894,2.5254,1.894l0.25254,1.5152-0.88389,2.0203-2.0203,1.1364-3.5355,0.25253-1.2627,0.63135-1.2627,1.5152-0.25254,1.389,1.0102,1.389,0.12627,1.1364-1.5152,1.1364-0.75762,1.389-0.12627,2.1466-1.2627,1.0102-2.7779,0.12627-1.1364-1.2627-1.0102-2.5254-2.0203-0.12627-1.389-0.3788v-1.894l-2.0203-1.1364-3.1567,0.75761-1.7678,1.389s-1.2627,1.0102-1.2627,1.5152c0,0.50508-0.3788,2.2728-0.50507,2.7779-0.12627,0.50508-1.6415,1.5152-1.6415,1.5152l-2.5254,1.1364-1.894-0.50507-1.2627-1.389-1.5152,0.25253s-0.75761,0.50508-1.0102,1.389c-0.25254,0.88389-0.12627,2.7779-0.12627,2.7779l0.12627,1.894-2.0203,0.63135-3.4093,0.3788-0.25254,1.1364v1.389l-0.3788,1.389-1.7678,0.88389h-0.63135l-0.63134-1.5152-0.50508-0.37881,0.12627-2.5254,0.25254-2.5254,0.50508-1.5152-0.88389-1.6415-0.25254-1.2627,0.75762-2.9042,0.63134-2.5254-1.0102-1.5152-1.6415-2.5254-2.1466-1.5152-0.88388-0.63134-3.9144-0.12627-1.7678-1.2627-1.6415-1.5152-1.6415-1.5152-0.50507-0.50508,0.50507-1.0102,1.2627-1.6415,0.25254-1.0102,1.1364-0.75761,1.5152,0.50507,1.894,1.389,1.389-0.75761,2.1466-0.63135,1.389-1.2627v-1.5152l-1.2627-1.894-0.63135-1.5152s-0.78918-1.1049-0.85231-1.2627c-0.0631-0.15784,0.56821-0.69448,0.56821-0.69448l0.97858-0.63135,0.75762-0.75761s2.2728-0.0316,2.8095-0.0316c0.53664,0,3.1567,0.0631,3.8828,0.0631,0.72605,0,3.7881-0.44194,3.7881-0.44194l1.4521-0.59978s0.12626-1.5784,0.15783-1.7993c0.0316-0.22097,0.47351-2.4938,0.47351-2.4938l2.0203-2.3991z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap4_ki" class="jvectormap-region"></path>
                                    <path d="m211.5,329.86,2.3991-1.6415,2.5254-1.6415,1.5152-0.25254,1.894,2.6516,2.2728,2.2728,2.9042,0,2.6516,2.5254,1.7678,2.5254,1.1364,1.7678,1.7678,0,1.2627,2.1466,2.6517,2.3991,2.2728,1.6415,2.0203,1.7678,1.2627,1.1364,0.88389,1.389-0.37881,1.1364-1.6415,0.63134-0.88388,1.2627,0.25254,1.389,1.389,0.63135-0.63135,1.2627-1.5152,0.50508-1.2627-0.75762-2.3991,0.37881,0,1.0102-1.5152-0.25254-0.50508-0.88388-1.5152-1.0102-4.5457,0-1.1364-0.37881,0-1.2627,1.7678-1.2627,0.12627-1.389-1.0102-0.88389-1.6415-1.1364-2.5254,0.25254-1.0102,2.1466-1.7678,2.6516-0.88388,2.0203,0.50508,3.0305,1.894,1.0102,2.0203-0.75761,1.6415,0.75761,1.0102,2.0203,2.5254,0.12627,2.0203,0.75761,2.7779,0,1.7678-0.50508,1.5152,1.1364-0.63135,1.389-1.894,1.5152-1.2627,1.1364-1.0102,1.389-1.2627,0-1.2627-0.63134-2.1466-0.75762-1.6415-0.3788-1.6415,1.2627-0.3788,1.5152-0.63135,1.389-2.3991,2.6516-1.6415,2.3991-3.9143,3.6618-1.894,1.5152-0.25254,2.0203-0.63134,1.5152-2.9042-0.25254-1.6415,1.7678-1.2627,1.389-0.50507,0.63135-2.0203,0-1.1364-2.0203-0.50508-0.63134-5.4296-0.63135-1.389-2.1466-2.7779,0.88388-1.2627-0.12627,0-0.50507,3.4093-4.4194,0-1.6415-0.88389-0.63134,0-1.1364,1.7678-1.1364,1.0102-1.389,0-2.0203-0.25253-0.50508-1.894-0.12627-2.2728,1.2627-1.7678-1.1364-1.1364-2.3991,1.2627-2.3991,1.0102-1.894-0.25254-2.5254,0-0.75761,0.88389-1.5152,0-3.1567-2.5254-2.9042-0.12627-2.0203,1.0102-2.6516,2.0203-4.1669,2.9042-2.1466,3.9143-3.1567,1.0102-2.1466-0.88389-1.389-0.12627-0.12627,0-0.75761,1.389-0.25254,2.3991,0.75762,1.389,0.12626,1.7678-0.63134,2.6516-0.25254,1.7678-0.12627,0.88388-0.63134,0-1.7678z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap4_bs" class="jvectormap-region"></path>
                                    <path d="m242.18,347.66,1.7678-0.88388,2.7779,0.50507,2.3991,2.1466,2.3991,1.7678,3.0305,1.894,2.9042,0,1.5152,1.6415,1.6415,2.3991,0.75761,1.894-0.63135,3.1567,0,2.7779-0.88388,1.389-1.7678,0.63135-1.6415,1.1364-0.75762,1.2627-2.0203,0.63135-1.894,1.5152,0,1.1364,1.5152,1.5152,2.0203,2.0203,1.1364,2.3991-0.37881,2.7779-0.75762,1.7678-2.3991-0.63135-2.6516-0.50507-3.283-0.37881-2.0203-0.50508-1.5152-1.7678-2.0203-1.7678-1.1364-1.1364-1.1364,0.50508-1.5152,1.1364-0.88388,1.0102,0,1.894,1.6415,1.2627-0.37881,0.75761-2.2728,0.63135v1.0102c0,0.50508,0.75761,2.0203,0.75761,2.0203l2.0203,1.7678,0.12627,1.894-1.5152,0.63134-1.5152-1.5152-1.389-1.2627-2.2728-0.63134-3.283,0.12627-1.5152,0.25253-0.63134,1.2627,1.0102,1.389-0.37881,1.894-1.0102,1.6415-4.5457,0.25254-1.6415-0.88389-1.6415-0.63134,0.50507-2.0203,1.6415-0.88388-0.75761-1.7678-2.0203-2.3991-1.6415-1.0102-1.894,0.12627-1.389-0.63135,0.63134-2.7779,1.7678-2.6516,4.4194-4.1669,3.7881-4.672,1.2627-2.9042,1.389-0.88389,2.5254,0.25254,2.0203,1.0102h2.0203l1.894-2.2728,2.2728-1.894,0.50508-1.389-1.5152-1.2627-2.1466,0.50507h-3.0304l-2.7779-0.88388h-1.5152l-0.88388-1.894-1.389-0.50507-1.7678,0.63134-1.0102-0.37881-0.88389-0.63134-0.63134-1.894-0.12627-1.6415,3.6618-5.6821,0.75762-0.63135,1.7678,0.37881,1.7678,0.88388,0.63134,1.1364-0.3788,0.75762-1.2627,1.1364v1.1364l-0.12627,0.12627,0.75761,0.63135,2.6516,0.12627h2.2728l1.5152,1.0102,1.2627,1.1364,1.1364-0.63135,0.50507-0.75761,2.0203,0.12627,1.7678,0.37881,1.1364-1.2627-0.37881-1.0102-0.75761-0.88388,0.25253-1.5152,1.5152-1.0102,0.63135-1.1364z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d993" original="#b5d993"
                                          id="jqvmap4_cl" class="jvectormap-region"></path>
                                    <path d="m231.7,302.33-0.12627,1.389-2.0203,2.7779-1.5152,1.389,0.12626,1.389-1.6415,1.0102-1.1364,1.5152-1.5152,2.3991-0.50508,1.894-0.50508,3.1567-2.0203,1.0102-2.2728,0.12627-0.63135,1.1364-0.37881,3.0304-0.12627,1.389-3.0304,2.0203-2.2728,1.389-1.0102,0-1.2627-1.5152-1.7678-0.75762-0.63134-1.2627,1.389-1.1364,2.0203-0.75761,0.50508-1.1364-0.37881-0.50508-1.5152-0.88388,0.25254-0.88389,2.7779-1.7678,1.0102-1.1364-0.50507-1.0102-0.75762-0.63134-2.0203,0.63134-1.1364,1.389-1.5152,0.63135-1.0102,0.25253-0.3788,1.5152-0.63135,0.75762-0.88388,0.25254-0.75762-1.0102-1.389-1.2627-0.75761,0.37881-1.2627,0.37881-0.88388-0.88389-0.63135-1.1364-1.0102-1.0102-0.63135-1.0102,0-1.1364,1.6415-0.88389,1.1364-1.1364,0.25254-2.0203,0.25254-1.0102,3.1567-0.50507,1.6415-0.50508,0.37881-4.4194s0-1.2627,0.63135-1.5152c0.63134-0.25253,1.2627-0.3788,1.2627-0.3788l1.2627,0.63134s1.6415,1.894,2.3991,1.389c0.75761-0.50507,1.894-0.88388,1.894-0.88388s2.3991-1.0102,2.2728-1.6415c-0.12627-0.63134,0.25254-1.6415,0.25254-1.6415l0.3788-1.389,2.1466-2.2728,1.2627-0.75761,2.2728-0.50508,1.6415,0.37881,0.88388,1.1364v0.75761l0.25254,0.63135,1.0102,0.12627,1.6415,0.3788,0.63135,0.50508,0.63134,1.6415,0.75762,0.75761z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_ud" class="jvectormap-region"></path>
                                    <path d="M242.06,274.03l-2.28,1.16,0.5,1.5-0.5,3.53,0.5,1.28,1.41,2.41,2.25,1.62,0.65,1.66-1.4,2.12-2.41,1.03-2.87,0.63-1.66,0.87-1.13,1.54,0.5,1.24,0.63,1.38-0.13,1.03-1.9,1.63-0.38,2.4-0.87,1.6-0.13-0.19-1,0.12-1.28,2.5-2,2.29-0.15,1.53-0.88,0.87-2,2.03-1.91,3.41-0.62,3.9-1.28,0.88-2.25,0.38-1.28,0.78-0.63,4.9,2.53,2.66,2.13,2.28,2.53,0.25,2.28,1.5,3.41,4.94,1,0.37,1.28-0.12,1.12-1.25,0.88-1.28,1.03-1.75,1.25-1.66,1.28,0.88,1.5,1.28h2.41l2.03-0.91,0.5-1.75,0.25-1.91,0.87-0.75,0.88-1,0.78-0.5,2.5,2.75h3.69l0.87-1,0.5-1.5,0.25-1.65,0.88-1.25,4.69-0.38,2.15-0.78,0.63-1.5-0.63-0.62-0.12-1.41,1.12-1.38,0.75-1.03v-1.37l-0.5-0.88-0.62-1.03,0.25-1.75,1-1.53,2.03-1.5,3.15-0.5,1.88-1.91,2.28-1.62,2.28-1.66,2.28-1.65,0.88-0.75,0.5-1.25,1-1.78s0.9-1.12,1.53-1.75c0.63-0.64,1.62-1.91,1.62-1.91l1.16-1.37,0.25-1.66-2.41-0.38-2.65-0.75-2.66-1.65-2.75-1.38-2.66-1.28-2.53,0.66-3.15,0.12-3.66-0.9-2.9-1.63-1.63,0.85-0.41-0.22-1.9-1.25-1.38-2.03-1.12-1.13-2.28-0.78-0.13-1.63-1.12-1.28-1.41-1.5-1.91-0.5-2.62-0.25-2.41-0.78z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6d993" original="#b6d993"
                                          id="jqvmap4_pe" class="jvectormap-region"></path>
                                    <path d="m286.13,291.72,1.7678-1.1364,1.1364,1.389,0.88388,2.3991,2.6516,1.5152,2.9042,2.1466,1.2627,2.3991,2.2728,2.7779,0.12627,1.7678,0.63135,2.0203,0.75761,1.5152-0.63134,1.7678-1.894,1.894-0.63135,1.7678-0.25253,4.7982,0.3788,2.7779,0.63135,1.0102-1.0102,2.9042-1.5152,1.7678-0.37881,2.3991,2.0203,1.2627,2.3991,2.0203,0.75761,2.0203,0.12627,2.6516-0.63134,1.6415,0,2.9042,0.75761,2.3991-0.25254,1.894s-0.88388,0.88388-0.88388,1.389c0,0.50508-0.50508,2.7779-0.50508,2.7779l-1.2627,1.2627-2.0203,0.12627-1.1364,0.88388h-3.0304l-1.5152-0.88388-2.1466,0.25254-1.389,1.1364-0.88388,1.389-0.25254,2.9042-0.75761,1.1364-1.1364,1.0102-1.7678,0.50508-3.0305,0.25254-2.0203,0.25254-1.0102,0.88388-1.894-0.37881-1.389-1.1364-1.894-1.894-2.5254-1.6415-1.5152-0.63135-2.2728,0.37881-1.894,0.3788-1.389-0.12626-1.6415-1.389-1.894-2.2728h-2.2728c-0.50508,0-1.6415-0.75761-1.6415-0.75761l-4.672-3.1567-1.6415-1.7678-2.9042-0.3788-1.389,0.12627-0.88389,0.12627-1.2627-1.2627-3.9143-3.283-3.1567-3.0305-0.50507-1.389,2.0203-2.9042,1.389-2.7779,0.75762-0.25253,1.6415,1.1364,1.1364,0.75761h2.7779l1.5152-1.389,0.50507-1.7678,0.12627-1.7678,2.5254-1.7678,1.7678,2.0203,1.2627,0.63134h2.3991l1.6415-1.1364,0.75761-2.0203,0.50508-1.894,3.7881-0.75762,2.5254-0.3788,1.389-1.2627v-1.0102l-0.88388-1.389,1.7678-2.1466,0.25254-1.1364v-1.389l-1.0102-1.6415,1.0102-2.5254,2.1466-1.6415,3.283-0.88388,1.1364-0.75762,8.0812-6.1872,0.88388-1.6415,1.6415-2.7779,2.1466-2.5254z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap4_sv" class="jvectormap-region"></path>
                                    <path d="m255.69,383.01,2.3991,1.894,3.283,0.88388,4.2932,1.2627,3.1567,0.75762,4.1669-0.50508,2.5254,0.25254,2.9042,1.0102,3.5355,1.1364,3.5355,0.88388,3.283,1.0102,3.4093-0.12627,2.3991-1.2627,3.6618,0,1.0102-1.5152,0-1.894-1.5152-2.1466-1.389-2.7779s-1.5152-0.12627-2.1466-0.37881c-0.63135-0.25254-2.2728-1.6415-2.2728-1.6415l-0.75761-3.1567-1.389-1.7678-2.6516-1.2627-1.5152-1.6415-1.2627-2.2728-1.6415-1.5152-1.389-1.2627-1.0102-1.389,0.50508-2.3991,1.389-1.2627,1.1364-1.894-2.5254,0.37881-3.0305,0.12627-1.389,0.50507-0.75762,0.50508-1.2627-0.37881-2.0203-1.0102-1.7678-1.7678-2.0203-1.389-1.7678-0.75761h-1.2627l-3.0305,0.63134-1.7678-0.12627v1.1364l0.63135,0.88388-0.50508,2.2728v2.2728l-0.25253,2.1466-0.88389,1.1364-2.5254,1.1364-1.389,1.1364-1.5152,1.2627-1.7678,0.88388-0.50507,1.2627,0.63134,1.1364,1.894,1.894,1.389,1.389,0.63134,1.7678v1.894l-0.50507,1.7678z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_ku" class="jvectormap-region"></path>
                                    <path d="m224.63,259.27,2.1466-0.63134,0.63134-0.88388,1.894,0.12627,1.6415,1.894,2.1466,0.25254,2.1466-0.50508,1.5152-1.894,0.50508-1.5152-0.63135-0.88389,0.63135-1.5152,2.1466-1.2627,4.5457-1.894,2.6516-1.1364,0.25254-1.5152-0.50508-2.5254-2.1466-0.88389-3.283,0.12627-2.3991,1.6415-2.3991-0.75761s-0.50508-1.0102-1.2627-1.0102-1.5152-0.25253-1.5152-0.25253l0.50507-3.0305,1.7678-0.37881,1.389-1.5152,0.50508-1.894,2.1466-0.50508,2.2728,0.12627,0.63135-1.7678-0.63135-0.63134-0.63134-2.1466,0.63134-1.389,4.5457-2.0203v-1.2627l-1.0102-2.5254-0.63135-1.6415-1.6415-1.7678-0.63134-1.1364,0.25254-1.6415,1.2627-0.63134,1.7678,0.75761,1.5152,2.1466,1.6415,1.5152,2.2728,1.894,2.6516,1.2627,1.7678,1.1364,0.50508,1.7678,1.5152,1.5152,3.1567,0.3788,1.894,1.2627,2.9042,0.50507,0.88388,1.2627h2.0203l1.0102-0.63134-0.25254-1.5152-0.75761-1.5152,0.50507-1.0102,0.88389-1.5152s0.25253-1.1364-0.12627-1.6415c-0.37881-0.50508-1.1364-1.1364-1.1364-1.1364v-0.88388l2.7779-3.283,3.1567-2.1466,1.894-2.0203,1.0102-0.88388,2.3991,0.63134,3.4093,0.12627,2.5254,0.75762,4.2932,0.50507,2.1466,0.63135,3.283,0.12627,2.3991-0.50508,1.5152,0.12627,0.12627,1.894,1.2627,1.0102,2.1466,2.1466,5.3033,4.672,7.4499,4.672,6.4397,3.7881,5.177,3.0305,5.5558,3.283,2.7779,1.894,2.2728,0.25254h3.283l2.1466-1.0102,2.5254-2.3991,1.6415-1.2627,2.7779,0.25253,2.3991-0.12626,2.0203-0.63135,1.5152-0.88388,1.6415-0.37881,3.1567,0.12627,1.6415,0.25254-0.50508,1.5152-0.88388,1.1364-1.1364,0.63134-0.50508,1.894,1.2627,1.7678,1.2627,1.389,0.12627,1.894-1.1364,1.389-0.88388,0.25254-0.75762,1.389-2.0203,0.25254-2.3991-0.12627-2.1466,0.88388-2.5254,1.389-1.389,1.1364-3.0305-0.12627-2.1466-0.50507h-3.1567-2.0203l-1.0102,0.3788-1.389,1.5152-0.75762,0.88389-2.1466,1.6415-1.5152,0.50508h-2.3991l-2.3991-0.25254-1.5152,0.50508-2.9042,2.0203-2.2728,1.2627-1.5152,1.0102-1.5152,0.3788-1.2627-0.12626-1.2627-1.0102-0.12626-1.894-0.63135-1.389-1.6415,0.88388-1.5152,1.389-1.0102,1.2627-0.88388,0.50508-1.2627,0.50507-0.75762,0.37881-0.12627,1.7678-0.3788,1.7678-0.63135,1.389-0.88388,1.1364-1.0102,1.6415-1.894,1.6415-1.6415,1.389-1.2627,0.75762-2.7779,3.283-1.894,2.6516-1.1364,3.0305-0.50507,1.6415-1.5152,1.6415-2.0203,0.88388-1.5152,0.63134-1.7678,1.0102h-2.2728l-3.1567-1.0102-3.1567-1.6415-4.4194-2.1466-0.75761-0.3788-2.5254,0.50507h-3.283l-3.0305-0.88388-2.9042-1.389-1.0102,0.25254-1.6415-0.12627-1.5152-1.2627-2.2728-2.3991-1.894-0.88388-0.63135-1.5152-2.2728-3.0305-5.8084-1.1364-1.389-0.63134-1.7678,0.63134-0.75761,0.75762v0.75761l0.37881,0.88389v1.6415,1.0102l-0.50508,0.3788-1.389-0.63134-0.88388-0.37881-1.1364,0.25254-1.5152,0.88388-1.5152,0.50508-1.1364-0.25254-0.88389-1.389-0.88388-0.63135-2.2728-0.88388-6.0609-1.1364-1.2627,0.25254-1.1364,1.1364-0.63135,1.5152-1.1364,0.37881-1.6415-1.389v-1.1364l1.0102-1.389,0.50507-0.75761-0.50507-1.0102-1.1364-1.0102-1.1364-1.0102-0.3788-0.75761,1.5152-1.2627,1.1364-2.5254,1.6415-1.0102,1.6415-0.3788,1.894-1.2627,0.88388-2.3991,1.2627-1.2627z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_ko" class="jvectormap-region"></path>
                                    <path d="m217.31,136.92,1.1364-1.5152,1.5152-0.75761,2.9042,0,4.2932,0.12626,2.1466-0.50507,2.5254-1.6415,0.88388-2.0203,0.12627-3.5355,1.5152-3.4093,1.0102-1.0102,4.7982,0,2.3991-0.63134,1.0102-1.2627,1.7678-0.12627,2.3991,1.0102,3.0305,1.894,2.2728,1.894,2.6516,0,2.2728-0.25253,0.25254,2.3991,1.894,0.3788,1.7678,1.0102,0,2.2728,0,1.7678-1.0102,0.63134-1.5152-0.3788-0.75761-1.1364-0.25254-0.63134-0.88388,1.0102-0.25254,0.63135,0.50508,1.1364,1.1364,0.88388,0.50507,0.75762-0.3788,1.0102-1.0102,0.63134,0,0.75762,1.1364,1.2627,0.88388,1.5152,0.88388,1.7678,2.0203,2.1466,0.75761,1.7678,0,1.7678,0,1.1364-0.50507,1.1364-0.25254,2.0203-0.12627,5.5558,0,5.5558-0.75762,1.389-0.25253,1.894,0.63134,0.88389,0.63135,1.0102-0.12627,4.0406,0,3.5355-0.63135,1.389-1.7678,1.1364-0.88389,0.88388,0,1.0102-0.25254,0.88389-1.1364,0.88388-2.7779,0.75761-3.6618,0.12627-3.1567,0.50508-1.6415,0.37881-2.5254-0.50508-2.0203-0.75761-1.894-1.389-1.894-2.2728-1.7678-2.2728-1.1364-1.894-0.63135-2.2728-0.3788-2.3991-1.2627-2.6516-1.1364-2.0203-0.3788-1.6415-0.37881-3.9143,0-1.7678,0-1.389-0.88388-0.88389-0.12627-2.9042,0-2.1466,0.75761-1.5152,0.12627-1.1364,0-1.5152-0.88388,0-0.63135,0.88388-0.88388,1.389-0.75762,1.894-0.25253,0.63135-3.5355,0-2.6516-0.25254-0.75761-1.5152,1.389-2.0203,1.1364-0.75761,0.25254-1.0102-1.7678-2.2728-1.5152-1.7678-1.2627-2.7779-1.2627-1.2627z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap4_mu" class="jvectormap-region"></path>
                                    <path d="M216.94,136.91l-2.28,1.53,0.12,1.62-1,2.28-1.9,2.04-1.88,0.87-4.31-0.13-0.88,1-2.28,2.16h-2.91l-2.4,0.38-0.13,4.03-0.62,1.9-2.91,0.38-1.87,0.25,0.12,1.4,0.88,1.5-1.78,1.29-1.25,0.5-3.41-0.91-1.66,1.16-0.37,2.9-0.13,4.16-1.25,2.28-2.65,1.62-3.41,1.16-8.72-0.12-3.53-0.91-5.19-0.75-4.28-0.75,0.88,1.87-0.13,1.54,0.07,0.53-0.94,5.65-2.53,1.5-2.03,3.32-2.91,1.87-0.13,1.66,2.66,1.25,1.91,0.75,1,2.4,2.9,0.25,5.07-0.75,1.65-0.9,2.25,0.53,1.78,1.37,1.38-1.62,1.12-0.78,1.78,4.69,1.5,0.62,2.91,1.53,0.06,0.69-0.12,2.69,0.06,1.78-1.63,1.53,1,1.12,2.29,0.5,1.75-0.62,2.53-1,0.62-0.5,1.91,1.5,1,1.9,1.03,1.88,3.16,0.25,3.28-3.03,0.75-1.5,1.25-1.38,2.4-1.28,2.03-1.75,0.5-1.15-0.37-1.25-1.91-0.63-1-1.03,0.13-1.63,1.37-2.4,1.78-1.91,1.66-1.87,1.25-2.16,1.38,0.25,1.78,1.53h1.9l0.88-0.53,0.12-2,1.5-2.03,0.25-1.75-0.25-3.16-0.5-1.53,0.63-1.78,1.4-0.87,1.38-0.63,3.03-2.53,0.5-1.13,0.53-1.28h1.38l3.4-0.62,2.16-1,1.5-1.28v-1.88-3.4l0.25-2.54,1.03-0.87v-1.16l-0.12-2-0.78-1.15-2-0.38-1.41-0.37-0.63-0.88v-0.75l0.63-1.15,1.28-1,0.75-0.63-0.38-1.03-1.65-2.37-1.88-2.29-1.4-2.15-1.75-2.53z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_kl" class="jvectormap-region"></path>
                                    <path d="m185.36,208.76c0.12627,2.5254-1.389,5.0508-1.389,5.0508l-1.5152,1.894s-0.3788,1.0102-0.3788,1.7678c0,0.75762,0.12626,1.389,0.12626,1.389s0.63135,1.389,1.894,2.1466c1.2627,0.75761,2.0203,2.7779,2.0203,2.7779l1.0102,1.894,1.5152,1.2627,1.2627,1.0102,1.1364,1.894,1.2627,0.37881,3.1567,0.50508,1.5152,2.2728,1.0102,1.894,1.7678,0.63135,0.25254,0.63135,1.0102,2.2728,1.2627,0.75761,2.6516,0.25254,1.5152,0.12627,0.50507,2.7779,1.2627,2.0203,2.7779,1.389,1.389,0.12627,1.0102-0.63134,1.389,0.12627,1.0102,0.50507,0.75761,1.0102-0.63134,1.5152-0.75762,1.389,0.25254,0.75762,1.2627,1.1364,0.75761,0.50508,1.0102,0.50507,0.3788,0.63135v1.0102l-1.5152,1.5152-2.0203,0.63135-2.0203,0.75761-4.2931-0.25254-1.2627,0.88389,0.25253,1.1364,0.88389,1.2627v2.6516,1.1364l-1.0102,1.1364-0.75761-0.63134-1.1364-1.0102-0.37881-1.5152-1.0102-0.12626-1.6415,1.0102-1.0102,1.0102h-1.7678l-3.0305-1.5152-2.1466-2.1466-2.0203-1.1364-1.894-1.6415-2.0203-2.7779v-1.894l-1.894-2.7779-2.5254-2.2728-1.5152-2.0203-1.2627-1.7678-0.63135,0.75761-1.6415,0.12627-1.6415-0.25254-2.2728-1.894-0.88388-0.50508-1.2627,0.63135-2.7779,1.7678-0.63135,0.37881-1.2627,0.12627-0.88388-0.50508-0.50508-1.2627-0.63134-1.894,0.25254-4.0406-0.50508-2.5254-0.50508-1.2627-1.2627,0.12627-1.2627,0.37881-0.88388-0.25254-1.389-1.2627-1.6415-1.7678-4.0406-1.0102-1.2627-1.1364-0.50508-1.0102,0.63135-2.0203-0.50508-0.88388-1.0102-0.75761-1.1364-0.63135-1.894-0.37881-0.25254-0.12627,0.50508-2.7779-0.50508-1.6415-0.63134-1.2627-0.88388-0.88389-0.37881-0.50507-0.12627-1.0102-0.25254-1.5152,0.63135-0.88388,0.75761-0.88388,1.389-0.25254h1.6415l0.88388,1.2627,1.0102,0.88388,1.1364-0.50507,0.25253-1.1364,1.2627-0.25254,1.1364-0.63135,0.75761-1.1364,0.12627-1.5152,3.283-3.6618,1.2627-0.88388h1.7678l2.0203-0.37881,1.389-0.75762,0.88388-0.63134h1.1364l1.5152,0.88388h1.2627l0.88389,0.75762,0.50507,0.88388,1.389,0.63134h1.1364l1.389-0.3788,1.5152-0.50508,1.1364-0.37881,0.63135-0.25253,0.88388,0.12627,1.0102,0.88388,1.2627,1.6415,0.50507,1.2627z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_vo" class="jvectormap-region"></path>
                                    <path d="M391.06,151.03l-3.56,1.06-2.16,0.91-3.56,0.19-1.59,0.87s-1.26-1.07-1.97-1.25c-0.72-0.18-0.91,1.1-0.91,1.1l-1.78,2.65-2.69,1.63-3.03,0.87-2.31,1.78s-2.15,0.37-3.22,0.72c-1.07,0.36-2.5,0.19-2.5,0.19l-1.59,0.72,1.06,1.78-2.16,1.25,0.38,0.72,1.25,1.44,1.78,1.59,1.78,1.78,0.91,1.63,1.4-0.72,0.91-1.97,2.16-0.72,1.25-0.53,1.93-0.19,0.91-1.59h1.97l1.25,0.87,1.59-1.25,1.1-1.25,2.65-0.15,0.72-0.57,3.41,0.72,1.78-1.06,0.34-1.44,2.69-0.34s1.07-0.01,2.5-1.44l0.72,1.06,2.84-0.68s1.98-0.19,2.69-0.19,3.03-0.38,3.03-0.38h2.31l2.35,1.25,1.78,0.91,1.25-0.72,0.72-0.87,4.28,1.06,1.97-1.44,3.22,0.19,4.09-0.72,1.25-1.59,1.97-2.88s-1.26-0.89-1.97-1.25-2.69-1.44-2.69-1.44l-3.22,0.57-4.43,1.59-4.32-0.91-2.5-0.15-3.18-0.72-1.63-0.91-1.59-1.78-1.44,0.72-1.97,1.06-2.5-0.15-3.22-0.91-2.5-0.72zm-35.53,14.47l-2.5,0.53-1.78,1.63-2.5-0.38s-1.44-1.06-1.44-0.34v1.78l0.72,1.59-2.12,1.25-2.88,1.1-1.06,1.25h-2.16l-0.72-1.1-1.59-0.87-2.69,2.12-0.15,3.03,1.93,2.69,1.44,2.16s1.26,2.14,0.91,3.03c-0.36,0.89-4.28,2.5-4.28,2.5l1.06,2.5,1.25,1.59v1.97l2.31,0.53,2.88,1.97,2.12,2.31,1.97,0.38s1.06-1.07,1.06-1.78c0-0.72-0.15-4.48-0.15-5.38,0-0.89,1.59-8.37,1.59-8.37l0.34-1.44,4.13-2.69s0.88-1.07,2.31-1.97c1.43-0.89,4.66-3.03,4.66-3.03l1.78-1.4s0.71-1.64,0-1.82c-0.72-0.17-1.62-0.53-2.16-1.25-0.53-0.71-3.03-2.65-3.03-2.65l-1.25-1.44zm-132.28,14.34l-0.63,0.63-2.28,0.25-0.87-0.13-1.78,0.91v1.38l-0.63,1.65-1.15,0.75-0.13,1.38,0.91,0.78,0.87,0.87-0.12,1.25-1.25,1.28-1.66,1.5-1.65,0.13-1.38-1-0.62-1.53-1.41-2-1.25-1.03-2.03,0.53h-1l-2.41-1.66-1,0.38-1.66,2.15-1.37,2-1.66,1.78-1.25,2.66,0.38,1,1,1.28,1.78,0.25,0.12,1-0.12,1-2.78,2.41-2.16,0.87-1.87,3.03-2.53,2.53-2.91,0.5-1.13,0.13-0.5,0.91-0.28,1.87-0.87,2.16-1.75,2.03-0.13,1.87,1.25,2.79,1.5,1.28,2.04,3.53,3.78,4.15,1.28,0.75,3.15,0.38,0.38,0.65,1.37,1.38,1.66,2.53,1.38,0.5,0.5,1.66,0.9,1.5,3.28,0.5,1.63,0.25,0.78,1.4,0.37,2.13,0.75,1.15,2.41,0.88,1.5,0.75,1.28-0.5,1.13-0.25,1.37,0.75,0.91,1.66-1.03,1.25-0.13,1.53,0.66,1,1.25,0.75,1,1.03,1.03,0.62,0.75-0.37,1.25-0.25,1.41,0.5,1,1.37,0.5,0.91,0.24,2,0.26,1.03h0.65l0.88-0.16,0.87-0.5,0.63-0.37h1.03l0.75,0.75,0.62,0.91,0.88,0.25,1.4,0.25,1.88-0.5,1.41-0.5,1.37-1.79v-0.87l-0.37-0.66-0.26-0.5,0.26-1,0.5-0.5,2.78-1.28,2.4-1,1.66-1.12,1.87-0.78,0.5-0.75,0.13-1.38-0.75-1.53-1.13-0.87-2.15-0.13h-1.5l-1.53,0.5-1,0.75h-1.28l-0.63-0.12-1-1.13-1.53-0.37-0.75-0.38,0.25-1.53v-1.13l1.66-0.5,0.74-0.78,0.76-0.87,0.62-1.63,0.53-0.37,1.5-0.53,1.78,0.25,1-0.5-0.12-1.38-0.5-0.87-0.5-1.66,0.25-0.88,0.87-0.62,1-0.53,1.41-0.63,1.37-0.75,0.38-0.75v-0.5l-0.88-1.9-0.75-1.41-0.9-1.62-1-0.75-0.63-1.28,0.38-1.88,0.62-0.5h1.28l0.88,0.38,1,0.87,1.41,2.16,2.65,2.37,1,0.91s1.65,0.49,2.28,0.75c0.63,0.25,1.38,1,1.38,1l0.5,0.62,0.37,1.03,0.53,1,1,0.63,1.38,0.37h1.41l1.12,0.53,0.88,0.88,2.03,0.5h1.37l0.28,0.88,1,0.53,1,0.25,0.88-0.54,0.78-0.74-0.13-1.26-1.03-1.03,0.38-0.87,0.78-1,0.37-1.53-0.25-1-1.15-0.75-0.13-1.28,0.91-0.88,3.15-3.28,1.88-1.12,1.91-1.79,0.25-1.25-0.63-0.5-1.65-0.9-1.63-1-2.16-0.25-1.25,0.62h-1.4l-1.5-1.12-1.03-1.78-0.75-1.75-1.5-3.16-1.41-2.28-0.75-1.41-0.88-2.25-0.12-1.15-2.41,0.25-0.75-0.63-1.53-1.12s0.25-0.5,0.88-0.5,1.02-0.41,1.53-0.66c0.5-0.25,0.25-0.87,0.25-0.87s-0.37-1-0.88-1.76c-0.5-0.75-0.77-0.77-1.28-1.15-0.5-0.38-0.75-1.75-0.75-1.75l-1.25-0.41-2.03-0.5-1.66,0.13-1.5,0.53-1.9,0.12-0.88-0.65-1.62-1-2.03-0.13h-2.78-2.53l-1.63,0.75-0.91,0.75-0.37,1.66-1.13,1.37-1.12,2.04-1.28,0.87h-2.41c-0.63,0-1.75-1-1.75-1l-1.03-1c-0.51-0.51,0-2.03,0-2.03s0.13-1.53,0-2.16-1.5-1-1.5-1l-2.03-0.87s1.65-0.78,2.16-1.16c0.5-0.38,0.37-1,0.37-1v-2.28c0-0.63-0.25-2-0.25-2l-0.75-1.91zm110.16,1l-0.19,1.1,0.53,1.78,1.44,0.72,0.53-0.72v-1.63l-0.38-1.25h-1.93zm-28.22,6.19l-2.35,0.78-1.4,2.07-2.88,1.43-0.25,1.07,1.78,1.43,2.13,0.97,3.22-0.44,3.5-0.9,0.25-1.6-0.78-1.96-1.1-1.88-2.12-0.97z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d994" original="#b5d994"
                                          id="jqvmap4_ar" class="jvectormap-region"></path>
                                    <path d="m299.02,389.7,2.0536,0.80357,2.1428,1.1607,1.6072,1.3393,1.6071,1.5179,1.7857,0.71428,2.3214,0.17858,0.89286-1.0714,1.6071-1.875,0.53572-2.3214,0.625-2.1429,2.2321-1.7857,1.875-0.44643,1.25-2.5,1.6964-1.0714,2.9464,0.26786,1.6071-1.6072s0.625-2.3214,0.53571-2.6786c-0.0893-0.35714-0.80357-2.5893-0.80357-2.5893l-0.89285-1.875-0.625-3.3036-0.71429-2.2322v-1.7857l1.5179-1.9643,2.2321-2.5,1.4286-1.4286,3.125-0.26786,0.35714,1.4286-0.89285,1.6071-1.6964,1.6964-0.17857,1.25,2.5,0.35714,4.0178,0.35714,1.9643,1.6072,3.0357,1.7857,1.5179-1.25,2.9464-0.17857,2.1429,1.4286,3.3928,1.0714s2.5-0.98214,2.9464-1.1607c0.44643-0.17857,3.5714-0.44642,3.5714-0.44642l0.89286-0.98215-0.53572-1.0714-1.6964-1.25-2.9464-2.2321-1.0714-1.4286s-1.6964-0.44643-2.3214-0.44643-2.6786-0.80357-2.6786-0.80357l-0.17857-2.6786-0.26786-2.4107-1.3393-1.3393-0.44642-2.2321-0.53572-3.5714-0.35714-0.89286-2.4107-2.7679-1.1607-0.71428s-2.6786-0.26786-2.9464-0.26786h-5.0893l-0.98215-0.26786s-0.625-1.5178-0.625-1.875c0-0.35714-0.98214-1.5178-0.98214-1.5178l-1.875-0.35715-1.25,1.25-2.4107,1.875-2.1429,0.89286h-3.0357l-4.6428,0.0893-2.9464,0.26785s-1.4286,0.53572-1.7857,0.625c-0.35714,0.0893-4.375,0.0893-4.375,0.0893l-3.0357-0.0893-1.4286,0.35715-0.89286,1.5178-0.53571,2.3214-0.89286,1.3393-2.3214,0.71428-1.6071,0.53572-1.5179,0.35714-1.7857-0.17857-1.3393-0.625-1.4286,0.17857c-0.35714,0.17857-1.6964,1.0714-1.6964,1.0714l-1.1607,2.1429-0.35715,2.4107-1.6071,2.3214-2.1429,2.5893-0.98214,1.5179,0.26786,1.25,0.71428,1.3393,1.5179,1.25,1.25,1.6071,1.6964,1.875,1.0714,1.6964s3.0357,0.98214,3.0357,1.5179c0,0.53571,1.6964,2.9464,1.6964,2.9464l0.625,1.875,1.6071,1.4286,1.875,0.71428,1.0714,0.80357,1.4286,2.3214,1.0714,1.4286v1.6072z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_tu" class="jvectormap-region"></path>
                                    <path d="m260.27,198.54,1.6071-0.89286,1.4286-1.1607,2.0536-1.0714,1.1607-1.25,0.625-3.3929,1.1607-1.6071s1.4286-0.80358,2.4107-1.0714c0.98215-0.26786,2.3214-0.26786,2.6786-0.26786,0.35714,0,1.5178-0.98214,2.0536-1.5179,0.53571-0.53571,3.0357-2.5,3.0357-2.5l0.71429-1.0714v-2.2321l1.25-1.9643s0.89285,0.17857,0.98214,0.625c0.0893,0.44642,0.26786,1.5178,0.625,1.6964,0.35714,0.17858,1.875,1.4286,1.875,1.4286l1.6964,1.1607,0.98214,0.89286-0.0893,1.3393-0.625,1.4286-0.44643,1.7857v1.6964l-0.26786,1.0714-0.44643,0.80357-0.26786,1.25-1.25,0.71428-1.3393-0.625-1.25-0.98214-0.625-0.80357-2.3214-0.53572h-3.0357c-0.44643,0-2.1429,1.1607-2.1429,1.1607l-0.80357,1.4286,0.17857,1.0714s0.53571,0.89286,0.625,1.25c0.0893,0.35714-0.71429,1.1607-0.71429,1.1607l-0.89285,1.6072s-0.26786,1.1607-0.0893,1.4286c0.17857,0.26785,0.625,0.80357,1.1607,1.25,0.53572,0.44643,1.875,1.5178,2.1429,1.6964,0.26786,0.17857,1.875,0.89285,1.875,0.89285s2.3214,0.17857,2.8571,0.17857c0.53572,0,1.9643-0.26785,1.9643-0.26785s1.5179-0.98215,1.875-1.1607c0.35714-0.17857,1.9643-1.1607,1.9643-1.1607s1.0714-0.44643,1.4286-0.35714c0.35714,0.0893,1.3393,0.98214,1.3393,0.98214l2.3214,0.17857s0.35714-0.44643,0.71429-0.80357c0.35714-0.35714,0.53571-0.71429,0.98214-0.35714,0.44643,0.35714,1.875,1.3393,1.875,1.3393l1.7857,0.44643h5.0893l2.5893,0.0893s0.80357,0.80357,1.25,0.89285c0.44642,0.0893,3.3928,0.53572,3.3928,0.53572l1.5179,1.4286,0.71429,1.9643,1.1607,0.17858,0.71429-1.5179,0.89285-1.0714,1.875-0.17857,0.89286,0.53571,2.1429,0.17857,2.5893,0.44643-0.44643,0.80357-0.98214,0.80358-1.6964,0.625-0.80357,0.98214-0.71428,0.98214-1.6964,0.71429-0.26786,1.0714,1.3393,0.98214,1.25,0.53571,0.625,2.0536,0.71428,0.35715,1.6964-0.80357s1.3393-0.89286,1.6071-0.89286c0.26786,0,3.3036,0.53571,3.3036,0.53571l2.6786,1.3393,1.5178,1.3393,1.4286,0.89286,4.4643,0.17857,0.71429,0.71429,1.5178-0.26786,2.5893-0.35714,1.7857-1.3393,0.625-1.7857s0.53572,0.625,0.53572,1.1607c0,0.53572-1.6964,2.7679-1.6964,2.7679l-0.71429,1.7857v1.0714l-1.1607,1.1607-0.89286,0.625-0.44643,0.98214,0.44643,0.80357h1.4286l0.80357-1.6071,0.17858-0.53572,1.5178-0.0893,1.5179,1.25,2.3214,0.35714,1.1607-0.89286,1.3393-1.1607,0.53571-0.89286-0.71428-1.0714-0.35715-1.4286,1.5179-1.1607,0.71429-1.875-0.53572-1.6964-1.25-0.80357-0.71428-3.3929-0.26786-3.125s-0.26786-0.89286,0.0893-1.25c0.35714-0.35714,2.2321-1.6964,2.2321-1.6964l1.3393,0.17857,1.1607,1.4286,1.0714,1.9643,0.35714,2.1429-0.89286,3.3036,0.89286,1.0714,2.8571,2.4107,2.7679,2.8572,3.3929,2.5893,2.1428,3.3036,1.6964,3.3929,0.80357,1.875,0.17858,1.6071-1.0714,1.1607-0.98215,2.0536-0.98214,1.5179h-2.5c-0.44643,0-3.6607-0.17858-3.6607-0.17858l-2.1429,0.98215-2.7679,0.71428h-3.0357l-1.7857-0.17857-2.4107,1.875-3.0357,2.4107-1.6072,0.53571-2.7678-0.0893-2.0536-0.53571-4.2857-2.4107-23.036-13.929-7.6786-6.875-1.25-1.1607v-1.3393l-0.98214-0.625-2.4107,0.625-5.0893-0.44642-5.625-0.98215-5.1786-0.80357-3.125-0.26786-4.1071-2.3214-2.0536-0.44643-1.7857,0.625-1.7857-0.26786-1.5179-1.7857-4.2857-8.4822-0.98215-2.4107z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap4_ne" class="jvectormap-region"></path>
                                    <path d="m358.39,368.89,0.71428,2.5-1.25,1.6071-1.25,1.9643,0.53572,1.6071,0.71428,1.9643-1.25,1.9643s-1.0714,1.25-1.0714,2.1429c0,0.89286,0.17857,3.0357,0.17857,3.0357l1.7857,1.6072,0.35714,2.3214-0.53571,3.3929-1.9643,0.89286-1.25,1.6071,0.71429,2.3214-0.35715,1.9643-3.9286,0.17857s-1.4286-0.89286-2.3214-1.0714c-0.89285-0.17857-3.3928,2.8571-3.3928,2.8571l-2.5,2.1429-0.89286,4.2857,0.53571,0.89286,1.9643,2.1429,0.35714,2.6786-1.6071,2.6786-1.0714,1.7857-0.17857,3.0357-2.5,2.1429s-2.3214,1.0714-3.0357,1.0714h-4.8214l-1.6072-0.71428c-2.1428,1.4286-3.75,0-3.75,0l-1.6071-0.71429-1.9643-0.35714h-1.0714l0.35714-1.7857,1.7857-1.0714,0.71429-1.4286-2.3214-1.25-2.1429-2.3214-1.9643,0.89285-0.89286-0.71428v-3.75l-1.4286-0.89286-2.8571,0.35714-2.8572-0.89285-0.89285-0.53572-0.17857-2.1428,2.1428-2.6786,0.71429-2.3214,0.35714-2.6786v-4.1071l0.71429-2.1429,1.4286-3.9286,1.6071-2.5,2.3214-0.53571,1.0714-1.25,1.0714-1.7857,1.6071-0.89285h2.6786l1.6071-1.4286,0.89286-3.9286-1.4286-3.2143-0.71429-3.0357-1.25-3.3928,0.35715-1.6072,4.4643-4.6428,1.0714-0.89286h2.6786l0.17857,1.6071-1.25,1.6072-1.7857,1.25-0.17857,1.4286,1.4286,0.35714,3.2143,0.35714,2.3214,0.17857,2.1429,1.4286,1.9643,1.4286,1.0714,0.35714,1.0714-0.71429,1.9643-0.35714,2.3214,0.35714,3.5714,1.6072h2.5l2.1428-1.0714h2.1429z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap4_om" class="jvectormap-region"></path>
                                    <path d="m329.64,260.32,0,3.75-0.53572,3.2143-1.6071,2.3214-2.3214,2.3214-0.89286,1.25,1.9643,1.9643,1.7857,2.3214,5,1.9643,4.8214,0.17857,3.5714,1.4286,2.3214,2.6786,0,1.4286-2.1429,1.7857,1.4286,1.4286,2.3214,2.8572,1.9643,1.0714,2.1428-1.0714,1.7857-0.89286s1.6071,0.71429,1.9643,0c0.35715-0.71429,0.89286-2.1429,0.89286-2.1429l1.6071,2.1429,1.4286,2.8571,1.9643,1.6072s0.35714,2.1428,0.35714,2.8571v4.6429l1.9643,3.3928s0.35714,0.17857,0.71429,0.89286c0.35714,0.71429,0,2.1429,0,2.1429l1.0714,1.25,2.5,0.53571,3.75,0.71429,1.4286,0.89285s2.8571,2.1429,3.5714,2.6786c0.71429,0.53571,1.25,1.6071,2.1429,1.9643,0.89286,0.35714,3.5714,0.53572,3.5714,0.53572l2.8571,0.35714,0.89286,1.0714s0.35714,1.6071,0.71428,2.6786c0.35715,1.0714,1.4286,1.7857,1.4286,1.7857l3.0357,0.17857,1.7857,0.53572,0.35715,1.9643,0.35714,1.4286,1.0714,2.5c1.9643,0.17857,2.5,0.17857,3.5714,0.17857s3.3928,1.0714,3.3928,1.0714l1.9643,0.71428,2.8571,0.35714,2.8572-1.0714,3.2143-1.9643,3.0357,0.53571,1.9643,2.6786s0.35714,1.7857,1.0714,2.1428c0.71429,0.35715,2.8571,0.53572,2.8571,0.53572l2.3214,1.6071,0.71429,2.3214,1.9643,0.71428,2.6786-0.89285,1.9643,1.6071,1.0714,3.0357v2.3214l-0.35714,1.6072-0.53572,1.9643,3.0357,1.9643,2.5,1.7857,0.35714,2.3214v1.0714l-3.75,1.7857-2.6786,0.53572-3.2143,0.17857-3,0.15-1.61-1.07-1.7857-0.71428-2.3214,0.35714-2.3214,1.6071-2.6786,1.0714-2.1429-1.9643s-2.8571-0.35714-3.5714-0.35714c-0.71429,0-2.3214-1.7857-2.3214-1.7857l-0.89286-1.25-3.9286,0.17857h-3.5714l-1.6071-2.5s-1.25-0.89286-2.1429-0.89286c-0.89286,0-4.4643-1.25-4.4643-1.25l-2.5-2.3214h-1.25c-0.71428,0-2.3214,1.25-2.3214,1.25l-2.5,2.1429-1.7857,2.6786-2.8571,2.5-1.6071,3.3929-4.4643,1.6071-3.5714,0.89286-0.35714,2.1429-0.71429,2.1428-2.6786,1.25h-2.8571l-5.8929-5.5357-3.9286-0.89286-1.0714-1.4286-0.53571-4.1071-1.0714-1.25-1.0714-5.3572-0.53571-1.7857-3.5714-3.2143h-5.5357l-3.0357-0.35714-1.9643-2.8571-1.6071-0.53572-4.4643,3.0357-3.3929,0.71428h-5.1786l-5,0.71429-4.2857,0.53571h-3.5714l-1.4286-0.17857-0.53571-2.8571-0.35714-3.2143,0.89285-3.2143-0.89285-3.2143-2.3214-2.1428-1.0714-0.89286-1.0714-1.0714,1.25-2.6786,1.4286-2.3214-0.17857-2.1429-0.71429-3.2143,0.71429-5.5357,1.4286-1.7857,1.4286-2.1429-0.71428-2.3214-1.0714-3.5714-1.9643-2.6786-2.3214-3.3928-3.3928-2.1429-1.7857-1.9643-1.0714-2.6786,3.3929-2.1429,1.6071-2.6786,2.3214-4.8214,2.1429-2.6786,2.5-1.9643,3.5714-3.3929,1.6071-1.7857,1.7857-3.3929-0.17858-1.7857,0.89286-1.0714,2.1429-1.0714,1.4286-1.9643,1.6071-1.0714,1.25,0.17857,0.89286,2.3214,0.35714,1.0714,1.4286,0.35714,2.5-0.71428,3.0357-1.6071,1.4286-1.25,1.25-1.0714,2.5-0.53572z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap4_ht" class="jvectormap-region"></path>
                                    <path d="m366.25,234.25,1.4286,2.6786,1.6071,1.7857,1.6072,2.6786,1.0714,3.0357,0.89286,2.8572,3.0357,0.17857,1.7857-1.6072,1.4286-1.25-0.53571-3.2143s-0.89286-1.4286-0.53572-2.3214c0.35715-0.89286,1.7857-2.5,1.7857-2.5v-2.3214l-2.1429-1.6071-1.25-2.5s0.71429-1.6071,1.4286-1.9643c0.71429-0.35714,3.75-2.3214,3.75-2.3214s1.6071-3.75,1.9643-4.4643c0.35714-0.71429,0.35714-4.8214,0.35714-4.8214l0.89286-1.4286,7.5-2.1429,4.8214-3.5714,5.7143-6.0714,3.2143-2.1429,2.1428-0.71429,1.7857,2.3214,3.3928,0.35714,1.7857,1.25,1.0714,2.6786,0.17857,1.7857-0.89286,3.75-2.1429,2.6786-2.3214,2.8571-3.0357,1.6072-1.25,1.0714-0.35714,1.9643,1.0714,2.1429,0.17857,2.8571-0.89286,2.8571-2.1429,2.6786-1.7857,3.2143-2.6786,4.4643-1.25,3.5714-0.89286,2.1429-0.17857,2.5,0.35714,2.6786,0.71429,2.3214-0.71429,1.4286-3.0357,2.1429-1.0714,3.2143-0.89286,3.2143h-3.2143l-2.3214,1.25-2.1429,3.3929-3.5714,0.53571-2.3214,1.25-1.4286,1.4286h-3.5714l-1.4286-1.0714-1.0714-2.6786-0.71429,0.53572v1.6071l-1.9643-1.4286-0.71428-1.9643-1.0714,0.71429-0.17857,1.9643,1.7857,2.1428,2.5,2.1429,2.5,1.25,3.2143,1.0714,2.1429,1.25,2.1428-0.89286,3.5714-1.7857,3.0357-0.71429,3.75-1.0714,2.3214-3.0357,3.2143-2.6786,3.3929-1.6072,2.1428-1.7857-0.17857-2.1429-0.89286-2.3214-0.17857-1.7857,2.1429-2.1429,4.2857-0.89285h3.3929l1.4286,1.4286,1.25,3.0357v2.8571,3.0357l-1.6071,1.4286-1.25,2.5,0.17857,3.5714,1.7857,1.25,3.2143,0.71428,2.1429,2.8572,1.9643,3.2143,0.53572-0.71428-0.53572-4.1072-2.5-3.2143-3.75-1.0714v-2.8571l2.3214-3.0357s1.7857-0.35714,1.9643-1.0714c0.17857-0.71428,0.17857-3.5714,0.17857-3.5714l-0.89286-3.9286-2.6786-2.6786-2.6786-3.2143-0.89286-1.4286h-2.1428s-0.53572,1.25-1.4286,1.25c-0.89285,0-2.6786-1.25-2.6786-1.25l-1.6071-1.0714-0.53571-2.5,1.4286-3.75,2.3214-3.2143,2.1428-2.6786,3.0357-1.25,0.17857-4.4643-0.17857-3.0357v-3.0357l0.17857-2.3214,1.7857-2.3214,1.4286-1.4286,2.1429-0.35715,3.2143-0.53571,2.3214-2.5,1.7857-1.0714,1.25,2.1429-1.9643,2.3214-0.89285,1.4286-1.0714,4.4643-1.25,2.5,1.25,1.7857,2.6786,2.1429h2.8571l1.4286,2.1428,2.3214,2.5,1.7857,0.35715-1.4286-2.1429v-2.5s-1.25-1.25-1.9643-1.6071c-0.71429-0.35715-3.5714-2.8572-3.5714-2.8572l-1.25-3.5714-0.17857-1.4286s1.9643-0.71428,2.6786-0.71428c0.71429,0,3.2143,0.89285,3.2143,0.89285l0.89285,1.7857,1.6072,0.17857,1.25-0.71429-0.35715-1.9643,0.17858-1.9643,1.4286-0.35714,1.6071,0.71429,1.7857,1.4286,1.25,1.0714,0.89286,1.7857-0.35714,1.7857-2.3214,2.5-3.0357,1.25,1.0714,1.4286,2.6786,2.1428,0.35714,2.8572,0.17857,3.3928-0.71429,2.6786-2.5,1.4286-2.6786,1.4286-3.5714,1.7857-2.1428,2.1429,0.35714,2.6786,1.4286,2.5,1.25,2.5,1.6071,1.0714h3.3929,2.5l1.7857,1.6071,0.53571,3.0357,0.17857,3.3928v2.8572l-1.9643,3.2143-1.7857,2.5h-2.6786l-0.71429,0.53572,0.53572,1.9643,0.71428,1.7857-0.53571,2.5-0.89286,1.25,2.3214,3.3928,0.53572,1.7857,0.35714,1.7857-1.25,1.7857-1.0714,1.25,0.89286,2.1428-0.17857,2.5-1.6072,1.6072,1.6072,1.7857,2.1428,1.9643,1.6072,1.4286-0.17858,3.3928-1.4286,2.3214-0.17857,2.6786,2.3214,2.1429,4.6429,0.89286,0.89285,1.4286-1.4286,2.1429-0.53571,3.3928-0.89286,2.3214-2.6786,1.4286s-0.89286,0.53572-1.6071,1.0714c-0.71429,0.53572-1.7857,2.8572-1.7857,2.8572l1.9643,1.7857,0.17857,2.3214-1.4286,2.1429-1.25,2.5-2.6786,2.3214-2.8572,2.8572-0.89285-1.7857-1.6072-2.1428-1.7857-1.0714-1.9643,0.71428-1.9643-0.71428-0.71429-1.6072-1.25-1.25-2.5-0.89285-2.1428-0.89286-0.71429-1.6071-0.89286-1.7857-1.4286-1.4286-2.8571-0.17857-2.5,1.4286-2.5,1.0714-2.6786,0.17857-4.1072-1.6071-3.5714-0.35714-2.1429-0.17858-0.89286-1.9643-1.0714-2.3214v-1.4286l-3.3928-0.71429-2.3214-0.53571-0.89286-2.5-0.71429-2.3214s1.4286-0.17857-1.0714-0.35714-5.5357-1.0714-5.5357-1.0714l-1.4286-0.53572-3.2143-2.5-2.5-1.6071-2.8572-1.0714-3.2143-1.25-1.25-0.89285-0.17857-2.1429-2.8572-3.9286,0.17857-6.7857-1.25-1.7857-2.3214-2.8571-1.0714-2.1429-0.53572-0.53572-1.0714,1.25-0.53571,0.71429h-1.4286l-2.6786,0.89286-1.25,0.35714-1.6072-0.35714-2.1428-2.3214-1.7857-1.6071,0.53572-0.89286,1.4286-1.6071-0.35714-1.7857-2.5-2.3214-3.0357-1.4286-4.2857,0.35714-3.0357-1.25-2.6786-0.89285-3.3929-4.2857,2.3214-2.5,2.5-3.75,0.17857-5.3571,0.35715-1.4286,3.75-1.0714,2.6786-2.5,1.4286-1.4286h3.75,3.3929l3.9286,0.53571,1.7857-1.25,3.5714-1.6071,3.3929-0.53571,2.5-1.25,2.3214-1.25,0.35714-2.8572-2.1429-2.3214-0.71428-1.25,0.53571-1.6071,2.3214-1.4286,0.35714-1.25,1.92-2.87z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_ya" class="jvectormap-region"></path>
                                    <path d="M501.66,122.41c-0.45,0.04-1,0.37-1,0.37-0.9,0.72-1.25,0.77-0.94,1.13,0.31,0.35,0.19,0.55,0.9,0.78,0.72,0.22,0.91,0.49,1.44,0,0.54-0.49,0.77-1.24,0.41-1.69s-0.37-0.64-0.81-0.59zm11.56,0.65c-0.22,0.02-0.44,0.11-0.6,0.38-0.31,0.53-0.49,1.57-0.62,1.84s-0.2,0.74-0.78,0.88c-0.58,0.13-1.39,0.54-1.75,0.09s-1.03-1.51-1.25-1.69-1.04-0.74-1.13-0.03c-0.09,0.72,0.19,1.51,0.19,1.91s-0.18,0.99-0.4,1.12c-0.23,0.14-1.06,0.25-1.29,0.56-0.22,0.32-0.62,0.49-0.62,1.16s-0.27,1.67-0.31,1.94c-0.05,0.27-0.32,0.26-0.63,0.75s-1.09,1.87-1.09,1.87,0.89,0.62,1.15,0.85c0.27,0.22,0.42,0.77,0.38,1-0.05,0.22-0.13,1.05-0.53,1.19-0.4,0.13-1.43,0-1.78-0.13-0.36-0.13-1.01-0.48-1.5-0.44-0.49,0.05-1.01,0.23-1.19,0.63s-0.71,0.38-0.13,1.18c0.58,0.81,0.87,1.53,1,1.76,0.14,0.22,0.29,1.51,0.07,1.87-0.23,0.36-1,1.13-1.22,1.53-0.23,0.4-0.44,0.71-0.22,1.16,0.22,0.44,0.66,0.8,1.15,0.94,0.5,0.13,3.66,0.71,3.66,0.71s0.28-0.36,0.81-0.71c0.54-0.36,1.36-0.77,1.85-0.41s0.52,0.8,0.65,1.25c0.14,0.45,0.41,2.02,0.5,2.37,0.09,0.36,0.49,0.58,0.94,1.16s1.59,1.37,2.22,1.59c0.63,0.23,1.05,0.55,1.72,0.6,0.67,0.04,2.85,0.82,2.94,1.09s0.31,1,0.31,1,0.54,0.52,0.81,0.56c0.27,0.05,2.22,0.19,2.22,0.19,1.38-0.76,2.23-0.8,2.5-0.94,0.27-0.13,0.84-0.03,1.37-1.06,0.54-1.03,0.76-1.35,0.63-2.06-0.13-0.72-0.34-0.93-0.87-1.6-0.54-0.66-1.5-1.24-1.1-1.56,0.4-0.31,1.56-0.8,1.88-1.15,0.31-0.36,0.54-1.32,0.4-2.35-0.13-1.02-0.15-2.5-0.47-2.9-0.31-0.41-0.73-0.92-1.4-1.19s-1.23-0.67-1.81-0.53c-0.59,0.13-1.92,0.25-2.19,0.03s-0.62-0.83-0.85-1.5c-0.22-0.67-0.5-1.13-0.5-1.53s1.16-3.63,1.16-3.63,0.71-0.29,0.84-0.56c0.14-0.27,0.36-0.76,0.22-1.66-0.13-0.89-0.39-1.55-1.28-2.09s-2.09-1.72-2.09-1.72v-0.97c0-0.35-0.15-1.73-0.28-2-0.14-0.27-0.48-0.72-0.97-0.72-0.25,0-0.5-0.05-0.72-0.03zm17.72,22.91c-0.13,0.02-0.25,0.07-0.35,0.19-0.4,0.44-0.72,1.12-0.9,1.34s-0.51,0.09-0.91,0-0.89-0.43-1.16-0.03c-0.26,0.4-0.67,0.74-0.71,1.19-0.05,0.44,0.09,1.75,0.09,2.46,0,0.72,0.09,1.8,0,2.6s-0.2,1.3-0.78,1.66c-0.58,0.35-0.91,0.4-1.31,0.93-0.41,0.54-1.13,1.25-1.13,1.88,0,0.62,0.06,1.45-0.66,2.03-0.71,0.58-1.14,0.56-0.96,1.4,0.17,0.85,0.22,0.93,0.84,1.38s2.79,0.63,3.28,0.5,1.26-0.77,1.66-1.22,1.61-0.99,2.28-1.12c0.67-0.14,1.17-0.08,2.16-0.13,0.98-0.04,1.54-0.39,2.03-0.65,0.49-0.27,0.54-0.54,1.43-0.54,0.9,0,1.74,0,2.1-0.31,0.35-0.31,1.35-1.19,1.62-1.5s0.88-1.05,0.97-1.5,0.18-1.3,0-1.75,0.15-1.15-1.19-1.28-1.57,0.07-1.84-0.38c-0.27-0.44-1.03-0.88-1.03-1.37s0.08-1.02-0.19-1.37c-0.27-0.36-0.79-0.81-1.28-0.72s-1.31,0.58-1.53,0.62c-0.22,0.05-0.71-0.09-0.85-0.4-0.13-0.32-0.21-1.11-0.21-1.91s-0.25-1.63-0.25-1.63c-0.34-0.13-0.83-0.43-1.22-0.37zm5.22,20.03c-0.62,0.05-1.16,0.75-1.16,0.75s-1.62,1.95-2.16,2.84c-0.53,0.9-0.86,1.08-1.93,1.25-1.08,0.18-1.82,1.63-1.82,1.63s-0.51,1.23-0.68,2.12c-0.18,0.9-1.25,3.07-1.25,3.07v1.93l0.87,1.63s1.6,1.05,1.78,2.12c0.18,1.08-2.12-0.68-2.12-0.68s-2.14-0.73-3.03-0.91c-0.9-0.18-1.64,0.01-3.07,0.19-1.42,0.18-1.25,0.34-1.25,0.34l0.72,1.63s1.61,1.4,1.25,2.65c-0.35,1.25-1.4-0.53-1.4-0.53l-1.97-0.87s-1.98,0.16-2.88,0.87c-0.89,0.72-1.25,0.91-1.97,0.91-0.71,0-1.59-0.71-2.12-1.78-0.54-1.08-0.91-0.91-1.63-1.44-0.71-0.54-3.2,0-4.09,0s-2.32,1.79-3.75,1.97-1.78,0.53-1.78,0.53l0.34,2.12-1.97,1.1-2.12,0.53-2.16,0.53c-0.71,0.18-2.12-0.19-2.12-0.19l-1.97-0.34-1.44,0.87-0.53,0.57-2.84,0.15-2.16,0.91s-2.49,2.13-4.09,2.31c-1.61,0.18-0.19,0.53-0.19,0.53s1.06,0.91,1.06,1.63c0,0.71-0.7,0.87-0.87,1.4-0.18,0.54-1.45-0.33-2.35-0.68-0.89-0.36-1.25,0-1.25,0s0.2,1.04,0.38,1.93c0.18,0.9,1.06,1.28,1.06,2.35s-0.19,2.12-0.19,2.12,0.53,2.69,0.53,3.41v2.69c0,0.89-0.87,1.59-0.87,1.59s-1.25,0.72-3.03,0.72c-1.79,0-0.91-0.72-0.91-0.72l0.72-0.91-0.53-1.4-1.97-0.38-2.31,1.25-1.78-0.53h-3.22-3.94c-1.43,0-1.95-1.07-2.84-1.25-0.9-0.18-2.88-0.34-2.88-0.34s-2.14-0.02-3.03,0.34-1.97,1.06-1.97,1.06v3.07,3.03s-1.6,0.69-1.78,1.4c-0.18,0.72,0.01,2.68,0.19,3.75,0.18,1.08,1.05,0.72,2.12,1.25,1.07,0.54,2.16,1.25,2.16,1.25l0.53,0.57,0.34,1.78s0.57,1.94,0.57,2.65c0,0.72,1.25,1.97,1.25,1.97s0.68,1.63,0.68,2.35c0,0.71-0.51,1.22-0.87,1.93-0.36,0.72-0.73,1.61-0.91,2.5-0.18,0.9,0,2.16,0,2.16l0.38,2.84s-0.2,2.88-0.38,3.6c-0.18,0.71-0.89,1.42-1.78,1.78s-1.25,2.12-1.25,2.12,0.01,2.7,0.19,3.6c0.18,0.89,0.88,1.42,1.59,1.78,0.72,0.36,1.25,1.78,1.25,1.78l-0.87,1.78-1.78-0.34-1.44-1.78-0.91-1.82v-2.5s-0.54-1.76-1.97-2.65c-1.42-0.9,0.19-1.63,0.19-1.63s1.08-1.25,1.44-1.97c0.36-0.71,1.06-1.78,1.06-1.78s1.8-1.6,2.16-2.5c0.35-0.89-0.38-1.4-0.38-1.4l-1.06,0.68-1.78,1.82-1.78-0.91s0.69-1.25,0.87-1.78c0.18-0.54,0.54-1.79,0.72-2.5,0.18-0.72,0.35-1.6,1.06-2.31,0.72-0.72,2.35-0.19,2.35-0.19l1.25-1.25v-1.63l-1.1-1.59s-1.4-0.17-3.9-0.34c-2.5-0.18-0.72-1.25-0.72-1.25l-0.72-1.82s-0.72-1.76-1.44-2.12c-0.71-0.36-1.94-3.04-2.65-3.75-0.72-0.72-1.1-1.44-1.82-2.16-0.71-0.71-2.11-1.78-3.18-2.5-1.08-0.71-1.97-1.4-1.97-1.4l-1.63,0.34s-1.05,1.07-0.15,2.5c0.89,1.43,1.06,1.44,1.06,1.44l1.25-0.28,0.97,0.18,1.22,0.5,1.15,1.07,1.06,0.71,0.91,1.07,0.53,0.9,0.1,0.94-0.6,1.63-1.68,1.84-1.29,0.81-1.93,0.88,0.81,1.15s2.04,1.71,2.22,1.85c0.18,0.13,0.69,0.9,0.69,0.9l0.31,2.85,0.09,2.59s-0.33,2.1-0.37,2.28c-0.05,0.18-0.63,0.88-0.63,0.88l-7.09,3.97-1.44,0.9-1.25,0.94-0.66,0.81s0.3,2.37,0.35,2.6c0.04,0.22,0.64,1.18,0.69,1.4,0.04,0.23,1.28,2.69,1.28,2.69s1.15,1.2,1.46,1.69c0.32,0.49,2.16,0.31,2.16,0.31h3.44c0.4,0,1.34,0.5,1.34,0.5s1.3,0.98,1.35,1.16c0.04,0.17,0.37,1.31,0.37,1.31l0.38,3.34s0.09,3.42,0.09,3.69-0.5,1.56-0.5,1.56l-0.34,1.22c-0.04-0.01-0.07-0.03-0.1-0.06l-1.15,2.06-1.82,1.69-1.68,0.28-1.6,0.28,0.16,1.41s1,1.98,1,2.34-0.01,1.68-0.19,2.13c-0.18,0.44-0.81,1.68-0.81,1.68l0.47,1.19,1.15,1.69,0.88,2.41,0.47,1.68-1.16,1.97-1,1.63,0.72,1.93s0.08,1.53-0.09,1.97c-0.18,0.45-1.07,1.16-1.07,1.16l-0.43,1.19s4.1,3.63,5,4.53c0.89,0.89,0.15,1.52,0.15,2.06s-0.72,2.5-0.72,2.5l-1.25,2.22,0.1,1.87s1.54,1.46,1.72,1.82c0.17,0.35,1.68,0.78,2.22,0.87,0.53,0.09,2.78,0.38,2.78,0.38l1.25,1.31-0.19,0.81-1.16,1.63-0.72,3.28s-0.8,2.07-1.15,2.34c-0.36,0.27-1.44,1.16-1.44,1.16l-2.22,1.15-1.72,2.41,0.38,0.97,1.34,1,0.25,1.78-0.81,1.78-1.25,2.78-1.5,1.41-2.31,2.34-1.72,1.6-1.5,2.25s-0.9,2.92-0.81,4c0.08,1.07,0.96,0.72,0.96,0.72s1.62,1.07,2.16,1.34,1.51,0.99,1.78,1.34c0.27,0.36,1,1.24,1,1.69v1.53l-0.81,0.88-1.25,0.81-3.41,1.25-1.69,0.34-2.4-0.25s-1,0.43-0.91,0.78c0.09,0.36,0.72,1.63,0.72,1.63s0.45,1.24,0.63,1.69c0.17,0.44,0.27,0.88,0.72,1.06,0.44,0.18,0.09,2.97,0.09,2.97s-0.89,2.3-1.16,2.75c-0.27,0.44-0.46,1.25-0.37,1.87,0.09,0.63,0.72,1,0.72,1s1.7,0.69,2.06,0.78,2.94,1.1,2.94,1.1,3.13,0.72,3.84,0.72,2.58,0.06,3.56,0.15,2.5,1,2.5,1,1,0.87,1.53,1.41c0.54,0.53,0.25,4.64,0.25,5s2.88,0.19,3.5,0.28c0.63,0.09,2.32,0.81,2.32,0.81s0.43,1.33,0.43,1.69-0.43,1.88-0.43,1.88l-1.78,0.9-3.47,1.5-0.57,1.06s-1.13,4.74-1.4,5.19,0.53,1.88,0.53,1.88l1.5,0.62,2.25,1.06s3.47,2.25,4.09,2.79c0.63,0.53-0.09,0.96-0.09,0.96l-0.97,1.82-5.44,4.72-0.72,1.96-0.18,1.5s-0.44,3.58-0.44,3.94,0.34,1.53,0.34,1.53,1.81,1.15,2.25,1.5c0.45,0.36,1.88,1,1.88,1l0.72,1.41s0.79,1.54,1.06,2.34c0.27,0.81-0.72,0.97-0.72,0.97l-3.56,2.94-1.97,0.91s-1.35,1.33-1.44,1.87,0.81,0.97,0.81,0.97l0.97,1.44,1,1.34s1.95,0.73,2.75,0.91c0.81,0.17,1.63-0.57,1.63-0.57s1.42-1.95,2.4-2.22c0.99-0.26,0.53,0.46,1.07,0.72,0.53,0.27,1.96,0.61,2.59,0.88s2.22,1.34,2.22,1.34l0.81,2.06,1.78,7.41,0.82,2.5-1.26,4.13s0.1,2.05,0.19,2.4c0.09,0.36,0.8,1.24,1.07,1.6,0.26,0.35,0.43,2.15,0.43,2.15l-0.97,1.35-2.4,1.5-1.1,1.78s-2.3,3.32-2.65,3.59c-0.36,0.27-2.06,1.14-2.6,1.41-0.53,0.27-2.06,1.44-2.06,1.44s0.27,1.06,0.63,1.15c0.35,0.09,0.53,2.16,0.53,2.16l0.81,1.06,1.88-0.44,3.21,0.78,2.5,0.91s1.25,0.88,1.79,1.06c0.53,0.18,3.4-0.44,3.4-0.44s5.87-2.32,6.31-2.59c0.45-0.27,1.72-1.06,1.72-1.06s2.5-1.89,3.03-2.25c0.54-0.36,3.74-2.14,4.1-2.41,0.35-0.27,1.44-1.78,1.44-1.78l0.9-2.12s0.16-1.99,0.25-2.44,0.53-1.5,0.53-1.5l0.72-1.25,2.16-0.19,3.12,0.44,2.32,0.19s3.57,0.1,4.37-0.35c0.8-0.44,0.45-0.72,0.63-1.34,0.17-0.63-0.27-0.9-0.63-1.35-0.36-0.44-1-1.33-1.53-1.78-0.54-0.44-1.25-1.15-1.25-1.15s-2.31-4.22-2.31-4.75c0-0.54,0.81-1.15,2.15-1.69s3.91-0.97,3.91-0.97l2.06-1.19-0.09-2.65,0.47-1.78s1.16-2.8,1.25-3.07c0.09-0.26,1.51-2.93,1.68-3.56,0.18-0.62,0.62-1.79,1.07-2.59,0.44-0.81,1.62-1.68,2.15-2.03,0.54-0.36,1.68-1.91,2.13-2.44,0.44-0.54,1.09-2.22,1.09-2.22l-0.19-4.09s-2.13-2.42-2.4-3.22c-0.27-0.81,0.07-1.43,0.34-1.78,0.27-0.36,1.61-1.88,1.97-2.5,0.36-0.63,0.81-2.53,0.81-2.97,0-0.45,0.98-1.5,1.88-2.13,0.89-0.62,2.83-0.18,3.28,0s1.09,0.81,1.72,1.35c0.62,0.53,3.28,0.68,3.28,0.68s1.07-1.42,1.25-1.87,0.98-1.77,1.25-2.22,1.53-1.07,2.25-1.16c0.71-0.09,1.69,0.63,1.69,0.63s0.97,1.78,1.15,2.31c0.18,0.54,1.18,1.61,1.53,1.97,0.36,0.36,1.26,1.8,1.35,2.16,0.09,0.35,1.06,0.33,2.22,0.15s0.09-1.4,0.09-1.4v-2.16s-0.62-2.16-0.62-2.78c0-0.63,0.71-1.78,0.71-1.78s2.5-0.8,3.03-1.06c0.54-0.27-0.08-1.17,0.1-1.97,0.18-0.81,1.33-1.7,1.69-1.88,0.35-0.18,2.96-0.61,3.4-0.87,0.45-0.27,1.41-1.25,1.41-1.25l0.62-2.69,0.28-2.88s-0.02-0.11-0.03-0.12c0.09-0.06,0.32-0.22,0.32-0.22l1.31,0.19s0.6-0.58,1.31-0.94c0.72-0.36,0.79,0.03,0.97,0.03s0.68,1.11,0.81,1.47c0.14,0.36,0.36,1.26,0.41,1.53,0.04,0.27,1.38,0.68,1.56,0.72s1.55,0.47,1.81,0.56c0.27,0.09,1.66,1.08,1.97,1.44,0.32,0.36,1.04,0.45,2.38,0.94s1.53-0.28,1.53-0.28l0.65-0.63s0.23-1.4,0.32-1.94c0.09-0.53,0.72-0.87,0.72-0.87s1.51-1.22,1.87-1.63c0.36-0.4,0.5-0.87,0.5-0.87s0.34-2.99,0.16-3.13c-0.18-0.13-1.38-0.71-1.78-0.84-0.41-0.13-1.6-1.46-2-2.13-0.41-0.66,0.3-1.16,0.43-1.43,0.14-0.27,1.41-1.06,1.63-1.28,0.22-0.23,1.06-0.78,1.59-1,0.54-0.23,0.27-2.9,0.22-3.35-0.04-0.44-0.7-0.44-1.81-0.62-1.12-0.18-1.97-0.85-1.97-0.85s-1.52-1.52-2.19-2.28-0.22-2.76-0.22-3.03,0.17-4.1,0.13-4.9c-0.05-0.81,0.54-1.63,0.72-1.85s2.37-0.49,2.59-0.53,1.9-0.99,2.35-1.34c0.44-0.36,0.59-1.19,0.59-1.19s-0.37-1.3-0.5-1.75c-0.14-0.45,0.72-1.65,1.03-1.88,0.31-0.22,1.91-1.37,1.91-1.37s1.07-6.86,1.25-7.13c0.17-0.26-0.32-1.59-0.32-1.59s-1.19-3.62-1.28-3.84c-0.09-0.23-0.68-1.65-0.5-2.32s1.27-1.02,1.41-1.25c0.13-0.22,0.07-0.97-0.16-1.15-0.22-0.18-1.03-1.16-1.03-1.16s0.58-3.41,0.63-3.81c0.04-0.4,0.28-1.69,0.28-1.69l1.22-0.84s3.79-0.07,4.06-0.07,2.03-0.79,2.44-1.06c0.4-0.27,0.13-1.66,0-1.84-0.14-0.18-1.19-1.94-1.19-1.94h-2.28l-2.5,0.06-2.1-0.43-1.03-0.41s-2.49-0.25-2.72-0.25c-0.22,0-1.5-0.16-1.5-0.16l-0.65-0.25s-0.13-1.6-0.13-1.87,0.48-0.55,1.07-0.91c0.58-0.35,0.93-0.94,0.93-0.94s-0.17-0.98-0.43-1.34c-0.27-0.36-0.1-0.97-0.1-0.97s2.29-2.76,2.38-2.93c0.09-0.18,0.62-1.04,0.62-1.04s0.89-1.56,1.06-2.18c0.18-0.63-0.59-1.16-0.59-1.16s-3.42-4.04-3.78-4.44-1.14-1.64-1.31-1.9c-0.18-0.27-0.91-1.24-1-1.69s0.31-1.41,0.31-1.41l1.09-3.47-0.56-1.06s-1.07-0.96-1.16-1.09c-0.09-0.14-1-0.75-1-0.75s-0.63-0.55-0.5-0.91c0.14-0.36,1.36-0.56,1.63-0.56s2.31-0.69,2.31-0.69,1.39-0.56,1.56-0.78c0.18-0.22-0.03-1.16-0.03-1.16s-1.56-17.7-1.56-18.06-0.65-1.56-0.78-1.78c-0.14-0.22-2.19-2.34-2.19-2.34l-0.72-5.16h0.06s1.85,0.06,2.47,0.06c0.63,0,0.97-0.84,0.97-0.84l2.5-2.06,1.53-1.38s0.57-0.52,0.88-0.56c0.31-0.05,1.26,0.58,1.44,0.62,0.17,0.05,1.47,0.6,1.47,0.6s0.99-0.52,1.43-0.66c0.45-0.13,0.75-0.62,0.75-0.62l-0.31-5.94,4.16-2.16s0.93-1.1,0.93-1.28,0.57-1.87,0.57-1.87l4.47-3.1s1.78-2.23,2.18-2.5-0.03-0.62-0.03-0.62l-1.25-1.85s-1.07-1.29-1.78-1.47c-0.71-0.17-0.91-1.09-0.91-1.09l0.29-5-0.6-0.47-2.84-2.31-3.41-2.69-0.72-1.97-0.34-1.4-1.06-1.78,0.15-0.91,1.25-2.69-1.4-1.4-1.63-1.97-0.72,1.59s-1.43-0.53-2.5-0.53-1.06,1.44-1.06,1.44-1.95,0.71-2.84,1.25c-0.9,0.53-1.25,1.78-1.25,1.78s-1.45,1.25-2.16,1.25-2.14,0.01-3.03,0.19c-0.89,0.17-1.43,1.41-1.97,2.12-0.54,0.72-1.44,2.33-2.16,2.69-0.71,0.36-0.71,0.34-1.78,0.34s-0.16-0.7,0.38-2.31c0.53-1.61,1.95-1.79,2.31-2.5s0.72-1.78,0.72-1.78l2.5-0.91s0.54-3.02,1.44-3.37c0.89-0.36,3.75-0.53,3.75-0.53s1.22-1.63,1.4-2.35c0.18-0.71,1.44-1.58,1.97-2.65,0.54-1.08,0.72-1.79,0.72-2.5,0-0.72,0.91-1.82,0.91-1.82l2.5-2.12s1.58-1.6,1.93-2.31c0.36-0.72,2.16-1.97,2.16-1.97l2.16-1.97,2.31-2.5s0.19-1.44,0.19-2.16c0-0.71-0.72-1.78-0.72-1.78s-1.26-0.9-1.97-1.44c-0.72-0.53-1.78-0.7-1.78-1.59s0.16-0.72,0.34-1.44c0.18-0.71,0.72,0,0.72,0l1.44,1.1,0.15-1.25-0.15-2.35-0.53-1.97-2.69-0.68-1.78-1.1h-2.16c-0.71,0-0.52-0.69-0.87-1.4-0.36-0.72-0.37-1.62-0.91-2.69s-2.31-0.19-2.31-0.19l-1.78,0.91c-0.72,0.35-0.73,0.52-1.44,1.06-0.72,0.54-1.61-0.37-3.22-0.91-1.61-0.53-1.77,0.02-2.84,0.38-1.08,0.36,0.17,0.88,0.53,1.59,0.35,0.72,0,1.44,0,1.44l-2.35-0.19s-1.06-0.35-1.78-1.25c-0.71-0.89,0.19-1.06,0.19-1.06s1.25-1.43,1.25-2.5-0.72-1.25-0.72-1.25h-2.69c-1.25,0-1.96-0.17-3.03-0.34-1.07-0.18-1.25-0.37-1.97-1.44-0.71-1.07,0.57-0.53,0.57-0.53l1.4-1.25,1.25-0.72,2.69,0.34s0.9,0.56,1.97,0.38,0.19-0.72,0.19-0.72l-1.63-1.06s-1.77,0.34-2.84,0.34-2.16-0.72-2.16-0.72l-1.97-0.87s-1.41-1.45-2.12-1.63c-0.09-0.02-0.2-0.04-0.28-0.03zm-45.94,3.34c-0.85,0.32-1.23-0.03-1.5,0.82-0.27,0.84-0.34,0.96,0.16,1.18,0.49,0.23,0.87,0.53,1.4,0.44,0.54-0.09,1.24-0.47,1.06-1.09-0.17-0.63-1.12-1.35-1.12-1.35zm20.84,3.82c-0.33,0-0.47,0.12-0.94,0.56-0.62,0.58-1.62,1.37-1.71,1.9-0.09,0.54,0.12,0.96-0.19,1.54s-1.55,1.81-2,2.12-2.51,0.16-2.6,0.47c-0.08,0.31-0.37,0.52,0.04,0.87,0.4,0.36,2.91,0.63,3.72,0.54,0.8-0.09,3.3-0.3,3.74-0.35,0.45-0.04,0.71,0.28,0.66-0.43-0.04-0.72-0.72-1.36-0.4-1.85,0.31-0.49,0.6-0.65,0.78-0.97,0.17-0.31,0.49-1.06,0.31-1.47-0.18-0.4-0.72-0.95-0.72-1.53s-0.28-1.37-0.28-1.37c-0.18-0.01-0.3-0.04-0.41-0.03zm-45.53,6.62c-0.49,0-2.1,0.86-2.19,1.13-0.09,0.26-0.56,0.38,0.07,0.97,0.62,0.58,0.39,0.88,1.15,0.84,0.76-0.05,1.55-0.67,2.22-0.63,0.67,0.05,1,0.79,1.31,0.79,0.32,0,0.62-0.23,0.66-0.72s-0.42-0.89-0.59-1.07c-0.18-0.17-0.54-0.18-0.54-0.18-0.31-0.45-1.6-1.13-2.09-1.13zm-2.06,6.25c-0.54,0.18-1.01,0.45-1.5,0.63-0.49,0.17-0.81,0.17-1.13,0.43-0.31,0.27-0.72,0.46-0.72,0.82,0,0.35,0.15,0.5,0.6,0.81s0.52,0.62,1.19,0.62,1.89-0.5,2.03-0.81c0.13-0.31,0.48-0.94,0.53-1.25,0.04-0.31-1-1.25-1-1.25zm-51.31,9.13l-2.35,2.12-0.34,1.78,1.97,0.38,1.25,0.87h2.5l1.25-0.87v-1.78l-1.63-2.16-2.65-0.34zm59.09,4.4c-0.49,0.14-1.47,0.59-1.25,1.03,0.22,0.45,0.5,0.8,0.91,0.75,0.4-0.04,0.74-0.01,0.87-0.5,0.14-0.49-0.22-1.25-0.22-1.25l-0.31-0.03zm97.34,1.78c-0.09,0.01-0.18,0.07-0.28,0.22-0.38,0.6-0.53,1.69-0.4,2.1,0.12,0.41-0.42,0.87,0.12,1.31s0.62,1.22,1.53,1.25c0.92,0.03,1.9,0.47,2.63-0.06,0.72-0.54,1.43-1.69,1.65-2.19,0.22-0.51,0.32-1.22,0.07-1.53-0.26-0.32-0.62-0.81-1.13-0.88-0.5-0.06-1.19,0.16-1.19,0.16-1.07,0.31-0.99,0.66-1.78,0.31-0.59-0.26-0.92-0.72-1.22-0.69zm-135.37,0.22l-1.97,0.19-1.44,1.44,0.53,1.06,1.63-0.91,1.44,0.57,0.34,1.59,1.25,0.34,0.72-0.87-0.53-1.06-1.97-2.35zm27.09,1.13c-0.49,0.01-1.04,0.1-0.9,0.5,0.17,0.53,1.09,0.75,2.03,0.75s2.97,0.08,3.06,0.44c0.09,0.35,0.68,1.56,0.91,1.65,0.22,0.09,0.92,0.13,0.97-0.41,0.04-0.53-0.44-1.13-0.76-1.4-0.31-0.27-2.09-1.25-2.09-1.25-0.45-0.09-2.24-0.28-2.78-0.28-0.13,0-0.27-0.01-0.44,0zm10.31,1.12c-0.71,0.23-0.93,0.25-0.93,0.88,0,0.62-0.1,1.06,0.43,1.15,0.54,0.09,0.85,0.33,1.26,0.07,0.4-0.27,0.59-0.91,0.37-1.22s-1.13-0.88-1.13-0.88zm-44.71,1.16l-1.44,1.25,0.72,0.87,1.78-1.06-1.06-1.06zm6.4,2.31v1.78l2.35-0.53v-1.25h-2.35zm133.35,1.5c-1.05,0.29-1.25,0.28-2.07,0.6-0.82,0.31-1.49,0.24-1.87,0.74-0.38,0.51-0.44,0.28-0.66,1.29s-0.69,0.99,0.1,1.31c0.79,0.31,1.39,0.29,2.31-0.41,0.91-0.69,1.71-1.09,2.19-1.65,0.47-0.57,0.84-1.19,0.84-1.35s-0.84-0.53-0.84-0.53zm-122.41,0.5c-0.4,0.63-0.65,1.16-0.87,1.56-0.23,0.41-0.68,0.77-1.13,1.66s-0.81,1.32-0.81,2.03c0,0.72,0.24,1.18,0.68,1.41,0.45,0.22,0.34,0.5,0.57,0.5,0.22,0,0.82,0.09,1.31,0s1.03-0.19,1.03-0.5v-1.88c0-0.53-0.31-3.37-0.31-3.59s-0.47-1.19-0.47-1.19zm-16.47,0.69l-1.06,0.87v1.25l1.44,0.57,0.87-1.25-1.25-1.44z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b3d695" original="#b3d695"
                                          id="jqvmap4_kr" class="jvectormap-region"></path>
                                    <path d="m424.64,359.43,1.25,3.2143,1.25,2.3214s-0.53571,2.3214-0.71428,3.0357c-0.17857,0.71429-1.6071,3.0357-1.6071,3.0357s0.53571,1.25,1.6071,1.9643c1.0714,0.71429,5.8929,1.7857,5.8929,1.7857l5.3571,0.17857s3.75,0.89285,4.1071,1.6071c0.35714,0.71429,0.89286,1.0714,0.89286,2.1429,0,1.0714,0.35714,4.2857,0.35714,4.2857s1.25,0.35714,2.6786,0.35714,3.0357,0.35715,3.0357,0.35715,0.35714,2.1428,0.35714,2.6786c0,0.53571-0.89286,1.7857-1.9643,1.7857s-3.75,1.6072-3.75,1.6072-1.25,2.6786-1.25,3.75-0.89285,3.5714-0.53571,4.2857c0.35714,0.71429,4.4643,1.7857,5.1786,2.1429,0.71429,0.35714,3.2143,2.6786,3.2143,2.6786s-0.71429,1.6071-1.6072,2.6786c-0.89285,1.0714-4.1071,3.0357-5.3571,4.6429-1.25,1.6071-0.35714,2.8571-0.35714,2.8571l-0.71429,1.6071-3.2143,0.53572-3.2143,0.35714-1.4286-1.6071-1.9643-0.17857-4.66-0.57h-2.3214l-1.25,1.0714s-2.1429,1.0714-3.2143,1.25c-1.0714,0.17857-5.3571,1.25-6.0714,1.25-0.71428,0-6.4286,0.71429-6.4286,0.71429l-3.3928,1.4286h-2.3214l-0.35715-1.9643,0.71429-2.1429-0.35714-2.3214,1.7857-2.3214-0.53571-1.4286s-1.0714-0.17858-1.9643,0.53571c-0.89286,0.71429-4.4643,1.0714-4.4643,1.0714l-4.2857-0.17857-1.9643-2.3214-0.89286-3.0357s-1.25-1.0714-2.6786-0.71428c-1.4286,0.35714-1.6072,1.25-2.6786,1.25s-2.5,0-3.0357-0.89286c-0.53571-0.89286-0.89285-3.0357-0.89285-3.0357l-0.9-2.33s-1.6071-0.89286-2.5-1.6071c-0.89286-0.71429-3.2143-2.3214-3.2143-2.3214l-5.1786-2.3214-4.2857-1.9643-4.6429-1.7857-2.6786-1.0714-1.7857-2.5v-3.0357l1.6072-2.8572,0.35714-1.7857-0.53571-2.3214,1.25-3.0357,0.71428-3.3929,1.9643-1.0714,3.3928-2.8571s0-2.1429,0.71429-2.3214c0.71429-0.17857,5.7143-1.6071,5.7143-1.6071l1.9643-1.7857,1.25-2.6786,2.5-1.6071,1.6071-3.2143s1.0714-1.0714,1.7857-1.7857c0.71428-0.71429,2.1428-1.4286,2.1428-1.4286l1.9643-0.35715,2.1429,1.7857,2.1428,1.0714,2.5,0.35714,2.8572,1.4286,1.0714,1.6071,3.0357,0.89286h3.3929l2.1428,0.35714,1.25,1.6072,2.6786,0.71428,2.3214,0.71429,2.1429,1.7857,1.25-0.89286,1.7857-0.53571,2.1428-1.4286,2.1429-0.17857,1.6071,0.71428,1.7857,0.89286z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_tm" class="jvectormap-region"></path>
                                    <path d="m341.43,421.57,4.1071,0.71429l4.4643-0.17858c1.25-0.17857,2.1429-0.71428,2.1429-0.71428l-2.14,3.4h-3.0357l-0.89285,2.1428s1.0714,1.9643,1.7857,2.5c0.71429,0.53572,2.6786,3.0357,2.6786,3.0357l0.53572,2.1428,2.3214,0.35715h1.4286s2.6786,0.35714,3.3928,0.35714c0.71429,0,0.89286,0,1.9643-0.35714,1.0714-0.35715,3.2143-0.71429,4.6429-0.71429h3.5714s2.6786,0.17857,3.5714-0.35714c0.89286-0.53572,0.89286-1.0714,2.3214-1.25,1.4286-0.17857,3.0357-0.17857,3.9286-0.17857,0.89286,0,1.9643-0.17857,1.9643-0.17857s0,1.6071,0.89286,2.1428c0.89285,0.53572,4.1071,2.6786,4.1071,2.6786l0.71428,0.71429c0.17858,0.71429-0.17857,2.5-0.17857,3.2143,0,0.71428-1.0714,0.71428-0.17857,1.6071,0.89286,0.89286,1.9643,1.4286,1.9643,1.4286l2.3214-1.9643,2.3214-2.3214s2.1429-0.53572,2.8572-0.53572c0.71428,0,3.0357,0,3.75-0.17857,0.71428-0.17857,1.4286-0.71429,2.6786-0.17857,1.25,0.53571,2.3214,0.71428,3.3929,0.71428,1.0714,0,3.5714-1.25,3.5714-1.25s1.7857-2.1428,1.9643-2.8571c0.21-0.7-0.33-4.45-0.33-4.45v-3.75c0-0.71429,0.71428-2.3214,1.25-2.6786,0.53571-0.35714,1.7857-0.89285,1.7857-1.7857,0-0.89286-0.89286-1.6071-0.89286-1.6071s-0.89285-0.53572-0.89285-1.4286c0-0.89286,0.35714-3.2143-0.53572-3.0357-0.89285,0.17857-4.1071,1.7857-4.1071,1.7857s0,0.17857-1.4286,0.17857-2.5,0-2.6786-0.71429c-0.17857-0.71428,0.35714-5,0.35714-5l0.53571-2.6786,0.17858-2.1429-2.8572,1.4286s-1.6071,0.53572-2.5,0.71429c-0.9,0.18-4.47-0.71-4.47-0.71l-2.1429-0.71428-1.4286-2.1429-1.4286-2.8571s-2.5,0.53571-3.2143,0.71428c-0.71428,0.17858-1.9643,0.53572-1.9643,0.53572l-2.3214-1.25-1.0714-3.3929v-1.25l-3.0357-1.7857s-1.9643-1.6072-2.6786-2.1429c-0.71428-0.53571-3.3928-1.7857-3.3928-1.7857s-3.3929-1.25-4.1072-1.6072c-0.71428-0.35714-1.9643-1.25-2.6786-1.6071-0.71428-0.35714-3.9286-1.4286-3.9286-1.4286l-1.9643,0.17857s-0.35715,1.0714-0.53572,1.9643c-0.17857,0.89285-1.0714,2.3214-1.0714,2.3214l-1.4286,1.0714-0.89286,1.6072,0.17858,2.1428-0.71429,1.4286h-3.2143l-2.5-0.35714-2.1428,0.89286-2.1429,2.3214-1.4286,1.9643-0.71429,2.6786,0.71429,1.9643,1.7857,2.6786v1.7857l-2.1428,3.5714z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_nv" class="jvectormap-region"></path>
                                    <path d="m351.25,435.14,1.7857,5,1.7857,5.1786,1.6071,6.7857,0.89286,8.5714,0.35714,8.2143,0.35714,2.8571,2.3214-0.53571,1.7857-0.53572,0.89285-0.53571,0.17857-1.9643,1.25-1.6071,1.25-0.35714,1.7857,0.53571,0.89286,1.9643,0.89285,2.8571,2.3214,2.8571,1.9643,1.6071,4.6428,0,3.3929-0.35714,2.5-0.89286,2.3214,0,3.3929,1.4286,1.0714,1.9643,2.3214,0.53572,2.3214-0.53572-0.17857-1.4286-1.6071-1.0714-1.0714-0.89286,0.35714-1.6071,0.71429-0.35714,2.5-0.35714,4.4643-0.71429,3.75-0.17857,2.6786-0.71429,2.3214-1.9643,1.0714-1.9643s0.53572-0.71428,1.25-0.71428c0.71429,0,3.3929-0.17858,3.3929-0.17858l1.9643-0.17857,1.0714-1.7857s0.53572-2.1429,1.25-2.5c0.71429-0.35714,0.89286-2.3214,0.89286-2.3214l0.71429-2.1429-0.35715-1.0714-0.71428-1.0714,0.71428-0.89286,1.25-0.53571-0.17857-1.0714-1.4286-1.6072-1.0714-1.0714c-0.17857-0.71429-0.89286-2.8572-0.89286-2.8572l-1.7857-1.7857-0.17857-0.89286-0.53572-2.1429-1.6071-1.4286-2.5-1.9643-1.74-1.79s-1.6072,1.0714-2.3214,1.4286c-0.71429,0.35715-1.7857,0.71429-1.7857,0.71429l-2.5,0.17857-2.5-0.35714-3.0357-0.17857-4.8214,0.71428-2.5,1.6072-1.6071,1.7857-1.0714,0.71429-0.89286,0.35714-1.4286-1.25-0.35714-0.89286,0.35714-0.89286,0.17857-1.7857-0.17857-1.4286-2.3214-1.6071-1.9643-1.25-1.0714-1.25-0.17857-0.89286-1.9643-0.17857-4.2857,0.17857-1.25,1.25-2.1429,0.53571-3.75-0.53571-4.2857,0.17857-2.6786,1.25h-2.5l-3.3929-0.17857z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap4_al" class="jvectormap-region"></path>
                                    <path d="m442.14,414.79-0.71428,2.3214,0.89286,1.6072,2.5,1.4286,1.7857,1.6071,1.25,2.5,0.17857,0.89286s-0.89286,1.4286-1.6071,2.1429c-0.71429,0.71428-4.2857,2.3214-4.2857,2.3214l-1.7857,1.7857-1.7857,1.7857v1.6072l1.0714,1.7857,0.17858,1.7857-1.9643,2.5s-1.25,1.0714-1.0714,1.7857c0.17857,0.71428,1.0714,1.4286,1.7857,1.6071,0.71428,0.17857,2.8571,0.89286,2.8571,0.89286l-0.71429,1.4286-1.25,1.7857-0.53571,1.6072-1.7857,0.71428-1.4286,1.6072,0.71429,1.25,1.25,1.25-0.89286,2.5-1.25,1.6071,0.53572,1.25,1.7857,1.7857-0.35714,1.6072-1.6072,1.9643-2.5,2.1429h-1.9643l-0.71429-1.7857-1.9643-1.25-2.6786-0.35714-1.4286,1.0714-2.1428-1.4286-0.71429-2.3214-1.0714-0.71429,0.17857-2.5-0.53571-2.5,0.89286-1.9643,0.71428-1.6071-2.1428-2.6786-1.6072-2.6786-1.25-1.4286-0.71428-2.3214-0.89286-1.7857-2.3214-2.1429-1.7857-1.6071-0.71429-1.25v-1.7857l-0.35714-4.6428,0.17857-2.5,0.71429-2.3214,1.25-1.4286,0.71428-1.25-1.4286-1.9643v-0.89286l-0.35714-2.5,1.6071-0.35714,4.4643-0.53571,2.5-0.89286,3.0357-0.89286,1.0714-0.35714,0.71428-0.89286h1.6072,1.9643,2.5l1.7857,0.35715,1.4286,0.35714,0.89286,0.89286,1.9643,0.53571,1.6071-0.17857,2.5-0.71429z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap4_km" class="jvectormap-region"></path>
                                    <path d="m392.32,478.89-0.44643,2.1428s-0.17857,1.875,0,2.5893c0.17857,0.71429,1.1607,2.3214,1.1607,2.3214l3.3036,0.89286s0.98215,1.1607,1.0714,1.6071c0.0893,0.44643,0.0893,3.3036,0.0893,3.3036s0.17857,0.89286,0.53571,1.6071c0.35715,0.71429,1.25,1.875,1.7857,2.2322,0.53571,0.35714,1.6071,1.25,2.4107,1.3393,0.80357,0.0893,3.125,0.0893,3.5714,0.0893,0.44643,0,4.0179,0.0893,4.0179,0.0893s1.0714,0.53572,1.6071,0.89286c0.53571,0.35714,1.4286,1.25,1.7857,1.875,0.35715,0.625,1.5179,1.6964,2.0536,1.9643,0.53571,0.26785,1.1607,0.80357,1.7857,1.1607,0.625,0.35714,1.6964,0.71429,2.4107,0.80357,0.71429,0.0893,2.9464-0.44643,3.3929-0.71428,0.44643-0.26786,2.3214-0.89286,3.4821-0.89286s4.7322-0.35714,5-0.44643c0.26786-0.0893,3.5714-1.3393,4.1964-1.3393s1.4286-0.89285,1.6071-1.25c0.17858-0.35714,0.625-1.9643,0.17858-2.7678-0.44643-0.80357-0.80358-1.0714-1.4286-1.4286-0.625-0.35715-1.4286-1.25-1.25-1.7857,0.17858-0.53571,1.9643-1.1607,2.4107-1.1607,0.44643,0,2.5,1.0714,2.5,0.26785,0-0.80357-1.6964-2.2321-1.6964-2.2321s-0.98214-1.3393-1.25-1.7857c-0.26786-0.44643-1.875-1.9643-1.875-1.9643s-2.2321-2.7679-2.0536-4.1071c0.17857-1.3393-0.0893-3.3929-0.0893-3.3929s-0.625-1.3393-0.71428-1.6964c-0.0893-0.35714-1.3393-0.17857-1.3393-0.17857l-1.5179,1.5179s-1.4286-0.26786-1.5178-0.80357c-0.0893-0.53572-0.71429-2.5893-0.71429-2.5893s-0.35714-1.7857-0.44643-2.1429c-0.0893-0.35714-0.17857-1.9643-0.17857-1.9643l1.6964-1.3393,2.8571-1.3393,0.35715-1.1607-1.3393-1.6071-0.80357-0.625-2.1429-0.53571-1.9643,0.98214s-1.0714-0.625-1.4286-0.80357c-0.35714-0.17857-1.0714-0.89286-1.0714-0.89286l-0.89286-1.7857s0-1.0714-0.71429-0.89286c-0.71428,0.17857-0.89285,0.71428-0.89285,0.71428s-1.1607,1.1607-1.1607,1.5179c0,0.35714-0.625,1.4286-0.625,1.4286l-0.98214,1.0714s-1.6071,0.44643-1.9643,0.44643h-3.0357c-0.35714,0-1.1607,0.71429-1.5179,1.0714-0.35714,0.35714-1.1607,1.9643-1.1607,1.9643l-1.5179,1.0714-0.98214,0.625-2.3214,0.71429h-2.3214l-4.1071,0.71428-4.1071,0.625-1.0714,0.625-0.0893,0.98215s0.0893,0.89285,0.53572,0.98214c0.44642,0.0893,1.6071,0.80357,1.6071,0.80357l0.44643,0.89286-0.0893,0.89286-1.875,0.625z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap4_lt" class="jvectormap-region"></path>
                                    <path d="m431.96,477.02,0.26786-1.6964s0.89286-0.625,1.6071-0.625c0.71429,0,1.6964,0.71428,2.4107,0.89286,0.71428,0.17857,2.7678,0.71428,3.0357,0.71428,0.26786,0,1.0714-0.80357,1.3393-1.25,0.26785-0.44643,1.9643-2.6786,1.9643-2.6786s0-1.25,0.625-1.6071c0.625-0.35715,1.875-0.35715,2.3214-0.35715,0.44643,0,1.6071-0.17857,2.3214,0.26786,0.71429,0.44643,1.1607,3.0357,1.1607,3.0357s0.89286,0.89285,1.1607,0.89285c0.26786,0,2.1429-0.80357,2.1429-0.80357s1.4286,0.17857,1.7857,0.44643c0.35714,0.26786,3.0357,0.89286,3.0357,0.89286s1.6964,1.6071,2.2322,1.6071c0.53571,0,1.6964,0.26786,2.6786-0.0893,0.98214-0.35714,2.8571-0.80357,3.3929-1.25,0.53571-0.44642,5.5357-1.9643,5.9821-2.5,0.44643-0.53571,7.0536-5.9821,7.0536-5.9821l2.1429-2.8571s-0.17857-1.875-0.17857-2.9464,1.0714-2.3214,1.4286-2.5893c0.35714-0.26785,2.8571,0.0893,3.3036,0.17858,0.44643,0.0893,4.375,0.89285,4.7321,0.80357,0.35714-0.0893,4.2857-0.44643,4.2857-0.44643l2.4107-2.2321s1.5179-0.35715,2.4107,0.0893c0.89286,0.44643,3.6607,2.5,4.1964,2.7679,0.53572,0.26786,3.75,2.3214,3.75,2.3214l1.6072,1.5178s1.25,0.71429,1.7857,0.44643c0.53571-0.26785,2.3214-0.89285,2.3214-0.89285l1.6071,0.53571,0.35714,1.25s0.53572,0.89286,0.53572,1.25-0.89286,1.6071-0.89286,1.6071-0.71428,0.53572-0.80357,1.1607c-0.0893,0.625-0.26786,4.1071-0.26786,4.1071s-0.0893,2.3214-0.0893,2.7679c0,0.44643-0.71429,2.1428-0.71429,2.1428l-1.4286,2.4107s-1.5179,1.3393-1.875,1.875c-0.35714,0.53571-2.2321,1.3393-2.4107,1.6964-0.17858,0.35714-0.71429,1.875-0.71429,1.875s-0.71429,1.875-0.71429,2.4107c0,0.53572-0.0893,3.3929-0.0893,3.9286,0,0.53572,0.53571,2.5,1.0714,3.2143,0.53571,0.71428,1.25,1.6071,1.25,2.0536,0,0.44643-0.80357,2.3214-1.1607,2.7679-0.35714,0.44643-4.8214,4.1964-4.8214,4.1964l-2.0536,1.25-2.1428,0.17857s-1.7857-0.98215-2.1429-0.89286c-0.35714,0.0893-2.3214,0.17857-2.6786,0.17857-0.35715,0-1.7857-0.89286-1.7857-0.89286s-1.6964-0.35714-2.1428-0.625c-0.44643-0.26785-1.7857-1.1607-1.7857-1.1607s-2.7679-0.26786-3.2143-0.26786c-0.44643,0-2.8572-0.17857-3.2143-0.53571l-2.0536-2.0536s-0.71429-1.4286-0.80357-1.9643c-0.0893-0.53571-0.17857-2.5-0.17857-2.5s-0.80358-0.80357-1.3393-1.25c-0.53571-0.44643-2.1429-0.89286-2.9464-0.89286-0.80357,0-3.9286,0.17858-3.9286,0.17858s-1.9643,0.53571-2.2321,0.625c-0.26786,0.0893-1.25,0.71428-1.875,0.80357-0.625,0.0893-2.0536,0.0893-1.9643-0.80357,0.0893-0.89286,1.25-1.6964,1.3393-2.0536,0.0893-0.35714-0.0893-1.0714-0.71429-1.3393-0.625-0.26786-2.1429-0.17857-3.0357,0.0893-0.89286,0.26786-2.3214,0.80358-2.8572,0.89286-0.53571,0.0893-3.3928,0.71429-3.3928,0.71429s-2.1429,0.89285-2.6786,1.0714c-0.53572,0.17857-3.8393,1.1607-3.8393,1.1607l-3.0357,1.5179-2.4107,1.1607-2.5893-0.26786-2.1429-0.98214-1.5179-0.71428-1.25-1.25c0-0.44643,0.35714-0.98215,0.35714-0.98215l2.4107-0.44643,1.7857,0.53572s1.25-0.35714,0.17857-1.0714c-1.0714-0.71429-4.4643-5.0893-4.4643-5.0893l-1.48-2.44s-1.0714-1.4286-1.0714-1.7857v-2.5893z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_tv" class="jvectormap-region"></path>
                                    <path d="m440.27,432.11c0.53572,0.35715,1.9643,1.875,1.9643,1.875l1.3393,1.6072s0.26785,0.625,1.1607,0.80357c0.89286,0.17857,2.0536,0.17857,2.0536,0.17857s0.35714-0.35714,0.80357-0.80357,0.625-0.98214,0.98215-1.25c0.35714-0.26786,0.89285-0.89286,1.3393-0.80357,0.44643,0.0893,0.71429,0.26785,1.3393,0.71428,0.625,0.44643,1.3393,1.25,2.2321,1.25,0.89286,0,2.5,0.80357,2.5,0.80357s0.44643,1.875,0.625,2.3214c0.17857,0.44643,0.53571,2.9464,0.53571,2.9464s0.35715,1.5179,0.71429,2.4107c0.35714,0.89285,0.98214,2.0536,1.0714,2.4107,0.0893,0.35714-0.0893,3.125-0.17857,3.3929-0.0893,0.26785-0.80357,1.875-0.89286,2.2321-0.0893,0.35714,0,2.5893,0,2.5893l1.5179,1.5179,0.625,1.875s-1.25,1.4286-1.4286,1.6964c-0.17858,0.26786-2.2322,1.3393-2.5893,1.875-0.35714,0.53571-1.4286,3.0357-1.4286,3.0357s-1.6071,1.9643-2.1429,2.2322c-0.53571,0.26785-2.8571,1.0714-3.125,1.5178-0.26786,0.44643-1.6964,1.6964-1.6964,1.6964l-2.7678,0.0893s-1.3393,0.17857-1.6072,0.625c-0.26785,0.44643-0.53571,1.4286-1.0714,1.875-0.53571,0.44643-1.0714,1.25-1.1607,1.6071-0.0893,0.35714-0.89286,1.0714-0.89286,1.0714s0.0893,0.71429-1.0714,0.625c-1.1607-0.0893-2.9464-0.35714-2.9464-0.35714l-1.7857-1.1607-1.6071,0.44643-0.625,0.80357-0.26786,0.89286-2.5,1.0714s-0.625,0.89286-1.1607,0.35714c-0.53572-0.53571-1.25-2.3214-1.25-2.3214l-0.625-2.5893v-1.5179s0.17857-1.0714,0.53571-1.25c0.35714-0.17857,2.5-1.6071,2.5-1.6071s1.3393-0.98215,1.6964-1.0714c0.35714-0.0893,2.1429-0.44643,2.1429-0.44643l1.9643-1.0714,1.5179-2.0536,1.3393-1.0714-0.44643-1.6071s-1.25-1.25-1.4286-1.6071c-0.17858-0.35715-0.44643-1.25-0.44643-1.25l1.6071-2.2322,0.0893-1.875s-1.0714-1.1607-1.1607-1.5178c-0.0893-0.35715-0.0893-1.25-0.0893-1.25l2.5893-1.5179,1.0714-1.875,1.1607-1.9643,0.53572-1.6964-3.5714-1.1607s-0.89286-1.25-0.71429-1.7857c0.17858-0.53572,1.7857-2.4107,1.7857-2.4107s0.89286-1.875,0.89286-2.3214c0-0.44642-1.0714-2.8571-1.0714-2.8571s0-0.71428,0.26785-1.1607c0.26786-0.44643,1.25-0.98215,1.25-0.98215z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d993" original="#b5d993"
                                          id="jqvmap4_hk" class="jvectormap-region"></path>
                                    <path d="M569.41,325.78c-0.12,0.03-0.22,0.12-0.22,0.34,0,0.45,0.53,1.54,0.53,1.54l0.37,1.06s-0.26,0.88-0.62,1.06-1.78,0.63-1.78,0.63l-2.69,0.09s-1.61,0.26-1.88,0.44c-0.26,0.18-0.9,0.73-0.9,1.09s-0.44,1.96-0.53,2.31c-0.09,0.36-0.16,1.97-0.16,1.97s0.18,0.78,0.63,1.41c0.44,0.62,0.43,1.81,0.43,1.81l-1.25,1.16s0.26,1.67,0.35,2.03,1,3.4,1,3.4l0.43,2.5s-0.28,1.42-0.28,1.69-0.96,4.57-0.96,4.57-0.09,0.98-0.54,1.24c-0.44,0.27-2.06,1.88-2.06,1.88s-0.19,0.99-0.19,1.34c0,0.36,0.37,1.06,0.19,1.5-0.18,0.45-1.97,1.72-1.97,1.72l-2.59,0.72-1.31,0.88-0.29,3.84-0.09,2.22v1.81c0,0.36,0.27,1.34,0.72,1.78,0.45,0.45,2.16,1.97,2.16,1.97l2.21,0.53,1.16,0.78,0.1,2.25s-0.37,1.33-0.82,1.5c-0.44,0.18-2.75,1.82-2.75,1.82l-0.53,1.15,0.97,1.16,1.97,1.59s0.78,0.1,0.87,0.72c0.09,0.63-0.15,2.6-0.15,2.6l-0.47,1.43-1.25,1.07-1.41,1.43-0.19,1.6-1.24,0.81-2.79-0.28-1.59-1.35-1.78-0.68-2.25-0.63s-0.45-0.74-0.63-1.19c-0.17-0.44-0.34-1.68-0.34-1.68l-1.25-0.72-1.87,1-1.26,0.09-0.18,1.69-0.35,2.41-0.53,1.53-0.9,0.97-1.6,0.53s-1.89,0.28-2.25,0.37c-0.35,0.09-1.34,1.41-1.34,1.41s-0.53,0.8-0.44,1.15c0.09,0.36,0.19,1.25,0.19,1.25l-1.16,0.91-2.06,0.81s-0.44,0.9-0.44,1.25c0,0.36,0.16,1.97,0.16,1.97l0.37,1.5,0.1,1.63s0.7,0.7,0.43,1.06c-0.26,0.36-2.78,0.62-2.78,0.62l-1.93-2.78-1-1.5-1.07-2.34-1.06-0.69h-1.72l-1.59,1.69s-0.89,0.81-1.16,1.44c-0.27,0.62,0.01,1.78-1.15,1.78s-3.22-0.38-3.22-0.38l-1.25-1.15-1.97-0.44-1.34-0.19s-0.62,0.64-0.97,0.91c-0.36,0.27-1.35,1.25-1.35,1.25v0.62l-0.72,1.88-1.15,2.22-0.81,0.9-0.29,1.35,0.63,1.68s0.45,0.9,0.81,1.25c0.36,0.36,0.63,0.35,0.72,0.97,0.09,0.63,0.19,2.6,0.19,2.6l-0.38,2.4-0.97,1.88s-1.88,1.79-2.15,2.06-2.13,1.61-2.13,1.97-1.62,4.19-1.62,4.19l-1.25,2.25s-0.69,2.11-0.78,2.56-0.63,3.59-0.63,3.59-0.09,1.33-0.62,1.6c-0.54,0.26-3.69,0.81-3.69,0.81s-2.12,1.07-2.56,1.34c-0.45,0.27-0.72,0.63-0.72,0.63s-0.19,0.52-0.1,0.87c0.09,0.36,1.16,2.25,1.16,2.25l1.44,2.66,1.06,0.56,0.97,1.06,1.09,1.69v0.81l1.25-0.43s0.9-0.91,1.25-1c0.36-0.09,1.78,0.28,1.78,0.28l1.44,0.87s1.43,0.91,1.78,1c0.36,0.09,2.03,1.41,2.03,1.41l4.32,2.87s0.34,0.82,1.06,0.82c0.71,0,2.41-0.38,2.41-0.38l1.78-0.34,1.06,1.15,0.28,1.16,0.28,1.53,2.56-0.81,2.44-2.41s2.14-2.16,3.13-2.34c0.98-0.18,2.12,1.19,2.12,1.19s0.72,1.58,1.25,2.03c0.54,0.44,2.43,2.32,2.78,2.59,0.36,0.27,3.03,1.53,3.03,1.53l2.22,2.66c0.45,0.53,2.52,3.22,2.97,3.22s2.84,0.18,3.38,0.09c0.53-0.09,1.96,0.63,2.5,1.25,0.53,0.63,1.78,2.69,1.78,2.69s1.27,1.69,1.62,1.78c0.36,0.09,1.16,1.88,1.16,1.88s0.89,1.62,1.25,1.53,2.31-0.63,2.31-0.63,0.73,0.15,0.91,0.69c0.18,0.53,0.87,2.59,0.87,2.59s1.18,0.62,1.53,0.53c0.36-0.09,1.88-1.25,1.88-1.25s1.77-0.26,2.12-0.43c0.36-0.18,1.44-0.82,0.82-1.44-0.05-0.04-0.11-0.06-0.16-0.09,0.05-0.01,0.34-0.07,0.34-0.07l1.69-0.62,8.75-2.88s1-1.76,1-2.03,0.63-2.06,0.63-2.06l0.06-2.06,0.81-0.82,1.78-0.96,2.25-0.82,1.16-1.68,1.06-0.82,5.44-2.59,1.62-1.31,0.82-1.1,0.62-2.5,1.94-1.15s1.27-0.9,1.62-1.35c0.36-0.44,0.35-0.97,0.35-0.97l-0.63-0.81-1.25-1.25-0.34-0.81s0.18-0.96,0.62-1.41c0.45-0.44,0.71-0.63,1.07-0.72,0.35-0.09,1.25,0.35,1.25,0.35l1,1.09,0.87-0.47,0.63-1.78s0.81-2.14,0.9-2.5,0.25-1.69,0.25-1.69-0.25-3.05-0.25-3.5v-2.5s0.44-4.01,0.53-4.37,0.35-2.13,0.35-2.13l-0.1-1.87s-0.44-1.17-0.62-1.44-0.16-0.81-0.16-0.81,0.63-1.05,0.72-1.41c0.09-0.35-0.37-0.81-0.37-0.81s-0.54-0.71-0.72-1.06c-0.18-0.36-0.88,0.15-0.88,0.15l-1.44,0.91s-0.79,1.26-1.15,1.53-0.44,1.31-0.44,1.31l-0.28,4.38-0.81,1.34-1.53-0.09c-0.34-0.63-0.73-1.32-0.79-1.6-0.08-0.44-0.43-2.67-0.34-3.65s0.97-4.38,0.97-4.38l1.25-1.25s0.09-1.52-0.53-2.06c-0.63-0.53-1.87-1.07-2.41-1.34-0.53-0.27-1.72-1.35-1.72-1.97,0-0.63,0.92-1.77,1.19-2.13,0.27-0.35,3.93-1.51,4.28-1.78,0.36-0.27,3.57-2.15,3.57-2.15l3.65-1.07,2.78,0.25,2.13-0.34,1.34-2.5,2.88-0.81s1.87,1.25,2.4,1.25c0.54,0,2.22-0.72,2.22-0.72s1.07,0.64,1.25,1,1.63,1.34,1.63,1.34l1.93-0.37s1.35-0.44,2.07-0.35c0.71,0.09,1.7,0.98,2.06,1.07s2.75-0.72,2.75-0.72l1.09-1.5,2.5-1.16s1.35-1.08,1.35-1.53,0.15-3.22,0.15-3.22,1.25-0.61,1.88-0.97c0.62-0.35,2.15-0.18,2.15-0.18s0.17-1.34,0.35-1.79c0.18-0.44,1.33-1.34,1.78-1.43s2.44,0.37,2.44,0.37l1.15,0.97-1.34,1.44-0.72,1.15,0.72,0.72s2.31-0.45,2.94-0.72c0.62-0.26,2.24-0.44,2.78-0.53,0.53-0.09,2.84-1.15,2.84-1.15s0.91-1.08,0.91-1.44-0.2-1.71-0.38-2.16c-0.18-0.44-2.21-1.14-2.65-1.59-0.45-0.45-0.54-2.58-0.72-2.94s-0.9-1.9-0.63-2.44c0.27-0.53,1.06-1.78,1.06-1.78l-0.62-2.5s-0.01-2.48,0.34-2.84c0.36-0.36,2.07-1,2.07-1l2.93,0.81s0.9,1.15,1.35,1.06c0.44-0.09,2.15-0.53,2.15-0.53l0.25-3.56-0.87-1.16s-1.27-1.42-1.63-1.68c-0.35-0.27-1.25-1.25-1.25-1.25l-1.68-2.97-0.25-2.6-0.72-1.68-2.25-0.54-1.78,0.97-3.13,1.53-1.97,0.44-0.72-0.72-0.78-2.84-1-1.59-2.75-2.35-2.34-1.68-2.66-0.91-2.78-0.06s-2.49,0.8-2.84,1.15c-0.36,0.36-1.45,1.52-1.72,1.88-0.27,0.35-0.88,2.5-0.88,2.5l-0.28,2.12v2.5s-0.17,1.36-0.43,1.72c-0.27,0.36-3.94,2.03-3.94,2.03l-1.16,1.72-0.19,2.66-0.97,2.25-2.15,2.22s-0.6,0.63-0.69,0.09-0.62-2.22-0.62-2.22l-2.16-2.34s-0.44-1.23-1.06-0.78c-0.63,0.44-1.63,1.31-1.63,1.31l-3.28,1s-0.89,0.43-1.25,0.87c-0.36,0.45-2.97,0.72-2.97,0.72l-2.03,0.28-2.16,2.5s-0.62,1.26-1.24,0.82c-0.63-0.45-2.22-2.35-2.22-2.35l-0.82-1.59-0.53-2.94,0.16-5.56-0.06-2.56,1.5-2.6,1.87-3.03s0.44-1.61,0.44-2.06-0.53-3.03-0.53-3.03l-2.03-2.25-4.94-3.66s-0.63-0.71-0.63-1.25c0-0.53,0.1-2.31,0.1-2.31l1.15-1.97s0.63-0.35,0-1.06c-0.62-0.72-3.18-4.57-3.18-4.57l0.15-5.34s0.02-0.65-0.34-1.09c-0.36-0.45-2.59-3.28-2.59-3.28l-1.54-1.88s-0.24-0.62-0.68-0.62c-0.45,0-2.16,0.68-2.16,0.68s-1.17,0.82-1.44,0.29c-0.27-0.54-0.25-2.6-0.25-2.6s-0.29-1.16,0.16-1.25,1.62-0.44,1.62-0.44h1.5l0.29-1.43-1.79-1.97-1.53-1.35-1.4-0.06s-0.14-0.03-0.25,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d994" original="#b5d994"
                                          id="jqvmap4_ir" class="jvectormap-region"></path>
                                    <path d="m513.39,476.39s1.6072,0.98214,2.3214,1.1607c0.71429,0.17857,2.8572,1.25,3.3929,1.3393,0.53571,0.0893,1.7857,0.71428,2.5,0.98214,0.71429,0.26786,1.875,0.98214,2.5893,1.3393,0.71428,0.35714,2.2321,0.53571,3.2143,0.625,0.98214,0.0893,2.8571,0.89285,3.4821,1.0714,0.625,0.17858,2.1429,1.0714,2.9464,1.1607,0.80357,0.0893,1.5179,0,2.7679,0.625s2.7679,1.3393,3.125,1.5179c0.35714,0.17857,0.71429,0.26785,0.80357,0.98214,0.0893,0.71428,0,2.6786,0.0893,3.0357,0.0893,0.35715,0.26785,1.6964,0.625,2.0536,0.35714,0.35715,1.6071,1.9643,2.5893,2.5893,0.98215,0.625,1.4286,1.6964,1.9643,2.1429,0.53571,0.44643,2.3214,1.875,2.8571,1.9643,0.53572,0.0893,2.3214,0.625,2.7679,0.625,0.44643,0,5.0893,0.44643,5.0893,0.44643s1.7857-0.80357,2.7679-1.25c0.98214-0.44643,4.0179-1.25,4.4643-1.5179,0.44643-0.26785,1.5178-0.98214,2.6786-1.0714,1.1607-0.0893,4.1964-0.0893,5.0893-0.0893,0.89286,0,4.1072,0.0893,4.1072,0.0893s2.3214-0.0893,3.125,0.44642c0.80357,0.53572,1.6071,1.6072,1.9643,2.1429,0.35715,0.53572,0.625,1.4286,1.0714,1.6071,0.44643,0.17858,1.4286,0.35715,1.875,0.35715,0.44643,0,2.1429-0.26786,2.5-0.35715,0.35714-0.0893,2.2321-0.44642,2.2321-0.44642l0.0893-2.6786s-0.0893-1.7857,0.53571-2.0536c0.625-0.26785,4.4643-1.5178,4.8214-1.6964,0.35715-0.17857,1.25-1.6071,1.25-1.6071s-2.5-0.625-3.3036-0.625c-0.80357,0-1.25-1.4286-1.25-1.4286l1.0714-1.5179,0.17857-1.9643,0.98214-1.0714,0.80358-1.3393s-0.625-0.98214-0.80358-1.3393c-0.17857-0.35715-0.0893-1.4286-0.0893-1.4286l2.2321-1.1607,3.125-0.35714,2.4107-1.1607,3.4821-2.4107,1.7857-0.625s1.4286,0.0893,1.875,0.26786c0.44643,0.17857,2.4107,0.53571,2.5893,0.17857,0.17857-0.35714,1.6071-1.9643,2.0536-2.3214,0.44643-0.35714,2.6786-2.1429,2.6786-2.1429l1.4286-1.1607s0.98215-1.25,1.4286-1.5179c0.44643-0.26786,1.875-1.0714,2.4107-1.0714,0.53571,0,0.98214,0,1.3393-0.26785,0.35715-0.26786,1.1607-1.25,1.3393-1.6072,0.17857-0.35714,1.0714-0.80357,1.6071-0.89285,0.53572-0.0893,5-1.3393,5-1.3393l2.6786-1.5179s1.875-1.5178,2.0536-1.875c0.17857-0.35714,1.6071-2.8571,1.6071-2.8571l0.98214-1.875s-0.26786-1.4286-0.71428-1.7857c-0.44643-0.35715-2.1429-1.6072-2.1429-1.6072l-2.5-1.25s-1.25-0.80357-1.1607-1.6071c0.0893-0.80357,7.5-5.625,7.5-5.625s0.98215-1.6964,1.0714-2.0536c0.0893-0.35714,0.89286-1.9643,1.25-2.3214,0.35715-0.35714,2.5-2.0536,2.5-2.0536s1.4286-0.625,1.875-0.71429c0.44643-0.0893,3.5714-1.5178,3.5714-1.5178l1.25-0.98215s0.44643-2.0536,0.44643-2.5893c0-0.53572-0.80357-3.8393-0.80357-3.8393s-1.0714-0.53571-1.4286-0.89285c-0.35715-0.35715-1.25-0.80358-2.1429-0.80358-0.89286,0-2.6786,0-3.125-0.625-0.44643-0.625-1.3393-1.25-1.6964-1.875-0.35714-0.625-1.1607-1.7857-1.25-2.2321-0.0893-0.44643-0.80357-2.4107-0.98214-2.7679-0.17857-0.35714-1.0714-2.3214-1.0714-2.3214l-2.0536-3.5714-1.0714-2.7679,0.26786-2.0536,1.0714-0.625,0.80357-1.25,1.4286-1.875,0.625-0.98214-2.3214-1.25s-1.875,0.44642-2.2321,0.71428c-0.35715,0.26786-0.98215,1.3393-0.98215,1.3393s0.35715,0.625,0,0.80357c-0.35714,0.17857-2.3214,0.44643-2.3214,0.44643l-1.25,0.89285-0.71429,1.9643v1.6071l-0.98214,0.98215-2.0536,1.0714-1.3393,0.98215-1.1607,1.3393s-1.6964,0.0893-2.0536,0.0893c-0.35714,0-2.0536-0.625-2.0536-0.625l-2.6786,0.17857-2.3214-0.0893-1.9643-1.4286-1.4286,0.26786-2.0536-0.35714s-0.80357-0.71429-1.1607-0.71429c-0.35714,0-2.1429,0.625-2.1429,0.625l-1.5178,1.3393-0.98215,1.0714-2.6786,0.26785-1.9643-0.0893-2.3214,0.44643-2.2322,1.1607-3.3928,1.7857-2.3214,0.98215-1.3393,0.89285-0.89285,1.1607s-0.0893,0.35714,0.0893,0.71428c0.17857,0.35715,0.98214,1.4286,0.98214,1.4286l1.6072,0.80357,0.98214,0.89285,0.83,0.91,0.0893,1.1607-1.6071,2.1428-0.35714,2.2322-0.35715,1.875v2.6786l0.80358,1.6071,1.1607,1.4286s0.26786-0.44643,0.71429-0.80357c0.44642-0.35714,1.1607-2.3214,1.1607-2.3214v-2.0536l0.0893-2.0536,0.98214-1.875,1.6964-1.25,1.1607-0.17857,0.89286,1.1607s-0.0893,1.25-0.26786,1.6964c-0.17857,0.44643-0.53571,0.98214-0.35714,1.3393,0.17857,0.35714,0.89286,1.4286,0.89286,1.4286l-0.17858,2.7678s-0.35714,2.3214-0.35714,2.6786c0,0.35714-0.26786,2.5893-0.26786,3.0357v2.5893c0,0.89285,0,1.5178,0.0893,2.1428s0.0893,1.6964-0.0893,2.1429c-0.17857,0.44643-0.44642,1.25-0.71428,1.9643-0.26786,0.71428-0.35714,1.25-0.44643,1.9643-0.0893,0.71429-1.0714,1.6964-1.0714,1.6964s-0.71428,0.26786-0.98214-0.625-1.6071-0.98214-1.6071-0.98214-0.71429,0.44642-1.0714,0.98214c-0.35715,0.53571-0.89286,1.25-0.35715,1.6964,0.53572,0.44643,1.5179,1.6071,1.5179,1.6071s0.625,0.35714,0.26786,1.1607c-0.35714,0.80358-1.1607,1.0714-1.6964,1.4286-0.53571,0.35714-1.5179,0.89285-1.6964,1.25-0.17857,0.35714-0.71428,1.4286-0.71428,1.7857,0,0.35714-0.44643,2.0536-0.44643,2.0536l-1.3393,0.98214-1.875,1.3393s-2.2321,0.71429-2.6786,0.98214c-0.44643,0.26786-2.5,1.4286-2.8571,1.7857-0.35715,0.35714-0.53572,1.25-1.4286,1.6071-0.89286,0.35714-3.125,1.3393-3.125,1.3393l-0.98215,0.26785s-0.35714,0.80357-0.35714,1.1607c0,0.35714-0.26786,2.2321-0.26786,2.7678,0,0.53572-0.26785,0.98215-0.625,1.6964-0.35714,0.71429-0.98214,1.6964-1.6071,1.7857-0.625,0.0893-2.7679,0.71428-3.2143,0.89285-0.44642,0.17858-2.5,0.89286-3.0357,0.98215-0.53571,0.0893-2.8571,1.0714-2.8571,1.0714l-0.71429,0.80357-1.5179,1.1607-2.0536,0.71429-1.4286,0.80357-1.6964-1.0714-0.35714-0.98214-0.44643-1.25s-0.35714-0.35715-1.25-0.26786c-0.89286,0.0893-2.0536,0.44643-2.0536,0.44643s-1.3393-1.4286-1.6071-1.875c-0.26786-0.44643-1.875-3.125-1.875-3.125l-1.54-1.99-1.34-1.61s-1.1607-0.71429-1.6964-0.71429c-0.53571,0-2.6786-0.17857-3.0357-0.17857-0.35715,0-1.6072-0.89285-1.7857-1.1607-0.17857-0.26786-3.4821-4.2857-3.4821-4.2857l-1.875-0.89285-2.8571-1.9643-1.9643-2.2321-1.0714-1.6964-0.89286-0.625s-0.89285-0.26786-1.25,0.0893c-0.35714,0.35714-0.80357,0.53571-1.3393,0.89285-0.53572,0.35715-1.875,1.4286-1.875,1.4286l-1.3393,1.25-1.9643,1.1607-1.4286,0.89286s-0.89286,1.0714-0.98215,1.6071c-0.0893,0.53571-0.26785,1.1607-0.26785,2.0536,0,0.89286-0.35715,3.3036-0.35715,3.3036z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b1d197" original="#b1d197"
                                          id="jqvmap4_br" class="jvectormap-region"></path>
                                    <path d="m588.41,500.07s1.1364,1.1364,1.6415,1.5152c0.50508,0.3788,1.6415,1.6415,2.2728,1.894,0.63134,0.25254,2.6516,1.6415,2.6516,1.6415s2.9042,1.0102,3.4093,1.0102h5.5558c1.1364,0,3.283,0.75762,3.283,0.75762s0.88388,0.63134,2.0203-0.25254c1.1364-0.88389,2.3991-1.6415,2.3991-1.6415s0.75762,0.25254,1.6415,0.63135c0.88388,0.3788,1.5152,1.2627,2.1466,1.2627,0.63135,0,3.4093-1.7678,3.4093-1.7678s2.6516-2.2728,3.1567-2.7779c0.50507-0.50508,2.5254-0.88388,3.5355-1.2627,1.0102-0.37881,5.4296-0.50508,5.4296-0.50508s1.894-1.2627,2.2728-1.894c0.37881-0.63135,1.7678-3.4093,1.894-3.9143,0.12627-0.50508,2.7779-2.3991,3.4093-2.9042,0.63135-0.50508,4.9245-2.5254,5.177-3.0305,0.25253-0.50508,2.0203-1.5152,2.0203-1.5152l3.1567,1.2627,2.9042,1.2627s2.2728,0.25254,2.9042,0.25254c0.63135,0,2.2728-0.50508,2.7779-0.88388,0.50508-0.37881,3.1567-1.7678,3.1567-1.7678s3.283,0.25254,3.7881,0.50508c0.50508,0.25253,1.7678,0.88388,2.3991,1.1364,0.63135,0.25254,3.9144,1.389,3.9144,1.389s3.6618,0.3788,4.4194,0.25254c0.75762-0.12627,2.5254-1.7678,2.7779-2.3991,0.25254-0.63134,0.75762-2.3991,1.6415-2.9042,0.88388-0.50507,4.2932-1.5152,4.2932-1.5152s1.389-0.12627,1.5152-1.6415c0.12627-1.5152,0.37881-2.9042-0.25254-3.5355-0.63135-0.63134-1.389-0.88388-1.7678-1.7678-0.3788-0.88389,0.88389-8.9651,0.88389-8.9651l1.6415-3.7881,1.2627-4.2932s1.389-2.2728,1.2627-2.9042c-0.12627-0.63134-0.37881-3.9143-0.37881-3.9143l-1-2.41s-1.1364-0.88388-1.5152-1.389c-0.37881-0.50507-1.0102-0.37881-1.5152-1.0102-0.50508-0.63135-1.7678-1.1364-1.7678-1.7678,0-0.63134-0.25254-1.5152,0.37881-2.0203,0.63134-0.50508,3.0305-3.0305,3.7881-3.4093,0.75761-0.37881,4.5457-2.5254,4.9245-3.0305,0.37881-0.50507,1.389-1.6415,1.7678-2.1466,0.37881-0.50508,0.88388-0.50508,0.63135-1.6415-0.25254-1.1364-2.6516-3.5355-2.6516-3.5355s-0.63135-0.88389-1.5152-0.88389c-0.88389,0-3.1567-0.3788-3.1567-1.0102,0-0.63134-0.37881-1.2627-0.12627-2.0203,0.25254-0.75762,2.0203-2.2728,2.2728-2.9042,0.25254-0.63135,0.37881-1.894,0.37881-1.894l-2.3991-1.6415-2.6516,0.12627s-0.25254-0.25253-0.25254-0.88388c0-0.63134,0.63135-2.7779,0.88388-3.283,0.25254-0.50507,0.50508-1.5152,0.63135-2.1466,0.12627-0.63134-0.25254-1.7678-0.75761-2.3991-0.50508-0.63135-1.5152-1.389-1.5152-1.389s-1.1364-0.50508-1.6415,0.12627c-0.50508,0.63134-1.1364,1.5152-1.1364,1.5152s-1.1364,0.12627-1.6415-0.25254c-0.50508-0.37881-0.88388-4.1669-0.88388-4.1669s-0.88389-1.2627-1.6415-1.389c-0.75762-0.12627-1.6415-0.12627-2.1466,0.50508-0.50507,0.63134-1.0102,1.0102-1.7678,1.5152-0.75762,0.50508-1.2627,1.1364-1.894,0.75762-0.63134-0.37881-1.389-0.75762-1.2627-1.389,0.12627-0.63135,0.75761-1.6415,0.88388-2.1466,0.12627-0.50507-1.7678-2.1466-1.7678-2.1466l-3.283-0.12627-1.1364-1.1364c-0.12627-0.75761,0.25254-2.5254,0.25254-2.5254l-1.389-1.5152-2.7779-4.0406-1.2627-1.894-3.1567-0.3788-1.1364-2.0203-0.25254-2.9042-1.2627-0.3788h-1.2627l-1.6415,0.63134-1.6415-1.0102-3.0304-0.63135-1.894,0.75762-0.37881,1.0102-0.12627,1.894,0.37881,1.894-0.25254,1.5152-0.50507,2.0203,0.75761,2.0203,0.50508,1.389,1.7678,1.5152,0.88389,0.88388,0.25254,1.894s-0.25254,1.0102-0.75762,1.389c-0.50507,0.37881-3.0305,1.2627-3.0305,1.2627s-2.3991,0.63134-2.9042,0.75761c-0.50508,0.12627-3.4093,0.75762-3.4093,0.75762l-1.389,1.5152-0.25254,1.6415,0.75762,2.5254,1.7678,3.283,1.6415,3.7881,0.75762,2.9042,2.0203,2.2728,1.2627,1.1364,2.1466,0.25254,2.2728,0.50507,1.7678,1.389,0.50507,1.6415,0.12627,1.894v2.3991l-1.894,1.6415-3.0305,1.2627-2.5254,1.2627-2.1466,2.0203-1.0102,1.7678-0.75761,2.1466-2.6516,1.6415-1.894,1.389-2.0203,1.5152-0.88388,0.88388v0.75762l0.88388,0.88388c0.50508,0.12627,2.1466,1.2627,2.1466,1.2627l1.894,1.0102s0.75762,0.88389,0.88389,1.389c0.12627,0.50508,0,1.5152-0.12627,2.1466-0.12627,0.63134-2.0203,3.6618-2.0203,3.6618l-1.894,1.6415-3.6618,2.0203-3.1567,0.63135-2.1466,1.0102s-0.75761,0.37881-1.1364,1.0102c-0.3788,0.63135-1.6415,1.2627-1.6415,1.2627l-2.2728,0.50507-1.0102,0.88388s-1.2627,0.88389-1.6415,1.389c-0.37881,0.50508-3.5355,2.9042-3.5355,2.9042l-0.88389,1.389s-0.75761,1.1364-1.389,1.2627c-0.63134,0.12627-2.2728,0.12627-2.2728,0.12627l-2.3991-0.88388-1.6415,1.389s-1.6415,0.37881-2.1466,0.88388c-0.50508,0.50508-2.7779,1.7678-2.7779,1.7678l-2.3991,0.63134s-1.894-0.25253-2.5254,0.12627c-0.63134,0.37881-1.2627,1.5152-1.2627,1.5152l0.63135,1.5152,0.25254,0.88388-0.88389,1.894s-1.0102,0.75762-1.0102,1.2627-0.88388,2.0203-0.88388,2.0203-0.50508,0.88388,0.25253,1.389c0.75762,0.50507,2.5254,0.88388,2.5254,0.88388s1.389-0.12627,1.5152,0.50508c0.12627,0.63134-1.1364,1.6415-1.1364,1.6415l-2.6516,0.75762-2.0203,1.2627-0.88389,1.6415z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_zb" class="jvectormap-region"></path>
                                    <path d="m662.32,397.46,4.6429-0.17857,2.3214-0.17858,3.5714-1.7857,2.6786,0.35714,3.5714,1.0714,2.1429,1.0714,2.6786,0.53571,4.4643-0.53571,3.0357,0,2.3214,0.53571,2.8571,2.1429,2.1429,0.89286,2.8571,0.35714,2.3214-1.7857,2.3214-0.71429,1.9643,0,2.1429,1.4286,2.1429,0.71429,2.5-0.71429,1.7857-1.9643,1.7857-1.25,4.1072,0,2.5-1.4286,2.1428-0.89286,3.75,0,1.4286,0,1.25-0.71429,0.53571-2.5,1.6071-1.0714,4.2857-2.3214,2.3214-0.89286,3.5714-1.9643,2.8572-1.4286,5-0.89286,3.0357,0,1.6071,1.4286l-0.37,3.2s-1.25,1.6071-1.9643,2.6786c-0.71429,1.0714-1.6072,2.6786-1.9643,3.3929-0.35714,0.71429-1.25,2.1429-1.25,2.1429s-0.53571,2.8571-0.71429,3.5714c-0.17857,0.71428-1.0714,2.8571-1.0714,2.8571s-1.25,1.7857-1.0714,2.5c0.17857,0.71428,1.25,1.25,1.25,1.25l0.89285,0.71428,3.2143-0.71428s1.7857-0.17857,2.6786-0.17857c0.89286,0,2.5,0.89285,2.5,0.89285l0.53572,1.9643,0.89285,2.6786s0.17857,0.53572,1.6072,0.53572,2.6786-1.4286,2.6786-1.4286l0.17857-2.3214s1.0714-0.89286,1.9643-0.89286c0.89286,0,2.5-0.53572,2.5-0.53572l1.25-2.1428,0.35715-2.5,1.9643-1.7857,2.3214,0.17857c0.71,0.19,3.03-1.6,3.03-1.6l1.4286-1.4286s0.89285-1.0714,1.9643-0.35714c1.0714,0.71428,2.3214,2.5,2.3214,2.5v2.8571l0.53572,1.6071,1.9643,1.7857s1.6071,0.71428,1.25,1.6071c-0.35714,0.89286-2.8571,1.9643-3.5714,1.9643-0.71428,0-3.5714,0.89285-3.5714,0.89285l-1.6071,0.17857-1.96,0.89s-0.71429,0.17857-0.17858,1.0714c0.53572,0.89286,1.9643,1.7857,1.9643,1.7857l1.25,0.89286,0.35714,1.9643-3.2143,2.3214-1.6072,3.0357-0.17857,2.1429-1.6071,2.3214-2.6786,0.89285-1.6071,1.4286,1.9643,1.9643,0.35714,1.7857-2.3214,2.3214-1.25,3.5714,1.6071,2.8571s3.5714,1.4286,4.2857,1.6072c0.71429,0.17857,4.8214,0.71428,4.8214,0.71428s1.4286,0.71429,1.9643,1.25c0.53571,0.53572,0.71428,3.2143,0.71428,3.2143l0.35715,2.5s0,0.53571,0.71428,1.0714c0.71429,0.53571,0,3.5714,0,3.5714l-0.71428,2.8571-0.53572,1.7857-1.25,1.7857-3.2143,0.35714-4.1072-0.17857-2.8571-1.4286-1.77-0.53-3.04,1.07h-3.3929-2.5l-3.2143,0.89286s-2.6786-0.35714-3.5714-0.53572c-0.89286-0.17857-3.5714-2.1428-3.5714-2.1428l-3.22-2.67-1.07-2.15-1.43-2.14-1.7857-1.0714-1.0714-1.9643s0-1.0714-0.71428-1.6072c-0.71429-0.53571-2.6786-0.71428-2.6786-0.71428l-0.89286-1.25-1.7857-2.8571-1.9643-2.5s-1.25-1.4286-1.9643-1.6072c-0.72-0.18-1.79-0.36-2.15-1.43-0.35715-1.0714-2.3214-2.6786-2.3214-2.6786l-2.8572-1.4286-2.6786-1.4286-3.0357-0.17857-2.6786-0.17858s-0.71429,0.89286-1.6072,1.0714c-0.89285,0.17857-4.4643-0.35714-4.4643-0.35714l-3.5714-1.25-2.3214,0.35714-1.9643,0.89286-1.6072,1.4286-3.75,0.71429s-3.2143,0.71428-3.3928,0c-0.17858-0.71429-2.8572-4.1072-2.8572-4.1072l-1.7857-1.4286h-1.6071l-1.0714-1.0714v-2.1428l2.1428-2.1429,0.17858-1.4286-0.89286-1.4286-1.25-0.89286-2.1429-0.17857s-0.71428,1.0714-0.71428,0,0.71428-3.3929,0.71428-3.3929l0.89286-2.3214-0.35714-1.9643-1.25-1.7857-1.7857-0.71428-1.25,0.71428-1.25,0.71429-1.25-0.17857s-0.35714-0.71429-0.35714-1.4286c0-0.71429-1.25-2.6786-1.25-2.6786l-0.71429-0.71428-1.7857-0.17857-0.89286,0.89285-1.4286,0.89286-2.5,0.53572s-0.35714-0.35715-0.17857-1.0714c0.17857-0.71429,0.71428-2.5,0.71428-2.5l-1.25-1.4286-0.51-0.52-1.79-0.18h-2.1429l-0.35714-1.0714v-2.1429z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap4_am" class="jvectormap-region"></path>
                                    <path d="M876.72,53.094c-0.34,0-0.66,0.094-0.66,0.094l-1.78,2.124-4.47,1.969s-6.05,2.853-7.12,3.031c-1.07,0.179-1.44,1.969-1.44,1.969s0.37,2.514,0.19,3.407c-0.18,0.892-1.44,1.406-1.44,1.406s-2.32,1.428-2.5,2.5c-0.18,1.071,0.91,2.156,0.91,2.156s2.66,0.906,3.37,0.906c0.72,0,2.85-0.375,3.56-0.375,0.72,0-0.34,1.625-0.34,1.625l-0.91,1.782-2.31-0.907-3.03-0.719s-2.14,0.554-3.03,0.376c-0.89-0.179-2.31-1.438-2.31-1.438l-2.69,0.531-2.88,0.375h-1.06s-0.53,2.656-1.25,2.656c-0.71,0-2.12,1.782-2.12,1.782l-3.41,0.187-2.84,2.875s-2.86,2.496-3.75,3.032c-0.9,0.535-1.61,0.531-2.5,0.531-0.9,0-2.5,1.062-2.5,1.062l-4.85,3.219-5.15,1.062-3.07,0.907s-1.04,2.861-1.93,3.219c-0.9,0.357-2.88,1.968-2.88,1.968l-3.22,1.938-2.12,1.966-2.16,3.03-1.25,1.97-1.06,2.5v3.22s-0.91,0.72-1.63,0.72c-0.71,0-2.84,1.25-2.84,1.25s-0.9,2.51-1.44,3.41c-0.53,0.89-2.85,1.76-3.56,2.12s0.34,1.25,0.34,1.25l2.35,0.53,0.53,2.16,2.69,0.53h2.65,3.75s1.44,1.07,1.97,1.78c0.54,0.72,1.63,1.78,1.63,1.78l-1.82,2.5-2.5,1.1-2.31-0.72s-1.6,1.25-2.31,1.25c-0.72,0-2.16,1.59-2.16,1.59s-1.42-0.71-2.31-1.25c-0.89-0.53-1.96,0-3.03,0s-1.26,1.26-1.44,1.97-0.87,2.84-0.87,2.84-1.09,1.79-1.63,2.5c-0.53,0.72-2.66,2.69-3.37,3.22-0.72,0.54-1.81,0.54-4.13,0.72s-1.07,1.26-1.25,2.16c-0.18,0.89-1.06,3.03-1.06,3.03s-2.15,1.24-2.69,2.31c-0.53,1.07-0.53,2.67-0.53,3.56,0,0.9,0.53,1.82,0.53,1.82h1.06l0.19-0.72,0.19-1.97,0.72-1.06,0.72,0.53,3.9,1.59,5,3.41,0.38,0.87-0.38,5.19-1.06,2.84-4.09,4.47-2.88,3.94-0.34,2.5,1.25,0.19h1.59s-0.17,1.42-0.53,2.31,0.34,1.59,0.34,1.59l2.88,1.25,3.75,0.38,4.62-0.19,2.69,3.41,2.16,1.78h4.47c1.25,0,1.06,2.5,1.06,2.5l1.06,1.59,3.94-0.34s5.36-1.44,6.25-1.44,3.2-0.53,3.56-1.25c0.36-0.71,2.69-1.59,2.69-1.59l1.97-0.91h3.75s2.66-1.24,3.37-1.59c0.72-0.36,0.74-1.98,1.1-2.69,0.35-0.71,0.87-3.03,0.87-3.03l1.25-2.5h1.63l1.78-1.06,1.06-1.63,1.44-0.34,2.31-1.44,1.06-1.25s0.91-0.89,1.63-1.78c0.71-0.89,0.87-1.6,1.4-2.31,0.54-0.72,2.51-1.44,3.22-1.97,0.72-0.54,2.15-2.14,2.5-3.03,0.36-0.9,1.63,0,1.63,0l4.09,0.68s3.22-1.04,5.72-1.93c2.5-0.9,1.08,1.06,0.91,1.78-0.18,0.71,0,3.2,0,4.09s0.88,3.22,1.78,4.47c0.89,1.25,3.9-1.44,3.9-1.44s3.05-1.78,3.94-2.5c0.89-0.71,3.94,0,3.94,0h6.06v-2.84c0-0.72,1.43-3.23,1.97-4.13,0.54-0.89,1.25-3.56,1.25-3.56l0.72-2.5-0.19-4.81s1.79-1.97,3.22-1.97,2.69,1.59,2.69,1.59l4.28,0.91,1.44-0.53s-0.19-3.22-0.19-3.94c0-0.71-0.19-2.84-0.19-2.84l-0.53-3.22s-0.54-2.51-0.72-3.41c-0.18-0.89-0.87-2.12-0.87-2.12l-2.5-1.63,1.25-0.87,4.09-0.38s1.96-2.66,2.5-3.37c0.54-0.72,2.84-2.35,2.84-2.35v-2.5s-1.04-2.13-1.93-3.03c-0.9-0.89-2.35,0.18-3.07,0.53-0.71,0.36-3.03-0.34-3.03-0.34s-1.41-0.88-2.12-0.34c-0.72,0.53-1.63,1.06-1.63,1.06l-1.4-1.06-1.97,1.78-1.44-0.72s-2.84-1.79-4.09-1.25c-1.25,0.53-1.97-0.72-1.97-0.72h-2.5s-0.56,1.25-1.1,1.97c-0.53,0.71-3.03,0.87-3.03,0.87l-2.84,0.91-2.69,3.75-2.69,0.53,1.25-2.5,0.19-1.59-3.03-0.38s2.13-0.88,2.84-1.06c0.72-0.18,3.41-1.06,3.41-1.06l1.97-0.91,0.34-1.59s1.78-3.41,1.78-4.13c0-0.71-0.68-3.22-0.68-3.22l-0.91-2.31s-2.5-4.63-3.22-5.34c-0.71-0.72-1.05-1.78-2.12-1.78-1.08,0-3.07,0.68-3.07,0.68l-1.4,0.91-1.25-1.06s-2.17-1.98-3.6-2.159c-1.42-0.178,0.38-0.719,0.38-0.719l0.87-1.593s-0.16-1.973,0.38-2.688c0.53-0.714,1.97,1.25,1.97,1.25s2.67,1.438,3.56,1.438,1.78,0.531,1.78,0.531,3.41-0.371,4.13-0.906c0.71-0.536,0.68-2.313,0.68-2.313l0.19-2.687,0.72-1.25,1.25-1.782s0.36-1.964,1.25-2.5c0.89-0.535,1.79,0,2.69,0,0.89,0,2.31,1.626,2.31,1.626l1.59,0.718,2.5-1.437s1.28-2.139,1.82-3.031c0.53-0.893,2.84-1.782,2.84-1.782l2.84-2.156,1.44-3.219s2.14-1.973,2.5-2.687c0.36-0.715-0.34-1.782-1.59-1.782h-1.78l-1.82-1.062-1.93-0.188-3.07-1.781-3.18-0.187h-3.75c-0.9,0,0-0.875,0-0.875l2.5-1.625,0.68-2.5-1.06-1.25-2.5-0.532,1.78-1.25,0.53-1.25-2.31-0.531v-2.5s-0.35-1.785-0.53-2.5c-0.09-0.357-0.45-0.437-0.78-0.437zm-77.19,16.062c-0.22-0.01-0.48,0.081-0.78,0.282-1.61,1.071-3.94,2.312-3.94,2.312-1.07,0.357-1.79,1.42-1.97,2.312-0.17,0.893-0.53,2.88-0.53,3.594,0,0.715,0.2,2.496,1.1,3.032,0.89,0.535,3.03,1.598,3.03,2.312s-0.56,2.321,0.15,2.5c0.72,0.179,1.44-0.522,1.97-1.594,0.54-1.071,0.36-3.419,0.72-4.312s1.45-2.491,1.63-3.563c0.17-1.071-0.19-5.187-0.19-5.187s-0.24-1.644-1.19-1.688z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d894" original="#b5d894"
                                          id="jqvmap4_ch" class="jvectormap-region"></path>
                                    <path d="m779.82,276.93c0.53572-0.71428,1.4286-1.4286,1.9643-2.3214,0.53571-0.89285,1.7857-2.5,1.7857-2.5s1.7857-0.17857,4.1072,0.17858c2.3214,0.35714,4.4643,1.4286,5.7143,2.1428,1.25,0.71429,2.6786,1.25,3.0357,2.3214,0.35714,1.0714,1.6071,2.1429,1.6071,3.3929s-1.4286,3.5714-1.4286,4.2857c0,0.71429-0.17857,2.5,0.71428,3.3929,0.89286,0.89286,0.71429,1.6071,1.7857,1.4286,1.0714-0.17857,3.9286-1.0714,5-1.25,1.0714-0.17857,3.3929,0,5,0.53572,1.6071,0.53571,2.8571,0.89285,3.2143,1.6071,0.35715,0.71428,1.0714,1.4286,0.89286,2.5-0.17857,1.0714-2.5,2.8571-2.5,2.8571l0.17857,1.4286,0.89286,1.6072s1.6071,0.71428-0.35714,0.89285c-1.9643,0.17857-3.0357-0.71428-3.0357-0.71428s0.17857-0.17857,0-1.0714c-0.17857-0.89286-0.71428-1.7857-1.7857-1.4286-1.0714,0.35714-2.3214,1.9643-3.0357,2.5-0.71428,0.53571-2.8571,3.0357-2.8571,3.0357s-1.9643,0.71429-2.8571,1.7857c-0.89286,1.0714-4.1071,4.6428-4.1071,4.6428s-0.17858,1.25-1.0714,2.5c-0.89286,1.25-2.3214,2.3214-2.5,3.5714-0.17857,1.25,0,4.1071,0,4.1071s1.4286,1.0714,1.6071,2.3214c0.17857,1.25-0.89286,1.9643-1.25,2.8572-0.35714,0.89285-1.4286,0.53571-1.4286,1.7857s0.17857,5.7143,0.17857,5.7143l-0.35714,4.8214-0.35715,4.1072s-1.0714,1.9643-1.25,3.2143c-0.17857,1.25-0.35714,2.6786-0.35714,3.3929,0,0.71429-0.17857,3.0357-0.17857,3.75,0,0.71429-0.71429,1.9643-0.89286,2.6786-0.17857,0.71429-1.0714,1.25-0.17857,1.9643,0.89286,0.71428,1.9643,1.9643,1.9643,1.9643l-1.7857,3.3929-0.17857,1.9643-1.7857,3.3928-1.25,3.75-0.35715,4.1072-0.71428,1.6071-3.2143,4.1071,0.35715,2.6786s2.1428,1.0714,2.8571,1.0714c0.71428,0,3.3929,0.53572,4.4643-0.17857s2.5-1.4286,3.2143-1.7857c0.71429-0.35715,1.6071-0.89286,2.8571,0.35714s2.5,4.4643,2.5,4.4643,0.17857,1.4286,1.4286,1.0714c1.25-0.35714,1.9643-2.1428,1.9643-2.1428l-1.0714-2.1429,0.53572-2.6786-0.53572-1.7857-1.6071-2.5s-1.7857-1.4286-2.5-1.4286c-0.71429,0-3.75,1.4286-3.75,1.4286s-1.9643,2.3214-1.6071,1.4286c0.35714-0.89285,1.9643-3.3928,1.9643-3.3928l1.6071-0.35715,1.25-1.7857s0.89286-0.71429,1.9643-0.71429,3.2143-1.25,3.2143-1.25,1.25-2.6786,1.0714-0.89285c-0.12,1.78-1.72,4.28-1.72,4.28l1.0714,2.1429,1.9643,2.1429,0.53572,1.7857-0.17857,2.6786,2.3214,1.4286v1.6072,2.8571l1.7857-0.71429c0.71429-0.71428,2.1429-4.2857,2.1429-4.2857l0.89285-3.2143v-2.1428s-1.6071-1.7857-0.89285-1.9643c0.71428-0.17857,4.6428-2.1429,4.6428-2.1429s2.1429-0.53571,3.0357-0.53571c0.89286,0,4.1071,0.17857,4.8214,0.35714,0.71428,0.17857,4.4643,1.6071,4.4643,1.6071s4.4643,1.25,5.1786,1.25c0.71429,0,1.9643,1.7857,1.9643,1.7857s-0.89286,1.9643,0.53571,2.8571c1.4286,0.89286,4.8214,3.0357,4.8214,3.0357l3.75,2.1428s1.4286,3.3929,1.4286,4.2857c0,0.89285-0.17857,4.6428-0.17857,5.7143,0,1.0714,0,5,0.53572,5.7143,0.53571,0.71428,1.0714,2.3214,2.1428,3.2143,1.0714,0.89286,3.2143,4.2857,3.2143,4.2857l2.5,1.25,3.0357,6.9643s1.4286,1.4286,1.6072,2.3214c0.17857,0.89286,1.6071,3.0357,1.7857,3.75,0.17857,0.71429,1.6071,5,1.7857,5.7143,0.17857,0.71428-0.53572,8.5714-0.53572,8.5714l0.53572,3.3928s0,1.25-0.89286,1.9643c-0.89286,0.71429-3.5714,1.6071-3.5714,1.6071l-1.4286,0.17857-1.4286-1.7857-0.53572-2.6786-3.0357-3.0357s-1.9643-1.25-2.6786-0.71428c-0.71429,0.53571-2.3214,1.9643-2.3214,1.9643s-0.89286,1.7857-1.25,2.5c-0.35714,0.71429-1.4286,1.25-0.89286,2.3214,0.53572,1.0714,1.9643,2.6786,1.9643,2.6786s0.35714-0.71428,2.1428-0.53571c1.79,0.18,2.14,2.68,2.14,2.68l-0.89286,3.2143s-1.9643,1.25-2.6786,1.6071c-0.71428,0.35714-2.8571,1.25-1.7857,2.1429,1.0714,0.89285,2.3214,1.25,2.3214,1.25s0.71428,1.25,0,1.9643c-0.71429,0.71429-2.3214,2.1429-2.3214,2.1429s-1.7857,0.35714-3.0357,1.25-3.2143,1.4286-4.2857,1.6071c-1.0714,0.17857-2.8571,1.25-4.1071,0s-2.1429-0.89285-2.5,0.17857c-0.35715,1.0714-1.6072,0.89286-1.7857,1.9643-0.17857,1.0714,0,2.8571,0.35715,3.5714,0.35714,0.71428,0,3.0357,0,3.0357s-2.3214,1.9643-2.5,1.25c-0.17858-0.71428,0.17857-2.3214-0.35715-3.2143-0.53571-0.89286-2.3214-2.5-2.3214-2.5s-2.8571-1.4286-1.7857-2.3214c1.0714-0.89286,2.8571-2.6786,3.2143-3.2143,0.35714-0.53571,0.35714-3.0357,0.35714-3.0357s-2.1429-0.89286-2.6786-1.7857c-0.53572-0.89285-1.0714-3.3928-1.0714-4.1071,0-0.71428-0.71429-3.3929,0.17857-3.75,0.89286-0.35714,2.8571-1.9643,2.8571-1.9643l0.53572-1.9643s-0.53572-0.35714-2.1429-0.35714c-1.6071,0-2.5-0.17857-3.9286,0.89285s-1.4286,1.0714-2.5,2.5-2.1429,2.6786-3.2143,3.2143c-1.0714,0.53571-2.6786,0.71429-2.6786,0.71429s-4.1071-0.71429-4.2857-1.4286c-0.17857-0.71428-1.6072-1.9643-2.5-1.9643-0.89286,0-2.1429,0.35714-3.2143,0.89286-1.06,0.55-1.95,0.73-2.84,0.73-0.89286,0-4.2857,1.0714-4.2857,1.0714s-2.1428,1.7857-3.2143,1.7857c-1.0714,0-2.1014,0.40945-2.28-0.66198-0.17857-1.0714-1.0823-3.4216-1.0823-3.4216l-1.5332-4.3507s-2.6677-0.69261-3.7392-0.87119c-1.0714-0.17857-3.8221-0.85138-3.8221-0.85138l-2.4892-1.1525s-2.1249-2.2078-1.7678-2.9221c0.35714-0.71428,1.7028-4.0044,2.4171-4.5401,0.71428-0.53572,1.2608-1.4069,1.2608-1.4069l-1.25-2.3214s-1.7965-1.2085-0.90368-1.7442c0.89286-0.53571,3.7608-2.0058,3.7608-2.0058l2.0906-4.0892,1.5025-3.2341,3.5498-2.6767-0.89285-1.9643-2.4171-1.7118-0.11357-1.6288,2.5306-1.1237,4.1071-0.71428,2.6786-0.89286,1.0714-1.25-0.53571-1.6071-1.986-1.47-1.0083-2.5108-0.0631-2.4477-1.47-2.0058-1.7226-0.67282-2.2583,1.7442s-1.6703,1.0823-2.3846,1.4394c-0.73,0.34-2.87,0.19-2.87,0.19l-2.3214,1.25-0.44008,2.5-0.80992,2.3214-2.5,1.0714-2.1429,0.53571-0.53571,2.4585-1.4809,1.4286-2.3431-0.17857-0.99746-2.4585-1.0714-2.5s-1.2608-0.51404-1.9751-0.69262c-0.71428-0.17857-4.4534,0.51405-4.4534,0.51405l-1.7857-0.17857-1.7857-1.25,1.9643-5.5357,0.89286-4.1072s1.25-2.3214,1.9643-3.0357c0.71428-0.71429,3.0357-5,3.0357-5l0.35714-2.6786s-0.53571-1.25-1.6071-1.6072c-1.0714-0.35714-5.3571,0.17858-5.3571,0.17858l-2.6786,0.53571s-3.3424,2.5325-4.0567,1.8182c-0.71428-0.71429-1.1219-3.9611-1.1219-3.9611s-3.0376-1.6288-3.0376-2.5217c0-0.89286,1.9662-1.5855,1.9662-1.5855s0.53571-1.0714,0.71428-2.1429c0.17857-1.0714-0.20024-2.8138-0.20024-2.8138l-2.6281-0.77741s-1.4069-0.89472-2.1212-1.0733c-0.71428-0.17857,1.1996-2.2998,1.1996-2.2998l0.89286-1.6072-0.35714-1.0714s-2.2493-0.54655-2.2493-1.2608c0-0.71429,1.6505-3.3604,1.6505-3.3604l-1.5873-1.6703-2.5415-0.82971-0.80806-1.618s0.69262-0.73594,1.5855-1.0931c0.89286-0.35714,1.0498-0.61866,1.0498-0.61866l-1.3852-0.89286v-2.4062c0-0.71429-0.074-2.3304-0.074-2.3304s-1.2718-1.1078-1.4502-2.345c-0.1894-1.3131,2.6371-1.7532,2.6371-1.7532l-0.93619-0.82972-0.49238-1.4917,0.2417-2.1339,2.7525-0.86037,2.9094-0.89285,2.4477,0.1371,0.70345-1.8922,3.2034,0.21106,2.9203,0.0108s0.35715-1.7749,0.35715-2.4892c0-0.71428-1.8705-1.618-1.4286-2.2691,0.40112-0.59101,1.5657-0.89285,2.4585-1.0714,0.89286-0.17858,3.9286-0.71429,4.1072-1.4286,0.17857-0.71428,2.5829-6.1562,2.5829-6.1562s0.96683-1.0083,1.6811-1.1869c0.71429-0.17857,3.9286-0.93432,3.9286-0.93432l-1.764-2.794-3.0051-2.8246-1.6378-4.8539-2.3214-2.1428-1.4286-1.7857v-5.3571l3.0357-6.7857-1.0714-3.2143-0.72512-5.8585,0.81889-2.85s3.5498,0.11543,4.264,0.29401c0.71428,0.17857,7.7634,0.22004,7.7634,0.22004s0.95599-4.0152,1.3131-4.7295c0.35714-0.71428,1.3871-0.826,2.28-1.0046,0.89286-0.17857,3.3495-0.62051,3.3495-0.62051l2.5433,1.1562,1.6071-1.0714z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_ha" class="jvectormap-region"></path>
                                    <path d="m781.96,462.82c0.98214,1.875,1.1607,1.875,1.875,2.5893l2.6786,2.6786s0.80357,1.1607,1.0714,1.7857c0.26786,0.625-0.0893,1.6964,0.625,1.9643,0.71429,0.26785,2.3214,0.53571,2.7679,0.625,0.44643,0.0893,1.4286,1.0714,2.3214,1.1607,0.89285,0.0893,1.6071,0.0893,2.1428-0.35714,0.53572-0.44643,1.0714-1.25,1.6964-1.7857,0.625-0.53571,2.5893-1.4286,3.125-1.6964,0.53572-0.26785,1.875-0.625,2.3214-1.0714,0.44643-0.44643,1.1607-0.98215,1.1607-2.0536s0.26785-2.7678,0.71428-3.125c0.44643-0.35714,2.9464-1.9643,3.5714-2.5,0.625-0.53571,1.6964-2.2321,2.1429-2.8571,0.44643-0.625,1.875-2.6786,2.2321-3.2143,0.35714-0.53572,2.1429-2.0536,2.1429-2.0536l2.0536-2.3214,0.98214-1.0714,2.6786-1.875,0.71429-0.80357,0.17857-1.1607,0.0893-0.35714-1.5179-0.17857-1.875-0.0893-1.6964,0.44643-1.6964,1.1607-1.3393,1.25-0.80358,1.0714-1.25,1.6072-1.4286,0.98214-1.7857,0.625s-1.25,0.17857-1.7857,0c-0.53571-0.17857-2.1428-0.71429-2.1428-0.71429l-1.4286-0.625-0.80358-0.98214-0.89285-0.625s-0.80357-0.26786-1.1607-0.17857c-0.35714,0.0893-1.7857,0.625-1.7857,0.625l-2.0536,0.71429-2.4107,0.17857s-1.0714,0.44643-1.7857,0.625c-0.71429,0.17857-2.4107,0.80357-2.4107,0.80357l-1.4286,0.89285-1.875,0.26786-0.80357,0.17857-0.35714,0.98215-0.0893,1.4286s-0.44643,1.1607-0.44643,1.5178c0,0.35715-0.53571,1.875-0.53571,1.875l-0.53571,1.1607-0.71429,1.4286z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_eu" class="jvectormap-region"></path>
                                    <path d="m822.68,473.71c0,0.53571,0.53571,1.25,0.53571,1.25l1.4286,1.4286s0.35715,1.0714,0.44643,1.4286c0.0893,0.35714-0.625,2.0536-0.625,2.0536l-1.1607,2.7679s-0.0893,2.2321,0,2.5893c0.0893,0.35715,0.625,1.0714,0.89285,1.5179,0.26786,0.44643,0.80358,1.1607,0.80358,1.5179,0,0.35714-0.80358,1.9643-0.80358,1.9643v1.9643c0,0.44643-0.44642,1.9643-0.44642,1.9643s-0.17858,0.0893-0.17858,1.0714v2.7679c0,0.71429-0.26785,3.0357-0.35714,3.3929-0.0893,0.35714-1.9643,0.53571-2.3214,0.53571-0.35714,0-1.3393-0.98214-1.3393-0.98214s-0.98215-1.6071-1.1607-2.0536c-0.17857-0.44643-1.3393-1.5179-1.3393-1.875,0-0.35715-0.26786-1.6072-0.89286-1.7857-0.625-0.17857-1.5179,0.26786-1.5179,0.26786s-0.53571,0.89286-0.625,1.25c-0.0893,0.35714,0,0.98214-0.0893,1.4286-0.0893,0.44643-0.71429,2.5-0.71429,2.5s-0.625,0.625-1.1607,0.89286c-0.53572,0.26786-2.2322,1.0714-2.2322,1.6071,0,0.53572,1.0714,0.71429,2.1429,2.0536,1.0714,1.3393,3.125,4.6429,3.125,4.6429l2.5,4.2857,1.4286,4.9107s0.44643,1.6071,0.625,2.1429c0.17857,0.53571,0.89286,1.1607,0.98215,1.9643,0.0893,0.80357,0.53571,2.5-0.35715,2.8571-0.89285,0.35715-4.0178,1.0714-4.0178,1.0714l-0.71429,0.625,1.1607,0.71429s0.625,0.44643,1.0714,0.53571c0.44643,0.0893,0.53572,1.4286,0.98215,1.4286,0.44642,0,1.875-0.35714,2.4107-0.71428,0.53571-0.35714,1.3393-0.625,2.1429-0.625,0.80357,0,1.4286-0.44643,1.4286-1.0714,0-0.625-0.625-3.3929-0.625-3.8393,0-0.44642,1.5179-2.5893,1.5179-2.5893v-2.1429c0-0.35714-0.17858-1.4286,0.35714-1.5179,0.53571-0.0893,2.9464-0.71428,2.9464-0.71428s0-1.1607,1.0714-0.26786c1.0714,0.89286,1.5178,2.9464,1.5178,2.9464s1.875,0.35714,2.2322,0.17857c0.35714-0.17857,0.98214-0.625,1.5178-0.98214,0.53572-0.35714,2.5893-0.53572,3.3929-0.53572,0.80357,0,2.1429-0.44642,2.1429-0.44642l-0.26786-1.1607s2.0536-1.25,2.5-1.5179c0.44643-0.26785,2.2321-1.1607,2.8571-1.7857s1.5179-1.4286,1.9643-2.4107c0.44643-0.98215,1.3393-3.125,1.5179-3.4822,0.17857-0.35714,1.1607-2.5,1.4286-3.2143,0.26785-0.71429,0.89285-2.3214,1.3393-3.125,0.44643-0.80357,1.5179-2.8572,1.5179-2.8572s-0.0893-2.3214-0.0893-2.8571c0-0.53571-0.26785-1.875-0.625-2.8571-0.35714-0.98214-0.53571-1.1607-0.44642-2.1429,0.0893-0.98214,0.98214-1.6071,1.6071-2.0536,0.625-0.44643,1.0714-1.4286,1.0714-1.9643,0-0.53571-1.25-2.9464-1.25-2.9464s0.0893-1.1607,0.35714-1.6964c0.26786-0.53572,1.5179-1.7857,1.5179-1.7857l0.17857-2.9464s0.80357-2.2321,0.80357-2.6786c0-0.44643,0.26786-3.9286,0.26786-3.9286l0.89285-2.1429s0.26786-3.3928,0.26786-3.9286c0-0.53571-0.53571-5-0.53571-5.5357,0-0.53572-0.17857-4.1071-0.17857-4.7321s-0.71429-2.1429-0.71429-2.5893c0-0.44643,0.0893-2.1429,0.26786-2.5893,0.17857-0.44643,0.98214-1.9643,0.98214-1.9643s-0.0893-2.0536-0.0893-2.5893c0-0.53571,0.17858-1.6964-0.44642-1.7857s-2.3214,0.80357-2.3214,0.80357l-1.7857,0.71429-1.5178,0.17857-0.71429-0.44643-1.0714-1.4286s-0.26786-1.4286-0.26786-1.7857c0-0.35714-0.53571-1.1607-0.53571-1.1607l-1.25-1.3393-1.3393-1.3393-1.4286-0.71429-1.0714,0.17857s-0.98214,0.17858-1.0714,0.53572c-0.0893,0.35714-0.53572,0.44643-0.80358,0.80357-0.26785,0.35714-1.1607,1.3393-1.1607,1.3393l-0.53571,1.0714-0.44643,1.0714-0.80357,0.80357-0.17858,0.71429,0.35715,0.80357,0.89285,0.98214s0,0.71429,0.53572,0.80358c0.53571,0.0893,1.0714,0.0893,1.0714,0.0893h1.3393l1.25,0.625,0.71429,0.80357,0.0893,1.3393-0.26785,1.4286-0.44643,1.25-0.53572,0.71429-1.5178,0.89285-1.7857,0.89286-0.89285,0.89286,0.26785,0.80357,1.9643,0.80357,0.80357,0.98214-0.0893,0.71429-0.80357,1.0714-1.0714,1.0714-1.875,0.89286-1.7857,0.98214-3.64,1.44-1.6964,0.44643-1.9643,0.26786-0.89286-0.44643-1.25-0.71429s-0.53571-0.26786-0.89285,0c-0.35715,0.26786-0.625,0.98214-0.625,0.98214l-1.5179,1.0714-0.53571,1.6964,0.0893,1.3393s0.35714,0.71428,0.44643,1.1607c0.08,0.44,0.08,1.33,0.08,1.33l-0.0893,1.6071-0.98214,1.0714z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_pr" class="jvectormap-region"></path>
                                    <path d="m829.64,182.46s1.0714,0.71428,2.1429,1.25c1.0714,0.53571,3.0357,2.1429,3.2143,2.8571,0.17857,0.71429,0.17857,2.3214,1.0714,2.8571,0.89286,0.53572,3.5714,1.0714,3.5714,1.0714l1.9643,0.89286,1.0714,1.7857,3.0357,1.6072s0.71429,1.0714,0.17857,1.9643c-0.53571,0.89286,0,2.6786,0,2.6786l2.5-0.35714,2.8572,0.35714,1.6071,2.3214,1.9643,2.6786,2.1429,1.0714,1.9643,2.1429,1.0714,1.9643,0.17857,2.5s-0.35715,2.5,0,3.2143c0.35714,0.71429,1.0714,3.75,1.0714,3.75l1.0714,1.7857s0.53572,1.0714,0.53572,1.7857c0,0.71428-0.89286,2.1429-0.89286,2.1429l0.17857,1.7857-1.9643-0.53571-0.35715-1.9643s0.35715-0.71429-0.53571-0.35714c-0.89286,0.35714-1.7857,1.4286-1.7857,1.4286s-0.35715,0.89286-1.0714-0.53572c-0.71429-1.4286-1.7857-1.9643-1.7857-1.9643s-1.6071-0.71429-1.6071-1.9643-1.7857-2.3214-1.7857-2.3214l-1.6072-1.4286s-0.35714,1.7857-0.35714,2.5c0,0.71429,1.4286,1.4286-0.35714,1.4286s-4.1072,0.71429-4.1072,0.71429l-0.89285,1.0714-0.35715,2.6786-1.25,1.25-2.6786,2.8571-0.35714,2.3214-1.0714,1.9643,0.53572,2.3214,1.4286,1.4286s0.53571,0.71428,0.53571,1.4286v2.6786l0.17857,1.6071,1.6072,1.4286,0.17857,4.4643v4.4643l0.17857,3.0357,1.7857,2.6786,1.0714,3.0357,0.35714,0.89285,1.9643,0.35715,1.0714-1.25,1.9643-1.0714s1.6072-0.17857,2.3214-0.17857c0.71429,0,1.6072,0.89285,1.6072,0.89285l0.17857,0.89286-1.7857,1.4286-1.7857,0.71429v1.0714l-0.71429,0.89285-1.7857,0.89286-1.25,0.53571-0.53572,0.71429-0.17857,2.6786v2.3214l-0.89285,0.71429-1.7857-0.89286-0.71428,1.4286-0.53572,2.5-1.0714,1.25-3.2143,0.71429-1.25-0.17858-0.53572-1.6071,2.5-1.6071,1.25-1.9643s1.9643-1.7857,0.53572-1.7857-2.6786,1.0714-2.6786,1.0714l-0.89286,1.25-0.89286,0.53571s-0.89286,0.35714-1.7857-0.17857c-0.89286-0.53571-2.3214-0.71429-2.3214-0.71429s-1.25,0.89286-1.25,1.4286c0,0.53571,0.35714,1.4286-0.53572,1.4286-0.89285,0-3.2143,0.17857-3.2143,0.17857l-2.5,1.6071-2.5,0.89286-1.0714,2.1429,0.35714,1.7857,0.53572,1.9643,0.35714,0.89285,1.6071,1.0714s0.17857,0.89286-1.7857,0.89286h-4.4643l-1.0714,2.1429-1.0714,1.25-2.5,0.35714-2.1429-2.8571-2.6786-1.25s-1.9643-0.71429-2.6786-0.71429c-0.71429,0-3.3929,0.17857-3.3929,0.17857l-2.1429,0.89286-1.7857,0.17857-1.25-0.89286-1.0714-1.7857-0.17857-2.3214,1.25-1.9643,0.17857-2.5-2.5-3.9286-2.3214-1.4286-2.3214-1.25-2.6786-0.71428-2.6786-0.71429-2.1429,0.71429-1.0714,1.4286-1.0714,1.9643-0.89285,1.25h-1.25l-1.25-1.9643-0.17857-0.89286,1.25-0.71429,0.35714-1.4286v-1.25l-1.25-1.25-5.7143-6.7857s-0.35714-1.0714-0.35714-1.7857v-3.2143l-1.78-0.88-0.89286-0.35714-0.17857-3.0357-0.53572-1.4286-1.0714-0.35714-0.35714-1.25,1.6071-1.4286,2.1429-0.17857,1.0714-0.53572,1.0714-1.0714,2.1429-0.17857,1.9643,0.17857,0.53572-1.0714-1.25-1.9643-1.4286-1.25-0.35714-2.1429s1.25-0.53571,1.9643-0.53571c0.71428,0,3.5714-1.0714,3.5714-1.0714l-0.17858-2.6786s0.53572-0.35714,1.25-0.35714c0.71429,0,3.9286,0.35714,3.9286,0.35714l2.1428-1.7857,4.1072-6.4286-0.17858-3.0357-1.4286-1.4286-2.6786-2.8572s-1.25-0.89285-1.4286-1.6071c-0.17857-0.71428-0.35714-1.7857-0.35714-1.7857l2.1428-2.3214,0.17858-1.6071-1.25-1.25-2.5,0.17857-0.71429-0.53572-1.0714-1.0714v-0.71429l3.06-0.86,1.25-1.0714-0.53572-1.4286-1.25-0.89285-0.17857-1.6072,2.1429-3.0357,3.75-1.25,2.1428-1.25-1.25-2.5s0.17858-0.35714,0.89286-0.35714c0.71429,0,3.3929,0.71428,3.3929,0.71428l1.0714-0.17857-0.53572-3.5714v-1.6071l1.4286-0.53572,0.2-2.66-0.17858-0.53571h2.5l1.6072,0.53571,0.53571,1.9643,1.0714,1.0714s0.53571,0.53571,1.25,0.53571,3.75-0.71428,3.75-0.71428l3.5714-0.71429,2.3214-0.35714,2.6786-1.0714,2.3214-1.4286,2.3214-0.89286,1.9643-0.17857,2.8571-0.35714,2.5-1.6072z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap4_ma" class="jvectormap-region"></path>
                                    <path d="M943.16,321.59c-0.45,0.19-0.81,0.37-1.19,0.94s-0.31,1.53-0.5,1.85c-0.19,0.31-1.53,1.12-1.53,1.12-0.51,0.51-0.87,1.06-2,1.25-1.14,0.19-2.59-0.23-2.85,0.66-0.25,0.88,0.06,2.12,0.69,2.25,0.63,0.12,1.53,0.44,2.1,0.25,0.56-0.19,1.56-1.25,1.56-1.25s0.62,0.3,1,0.93c0.38,0.64,0.97,1.78,0.97,2.03,0,0.26,0.19,1.06-0.07,1.57-0.25,0.5-0.81,2.78-0.56,3.03s1.24,0.9,1.94,0.9c0.69,0,1.09,0.17,1.78-0.78,0.69-0.94,0.93-1.74,1.25-2.56s0.78-1.9,1.09-2.16c0.32-0.25,0.48-1.02-0.22-1.65-0.69-0.63-0.93-1.75-1-2.06-0.06-0.32-0.56-1.09-0.24-1.53,0.31-0.45,1.12-1.31,1-1.69-0.13-0.38-1.38-1.09-1.82-1.47s-0.96-1.82-1.4-1.63zm2.15,20.44s-0.43,0.15-0.69,0.85c-0.25,0.69-0.5,1.74-0.31,2.31s0.56,1.4,0.81,1.78c0.26,0.38,0.75,1.31,0.88,1.62,0.13,0.32,0.53,0.72,1.03,0.91,0.51,0.19,1.12,0.07,1.25-0.44,0.13-0.5,0.19-1.4,0.19-2.03s-0.19-2.15-0.19-2.53,0.07-0.87-0.31-1.31-2.66-1.16-2.66-1.16zm2.53,9.22c-0.56,0.19-1.9,0.5-2.15,0.69-0.26,0.19-0.63,0.52-0.5,1.03,0.12,0.5-0.2,1.24,0.5,1.69,0.69,0.44,2.15,0.96,2.53,1.09s0.55,0.44,1.19,0.13c0.63-0.32,1.09-0.59,1.03-1.41-0.07-0.82-0.59-1.62-0.78-1.88-0.19-0.25-1.5-1.34-1.5-1.34h-0.32zm-117,4.5l-1.87,1.25s0.5,1.12,0,1.12h-1.78s-1.26,0.78-0.5,1.29c0.76,0.5,2.4,0.87,3.03,1,0.63,0.12,1.52,0.65,2.16,1.15,0.63,0.51,1.49,0.87,1.74,1.63,0.26,0.76,0.63,2.28,0.63,2.28l0.91,1.62-0.54,2.16-1.74,0.13s-0.91-1.14-1.41-0.13c-0.51,1.01-0.5,1.77-0.5,2.41,0,0.63,0.27,1.24,0.91,1.37,0.63,0.13,1.48,0.4,2.74,1.41,1.27,1.01,2.03,2.9,2.29,3.53,0.25,0.63,0.24,2.65,0.5,3.41,0.25,0.75,1.4,2.02,2.03,2.53,0.63,0.5,2.03,2.52,2.28,3.03,0.25,0.5,1.25,2.4,1.5,2.9,0.25,0.51,1.78,1.75,1.78,1.75s1.24,1.15,2,1.66,3.8,1.37,4.56,1.37,3.03,0.66,3.28,1.16c0.26,0.51,2.78,5.66,2.78,5.66l5.57,8.34s2.52,2.15,3.15,2.66c0.64,0.5,2.4,3.9,2.91,4.65,0.51,0.76,2.12,4.44,2.5,4.94,0.38,0.51,3.69,5.06,3.69,5.06s2.77,1.88,3.4,2c0.64,0.13,3.41,1.91,3.41,1.91s2.65,2.9,2.78,3.41c0.13,0.5,0.75,3.53,0.75,3.53l2.16,3.4,3.15,2.66,2.5,5.19,0.53,2.25s0,2.15,0.5,2.53c0.51,0.38,5.29,4.06,5.29,4.06l1.65,0.88,1.78,0.25v-2.54s-0.9-1.65-1.15-2.15c-0.26-0.51-0.88-3.03-0.88-3.03s-0.5-0.74-0.5-1.63c0-0.88,0.75-2.4,0.75-2.4s1.53-0.25,2.16-0.25,1.24-0.12,2.25-0.63c1.01-0.5,2.41-0.37,2.41-0.37l2.28,2,1.37,0.78s0.5-1.4,0.5-2.03c0-0.64,0.01-1.53-0.62-2.41-0.64-0.88-1.63-1.88-1.63-1.88l-2.03-1.65s-0.99-1.38-1.75-1.25-1.15,0.24-1.41,0.75c-0.25,0.5,1.52,2.66,0,2.28-1.51-0.38-2.4-0.9-2.78-1.41-0.38-0.5-1.62-1.87-1.62-1.87s-2.4-1.28-3.03-1.53c-0.64-0.26-2.4-0.88-3.04-0.88-0.63,0-4.06-1.15-4.06-1.15l-2.12-2.38-2.41-6.31s-1.12-1.65-1.25-2.41-1.03-3.15-1.16-3.65c-0.12-0.51-0.37-2.28-0.62-2.78-0.25-0.51-1-2.29-1-2.29l-0.53-3.28,1.78-1.62s2.77-1.03,3.41-1.03c0.63,0,5.06-0.13,5.06-0.13l2.4,0.63s2,0.25,2.5,0.25c0.51,0,1.03,0.51,1.16-0.5s-1.53-2-1.53-2l-3.53-0.53-3.66-1.26-2.4-1.78-18.57-15.25-1.5-1.28-1.78-0.12s-0.87,0.13-1.25-0.63-0.4-1.27-1.15-1.9c-0.76-0.64-2.5-1.88-2.5-1.88s-1.52-0.25-2.66-0.5-3.66-1.4-3.66-1.4l-0.4-2.79-1.38-1.25-0.62-1.28,1.25-1.62-0.25-1.91-2.53-2.12-3.54-0.79s-2.4-0.99-2.65-1.5c-0.25-0.5,0.12-2.15,0.12-2.15s-0.62-1.12-1.12-1.5c-0.51-0.38-4.28-1.91-4.28-1.91l-2.91-1.9-1.03-2.63s0.01-1.91-0.63-1.91c-0.63,0-2.78-0.87-2.78-0.87zm119.16,7.94c-0.88,0.25-1.53,0.4-1.72,0.97-0.19,0.56,0.06,1.24,0.31,1.43,0.26,0.19,0.84,0.69,1.47,0.57,0.63-0.13,1.56-0.19,1.82-0.57,0.25-0.38-1.13-1.46-1.32-1.78-0.19-0.31-0.56-0.62-0.56-0.62zm1.75,4.06c-0.51,0.25-1.19,0.56-1.37,1.06-0.19,0.51,0.36,1.37,1,1.75,0.63,0.38,1.05,0.63,1.56,0.06,0.5-0.56,1.09-1.62,1.03-1.93-0.06-0.32-2.22-0.94-2.22-0.94zm0.19,6.97c-0.18,0.01-0.34,0.06-0.5,0.16-0.63,0.37-0.82,1.18-0.82,1.56s0.88,3.09,0.88,3.47-0.87,2.4-1,2.9c-0.13,0.51-0.01,1.33,0.62,2.6,0,0,1.13-0.25,1.38-0.25s1.72-0.94,1.84-1.19c0.13-0.25,0.44-2.28,0.44-2.91s-0.06-2.02-0.12-2.47c-0.07-0.44-0.63-1.4-0.63-1.78s-0.31-1.43-0.69-1.69c-0.28-0.18-0.87-0.44-1.4-0.4zm-4.41,14.53s-1.28,0.03-1.53,0.16c-0.25,0.12-0.69,0.49-0.81,0.75-0.13,0.25-0.57-0.07,0.06,0.62,0.63,0.7,1.02,1.38,1.66,1.38,0.63,0,2.06,0.65,2.31,0.65s1.03-0.21,1.22-0.47c0.19-0.25,0.75-0.49,0.31-1.18-0.44-0.7-0.97-1.06-1.22-1.19s-2-0.72-2-0.72zm1.81,6.47c-0.19,0.31-1.37,1.18-1.43,1.44-0.07,0.25-0.32,0.74-0.38,1.25-0.06,0.5-0.31,1.77-0.31,2.09s-0.53,1.59-0.78,2.16c-0.26,0.56-0.5,1.49-0.44,2.12s-0.07,1.09,0.19,1.66c0.25,0.57,0.24,1.18,0.56,1.37s-0.04,1.29,1.09,0.6c1.14-0.7,1.63-1.34,1.82-1.79,0.19-0.44,0.53-2.09,0.72-2.34,0.18-0.25,0.56-1.43,0.68-1.81,0.13-0.38,0.63-1.9,0.63-2.22s0.06-1.59-0.25-2.22c-0.32-0.63-1.19-1.31-1.19-1.31l-0.91-1zm-4.9,15.4c-0.26,0.07-0.97,0.19-1.28,0.44-0.32,0.26-0.63,0.56-0.69,0.75s-0.5,0.94-0.5,1.19,0.06,1.15,0,1.41c-0.06,0.25,0,0.56-0.56,0.81-0.57,0.25-1.22,0.43-1.6,0.56s-0.81,0.44-1.06,0.69-0.94,0.72-0.94,0.72-0.53,0.18-0.53,0.5c0,0.31,0.41,0.99,0.53,1.25,0.13,0.25,0.75,1.22,0.75,1.22l-0.18,0.75s-1.04,0.74-1.1,1.06c-0.06,0.31-0.12,1.59-0.12,1.97s0.06,1.74,0.06,2c0,0.25,0.19,1.84,0.19,2.09s0.15,1.34,0.28,1.97c0.12,0.63,0.12,1.06,0.43,1.44,0.32,0.38,0.56,1.03,0.88,1.22s0.5,0.68,0.88,0.62c0.37-0.06,1.71-1.03,1.71-1.03s0.63-0.62,0.75-1.06c0.13-0.44,0.44-2.16,0.44-2.16s0.19-1.37,0.13-1.69c-0.07-0.31-0.69-0.65-0.75-1.22-0.07-0.56-0.07-0.8,0-1.68,0.06-0.89,0.87-2.09,1.06-2.35,0.19-0.25,0.84-1.18,0.97-1.93,0.12-0.76-0.07-1.84,0.19-2.16,0.25-0.32,0.8-0.75,1.06-1.06,0.25-0.32,1.06-1.65,1.18-2.03,0.13-0.38,0.13-1.4,0.13-1.91s-0.31-1.37-0.56-1.56c-0.26-0.19-1.75-0.82-1.75-0.82zm-8.35,23.69c-0.31-0.01-0.62,0-0.75,0.03-0.25,0.07-0.56,0-0.81,0.32-0.25,0.31-0.78,0.71-1.22,0.84s-0.87,0-0.93,0.31c-0.07,0.32-0.26,0.87-0.26,1.13,0,0.25,0.06,0.74,0.32,1,0.25,0.25,0.62,0.21,0.75,0.78,0.12,0.57,0.19,1.18,0.12,1.44-0.06,0.25-0.31,1.12-0.37,1.43-0.07,0.32-0.19,0.4-0.38,1.03-0.19,0.64-0.31,1.38-0.31,1.76v1.15c0,0.38-0.06,1.19,0.13,1.44,0.18,0.25,0.62,0.56,0.87,0.81s1.47,0.47,1.72,0.47,0.5-0.28,0.75-0.66,0.56-0.99,0.56-1.56-0.12-2.96-0.06-3.28,1.12-0.84,1.19-1.41c0.06-0.56,0.03-1.74,0.09-2,0.06-0.25,0.31-1.15,0.31-1.15s0.75-0.44,0.88-0.81c0.12-0.38,0.25-1.13,0.25-1.5,0-0.38-0.19-1.54-0.19-1.54h-1.84c-0.19,0-0.5-0.02-0.82-0.03zm7.85,1.88c-0.57,1.01-0.72,0.99-0.78,1.75-0.07,0.76-0.88,1.53-0.88,1.53s-0.31,0.31-0.44,0.62c-0.12,0.32-0.69,0.81-0.06,1s1.72,0.19,1.97,0.07c0.25-0.13,0.75-0.69,1-0.82,0.25-0.12,0.44-0.49,0.44-1.37,0-0.89-0.19-1.9-0.31-2.16-0.13-0.25-0.94-0.62-0.94-0.62z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_sh" class="jvectormap-region"></path>
                                    <path d="M888.56,146.75l-1.65,0.84c-0.26,0.13-1.25,0.88-1.25,0.88l-0.13,1,0.13,2.78,0.25,1.16-0.88,2.43-1.72,4.69-0.93,1.56-0.44,1.41-0.06,1.81s-0.22,1.03-0.47,1.22c-0.26,0.19-0.82,0.13-0.82,0.13h-1.81-2.59l-1.6-0.19-1.68-0.31s-0.53,0.25-0.85,0.25c-0.31,0-0.68,0.56-1,0.75-0.31,0.19-1.37,0.74-1.56,1-0.19,0.25-1.28,0.78-1.59,0.9-0.32,0.13-1.38,1-1.63,1.19s-0.78,0.56-1.22,0.63c-0.44,0.06-0.94-0.32-0.94-0.32s-0.62-0.99-0.74-1.25c-0.13-0.25-0.97-1.72-0.97-1.72s-0.07-1.31-0.13-1.62c-0.06-0.32-0.06-1.47-0.12-1.72-0.07-0.25-0.13-1.06-0.13-1.06s0.25-1.22,0.31-1.66c0.07-0.44,0.38-0.75,0.38-0.75s0-0.56-0.19-0.87c-0.19-0.32-0.81,0.06-0.81,0.06l-1.75,0.44-1.97,0.81-1.66,0.5-1.18,0.19-2.04-0.25s-1.62-0.38-1.87-0.57-1.03-0.12-1.03-0.12l-0.63,0.56-0.87,1.16-0.63,0.81-0.84,0.88s-1.31,0.74-1.56,0.87c-0.26,0.13-0.94,0.59-0.94,0.59l-1.22,1.32-1.44,2.28s-2.27,2.28-2.59,2.47-1.18,0.87-1.44,1.12c-0.25,0.25-1.34,0.38-1.72,0.44s-0.74,0.62-1,0.94c-0.25,0.31-1.15,1.28-1.15,1.28l-0.81,0.56s-0.75-0.31-1.13-0.31-0.44,0.31-0.44,0.31l-0.97,1.91-1,2.18s-0.5,1.59-0.5,1.91,0.63,0.44,0.88,0.63c0.25,0.18,1.65,0.8,2.03,1.06,0.38,0.25,1,0.84,1.31,1.15,0.32,0.32,1.41,1.32,1.41,1.32s-0.13,0.43-0.06,0.68c0.06,0.26,0.37,1.15,0.68,1.66,0.32,0.51,0.94,0.81,0.94,0.81s4.09,1.16,4.35,1.28c0.25,0.13,1.09,1.32,1.09,1.32l0.37,0.68s1.13,0.85,1.44,1.04c0.32,0.18,1.22,0.31,1.22,0.31l0.62,0.62,0.44,1.19s-0.31,1.59-0.37,1.97c-0.07,0.38-0.07,0.99,0,1.37,0.06,0.38,1.12-0.06,1.12-0.06s1.4-0.31,1.97-0.25,1.56,0.25,1.56,0.25,1.22,0.4,1.35,0.66c0.12,0.25,0.75,1.18,0.75,1.18l1.15,1.5,1.25,1.72,1.85,1.32,2,1.65,1,1.31s0.84-0.99,1.03-1.31c0.19-0.31,0-0.74,0-1.19,0-0.44-0.37-0.71-0.75-0.96-0.38-0.26-0.97-1.19-1.35-1.63-0.37-0.44-0.56-0.84-0.56-0.84s-0.81-1.06-1.06-1.31c-0.25-0.26-1.09-0.94-1.34-1.19-0.26-0.26-1.25-1.34-1.69-1.97s0-0.75,0-1.06c0-0.32,0.87-1.04,0.87-1.04s0.94-1.3,1.19-1.62,0.44-1.21,0.5-1.59,0.47-1.31,0.85-1.5c0.37-0.19,1.18-0.38,1.68-0.44,0.51-0.06,1.84,0.5,1.97,0.81,0.13,0.32-0.62,0.69-0.75,0.94-0.12,0.25,0,1.59-0.06,2.16-0.06,0.56,0.12,1.71,0.12,2.28,0,0.56,0.75,1.37,0.75,1.37s1.13,1.4,1.44,1.72c0.32,0.32,1.28,0.93,1.59,1.19,0.32,0.25,1.57,1.65,1.57,1.65l3.34,2.32,0.97,0.59s0.75,1.25,0.81,1.69c0.07,0.44,0.44,0.93,0.44,0.93s1.03,0.22,1.34,0.47c0.32,0.26,0.63,1.31,0.63,1.69s-0.12,1.03-0.44,1.47c-0.31,0.44-1.21,0.93-1.53,1.25s-0.69,0.75-0.69,0.75-0.06,5.68-0.06,6.25,0.75,1.78,1,2.16,1.21,2.14,1.72,2.9c0.5,0.76,0.69,1.12,0.69,1.44s0.25,1.66,0.25,1.66,0.56,10.46,0.62,11.09,0.59,1.03,0.78,1.41,0.75,0.93,1,1.18c0.26,0.26,0.75,0.84,0.88,1.16,0.12,0.32,0.97,1.62,0.97,1.62s0.74,2.78,0.87,3.54c0.13,0.75,0.13,1.72,0.13,1.72s1.31,3.96,1.31,4.4v1.47s-0.81,1.75-1.13,2.13c-0.31,0.37-0.06,1.77-0.06,2.09,0,0.31-1.34,2.46-1.84,2.84-0.51,0.38-1.31,1-1.44,1.38s0.25,1.03,0.25,1.03l1.81,0.87,2.28,0.94s1.09,2.15,1.47,2.66c0.38,0.5,0.56,1.59,0.56,1.9,0,0.32,0.32,3.47,0.44,4.16,0.13,0.69,0.38,1.65,0.56,2.09,0.19,0.45,1.79,1.5,1.79,1.5s2.21,3.94,2.34,4.25c0.13,0.32,0.81,1.69,1.06,2,0.08,0.1,0.29,0.25,0.53,0.41,0.62,0.78,3.07,1.94,3.07,1.94l0.93,0.62s4.63,4.25,4.69,4.5c0.06,0.26,2.78,2.32,2.78,2.32s2.34,0.84,2.6,1.03c0.25,0.19,1.68,0.75,1.68,0.75l14.91,10.22,2.03,1.21,3.03,0.94s1.19,1.59,1.44,1.72,3.15,1.19,3.59,1.19c0.45,0,1.47,1,1.47,1s2.59,2.78,2.97,3.03,2.56,1.91,2.56,1.91,2.09,1.18,2.47,1.18,2.85-0.5,2.85-0.5l0.68-0.62v-2.03s-0.06-1.69-0.06-1.88,0-1.21-0.25-1.53-0.81-0.88-0.81-0.88,0.18-1.52,0.44-1.96c0.25-0.45,0.43-0.69,0.43-1.07s-0.31-1.15-0.56-1.4c-0.25-0.26-0.5-1.19-0.5-1.19s-0.06-2.34-0.31-2.66c-0.25-0.31-1.09-0.99-1.28-1.62s-0.5-1.03-0.63-1.41c-0.12-0.38-1.37-1.62-1.62-2.06-0.26-0.44-1.53-1.59-1.72-1.84-0.19-0.26-0.31-1.28-0.5-2.1s-1.02-0.75-1.78-0.75-1.12-0.06-1.38-0.25c-0.25-0.19,0.5-0.43,0.75-0.56,0.26-0.13,1.09-0.9,1.28-1.22,0.19-0.31,0.5-1.37,0.5-1.37l0.69-4.22,1.91-1.6c0.38-0.31,0.25-0.93-0.19-1.31s-1.09-0.25-1.41-0.31c-0.31-0.06-0.8-0.84-1.31-1.16-0.5-0.31-0.84-0.81-1.28-1s-1.24-0.31-2.06-0.56-1.4-1.03-1.91-1.47c-0.5-0.44-0.44-1-0.5-1.25s-0.06-1.96-0.06-2.84v-1.22s-0.97-2.78-0.97-3.1c0-0.31,0.03-1.05,0.16-1.43,0.12-0.38,0.49-0.69,0.75-0.94,0.25-0.25,1.43-0.78,1.43-0.78l1.47-0.88s0.38-1.71,0.38-2.59-0.5-2.25-0.63-2.56c-0.12-0.32-1.34-0.72-1.34-0.72s-1.5-1.19-1.94-1.19-2.46-0.56-2.9-0.69c-0.45-0.12-1.6-0.78-1.85-0.9-0.25-0.13-1.71-1.25-2.09-1.56-0.38-0.32-1.25-1.1-1.5-1.41-0.26-0.32-0.75-1.44-0.88-1.75-0.12-0.32-0.84-1.66-0.84-1.66s0-0.55-0.13-1.12c-0.12-0.57-0.18-1.65-0.18-2.41s1.02-0.62,1.28-0.62c0.25,0,1.68-0.25,2-0.32,0.31-0.06,1.03-0.74,1.22-1,0.19-0.25,0.37-1.77,0.31-2.09s-0.65-0.81-1.22-1-0.94-0.78-1.12-0.84c-0.19-0.07-2.16-0.88-2.16-0.88s-2.06-0.69-2.5-0.75-0.59,0.44-0.84,0.63c-0.26,0.19-0.5,0.37-1.32,0.37s-1.22-0.44-1.22-0.44l-0.87-1.18s-1.18,0.06-1.81,0.06c-0.64,0-0.91-0.59-1.16-0.91-0.25-0.31-1.06-0.56-1.06-0.56s-0.47-0.19-0.69-0.28c0-0.06,0.19-3.44,0.13-3.69-0.07-0.25-0.66-1.21-0.91-1.47-0.25-0.25-1.37-0.44-1.94-0.44s-1.4,0.6-1.84,0.85-1.06,0.75-1.31,0.94c-0.26,0.19-0.13,1.12-0.13,1.68,0,0.57-0.34,1.03-0.72,1.35-0.38,0.31-0.68,0.25-1.31,0.25s-1.12-0.19-1.63-0.31c-0.5-0.13-0.77-0.56-1.03-0.82-0.25-0.25-1.06-0.96-1.37-1.47-0.32-0.5-0.19-1.05-0.25-1.62-0.07-0.57-0.84-1.65-1.1-2.16-0.25-0.5-1.24-2.34-1.37-2.59s-0.56-1.28-1-1.91-0.9-1.99-1.28-2.62-0.74-1.09-1.5-2.1-0.78-0.56-1.35-0.68c-0.56-0.13-0.99-0.78-1.5-1.35-0.5-0.57-0.84-0.93-1.15-1.75-0.32-0.82-0.37-0.83-0.94-2.15-0.57-1.33-0.07-1.09,0.19-1.66,0.25-0.57,1.06-0.62,1.06-0.62l0.47-0.88s-0.38-1.59-0.31-2.09c0.06-0.51,0.36-0.56,1.06-0.75,0.69-0.19,1.56,0.75,1.94,0.75s1.59-0.5,1.9-0.82c0.32-0.31,0.32-1.08,0.32-1.71,0-0.64-0.62-1-1.13-1.13s-0.94-0.56-0.94-1.06c0-0.51,0.25-1.21,0.25-1.91,0-0.69,0-0.74-0.06-1.25-0.06-0.5-0.12-0.53-0.25-0.91-0.13-0.37,0.06-1.18,0.19-1.68,0.12-0.51,0.56-0.44,0.94-0.38,0.37,0.07,1.24,0.69,1.62,0.94s0.65,0.62,0.84,1,1,1.09,1.63,1.16c0.63,0.06,1.15-0.38,1.15-0.38s-0.09-0.52-0.34-1.09-0.81-1.44-1-1.81c-0.19-0.38-0.5-1.22-0.75-1.6s-0.44-0.5-0.44-0.75,0.69-2.09,0.69-2.41v-3.78c0-0.82,0.19-1.4,0.38-1.72,0.19-0.31,0.87-1.24,1.25-2.06s0.84-1.15,1.09-1.9c0.25-0.76,0.87-1.4,1.44-2.16s0.77-1,1.15-1.12c0.38-0.13,2.91,0.06,3.29,0.06,0.37,0,1.96-0.44,2.65-0.56,0.7-0.13,2.71-0.31,3.41-0.57,0.69-0.25,0.25-0.59,0.18-0.84-0.06-0.25-1.27-0.94-1.65-1.06-0.38-0.13-1.12-0.69-1.38-0.94-0.25-0.25-0.5-1.16-0.5-1.16s-0.59-2.96-0.65-3.28c-0.07-0.31-0.75-1.56-0.75-1.56s-0.13-5.18-0.13-5.63c0-0.44-0.68-2.02-1.37-2.34-0.7-0.32-0.91-0.99-0.91-1.5s0-0.96-0.12-1.59c-0.13-0.64-0.75-1.37-1-1.88-0.26-0.5,0.12-0.78,0.12-1.22s-0.12-1.18-0.5-1.5c-0.38-0.31-0.68-0.49-0.94-0.75-0.25-0.25-0.46-0.9-0.46-1.53s0.28-1,0.34-1.31c0.06-0.32,0.06-1.09-0.06-1.53-0.13-0.44-0.35-1.06-0.41-1.31-0.06-0.26-0.37-1.22-0.37-1.22s-0.5-0.44-0.69-0.44-0.94-0.19-0.94-0.19l-1.78-0.31s-1.69-0.44-1.81-0.69c-0.13-0.25-1.04-0.69-1.04-0.69l-1.56-0.59zm7.25,70.22c-0.88,0.44-1.12,0.43-1.06,1s0.37,1.09,0.63,1.47c0.25,0.38,0.44,0.93,0,1.44-0.45,0.5-1.45,0.52-1.19,1.15,0.25,0.63,0.49,1.06,0.75,1.31,0.25,0.26,0.81,0.9,0.94,1.41,0.12,0.51-0.01,1.06,0.31,1.56,0.31,0.51,0.31,0.69,0.69,0.69,0.37,0,0.59,0.32,0.65-0.5s-0.06-0.95,0-2.84c0.06-1.9,0-2.84,0.06-3.41,0.07-0.57,0.26-1.37,0-1.75-0.25-0.38-1.28-0.9-1.4-1.22-0.13-0.31-0.38-0.31-0.38-0.31zm58.91,12.47c-1.07,0.71-1.16,0.62-1.16,1.15,0,0.54-0.18,0.9,0.53,0.72,0.72-0.18,0.91-0.18,1-0.62,0.09-0.45-0.37-1.25-0.37-1.25zm-10.97,4.53c-0.63,0.45-1.08,0.2-0.81,1.09,0.27,0.9,0.44,1.16,1.15,1.25,0.72,0.09,0.73,0.1,2.07,0.1s2.31,0.06,3.03,0.06c0.71,0,0.99,0.36,1.43,0,0.45-0.36,0.63-0.07,0.54-0.78-0.09-0.72-1.24-0.9-2.22-0.81-0.98,0.08-1.52,0.34-3.13-0.19-1.6-0.54-2.06-0.72-2.06-0.72z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_ka" class="jvectormap-region"></path>
                                    <path d="m33.393,395.68,0.08929,5.2679,17.946-8.5714-1.3393-1.25-2.9464-1.25-1.5179-1.9643-2.4107,2.4107-4.1071-2.6786-1.875,1.0714,0.08929,5.8929-1.5179,1.0714z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b2d496" original="#b2d496"
                                          id="jqvmap4_in" class="jvectormap-region"></path>
                                    <path d="m33.482,401.04,1.0714,2.5,3.125,1.6964,3.4821,0.44642,2.1429-1.9643,2.1429,1.7857,2.5-1.5178-0.08929-1.6072,1.875-2.1428,2.8571,0.44642,3.8393-2.8571-0.625-1.9643-4.4643-0.53572,0.44643-2.7679z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap4_cc" class="jvectormap-region"></path>
                                </g>
                            </svg>
                            <div class="jqvmap-zoomin">+</div>
                            <div class="jqvmap-zoomout">−</div>
                        </div>
                        <div id="vmap_germany" class="vmaps display-none"
                             style="width: 757px; display: none; position: relative; overflow: hidden;">
                            <svg width="757" height="300">
                                <g transform="scale(0.37453183520599254) translate(714.5949999999999, 0)">
                                    <path d="m312.19,352.19c-2.73,0.22 -2.22,4.11 -3.64,5.97 -1.01,2.7 -4.71,2.26 -7.13,2.91 -2.52,0.84 -2.65,-2.93 -5,-3.11 -2.02,-1.67 -5.36,0.2 -4.98,2.55 -0.62,4.82 -6.22,6.91 -9.72,9.65 -2.98,3.28 -7.8,2.07 -11.1,4.73 -2.55,1.59 -5.81,3.14 -7.87,5.03 0.64,3.74 1.96,8.43 6.44,8.84 3.41,0.33 2.07,4.91 5.71,5.17 2.12,1.11 4.61,1.57 6.04,3.67 2.61,-0.18 1.95,2.83 0.13,3.41 -0.75,1.55 1.21,2.98 -0.06,4.88 -2.65,1.33 -1.59,-4.91 -4.58,-2.96 -2.15,1.14 2.24,4.28 1.18,6.62 -0.73,2.87 3.35,2.38 3.93,4.97 0.22,2.4 -1.82,4.2 -4.4,4.04 -1.89,0.05 -3.04,-2.14 -5.19,-1.69 -2.29,-1.13 -3.6,1.4 -2.29,3.19 0.92,3.27 2.06,6.86 1.64,10.24 -1.04,2.07 -1.35,6.09 -4.56,5.07 -2.5,-0.54 -3.05,2.78 -2.17,4.43 0.33,2.11 -1.94,1.58 -0.64,3.71 0.2,3.37 -2.96,5.74 -4.05,8.57 -1.46,3 3.1,3.73 4.61,2.61 -1.8,-1.67 -0.95,-4.04 1.83,-4.18 2.21,-0.46 5.52,-0.43 5.9,2.47 2.29,2.61 -2.68,2.96 -1.96,5.59 0.5,1.86 -0.79,8.31 0.95,7 1.72,-3.38 5.8,-2.18 8.88,-2.88 2.69,0.85 3.11,5.24 6.43,5.5 3.89,0.66 4.77,4.88 6.09,7.93 -0.55,3.14 2.45,3.82 4.54,1.98 0.31,5.02 5.89,6.45 10.06,7.19 -0.2,3.63 -1.27,7.43 0.53,10.84 2.35,0.1 5.18,2.71 7.07,1.85 0.03,-1.3 -1.32,-4.82 1.27,-4.26 2.07,-0.06 5.3,2.5 6.66,0.25 0.29,-2.71 -3.43,-1.58 -4.54,-3.52 -1.94,-1.64 -5.47,-2.54 -4.67,-5.79 -0.91,-3.55 3.89,-3.37 6.02,-4.77 2.87,-1.54 6.27,-0.65 9.38,-0.79 1.61,1.84 2.4,4.9 5.49,4.49 2.33,1.02 3.21,-1.38 4.71,-2.1 2.52,-0.39 4.79,2.85 4.64,5.17 -2.32,0.34 -2,2.87 -0.04,3.79 1.25,1.09 4.62,-1.62 5.78,-2.97 1.07,-2.95 1.98,-5.92 0.84,-9.01 0.33,-2.69 -1.49,-4.1 -2.06,-6.05 -0.35,-1.26 0.15,-3.52 1.89,-2.72 2.51,-0.54 3.16,-3.11 5.03,-4.31 2.41,-0.31 6.41,-0.25 6.75,2.81 -1.09,1.47 -1.71,2.75 -1.31,4.94 2.04,1.91 4.67,0.65 4.88,4.5 0.54,1.96 3.79,3.19 4.05,0.56 1.06,-1.74 3.34,-0.66 4.25,0.63 6.13,-1.07 12.67,-0.94 18.25,-3.97 -1.68,-0.65 -2.19,-2.46 -0.38,-3.31 1.4,-0.73 5.24,-2.7 2.32,-4.13 -1.1,-2.24 -4.24,-0.26 -4.55,-3.08 -1.3,-2.44 2.29,-4.28 3.11,-6.33 2.98,-0.71 2.97,-4.68 5.91,-5.31 1.95,1.54 1.58,4.54 1.16,6.72 1.66,-0.64 6.6,0.71 6.33,-0.74 -3.05,-0.17 -0.61,-3 1.2,-3.1 2.57,-1.22 5.33,-2.23 7.87,-3.14 1.72,-1.51 4.46,-4.54 0.25,-4.48 -1.74,-1.64 -3.31,-4.12 -3.69,-6.5 0.38,-2.82 0.28,-5.87 1.72,-8.41 0.89,2.58 5.82,0.77 5.81,-1.09 0.71,-1.83 4.18,-2.99 5.41,-0.97 2.56,-0.68 0.59,-4.69 3.44,-5.44 3.25,-1.87 7.85,-0.32 10.53,-2.97 -2.57,-1.55 -0.79,-6.34 -4.47,-6.16 -2.74,-0.84 -6.28,-2.6 -5.42,-6.03 0.8,-2.88 -3.5,-2.46 -5.15,-3.47 -2.87,-0.81 -6.3,-2.89 -8.61,0.02 -2.54,2.1 0.01,3.58 1.21,5.21 -0.17,3.21 -2.39,6.03 -3.68,8.9 -1.08,1.71 -2.42,1.35 -2.66,-0.64 -2.24,-4.02 -1.09,1.94 -3.66,-0.66 -2.71,-1.39 -5.95,-1.32 -8.59,0.19 -0.02,-4.6 -5.04,-6.77 -8.31,-9 -2.72,-0.06 -5.6,1.79 -8.33,0.1 -2.65,-0.52 -5.05,-1.27 -4.7,-4.45 -2.02,-1.11 -5.86,-2.21 -7.53,-1.16 -1.29,1.98 -3.84,1.06 -5.84,1.31 -1.81,-1.01 -2.04,-3.39 -2.5,-5.41 3.14,0.3 2.23,-3.59 0.51,-4.83 -1.37,-2.03 -4.15,0.89 -5.53,-1.6 -1.69,-0.96 1.02,-5.32 2.36,-2.94 1.62,-1.63 2.76,-3.73 4,-5.66 -0.78,-1.58 -4.12,-2.02 -3.47,-4.09 -2.15,-0.17 -2.01,-2.77 -1.75,-4.31 -4.91,-2.77 -10.54,-0.91 -15.84,-1.69 -2.69,-0.42 -5.41,-2.8 -8.03,-1.28 -1.99,0.45 -4.28,-1.52 -3.68,-3.5 0.86,-2.86 -0.76,-4.88 -2.35,-7.1 -1.55,-2.64 -4.98,-6.28 -2.16,-9.19 -2.47,-3.43 -7.17,-3.03 -10.89,-3.21 -0.41,0.09 -0.82,0.18 -1.23,0.27z m95.09,106.63c0.36,0.47 0.77,-0.65 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d994" original="#b5d994"
                                          id="jqvmap5_th" class="jvectormap-region"></path>
                                    <path d="m173.41,0.78c-1.96,2.02 -2.32,5.26 -3.72,7.72 0.61,-2.46 2.87,-3.44 4.94,-4.31 1.37,-2.31 1.87,-2.9 -1.22,-3.41z m-4.63,9.69c-1.37,3.14 -2.78,7.11 -2.63,10.16 1.42,-1.81 3.12,-2.33 4.66,-0.67 1.41,1.35 2.9,1.87 4.52,0.27 2.61,-1.53 -0.74,-0.41 -1.92,-1.16 -2.06,-1.81 -4.59,-3.55 -3.89,-6.71 -0.29,-0.68 0.25,-4.89 -0.73,-1.88z m16.78,8.5c-1.27,2.96 0.71,4.89 2.59,6.89 3.39,3 2.55,7.98 4.79,11.67 0.62,3.55 5.38,3.23 6.46,6.57 3.09,5.18 8.01,9.55 9.53,15.49 -0.32,3.65 -4.55,4.93 -6.72,7.41 -1.75,1.07 -3.73,2 -5.62,0.78 -2.44,0.59 -7.26,-0.45 -7.37,2.95 0.9,2.44 -1.97,3.88 -3.95,4.18 -1.94,-2.13 -2.52,-1.01 -2.77,1.45 -0.87,2.9 3.21,3.7 4.93,4.64 1.92,-3.3 6.38,-1.94 9.56,-2.06 2.21,2.21 1.18,5.9 0.57,8.61 -1.14,2.05 -2.44,4.23 -0.74,6.43 0.5,2.36 2.45,2.12 4.01,1.08 3.24,-0.45 3.19,4.26 4.78,6.16 2.07,2.16 -0.11,6.53 -3.11,5.16 -1.14,-1.75 -5.79,-1.46 -5.26,0.73 2.63,2.93 2.85,7.1 5.04,10.2 1.56,1.12 3.1,3.53 5.09,1.5 1.43,0.34 0.36,3.67 3.4,2.47 5.03,0.4 10.67,-0.76 14.8,2.92 4.21,3.5 4.64,9.55 8.23,13.45 3.79,1.81 5.25,6.01 5.59,9.84 1.82,3.22 5.7,4.78 8.7,6.74 2.98,1.76 2.45,-2.04 3.3,-3.87 0.32,-3.07 2.7,-3.68 2.95,-0.51 1.97,4.21 4.12,0.09 5.74,-1.98 1.13,-1.81 1.09,-3.61 3.84,-2.85 2.75,1.63 4.73,-1.94 6.94,-3.16 -0.04,-2.48 1.02,-3.47 3.73,-4.47 1.51,-1.18 4,-1.93 4.95,0.16 -0.92,3.02 -1.41,6.74 1.26,9.04 1.1,1.47 -0.59,3.76 -1.58,5.02 -3.72,1.55 -2.94,7.3 0.6,8.57 3.05,0.71 1.81,2.28 4.18,4.34 1.9,2.3 3.7,4.33 6.71,5.17 4.24,1.47 7.8,5.01 12.4,5.13 1.57,-2.96 0.71,-7.47 3.24,-9.94 1.76,-0.99 3.85,1.15 5.23,-1.34 4.78,-3.66 7.65,-9.11 11.5,-13.72 0.07,-2.89 2.79,-4.69 1.09,-7.69 -1.21,-2.36 -3.12,-1.39 -5.13,-1.38 -2.37,-1.11 -4.33,-3.37 -5.88,-5.25 0.57,-2.78 0.94,-5.55 -0.72,-8.01 -1.68,-4.33 3.4,-6.71 6.26,-8.75 2.76,0.39 4.62,-1.55 2.8,-4.28 -2.57,0.04 -0.18,-3.45 -2.47,-3.84 -2.6,1.03 -5.44,-0.16 -6.16,-2.94 -1.95,-2.52 -0.1,-5.31 2.05,-6.91 1.09,-2.74 3.32,0.44 5.2,-0.9 2.94,-4.13 6.93,-7.19 11.06,-10.05 2.63,-1.56 0.21,-5.06 0.5,-7.57 -0.21,-3.63 -1.2,-7.39 -0.01,-10.84 0.18,-2.96 -5.24,-0.47 -7.49,-1.07 -5.13,1.62 -7.3,9.04 -13.4,8.34 -3.13,0.69 -4.64,-2.86 -6.1,-4.84 -4.97,-2.87 -10.19,-5.54 -15.47,-7.76 -2.99,-1.52 -6.08,0.55 -8.5,2.13 -0.97,2.39 -2.38,4.59 -2.88,7.13 -1.56,-1.44 -3.01,-3.67 -0.84,-5.3 1.62,-1.77 -1.68,-4.84 0.9,-6.58 0.02,-1.27 -2.39,-3.21 -3.97,-2.94 -4.31,0.8 -8.65,1.68 -12.59,3.47 -2.43,1.23 -4.15,-0.86 -4.81,-2.94 1.24,-1.68 2.97,0.32 4.34,-1.22 3.92,-1.6 8.22,-4.79 7.48,-9.56 -0.08,-4.17 0.91,-8.43 -1.14,-12.32 -1.21,-3.12 -1.73,-8.59 -5.28,-9.18 -0.59,1.71 -1.3,5.52 -3.94,3.91 -3.94,-2.44 -5.62,-7.87 -10.62,-8.75 -2.4,-0.95 -5.92,-1.49 -2.94,-4.34 -2.83,-1.32 -4.46,2.91 -6.75,4.06 -1.81,0.77 -3.7,1.77 -5.55,1.1 -2.17,-0.1 -2.78,3.34 -5.32,2.53 -2.44,-0.17 -5.39,0.15 -5.47,-3.04 1.26,-2.25 -1.79,-2.35 -3.37,-3.29 -2.69,-1.82 -6.3,0.87 -8.88,-1.52 -3,-2.97 -8.01,-2.63 -12.09,-2.77 -2.73,-0.05 -5.94,1.35 -8.19,-0.63 -2.53,-0.79 -2.34,1.14 -3.28,2.91z M165.38,30.69c0.26,2.81 0.4,-8.09 0.17,-2.47 -0.06,0.82 -0.12,1.65 -0.17,2.47z m13.5,1.44c-2.38,0.11 -5.93,-0.19 -6.48,2.95 -0.84,2.31 2.84,2.19 4.01,3.33 2.08,0.12 5.59,1.6 6.02,-1.46 1.83,-2.49 -0.07,-5.86 -3.55,-4.82z m-11.97,6.41c-1.92,2.44 0.88,5.14 2.25,6.97 3.61,0.13 0.82,-1.45 -0.03,-3.16 -0.91,-0.75 -0.95,-5.89 -2.22,-3.81z M181.53,44c-3.16,2.07 3.2,-1.05 4.68,-0.94 3.57,-2.86 -4.04,0.86 -4.68,0.94z m-1.31,6.22c-3.19,-0.54 3.33,2.8 0.63,-0.13 -0.17,-0.12 -0.42,0.08 -0.63,0.13z m8.44,2.63c-1.5,0.95 -5.02,0.69 -5.3,2.69 0.04,2.05 2.12,3.65 4.01,2.44 0.45,-0.74 3.48,-5.42 1.28,-5.13z m142.28,2.25c-2.22,2.09 -3.42,5.93 -2.84,8.5 1.81,-1.93 6.45,-1.17 5.53,2.13 0.75,2.01 5.23,1.5 7.53,1.68 3.9,0.79 4.95,-0.34 2.64,-3.56 -1.78,-3.59 -4.09,-7.7 -8.61,-7.85 -1.38,-0.32 -3.03,-0.37 -4.25,-0.9z m-134.34,2.94c-1.42,2.56 1.08,4.09 3.5,3.69 1.95,-0.37 3.87,-2.9 3.63,-4.91 -2.37,-0.51 -4.91,-1.04 -6.76,0.98l-0.36,0.24z M140.06,88.88c-0.28,2.81 2.92,0.39 0,0z m48.13,13.38c-1.61,1.32 0.69,2.85 0.06,-0.03l-0.06,0.03z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap5_sh" class="jvectormap-region"></path>
                                    <path d="m367.5,207.72c-2.53,0.49 -2.68,6.11 -5.69,3.88 -1.54,-0.27 -2,4.74 -0.62,6.28 -1.83,0.03 -4.69,1.23 -5.84,3.45 -2.16,1.75 -5.06,2.95 -7.73,3.81 -1.55,-0.32 -3.98,0.25 -4.38,-1.66 -3.96,-2.32 -9.18,-1.22 -13.69,-1.78 -0.82,1.11 0.07,3.08 -1.73,3.89 -1.82,3.69 -6.1,1.61 -9.28,2.54 -2.64,-0.11 -4.45,1.7 -3.62,4.38 -0.45,3.07 1.59,5.83 2.38,8.76 4.58,2.95 6.91,8.32 9.22,13.03 -1.02,4.14 2.73,7.03 5,9.88 -2.35,-0.75 -6.67,0.93 -4.41,3.78 2.13,2.7 4,5.66 7.03,7.25 2.19,1.61 0.12,4.97 -2.22,4.59 -1.88,2.15 -0.66,5.73 1.52,7.3 1.12,1.37 4.12,3.9 1.64,5.39 -1.82,-0.07 -4.08,1.44 -3.31,3.44 0.85,1.22 3.42,-0.32 2.88,2 0.05,3.3 -3.89,4.53 -5.42,6.71 -0.9,2.3 0.67,6.76 -2.83,4.48 -2.5,-0.5 -4.36,0.86 -6.64,1.31 -3.5,0.14 -7.17,-0.75 -10.56,0.56 0.56,2.46 -2.44,4.29 -4.71,3.94 -2.29,1.2 4.79,4.03 4.2,5.21 -3.3,0.45 -2.03,3.05 0.01,3.98 1.13,2.32 -0.87,4.55 -2.86,5.36 -2.94,1.53 -1.17,5.3 -1.3,7.86 2.06,2.6 4.65,5.37 5.72,8.78 -0.64,2.04 0.85,6.26 3.56,4.75 3.65,0.5 8.21,-0.2 10.69,3.16 4.64,-2.48 0.38,1.08 -0.35,3.49 0.67,3.87 3.9,7.06 5.79,10.42 0.02,2.22 -1.14,5.56 1.78,6.09 2.2,-1.04 4.22,-0.48 6.44,0.45 5.84,2.46 12.54,-0.89 18.17,2.38 2.32,0.62 -0.45,4.34 2.28,4.54 1.79,0.31 -0.33,2.19 2.35,3 1.69,0.92 2.02,2.61 0.5,3.94 -1.45,1.35 -2.21,4.99 -4.56,4.59 -2.63,-0.91 0.09,3.99 2.28,1.66 2.83,0.66 5.62,4.8 3.25,7.41 -2.57,1.08 1.05,5.18 3.56,3.71 1.96,-0.79 2.91,-2.94 5.65,-1.43 2.6,0.08 6.05,0.91 5.78,4.15 1.33,1.52 4.58,2.03 6.72,2.37 2.49,-0.44 5.14,-1.91 7.2,0.43 2.77,1.74 6.17,3.82 6.94,7.21 2.79,-1.13 5.73,-0.73 8.41,0.53 1.23,-2 2.73,-1.49 3.69,0.66 0.59,3.07 2,-0.72 2.48,-1.83 0.83,-2.27 3.92,-5.75 0.2,-7.01 -1.99,-2.12 2.54,-4.35 -0.47,-5.52 -3.54,-1.32 0.06,-3.71 -3.77,-3.68 -1.13,-1.82 -0.14,-5.31 -0.45,-7.77 0.09,-3.62 -2.36,-6.17 -3.27,-9.5 -2.24,-2.8 3.78,-1.95 2.18,-4.77 -0.27,-3.83 -1.97,-7.24 -2.66,-10.91 1.12,-2.57 2.7,-5.07 2.75,-7.88 2.68,-2.78 6.09,-4.94 9.75,-6.06 4.81,0.08 9.58,-1.34 13.94,-3.25 0.29,-3.17 3.92,1.99 5.64,-1.8 0.58,-1.59 1.27,-4.54 3.8,-3.39 2.22,1.16 4.46,1.71 7.03,1.3 4.79,-0.31 9.85,0.27 14.45,-1.01 2.63,-2.16 7.03,-3.34 7.55,-7.13 -2.51,-3.21 -2.57,-7.84 -4.05,-11.66 -1.56,-2.32 0.46,-2.56 1.11,-3.49 -1.21,-1.69 -2.84,1.88 -4.93,0.87 -3.35,0.33 -4.21,-4.14 -7.34,-4.73 -1.95,-1.81 -4.21,-0.39 -6.46,-1.61 -1.95,-1.37 -5.09,-1.98 -5.86,-4.32 -2.25,-0.71 -4.5,-3.34 -6.75,-2.88 0.04,3.1 -4.02,3.62 -6.31,2.65 -6.29,-1.76 -13.04,-4.4 -16.59,-10.25 -1.82,-2.88 -4.27,-5.73 -5.88,-8.53 1.69,-2.65 1.92,-5.52 1.61,-8.56 0.08,-3.49 1.94,-6.54 3.57,-9.44 -0.44,-3.76 -2.35,-8 0.31,-11.34 1.69,-3.42 -2.77,-5.17 -4.84,-4.84 -0.77,1.84 -4.03,2.12 -4.73,-0.07 -3.16,-2.02 -0.66,-5.45 -0.28,-8.33 0.25,-2.72 1.68,-3.75 3.82,-4.6 0.52,-2.45 0.69,-5 -1.29,-6.86 -2,-2.13 -0.72,-5.29 -0.24,-7.76 2.19,-2.1 2.75,-4.3 1.28,-7.4 -0.37,-2.87 -3.52,-1.27 -5.2,-0.49 -2.2,0.23 -1.98,-4.35 -5.66,-2.08 -3.04,0.71 -6,0.64 -8.83,-0.79 -2.04,-1.1 -6.47,-1.05 -6.16,-4.18 0.48,-0.96 2.72,-2.17 0.45,-2.84 -2.36,-0.92 -4.97,-4.41 -7.35,-1.78 -2.26,0.12 -3.78,-2.34 -5.44,-3.56 -1.33,-1.14 2.25,-2.99 -0.03,-2.78z m-35.72,88.19c-0.1,0.03 0.04,0.06 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap5_st" class="jvectormap-region"></path>
                                    <path d="m438.91,347.22c-0.71,1.7 -1.23,3.74 -3.22,4.5 -2.58,1.63 -3.52,-1.1 -5.94,1.53 -4.3,1.22 -8.55,2.77 -13.09,2.53 -3.01,1.74 -7.34,3.17 -8.45,6.62 0.03,3.26 -3.77,5.91 -1.75,9.19 1.33,3.2 1.78,6.8 2.19,10.31 -4.06,0.29 -2.18,3.87 -0.74,6.17 2.24,3.72 1.36,8.42 1.53,12.58 2.6,-0.28 2.73,2.06 3.18,3.2 1.51,2.44 3.44,1.13 5.41,0.39 3.7,1.5 8.18,1.88 11.41,4.16 0.74,1.94 -0.81,4.85 2,5.77 1.72,1.99 6.37,0.62 6.03,4.01 -0.35,2.66 3.75,3.98 1.22,5.97 -3.58,1.98 -8.34,0.37 -11.41,3.34 -0.07,2.05 -0.66,4.73 -3.19,4.69 -0.84,-2.38 -4.84,-0.74 -3.91,1.56 -2.16,0.55 -4.73,2.38 -6.75,1.41 -0.26,3.26 -1.99,6.93 0.66,9.67 0.13,3.51 6.2,1.64 4.46,5.11 -1.54,2.13 -3.26,4.42 -6.11,4.51 -2.19,1.15 -4.93,1.82 -6.85,3.17 1.14,0.4 3.92,-0.58 2.97,1.81 -1.3,0.56 -2.71,1.18 -4.15,1.04 -1.87,-0.95 -6.83,1.68 -5.71,-1.56 0.5,-1.28 0.39,-7.08 -1.74,-3.97 -0.56,2.99 -4.53,3.58 -5.56,6.44 -1.97,1.1 -1.24,4.78 1.19,3.64 1.33,1.03 5.21,3.22 2.79,5.13 -0.59,1.68 -5.69,2.39 -2.69,4 2.14,0.67 3.79,2.61 5.05,4.37 -0.72,2.68 -0.54,4.28 2.54,4.44 2.89,0.5 5.02,2.48 7.96,1.72 3.8,-1.14 4.85,3.42 6.85,5.61 1.23,2.16 4.76,5.08 2.59,7.58 -0.49,1.72 3.93,3.14 3.09,0.38 -2.48,-2.46 -0.08,-6.44 1.28,-8.97 2.86,-4.57 6.53,-8.74 9.94,-12.84 4.56,-2.02 9.99,-0.84 14.06,-4.03 2.14,-0.66 4.2,-3.73 6.38,-3.05 2.63,1.52 5.07,3.45 7.78,4.83 2.07,-1.12 5.11,-3.24 4.13,-5.91 0.2,-2.04 -0.2,-5.69 2.84,-5.24 2.59,-0.29 5.2,-0.72 7.63,0.55 2.91,-0.54 1.72,-4.96 3.88,-6.45 2.35,-2.97 5.63,-5.26 8.68,-7.26 2.67,-0.81 5.51,3.8 7.01,0.39 1.65,-1.64 3.72,-4.3 2.58,-6.74 3.93,-2.17 7.47,-5.47 12.25,-5.22 2.33,-0.49 4.94,-0.78 7,0.62 2.41,-0.15 5.15,-2.09 4.01,-4.81 -1.95,-3.53 3.27,-1.43 5.18,-3.05 2.77,-1.08 6.09,-1.25 7.96,-3.69 5.86,-2.9 11.49,-6.39 17.78,-8.32 1.88,-3.11 -0.76,-3.48 -3.2,-3.83 -2.51,-0.45 -4.28,-2.72 -5.9,-4.48 1.17,-2.33 1.01,-5.72 3,-7.44 2.01,-0.54 2.32,2.64 4.53,2.3 2.11,1.26 6.52,1.34 7.5,-0.58 -0.17,-3.74 3.64,0.67 5,1.7 3.7,2.16 4.3,6.67 5.45,10.42 1.49,2.62 -2.09,6.06 2.42,6.33 2.67,0.89 5.37,2.57 8.28,1.87 0.47,-3.78 1.26,-7.7 4.06,-10.39 2.84,-3.18 3.04,-7.91 3.71,-11.62 2.05,-4.17 1.85,-9.14 2.71,-13.74 0.26,-3.07 0.84,-6.1 1.99,-8.91 0.22,-5.15 -3.62,-9.39 -5.25,-14.09 -0.63,-2.47 0.48,-5.37 -1.69,-7.4 -2.96,-2 -6.81,-2.81 -10.16,-4.16 -2.63,0.45 -5.28,-0.92 -5.64,-3.77 -0.41,-2.32 0.72,-4.39 -0.77,-0.54 -0.78,2.23 -4.07,1.99 -5.91,1.44 -0.89,-2.72 -3.76,-2.22 -5.89,-1.05 -2.43,0.03 -4.2,1.93 -3.78,3.04 -2.98,-1.35 -5.85,1.55 -8.48,2.42 -3.55,-1.67 -7.51,-1.35 -11.28,-1.56 -3.58,3.73 -3.22,9.41 -5.54,13.67 -1.24,3.16 -4.34,3.42 -7.26,3.89 -3.26,1.02 -6.88,-0.1 -9.67,2.35 -1.59,0.79 -4,-0.13 -5.49,-0.56 -4.01,0.9 -8.8,0.36 -12.18,-2.44 -2.57,-1.34 -4.55,-3.47 -6.76,-5.28 -2.23,1.37 -5.63,2.37 -6.56,4.87 -0.02,1.86 -4.09,1.87 -5.44,1.29 -1.42,-2.13 -2.64,-3.94 -1.26,-6.61 0.56,-3.54 0.3,-7.09 -1.63,-10.2 -0.72,-1.89 -2.32,-5.98 -4.72,-4.31 -2.79,1.33 -2.48,-5.48 -5.68,-3.53 -5.59,0.15 -11.31,0.77 -16.84,0.31 -1.25,-0.57 -2.44,-1.63 -3.94,-1.22z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap5_sn" class="jvectormap-region"></path>
                                    <path d="m63.72,553.88c-2.9,2.18 -6.1,2.82 -9.5,4.44 -3.47,4.51 -10,4.1 -15.06,5.38 -4.6,0.18 -8.97,-1.26 -13.22,-2.78 -2.47,1.73 -0.51,5.04 -0.84,7.5 1.8,0.96 4.08,-1.32 5.97,0.4 2.44,1.62 5.28,3.2 6.78,5.81 -3.49,0.44 0.05,4.79 -0.09,6.94 1.05,3.41 4.13,4.95 6.56,7.16 1.79,1.94 0.3,5.34 3.04,6.13 2.43,1.92 -2.53,4.66 1.39,5.86 2.37,0.12 6.25,2.27 7.13,-1.09 -0.35,-2.25 -3.03,-3.71 0.38,-4.78 4.42,0.26 10.1,1.27 11.81,5.94 0.51,1.58 -0.22,5.5 1.56,5.84 2.33,-0.7 1.95,-7.32 3.65,-3.1 1.02,1.94 2.67,2.87 4.44,1.6 2.61,-0.08 5.35,0.47 7.44,1.84 0.63,-1.3 5.37,-2.76 3.56,-3.91 -1.62,-2.52 -4.36,-5.17 -3.81,-8.41 1.42,-2.72 5.03,-3.05 6.69,-5.31 0.32,-2.19 -0.19,-4.41 0.63,-6.91 -2.49,1.08 -4.55,-2.01 -6.84,-2.72 1.25,-2.57 -1.08,-3.33 -2.41,-4.88 -1.38,-2.57 3.05,-1.81 2.04,-4.46 0.15,-3.03 0.9,-7.08 -0.66,-9.48C81.13,563.37 78.01,559.23 75,558.25c-1.82,-1.1 -4.05,-5.12 -6.16,-3.76 -1.8,1.27 -2.93,1.15 -3.06,-0.42 -0.68,-0.01 -1.4,-0.33 -2.06,-0.19z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap5_sl" class="jvectormap-region"></path>
                                    <path d="m124.22,422c-3.08,1.37 -2.76,4.11 -2.15,6.91 -0.74,2.27 -2.92,4.57 -5.35,5.28 1.82,2.98 -1.68,6.02 -4.55,6.28 -3.87,1.42 -8.15,2.76 -11.74,4.31 -2.53,-1.67 -5.28,-0.25 -4.24,2.84 0.38,2.78 -1.77,4.53 -4.33,4.8 -2.21,0.9 -4.57,1.03 -6.93,0.89 0.24,-3.01 0.16,-2.77 -0.66,-0.16 -2.61,2.5 -6.78,2.21 -10.16,3.14 -1.7,1.36 -3.59,4.13 -6.33,3.09 -1.84,0.93 -1.47,5.36 -2.5,7.61 -0.31,2 -3.88,3.46 -5.32,1.71 -2.49,-2.13 -5.07,1.92 -3.92,4.39 -1.32,2.14 3.87,6.32 1.33,6.03 -2.57,-0.38 -4.98,1.47 -7.53,-0.25 -1.87,-0.86 -4.14,-1.17 -5.28,-3.06 -3.07,1.11 -6.64,2.41 -9.75,2.06 -1.18,-2.88 -5.27,-3.74 -3.13,0.21 0.06,1.85 3.77,4.69 0.04,3.72 -2.34,1.34 -4.33,-0.2 -6.47,-0.11 -0.71,2.72 -2.48,4.43 -4.99,5.59 -1.73,1.37 -5.12,2.04 -4.14,4.93 1.73,3.46 -1.97,4.26 -2.68,6.98 -1.38,4.14 -2.64,8.53 -0.77,12.73 1.47,5.09 3.95,10.18 7.71,13.93 3.19,1.73 6.27,3.8 8.6,6.49 1.94,2.68 4.29,-1.39 6.06,0.93 1.74,1.25 1.47,4.34 1.36,6.37 -1,5.55 -4.71,9.97 -7.61,14.63 -1.1,1.62 -3.21,1.58 -3.81,3.7 1.32,3.4 5.62,2.86 8.44,4.25 6.02,0.99 12.25,-0.27 17.78,-2.55 1.84,-1.13 2.94,-3.18 5.35,-3.48 2.7,-0.62 4.85,-2.4 7.33,-3.4 2.47,-0.56 3.3,1.96 4.66,0.63 1.69,-1.87 4.4,2.01 6.06,3.12 2.19,1.85 4.96,3.22 7.6,4.23 2.08,-1.3 3.07,-1.77 3.74,1 0.63,3.7 0.2,7.6 -0.21,11.34 -3.62,0.15 -1.02,2.73 0.84,3.34 -0.88,3.1 1.79,3.86 4.18,5.17 2.7,-0.99 3.7,-0.04 2.19,2.5 -0.63,2.28 0.81,4.56 -1.1,6.61 -1.8,1.77 -5.4,2.25 -6.16,5.03 0.5,2.47 2.45,5.22 3.88,6.72 0.53,-2.07 4.25,-1.3 6.09,-2.06 2.18,0.88 4.73,2.02 3.59,4.81 0.57,4.16 4.15,6.47 7.58,8.3 4.06,2.82 9.28,1.81 13.75,1.03 5.57,0.87 11.49,1.89 16.04,5.46 1.5,1.92 4.34,2.91 6.75,3.03 1.44,0.1 3.88,-0.46 4.75,1.03 2.73,-1.42 4.25,-4.04 4.38,-7.03 0.97,-3.35 4.62,-5.13 4.47,-8.92 0.59,-3.28 2.22,-6.72 1.35,-9.86 0.74,-2.94 4.48,-3.42 5.84,-6.03 2.45,-0.61 0.47,-2.16 -0.81,-2.44 -2.02,-2.71 2.93,-3.58 2.9,-6.17 0.3,-2.2 -0.42,-4.5 0.69,-6.55 -1.31,-0.77 -4.55,0.38 -4.34,-2.22 1.3,-2.38 -0.67,-5.57 -0.94,-8.16 -1.05,-1.55 -0.56,-3.22 -0.06,-4.81 -2.06,-3.14 -3.58,-6.56 -4.31,-10.28 -0,-3.21 3.88,-3.16 5.84,-4.38 1.83,-1.95 0.9,-4.67 -1.26,-6.04 -2.48,-3.08 -4.3,-6.94 -4.99,-10.83 0.78,-1.71 1.4,-3.41 0.25,-5.25 -0.12,-3.38 -3.6,-5.04 -5.13,-7.75 -2.86,-3.27 -7.52,-1.08 -10.66,0.56 -4.69,1.79 -9.52,4.51 -14.68,3.47 -2.44,-2.49 -4.42,-5.7 -6.29,-8.66 -2.19,-2.94 2.65,-2.19 3.79,-4.33 1.44,-3.52 5.56,-1 5.95,-3.31 1.05,-2.62 -4.12,-2.88 -2.51,-5.79 1.38,-2.83 4.79,-3.85 7.44,-4.63 1.92,2.63 5.73,-0.22 2.09,-1.81 -1.3,-2.26 2.57,-3.89 4.23,-2.24 3.08,0.46 1.96,-3.71 0.96,-5.33 -1.37,-3.08 -3.17,-5.78 -6.33,-7.23 -3.79,-0.63 -1.12,-3.37 -0.49,-6.08 0.24,-1.88 -1.87,-3.91 -0.43,-6.13 1.19,-2.18 3.39,-6.07 6.28,-3.97 1.67,3.39 3.78,0.05 4.16,-2.21 1.81,-2.05 -0.69,-2.3 -1.07,-3.97 -0.17,-2.37 -1.93,-5.43 0.13,-7.42 -0.88,-3.78 -6.22,1.19 -5.36,-1.83 1.28,-4.22 -5.99,-5.38 -4.53,-9.85 1.32,-2 0.84,-5.3 -1.94,-5.86 -1.78,-2.03 -5.71,-1.54 -6.82,-3.48 -0.21,-1.96 2.71,-4.06 -0.25,-4.94C125.29,422.08 124.64,421.87 124.22,422z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap5_rp" class="jvectormap-region"></path>
                                    <path d="m177.25,263.34c-2.1,-1.63 -5.7,-1.31 -6.06,1.91 0.19,3.63 -4.48,4.11 -7,3.66 -1.11,-1.64 -4.06,-2.21 -2.35,0.66 0.52,3.14 4.56,4.05 6.57,6.26 1.92,1.46 2.52,4.49 2.62,6.8 0.18,2.64 0.19,5.1 -0.9,7.58 -1.32,1.99 0.48,3.83 2.46,3.92 3.25,0.58 0.3,2.71 -0.78,3.97 -1.55,0.88 -3.89,0.86 -4.75,2.84 1.66,2.95 -2.56,1.58 -4.29,1.1 -2.41,-0.95 -5.38,-1.98 -7.02,0.74 -2.16,1.92 -4.56,3.57 -7.26,4.5 -1.87,2.2 -2.96,-0.94 -5.46,-0.31 -2.18,0.39 -2.63,4.37 -4.84,2.75 -2.6,-0.41 -3.41,-2.28 -4.46,-4.35 -2.31,-1 2.21,-2.81 3.55,-2.98 3.51,0.2 5.07,-3.48 2.41,-5.69 -1.71,-1 -4.92,-1.05 -5.1,-3.81 -0.4,-2.56 2.07,-4.87 2.81,-7.19 0.91,-0.72 -1.83,-2.26 -0.5,-3.69 3.14,-1.64 1.45,-5.72 -1.26,-6.8 -2.05,-1.15 -4.05,1.71 -6.33,0.21 -2.51,-1.72 -6.07,-2.59 -6.27,-6.18 -0.22,-2.85 -2.57,-3.65 -4.96,-4.34 -1.35,-0.64 -3.78,3.65 -1.27,3.96 1.72,1.12 -0.74,4.19 -1.92,5.19 -4.58,2.06 -9.39,4.71 -12.83,8.28 -0.91,2.09 -3.91,0.71 -4.63,3.16 -3.68,0.16 -7.44,-1.07 -11.03,-0.19 -1.13,2.36 -3.53,1.5 -5.41,2.92 -3.3,2.56 -8.23,3.82 -10.15,7.67 -0.16,4.41 -5.85,3.29 -8.27,5.42 -1.07,1.95 -3.97,5.3 -0.36,6.02 2.12,2 6.43,3.97 4.59,7.5 -2.07,2.76 -4.18,5.76 -7.59,6.94 -1.43,-2.65 -3.58,-2.35 -5.97,-1.09 -2.93,0.68 -5.59,2.43 -8.37,3.24 -1.83,0.92 -6.4,-1.52 -6.2,0.14 1.25,2.44 1.32,5.11 -1.64,2.71 -2.84,-2.65 -6.23,-5.14 -10.34,-4.5 -2.26,1.13 -4.86,1.79 -7.57,1.91 -2.94,-0.3 -6.47,1.11 -7.66,3.97 0.91,4.49 1.78,9.09 3.5,13.31 3.65,0.48 3.87,3.28 3.59,6.38 -0.03,2.95 4.03,4.36 4.95,7.23 3.16,3.93 2.85,9.32 1.32,13.83 -1.07,2.64 2.37,5.59 -1.15,7.3 -2.71,3.53 -6.04,6.82 -8.16,10.71 -0.6,1.66 -1.81,5.57 0.42,6.15 1.79,-1.07 4.45,-3.48 6.03,-0.89 -1.83,0.74 -3.77,2.52 -4.63,4.79 -4.06,2.72 -7.88,5.86 -12.82,6.75 -2.54,0.57 -4.87,1.7 -3.17,4.63 0.65,3.73 2.86,3.68 5.9,3.34 1.73,-0.12 4.7,0.11 2.92,2.43 -1.62,2.73 0.97,3.7 3.18,4.3 2.89,0.68 -1.54,3.27 0.66,4.81 0.17,1.78 -1.03,5.56 -2.97,3.06 -2.7,0.41 -2.86,4.47 -3.11,6.49 1.25,3.17 3.86,4.98 6.86,6.32 1.73,2.64 2.03,6.34 4.88,8.31 -3.91,1.75 5.55,0.78 2.22,4.39 0.29,3.25 -5.37,3.94 -3.38,7.37 0.76,1.42 1.86,4.52 3.66,2.67 3.25,-0.44 6.22,1.26 7.36,4.35 2.36,2.77 -0.08,6.31 -0.45,9.15 2.56,4.82 -0.8,-1.03 2.06,-1.07 2.71,-1.06 3.44,4.11 6.19,2.53 2.75,0.37 5.82,-2.69 8.02,-1.5 1.92,2.23 5.39,3.01 8.14,3.37 3.72,-0.21 2.3,-1.41 1.51,-3.82 0.04,-2.95 -1.16,-6.55 2.63,-7.5 2,-1.69 3.89,3.12 6.16,0.31 1.15,-2.86 1.77,-6.3 2.41,-9.46 2.7,1.12 5.4,-0.08 6.75,-2.56 3.27,-1.13 7.52,-0.86 10.35,-2.91 0.37,-1.12 0.98,-4.32 2.62,-2.66 -0.82,3.1 2.33,2.44 4.39,1.84 2.3,-0.53 5.31,-1.22 4.81,-4.28 -0.51,-2.22 0.4,-5.33 3.3,-4.47 2.78,1.45 5.46,-1.31 8.27,-1.76 3.1,-1.68 7.91,-1.4 9.45,-5.05 -0.47,-2.98 -4.28,-3.7 0.44,-3.18 2.74,-1.08 5.31,-3.89 4.08,-6.99 -1.04,-2.52 1.87,-4.26 3.71,-5.24 2.21,0.36 5.37,2.16 3.03,4.28 -1.84,2.46 1.06,2.47 2.69,2.94 2.57,1.6 7.18,2.77 6.12,6.74 -0.22,1.83 -1.49,3.93 0.54,5.35 1.58,1.78 4.44,3.29 3.47,6.09 1.92,-1.91 4.28,0.75 5.25,0.78 1.15,-1.97 2.94,-4.17 0.84,-6.13 -1.97,-2.33 -1.27,-4.35 1.26,-5.9 2.67,-2.21 4.81,-5.42 7.75,-7.15 2.53,-0.53 5,4.12 6.81,1 1.81,-2.99 4.43,-5.63 4.94,-9.19 1.73,-1.11 2.77,-3.4 4.66,-4.63 0.39,-1.91 -1.57,-4.12 -1.75,-6.25 0.73,-3.23 4.88,-3.7 7.64,-2.9 1.98,0.85 4.51,0.77 5.94,-0.93 1.31,-3.2 3.81,-6.24 2.52,-9.88 -0.64,-1.84 0.53,-6.24 -2.48,-5.85 -2.48,0.46 -4.55,3.29 -7.13,2.53 -1.37,-1.68 -3.72,-3.65 -1.3,-5.48 2.34,-4.53 6.76,-7.46 11.73,-8.41 3.83,-1.47 7.94,-1.54 11.98,-1.11 1.92,-2.78 -0.9,-3.85 -1.9,-6.19 -1.82,-1.61 -1.41,-4.36 1.19,-4.68 3.14,-1.44 7.01,-2.83 10,-0.32 2.4,1.63 -0.27,3.86 1.25,5.59 1.92,0.62 4.04,0.65 4.63,-1.66 3.98,-3.61 9.19,-6.08 11.4,-11.26 1.23,-2.28 4.7,-5.14 4.82,-6.65 -1.68,0.55 -4.34,-0.05 -3.2,-2.36 0.05,-5.23 2.13,-10.09 3.74,-14.92 1,-2.69 -2.16,-5.66 -4.66,-4.72 -3.16,2.83 -0.64,-2.27 -0.81,-4.06 -0.05,-2.72 -2.54,-1.8 -3.99,-2.62 -2.61,-2.3 -7.4,-3.71 -6.62,-8.03 0.39,-2.34 -1.28,-5.79 0.83,-7.47 -2.23,-1.73 -1.62,-3.85 -2.5,-6.03 -2.65,-0.77 -5.5,-0.87 -7.39,-3.23 -1.18,-0.94 -5.31,-5.84 -2.07,-3.89 2.92,3.3 5.04,-1.41 4.58,-3.56 -1.6,-1.73 -4.39,-1.61 -6.02,-2.94 -1.48,-2.41 1.21,-4.72 1.94,-6.91 1.84,-2.01 5.4,-1.29 6.16,-4.38 1.42,-2.09 2.16,-4.3 0.81,-6.53 1.2,-2.26 2.95,-5.17 -0.91,-5.56 -3.17,-1.51 -3.6,3.21 -5.58,4.74 -1.93,2.12 -2.98,5.59 -6.39,5.38 -3.28,0.88 -6.88,0.85 -10.18,0.44 -3.79,-0.66 -2.03,-5.2 -2.58,-7.89 -0.63,-2.02 1.28,-4.76 -1.4,-5.81 -1.68,-1.96 -4.73,1.64 -6.71,2.05z m32.09,14.69c-0.04,0.06 0.1,0.03 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap5_nw" class="jvectormap-region"></path>
                                    <path d="m186.44,120.91c-5.6,0.51 -6.88,7.11 -8.44,11.54 -1.55,4.84 -4.41,10.19 -1.33,15.08 0.62,2.76 4.51,0.93 6.62,1.66 3.74,-0.55 1.44,3.37 1.28,5.34 -0.09,2.27 2.07,5.17 -0.81,6.68 -0.57,2.01 -4.6,1.89 -4.47,0.01 0.2,-1.62 -2.19,-2.79 -1,-4.38 -2.39,-2.05 -5.8,-0.88 -8.29,-2.92 -3.19,-0.55 -3.1,-6.58 -7,-4.9 -3.25,1.5 -2.87,5.42 -3.31,8.39 1.73,1.09 4.31,-1.81 5,0.84 0.65,4.51 -0.3,10.35 -4.66,12.69 -2.05,0.33 -4.01,-0.7 -4.44,-2.75 -1.01,-1.99 -2.84,-4.1 -4.91,-2.06 -2.51,-1.99 -2.84,-5.26 -2.69,-8.25 1.7,2.41 4.86,0.82 6.63,-0.53 1,-2.85 -1.94,-5.58 -2.55,-8.38 -0.35,-2.68 -2.75,-3.1 -4.67,-3.53 -0.88,-2.07 -1.59,-4.78 -0.56,-6.72 -5.56,-1.98 -11.61,-0.89 -17.16,0.47 -4.67,-1.16 -9.01,2.41 -13.75,2.56 -2.64,-2.27 -6.36,-1.45 -9.63,-2 -6.44,-0.16 -11.29,4.48 -15.23,9 -2.96,1.82 0.86,2.65 1.75,4.06 2.29,2.26 -1.66,3.67 -2.74,5.44 -1.44,-2.96 -5.14,-3.8 -4.27,0.54 -0.65,3.9 -0.71,8.05 -1.52,11.83 -1.87,1.87 0.95,4.14 2.97,3.58 5.28,0.29 10.96,-0.24 15.72,2.42 -2.08,0.69 -5.45,-0.97 -5.28,2.53 -1.3,3.55 -0.88,7.6 -1.89,11.2 -1.02,2.31 -3.53,5.58 -0.77,7.39 -1.04,4.96 1.43,10.17 -1.09,14.86 -1.44,6.42 -8.35,10.37 -8.34,17.29 -0.73,5.37 -0.65,11.06 -2.02,16.22 -1.54,2.43 -4.12,-1.19 -6.18,-0.78 -4.31,-0.59 -8.85,-1.62 -13.15,-0.5 -3.28,1.5 -0.59,5.19 -1.65,7.89 0.05,2.71 -1.96,5.6 -1.13,7.99 3.96,3.35 9.48,3.72 14.25,5.18 1.32,-0.55 1.98,-4.64 3.66,-2.59 1.6,4.04 5.43,7.78 4.44,12.38 -1.84,2.71 -4.41,6.49 -1.89,9.57 1.86,2.89 3.08,-1.11 5.12,-1.16 3.32,-0.74 7.21,1.07 10.28,0.08 0.77,-2.08 3.82,-0.65 4.33,-3.02 3.95,-3.24 8.34,-6.11 13.06,-8 3.49,-2.99 -0.93,-3.55 0.23,-6.31 0.69,-1.71 1.95,-4.41 4.07,-2.55 2.19,0.59 4.44,1.49 4.69,4.05 0.24,3.46 3.25,4.66 5.87,6.2 2.49,1.33 5.1,-2.32 7.3,0.36 2.1,0.86 2.8,3.79 2.88,5.66 -2.14,1.36 -2.99,3.7 -0.25,5 -2.47,1.24 -2.71,4.41 -4.06,6.59 -0.13,3.3 3.86,2.19 5.28,4.24 1.61,1.34 2.29,6.23 -0.56,6.24 -2.12,1.03 -7.72,1.03 -4.44,4.18 0.32,1.52 3.77,3.35 4.41,1.19 1.64,-2.26 4.29,-2.15 6.63,-1.31 1.36,-0.07 3.99,-1.2 5.52,-2.37 2.72,-1.18 4.39,-5.59 7.79,-3.97 1.75,0 5.6,2.6 5.94,0.72 0.62,-2.2 3.26,-3.09 5.19,-3.63 2.15,-1.43 1.31,-2.65 -0.91,-2.81 -3.46,-2.11 -0.12,-6.05 -0.14,-8.9 -0.15,-3.52 0.05,-8 -3.58,-9.88 -2.14,-2.11 -6.14,-3.08 -5.9,-6.7 -1.51,-2.43 0.6,-3.29 2.77,-2.04 1.45,1.42 4.2,1.38 5.98,0.03 1.26,-1.81 0.54,-4.61 3.46,-5.43 2.32,-1.11 5.18,2.05 7.68,-1.07 2.13,-2.24 4.04,-0.2 5.66,1.43 0.57,2.57 -0.21,5.4 0.22,8.09 -0.93,3.21 1.85,4.85 4.75,4.17 3.21,-0.08 7.22,0.09 9.7,-1.99 2.54,-2.97 4.51,-6.31 6.89,-9.36 2.02,0.69 5.86,0.77 5.97,3.44 -1.73,2.35 -1.52,4.54 -0.97,7.06 -1.39,2.86 -2.39,6.91 -6.2,7.13 -2.4,1.05 -3.91,4.28 -3.71,6.63 1.97,1.04 4.71,1.6 6.53,3.33 0.07,1.63 -1.12,5.59 -2.84,6.05 -3.41,-0.73 1.6,2.55 2.84,3.1 2.26,0.15 6.09,0.95 5.15,4.09 -0.68,1.53 3.99,3.73 1.27,4.76 -0.76,2.74 -0.13,6 0.12,8.84 1.43,2.32 4.36,3.6 6.57,5.25 3.31,-0.99 4.48,3.42 3.35,5.85 0.3,0.17 2.48,-0.22 3.34,0.68 2.41,1.16 3.09,3.45 2.56,5.97 -2.13,4.96 -3.82,10.38 -3.75,15.72 2.51,0.18 4.77,-1.21 7.34,-1.06 0.61,1.51 -0.65,3.85 2.25,3.24 3.59,-0.55 6.83,1.47 9.03,4.14 1.86,0.23 1.58,3.6 -0.22,2.84 -1.35,2.17 -4.02,2.06 -5.22,4.59 1.78,2.73 3.46,5.34 3.51,8.74 1.02,2.35 -1.28,3.79 -3.38,3.42 -2.32,0.54 -3.56,5.32 -0.53,5.96 3.22,1.18 6.33,2.54 9.36,4.13 4.29,-2.82 0.47,-2.05 -1.06,-3.89 -2.77,-2.53 1.66,-4.59 3.28,-6.24 2.15,-2.54 5.98,-1.9 8.84,-2.34 2.08,1.35 1.61,5.72 4.21,2.64 3.91,-2.4 7.72,-5.21 12.48,-5.45 3.97,-2.72 8.84,-4.93 11.78,-8.85 1.12,-1.78 0.33,-3.88 2.39,-5.63 3.16,-1.67 6.79,0.6 8.47,3.25 2.88,-0.58 7.14,-0.26 7.76,-3.87 -0.05,-2.88 3.65,-4.47 1.75,-6.24 -1.57,-2.46 -0.32,-5.67 -2.8,-7.78 -1.09,-2.4 -4.13,-3.43 -3.79,-6.44 -0.16,-2.66 -0.99,-6.17 2.11,-7.49 1.53,-0.76 3.52,-2.56 1.95,-4.3 -2.69,0.07 -2.43,-3.84 -0.41,-4.53 -1.85,-1.14 -5.14,-4 -4.75,-5.49 2.09,-0.39 4.95,0.22 5.97,-2.13 -0.9,-2.87 3.5,-2.65 5.41,-2.71 2.87,-0.48 6.16,1.13 8.63,-0.98 1.86,-0.84 5.77,1.14 5.58,-1.56 -0.39,-2.88 1.81,-4.27 3.9,-5.7 0.91,-0.47 3.07,-3.7 1.17,-3.53 -3.44,0 -2.76,-5.19 0.13,-5.66 3.82,-0.08 0.19,-3.6 -1.09,-4.81 -2.24,-1.37 -1.88,-4.21 -1.94,-6.38 0.35,-2.73 4.31,-1.12 3.91,-4.03 -1.37,-1.84 -4.07,-2.33 -5.04,-4.76 -1.41,-2.15 -5.08,-4.85 -2.74,-7.55 3.42,-1.12 3.06,-1.7 0.77,-4.08 -1.69,-1.79 -1.55,-4.29 -1.69,-6.46 -2.28,-4.45 -4.68,-9.22 -8.86,-12.09 -1.05,-3.33 -3.02,-6.48 -2.57,-9.99 -0.32,-2.09 0.44,-4.42 2.92,-4.26 2.85,-1.12 6.27,-0.08 8.93,-1.09 1.55,-1.38 2.76,-2.68 2.6,-4.79 1.69,-2.11 5.13,-0.16 7.46,-0.64 2.96,0.35 7.54,-0.38 8.88,2.86 3.56,1.21 6.67,-1.39 9.63,-2.75 1.37,-1.79 3.07,-3.85 5.5,-3.97 -1.07,-2.07 -0.03,-4.66 0.75,-6.72 2.37,0.04 3.51,1.16 4.74,-2.15 -3.03,-0.57 -6.18,-1.13 -7.93,-4.01 -2.99,-1.28 -5.04,3.32 -7.81,2.09 -1.68,-2.2 -4.97,-3.78 -4.59,-6.94 -1.58,-2.26 -4.54,-2.52 -6.84,-3.72 3.01,-0.21 2.65,-3.1 -0.2,-2.77 -6.07,-2.31 -7.72,-9.29 -10.33,-14.6 -2.42,-1.1 -4.9,-1.16 -5.92,1.34 -1.84,1.96 -4.18,1.97 -6.29,0.43 -2.67,-1.78 -3.79,-6.4 -7.79,-5.36 -2.51,-0.77 -4.24,2.4 -6.66,0.76 -4.42,-0.95 -7.78,-4.07 -12.05,-5.47 -1.87,-1.32 -3.8,-1.77 -5.52,0.17 -0.27,2.44 -2.51,2.71 -4.5,2.22 -3.65,-0.29 -5.04,-4.84 -7.84,-6.5 -1.55,0.25 -1.89,4.05 -4.47,4.49 -2.08,0.15 -3.58,-2.52 -5.1,-3.8 -1.02,-1.09 -2.8,3.74 -4.07,0.89 -2.45,-1.59 -2.98,-4.24 -4.53,-6.41 -0.49,-1.9 1.56,-6.03 -2.15,-5.31 -4.45,-0.29 -7.84,-3.81 -11.28,-6.28 -1.97,-2.7 -0.94,-6.7 -3.64,-9.09 -3.37,-1.87 -5.18,-5.18 -6.46,-8.69 -1.64,-4.08 -4.33,-8.01 -8.9,-9 -3.99,-0.41 -8.13,-0.36 -12.15,-0.37 -3.37,0.14 1.11,4.61 0.44,4.78 -2.24,-0.97 -4.59,-0.85 -6.63,0.19 -3.12,0.32 -6.61,0.16 -9.54,-0.98 -2.08,-1.54 -4.86,-2.91 -5.69,-5.53l-0.44,0.03z m-49.34,8.94c-0.03,1.09 0.83,-0.73 0,0z m-9.69,0.88c-1.79,0.64 -2,2.84 -0.28,0.69 1.15,0.39 7.48,0.12 5.09,-0.5 -1.6,-0.1 -3.21,-0.36 -4.81,-0.19z m18.53,1.06c0.45,3.21 0.81,1.46 0,0z m-31.41,1c-2.03,0.59 -1.28,4.28 0.3,1.19 1.64,-1.6 4.48,-0.97 6.64,-1.09 -2.3,-0.17 -4.65,-0.31 -6.94,-0.09z M108.19,134.75c-2.3,1.14 5.75,0.85 0.38,-0.03 -0.12,0.04 -0.27,-0.05 -0.38,0.03z m-12.13,0.84c-3.52,0.44 -2.54,2.25 0.41,1.38 2.85,-0.48 5.82,-0.48 8.59,-1.28 -2.97,-0.23 -6.02,-0.18 -9,-0.09z m-32.28,11.06c-1.1,1.27 2.99,3.13 2.5,3.16 1.33,-1.35 0.17,-2.16 3.86,-2.62 3.23,0.07 0.14,-2.1 -1.3,-2.1 -1.69,0.52 -3.38,1.04 -5.06,1.56z M174.25,186.75c0.36,2.67 4.51,2.84 6.35,4.51 3.41,1.6 7.66,0.4 10.79,2.95 3.11,1.84 7.08,3.66 10.49,1.79 1.4,0.19 3.63,2.7 2.89,3.67 -2.99,0.4 -0.11,3.94 -0.78,6.22 0.86,2.85 -2.01,3.95 -3.7,5.61 -3.46,-0.92 -6.93,-3.62 -10.57,-2.86 -2.23,0.9 -3.13,-2.21 -2.65,-3.92 -0.64,-2.4 -4,-3.06 -3.74,-5.78 -0.67,-2.42 -1.42,-4.7 -4.2,-4.81 -3.28,-1.01 -7.24,-4.77 -5.34,-8.44 0.16,0.35 0.31,0.71 0.47,1.06z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap5_ni" class="jvectormap-region"></path>
                                    <path d="m468.38,35.5c-3.45,0.91 -7.31,1.41 -8.93,5.06 -0.26,1.49 -3.68,7.61 -2.06,6.34 1.83,-1.19 3.02,-3.21 2.21,-5.18 0.53,-1.31 3.04,-4.63 4,-2.16 0.98,2.93 -2.17,4.94 -1.91,7.78 2.5,-1.15 4.75,-3.34 7.37,-1.07 2.42,1.29 5.16,2.48 7.7,0.7 1.54,0.46 0.47,5.05 0.71,7.19 0.58,3.31 -4.03,1.68 -5.65,1 -1.59,-1.22 -4.83,-1.69 -5.19,-3.75 1.7,-4.11 -3.26,-1.94 -5.53,-2.31 -2.04,0.6 -6.23,0.55 -4.31,3.72 1.26,1.16 4.35,-0.42 5.38,2.04 2.76,1.44 -0.43,4.39 -2.54,4.37 -2.75,-0.56 -4.74,4.2 -0.71,3.48 2.64,0.57 6.65,0.82 2.18,2.56 -1.86,1.21 -4.55,1.66 -6,3.25 -1.1,2.82 0.47,5.48 1.28,8.13 5.01,1.69 10.02,3.38 15.03,5.06 2.12,-0.23 1.09,-3.14 0.16,-2.97 -0.76,1.88 -3.98,1.99 -3.25,-0.63 2.8,-3.12 5.65,-6.81 9.31,-9 3.6,-0.24 7.24,-1.3 10.81,-1.09 1.21,1.32 2.75,4.02 0.25,4.94 -1.68,2.68 3.83,-2.34 2.14,-4.14 -1.15,-2.6 -3.19,-5.78 -6.42,-4.67 -2.75,-1.52 -4.42,-5.28 -3.91,-8.38 1.26,-2.37 3.94,-3.83 5.78,-5.54 1.61,-2.97 -1.68,-6.36 -4.75,-5.02 -3.75,0.66 -8.71,3.63 -11.63,-0.19 -1.83,-1.92 -3.2,-6.71 0.31,-7.56 2.78,-1.63 0.58,-2.73 -1.84,-1.94z m-11.72,12.09c-0.08,-0.04 -0.09,0.18 0,0z m-4.56,2.28c1.4,-3.26 1.29,-4.92 0.11,-0.61l-0.09,0.49 -0.02,0.12z M457,55.72c-1,0.46 -3.54,5.14 -1.38,3.6 1.48,-0.87 6.21,-2.64 2.44,-3.69 -0.36,-0.17 -0.71,0.02 -1.06,0.09z m-41.09,7c-0.25,1.57 -4.9,6.97 -0.87,4.76 3.72,-1.22 7.4,-2.58 10.67,-4.69 2.93,-0.95 5.29,-0.58 1.12,-0.91 -3,-0.7 -6.71,0.09 -8.98,-2.44 -0.65,1.09 -1.29,2.19 -1.94,3.28z m31.25,-1.97c0.11,0.78 4.7,-2.13 0,0z m-5.81,0.66c-3.54,0.47 -7.66,0.41 -10.88,0.66 0.67,2.11 2.68,1.92 4.62,1.67 3.01,-0.17 6.3,-0.07 8.66,-2.29 -0.79,-0.19 -1.6,-0.03 -2.41,-0.03z m1.56,3.03c-2.88,1.13 -1.21,5.18 -4.19,6.34 -3.6,2.14 -6.72,-2.29 -10.47,-2.06 -3.01,-0.89 -5.76,1.74 -8.35,3.01 -2.71,2.18 -6.52,4.43 -7.27,7.96 0.18,1.51 4.13,0.67 2.84,2.66 -2.29,1.22 -5.24,-0.3 -6.59,-2.13 -0.64,-1.13 1.18,-6.54 -0.53,-3.19 -3.22,4.08 -9.79,4.87 -11.29,10.52 -1.07,2.64 -1.85,5.58 -5.3,3.89 -4.59,-1.7 -8.52,1.77 -12.84,2.72 -3.31,0.47 -6.17,-1.62 -9.5,-0.72 -2.97,1.63 -5.73,4.31 -8.33,6.62 -1.96,2.01 -2.68,5.33 -0.14,1.47 1.06,-1.2 2.41,-4.78 4.19,-3.41 2.37,2.62 -1.24,5.31 -2.34,7.63 -1.89,1.4 -5.07,1.98 -4.85,5.06 -0.11,3.13 -0.5,6.25 -2.62,8.72 -1.16,-0.88 -3.68,-1.23 -3.47,-3.09 -1.92,-1.17 -4.21,-1.95 -5.89,0 -2.35,1.65 -4.97,-1.81 -3.77,-4.13 -1.91,-1.96 -3.3,-5.2 -6.59,-3.87 -5.1,-0.35 -9.02,3.11 -13.04,5.78 1.53,2.15 0.81,6.74 -2.56,5.38 -2.64,1.41 -7.07,3.37 -6.72,7.09 1.31,2.5 2.06,5.12 1.15,7.92 0.24,2.24 3.08,3.96 4.95,5.27 1.49,-0.13 2.88,-0.94 4.38,0.28 1.77,1.48 2.91,4.8 1.54,6.72 -1.07,2.51 -1.74,5.18 -3.94,7.19 -3.45,4.41 -6.57,9.53 -11.63,12.13 -2.85,-1.67 -4.12,1.25 -4.21,3.8 -1.04,3.05 -1.35,4.72 2.28,3.81 4.38,-1.22 5.62,3.97 8.63,5.73 2.06,1.71 4.79,0.13 5.56,-2.03 1.66,-2.26 4.66,-0.28 6.53,0.28 2.66,5.4 4.35,13.11 11.13,14.56 1.97,-0.26 2.54,2.31 1.09,3.34 1.98,0.75 4.2,1.46 5.28,3.41 2.92,0.33 5.86,0.78 7.88,-1.84 2.53,-1.04 4.17,0.11 6.2,0.92 3.41,1.17 3.57,-3.72 2.91,-5.91 -1.19,-2.85 2.75,-4.04 4.19,-5.91 2.26,-0.57 6.06,-0.68 6.92,2.18 2.22,-0.82 7.58,-0.29 4.18,-3.52 1.89,-0.52 5.64,-0.7 8.01,-2.08 1.84,-1.16 5.37,-2.23 4.75,-4.82 0.89,-1.93 2.17,-4.64 4.7,-3.27 2.88,0.17 5.85,-1.68 8.79,-1.42 2.69,2.85 6.38,3.54 9.59,5.47 2.1,1.42 2.54,5.89 5.86,4.62 1.42,-1.54 4.52,-1.23 6.97,-0.84 2.64,0.11 5.42,0.12 6.99,2.65 1.76,1.23 2.9,3.74 4.81,4.36 3.51,-2.08 7.9,-1.79 11.85,-1.57 1.87,0.92 -0.02,2.26 -1.2,2.88 2.73,2.02 3.96,-3.02 6.01,-4.14 1.85,-2.5 5.05,-5.4 8.21,-4.51 0.4,1.63 2.6,4.73 2.69,1.53 -0.18,-4.03 4.85,-6.14 8.16,-4.72 0.92,1.02 1.13,4.66 2.78,2.25 1.94,-2.52 5.64,-4.66 5.83,-7.92 -0.98,-3.87 1.53,-7.87 4.55,-10.15 2.94,-2.19 5.03,-6.55 9.2,-6.14 3.13,-1.46 0.88,-2.47 0.94,-4.94 -0.47,-2.01 1.66,-5.18 3.04,-2.12 2.09,2.5 4.8,4.66 5.08,8.15 0.55,3.39 3.31,3.78 6.08,2.65 2.41,-0.3 6.44,1.78 7.55,-1.21 2.62,0.79 6.91,-0.99 8.25,2.06 1.49,6.11 -3.45,10.78 -7.19,14.78 -1.98,3.1 3.33,1.46 5.03,1.98 3.6,0.68 6.06,-2.53 6.41,-5.79 1,-1.79 6.72,-1.16 5.01,-3.95 -1.75,-4.35 -2.83,-9 -3.99,-13.46 -2.18,-2.83 -4,-6.6 -2.87,-10.22 -0.22,-5.43 -3.03,-10.29 -3.44,-15.72 -0.42,-2.28 -2.57,-2.04 -3.28,-0.22 -1.81,2.36 -5.39,1.17 -7.84,0.59 -3.37,-1.38 -7.23,-1.87 -9.74,-4.72 -2.44,-2.52 -7.36,-2.95 -8.1,-6.78 1.68,-2.2 3.24,-5.36 5.94,-6.13 0.44,-2.04 -2.63,-3.55 -3.67,-5.18 -2.27,-2.24 -3.02,-5.61 -4.55,-8.32 0.21,-2.8 0.27,-5.88 -2.37,-7.5 -1.78,-3.54 -4.86,-2.15 -7.78,-0.99 -2.53,1.08 -5.51,1.39 -7.79,2.9 0.14,1.21 2.98,3.43 0.56,3.84 -3.2,0.18 -3.78,-3.49 -4.59,-5.69 -0.99,-1.26 -3.18,1.08 -3.03,-1.66 3.36,-2.44 -2.45,-0.94 -3.09,-2.5 -1.56,-2.33 -1.97,-5.95 -5.39,-6.49 -2.15,-2.65 -4.68,-0.2 -6.44,-0.76 -2.83,-2.27 -3.42,-6.13 -4.17,-9.38 1.49,-2.52 -2.16,-5.5 -3.62,-7.17 -1.75,-0.48 -3.25,0.75 -4.88,1.21z m52.69,22.19c-3.16,0.36 -1.48,4.22 0.37,5.25 1.73,2.04 0.07,5.76 2.48,7.75 1.23,2.84 2.71,4.73 5.49,2.07 1.56,-1.43 -2.24,-3.39 -0.78,-5.26 2.84,0.22 4.58,0.55 1.09,-0.38 -3.78,-1.63 -6.46,-4.91 -7.63,-8.84 -0.21,-0.29 -0.58,-0.78 -1.03,-0.59z M508.81,98.25c2.29,2.13 4.59,4.76 3.68,8.19 1.29,3.82 -2.55,2.56 -4.59,1.72 -1.01,-1.74 -1.1,-5.02 -3.97,-3.22 -1.8,2.49 2.15,3.83 2.07,6.36 1.37,2.89 -1.67,5.12 -4.12,5.88 -2.51,0.31 -1.55,2.32 0.67,2.35 4.16,0.13 7.86,-2 11.53,-3.58 2.18,-0.69 5.82,0.22 7.3,-1.22 1.43,-3.32 1.05,-6.01 -2.4,-7.65 -4.01,-3.08 -7.07,-7.49 -11.49,-9.99 0.44,0.39 0.88,0.77 1.31,1.16z m-153.22,8.91c-2.07,0.65 -6.19,2.56 -3.84,5.09 3.14,1.72 4.9,-0.57 5.38,-3.56 0.63,-1.6 0.03,-1.86 -1.53,-1.53z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap5_mv" class="jvectormap-region"></path>
                                    <path d="m231.91,351.28c-2.52,4.22 -6.22,7.61 -8.38,12.09 -3.47,2.99 -7.81,5.31 -10.28,9.09 -2.28,0.4 -5.74,0.13 -5.5,-3 2,-3.26 -3.47,-5.21 -5.91,-3.76 -1.41,0.82 -5.95,0.93 -4.65,3.28 0.64,2.39 3.13,3.23 3.37,5.4 0.17,2.42 -1.34,4.44 -3.94,3.29 -5.15,-0.39 -10.41,1.05 -14.95,3.35 -3.17,1.4 -4.72,4.59 -6.61,7.28 0.84,1.05 2.01,4.06 3.59,2.09 2.37,-0.9 6.57,-4.19 7.88,-0.28 0.22,4.19 2.13,8.77 -0.72,12.51 -0.71,2.75 -2.31,4.62 -5.22,4.99 -3.14,-0.43 -7.52,-2.41 -9.63,1.09 0.39,2.15 1.85,4.24 2.13,6.19 -1,1.73 -3.4,2.91 -4,4.63 3.11,2.85 -2.97,-1.27 -1.76,3.31 -1.97,2.72 -3.4,6.11 -5.96,8.25 -2.51,0.68 -5.22,-4.25 -7.23,-1.05 -2.7,2.64 -5.41,5.28 -8.11,7.92 0.49,2.48 3.93,4.74 1.63,7.26 -0.76,2.71 -4.3,4.36 -2.78,7.49 -0.8,2.92 2.77,3.49 2.12,5.75 -1.13,1.85 -1.06,5.6 -3.44,5.9 -1.97,0.22 -2.63,-1.53 -4.06,-2.13 -2.8,1.41 -5.48,6.02 -2.56,8.66 -0.49,2.46 -3.67,5.82 0.27,6.82 3.67,1.53 5.25,5.3 6.61,8.75 0.92,2.04 1.08,4.85 -1.7,5.37 -1.07,-0.93 -5.7,-1.33 -3.5,1.11 2.47,0.99 0.89,3.49 -1,3.99 -2.32,-1.08 -4.25,-1.29 -6.55,0.33 -2.11,0.73 -3.8,3.88 -1.08,4.86 2.02,1.08 1.39,4.09 0.28,5.59 -2.84,-2.01 -4.64,0.94 -6.72,2.5 -3.14,0.7 -2.62,2.78 -0.67,4.69 1.7,1.7 2.49,4.75 4.7,5.72 7.32,0.54 13.26,-4.85 20.19,-5.97 3.41,-0.25 5.55,2.38 7.21,4.9 2.7,2.09 3.72,5.69 3.75,8.95 -2.21,2.91 0.93,6.19 1.75,9.06 1.22,3.02 5.3,4.54 4.69,8.16 -0.83,2.19 -2.69,3.5 -5.03,3.69 -3.67,1.29 -0.58,5.33 -0.19,7.78 1.19,1.23 1.73,4.58 3.56,3.47 2.87,-0.09 4.72,3.15 6.02,5.29 0.45,2.46 3.64,2.83 4.61,0.44 0.84,-1.91 -0.18,-4.52 -1.35,-5.64 -0.49,-3.07 3.89,-2.29 5.74,-3.3 2.12,-0.86 2.95,1.54 1.33,2.77 -0.13,1.19 0.36,6.2 2.44,7.44 3.73,1.71 7.96,2.48 12.06,2.41 0.3,2.37 -0.95,4.21 -3.22,5.14 -2.12,0.41 -4.13,4.05 -2.97,5.83 3.16,0.98 4.62,-3.02 6.97,-4.37 2.62,-1.23 -1.27,-2.95 1.23,-4.7 1.83,-3.04 5.68,-3.23 8.67,-4.31 2.07,1.28 4.67,2.3 1.65,-0.28 -2.77,-0.69 1.28,-2 0.17,-4.09 -1.83,-2.61 0.09,-5.95 0,-8.84 0.67,-3.72 4.45,-6.62 2.87,-10.6 0.27,-3.23 -3.17,-2.82 -4.5,-5.35 -1.88,-1.31 -2.94,-3.09 -2.59,-5.43 1.25,-0.49 -0.57,-3.68 -0.1,-5.19 -0.37,-2.39 0.26,-5.26 -1.15,-7.31 2.19,-0.29 2.3,-4.03 0.75,-4.91 -3.55,0.11 -2.06,-3.18 -1.51,-5.43 1.26,-3.72 6.02,-2.87 8.99,-4.29 3.44,-0.94 6.85,-2.48 10.38,-0.98 2.53,1.03 6.93,-0.17 7.36,3.51 0.22,3.77 3.72,2.22 6.1,1.81 3.18,-0.12 0.4,-3.63 0.68,-5.44 -0.84,-3.13 -0.37,-6.51 1.38,-9.24 2.02,0.57 4.63,1.89 6.47,0.94 0.86,-2.28 1.78,-5.61 4.88,-5.28 3,-1.1 4.77,-5.15 2.22,-7.63 2.46,-1.43 0.46,-5.9 4.2,-5.65 2.35,-1.65 4.24,2.19 6.72,0.64 3.67,-2.12 7.61,-4.88 9.17,-8.99 0.87,-4.15 -0.43,-8.59 0.34,-12.69 1.59,-1.67 2.87,-3.11 0.88,-5.25 -1.95,-0.3 -4.67,-0.51 -5.91,1.03 2.68,1.72 0.06,4.83 -2.4,3.41 -3.4,0.47 -3.73,-2.19 -3.1,-4.85 1.64,-2.54 4.97,-5.54 3.53,-8.77 -2.61,-1.88 3.02,-1.21 0.62,-3.76 -0.39,-2.4 1.7,-5.24 4.25,-4.19 2.32,-0.16 2.52,-3.78 3.13,-5.59 -0.42,-3.72 -1.44,-7.39 -2.41,-10.94 0.58,-3.37 4.7,-2.07 6.91,-1.42 1.33,1.43 3.54,1.27 4.93,0.14 1.65,-2.01 -0.8,-4 -2.88,-4.28 -0.73,-2.4 -0.28,-5.7 -2.15,-8.05 -1.81,-2.17 3.2,-3.84 4.13,-1.92 0.85,2.09 2.04,3.15 0.8,0.19 -0.79,-1.77 1.55,-2.57 1.81,-3.75 -2.16,-0.34 -3.1,-3.03 -5.47,-3.13 -2.41,-1.32 -5.66,-1.92 -5.69,-5.28 -2.73,-1.26 -6.43,-1.62 -7.14,-5.14 -0.93,-2.28 -2.35,-5.29 -0.96,-7.39 -0.41,-3.77 -4.2,-2.41 -6.91,-2.04 -2.44,0.91 -4.65,3.07 -6.27,5.16 0.26,3.75 3.81,-0.17 4,2.53 0.6,2.43 -1.31,3.7 -3.35,4.44 -2.57,-2.31 -6.46,-3.25 -9.7,-4.62 -2.11,-0.64 -2.73,-3.33 -1.64,-5.16 0.52,-2.33 2.7,-3.11 4.88,-2.75 1.13,-2.01 -0.13,-5.09 -0.97,-7.03 -0.84,-1.85 -3.71,-4.21 -0.9,-5.87 1.12,-2.04 3.33,-1.71 4.5,-3.66 2.57,-0.35 -1.93,-2.01 -2.09,-3.38 -2.42,-2.04 -5.4,-1.51 -8.28,-1.84 -2.56,-0.15 0.13,-3.78 -1.82,-2.9 -0.65,0.13 -1.3,0.26 -1.96,0.4z m48.47,53.75c-0.2,0.03 0.16,0.35 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap5_he" class="jvectormap-region"></path>
                                    <path d="m273.31,139.16c-1.5,1.09 -0.93,4.3 -3.67,5.06 -1.61,1.47 -3.71,3.26 -5.89,1.85 -2.33,-0.78 -1.81,2.21 -3.43,3.24 -1.3,1.52 -3.26,5.5 -5.37,2.78 -1.64,-2.73 -2.78,-2.89 -3.11,0.48 -1.95,3.52 3.88,1.56 2.16,5.63 -0.89,2.25 0.93,3.48 1.47,5.56 1.11,1.96 3.5,5.01 5.03,1.63 1.82,-0.66 3.1,2.78 4.87,3.63 1.74,1.19 3.59,-1.92 4.1,-3.57 1.25,-2.32 3.61,0.86 4.66,2.15 1.9,2.2 3.93,4.76 7.21,3.97 1.13,-0.62 1.01,-2.97 2.91,-3.07 2.93,-1.45 -2.65,-3.59 -2.97,-5.78 -1.42,-2.02 -5.31,-2.65 -5.35,-5.94 -0.83,-2.64 0.75,-4.88 3,-6.12 2.02,-2.17 0.93,-4.31 -0.94,-5.97 0.01,-2.33 -0.49,-4.73 0.53,-6.88 -1.59,-1.66 -3.52,1.07 -5.22,1.34z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap5_hh" class="jvectormap-region"></path>
                                    <path d="m177.13,149.91c-1.02,1.81 2,3.93 2.44,6 0.78,1.49 -1.36,2.66 0.47,3.7 0.36,2.05 1.77,2.73 3.27,0.5 2.31,-1.97 -1.15,-5.18 0.62,-7.7 1.79,-3.68 -3.69,-1.91 -5.73,-2.54 -0.36,-0.05 -0.71,0.02 -1.07,0.05z m-2.34,39.47c1.3,3.24 5.12,3.63 7.78,4.94 1.52,2.61 1.31,5.93 3.86,7.69 2.1,1.22 1.38,3.71 2.04,5.46 1.64,0.31 3.99,-0.68 5.77,0.73 2.5,0.16 5.45,3.63 7.38,0.87 2.63,-1.56 0.74,-5.04 0.98,-7.51 -2.78,-1.97 1.76,-2.01 0.87,-3.11 -1.26,-2.73 -3.93,0.26 -6.25,-0.86 -4.35,-0.36 -7.69,-4.63 -12.29,-4.36 -3.91,0.3 -6.92,-2.67 -10.15,-3.86z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#c6c6c6" original="#c6c6c6"
                                          id="jqvmap5_hb" class="jvectormap-region"></path>
                                    <path d="m499.25,149.81c-0.84,1.88 -0.81,4.34 1.28,5.34 -1.74,2.06 -3.79,3.29 -6.37,3.46 -3.18,2.74 -6.61,5.55 -9.05,8.91 -1.36,2.25 -1.54,4.68 -0.87,7.16 -2.28,3.16 -4.83,6.45 -8.06,8.63 -2.41,-0.12 -1.19,-4.5 -3.97,-3.53 -3,-0.61 -5.44,2.28 -5,5.15 -0.4,2.7 -4.01,1.19 -3.97,-1.02 -0.57,-1.97 -3.52,0.03 -4.56,0.75 -2.74,2.49 -4.73,6.13 -7.88,8 -1.99,-0.23 -3.86,-2.04 -1.25,-3.16 1.45,-1.47 -4.76,-0.14 -6.18,-0.46 -2.13,-0.19 -5.04,3.22 -6.6,0.49 -2.73,-2.51 -5.01,-6.52 -9.27,-5.91 -2.13,0.04 -5.13,-1.3 -6.45,0.69 -2.87,1.21 -4.79,-0.3 -6.25,-2.72 -1.52,-3.98 -6.92,-3.25 -9.48,-6.32 -1.8,-2.15 -4.65,0.11 -6.93,0.1 -2.38,1.26 -5.39,-1.14 -6.32,2.55 0.99,3.09 -2.96,4.01 -4.77,5.61 -2.15,1.15 -6.11,1.77 -7.27,2.46 2,2.09 -1.36,2.73 -2.94,2.85 -3.43,2.16 -3.88,-1.29 -6.73,-1.81 -3.03,-0.86 -4.57,2.1 -6.63,3.69 0.64,2.72 1.23,7.08 -1.72,8.53 -1.68,-0.03 -3.77,-0.05 -4.75,-1.47 -3.21,-0.91 -4.58,3.15 -7.53,2.47 -2.88,-1 -5.03,0.48 -2.09,2.67 1.36,1.69 3.08,4 5.08,1.55 1.94,-1.5 5.34,-2.28 6.7,0.42 1.5,2.04 4.32,1.65 6.53,2.39 1.23,-1.43 4.73,-0.25 2.95,1.62 -1.67,1.72 2.21,2.59 2.91,3.81 1.43,1.12 2.93,-2.01 4.58,-0.33 1.76,1.64 5.48,1.89 6.03,4.47 0.12,1.23 -2.72,2.23 -0.94,3.16 4.27,1.68 8.68,4.08 13.38,2.66 2.5,1.2 6.82,-4.08 4.61,0.18 -0.35,3.68 2.96,0.6 4.61,0.47 3.29,0.55 2.92,4.31 3.72,6.78 0.37,2.84 -3.59,3.22 -2.84,6.46 -1.66,3.81 3.69,5.99 2.3,9.81 0.77,2.86 -2.32,3.27 -3.45,4.66 -0.54,2.65 -2.13,5.71 -1.65,8.26 0.83,2.24 4.39,3.7 4.36,0.28 2.12,1.42 6.84,0.74 6.61,4.02 1.02,3.09 -2.67,5.39 -1.23,8.53 0.24,2.83 1.88,6.06 -0.69,8.26 -2.05,3.4 -2.35,7.41 -1.88,11.28 -2.17,2.79 -1.48,5.22 1.03,7.44 3.11,5.22 7.1,10.36 13.17,12.16 3.29,1.01 7.58,3.94 10.7,1.22 -0.29,-3.23 3.4,-2.12 4.94,-0.75 2.81,1.03 3.99,2.78 6.11,4.39 2.08,1.33 4.66,2.82 7.04,1.98 3.14,1.39 6,3.2 8.16,5.88 3.11,1.39 3.63,-2.03 5.78,-1.38 1.85,0.64 2.36,3.88 -0.16,3.41 1.53,4.44 1.98,9.42 4.53,13.28 -0.28,4.36 -5.19,5.81 -8.13,8.16 1.38,4.17 2.89,2.17 5.54,3.45 2.71,1.73 3.05,5.69 4.55,8.42 0.92,3.28 0.16,6.97 -0.56,10.28 1.12,1.84 2.33,3.34 4.61,2.31 0.97,-1.14 2.38,-3.45 4.49,-4.31 2.22,-1.43 4.58,-3.03 6.29,-0.12 4.07,3.53 9.06,7.27 14.8,6.16 2.09,-1.58 2.79,0.71 5.58,0.52 2.7,-0.23 5.1,-3 8.17,-1.96 3.29,-1.1 7.81,-0.26 9.47,-3.95 2.24,-4.34 2.1,-9.97 5.65,-13.77 1.52,-0.92 3.97,-0 5.84,-0.31 2.67,-0.5 5.34,2.24 7.62,0.72 1.65,-1.85 4.86,-1.52 6.32,-2.54 1.7,-2.16 5.35,-2.05 7.75,-3.38 2.31,-0.33 2.58,2.04 4.09,2.56 2.19,0.22 4.28,-0.47 4.14,-3.06 1.18,-2.26 3.58,-0.39 3.55,-4.22 -0.1,-2.81 -0.47,-5.99 -3.36,-7.26 -3.75,-2.16 -4.56,-6.65 -6.42,-10.21 -2.9,-0.63 -3.35,-5.09 -0.55,-6.35 3.76,-2.93 5.89,-7.61 5.36,-12.4 -0.5,-2.47 -0,-3.76 1.5,-6 1.18,-2.51 -0.13,-5.99 -3.13,-5.94 -2.3,-1.74 -2.72,-5.61 -0.53,-7.63 -0.28,-2.81 1.52,-6.55 -1.09,-8.56 -2.6,-1.24 -6.3,-0.29 -7.81,-3.19 -1.11,-3.05 -1.39,-6.47 -2.42,-9.42 -1.68,-2.31 -0.63,-6.4 2.17,-7.48 1.98,-2.33 3.3,-5.1 2.57,-8.22 0.38,-2.83 -0.31,-5.28 -2.51,-7.19 -3.54,-2.79 -8.55,-3.73 -11.34,-7.59 -2.56,-5.3 -8.11,-8.18 -12.88,-11.28 -2.02,-1.42 -4.87,-0.97 -6.69,-2.38 -2.03,-2.63 3.01,-4.81 1.15,-7.48 -0.64,-2.66 -2.69,-6.39 0.67,-8.11 3.25,-1.9 6.37,-3.89 8.77,-6.91 3.06,-2.56 2.89,-6.96 3.39,-10.59 -1.83,-1.72 -1.71,-4.98 -0.47,-6.84 1.2,-1.67 4.41,-4.79 3.03,-6.69 -2.15,0.19 -2.35,-3.69 -2.22,-5.41 -2.44,1.01 -5.3,1.53 -5.5,4.63 -1.15,2.4 -3.02,3.91 -5.78,3.72 -2.22,-0.47 -6.15,0.62 -7.41,-0.9 0.47,-4.6 5.82,-6.58 7.23,-10.78 0.81,-2.01 1.54,-5.13 -0.2,-6.73 -3.16,-0.57 -5.69,-0.28 -7.87,1.03 -3.28,0.28 -6.64,-0.73 -9.75,0.5 -4.23,-1.06 -2.75,-6.98 -5.95,-9.24 -1.05,-1.15 -2.07,-2.54 -3.15,-3.54z M484.13,240.25c2.62,1.78 3.22,5.59 5.07,8.15 1.73,3.05 5.13,4.94 5.9,8.6 -0.13,3.15 2.96,3.88 5.31,4.97 3.02,1.16 1.5,3.96 0.62,6.15 -2.11,1.18 -0.3,2.41 -1.81,3.94 -3.37,1.44 -6.8,-1.31 -10.22,-1.72 -2.61,0.29 -4.02,-2.66 -5.44,-2.59 -3.39,0.13 0.93,5.86 -3.25,4.2 -2.15,-1.56 -3.93,-2.85 -6.03,-2.56 -2.2,-2.21 -6.14,-1.55 -8.26,0.46 3.07,1.05 -3.31,1.77 -4.27,0.08 -2.48,-1.03 -0.87,-2.57 0.43,-3.73 -0.55,-1.26 -1.2,-3.36 0.31,-4.63 3.03,-2.14 1.73,-3.7 -0.71,-3.56 0.04,-2.5 -0.02,-5.34 0.62,-7.66 1.31,-1.47 2.88,-1.58 4.41,-0.5 1.08,0.35 -1.33,-2.46 0.8,-3.32 1.36,-1.61 4.71,-0.61 6.85,-0.8 2.24,1.02 3.85,-0.76 4.63,-2.66 1.77,2.37 2.44,0.08 3.29,-1.66 0.36,-0.52 1.13,-1.47 1.74,-1.16z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap5_bb" class="jvectormap-region"></path>
                                    <path d="m483.38,241.69c-1,1.58 -1.61,5.27 -4.03,2.88 -0.91,2.64 -3.81,2.59 -6.06,2.05 -1.91,-0.31 -7.28,0.09 -4.84,2.79 1.38,2.14 -2.25,1.68 -3.34,0.78 -3.18,-0.15 -1.8,4.36 -2.36,6.45 -0.09,0.87 5.17,1.04 2.51,3.18 -1.16,1.75 -4.04,3.69 -1.89,5.83 0.53,1.82 -3.82,2.76 -0.54,3.7 2.29,1.61 3.52,-2 6.07,-2.2 2.07,-0.34 5.08,-0.28 6.25,1.69 2.29,-3.28 5.18,4.71 6.09,1.16 -1.15,-2.62 1.9,-3.14 3.66,-3.85 0.63,3.56 5.17,2.88 7.8,4.18 1.96,0.26 4.94,2.32 6.26,0.28 -2.5,-1.19 2.5,-2.95 2,-5.26 1.05,-2.66 -3.24,-2.9 -4.77,-4.37 -2.69,-0.38 -1.4,-4.38 -3.15,-6.05 -1.61,-3.03 -4.93,-4.88 -5.94,-8.38 -1.14,-0.99 -1.96,-6.07 -3.71,-4.88z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b5d894" original="#b5d894"
                                          id="jqvmap5_be" class="jvectormap-region"></path>
                                    <path d="m273.66,464.44c-1.31,1.91 -3.76,2.78 -3.5,5.34 -1.83,4.59 -6.12,7.95 -10.5,9.94 -2.67,1.02 -4.62,-2.49 -7.15,-0.61 -1.54,0.74 -0.64,3.49 -2.13,4.58 2.4,3.04 -0.04,7.53 -3.44,8.47 -3.38,-0.45 -3.01,4.07 -4.66,5.5 -2.16,0.47 -4.23,-0.33 -6.28,-0.91 -2.54,3.91 -0.46,8.53 0,12.63 -0.53,2.87 -4.66,1.74 -6.9,2.55 -3.16,0.27 -1.64,-5.68 -4.98,-5.22 -4.19,-0.72 -8.41,-2.46 -12.49,-0.42 -2.97,1.16 -6.84,1.23 -9.32,2.99 -0.59,1.48 -2.41,4.44 -0.69,5.28 3.02,-0.37 2.55,4.03 2.28,5.63 -2.37,0.86 0.17,4.18 -0.45,6.12 0.28,2.66 -0.27,5.78 1.89,7.78 -3.88,-0.85 0.14,3.73 1.52,4.58 0.84,1.94 3.96,0.92 3.59,3.64 1.27,2.88 0.6,5.62 -0.78,8.31 -2.26,2.93 -2.47,7.6 -2.42,11.23 1.24,2.27 4.6,0.89 6.75,1.12 2.16,0.04 4.75,-2.13 4.73,-4.03 -0.34,-2.04 2.18,-5.23 4.72,-3.63 1.87,0.74 5.34,1.32 4.23,-1.45 1.6,-1.24 -0.63,-7.5 -0.96,-4.79 0.79,2.49 -3.31,2.3 -3.52,0.13 -0.83,-1.56 -3.4,-4.82 -1.19,-6.09 3.07,-0.15 6.37,-1.05 9.34,-0.19 0.41,-2.46 4.94,-2.22 3.88,0.41 0.59,1.49 3.45,3.68 4.43,1.04 1.16,-1.1 4.96,-5.66 4.94,-1.88 -0.59,2.44 0.18,5.72 -1.59,7.45 0.33,2.92 3.79,0.57 5.16,-0.39 2.48,-0.32 5.61,-3.48 7.29,-0.3 2.99,3.39 2.07,8.94 5.01,12.52 2.18,0.31 2.43,3.58 2.41,5.6 0.45,1.81 -0.72,3.89 -0.34,5.16 2.77,0.82 6.24,0.65 7.69,-2.25 -0.15,-1.12 -1.91,-2.61 0.74,-3.68 2.83,-1.31 3.76,2.79 4.2,4.84 -1.95,1.56 1.87,3.4 1.31,5.57 0.26,2.1 4.02,5.65 0.6,6.68 -2.91,-0.9 -2.81,3.3 -1.87,5.04 0.96,2.51 3.11,4.68 1.16,7.27 0.44,2.52 -1.72,6.37 1.65,7.44 1.89,1.55 4.82,1.6 5.41,4.43 1.71,2.58 1.5,5.88 2.31,8.79 -2.03,1.94 3.23,2.14 4.31,3.59 2.13,2.06 5.86,2.95 6.29,6.28 3.84,2.87 1.91,8.3 2.08,12.46 0.25,2.64 -0.94,5.5 -2.07,7.44 -0.04,3.1 4.34,2.42 3.61,6.41 2.49,1.05 0.06,3.97 -1.86,4.33 -1.61,1.16 -4.23,0.12 -2.18,-1.56 2.29,-3.25 -3.46,-0.68 -4.81,-0.69 -2.23,0.84 -5.79,-3.18 -5.97,0.9 -0.14,3 3.91,4.63 3.42,7.93 0.53,2.67 0.99,5.81 0.27,8.32 -1.49,1.89 -3.93,-0.58 -5.06,1.19 0.32,2.29 -3.52,3.66 -4.94,5.41 -3.13,1.93 -4.28,-3.47 -7.13,-0.01 -2.35,0.12 -0.74,3.36 -2.58,4.82 -1.74,2.44 -2.43,5.75 -0.16,8.06 1.31,2.7 4.08,4.51 3.75,7.78 0.56,4.38 1.13,8.84 2.71,12.9 2.91,1.82 1.6,5.52 2,8.41 0.45,2.66 -1.86,4.17 -1.66,6.72 0.19,1.55 -3.47,0.81 -1.84,3.13 2.61,1.07 0.38,3.66 0.87,5.81 0.2,2.47 -0.14,5.78 2.07,7.38 0.5,2.56 -3.74,2.92 -1.81,6.18 1.02,3.01 3.86,6.55 1.16,9.46 -1.18,1.16 -3.19,0.63 -3.38,2.95 -1.52,3.81 -0.35,-4.27 -2.92,-3.81 -1.88,-0.93 -3.51,0.34 -4.08,2.09 -3.48,0.28 -7.46,-0.44 -10.66,0.7 -2.62,1.93 -4.17,6.22 -7.96,5.49 -1.72,0.26 -2.84,-2.34 -4.53,-0.51 -3.88,1.61 -1.7,3.37 1.37,4.04 3.22,2.32 4.79,-0.35 6.38,-2.97 2.19,-2.61 6.67,0.35 5.03,3.47 -1.46,1.59 3.12,2.56 4.5,2.46 2.2,0.75 5.22,-2.54 5.71,-2.37 -1.26,2.65 0.2,5.16 1.79,7.23 3.74,-0.93 5.96,3.27 7.63,5.97 -1.64,1.92 -2.48,3.42 -1,5.94 0.03,1.72 5.17,0.51 4.35,-1.56 0.81,-1.86 3.6,-1.1 5.09,-0.53 2.05,2.24 -1.68,3.98 -1.81,6.26 -0.21,1.48 -3.48,5.59 -1.04,5.45 5.9,-0.28 10.64,-4.27 13.65,-9.1 1.68,-2.49 4.2,-4.8 5.23,-7.51 -0.27,-1.73 0.37,-4.61 -1.96,-4.47 -1.78,-2.98 -0.76,-6.77 -1.03,-10.06 0.59,-1.59 4.6,-2.06 3.97,0.09 -1.67,2.23 -0.39,3.45 2.34,3.77 2.31,0.63 4.34,0.47 4.81,-2.09 1.65,-2.51 5.13,-0.08 7.59,-0.22 0.5,2.03 3.14,2.52 5.19,3.38 2.99,1.48 5.86,-2.19 8.72,-1.09 3.48,2.5 -1.05,3.09 -0.97,5.59 2.55,0.29 4.83,1.11 6.25,3.38 2.96,1.58 0.77,3.77 1.16,5.09 4.01,0.78 8.16,-0.05 11.5,-2.41 2.24,-1.08 5.28,-2.46 7.66,-1.16 -0.63,2.06 -2.84,4.65 1.39,2.92 0.99,-2.2 2.51,-4.2 4.63,-5.64 2.78,-1.69 3.97,-4.98 6.66,-6.66 2.2,2.25 6,0.82 8.75,0.25 1.72,-1.5 -0.11,-4.24 1.75,-6 1.27,-3.31 5.21,-1.69 7.87,-2.01 3.14,-0.06 6.26,-0.02 9.34,0.6 1.3,-3.59 5.97,-3.64 9.18,-3.87 2.61,1.43 5.36,-1.54 7.57,0.5 2.56,0.03 5.94,1.12 8.03,-0.19 -0.56,-3.08 -2.75,-5.66 -1.81,-8.97 1.68,-1.6 3.23,-4.06 5.5,-4.97 2.05,1.73 -0.97,3.82 0.9,5.81 0.74,1.55 6.18,-3.23 5.07,-0.41 2.78,1.55 7.13,-0.47 8.4,3.24 1.5,2.9 4.05,3.71 6.55,1.34 2.39,-0.55 1.97,-4.34 4.92,-3.93 3.45,-1.43 7.22,-0.35 10.38,1.04 0.63,2.57 4.26,5.4 1.53,7.59 -1.91,3.64 3.48,5.29 5.61,7.15 2.86,2.07 5.93,3.86 9.26,5.04 1.6,-1.29 3.65,-3.83 2,-5.66 -1.98,-1.39 0.16,-4.42 -0.13,-6.41 0.81,-2.05 3.05,-3.55 3.5,-5.53 -1.37,-2.88 -2.02,-7.29 -5.72,-7.94 -0.69,2.59 -4.42,1.51 -6.31,1.34 -1.86,-0.73 -2.16,-2.62 -0.73,-4.04 1.53,-3.69 4.03,-7.15 5.39,-10.77 -2.14,-3.41 -3.7,-7.7 -6.59,-10.34 -2.88,0.4 -3.64,-2.11 -3.9,-4.41 -1.24,-4.49 -8.32,-5.42 -8.04,-10.73 0.04,-2.8 4.04,-3.87 5.63,-5.89 1.81,-1.22 1.17,-3.89 2.78,-4.97 2.57,-0.91 6.07,0.24 7.47,-2.89 1.29,-1.84 2.29,-3.74 4.7,-4.4 2.08,-2 5.15,-0.22 7.17,-2.39 2.7,-1.73 6.58,0.63 8.88,-2.3 3.06,-1.95 5.85,-4.79 7.85,-7.65 0.43,-2.52 2.26,-5.13 0.38,-7.38 0.45,-3.1 3.3,-6.59 0.44,-9.38 -0.61,-1.41 4.07,-1.2 4.41,-3.5 -0.1,-4.04 4.08,-0.04 6.17,0.11 3.24,1.6 5.97,4.3 9.52,5.26 3.15,-4.15 7.21,-9.07 5.25,-14.64 0.5,-2.8 -3.41,-5.03 -1.06,-7.39 1.18,-2.53 1.51,-5.28 -0.56,-7.48 -1.75,-2.45 -3.35,-5.1 -5.19,-7.42 -2,1.56 -5.42,0.69 -5.99,-1.97 -0.86,-2.58 -2.84,-4.62 -4.76,-6.5 -2.32,-0.51 -5.25,-0.27 -4.06,2.66 -1.49,2 -4.02,-1.61 -5.78,-2.26 -3.51,-1.84 -1.34,-7.26 -4.67,-9.54 -1.77,-2.1 -3.92,-4.14 -6.4,-5.23 -2.11,1.09 -4.33,0.73 -6.1,-0.79 -2.35,-0.65 -1.29,-3.34 -2.28,-4.52 -5.62,-4.34 -8.22,-11.7 -13.85,-16.05 -0.96,-0.66 -5.12,-1.7 -4.56,-0.67 1,2.66 -3.26,0.86 -4.59,0.92 -2.67,0.16 -4.59,-1.69 -5.1,-4.2 0.33,-2.99 -3.95,-3.91 -5.58,-5.98 -1.3,-1.16 -4.06,-3.42 -2.45,-4.96 0.01,-2.41 0.31,-4 -2.29,-4.05 -2.07,-0.53 -1.46,-1.98 -2.8,-3.5 -2.08,-3.55 -3.13,-7.39 -3.48,-11.47 -1,-2.47 -5.61,-0.9 -6.56,-3.96 -1.46,-1.68 -3.4,-4.99 -0.08,-5.91 3.24,-0.92 2.39,-4.05 3.21,-6.53 0.88,-3.28 4.17,-5.56 3.4,-9.15 -1.69,-2.78 -3.02,-7.24 -7.16,-6.34 -2.89,-1.46 -5.43,-3.31 -7.5,-5.81 -4.37,0.47 -3.42,-1.95 -5.22,-4.41 -1.08,-0.95 -3.08,-0.2 -3.19,-2.3 -0.69,-1.94 -0.29,-3.97 0.91,-5.48 -1.13,-3.44 -4.24,-5.4 -7.25,-6.96 -2.59,-1.3 0.21,-3.74 1.9,-4.17 -1.15,-4.86 -6.38,-5.68 -10.5,-6.63 -1.66,-1.44 1.51,-4.7 -1.45,-5.85 -1.47,-2.96 -3.98,-0.6 -6.15,-0.03 -4.99,1.83 -10.54,1.94 -15.74,2.63 -0.77,-0.67 -2.77,-2.61 -3.03,-0.5 -0.96,2.08 -4.29,1.95 -5.15,-0.33 -1.46,-1.7 -1.05,-3.98 -3.62,-3.71 -2.87,-0.72 -2.28,-4.47 -1.51,-6.47 2.3,-1.83 -2.65,-2.89 -4.3,-2.43 -1.7,1.3 -2.92,3.72 -5.37,4.41 -1.61,-1.19 -1.85,2.9 -0.04,2.88 0.66,3.05 1.58,6.38 1.39,9.48 -1.36,2.21 -0.38,7.05 -3.72,7.01 -1.95,0.12 -2.86,4.45 -5,1.12 -2.19,-1.15 -2.98,-4.4 -0.24,-5.3 -0.32,-1.92 -3.58,-5.33 -4.44,-2.09 -2.92,1.68 -7.59,1.16 -8.96,-2.28 -0.97,-2.98 -4.83,-0.87 -7.1,-1.48 -2.57,0.83 -5.91,1.76 -7.83,3.43 -0.82,2.98 1.43,4.47 3.69,5.77 1.52,2.24 6.27,1.22 5.55,4.87 -1.22,3.47 -5.4,0.77 -7.88,0.59 -0.91,0.73 1.13,4.84 -1.63,4.69 -2.37,-0.99 -5.13,-1.74 -7.34,-2.66 -1.81,-3.33 -1.13,-7.07 -0.75,-10.66 -3.86,-0.79 -8.92,-2.08 -9.69,-6.56 -1.65,1.27 -4.99,0.71 -4.64,-1.87 -0.45,-2.76 -1.64,-5.72 -3.61,-7.69 -2.74,-0.99 -5.53,-1.93 -6.83,-4.79 -1.25,-3.09 -5.32,-0.4 -7.74,-0.8z m46.75,26.38c-0.1,0.03 0.04,0.06 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap5_by" class="jvectormap-region"></path>
                                    <path d="m233,542.31c-1,3.03 -3.8,0.55 -6.25,1.41 -1.85,0.3 -6.11,-0.67 -4.1,2.56 0.5,1.4 3.45,5.79 2.97,1.91 0.74,-2.88 3.54,0.29 3.5,2.12 -0.05,2.12 0.13,4.28 -0.67,5.91 -2.21,2.88 -6.93,-2.7 -8.36,1.34 0.26,1.89 -0.96,3.78 -2.66,5.38 -2.87,1.47 -6.48,1.36 -9.56,0.91 -0.14,1.71 -1.09,2.75 0.88,3.56 2.16,2.43 -1.84,4.61 -2.82,1.5 -2.24,-0.41 -4.9,0.87 -7.01,1.83 -1.86,1.31 -3.21,3.14 -1.07,4.79 -2.58,2.03 -4.76,4.93 -7.53,6.53 -2.28,0.77 -4.85,-1.67 -3.07,-3.7 0.44,-3.45 3.31,-3.76 5.49,-5.64 2.15,-2.77 -2.95,-1.33 -4.33,-2.33 -3.36,-0.68 -8.66,-1.27 -8.78,-5.66 -0.37,-2.27 -2.39,-6.18 0.16,-6.35 -1.56,0.22 -6.19,0.51 -5.66,2.03 1.02,1.01 1.63,3.91 1.34,5.81 -0.91,2.56 -4.61,4.01 -6.17,1.22 -1.23,-2.27 -2.8,-5.47 -5.58,-5.87 -1.35,0.5 -2.27,2.96 -1.13,4.34 0.64,2.82 1.72,5.99 1.41,8.75 -1.19,1.47 2.13,0.8 2.94,1.09 2.56,1.28 -0.68,4.01 0.44,6.03 0.58,2.78 -1.68,4.86 -3.44,6.5 -0.2,1.61 2.95,0.95 2.5,3.03 -0.5,1.7 -2.89,2.29 -3.8,3.97 -1.51,1 -4.09,2.21 -3,4.19 -0,4.19 -1.63,8.4 -2.57,12.44 -1.88,2.38 -4.07,4.74 -4.06,8 -0.94,3.32 -4.33,5.15 -7.25,6.25 -3.09,4.3 -5.58,9.02 -6.75,14.19 -2.02,2.94 -5.4,5.15 -8.91,5.69 -0.21,2.82 -1.4,5.14 -3.56,6.99 -1.36,2.17 -3.49,3.53 -5.66,4.61 -1.15,2.67 -3.64,5.13 -2.5,8.22 0.36,2.98 -0.28,5.69 -1.97,8.15 -1.95,4.34 -4.99,8.87 -3.01,13.76 0.98,2.33 -1.6,3.46 -3.29,4.06 -1.58,3.35 -1.03,7.85 -3.97,10.71 -3.45,3.81 -5.74,8.63 -5.57,13.85 -1.32,3.83 3.9,5.48 3.32,9.25 -1.3,3.08 -3.94,5.46 -4.57,8.93 -0.87,1.91 1.04,3.96 -0.54,5.81 -1.06,2.51 -2.87,5.19 -1.04,7.86 1.18,2.15 -0.92,4.15 -2.35,5.35 -0.31,3.89 3.1,6.22 5,9.16 2.34,1.03 6.63,0.35 6.5,3.84 -1.16,1.4 -4.38,2.08 -0.94,3.62 2.67,0.19 5.38,-1.24 7.85,-2.15 1.44,-1.71 2.81,-3.83 5.44,-3.09 2.67,-0.79 2.95,2.96 5.54,2.9 3.15,1.3 6.81,1.64 9.99,0.41 0.13,-3.3 4.53,-3.63 6.59,-5.48 2.38,-1.41 5.39,0.37 7.78,0.98 0.79,1.29 -0,3.08 2.19,3.78 3.61,0.25 7.37,1.32 10.72,-0.47 -3.18,-2.2 -0.41,-3.55 1.74,-5.09 1.44,-1.37 5.34,0.59 4.6,2.72 0.03,1.73 2.81,-2.43 2.91,-3.66 0.99,-2.17 -2.08,-3.31 -3.78,-2.38 -2.21,0.79 -3.16,2.58 -5.97,3.13 -1.88,-0.81 -4.32,-2.21 -5.31,-4.16 0.59,-3.61 2.99,-6.72 5.06,-9.63 1.63,-2.24 5.73,-0.38 6.44,-3.38 2.06,-2.35 5.55,0.44 4.49,3.47 2.07,0.67 0.21,-4.19 4.06,-1.25 1.57,1.2 4.32,3.45 2.25,5.23 0.1,2.76 1.41,4.58 4.22,5.01 1.74,-2.24 3.46,-0.92 5.76,1.59 2.1,2.97 5.8,0.78 7.96,-0.93 3.82,-2.7 8.65,-0.24 12.27,1.62 3.55,2.04 4.43,-1.99 2.13,-4.27 -0.59,-2.2 -2.12,-3.67 -4.12,-4.07 -2.4,-1.85 -6.01,-3.5 -6.96,-6.5 0.3,-2.1 3.03,-1.62 3.78,-0.16 3.5,2.46 7.48,4.47 10.66,7.31 -0.21,3.96 4.69,5.62 7.5,7.39 1.67,0.53 3.72,-1.14 5.59,-0.11 2.75,0.87 6.81,1.33 7.03,4.97 0.46,3.2 4.49,4.9 6.69,2.27 1.24,-1.5 4.61,-2.56 5.4,-0.7 4.17,1.33 6.15,-3.91 8.97,-5.72 3.32,-0.45 7.13,0.12 10.19,-0.66 1,-2.57 4.28,-2.37 6.22,-1.28 0.84,2.31 0.58,2.71 2.56,1.13 2.97,-0.39 2.03,-4.58 0.76,-6.39 -1.17,-2.02 -2,-5.8 -0.79,-7.3 3.32,-0.17 0.06,-2.21 -0,-3.93 -0.63,-3.04 -0.86,-6.31 0,-9.32 -2.23,-0.74 -2.32,-4.76 0.44,-4.66 -0.41,-2.68 2.08,-4.21 1.66,-6.88 -0.15,-2.82 0.59,-6.09 -1.94,-7.94 -2.26,-5.15 -1.96,-11.11 -3.49,-16.32 -1.93,-2.69 -4.53,-5.55 -4.67,-9 0.46,-2.92 3.93,-5.48 2.72,-8.47 0.1,-0.35 4.87,-3.47 6.42,-2.05 2,3.2 4.93,-0.95 6.82,-2.36 0.33,-1.38 1,-2.91 3.14,-2.96 3.03,1.76 2.98,-2.24 2.69,-4.25 -0.32,-3.5 -1.14,-6.78 -3.64,-9.37 -0.98,-1.42 0.15,-4.75 1.23,-5.16 3.02,1.48 6.11,1.47 9.25,0.41 2.37,-0.94 3.55,1.55 1.82,3.19 0.08,1.06 5.19,-1.87 2.3,-2.88 -0.25,-2.1 -0.85,-4.44 -3.47,-3.91 -1,-3.13 0.42,-4.65 1.54,-7.33 0.09,-4.38 1.32,-9.19 -0.13,-13.38 -2.03,-1.38 -1.82,-4.46 -4.4,-5.39 -2.47,-2.1 -5.26,-3.59 -8.29,-4.72 -0.45,-2.63 0.5,-4.11 -0.61,-6.97 -0.35,-3.23 -2.39,-5.85 -5.43,-6.81 -1.8,-1.05 -4.02,-2.25 -3.05,-4.75 -0.53,-2.57 0.99,-5.27 0.62,-7.5 -1.67,-2.84 -3.08,-6.33 -1.5,-9.56 2.72,0.17 4.05,-1.19 2,-3.69 -1.12,-2.08 -1.1,-4.65 -2.84,-6.37 -0.05,-1.52 1.05,-2.79 -0.28,-4.24 -1.33,-3.13 -3.46,0.38 -1.36,0.89 -1.36,2.26 -3.18,4.9 -6.23,4.2 -1.84,0.68 -5.99,-0.78 -4,-3.06 0.32,-2.43 0.8,-5.95 -0.91,-7.66 -1.91,-0.49 -2.69,-3.58 -3.13,-5.51 -1.12,-3.07 -1.07,-6.84 -4.03,-8.84 -3.37,0.71 -6.2,2.77 -9.34,3.81 -2.15,-0.26 -3.2,-3.12 -1.25,-4.19 -0.15,-1.71 1.98,-8.34 -1.11,-4.8 -1.56,1.02 -3.09,4.67 -5.17,2.44 -1.38,-0.64 -3.13,-1.84 -2.32,-3.58 -0.34,-0.5 -0.91,-0.09 -1.41,-0.13z m-57.69,212.03c0.26,4.67 5.28,-0.76 0,0z"
                                          stroke="#333333" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-opacity="0.5" fill="#b6da93" original="#b6da93"
                                          id="jqvmap5_bw" class="jvectormap-region"></path>
                                </g>
                            </svg>
                            <div class="jqvmap-zoomin">+</div>
                            <div class="jqvmap-zoomout">−</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END REGIONAL STATS PORTLET-->
        </div>
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <!-- BEGIN PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title tabbable-line">
                    <div class="caption">
                        <i class="icon-globe font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Feeds</span>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab_1_1" class="active" data-toggle="tab"> System </a>
                        </li>
                        <li>
                            <a href="#tab_1_2" data-toggle="tab"> Activities </a>
                        </li>
                    </ul>
                </div>
                <div class="portlet-body">
                    <!--BEGIN TABS-->
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1_1">
                            <div class="slimScrollDiv"
                                 style="position: relative; overflow: hidden; width: auto; height: 339px;">
                                <div class="scroller" style="height: 339px; overflow: hidden; width: auto;"
                                     data-always-visible="1" data-rail-visible="0" data-initialized="1">
                                    <ul class="feeds">
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> You have 4 pending tasks.
                                                            <span class="label label-sm label-info"> Take action
                                                                                <i class="fa fa-share"></i>
                                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> Just now</div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> New version v1.4 just lunched!</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> 20 mins</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> Database server #12 overloaded. Please fix
                                                            the issue.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 24 mins</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 30 mins</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 40 mins</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-warning">
                                                            <i class="fa fa-plus"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> New user registered.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 1.5 hours</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> Web server hardware needs to be upgraded.
                                                            <span class="label label-sm label-default "> Overdue </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 2 hours</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 3 hours</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-warning">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 5 hours</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 18 hours</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 21 hours</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 22 hours</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 21 hours</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 22 hours</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 21 hours</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 22 hours</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 21 hours</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 22 hours</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="slimScrollBar"
                                     style="background: rgb(187, 187, 187); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 184.464px;"></div>
                                <div class="slimScrollRail"
                                     style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_1_2">
                            <div class="slimScrollDiv"
                                 style="position: relative; overflow: hidden; width: auto; height: 290px;">
                                <div class="scroller" style="height: 290px; overflow: hidden; width: auto;"
                                     data-always-visible="1" data-rail-visible1="1" data-initialized="1">
                                    <ul class="feeds">
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> New user registered</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> Just now</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> New order received</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> 10 mins</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> Order #24DOP4 has been rejected.
                                                            <span class="label label-sm label-danger "> Take action
                                                                                <i class="fa fa-share"></i>
                                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 24 mins</div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> New user registered</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> Just now</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> New user registered</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> Just now</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> New user registered</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> Just now</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> New user registered</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> Just now</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> New user registered</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> Just now</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> New user registered</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> Just now</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> New user registered</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> Just now</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="slimScrollBar"
                                     style="background: rgb(187, 187, 187); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
                                <div class="slimScrollRail"
                                     style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div>
                            </div>
                        </div>
                    </div>
                    <!--END TABS-->
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <!-- BEGIN PORTLET-->
            <div class="portlet light calendar bordered">
                <div class="portlet-title ">
                    <div class="caption">
                        <i class="icon-calendar font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Feeds</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="calendar" class="fc fc-ltr fc-unthemed">
                        <div class="fc-toolbar">
                            <div class="fc-left"><h2>November 2017</h2></div>
                            <div class="fc-right">
                                <div class="fc-button-group">
                                    <button type="button"
                                            class="fc-prev-button fc-button fc-state-default fc-corner-left"><span
                                                class="fc-icon fc-icon-left-single-arrow"></span></button>
                                    <button type="button" class="fc-next-button fc-button fc-state-default"><span
                                                class="fc-icon fc-icon-right-single-arrow"></span></button>
                                    <button type="button"
                                            class="fc-today-button fc-button fc-state-default fc-state-disabled"
                                            disabled="disabled">today
                                    </button>
                                    <button type="button"
                                            class="fc-month-button fc-button fc-state-default fc-state-active">month
                                    </button>
                                    <button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week
                                    </button>
                                    <button type="button"
                                            class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day
                                    </button>
                                </div>
                            </div>
                            <div class="fc-center"></div>
                            <div class="fc-clear"></div>
                        </div>
                        <div class="fc-view-container" style="">
                            <div class="fc-view fc-month-view fc-basic-view" style="">
                                <table>
                                    <thead class="fc-head">
                                    <tr>
                                        <td class="fc-widget-header">
                                            <div class="fc-row fc-widget-header">
                                                <table>
                                                    <thead>
                                                    <tr>
                                                        <th class="fc-day-header fc-widget-header fc-sun">Sun</th>
                                                        <th class="fc-day-header fc-widget-header fc-mon">Mon</th>
                                                        <th class="fc-day-header fc-widget-header fc-tue">Tue</th>
                                                        <th class="fc-day-header fc-widget-header fc-wed">Wed</th>
                                                        <th class="fc-day-header fc-widget-header fc-thu">Thu</th>
                                                        <th class="fc-day-header fc-widget-header fc-fri">Fri</th>
                                                        <th class="fc-day-header fc-widget-header fc-sat">Sat</th>
                                                    </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    </thead>
                                    <tbody class="fc-body">
                                    <tr>
                                        <td class="fc-widget-content">
                                            <div class="fc-day-grid-container" style="">
                                                <div class="fc-day-grid">
                                                    <div class="fc-row fc-week fc-widget-content" style="">
                                                        <div class="fc-bg">
                                                            <table>
                                                                <tbody>
                                                                <tr>
                                                                    <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past"
                                                                        data-date="2017-10-29"></td>
                                                                    <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past"
                                                                        data-date="2017-10-30"></td>
                                                                    <td class="fc-day fc-widget-content fc-tue fc-other-month fc-past"
                                                                        data-date="2017-10-31"></td>
                                                                    <td class="fc-day fc-widget-content fc-wed fc-past"
                                                                        data-date="2017-11-01"></td>
                                                                    <td class="fc-day fc-widget-content fc-thu fc-past"
                                                                        data-date="2017-11-02"></td>
                                                                    <td class="fc-day fc-widget-content fc-fri fc-today fc-state-highlight"
                                                                        data-date="2017-11-03"></td>
                                                                    <td class="fc-day fc-widget-content fc-sat fc-future"
                                                                        data-date="2017-11-04"></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="fc-content-skeleton">
                                                            <table>
                                                                <thead>
                                                                <tr>
                                                                    <td class="fc-day-number fc-sun fc-other-month fc-past"
                                                                        data-date="2017-10-29">29
                                                                    </td>
                                                                    <td class="fc-day-number fc-mon fc-other-month fc-past"
                                                                        data-date="2017-10-30">30
                                                                    </td>
                                                                    <td class="fc-day-number fc-tue fc-other-month fc-past"
                                                                        data-date="2017-10-31">31
                                                                    </td>
                                                                    <td class="fc-day-number fc-wed fc-past"
                                                                        data-date="2017-11-01">1
                                                                    </td>
                                                                    <td class="fc-day-number fc-thu fc-past"
                                                                        data-date="2017-11-02">2
                                                                    </td>
                                                                    <td class="fc-day-number fc-fri fc-today fc-state-highlight"
                                                                        data-date="2017-11-03">3
                                                                    </td>
                                                                    <td class="fc-day-number fc-sat fc-future"
                                                                        data-date="2017-11-04">4
                                                                    </td>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td class="fc-event-container" colspan="3"><a
                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                                                style="background-color:#89C4F4">
                                                                            <div class="fc-content"><span
                                                                                        class="fc-time">12a</span> <span
                                                                                        class="fc-title">Long Event</span>
                                                                            </div>
                                                                        </a></td>
                                                                    <td class="fc-event-container" rowspan="2"><a
                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                                                style="background-color:#F8CB00">
                                                                            <div class="fc-content"><span
                                                                                        class="fc-time">12a</span> <span
                                                                                        class="fc-title">All Day</span>
                                                                            </div>
                                                                        </a></td>
                                                                    <td rowspan="2"></td>
                                                                    <td class="fc-event-container" rowspan="2"><a
                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                                                style="background-color:#95a5a6">
                                                                            <div class="fc-content"><span
                                                                                        class="fc-time">2p</span> <span
                                                                                        class="fc-title">Lunch</span>
                                                                            </div>
                                                                        </a></td>
                                                                    <td class="fc-event-container" rowspan="2"><a
                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                                                style="background-color:#9b59b6">
                                                                            <div class="fc-content"><span
                                                                                        class="fc-time">7p</span> <span
                                                                                        class="fc-title">Birthday</span>
                                                                            </div>
                                                                        </a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td class="fc-event-container"><a
                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                                                style="background-color:#F3565D">
                                                                            <div class="fc-content"><span
                                                                                        class="fc-time">4p</span> <span
                                                                                        class="fc-title">Repeating Event</span>
                                                                            </div>
                                                                        </a></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="fc-row fc-week fc-widget-content" style="height: 87px;">
                                                        <div class="fc-bg">
                                                            <table>
                                                                <tbody>
                                                                <tr>
                                                                    <td class="fc-day fc-widget-content fc-sun fc-future"
                                                                        data-date="2017-11-05"></td>
                                                                    <td class="fc-day fc-widget-content fc-mon fc-future"
                                                                        data-date="2017-11-06"></td>
                                                                    <td class="fc-day fc-widget-content fc-tue fc-future"
                                                                        data-date="2017-11-07"></td>
                                                                    <td class="fc-day fc-widget-content fc-wed fc-future"
                                                                        data-date="2017-11-08"></td>
                                                                    <td class="fc-day fc-widget-content fc-thu fc-future"
                                                                        data-date="2017-11-09"></td>
                                                                    <td class="fc-day fc-widget-content fc-fri fc-future"
                                                                        data-date="2017-11-10"></td>
                                                                    <td class="fc-day fc-widget-content fc-sat fc-future"
                                                                        data-date="2017-11-11"></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="fc-content-skeleton">
                                                            <table>
                                                                <thead>
                                                                <tr>
                                                                    <td class="fc-day-number fc-sun fc-future"
                                                                        data-date="2017-11-05">5
                                                                    </td>
                                                                    <td class="fc-day-number fc-mon fc-future"
                                                                        data-date="2017-11-06">6
                                                                    </td>
                                                                    <td class="fc-day-number fc-tue fc-future"
                                                                        data-date="2017-11-07">7
                                                                    </td>
                                                                    <td class="fc-day-number fc-wed fc-future"
                                                                        data-date="2017-11-08">8
                                                                    </td>
                                                                    <td class="fc-day-number fc-thu fc-future"
                                                                        data-date="2017-11-09">9
                                                                    </td>
                                                                    <td class="fc-day-number fc-fri fc-future"
                                                                        data-date="2017-11-10">10
                                                                    </td>
                                                                    <td class="fc-day-number fc-sat fc-future"
                                                                        data-date="2017-11-11">11
                                                                    </td>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td class="fc-event-container"><a
                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                                                style="background-color:#1bbc9b">
                                                                            <div class="fc-content"><span
                                                                                        class="fc-time">4p</span> <span
                                                                                        class="fc-title">Repeating Event</span>
                                                                            </div>
                                                                        </a></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="fc-row fc-week fc-widget-content" style="height: 87px;">
                                                        <div class="fc-bg">
                                                            <table>
                                                                <tbody>
                                                                <tr>
                                                                    <td class="fc-day fc-widget-content fc-sun fc-future"
                                                                        data-date="2017-11-12"></td>
                                                                    <td class="fc-day fc-widget-content fc-mon fc-future"
                                                                        data-date="2017-11-13"></td>
                                                                    <td class="fc-day fc-widget-content fc-tue fc-future"
                                                                        data-date="2017-11-14"></td>
                                                                    <td class="fc-day fc-widget-content fc-wed fc-future"
                                                                        data-date="2017-11-15"></td>
                                                                    <td class="fc-day fc-widget-content fc-thu fc-future"
                                                                        data-date="2017-11-16"></td>
                                                                    <td class="fc-day fc-widget-content fc-fri fc-future"
                                                                        data-date="2017-11-17"></td>
                                                                    <td class="fc-day fc-widget-content fc-sat fc-future"
                                                                        data-date="2017-11-18"></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="fc-content-skeleton">
                                                            <table>
                                                                <thead>
                                                                <tr>
                                                                    <td class="fc-day-number fc-sun fc-future"
                                                                        data-date="2017-11-12">12
                                                                    </td>
                                                                    <td class="fc-day-number fc-mon fc-future"
                                                                        data-date="2017-11-13">13
                                                                    </td>
                                                                    <td class="fc-day-number fc-tue fc-future"
                                                                        data-date="2017-11-14">14
                                                                    </td>
                                                                    <td class="fc-day-number fc-wed fc-future"
                                                                        data-date="2017-11-15">15
                                                                    </td>
                                                                    <td class="fc-day-number fc-thu fc-future"
                                                                        data-date="2017-11-16">16
                                                                    </td>
                                                                    <td class="fc-day-number fc-fri fc-future"
                                                                        data-date="2017-11-17">17
                                                                    </td>
                                                                    <td class="fc-day-number fc-sat fc-future"
                                                                        data-date="2017-11-18">18
                                                                    </td>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td class="fc-event-container"><a
                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable">
                                                                            <div class="fc-content"><span
                                                                                        class="fc-time">10:30a</span>
                                                                                <span class="fc-title">Meeting</span>
                                                                            </div>
                                                                        </a></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="fc-row fc-week fc-widget-content" style="height: 87px;">
                                                        <div class="fc-bg">
                                                            <table>
                                                                <tbody>
                                                                <tr>
                                                                    <td class="fc-day fc-widget-content fc-sun fc-future"
                                                                        data-date="2017-11-19"></td>
                                                                    <td class="fc-day fc-widget-content fc-mon fc-future"
                                                                        data-date="2017-11-20"></td>
                                                                    <td class="fc-day fc-widget-content fc-tue fc-future"
                                                                        data-date="2017-11-21"></td>
                                                                    <td class="fc-day fc-widget-content fc-wed fc-future"
                                                                        data-date="2017-11-22"></td>
                                                                    <td class="fc-day fc-widget-content fc-thu fc-future"
                                                                        data-date="2017-11-23"></td>
                                                                    <td class="fc-day fc-widget-content fc-fri fc-future"
                                                                        data-date="2017-11-24"></td>
                                                                    <td class="fc-day fc-widget-content fc-sat fc-future"
                                                                        data-date="2017-11-25"></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="fc-content-skeleton">
                                                            <table>
                                                                <thead>
                                                                <tr>
                                                                    <td class="fc-day-number fc-sun fc-future"
                                                                        data-date="2017-11-19">19
                                                                    </td>
                                                                    <td class="fc-day-number fc-mon fc-future"
                                                                        data-date="2017-11-20">20
                                                                    </td>
                                                                    <td class="fc-day-number fc-tue fc-future"
                                                                        data-date="2017-11-21">21
                                                                    </td>
                                                                    <td class="fc-day-number fc-wed fc-future"
                                                                        data-date="2017-11-22">22
                                                                    </td>
                                                                    <td class="fc-day-number fc-thu fc-future"
                                                                        data-date="2017-11-23">23
                                                                    </td>
                                                                    <td class="fc-day-number fc-fri fc-future"
                                                                        data-date="2017-11-24">24
                                                                    </td>
                                                                    <td class="fc-day-number fc-sat fc-future"
                                                                        data-date="2017-11-25">25
                                                                    </td>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="fc-row fc-week fc-widget-content" style="height: 87px;">
                                                        <div class="fc-bg">
                                                            <table>
                                                                <tbody>
                                                                <tr>
                                                                    <td class="fc-day fc-widget-content fc-sun fc-future"
                                                                        data-date="2017-11-26"></td>
                                                                    <td class="fc-day fc-widget-content fc-mon fc-future"
                                                                        data-date="2017-11-27"></td>
                                                                    <td class="fc-day fc-widget-content fc-tue fc-future"
                                                                        data-date="2017-11-28"></td>
                                                                    <td class="fc-day fc-widget-content fc-wed fc-future"
                                                                        data-date="2017-11-29"></td>
                                                                    <td class="fc-day fc-widget-content fc-thu fc-future"
                                                                        data-date="2017-11-30"></td>
                                                                    <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future"
                                                                        data-date="2017-12-01"></td>
                                                                    <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future"
                                                                        data-date="2017-12-02"></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="fc-content-skeleton">
                                                            <table>
                                                                <thead>
                                                                <tr>
                                                                    <td class="fc-day-number fc-sun fc-future"
                                                                        data-date="2017-11-26">26
                                                                    </td>
                                                                    <td class="fc-day-number fc-mon fc-future"
                                                                        data-date="2017-11-27">27
                                                                    </td>
                                                                    <td class="fc-day-number fc-tue fc-future"
                                                                        data-date="2017-11-28">28
                                                                    </td>
                                                                    <td class="fc-day-number fc-wed fc-future"
                                                                        data-date="2017-11-29">29
                                                                    </td>
                                                                    <td class="fc-day-number fc-thu fc-future"
                                                                        data-date="2017-11-30">30
                                                                    </td>
                                                                    <td class="fc-day-number fc-fri fc-other-month fc-future"
                                                                        data-date="2017-12-01">1
                                                                    </td>
                                                                    <td class="fc-day-number fc-sat fc-other-month fc-future"
                                                                        data-date="2017-12-02">2
                                                                    </td>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td class="fc-event-container"><a
                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                                                href="http://google.com/"
                                                                                style="background-color:#F8CB00">
                                                                            <div class="fc-content"><span
                                                                                        class="fc-time">12a</span> <span
                                                                                        class="fc-title">Click for Google</span>
                                                                            </div>
                                                                        </a></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="fc-row fc-week fc-widget-content" style="height: 90px;">
                                                        <div class="fc-bg">
                                                            <table>
                                                                <tbody>
                                                                <tr>
                                                                    <td class="fc-day fc-widget-content fc-sun fc-other-month fc-future"
                                                                        data-date="2017-12-03"></td>
                                                                    <td class="fc-day fc-widget-content fc-mon fc-other-month fc-future"
                                                                        data-date="2017-12-04"></td>
                                                                    <td class="fc-day fc-widget-content fc-tue fc-other-month fc-future"
                                                                        data-date="2017-12-05"></td>
                                                                    <td class="fc-day fc-widget-content fc-wed fc-other-month fc-future"
                                                                        data-date="2017-12-06"></td>
                                                                    <td class="fc-day fc-widget-content fc-thu fc-other-month fc-future"
                                                                        data-date="2017-12-07"></td>
                                                                    <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future"
                                                                        data-date="2017-12-08"></td>
                                                                    <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future"
                                                                        data-date="2017-12-09"></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="fc-content-skeleton">
                                                            <table>
                                                                <thead>
                                                                <tr>
                                                                    <td class="fc-day-number fc-sun fc-other-month fc-future"
                                                                        data-date="2017-12-03">3
                                                                    </td>
                                                                    <td class="fc-day-number fc-mon fc-other-month fc-future"
                                                                        data-date="2017-12-04">4
                                                                    </td>
                                                                    <td class="fc-day-number fc-tue fc-other-month fc-future"
                                                                        data-date="2017-12-05">5
                                                                    </td>
                                                                    <td class="fc-day-number fc-wed fc-other-month fc-future"
                                                                        data-date="2017-12-06">6
                                                                    </td>
                                                                    <td class="fc-day-number fc-thu fc-other-month fc-future"
                                                                        data-date="2017-12-07">7
                                                                    </td>
                                                                    <td class="fc-day-number fc-fri fc-other-month fc-future"
                                                                        data-date="2017-12-08">8
                                                                    </td>
                                                                    <td class="fc-day-number fc-sat fc-other-month fc-future"
                                                                        data-date="2017-12-09">9
                                                                    </td>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
                        <i class="icon-bubble font-hide hide"></i>
                        <span class="caption-subject font-hide bold uppercase">Chats</span>
                    </div>
                    <div class="actions">
                        <div class="portlet-input input-inline">
                            <div class="input-icon right">
                                <i class="icon-magnifier"></i>
                                <input type="text" class="form-control input-circle" placeholder="search..."></div>
                        </div>
                    </div>
                </div>
                <div class="portlet-body" id="chats">
                    <div class="slimScrollDiv"
                         style="position: relative; overflow: hidden; width: auto; height: 525px;">
                        <div class="scroller" style="height: 525px; overflow: hidden; width: auto;"
                             data-always-visible="1" data-rail-visible1="1" data-initialized="1">
                            <ul class="chats">
                                <li class="out">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg">
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Lisa Wong </a>
                                        <span class="datetime"> at 20:11 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                    </div>
                                </li>
                                <li class="out">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg">
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Lisa Wong </a>
                                        <span class="datetime"> at 20:11 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                    </div>
                                </li>
                                <li class="in">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar1.jpg">
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Bob Nilson </a>
                                        <span class="datetime"> at 20:30 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                    </div>
                                </li>
                                <li class="in">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar1.jpg">
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Bob Nilson </a>
                                        <span class="datetime"> at 20:30 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                    </div>
                                </li>
                                <li class="out">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg">
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Richard Doe </a>
                                        <span class="datetime"> at 20:33 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                    </div>
                                </li>
                                <li class="in">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg">
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Richard Doe </a>
                                        <span class="datetime"> at 20:35 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                    </div>
                                </li>
                                <li class="out">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar1.jpg">
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Bob Nilson </a>
                                        <span class="datetime"> at 20:40 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                    </div>
                                </li>
                                <li class="in">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg">
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Richard Doe </a>
                                        <span class="datetime"> at 20:40 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                    </div>
                                </li>
                                <li class="out">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar1.jpg">
                                    <div class="message">
                                        <span class="arrow"> </span>
                                        <a href="javascript:;" class="name"> Bob Nilson </a>
                                        <span class="datetime"> at 20:54 </span>
                                        <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. sed diam nonummy nibh euismod tincidunt ut laoreet.
                                                            </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="slimScrollBar"
                             style="background: rgb(187, 187, 187); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 376.023px;"></div>
                        <div class="slimScrollRail"
                             style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div>
                    </div>
                    <div class="chat-form">
                        <div class="input-cont">
                            <input class="form-control" type="text" placeholder="Type a message here..."></div>
                        <div class="btn-cont">
                            <span class="arrow"> </span>
                            <a href="#" class="btn blue icn-only">
                                <i class="fa fa-check icon-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bubble font-dark hide"></i>
                        <span class="caption-subject font-hide bold uppercase">Recent Users</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <a class="btn green-haze btn-outline btn-circle btn-sm" href="javascript:;"
                               data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;"> Option 1</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="javascript:;">Option 2</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Option 3</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Option 4</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-4">
                            <!--begin: widget 1-1 -->
                            <div class="mt-widget-1">
                                <div class="mt-icon">
                                    <a href="#">
                                        <i class="icon-plus"></i>
                                    </a>
                                </div>
                                <div class="mt-img">
                                    <img src="../assets/pages/media/users/avatar80_8.jpg"></div>
                                <div class="mt-body">
                                    <h3 class="mt-username">Diana Ellison</h3>
                                    <p class="mt-user-title"> Lorem Ipsum is simply dummy text. </p>
                                    <div class="mt-stats">
                                        <div class="btn-group btn-group btn-group-justified">
                                            <a href="javascript:;" class="btn font-red">
                                                <i class="icon-bubbles"></i> 1,7k </a>
                                            <a href="javascript:;" class="btn font-green">
                                                <i class="icon-social-twitter"></i> 2,6k </a>
                                            <a href="javascript:;" class="btn font-yellow">
                                                <i class="icon-emoticon-smile"></i> 3,7k </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: widget 1-1 -->
                        </div>
                        <div class="col-md-4">
                            <!--begin: widget 1-2 -->
                            <div class="mt-widget-1">
                                <div class="mt-icon">
                                    <a href="#">
                                        <i class="icon-plus"></i>
                                    </a>
                                </div>
                                <div class="mt-img">
                                    <img src="../assets/pages/media/users/avatar80_7.jpg"></div>
                                <div class="mt-body">
                                    <h3 class="mt-username">Jason Baker</h3>
                                    <p class="mt-user-title"> Lorem Ipsum is simply dummy text. </p>
                                    <div class="mt-stats">
                                        <div class="btn-group btn-group btn-group-justified">
                                            <a href="javascript:;" class="btn font-yellow">
                                                <i class="icon-bubbles"></i> 1,7k </a>
                                            <a href="javascript:;" class="btn font-blue">
                                                <i class="icon-social-twitter"></i> 2,6k </a>
                                            <a href="javascript:;" class="btn font-green">
                                                <i class="icon-emoticon-smile"></i> 3,7k </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: widget 1-2 -->
                        </div>
                        <div class="col-md-4">
                            <!--begin: widget 1-3 -->
                            <div class="mt-widget-1">
                                <div class="mt-icon">
                                    <a href="#">
                                        <i class="icon-plus"></i>
                                    </a>
                                </div>
                                <div class="mt-img">
                                    <img src="../assets/pages/media/users/avatar80_6.jpg"></div>
                                <div class="mt-body">
                                    <h3 class="mt-username">Julia Berry</h3>
                                    <p class="mt-user-title"> Lorem Ipsum is simply dummy text. </p>
                                    <div class="mt-stats">
                                        <div class="btn-group btn-group btn-group-justified">
                                            <a href="javascript:;" class="btn font-yellow">
                                                <i class="icon-bubbles"></i> 1,7k </a>
                                            <a href="javascript:;" class="btn font-red">
                                                <i class="icon-social-twitter"></i> 2,6k </a>
                                            <a href="javascript:;" class="btn font-green">
                                                <i class="icon-emoticon-smile"></i> 3,7k </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: widget 1-3 -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-microphone font-dark hide"></i>
                        <span class="caption-subject bold font-dark uppercase"> Recent Works</span>
                        <span class="caption-helper">default option...</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                            <label class="btn red btn-outline btn-circle btn-sm active">
                                <input type="radio" name="options" class="toggle" id="option1">Settings</label>
                            <label class="btn  red btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Tools</label>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-widget-2">
                                <div class="mt-head"
                                     style="background-image: url(../assets/pages/img/background/32.jpg);">
                                    <div class="mt-head-label">
                                        <button type="button" class="btn btn-success">Manhattan</button>
                                    </div>
                                    <div class="mt-head-user">
                                        <div class="mt-head-user-img">
                                            <img src="../assets/pages/img/avatars/team7.jpg"></div>
                                        <div class="mt-head-user-info">
                                            <span class="mt-user-name">Chris Jagers</span>
                                            <span class="mt-user-time">
                                                                    <i class="icon-emoticon-smile"></i> 3 mins ago </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-body">
                                    <h3 class="mt-body-title"> Thomas Clark </h3>
                                    <p class="mt-body-description"> It is a long established fact that a reader will be
                                        distracted </p>
                                    <ul class="mt-body-stats">
                                        <li class="font-green">
                                            <i class="icon-emoticon-smile"></i> 3,7k
                                        </li>
                                        <li class="font-yellow">
                                            <i class=" icon-social-twitter"></i> 3,7k
                                        </li>
                                        <li class="font-red">
                                            <i class="  icon-bubbles"></i> 3,7k
                                        </li>
                                    </ul>
                                    <div class="mt-body-actions">
                                        <div class="btn-group btn-group btn-group-justified">
                                            <a href="javascript:;" class="btn">
                                                <i class="icon-bubbles"></i> Bookmark </a>
                                            <a href="javascript:;" class="btn ">
                                                <i class="icon-social-twitter"></i> Share </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-widget-2">
                                <div class="mt-head"
                                     style="background-image: url(../assets/pages/img/background/43.jpg);">
                                    <div class="mt-head-label">
                                        <button type="button" class="btn btn-danger">London</button>
                                    </div>
                                    <div class="mt-head-user">
                                        <div class="mt-head-user-img">
                                            <img src="../assets/pages/img/avatars/team3.jpg"></div>
                                        <div class="mt-head-user-info">
                                            <span class="mt-user-name">Harry Harris</span>
                                            <span class="mt-user-time">
                                                                    <i class="icon-user"></i> 3 mins ago </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-body">
                                    <h3 class="mt-body-title"> Christian Davidson </h3>
                                    <p class="mt-body-description"> It is a long established fact that a reader will be
                                        distracted </p>
                                    <ul class="mt-body-stats">
                                        <li class="font-green">
                                            <i class="icon-emoticon-smile"></i> 3,7k
                                        </li>
                                        <li class="font-yellow">
                                            <i class=" icon-social-twitter"></i> 3,7k
                                        </li>
                                        <li class="font-red">
                                            <i class="  icon-bubbles"></i> 3,7k
                                        </li>
                                    </ul>
                                    <div class="mt-body-actions">
                                        <div class="btn-group btn-group btn-group-justified">
                                            <a href="javascript:;" class="btn ">
                                                <i class="icon-bubbles"></i> Bookmark </a>
                                            <a href="javascript:;" class="btn ">
                                                <i class="icon-social-twitter"></i> Share </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-microphone font-dark hide"></i>
                        <span class="caption-subject bold font-dark uppercase"> Recent Projects</span>
                        <span class="caption-helper">default option...</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                            <label class="btn blue btn-outline btn-circle btn-sm active">
                                <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                            <label class="btn  blue btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Tools</label>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mt-widget-4">
                                <div class="mt-img-container">
                                    <img src="../assets/pages/img/background/34.jpg"></div>
                                <div class="mt-container bg-purple-opacity">
                                    <div class="mt-head-title"> Website Revamp &amp; Deployment</div>
                                    <div class="mt-body-icons">
                                        <a href="#">
                                            <i class=" icon-pencil"></i>
                                        </a>
                                        <a href="#">
                                            <i class=" icon-map"></i>
                                        </a>
                                        <a href="#">
                                            <i class=" icon-trash"></i>
                                        </a>
                                    </div>
                                    <div class="mt-footer-button">
                                        <button type="button" class="btn btn-circle btn-danger btn-sm">Dior</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mt-widget-4">
                                <div class="mt-img-container">
                                    <img src="../assets/pages/img/background/46.jpg"></div>
                                <div class="mt-container bg-green-opacity">
                                    <div class="mt-head-title"> CRM Development &amp; Deployment</div>
                                    <div class="mt-body-icons">
                                        <a href="#">
                                            <i class=" icon-social-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class=" icon-bubbles"></i>
                                        </a>
                                        <a href="#">
                                            <i class=" icon-bell"></i>
                                        </a>
                                    </div>
                                    <div class="mt-footer-button">
                                        <button type="button" class="btn btn-circle blue-ebonyclay btn-sm">Nike</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mt-widget-4">
                                <div class="mt-img-container">
                                    <img src="../assets/pages/img/background/37.jpg"></div>
                                <div class="mt-container bg-dark-opacity">
                                    <div class="mt-head-title"> Marketing Campaigns</div>
                                    <div class="mt-body-icons">
                                        <a href="#">
                                            <i class=" icon-bubbles"></i>
                                        </a>
                                        <a href="#">
                                            <i class=" icon-map"></i>
                                        </a>
                                        <a href="#">
                                            <i class=" icon-cup"></i>
                                        </a>
                                    </div>
                                    <div class="mt-footer-button">
                                        <button type="button" class="btn btn-circle btn-success btn-sm">Honda</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-microphone font-dark hide"></i>
                        <span class="caption-subject bold font-dark uppercase"> Activities</span>
                        <span class="caption-helper">default option...</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <a class="btn red btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown"
                               data-hover="dropdown" data-close-others="true"> Actions
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;"> Option 1</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="javascript:;">Option 2</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Option 3</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Option 4</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mt-widget-3">
                                <div class="mt-head bg-blue-hoki">
                                    <div class="mt-head-icon">
                                        <i class=" icon-social-twitter"></i>
                                    </div>
                                    <div class="mt-head-desc"> Lorem Ipsum is simply dummy text of the ...</div>
                                    <span class="mt-head-date"> 25 Jan, 2015 </span>
                                    <div class="mt-head-button">
                                        <button type="button" class="btn btn-circle btn-outline white btn-sm">Add
                                        </button>
                                    </div>
                                </div>
                                <div class="mt-body-actions-icons">
                                    <div class="btn-group btn-group btn-group-justified">
                                        <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-align-justify"></i>
                                                                </span>RECORD </a>
                                        <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-camera"></i>
                                                                </span>PHOTO </a>
                                        <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-calendar"></i>
                                                                </span>DATE </a>
                                        <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-record"></i>
                                                                </span>RANC </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mt-widget-3">
                                <div class="mt-head bg-red">
                                    <div class="mt-head-icon">
                                        <i class="icon-user"></i>
                                    </div>
                                    <div class="mt-head-desc"> Lorem Ipsum is simply dummy text of the ...</div>
                                    <span class="mt-head-date"> 12 Feb, 2016 </span>
                                    <div class="mt-head-button">
                                        <button type="button" class="btn btn-circle btn-outline white btn-sm">Add
                                        </button>
                                    </div>
                                </div>
                                <div class="mt-body-actions-icons">
                                    <div class="btn-group btn-group btn-group-justified">
                                        <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-align-justify"></i>
                                                                </span>RECORD </a>
                                        <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-camera"></i>
                                                                </span>PHOTO </a>
                                        <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-calendar"></i>
                                                                </span>DATE </a>
                                        <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-record"></i>
                                                                </span>RANC </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mt-widget-3">
                                <div class="mt-head bg-green">
                                    <div class="mt-head-icon">
                                        <i class=" icon-graduation"></i>
                                    </div>
                                    <div class="mt-head-desc"> Lorem Ipsum is simply dummy text of the ...</div>
                                    <span class="mt-head-date"> 3 Mar, 2015 </span>
                                    <div class="mt-head-button">
                                        <button type="button" class="btn btn-circle btn-outline white btn-sm">Add
                                        </button>
                                    </div>
                                </div>
                                <div class="mt-body-actions-icons">
                                    <div class="btn-group btn-group btn-group-justified">
                                        <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-align-justify"></i>
                                                                </span>RECORD </a>
                                        <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-camera"></i>
                                                                </span>PHOTO </a>
                                        <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-calendar"></i>
                                                                </span>DATE </a>
                                        <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-record"></i>
                                                                </span>RANC </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection