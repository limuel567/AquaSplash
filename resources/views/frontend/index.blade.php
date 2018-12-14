@extends('frontend.layout')
@section('title','Home | Aqua Splash')
@section('css')
@stop
@section('sub-header')
<div class="se-pre-con"></div>
<div class="chatHead"><a href="#"><img src="{{asset('frontend/images')}}/chatHead.png"></a></div>
<!-- <div class="banner-video">
			<img src="{{asset('frontend/images')}}/bannerPlaceholder.png">
		</div> -->
<div class="banner-video relative">
    <div class="blueOverlay" style="background-image: url('{{asset('frontend/images')}}/overlay.png');"></div>
    <video width="100%" autoplay="1" loop>
        <source src="{{asset('frontend/images')}}/bannerVideo.mp4" type="video/mp4">
    </video>
    <div class="container container-tablet-fluid relative" style="z-index: 2;">
        <div class="banner-content">
            <h2>Aqua <span>Splash</span></h2>
            <p>Celebrate the sunshine with friends, family or your hard-working colleagues at Aqua Splash. Our
                inflatable water park has everything you need for a fun-filled day out, whether you’re team building,
                birthday-bashing or just want to let loose on the water with a few friends.</p>
            <a href="#" class="LearnMore">
                <img src="{{asset('frontend/images')}}/LearnMore.png">
            </a>
        </div>
    </div>
</div>
@stop
@section('content')
<div class="inflate-wrapper relative">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="inflate-image relative">
                    <img src="{{asset('frontend/images')}}/inflate-image.png">
                </div>
            </div>
            <div class="col-md-7">
                <div class="inflate-headers">
                    <h2>INFLATABLE</h2>
                    <h3>Assault Course</h3>
                    <div class="text-left ml-auto mb-50">
                        <p>
                            There’s always a lot going on at Aqua Splash. Our inflatable water park attracts all walks
                            of life, from kids looking for fun to eager stags and more. <br><br>
                            We’re all about creating a safe, fun and free-feeling environment for all. As long as
                            you’re happy to get soaked, you’re bound to enjoy your time at the splash park. <br><br>
                            Whether you’re tackling our abundance of inflatable obstacles, fancy a few runs on our
                            inflatable slides, there are a few things you should know. <br><br>
                            we’re commonly asked about. Have a read through for all you need to know about Aqua Splash.
                        </p>
                    </div>
                    <a href="#" class="learnMore">
                        <img src="{{asset('frontend/images')}}/LearnMore.png">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <img class="section-separator" src="{{asset('frontend/images')}}/nav-curve.png">
</div>
<div class="prices-wrapper relative">
    <div class="container">
        <div class="text-center title-design mb-50">
            <img class="left-wing" src="{{asset('frontend/images')}}/left-wing.png">
            Prices
            <img class="right-wing" src="{{asset('frontend/images')}}/right-wing.png">
        </div>
        <div class="prices-content mb-50">
            <div class="clearfix">
                <div class="pull-left">Pre-Booked Online*</div>
                <div class="pull-right">£15pp</div>
            </div>
            <div class="clearfix">
                <div class="pull-left">Walk-In Rate*</div>
                <div class="pull-right">£20pp</div>
            </div>
            <div class="clearfix">
                <div class="pull-left">Private Hire (50min Session)*</div>
                <div class="pull-right">£750**</div>
            </div>
            <div class="clearfix">
                <div class="pull-left">Group 10+*</div>
                <div class="pull-right">10% Discount**</div>
            </div>
            <div class="clearfix">
                <div class="pull-left">Group 20+*</div>
                <div class="pull-right">15% Discount**</div>
            </div>
        </div>
        <p>
            * Subject to availability <br>
            ** Cannot be used in conjunction with any other offers
        </p>
    </div>
