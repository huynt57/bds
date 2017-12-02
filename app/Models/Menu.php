<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $fillable = [
        'parent_id',
	    'category_id',
        'link',
        'title',
        'is_active',
        'post_id',
        'order',
        'route',
        'created_at',
        'updated_at'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];


}
