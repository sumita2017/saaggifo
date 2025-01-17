@extends('layouts.frontlayout')
@section('content')
<!-- Begin Page Content -->

@php
@endphp
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Business</h4>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active text-primary">Our Business</li>
        </ol>
    </div>
</div>

<!-- Header End -->

<!-- Testimonial Start -->
<div class="container-fluid testimonial bg-light py-5">
    <div class="container py-5">
        <div class="row g-4 align-items-center">
            <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="h-100 rounded">
                    <h2 class="text-primary">Our Business</h2>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="testimonial-carousel featuredproducts owl-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="d-flex">
                            <img src="{{ URL::to('front') . "/img/" . 'mission images_04.jpg' }}"
                                class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="my-auto text-end">
                                <h5>Tiles</h5>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="d-flex">
                            <img src="{{ URL::to('front') . "/img/" . 'mission images_05.jpg' }}"
                                class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="my-auto text-end">
                                <h5>Tiles Adhesive</h5>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="d-flex">
                            <img src="{{ URL::to('front') . "/img/" . 'mission images_03.jpg' }}"
                                class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="my-auto text-end">
                                <h5>Sanitaryware</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

@endsection