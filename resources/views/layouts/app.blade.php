<!DOCTYPE html>
<html lang="">
<head>
@include('partials.head')
</head>
<body class="{{Route::currentRouteName()}}">
  {{--Menu de Front--}}
  @include('partials.header')
  @yield('content')
  @include('partials.footer')
   @yield('scripts')
</body>
</html>
