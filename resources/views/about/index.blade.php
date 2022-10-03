@extends('layouts.app')
@section('title', 'About')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url(assets/assets/img/breadcrumbs-bg.jpg);">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>About</h2>
                <ol>
                    <li><a href="{{ route('front.index') }}">Home</a></li>
                    <li>About</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                    <div class="col-lg-7 about-img"
                        style="background-image: url(assets/assets/img/project/Jasa-Rangka.jpg);"></div>

                    <div class="col-lg-7">
                        <h2>PT. THREE PUTERA BANTEN INDONESIA</h2>
                        <div class="our-story">
                            <h4>Est 2022</h4>
                            <h3>Our Story</h3>
                            <p>Berdiri sejak tahun sesuai dengan Akta Perseroan no. 41 tanggal 09 September 2022 yang dibuat
                                dihadapan notaris DR. Hj. HASANAWATI JUWENI SHANDE, SH.M.Kn dengan SK Menkumham Nomor ;
                                AHU-0062843.AH.01.01.TAHUN 2022.</p>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> <span>Badan usaha yang bergerak dibidang General
                                        Contractor, General Suplier, General Trade & Pertambangan.</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>Dikelola oleh para ahli dibidangnya merupakan
                                        jenis usaha yang mengedepankan kualitas layanan terhadap kepuasan pelanggan.</span>
                                </li>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 img-bg" style="background-image: url(assets/assets/img/project/Jasa-Rangka.jpg);"
                        data-aos="zoom-in" data-aos-delay="100"></div>


                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>PT. Three Putera Banten Indonesia</h3>
                        <h2><strong>VISI DAN MISI</strong></h2>
                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                            {{--  <i class="bi bi-easel flex-shrink-0"></i>  --}}
                            <div>
                                <h4><a href="" class="stretched-link">VISI</a></h4>
                                <p>Menjadi Perusahaan yang berkomitmen dalam pembangunan yang handal untuk menghasilkan
                                    pekerjaan yang berkualitas dengan memberikan pelayanan yang maksimal serta menjaga
                                    keselamatan kerja dan peduli terhadap pengembangan Sumber daya Manusia dan sangat peduli
                                    dengan lingkungan.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                            {{--  <i class="bi bi-patch-check flex-shrink-0"></i>  --}}
                            <div>
                                <h4><a href="" class="stretched-link">Misi</a></h4>
                                <ul>
                                    <li>
                                        <span>Mengoptimalkan sumeber daya manusia dengan azas profesionalisme dalam menjawab
                                            tantangan.</span>
                                    </li>
                                    <li>
                                        <span>Menjaga kualitas dan mutu pekerjaan dalam memberikan kepercayaan kepada
                                            Coustomer.</span>
                                    </li>
                                    <li>
                                        <span>Memerikan konsultasi kepada coustamer untuk memberikan rasa aman dan nyaman
                                            dalam
                                            hasil pekerjaan.</span>
                                    </li>
                                    <li>
                                        <span>Meningkatkan daya saing perusahaan dengan mengembangkan pelayanan terbaik
                                            kepada
                                            Coustomer.</span>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter section-bg">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Projects</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-headset color-green flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Hours Of Support</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-people color-pink flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Hard Workers</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>
        </section><!-- End Stats Counter Section -->

        <!-- ======= Alt Services Section ======= -->
        {{-- <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 img-bg" style="background-image: url(assets/assets/img/alt-services.jpg);"
                        data-aos="zoom-in" data-aos-delay="100"></div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
                        <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima
                            temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-easel flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                    occaecati cupiditate non provident</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-patch-check flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum deleniti atque</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                                <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut
                                    deserunt minus aut eligendi omnis</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Tride clov</a></h4>
                                <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non
                                    aspernatur odit amet. Et eligendi</p>
                            </div>
                        </div><!-- End Icon Box -->

                    </div>
                </div>

            </div>
        </section> --}}
        <!-- End Alt Services Section -->

        <!-- ======= Alt Services Section 2 ======= -->
        {{-- <section id="alt-services-2" class="alt-services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>Non quasi officia eum nobis et rerum epudiandae rem voluptatem</h3>
                        <p>Maxime quia dolorum alias perspiciatis. Earum voluptatem sint at non. Ducimus maxime minima iste
                            magni sit praesentium assumenda minus. Amet rerum saepe tempora vero.</p>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-easel flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                    occaecati cupiditate non provident</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-patch-check flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum deleniti atque</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                                <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut
                                    deserunt minus aut eligendi omnis</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Tride clov</a></h4>
                                <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non
                                    aspernatur odit amet. Et eligendi</p>
                            </div>
                        </div><!-- End Icon Box -->
                    </div>

                    <div class="col-lg-6 img-bg" style="background-image: url(assets/assets/img/alt-services-2.jpg);"
                        data-aos="zoom-in" data-aos-delay="100"></div>
                </div>

            </div>
        </section> --}}
        <!-- End Alt Services Section 2 -->

        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Team</h2>
                    <p>PT. THREE PUTERA BANTEN INDONESIA</p>
                </div>

                <div class="row gy-5">

                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/assets/img/team/team-1.png" class="img-fluid" alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Rafli Fallah</h4>
                            <span>Direktur Utama</span>
                            <p>Jika kau tidak meraskan getir pahitnya perjuangan ,maka kesuksesan tidak akan menemuimu</p>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="assets/assets/img/team/team-2.png" class="img-fluid" alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Mohamad Awalludin</h4>
                            <span>Direktur Keuangan</span>
                            <p>Peluang nyata untuk sukses terletak di dalam diri seseorang dan bukan pada pekerjaannya</p>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="assets/assets/img/team/team-4.png" class="img-fluid" alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Haryadi</h4>
                            <span>Direktur Operasional</span>
                            <p> Jika kamu tidak berjuang untuk mendapatkan apa yang kamu inginkan, maka jangan menangis
                                untuk apa yang tidak kamu dapatkan</p>
                        </div>
                    </div><!-- End Team Member -->


                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/assets/img/team/team-3.png" class="img-fluid" alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Mulyanto</h4>
                            <span>Komisaris</span>
                            <p>Usaha dan keberanian tidak cukup tanpa adanya tujuan dan arah perencanaan</p>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
                        <div class="member-img">
                            <img src="assets/assets/img/team/team-5.png" class="img-fluid" alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Muhamad Fikri Haikal</h4>
                            <span>Komisaris</span>
                            <p>Sering berpikir negatif akan menyebabkan semua impian besarmu akan terbakar</p>
                        </div>
                    </div><!-- End Team Member -->

                    {{-- <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
                        <div class="member-img">
                            <img src="assets/assets/img/team/team-6.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Josepha Palas</h4>
                            <span>Operation</span>
                            <p>Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit
                                eligendi cupiditate vel</p>
                        </div>
                    </div><!-- End Team Member --> --}}

                </div>

            </div>
        </section><!-- End Our Team Section -->

        <!-- ======= Testimonials Section ======= -->
        {{--  @include('layouts.testi')  --}}
        <!-- End Testimonials Section -->

        <section id="services-cards" class="services-cards">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">
                    <div class="col-lg-12 col-md-12" data-aos="zoom-in" data-aos-delay="200">
                        <h1 class="text-center">You're in good' company.</h1>
                        <div class="row">
                            <div class="col">
                                <ul class="list-unstyled">
                                    <li>
                                        <img src="assets/assets/img/legalitas/par1.png" class="img-fluid" alt="">
                                    </li>
                                    <li>

                                        <img src="assets/assets/img/project/ptpgp.jpg" class="img-fluid" alt="">
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="list-unstyled">
                                    <li>
                                        <img src="assets/assets/img/project/pltulabuan.jpg" class="img-fluid"
                                            alt="">
                                    </li>
                                    <li>

                                        {{-- <img src="assets/assets/img/legalitas/par1.png" class="img-fluid" alt=""> --}}
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="list-unstyled">
                                    <li>
                                        {{-- <img src="assets/assets/img/legalitas/par1.png" class="img-fluid" alt=""> --}}
                                    </li>
                                    <li>

                                        {{-- <img src="assets/assets/img/legalitas/par1.png" class="img-fluid" alt=""> --}}
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="list-unstyled">
                                    <li>
                                        {{-- <img src="assets/assets/img/legalitas/par1.png" class="img-fluid" alt=""> --}}
                                    </li>
                                    <li>

                                        {{-- <img src="assets/assets/img/legalitas/par1.png" class="img-fluid" alt=""> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End feature item-->

                </div>

            </div>
        </section>
    </main>
@endsection
