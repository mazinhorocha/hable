<h4 class="cadastro-tittule"> Cadastro de Usuários</h4>
<form style="margin-top: 5%" >
    <div class="row">
        <div class="form-group col-sm-12 col-md-12 col-lg-12">
            <label for="inputState">Consultar Usuário</label>
            <select id="inputState" class="form-control">
                <option selected>Escolha uma opção...</option>
            </select>
        </div>
    </div>


</form>

<form style="margin-top: 4%" >
    <input type="hidden" id="usuario_id" value="" >
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" id="nome" class="form-control" placeholder="" required autofocus>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
                <label>CPF</label>
                <input type="text" id="nome" class="form-control mask_cpf valida-cpf" placeholder="" required autofocus>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
                <label>Telefone 01</label>
                <input type="text" id="fone1" class="form-control mask_fone" placeholder="" required autofocus>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
                <label>Telefone 02</label>
                <input type="text" id="fone2" class="form-control mask_fone" placeholder="" >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-4 col-md-4 col-lg-4">
            <label for="inputState">Tipo de Usuário</label>
            <select id="inputState" class="form-control">
                <option selected>Escolha uma opção...</option>
                <option value="0">Administrador</option>
                <option value="1">Prospector</option>
                <option value="2">Indicador</option>
            </select>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="form-group">
                <label>Senha</label>
                <input type="password" id="senha1" class="form-control mask-fone" placeholder="" required autofocus>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="form-group">
                <label>Confirme sua senha</label>
                <input  onblur="checkSenha(this)" type="password" id="senha2" class="form-control mask-fone" required placeholder="" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-sm-2 col-md-2 col-lg-2">
            <label >&nbsp;</label>
            <button id="incluir" class="btn  btn-success btn-block" type="submit">Incluir</button>

        </div>
        <div class="col-sm-2 col-md-2 col-lg-2">
            <label >&nbsp;</label>
            <button id="limpar" class="btn  btn-secondary btn-block" type="submit">Limpar</button>
        </div>
        <div class="col-sm-2 col-md-2 col-lg-2">
            <label >&nbsp;</label>
            <button id="exluir" class="btn  btn-danger btn-block" type="submit">Excluir</button>
        </div>
    </div>

</form>

<style>
    .cadastro-tittule{
        text-align: center;
        margin-top: 20px;
        color: white;
        background-color: #37324bba;
        border: 3px solid #37324b;
        border-radius: 50px;
        padding-top: 5px;
        padding-bottom: 5px;
    }
</style>
<script>
    function checkSenha(senha2){

        var senha1 = $("#senha1").val();

        if(senha1 === senha2.value){
            $("#incluir").prop('disabled', false);
        }else{
            alert("As senhas informadas não coincidem! Por favor digite novamente.");
            $("#incluir").prop('disabled', true);
        }

    }
</script>









