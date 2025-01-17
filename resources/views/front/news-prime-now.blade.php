@extends('layouts.frontlayout')
@section('content')
<!-- Begin Page Content -->

@php
@endphp
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">News Prime Now</h4>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-primary">News Prime Now</li>
        </ol>
    </div>
</div>

<!-- Header End -->
<!-- About Start -->
<div class="container-fluid about bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center mb-5">
            <div class="col-lg-12 col-xl-12 wow fadeInRight" data-wow-delay="0.3s">
                <h2>News Prime Now:</h2>
                <p class="text ps-4 mb-4">
                    At News Prime Now, we operate a dynamic news channel dedicated to delivering timely, accurate, and
                    engaging content on the latest current events, trends, and important stories that matter to our
                    audience. Our goal is to keep you informed, connected, and engaged with in-depth reporting, expert
                    analysis, and exclusive interviews. Whether it’s breaking news, insightful commentary, or trending
                    topics, our channel offers a comprehensive view of the world around you.
                </p>
                <h3 class="mb-5"> What We Offer:</h3>
                <ol>
                    <li class="mb-5">
                        <h5>Timely & Accurate Reporting </h5>
                        <p class="text ps-4 mb-4"> We cover breaking news and trending topics as they unfold, ensuring
                            you’re always up to date with the latest developments. Our team of experienced journalists
                            works tirelessly to deliver accurate and reliable information in a clear and engaging
                            format.</p>
                    </li>
                    <li class="mb-5">
                        <h5>In-Depth Analysis </h5>
                        <p class="text ps-4 mb-4">Our news channel goes beyond headlines. We provide detailed analysis
                            on major events and issues, offering deeper insights into what’s happening and why it
                            matters. Whether it’s politics, business, technology, or culture, our content delivers the
                            context you need to understand the bigger picture.</p>

                    </li>
                    <li class="mb-5">
                        <h5>Exclusive Interviews </h5>
                        <p class="text ps-4 mb-4">We bring you exclusive interviews with thought leaders, industry
                            experts, and key figures, offering first-hand insights into the latest developments. Our
                            interviews provide a unique perspective on issues that impact society and the global
                            landscape.</p>

                    </li>
                    <li class="mb-5">
                        <h5>Trending Topics & Stories </h5>
                        <p class="text ps-4 mb-4">From social media trends to global movements, we cover the most
                            talked-about stories and highlight important issues shaping public discourse. Our team
                            curates content that matters to you, ensuring we cover the topics that are most relevant to
                            our audience.</p>

                    </li>
                    <li class="mb-5">
                        <h5>Engaging Content </h5>
                        <p class="text ps-4 mb-4">We focus on creating content that is not only informative but also
                            engaging. With visually appealing video formats, compelling narratives, and interactive
                            segments, we keep our audience captivated and invested in the stories we share.</p>
                    </li>
                </ol>
                <h1 class="text ps-4 mb-4">Coming Soon – Stay Tuned!</h1>



                <p class="text ps-4 mb-4">We’re excited to announce that our YouTube news channel is coming soon, and we
                    can’t wait to share it with you! With a focus on current events, trending news, in-depth stories,
                    and expert opinions, our channel will be your go-to source for reliable and engaging content.
                    Be sure to subscribe to our channel and turn on notifications so you never miss a story. We look
                    forward to bringing you the latest news and analysis, keeping you informed and connected with what’s
                    happening around the world.
                    Stay tuned – exciting content is on its way!
                </p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection