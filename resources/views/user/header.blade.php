
<nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ URL("/") }}">Smart<span>VR.</span></a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i> Menu
            </button>
            <div class="navbar-collapse collapse" id="ftco-nav">
                <ul class="navbar-nav navbar-center ml-auto">
                    <li class="nav-item active"><a href="index.html" class="nav-link">{{ trans('home.home') }}</a></li>
                    <li class="nav-item"><a href="" class="nav-link">{{ trans('home.devices') }}</a></li>
                    <li class="nav-item"><a href="" class="nav-link">{{ trans('home.price') }}</a></li>
                    <li class="nav-item"><a href="" class="nav-link">{{ trans('home.about_us') }}</a></li>
                </ul>

                <ul class="nav-user navbar-nav right">
                    @if (Auth::guest())
                    <li class=" nav-item cta mr-md-2"><a href="{{ url('/login') }}" class="nav-link">{{ trans('home.signin') }}</a></li>
                    <li class=" nav-item "><a href="{{ url('/register') }}" class="nav-link">{{ trans('home.signout') }}</a></li>
                    <li class=" navbar-nav nav-item flat">
                        <a href="{{url(Request::getPathInfo().'?lang=en')}}"><img src="images/flat/en.png"></a>
                        <a href="{{url(Request::getPathInfo().'?lang=vn')}}"><img src="images/flat/vn.png"></a>
                    </li>
                    @else
                    <!-- /.dropdown -->
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <img class="avatar" src="images/update/avatar.png">
                        </a>
                        <ul class="dropdown-menu dropdown-user ">
                            <li>
                                <div class="avatar-drop">
                                    <img class="avatar-detail" src="images/update/avatar.png">
                                </div>
                                <div class="info-user">
                                    <p><b>{{{ Auth::getUser()->name  }}}</b><br><label class='email-user'>{{{ Auth::getUser()->email }}}</label></p>                                   
                                </div>
                            </li>
                            @if(Auth::getUser()->name === 'Admin')
                            <li><a href="admin/content"><i class="fa fa-user fa-fw"></i>{{ trans('manager.user-history') }}</a></li>
                            <li><a href="user/setting"><i class="fa fa-user fa-fw"></i>{{ trans('manager.user-setting') }}</a></li>
                            <li><a href="#logout" onclick="$('#logout').submit();"><i class="fa fa-gear fa-fw"></i>{{ trans('manager.logout') }}</a></li>
                            @else
                            <li><a href="user/dashboard"><i class="fa fa-user fa-fw"></i>{{ trans('manager.user-history') }}</a></li>
                            <li><a href="user/setting"><i class="fa fa-user fa-fw"></i>{{ trans('manager.user-setting') }}</a></li>
                            <li><a href="#logout" onclick="$('#logout').submit();"><i class="fa fa-gear fa-fw"></i>{{ trans('manager.logout') }}</a></li>
                            @endif
                        </ul>
                        <!-- /.dropdown-user -->
                    </div>
                    <!-- /.dropdown -->
                    @endif

                </ul>
            </div>
        </div>
    </nav>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('global.logout')</button>
{!! Form::close() !!}
