<?php

namespace Modules\Sales\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Sales\Http\Requests\DiscountRequest;
use Modules\Sales\Repositories\DiscountRepository;

class DiscountController extends Controller
{
    private $discountRepository;
    private $responseRepository;
    public function __construct(DiscountRepository $discountRepository, ResponseRepository $responseRepository)
    {
        $this->discountRepository = $discountRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/discount-types",
     *     tags={"Discount Types"},
     *     summary="Get Discount Type List",
     *     description="Get Discount Type List",
     *     security={{"bearer": {}}},
     *     operationId="index",
     *      @OA\Response( response=200, description="Get Discount Type List" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index()
    {
        try {
            $discounts = $this->discountRepository->index();
            return $this->responseRepository->ResponseSuccess($discounts, 'Discount Fetched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\POST(
     *     path="/api/v1/discount-types",
     *     tags={"Discount Types"},
     *     summary="Create New Discount Type",
     *     description="Create New Discount Type",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="name", type="string"),
     *              @OA\Property(property="business_id", type="integer", example=1),
     *              @OA\Property(property="created_by", type="integer", example=1)
     *          ),
     *      ),
     *     @OA\Response( response=200, description="Create New Discount" ),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param DiscountRequest $request
     * @return Response
     */
    public function store(DiscountRequest $request)
    {
        try {
            $data = $request->all();
            $discount = $this->discountRepository->store($data);
            return $this->responseRepository->ResponseSuccess($discount, 'Discount Created Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/discount-types/{id}",
     *     tags={"Discount Types"},
     *     summary="Get Discount Type By ID",
     *     description="Get Discount Type By ID",
     *     security={{"bearer": {}}},
     *     operationId="show",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Discount Type By ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function show($id)
    {
        try {
            $discount = $this->discountRepository->show($id);
            return $this->responseRepository->ResponseSuccess($discount, 'Discount Details By ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\PUT(
     *     path="/api/v1/discount-types/{id}",
     *     tags={"Discount Types"},
     *     summary="Update Discount Type",
     *     description="Update Discount Type",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *               @OA\Property(property="name", type="string"),
     *              @OA\Property(property="business_id", type="integer", example=1),
     *              @OA\Property(property="created_by", type="integer", example=1)
     *          ),
     *      ),
     *      @OA\Response( response=200, description="Update Discount Type" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param DiscountRequest $request
     * @param $id
     * @return Response
     */
    public function update(DiscountRequest $request, $id)
    {
        try {
            $data = $request->all();
            $discount = $this->discountRepository->update($id, $data);
            return $this->responseRepository->ResponseSuccess($discount, 'Discount Updated Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\DELETE(
     *     path="/api/v1/discount-types/{id}",
     *     tags={"Discount Types"},
     *     summary="Delete Discount Type",
     *     description="Delete Discount Type",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     operationId="destroy",
     *      @OA\Response( response=200, description="Delete Discount Type" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            $discount = $this->discountRepository->destroy($id);
            return $this->responseRepository->ResponseSuccess($discount, 'Discount Deleted Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/discount-types/business/{business_id}",
     *     tags={"Discount Types"},
     *     summary="Get Discount Type List of Business",
     *     description="Get Discount Type List of Business",
     *     security={{"bearer": {}}},
     *     operationId="getDiscountByBusiness",
     *      @OA\Parameter( name="business_id", description="business_id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Discount Type List of Business"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param $businessId
     * @return Response
     */
    public function getDiscountByBusiness($businessId)
    {
        try {
            $discount = $this->discountRepository->getDiscountByBusiness($businessId);
            return $this->responseRepository->ResponseSuccess($discount, 'Discount By Business ID');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
