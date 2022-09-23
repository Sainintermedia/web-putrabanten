@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')
    <main id="main">


        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url(assets/assets/img/breadcrumbs-bg.jpg);">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Contact Us</h2>
                <ol>
                    <li><a href="{{ route('front.index') }}">Home</a></li>
                    <li>Contact Us</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->


        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-map"></i>
                            <h3>Our Address</h3>
                            <p>Jl. Raya Cilegon, Serdang, Kec. Kramatwatu, Kabupaten Serang, Banten</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p>contact@example.com</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>
                <div class="row gy-4 mt-1">

                    <div class="col-lg-12 ">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.6995479999737!2d106.08094592853237!3d-6.035905346946695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418dcacda4da81%3A0x5d4d8ad5a3ecca0!2sJl.%20Raya%20Cilegon%2C%20Serdang%2C%20Kec.%20Kramatwatu%2C%20Kabupaten%20Serang%2C%20Banten%2042616!5e0!3m2!1sid!2sid!4v1663918677680!5m2!1sid!2sid"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div><!-- End Google Maps -->

                    {{--  <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row gy-4">
                                <div class="col-lg-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>  --}}
                    <!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
