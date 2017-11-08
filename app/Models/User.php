<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const AGENT = 1;
    const ADMIN = 2;

    const ACTIVE = 1;
    const IN_ACTIVE = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type', 'status', 'created_at', 'updated_at', 'phone', 'website', 'image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function getTypeTextAttribute()
    {
        $type = $this->attributes['type'];

        if ($type == User::AGENT) {
            return '<span class="label label-sm label-danger"> Môi giới viên </span>';
        } else if ($type == User::ADMIN) {
            return '<span class="label label-sm label-info"> Quản trị viên </span>';
        }
        return '<span class="label label-sm label-primary"> Chưa rõ </span>';
    }
}
