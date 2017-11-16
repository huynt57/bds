<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //
    protected $fillable = [
        'region_id',
        'region_type',
        'created_at',
        'updated_at',
        'name',
        'image',
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function getImageAttribute()
    {
        $image = $this->attributes['image'];
        return '/files/'.$image;
    }
}
