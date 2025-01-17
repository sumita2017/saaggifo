@extends('layouts.frontlayout')
@section('content')
<!-- Begin Page Content -->

@php
@endphp
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Group of Directors</h4>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active text-primary">Group of Directors</li>
        </ol>
    </div>
</div>

<!-- Header End -->

<!-- Team Start -->
<div class="container-fluid team pt-5 pb-5">
    <div class="container pb-5">

        <div class="row g-4 justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded">
                    <div class="team-img">
                        <img src="{{ URL::to('front') . "/img/" . 'team-2.png' }}" class="img-fluid w-100 rounded-top"
                            alt="Image">
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i
                                    class="fas fa-share-alt"></i></a>
                            <div class="team-icon-share">
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content bg-dark text-center rounded-bottom p-4">
                        <div class="team-content-inner rounded-bottom">
                            <h4 class="text-white">Mr. Kaaushik Kar</h4>
                            <p class="text-muted mb-0">CEO & Founder</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded">
                    <div class="team-img">
                        <img src="{{ URL::to('front') . "/img/" . 'team-1.png' }}" class="img-fluid w-100 rounded-top"
                            alt="Image">
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i
                                    class="fas fa-share-alt"></i></a>
                            <div class="team-icon-share">
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content bg-dark text-center rounded-bottom p-4">
                        <div class="team-content-inner rounded-bottom">
                            <h4 class="text-white">Mrs. Papia Kar</h4>
                            <p class="text-muted mb-0">Executive Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

@endsection