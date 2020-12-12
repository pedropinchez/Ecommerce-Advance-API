<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Business\Entities\Business;

class Category extends Model
{
    protected $fillable = [
        'name',
        'business_id',
        'short_code',
        'short_description',
        'description',
        'parent_id',
        'created_by',
        'image',
        'banner',
        'priority',
        'is_visible_homepage'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * get the childs of a category
     */
    public function childs()
    {
        return $this->hasMany(\Modules\Item\Entities\Category::class, 'parent_id');
    }

    public function business()
    {
        return $this->belongsTo(\Modules\Business\Entities\Business::class);
    }
}
