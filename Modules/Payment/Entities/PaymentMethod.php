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
}
