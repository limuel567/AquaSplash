@extends('frontend.layout')
@section('title','Gallery | Aqua Splash')
@section('css')
@stop
@section('sub-header')
<div class="se-pre-con"></div>
<div class="innerHeader text-center relative">
    <img src="{{asset('frontend/images')}}/pricingHeader.png">
    <div class="text-center title-design onLight mb-50">
        <img class="left-wing" src="{{asset('frontend/images')}}/white-left-wing.png">
        Gallery
        <img class="right-wing" src="{{asset('frontend/images')}}/white-right-wing.png">
    </div>
</div>
@stop
@section('content')
<div class="galleryPageWrapper">
        <div class="container">
            <div class="intro mb-50 clearfix">
                <p>Want to sample the action of Lagoona Park from the comfort of your own home? Check out our gallery page to see our aqua park – and everything in it – being put to good use. <br><br>
                Whether it’s a kid’s birthday, corporate team building exercise, hen do, stag do – or just a fun day out with friends or family – see for yourself exactly what a day out at Aqua Splash looks like. Hint: it’s always filled with fun!</p>
            </div>
        </div>
        <ul class="nav nav-tabs">
            <li class="active"><a class="imgConTabs" data-toggle="tab" href="#photoTabs">photoTabs</a></li>
            <li><a class="vidConTabs" data-toggle="tab" href="#videoTabs">Menu 1</a></li>
        </ul>
        <div class="tab-content">
            <div id="photoTabs" class="tab-pane fade in active show">
                <div class="container relative">
                    <div class="galleryImageSlider relative">
                        <ul class="owl-carousel owl-theme list-unstyled">
                            <li class="item"><img src="{{asset('frontend/images')}}/gPageImage1.png"></li>
                            <li class="item"><img src="{{asset('frontend/images')}}/gPageImage1.png"></li>
                            <li class="item"><img src="{{asset('frontend/images')}}/gPageImage1.png"></li>
                            <li class="item"><img src="{{asset('frontend/images')}}/gPageImage1.png"></li>
                            <li class="item"><img src="{{asset('frontend/images')}}/gPageImage1.png"></li>
                            <li class="item"><img src="{{asset('frontend/images')}}/gPageImage1.png"></li>
                            <li class="item"><img src="{{asset('frontend/images')}}/gPageImage1.png"></li>
                            <li class="item"><img src="{{asset('frontend/images')}}/gPageImage1.png"></li>
                        </ul>
                    </div>
                    <div class="tabControl">
                        <ul class="list-unstyled">
                            <li><a class="photoControl active" ><span>Photos</span><i class="fa fa-camera-retro"></i></a></li>
                            <li><a class="videoControl" ><span>Videos</span><i class="fa fa-video-camera"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="videoTabs" class="tab-pane fade">
                <div class="container relative">
                    <div class="galleryImageSlider videoThis relative">
                        <ul class="owl-carousel owl-theme list-unstyled">
                            <li class="item relative">
                                <img class="asPoster" src="{{asset('frontend/images')}}/gPageImage1.png">
                                <button class="PlayButton fa fa-play"></button>
                                <video width="100%" controls>
                                    <source src="{{asset('frontend/images')}}/bannerVideo.mp4" type="video/mp4">
                                </video>
                            </li>
                            <li class="item relative">
                                <img class="asPoster" src="{{asset('frontend/images')}}/gPageImage1.png">
                                <button class="PlayButton fa fa-play"></button>
                                <video width="100%" controls>
                                    <source src="{{asset('frontend/images')}}/bannerVideo.mp4" type="video/mp4">
                                </video>
                            </li>
                        </ul>
                    </div>
                    <div class="tabControl">
                        <ul class="list-unstyled">
                            <li><a class="photoControl" ><span>Photos</span><i class="fa fa-camera-retro"></i></a></li>
                            <li><a class="videoControl active"><span>Videos</span><i class="fa fa-video-camera"></i></a></li>
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
        var owl2 = $('.galleryImageSlider.videoThis ul');
        owl2.owlCarousel({
            margin: 10,
            center: true,
            nav: true,
            dots: true,
            autoplay: false,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                }
            },
            mouseDrag: false,
            touchDrag: false,
        });
        var owl = $('.galleryImageSlider ul');
        owl.owlCarousel({
            margin: 10,
            center: true,
            nav: true,
            dots: true,
            autoplay: false,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                }
            },
        });
        var dotcount = 1;
        $('.owl-dot').each(function () {
            $(this).addClass('dotnumber' + dotcount);
            $(this).attr('data-info', dotcount);
            dotcount = dotcount + 1;
        });
        var slidecount = 1;
        $('.owl-item').not('.cloned').each(function () {
            $(this).addClass('slidenumber' + slidecount);
            slidecount = slidecount + 1;
        });
        // SYNC THE SLIDE NUMBER IMG TO ITS DOT COUNTERPART (E.G SLIDE 1 IMG TO DOT 1 BACKGROUND-IMAGE)
        $('.owl-dot').each(function () {
            var grab = $(this).data('info');
            var slidegrab = $('.slidenumber' + grab + ' img').attr('src');
            console.log(slidegrab);
            $(this).css("background-image", "url(" + slidegrab + ")");
        });
        // SWITCH BETWEEN VIDEO AND IMAGE
        $('.photoControl').click(function () {
            $('.imgConTabs').click();
            $("video").each(function () {
                this.pause()
            });
            $('.asPoster').show();
            $('.PlayButton').show();
        })
        $('.videoControl').on('click', function () {
            $('.vidConTabs').click();
        })
        // Stop Video on click
        $('.owl-dot').click(function () {
            $("video").each(function () {
                this.pause()
            });
            $('.asPoster').show();
            $('.PlayButton').show();
        })
        $('.PlayButton').click(function () {
            $(this).parent('li').children("video").each(function () {
                this.play();
            });
            $(this).parent('li').children('img').hide();
            $(this).hide();
        })
    })
</script>
@stop
