<?php

namespace App\E;

use Illuminate\Support\Str;

class Util
{


    public static function parte_int($float)
    {

        $aux = (string)$float;
        $aux2 = explode('.', $aux);

        return $aux2[0];
    }


    public static function parte_float($float, $casas = 2)
    {

        $aux = (string)$float;
        $aux2 = explode('.', $aux);

        $aux3 = array_fill(0, $casas, '0');
        if (count($aux2) == 2) {
            $aux3 = substr($aux2[1], 0, $casas);
        }

        return $aux3;
    }


    public static function whatsAppLinkDesk($phone, $texto = '')
    {

        $phone = preg_replace('/\D/', '', $phone);

        $texto = urlencode($texto);

//        return "https://api.whatsapp.com/send?phone={$phone}&text={$texto}";
        return "https://web.whatsapp.com/send?phone={$phone}&text={$texto}";
    }

    public static function whatsAppLinkMobl($phone, $texto = '')
    {

        $phone = preg_replace('/\D/', '', $phone);

        $texto = urlencode($texto);

        return "https://api.whatsapp.com/send?phone={$phone}&text={$texto}";
//        return "https://web.whatsapp.com/";
    }
}