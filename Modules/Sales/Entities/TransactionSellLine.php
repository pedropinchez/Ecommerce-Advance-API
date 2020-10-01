<?php

namespace Modules\Sales\Entities;

use Illuminate\Database\Eloquent\Model;

class TransactionSellLine extends Model
{
    protected $fillable = [
        'transaction_id',
        'item_id',
        'business_id',
        'quantity',
        'unit_price',
        'unit_price_inc_tax',
        'discount_amount',
        'item_tax',
        'created_by'
    ];
}
