<?php

namespace Modules\Business\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Currency extends Model
{
    protected $table = "currencies";
    protected $connection = 'DB_iApps';
    protected $primaryKey = 'id';
    protected $fillable = [
        'country',
        'currency',
        'code',
        'symbol',
        'thousand_separator',
        'decimal_separator',
    ];
}
