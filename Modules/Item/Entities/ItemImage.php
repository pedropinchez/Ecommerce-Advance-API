<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;

class ItemImage extends Model
{
    protected $fillable = [
        'item_id',
        'file_name'
    ];
}
