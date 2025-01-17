@extends('layouts.frontlayout')
@section('content')
<!-- Begin Page Content -->

@php
@endphp

<!-- Carousel Start -->
<div class="header-carousel owl-carousel">
    <div class="header-carousel-item">
        <div class="header-carousel-item-img-1">
            <img src="{{ URL::to('front') . "/img/" . 'carousel-1.jpg' }}" class="img-fluid w-100" alt="Image">
        </div>
        <div class="carousel-caption">
            <div class="carousel-caption-inner text-start p-3">
                <a class="btn btn-primary  py-3 px-5 mb-4 me-4 fadeInUp animate__animated" data-animation="fadeInUp"
                    data-delay="1.5s" style="animation-delay: 1.7s;" href="{{ URL::to('saggitech') }}">Saggitect
                </a>
                <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated"
                    data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">"WE'RE CHANGING THE WORLD
                    WITH TECHNOLOGY"-Bill Gates</h1>
                <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s"
                    style="animation-delay: 1.5s;">
                </p>
            </div>
        </div>
    </div>
    <div class="header-carousel-item mx-auto">
        <div class="header-carousel-item-img-2">
            <img src="{{ URL::to('front') . "/img/" . 'debdutta.jpeg' }}" class="img-fluid w-100" alt="Image">
        </div>
        <div class="carousel-caption">
            <div class="carousel-caption-inner text-start p-3">
                <a class="btn btn-primary  py-3 px-5 mb-4 me-4 fadeInUp animate__animated" data-animation="fadeInUp"
                    data-delay="1.5s" style="animation-delay: 1.7s;" href="{{ URL::to('debdutta-digital') }}">Debdutta
                    Digital
                </a>
                <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated"
                    data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">Achariya Debdutta</h1>

                <h2 class="text-white"> Globally Acclaimed Astrologer, Vastu Influencer,Life Coach, Success Guru</h2>

                <a type="button" href="https://astroachariyadebdutta.com"
                    class="btn py-3 px-5 mb-4 me-4 fadeInUp animate__animated achariyabutton">Your Journey Begins
                    Here</a>
                <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s"
                    style="animation-delay: 1.5s;">
                </p>
            </div>
        </div>
    </div>
    <div class="header-carousel-item mx-auto">
        <div class="header-carousel-item-img-2">
            <img src="{{ URL::to('front') . "/img/" . 'newsprimenowbanner.jpeg' }}" class="img-fluid w-100" alt="Image">
        </div>
        <div class="carousel-caption">
            <div class="carousel-caption-inner text-start p-3">
                <a class="btn btn-primary  py-3 px-5 mb-4 me-4 fadeInUp animate__animated" data-animation="fadeInUp"
                    data-delay="1.5s" style="animation-delay: 1.7s;" href="{{ URL::to('news-prime-now') }}">News Prime
                    now
                </a>
                <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated"
                    data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">Stay informed, stay
                    empowered—knowledge is the key to understanding the world.</h1>
                <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s"
                    style="animation-delay: 1.5s;">
                </p>
            </div>
        </div>
    </div>
    <div class="header-carousel-item mx-auto">
        <div class="header-carousel-item-img-2">
            <img src="{{ URL::to('front') . "/img/" . 'carousel-2.jpg' }}" class="img-fluid w-100" alt="Image">
        </div>
        <div class="carousel-caption">
            <div class="carousel-caption-inner text-start p-3">
                <a class="btn btn-primary  py-3 px-5 mb-4 me-4 fadeInUp animate__animated" data-animation="fadeInUp"
                    data-delay="1.5s" style="animation-delay: 1.7s;" href="{{ URL::to('building-junction') }}">Building
                    Juction
                </a>
                <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated"
                    data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">ONE SOLUTION FOR EVERY
                    HOME</h1>
                <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s"
                    style="animation-delay: 1.5s;">
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- count Start -->
<div class="container-fluid counter bg-dark">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4 text-center align-items-center justify-content-center">
                <div class="col-sm-3">
                    <div class="bg-dark rounded p-4">
                        <div class="d-flex align-items-center justify-content-center"><i
                                class="fa fa-box-open text-30"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value fs-1 text-white" data-toggle="counter-up">500</span>
                            <h4 class="text-white fs-1 mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                        </div>
                        <div class="w-100 d-flex align-items-center justify-content-center">
                            <p class="mb-0">Product Range</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="bg-dark rounded p-4">
                        <div class="d-flex align-items-center justify-content-center"><i
                                class="fa fa-thumbs-up text-30"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value fs-1 text-white" data-toggle="counter-up">10,000</span>
                        </div>
                        <div class="w-100 d-flex align-items-center justify-content-center">
                            <p class="mb-0">HAPPY CLIENTS</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="bg-dark rounded p-4">
                        <div class="d-flex align-items-center justify-content-center"><i
                                class="fa fa-handshake text-30"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value fs-1 text-white" data-toggle="counter-up">70</span>
                            <h4 class="text-white fs-1 mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                        </div>
                        <div class="w-100 d-flex align-items-center justify-content-center">
                            <p class="mb-0">DEALERS</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="bg-dark rounded p-4">
                        <div class="d-flex align-items-center justify-content-center"><i
                                class="fa fa-building text-30"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value fs-1 text-white" data-toggle="counter-up">5</span>
                            <h4 class="text-white fs-1 mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                        </div>
                        <div class="w-100 d-flex align-items-center justify-content-center">
                            <p class="mb-0">OUTLETS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About Start -->
