
<nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/home') }}">Smart<span>VR.</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="glyphicon glyphicon-menu-hamburger"></i> Menu
            </button>
            <div class="navbar-collapse collapse" id="ftco-nav">
                <ul class="navbar-nav navbar-center ml-auto">
                    <li class="nav-item"><a href="{{ url('/user/dashboard') }}" class="nav-link">{{ trans('home.dashboard') }}</a></li>
                    <li class="nav-item"><a href="{{ url('/user/manager') }} " class="nav-link">{{ trans('home.content') }}</a></li>
                    <li class="nav-item"><a href="{{ url('/page/order') }} " class="nav-link">{{ trans('home.license') }}</a></li>
                    <li class="nav-item"><a href="{{ url('/user/support') }} " class="nav-link">{{ trans('home.support') }}</a></li>
                </ul>

                <ul class="nav-user navbar-nav right">
                    @if (Auth::guest())
                    <li class=" nav-item"><a href="{{ url('/login') }}" class="nav-link">{{ trans('home.signin') }}</a></li>
                    <li class=" nav-item cta mr-md-2"><a href="{{ url('/register') }}" class="nav-link">{{ trans('home.signout') }}</a></li>
                    <li class=" navbar-nav nav-item flat">
                        <a href="{{url(Request::getPathInfo().'?lang=en')}}"><img src="images/flat/en.png"></a>
                        <a href="{{url(Request::getPathInfo().'?lang=vn')}}"><img src="images/flat/vn.png"></a>
                    </li>
                    @else

                    <div class="dropdown">
                        <button class="upgrade">{{ trans('home.upgrade') }}</button>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <img class="avatar" src="images/update/avatar.png">
                        </a>
                        <ul class="dropdown-menu dropdown-user show">
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
                    </div>

                    @endif

                </ul>
            </div>
        </div>
    </nav>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('global.logout')</button>
{!! Form::close() !!}
