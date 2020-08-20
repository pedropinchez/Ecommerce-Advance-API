<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;
    protected $table = "items";
    protected $connection = 'DB_iApps';
    protected $primaryKey = 'id';
    protected $fillable = [
        'business_id',
        'name',
        'unit_id',
        'brand_id',
        'category_id',
        'sub_category_id',
        'tax',
        'tax_type',
        'enable_stock',
        'alert_quantity',
        'sku',
        'barcode_type',
        'sku_manual',
        'created_by'
    ];
}
