@extends('institutohable-com-br.layout.layout')
@section('content')

    <!--Mobile-->
    <div class="container-fluid d-md-none container-mobile">
        @if($page[0] == 'index')
            @include('institutohable-com-br.layout.header_mobile')
            @include('institutohable-com-br.layout.banner')
            @include('institutohable-com-br.layout.form_contato')
            @include('institutohable-com-br.layout.sobre')
            @include('institutohable-com-br.layout.planos')
        @else
            @include('institutohable-com-br.layout.'.$page[0])
        @endif

        @include('institutohable-com-br.layout.footer')
    </div>

    <!--Modo desktop-->
    <div class="container-desktop d-none d-md-block">

        @if($page[0] == 'index')
            @include('institutohable-com-br.layout.header_desk')
            @include('institutohable-com-br.layout.banner')
            @include('institutohable-com-br.layout.form_contato')
            @include('institutohable-com-br.layout.sobre')
            @include('institutohable-com-br.layout.planos')
        @else
            @include('institutohable-com-br.layout.'.$page[0])
        @endif

        @include('institutohable-com-br.layout.footer')
    </div>

@stop

<style>
    .container-mobile{
        padding: 0 !important;
        overflow-x: hidden;
    }
</style>
