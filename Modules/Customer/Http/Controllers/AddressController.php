<?php

namespace Modules\Customer\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Customer\Http\Requests\AddressRequest;
use Modules\Customer\Repositories\AddressRepository;

class AddressController extends Controller
{
    private $addressRepository;
    private $responseRepository;

    public function __construct(AddressRepository $addressRepository, ResponseRepository $responseRepository)
    {
        $this->addressRepository = $addressRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/address",
     *     tags={"Addresss"},
     *     summary="Get Address List",
     *     description="Get Address List",
     *     security={{"bearer": {}}},
     *     @OA\Parameter(name="type", description="eg; billing_address/shipping_address/other", required=false, in="query", @OA\Schema(type="string")),
     *     @OA\Parameter(name="user_id", description="user id, eg; 1", required=false, in="query", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="transaction_id", description="paginateNo, eg; 0", required=false, in="query", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="transaction_id", description="paginateNo, eg; 0", required=false, in="query", @OA\Schema(type="integer")),
     *     operationId="index",
     *      @OA\Response( response=200, description="Get Address List" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index()
    {
        try {
            $data = request()->all();
            $addresses = $this->addressRepository->get_address($data);
            return $this->responseRepository->ResponseSuccess($addresses, 'Address Fetched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\POST(
     *     path="/api/v1/address",
     *     tags={"Addresss"},
     *     summary="Create New Address",
     *     description="Create New Address",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="type", type="string", example="billing_address"),
     *              @OA\Property(property="user_id", type="integer", example=0),
     *              @OA\Property(property="transaction_id", type="integer", example=null),
     *              @OA\Property(property="country_id", type="integer", example=19),
     *              @OA\Property(property="country", type="string", example="Bangladesh"),
     *              @OA\Property(property="city_id", type="integer", example=1),
     *              @OA\Property(property="city", type="string", example="Dhaka"),
     *              @OA\Property(property="area_id", type="integer", example=1),
     *              @OA\Property(property="area", type="string", example="Dhaka"),
     *              @OA\Property(property="street1", type="string", example="Dhaka"),
     *              @OA\Property(property="street2", type="string", example="Dhaka"),
     *              @OA\Property(property="is_default", type="integer", example=1),
     *          ),
     *      ),
     *     @OA\Response( response=200, description="Create New Address" ),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddressRequest $request)
    {
        try {
            $brand = $this->addressRepository->store($request->all());
            return $this->responseRepository->ResponseSuccess($brand, 'Address Created Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/address/{id}",
     *     tags={"Addresss"},
     *     summary="Get Address By ID",
     *     description="Get Address By ID",
     *     security={{"bearer": {}}},
     *     operationId="show",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Address By ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function show($id)
    {
        try {
            $brand = $this->addressRepository->show($id);
            return $this->responseRepository->ResponseSuccess($brand, 'Address Details By ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\PUT(
     *     path="/api/v1/address/{id}",
     *     tags={"Addresss"},
     *     summary="Update Address",
     *     description="Update Address",
     *     @OA\Parameter(name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="country_id", type="integer", example=19),
     *              @OA\Property(property="country", type="string", example="Bangladesh"),
     *              @OA\Property(property="city_id", type="integer", example=1),
     *              @OA\Property(property="city", type="string", example="Dhaka"),
     *              @OA\Property(property="area_id", type="integer", example=1),
     *              @OA\Property(property="area", type="string", example="Dhaka"),
     *              @OA\Property(property="street1", type="string", example="Dhaka"),
     *              @OA\Property(property="street2", type="string", example="Dhaka"),
     *              @OA\Property(property="is_default", type="integer", example=1)
     *          ),
     *      ),
     *      @OA\Response( response=200, description="Update Address" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $data = $request->all();
            $brand = $this->addressRepository->update($id, $data);
            return $this->responseRepository->ResponseSuccess($brand, 'Address Updated Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\DELETE(
     *     path="/api/v1/address/{id}",
     *     tags={"Addresss"},
     *     summary="Delete Address",
     *     description="Delete Address",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     operationId="destroy",
     *      @OA\Response( response=200, description="Delete Address" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function destroy($id)
    {
        try {
            $brand = $this->addressRepository->delete($id);
            return $this->responseRepository->ResponseSuccess($brand, 'Address Deleted Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
