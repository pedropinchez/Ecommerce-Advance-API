<?php

namespace Modules\Customer\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Address extends Model
{
    protected $fillable = [
        'type',
        'user_id',
        'transaction_id',
        'country_id',
        'country',
        'city_id',
        'city',
        'area_id',
        'area',
        'street1',
        'street2',
        'is_default'
    ];
}
