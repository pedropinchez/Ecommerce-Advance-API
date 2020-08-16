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
        // Need to add others
    ];
}
