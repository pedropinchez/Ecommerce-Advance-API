<?php

namespace Modules\Payment\Entities;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = [
        'name',
        'code',
        'image',
        'description'
    ];

    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        return is_null($this->image) ? null : url('/') . '/images/payment-methods/' . $this->image;
    }
}
