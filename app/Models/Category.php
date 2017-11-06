<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    const  ACTIVE = 1;
    const IN_ACTIVE = 0;

    protected $fillable = [
        'name',
        'status',
        'created_at',
        'updated_at'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
