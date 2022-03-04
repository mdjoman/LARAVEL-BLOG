<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sailor Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/')}}e-info/{{ asset('/')}}e-info/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('/')}}e-info/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=IBM+Plex+Serif:wght@300&family=Lora&family=Noto+Serif&family=Padauk&family=Playfair+Display&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('/')}}e-info/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{ asset('/')}}e-info/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/')}}e-info/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('/')}}e-info/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('/')}}e-info/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('/')}}e-info/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('/')}}e-info/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ asset('/')}}e-info/assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('/')}}e-info/assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('/')}}e-info/assets/css/style.css" rel="stylesheet">



<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top pt-4">
        <div class="container-fluid ">

            <a href="index.html" class="logo header-logo"><img src="{{ asset('/')}}e-info/assets/img/logo.png" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar float-end header-social-icon">
                <ul>
                    <li><a href="index.html" class="active">Home</a></li>

                    <li class="dropdown"><a href="#"><span>About</a>
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>

                            <li class="dropdown"><a href="#"><span>Deep Drop Dow</a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="blog.html">Blog</a></li>

                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="index.html" class="getstarted">Get Started</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>

    <!-- End Header -->

    @yield('body')

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="footer-info">
                            <h3>Sailor</h3>
                            <p>
                                A108 Adam Street <br> NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6  footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Sailor</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/')}}e-info/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/')}}e-info/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('/')}}e-info/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('/')}}e-info/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('/')}}e-info/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('/')}}e-info/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ asset('/')}}e-info/assets/vendor/owlcarousel/jquery.min.js"></script>
    <script src="{{ asset('/')}}e-info/assets/vendor/owlcarousel/owl.carousel.js"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('/')}}e-info/assets/js/main.js"></script>
    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
              
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,

                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false
                    }
                }
            });
            $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [1000])
              })
              $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
              })
        })
    </script>
</body>

</html>