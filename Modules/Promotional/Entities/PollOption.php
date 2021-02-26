<?php

namespace Modules\Promotional\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Item\Entities\Item;

class PollOption extends Model
{
    protected $fillable = [
        'value',
        'item_id',
        'poll_id'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class)->select('id', 'id as value', 'name',  'name as label', 'sku');
    }
}
