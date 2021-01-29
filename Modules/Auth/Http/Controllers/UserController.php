<?php

namespace Modules\Auth\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Auth\Http\Requests\RegisterCheckRequest;
use Modules\Auth\Repositories\UserRepository;

class UserController extends Controller
{
    public $userRepository;
    public $responseRepository;

    public function __construct(UserRepository $userRepository, ResponseRepository $responseRepository)
    {
        $this->userRepository = $userRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\POST(
     *     path="/api/v1/auth/check-user",
     *     tags={"Authentication"},
     *     summary="Check User Registration Status",
     *     description="Check User Registration Status",
     *     security={{"bearer": {}}},
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="email", type="string"),
     *              @OA\Property(property="phone_no", type="string"),
     *          )
     *      ),
     *     operationId="updateUserProfile",
     *      @OA\Response( response=200, description="Check User Registration Status" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function checkUserIsUnique(RegisterCheckRequest $request)
    {
        try {
            $response = $this->userRepository->checkUserIsUnique($request->all());
            if($response['isUnique']){
                return $this->responseRepository->ResponseSuccess($response, $response['message']);
            }
            return $this->responseRepository->ResponseError(null, $response['message'], Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
