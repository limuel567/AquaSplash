@extends('frontend.layout')
@section('title','Contact Us | Aqua Splash')
@section('css')
@stop
@section('sub-header')
<div class="se-pre-con"></div>
<div class="innerHeader text-center relative">
    <img src="{{asset('frontend/images')}}/pricingHeader.png">
    <div class="text-center title-design onLight mb-50">
        <img class="left-wing" src="{{asset('frontend/images')}}/white-left-wing.png">
        CONTACT US
        <img class="right-wing" src="{{asset('frontend/images')}}/white-right-wing.png">
    </div>
</div>
@stop
@section('content')
<div class="contactPage-wrapper contactPageWrapper relative">
    <div class="container">
        <div class="contactPageInfo mb-50">
            <div class="mx-767">
                <div class="contactPageHead">
                    <div class="contactPageImg" style="background-image: url('{{asset('frontend/images')}}/messageIcon.png');"></div>
                    <h3>LIVE CHAT</h3>
                </div>
                <p>Give it a try! It’s often the quickest way to get an answer and knows everything</p>
            </div>
        </div>
        <div class="contactPageInfo mb-50 pt-50">
            <div class="mx-767">
                <div class="contactPageHead">
                    <div class="contactPageImg" style="background-image: url('{{asset('frontend/images')}}/phoneIcon.png');"></div>
                    <h3>PHONE</h3>
                </div>
                <p>Want to speak to someone, please note during busier sessions we may not get to the phone that
                    quickly, the live chat is often the quickest way to get your answer</p>
                <p><span>0333 456 1500</span></p>
            </div>
        </div>
        <div class="contactPageInfo mb-50 pt-50">
            <div class="mx-767">
                <div class="contactPageHead">
                    <div class="contactPageImg" style="background-image: url('{{asset('frontend/images')}}/mailIcon.png');"></div>
                    <h3>EMAIL</h3>
                </div>
                <p>Feel free to email us about anything, try our live chat if you want a quick answer or maybe it’s in
                    the FAQ’s</p>
                <p><span>info@aqua-splash.co.uk </span></p>
            </div>
        </div>
        <div class="contactPageInfo mb-50 pt-50">
            <div class="mx-767">
                <div class="contactPageHead">
                    <div class="contactPageImg" style="background-image: url('{{asset('frontend/images')}}/addressIcon.png');"></div>
                    <h3>ADDRESS</h3>
                </div>
                <p><span>Aqua Splash, Redricks Lakes, Redricks Lane, Sawbridgeworth, Herts/Essex, CM21 0RL</span></p>
                <p>Don’t enter the postcode into your Sat-Nav as it will take you to the wrong entrance for the land,
                    instead enter Redricks Lane into the road name and look for the signs
                </p>
            </div>
        </div>
        <div class="contactPageInfo mb-50 pt-50">
            <div class="mx-767">
                <div class="contactPageHead">
                    <div class="contactPageImg" style="background-image: url('{{asset('frontend/images')}}/socialIcon.png');"></div>
                    <h3>SOCIAL MEDIAS</h3>
                </div>
                <p class="mbp-0">Instagram <span class="pull-right">@aquasplash.herts</span></p>
                <p>Facebook <span class="pull-right">/aquasplash.herts</span></p>
            </div>
        </div>
        <div class="contactPageInfo mb-50 pt-50">
            <div class="mx-767">
                <div class="contactPageHead">
                    <div class="contactPageImg" style="background-image: url('{{asset('frontend/images')}}/timeIcon.png');"></div>
                    <h3>LAYOUT & OPENING HOURS</h3>
                </div>
                <p class="mbp-0">April – September <span class="pull-right color-inherit">7 Days Per Week</span></p>
                <p>10am – 5pm <span class="pull-right color-inherit">(Last 1-hour Session is at 5pm)</span></p>
                <p>PARKING ON SITE @ <span>£1</span> per car for the day</p>
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
                    items: 1
                },
                1000: {
                    items: 6
                }
            },
            navText: ["<img src='{{asset('frontend/images')}}/sliderLeftArrow.png'>", "<img src='{{asset('frontend/images')}}/sliderRightArrow.png'>"]
        })
    })
</script>
@stop
