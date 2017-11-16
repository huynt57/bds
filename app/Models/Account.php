<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    //
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'type', 'status', 'created_at', 'updated_at', 'phone', 'website', 'image'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
