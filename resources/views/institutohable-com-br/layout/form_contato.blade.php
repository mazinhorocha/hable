<div class="form-contato">
    <form method="post">
        <div  class="row justify-content-center ">
            <div  align="left" class="col-sm-2 col-md-2 col-lg-2">
                <p class="form-contato-texto">
                    Quero receber atualizações sobre os cursos por email.
                </p>
            </div>
            <div align="center" class="col-sm-2 col-md-2 col-lg-2">
                <div class="form-group">
                    <input type="text" class="form-control input" id="nome" value="" placeholder="Nome">
                </div>
            </div>
            <div align="center" class="col-sm-2 col-md-2 col-lg-2">
                <div class="form-group">
                    <input type="email" class="form-control input" id="email" required value="" placeholder="E-mail">
                </div>
            </div>
            <div align="center" class="col-sm-2 col-md-2 col-lg-2">
                <button type="submit" class="btn form-contato-btn">NEWSLETTER</button>
            </div>
        </div>
    </form>
</div>

<style>

    .form-contato{
        padding-top: 20px;
        background-color: #00428B;
    }

    .form-contato-texto{
        font-size: 18px;
        font-weight: bold;
        color: white;

    }

    .input{
        border-radius: 77px !important;
        width: 100%;
        height: 45px;
    }

    .form-contato-btn{
        text-transform: uppercase;
        width: 100%;
        font-weight: 500;
        color: #3497D3;
        border-radius: 77px;
        border-color: #3497D3;
        background-color: transparent;
        border-width: 4px;

    }
    .form-contato-btn:hover{
        color: white;
        background-color: #3497D3;
        box-shadow: 0px 0px 0px 13px #3497d33b;

    }
    /*
      ##Device = Desktops
      ##Screen = 1281px to higher resolution desktops
    */

    @media (min-width: 1281px) {

    

    }

    /* 
      ##Device = Laptops, Desktops
      ##Screen = B/w 1025px to 1280px
    */

    @media (min-width: 1025px) and (max-width: 1280px) {

    }

    /* 
      ##Device = Tablets, Ipads (portrait)
      ##Screen = B/w 768px to 1024px
    */

    @media (min-width: 768px) and (max-width: 1024px) {

    }

    /* 
      ##Device = Tablets, Ipads (landscape)
      ##Screen = B/w 768px to 1024px
    */

    @media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {

        .row{
            margin: 0;
        }

    }

    /* 
      ##Device = Low Resolution Tablets, Mobiles (Landscape)
      ##Screen = B/w 481px to 767px
    */

    @media (min-width: 481px) and (max-width: 767px) {

    }

    /* 
      ##Device = Most of the Smartphones Mobiles (Portrait)
      ##Screen = B/w 320px to 479px
    */

    @media (min-width: 320px) and (max-width: 480px) {

    }

</style>