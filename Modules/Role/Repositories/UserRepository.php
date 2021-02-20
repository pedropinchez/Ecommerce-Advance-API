<?php

namespace Modules\Role\Repositories;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Modules\Auth\Entities\User;
use Modules\Role\Entities\LaravelRole;
use Spatie\Permission\Models\Role;

class UserRepository
{

    public function getUserList()
    {
        $query = User::orderBy('users.id', 'desc')->select(
            'users.id', 'role_id', 'strBusinessUnitName as business_name', 'roles.name as role_name', 'business_id','first_name','surname','last_name','username','email','phone_no'
        );

        $query->leftJoin('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
        ->leftJoin('roles', 'roles.id', '=', 'model_has_roles.role_id')
        ->leftJoin('tblBusinessUnit', 'tblBusinessUnit.intCompanyID', '=', 'users.business_id');

        if (request()->search) {
            $query->where('users.first_name', 'like', '%' . request()->search . '%');
            $query->orWhere('users.last_name', 'like', '%' . request()->search . '%');
            $query->orWhere('users.email', 'like', '%' . request()->search . '%');
            $query->orWhere('users.surname', 'like', '%' . request()->search . '%');
            $query->orWhere('users.username', 'like', '%' . request()->search . '%');
            $query->orWhere('roles.name', 'like', '%' . request()->search . '%');
            $query->orWhere('users.phone_no', 'like', '%' . request()->search . '%');
            $query->orWhere('tblBusinessUnit.strBusinessUnitName', 'like', '%' . request()->search . '%');
        }

        if (isset(request()->isActive)) {
            $query->where('users.isActive', request()->isActive);
        }
        if (request()->isPaginated) {
            $paginateNo = request()->paginateNo ? request()->paginateNo : 20;
            return $query->paginate($paginateNo);
        } else {
            return $query->get();
        }

    }

    public function multipleUserRoleStore(Request $request)
    {
        try {
            $user = User::create(
                [
                    'business_id' =>$request['business_id'],
                    'first_name' => $request['first_name'],
                    'surname' => $request['surname'],
                    'last_name' => $request['last_name'],
                    'username' => $request['username'],
                    'email' => $request['email'],
                    'phone_no' => $request['phone_no'],
                    'password'  => Hash::make($request->password),
                    'language' => $request->language ? $request->language :  'en',
                    'remember_token' => null,
                ]
            );

            $user->assignRole($request->name);
            return $user;
        }
        catch (\Exception $e) {
            return $e;
        }
    }

    public function getByID($id)
    {
        $user = User::select('users.id', 'role_id', 'strBusinessUnitName as business_name', 'roles.name as role_name', 'business_id','first_name','surname','last_name','username','email','phone_no')
        ->leftJoin('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
        ->leftJoin('roles', 'roles.id', '=', 'model_has_roles.role_id')
        ->leftJoin('tblBusinessUnit', 'tblBusinessUnit.intCompanyID', '=', 'users.business_id')
        ->where('users.id', $id)
        ->first();
        return $user;
    }

    public function update($id, Request $request){
            try {
                $user = User::find($id);
                $user->update([
                        'business_id' =>$request['business_id'],
                        'first_name' => $request['first_name'],
                        'surname' => $request['surname'],
                        'last_name' => $request['last_name'],
                        'username' => $request['username'],
                        'email' => $request['email'],
                        'phone_no' => $request['phone_no'],
                        'password'  => $request->password ? Hash::make($request->password) : $user->password,
                        'language' => $request->language ? $request->language :  'en',
                        'remember_token' => null,
                    ]
                );

                $user->assignRole($request->name);
                return $user;
        }   catch (\Exception $e) {
            return false;
        }
}
}
