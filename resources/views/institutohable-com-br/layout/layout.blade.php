<!doctype html>
<html lang="pt_br">
<head>
    <meta charset="utf-8">

    <meta http-equiv="Accept-CH" content="DPR, Viewport-Width, Width">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="img/institutohable/icon.ico">

    <!-- Inicio Seo config-->
    <title>Instituto Hable</title>
    <link rel="canonical" href="https://institutohable.com.br"/>
    <meta property="og:locale"    content="pt_BR"/>
    <meta property="og:type"      content="website"/>
    <meta property="og:title"     content="Home - Instituto Hable"/>
    <meta property="og:url"       content="https://www.institutohable.com.br"/>
    <meta property="og:site_name" content="Instituto Hable"/>
    <meta property="og:image"     content="https://www.institutohable.com.br/img/institutohable/logo.png">
    <meta name="twitter:card"     content="summary_large_image"/>
    <meta name="twitter:title"    content="Home - Instituto Hable"/>
    <meta name="keywords" content=""/>

    <meta name="description"
          content="">

    <style type="text/css">{!!file_get_contents('node_modules/bootstrap/dist/css/bootstrap.min.css')!!}</style>
    <style type="text/css">{!!file_get_contents('node_modules/sweetalert2/dist/sweetalert2.min.css')!!}</style>
    <style type="text/css">{!!file_get_contents('node_modules/datatables/media/css/jquery.dataTables.css')!!}</style>
    <style type="text/css">{!!file_get_contents('css/institutohable.css')!!}</style>

    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=cyrillic,cyrillic-ext" rel="stylesheet">

    <style>
        {!!file_get_contents('css/indique_app.css')!!}
    </style>
    <script>
        var CB = [];

        function AppReady(cb) {
            CB.push(cb);
        }

        document.addEventListener("DOMContentLoaded", function (event) {
            while (CB.pop().call());
        });
    </script>

</head>

<body>

@yield('content')

<script type="text/javascript">{!!file_get_contents('node_modules/jquery/dist/jquery.slim.min.js')!!}</script>
<script type="text/javascript">{!!file_get_contents('node_modules/bootstrap/dist/js/bootstrap.min.js')!!}</script>
<script type="text/javascript">{!!file_get_contents('node_modules/sweetalert2/dist/sweetalert2.min.js')!!}</script>
<script type="text/javascript">{!!file_get_contents('node_modules/axios/dist/axios.min.js')!!}</script>
<script type="text/javascript">{!!file_get_contents('node_modules/jquery-mask-plugin/dist/jquery.mask.js')!!}</script>
<script type="text/javascript">{!!file_get_contents('node_modules/datatables/media/js/jquery.dataTables.js')!!}</script>
<script type="text/javascript">{!!file_get_contents('node_modules/moment/min/moment.min.js')!!}</script>

<script>

    function meLiga(fone, cep) {


        var dados = {
            'origem': 'Anuncionet',
            'nome': 'Contato do site',
            'fone': fone.replace(/\D/g, ''),
            'zip': cep ? cep.replace(/\D/g, '') : '7464000'
        };

        axios.post('https://everyday.net.br/beta/api/marketing/enviar-contato-email', dados)

            .then(function () {

                Swal.fire({
                    title: 'Ligaremos para você do número (62) 3414-9100',
                    type: 'success',
                    confirmButtonText: 'OK'
                });

            }).catch(function () {

            Swal.fire({
                title: 'Informe todos os campos.',
                type: 'error',
                confirmButtonText: 'Fechar'
            });
        });

    }

    $('#tableIndicacoes').dataTable(
        {   "columns": [
                { data: 'id' },
                { data: 'nome' },
                { data: 'cpf' },
                { data: 'fone1' },
                { data: 'fone2' },
                { data: 'obs' },
                { data: function (datetime) {
                        return moment(datetime).format("DD/MM/YYYY");
                    } }
            ],
            "searching": false,
            "language": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }
            }
        }
    );

    $(document).on('click', '#como-funciona', function (event) {
        var infoDisplay = $(".info").css("display");

        if( infoDisplay === 'none'){
            $(".info").css("display", "flex")
        }else{
            $(".info").css("display", "none")
        }
    });

    function validarCPF(cpf) {

        if (cpf == null || cpf == '')
            return;

        let strCPF = cpf.replace('-', '');
        strCPF = strCPF.split('.').join('');

        var Soma;
        var Resto;
        Soma = 0;
        if (strCPF == "00000000000")
            return false;

        for (i = 1; i <= 9; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
        Resto = (Soma * 10) % 11;

        if ((Resto == 10) || (Resto == 11)) Resto = 0;
        if (Resto != parseInt(strCPF.substring(9, 10)))
            return false;

        Soma = 0;
        for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
        Resto = (Soma * 10) % 11;

        if ((Resto == 10) || (Resto == 11)) Resto = 0;

        if (Resto != parseInt(strCPF.substring(10, 11)))
            return false;

        return true;
    }

    $(document).on('blur', '.valida-cpf', function (event) {

        if(validarCPF(this.value.replace(/\D/g, ''))){
            $(this).css({
                'background-color' : 'white',
                'color' : 'black'
            });
        }else{
            $(this).css({
                'background-color' : '#cc090052',
                'color' : 'white'
            });
            alert("CPF inválido!");
        }
    });

    $(function () {

        function abrirModalDesktop() {

            gtag('event', 'conversion', {'send_to': 'AW-754204602/Js7TCNXQ75cBELr_0OcC', 'event_callback': null});

            $('.modal-desktop-ligar').css({'display': 'block'});
            $('body').css({overflow: 'hidden'});
        }

        function fecharModalDesktop() {
            $('.modal-desktop-ligar').css({'display': 'none'});
            $('body').css({overflow: 'auto'});
        }

        $('.modal-fechar').on('click', function (ev) {
            fecharModalDesktop();
            ev.preventDefault();
            ev.stopPropagation();
        });

        $('.abrirPopupDesk').on('click', function (ev) {
            ev.preventDefault();
            ev.stopPropagation();
            abrirModalDesktop();
        });

        $('.desk-banner').on('click', function () {
            //   abrirModalDesktop();
        });

        $('.frm-desk-ligar').on('submit', function (ev) {

            ev.preventDefault();
            ev.stopPropagation();

            var fone = $(this).find('input').eq(0).val();
            meLiga(fone);

            fecharModalDesktop();

        });

        $('.mask_cpf').mask('000.000.000-00');
        $('.mask_cep').mask('00.000-000');
        $('.mask_fone').mask('(00) 00000-0000');


    });


</script>


<script>


    $('.track_liga_pra_mim').on('click', function () {

        gtag('event', 'conversion', {'send_to': 'AW-754204602/Js7TCNXQ75cBELr_0OcC', 'event_callback': null});
        // fbq('track', 'Lead',{content_name: "LIGAR"});
    });

    $('.track_zap').on('click', function () {

        // fbq('track', 'Contact');
        gtag('event', 'conversion', {'send_to': 'AW-754199672/6O9nCIfpmZ0BEPjY0OcC', 'event_callback': null});
    });


</script>



<script>

</script>

</body>

</html>