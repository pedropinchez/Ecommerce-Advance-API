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

class AuthRepository implements AuthInterface
{
    /**
     * check if user is authenticated
     *
     * @param Request $request
     * @return boolean
     */
    public function checkIfAuthenticated(Request $request)
    {
        $user = $this->findUserByEmailAddress($request->email);

        if (!is_null($user)) {
            if (Hash::check($request->password, $user->password)) {
                return true;
            }
        }
        return false;
    }

    /**
     * register user
     *
     * @param Request $request
     * @return object $user
     * @throws Exception
     */
    public function registerUser(Request $request)
    {
        $username = StringHelper::createSlug($request->first_name, 'Modules\Auth\Entities\User', 'username', '');

        $user = User::create(
            [
                'first_name'  => $request->first_name,
                'surname'  => $request->surname,
                'last_name'  => $request->last_name,
                'username'  => $username,
                'email'  => $request->email,
                'phone_no'  => $request->phone_no,
                'password'  => Hash::make($request->password),
                'language' => $request->language ? $request->language :  'en'
            ]
        );
        return $user;
    }

    /**
     * find User By Email Address
     *
     * @param string $email
     * @return object $user
     */
    public function findUserByEmailAddress($email)
    {
        $user = User::where('email', $email)->first();
        return $user;
    }

    /**
     * find User By Phone No
     *
     * @param string $phone_no
     * @return object $user
     */
    public function findUserByPhoneNo($phone_no)
    {
        $user =  User::where('phone_no', $phone_no)->first();
        return $user;
    }

    /**
     * find User by ID
     *
     * @param integer $id
     * @return object $user
     */
    public function findUserById($id)
    {
        $user =  User::find($id);
        return $user;
    }


    /**
     * update User Profile
     *
     * @param $data
     * @param integer $id
     * @return void $user
     */
    public function updateUserProfile($data, $id)
    {
        if(isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }

        $user = User::find($id);
        if($user) {
            $user->update($data);
        }

        return $user;
    }

    /**
     * delete user by ID
     *
     * @param integer $id
     * @return object $user
     */
    public function deleteUserAccount($id)
    {
        $user =  $this->findUserById($id);
        DB::table("users")->where('id', $id)->delete();
        return $user;
    }

    /**
     * check User account
     *
     * @param integer $id
     * @return boolean  Returns true if User account exist else false
     */
    public function checkUserAccount($id)
    {

        $user = $this->findUserById($id);
        if (!is_null($user))
            return true;
        return false;
    }
}
