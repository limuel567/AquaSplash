<footer id="footer" class="bg-common relative" style="background-image: url({{asset('frontend/images')}}/footerImage.png);">
    <div class="contactWrapper relative">
        <div class="container">
            <div class="text-center title-design onLight mb-50">
                <img class="left-wing" src="{{asset('frontend/images')}}/white-left-wing.png">
                GET IN TOUCH
                <img class="right-wing" src="{{asset('frontend/images')}}/white-right-wing.png">
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39476.46450507991!2d0.09392252831279456!3d51.8010619431952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d89bbdeda5fc51%3A0x8c455f569e87eea4!2sRedricks+Lakes!5e0!3m2!1sen!2sph!4v1543961922967"
                            frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contactForm">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Hi! My name is...">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="You can reach me at...">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="I would like to...">
                        </div>
                        <div class="form-group text-center mb-0">
                            <button class="submit"><img src="{{asset('frontend/images')}}/SubmitButton.png"></button>
                            <button class="submit-mobile"><img src="{{asset('frontend/images')}}/SubmitButtonMobile.png"></button>
                        </div>
                    </div>
                    <div class="contactInfo">
                        <ul class="list-unstyled">
                            <li>
                                <img src="{{asset('frontend/images')}}/addressIcon.png">
                                <span>{!!$configuration->address!!}</span>
                                <hr>
                            </li>
                            <li>
                                <img src="{{asset('frontend/images')}}/mailIcon.png">
                                <span>{!!$configuration->email!!}</span>
                                <hr>
                            </li>
                            <li>
                                <img src="{{asset('frontend/images')}}/contactIcon.png">
                                <span>{!!$configuration->contact_number!!}</span>
                            </li>
                            <li>
                                <img src="{{asset('frontend/images')}}/socialIcon.png">
                                <span>
                                    @foreach (unserialize($configuration->social_media_links) as $key => $item)
                                    <a href="https://www.{!!$key!!}.com/{!!$item!!}" class="fa fa-{!!$key!!}" target="_blank"></a>                                 
                                    @endforeach
                                </span>
                            </li>
                        </ul>
                        <div class="text-right fqtc">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="{{url('faq')}}">FAQ</a></li>
                                <li class="list-inline-item"><a href="{{url('terms-and-condition')}}">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footerNav">
        <img id="navCurveInverted" src="{{asset('frontend/images')}}/navCurveInverted.png">
        <div class="container container-mobile-fluid">
            <div class="clearfix">
                <div class="pull-left logoHolder">
                    <img src="{{asset('frontend/images')}}/logo.png">
                </div>
                <div class="pull-right navHolder">
                    <ul class="list-inline">
                        <li class="list-inline-item {{Request::segment(1) == '' ? 'active' : ''}}"><a href="{{url('/')}}">Home</a></li>
                        <li class="list-inline-item {{Request::segment(1) == 'our-waterpark' ? 'active' : ''}}"><a href="{{url('our-waterpark')}}">Our WaterPark</a></li>
                        <li class="list-inline-item {{Request::segment(1) == 'prices' ? 'active' : ''}}"><a href="{{url('prices')}}">Prices</a></li>
                        <li class="list-inline-item {{Request::segment(1) == 'events' ? 'active' : ''}}"><a href="{{url('events')}}">Events</a></li>
                        <li class="list-inline-item {{Request::segment(1) == 'gallery' ? 'active' : ''}}"><a href="{{url('gallery')}}">Gallery</a></li>
                        <li class="list-inline-item {{Request::segment(1) == 'contact-us' ? 'active' : ''}}"><a href="{{url('contact-us')}}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyHolder text-center">
            <div class="container">
                {!! $configuration->copyright !!}
            </div>
        </div>
    </div>
</footer>
