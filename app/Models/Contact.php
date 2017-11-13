<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    const PENDING = 0;
    const PROCESSED = 1;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'status',
        'agent_id',
        'message',
        'created_at',
        'updated_at',
        'files',
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function getStatusTextAttribute()
    {
        $status = $this->attributes['status'];

        if ($status) {
            return 'Đã xử lý';
        }

        return 'Chưa xử lý';
    }
}
