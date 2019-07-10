<!doctype html>
<html lang="pt_br">
<head>
    <meta charset="utf-8">

    <meta http-equiv="Accept-CH" content="DPR, Viewport-Width, Width">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="img/indique/MOEDAS.png">

    <!-- Inicio Seo config-->
    <title>Indicação Premiada - Admin</title>
    <link rel="canonical" href="https://www.ofertanetcombo.net.br"/>
    <meta property="og:locale"    content="pt_BR"/>
    <meta property="og:type"      content="website"/>
    <meta property="og:title"     content="Home - Indicação Premiada"/>
    <meta property="og:url"       content="https://www.indicacaopremiada.ofertanetcombo.net.br"/>
    <meta property="og:site_name" content="Indicação Premiada"/>
    <meta name="twitter:card"     content="summary_large_image"/>
    <meta name="twitter:title"    content="Home - Indicação Premiada"/>

    <meta name="keywords" content=""/>

    <meta name="description" content="">

    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=cyrillic,cyrillic-ext" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <style type="text/css">{!!file_get_contents('node_modules/bootstrap/dist/css/bootstrap.min.css')!!}</style>
    <style type="text/css">{!!file_get_contents('node_modules/sweetalert2/dist/sweetalert2.min.css')!!}</style>
    <style type="text/css">{!!file_get_contents('node_modules/datatables/media/css/jquery.dataTables.css')!!}</style>

    <style>
        body{
            font-family: 'Montserrat', sans-serif;
        }
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

<!-- Image and text -->
<nav style="background-color: #37324b !important;" class="navbar navbar-light">
    <a style="padding-right: 10px" class="navbar-brand" href="#">
        <img src="img/indique/MOEDAS.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <span style="color: white; font-size: 17px;">Indicação Premiada - Administração</span>
    </a>
</nav>

<body >


@yield('content')

<script type="text/javascript">{!!file_get_contents('node_modules/jquery/dist/jquery.slim.min.js')!!}</script>
<script type="text/javascript">{!!file_get_contents('node_modules/bootstrap/dist/js/bootstrap.min.js')!!}</script>
<script type="text/javascript">{!!file_get_contents('node_modules/sweetalert2/dist/sweetalert2.min.js')!!}</script>
<script type="text/javascript">{!!file_get_contents('node_modules/axios/dist/axios.min.js')!!}</script>
<script type="text/javascript">{!!file_get_contents('node_modules/jquery-mask-plugin/dist/jquery.mask.js')!!}</script>
<script type="text/javascript">{!!file_get_contents('node_modules/datatables/media/js/jquery.dataTables.js')!!}</script>
<script type="text/javascript">{!!file_get_contents('node_modules/moment/min/moment.min.js')!!}</script>

<script>

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
            $("#cpfInvalido").remove();
            $(this).css({
                'background-color' : 'white',
                'color' : 'black'
            });
        }else{
            $(this).css({
                'background-color' : '#cc090052',
                'color' : 'white'
            });
            $("#cpfInvalido").remove();
            $(this).parent().append(" <span id='cpfInvalido' style='color: red; text-align: center;' >CPF inválido!</span>");
        }
    });

    $(function () {
        $('.mask_cpf').mask('000.000.000-00');
        $('.mask_cep').mask('00.000-000');
        $('.mask_fone').mask('(00) 00000-0000');
    });

</script>

</body>

</html>