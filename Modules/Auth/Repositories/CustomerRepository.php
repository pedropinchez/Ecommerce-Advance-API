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
use Modules\Referral\Repositories\ReferralRepository;

class CustomerRepository extends AuthRepository
{
    private $referralRepository;
    private $authRepository;
    public function __construct(ReferralRepository $referralRepository, AuthRepository $authRepository)
    {
        $this->referralRepository = $referralRepository;
        $this->authRepository = $authRepository;
    }

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
        if(request()->referral_user){
            $referral_value = request()->referral_user; // User Code or username/email/phone no of referral user
            $referral = $this->authRepository->findByEmailOrPhoneOrUsername($referral_value);
            $this->referralRepository->store($user->id, $referral->id, request()->source_link);
        }
        return $user;
    }
}
