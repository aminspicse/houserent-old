<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'HRentSolution') }}</title>

    <!-- Bootstrap -->
    <link href="{{ asset('public/admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('public/admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('public/admin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">

    <!-- iCheck -->
    <link href="{{ asset('public/admin/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('public/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}"
        rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('public/admin/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('public/admin/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="{{ asset('public/admin/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css')}}"
        rel="stylesheet" />

    <!-- Custom Theme Style -->
    <link href="{{ asset('public/admin/build/css/custom.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col menu_fixed">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i>
                            <span>{{config('app.name')}}</span></a>
                    </div>
                    
                    <div class="clearfix"></div>
                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            @if(Auth::user()->role_id == 1)
                                <!-- Admin Option -->
                                <h3>Admin</h3>
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="{{url('/admin/create')}}">Create Post</a></li>
                                            <li><a href="http://localhost/houserent/welcome2">Dashboard2</a></li>
                                            <li><a href="index3.html">Dashboard3</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="form.html">General Form</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            @elseif(Auth::user()->role_id == 2)
                                <!-- Agent Option -->
                                <h3>Agent</h3>
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="{{url('/agent/create')}}">Create Post</a></li>
                                            <li><a href="http://localhost/houserent/welcome2">Dashboard2</a></li>
                                            <li><a href="index3.html">Dashboard3</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="form.html">General Form</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            @elseif(Auth::user()->role_id == 3)
                                <!-- User Option -->
                                <h3>User</h3>
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="{{url('/admin/create')}}">Create Post</a></li>
                                            <li><a href="http://localhost/houserent/welcome2">Dashboard2</a></li>
                                            <li><a href="index3.html">Dashboard3</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="form.html">General Form</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            @endif
                        </div>
                    </div>
                    <!-- /sidebar menu -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav fixed-top">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{{asset('public/build/images/img.jpg')}}" alt="">{{Auth::user()->name}}
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:;"> Profile</a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">Help</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out pull-right"></i>
                                        {{ __('Logout') }}

                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <style>
                .contenttop {
                    margin-top: 50px;
                }
            </style>
            <div class="right_col" role="main">
                <div class="contenttop">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('public/admin/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('public/admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('public/admin/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{ asset('public/admin/vendors/nprogress/nprogress.js')}}"></script>
    <!-- jQuery custom content scroller -->
    <script
        src="{{ asset('public/admin/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('public/admin/build/js/custom.min.js')}}"></script>
</body>

</html>