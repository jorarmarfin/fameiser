@extends('layout.page')

@section('slogan',$slogan->titulo)

@section('content')
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
                        <h5 style="color: #6781e5">Aliquam consectetur orci eget dictum</h5>
                        <h6>John Smith Nowak</h6>
                        <p>
                            <a href="#"><span>noreply@envato.com</span></a>
                            <br> +61 (0) 3 8376 6284
                        </p>
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


@section('title-page','Contactanos')