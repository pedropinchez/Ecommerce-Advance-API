<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
        'business_id',
        'actual_name',
        'short_name',
        'allow_decimal',
        'created_by',
    ];
}
