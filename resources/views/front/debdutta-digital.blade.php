@extends('layouts.frontlayout')
@section('content')
<!-- Begin Page Content -->

@php
@endphp
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Debdutta Digital</h4>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-primary">Debdutta Digital</li>
        </ol>
    </div>
</div>
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
                <a href="{{ 'https://www.youtube.com/' . $youtubechanneldata1->customUrl}}" target="blank">
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
                <a href="{{ 'https://www.youtube.com/' . $youtubechanneldata2->customUrl}}" target="blank">
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
                <a href="{{ 'https://www.youtube.com/' . $youtubechanneldata3->customUrl}}" target="blank">

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
<div class="container-fluid about bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center mb-5">
            <div class="col-lg-12 col-xl-12 wow fadeInRight" data-wow-delay="0.3s">
                <h2>Debdutta Digital:</h2>
                <p class="text ps-4 mb-4">
                    At Debdutta digital, we manage and grow successful digital platforms, including three of our
                    own
                    YouTube and Facebook channels, while offering expert services to help others build, grow, and
                    optimize their social media presence. With years of experience and a proven track record, we
                    specialize in guiding businesses and individuals in developing a robust and engaging online
                    presence.
                </p>
                <h3 class="mb-5">Channels we have:</h3>
                <ol>
                    <li class="mb-5">
                        <h5>Platform Setup & Optimization</h5>
                        <p class="text ps-4 mb-4"> We start by setting up or optimizing your social media profiles to
                            maximize their effectiveness. This includes:</p>

                        <ul class="mt-5">
                            <li class="mb-5 mt-4">
                                <h5>Profile Creation & Branding:</h5> We help you create compelling and visually
                                appealing profiles that reflect your brand identity, with optimized images,
                                descriptions, and banners.
                            </li>
                            <li class="mb-5 mt-4">
                                <h5>Platform Alignment: </h5> Ensuring your platforms are structured and set up to reach
                                your target audience and meet your business objectives.
                            </li>
                            <li class="mb-5 mt-4">
                                <h5>SEO Optimization: </h5> We optimize your profile and content for search ability,
                                ensuring higher visibility on platforms like Facebook and YouTube.
                            </li>
                        </ul>
                    </li>
                    <li class="mb-5">
                        <h5>Content Creation & Strategy</h5>
                        <p class="text ps-4 mb-4">Creating high-quality, engaging content is at the heart of every
                            successful social media strategy. We help you produce content that resonates with your
                            audience and drives meaningful engagement:</p>

                        <ul class="mb-5">
                            <li class="mb-5 mt-4">
                                <h5>Content Production:</h5> From videos and blog posts to social media posts and live
                                streams, we create content that aligns with your brand’s voice and goals.
                            </li>
                            <li class="mb-5 mt-4">
                                <h5>Content Strategy:</h5> We develop a tailored content calendar and strategy that
                                includes the right mix of media types, topics, and publishing frequency to engage your
                                audience and achieve your objectives.
                            </li>
                            <li class="mb-5 mt-4">
                                <h5>Visual & Creative Design:</h5> Our team crafts visually appealing content, ensuring
                                it’s both on-brand and optimized for platform-specific formats.
                            </li>
                        </ul>
                    <li class="mb-5 mt-4">

                        <h5>Audience Growth & Engagement:</h5>We employ proven strategies to help you grow your
                        followers and increase engagement with your content, ensuring that your social media presence
                        becomes a community-driven experience.
                        <ul class="mb-5 mt-4">
                            <li class="mb-5 mt-4">
                                <h5>Targeted Outreach:</h5>
                                We reach out to your target audience using strategic methods like influencer
                                partnerships, social media contests, and collaboration with other brands.
                            </li>
                            <li class="mb-5 mt-4">
                                <h5>Community Building:</h5>
                                We focus on fostering a loyal and engaged community by responding to comments, sharing
                                user-generated content, and hosting interactive sessions (e.g., Q&As, live streams).
                            </li>
                            <li class="mb-5 mt-4">
                                <h5>Organic Growth</h5>
                                We create shareable content that naturally encourages followers to interact, comment,
                                and share, leading to organic growth of your follower base.
                            </li>
                        </ul>
                    </li>

                    <li class="mb-5 mt-4">
                        <h5>Paid Advertising & Campaigns:</h5>
                        Paid social media advertising is a powerful tool to boost visibility and achieve your business
                        goals. We design and manage campaigns on platforms like Facebook and YouTube to drive results:

                        <ul class="mb-5 mt-4">
                            <li>
                                <h5>Ad Campaign Strategy:</h5>
                                We develop highly targeted paid campaigns designed to increase reach, drive website
                                traffic, generate leads, or boost sales.
                            </li>
                            <li>
                                <h5>Custom Ad Creative:</h5>
                                Our team designs visually appealing ads tailored to your audience, ensuring maximum
                                engagement.
                            </li>
                            <li>
                                <h5>Targeting & Segmentation:</h5>
                                We use advanced targeting techniques to reach your ideal audience based on demographics,
                                interests, and behaviour, ensuring a high ROI on ad spend.
                            </li>
                            <li>
                                <h5>Performance Tracking:</h5>
                                We continuously monitor ad campaigns and optimize them to improve results, adjusting the
                                budget, targeting, and creative assets as needed.
                            </li>
                        </ul>
                    </li>
                    <li class="mb-5 mt-4">
                        <h5>Analytics & Reporting:</h5>
                        To ensure your social media efforts are on track, we provide detailed analytics and performance
                        reporting:
                        <ul class="mb-5 mt-4">
                            <li>
                                <h5>Social Media Insights:</h5>
                                We track key metrics like engagement rates, reach, impressions, follower growth, and
                                conversions to assess the success of your social media strategy.
                            </li>
                            <li>
                                <h5>Performance Reports:</h5>
                                We provide regular reports that highlight what's working and offer actionable insights
                                for improving your strategy.
                            </li>
                            <li>
                                <h5>Content Optimization:</h5>
                                Using data, we adjust your content strategy to improve engagement and reach, ensuring
                                your brand stays relevant and effective.
                            </li>
                        </ul>
                    </li>

                    <li class="mb-5 mt-4">
                        <h5>Ongoing Support & Consultation:</h5>
                        Social media is constantly evolving, and we are here to help you stay ahead of the curve. Our
                        ongoing support includes:
                        <ul class="mb-5 mt-4">
                            <li>
                                <h5>Trend Monitoring:</h5>
                                We keep track of the latest trends and best practices in social media marketing to
                                ensure your strategy remains fresh and effective.
                            </li>
                            <li>
                                <h5>Strategy Adjustments:</h5>
                                As your business and goals evolve, we help adjust your social media strategy to meet
                                new objectives and market demands.
                            </li>
                            <li>
                                <h5>Consultation & Advice:</h5>
                                We offer expert advice on everything from content creation to crisis management and
                                platform changes, helping you navigate challenges and seize new opportunities.
                            </li>
                        </ul>
                    </li>
                    </ul>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
