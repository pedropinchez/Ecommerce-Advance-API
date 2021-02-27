<?php

namespace Modules\Referral\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Referral\Repositories\ReferralRepository;

class ReferralController extends Controller
{
    private $referralRepository;
    private $responseRepository;

    public function __construct(ReferralRepository $referralRepository, ResponseRepository $responseRepository)
    {
        $this->referralRepository = $referralRepository;
        $this->responseRepository = $responseRepository;
    }

}
