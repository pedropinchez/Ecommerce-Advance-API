<?php

namespace Modules\Business\Entities;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'title',
        'description',
        'business_id',
        'image',
        'is_text_enable',
        'text',
        'text_color',
        'is_button_enable',
        'button_text',
        'button_link',
        'button_color',
        'status'
    ];

    protected $appends = ['image_url'];
    public function getImageUrlAttribute()
    {
        return is_null($this->image) ? null : url('/') . '/images/sliders/' . $this->image;
    }


    public function business()
    {
        return $this->belongsTo(Business::class)->select('id', 'name');
    }

}
