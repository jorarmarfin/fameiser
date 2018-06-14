@extends('layout.index')


@section('content')
<div class="content_wrapper clearfix">
    <div class="sections_group">
        <div class="entry-content">
            <div class="section mcb-section no-margin-h no-margin-v" style="padding-top:0px; padding-bottom:0px; background-color:#030720">
                <div class="section_wrapper mcb-section-inner">
                    <div class="wrap mcb-wrap one-third valign-top clearfix" style="padding:120px 0 0">
                        <div class="mcb-wrap-inner">
                            <div class="column mcb-column one column_image">
                                <div class="image_frame image_item no_link scale-with-grid no_border">
                                    <div class="image_wrapper">
                                        <img class="scale-with-grid" src="content/mechanic3/images/home_mechanic3_pic6.png">
                                    </div>
                                </div>
                            </div>
                            <div class="column mcb-column one column_divider">
                                <hr class="no_line" style="margin: 0 auto 40px">
                            </div>
                            <div class="column mcb-column one column_column">
                                <div class="column_attr clearfix">
                                    <h2 style="color: #fff">Conoce
                                        <br> Nuestros Servicios</h2>
                                </div>
                            </div>
                            <div class="column mcb-column one column_divider">
                                <hr class="no_line" style="margin: 0 auto 40px">
                            </div>
                            <div class="column mcb-column one column_button">
                                <a class="button button_size_2 button_js" href="content/mechanic3/services.html" style=" color:#fff"><span class="button_label">Nuestras Ofertas</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="wrap mcb-wrap one-third valign-top clearfix" style="padding:120px 0 0">
                        <div class="mcb-wrap-inner">
                            <div class="column mcb-column one column_column">
                                <div class="column_attr clearfix" style=" background-image:url('{{ $portada[0]->imagen }}'); background-repeat:no-repeat; background-position:center top; padding:50px 50px 35px; max-width: 500px">
                                    <a style="text-decoration: none;" href="content/mechanic3/services.html">
                                        <h4 class="themecolor">01</h4>
                                        <div style="width: 1px; height: 140px; background: #348880; margin-bottom: 15px"></div>
                                        <h3 style="color: #fff">{{ $portada[0]->titulo }}</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="column mcb-column one column_column">
                                <div class="column_attr clearfix" style=" background-image:url('{{ $portada[1]->imagen }}'); background-repeat:no-repeat; background-position:center top; padding:50px 50px 35px; max-width: 500px">
                                    <a style="text-decoration: none;" href="content/mechanic3/services.html">
                                        <h4 class="themecolor">03</h4>
                                        <div style="width: 1px; height: 140px; background: #287991; margin-bottom: 15px"></div>
                                        <h3 style="color: #fff">{{ $portada[1]->titulo }}
                                        </h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap mcb-wrap one-third valign-top clearfix">
                        <div class="mcb-wrap-inner">
                            <div class="column mcb-column one column_column">
                                <div class="column_attr clearfix" style=" background-image:url('{{ $portada[2]->imagen }}'); background-repeat:no-repeat; background-position:center top; padding:50px 50px 35px; max-width: 500px">
                                    <a style="text-decoration: none;" href="content/mechanic3/services.html">
                                        <h4 class="themecolor">02</h4>
                                        <div style="width: 1px; height: 140px; background: #2b7684; margin-bottom: 15px"></div>
                                        <h3 style="color: #fff">{{ $portada[2]->titulo }}</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="column mcb-column one column_column">
                                <div class="column_attr clearfix" style=" background-image:url('{{ $portada[3]->imagen }}'); background-repeat:no-repeat; background-position:center top; padding:50px 50px 35px; max-width: 500px">
                                    <a style="text-decoration: none;" href="content/mechanic3/services.html">
                                        <h4 class="themecolor">04</h4>
                                        <div style="width: 1px; height: 140px; background: #348880; margin-bottom: 15px"></div>
                                        <h3 style="color: #fff">{{ $portada[3]->titulo }}</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Servicios --}}
            <div class="section mcb-section no-margin-h" style="padding-top:120px; padding-bottom:0px; background-color:#030720">
                <div class="section_wrapper mcb-section-inner">
                    <div class="wrap mcb-wrap one-second valign-top clearfix">
                        <div class="mcb-wrap-inner">
                            <div class="column mcb-column one column_column">
                                <div class="column_attr clearfix" style=" padding:100px 0 45px">
                                    <h2 class="themecolor">{{ $portada[4]->titulo }}</h2>
                                </div>
                            </div>
                            <div class="column mcb-column one column_column">
                                <div class="column_attr clearfix" style=" background-color:#23235a; padding:80px 15% 65px">
                                    <h6 style="color: #fff">{{ $portada[4]->resumen }}</h6>
                                    <p style="color: #848bba">
                                        {!! $portada[4]->body !!}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap mcb-wrap one-second valign-top clearfix">
                        <div class="mcb-wrap-inner">
                            <div class="column mcb-column one column_image">
                                <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                    <div class="image_wrapper">
                                        <img class="scale-with-grid" src="{{ $portada[4]->imagen }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Performance --}}
            <div class="section mcb-section" style="padding-top:20px; padding-bottom:280px; background-color:#030720; background-image:url(content/mechanic3/images/home_mechanic3_sectionbg1.jpg); background-repeat:no-repeat; background-position:center bottom">
                <div class="section_wrapper mcb-section-inner">
                    <div class="wrap mcb-wrap one valign-top clearfix">
                        <div class="mcb-wrap-inner">
                            <div class="column mcb-column one-fourth column_column">
                                <div class="column_attr clearfix" style=" background-image:url('content/mechanic3/images/home_mechanic3_pic8.png'); background-repeat:no-repeat; background-position:left top; padding:15px 0 0px 110px">
                                    <h4 style="color: #fff">Mantenimiento
                                    </h4>
                                </div>
                            </div>
                            <div class="column mcb-column one-fourth column_column">
                                <div class="column_attr clearfix" style=" background-image:url('content/mechanic3/images/home_mechanic3_pic9.png'); background-repeat:no-repeat; background-position:left top; padding:15px 0 0px 110px">
                                    <h4 style="color: #fff">Correctivo
                                    </h4>
                                </div>
                            </div>
                            <div class="column mcb-column one-fourth column_column">
                                <div class="column_attr clearfix" style=" background-image:url('content/mechanic3/images/home_mechanic3_pic10.png'); background-repeat:no-repeat; background-position:left top; padding:15px 0 0px 110px">
                                    <h4 style="color: #fff">Preventivo</h4>
                                </div>
                            </div>
                            <div class="column mcb-column one-fourth column_column">
                                <div class="column_attr clearfix" style=" background-image:url('content/mechanic3/images/home_mechanic3_pic11.png'); background-repeat:no-repeat; background-position:left top; padding:15px 0 0px 110px">
                                    <h4 style="color: #fff">Proactivo</h4>
                                </div>
                            </div>
                            <div class="column mcb-column one column_divider">
                                <hr class="no_line" style="margin: 0 auto 40px">
                            </div>
                            <div class="column mcb-column one column_column">
                                <div class="column_attr clearfix align_center">
                                    <div style="width: 1px; height: 80px; background: #3a3d78; margin: 0 auto 30px"></div>
                                    <h4 style="color: #fff">Los productos FAMEISER tienen los aditivos necesarios de acuerdo a las necesidades que los vehículos automotrices</h4>
                                </div>
                            </div>
                            <div class="column mcb-column one column_button">
                                <div class="button_align align_center">
                                    <a class="button  button_left button_size_2 button_js" href="content/mechanic3/services.html" style=" color:#fff"><span class="button_icon"><i class="icon-list" style=" color:#fff !important"></i></span><span class="button_label">Lista de Precios</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Galeria --}}
            <div class="section mcb-section no-margin-h no-margin-v" style="padding-top:0px; padding-bottom:0px; background-color:#030720">
                <div class="section_wrapper mcb-section-inner">
                    <div class="wrap mcb-wrap one valign-top clearfix">
                        <div class="mcb-wrap-inner">
                            <div class="column mcb-column one column_column">
                                <div class="column_attr clearfix align_center">
                                    <h2 style="color: #fff">{{ $galeria[0]->titulo }}</h2>
                                    <h4 class="themecolor">{!! $galeria[0]->body !!}</h4>
                                </div>
                            </div>
                            <div class="column mcb-column one column_divider">
                                <hr class="no_line" style="margin: 0 auto 50px">
                            </div>
                        </div>
                    </div>
                    <div class="wrap mcb-wrap one-second valign-top clearfix">
                        <div class="mcb-wrap-inner">
                            <div class="column mcb-column one column_image">
                                <div class="image_frame image_item scale-with-grid aligncenter no_border">
                                    <div class="image_wrapper">
                                        <a href="{{ $imagenes[0] }}" rel="prettyphoto">
                                                <img class="scale-with-grid" src="{{ $imagenes[0] }}">
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap mcb-wrap one-second valign-top clearfix">
                        <div class="mcb-wrap-inner">
                            <div class="column mcb-column one-second column_image">
                                <div class="image_frame image_item scale-with-grid aligncenter no_border">
                                    <div class="image_wrapper">
                                        <a href="{{ $imagenes[4] }}" rel="prettyphoto">
                                                <img class="scale-with-grid" src="{{ $imagenes[4] }}">
                                            </a>
                                    </div>
                                </div>
                            </div>
                            <div class="column mcb-column one-second column_image">
                                <div class="image_frame image_item scale-with-grid aligncenter no_border">
                                    <div class="image_wrapper">
                                        <a href="{{ $imagenes[5] }}" rel="prettyphoto">
                                                <img class="scale-with-grid" src="{{ $imagenes[5] }}">
                                            </a>
                                    </div>
                                </div>
                            </div>
                            <div class="column mcb-column one column_image">
                                <div class="image_frame image_item scale-with-grid aligncenter no_border">
                                    <div class="image_wrapper">
                                        <a href="{{ $imagenes[2] }}" rel="prettyphoto">
                                                <img class="scale-with-grid" src="{{ $imagenes[2] }}">
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap mcb-wrap divider  valign-top clearfix">
                        <div class="mcb-wrap-inner"></div>
                    </div>
                    <div class="wrap mcb-wrap one-fourth valign-top clearfix">
                        <div class="mcb-wrap-inner">
                            <div class="column mcb-column one column_image">
                                <div class="image_frame image_item scale-with-grid aligncenter no_border">
                                    <div class="image_wrapper">
                                        <a href="{{ $imagenes[3] }}" rel="prettyphoto">
                                                <img class="scale-with-grid" src="{{ $imagenes[3] }}">
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap mcb-wrap one-fourth valign-top clearfix">
                        <div class="mcb-wrap-inner">
                            <div class="column mcb-column one column_image">
                                <div class="image_frame image_item scale-with-grid aligncenter no_border">
                                    <div class="image_wrapper">
                                        <a href="{{ $imagenes[6] }}" rel="prettyphoto">
                                                <img class="scale-with-grid" src="{{ $imagenes[6] }}">
                                            </a>
                                    </div>
                                </div>
                            </div>
                            <div class="column mcb-column one column_image">
                                <div class="image_frame image_item scale-with-grid aligncenter no_border">
                                    <div class="image_wrapper">
                                        <a href="{{ $imagenes[7] }}" rel="prettyphoto">
                                                <img class="scale-with-grid" src="{{ $imagenes[7] }}">
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap mcb-wrap one-second valign-top clearfix">
                        <div class="mcb-wrap-inner">
                            <div class="column mcb-column one column_image">
                                <div class="image_frame image_item scale-with-grid aligncenter no_border">
                                    <div class="image_wrapper">
                                        <a href="{{ $imagenes[1] }}" rel="prettyphoto">
                                                <img class="scale-with-grid" src="{{ $imagenes[1] }}">
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section mcb-section" style="padding-top:120px; padding-bottom:70px; background-color:#030720">
                <div class="section_wrapper mcb-section-inner">
                    <div class="wrap mcb-wrap one-fourth valign-top clearfix" style="padding:0 4% 0 0">
                        <div class="mcb-wrap-inner">
                            <div class="column mcb-column one column_image">
                                <div class="image_frame image_item no_link scale-with-grid no_border">
                                    <div class="image_wrapper"><img class="scale-with-grid" src="content/mechanic3/images/home_mechanic3_pic12.png" alt="home_mechanic3_pic12" width="83" height="80">
                                    </div>
                                </div>
                            </div>
                            <div class="column mcb-column one column_column">
                                <div class="column_attr clearfix">
                                    <h2 style="color: #fff">{{ $portada[5]->titulo }}</h2>
                                    <hr class="no_line" style="margin: 0 auto 20px">
                                    {!! $portada[5]->body !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap mcb-wrap one-second valign-top clearfix">
                        <div class="mcb-wrap-inner">
                            <div class="column mcb-column one column_map">

                                <div class="google-map-wrapper no_border">
{{--                                     <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d975.5944264524392!2d-77.00566941102923!3d-12.01749752279503!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2spe!4v1528954582861" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
 --}}                                    <div class="google-map" id="google-map-area-5ace49a803440" style="width:100%; height:550px">
                                        &nbsp;
                                    </div>
                                </div>
                            </div>
                            <div class="column mcb-column one column_button">
                                <div class="button_align align_center">
                                    <a class="button button_size_2 button_js" href="content/mechanic3/contact.html" style=" color:#fff"><span class="button_label">Mira el mapa entero</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap mcb-wrap one-fourth valign-top clearfix" style="padding:0 0 0 4%">
                        <div class="mcb-wrap-inner">
                            <div class="column mcb-column one column_column column-margin-20px">
                                <div class="column_attr clearfix align_center">
                                    <p class="big" style="color: #848bba">
                                        Llamanos
                                        <br> of visit
                                    </p>
                                </div>
                            </div>
                            <div class="column mcb-column one column_image">
                                <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                    <div class="image_wrapper">
                                        <img class="scale-with-grid" src="content/mechanic3/images/home_mechanic3_pic13.png">
                                    </div>
                                </div>
                            </div>
                            <div class="column mcb-column one column_column">
                                <div class="column_attr clearfix align_center">
                                    <h4 class="themecolor">+51 (0)</h4>
                                    <h2 style="color: #fff">659
                                        <br> 71
                                        <br> 76
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
