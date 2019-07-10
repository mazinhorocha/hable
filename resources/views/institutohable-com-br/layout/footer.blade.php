

<footer id="sticky-footer" class="py-5 text-white-50">
    <div class="container text-left">
        <picture>
{{--            <source srcset="img/institutohable/logo-footer.webp" type="image/webp">--}}
            <source srcset="img/institutohable/logo-footer.png" type="image/png">
            <img src="img/institutohable/logo-footer.png"  class="img-fluid" >
        </picture>
    </div>
</footer>

<style>

    #sticky-footer {
        flex-shrink: none;
        background-color: #00428B;
        color: white;
        bottom: 0;
        margin-top:auto;
    }

    /*.footer_img{*/
    /*    height: 8%;*/
    /*    width: 20%;*/
    /*}*/


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
        .footer_img{
            height: 8%;
            width: 26%;
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

        .footer_img{
            height: 10%;
            width: 45%;
        }

    }

</style>