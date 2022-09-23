@extends('layouts.app')
@section('title', 'Legalitas Perusahaan')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url(assets/assets/img/breadcrumbs-bg.jpg);">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Legalitas Perusahaan</h2>
                <ol>
                    <li><a href="{{ route('front.index') }}">Home</a></li>
                    <li>Legalitas Perusahaan</li>
                </ol>

            </div>
        </div>


        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">

                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item">
                            <div class="portfolio-content h-100">
                                <img src="assets/assets/img/legalitas/l1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/assets/img/legalitas/l1.jpg" data-gallery="portfolio-gallery-remodeling"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item">
                            <div class="portfolio-content h-100">
                                <img src="assets/assets/img/legalitas/l2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/assets/img/legalitas/l2.jpg" data-gallery="portfolio-gallery-remodeling"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>

    </main>
@endsection
