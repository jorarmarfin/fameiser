<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>@yield('title-page')</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Istok+Web:100,300,400,400italic,500,600,700,700italic'>

    <!-- CSS -->
    @include('layout.css')

</head>

<body class="color-custom style-simple button-stroke layout-full-width if-zoom no-content-padding header-transparent minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-right menuo-no-borders footer-copy-center mobile-tb-center mobile-side-slide mobile-mini-mr-lc tablet-sticky mobile-header-mini mobile-sticky tr-header tr-menu tr-content be-reg-2089">
    <div id="Wrapper">
        <div id="Header_wrapper">
            @include('layout.header')
            <div id="Subheader" style="padding:220px 0 50px">
                <div class="container">
                    <div class="column one">
                        <h1 class="title">@yield('slogan','default')</h1>
                    </div>
                </div>
            </div>
        </div>
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section mcb-section" style="padding-top:0px; padding-bottom:0px">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix">
                                                <div style="width: 1px; height: 100px; background: #38f2ba; margin: 0 auto"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <footer id="Footer" class="clearfix">
            <div class="footer_copy">
                <div class="container">
                    <div class="column one">
                        <div class="copyright">
                            &copy; 2018 BeMechanic 3 - BeTheme. Muffin group - HTML by <a target="_blank" rel="nofollow" href="http://bit.ly/1M6lijQ">BeantownThemes</a>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- side menu -->
    <div id="Side_slide" class="right dark" data-width="250">
        <div class="close-wrapper">
            <a href="#" class="close"><i class="icon-cancel-fine"></i></a>
        </div>
        <div class="menu_wrapper"></div>
    </div>
    <div id="body_overlay"></div>

    <!-- JS -->
    <script src="../../js/jquery-2.1.4.min.js"></script>

    <script src="../../js/mfn.menu.js"></script>
    <script src="../../js/jquery.plugins.js"></script>
    <script src="../../js/jquery.jplayer.min.js"></script>
    <script src="../../js/animations/animations.js"></script>
    <script src="../../js/translate3d.js"></script>
    <script src="../../js/scripts.js"></script>


</body>

</html>