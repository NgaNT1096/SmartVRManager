@extends('layouts.user')

@section('content')
<div class="hero-wrap ">
    <section class="feature-section user-setting">
            <div class="container">
                <div class="row ">
                    <div class="col-xs-12 form-group">
                        <div class="col-sm-3 mgbt-xs-20 avatar-user">
                            <div class="sidebar">
                                <img src="images/update/avatar.png" >
                                <div class="edit-avatar">
                                    <button style="font-size:24px">Button <i class="fa fa-cloud-upload"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 main_info_user">
                            <div class="info_user">
                                <h2>@lang('manager.profile_setting')</h2>
                                    <div class="form-row license-input">        
                                        <div class="col-12 col-md-6 form-group px-2" >
                                            <label>@lang('order.name')</label>
                                            <input type="text" id="name" name="name" class="form-control pull-right" placeholder="@lang('order.name')" />
                                        </div>
                                        <div class="col-12 col-md-6 form-group px-2 " >
                                            <label>@lang('order.phone')</label>
                                            <input type="text" id="phone" name="phone" class="form-control pull-right" placeholder="@lang('order.phone')" />
                                        </div>
                                        <div class="col-12 col-md-12 form-group px-2 " >
                                            <label>@lang('order.email')</label>
                                            <input type="text" id="email" name="email" class="form-control pull-right" placeholder="@lang('order.email')"/>
                                        </div>
                                    </div>
                                    <hr>
                            </div>

                            <div class="address_user">
                                <h2>@lang('manager.address')</h2>
                                    <div class="form-row license-input">                                       
                                        <div class="col-12 col-md-6 form-group px-2" >
                                            <label>@lang('order.country')</label>
                                            <input type="text" id="country" name="country" class="form-control pull-right" placeholder="@lang('order.country')"/>
                                        </div>
                                        <div class="col-12 col-md-6 form-group px-2 " >
                                            <label>@lang('order.city')</label>
                                            <input type="text" id="city" name="city" class="form-control pull-right" placeholder="@lang('order.city')"/>
                                        </div>
                                        <div class="col-12 col-md-6 form-group px-2" >
                                            <label>@lang('order.district')</label>
                                            <input type="text" id="country" name="country" class="form-control pull-right" placeholder="@lang('order.district')"/>
                                        </div>
                                        <div class="col-12 col-md-6 form-group px-2 " >
                                            <label>@lang('order.ware')</label>
                                            <input type="text" id="city" name="city" class="form-control pull-right" placeholder="@lang('order.ware')"/>
                                        </div>
                                        <div class="col-12 col-md-12 form-group px-2 " >
                                            <label>@lang('order.detail_address')</label>
                                            <input type="text" id="address" name="address" class="form-control pull-right" placeholder="@lang('order.detail_address')"/>
                                        </div>
                                    </div>
                                    <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
@endsection

