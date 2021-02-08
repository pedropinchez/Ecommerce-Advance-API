<?php

namespace Modules\Sales\Entities;

use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    protected $fillable = [
        'transaction_id',
        'order_create_date',
        'confirmed_by_vendor_date',
        'shipped_by_vendor_date',
        'delivery_by_vendor_date',
        'received_by_customer_date',
        'feedback_by_customer_date'
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
