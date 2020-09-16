<?php

namespace Modules\Promotional\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GiftCard extends Model
{
    use SoftDeletes;
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
}
