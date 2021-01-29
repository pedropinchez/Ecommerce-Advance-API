<?php

namespace Modules\Auth\Repositories;

use App\Helpers\StringHelper;
use App\Models\Project;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Modules\Auth\Entities\User;
use Modules\Auth\Interfaces\AuthInterface;

class CustomerRepository extends AuthRepository
{
    public function registerAsCustomer($request)
    {
        $username = StringHelper::createSlug($request->first_name.''.$request->last_name, 'Modules\Auth\Entities\User', 'username', '');

        $user = User::create(
            [
                'first_name'  => $request->first_name,
                'surname'  => '',
                'last_name'  => $request->last_name,
                'username'  => $username,
                'email'  => $request->email,
                'phone_no'  => $request->phone_no,
                'password'  => Hash::make($request->password),
                'language' => 'en',
                'status' => 'inactive'
            ]
        );
        return $user;
    }
}
