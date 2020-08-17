<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'business_id',
        'name',
        'description',
        'created_by'
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
