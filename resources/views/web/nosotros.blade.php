@extends('layout.page')

@section('slogan',$nosotros[0]->titulo)

@section('content')
<div class="section mcb-section" style="padding-top:0px; padding-bottom:0px">
    <div class="section_wrapper mcb-section-inner">
        <div class="wrap mcb-wrap one valign-top clearfix">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_hover_box">
                    <div class="hover_box">
                        <a href="https://vimeo.com/55774501" rel="prettyphoto">
                            <div class="hover_box_wrapper">
                                <img class="visible_photo scale-with-grid" src="{{ $nosotros[0]->imagen }}">
                                <img class="hidden_photo scale-with-grid" src="{{ $nosotros[0]->imagen }}">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section mcb-section" style="padding-top:80px; padding-bottom:80px">
    <div class="section_wrapper mcb-section-inner">
        <div class="wrap mcb-wrap one valign-top clearfix">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one-second column_column">
                    <div class="column_attr clearfix" style=" padding:30px 6% 0px; border-right: 1px solid #ccc">
                        <h2>{{ $nosotros[1]->titulo }}</h2>
                        <hr class="no_line" style="margin: 0 auto 40px">
                        <div class="column one-second">
                            <div style="margin-right: 5%">
                                <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                    <div class="image_wrapper">
                                        <img class="scale-with-grid" src="{{ $nosotros[1]->imagen }}">
                                    </div>
                                </div>
                                <hr class="no_line" style="margin: 0 auto 20px">
                                <p class="big">{!! $nosotros[1]->body !!}</p>
                            </div>
                        </div>
                        <div class="column one-second">
                            <div style="margin-right: 5%">
                                <p class="big">{!! $nosotros[2]->body !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column mcb-column one-second column_column">
                    <div class="column_attr clearfix" style=" padding:30px 6% 0px">
                        <h2>{{ $nosotros[3]->titulo }}</h2>
                        <hr class="no_line" style="margin: 0 auto 40px">
                        <div class="column one-second">
                            <div style="margin-right: 5%">
                                <p class="big">{!! $nosotros[3]->body !!}</p>
                            </div>
                        </div>
                        <div class="column one-second">
                            <div style="margin-right: 5%">
                                <p class="big">{!! $nosotros[4]->body !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column mcb-column one column_divider">
                    <hr class="no_line" style="margin: 0 auto 40px">
                </div>
                <div class="column mcb-column one-third column_image">
                    <div class="image_frame image_item no_link scale-with-grid no_border">
                        <div class="image_wrapper">
                            <img class="scale-with-grid" src="{{ $img_equipo[0] }}">
                        </div>
                    </div>
                </div>
                <div class="column mcb-column one-third column_image">
                    <div class="image_frame image_item no_link scale-with-grid no_border">
                        <div class="image_wrapper">
                            <img class="scale-with-grid" src="{{ $img_equipo[1] }}">
                        </div>
                    </div>
                </div>
                <div class="column mcb-column one-third column_image">
                    <div class="image_frame image_item no_link scale-with-grid no_border">
                        <div class="image_wrapper">
                            <img class="scale-with-grid" src="{{ $img_equipo[2] }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('title-page','Nosotros')