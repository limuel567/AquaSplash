<header class="navigation">
    <div class="head-holder">
        <div class="container relative">
            <ul class="list-inline absolute">
                <li class="list-inline-item head-holder-items"><i class="fa fa-facebook"></i></li>
                <li class="list-inline-item head-holder-items"><i class="fa fa-instagram"></i></li>
            </ul>
        </div>
    </div>
    <div class="container container-mobile-fluid relative">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                <img src="{{asset('frontend/images')}}/logo.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse pull-right" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{Request::segment(1) == '' ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item {{Request::segment(1) == 'our-waterpark' ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('our-waterpark')}}">Our WaterPark</a>
                    </li>
                    <li class="nav-item {{Request::segment(1) == 'prices' ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('prices')}}">Prices</a>
                    </li>
                    <li class="nav-item {{Request::segment(1) == 'events' ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('events')}}">Events</a>
                    </li>
                    <li class="nav-item {{Request::segment(1) == 'gallery' ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('gallery')}}">Gallery</a>
                    </li>
                    <li class="nav-item {{Request::segment(1) == 'contact-us' ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('contact-us')}}">Contact Us</a>
                    </li>
                    <li class="nav-item bookButton_mobile">
                        <a class="nav-link book-button" href="{{url('booknow/first-step')}}">
                            <img src="{{asset('frontend/images')}}/nav-booknow.png">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <a class="mobile-booknow" href="{{url('booknow/first-step')}}">
            <img src="{{asset('frontend/images')}}/nav-booknow.png">
        </a>
    </div>
    <img id="navCurve" src="{{asset('frontend/images')}}/nav-curve.png">
</header>
