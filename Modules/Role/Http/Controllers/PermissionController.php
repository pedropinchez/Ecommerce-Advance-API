<?php

namespace Modules\Role\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Role\Http\Requests\PermissionCheckRequest;
use Modules\Role\Repositories\PermissionRepository;

class PermissionController extends Controller
{
    public $permissionRepository;
    public $responseRepository;


    public function __construct(PermissionRepository $permissionRepository, ResponseRepository $rp)
    {
        $this->permissionRepository = $permissionRepository;
        $this->responseRepository = $rp;
    }

     /**
     * @OA\POST(
     *     path="/api/v1/roles/check-permission",
     *     tags={"Module Permission"},
     *     summary="Check Has Permission",
     *     description="Check Has Permission",
     *     security={{"bearer": {}}},
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="permisson", type="string", example="get-profile"),
     *           )
     *      ),
     *      operationId="checkPermission",
     *      @OA\Response(response=200,description="Create Role Permissions"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function checkPermission(Request $request)
    {
        $request->validate([
            'permisson' => 'required|string'
        ]);

        try {
            $data = $this->permissionRepository->checkHasPermission($request->permisson);
            return $this->responseRepository->ResponseSuccess($data, 'Permission Checked Successfully !');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, 'Not Permitted', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\POST(
     *     path="/api/v1/roles/give-permission",
     *     tags={"Module Permission"},
     *     summary="Give Permission",
     *     description="Give Permission",
     *     security={{"bearer": {}}},
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="permisson", type="string", example="get-profile"),
     *
     *           )
     *      ),
     *      operationId="givePermission",
     *      @OA\Response(response=200,description="Create Role Permissions"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function givePermission(Request $request)
    {
        $request->validate([
            'permisson' => 'required|string',
            'user_id' => 'required|numeric',
        ]);

        if(!request()->user()->hasPermissionTo('assign_permission')){
            return $this->responseRepository->ResponseError(null, 'You are not authorized to give permission', Response::HTTP_UNAUTHORIZED);
        }

        try {
            $data = $this->permissionRepository->givePermission($request->permisson, $request->user_id);
            return $this->responseRepository->ResponseSuccess($data, 'Permission Updated !');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
   /**
     * @OA\GET(
     *     path="/api/v1/roles/getAllPermission",
     *     tags={"Module Permission"},
     *     summary="Get CR Report Option Data",
     *     description="Get CR Report Option Data",
     *     security={{"bearer": {}}},
     *      operationId="getAllPermission",
     *      @OA\Response(response=200,description="Get CR Report Option Data"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */

    public function getAllPermission(){
        try {
            $data = $this->permissionRepository->getAllPermission();
            return $this->responseRepository->ResponseSuccess($data, 'Permission Updated !');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
   /**
     * @OA\GET(
     *     path="/api/v1/roles/getAllPermissionByRole/{role_id}",
     *     tags={"Module Permission"},
     *     summary="Get CR Report Option Data",
     *     description="Get CR Report Option Data",
     *     security={{"bearer": {}}},
     *      @OA\Parameter( name="role_id", description="role_id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      operationId="getAllPermissionByRole",
     *      @OA\Response(response=200,description="Get CR Report Option Data"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */

    public function getAllPermissionByRole($role_id){
        try {
            $data = $this->permissionRepository->getAllPermissionByRole($role_id);
            return $this->responseRepository->ResponseSuccess($data, 'Permission List By Role !');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

     /**
     * @OA\POST(
     *     path="/api/v1/roles/storePermission",
     *     tags={"Module Permission"},
     *     summary="Create Multiple Permissions",
     *     description="Create Multiple Permissions",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="role", type="string", example="Admin"),
     *              @OA\Property(
     *                      property="groupList",
     *                      type="array",
     *                      @OA\Items(
     *                             @OA\Property(property="name", type="string", example="user.create")
     *                         ),
     *                      ),
     *              )
     *      ),
     *      operationId="storePermission",
     *      @OA\Response(response=200,description="Create Role Permissions"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */

    public function storePermission(Request $request){
        try {
            $data = $this->permissionRepository->storePermission($request);
            return $this->responseRepository->ResponseSuccess($data, 'New Role Created Successfully !');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

}
