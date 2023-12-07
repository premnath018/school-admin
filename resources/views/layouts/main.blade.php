<!DOCTYPE html>
<html lang="zxx">
    <!-- Mirrored from demo.dashboardpack.com/directory-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Dec 2023 12:34:34 GMT -->
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>@yield('title')</title>
        <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/167/167707.png" type="image/png" />

        <link rel="stylesheet" href="css/bootstrap1.min.css" />

        <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

        <link rel="stylesheet" href="vendors/swiper_slider/css/swiper.min.css" />

        <link rel="stylesheet" href="vendors/select2/css/select2.min.css" />

        <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

        <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />

        <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />

        <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
        <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

        <link rel="stylesheet" href="vendors/datepicker/date-picker.css" />

        <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
        <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
        <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />

        <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />

        <link rel="stylesheet" href="vendors/morris/morris.css" />

        <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

        <link rel="stylesheet" href="css/metisMenu.css" />

        <link rel="stylesheet" href="css/style1.css" />
        <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS" />
    </head>
    <body class="crm_body_bg">
        <nav class="sidebar">
            <div class="logo d-flex justify-content-between">
                <a href="/"><h2>School Admin</h2></a>
                <div class="sidebar_close_icon d-lg-none">
                    <i class="ti-close"></i>
                </div>
            </div>
            <ul id="sidebar_menu">
                <li class="mm">
                    <a class="active" href="/" aria-expanded="false">
                        <img src="img/menu-icon/dashboard.svg" alt />
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <img src="img/menu-icon/2.svg" alt />
                        <span>Students</span>
                    </a>
                    <ul>
                        <li><a href="/addStudent">Add Students</a></li>
                        <li><a href="/viewStudents">View Students</a></li>
                    </ul>
                </li>
                <li class>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <img src="img/menu-icon/3.svg" alt />
                        <span>Teachers</span>
                    </a>
                    <ul>
                        <li><a href="/addTeacher">Add Teachers</a></li>
                        <li><a href="/viewTeachers">View Teachers</a></li>
                    </ul>
                </li>
                <li class>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <img src="img/menu-icon/4.svg" alt />
                        <span>Class</span>
                    </a>
                    <ul>
                        <li><a href="/addClass">Add Class</a></li>
                        <li><a href="/viewClass">View Class</a></li>
                    </ul>
                </li>
                <li class>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <img src="img/menu-icon/5.svg" alt />
                        <span>Holidays</span>
                    </a>
                    <ul>
                        <li><a href="buttons.html">Publish Holiday</a></li>
                        <li><a href="/viewHolidays">View Holidays</a></li>
                    </ul>
                </li>
                <li class>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <img src="img/menu-icon/6.svg" alt />
                        <span>Notices</span>
                    </a>
                    <ul>
                        <li><a href="wow_animation.html">Publish Notices</a></li>
                        <li><a href="/viewNotices">View Notices</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <section class="main_content dashboard_part">
            <div class="container-fluid g-0">
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="header_iner d-flex justify-content-xxl-end align-items-">
                            <div class="sidebar_icon d-lg-none">
                                <i class="ti-menu"></i>
                            </div>
                         
                            <div class="header_right d-flex justify-content-xxl-end align-items-end">
                                <div class="profile_info">
                                    <img src="img/client_img.png" alt="#" />
                                    <div class="profile_info_iner">
                                        <div class="profile_author_name">
                                            <p>Admin</p>
                                            <h5>School Admin</h5>
                                        </div>
                                        <div class="profile_info_details">
                                            <a href="/logout">Log Out </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
          @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="main_content_iner">
            @section('main-body')   
            @show 
            </div>

            
        </section>


        <script src="js/jquery1-3.4.1.min.js"></script>

        <script src="js/popper1.min.js"></script>

        <script src="js/bootstrap1.min.js"></script>

        <script src="js/metisMenu.js"></script>

        <script src="vendors/count_up/jquery.waypoints.min.js"></script>

        <script src="vendors/chartlist/Chart.min.js"></script>

        <script src="vendors/count_up/jquery.counterup.min.js"></script>

        <script src="vendors/swiper_slider/js/swiper.min.js"></script>

        <script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>

        <script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>

        <script src="vendors/gijgo/gijgo.min.js"></script>

        <script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
        <script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
        <script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
        <script src="vendors/datatable/js/buttons.flash.min.js"></script>
        <script src="vendors/datatable/js/jszip.min.js"></script>
        <script src="vendors/datatable/js/pdfmake.min.js"></script>
        <script src="vendors/datatable/js/vfs_fonts.js"></script>
        <script src="vendors/datatable/js/buttons.html5.min.js"></script>
        <script src="vendors/datatable/js/buttons.print.min.js"></script>

        <script src="vendors/datepicker/datepicker.js"></script>
        <script src="vendors/datepicker/datepicker.en.js"></script>
        <script src="vendors/datepicker/datepicker.custom.js"></script>
        <script src="js/chart.min.js"></script>

        <script src="vendors/progressbar/jquery.barfiller.js"></script>

        <script src="vendors/tagsinput/tagsinput.js"></script>

        <script src="vendors/text_editor/summernote-bs4.js"></script>
        <script src="vendors/am_chart/amcharts.js"></script>
        <script src="vendors/apex_chart/apexcharts.js"></script>
        <script src="vendors/apex_chart/apex_realestate.js"></script>

        <script src="vendors/chart_am/core.js"></script>
        <script src="vendors/chart_am/charts.js"></script>
        <script src="vendors/chart_am/animated.js"></script>
        <script src="vendors/chart_am/kelly.js"></script>
        <script src="vendors/chart_am/chart-custom.js"></script>

        <script src="js/custom.js"></script>
        <script src="vendors/apex_chart/bar_active_1.js"></script>
        <script src="vendors/apex_chart/apex_chart_list.js"></script>
    </body>

</html>
