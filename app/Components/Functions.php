<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 11/2/2017
 * Time: 9:53 AM
 */

namespace App\Components;


use App\Models\Category;
use App\Models\Image;
use App\Models\Menu;
use App\Models\Post;
use Carbon\Carbon;

class Functions
{
    public static function getProvinces()
    {
        return cache()->rememberForever('provinces', function () {
            return \DB::table('province')->get();
        });
    }

    public static function getDistricts()
    {
        return cache()->rememberForever('districts', function () {
            return \DB::table('district')->get();
        });
    }

    public static function getWards()
    {
        return cache()->rememberForever('wards', function () {
            return \DB::table('ward')->get();
        });
    }

    public static function calculateChildMenu($menu)
    {
        return Menu::where('parent_id', $menu->id)->count();
    }

    public static function printMenu($menu)
    {
        $cnt = \App\Models\Menu::where('parent_id', $menu->id)->orderBy('order', 'asc')->get();

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

    public static function getHouseOtherImages($houseId)
    {
        $images = Image::where('house_id', $houseId)->get();
        $retVal = '';
        foreach ($images as $image) {
            $retVal .= '<img src="' . $image->path . '" class="kv-preview-data file-preview-image" style="width:auto;height:160px;">,';
        }
        return $retVal;
    }

    public static function printMenuFrontend($menu)
    {
        $cnt = \App\Models\Menu::where('parent_id', $menu->id)->orderBy('order', 'asc')->get();

        if ($cnt->count() > 0) {
            echo '<ul >';


            foreach ($cnt as $item) {
                echo '<li >';
                echo '<a href = "' . self::getUrlMenu($item) . '" >' . $item->title . '</a >';
                self::printMenuFrontend($item);
                echo '</li>';

            }
            echo '</ul >';
        }
    }

    public static function getUrlMenu($menu)
    {
        if (!empty($menu->post_id)) {
            $post = Post::find($menu->post_id);
            if ($post) {
                return url('post/' . str_slug($post->title) . '-' . $post->id);
            }
        }
        if (!empty($menu->category_id)) {
            $category = Category::find($menu->category_id);
            return url('post/category/' . str_slug($category->name) . '-' . $category->id);

        } else if (!empty($menu->route)) {
            return $menu->route;
        }

        return 'javascript:void(0);';
    }

}