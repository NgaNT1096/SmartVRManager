@extends('layouts.user')

@section('content')
<div class="wrapper blob-bg">
        <main role="main">
            <section  class="ftco-section">

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
</script>  
@endsection  