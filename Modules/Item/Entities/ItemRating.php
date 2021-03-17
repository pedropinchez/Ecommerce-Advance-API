<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;

class ItemRating extends Model
{
    protected $fillable = [
        'item_id',
        'user_id',
        'rating_value',
        'comment',
        'status'
    ];
}
