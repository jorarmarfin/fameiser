@extends('layout.producto')

@section('content')
    <div class="section" style="padding:1rem; background-image: url('/images/home_mechanic3_sectionbg2.png'); background-repeat: no-repeat; background-position: center bottom; ">
    </div>
    <div class="section mcb-section equal-height-wrap" style="padding-top:2rem; background-color:#fff; padding-bottom:0px">
        <div class="section_wrapper mcb-section-inner">
            <div class="wrap mcb-wrap one-third valign-middle clearfix" style="height: 506px;">
                <div class="mcb-wrap-inner">
                    <div class="column mcb-column one column_column">
                        <div class="column_attr clearfix align_center" >
                            <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                <div class="image_wrapper">
                                    <img class="scale-with-grid-60" src="{{ $producto->imagen }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap mcb-wrap two-third valign-middle clearfix" style="padding: 0px 0px 0px 8%; height: 506px;">
                <div class="mcb-wrap-inner">
                    <div class="column mcb-column one column_column">
                        <div class="column_attr clearfix">
                            <h3>Cuando usar este producto</h3>
                            <p>Vehículos que trabajan con mucha exigencia y que alguna vez han usado y/o vienen usando productos de baja calidad en el sistema y/o agua de mesa, agua mineral y/o agua potable de consumo humano. Por este motivo ven una elevación de la temperatura de funcionamiento del sistema cada vez más frecuente, visitando al menos cada 2 meses a un especialista para evaluar el sistema.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section mcb-section equal-height-wrap" style="padding-top:2rem; background-color:#fff; padding-bottom:0px">
        <div class="section_wrapper mcb-section-inner">
            <div class="wrap mcb-wrap one valign-middle clearfix">
                <div class="mcb-wrap-inner">
                    <div class="column mcb-column one column_column">
                        <div class="column_attr clearfix">
                            {!! $producto->body !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('slogan',$producto->titulo)
@section('title-page',$producto->titulo)