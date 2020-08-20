<?php

namespace Modules\Item\Repositories;

use App\Helpers\StringHelper;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Modules\Item\Entities\Item;

use Modules\Item\Interfaces\ItemInterfaces;

class ItemRepository
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

    // /**
    //  * register user
    //  *
    //  * @param Request $request
    //  * @return object $user
    //  */
    // public function registerUser(Request $request)
    // {
    //     $username = StringHelper::createSlug($request->first_name, 'Modules\Auth\Entities\User', 'username', '');

    //     $user = User::create(
    //         [
    //             'first_name'  => $request->first_name,
    //             'surname'  => $request->surname,
    //             'last_name'  => $request->last_name,
    //             'username'  => $username,
    //             'email'  => $request->email,
    //             'phone_no'  => $request->phone_no,
    //             'password'  => Hash::make($request->password),
    //             'language' => $request->language ? $request->language :  'en'
    //         ]
    //     );
    //     return $user;
    // }
}
