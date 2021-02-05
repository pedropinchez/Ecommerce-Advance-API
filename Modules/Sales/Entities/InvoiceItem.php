<?php

namespace Modules\Sales\Entities;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    protected $fillable = [
        'invoice_id',
        'transaction_id',
        'business_id',
        'item_id',
        'transaction_sell_line_id',
        'qty',
        'amount',
        'discount_amount',
        'grand_total'
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
