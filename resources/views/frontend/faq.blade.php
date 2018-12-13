@extends('frontend.layout')
@section('title','FAQ | Aqua Splash!')
@section('css')
@stop
@section('sub-header')
<div class="se-pre-con"></div>
<div class="innerHeader text-center relative">
    <img src="{{asset('frontend/images')}}/ourWaterparkHeader.png">
    <div class="text-center title-design onLight mb-50">
        <img class="left-wing" src="{{asset('frontend/images')}}/white-left-wing.png">
        FAQ'S
        <img class="right-wing" src="{{asset('frontend/images')}}/white-right-wing.png">
    </div>
</div>
@stop
@section('content')
<div class="faqList">
    <div class="container">
        <div class="row">
            <div class="col-md-6 faqItem">
                <h2>When is the park open?</h2>
                <p>We open from April – September for a spring and summer of fun! Check out our location page here to
                    see our operating times.</p>
            </div>
            <div class="col-md-6 faqItem">
                <h2>Are activities supervised?</h2>
                <p>Safety in all things is a key goal of ours. Every activity is supervised by fully trained
                    lifeguards, and we also have an extensive selection of safety equipment available as standard and
                    for purchase.</p>
            </div>
            <div class="col-md-6 faqItem">
                <h2>How old do you have to be?</h2>
                <p>Safety in all things is a key goal of ours. Every activity is supervised by fully trained
                    lifeguards, and we also have an extensive selection of safety equipment available as standard and
                    for purchase.</p>
            </div>
            <div class="col-md-6 faqItem">
                <h2>Do you have parking?</h2>
                <p>Yes, we have an off-road car park with approximately 200 spaces, with a charge of £1 per day per
                    car.</p>
            </div>
            <div class="col-md-6 faqItem">
                <h2>Do you offer group discounts?</h2>
                <p>Yes, group and party discounts are available on request. Groups of 10+ people will receive a 10%
                    discount, and groups of 20+ people will receive a 15% discount.</p>
            </div>
            <div class="col-md-6 faqItem">
                <h2>Can I use a selfie stick or GoPro?</h2>
                <p>No to the selfie stick but yes to the GoPro (at your own risk)</p>
            </div>
            <div class="col-md-6 faqItem">
                <h2>Can I bring food from outside?</h2>
                <p>No food and drink from outside of the park is permitted. We have vending machines on site, and a
                    café located on site.</p>
            </div>
            <div class="col-md-6 faqItem">
                <h2>Do you have to book?</h2>
                <p>We welcome walk-ins subject to availability but booking in advance will guarantee your time slot
                    (and is slightly cheaper). The park does get very busy, so it’s always advised to book in advance.</p>
            </div>
            <div class="col-md-6 faqItem">
                <h2>Can I bring my dog?</h2>
                <p>You can! But all dogs must be kept on a lead, and owners are responsible for cleaning up after them.</p>
            </div>
            <div class="col-md-6 faqItem">
                <h2>Do you have lockers?</h2>
                <p>Yes, we have valuables only lockers, you can buy a combination lock on site for £3 or bring your own
                    for FREE</p>
            </div>
            <div class="col-md-6 faqItem">
                <h2>Do you have changing facilities/showers?</h2>
                <p>Yes, but we advise bringing a towel.</p>
            </div>
            <div class="col-md-6 faqItem">
                <h2>Do I have to print out my tickets?</h2>
                <p>No, just a booking reference is good enough</p>
            </div>
            <div class="col-md-6 faqItem">
                <h2>I’m not going on the park, what do I do?</h2>
                <p>Check your junk file as they’re normally there, if not please contact bookings@aqua-splash.co.uk</p>
            </div>
            <div class="col-md-6 faqItem">
                <h2>I didn’t receive my ticket?</h2>
                <p>We have a viewing area for non-participants</p>
            </div>
            <div class="col-md-6 faqItem">
                <h2>How do I find you?</h2>
                <p>Click here to see our map & address</p>
            </div>
            <div class="col-md-6 faqItem">
                <h2>Can I do a group waiver?</h2>
                <p>Check your junk file as they’re normally there, if not please contact bookings@aqua-splash.co.uk</p>
            </div>
            <div class="col-md-6 faqItem">
                <h2>What safety equipment do I need?</h2>
                <p>All equipment is supplied for your day</p>
            </div>
            <div class="col-md-6 faqItem">
                <h2>Are wetsuits mandatory?</h2>
                <p>No, these are entirely optional.</p>
            </div>
            <div class="col-md-6 faqItem">
                <h2>Do you take cash/card?</h2>
                <p>Yes, we are able to take both</p>
            </div>
            <div class="col-md-6 faqItem">
                <h2>Do I have to stay on site while my children are on the park? </h2>
                <p>Yes, all under 16’s need to have a responsible parent/guardian on site.</p>
            </div>
            <div class="col-md-6 faqItem">
                <h2>How many adults per over 6-year-old / under 14-year-old to supervise?</h2>
                <p>1 Supervisor per 3 participants.</p>
            </div>
            <div class="col-md-6 faqItem">
                <h2>I have a child with SEN, is this suitable activity?</h2>
                <p>Each child is different, and we offer ‘carer goes free”, please book only for the SEN participant
                    and when on site alert a member of staff to your presence.</p>
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
