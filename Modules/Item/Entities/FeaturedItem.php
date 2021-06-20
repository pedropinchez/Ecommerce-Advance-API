<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;

class FeaturedItem extends Model
{
    protected $fillable = [
        'item_id',
        'business_id'
    ];
}
