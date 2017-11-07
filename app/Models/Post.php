<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];

    }

    protected $fillable = [

        'title',
        'short_desc',
        'desc',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'category_id',
        'slug',
        'status',
        'image'

    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function getImageAttribute()
    {

        return '/files/' . $this->attributes['image'];

    }

    public function scopePublish($query)
    {
        $query->where('status', true);
    }
}
