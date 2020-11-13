<?php

namespace Modules\Promotional\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Business\Entities\Business;

class GiftCardTransaction extends Model
{
    protected $fillable = [
        'transaction_id',
        'gift_card_id',
        'user_id',
        'price_value_for',
        'change_price_value'
    ];

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function giftCard()
    {
        return $this->belongsTo(GiftCard::class);
    }
}
