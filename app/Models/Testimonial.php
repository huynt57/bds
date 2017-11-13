<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    //
    protected $fillable = [
        'content',
        'user',
        'created_at',
        'updated_at',
        'address',
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
