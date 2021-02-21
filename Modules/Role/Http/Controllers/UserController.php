<?php

namespace Modules\Role\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Role\Repositories\UserRepository;

class UserController extends Controller
{
    public $userRepository;
    public $responseRepository;


    public function __construct(UserRepository $userRepository, ResponseRepository $rp)
    {
        $this->userRepository = $userRepository;
        $this->responseRepository = $rp;
    }

       /**
     * @OA\GET(
     *     path="/api/v1/roles/getAllUser",
     *     tags={"Module Permission"},
     *     summary="Get User List Data",
     *     description="Get User List Data",
     *     security={{"bearer": {}}},
     *      operationId="getAllUser",
     *      @OA\Response(response=200,description="Get User List Data"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */

    public function getAllUser(){
        try {
            $data = $this->userRepository->getUserList();
            return $this->responseRepository->ResponseSuccess($data, 'Fetched user List !');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\PUT(
     *     path="/api/v1/roles/editUser/{id}",
     *     tags={"Module Permission"},
     *     summary="Update User Information",
     *     description="Update User Information",
     *     @OA\Parameter(name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="business_id", type="integer", example=1),
     *              @OA\Property(property="first_name", type="string", example="First Name"),
     *              @OA\Property(property="surname", type="string", example="Surname"),
     *              @OA\Property(property="last_name", type="string", example="Last Name"),
     *              @OA\Property(property="username", type="string", example="Username"),
     *              @OA\Property(property="email", type="string", example="email"),
     *              @OA\Property(property="phone_no", type="string", example="phone_no"),
     *          ),
     *      ),
     *     operationId="editUser",
     *     @OA\Response( response=200, description="Update User Information" ),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function editUser(Request $request, $id)
    {
        try {
            $data = $this->userRepository->update($id, $request);
            if(is_null($data))
                return $this->responseRepository->ResponseError(null, 'User Not Found', Response::HTTP_NOT_FOUND);

            return $this->responseRepository->ResponseSuccess($data, 'User Updated Successfully !');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/roles/userDetails/{id}",
     *     tags={"Module Permission"},
     *     summary="Show User Details",
     *     description="Show User Details",
     *     operationId="userDetails",
     *     @OA\Parameter(name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     @OA\Response(response=200, description="Show User Details" ),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function userDetails($id)
    {
        try {
            $data = $this->userRepository->getByID($id);
            if(is_null($data))
                return $this->responseRepository->ResponseError(null, 'User List Not Found', Response::HTTP_NOT_FOUND);

            return $this->responseRepository->ResponseSuccess($data, 'User List Details Fetched Successfully !');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\POST(
     *     path="/api/v1/roles/multipleUserRoleStore",
     *     tags={"Module Permission"},
     *     summary="Create User",
     *     description="Create User",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *                          @OA\Property(property="business_id", type="integer", example=2),
     *                          @OA\Property(property="first_name", type="string", example="Shakib"),
     *                          @OA\Property(property="surname", type="string", example="Robin"),
     *                          @OA\Property(property="last_name", type="string", example="Labib"),
     *                          @OA\Property(property="username", type="string", example="shakib"),
     *                          @OA\Property(property="email", type="string", example="shakib.corp@akij.net"),
     *                          @OA\Property(property="phone_no", type="string", example="1866"),
     *                          @OA\Property(property="password", type="string", example="robinLabib"),
     *                          @OA\Property(property="language", type="string", example="en"),
     *                          @OA\Property(property="remember_token", type="string", example="token"),
     *                          @OA\Property(property="name", type="string", example="writer"),
     *              )
     *      ),
     *      operationId="multipleUserRoleStore",
     *      @OA\Response(response=200,description="Create User"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function multipleUserRoleStore(Request $request)
    {
        try {
            $data = $this->userRepository->multipleUserRoleStore($request);
            return $this->responseRepository->ResponseSuccess($data, 'User Created Successfully !');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\PUT(
     *     path="/api/v1/roles/multipleUserRoleUpdate/{id}",
     *     tags={"Module Permission"},
     *     summary="Update User",
     *     description="Update User",
     *     @OA\Parameter(name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *                          @OA\Property(property="business_id", type="integer", example=2),
     *                          @OA\Property(property="first_name", type="string", example="Shakib"),
     *                          @OA\Property(property="surname", type="string", example="Robin"),
     *                          @OA\Property(property="last_name", type="string", example="Labib"),
     *                          @OA\Property(property="username", type="string", example="shakib"),
     *                          @OA\Property(property="email", type="string", example="shakib.corp@akij.net"),
     *                          @OA\Property(property="phone_no", type="string", example="1866"),
     *                          @OA\Property(property="password", type="string", example="robinLabib"),
     *                          @OA\Property(property="language", type="string", example="en"),
     *                          @OA\Property(property="remember_token", type="string", example="token"),
     *                          @OA\Property(property="name", type="string", example="writer"),
     *              )
     *      ),
     *      operationId="multipleUserRoleUpdate",
     *      @OA\Response(response=200,description="Update Role Permissions"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function multipleUserRoleUpdate(Request $request, $id)
    {
        try {
            $data = $this->userRepository->update($id, $request);
            return $this->responseRepository->ResponseSuccess($data, 'User Information Updated Successfully !');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
