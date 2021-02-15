<?php

namespace Modules\Business\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Item\Entities\Item;

class Wishlist extends Model
{
    protected $fillable = [
        'user_id',
        'item_id'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class)->select('id', 'name', 'sku');
    }
}
