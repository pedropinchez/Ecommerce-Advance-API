<?php

namespace Modules\Promotional\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Auth\Entities\User;

class TransactionDetail extends Model
{
    protected $fillable = [
        'business_id',
        'user_id',
        'gift_card_id',
        'order_quantity',
        'paid_total',
        'payment_status',
        'transaction_date'
    ];

    public function giftCard()
    {
        return $this->belongsTo(GiftCard::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