<div class="container-fluid about bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                <h3><span class="text-dark">WHO WE </span><span class="text-primary">ARE</span></h3>
                <p class="text ps-4 mb-4">Saaggifo Group is a dynamic, multi-faceted company that specializes in
                    technology, design, and media services to help businesses and individuals thrive in the digital age.
                    Their core offerings include:

                    Software Development: Custom mobile apps, websites, SEO strategies, and server solutions.
                    Social Media Infrastructure & Content: Management of successful digital platforms and expert
                    guidance for building, growing, and managing social media presence.
                    News & Content: A news channel delivering timely content, along with strategies to help
                    content creators expand their reach.
                    Interior Design: High-quality materials and expert design services for retail space design.

                    Saaggifo Group combines innovation, creativity, and digital excellence to shape the future across
                    various industries...
                </p>

                <div class="row g-4 justify-content-between mb-5">
                    <div class="col-xl-5"><a href="{{ URL::to('aboutus') }}"
                            class="btn btn-primary rounded-pill py-3 px-5">Discover
                            More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-xl-5 wow fadeInLeft whowerimg" data-wow-delay="0.1s">
                <div class="about-img ">
                    <img src="{{ URL::to('front') . "/img/" . 'whoweare.jpeg' }}" class="img-fluid w-100 " alt="Image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Project Start -->
<div class="container-fluid project overlaybg">
    <div class="container">
        <div class="project-carousel  owl-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="project-item wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-img">
                    <img src="{{ URL::to('front') . "/img/" . 'ourvision.jpg' }}" class="img-fluid w-100 rounded"
                        alt="Image">
                </div>
                <div class="project-content bg-light rounded p-4">
                    <div class="project-content-inner">
                        <p class="text-dark fs-5 mb-3">Our Vision</p>
                        <p class="visionheight">
                            @php
                                $ourvision = "Saaggifo Group's vision is to empower businesses, individuals, and communities through digital innovation, creative design, and media influence. They aim to integrate technology, design, and content to drive growth, connectivity, and success.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Key elements of their vision include:
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                •	Technology: Enhancing digital presence and operational excellence through app development, website creation, SEO, and server guidance.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                •	Media: Connecting people through their own digital platforms and providing expert guidance to help others grow their social media presence.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                •	News & Content: Offering engaging and informative content, along with strategic insights to help content creators expand their reach.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                •	Design: Transforming spaces with high-quality materials focused on beauty, durability, functionality, and sustainability for effective interior design.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Saaggifo Group strives to lead with innovation, creativity, and expertise, shaping a future where technology and design create meaningful experiences.";
                                echo substr($ourvision, 0, 180) . "...";
                            @endphp
                            <br>
                        </p>
                        <div class="pt-4">
                            <a class="btn btn-light rounded-pill py-3 px-5" href="{{ URL::to('ourstory') }}">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="project-item wow fadeInUp" data-wow-delay="0.3s">
                <div class="project-img">
                    <img src="{{ URL::to('front') . "/img/" . 'ourmission.jpg' }}" class="img-fluid w-100 rounded"
                        alt="Image">
                </div>
                <div class="project-content bg-light rounded p-4">
                    <div class="project-content-inner">
                        <p class="text-dark fs-5 mb-3">Our Mission</p>
                        <p class="visionheight">
                            @php
                                $ourmission = "Saaggifo Group’s mission is to provide innovative, high-quality solutions to help clients succeed in the evolving digital and physical world. They focus on delivering exceptional services in technology, design, and media, with an emphasis on enhancing performance, creativity, and engagement.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Key elements include:
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                •	Technology: Empowering businesses through custom app development, responsive websites, SEO services, and reliable server support for operational efficiency and online success.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                •	Digital Media: Operating their own YouTube and Facebook channels and guiding others to build, grow, and manage their social media presence for greater engagement.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                •	News Content: Offering real-time, informative content through their news channel, while supporting content creators with tools and strategies to expand their reach.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                •	Interior Design: Specializing in sourcing high-quality materials that combine aesthetics, functionality, and sustainability to create exceptional spaces.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Saaggifo Group is committed to continuous innovation, collaboration, and creating solutions that inspire growth, creativity, and long-term success.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ";
                                echo substr($ourmission, 0, 180) . "...";
                            @endphp
                        </p>
                        <div class="pt-4">
                            <a class="btn btn-light rounded-pill py-3 px-5" href="{{ URL::to('ourstory') }}">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Project End -->



