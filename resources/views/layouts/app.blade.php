<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title') | PT. Three Putera Banten Indonesia</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ URL::asset('assets/assets/img/logotitle.png') }}" rel='shortcut icon'>
    <link href="{{ URL::asset('assets/assets/img/logotitle.png') }}" rel='shortcut icon'>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">


    <link href="{{ URL::asset('assets/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ URL::asset('assets/assets/css/main.css') }}" rel="stylesheet">

</head>

<body>


    @include('layouts.header')


    @yield('content')


    <footer id="footer" class="footer">

        <div class="footer-content position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 footer-links">
                        {{-- <h4>Useful Links</h4> --}}
                        <img src="{{ URL::asset('assets/assets/img/logotitle.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h4>PT. THREE PUTERA BANTEN INDONESIA</h4>
                            <p>Jalan Raya Serang Jakarta KM.64 <br>
                                Parigi, Kec. Cikande, Kabupaten Serang, Banten. <br> <br>
                                <strong>Phone:</strong> +62 813 8118 5922<br>
                                <strong>...........</strong> +62 813 1000 0394<br>
                                <strong>Email:</strong> threeputerabantenindonesia@gmail.com<br>
                            </p>
                            {{--  <div class="social-links d-flex mt-3">
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-twitter"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-linkedin"></i></a>
                            </div>  --}}
                        </div>
                    </div>

                    {{-- <div class="col-lg-8 col-md-8 footer-links">
                        <div class="card rounded-0 text-bg-white">
                            <div class="card-body">
                                <h4 class="text-dark">Partner Perusahaan</h4>
                                <div class="row">
                                    <div class="col">
                                        <ul>
                                            <li>
                                                <div class="col-lg col-md portfolio-item">
                                                    <div class="portfolio-content h-100">
                                                        <img src="assets/assets/img/legalitas/par1.png"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-lg col-md portfolio-item">
                                                    <div class="portfolio-content h-100">
                                                        <img src="assets/assets/img/legalitas/par1.png"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li>
                                                <div class="col-lg col-md portfolio-item">
                                                    <div class="portfolio-content h-100">
                                                        <img src="assets/assets/img/legalitas/par1.png"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-lg col-md portfolio-item">
                                                    <div class="portfolio-content h-100">
                                                        <img src="assets/assets/img/legalitas/par1.png"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li>
                                                <div class="col-lg col-md portfolio-item">
                                                    <div class="portfolio-content h-100">
                                                        <img src="assets/assets/img/legalitas/par1.png"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-lg col-md portfolio-item">
                                                    <div class="portfolio-content h-100">
                                                        <img src="assets/assets/img/legalitas/par1.png"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li>
                                                <div class="col-lg col-md portfolio-item">
                                                    <div class="portfolio-content h-100">
                                                        <img src="assets/assets/img/legalitas/par1.png"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-lg col-md portfolio-item">
                                                    <div class="portfolio-content h-100">
                                                        <img src="assets/assets/img/legalitas/par1.png"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li>
                                                <div class="col-lg col-md portfolio-item">
                                                    <div class="portfolio-content h-100">
                                                        <img src="assets/assets/img/legalitas/par1.png"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-lg col-md portfolio-item">
                                                    <div class="portfolio-content h-100">
                                                        <img src="assets/assets/img/legalitas/par1.png"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div> --}}

                    {{-- <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Product Management</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Hic solutasetp</h4>
                        <ul>
                            <li><a href="#">Molestiae accusamus iure</a></li>
                            <li><a href="#">Excepturi dignissimos</a></li>
                            <li><a href="#">Suscipit distinctio</a></li>
                            <li><a href="#">Dilecta</a></li>
                            <li><a href="#">Sit quas consectetur</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Nobis illum</h4>
                        <ul>
                            <li><a href="#">Ipsam</a></li>
                            <li><a href="#">Laudantium dolorum</a></li>
                            <li><a href="#">Dinera</a></li>
                            <li><a href="#">Trodelas</a></li>
                            <li><a href="#">Flexo</a></li>
                        </ul>
                    </div> --}}

                </div>
            </div>
        </div>

        <div class="footer-legal text-center position-relative">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>PT. THREE PUTERA BANTEN INDONESIA</span></strong>
                </div>
                <div class="credits">Designed by <a
                        href="https://instagram.com/sain.intermedia?igshid=YmMyMTA2M2Y=">SAIN INTERMEDIA</a>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ URL::asset('assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('assets/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ URL::asset('assets/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ URL::asset('assets/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('assets/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('assets/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ URL::asset('assets/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ URL::asset('assets/assets/js/main.js') }}"></script>

</body>

</html>
