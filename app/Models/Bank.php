<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    //
    public $fillable = [
        'bank',
        'rate',
        'created_at',
        'updated_at'
    ];

    public $dates = [
        'created_at',
        'updated_at'
    ];
}
