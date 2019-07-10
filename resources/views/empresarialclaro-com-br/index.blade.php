@extends('empresarialclaro-com-br.layout.layout')


@section('content')

    <div class="desk-banner">

        <div class="d-none d-md-block abrirPopupDesk">
            <picture>
                <source srcset="img/banner.webp">
                <source srcset="img/banner.png">

                <img src="img/banner.png">
            </picture>
        </div>

        <div class="d-md-none">

            <a href="https://api.whatsapp.com/send?phone=5562991980594&text=Acessei o site da claro empresas e queria saber mais">

                <picture>

                    <source srcset="img/banner_mobile.webp">
                    <source srcset="img/banner_mobile.png,image/png">

                    <img src="img/banner_mobile.png">

                </picture>

            </a>

        </div>

    </div>

    <div class="claro-pacotes">
        <div class="container">

            <div class="row">
                <div class="col">
                    <h4 class="claro-pacotes-h">MAIS VENDIDOS</h4>
                </div>
            </div>

            <div class="row">
                @foreach($produtos as $p)
                    @include('empresarialclaro-com-br.layout.item',['produto'=>$p])
                @endforeach
            </div>

        </div>

    </div>


    <div class="banner-secundario">

        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="ban-secu-h">
                        Seja qual for o tamanho da sua
                        empresa nós temos a solução!
                    </h4>
                </div>
            </div>
            <div class="row ban-secu-img-cont">

                <div class="col-md-4 text-center">

                    <div class="ajuste-alt d-none d-md-block"></div>

                    <div style="white-space: nowrap">

                        <div class="sub-logo">
                            <picture>
                                <source srcset="img/NET-logo.webp" type="image/webp">
                                <source srcset="img/NET-logo.png" type="image/png">
                                <img src="img/NET-logo.png"
                                     alt="Cliente NET ou EMBRATEL GANHA EM DOBRO">
                            </picture>
                        </div>

                        <div class="sub-logo">
                            <picture>
                                <source srcset="img/logo-embratel.webp" type="image/webp">
                                <source srcset="img/logo-embratel.png" type="image/png">

                                <img src="img/logo-embratel.png"
                                     alt="Cliente NET ou EMBRATEL GANHA EM DOBRO">

                            </picture>
                        </div>
                    </div>

                    <div class="ajuste-alt d-none d-md-block"></div>
                    <div style="height: 20px" class="d-md-none"></div>

                </div>

                <div class="col-md-8 v-center">
                    <div class="ajuste-alt d-none d-md-block"></div>
                    <h3 class="text-center">Cliente NET ou Embratel ganha o DOBRO DE INTERNET a partir de 3GB</h3>
                    <div class="ajuste-alt d-none d-md-block"></div>
                </div>

            </div>
        </div>

    </div>


    <div class="claro-pacotes">
        <div class="container">

            <div class="row">
                @foreach($servicos as $srv)
                    @include('empresarialclaro-com-br.layout.item2',['srv'=>$srv])
                @endforeach
            </div>

        </div>

    </div>


    @include('empresarialclaro-com-br.layout.form-contato')

    @include('empresarialclaro-com-br.layout.contato-mobile')

@stop