<body>
    <!-- Spinner Start -->
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid topbar px-0 d-none d-lg-block">
        <div class="container px-0">
            <div class="row gx-0 align-items-center" style="height: 45px;">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap" style="font-size: 14px;">
                        <a href="tel:+918240993380" class="text-muted me-4"><i
                                class="fas fa-phone-alt text-primary me-2"></i><span class="text-primary">Contact us
                                :</span>+91
                            8240993380</a>
                        <a href="#" class="text-muted me-4"><span class="text-primary">Customer Care Number :</span>
                            hr@saaggifo.com</a>

                        <a href="#" class="text-muted me-0"><i class="fas fa-envelope text-primary me-2"></i><span
                                class="text-primary">Email Us
                                :</span>hr@saaggifo.com</a>
                    </div>
                </div>
                <div class="col-lg-2 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="https://www.facebook.com/p/Saaggifo-Infrastructure-Pvt-Ltd-100067055325308/?_rdr"
                            target="blank" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i
                                class="fab fa-facebook-f text-white"></i></a>
                        <!-- <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i
                                class="fab fa-twitter text-white"></i></a> -->
                        <!-- <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i
                                class="fab fa-instagram text-white"></i></a> -->
                        <a href="https://in.linkedin.com/in/saaggifo-group" target="blank"
                            class="btn btn-primary btn-square rounded-circle nav-fill me-0"><i
                                class="fab fa-linkedin-in text-white"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid sticky-top px-0">
        <div class="position-absolute bg-dark" style="left: 0; top: 0; width: 100%; height: 100%;">
        </div>
        <div class="container px-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg_black py-3 px-4 logoparent">
                <a href="{{ URL::to('/') }}" class="navbar-brand p-0">
                    <img class="logoimage1" src="{{ URL::to('front') . '/' . "img/logo.png"}}" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ URL::to('/') }}" class="nav-item nav-link ">Home</a>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Who We Are</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ URL::to('aboutus') }}" class="dropdown-item">About Us</a>
                                <a href="{{ URL::to('ourstory') }}" class="dropdown-item">Our Story</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">What We Do</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ URL::to('saggitech') }}" class="dropdown-item">Saggitech</a>
                                <a href="{{ URL::to('debdutta-digital') }}" class="dropdown-item">Debdutta Digital
                                </a>
                                <a href="{{ URL::to('news-prime-now') }}" class="dropdown-item">News prime now</a>
                                <a href="{{ URL::to('building-junction') }}" class="dropdown-item">Building Junction</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Sustainability</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ URL::to('corporate-sustainability') }}" class="dropdown-item">Corporate
                                    Sustainability</a>
                                <a href="{{ URL::to('health-safety-and-environment') }}" class="dropdown-item">Health
                                    Safety &
                                    Environment</a>
                            </div>
                        </div>
                        <!-- <a href="{{ URL::to('career') }}" class="nav-item nav-link">Career</a>
                        <a href="{{ URL::to('investor') }}" class="nav-item nav-link">Investors</a> -->
                        <a href="{{ URL::to('contact-us') }}" class="nav-item nav-link">Contact
                            us</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar & Hero End -->