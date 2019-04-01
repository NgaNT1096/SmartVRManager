
<nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ URL("/") }}">Smart<span>VR.</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav navbar-center ml-auto">
                    <li class="nav-item active"><a href="index.html" class="nav-link">{{ trans('home.home') }}</a></li>
                    <li class="nav-item"><a href="" class="nav-link">{{ trans('home.devices') }}</a></li>
                    <li class="nav-item"><a href="" class="nav-link">{{ trans('home.price') }}</a></li>
                    <li class="nav-item"><a href="" class="nav-link">{{ trans('home.about_us') }}</a></li>
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
                    <!-- /.dropdown -->
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <img class="avatar" src="images/update/avatar.png">  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="admin/dashboard"><i class="fa fa-user fa-fw"></i> Your Manager App</a></li>
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> Your Account</a></li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </div>
                    <!-- /.dropdown -->
                    @endif

                </ul>
            </div>
        </div>
    </nav>