<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\ResponseRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Auth\Http\Requests\LoginRequest;
use Modules\Auth\Repositories\AuthRepository;

class LoginController extends Controller
{
    public $authRepository;
    public $responseRepository;

    public function __construct(AuthRepository $authRepository, ResponseRepository $responseRepository)
    {
        $this->authRepository = $authRepository;
        $this->responseRepository = $responseRepository;
    }


    /**
     * @OA\POST(
     *     path="/api/v1/auth/login",
     *     tags={"Authentication"},
     *     summary="Logged in to the system by user",
     *     description="Logged in to the system by user",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="email", type="string", example="seller@example.com"),
     *              @OA\Property(property="password", type="string", example="123456")
     *          )
     *      ),
     *     operationId="login",
     *      @OA\Response( response=200, description="Login User Data, with Token" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function login(LoginRequest $request)
    {
        $authenticatedData = $this->authRepository->checkIfAuthenticated($request);
        if ($authenticatedData['status']) {
            $user = $this->authRepository->findByEmailOrPhoneOrUsername($request->email);
            $tokenCreated = $user->createToken('authToken');
            $data = [
                'user' => $user,
                'access_token' => $tokenCreated->accessToken,
                'token_type' => 'Bearer',
                'expires_at' => Carbon::parse($tokenCreated->token->expires_at)->toDateTimeString()
            ];
            return $this->responseRepository->ResponseSuccess($data, $authenticatedData['message']);
        } else {
            return $this->responseRepository->ResponseError(null, $authenticatedData['message']);
        }
    }
}
