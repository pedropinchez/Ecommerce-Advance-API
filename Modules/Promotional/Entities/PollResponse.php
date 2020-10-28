<?php

namespace Modules\Promotional\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Auth\Entities\User;

class PollResponse extends Model
{
    protected $fillable = [
        'poll_id',
        'user_id',
        'ip_address',
        'poll_option_id'
    ];

    protected $with = [
        'user',
        'pollOption'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pollOption()
    {
        return $this->belongsTo(PollOption::class);
    }

    public function poll()
    {
        return $this->belongsTo(Poll::class);
    }
}
