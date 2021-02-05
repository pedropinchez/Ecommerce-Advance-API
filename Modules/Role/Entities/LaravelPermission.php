<?php

namespace Modules\Role\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;

class LaravelPermission extends Permission
{
    protected $fillable = [
            'name',
            'guard_name',
            'group_name'
    ];
    protected $table = "permissions";
    // protected $connection = 'imarine-sql';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $appends = ['printable_name'];

    public function getPrintableName()
    {
        return Str::title(str_replace(".", " ", $this->name)) ;
    }
}
