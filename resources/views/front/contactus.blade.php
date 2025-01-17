@extends('layouts.frontlayout')
@section('content')
<!-- Begin Page Content -->

@php
@endphp
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h4>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active text-primary">Contact Us</li>
        </ol>
    </div>
</div>

<!-- Header End -->

<!-- Contact Start -->
<div class="container-fluid contact bg-light py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="contact-item">
                    <div class="pb-5">
                        <h2 class="text-primary">Contact Us</h2>
                        <h1 class="display-4 mb-4">Get In Touch With Us</h1>
                        <p class="mb-0">The contact form is currently inactive. Get a functional and working contact
                            form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and
                            you're done. <a class="text-primary fw-bold"
                                href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-primary btn-lg-square rounded-circle p-4"><i class="fa fa-home text-white"></i>
                        </div>
                        <div class="ms-4">
                            <h4>Addresses 1</h4>
                            <p class="mb-0">20 R.N. Tagore Road, Dunlop, Kolkata 700056.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-primary btn-lg-square rounded-circle p-4"><i class="fa fa-home text-white"></i>
                        </div>
                        <div class="ms-4">
                            <h4>Addresses 2</h4>
                            <p class="mb-0">Uttar Bhag, Baruipur, South 24 Parganas.</p>
                        </div>
                    </div>


                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-primary btn-lg-square rounded-circle p-2"><i
                                class="fa fa-phone-alt text-white"></i></div>
                        <div class="ms-4">
                            <h4>Mobile</h4>
                            <p class="mb-0"><a href="tel:+918240993380"><i class="fas fa-phone me-2"></i>+91
                                    8240993380</a></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-primary btn-lg-square rounded-circle p-2"><i
                                class="fa fa-envelope-open text-white"></i></div>
                        <div class="ms-4">
                            <h4>Email</h4>
                            <p class="mb-0">hr@saaggifo.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                <form>
                    <div class="row g-3">
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="phone" class="form-control" id="phone" placeholder="Phone">
                                <label for="phone">Your Phone</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="project" placeholder="Project">
                                <label for="project">Your Project</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message"
                                    style="height: 160px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection