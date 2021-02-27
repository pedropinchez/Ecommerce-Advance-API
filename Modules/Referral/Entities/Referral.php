<?php

namespace Modules\Referral\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Auth\Entities\User;

class Referral extends Model
{
    protected $fillable = [
        'referee_id',
        'referrer_id',
        'source_link',
        'referral_date_time',
    ];

    public function referrer()
    {
        return $this->belongsTo(User::class, 'referrer_id');
    }
}
