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
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

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
                        <div class="section mcb-section" style="padding-top:40px; padding-bottom:20px; background-color:#4e52cf">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one  column-margin-20px valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one-fourth column_column">
                                            <div class="column_attr clearfix" style=" background-image:url('{{ asset("content/mechanic3/images/home_mechanic3_pic15.png") }}'); background-repeat:no-repeat; background-position:left top; padding:10px 0 10px 70px">
                                                <h4 style="margin: 0; color: #fff">{{ $contacto[0] }}</h4>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-fourth column_column">
                                            <div class="column_attr clearfix" style=" background-image:url('{{ asset("content/mechanic3/images/home_mechanic3_pic16.png") }}'); background-repeat:no-repeat; background-position:left top; padding:10px 0 10px 70px">
                                                <h4 style="margin: 0; color: #fff"> <a href="#"><span>{{ $contacto[1] }}/span></a></h4>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-second column_button">
                                            <div class="button_align align_right">
                                                <a class="button  button_right button_size_2 button_stroke_custom button_js" href="{{ route('contactanos') }}" style=" border-color:#5f63d9 !important; color:#fff"><span class="button_icon"><i class="icon-right-open" style=" color:#fff !important"></i></span><span class="button_label">Contactanos</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer id="Footer" class="clearfix">
            <div class="footer_copy">
                <div class="container">
                    <div class="column one">
                        <div class="copyright">
                            {!! $footer->resumen !!}
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
    <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>

    <script src="{{ asset('js/mfn.menu.js') }}"></script>
    <script src="{{ asset('js/jquery.plugins.js') }}"></script>
    <script src="{{ asset('js/jquery.jplayer.min.js') }}"></script>
    <script src="{{ asset('js/animations/animations.js') }}"></script>
    <script src="{{ asset('js/translate3d.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtk8IUc6r4O65FBbi2x4Z0fwZQ4QDds9Q"></script>
    <script src="{{ asset('js/email.js') }}"></script>

    <script>
        function google_maps_5ace49a803440() {
            var latlng = new google.maps.LatLng(-12.0176417, -77.0057973);
            var myOptions = {
                zoom: 16,
                center: latlng,
                mapTypeId : google.maps.MapTypeId.ROADMAP,
                styles : [{
                        featureType : "all",
                        elementType : "labels",
                        stylers : [{
                            visibility : "on"
                        }]
                    }, {
                        featureType : "administrative",
                        elementType : "all",
                        stylers : [{
                            visibility : "off"
                        }]
                    }, {
                        featureType : "landscape",
                        elementType : "all",
                        stylers : [{
                            color : "#2b1e76"
                        }, {
                            visibility : "simplified"
                        }]
                    }, {
                        featureType : "poi",
                        elementType : "all",
                        stylers : [{
                            visibility : "off"
                        }]
                    }, {
                        featureType : "road",
                        elementType : "all",
                        stylers : [{
                            visibility : "on"
                        }]
                    }, {
                        featureType : "road",
                        elementType : "geometry",
                        stylers : [{
                            color : "#2b1e76"
                        }, {
                            lightness : "30"
                        }, {
                            saturation : "-10"
                        }]
                    }, {
                        featureType : "road",
                        elementType : "labels.text",
                        stylers : [{
                            visibility : "on"
                        }]
                    }, {
                        featureType : "road",
                        elementType : "labels.text.fill",
                        stylers : [{
                            color : "#2b1e76"
                        }, {
                            lightness : "80"
                        }]
                    }, {
                        featureType : "road",
                        elementType : "labels.text.stroke",
                        stylers : [{
                            color : "#2b1e76"
                        }, {
                            lightness : "0"
                        }]
                    }, {
                        featureType : "road",
                        elementType : "labels.icon",
                        stylers : [{
                            visibility : "off"
                        }]
                    }, {
                        featureType : "transit",
                        elementType : "all",
                        stylers : [{
                            visibility : "simplified"
                        }, {
                            color : "#2b1e76"
                        }, {
                            lightness : "50"
                        }]
                    }, {
                        featureType : "transit.station",
                        elementType : "all",
                        stylers : [{
                            visibility : "off"
                        }]
                    }, {
                        featureType : "water",
                        elementType : "all",
                        stylers : [{
                            color : "#2b1e76"
                        }, {
                            lightness : "-20"
                        }]
                    }],
                zoomControl : true,
                mapTypeControl : false,
                streetViewControl : false,
                scrollwheel : false,
            }
            var map = new google.maps.Map(document.getElementById('google-map-area-5ace49a803440'),myOptions);
            var marker = new google.maps.Marker({
              position: latlng,
              icon : "content/mechanic3/images/home_mechanic3_pic14.png",
              map: map
            });
         }
        jQuery(document).ready(function($) {
            google_maps_5ace49a803440();
        });
    </script>

</body>

</html>