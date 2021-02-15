<?php

namespace Modules\Business\Entities;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'title',
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

}
