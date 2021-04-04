<?php

namespace Modules\Analytics\Entities;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name',
        'bn_name',
        'slug',
        'country_id',
        'priority',
        'status',
        'lat',
        'lon',
        'url'
    ];
}
