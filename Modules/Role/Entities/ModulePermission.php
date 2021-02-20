<?php

namespace Modules\Role\Entities;

use Illuminate\Database\Eloquent\Model;

class ModulePermission extends Model
{
    protected $fillable = ['intPermissionID', 'intModuleID'];
    protected $table = "tblModulePermissions";
    protected $connection = 'imarine-sql';
    protected $primaryKey = 'intID';
    public $timestamps = false;
}
