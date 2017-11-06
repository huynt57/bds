<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 11/2/2017
 * Time: 9:53 AM
 */

namespace App\Components;


class Functions
{
    public static function getProvinces()
    {
        return cache()->rememberForever('provinces', function() {
            return \DB::table('province')->get();
        });
    }

}