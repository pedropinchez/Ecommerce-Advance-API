<?php

namespace Modules\Coupon\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Business\Entities\Business;

class Coupon extends Model
{
    protected $fillable = [
        'code',
        'description',
        'image',
        'business_id',
        'coupon_type_id',
        'amount_type',
        'coupon_amount',
        'min_amount',
        'max_amount',
        'coupon_start_date',
        'coupon_expiry_date',
        'is_free_shiping',
        'usage_limit',
        'usage_count',
        'usage_limit_per_user',
        'is_individual_use',
        'exclude_sale_items',
        'product_ids',
        'exclude_product_ids',
        'product_categories',
        'exclude_product_categories'
    ];

    protected $appends = ['image_url'];
    public function getImageUrlAttribute()
    {
        return is_null($this->image) ? null : url('/') . '/images/coupons/' . $this->image;
    }

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function coupon_type()
    {
        return $this->belongsTo(CouponType::class);
    }
}
