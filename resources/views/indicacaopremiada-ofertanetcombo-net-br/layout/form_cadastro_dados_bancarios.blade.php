<div style=" padding-top: 13%;"></div>
<div class="form3" >
    <div class=" col-lg-12 col-md-12 col-sm-12">
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-12 col-md-12 col-sm-12">
                <p style="text-align: center; color: #37324C" class="titulo1">Informe seus dados bancários</p>
                <p style="text-align: center; color: #37324C; font-size: 18px;">Precisamos de seus dados bancários para que possamos te pagar</p>
                <form id="formCadastroDadosBancarios" method="post" >
                    <input type="hidden" id="indicador_id" name="indicador_id" value="">
                    <div class="row inputs">
                        <div class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" id="banco" name="banco" class="form-control form-control-lg form-control-sm" placeholder="Banco">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" id="agencia" name="agencia"  class="form-control form-control-lg form-control-sm" placeholder="Agência">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" id="conta" name="conta"  class="form-control form-control-lg form-control-sm" placeholder="Conta">
                        </div>
                    </div>

                    <div class="row inputs">
                        <div align="center" class="col-lg-12 col-md-12 ">
                            <button onclick="  $('#modalSenha').modal('show');" style="margin-top: 15px;" class="btn btn-primary button01 form-control-lg" type="button">Finalizar cadastro</button>
                            <button onclick="window.open('/page-cadastrar-endereco','_self')" style="margin-top: 15px; padding-right: 4%; padding-left: 4%; margin-left: 10px; margin-right: 10px;" class="btn btn-primary button02" type="button">Voltar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div style="    margin-top: 20px;  font-size: 23px; text-align: center">
            <p>
               Em um passo você já pode indicar.
            </p>
        </div>
    </div>
</div>

<style>

    .modal-footer>:not(:last-child) {
        margin-right: 9.25rem;
    }

    .p02{
        text-align: center;
        font-size: 30px;
        text-transform: uppercase;
        padding-top: 36px;
        font-weight: 900;
        color: #37324C;

    }

    .button01 {
        border-radius: 20px;
        text-align: center;
        font-weight: 900;
        color: white;
        text-transform: uppercase;
        border-color: white;
        background-color: #37324C;

    }

    .button01:hover{
        border-radius: 20px;
        text-align: center;
        font-weight: 900;
        color: #37324C;
        text-transform: uppercase;
        border-color: white;
        background-color: white;

    }

    .button02 {
        border-radius: 20px;
        font-weight: 900;
        color: #37324C;
        text-transform: uppercase;
        border-color: #37324C;
        background-color:#FF9900;

    }

    .button02:hover{
        border-radius: 20px;
        font-weight: 900;
        color: #FF9900;
        text-transform: uppercase;
        border-color: #37324C;
        background-color: #37324C;

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
    }
    .form2{
        background-color: #FF9900;
        padding: 10px;
        margin-bottom: 20px;

    }
    .form3{
        background-color: #FF9900;
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

    .titulo2{
        text-align: left;
        font-size: 30px;
        text-transform: uppercase;
        font-weight: 900;
        color: #37324C;

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
        .button01{
            font-size: 15px;
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

        .modal-footer>:not(:last-child) {
            margin-right: 34rem;
        }
    }
</style>

<script>

    AppReady(function () {

        var formCadastroDadosBancarios = $('#formCadastroDadosBancarios');

        formCadastroDadosBancarios.on('submit', function (ev) {

            ev.preventDefault();
            ev.stopPropagation();

            var banco   = $("#banco").val();
            var agencia = $("#agencia").val();
            var conta   = $("#conta").val();
            var senha   = $("#senha2").val();

            var dadosCadastroDadosBancarios = {
                'banco':   banco,
                'agencia': agencia,
                'conta':   conta,
                'senha':   senha
            };

            console.log(dadosCadastroDadosBancarios);

            // axios.post('/api/cadastrar', dadosCadastro)
            //     .then(function (result) {
            //
            //          window.open('/page-cadastrar-dados-bancarios','_self')
            //
            //         // Swal.fire({
            //         //     title: result.data,
            //         //     type: 'success',
            //         //     confirmButtonText: 'OK'
            //         // });
            //
            //     }).catch(function (ex) {
            //         $('#modalSenha').modal('show');
            //
            //     Swal.fire({
            //         title: ex.response.data,
            //         type: 'error',
            //         confirmButtonText: 'Fechar'
            //     });
            //
            // });

        });

    });
</script>