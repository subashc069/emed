<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css')}}">
    <link href="{{ asset('assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <x-backend.logo/>
            <nav class="navbar-custom">
                <ul class="navbar-right d-flex list-inline float-right mb-0">
                    <li class="dropdown notification-list">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>    
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect"><i class="mdi mdi-menu"></i></button>
                    </li>
                    <li class="d-none d-sm-block">
                        <div class="dropdown pt-3 d-inline-block"><a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Create</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a></div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Top Bar End -->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Main</li>
                        <x-backend.side-bar-link label="Dashboard" link="dashboard" />
                        <li><a href="calendar.html" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span> Calendar</span></a></li>
                        <li><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email-outline"></i><span> Email <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                                <li><a href="email-inbox.html">Inbox</a></li>
                                <li><a href="email-read.html">Email Read</a></li>
                                <li><a href="email-compose.html">Email Compose</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -left -->
        </div>
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            
            <!-- content -->
            @yield('content')

            <footer class="footer">© 2018 - 2019 Lexa - <span class="d-none d-sm-inline-block">Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>.</footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    {{-- end wrapper here --}}

    <!-- jQuery  -->
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/metisMenu.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{ asset('assets/js/waves.min.js')}}"></script>
    <script src="{{ asset('plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Morris Chart-->
    <script src="{{ asset('plugins/morris/morris.min.js')}}"></script>
    <script src="{{ asset('plugins/raphael/raphael-min.js')}}"></script>
    <script src="{{ asset('assets/pages/dashboard.js')}}"></script>
    <!-- App js -->
    <script src="{{ asset('assets/js/app.js')}}"></script> 
</body>
</html>