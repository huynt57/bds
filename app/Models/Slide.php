<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    //
    protected $fillable = [
        'name', 'path', 'order', 'created_at', 'updated_at'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];

    public function getPathAttribute()
    {
        $path = $this->attributes['path'];

        return '/files/'.$path;
    }
}
