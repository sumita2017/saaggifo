<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>saaggifo</title>
    <link rel="icon" type="image/x-icon" href="{{ URL::to('front/img/logoold.png') }}" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    <link href="{{ URL::to('front/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('front/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('front/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('front/css/style.css') }}" rel="stylesheet">

</head>

@stack('style')
<!-- Custom CSS -->
<style>
    .bg_black {
        background-color: #000;
    }
</style>

@include('element.frontheader')
<!-- Start Intro -->

<!-- Main content -->
@yield('content')
@include('element.frontfooter')

<!-- Back to top -->
<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>
@include('element.frontmodal')


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ URL::to('front/lib/wow/wow.min.js') }}"></script>
<script src="{{ URL::to('front/lib/easing/easing.min.js') }}"></script>
<script src="{{ URL::to('front/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ URL::to('front/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ URL::to('front/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ URL::to('front/lib/lightbox/js/lightbox.min.js') }}"></script>
<script src="{{ URL::to('front/js/main.js') }}"></script>

</body>

</html>
@stack('scripts')
@include('element.frontjquery')

</body>

</html>