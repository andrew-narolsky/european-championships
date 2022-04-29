<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">

    <!-- Title -->
    <title>European Domestic Tournaments</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Theme Styles -->
    <link href="{{ asset('front/css/ecaps.min.css') }}" rel="stylesheet">
</head>
<body>

<div class="page-container" id="app">
    <div class="page-sidebar">
        <router-link :to="{ name: 'home' }" class="logo-box" >
            <span>Tournaments</span>
            <i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i>
            <i class="icon-close" id="sidebar-toggle-button-close"></i>
        </router-link>

        <div class="page-sidebar-inner">
            <main-menu></main-menu>
        </div>
    </div>

    <div class="page-content">
        <router-view :key="$route.path"></router-view>
    </div>
</div>

<!-- Javascripts -->
<script src="{{ asset('front/js/jquery-3.1.0.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
