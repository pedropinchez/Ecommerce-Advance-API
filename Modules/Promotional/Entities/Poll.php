<?php

namespace Modules\Promotional\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Poll extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'description',
        'slug',
        'image',
        'enable_item_comparison',
        'type',
        'status',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function options()
    {
        return $this->hasMany(PollOption::class);
    }

    public function pollResponse()
    {
        return $this->hasMany(PollResponse::class);
    }
}
