
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->


<!-- Mirrored from keenthemes.com/preview/metronic/theme/admin_1_material_design/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Nov 2016 04:40:25 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <title>Viethouse 24 | Quản trị</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Quản trị viethouse24" name="description" />
    <meta content="" name="author" />

    <link rel="icon" type="image/png" sizes="16x16" href="/mua-do-tot_favicon.png">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />

    <link href="/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/clockface/css/clockface.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/pages/css/blog.min.css" rel="stylesheet" type="text/css" />


    <link href="/assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" type="text/css" />

    <link href="/assets/global/plugins/bootstrap-sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="/assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />

    <link href="/assets/apps/css/inbox.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />



    <link href="/frontend/css/button.css" rel="stylesheet" type="text/css" />

    <style>
        .sweet-alert {
            z-index: 9999999999 !important;
        }
        </style>
@yield('styles')




<!-- END THEME LAYOUT STYLES -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <style>
        .select2-container {
            width: auto !important;
        }
    </style>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId      : '1255378714553193',
                xfbml      : true,
                version    : 'v2.8'
            });
            FB.AppEvents.logPageView();
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-92012133-1', 'auto');
        ga('send', 'pageview');

    </script>

</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
<div class="page-wrapper">
    <!-- BEGIN HEADER -->
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="{{ url('/') }}">
                    <img src="/files/{{ cache()->get('settings')['logo'] }}" alt="logo" class="logo-default">
                    </a>
                <div class="menu-toggler sidebar-toggler">
                    <span></span>
                </div>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span></span>
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after "dropdown-extended" to change the dropdown styte -->
                    <!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                    <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                {{--<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">--}}
                {{--<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">--}}
                {{--<i class="icon-bell"></i>--}}
                {{--<span class="badge badge-default"> 7 </span>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu">--}}
                {{--<li class="external">--}}
                {{--<h3>--}}
                {{--<span class="bold">12 pending</span> notifications</h3>--}}
                {{--<a href="page_user_profile_1.html">view all</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">--}}
                {{--<li>--}}
                {{--<a href="javascript:;">--}}
                {{--<span class="time">just now</span>--}}
                {{--<span class="details">--}}
                {{--<span class="label label-sm label-icon label-success">--}}
                {{--<i class="fa fa-plus"></i>--}}
                {{--</span> New user registered. </span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:;">--}}
                {{--<span class="time">3 mins</span>--}}
                {{--<span class="details">--}}
                {{--<span class="label label-sm label-icon label-danger">--}}
                {{--<i class="fa fa-bolt"></i>--}}
                {{--</span> Server #12 overloaded. </span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:;">--}}
                {{--<span class="time">10 mins</span>--}}
                {{--<span class="details">--}}
                {{--<span class="label label-sm label-icon label-warning">--}}
                {{--<i class="fa fa-bell-o"></i>--}}
                {{--</span> Server #2 not responding. </span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:;">--}}
                {{--<span class="time">14 hrs</span>--}}
                {{--<span class="details">--}}
                {{--<span class="label label-sm label-icon label-info">--}}
                {{--<i class="fa fa-bullhorn"></i>--}}
                {{--</span> Application error. </span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:;">--}}
                {{--<span class="time">2 days</span>--}}
                {{--<span class="details">--}}
                {{--<span class="label label-sm label-icon label-danger">--}}
                {{--<i class="fa fa-bolt"></i>--}}
                {{--</span> Database overloaded 68%. </span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:;">--}}
                {{--<span class="time">3 days</span>--}}
                {{--<span class="details">--}}
                {{--<span class="label label-sm label-icon label-danger">--}}
                {{--<i class="fa fa-bolt"></i>--}}
                {{--</span> A user IP blocked. </span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:;">--}}
                {{--<span class="time">4 days</span>--}}
                {{--<span class="details">--}}
                {{--<span class="label label-sm label-icon label-warning">--}}
                {{--<i class="fa fa-bell-o"></i>--}}
                {{--</span> Storage Server #4 not responding dfdfdfd. </span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:;">--}}
                {{--<span class="time">5 days</span>--}}
                {{--<span class="details">--}}
                {{--<span class="label label-sm label-icon label-info">--}}
                {{--<i class="fa fa-bullhorn"></i>--}}
                {{--</span> System Error. </span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:;">--}}
                {{--<span class="time">9 days</span>--}}
                {{--<span class="details">--}}
                {{--<span class="label label-sm label-icon label-danger">--}}
                {{--<i class="fa fa-bolt"></i>--}}
                {{--</span> Storage server failed. </span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                <!-- END NOTIFICATION DROPDOWN -->
                    <!-- BEGIN INBOX DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                {{--<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">--}}
                {{--<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">--}}
                {{--<i class="icon-envelope-open"></i>--}}
                {{--<span class="badge badge-default"> 4 </span>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu">--}}
                {{--<li class="external">--}}
                {{--<h3>You have--}}
                {{--<span class="bold">7 New</span> Messages</h3>--}}
                {{--<a href="app_inbox.html">view all</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">--}}
                {{--<li>--}}
                {{--<a href="#">--}}
                {{--<span class="photo">--}}
                {{--<img src="/assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>--}}
                {{--<span class="subject">--}}
                {{--<span class="from"> Lisa Wong </span>--}}
                {{--<span class="time">Just Now </span>--}}
                {{--</span>--}}
                {{--<span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="#">--}}
                {{--<span class="photo">--}}
                {{--<img src="/assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>--}}
                {{--<span class="subject">--}}
                {{--<span class="from"> Richard Doe </span>--}}
                {{--<span class="time">16 mins </span>--}}
                {{--</span>--}}
                {{--<span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="#">--}}
                {{--<span class="photo">--}}
                {{--<img src="/assets/layouts/layout3/img/avatar1.jpg" class="img-circle" alt=""> </span>--}}
                {{--<span class="subject">--}}
                {{--<span class="from"> Bob Nilson </span>--}}
                {{--<span class="time">2 hrs </span>--}}
                {{--</span>--}}
                {{--<span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="#">--}}
                {{--<span class="photo">--}}
                {{--<img src="/assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>--}}
                {{--<span class="subject">--}}
                {{--<span class="from"> Lisa Wong </span>--}}
                {{--<span class="time">40 mins </span>--}}
                {{--</span>--}}
                {{--<span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="#">--}}
                {{--<span class="photo">--}}
                {{--<img src="/assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>--}}
                {{--<span class="subject">--}}
                {{--<span class="from"> Richard Doe </span>--}}
                {{--<span class="time">46 mins </span>--}}
                {{--</span>--}}
                {{--<span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                <!-- END INBOX DROPDOWN -->
                    <!-- BEGIN TODO DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                {{--<li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">--}}
                {{--<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">--}}
                {{--<i class="icon-calendar"></i>--}}
                {{--<span class="badge badge-default"> 3 </span>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu extended tasks">--}}
                {{--<li class="external">--}}
                {{--<h3>You have--}}
                {{--<span class="bold">12 pending</span> tasks</h3>--}}
                {{--<a href="app_todo.html">view all</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">--}}
                {{--<li>--}}
                {{--<a href="javascript:;">--}}
                {{--<span class="task">--}}
                {{--<span class="desc">New release v1.2 </span>--}}
                {{--<span class="percent">30%</span>--}}
                {{--</span>--}}
                {{--<span class="progress">--}}
                {{--<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">--}}
                {{--<span class="sr-only">40% Complete</span>--}}
                {{--</span>--}}
                {{--</span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:;">--}}
                {{--<span class="task">--}}
                {{--<span class="desc">Application deployment</span>--}}
                {{--<span class="percent">65%</span>--}}
                {{--</span>--}}
                {{--<span class="progress">--}}
                {{--<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">--}}
                {{--<span class="sr-only">65% Complete</span>--}}
                {{--</span>--}}
                {{--</span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:;">--}}
                {{--<span class="task">--}}
                {{--<span class="desc">Mobile app release</span>--}}
                {{--<span class="percent">98%</span>--}}
                {{--</span>--}}
                {{--<span class="progress">--}}
                {{--<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">--}}
                {{--<span class="sr-only">98% Complete</span>--}}
                {{--</span>--}}
                {{--</span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:;">--}}
                {{--<span class="task">--}}
                {{--<span class="desc">Database migration</span>--}}
                {{--<span class="percent">10%</span>--}}
                {{--</span>--}}
                {{--<span class="progress">--}}
                {{--<span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">--}}
                {{--<span class="sr-only">10% Complete</span>--}}
                {{--</span>--}}
                {{--</span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:;">--}}
                {{--<span class="task">--}}
                {{--<span class="desc">Web server upgrade</span>--}}
                {{--<span class="percent">58%</span>--}}
                {{--</span>--}}
                {{--<span class="progress">--}}
                {{--<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">--}}
                {{--<span class="sr-only">58% Complete</span>--}}
                {{--</span>--}}
                {{--</span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:;">--}}
                {{--<span class="task">--}}
                {{--<span class="desc">Mobile development</span>--}}
                {{--<span class="percent">85%</span>--}}
                {{--</span>--}}
                {{--<span class="progress">--}}
                {{--<span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">--}}
                {{--<span class="sr-only">85% Complete</span>--}}
                {{--</span>--}}
                {{--</span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:;">--}}
                {{--<span class="task">--}}
                {{--<span class="desc">New UI release</span>--}}
                {{--<span class="percent">38%</span>--}}
                {{--</span>--}}
                {{--<span class="progress progress-striped">--}}
                {{--<span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">--}}
                {{--<span class="sr-only">38% Complete</span>--}}
                {{--</span>--}}
                {{--</span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                <!-- END TODO DROPDOWN -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" class="img-circle" src="/files/{{ auth('backend')->user()->image }}" style="height: 29px; width: 29px" />
                            <span class="username username-hide-on-mobile"> {{ auth('backend')->user()->name }} </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="{{ url('admin/logout') }}">
                                    <i class="icon-key"></i> Đăng xuất </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-quick-sidebar-toggler">
                        <a href="{{ url('logout') }}" class="dropdown-toggle">
                            <i class="icon-logout"></i>
                        </a>
                    </li>
                    <!-- END QUICK SIDEBAR TOGGLER -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">

    @include('admin.nav')
    <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->

                <!-- BEGIN PAGE TITLE-->
            {{--<h1 class="page-title"> Mua đồ tốt quản trị--}}

            {{--</h1>--}}
            <!-- END PAGE TITLE-->
                <!-- END PAGE HEADER-->

                @yield('content')
                <div class="row">


                </div>
                <div class="row">

                </div>
                <div class="row">

                </div>
                <div class="row">

                </div>
                <div class="row">

                </div>
                <div class="row">
                </div>


                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->


        </div>
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner"> {{ \Carbon\Carbon::now()->year }} &copy; Admin viethouse24.com

        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- END FOOTER -->
</div>

<!--[if lt IE 9]>
<!--<script src="/assets/global/plugins/respond.min.js"></script>-->
<!--<script src="/assets/global/plugins/excanvas.min.js"></script>-->
<!--<script src="/assets/global/plugins/ie8.fix.min.js"></script>-->
{{--<![endif]-->--}}
<!-- BEGIN CORE PLUGINS -->

<script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>

<script>
    var baseUrl = '{{url('/admin')}}';
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
    });

</script>


<script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>

<link href="https://vjs.zencdn.net/5.16.0/video-js.css" rel="stylesheet">

<script src="/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="/assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<script src="/assets/global/plugins/moment.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>
<script src="/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
<script src="/assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
<script src="/assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
<script src="/assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
<script src="/assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
<script src="/assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
<script src="/assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
<script src="/assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
<script src="/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
<script src="/assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
<script src="/assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/horizontal-timeline/horizontal-timeline.js" type="text/javascript"></script>
<script src="/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>


<script src="/assets/global/plugins/highcharts/js/highcharts.js" type="text/javascript"></script>
<script src="/assets/global/plugins/highcharts/js/highcharts-3d.js" type="text/javascript"></script>
<script src="/assets/global/plugins/highcharts/js/highcharts-more.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="/assets/global/scripts/app.min.js" type="text/javascript"></script>


<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
<script src="/assets/apps/scripts/inbox.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>

<script src="/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js" type="text/javascript"></script>
<script src="/assets/pages/scripts/ui-sweetalert.min.js" type="text/javascript"></script>
<script src="/js/admin/ckeditor/ckeditor.js"></script>




<script src="/assets/pages/scripts/ui-modals.min.js" type="text/javascript"></script>
<!-- App scripts -->
@stack('firebase_scripts')
@stack('scripts')
<script>

    function strip_and_string(content)
    {
        var regex = /(<([^>]+)>)/ig
        var body = content+'';
        var result = body.replace(regex, "");

        var result2 = result+'';

        return result2.split('.').join("");
    }

    function numberWithDots(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    jQuery.fn.dataTableExt.oSort["string-nbr-asc"]  = function(x,y) {x = strip_and_string(x); y=strip_and_string(y); return ((parseInt(x.split('.').join("")) < parseInt(y.split('.').join(""))) ? -1 : ((parseInt(x.split('.').join("")) > parseInt(y.split('.').join(""))) ?  1 : 0));};

    jQuery.fn.dataTableExt.oSort["string-nbr-desc"] = function(x,y) {x = strip_and_string(x); y=strip_and_string(y);return ((parseInt(x.split('.').join("")) < parseInt(y.split('.').join(""))) ?  1 : ((parseInt(x.split('.').join("")) > parseInt(y.split('.').join(""))) ? -1 : 0));};

    $(document).ready(function() {
        //$('.ckedtior').ckeditor();



        $('#time_range').change(function() {

            var data = $(this).val();

            $.ajax({

                url: '{{ url('time-range') }}',
                type: 'get',
                data: {time_range: data},
                dataType: 'json',
                success: function(response)
                {
                    $('#start_time').val(response.start_time);
                    $('#end_time').val(response.end_time);
                }

            });
        });

        $('.select2').select2();
    });

    $(document).on('click', '.delete-btn', function(e) {
        e.preventDefault();

        var url = $(this).attr('href');

        bootbox.confirm({
            message: "Bạn có chắc chắn muốn xóa",
            buttons: {
                confirm: {
                    label: 'Có',
                    className: 'btn-success'
                },
                cancel: {
                    label: 'Không',
                    className: 'btn-danger'
                }
            },



            callback: function (result) {
                if(result == true)
                {
                    window.location.href = url;
                }
            }
        });
    });

    $(document).on('click', '.reset-mdt-password', function (e) {
        e.preventDefault();

        var id = $(this).attr('data-id');

        bootbox.confirm({
            message: "Bạn có chắc chắn muốn reset password mã mua đồ tốt này ?",
            buttons: {
                confirm: {
                    label: 'Có',
                    className: 'btn-success'
                },
                cancel: {
                    label: 'Không',
                    className: 'btn-danger'
                }
            },


            callback: function (result) {
                if (result == true) {
                    $.ajax({
                        'type': 'post',
                        'url': '{{ url('admin/reset-password-mdt') }}',
                        'data': {
                            'id': id,
                        },
                        success: function (response) {
                            bootbox.alert('Bạn đã reset password thành công')
                        }
                    });
                }
            }
        });
    });


</script>


<script>
    function slug(title, separator) {
        if(typeof separator == 'undefined') separator = '-';



        // Convert all dashes/underscores into separator
        var flip = separator == '-' ? '_' : '-';
        title = title.replace(flip, separator);

        // Remove all characters that are not the separator, letters, numbers, or whitespace.
        title = title.toLowerCase()
            .replace(new RegExp('[^a-z0-9' + separator + '\\s]', 'g'), '');

        //Đổi ký tự có dấu thành không dấu
        title = title.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        title = title.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        title = title.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        title = title.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        title = title.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        title = title.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        title = title.replace(/đ/gi, 'd');

        // Replace all separator characters and whitespace by a single separator
        title = title.replace(new RegExp('[' + separator + '\\s]+', 'g'), separator);

        return title.replace(new RegExp('^[' + separator + '\\s]+|[' + separator + '\\s]+$', 'g'),'');
    }

    function removeSpace(text)
    {
        return text.replace(/\s/g,'');
    }

    function ChangeToSlug(text)
    {

        //Đổi chữ hoa thành chữ thường
        slug = text.toLowerCase();

        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, " - ");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        return slug;
    }

  
</script>




</body>



<!-- Mirrored from keenthemes.com/preview/metronic/theme/admin_1_material_design/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Nov 2016 04:44:29 GMT -->
</html>