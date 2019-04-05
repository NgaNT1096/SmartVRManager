@extends('layouts.user')

@section('content')
<div class="wrapper blob-bg">
        <main role="main">
            <section  class="">

                <div class="container order-forms step3">
                    <div class="row hero my-4">
                        <h1 class='col-12 mb-2'>Unlock the power of VR Sync</h1>
                        <div class="step-counter">
                        </div>
                    </div>
                    <div class="row justify-content-center my-4">
                        <div class="col-12 col-md-10 col-lg-8 card">
                            <div class="card-body p-3 py-4">
                                <h2 class='text-primary text-center my-4'>License information</h2>

                                <form action="" method="POST" enctype="multipart/form-data">                            
                                    <div id="pricingcalculator" data-deviceamount="" data-period="" data-startdate="" data-syncbox="">
                                        <div>
                                            <div class="form-row license-input">
                                            <h2 class='my-4'>Thông tin cá nhân</h2>
                                                <div class="col-12 col-md-12 form-group px-2" >
                                                    <label for="name">@lang('order.name'):</label>
                                                    <label for="name">Nguyễn Thị Nga</label>
                                                </div>
                                                <div class="col-12 col-md-12 form-group px-2" >
                                                    <label for="name">@lang('order.phone'):</label>
                                                    <label for="name">0968967624</label>
                                                </div>
                                                <div class="col-12 col-md-12 form-group px-2" >
                                                    <label for="name">@lang('order.email'):</label>
                                                    <label for="name">ngant1096@gamil.com</label>
                                                </div>
                                                <div class="col-12 col-md-12 form-group px-2" >
                                                    <label for="name">@lang('order.detail_address'):</label>
                                                    <label for="name">Tân Hội, Đan Phượng, Hà Nội</label>
                                                </div>
                                            </div>
                                            <div class="form-row license-input">
                                                <h2 class='my-4'>Thông tin thanh toán</h2>
                                                <div class="col-12 col-md-12 form-group px-2" >
                                                    <label for="name">@lang('order.package'):</label>
                                                    <label for="name">Nguyễn Thị Nga</label>
                                                </div>
                                                <div class="col-12 col-md-12 form-group px-2" >
                                                    <label for="name">@lang('order.number_device'):</label>
                                                    <label for="name">0968967624</label>
                                                </div>
                                                <div class="col-12 col-md-12 form-group px-2" >
                                                    <label for="name">@lang('order.start_date'):</label>
                                                    <label for="name">ngant1096@gamil.com</label>
                                                </div>
                                                <div class="col-12 col-md-12 form-group px-2" >
                                                    <label for="name">@lang('order.end_date'):</label>
                                                    <label for="name">Tân Hội, Đan Phượng, Hà Nội</label>
                                                </div>
                                                <div class="col-12 col-md-12 form-group px-2" >
                                                    <label for="name">@lang('order.payment'):</label>
                                                    <label for="name">Tân Hội, Đan Phượng, Hà Nội</label>
                                                </div>
                                            </div>
                                            <div class="w-100 text-right total col-12">Total: <strong id="total-budget">€0</strong><br><small>Prices excluding VAT</small></div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button class="btn next btn-primary mx-auto" type="submit">CONFIRM</button>
                                    </div>
                                    
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