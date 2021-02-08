<?php

namespace Modules\Coupon\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Coupon\Repositories\CouponRepository;

class CouponTypeController extends Controller
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
     *     path="/api/v1/coupons/types/list",
     *     tags={"Coupons"},
     *     summary="Get Coupon Types List",
     *     description="Get Coupon Types List",
     *     security={{"bearer": {}}},
     *     operationId="getCouponTypes",
     *      @OA\Response( response=200, description="Get Coupon Types List" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getCouponTypes()
    {
        try {
            $brands = $this->couponRepository->getCouponTypes();
            return $this->responseRepository->ResponseSuccess($brands, 'Coupon Types Fetched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
