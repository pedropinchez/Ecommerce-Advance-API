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

class UserRepository extends AuthRepository
{
    public function checkUserIsUnique($data)
    {
        $response = [
            'message' => "",
            'isUnique' => false,
        ];

        if (isset($data['phone_no'])) {
            if (!is_null($this->findUserByPhoneNo($data['phone_no']))) {
                $response['message'] .= "Sorry, Phone no already exists.";
            }
        }

        if (isset($data['email'])) {
            if (!is_null($this->findUserByEmailAddress($data['email']))) {
                $response['message'] .= " Sorry, email already exists.";
            }
        }
        if(strlen($response['message']) === 0){
            $response['message'] = "Valid Data";
            $response['isUnique'] = true;
        }
        return $response;
    }
}
