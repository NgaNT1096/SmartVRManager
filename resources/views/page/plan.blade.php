@extends('layouts.user')

@section('content')
<div class="hero-wrap js-fullheight">
    <section class="feature-section ftco-section bg price">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 heading-section ftco-animate text-center">
                        <h2 class="mb-4">Pricing Plan</h2>
                        <p>Pay per period and number of headsets.<p>
                    </div>
                </div>
                <div class="row row-recomment">
                    <div class="col-md-3 ftvo-animate recommemt-text">Recommended</div>
                </div>
                
                <div class="row">
                    <div class="col-md-3 ftvo-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <h2 class="heading">Free</h2>
                            <span class="price"><sup></sup> <span class="number">FREE</span></span>
                            <ul class="pricing-text mb-5">
                                <li>1 headset</li>
                                <li>remote controller</li>
                                <li>5 content</li>
                                <li>1GB storage</li>
                            </ul>
                            <a href="order/1" class="btn btn-primary d-block px-2 py-3">Buy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ftvo-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <h2 class="heading">Starter</h2>
                            <span class="price"><sup></sup> <span class="number">$10 / DAY</span></span>
                            <ul class="pricing-text mb-5">
                                <li>5 headset</li>
                                <li>remote controller</li>
                                <li>5 content</li>
                                <li>3GB storage</li>
                            </ul>
                            <a href="order/2" class="btn btn-primary d-block px-2 py-3">Buy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ftvo-animate">
                    <div class="block-7 recommemt">
                        <div class="text-center">
                            <h2 class="heading">Advanced</h2>
                            <span class="price"><sup></sup> <span class="number">$20 / DAY</span></span>
                            <ul class="pricing-text mb-5">
                                <li>10 headset</li>
                                <li>remote controller</li>
                                <li>10 content</li>
                                <li>3GB storage</li>
                            </ul>
                            <a href="order/2" class="btn btn-primary d-block px-2 py-3">Buy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ftvo-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <h2 class="heading">Deluxe</h2>
                            <span class="price"><sup></sup> <span class="number">$30 / DAY</span></span>
                            <ul class="pricing-text mb-5">
                                <li>20 headset</li>
                                <li>remote controller</li>
                                <li>10 content</li>
                                <li>3GB storage</li>
                            </ul>
                            <a href="order/2" class="btn btn-primary d-block px-2 py-3">Buy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
@endsection