<div class="margem-top p02"></div>
<div class="row" style=";" >
    <div class=" col-lg-12">
        <div class="row">
            <div align="center" class="col-md-12 col-lg-12 formIndicacoes">
                <div class="form2">
                    <p style="text-align: center !important;" class="titulo2">acompanhar indicações</p>
                    <form method="post" class="form">

                        <div class="row inputs">
                            <div  class="col-lg-12">
                                <input id="cpf" type="text" class="form-control form-control-lg mask_cpf" placeholder="Digite seu CPF">
                            </div>
                        </div>

                        <div class="row inputs">
                            <div  class="col-lg-12">
                                <input  id="senha" type="password" class="form-control form-control-lg" placeholder="Digite aqui sua senha">
                                <button style="margin-top: 15px;" class="btn form-control-lg btn-primary buttonAcomp" type="submit">acompanhe suas indicações</button>
                                <button onclick="window.open('/','_self')" style="margin-top: 15px; padding-right: 4%; padding-left: 4%; margin-left: 10px; margin-right: 10px;" class="btn btn-primary button01" type="button">Voltar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .p02{
        text-align: center;
        font-size: 30px;
        text-transform: uppercase;
        padding-top: 36px;
        font-weight: 900;
        color: #37324C;

    }
    .margem-top{
        padding-top: 15%;
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

    .button02 {
        border-radius: 20px;
        font-weight: 900;
        color: #37324C;
        text-transform: uppercase;
        border-color: ;
        background-color: #37324C;

    }

    .buttonAcomp {
        border-radius: 20px;
        font-weight: 900;
        font-size: 18px;
        color:#FF9900 ;
        text-transform: uppercase;
        border-color: #37324C;
        background-color:#37324C;

    }


    .buttonAcomp:hover{
        color: #37324C;
        border-color: #37324C;
        background-color:#FF9900;

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
        margin-right: 10%;
        margin-left: 10%;
    }
    .form2{
        background-color: #FF9900;
        padding: 10px;
        margin-bottom: 20px;

    }
    .form3{
        background-color: #FF9900;
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
        .buttonAcomp{
            font-weight: 900;
            font-size: 16px;
            margin-bottom: 10px;
        }
        .titulo2{
            font-size: 15px;
        }
        .seta-baixo{
            margin-left: 39%;
        }
        .margem-top{
            padding-top: 45%;
        }

    }

    @media all and (max-width: 686px) and (min-width: 537px) {
        .p02{
            font-size: 25px;
        }
        .titulo2{
            font-size: 25px;
        }

     }

    @media all and (max-width: 3000px) and (min-width: 687px) {
        .p02{
            font-size: 36px;
        }
        .buttonAcomp{
            font-size: 16px;
        }
        .titulo2{
            font-size: 25px;
        }
    }
</style>

<script>

    AppReady(function () {

        var formIndicacoes = $('.formIndicacoes form');

        formIndicacoes.on('submit', function (ev) {

            ev.preventDefault();
            ev.stopPropagation();

            var cpf       = $("#cpf").val().replace(/\D/g, '');
            var senha     = $("#senha").val();

            var dadosIndicacoes = {
                'cpf':   cpf,
                'senha': senha
            };

            axios.post('/api/indicacoes', dadosIndicacoes)
                .then(function (result) {
                    var datatable = $('#tableIndicacoes').DataTable();

                    datatable.clear();
                    datatable.rows.add(result.data);
                    datatable.draw();

                    $('#modelIndicacoes').modal('show');

                }).catch(function (ex) {
                    Swal.fire({
                        title: ex.response.data,
                        type: 'error',
                        confirmButtonText: 'Fechar'
                    });

            });

        });

    });
</script>