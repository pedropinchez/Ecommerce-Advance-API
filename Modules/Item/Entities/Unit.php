<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'business_id',
        'actual_name',
        'short_name',
        'allow_decimal',
        'created_by',
    ];

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
