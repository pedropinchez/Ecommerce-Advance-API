<?php

namespace Modules\Auth\Repositories;

use App\Helpers\StringHelper;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Modules\Auth\Entities\User;
use Modules\Auth\Interfaces\AuthInterface;
use Modules\Business\Repositories\BusinessRepository;

class AuthRepository implements AuthInterface
{
    /**
     * check if user is authenticated
     *
     * @param Request $request
     * @return object status and message of check
     */
    public function checkIfAuthenticated(Request $request)
    {
        $user = $this->findByEmailOrPhoneOrUsername($request->email);
        $data = [
            'status' => false,
            'message' => 'Sorry, Invalid Email and Password',
        ];

        if (!is_null($user)) {
            if (Hash::check($request->password, $user->password)) {
                if($user->status === 'active'){
                    $data['status'] = true;
                    $data['message'] = 'Logged in Successfully !';
                }else{
                    if($user->status === 'banned'){
                        $data['message'] = "Sorry ! Your account has been banned for bad activities. Please contact with support center !";
                    }else if($user->status === 'account_deleted'){
                        $data['message'] = "Sorry ! Your account has been deleted. Please contact with support center to access it again !";
                    }else{
                        $data['message'] = "Sorry ! Your account status is $user->status. Please activate your account first !";
                    }
                }
            }else{
                $data['message'] = 'Sorry, Invalid Email and Password';
            }
        }
        return $data;
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
        if(Route::is('vendor.register') || Route::is('vendor.register.next')){
            $buisnessRepository = new BusinessRepository();
            $business = $buisnessRepository->registerAsVendor($request->all(), $user);
            $user->business_id = !is_null($business) ? $business->id : null;
            $user->save();
            $user->assignRole('Vendor');
        }else{
            $user->assignRole('Customer');
        }
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
        return User::with('business')->where('email', $email)->first();
    }

    /**
     * find User By Phone No
     *
     * @param string $phone_no
     * @return object $user
     */
    public function findUserByPhoneNo($phone_no)
    {
        return User::with('business')->where('phone_no', $phone_no)->first();
    }

    /**
     * find User By Email Or Phone Or User name
     *
     * @param string $value
     * @return object $user
     */
    public function findByEmailOrPhoneOrUsername($value)
    {
        return User::with('business')
        ->where('email', $value)
        ->orWhere('phone_no', $value)
        ->orWhere('username', $value)
        ->first();
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
