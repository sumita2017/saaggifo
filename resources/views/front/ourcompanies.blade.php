@extends('layouts.frontlayout')
@section('content')
<!-- Begin Page Content -->

@php
@endphp
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Companies</h4>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active text-primary">Our Companies</li>
        </ol>
    </div>
</div>

<!-- Header End -->

<!-- Services Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-4"> Our Companies</h1>
        </div>
        <div class="row g-4 justify-content-center text-center">
            <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded">
                    <div class="service-img">
                        <img src="{{ URL::to('front') . "/img/" . 'sagitiles.jpg' }}" class="img-fluid w-100 rounded"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded">
                    <div class="service-img">
                        <img src="{{ URL::to('front') . "/img/" . 'mr hunk.jpg' }}" class="img-fluid w-100 rounded"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded">
                    <div class="service-img">
                        <img src="{{ URL::to('front') . "/img/" . 'building junction.jpg' }}"
                            class="img-fluid w-100 rounded-top" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Services End -->

@endsection