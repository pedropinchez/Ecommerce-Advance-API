<?php

namespace Modules\Sales\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Auth\Entities\User;
use Modules\Business\Entities\Business;
use Modules\Business\Entities\BusinessLocation;

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

    public function location()
    {
        return $this->belongsTo(BusinessLocation::class, 'business_id', 'business_id');
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
