<?php

namespace Modules\Auth\Http\Controllers;

use App\Helpers\NumbersHelper;
use App\Http\Controllers\Controller;
use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Modules\Auth\Entities\Otp;
use Modules\Auth\Entities\Sms;
use Modules\Auth\Entities\User;
use Modules\Auth\Http\Requests\CustomerRegisterRequest;
use Modules\Auth\Repositories\CustomerRepository;

class CustomerRegisterController extends Controller
{
    public $customerRepository;
    public $responseRepository;

    public function __construct(CustomerRepository $customerRepository, ResponseRepository $responseRepository)
    {
        $this->customerRepository = $customerRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\POST(
     *     path="/api/v1/auth/register",
     *     tags={"Authentication"},
     *     summary="Customer Register a user to the system",
     *     description="Customer Register a user to the system",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="first_name", type="string", example="Test User"),
     *              @OA\Property(property="last_name", type="string", example="last"),
     *              @OA\Property(property="email", type="string", format="email", example="akash@mail.com"),
     *              @OA\Property(property="phone_no", type="string", example="01951233084")
     *          )
     *      ),
     *     operationId="customerRegister",
     *      @OA\Response( response=200, description="Create New Customer Account" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function customerRegister(Request $request)
    {
        try {
            $data = [
                'status' => false,
                'message' => ''
            ];

            $number = NumbersHelper::formattedCorrectNumber($request->phone_no);
            $otp = rand(100000, 999999);
            $otpData = Otp::where('phone_no', $number)->first();
            $request->password = $otp;
            $user = $this->customerRepository->registerUser($request);

            if (NumbersHelper::validateNumber($number)) {
                Otp::updateOTP($otpData, $otp, $number);
                if (Sms::sendSMS($number, $otp)) {
                    if (!Config::get('app.is_sms_send')) {
                        $data = [
                            'status' => true,
                            'message' => 'An OTP has been sent to your phone. Please input that ! Test Code For Development Mode - ' . $otp . ' .Please change env in production mode !'
                        ];
                    } else {
                        $data = [
                            'status' => true,
                            'message' => 'An OTP has been sent to your phone. Please input that !'
                        ];
                    }
                } else {
                    $data['message'] = 'SMS Sending Problem ! Please Try Again !';
                }
            } else {
                $data['message'] = "Invalid Number given !";
            }
            if ($data['status'])
                return $this->responseRepository->ResponseSuccess(null, $data['message']);
            else
                return $this->responseRepository->ResponseError(null, $data['message'], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, 'Something went wrong, Please try again.', JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
