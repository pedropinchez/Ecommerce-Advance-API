<?php

namespace Modules\Sales\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Business\Entities\Business;

class Invoice extends Model
{
    protected $fillable = [
        'invoice_no',
        'transaction_id',
        'business_id',
        'total_amount',
        'total_discount',
        'grand_total',
        'paid_total',
        'status',
        'created_by',
        'updated_by',
        'date'
    ];

    public function items()
    {
        return $this->hasMany(InvoiceItem::class);
    }

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
