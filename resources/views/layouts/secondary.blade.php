@yield('meta')
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Yaze Holidays | @yield('title')</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Yaze Holidays - Perusahaan Travel yang melayani perjalanan Anda mengunjungi tempat-tempat yang tak akan terlupakan" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('css/dashboard/css/custom.css') }}" rel="stylesheet" type="text/css" media="all">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet" type="text/css" id="mdb">
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/coloring.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css">

    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-08.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kalam">
</head>

<body>
    <div id="wrapper">

        <!-- header begin -->
        <header class="transparent header-light scroll-light has-topbar">
            <div id="topbar" class="topbar-dark text-light">
                <div class="container">
                    <div class="topbar-left xs-hide">
                        <div class="topbar-widget">
                            <div class="topbar-widget"><a href="#"><i class="fa fa-phone"></i>+62 812-2282-0130</a></div>
                            <div class="topbar-widget"><a href="#"><i class="fa fa-envelope"></i>yazeholidays@gmail.com</a></div>
                            <div class="topbar-widget"><a href="#"><i class="fa fa-clock-o"></i>Mon - Fri 08.00 - 18.00</a></div>
                        </div>
                    </div>

                    <div class="topbar-right">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                            <!-- <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="#"><i class="fa fa-youtube fa-lg"></i></a>
                            <a href="#"><i class="fa fa-pinterest fa-lg"></i></a> -->
                            <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </header>
        <!-- header close -->

        @yield('content')

        @yield('footer')

        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        <footer class="text-light">
            <div class="container">
                <div class="row g-custom-x">
                    <div class="col-lg-4">
                        <div class="widget">
                            <h5>Yaze Holidays</h5>
                            <p>Kami adalah perusahaan travel yang melayani perjalanan domestik maupun internasional. </p>
                            <p>Fasilitas yang kami tawarkan adalah rent car + driver, hotel dan tiket reservation, paket wisata dan ziarah, wedding, perjalanan dinas, drop airport.</p>
                        </div>
                    </div>

                    <!-- <div class="col-lg-3">
                        <h5>Quick Links</h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="widget">
                                    <ul>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Partners</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="col-lg-4">
                        <div class="widget">
                            <div class="widget">
                                <h5>Social Network</h5>
                                <div class="social-icons">
                                    <a href="#"><i class="fa fa-facebook fa-lg mb-3"></i></a> |  Facebook<br>
                                    <a href="#"><i class="fa fa-instagram fa-lg mb-3"></i> |  Instagram</a>
                                    <!-- <a href="#"><i class="fa fa-twitter fa-lg"></i></a> -->
                                    <!-- <a href="#"><i class="fa fa-linkedin fa-lg"></i></a> -->
                                    <!-- <a href="#"><i class="fa fa-pinterest fa-lg"></i></a> -->
                                    <!-- <a href="#"><i class="fa fa-rss fa-lg"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="widget">
                            <h5>Contact Info</h5>
                            <address class="s1">
                                <span><i class="id-color fa fa-map-marker fa-lg"></i>Husein Sastranegara, Bandung Satu,<br> Jawa Barat, Indonesia, 40174</span>
                                <span><i class="id-color fa fa-phone fa-lg"></i>+62 812-2282-0130</span>
                                <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:yazeholidays@gmail.com">yazeholidays@gmail.com</a></span>
                                <!-- <span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span> -->
                            </address>
                            <h5>Google Maps</h5>
                            <div class="col-lg-4">
                                <div class="widget">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8880978821094!2d107.57534987034671!3d-6.903983252280009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e76ea2197b7b%3A0x83520de1be07f869!2sHusein%20Sastranegara%20International%20Airport%20(BDO)!5e0!3m2!1sen!2sid!4v1696050083430!5m2!1sen!2sid" width="250" height="175" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <a href="index.html">
                                        Copyright 2023 - Yaze Holidays by Humanoo.id
                                    </a>
                                </div>
                                <ul class="menu-simple">
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
    </div>

    @yield('js')
    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>

</body>

</html>