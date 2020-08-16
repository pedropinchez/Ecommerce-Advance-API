<?php

namespace Modules\Business\Entities;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = [
        'name',
        'bin',
        'start_date',
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
    ];
}
