<?php

namespace Modules\Promotional\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Business\Entities\Business;
use Modules\Item\Entities\Item;

class OfferItem extends Model
{
    protected $fillable = [
        'item_id',
        'business_id',
        'current_price',
        'offer_price',
        'offer_percent_discount',
        'offer_type',
        'start_date',
        'end_date',
        'is_unlimited',
        'is_visible',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
