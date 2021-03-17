<?php

namespace Modules\Coupon\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Coupon\Http\Requests\CouponRequest;
use Modules\Coupon\Repositories\CouponRepository;

class CouponController extends Controller
{
    private $couponRepository;
    private $responseRepository;
    public function __construct(CouponRepository $couponRepository, ResponseRepository $responseRepository)
    {
        $this->couponRepository = $couponRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/coupons",
     *     tags={"Coupons"},
     *     summary="Get Coupon List",
     *     description="Get Coupon List",
     *     security={{"bearer": {}}},
     *     @OA\Parameter(name="search", description="search value, eg; 1", required=false, in="query", @OA\Schema(type="string")),
     *     @OA\Parameter(name="isPaginated", description="isPaginated, eg; 0", required=false, in="query", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="paginateNo", description="paginateNo, eg; 0", required=false, in="query", @OA\Schema(type="integer")),
     *     operationId="index",
     *      @OA\Response( response=200, description="Get Coupon List" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index()
    {
        try {
            $brands = $this->couponRepository->index();
            return $this->responseRepository->ResponseSuccess($brands, 'Coupon Fetched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\POST(
     *     path="/api/v1/coupons",
     *     tags={"Coupons"},
     *     summary="Create New Coupon",
     *     description="Create New Coupon",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="code", type="string", example="Feb21"),
     *              @OA\Property(property="description", type="string", example="Feb 21"),
     *              @OA\Property(property="image", type="string", example=""),
     *              @OA\Property(property="business_id", type="integer", example=1),
     *              @OA\Property(property="coupon_type_id", type="integer", example=1),
     *              @OA\Property(property="amount_type", type="string", example="numeric"),
     *              @OA\Property(property="coupon_amount", type="integer", example=100),
     *              @OA\Property(property="min_amount", type="integer", example=0),
     *              @OA\Property(property="max_amount", type="integer", example=0),
     *              @OA\Property(property="coupon_start_date", type="string", example="2021-01-01"),
     *              @OA\Property(property="coupon_expiry_date", type="string", example="2021-04-01"),
     *              @OA\Property(property="is_free_shiping", type="integer", example=0),
     *              @OA\Property(property="usage_limit", type="integer", example=100),
     *              @OA\Property(property="usage_count", type="integer", example=0),
     *              @OA\Property(property="usage_limit_per_user", type="integer", example=0),
     *              @OA\Property(property="is_individual_use", type="integer", example=0),
     *              @OA\Property(property="exclude_sale_items", type="string", example=""),
     *              @OA\Property(property="product_ids", type="string", example=""),
     *              @OA\Property(property="exclude_product_ids", type="string", example=""),
     *              @OA\Property(property="product_categories", type="string", example=""),
     *              @OA\Property(property="exclude_product_categories", type="string", example="")
     *          ),
     *      ),
     *     @OA\Response( response=200, description="Create New Coupon" ),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CouponRequest $request)
    {
        try {
            $brand = $this->couponRepository->store($request->all());
            return $this->responseRepository->ResponseSuccess($brand, 'Coupon Created Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/coupons/{id}",
     *     tags={"Coupons"},
     *     summary="Get Coupon By ID",
     *     description="Get Coupon By ID",
     *     security={{"bearer": {}}},
     *     operationId="show",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Coupon By ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function show($id)
    {
        try {
            $brand = $this->couponRepository->show($id);
            return $this->responseRepository->ResponseSuccess($brand, 'Coupon Details By ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\PUT(
     *     path="/api/v1/coupons/{id}",
     *     tags={"Coupons"},
     *     summary="Update Coupon",
     *     description="Update Coupon",
     *     @OA\Parameter(name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="code", type="string", example="Feb21"),
     *              @OA\Property(property="description", type="string", example="Feb 21"),
     *              @OA\Property(property="image", type="string", example=""),
     *              @OA\Property(property="business_id", type="integer", example=1),
     *              @OA\Property(property="coupon_type_id", type="integer", example=1),
     *              @OA\Property(property="amount_type", type="string", example="numeric"),
     *              @OA\Property(property="coupon_amount", type="integer", example=100),
     *              @OA\Property(property="min_amount", type="integer", example=0),
     *              @OA\Property(property="max_amount", type="integer", example=0),
     *              @OA\Property(property="coupon_start_date", type="string", example="2021-01-01"),
     *              @OA\Property(property="coupon_expiry_date", type="string", example="2021-04-01"),
     *              @OA\Property(property="is_free_shiping", type="integer", example=0),
     *              @OA\Property(property="usage_limit", type="integer", example=100),
     *              @OA\Property(property="usage_count", type="integer", example=0),
     *              @OA\Property(property="usage_limit_per_user", type="integer", example=0),
     *              @OA\Property(property="is_individual_use", type="integer", example=0),
     *              @OA\Property(property="exclude_sale_items", type="string", example=""),
     *              @OA\Property(property="product_ids", type="string", example=""),
     *              @OA\Property(property="exclude_product_ids", type="string", example=""),
     *              @OA\Property(property="product_categories", type="string", example=""),
     *              @OA\Property(property="exclude_product_categories", type="string", example="")
     *          ),
     *      ),
     *      @OA\Response( response=200, description="Update Coupon" ),
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
            $brand = $this->couponRepository->update($id, $data);
            return $this->responseRepository->ResponseSuccess($brand, 'Coupon Updated Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\DELETE(
     *     path="/api/v1/coupons/{id}",
     *     tags={"Coupons"},
     *     summary="Delete Coupon",
     *     description="Delete Coupon",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     operationId="destroy",
     *      @OA\Response( response=200, description="Delete Coupon" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function destroy($id)
    {
        try {
            $brand = $this->couponRepository->destroy($id);
            return $this->responseRepository->ResponseSuccess($brand, 'Coupon Deleted Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/coupons/business/{business_id}",
     *     tags={"Coupons"},
     *     summary="Get Coupon List of Business",
     *     description="Get Coupon List of Business",
     *     security={{"bearer": {}}},
     *     operationId="getCouponByBusiness",
     *      @OA\Parameter( name="business_id", description="business_id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Coupon List of Business"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getCouponByBusiness($businessId)
    {
        try {
            $brand = $this->couponRepository->getCouponByBusiness($businessId);
            return $this->responseRepository->ResponseSuccess($brand, 'Coupon By Business ID');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\POST(
     *     path="/api/v1/coupons/check-by/code",
     *     tags={"Coupons"},
     *     summary="Frontend - Check Coupon by coupon code",
     *     description="Frontend - Check Coupon by coupon code",
     *     security={{"bearer": {}}},
     *     operationId="checkCouponByCode",
     *      @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *                  @OA\Property(property="code", type="string", example="Bijay21"),
     *                  @OA\Property(property="carts", type="array",
     *                      @OA\Items(
     *                          @OA\Property(property="productID", type="integer", example=1),
     *                          @OA\Property(property="quantity", type="integer", example=2),
     *                      )
     *                  ),
     *           ),
     *       ),
     *      @OA\Response( response=200, description="Check Coupon by coupon code"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function checkCouponByCode(Request $request)
    {
        $request->validate(
            [
                'code'         => 'required|string',
                'order_amount' => 'nullable|numeric',
            ],
            [
                'code.required' => 'Please give coupon code',
                'order_amount.numeric' => 'Please give numeric order amount',
            ]
        );

        $code  = $request->code;
        $carts = $request->carts;

        try {
            $coupon = $this->couponRepository->checkCouponByCode($code, $carts);

            if ($coupon['status']) {
                return $this->responseRepository->ResponseSuccess($coupon, $coupon['message']);
            }
            return $this->responseRepository->ResponseError($coupon, 'Coupon is invalid', JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
