@extends('layout.page')

@section('content')
<div class="section mcb-section" style="padding-top:80px; padding-bottom:80px; background-color: white">
    <div class="section_wrapper mcb-section-inner">
        <div class="wrap mcb-wrap one valign-top clearfix">
            {!! $ofertas->body !!}
        </div>
    </div>
</div>

@endsection

@section('slogan',$ofertas->titulo)
@section('title-page',$ofertas->titulo)