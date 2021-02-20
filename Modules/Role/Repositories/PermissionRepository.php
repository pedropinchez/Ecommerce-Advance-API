<?php

namespace Modules\Role\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Modules\Auth\Entities\User;
use Modules\Role\Entities\LaravelPermission;
use Modules\Role\Entities\LaravelRole;
use Modules\Role\Entities\Module;
use Modules\Role\Entities\ModulePermission;
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
                        if ($permission['isChecked']) {
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

    public function getUserPermissions($user, $is_all_data)
    {
        if ($is_all_data) {
            $getUserPermissions = $user->getAllPermissions();
        } else {
            $getUserPermissions = $user->getPermissionNames();
        }
        return $getUserPermissions;
    }

    public function getUserPermittedModules()
    {
        $user = request()->user(); // Get User from token
        $modules = [];
        $parentModule = $this->getActiveModulesByParentID(null);

        foreach ($parentModule as $key => $parent) {
            if($this->checkIfUserHasModulePermission($parent['intModuleID'], $user)){
                $modules[$key] = $parent;
                $childs1 = $this->getActiveModulesByParentID($parent['intModuleID']);
                $modules[$key]['childs'] = [];
                foreach ($childs1 as $key2 => $child1) {
                    if($this->checkIfUserHasModulePermission($child1['intModuleID'], $user)){
                        array_push($modules[$key]['childs'], $child1);
                        $childs2 = $this->getActiveModulesByParentID($child1['intModuleID']);
                        $modules[$key]['childs'][$key2]['childs'] = [];
                        foreach ($childs2 as $key3 => $child2) {
                            if($this->checkIfUserHasModulePermission($child2['intModuleID'], $user)){
                                array_push($modules[$key]['childs'][$key2]['childs'], $child2);
                            }
                        }
                    }
                }
            }
        }
        return $modules;
    }

    public function checkIfUserHasModulePermission($intModuleID, $user)
    {
        $modulePermissions = $this->getAllPermissionsOfModules($intModuleID);
        $isPermitted = false;
        $userPermissions = [];
        foreach ($user->getAllPermissions() as $permission) {
            array_push($userPermissions, $permission->name);
        }

        foreach ($modulePermissions as $permission) {
            if (in_array($permission, $userPermissions)) {
                $isPermitted = true;
                break;
            }
        }
        return $isPermitted;
    }

    public function getAllPermissionsOfModules($intModuleID)
    {
        $permissions = [];
        $parentModule = $this->getActiveModulesByParentID($intModuleID);
        $permissions1 = $this->getPermissionsOfModules($intModuleID);
        $permissions = $this->addArrayItemsInFirstArray($permissions, $permissions1);

        foreach ($parentModule as $key => $parent) {
            $permissions2 = $this->getPermissionsOfModules($parent['intModuleID']);
            $permissions = $this->addArrayItemsInFirstArray($permissions, $permissions2);

            $childs1 = $this->getActiveModulesByParentID($parent['intModuleID']);
            foreach ($childs1 as $key2 => $child1) {
                $permissions3 = $this->getPermissionsOfModules($child1['intModuleID']);
                $permissions = $this->addArrayItemsInFirstArray($permissions, $permissions3);
            }
        }
        return $permissions;
    }

    public function addArrayItemsInFirstArray($array, $array2)
    {
        if(count($array2) > 0){
            foreach ($array2 as $item) {
                array_push($array, $item->name);
            }
        }
        return $array;
    }

    public function getPermissionsOfModules($intModuleID)
    {
        return ModulePermission::where('intModuleID', $intModuleID)
        ->select('permissions.name', 'permissions.id')
        ->leftJoin('permissions', 'permissions.id', '=', 'tblModulePermissions.intPermissionID')
        ->get();
    }

    public function getActiveModulesByParentID($intParentID)
    {
        $data = Module::where('intParentID', $intParentID)
        ->orderBy('intPriority', 'asc')
        ->select('intModuleID', 'strName', 'strSlug', 'strRouteURL', 'strIcon')
        ->where('isActive', 1)
        ->get();
        return $data->toArray();
    }
}