<!-- Services Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-4"> Our Brands</h1>
        </div>
        <div class="row g-4 justify-content-center text-center">
            <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded">
                    <div class="service-img">
                        <img src="{{ URL::to('front') . "/img/" . 'saggitech.jpg' }}" class="img-fluid w-100 rounded"
                            alt="">
                    </div>
                    <h3 class="py-3"><a href="{{ URL::to('saggitech') }}">Saggitech</a></h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded">
                    <div class="service-img">
                        <img src="{{ URL::to('front') . "/img/" . 'astrology.jpg' }}" class="img-fluid w-100 rounded"
                            alt="">
                    </div>
                    <h3 class="py-3"><a href="{{ URL::to('debdutta-digital') }}">Debdutta Digital</a></h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded">
                    <div class="service-img">
                        <img src="{{ URL::to('front') . "/img/" . 'NewsPrimenow.jpg' }}"
                            class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <h3 class="py-3"><a href="{{ URL::to('news-prime-now') }}">News Prime Now</a></h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded">
                    <div class="service-img">
                        <img src="{{ URL::to('front') . "/img/" . 'buildingjuncation.jpg' }}"
                            class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <h3 class="py-3"><a href="{{ URL::to('building-junction') }}">Building Junction</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

<!-- Services Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-4"> Our Youtube Channels</h1>
        </div>
        <div class="row g-4 justify-content-center text-center">
            <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">


                @php
                    $youtubedp1 = $youtubechanneldata1->thumbnails->medium->url;
                    //dd($youtubechanneldata);
                    $youtubetitle1 = $youtubechanneldata1->title;
                @endphp
                <a href="{{ 'https://www.youtube.com/' . $youtubechanneldata1->customUrl}}">
                    <div class="d-flex justify-content-end">
                        <div class="my-auto text-end">
                            <h5><i class="fa fa-youtube-play red" aria-hidden="true"></i> {{$youtubetitle1}}</h5>
                            <p class="mb-0">{{$youtubechanneldatasubscription1 / 1000}}K subscribers</p>
                        </div>
                        <div class="bg-white rounded-circle ms-3">
                            <img src="{{ $youtubedp1 }}" class="rounded-circle p-2"
                                style="width: 80px; height: 80px; border: 1px solid; border-color: #ffe000;" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                @php
                    $youtubedp2 = $youtubechanneldata2->thumbnails->medium->url;
                    //dd($youtubechanneldata);
                    $youtubetitle2 = $youtubechanneldata2->title;
                @endphp
                <a href="{{ 'https://www.youtube.com/' . $youtubechanneldata2->customUrl}}">
                    <div class="d-flex justify-content-end">
                        <div class="my-auto text-end">
                            <h5><i class="fa fa-youtube-play red" aria-hidden="true"></i> {{$youtubetitle2}}</h5>
                            <p class="mb-0">{{$youtubechanneldatasubscription2 / 1000}}K subscribers</p>
                        </div>
                        <div class="bg-white rounded-circle ms-3">
                            <img src="{{ $youtubedp2 }}" class="rounded-circle p-2"
                                style="width: 80px; height: 80px; border: 1px solid; border-color: #ffe000;" alt="">
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">


                @php
                    $youtubedp3 = $youtubechanneldata3->thumbnails->medium->url;
                    //dd($youtubechanneldata);
                    $youtubetitle3 = $youtubechanneldata3->title;
                @endphp
                <a href="{{ 'https://www.youtube.com/' . $youtubechanneldata3->customUrl}}">

                    <div class="d-flex justify-content-end">
                        <div class="my-auto text-end">
                            <h5><i class="fa fa-youtube-play red" aria-hidden="true"></i> {{$youtubetitle3}}</h5>
                            <p class="mb-0">{{$youtubechanneldatasubscription3 / 1000}}K subscribers</p>
                        </div>
                        <div class="bg-white rounded-circle ms-3">
                            <img src="{{ $youtubedp3 }}" class="rounded-circle p-2"
                                style="width: 80px; height: 80px; border: 1px solid; border-color: #ffe000;" alt="">
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
</div>
<!-- Services End -->

