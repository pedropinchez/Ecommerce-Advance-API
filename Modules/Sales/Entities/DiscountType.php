<?php

namespace Modules\Sales\Entities;

use Illuminate\Database\Eloquent\Model;

class DiscountType extends Model
{
    protected $fillable = [
        'business_id',
        'name',
        'created_by',
        'deleted_at'
    ];
}
