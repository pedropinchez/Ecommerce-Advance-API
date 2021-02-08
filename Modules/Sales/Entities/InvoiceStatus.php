<?php

namespace Modules\Sales\Entities;

use Illuminate\Database\Eloquent\Model;

class InvoiceStatus extends Model
{
    protected $fillable = [
        'invoice_id',
        'invoice_create_date',
        'confirmed_by_vendor_date',
        'shipped_by_vendor_date',
        'delivery_by_vendor_date',
        'received_by_customer_date',
        'feedback_by_customer_date'
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
