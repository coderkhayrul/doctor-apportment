<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Doctor - Admin Panel </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('template') }}/favicon.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('template/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/icon-kit/dist/css/iconkit.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/ionicons/dist/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet"
        href="{{asset('template/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/weather-icons/css/weather-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/c3/c3.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/owl.carousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/owl.carousel/dist/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/dist/css/theme.min.css')}}">
    <script src="{{asset('template/src/js/vendor/modernizr-2.8.3.min.js')}}"></script>


    @yield('custrom_style')
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="wrapper">
        <header class="header-top" header-theme="light">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <div class="top-menu d-flex align-items-center">
                        <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                        <div class="header-search">
                            <div class="input-group">
                                <span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
                                <input type="text" class="form-control">
                                <span class="input-group-addon search-btn"><i class="ik ik-search"></i></span>
                            </div>
                        </div>
                        <button type="button" id="navbar-fullscreen" class="nav-link"><i
                                class="ik ik-maximize"></i></button>
                    </div>
                    <div class="top-menu d-flex align-items-center">
                        <button type="button" class="nav-link ml-10 right-sidebar-toggle"><i
                                class="ik ik-message-square"></i><span class="badge bg-success">3</span></button>
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="ik ik-plus"></i></a>
                            <div class="dropdown-menu dropdown-menu-right menu-grid" aria-labelledby="menuDropdown">
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top"
                                    title="Dashboard"><i class="ik ik-bar-chart-2"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top"
                                    title="Message"><i class="ik ik-mail"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top"
                                    title="Accounts"><i class="ik ik-users"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top"
                                    title="Sales"><i class="ik ik-shopping-cart"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top"
                                    title="Purchase"><i class="ik ik-briefcase"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top"
                                    title="Pages"><i class="ik ik-clipboard"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top"
                                    title="Chats"><i class="ik ik-message-square"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top"
                                    title="Contacts"><i class="ik ik-map-pin"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top"
                                    title="Blocks"><i class="ik ik-inbox"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top"
                                    title="Events"><i class="ik ik-calendar"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top"
                                    title="Notifications"><i class="ik ik-bell"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top"
                                    title="More"><i class="ik ik-more-horizontal"></i></a>
                            </div>
                        </div>

                        <button type="button" class="nav-link ml-10" id="apps_modal_btn" data-toggle="modal"
                            data-target="#appsModal"><i class="ik ik-grid"></i></button>
                        <div class="dropdown">

                            <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                {{-- <img class="avatar" src="{{ asset('template') }}/img/user.jpg" alt=""> --}}
                                <strong>{{ Str::upper(auth()->user()->name) }}</strong>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.html"><i class="ik ik-user dropdown-icon"></i>
                                    Profile</a>
                                <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="dropdown-item" href="{{ route('logout') }}"><i
                                        class="ik ik-power dropdown-icon"></i>
                                    Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>
