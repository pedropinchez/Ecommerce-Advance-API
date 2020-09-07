<?php

namespace Modules\Business\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusinessLocation extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'business_id',
        'name',
        'landmark',
        'country',
        'state',
        'zip_code',
        'city',
        'mobile',
        'alternate_number',
        'email',
    ];
}
