<?php

namespace Modules\Sales\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Sales\Entities\TransactionSellLine;
use Modules\Sales\Http\Requests\TransactionRequest;
use Modules\Sales\Repositories\TransactionRepository;

class SalesController extends Controller
{
    private $transactionRepository;
    private $responseRepository;
    public function __construct(TransactionRepository $transactionRepository, ResponseRepository $responseRepository)
    {
        $this->transactionRepository = $transactionRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/sales",
     *     tags={"Sales"},
     *     summary="Get Sales List",
     *     description="Get Sales List",
     *     security={{"bearer": {}}},
     *     operationId="index",
     *      @OA\Response( response=200, description="Get Sales List" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index()
    {
        try {
            $discounts = $this->transactionRepository->index();
            return $this->responseRepository->ResponseSuccess($discounts, 'Sale Fetched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\POST(
     *     path="/api/v1/sales",
     *     tags={"Sales"},
     *     summary="Create New Sale",
     *     description="Create New Sale",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="business_id", type="integer", example=1),
     *              @OA\Property(property="created_by", type="integer", example=1),
     *              @OA\Property(property="type", type="string"),
     *              @OA\Property(property="status", type="string"),
     *              @OA\Property(property="delivery_status", type="string"),
     *              @OA\Property(property="payment_status", type="string"),
     *              @OA\Property(property="title", type="string"),
     *              @OA\Property(property="invoice_no", type="string"),
     *              @OA\Property(property="ref_no", type="string"),
     *              @OA\Property(property="transaction_date", type="string"),
     *              @OA\Property(property="total_before_tax", type="string"),
     *              @OA\Property(property="tax_amount", type="string"),
     *              @OA\Property(property="discount_type_id", type="string"),
     *              @OA\Property(property="tax_id", type="string"),
     *              @OA\Property(property="discount_amount", type="string"),
     *              @OA\Property(property="shipping_details", type="string"),
     *              @OA\Property(property="order_quantity", type="string"),
     *              @OA\Property(property="shipping_charges", type="string"),
     *              @OA\Property(property="additional_notes", type="string"),
     *              @OA\Property(property="staff_note", type="string"),
     *              @OA\Property(property="paid_total", type="string"),
     *              @OA\Property(property="due_total", type="string"),
     *              @OA\Property(property="final_total", type="string"),
     *              @OA\Property(property="sale_lines", type="array",
     *                  @OA\Items(
     *                      @OA\Property(property="item_id", type="integer"),
     *                      @OA\Property(property="quantity", type="string"),
     *                      @OA\Property(property="unit_price", type="string"),
     *                      @OA\Property(property="unit_price_inc_tax", type="string"),
     *                      @OA\Property(property="discount_amount", type="string"),
     *                      @OA\Property(property="item_tax", type="string")
     *                  )
     *              )
     *          ),
     *      ),
     *     @OA\Response( response=200, description="Create New Sale" ),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param TransactionRequest $request
     * @return Response
     */
    public function store(TransactionRequest $request)
    {
        try {
            $data = $request->all();
            $discount = $this->transactionRepository->store($data);
            return $this->responseRepository->ResponseSuccess($discount, 'Sale Created Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/sales/{id}",
     *     tags={"Sales"},
     *     summary="Get Sale By ID",
     *     description="Get Sale By ID",
     *     security={{"bearer": {}}},
     *     operationId="show",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Sale By ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function show($id)
    {
        try {
            $discount = $this->transactionRepository->show($id);
            return $this->responseRepository->ResponseSuccess($discount, 'Sale Details By ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\DELETE(
     *     path="/api/v1/sales/{id}",
     *     tags={"Sales"},
     *     summary="Delete Sales",
     *     description="Delete Sales",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     operationId="destroy",
     *      @OA\Response( response=200, description="Delete Sales" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            $discount = $this->transactionRepository->destroy($id);
            return $this->responseRepository->ResponseSuccess($discount, 'Sale Deleted Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/sales/business/{business_id}",
     *     tags={"Sales"},
     *     summary="Get Sales List of Business",
     *     description="Get Sales List of Business",
     *     security={{"bearer": {}}},
     *     operationId="getDiscountByBusiness",
     *      @OA\Parameter( name="business_id", description="business_id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Sales List of Business"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param $businessId
     * @return Response
     */
    public function getSaleByBusiness($businessId)
    {
        try {
            $discount = $this->transactionRepository->getTransactionByBusiness($businessId);
            return $this->responseRepository->ResponseSuccess($discount, 'Sales By Business ID');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
