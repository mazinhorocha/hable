<div class="botoes">
    <div class="row link">
        <div align="center"  class="col-sm-4 col-md-4 col-lg-4">
            <button onclick="window.open('/page-indicar','_self')"style="margin-top: 15px; width: 80%" class="btn btn-primary button" type="button">Indique agora</button>
        </div>
        <div align="center"  class="col-sm-4 col-md-4 col-lg-4">
            <button onclick="window.open('/page-acompanhar','_self')" style="margin-top: 15px; width: 80%" class="btn btn-primary button" type="button">acompanhe suas indicações</button>
        </div>
        <div align="center"  class="col-sm-4 col-md-4 col-lg-4">
            <button onclick="window.open('/page-cadastrar','_self')" style="margin-top: 15px; width: 80%" class="btn btn-primary button" type="button">cadastre-se aqui</button>
        </div>
    </div>

</div>

<style>
    .link{
        margin-bottom: 30px;

    }
    .botoes{
        background-color: #FF9900;
        padding-bottom: 5px;
        padding-top: 20px;

    }

    .button {
        border-radius: 20px;
        font-weight: 900;
        color:  white;
        font-size: 20px;
        text-transform: uppercase;
        border-color: #FF9900;
        background-color:#37324C;

    }

    .button:hover{
        color: #37324C;
        background-color:  white;
    }


    @media all  and (max-width: 536px) and (min-width: 320px) {
        .button {
            font-size: 14px;
        }
    }

    @media all and (max-width: 686px) and (min-width: 537px) {
        .button {
            font-size: 16px;
        }

    }

    @media all and (max-width: 3000px) and (min-width: 687px) {
        .button {
            font-size: 22px;
        }

    }

</style>