<div class="container-fluid d-md-none">

    <div class="row" style="display: flex;
    align-items: center;
    justify-content: space-between;">
        {{--        <div class="col-4">--}}
        {{--            <a href="/">--}}
        {{--                <img src="img/logo claro_.png" style="width: 100%">--}}
        {{--            </a>--}}

        {{--        </div>--}}

        {{--        <div class="col-4 text-center v-center">--}}
        {{--            <a href="{{\App\E\Util::whatsAppLinkMobl($strings->FONE_ZAP1,$strings->MSG_ZAP1)}}"--}}
        {{--               target="new"--}}
        {{--               class="v-center btn btn-sucess btn-lg btn-fale-zap float">--}}
        {{--                <i class="fab fa-whatsapp my-float"></i>--}}
        {{--            </a>--}}
        {{--        </div>--}}

        {{--        <div class="col-4 text-right">--}}
        {{--            <div style="display: inline-block">--}}
        {{--                <a href="tel:{{$strings->FONE_FIXO1}}"--}}
        {{--                   target="_blank">--}}
        {{--                    <div style="font-size: 11px;">FALE COM A GENTE</div>--}}
        {{--                    <div style="font-size: 11px;line-height: 11px;font-weight: bolder;margin-top: -2px">{{$strings->FONE_FIXO1}}--}}
        {{--                    </div>--}}
        {{--                </a>--}}
        {{--            </div>--}}
        {{--        </div>--}}

        <div class="col-4">
            <a href="/">
                <picture>
                    <source srcset="img/logo%20claro_.webp" type="image/webp">
                    <source srcset="img/logo%20claro_.png" type="image/png">
                    <img src="img/logo claro_.png" style="width: 100%">
                </picture>
            </a>

        </div>

        <div class="text-center v-center" style="width: 30%;">
            <a href="{{\App\E\Util::whatsAppLinkMobl($strings->FONE_ZAP1,$strings->MSG_ZAP1)}}"
               target="new"
               class="v-center btn btn-sucess btn-lg btn-fale-zap float">
                <i class="fab fa-whatsapp my-float"></i>
            </a>
        </div>

        <div class="text-right">
            <div style="display: inline-block">
                <a href="tel:{{$strings->FONE_FIXO1}}"
                   target="_blank">

                    <div class='aux1'>FALE COM A GENTE</div>
                    <div class='aux2'>{{$strings->FONE_FIXO1}}
                    </div>
                </a>
            </div>
        </div>
    </div>

</div>

<style>
    .float {
        width: 40px;
        height: 40px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 30px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .my-float {
        margin-top: 1px;
    }

    .aux1,
    .aux2 {
        -webkit-transition: 0.3s;
        -moz-transition: 0.3s;
        -ms-transition: 0.3s;
        -o-transition: 0.3s;
        transition: 0.3s;
    }

    @media all and (max-width: 536px) and (min-width: 320px) {
        .aux1 {
            font-size: 11px;
        }

        .aux2 {
            font-size: 17px;
            font-weight: bolder;
        }
    }

    @media all and (max-width: 686px) and (min-width: 537px) {
        .aux1 {
            font-size: 18px;
        }

        .aux2 {
            font-size: 25px;
            font-weight: bolder;
        }
    }

    @media all and (max-width: 767px) and (min-width: 687px) {
        .aux1 {
            font-size: 18px;
        }

        .aux2 {
            font-size: 30px;
            font-weight: bolder;
        }

        /*}*/
        /*@media all and (max-width: 767px) and (min-width: 687px) {*/
        /*    .aux1{*/
        /*        font-size: 20px;*/
        /*    }*/
        /*    .aux2{*/
        /*        font-size: 40px;*/
        /*    }*/

    }
</style>