<!DOCTYPE html>
<html>
<head>
    @yield('addedMeta')
    <meta charset="utf-8"/>
    <title>Codefox - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Coderthemes" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- C3 charts css -->
    <link href="/plugins/c3/c3.min.css" rel="stylesheet" type="text/css"/>

    <!--Form Wizard-->
    <link rel="stylesheet" type="text/css" href="/plugins/jquery.steps/css/jquery.steps.css" />

    <!--Page CSS-->
    @yield('css')

    <!-- App css -->
    <link href="/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet"/>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/core.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/components.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/pages.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/menu.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/responsive.css" rel="stylesheet" type="text/css"/>

    <script src="/assets/js/modernizr.min.js"></script>

</head>


<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <!--<a href="index.html" class="logo"><span>Code<span>Fox</span></span><i class="mdi mdi-layers"></i></a>-->
            <!-- Image logo -->
            <a href="index.html" class="logo">
                        <span>
                            <img src="/assets/images/logo.png" alt="" height="20">
                        </span>
                <i>
                    <img src="/assets/images/logo_sm.png" alt="" height="28">
                </i>
            </a>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">

                <!-- Navbar-left -->
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <button type="button" class="button-menu-mobile open-left waves-effect">
                            <i class="dripicons-menu"></i>
                        </button>
                    </li>
                </ul>

                <!-- Right(Notification) -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden-xs">
                        <form role="search" class="app-search">
                            <input type="text" placeholder="Search..."
                                   class="form-control">
                            <a href="#"><i class="fa fa-search"></i></a>
                        </form>
                    </li>

                    <li class="dropdown user-box">
                        <a href="#" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown"
                           aria-expanded="true">
                            <img src="/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                            <li><a href="javascript:void(0)">Profile</a></li>
                            <li><a href="javascript:void(0)"><span class="badge badge-info pull-right">4</span>Settings</a>
                            </li>
                            <li><a href="javascript:void(0)">Lock screen</a></li>
                            <li class="divider"></li>
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </li>

                </ul> <!-- end navbar-right -->

            </div><!-- end container -->
        </div><!-- end navbar -->
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="slimscroll-menu" id="remove-scroll">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metisMenu nav" id="side-menu">
                    <li class="menu-title">Navigation</li>
                    <li>
                        <a href="/"><i class="fi-air-play"></i> <span> Dashboard </span> </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="true"><i class="fi-command"></i><span> Informasi </span>
                            <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level nav" aria-expanded="true">
                            <li><a href="/informasi/kriteria">Kriteria</a></li>
                            <li><a href="/informasi/beasiswa">Beasiswa</a></li>
                            <li><a href="/informasi/rekomendasi">Hasil Rekomendasi</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="true"><i class="fi-head"></i><span> Pendaftaran </span>
                            <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level nav" aria-expanded="true">
                            <li><a href="/personal">Data Diri</a></li>
                            <li><a href="/prestasi">Prestasi</a></li>
                            <li><a href="/organisasi">Organisasi</a></li>
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
    @yield('konten')
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
</div>
<!-- END wrapper -->


<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/metisMenu.min.js"></script>
<script src="/assets/js/waves.js"></script>
<script src="/assets/js/jquery.slimscroll.js"></script>
<script src="/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>

<!-- Counter js  -->
<script src="/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="/plugins/counterup/jquery.counterup.min.js"></script>

<!--C3 Chart-->
<script type="text/javascript" src="/plugins/d3/d3.min.js"></script>
<script type="text/javascript" src="/plugins/c3/c3.min.js"></script>

<!-- Dashboard init -->
<script src="/assets/pages/jquery.dashboard.js"></script>

<!-- App js -->
<script src="/assets/js/jquery.core.js"></script>
<script src="/assets/js/jquery.app.js"></script>

<!--Form Wizard-->
<script src="/plugins/jquery.steps/js/jquery.steps.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/plugins/jquery-validation/js/jquery.validate.min.js"></script>

<!--wizard initialization-->
@yield('script')
</body>

<!-- Mirrored from coderthemes.com/codefox_1.1/dark_1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Apr 2017 12:30:28 GMT -->
</html>