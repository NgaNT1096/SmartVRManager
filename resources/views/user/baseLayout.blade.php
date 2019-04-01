<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
    
@include('user.header')

@yield('content')

@include('user.footer')

{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">Logout</button>
{!! Form::close() !!}

@include('partials.javascripts')
</body>
</html>