@extends('layout.page')

@section('slogan',$slogan->titulo)

@section('content')
<div class="section mcb-section" style="padding-top:0px; padding-bottom:0px; background-image:url({{ asset('content/mechanic3/images/home_mechanic3_sectionbg2.png') }}); background-repeat:no-repeat; background-position:center bottom">
    <div class="section_wrapper mcb-section-inner">
        <div class="wrap mcb-wrap one-third valign-top clearfix" style="padding:60px 0 0">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_column">
                    <div class="column_attr clearfix align_center" style=" background-color:#fff; padding:60px 60px 0">
                        <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                            <div class="image_wrapper">
                                <img class="scale-with-grid" src="{{ $mantenimiento[0]->imagen }}">
                            </div>
                        </div>
                        <hr class="no_line" style="margin: 0 auto 40px">
                        <h4>{{ $mantenimiento[0]->titulo }}</h4>
                        {!! $mantenimiento[0]->body !!}
                        <div style="position: relative; top: 50px">
                            <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                <div class="image_wrapper">
                                    <img class="scale-with-grid" src="{{ asset('content/mechanic3/images/home_mechanic3_services4.png') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap mcb-wrap one-third valign-top clearfix">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_column">
                    <div class="column_attr clearfix align_center" style=" background-color:#fff; padding:60px 60px 0">
                        <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                            <div class="image_wrapper">
                                <img class="scale-with-grid" src="{{ $mantenimiento[1]->imagen }}">
                            </div>
                        </div>
                        <hr class="no_line" style="margin: 0 auto 40px">
                        <h4>{{ $mantenimiento[1]->titulo }}</h4>
                        {!! $mantenimiento[1]->body !!}
                        <div style="position: relative; top: 50px">
                            <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                <div class="image_wrapper">
                                    <img class="scale-with-grid" src="{{ asset('content/mechanic3/images/home_mechanic3_services5.png') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap mcb-wrap one-third valign-top clearfix" style="padding:60px 0 0">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_column">
                    <div class="column_attr clearfix align_center" style=" background-color:#fff; padding:60px 60px 0">
                        <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                            <div class="image_wrapper">
                                <img class="scale-with-grid" src="{{ $mantenimiento[2]->imagen }}">
                            </div>
                        </div>
                        <hr class="no_line" style="margin: 0 auto 40px">
                        <h4>{{ $mantenimiento[2]->titulo }}</h4>
                        {!! $mantenimiento[2]->body !!}
                        <div style="position: relative; top: 50px">
                            <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                <div class="image_wrapper">
                                    <img class="scale-with-grid" src="{{ asset('content/mechanic3/images/home_mechanic3_services6.png') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap mcb-wrap one valign-top clearfix">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_divider">
                    <hr class="no_line" style="margin: 0 auto 40px">
                </div>
            </div>
        </div>
        <div class="wrap mcb-wrap one valign-top clearfix" style="padding:80px 0 40px; background-image:url({{ asset('content/mechanic3/images/home_mechanic3_services7.png') }}); background-repeat:no-repeat; background-position:center top">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_column">
                    <div class="column_attr clearfix align_center">
                        <h2>Los productos FAMEISER tienen los aditivos necesarios de acuerdo a las necesidades que los vehículos automotrices tengan, dando de esta manera un mejor margen económico a las empresas en el uso de productos para el sistema de refrigeración</h2>
                    </div>
                </div>
                <div class="column mcb-column one column_image">
                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                        <div class="image_wrapper">
                            <img class="scale-with-grid" src="{{ asset('content/mechanic3/images/home_mechanic3_services8.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section mcb-section" style="padding-top:120px; padding-bottom:70px; background-color:#fff">
    <div class="section_wrapper mcb-section-inner">
        <div class="wrap mcb-wrap one valign-top clearfix">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_tabs">
                    <div class="jq-tabs tabs_wrapper tabs_vertical">
                        <ul>
                            <li>
                                <a href="#tab-5ace4a04cb748-1">{{ $galeria_productos[0]->titulo }}</a>
                            </li>
                            <li>
                                <a href="#tab-5ace4a04cb748-2">{{ $galeria_productos[1]->titulo }}</a>
                            </li>
                            <li>
                                <a href="#tab-5ace4a04cb748-3">{{ $galeria_productos[2]->titulo }}</a>
                            </li>
                            <li>
                                <a href="#tab-5ace4a04cb748-4">{{ $galeria_productos[3]->titulo }}</a>
                            </li>
                        </ul>
                        <div id="tab-5ace4a04cb748-1" style="padding:20px 6% 15px">
                            <h2>{{ $galeria_productos[0]->titulo }}</h2>
                            <hr class="no_line" style="margin: 0 auto 20px">
                            <div class="column one-second">
                                <div style="margin-right: 40px">
                                    {!! $galeria_productos[0]->descripcion_corta !!}
                                </div>
                            </div>
                            <div class="column one-second">
                                <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                    <div class="image_wrapper">
                                        <img class="scale-with-grid" src="{{ $galeria_productos[0]->imagen }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5ace4a04cb748-2" style="padding:20px 6% 15px">
                            <h2>{{ $galeria_productos[1]->titulo }}</h2>
                            <hr class="no_line" style="margin: 0 auto 20px">
                            <div class="column one-second">
                                <div style="margin-right: 40px">
                                    {!! $galeria_productos[1]->descripcion_corta !!}
                                </div>
                            </div>
                            <div class="column one-second">
                                <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                    <div class="image_wrapper">
                                        <img class="scale-with-grid" src="{{ $galeria_productos[1]->imagen }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5ace4a04cb748-3" style="padding:20px 6% 15px">
                            <h2>{{ $galeria_productos[2]->titulo }}</h2>
                            <hr class="no_line" style="margin: 0 auto 20px">
                            <div class="column one-second">
                                <div style="margin-right: 40px">
                                    {!! $galeria_productos[2]->descripcion_corta !!}
                                </div>
                            </div>
                            <div class="column one-second">
                                <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                    <div class="image_wrapper">
                                        <img class="scale-with-grid" src="{{ $galeria_productos[2]->imagen }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5ace4a04cb748-4" style="padding:20px 6% 15px">
                            <h2>{{ $galeria_productos[3]->titulo }}</h2>
                            <hr class="no_line" style="margin: 0 auto 20px">
                            <div class="column one-second">
                                <div style="margin-right: 40px">
                                    {!! $galeria_productos[3]->descripcion_corta !!}
                                </div>
                            </div>
                            <div class="column one-second">
                                <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                    <div class="image_wrapper">
                                        <img class="scale-with-grid" src="{{ $galeria_productos[3]->imagen }}">
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


@endsection

@section('scripts')
<script>
jQuery(window).load(function() {
    jQuery(".jq-tabs").tabs();
});
</script>
@endsection

@section('title-page','Nosotros')