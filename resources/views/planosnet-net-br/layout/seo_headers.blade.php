<!-- Global site tag (gtag.js) - Google Ads: 744240586 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-744240586"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'AW-744240586');

</script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-140622930-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-140622930-1');
</script>



<script>

    /**
     *      * Enviar enventos conversao via ligacao
     * */
    function GOOGLE_TAG_LIGACOES_SITE_ENVIAR() {

        gtag('event', 'conversion', {
            'send_to': 'AW-744240586/1o07CL7ViJ8BEMrr8OIC',
            'event_callback': null
        });
        //return false;
    }

    /**
     * Enviar enventos conversao via whatsapp
     * @returns {boolean}
     * @constructor
     */
    function GOOGLE_TAG_WHATSAPP_SITE_ENVIAR() {

        gtag('event', 'conversion', {
            'send_to': 'AW-744240586/ouX4CJXt9p4BEMrr8OIC',
            'event_callback': null
        });
      //  return false;
    }
 /**
     * Enviar eventos formulario de conversao
     * @returns {boolean}
     * @constructor
     */
    function GOOGLE_TAG_FORMULARIO_SITE_ENVIAR() {

     console.log("ENENTO ENVIADO");

     gtag('event', 'conversion', {
            'send_to': 'AW-744240586/t8b2CNe99qABEMrr8OIC',
            'event_callback': null
        });
      //  return false;
    }

    /**
     * gerar eventos conversao google via zap
     */
    window.onload = function () {
        $('.btn-fale-zap,.desk-banner').on('click', GOOGLE_TAG_WHATSAPP_SITE_ENVIAR);
        $('.fa-phone,.aux2').on('click', GOOGLE_TAG_LIGACOES_SITE_ENVIAR);
    };


</script>
