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
    <div class="container">
        <h2>A WET AND SPLASHY ADVENTURE AWAITS! <br>BOOK YOUR TICKETS TODAY.</h2>
    </div>
    <form>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group relative">
                        <h3>NUMBER OF SPLASHERS</h3>
                        <h4>(£15/HEAD PER HOUR)</h4>
                        <input type="text" class="form-control" name="" placeholder="Guest/s">
                        <img class="icon" src="{{asset('frontend/images')}}/formIcon1.png">
                        <label>Minimum of 6 and under 10 must be accompanied by an adult</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group relative">
                        <h3>NUMBER OF WET SUITS*</h3>
                        <h4>*Optional (£5 EACH)</h4>
                        <input type="text" class="form-control" name="" placeholder="Suit/s">
                        <img class="icon" src="{{asset('frontend/images')}}/formIcon2.png">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group relative">
                        <h3>DATE</h3>
                        <h4>&nbsp;</h4>
                        <input type="text" class="form-control" name="" placeholder="Date" id="date">
                        <img class="icon" src="{{asset('frontend/images')}}/formIcon3.png">
                    </div>
                </div>
            </div>
            <div class="timeSelect">
                <div class="row titleRow">
                    <div class="col-4">TIME</div>
                    <div class="col-5">AVAILABILITY</div>
                    <div class="col-3 text-center">SELECT</div>
                </div>
                <div class="row">
                    <div class="col-4">10:00 AM</div>
                    <div class="col-5">45 tickets available</div>
                    <div class="col-3 text-center"><label class="selectHere"><i class="fa fa-check"></i><input type="radio"
                                name="time"></label></div>
                </div>
                <div class="row">
                    <div class="col-4">11:00 AM</div>
                    <div class="col-5">45 tickets available</div>
                    <div class="col-3 text-center"><label class="selectHere"><i class="fa fa-check"></i><input type="radio"
                                name="time"></label></div>
                </div>
                <div class="row">
                    <div class="col-4">12:00 PM</div>
                    <div class="col-5">45 tickets available</div>
                    <div class="col-3 text-center"><label class="selectHere"><i class="fa fa-check"></i><input type="radio"
                                name="time"></label></div>
                </div>
                <div class="row">
                    <div class="col-4">01:00 PM</div>
                    <div class="col-5">45 tickets available</div>
                    <div class="col-3 text-center"><label class="selectHere"><i class="fa fa-check"></i><input type="radio"
                                name="time"></label></div>
                </div>
                <div class="row">
                    <div class="col-4">02:00 PM</div>
                    <div class="col-5">45 tickets available</div>
                    <div class="col-3 text-center"><label class="selectHere"><i class="fa fa-check"></i><input type="radio"
                                name="time"></label></div>
                </div>
                <div class="row">
                    <div class="col-4">03:00 PM</div>
                    <div class="col-5">45 tickets available</div>
                    <div class="col-3 text-center"><label class="selectHere"><i class="fa fa-check"></i><input type="radio"
                                name="time"></label></div>
                </div>
                <div class="row">
                    <div class="col-4">04:00 PM</div>
                    <div class="col-5">45 tickets available</div>
                    <div class="col-3 text-center"><label class="selectHere"><i class="fa fa-check"></i><input type="radio"
                                name="time"></label></div>
                </div>
                <div class="row">
                    <div class="col-4">05:00 PM</div>
                    <div class="col-5">45 tickets available</div>
                    <div class="col-3 text-center"><label class="selectHere"><i class="fa fa-check"></i><input type="radio"
                                name="time"></label></div>
                </div>
            </div>
            <div class="next ml-auto">
                <a href="{{url('booknow/last-step')}}"><img src="{{asset('frontend/images')}}/NextButton.png"></a>
            </div>
        </div>
    </form>
</div>
@stop
@section('js')
<script type="text/javascript">
    $(document).ready(function () {
        $('.selectHere').click(function () {
            $('.selectHere i').css("display", "none");
            $(this).children('i').css("display", "block");
        })
        $('#date').datetimepicker({
            format: 'DD/MM/YYYY'
        });
    })
</script>
@stop
