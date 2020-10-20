<?php

namespace Modules\Promotional\Entities;

use Illuminate\Database\Eloquent\Model;

class PollOption extends Model
{
    protected $fillable = [
        'value',
        'item_id',
        'poll_id'
    ];
}
