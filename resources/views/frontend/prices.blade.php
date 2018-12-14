@extends('frontend.layout')
@section('title','Prices | Aqua Splash')
@section('css')
@stop
@section('sub-header')
<div class="se-pre-con"></div>
<div class="innerHeader text-center relative">
    <img src="{{asset('frontend/images')}}/pricingHeader.png">
    <div class="text-center title-design onLight mb-50">
        <img class="left-wing" src="{{asset('frontend/images')}}/white-left-wing.png">
        PRICES
        <img class="right-wing" src="{{asset('frontend/images')}}/white-right-wing.png">
    </div>
</div>
@stop
@section('content')
<div class="prices-wrapper pricingWrapper relative">
    <div class="container">
        <div class="pricingInfo mb-50">
            <p>
                There are many ways to enjoy Aqua Splash. From the walk-in experience, advance booking to private
                hires. <br><br>
                On this page, you’ll get an overview of our prices and pricing structures for our water park. We also
                have special offers available and gift vouchers if you’d like to treat someone special to a fun
                adventure on the water. <br><br>
                Check out what we have to offer, and don’t hesitate to get in touch if you need any more information.
                <br><br>
                Sessions are <span>50mins and start on the hour every hour</span>, you can pre-book for a special
                online only discount or you can visit us without booking and pay on the day. Pre-booking online
                guarantees entry.
            </p>
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
            navText: ["<img src='img/sliderLeftArrow.png'>", "<img src='img/sliderRightArrow.png'>"]
        })
    })
</script>
@stop
