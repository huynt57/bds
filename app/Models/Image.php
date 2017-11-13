<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $fillable = ['path', 'house_id'];

    public function getPathAttribute()
    {
        $path = $this->attributes['path'];

        return '/files/'.$path;
    }
}
