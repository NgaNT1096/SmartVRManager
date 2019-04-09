
@extends('layouts.user')

@section('content')

    <!-- /#wrapper -->
    <div id="hero-wrap ">
        <section class="feature-section ftco-section"> 
            <div class="container-fluid">
                 <div class="row">
                    <div class="content">
                    <div class="container-fluid">
                    <div class="row my-4">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class=""><img src="images/manager/youtube.png"></i>
                            </div>
                            <p class="card-category">@lang('manager.content_title')</p>
                            <h3 class="card-title">20
                                <small>video</small>
                            </h3>
                            </div>
                            <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-danger"></i>
                                <a href="">@lang('manager.content_des')</a>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="fa fa-list-ul"><img src="images/manager/device.png"></i>
                            </div>
                            <p class="card-category">@lang('manager.device_title')</p>
                            <h3 class="card-title">05</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons"></i> 
                                    <a href="">@lang('manager.device_des')</a>
                                </div>
                                <div>@lang('manager.device_expert') 20/04/2019</div>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-danger card-header-icon">
                            <div class="card-icon">
                                <i class="fa fa-user"><img src="images/manager/package.png"></i>
                            </div>
                            <p class="card-category">@lang('manager.package_title')</p>
                            <h3 class="card-title">Free</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons"></i>
                                    <a href="">@lang('manager.package_des')</a>
                                </div>
                                <div>@lang('manager.package_detail') 10</div>
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <div class="table-rental">
                            <div class="card-body">
                            <h5 class="table-title">@lang('manager.table_name')</h5>
                            <p class="card-category">
                            <table class="table table-bordered table-striped dt-select">
                                <thead>
                                    <tr>
                                        <th>@lang('manager.id')</th>
                                        <th>@lang('manager.status')</th>
                                        <th>@lang('manager.package')</th>
                                        <th>@lang('manager.num_device')</th>
                                        <th>@lang('manager.start_date')</th>
                                        <th>@lang('manager.start_end')</th>
                                        <th>@lang('manager.manager')</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                
                                <tbody>
                                    <tr data-entry-id="">
                                                <td>BD0123</td>
                                                <td class="status">Đang thuê</td>
                                                <td>Gói 1</td>
                                                <td>20</td>
                                                <td>20/04/2019</td>
                                                <td>22/04/2019</td>
                                                <td>Nguyễn Thị Nga</td>
                                                <td><button class="btn btn-primary">@lang('manager.renewed')</button></td>
                                    </tr>   
                                    <tr data-entry-id="">
                                                <td>BD0123</td>
                                                <td class="status">Đang thuê</td>
                                                <td>Gói 1</td>
                                                <td>20</td>
                                                <td>20/04/2019</td>
                                                <td>22/04/2019</td>
                                                <td>Nguyễn Thị Nga</td>
                                                <td><button class="btn btn-primary">@lang('manager.renewed')</button></td>
                                    </tr>   
                                    <tr data-entry-id="">
                                                <td>BD0123</td>
                                                <td class="status">Đang thuê</td>
                                                <td>Gói 1</td>
                                                <td>20</td>
                                                <td>20/04/2019</td>
                                                <td>22/04/2019</td>
                                                <td>Nguyễn Thị Nga</td>
                                                <td><button class="btn btn-primary">@lang('manager.renewed')</button></td>
                                    </tr>   
                                    <tr data-entry-id="">
                                                <td>BD0123</td>
                                                <td class="status">Đang thuê</td>
                                                <td>Gói 1</td>
                                                <td>20</td>
                                                <td>20/04/2019</td>
                                                <td>22/04/2019</td>
                                                <td>Nguyễn Thị Nga</td>
                                                <td><button class="btn btn-primary">@lang('manager.renewed')</button></td>
                                    </tr>   
                                </tbody>
                            </table>    
                            </div>
                            <div class="card-footer">
                                <i class=" foot-center"><a>show_more</a></i>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <link href="css/dashboard.css" rel="stylesheet" />
    <link href="css/material-dashboard.css" rel="stylesheet" />
@endsection