</div>
<div class="groupsWrapper relative bg-common" style="background-image:url('{{asset('frontend/images')}}/groupsBgOverlayed.png');">
    <div class="container relative">
        <div class="text-center title-design onLight mb-50">
            <img class="left-wing" src="{{asset('frontend/images')}}/white-left-wing.png">
            Groups
            <img class="right-wing" src="{{asset('frontend/images')}}/white-right-wing.png">
        </div>
        <div class="groupContents">
            <div class="groupColumn">
                <div class="groupImage bg-common" style="background-image: url('{{asset('frontend/images')}}/groupImage1.jpg');"></div>
                <div class="groupInfo">
                    <h2>Kid Parties</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</p>
                    <a href="#"><img src="{{asset('frontend/images')}}/readMoreButton.png"></a>
                </div>
            </div>
            <div class="groupColumn">
                <div class="groupImage bg-common" style="background-image: url('{{asset('frontend/images')}}/groupImage2.jpg');"></div>
                <div class="groupInfo">
                    <h2>school & activity groups</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</p>
                    <a href="#"><img src="{{asset('frontend/images')}}/readMoreButton.png"></a>
                </div>
            </div>
            <div class="groupColumn">
                <div class="groupImage bg-common" style="background-image: url('{{asset('frontend/images')}}/groupImage3.jpg');"></div>
                <div class="groupInfo">
                    <h2>Stag Do’s</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</p>
                    <a href="#"><img src="{{asset('frontend/images')}}/readMoreButton.png"></a>
                </div>
            </div>
            <div class="groupColumn">
                <div class="groupImage bg-common" style="background-image: url('{{asset('frontend/images')}}/groupImage4.jpg');"></div>
                <div class="groupInfo">
                    <h2>Hen Do’s</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</p>
                    <a href="#"><img src="{{asset('frontend/images')}}/readMoreButton.png"></a>
                </div>
            </div>
            <div class="groupColumn">
                <div class="groupImage bg-common" style="background-image: url('{{asset('frontend/images')}}/groupImage5.jpg');"></div>
                <div class="groupInfo">
                    <h2>Team Building</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</p>
                    <a href="#"><img src="{{asset('frontend/images')}}/readMoreButton.png"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="galleryWrapper relative">
    <div class="container">
        <div class="row">
            <div class="col-md-6 galleryHeaders">
                <h2>PHOTO</h2>
                <h3>Gallery</h3>
            </div>
            <div class="col-md-6 galleryText relative">
                <p>
                    Want to sample the action of Lagoona Park from the comfort of your own home? Check out our gallery
                    page to see our aqua park – and everything in it – being put to good use. <br><br>
                    Whether it’s a kid’s birthday, corporate team building exercise, hen do, stag do – or just a fun
                    day out with friendsor family – see for yourself exactly what a day out at Aqua Splash looks like.
                    Hint: it’s always filled with fun!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="offset-lg-3 col-lg-9">
                <div class="gallerySlider">
                    <ul class="owl-carousel owl-theme list-unstyled">
                        <li class="item">
                            <img src="{{asset('frontend/images')}}/galleryImage1.jpg">
                            <img src="{{asset('frontend/images')}}/galleryImage2.jpg">
                        </li>
                        <li class="item">
                            <img src="{{asset('frontend/images')}}/galleryImage2.jpg">
                            <img src="{{asset('frontend/images')}}/galleryImage1.jpg">
                        </li>
                        <li class="item">
                            <img src="{{asset('frontend/images')}}/galleryImage1.jpg">
                            <img src="{{asset('frontend/images')}}/galleryImage2.jpg">
                        </li>
                        <li class="item">
                            <img src="{{asset('frontend/images')}}/galleryImage2.jpg">
                            <img src="{{asset('frontend/images')}}/galleryImage1.jpg">
                        </li>
                        <li class="item">
                            <img src="{{asset('frontend/images')}}/galleryImage1.jpg">
                            <img src="{{asset('frontend/images')}}/galleryImage2.jpg">
                        </li>
                        <li class="item">
                            <img src="{{asset('frontend/images')}}/galleryImage2.jpg">
                            <img src="{{asset('frontend/images')}}/galleryImage1.jpg">
                        </li>
                        <li class="item">
                            <img src="{{asset('frontend/images')}}/galleryImage2.jpg">
                            <img src="{{asset('frontend/images')}}/galleryImage1.jpg">
                        </li>
                        <li class="item">
                            <img src="{{asset('frontend/images')}}/galleryImage1.jpg">
                            <img src="{{asset('frontend/images')}}/galleryImage2.jpg">
                        </li>
                        <li class="item">
                            <img src="{{asset('frontend/images')}}/galleryImage2.jpg">
                            <img src="{{asset('frontend/images')}}/galleryImage1.jpg">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('js')
<script type="text/javascript">
    $(document).ready(function () {
        var owl = $('.gallerySlider ul');
        owl.owlCarousel({
            margin: 10,
            nav: true,
            autoplay: false,
            loop: true,
            responsive: {
                0: {
                    items: 2,
                    center: true,
                },
                500: {
                    items: 3
                },
                700: {
                    items: 4
                },
                992: {
                    items: 5
                },
                1201: {
                    items: 6
                }
            },
            navText: ["<img src='{{asset('frontend/images')}}/sliderLeftArrow.png'>", "<img src='{{asset('frontend/images')}}/sliderRightArrow.png'>"]
        });
        $(".banner-video").css("height", $(window).height() + 50);
    })
    $(window).resize(function () {
        $('.banner-video').css('height', $(window).height() + 50);
    });
</script>
@stop
