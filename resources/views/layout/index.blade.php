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
    <title>Fameiser</title>
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
    <!-- Revolution Slider -->
    <link rel="stylesheet" href="plugins/rs-plugin/css/settings.css">

</head>

<body class="color-custom style-simple button-stroke layout-full-width if-zoom no-content-padding header-transparent minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-right menuo-no-borders footer-copy-center mobile-tb-center mobile-side-slide mobile-mini-mr-lc tablet-sticky mobile-header-mini mobile-sticky tr-header tr-menu tr-content be-reg-2089">
    <div id="Wrapper">
        <div id="Header_wrapper">
            @include('layout.header')
        </div>
        <div id="Content">
            @yield('content')
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
    <script src="js/jquery-2.1.4.min.js"></script>

    <script src="js/mfn.menu.js"></script>
    <script src="js/jquery.plugins.js"></script>
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/animations/animations.js"></script>
    <script src="js/translate3d.js"></script>
    <script src="js/scripts.js"></script>


    <script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <script src="plugins/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtk8IUc6r4O65FBbi2x4Z0fwZQ4QDds9Q"></script>
    <script src="js/email.js"></script>


    <script>
        var revapi1, tpj;
			( function() {
					if (!/loaded|interactive|complete/.test(document.readyState))
						document.addEventListener("DOMContentLoaded", onLoad)
					else
						onLoad();
					function onLoad() {
						if (tpj === undefined) {
							tpj = jQuery;
							if ("off" == "on")
								tpj.noConflict();
						}
						if (tpj("#rev_slider_1_1").revolution == undefined) {
							revslider_showDoubleJqueryError("#rev_slider_1_1");
						} else {
							revapi1 = tpj("#rev_slider_1_1").show().revolution({
								sliderType : "standard",
								sliderLayout : "auto",
								dottedOverlay : "none",
								delay : 9000,
								visibilityLevels : [1240, 1024, 778, 480],
								gridwidth : 1240,
								gridheight : 980,
								lazyType : "none",
								shadow : 0,
								spinner : "spinner2",
								autoHeight : "off",
								disableProgressBar : "on",
								hideThumbsOnMobile : "off",
								hideSliderAtLimit : 0,
								hideCaptionAtLimit : 0,
								hideAllCaptionAtLilmit : 0,
								debugMode : false,
								fallbacks : {
									simplifyAll : "off",
									disableFocusListener : false,
								}
							});
						};
					};
				}());
    </script>
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