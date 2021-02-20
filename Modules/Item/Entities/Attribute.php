<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attribute extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'slug',
        'business_id',
        'category_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * get all the attribute value related to attribute
     */
    public function attributeValues()
    {
        return $this->hasMany(AttributeValue::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class)->select('id', 'name');
    }
}
