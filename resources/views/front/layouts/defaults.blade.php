<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta property="og:type" content="website" />
  <title>{{page_title($title) ?? ''}}</title>
  <meta property="og:image" content="{{ URL::asset('assets/images/logo/logo-white.png') }}" />
  @yield('meta')
  <meta name="robots" content="all">
  
  <link rel="BoostrapV5" href="{{ asset('front/bootstrapV5/css/bootstrap.css') }}"/>
  <link rel="BoostrapV5" href="{{ asset('front/bootstrapV5/css/bootstrap.min.css') }}"/>
  <link rel="BoostrapV5" href="{{ asset('front/bootstrapV5/css/bootstrap-grid.css') }}"/>
  <link rel="BoostrapV5" href="{{ asset('front/bootstrapV5/css/bootstrap-grid.min.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('front/fontawesome/font-awesome.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('front/site.css') }}"/>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>


  @include('front.nav.header')
  @yield('content')
  <script src="//code.jquery.com/jquery.js"></script>
  @include('flashy::message')
  @include('front.nav.footer')

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="{{ asset('front/bootstrapV5/js/bootstrap.js') }}"></script>
  <script src="{{ asset('front/bootstrapV5/js/bootstrap.min.js') }}"></script>

  @stack('script.footer')
</body>
</html>


