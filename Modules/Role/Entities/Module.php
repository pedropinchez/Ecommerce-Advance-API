<?php

namespace Modules\Role\Entities;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = [
        'strName',
        'strSlug',
        'strRouteURL',
        'strIcon',
        'intPriority',
        'intParentID',
        'isActive'
    ];
    protected $table = "tblModules";
    protected $connection = 'imarine-sql';
    protected $primaryKey = 'intModuleID';
    public $timestamps = false;
}
