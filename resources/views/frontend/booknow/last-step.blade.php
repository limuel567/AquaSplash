@extends('frontend.layout')
@section('title','Booking | Aqua Splash!')
@section('css')
@stop
@section('sub-header')
<div class="se-pre-con"></div>
<div class="innerHeader text-center relative">
    <img src="{{asset('frontend/images')}}/pricingHeader.png">
    <div class="text-center title-design onLight mb-50">
        <img class="left-wing" src="{{asset('frontend/images')}}/white-left-wing.png">
        BOOKING
        <img class="right-wing" src="{{asset('frontend/images')}}/white-right-wing.png">
    </div>
</div>
@stop
@section('content')
<div class="bookNow">
    <h2>YOU'RE ALMOST THERE!</h2>
    <form>
        <div class="endGame relative">
            <div class="container">
                <h3>Contact Person</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group relative">
                            <input type="text" class="form-control" name="" placeholder="First name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group relative">
                            <input type="text" class="form-control" name="" placeholder="Last name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group relative">
                            <input type="text" class="form-control" name="" placeholder="Email">
                        </div>
                    </div>
                </div>
                <h3>GET A DISCOUNT</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group relative high">
                            <input type="text" class="form-control" name="" placeholder="Enter promo code">
                            <img class="icon" src="{{asset('frontend/images')}}/formIcon4.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="endGame relative mb-50">
            <div class="container">
                <h3>Order Overview</h3>
                <div class="clearfix">
                    <div class="pull-left">splashers</div>
                    <div class="pull-right">1 x £5 = £5</div>
                </div>
                <div class="clearfix">
                    <div class="pull-left">Wet Suits</div>
                    <div class="pull-right">1 x £5 = £5</div>
                </div>
                <div class="clearfix">
                    <div class="pull-left">Date</div>
                    <div class="pull-right">19/12/2018</div>
                </div>
                <div class="clearfix">
                    <div class="pull-left">time</div>
                    <div class="pull-right">10:00 am</div>
                </div>
                <div class="clearfix">
                    <div class="pull-left">Order Overview</div>
                    <div class="pull-right">£20.00</div>
                </div>
            </div>
        </div>
        <div class="endGame relative">
            <div class="container">
                <h3>CREDIT CARD DETAILS</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group relative">
                            <h3>Contact Person</h3>
                            <input type="text" class="form-control" name="" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group relative medium">
                            <h3>Card Number</h3>
                            <input type="text" class="form-control" name="" placeholder="**** **** **** ****">
                            <img class="icon" src="{{asset('frontend/images')}}/formIcon5.png" style="z-index: 5; cursor: pointer;">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group relative">
                            <h3>Expiration Date</h3>
                            <input type="text" class="form-control" name="" placeholder="MM/YY">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group relative">
                            <h3>CSC</h3>
                            <input type="text" class="form-control" name="" placeholder="CVV">
                            <label><img src="{{asset('frontend/images')}}/infoIcon.png" style="margin-right: 5px;">3-digit security number found
                                at the back</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group relative">
                            <h3>POSTCODE</h3>
                            <input type="text" class="form-control" name="" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="next ml-auto">
                <a href="#"><img src="{{asset('frontend/images')}}/editMyBooking.png"></a>
            </div>
            <div class="next submit ml-auto">
                <input type="submit" name="">
                <a href="#"><img src="{{asset('frontend/images')}}/submitBookNow.png"></a>
            </div>
        </div>
    </form>
</div>
@stop
@section('js')
<script type="text/javascript">
$(document).ready(function () {
    $('.submit img').click(function () {
        $('.submit input').click();
    })
})
</script>
@stop
