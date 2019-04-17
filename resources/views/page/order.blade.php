@extends('layouts.user')

@section('content')
<div class="wrapper blob-bg">
        <main role="main">
            <section class="ftco-section bg price">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-7 heading-title ftco-animate text-center">
                            <h2 class="mb-4">CHỌN GÓI</h2>
                            <p>Chọn gói thiết bị phù hợp với kế hoạch của bạn<p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 ftvo-animate">
                        <div class="block-7">
                            <div class="text-center">
                                <img class="icon" src="images/update/OvalGraphic.png"><br>
                                <h2 class="heading">SHOWTIMEVR LITE</h2>
                                <span class="price"><sup></sup> <span class="number">25 EUR / 1 Day</span></span>
                                <ul class="pricing-text mb-5">
                                    <li>maximum 25 headsets</li>
                                    <li>remote controller</li>
                                    <li>Select any content</li>
                                </ul>
                                <button class="btn-contanted buy"><span >Chọn gói</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ftvo-animate">
                        <div class="block-7">
                            <div class="text-center">
                                <img class="icon" src="images/update/LifeBuoy.png"><br>
                                <h2 class="heading">SHOWTIMEVR LITE</h2>
                                <span class="price"><sup></sup> <span class="number">25 EUR / 1 Day</span></span>
                                <ul class="pricing-text mb-5">
                                    <li>maximum 25 headsets</li>
                                    <li>remote controller</li>
                                    <li>Select any content</li>
                                </ul>
                                <a href="#order-step1"><button data-scroll="#order-step1" class=" btn-contanted buy scrollbutton"><span>Chọn gói</span></button></a>
                                <!-- <a href="order/{{$plan->id}}" class="btn btn-primary d-block px-2 py-3">Buy</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ftvo-animate">
                        <div class="block-7">
                            <div class="text-center">
                                <img class="icon" src="images/update/Compass.png"><br>
                                <h2 class="heading">SHOWTIMEVR LITE</h2>
                                <span class="price"><sup></sup> <span class="number">25 EUR / 1 Day</span></span>
                                <ul class="pricing-text mb-5">
                                    <li>maximum 25 headsets</li>
                                    <li>remote controller</li>
                                    <li>Select any content</li>
                                </ul>
                                <button class=" btn-contanted buy"><span>Chọn gói</span></button>
                                <!-- <a href="order/{{$plan->id}}" class="btn btn-primary d-block px-2 py-3">Buy</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ftvo-animate">
                        <div class="block-7">
                            <div class="text-center">
                                <img class="icon" src="images/update/Compass.png"><br>
                                <h2 class="heading">SHOWTIMEVR LITE</h2>
                                <span class="price"><sup></sup> <span class="number">25 EUR / 1 Day</span></span>
                                <ul class="pricing-text mb-5">
                                    <li>maximum 25 headsets</li>
                                    <li>remote controller</li>
                                    <li>Select any content</li>
                                </ul>
                                <button class=" btn-contanted buy"><span >Chọn gói</span></button>
                                <!-- <a href="order/{{$plan->id}}" class="btn btn-primary d-block px-2 py-3">Buy</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="order-step1" class="ftco-section section-step1">

                <div class="container order-forms step1">
                    <div class="row hero my-4">
                        <h1 class='col-12 mb-2'>Unlock the power of VR Sync</h1>
                        <div class="step-counter">
                        </div>
                    </div>
                    <div class="row justify-content-center my-4">
                        <div class="col-12 col-md-10 col-lg-8 card">
                            <div class="card-body p-3 py-4">
                                <h2 class='text-primary text-center my-4'>License information</h2>

                                <form action="order/{{$plan->id}}" method="POST" enctype="multipart/form-data">                            
                                    <div id="pricingcalculator" data-deviceamount="" data-period="" data-startdate="" data-syncbox="">
                                        <div>
                                            <div class="form-row license-input">
                                                <div class="col-12 col-md-6 form-group px-2">
                                                    <label for="start_date">Infomation Package:</label>
                                                    <p>{{$plan->description}} with {{$plan->max_headsets}} headsets</p>
                                                </div>
                                                <div class="col-12 col-md-6 form-group px-2 datepick" >
                                                    <label for="start_date">Start time - to date</label>
                                                    <input type="text" id="datetimes" name="datetimes" class="form-control pull-right" />

                                                </div>
                                            </div>
                                            <div class="w-100 text-right total col-12">Total: <strong id="total-budget">€0</strong><br><small>Prices excluding VAT</small></div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button class="btn next btn-primary mx-auto" type="submit">Next</button>
                                    </div>
                                    <div id="placeholder">Date start: to</div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
</div>
<script type="text/javascript">
var startDate;
var endDate;
var state = 0;
$(document).ready(function() {
    $('input[name="datetimes"]')
    .daterangepicker(
       {
            timePicker: true,
            startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(32, 'hour'),
            locale: {
                format: 'M/DD hh:mm A'
            },
            minDate: new Date()
    })
    .bind('datepicker-close',function()
    {
        /* This event will be triggered when second date is selected */
        console.log('close');

    })

    $( ".total" )
    .click(function() {
       console.log($('input[name="datetimes"]').val());
    })
    

 });
 function changeColor(){
    var clicked = true;
    if(clicked){
        $('button').css({
            'color' : '#3D5AFE',
            'border' : '1px solid #3D5AFE !important',
            'box-sizing' :' border-box',
            'border-radius' : '4px !important',
            'background' : "#FFFFFF"
        });
        $('.buy').html( "<span>Chọn gói</span>" );
        $(this).css( {
            'color' : '#FFFFFF ',
            'box-sizing' :' border-box',
            'background' : "#3D5AFE",
            'border-radius' : '4px !important'
            }
        );
        $(this).html("<span>Đã chọn</span>");
        $(".ftvo-animate").css({
            'border' : '10px solid #FFFFFF !important'
        });
        $('.section-step1').slideDown( "slow");
        $('.section-step1').css('display','flex');
        clicked  = false;
    } else {
        $(this).css( {
            'color' : '#3D5AFE',
            'border' : '1px solid #3D5AFE !important',
            'box-sizing' :' border-box',
            'border-radius' : '4px !important',
            'background' : "#FFFFFF"
            }
        );
        $(".ftvo-animate").css({
            'border' : '10px solid #3D5AFE !important'
        });
        $(this).html( "<span>Chọn gói</span>" );
        clicked  = true;
    }   
 }
 $(".btn-contanted").click(changeColor);

</script> 
 <script type="text/javascript">
    $(".scrollbutton").click(function () {
        // get the element on the page related to the button
        console.log("click");
        var scrollToId = $(this).data("scroll");
        var scrollToElement = document.getElementById("order-step1");
        // make the page scroll down to where you want
        // ...
    });
</script>
@endsection  