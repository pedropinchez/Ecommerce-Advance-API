<?php

namespace Modules\Promotional\Entities;

use Illuminate\Database\Eloquent\Model;

class PollResponse extends Model
{
    protected $fillable = [
        'poll_id',
        'user_id',
        'ip_address',
        'poll_option_id'
    ];
}
