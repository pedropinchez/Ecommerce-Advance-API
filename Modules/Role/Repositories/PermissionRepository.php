<?php

namespace Modules\Role\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Modules\Auth\Entities\User;
use Modules\Role\Entities\LaravelPermission;
use Modules\Role\Entities\LaravelRole;
use Spatie\Permission\Models\Permission;

class PermissionRepository
{
    public function checkHasPermission($permissionName)
    {
        try {
            return request()->user()->hasPermissionTo($permissionName);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function givePermission($permissionName, $user_id)
    {
        try {
            $user = User::find($user_id);
            if (!is_null($user)) {
                $user->givePermissionTo($permissionName);
                return true;
            }
            return false;
        } catch (\Exception $e) {
            // return $e->getMessage();
            return "something went wrong";
        }
    }

    public function getAllPermission()
    {
        $permissionGroups = LaravelRole::getpermissionGroups();
        foreach ($permissionGroups as $key => $group) {
            $permissionGroups[$key]->name = Str::title(str_replace(".", " ", $permissionGroups[$key]->name));
            $data = LaravelRole::getpermissionsByGroupName($group->name);
            foreach ($data as $key2 => $value) {
                $data[$key2]->isChecked = false;
                $data[$key2]->printName = Str::title(str_replace(".", " ", $data[$key2]->name));
            }
            $permissionGroups[$key]->isChecked = false;
            $permissionGroups[$key]->permissions = $data;
        }
        return  $permissionGroups;
    }

    public function getAllPermissionByRole($role_id)
    {
        $role = LaravelRole::findById($role_id);
        $permissionGroups = LaravelRole::getpermissionGroups();
        foreach ($permissionGroups as $key => $group) {
            $permissionGroups[$key]->name = Str::title(str_replace(".", " ", $permissionGroups[$key]->name));
            $data = LaravelRole::getpermissionsByGroupName($group->name);
            foreach ($data as $key2 => $value) {
                $data[$key2]->isChecked = $role->hasPermissionTo($data[$key2]->name);
                $data[$key2]->printName = Str::title(str_replace(".", " ", $data[$key2]->name));
            }
            $permissionGroups[$key]->isChecked = false;
            $permissionGroups[$key]->permissions = $data;
        }
        $data = [
            'role' => $role,
            'groups' => $permissionGroups
        ];
        return $data;
    }

    public function storePermission($permissionGroups)
    {
        try {
            $permissions = [];
            // Create a role if that doesn't exist by name
            $role = LaravelRole::findOrCreate($permissionGroups['role'], 'api');

            $groups = $permissionGroups['groupList'];

            if (is_null($role)) {
                $role = LaravelRole::create(['name' => $permissionGroups['role'], 'guard_name' => 'api']);
            } else {
                foreach ($groups as $group) {
                    foreach ($group['permissions'] as $key => $permission) {
                        if($permission['isChecked']){
                            array_push($permissions, $permission['name']);
                        }
                    }
                }
            }
            $role->syncPermissions($permissions);
            return $role;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
