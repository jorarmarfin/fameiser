@extends('layout.page')

@section('content')
<div class="section mcb-section" style="padding-top:0px; padding-bottom:0px">
    <div class="section_wrapper mcb-section-inner">
        <div class="wrap mcb-wrap one valign-top clearfix">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_image">
                    <div class="image_frame image_item no_link scale-with-grid no_border">
                        <div class="image_wrapper">
                            <img class="scale-with-grid" src="{{ $pagina_servicio->imagen }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section mcb-section equal-height-wrap" style="padding-top:2rem; padding-bottom:0px; background-color: white">
        <div class="section_wrapper mcb-section-inner">
            <div class="wrap mcb-wrap one valign-top clearfix">
                    {!! $pagina_servicio->body !!}
            </div>
        </div>
</div>
<div class="section mcb-section equal-height-wrap" style="padding-top:2rem; padding-bottom:0px">
    <div class="section_wrapper mcb-section-inner">
        <div class="wrap mcb-wrap one-second valign-middle clearfix">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_column">
                    <div class="column_attr clearfix align_center" style=" background-image:url('{{ $servicio->imagen }}'); background-repeat:no-repeat; background-position:center top; padding:120px 10% 105px">
                        <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                            <div class="image_wrapper">
                                <img class="scale-with-grid" src="{{ asset('images/home_mechanic3_pricing5.png') }}">
                            </div>
                        </div>
                        <hr class="no_line" style="margin: 0 auto 90px">
                        <h2 style="color: #fff">{!! $servicio->descripcion !!}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap mcb-wrap one-second valign-middle clearfix" style="padding:0 0 0 8%">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_column">
                    <div class="column_attr clearfix">
                        {!! $servicio->body !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('slogan',$pagina_servicio->titulo)
@section('title-page',$pagina_servicio->titulo)