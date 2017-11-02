<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    //
    protected $fillable = [

    ];

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
