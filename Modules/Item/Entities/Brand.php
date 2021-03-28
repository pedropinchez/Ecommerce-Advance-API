<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'business_id',
        'name',
        'slug',
        'description',
        'created_by',
        'banner',
        'image'
    ];

    protected $appends = ["image_url", "banner_url"];

    public function getImageUrlAttribute()
    {
        return is_null($this->image) ? null : url('/').'/images/brands/'.$this->image;
    }
    public function getBannerUrlAttribute()
    {
        return is_null($this->banner) ? null : url('/').'/images/brands/'.$this->banner;
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * Brand related to business
     */
    public function business()
    {
        return $this->belongsTo(\Modules\Business\Entities\Business::class)->select('id', 'name');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * Brand related to user who created this
     */
    public function createdBy()
    {
        return $this->belongsTo(\Modules\Business\Entities\Business::class, 'created_by');
    }
}
