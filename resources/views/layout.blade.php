<!DOCTYPE html>
<html lang="zxx" class="js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="PTSoftware" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="กายอุปกรณ์ ยืมคืนอุปกรณ์การแพทย์ (เวียงยองฮับ)" />
    <link rel="shortcut icon" href="{{ asset('images/borrow-favicon.ico') }}" />
    <title>App Test</title>

    <link rel="stylesheet" href="{{ asset('assets/css/dashlitedeae.css?ver=3.2.1') }}" />
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/themedeae.css?ver=3.2.1') }}" />

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        .font_thai {
            font-family: 'Anuphan', sans-serif !important;

        }

        .highcharts-title {
            font-family: 'Anuphan', sans-serif !important;

        }
    </style>

    <style>
        .svg-color {
            fill: white;
        }

        li::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: transparent;
            transition: background-color 0.3s;
        }

        /* Apply styles when hovering over the list item */
        li:hover::after {
            background-color: #fff;
            /* Change the color to your desired hover color */
        }
    </style>
</head>

<body class="nk-body npc-invest bg-lighter font_thai">
    <div class="nk-app-root">
        <div class="nk-wrap">
            <div class="nk-header nk-header-fixed nk-header-fluid is-theme is-regular">
                <div class="container-xl wide-xl">
                    <div class="nk-header-wrap">
                        <div class="nk-menu-trigger me-sm-2 d-lg-none">
                            <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-menu"></em></a>
                        </div>
                        <div class="nk-header-brand">
                            <a href="{{ route('home') }}" class="logo-link"><img class="logo-light logo-img" src="{{ asset('images/logo.gif') }}" srcset="{{ asset('/images/logo.gif') }}" alt="logo" />
                                <img class="logo-dark logo-img" src="{{ asset('images/logo.gif') }}" srcset="{{ asset('/images/logo.gif') }}" alt="logo-dark" /></a>
                        </div>
                        <div class="nk-header-menu" data-content="headerNav">
                            <div class="nk-header-mobile">
                                <div class="nk-header-brand">
                                    <a href="{{ route('home') }}" class="logo-link">
                                        <img width="200" height="100" class="logo-light logo-img" src="{{ asset('/images/logo.gif') }}" srcset="{{ asset('/images/logo.gif') }}" alt="logo" />
                                        <img class="logo-dark logo-img" src="images/logo-dark.png" srcset="{{ asset('/images/logo.gif') }}" alt="logo-dark" /></a>
                                </div>
                                <div class="nk-menu-trigger me-n2">
                                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-arrow-left"></em></a>
                                </div>
                            </div>
                            <ul class="nk-menu nk-menu-main ui-s2 ">
                                @foreach($menu as $m)
                                <li class="nk-menu-item has-sub active current-page">
                                        <a href="{{ route($m->route) }}" class="nk-menu-link ">
                                        <img src="{{ asset('/images/svg/'.$m->svg.'.svg') }}" width="25" height="25" style="fill:white;">
                                        <span class="nk-menu-text">&nbsp;&nbsp;{{$m->name}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">
                                <li class="dropdown user-dropdown order-sm-first">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                        <div class="user-toggle">
                                            <div class="user-avatar sm">
                                                <em class="icon ni ni-user-alt"></em>
                                            </div>
                                            <div class="user-info d-none d-xl-block">
                                                <div class="user-status">
                                                    Online
                                                </div>
                                                <div class="user-name dropdown-indicator">
                                                    User
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1 is-light">
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li>
                                                    <a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-footer nk-footer-fluid bg-lighter">
                <div class="container-xl">
                    <div class="nk-footer-wrap">
                        <div class="nk-footer-copyright">
                            &copy; 2024 ระบบกายอุปกรณ์ (เวียงยองฮับ)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="nk-sticky-toolbar rounded-5">
        @foreach($menu as $m)
        <li class="demo-layout bg-secondary rounded-5 bg-success">
            <a class="bg-success text-white rounded-5" data-target="demoML" href="{{$m->route}}" title="{{$m->name}}">
                <img src="{{ asset('/images/svg/'.$m->svg.'.svg') }}" width="25" height="25" style="fill:black;">
            </a>
        </li>
        @endforeach
    </ul>



    <script src="{{ asset('assets/js/bundledeae.js') }}"></script>
    <script src="{{ asset('assets/js/scriptsdeae.js?ver=3.2.1') }}"></script>
    <script src="{{ asset('assets/js/demo-settingsdeae.js?ver=3.2.1') }}"></script>
    <script src="{{ asset('/assets/js/example-toastrdeae.js?ver=3.2.1') }}"></script>
    <script src="{{ asset('assets/js/libs/datatable-btnsdeae.js?ver=3.2.1') }}"></script>
    <!-- <script src="{{ asset('assets/js/example-chartdeae.js?ver=3.2.1') }}"></script> -->


    <script src="https://cdn.datatables.net/searchpanes/2.1.2/js/dataTables.searchPanes.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.6.2/js/dataTables.select.min.js"></script>

    <link href="https://cdn.datatables.net/searchpanes/2.1.2/css/searchPanes.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.6.2/css/select.dataTables.min.css" rel="stylesheet" />

    <script src="https://code.highcharts.com/highcharts.js"></script>

    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/jquery.datetimepicker.css') }}" />
    <script src="{{ asset('assets/js/jquery.datetimepicker.full.js') }}"></script>

    @if(Session::has('success'))
    <script>
        $(document).ready(function() {
            !(function(o, t) {
                o.Toast("{{ Session::get('success') }} ", "success", {
                    position: "top-right",
                    timeOut: "5000",
                });
            })(NioApp, jQuery);
        });
    </script>
    @endif

    @if(Session::has('danger'))
    <script>
        $(document).ready(function() {
            !(function(o, t) {
                o.Toast("{{ Session::get('danger') }} ", "error", {
                    position: "top-right",
                    timeOut: "5000",
                });
            })(NioApp, jQuery);
        });
    </script>
    @endif





    @yield('js_script')
</body>
<!-- Mirrored from dashlite.net/demo6/_blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 06:16:52 GMT -->

</html>