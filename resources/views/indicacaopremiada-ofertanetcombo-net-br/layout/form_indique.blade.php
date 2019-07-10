{{--<div style=" padding-top: 5%;"></div>--}}
<div class="form1 row align-middle" >
    <div class=" col-lg-12">
        <div class="row align-content-center">
            <div class="col-md-12 col-lg-12 formIndique">
                <p align="center" style="text-align: center" class="titulo1">indique um cliente</p>
                <form method="post" >
                    <div class="row inputs">
                        <div class="col-lg-12">
                            <input id="nome" type="text" required class="form-control form-control-lg" placeholder="Nome do Cliente">
                        </div>
                    </div>
                    <div class="row inputs">
                        <div class="col-lg-12">
                            <input id="cpf" type="text" class="form-control mask_cpf valida-cpf form-control-lg" placeholder="CPF (opcional)">
                        </div>
                    </div>
                    <div class="row inputs">
                        <div class="col-lg-12">
                            <input id="fone1" type="text" required class="form-control mask_fone form-control-lg" placeholder="Telefone 01">
                        </div>
                    </div>
                    <div class="row inputs">
                        <div class="col-lg-12">
                            <input id="fone2" type="text" class="form-control mask_fone form-control-lg" placeholder="Telefone 02 (opcional)">
                        </div>
                    </div>
                    <div class="row inputs">
                        <div class="col-lg-12">
                            <textarea id="obs" type="text" class="form-control form-control-lg" placeholder="Observações (opcional)"></textarea>
                        </div>
                    </div>
                    <div style="background-color: #FF9900; border-radius: 8px; padding-bottom: 10px; padding-top: 10px; margin-top: 8px; margin-right: 10px; margin-left: 10px;">
                        <span style="margin-top: 10px; color: white; padding-left:10px; font-size: 18px; font-weight: bold; text-transform: uppercase;" >digite seu cpf</span>
                        <p style=" color: white; padding-left:10px; font-size: 17px; " >Assim, saberemos que você indicou essa venda.</p>
                        <div class="row inputs">
                            <div align="center" class="col-lg-12">
                                <input id="cpf_indicador" required style="" type="text" class="form-control form-control-lg mask_cpf valida-cpf" placeholder="CPF ">
                            </div>
                        </div>
                    </div>
                    <div class="row inputs">
                        <div align="center" class="col-lg-12">
                            <button  style="font-size: 25px; border-radius: 7px; margin-top: 15px; padding-right: 25%; padding-left: 25%;" class="btn btn-primary btn-indicar" type="submit">Indicar</button>
                            <button onclick="window.open('/','_self')" style="margin-top: 15px; padding-right: 4%; padding-left: 4%; margin-left: 10px; margin-right: 10px;" class="btn btn-primary button01" type="button">Voltar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<style>

    .btn-indicar {
        border-radius: 20px;
        text-align: center;
        font-weight: 900;
        color: #37324C;
        text-transform: uppercase;
        border-color: #37324C;
        background-color: #FF9900;;

    }

    .btn-indicar:hover {
        color:#FF9900;
        border-color:#FF9900;
        background-color:  #37324C;

    }
    .button01 {
        border-radius: 20px;
        text-align: center;
        font-weight: 900;
        color: #FF9900;
        text-transform: uppercase;
        border-color: #FF9900;
        background-color: #37324C;

    }

    .button01:hover {
        color:#37324C ;
        border-color: #37324C;
        background-color:  #FF9900;

    }

    .titulo1{
        text-align: left;
        font-size: 30px;
        text-transform: uppercase;
        padding-top: 36px;
        padding-left: 8px;
        font-weight: 900;
        color: white;
    }

    .form1{
        background-color: #37324C;
        /*margin-right: 10%;*/
        /*margin-left: 10%;*/
    }

    .inputs{
        padding: 8px;
    }
    .seta-baixo {
        border-left: 40px solid transparent;
        border-right: 40px solid transparent;
        border-top: 40px solid white;
        margin-left: 48%;
        margin-right: 48%;
    }

    @media all  and (max-width: 536px) and (min-width: 320px) {
        .p02{
            font-size: 18px;
        }
        .titulo1{
            font-size: 18px;
        }
        .titulo2{
            font-size: 18px;
        }
        .seta-baixo{
            margin-left: 39%;
        }

    }

    @media all and (max-width: 686px) and (min-width: 537px) {
        .p02{
            font-size: 25px;
        }
        .titulo1{
            font-size: 18px;
        }
        .titulo2{
            font-size: 25px;
        }

     }

    @media all and (max-width: 3000px) and (min-width: 687px) {
        .p02{
            font-size: 36px;
        }
        .titulo1{
            font-size: 25px;
        }
        .titulo2{
            font-size: 25px;
        }
        .form2{
            margin-top: 105px;
        }
    }
</style>

<script>

    AppReady(function () {

        var formIndique = $('.formIndique form');

        formIndique.on('submit', function (ev) {

            ev.preventDefault();
            ev.stopPropagation();

            var nome          = $("#nome").val();
            var cpf           = $("#cpf").val().replace(/\D/g, '');
            var fone1         = $("#fone1").val().replace(/\D/g, '');
            var fone2         = $("#fone2").val().replace(/\D/g, '');
            var obs           = $("#obs").val().replace(/\D/g, '');
            var cpf_indicador = $("#cpf_indicador").val();

            var dadosIndicacao = {
                'nome':  nome,
                'cpf':   cpf,
                'fone1': fone1,
                'fone2': fone2,
                'obs':   obs,
                'cpf_indicador': cpf_indicador

            };

            console.log(dadosIndicacao);

            // axios.post('/api/indicar', dadosIndicacao)
            //     .then(function (result) {
            //         Swal.fire({
            //             title: "Cliente indicado com sucesso!",
            //             type: 'success',
            //             confirmButtonText: 'OK'
            //         });
            //
            //     }).catch(function (ex) {
            //         Swal.fire({
            //             title: ex.response.data,
            //             type: 'error',
            //             confirmButtonText: 'Fechar'
            //         });
            //
            // });

        });

    });
</script>