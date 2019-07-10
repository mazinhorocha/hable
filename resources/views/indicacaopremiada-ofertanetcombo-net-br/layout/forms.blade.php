<div class="row p02">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <p> já se cadastrou?</p>
    </div>
</div>

<div class="form1" >
    <div align="center" class="row">
        <div align="center" class="col-12">
            <div align="center" class="seta-baixo"></div>
        </div>
    </div>
    <div class=" col-lg-12">
        <div class="row">
            <div class="col-md-2 col-lg-2"></div>
            <div class="col-md-4 col-lg-4 formIndique">
                <p class="titulo1">indique um cliente</p>
                <form method="post" >
                    <div class="row inputs">
                        <div class="col-lg-12">
                            <input type="text" required class="form-control" placeholder="Nome do Cliente">
                        </div>
                    </div>
                    <div class="row inputs">
                        <div class="col-lg-12">
                            <input type="text" class="form-control mask_cpf valida-cpf" placeholder="CPF (opcional)">
                        </div>
                    </div>
                    <div class="row inputs">
                        <div class="col-lg-12">
                            <input type="text" required class="form-control mask_fone" placeholder="Telefone 01">
                        </div>
                    </div>
                    <div class="row inputs">
                        <div class="col-lg-12">
                            <input type="text" class="form-control mask_fone" placeholder="Telefone 02 (opcional)">
                        </div>
                    </div>
                    <div class="row inputs">
                        <div class="col-lg-12">
                            <textarea type="text" class="form-control" placeholder="Observações (opcional)"></textarea>
                        </div>
                    </div>
                    <p class="titulo1">digite aqui o seu cpf</p>

                    <div class="row inputs">
                        <div align="center" class="col-lg-12">
                            <input  required style="background-color: #FF9900; color: white;" type="text" class="form-control mask_cpf valida-cpf" placeholder="CPF (Saberemos que você indicou essa venda)">
                            <button  style="margin-top: 15px;" class="btn btn-primary button01" type="submit">Indicar</button>
                        </div>
                    </div>
                </form>

            </div>
            <div align="left" class="col-md-4 col-lg-4 formIndicacoes">
                <div class="form2">
                    <p class="titulo2">acompanhe suas indicações</p>
                    <form method="post" class="form">

                        <div class="row inputs">
                            <div  class="col-lg-12">
                                <input  type="text" class="form-control mask_cpf" placeholder="Digite aqui seu CPF">
                            </div>
                        </div>

                        <div class="row inputs">
                            <div  class="col-lg-12">
                                <input  type="password" class="form-control" placeholder="Digite aqui sua senha">
                                <button style="margin-top: 15px;" class="btn btn-primary button02" type="submit">acompanhar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-md-2 col-lg-2"></div>
        </div>
    </div>
</div>


<div class="form3" >
    <div class=" col-lg-12 ">
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4 formCadastro">
                <p style="text-align: center; color: #37324C" class="titulo1">ainda não se cadastrou?</p>
                <form method="post" >
                    <div class="row inputs">
                        <div class="col-lg-12">
                            <input type="text" required class="form-control" placeholder="Nome">
                        </div>
                    </div>
                    <div class="row inputs">
                        <div class="col-lg-12">
                            <input type="text" required class="form-control mask_cpf valida-cpf" placeholder="CPF">
                        </div>
                    </div>
                    <div class="row inputs">
                        <div class="col-lg-12">
                            <input type="text" required class="form-control mask_fone" placeholder="Telefone">
                        </div>
                    </div>
                    <div class="row inputs">
                        <div align="center" class="col-lg-12">
                            <input type="password" required class="form-control" placeholder="Senha">
                            <button  style="margin-top: 15px;" class="btn btn-primary button02" type="submit">Cadastrar</button>
                        </div>
                    </div>

                </form>

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

            var nome       = $(this).find('input').eq(0).val();
            var cpf        = $(this).find('input').eq(1).val().replace(/\D/g, '');
            var fone1      = $(this).find('input').eq(2).val().replace(/\D/g, '');
            var fone2      = $(this).find('input').eq(3).val().replace(/\D/g, '');
            var obs        = $(this).find('textarea').eq(0).val();
            var indicador  = $(this).find('input').eq(4).val().replace(/\D/g, '');

            var dadosIndique = {
                'nome': nome,
                'cpf':   cpf,
                'fone1': fone1,
                'fone2': fone2,
                'obs': obs,
                'cpf_indicador': indicador
            };

            axios.post('/api/indicar', dadosIndique)
                .then(function (result) {

                    Swal.fire({
                        title: "Cliente indicado com sucesso!",
                        type: 'success',
                        confirmButtonText: 'OK'
                    });

                }).catch(function (ex) {
                    Swal.fire({
                        title: ex.response.data,
                        type: 'error',
                        confirmButtonText: 'Fechar'
                    });

            });

        });

        var formIndicacoes = $('.formIndicacoes form');

        formIndicacoes.on('submit', function (ev) {

            ev.preventDefault();
            ev.stopPropagation();

            var cpf       = $(this).find('input').eq(0).val().replace(/\D/g, '');
            var senha     = $(this).find('input').eq(1).val();

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


        var formCadastro = $('.formCadastro form');

        formCadastro.on('submit', function (ev) {

            ev.preventDefault();
            ev.stopPropagation();

            var nome   = $(this).find('input').eq(0).val();
            var cpf    = $(this).find('input').eq(1).val().replace(/\D/g, '');
            var fone   = $(this).find('input').eq(2).val().replace(/\D/g, '');
            var senha  = $(this).find('input').eq(3).val();

            var dadosCadastro = {
                'nome':  nome,
                'cpf':   cpf,
                'fone':  fone,
                'senha': senha
            };

            axios.post('/api/cadastrar', dadosCadastro)
                .then(function (result) {

                    Swal.fire({
                        title: result.data,
                        type: 'success',
                        confirmButtonText: 'OK'
                    });

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