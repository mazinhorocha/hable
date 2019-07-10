<div id="sobre" class="sobre">

    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 pull-left">
            <picture>
                <source srcset="img/institutohable/imagem01.webp" type="image/webp">
                <source srcset="img/institutohable/imagem01.png" type="image/png">
                <img src="img/institutohable/imagem01.png"   class="sobre-imagem img-fluid img-responsive" >
            </picture>
        </div>
        <div align="left" class="col-sm-6 col-md-6 col-lg-6 sobre-container">
            <span class="sobre-titulo">O INSTITUTO HABLE</span>
            <p class="sobre-texto">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet risus nullam eget felis eget nunc lobortis. Quam quisque id diam vel. Aliquam sem fringilla ut morbi tincidunt augue interdum velit. Vulputate eu scelerisque felis imperdiet proin fermentum leo vel. Nulla pharetra diam sit amet nisl suscipit. Magna fringilla urna porttitor rhoncus dolor. Purus viverra accumsan in nisl nisi scelerisque. Fermentum iaculis eu non diam phasellus vestibulum lorem. Erat velit scelerisque in dictum non consectetur a erat. Massa tempor nec feugiat nisl pretium fusce id velit. Scelerisque mauris pellentesque pulvinar pellentesque habitant. Libero enim sed faucibus turpis in eu. Adipiscing tristique risus nec feugiat in fermentum. Dictumst vestibulum rhoncus est pellentesque elit. Amet commodo nulla facilisi nullam vehicula ipsum a arcu. Fusce ut placerat orci nulla pellentesque. Ultrices mi tempus imperdiet nulla malesuada. Suscipit adipiscing bibendum est ultricies. Commodo viverra maecenas accumsan lacus vel.
            </p>
        </div>
    </div>

</div>

<style>

    .sobre{
        padding-top: 10px;
        background-color: white;
    }
    .sobre-container{
        padding-top: 3%;
        padding-right: 15%;
    }

    .sobre-imagem{
        background-position: left;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .sobre-titulo{
        text-transform: uppercase;
        color: #3497D3;
        letter-spacing: 3px;
        font-size: 20px;
        font-weight: bold;
    }

    .sobre-texto{
        padding-top: 5%;
        font-size: 16px;
        line-height: 26px;
        color: #989898;
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