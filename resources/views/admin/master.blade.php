<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('/admin/img/icon.ico') }}" type="image/x-icon"/>
    <script src="{{ asset('/admin/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['/admin/css/fonts.min.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <link rel="stylesheet" href="{{ asset('/admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/css/atlantis.css') }}">
</head>
<body>
<div class="wrapper">
    @auth()
        <div class="main-header">
        <div class="logo-header" data-background-color="blue">
            <a href="{{ route('admin') }}" class="logo">
                <img src="{{ asset('/admin/img/logo.svg') }}" alt="navbar brand" class="navbar-brand">
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="icon-menu"></i>
                </span>
            </button>
            <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="icon-menu"></i>
                </button>
            </div>
        </div>
        <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
            <div class="container-fluid">
                <div class="collapse" id="search-nav">
                    <form class="navbar-left navbar-form nav-search mr-md-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button type="submit" class="btn btn-search pr-1">
                                    <i class="fa fa-search search-icon"></i>
                                </button>
                            </div>
                            <input type="text" placeholder="Search ..." class="form-control">
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    <li class="nav-item toggle-nav-search hidden-caret">
                        <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown hidden-caret">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                            <div class="avatar-sm">
                                <img src="{{ asset('/admin/img/profile.jpg') }}" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-user animated fadeIn">
                            <div class="dropdown-user-scroll scrollbar-outer">
                                <li>
                                    <div class="user-box">
                                        <div class="avatar-lg">
                                            <img src="{{ asset('/admin/img/profile.jpg') }}" alt="image profile" class="avatar-img rounded">
                                        </div>
                                        <div class="u-text">
                                            <h4>{{ env('ADMIN_NAME') }}</h4>
                                            <p class="text-muted">{{ env('ADMIN_EMAIL') }}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">{{ __('admin.account_setting') }}</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="{{ route('logout') }}" class="dropdown-item"
                                       onclick="document.getElementById('logout-form').submit(); return false;">{{ __('Log out') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
        <div class="sidebar sidebar-style-2">
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <div class="user">
                    <div class="avatar-sm float-left mr-2">
                        <img src="{{ asset('/admin/img/profile.jpg') }}" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                            <span>
                                {{ env('ADMIN_NAME') }}
                                <span class="user-level">{{ __('admin.administrator_name') }}</span>
                                <span class="caret"></span>
                            </span>
                        </a>
                        <div class="clearfix"></div>
                        <div class="collapse in" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="{{ url('/') }}">
                                        <span class="link-collapse">
                                            <span><i class="fas fa-home"></i> {{ __('admin.home') }}</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-primary">
                    <li class="nav-item active">
                        <a data-toggle="collapse" href="#countries" class="collapsed" aria-expanded="false">
                            <i class="fas fa-flag"></i>
                            <p>{{ __('admin.countries') }}</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="countries">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('countries.index') }}">
                                        <span class="sub-item">{{ __('admin.countries_list') }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('countries.create') }}">
                                        <span class="sub-item">{{ __('admin.add_country') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a data-toggle="collapse" href="#football_club" class="collapsed" aria-expanded="false">
                            <i class="fas fa-futbol"></i>
                            <p>{{ __('admin.football_clubs') }}</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="football_club">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('football-clubs.index') }}">
                                        <span class="sub-item">{{ __('admin.football_clubs_list') }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('football-clubs.create') }}">
                                        <span class="sub-item">{{ __('admin.add_football_club') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a data-toggle="collapse" href="#competition_types" class="collapsed" aria-expanded="false">
                            <i class="fas fa-crown"></i>
                            <p>{{ __('admin.competition_types') }}</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="competition_types">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('competition-type.index') }}">
                                        <span class="sub-item">{{ __('admin.list_of_competition_types') }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('competition.create') }}">
                                        <span class="sub-item">{{ __('admin.add_competition') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @endauth
    @yield('content')
    @auth()
        <div class="custom-template">
        <div class="title">{{ __('admin.settings') }}</div>
        <div class="custom-content">
            <div class="switcher">
                <div class="switch-block">
                    <h4>{{ __('admin.logo_header') }}</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
                        <button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
                        <br/>
                        <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>{{ __('admin.navbar_header') }}</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeTopBarColor" data-color="dark"></button>
                        <button type="button" class="changeTopBarColor" data-color="blue"></button>
                        <button type="button" class="changeTopBarColor" data-color="purple"></button>
                        <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
                        <button type="button" class="changeTopBarColor" data-color="green"></button>
                        <button type="button" class="changeTopBarColor" data-color="orange"></button>
                        <button type="button" class="changeTopBarColor" data-color="red"></button>
                        <button type="button" class="changeTopBarColor" data-color="white"></button>
                        <br/>
                        <button type="button" class="changeTopBarColor" data-color="dark2"></button>
                        <button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
                        <button type="button" class="changeTopBarColor" data-color="purple2"></button>
                        <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
                        <button type="button" class="changeTopBarColor" data-color="green2"></button>
                        <button type="button" class="changeTopBarColor" data-color="orange2"></button>
                        <button type="button" class="changeTopBarColor" data-color="red2"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>{{ __('admin.sidebar') }}</h4>
                    <div class="btnSwitch">
                        <button type="button" class="selected changeSideBarColor" data-color="white"></button>
                        <button type="button" class="changeSideBarColor" data-color="dark"></button>
                        <button type="button" class="changeSideBarColor" data-color="dark2"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>{{ __('admin.background') }}</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeBackgroundColor" data-color="bg2"></button>
                        <button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
                        <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
                        <button type="button" class="changeBackgroundColor" data-color="dark"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-toggle">
            <i class="flaticon-settings"></i>
        </div>
    </div>
    <div class="loader-wrap">
        <img src="{{ asset('/admin/img/loader.svg') }}" alt="">
    </div>
    @endauth
</div>
<script src="{{ asset('/admin/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('/admin/js/core/popper.min.js') }}"></script>
<script src="{{ asset('/admin/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('/admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('/admin/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
<script src="{{ asset('/admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('/admin/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('/admin/js/atlantis.min.js') }}"></script>
<script src="{{ asset('/admin/js/setting-demo.js') }}"></script>
<script src="{{ asset('/admin/plugins/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('/admin/plugins/ckfinder/ckfinder.js') }}"></script>
<script src="{{ asset('/admin/js/script.js') }}"></script>
@yield('js')
</body>
</html>
