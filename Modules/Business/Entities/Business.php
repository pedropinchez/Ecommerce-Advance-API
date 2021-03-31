<?php

namespace Modules\Business\Entities;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $table = "business";
    protected $fillable = [
        'name',
        'bin',
        'slug',
        'start_date',
        'tax_label_1',
        'tax_number_1',
        'tax_number_2',
        'tax_label_2',
        'default_profit_percent',
        'owner_id',
        'time_zone',
        'fy_start_month',
        'default_sales_discount',
        'accounting_method',
        'sell_price_tax',
        'currency_id',
        'logo',
        'sku_prefix',
        'enable_tooltip',
        'banner',
    ];

    protected $appends = ['logo_url', 'banner_url'];

    public function getLogoUrlAttribute()
    {
        return is_null($this->logo) ? null : url('/') . '/images/vendors/' . $this->logo;
    }

    public function getBannerUrlAttribute()
    {
        return is_null($this->banner) ? null : url('/') . '/images/vendors/' . $this->banner;
    }

    public function location()
    {
        return $this->hasOne(BusinessLocation::class);
    }
    public static function getMainBusinessID()
    {
        return Business::where('is_main_shop', true)->value('id');
    }
}
