<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amatorus - Gestão de Amadores</title>

    <base href="/">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="assets/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
        <script type="text/javascript" src="assets/js/plugins/uploaders/fileinput.min.js"></script>
        <script type="text/javascript" src="assets/js/pages/uploader_bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/validation/validate.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/jasny_bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/styling/switch.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/inputs/touchspin.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>
    <script type="text/javascript" src="assets/js/plugins/pickers/anytime.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.js"></script>
    <script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.date.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>

    <script type="text/javascript" src="assets/js/core/app.js"></script>
    <script type="text/javascript" src="assets/js/pages/form_select2.js"></script>
    <script type="text/javascript" src="assets/js/pages/form_validation.js"></script>
    <script type="text/javascript" src="assets/js/pages/picker_date.js"></script>
    <!-- /theme JS files -->

</head>
<body>
    <!-- Main navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
                <i class="fab fa-bity fa-2x"></i>
                <b style="margin: -5px 0 0 0;">&nbsp;&nbsp;&nbsp;Amatorus</b>
            </a>

            <ul class="nav navbar-nav visible-xs-block">
                <li>
                    <a data-toggle="collapse" data-target="#navbar-mobile">
                        <i class="icon-tree5"></i>
                    </a>
                </li>
                <li>
                    <a class="sidebar-mobile-main-toggle">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>
            </ul>
        </div>

        @if(auth()->check())
        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav">
                <li>
                    <a class="sidebar-control sidebar-main-toggle hidden-xs">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<i class="icon-bubbles4"></i>--}}
                        {{--<span class="visible-xs-inline-block position-right">Messages</span>--}}
                        {{--<span class="badge bg-warning-400">2</span>--}}
                    {{--</a>--}}

                    <div class="dropdown-menu dropdown-content width-350">
                        <div class="dropdown-content-heading">
                            Messages
                            <ul class="icons-list">
                                <li><a href="#"><i class="icon-compose"></i></a></li>
                            </ul>
                        </div>

                        <ul class="media-list dropdown-content-body">
                            <li class="media">
                                <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                                <div class="media-body">
                                    <a href="#" class="media-heading">
                                        <span class="text-semibold">Beatrix Diaz</span>
                                        <span class="media-annotation pull-right">Tue</span>
                                    </a>

                                    <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                                <div class="media-body">
                                    <a href="#" class="media-heading">
                                        <span class="text-semibold">Richard Vango</span>
                                        <span class="media-annotation pull-right">Mon</span>
                                    </a>

                                    <span class="text-muted">Other travelling salesmen live a life of luxury...</span>
                                </div>
                            </li>
                        </ul>

                        <div class="dropdown-content-footer">
                            <a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
                        </div>
                    </div>
                </li>
                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-user-circle fa-2x" style="max-height: 30px; height: 30px; margin: 5px 0 -5px 0;"></i>
                        <span>{{ Auth::user()->name }}</span>
                        <i class="caret"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        {{--<li><a href="{{ route('perfil') }}">--}}
                                {{--<i class="icon-user"></i> Perfil</a></li>--}}
                        <li><a href="{{ route('logout') }}">
                                <i class="icon-switch2"></i> Sair</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        @endif
    </div>
    <!-- /main navbar -->

    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">