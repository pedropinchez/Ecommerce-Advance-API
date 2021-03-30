<?php

namespace Modules\Analytics\Entities;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'code',
        'phone_code',
        'flag'
    ];
}
