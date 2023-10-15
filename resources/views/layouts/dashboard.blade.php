@yield('meta')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Yaze Holidays - Dashboard</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

    <!-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" media="all"> -->

    <link href="{{ asset('css/dashboard/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/dashboard/plugins/perfectscroll/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/dashboard/plugins/pace/pace.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/dashboard/css/custom.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/dashboard/plugins/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="../css/dashboard/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../css/dashboard/plugins/pace/pace.css" rel="stylesheet">
    <link href="../css/dashboard/css/custom.css" rel="stylesheet">
    <link href="../css/dashboard/plugins/dropzone/min/dropzone.min.css" rel="stylesheet">

    <!-- Summernote -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <style>
        .note-frame {
            color: white !important;
        }

        .btn-sm i {
            margin-right: -7px !important;
            font-size: 10px !important;
        }

        .note-btn-group .note-btn {
            padding: .28rem 1.6500000000000004rem !important;
        }
    </style>

    <!-- Theme Styles -->
    <link href="../css/dashboard/css/main.min.css" rel="stylesheet">
    <link href="../css/dashboard/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="../images/dashboard/favicon.ico" />
    <link rel="icon" type="image/png" sizes="16x16" href="../images/dsahboard/favicon.ico" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="index.html" class="logo-icon"><span class="logo-text">Welcome!</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <img src="../images/dashboard/avatars/avatar.png">
                        <span class="activity-indicator"></span>
                        <span class="user-info-text">Yaze Holidays<br><span class="user-state-info">Online</span></span>
                    </a>
                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <!-- <li class="sidebar-title">
                        Apps
                    </li>

                    <li class="{{ Request::is('dashboard') ? 'active-page' : '' }}">
                        <a href="/dashboard"><i class="material-icons-two-tone">space_dashboard</i>Dashboard</a>
                    </li> -->

                    <li class="sidebar-title">
                        Menus
                    </li>

                    <li class="{{ Request::is('slider') ? 'active-page' : '' }}">
                        <a href="/slider"><i class="material-icons-two-tone">color_lens</i>Appearance</a>
                    </li>

                    <li class="{{ Request::is('cars') ? 'active-page' : '' }}">
                        <a href="/cars"><i class="material-icons-two-tone">directions_car</i>Cars</a>
                    </li>

                    <!-- <li class="{{ Request::is('products', 'catalogues') ? 'active-page' : '' }}">
                        <a href="/products"><i class="material-icons-two-tone">airport_shuttle</i>Cars<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li class="{{ Request::is('products') ? 'active-page' : '' }}">
                                <a href="/products" class="active">Cars List</a>
                            </li>
                            <li class="{{ Request::is('catalogues') ? 'active-page' : '' }}">
                                <a href="/catalogues" class="active">Catalogue</a>
                            </li>
                        </ul>
                    </li> -->

                    <!-- <li class="{{ Request::is('partnerships') ? 'active-page' : '' }}">
                        <a href="/partnerships"><i class="material-icons-two-tone">handshake</i>Partnership</a>
                    </li> -->

                    <li class="{{ Request::is('articles') ? 'active-page' : '' }}">
                        <a href="/articles"><i class="material-icons-two-tone">feed</i>Articles</a>
                    </li>

                    <li class="{{ Request::is('testimonials') ? 'active-page' : '' }}">
                        <a href="/testimonials"><i class="material-icons-two-tone">reviews</i>Testimonials</a>
                    </li>

                    <li class="{{ Request::is('informations') ? 'active-page' : '' }}">
                        <a href="/informations"><i class="material-icons-two-tone">info</i>Information</a>
                    </li>

                    <li class="sidebar-title">
                        Apps Information
                    </li>

                    <li class="{{ Request::is('versions') ? 'active-page' : '' }}">
                        <a href="/versions"><i class="material-icons-two-tone">fmd_bad</i>Version</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                                </li>
                            </ul>

                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link nav-notifications-toggle" id="notificationsDropDown" href="#" data-bs-toggle="dropdown">OP</a>
                                    <div class="dropdown-menu dropdown-menu-end notifications-dropdown" aria-labelledby="notificationsDropDown">
                                        <h6 class="dropdown-header">Notifications</h6>
                                        <div class="notifications-dropdown-list">
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge bg-info text-white">
                                                            <i class="material-icons-outlined">campaign</i>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p class="bold-notifications-text">Donec tempus nisi sed erat vestibulum, eu suscipit ex laoreet</p>
                                                        <small>19:00</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge bg-danger text-white">
                                                            <i class="material-icons-outlined">bolt</i>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p class="bold-notifications-text">Quisque ligula dui, tincidunt nec pharetra eu, fringilla quis mauris</p>
                                                        <small>18:00</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge bg-success text-white">
                                                            <i class="material-icons-outlined">alternate_email</i>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p>Nulla id libero mattis justo euismod congue in et metus</p>
                                                        <small>yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge">
                                                            <img src="../images/dashboard/avatars/avatar.png" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p>Praesent sodales lobortis velit ac pellentesque</p>
                                                        <small>yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge">
                                                            <img src="../images/dashboard/avatars/avatar.png" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p>Praesent lacinia ante eget tristique mattis. Nam sollicitudin velit sit amet auctor porta</p>
                                                        <small>yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr>
                                            <form action="{{ route('actionlogout') }}" method="GET" class="px-3">
                                                @csrf
                                                <button class="btn btn-danger" type="submit">Logout</button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            @yield('content')
        </div>
    </div>
    @yield('js')
    <!-- Javascripts -->
    <script src="../js/plugins/dashboard/jquery/jquery-3.5.1.min.js"></script>
    <script src="../js/plugins/dashboard/bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/plugins/dashboard/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="../js/plugins/dashboard/pace/pace.min.js"></script>
    <script src="../js/plugins/dashboard/apexcharts/apexcharts.min.js"></script>
    <script src="../js/plugins/dashboard/dropzone/min/dropzone.min.js"></script>
    <script src="../js/dashboard/main.min.js"></script>
    <script src="../js/dashboard/custom.js"></script>
    <script src="../js/dashboard/pages/dashboard.js"></script>
    <script src="../js/dashboard/pages/charts-chartjs.js"></script>

    <!-- Summernote -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script>
        //summernote di halaman create produk
        $('#summernote').summernote({
            placeholder: 'Tulis di sini !',
            tabsize: 1,
            height: 150
        });
    </script>

</body>

</html>