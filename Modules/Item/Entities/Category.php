<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'business_id',
        'short_code',
        'parent_id',
        'created_by'
    ];
}
