<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>{{ config('app.name', 'Laravel') }}</title>
   <link rel="stylesheet" href="{{asset('css/public.css')}}">
   <link rel="stylesheet" href="{{asset('css/grid.css')}}">
   <link rel="stylesheet" href="{{asset('css/header.css')}}">
   <link rel="stylesheet" href="{{asset('fa/css/all.css')}}">
   <link rel="stylesheet" href="{{asset('css/footer.css')}}">
</head>
<body>
   @include('partials.header')
   <div class="main">
   @yield('main')
   </div>
   @include('partials.footer')
</body>
</html>
