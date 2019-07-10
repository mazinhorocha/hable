<div class="form-contado" style="background-color: #fff;padding-bottom: 37px;padding-top: 30px;">
    <div class="container">
        <form method="post" id="frmLigarPraMin">
            <div class="row">
                <div class="col-md-12">

                    <div class="titulo1"
                         style="font-size: 19px;margin-top: 10px;line-height: 25px;margin-bottom: 10px;">
                        PREENCHA SEUS DADOS PARA ENTRARMOS EM CONTATO
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>

                            <input type="text"
                                   required
                                   name="nome"
                                   class="form-control"
                                   placeholder="Seu nome">
                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-phone"></i></div>
                            </div>
                            <input type="number"
                                   required
                                   name="numero"
                                   class="form-control" maxlength="10"
                                   placeholder="Número de Telefone">
                        </div>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-mail-bulk"></i></div>
                            </div>
                            <input type="email"
                                   required
                                   name="email"
                                   class="form-control"
                                   placeholder="Endereço de email">
                        </div>
                    </div>

                </div>


            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <button type="submit"
                                style="background-color: #00a4ec;border: #00a4ec;font-size: 16px;font-weight: bolder;"
                                class="btn btn-success btn-block btn-lg">ENTRE EM CONTATO
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    AppReady(function () {


        var form = $('.form-contado form');

        form.on('submit', function (ev) {
            ev.preventDefault();
            ev.stopPropagation();
            var dados = $(this).serialize();

            axios.post('/api/salvar-contato', dados)
                .then(function (result) {

                    Swal.fire({
                        title: 'Ligaremos para você em breve!',
                        //  text: 'Ligaremos para você do número (62) 3414-9100',
                        type: 'success',
                        confirmButtonText: 'OK'
                    });

                    GOOGLE_TAG_FORMULARIO_SITE_ENVIAR();


                }).catch(function () {

                Swal.fire({
                    title: 'Ocorre um erro inesperado!',
                    type: 'error',
                    confirmButtonText: 'Fechar'
                });

            });

        })


    });
</script>