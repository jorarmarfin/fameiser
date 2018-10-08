@extends('layout.page')

@section('content')

<div class="section mcb-section equal-height-wrap" style="padding-top:44; padding-bottom:0px; background-color: white;">
    <div class="section_wrapper mcb-section-inner">
        <div class="wrap mcb-wrap one valign-middle clearfix">
            <div class="mcb-wrap-inner">
                {!! $garantia->descripcion !!}
            </div>
        </div>
    </div>
</div>
<div class="section mcb-section equal-height-wrap" style="padding-top:44px; padding-bottom:0px; background-color: white;">
        <div class="section_wrapper mcb-section-inner">
            <div class="wrap mcb-wrap one valign-middle clearfix">
                <div class="mcb-wrap-inner">
                <h1>Fortalezas</h1>
                <div class="jq-tabs tabs_wrapper tabs_horizontal">
                    <ul>
                        @foreach ($fortalezas as $item)
                        <li>
                            <a href="#tab-{{ $loop->iteration }}">{{ $item->titulo }}</a>
                        </li>
                        @endforeach
                    </ul>
                    @foreach ($fortalezas as $item2)
                        <div id="tab-{{ $loop->iteration }}">
                            {!! $item2->body !!}
                        </div>
                    @endforeach
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
@section('slogan','Garantia')
@section('title-page','Garantia')