<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    protected $fillable = [
        'value',
        'code',
        'attribute_id'
    ];
}
