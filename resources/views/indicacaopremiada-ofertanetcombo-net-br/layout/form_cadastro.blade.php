<div class="margem-top"></div>
<div class="form3" >
    <div class=" col-lg-12 col-md-12 col-sm-12">
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-12 col-md-12 col-sm-12 formCadastro">
                <p style="text-align: center; color: #37324C;" class="titulo1">informe seus dados</p>
                <form method="post" >
                    <div class="row inputs">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <input id="nome" type="text" class="form-control form-control-lg form-control-sm" placeholder="Nome completo">
                        </div>
                    </div>
                    <div class="row inputs">
                        <div class="col-lg-12 col-md-12 ">
                            <input id="cpf" type="text" class="form-control form-control-lg  mask_cpf valida-cpf" placeholder="CPF">
                        </div>
                    </div>
                    <div class="row inputs ">
                        <div class="col-lg-12 col-md-12 ">
                            <input id="fone" type="text" class="form-control form-control-lg mask_fone" placeholder="Telefone">
                        </div>
                    </div>
                    <div class="row inputs">
                        <div align="center" class="col-lg-12 col-md-12 ">
                            <button  style="margin-top: 15px; " class="btn btn-primary button01 form-control-lg" type="submit">próximo passo</button>
                            <button onclick="window.open('/','_self')" style="margin-top: 15px; padding-right: 4%; padding-left: 4%; margin-left: 10px; margin-right: 10px;" class="btn btn-primary button02" type="button">Voltar</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div style="  margin-top: 20px;  font-size: 23px; text-align: center">
            <p>
                Participar é muito fácil! Em três passos você já pode indicar.
            </p>
        </div>
    </div>
</div>

<style>

    .margem-top{
        padding-top: 17%;
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

        .margem-top{
            padding-top: 32%;
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

        var formCadastro = $('.formCadastro form');

        formCadastro.on('submit', function (ev) {

            ev.preventDefault();
            ev.stopPropagation();

            var nome   = $("#nome").val();
            var cpf    = $("#cpf").val().replace(/\D/g, '');
            var fone   = $("#fone").val().replace(/\D/g, '');

            var dadosCadastro = {
                'nome':  nome,
                'cpf':   cpf,
                'fone':  fone
            };

            console.log(dadosCadastro);

            // window.open('/page-cadastrar-endereco','_self');

            // axios.post('/api/cadastrar', dadosCadastro)
            //     .then(function (result) {
            //         window.open('/page-cadastrar-endereco','_self')
            //         // Swal.fire({
            //         //     title: result.data,
            //         //     type: 'success',
            //         //     confirmButtonText: 'OK'
            //         // });
            //
            //     }).catch(function (ex) {
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