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
                                    <br> Nuestros productos</h2>
                            </div>
                        </div>
                        <div class="column mcb-column one column_divider">
                            <hr class="no_line" style="margin: 0 auto 40px">
                        </div>
                        <div class="column mcb-column one column_button">
                            <a class="button button_size_2 button_js" href="{{ route('productos') }}" style=" color:#fff"><span class="button_label">Nuestras Ofertas</span></a>
                        </div>
                    </div>
                </div>
                <div class="wrap mcb-wrap one-third valign-top clearfix" style="padding:120px 0 0">
                    <div class="mcb-wrap-inner">
                        <div class="column mcb-column one column_column">
                            <div class="column_attr clearfix" style=" background-image:url('{{ $galeria_productos[0]->imagen }}'); background-repeat:no-repeat; background-position:center top; padding:50px 50px 35px; max-width: 500px">
                                <a style="text-decoration: none;" href="{{ route('producto','refrigerante-fameiser') }}">
                                    <h4 class="themecolor">01</h4>
                                    <div style="width: 1px; height: 140px; background: #348880; margin-bottom: 15px"></div>
                                    <h3 style="color: #fff">{{ $galeria_productos[0]->titulo }}</h3>
                                </a>
                            </div>
                        </div>
                        <div class="column mcb-column one column_column">
                            <div class="column_attr clearfix" style=" background-image:url('{{ $galeria_productos[1]->imagen }}'); background-repeat:no-repeat; background-position:center top; padding:50px 50px 35px; max-width: 500px">
                                <a style="text-decoration: none;" href="{{ route('producto','agua-optima-fameiser') }}">
                                    <h4 class="themecolor">02</h4>
                                    <div style="width: 1px; height: 140px; background: #287991; margin-bottom: 15px"></div>
                                    <h3 style="color: #fff">{{ $galeria_productos[1]->titulo }}
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap mcb-wrap one-third valign-top clearfix">
                    <div class="mcb-wrap-inner">
                        <div class="column mcb-column one column_column">
                            <div class="column_attr clearfix" style=" background-image:url('{{ $galeria_productos[2]->imagen }}'); background-repeat:no-repeat; background-position:center top; padding:50px 50px 35px; max-width: 500px">
                                <a style="text-decoration: none;" href="{{ route('producto','refrigerante-fameiser-potenciado') }}">
                                    <h4 class="themecolor">03</h4>
                                    <div style="width: 1px; height: 140px; background: #2b7684; margin-bottom: 15px"></div>
                                    <h3 style="color: #fff">{{ $galeria_productos[2]->titulo }}</h3>
                                </a>
                            </div>
                        </div>
                        <div class="column mcb-column one column_column">
                            <div class="column_attr clearfix" style=" background-image:url('{{ $galeria_productos[3]->imagen }}'); background-repeat:no-repeat; background-position:center top; padding:50px 50px 35px; max-width: 500px">
                                <a style="text-decoration: none;" href="{{ route('producto','refrigerante-fameiser-premium') }}">
                                    <h4 class="themecolor">04</h4>
                                    <div style="width: 1px; height: 140px; background: #348880; margin-bottom: 15px"></div>
                                    <h3 style="color: #fff">{{ $galeria_productos[3]->titulo }}</h3>
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
                                <h2 class="themecolor">{{ $garantia->titulo }} <span class="marca-registrada">&#174</span> </h2>
                            </div>
                        </div>
                        <div class="column mcb-column one column_column">
                            <div class="column_attr clearfix" style=" background-color:#23235a; padding:80px 15% 65px">
                                <h6 style="color: #fff">{{ $garantia->resumen }}</h6>
                                <p style="color: #848bba">
                                    {!! $garantia->body !!}
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
                                    <img class="scale-with-grid" width="780px" src="{{ $garantia->imagen }}">
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
                        <div class="column mcb-column one-third column_column">
                            <div class="column_attr clearfix" style=" background-image:url('content/mechanic3/images/home_mechanic3_pic8.png'); background-repeat:no-repeat; background-position:left top; padding:15px 0 0px 110px">
                                <h4 style="color: #fff">Mantenimiento Correctivo
                                </h4>
                            </div>
                        </div>
                        <div class="column mcb-column one-third column_column">
                            <div class="column_attr clearfix" style=" background-image:url('content/mechanic3/images/home_mechanic3_pic9.png'); background-repeat:no-repeat; background-position:left top; padding:15px 0 0px 110px">
                                <h4 style="color: #fff">Mantenimiento Preventivo
                                </h4>
                            </div>
                        </div>
                        <div class="column mcb-column one-third column_column">
                            <div class="column_attr clearfix" style=" background-image:url('content/mechanic3/images/home_mechanic3_pic10.png'); background-repeat:no-repeat; background-position:left top; padding:15px 0 0px 110px">
                                <h4 style="color: #fff">Mantenimiento Proactivo</h4>
                            </div>
                        </div>
                        <div class="column mcb-column one column_divider">
                            <hr class="no_line" style="margin: 0 auto 40px">
                        </div>
                        <div class="column mcb-column one column_column">
                            <div class="column_attr clearfix align_center">
                                <div style="width: 1px; height: 80px; background: #3a3d78; margin: 0 auto 30px"></div>
                                <h4 style="color: #fff">Los productos de FAMEISER tienen los aditivos necesarios de acuerdo a tus necesidades, buscando siempre optimizar tu inversión en el cuidado de tu vehículo automotriz. <br> ¡Danos una oportunidad para mostrarte lo mejor de nosotros!</h4>
                            </div>
                        </div>
                        <div class="column mcb-column one column_button">
                            <div class="button_align align_center">
                                <a class="button  button_left button_size_2 button_js" href="{{ route('productos') }}" style=" color:#fff"><span class="button_icon"><i class="icon-list" style=" color:#fff !important"></i></span><span class="button_label">Lista de Precios</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Galeria --}}
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
                                <h2 style="color: #fff">{{ $contactanos->titulo }}</h2>
                                <hr class="no_line" style="margin: 0 auto 20px">
                                {!! $contactanos->body !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap mcb-wrap one-second valign-top clearfix">
                    <div class="mcb-wrap-inner">
                        <div class="column mcb-column one column_map">

                            <div class="google-map-wrapper no_border">
                                <div class="google-map" id="google-map-area-5ace49a803440" style="width:100%; height:550px">
                                    &nbsp;
                                </div>
                            </div>
                        </div>
                        <div class="column mcb-column one column_button">
                            <div class="button_align align_center">
                                <a class="button button_size_2 button_js" href="{{ route('contactanos') }}" style=" color:#fff"><span class="button_label">Mira el mapa entero</span></a>
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
                                    <br> o visitanos
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
                                {!! $contactanos->descripcion !!}
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
