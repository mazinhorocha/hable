<div style="background-color: #37324C;">
    <div class="row">
        <div align="center"  class="col-sm-12 col-md-12 col-lg-12">
            <button onclick="window.open('https://www.ofertanetcombo.net.br','_blank')" style="margin-top: 30px; width: 80%;" class="btn btn-primary buttonConsulte" type="button">pacotes e planos</button>
        </div>
    </div>


    <div class="row" >
        <div align="center" class="col-sm-12 col-md-12 col-lg-12">
            <button id="como-funciona"  class="btn btn-primary buttonConsulte" style="margin-top: 30px; margin-bottom: 30px; width: 80%;" type="button">consulte condições</button>
        </div>
    </div>
</div>

<div class="row info">
    <div class="col-lg-4 " align="center" >
        <picture>
            <source srcset="img/indique/INDIQUE.webp" type="image/webp">
            <source srcset="img/indique/INDIQUE.png" type="image/png">
            <img  class="d-block img-info" alt="Indique" src="img/indique/INDIQUE.png">
        </picture>

        <h2 class="titulo" >Indique</h2>
        <p>O primeiro passo é você indicar pessoas para assinar nossos serviços. Para isso, basta acessar o
            link e fazer o cadastro do indicado. É muito importante que você insira seu CPF para que possamos
            contabilizar suas indicações. Você indicar quantas pessoas quiser!</p>
    </div>
    <div align="center" class="col-lg-4">

        <picture>
            <source srcset="img/indique/LUPA.webp" type="image/webp">
            <source srcset="img/indique/LUPA.png" type="image/png">
            <img class="d-block img-info" alt="Acompanhe"  src="img/indique/LUPA.png">
        </picture>

        <h2 class="titulo" >Acompanhe</h2>
        <p>Estamos quase lá, agora é só acompanhar suas indicações e ver quais indicados contrataram planos ou serviços.
            Aqui no site você consegue ver a situação atual dos seus cadastrados.
            Lembre-se: você só ganha o bônus se sua indicação efetivar o contrato.</p>
    </div>
    <div class="col-lg-4 " align="center">

        <picture>
            <source srcset="img/indique/MOEDAS.webp" type="image/webp">
            <source srcset="img/indique/MOEDAS.png" type="image/png">
            <img  class="d-block  img-info" alt="Ganhe" src="img/indique/MOEDAS.png">
        </picture>

        <h2 class="titulo">Ganhe</h2>
        <p>Pronto, muito fácil! Agora é só torcer e esperar.
            Não há limite, então quanto mais pessoas você indicar mais dinheiro você vai ganhar.
            Você receberá R$ 50 por cada indicados efetivado, suas bonificações são acumulativas e gratificadas de forma mensal.</p>
    </div>
</div>

<style>

    a{
        color: #37324C;
    }
    a:link {
        text-decoration:none;
    }

    a:hover{
        color: #FF9900;
    }

     .buttonConsulte{
        border-radius: 20px;
        font-weight: 900;
        color: #37324C;
        font-size: 20px;
        background-color: white;
        text-transform: uppercase;
        border-color:#37324C;

    }

    .buttonConsulte:hover{
        background-color: #FF9900;
        color: white;
    }

    .p01{
        text-align: center;
        font-size: 23px;
        padding-top: 36px;
        padding-left: 5%;
        padding-right: 5%;
    }

    .p02{
        text-align: center;
        font-size: 30px;
        text-transform: uppercase;
        padding-top: 36px;
        font-weight: 900;
        color: #37324C;

    }

    .info{
        padding-top: 30px;
        padding-left: 16%;
        padding-right: 16%;
        padding-bottom: 30px;
        text-align: center;
        display: none;
    }


    .img-info{
        width: 70px;
        height: 80px;
        padding-bottom: 20px;
    }

    .titulo{
        text-transform: uppercase;
        font-weight: 900;
        color: #37324C;
    }

    @media all  and (max-width: 536px) and (min-width: 320px) {
        .p01 {
            font-size: 14px;
        }
        .p02{
            font-size: 18px;
        }

        .titulo{
            font-size: 20px;
        }
        .buttonConsulte {
            font-size: 14px;
        }
    }

    @media all and (max-width: 686px) and (min-width: 537px) {
        .p01 {
            font-size: 18px;
        }
        .p02{
            font-size: 25px;
        }
        .titulo{
            font-size: 28px;
        }
        .buttonConsulte {
            font-size: 16px;
        }
    }

    @media all and (max-width: 767px) and (min-width: 687px) {
        .p01 {
            font-size: 22px;
        }
        .p02{
            font-size: 36px;
        }
        .buttonConsulte {
            font-size: 22px;
        }
    }

</style>
