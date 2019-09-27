<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- Your app title -->
    <title>@yield('title','')</title>
    <!-- Path to Framework7 iOS CSS theme styles-->
    <link rel="stylesheet" href="{{asset('css/framework7.ios.min.css')}}">
    <!-- Path to Framework7 iOS related color styles -->
    <link rel="stylesheet" href="{{asset('css/framework7.ios.colors.min.css')}}">
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" href="{{asset('css/my-app.css')}}">
</head>
<body class="theme-white">
<!-- Status bar overlay for full screen mode (PhoneGap) -->
<div class="statusbar-overlay"></div>
<!-- Panels overlay-->
<div class="panel-overlay"></div>
<!-- Left panel with reveal effect-->
<div class="panel panel-left panel-reveal">
    <div class="content-block">
        @section('left_panel')
        @show
    </div>
</div>
<!-- Views -->
<div class="views">
    <!-- Your main view, should have "view-main" class -->
    <div class="view view-main">
        <!-- Top Navbar-->
    @section('navbar')
    @show
    <!-- Pages container, because we use fixed-through navbar and toolbar, it has additional appropriate classes-->
    @section('page')
    @show
    <!-- Bottom Toolbar-->
        @section('toolbar')
        @show
    </div>
</div>
<!-- Path to Framework7 Library JS-->
<script type="text/javascript" src="{{asset('js/framework7.min.js')}}"></script>
<!-- Path to your app js-->
<script type="text/javascript" src="{{asset('js/my-app.js')}}"></script>
</body>
</html>
