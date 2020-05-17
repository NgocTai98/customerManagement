<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Customer Management</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="shortcut icon" type="image/png" href="images/favicon.png"> --}}
    <base href="{{ asset('customer') }}/">
    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- bootstrap v3.3.7 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- swiper.min.css -->
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- font-awesome v4.6.3 css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- flaticon.css -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- magnific-popup.css -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- metisMenu.min.css -->
    <link rel="stylesheet" href="css/metisMenu.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
    <!-- header-area start -->
    <header class="header-area header-area3 header-area2">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-12">
                        <ul class="contact-info d-flex">
                            <li>
                                <span><i class="fa fa-phone"></i> +084 0823.540.888</span>
                                <span><i class="fa fa-fax"></i> +084 0787.201.089</span>
                            </li>
                            <li>
                                <span><i class="fa fa-envelope"></i> info@youremail.com</span>
                                <span><i class="fa fa-paper-plane-o"></i> www.yourwebsite.com</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-sm-4 col-12 d-none d-md-block">
                        <ul class="social-icon d-flex justify-content-end">
                            <li class="facebook"><a href="https://www.facebook.com/profile.php?id=100001878617726"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-7 col-12">
                        <div class="logo">
                            <a href="/">
                                {{-- <img src="images/logo3.png" alt=""> --}}
                                <h5>Tuân bđs Hải Phòng</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-9 d-none d-lg-block">
                        <ul class="mainmenu d-flex justify-content-end">
                            <li class="active"><a href="javascript:void(0);">Home <i class="fa fa-angle-down"></i></a>
                                <ul>
                                    <li><a href="/customer1">Quản lý khách hàng</a></li>
                                    <li><a href="/host">Quản lý chủ nhà</a></li>
                                    <li><a href="/list-product">Quản lý nguồn nhà</a></li>
                                </ul>
                            </li>
                            <li><a href="https://bannhahaiphong.com.vn/cong-ty-co-phan-dau-tu-cdt-hai-phong-ag0779379848.html">about us</a></li>
                            <li><a href="https://www.facebook.com/profile.php?id=100001878617726">pages</a>
                                {{-- <ul>
                                    <li><a href="service.html">Service Page</a></li>
                                    <li><a href="service-details.html">Service Details</a></li>
                                    <li><a href="shop.html">Shop page</a></li>
                                </ul> --}}
                            </li>
                            <li><a href="blog.html">blog</a>
                                {{-- <ul>
                                    <li><a href="blog.html">Blog page</a></li>
                                    <li><a href="blog-left.html">Blog Left</a></li>
                                    <li><a href="blog-right.html">Blog right</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul> --}}
                            </li>
                            <li><a href="/contact">contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-3 col-8">
                        <div class="geta_quote">
                            <a href="#">CONNECT</a>
                        </div>
                    </div>
                    <div class="d-block d-lg-none col-4 pull-right col-sm-2">
                        <ul class="menu">
                            <li class="first"></li>
                            <li class="second"></li>
                            <li class="third"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- responsive-menu area start -->
            <div class="responsive-menu-area d-block d-sm-none">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <ul class="metismenu">
                                <li class="sidemenu-items"><a class="has-arrow" aria-expanded="false" href="javascript:void(0);">Home</a>
                                    <ul aria-expanded="false">
                                        <li><a href="/customer1">Quản lý khách hàng</a></li>
                                        <li><a href="/host">Quản lý chủ nhà</a></li>
                                        <li><a href="/list-product">Quản lý nguồn nhà</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">about us</a></li>
                                <li class="sidemenu-items"><a class="has-arrow" aria-expanded="false" href="javascript:void(0);">pages</a>
                                    <ul aria-expanded="false">
                                        <li><a href="service.html">Service Page</a></li>
                                        <li><a href="service-details.html">Service Details</a></li>
                                        <li><a href="shop.html">Shop page</a></li>
                                    </ul>
                                </li>
                                <li class="sidemenu-items"><a class="has-arrow" aria-expanded="false" href="javascript:void(0);">blog</a>
                                    <ul aria-expanded="false">
                                        <li><a href="blog.html">Blog page</a></li>
                                        <li><a href="blog-left.html">Blog Left</a></li>
                                        <li><a href="blog-right.html">Blog right</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- responsive-menu area start -->
        </div>
        
    </header>
    <!-- header-area end -->

    

   @yield('content')

    <!-- footer-area start -->
    <footer class="footer-area">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-sm-6 col-12">
                        <div class="footer-widget footer-logo">
                            <img src="assets/images/logo2.png" alt="">
                            <p>Với mục tiêu và sứ mệnh mang lại sự hài lòng cho khách hàng và thúc đẩy tăng trưởng giá trị bất động sản Hải Phòng. Luôn luôn đặt lợi ích và quyền lợi của các nhà đầu tư lên hàng đầu ...</p>
                            <form action="#">
                                <input type="text" placeholder="Enter your email">
                                <button>subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer-widget footer-menu">
                            <h3>Our Services</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Bất động sản thổ cư</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Bất động sản nghỉ dưỡng</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Bất động sản đấu giá</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Đất nền</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Shop house</a></li>
                                {{-- <li><a href="#"><i class="fa fa-angle-double-right"></i> Business Consulting</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer-widget footer-twitter">
                            <h3>Facebook Feeds</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i> https://www.facebook.com/profile.php?id=100001878617726</a> </li>
                                <li class="mb-0"><a href="#"><i class="fa fa-facebook"></i> https://www.facebook.com/profile.php?id=100001878617726</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer-widget footer-contact">
                            <h3>Contact Information</h3>
                            <ul class="footer-contact-info">
                                <li><span>Location: </span> Quận Hồng Bàng, TP Hải Phòng</li>
                                <li><span>Email: </span> exampleemail.com</li>
                                <li><span>Phone: </span> +084 0823.540.888</li>
                            </ul>
                            <h5>We are Social</h5>
                            <ul class="social-icon d-flex">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12 copyright">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area end -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-2.2.4.min.js "></script>
    <!-- popper.min.js -->
    <script src="js/vendor/popper.min.js "></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js "></script>
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <script src="js/owl.carousel.min.js "></script>
    <!-- swiper.min.js -->
    <script src="js/swiper.min.js "></script>
    <!-- mailchimp.js -->
    <script src="js/mailchimp.js"></script>
    <!-- plugins js -->
    <script src="js/jquery.canvasjs.min.js"></script>
    <!-- metisMenu.min.js -->
    <script src="js/metisMenu.min.js"></script>
    <!-- plugins js -->
    <script src="js/plugins.js "></script>
    <script>
            // chart
    window.onload = function () {
    var limit = 10000;    //increase number of dataPoints by increasing the limit
    var y = 100;    
    var data = [];
    var dataSeries = { type: "line" };
    var dataPoints = [];
    for (var i = 0; i < limit; i += 1) {
        y += Math.round(Math.random() * 10 - 5);
        dataPoints.push({
            x: i,
            y: y
        });
    }
    dataSeries.dataPoints = dataPoints;
    data.push(dataSeries);

    //Better to construct options first and then pass it as a parameter
    var options = {
        zoomEnabled: true,
        animationEnabled: true,
        axisY: {
            includeZero: false
        },
        data: data  // random data
    };

        $("#chartContainer").CanvasJSChart(options);
    }
    </script>
    <!-- main js -->
    <script src="js/scripts.js "></script>
</body>

</html>