<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'message',
        'created_at',
        'updated_ta'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
