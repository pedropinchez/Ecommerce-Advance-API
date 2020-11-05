<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;

class ItemImage extends Model
{
    protected $fillable = [
        'item_id',
        'business_id',
        'image',
        'image_size',
        'image_title',
        'image_description'
    ];
}
