<div class="container d-none d-md-block ">
    <!--Desktop-->
    <div class="ajustar-header-desk">
        <div class="row">

            <div class="col-md-4">
                <a href="/">
                    <picture>
                        <source srcset="img/logo%20claro_.webp" type="image/webp">
                        <source srcset="img/logo%20claro_.png" type="image/png">
                        <img style="width: 160px" src="img/logo claro_.png">
                    </picture>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{\App\E\Util::whatsAppLinkDesk($strings->FONE_ZAP1,$strings->MSG_ZAP1)}}"
                   target="new"
                   class="btn btn-success btn-lg btn-fale-zap">
                    <i class="fab fa-whatsapp"></i>
                    Fale Via whatsapp
                </a>
            </div>

            <div class="col-md-4">
                <a href="tel:{{$strings->FONE_FIXO1}}">
                    <div style="font-size: 26px;font-weight: bolder;"><i
                                class="fa fa-phone">&nbsp;</i>{{$strings->FONE_FIXO1}}</div>
                    {{--                    <span stylecolor: #000;">De 2ª à 6ª 8h às 18h</span>--}}
                </a>
            </div>

        </div>
    </div>

    <!--Menu mobile-->
    <div class="menu-mobile" style="display: none">

        <div class="row">

            <div class="col-md-12">
                <a href="sobre.php">INTERNET VIA SATÉLETE</a>
            </div>

        </div>
    </div>

</div>