<?php

namespace Modules\Sales\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Sales\Repositories\CartRepository;

class ShippingCostController extends Controller
{
    private $cartRepository;
    private $responseRepository;
    public function __construct(CartRepository $cartRepository, ResponseRepository $responseRepository)
    {
        $this->cartRepository = $cartRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\POST(
     *     path="/api/v1/sales/shipping-cost/by-cart",
     *     tags={"Shipping Cost"},
     *     summary="Get Shipping Cost By Cart Items",
     *     description="Get Shipping Cost By Cart Items",
     *     operationId="getShippingCostByCarts",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *                  @OA\Property(property="carts", type="array",
     *                      @OA\Items(
     *                          @OA\Property(property="productID", type="integer", example=1),
     *                          @OA\Property(property="quantity", type="integer", example=2),
     *                      )
     *                  ),
     *           ),
     *       ),
     *      @OA\Response( response=200, description="Get Shipping Cost By Cart Items" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getShippingCostByCarts(Request $request)
    {
        try {
            $shipping_cost = $this->cartRepository->getShippingCostByCarts($request->carts);
            return $this->responseRepository->ResponseSuccess($shipping_cost, 'Get Shipping Cost by cart items.');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

}
