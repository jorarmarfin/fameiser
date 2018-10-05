@extends('layout.page')

@section('slogan',$slogan->titulo)

@section('content')
<div class="section mcb-section equal-height-wrap" style="padding-top:2rem; background-color:#fff; padding-bottom:0px">
    <div class="section_wrapper mcb-section-inner">
        <div class="wrap mcb-wrap one valign-middle clearfix" style="padding: 0px 0px 0px 8%; height: 506px;">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_column">
                    <div class="column_attr clearfix">
                        <h3>{{ $donde->titulo }}</h3>
                        {!! $donde->body !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section mcb-section no-margin-h no-margin-v" style="padding-top:0px; padding-bottom:0px">
    <div class="section_wrapper mcb-section-inner">
        <div class="wrap mcb-wrap one-fourth valign-top clearfix">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_column">
                    <div class="column_attr clearfix" style=" background-color:#0a0a2c; padding:50px 50px 35px">
                        <h2 style="color: #fff">{{ $contactanos->titulo }}</h2>
                        <h4 class="themecolor">{{ $contactanos->resumen }}</h4>
                        <hr class="no_line" style="margin: 0 auto 20px">
                        {!! $contactanos->body !!}
                    </div>
                </div>
                <div class="column mcb-column one column_image">
                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                        <div class="image_wrapper">
                            <img class="scale-with-grid" src="{{ $contactanos->imagen }}">
                        </div>
                    </div>
                </div>
                <div class="column mcb-column one column_column">
                    <div class="column_attr clearfix" style=" padding:40px 40px 25px">
                        {!! $donde->descripcion !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap mcb-wrap three-fourth  valign-top clearfix">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_map">

                    <div class="google-map-wrapper no_border">
                        <div class="google-map" id="google-map-area-5ace49a803440" style="width:100%; height:550px">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="column mcb-column one column_column">
                    <div class="column_attr clearfix" style=" padding:80px 12% 65px">
                        <h2>Escribe un mensaje</h2>
                        <hr class="no_line" style="margin: 0 auto 20px">
                        <div id="contactWrapper">
                            <form  action="{{ route('email') }}">
                                <!-- One Second (1/2) Column -->
                                <div class="column one-second">
                                    <input placeholder="Tu nombre" type="text" name="nombre" id="nombre" size="40" aria-required="true" aria-invalid="false" />
                                </div>
                                <!-- One Second (1/2) Column -->
                                <div class="column one-second">
                                    <input placeholder="Tu e-mail" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                </div>
                                <div class="column one">
                                    <input placeholder="Asunto" type="text" name="asunto" id="asunto" size="40" aria-invalid="false" />
                                </div>
                                <div class="column one">
                                    <textarea placeholder="Mensaje" name="mensaje" id="mensaje" style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                </div>
                                <div class="column one">
                                    <div class="g-recaptcha" data-sitekey="6LewlXMUAAAAAOt9oxGQ1IOG4UbVtufi2cPVKGNE"></div>
                                </div>
                                <div class="column one">
                                    <input type="submit" value="Envia el mensaje" id="submit" >
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function google_maps_5ace49a803440() {
        var latlng = new google.maps.LatLng(-12.0376274,-76.9483873);
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
@endsection
@section('title-page','Contactanos')