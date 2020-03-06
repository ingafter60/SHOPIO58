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
   <link rel="stylesheet" href="{{asset('css/account.css')}}">
</head>
<body>
   @include('partials.header')
   <div class="main account-main cf">
      <div class="left account-sidebar">
         <div class="row">
            <div class="col col-12">
               @include('partials.account-sidebar')
            </div>
         </div>
      </div>
      <div class="left account-main-content">
         <div class="row">
            <div class="col col-12">
               @yield('main')
            </div>
         </div>
      </div>
   </div>
   @include('partials.footer')
</body>
</html>

