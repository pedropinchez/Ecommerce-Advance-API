<?php

namespace Modules\Business\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaxRate extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'business_id',
        'name',
        'calculation_type',
        'amount',
        'is_tax_group',
        'rounding_type',
        'created_by'
    ];
}
