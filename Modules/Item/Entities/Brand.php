<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'business_id',
        'name',
        'description',
        'created_by',
        'banner',
        'image'
    ];

    protected $appends = ['featured_url'];

    public function getFeaturedUrlAttribute()
    {
        return is_null($this->image) ? null : url('/').'/images/brands/'.$this->image;
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * Brand related to business
     */
    public function business()
    {
        return $this->belongsTo(\Modules\Business\Entities\Business::class);
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
