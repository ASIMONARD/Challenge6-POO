<?php

class Speedometer
{
    public static function convertKmToMiles(float $chiffre): float
    {
        return round(($chiffre / 1.60934),2);
    }

    public static function convertMilesTokm(float $chiffre): float
    {
        return round(($chiffre * 1.60934),2);
    }
}


?>