<!-- Testimonial Start -->
<!-- <div class="container-fluid testimonial bg-light py-5">
    <div class="container py-5">
        <div class="row g-4 align-items-center">
            <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="h-100 rounded">
                    <h2 class="text-primary">Featured</h2>
                    <h1 class="display-4 mb-4">Products</h1>
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
</div> -->
<!-- Testimonial End -->

<!-- Team Start -->
<!-- <div class="container-fluid team pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-4">Group of Directors</h1>
        </div>
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
</div> -->
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-fluid testimonial bg-light pb-5">
    <div class="container py-5">
        <div class="row g-4 align-items-center">
            <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="h-100 rounded">
                    <h2 class="text-primary">Happy </h2>
                    <h1 class="display-4 mb-4">Customers are Talking</h1>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="testimonial-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="d-flex">
                            <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                            <p class="mt-4">Saggitech: "Working with Saaggifo Group was a game-changer for
                                our business. We needed a website for our services, and they delivered beyond
                                expectations. Their team was responsive, professional, and kept us updated throughout
                                the process. Our website now runs smoothly, and we've seen a significant increase in
                                customer engagement. Highly recommend them for any tech needs!"
                            </p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="my-auto text-end">
                                <h5>Sourav Mondal</h5>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex">
                            <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                            <p class="mt-4">Debdutta degital: "I recently came across Astronama Achariya Debdutta’s
                                YouTube channel, and I have to say, I am thoroughly impressed. As someone who has always
                                been curious about astrology and numerology, I was looking for guidance from a
                                trustworthy expert, and Achariya Debdutta definitely fits the bill. His deep knowledge
                                of these ancient sciences is evident in every video he posts. What sets him apart is the
                                level of personalized care he puts into his reports—each one is meticulously prepared
                                under his direct supervision, ensuring high authenticity and accuracy."
                            </p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="my-auto text-end">
                                <h5>Arpita Bose</h5>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="d-flex">
                            <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                            <p class="mt-4">Debdutta degital: I’ve been particularly drawn to his insights on numerology
                                and vastu, which
                                have helped me make more informed decisions in both my personal and professional life.
                                Whether you're someone dealing with important life choices, or just looking for advice
                                on how to align your surroundings, Achariya Debdutta offers clear and practical guidance
                                that feels both rooted in tradition and relevant to today’s world."
                            </p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="my-auto text-end">
                                <h5>Pratul Hazari</h5>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="d-flex">
                            <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                            <p class="mt-4">Building Junction: "We recently hired Saaggifo Group for the redesign
                                of our retail space, and the transformation is amazing. Their attention to detail and
                                use of high-quality materials made all the difference. They really understood the
                                aesthetic we were going for and provided us with a space that is both functional and
                                beautiful. Our customers have noticed the change, and it’s made a huge difference in
                                sales. Highly recommend their design services!""
                            </p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="my-auto text-end">
                                <h5>Samay Yadav</h5>
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