@extends('layouts.frontlayout')
@section('content')
<!-- Begin Page Content -->

@php
@endphp
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active text-primary">About</li>
        </ol>
    </div>
</div>

<!-- Header End -->
<!-- About Start -->
<div class="container-fluid about bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center mb-5">
            <div class="col-lg-12 col-xl-12 wow fadeInRight" data-wow-delay="0.3s">
                <h1><span class="text-dark">WHO WE </span><span class="text-primary">ARE</span></h1>

                <p class="text ps-4 mb-4">Innovation, Creativity, and Digital Excellence Across Industries
                    Saaggifo Group is a forward-thinking, multi-faceted company specializing in a wide array of services
                    that shape the digital landscape and redefine modern living. With a core focus on technology,
                    design, and media, we empower businesses and individuals to grow, thrive, and connect in an
                    increasingly digital world.
                </p>
            </div>
        </div>
        <div class="row g-5 align-items-center mb-5">
            <div class="col-lg-6 col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                <h3>Saggitech</h3>
                <p class="text ps-4 mb-4">At Saggitech we specialize in creating tailored software solutions that help
                    businesses succeed inthe digital world. Our services include:</p>

                <p class="text ps-4 mb-4">Custom Mobile Applications Development of user-friendly, scalable apps for
                    iOS, Android, and cross-platform, designed to meet specific business needs and enhance user
                    engagement.</p>
                <p class="text ps-4 mb-4">Website Development Building responsive, high-performance websites with modern
                    designs, including e-commerce solutions and content management systems (CMS) for easy updates.</p>
                <p class="text ps-4 mb-4">SEO Strategies Comprehensive search engine optimization to improve your
                    website’s ranking, drive
                    organic traffic, and increase conversions through on-page SEO, technical optimization, and
                    link-building.</p>
                <p class="text ps-4 mb-4">Server Solutions Reliable server infrastructure, including cloud hosting,
                    migration, dedicated
                    hosting, performance optimization, security, and ongoing management to ensure smooth operations.</p>
                <p class="text ps-4 mb-4">We combine the latest technologies with expert strategies to deliver scalable,
                    secure, and
                    results-driven solutions for your business.</p>
                <div class="row g-4 justify-content-between mb-5">
                    <div class="pt-4">
                        <a class="btn btn-light rounded-pill py-3 px-5" href="{{ URL::to('saggitech') }}">Read
                            More</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="about-img">
                    <img src="{{ URL::to('front') . "/img/" . 'saggitech.jpg' }}" class="img-fluid w-75 rounded-bottom"
                        alt="Image">
                </div>
            </div>
        </div>
        <div class="row g-5 align-items-center mb-5">
            <div class="col-lg-6 col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="about-img">
                    <img src="{{ URL::to('front') . "/img/" . 'astrology.jpg' }}" class="img-fluid w-75 rounded-bottom"
                        alt="Image">
                </div>
            </div>
            <div class="col-lg-6 col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                <h3>Debdutta digital</h3>
                <p class="text ps-4 mb-4"> At Debdutta digital Group we manage successful digital platforms like YouTube
                    and
                    Facebook while offering
                    expert services to help others build, grow, and optimize their social media presence. We provide
                    expert services to help you establish, grow, and optimize your online presence. Here's how we
                    deliver our services:</p>

                <ul>
                    <li>Platform Setup & Optimization: We help set up or optimize your social media profiles for
                        maximum
                        visibility and engagement. This includes creating compelling profiles, branding elements, and
                        ensuring your platforms are aligned with your goals.</li>
                    <li>Content Creation & Strategy: Our team produces high-quality, engaging content tailored to
                        your
                        audience, from videos and posts to blogs and live streams. We also develop a customized content
                        strategy to ensure your messaging resonates and drives results.</li>
                    <li>Audience Growth & Engagement: We use proven strategies to grow your follower base, increase
                        engagement, and create communities around your brand. This includes targeted outreach, audience
                        interaction, and fostering organic growth.
                    </li>
                    <li>Paid Advertising & Campaigns: We design and manage paid social media campaigns on platforms
                        like
                        Facebook and YouTube to boost visibility, drive traffic, and achieve business objectives.</li>
                    <li>Analytics & Reporting: We monitor and analyse your social media performance, providing
                        regular
                        reports and insights that help refine strategies, optimize content, and improve engagement.</li>
                    <li>Ongoing Support & Consultation: We offer continuous guidance to adapt to trends, optimize
                        platform performance, and help you stay ahead of the competition.
                        Through these services, we empower businesses and individuals to build, manage, and grow their
                        social media presence effectively, driving engagement and success across all major platforms.
                    </li>
                </ul>
                <div class="row g-4 justify-content-between mb-5">
                    <div class="pt-4">
                        <a class="btn btn-light rounded-pill py-3 px-5" href="{{ URL::to('debdutta-digital') }}">Read
                            More</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="row g-5 align-items-center mb-5">
            <div class="col-lg-6 col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                <h3>News Prime Now</h3>
                <p class="text ps-4 mb-4">At News Prime Now we operate a dynamic YouTube news channel, delivering
                    timely,
                    accurate, and engaging
                    content on current events, trends, and important stories. Our channel offers in-depth reporting,
                    interviews, and analysis to keep audiences informed and connected.</p>
                <div class="row g-4 justify-content-between mb-5">
                    <div class="pt-4">
                        <a class="btn btn-light rounded-pill py-3 px-5" href="{{ URL::to('news-prime-now') }}">Read
                            More</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="about-img">
                    <img src="{{ URL::to('front') . "/img/" . 'NewsPrimenow.jpg' }}"
                        class="img-fluid w-75 rounded-bottom" alt="Image">
                </div>
            </div>
        </div>
        <div class="row g-5 align-items-center mb-5">
            <div class="col-lg-6 col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="about-img">
                    <img src="{{ URL::to('front') . "/img/" . 'buildingjuncation.jpg' }}"
                        class="img-fluid w-75 rounded-bottom" alt="Image">
                </div>
            </div>
            <div class="col-lg-6 col-xl-7 wow fadeInRight" data-wow-delay="0.3s">

                <h3>Building junction</h3>
                <p class="text ps-4 mb-4">At Building Junction we provide integrated solutions for interior design
                    and
                    material supply,
                    transforming spaces with high-quality materials and creative design. Whether residential or
                    commercial, we specialize in both crafting tailored interior designs and sourcing the best materials
                    to bring your vision to life.</p>
                <p class="text ps-4 mb-4">What We Offer:</p>
                <p class="text ps-4 mb-4">
                <ul>
                    <li>Custom Interior Design: Bespoke space planning, design concepts, and 3D visualizations to
                        create
                        functional and stylish interiors.</li>
                    <li>Material Supply: High-quality flooring, wall finishes, furniture, lighting, and custom
                        fixtures
                        sourced from trusted suppliers.</li>
                    <li>Sustainability: Eco-friendly and sustainable materials for greener spaces.</li>
                    <li>Project Management: End-to-end service, from design to material delivery and installation.
                        We blend creativity with functionality, ensuring each design meets both aesthetic and practical
                        requirements.</li>
                </ul>
                </p>

                <div class="row g-4 justify-content-between mb-5">
                    <div class="pt-4">
                        <a class="btn btn-light rounded-pill py-3 px-5" href="{{ URL::to('building-junction') }}">Read
                            More</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection