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
        return cache()->rememberForever('provinces', function () {
            return \DB::table('province')->get();
        });
    }

    public static function printMenu($menu)
    {
        $cnt = \App\Models\Menu::where('parent_id', $menu->id)->orderBy('order', 'desc')->get();

        if ($cnt->count() > 0) {
            echo '<ol class="dd-list">';

            foreach ($cnt as $item) {

                echo ' <li class="dd-item" data-id="' . $item->id . '">';
                echo '<div class="dd-handle"> ' . $item->title . '</div>';

                self::printMenu($item);

                echo '</li>';
            }
            echo '</ol>';
        }

    }

}