<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class House extends Model
{
    //
    use SoftDeletes;

    const RENT = 1;
    const SALE = 0;

    protected $fillable = [
        'name',
        'category_id',
        'user_id',
        'city_id',
        'district_id',
        'lat',
        'lng',
        'type',
        'zip',
        'price',
        'desc',
        'size',
        'features',
        'main_images',
        'status',
        'slug',
        'address',
        'is_feature',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }

    /*
     * \App\Model\User::whereNotIn('id', $ids)
               ->where('status', 1)
               ->whereHas('user_location', function($q) use ($radius, $coordinates) {
                      $q->isWithinMaxDistance($coordinates, $radius);
             })->select('id', 'firstname')
               ->get();
     */
    public function scopeIsWithinMaxDistance($query, $coordinates, $radius = 5)
    {
        $haversine = "(6371 * acos(cos(radians(" . $coordinates['latitude'] . ")) 
                    * cos(radians(`latitude`)) 
                    * cos(radians(`longitude`) 
                    - radians(" . $coordinates['longitude'] . ")) 
                    + sin(radians(" . $coordinates['latitude'] . ")) 
                    * sin(radians(`latitude`))))";

        return $query->select('*')
            ->selectRaw("{$haversine} AS distance")
            ->whereRaw("{$haversine} < ?", [$radius]);
    }
}
