@extends('frontend.layout')
@section('title','Our Waterpark | Aqua Splash!')
@section('css')
@stop
@section('sub-header')
<div class="se-pre-con"></div>
<div class="innerHeader text-center relative">
    <img src="{{asset('frontend/images')}}/ourWaterparkHeader.png">
    <div class="text-center title-design onLight mb-50">
        <img class="left-wing" src="{{asset('frontend/images')}}/white-left-wing.png">
        OUR WATERPARK
        <img class="right-wing" src="{{asset('frontend/images')}}/white-right-wing.png">
    </div>
</div>
@stop
@section('content')
<div class="whyGoTo-wrapper relative">
    <div class="container">
        <div class="row mb-50">
            <div class="col-lg-5">
                <div class="whyGoTo-image relative">
                    <img src="{{asset('frontend/images')}}/whyGoTo.png">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="whyGoTo-headers">
                    <h2>Why go to</h2>
                    <h3>Aqua Splash</h3>
                    <div class="text-left ml-auto mb-50">
                        <p>
                            Celebrate the sunshine with friends, family or your hard-working colleagues at Aqua Splash.
                            Our inflatable water park has everything you need for a fun-filled day out, whether you’re
                            team building, birthday-bashing or just want to let loose on the water with a few friends.
                            <br><br>
                            All our events, facilities, equipment and structures are completely safe for all; we
                            provide you with all the safety gear you’ll need for your time at the park, including
                            buoyancy aids – and soft helmets for under 16s – and everything is always fully supervised
                            by our trained personnel and lifeguards.<br><br>
                            The water park is suitable for ages 6 and over – providing they’re taller than 1.2m – and
                            we welcome groups looking to celebrate birthdays, hen dos and stag dos, too.<br><br>
                            If you’d rather take in the idyllic views – or relax after a hard day on the water – we’ve
                            got our own café. So, if you’re after something special for the spring or summer, why not
                            get in touch and make a booking? We’re perfectly situated just outside of Sawbridgeworth,
                            Herts/Essex – Only 5 minutes from Junction 7 of the M11 (20 mins from London) – and are
                            happy to help make your day out something to remember
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row inverted mb-50">
            <div class="col-lg-5 order-2">
                <div class="whyGoTo-image relative">
                    <img src="{{asset('frontend/images')}}/aboutOur.png">
                </div>
            </div>
            <div class="col-lg-7 order-1">
                <div class="whyGoTo-headers">
                    <h2>about our</h2>
                    <h3>AquaPark</h3>
                    <div class="text-left mr-auto">
                        <p>
                            There’s always a lot going on at Aqua Splash. Our inflatable water park attracts all walks
                            of life, from kids looking for fun to eager stags and more. <br><br>
                            We’re all about creating a safe, fun and free-feeling environment for all. As long as
                            you’re happy to get soaked, you’re bound to enjoy your time at the splash park. <br><br>
                            Whether you’re tackling our abundance of inflatable obstacles, fancy a few runs on our
                            inflatable slides, there are a few things you should know. Here are some of the parks rules
                            and regulations, as well as some general info that we’re commonly asked about. Have a read
                            through for all you need to know about Aqua Splash.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('js')
@stop
