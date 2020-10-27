<?php

namespace Modules\Sales\Entities;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'business_id',
        'type',
        'status',
        'delivery_status',
        'payment_status',
        'title',
        'invoice_no',
        'ref_no',
        'transaction_date',
        'total_before_tax',
        'tax_amount',
        'discount_type_id',
        'tax_id',
        'discount_amount',
        'shipping_details',
        'order_quantity',
        'shipping_charges',
        'additional_notes',
        'staff_note',
        'paid_total',
        'due_total',
        'final_total',
        'created_by',
        'deleted_at'
    ];

    public function saleLines()
    {
        return $this->hasMany(TransactionSellLine::class);
    }

    public function business()
    {
        return $this->belongsTo(\Modules\Business\Entities\Business::class);
    }
}