<!-- About Start -->
<div class="container-fluid about bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center mb-5">
            <div class="col-lg-12 col-xl-12 wow fadeInRight" data-wow-delay="0.3s">
                <h3 class="mb-5">Our Social Media Services</h3>
                <ol>
                    <li class="mb-5">
                        <h5>Platform Setup & Optimization</h5>
                        <p class="text ps-4 mb-4"> We start by setting up or optimizing your social media profiles to
                            maximize their effectiveness. This includes:</p>

                        <ul class="mt-5">
                            <li class="mb-5 mt-4">
                                <h5>Profile Creation & Branding:</h5> We help you create compelling and visually
                                appealing profiles that reflect your brand identity, with optimized images,
                                descriptions, and banners.
                            </li>
                            <li class="mb-5 mt-4">
                                <h5>Platform Alignment: </h5> Ensuring your platforms are structured and set up to reach
                                your target audience and meet your business objectives.
                            </li>
                            <li class="mb-5 mt-4">
                                <h5>SEO Optimization: </h5> We optimize your profile and content for search ability,
                                ensuring higher visibility on platforms like Facebook and YouTube.
                            </li>
                        </ul>
                    </li>
                    <li class="mb-5">
                        <h5>Content Creation & Strategy</h5>
                        <p class="text ps-4 mb-4">Creating high-quality, engaging content is at the heart of every
                            successful social media strategy. We help you produce content that resonates with your
                            audience and drives meaningful engagement:</p>

                        <ul class="mb-5">
                            <li class="mb-5 mt-4">
                                <h5>Content Production:</h5> From videos and blog posts to social media posts and live
                                streams, we create content that aligns with your brand’s voice and goals.
                            </li>
                            <li class="mb-5 mt-4">
                                <h5>Content Strategy:</h5> We develop a tailored content calendar and strategy that
                                includes the right mix of media types, topics, and publishing frequency to engage your
                                audience and achieve your objectives.
                            </li>
                            <li class="mb-5 mt-4">
                                <h5>Visual & Creative Design:</h5> Our team crafts visually appealing content, ensuring
                                it’s both on-brand and optimized for platform-specific formats.
                            </li>
                        </ul>
                    <li class="mb-5 mt-4">

                        <h5>Audience Growth & Engagement:</h5>We employ proven strategies to help you grow your
                        followers and increase engagement with your content, ensuring that your social media presence
                        becomes a community-driven experience.
                        <ul class="mb-5 mt-4">
                            <li class="mb-5 mt-4">
                                <h5>Targeted Outreach:</h5>
                                We reach out to your target audience using strategic methods like influencer
                                partnerships, social media contests, and collaboration with other brands.
                            </li>
                            <li class="mb-5 mt-4">
                                <h5>Community Building:</h5>
                                We focus on fostering a loyal and engaged community by responding to comments, sharing
                                user-generated content, and hosting interactive sessions (e.g., Q&As, live streams).
                            </li>
                            <li class="mb-5 mt-4">
                                <h5>Organic Growth</h5>
                                We create shareable content that naturally encourages followers to interact, comment,
                                and share, leading to organic growth of your follower base.
                            </li>
                        </ul>
                    </li>

                    <li class="mb-5 mt-4">
                        <h5>Paid Advertising & Campaigns:</h5>
                        Paid social media advertising is a powerful tool to boost visibility and achieve your business
                        goals. We design and manage campaigns on platforms like Facebook and YouTube to drive results:

                        <ul class="mb-5 mt-4">
                            <li>
                                <h5>Ad Campaign Strategy:</h5>
                                We develop highly targeted paid campaigns designed to increase reach, drive website
                                traffic, generate leads, or boost sales.
                            </li>
                            <li>
                                <h5>Custom Ad Creative:</h5>
                                Our team designs visually appealing ads tailored to your audience, ensuring maximum
                                engagement.
                            </li>
                            <li>
                                <h5>Targeting & Segmentation:</h5>
                                We use advanced targeting techniques to reach your ideal audience based on demographics,
                                interests, and behaviour, ensuring a high ROI on ad spend.
                            </li>
                            <li>
                                <h5>Performance Tracking:</h5>
                                We continuously monitor ad campaigns and optimize them to improve results, adjusting the
                                budget, targeting, and creative assets as needed.
                            </li>
                        </ul>
                    </li>
                    <li class="mb-5 mt-4">
                        <h5>Analytics & Reporting:</h5>
                        To ensure your social media efforts are on track, we provide detailed analytics and performance
                        reporting:
                        <ul class="mb-5 mt-4">
                            <li>
                                <h5>Social Media Insights:</h5>
                                We track key metrics like engagement rates, reach, impressions, follower growth, and
                                conversions to assess the success of your social media strategy.
                            </li>
                            <li>
                                <h5>Performance Reports:</h5>
                                We provide regular reports that highlight what's working and offer actionable insights
                                for improving your strategy.
                            </li>
                            <li>
                                <h5>Content Optimization:</h5>
                                Using data, we adjust your content strategy to improve engagement and reach, ensuring
                                your brand stays relevant and effective.
                            </li>
                        </ul>
                    </li>

                    <li class="mb-5 mt-4">
                        <h5>Ongoing Support & Consultation:</h5>
                        Social media is constantly evolving, and we are here to help you stay ahead of the curve. Our
                        ongoing support includes:
                        <ul class="mb-5 mt-4">
                            <li>
                                <h5>Trend Monitoring:</h5>
                                We keep track of the latest trends and best practices in social media marketing to
                                ensure your strategy remains fresh and effective.
                            </li>
                            <li>
                                <h5>Strategy Adjustments:</h5>
                                As your business and goals evolve, we help adjust your social media strategy to meet
                                new objectives and market demands.
                            </li>
                            <li>
                                <h5>Consultation & Advice:</h5>
                                We offer expert advice on everything from content creation to crisis management and
                                platform changes, helping you navigate challenges and seize new opportunities.
                            </li>
                        </ul>
                    </li>
                    </ul>
                    </li>
                </ol>

                <h3 class="text ps-4 mb-4">Why Choose Debdutta Digital?</h3>

                <h5>-Proven Track Record:</h5>
                <p class="text ps-4 mb-4">With our own successful YouTube and Facebook channels, we know what it takes
                    to grow and engage audiences.</p>
                <h5>-Comprehensive Solutions:</h5>
                <p class="text ps-4 mb-4">We offer end-to-end services, including setup, content creation, paid
                    campaigns, analytics, and ongoing support.</p>
                <h5>-Expert Team:</h5>
                <p class="text ps-4 mb-4">Our team consists of experienced social media strategists, content creators,
                    and digital marketers who understand how to drive success on all major platforms.</p>

                <h5>-Customized Approach:</h5>
                <p class="text ps-4 mb-4">
                    We tailor our strategies to your unique business goals, ensuring you get results that matter.</p>

                <h5>Continuous Growth:</h5>
                <p class="text ps-4 mb-4">Our approach is focused on sustainable growth, using both organic and paid
                    strategies to build a long-term social media presence.</p>

                <h3>Get Started with Debdutta-digital</h3>
                <p class="text ps-4 mb-4">Whether you're just starting your social media journey or looking to enhance
                    your existing presence, Debdutta digital Group has the expertise and resources to help you succeed.
                    Contact
                    us today to learn more about how we can help you grow, engage, and succeed on platforms like
                    YouTube, Facebook, and beyond!</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection