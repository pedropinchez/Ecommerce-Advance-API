<?php

namespace Modules\Analytics\Entities;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = [
        'name',
        'bn_name',
        'slug',
        'city_id',
        'priority',
        'status',
        'lat',
        'lon',
        'url'
    ];
}
