<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;

class ItemAttribute extends Model
{
    protected $fillable = [
        'item_id',
        'attribute_id',
        'business_id',
        'attribute_values'
    ];
}
