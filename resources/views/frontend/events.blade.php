@extends('frontend.layout')
@section('title','Events | Aqua Splash')
@section('css')
@stop
@section('sub-header')
<div class="se-pre-con"></div>
<div class="innerHeader text-center relative">
    <img src="{{asset('frontend/images')}}/pricingHeader.png">
    <div class="text-center title-design onLight mb-50">
        <img class="left-wing" src="{{asset('frontend/images')}}/white-left-wing.png">
        EVENTS
        <img class="right-wing" src="{{asset('frontend/images')}}/white-right-wing.png">
    </div>
</div>
@stop
@section('content')
<div class="eventsPage-wrapper eventsPageWrapper relative">
    <div class="container">
        <div class="eventsPageInfo mb-50">
            <div class="eventsPageHead text-center">
                <h2>KID PARTIES</h2>
            </div>
            <div class="slider-area">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="eventsPageImg">
                            <a class="lightbox" href="{{asset('frontend/images')}}/slider-img-3.jpg">
                                <img src="{{asset('frontend/images')}}/slider-img-3.jpg">
                                <div class="eventsPageoverlay">
                                    <div class="zoom">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="eventsPageImg">
                            <a class="lightbox" href="{{asset('frontend/images')}}/slider-img-2.jpg">
                                <img src="{{asset('frontend/images')}}/slider-img-2.jpg">
                                <div class="eventsPageoverlay">
                                    <div class="zoom">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="eventsPageImg">
                            <a class="lightbox" href="{{asset('frontend/images')}}/slider-img-1.jpg">
                                <img src="{{asset('frontend/images')}}/slider-img-1.jpg">
                                <div class="eventsPageoverlay">
                                    <div class="zoom">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="eventsPageImg">
                            <a class="lightbox" href="{{asset('frontend/images')}}/slider-img-3.jpg">
                                <img src="{{asset('frontend/images')}}/slider-img-3.jpg">
                                <div class="eventsPageoverlay">
                                    <div class="zoom">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="eventPageContent pt-20 pb-50">
                <p>Planning your child’s birthday is never easy – let alone fun – but at Aqua Splash we aim to buck the
                    trend. Giveyour kid and their friends a real treat this year by organising a water park birthday
                    bash on our beautiful lake in
                    Hertfordshire/Essex.</p>
                <p>We’ve hosted many children’s parties, and our inflatable water park is the perfect environment for a
                    fun-filled birthday to remember. We have activities for kids of all ages over 6 (Under 10’s must be
                    accompanied on the park with an over 12 at all times)</p>
                <p>The team at Aqua Splash make kids parties special, and we also keep them safe. We have full safety
                    equipment available for all activities, and everything is supervised for your peace of mind by our
                    suitably qualified staff.</p>
                <p>Once you’ve dried everyone off from the lake, we’ve got an event space for the children to get
                    together and unwind after their activities – with a birthday buffet or barbeque available if you’d
                    rather not handle the cooking!</p>
                <p>To find out more, or to arrange a booking with us for the big day, simply get in touch and we’ll be
                    more than happy to help.</p>
            </div>
        </div>
    </div>
    <div class="eventsPageInfo mb-50 eventsPageInfo-after-before">
        <div class="container">
            <div class="eventsPageHead text-center">
                <h2>SCHOOLS & ACTIVITY GROUPS</h2>
            </div>
            <div class="slider-area">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="eventsPageImg">
                            <a class="lightbox" href="{{asset('frontend/images')}}/slider-img-3.jpg">
                                <img src="{{asset('frontend/images')}}/slider-img-3.jpg">
                                <div class="eventsPageoverlay">
                                    <div class="zoom">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="eventsPageImg">
                            <a class="lightbox" href="{{asset('frontend/images')}}/slider-img-2.jpg">
                                <img src="{{asset('frontend/images')}}/slider-img-2.jpg">
                                <div class="eventsPageoverlay">
                                    <div class="zoom">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="eventsPageImg">
                            <a class="lightbox" href="{{asset('frontend/images')}}/slider-img-1.jpg">
                                <img src="{{asset('frontend/images')}}/slider-img-1.jpg">
                                <div class="eventsPageoverlay">
                                    <div class="zoom">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="eventsPageImg">
                            <a class="lightbox" href="{{asset('frontend/images')}}/slider-img-3.jpg">
                                <img src="{{asset('frontend/images')}}/slider-img-3.jpg">
                                <div class="eventsPageoverlay">
                                    <div class="zoom">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="eventPageContent pt-20">
                <p>Looking for something completely different to do when you have a large group to cater for is not
                    easily found – until now.</p>
                <p>Here at Aqua Splash we can take up to 100 of even the most demanding young divas who need to burn
                    all thatexcess energy off.</p>
                <p>An ideal activity as an end of term or extracurricular treat.</p>
                <p>To find out more, or to arrange a booking with us for the big day, simply get in touch and we’ll be
                    more than happy to help.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="eventsPageInfo mb-50 pt-20">
            <div class="eventsPageHead text-center">
                <h2>STAG DO'S</h2>
            </div>
            <div class="slider-area">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="eventsPageImg">
                            <a class="lightbox" href="{{asset('frontend/images')}}/slider-img-3.jpg">
                                <img src="{{asset('frontend/images')}}/slider-img-3.jpg">
                                <div class="eventsPageoverlay">
                                    <div class="zoom">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="eventsPageImg">
                            <a class="lightbox" href="{{asset('frontend/images')}}/slider-img-2.jpg">
                                <img src="{{asset('frontend/images')}}/slider-img-2.jpg">
                                <div class="eventsPageoverlay">
                                    <div class="zoom">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="eventsPageImg">
                            <a class="lightbox" href="{{asset('frontend/images')}}/slider-img-1.jpg">
                                <img src="{{asset('frontend/images')}}/slider-img-1.jpg">
                                <div class="eventsPageoverlay">
                                    <div class="zoom">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="eventsPageImg">
                            <a class="lightbox" href="{{asset('frontend/images')}}/slider-img-3.jpg">
                                <img src="{{asset('frontend/images')}}/slider-img-3.jpg">
                                <div class="eventsPageoverlay">
                                    <div class="zoom">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="eventPageContent pt-20 pb-50">
                <p>We welcome group stag do bookings at Aqua Splash, diving right in to building the perfect stag
                    celebration foryour entire party.</p>
                <p>Other stag parties just don’t compare. Give the stag a workout with an action-packed day on the
                    water. We canhelp you with fancy dress, and also make sure you’re fully fed at our on-site café.</p>
                <p>If you’re a best man who needs help organising a special stag do in Sawbridgeworth,
                    Hertfordshire/Essex, contact us today. We have experience managing stag dos and group bookings,
                    ensuring they’re built to meet your precise needs.</p>
            </div>
        </div>
    </div>
    <div class="eventsPageInfo mb-50 eventsPageInfo-after-before">
        <div class="container">
            <div class="eventsPageHead text-center">
                <h2>HEN DO'S</h2>
            </div>
            <div class="slider-area">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="eventsPageImg">
                            <a class="lightbox" href="{{asset('frontend/images')}}/slider-img-3.jpg">
                                <img src="{{asset('frontend/images')}}/slider-img-3.jpg">
                                <div class="eventsPageoverlay">
                                    <div class="zoom">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="eventsPageImg">
                            <a class="lightbox" href="{{asset('frontend/images')}}/slider-img-2.jpg">
                                <img src="{{asset('frontend/images')}}/slider-img-2.jpg">
                                <div class="eventsPageoverlay">
                                    <div class="zoom">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="eventsPageImg">
                            <a class="lightbox" href="{{asset('frontend/images')}}/slider-img-1.jpg">
                                <img src="{{asset('frontend/images')}}/slider-img-1.jpg">
                                <div class="eventsPageoverlay">
                                    <div class="zoom">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="eventsPageImg">
                            <a class="lightbox" href="{{asset('frontend/images')}}/slider-img-3.jpg">
                                <img src="{{asset('frontend/images')}}/slider-img-3.jpg">
                                <div class="eventsPageoverlay">
                                    <div class="zoom">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="eventPageContent pt-20">
                <p>Planning a hen do in or around London? Why not do something different? Take a trip to Aqua Splash.</p>
                <p>We custom build hen parties to your liking – from fancy dress and photos to dining at our café – we
                    can help you organise a day the bride-to-be will never forget.</p>
                <p>Our advisors are with you every step of the way to guide you through the planning pitfalls,
                    tailoring a hen party around the needs of you and the future bride.</p>
                <p>To enquire about our group hen party bookings or to get started on creating a wet and wild day on
                    the water, just get in touch with us today.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="eventsPageInfo mb-50 pt-20">
            <div class="eventsPageHead text-center">
                <h2>TEAM BUILDING</h2>
            </div>
            <div class="slider-area">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="eventsPageImg">
                            <a class="lightbox" href="{{asset('frontend/images')}}/slider-img-3.jpg">
                                <img src="{{asset('frontend/images')}}/slider-img-3.jpg">
                                <div class="eventsPageoverlay">
                                    <div class="zoom">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="eventsPageImg">
                            <a class="lightbox" href="{{asset('frontend/images')}}/slider-img-2.jpg">
                                <img src="{{asset('frontend/images')}}/slider-img-2.jpg">
                                <div class="eventsPageoverlay">
                                    <div class="zoom">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="eventsPageImg">
                            <a class="lightbox" href="{{asset('frontend/images')}}/slider-img-1.jpg">
                                <img src="{{asset('frontend/images')}}/slider-img-1.jpg">
                                <div class="eventsPageoverlay">
                                    <div class="zoom">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="eventsPageImg">
                            <a class="lightbox" href="{{asset('frontend/images')}}/slider-img-3.jpg">
                                <img src="{{asset('frontend/images')}}/slider-img-3.jpg">
                                <div class="eventsPageoverlay">
                                    <div class="zoom">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="eventPageContent pt-20">
                <p>What better way to build up strong bonds with your colleagues than a day out on the Aqua Splash
                    lake? We happily cater to group bookings for offices and businesses, with corporate team building
                    events being one of our most popular booking options.</p>
                <p>Let loose far from the office on our range of water slides and pop up inflatable obstacle courses.
                    Seize your chance atop the inflatable corporate ladder.</p>
                <p>There’s space for all kinds of fun at Aqua Splash, and our friendly team will make sure everything
                    goes to plan right from the beginning.</p>
                <p>We manage your team building exercises with precision, ensuring all group visits are handled safely
                    and professionally so you can enjoy your time with us without any worries.</p>
                <p>If you’re planning a corporate event in Sawbridgeworth, Hertfordshire/Essex and want to enquire
                    about our group bookings, simply get in touch with us today.</p>
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
        });
        var owl = $('.slider-area .owl-carousel');
        owl.owlCarousel({
            nav: true,
            autoplay: false,
            navText: ["<img src='{{asset('frontend/images')}}/sliderLeftArrow.png'>", "<img src='{{asset('frontend/images')}}/sliderRightArrow.png'>"],
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3,
                    nav: true,
                    autoplay: true
                }
            }
        });
        baguetteBox.run('.eventsPageImg');
    })
</script>
@stop
