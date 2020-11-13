<?php

namespace Modules\Promotional\Entities;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'image',
        'price_value_for',
        'change_price_value',
        'card_type',
        'status',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function transactions()
    {
        return $this->hasMany(TransactionDetail::class);
    }
}
