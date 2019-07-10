@extends('indicacaopremiada-ofertanetcombo-net-br.layout.layout')
@section('content')

    <!--Mobile-->
    <div class="container-fluid d-md-none container-mobile">
        @if($page[0] == 'index')
            @include('indicacaopremiada-ofertanetcombo-net-br.layout.header_mobile')
            @include('indicacaopremiada-ofertanetcombo-net-br.layout.buttons')
            @include('indicacaopremiada-ofertanetcombo-net-br.layout.infografico')
        @else
            @include('indicacaopremiada-ofertanetcombo-net-br.layout.'.$page[0])
        @endif
    </div>

    <!--Modo desktop-->
    <div class="container-desktop d-none d-md-block">

        @if($page[0] == 'index')
            @include('indicacaopremiada-ofertanetcombo-net-br.layout.header_desk')
            @include('indicacaopremiada-ofertanetcombo-net-br.layout.buttons')
            @include('indicacaopremiada-ofertanetcombo-net-br.layout.infografico')
        @else
            @include('indicacaopremiada-ofertanetcombo-net-br.layout.'.$page[0])
        @endif
    </div>
    <script>

        function checkPassword(senha2){

            var senha1 = $("#senha1").val();
            if(senha1 === senha2.value){
                $("#finalizar").prop('disabled', false);
            }else{
                alert("As senhas informadas não coincidem! Por favor digite novamente.");
                $("#finalizar").prop('disabled', true);
            }

        }
    </script>
    <div id="modelIndicacoes" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="classInfo" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div style="text-align: center !important;" class="modal-header">
                    <h4 class="modal-title title" >
                        Suas Indicações
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
                        <table id="tableIndicacoes" class="table table-striped">
                            <thead style="background-color: #37324C; color: white">
                            <tr>
                                <th></th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Telefone 01</th>
                                <th>Telefone 02</th>
                                <th>Observação</th>
                                <th>Data</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary buttonFechar" data-dismiss="modal">
                        Fechar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="modalSenha" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="classInfo" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div style="text-align: center !important;" class="modal-header">
                    <h4 class="modal-title title" >
                        Registrar Acesso
                    </h4>
                </div>
                <div class="modal-body">
                    <div class=" col-lg-12">
                        <div class="row">
                            <div align="center" class="col-md-12 col-lg-12">
                                <div class="form2">
                                    <p style="text-align: center !important;" class="titulo2"></p>
                                    <form method="post" class="form">

                                        <div class="row inputs">
                                            <div  class="col-lg-12">
                                                <input id="senha1" type="password"  class="form-control form-control-lg" placeholder="Digite uma senha">
                                            </div>
                                        </div>

                                        <div class="row inputs">
                                            <div  class="col-lg-12">
                                                <input id="senha2" onblur="checkPassword(this)" type="password" class="form-control form-control-lg" placeholder="Confirme sua senha">
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary buttonFechar btn-modal" data-dismiss="modal"> Fechar </button>
                    <button onclick="$('#formCadastroDadosBancarios').submit()" id="finalizar" type="submit" class="btn btn-primary buttonFechar" data-dismiss="modal"> Finalizar </button>
                </div>
            </div>
        </div>
    </div>
@stop

<style>

    .container-mobile{
        padding: 0 !important;
        overflow-x: hidden;
    }
     .modal-dialog{
        border-radius: 0px !important;
    }
    .title{
        font-size: 30px;
        text-transform: uppercase;
        font-weight: 900;
        color: #37324C;

    }
     .modal-footer>:not(:last-child) {
        margin-right: 8.25rem;
    }

    .buttonFechar {
        border-radius: 20px !important;
        font-weight: 900 !important;
        color: white;
        text-transform: uppercase !important;
        border-color: white !important;
        background-color:#FF9900 !important;

    }

    .buttonFechar:hover{
        border-radius: 20px !important;
        font-weight: 900 !important;
        color: #FF9900 !important;
        text-transform: uppercase !important;
        border-color: #37324C !important;
        background-color: #37324C !important;

    }
    .modal-body {
        overflow-x: auto;
    }

    @media all and (max-width: 686px) and (min-width: 537px) {
        .btn-modal{
            margin-right: 30%;
        }
    }
</style>
