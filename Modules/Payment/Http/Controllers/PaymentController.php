<?php

namespace Modules\Payment\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Payment\Repositories\PaymentRepository;

class PaymentController extends Controller
{
    private $paymentRepository;
    private $responseRepository;

    public function __construct(PaymentRepository $paymentRepository, ResponseRepository $responseRepository)
    {
        $this->paymentRepository = $paymentRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/payments/methods/get-payment-methods",
     *     tags={"Payment"},
     *     summary="Get Payment Methods",
     *     description="Get Payment Methods",
     *     operationId="getPaymentMethods",
     *      @OA\Response( response=200, description="Get Payment Methods" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getPaymentMethods()
    {
        try {
            $categories = $this->paymentRepository->getPaymentMethods();
            return $this->responseRepository->ResponseSuccess($categories, 'Payment Methods Fetched Successfully For Frontend');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\POST(
     *     path="/api/v1/payments",
     *     tags={"Payment"},
     *     summary="New Payment",
     *     description="New Payment",
     *     security={{"bearer": {}}},
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="order_id", type="integer", example=20),
     *              @OA\Property(property="token", type="string", example="test_token"),
     *          ),
     *      ),
     *      operationId="store",
     *      @OA\Response( response=200, description="New Payment" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        try {
            $data      = $request->all();
            $offerItem = $this->paymentRepository->store($data);
            return $this->responseRepository->ResponseSuccess($offerItem, 'Payment created successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
