{{--<div style=" padding-top: 1%;"></div>--}}
<div class="form3" >
    <div class=" col-lg-12 col-md-12 col-sm-12">
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-12 col-md-12 col-sm-12 formCadastroEndereco">
                <p style="text-align: center; color: #37324C" class="titulo1">ENDEREÇOS DE TRABALHO</p>
                <form method="post" >
                    <input type="hidden" id="indicador_id" name="indicador_id" value="">
                    <div class="row inputs">
                        <div class="col-lg-2 col-md-2 col-sm-2 form-group">
                            <label>Condominio 01</label>
                            <input type="text" name="cep" class="form-control form-control-lg form-control-sm mask_cep" placeholder="CEP">
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 form-group">
                            <label>&nbsp;</label>
                            <input type="text" name="endereco"  class="form-control form-control-lg form-control-sm" placeholder="Endereço">
                        </div>
                    </div>
                    <div class="row inputs">
                        <div class="col-lg-6 col-md-6 form-group">
                            <input type="text" name="bairro" class="form-control form-control-lg" placeholder="Bairro">
                        </div>
                        <div class="col-lg-3 col-md-3 form-group">
                            <input type="text" name="cidade"  class="form-control form-control-lg" placeholder="Cidade">
                        </div>
                        <div class="col-lg-3 col-md-3 form-group">
                            <input type="text" name="estado" class="form-control form-control-lg" placeholder="Estado">
                        </div>
                    </div>
                    <hr >
                    <div class="row inputs">
                        <div class="col-lg-2 col-md-2 col-sm-2 form-group">
                            <label>Condominio 02</label>
                            <input type="text" name="cep" class="form-control form-control-lg form-control-sm mask_cep" placeholder="CEP">

                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 form-group">
                            <label>&nbsp;</label>
                            <input type="text" name="endereco"  class="form-control form-control-lg form-control-sm" placeholder="Endereço">
                        </div>
                    </div>
                    <div class="row inputs ">
                        <div class="col-lg-6 col-md-6 form-group">
                            <input type="text" name="bairro" class="form-control form-control-lg" placeholder="Bairro">
                        </div>
                        <div class="col-lg-3 col-md-3 form-group">
                            <input type="text" name="cidade"  class="form-control form-control-lg" placeholder="Cidade">
                        </div>
                        <div class="col-lg-3 col-md-3 form-group">
                            <input type="text" name="estado" class="form-control form-control-lg" placeholder="Estado">
                        </div>
                    </div>
                    <hr>
                    <div class="row inputs ">

                        <div class="col-lg-2 col-md-2 col-sm-2 form-group">
                            <label>Condominio 03</label>
                            <input type="text" name="cep" class="form-control form-control-lg form-control-sm" placeholder="CEP">
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 form-group">
                            <label>&nbsp;</label>
                            <input type="text" name="endereco"  class="form-control form-control-lg form-control-sm" placeholder="Endereço">
                        </div>
                    </div>
                    <div class="row inputs">
                        <div class="col-lg-6 col-md-6 form-group">
                            <input type="text" name="bairro" class="form-control form-control-lg" placeholder="Bairro">
                        </div>
                        <div class="col-lg-3 col-md-3 form-group">
                            <input type="text" name="cidade"  class="form-control form-control-lg" placeholder="Cidade">
                        </div>
                        <div class="col-lg-3 col-md-3 form-group">
                            <input type="text" name="estado" class="form-control form-control-lg" placeholder="Estado">
                        </div>
                    </div>
                    <hr>

                    <div class="row inputs">
                        <div align="center" class="col-lg-12 col-md-12 form-group">
                            <input id="consultor" type="text" name="consultor" class="form-control form-control-lg" placeholder="Consultor">
                        </div>
                    </div>
                    <div class="row inputs">
                        <div align="center" class="col-lg-12 col-md-12 ">
                            <button  style="margin-top: 15px; " class="btn btn-primary button01 form-control-lg" type="submit">próximo passo</button>
                            <button onclick="window.open('/page-cadastrar','_self')" style="margin-top: 15px; padding-right: 4%; padding-left: 4%; margin-left: 10px; margin-right: 10px;" class="btn btn-primary button02" type="button">Voltar</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div style=" margin-top: 20px;  font-size: 23px; text-align: center">
            <p>
                Em dois passos você já pode indicar.
            </p>
        </div>
    </div>
</div>

<style>
    hr{
        border-bottom: 2px solid white!important;
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

        var formCadastroEndereco = $('.formCadastroEndereco form');

        formCadastroEndereco.on('submit', function (ev) {

            ev.preventDefault();
            ev.stopPropagation();

            var ceps      = [];
            var enderecos = [];
            var bairros   = [] ;
            var cidades   = [];
            var estados   = [];

            var consultor = $('#consultor').val();


            $.each($('input[name="cep"]'), function(){
                if($(this).val() !== "") ceps.push($(this).val());
            });

            $.each($('input[name="endereco"]'), function(){
                if($(this).val() !== "") enderecos.push($(this).val());
            });

            $.each($('input[name="bairro"]'), function(){
                if($(this).val() !== "") bairros.push($(this).val());
            });

            $.each($('input[name="cidade"]'), function(){
                if($(this).val() !== "") cidades.push($(this).val());
            });

            $.each($('input[name="estado"]'), function(){
                if($(this).val() !== "") estados.push($(this).val());
            });

            var dadosCadastroEndereco = {
                'ceps':      ceps,
                'enderecos': enderecos,
                'bairros':   bairros,
                'cidades':   cidades,
                'estados':   estados,
                'consultor': consultor
            };

            console.log(dadosCadastroEndereco);
            window.open('/page-cadastrar-dados-bancarios','_self')
            // axios.post('/api/cadastrar', dadosCadastroEndereco)
            //     .then(function (result) {
            //
            //
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