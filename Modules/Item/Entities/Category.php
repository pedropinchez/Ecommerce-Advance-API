<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Business\Entities\Business;

class Category extends Model
{
    use SoftDeletes;
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
    protected $appends = ['image_url', 'banner_url'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * get the childs of a category
     */
    public function childs()
    {
        return $this->hasMany(\Modules\Item\Entities\Category::class, 'parent_id');
    }

    public function parent_category()
    {
        return $this->belongsTo(\Modules\Item\Entities\Category::class, 'parent_id', 'id');
    }

    public function business()
    {
        return $this->belongsTo(\Modules\Business\Entities\Business::class);
    }

    public function getImageUrlAttribute()
    {
        return is_null($this->image) ? null : url('/').'/images/categories/'.$this->image;
    }

    public function getBannerUrlAttribute()
    {
        return is_null($this->banner) ? null : url('/').'/images/categories/'.$this->banner;
    }

}
