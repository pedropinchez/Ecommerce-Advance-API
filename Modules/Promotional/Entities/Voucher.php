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
        'description',
        'status',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function transactions()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    protected $appends = ['image_url'];
    public function getImageUrlAttribute()
    {
        return is_null($this->image) ? null : url('/') . '/images/vouchers/' . $this->image;
    }
}
