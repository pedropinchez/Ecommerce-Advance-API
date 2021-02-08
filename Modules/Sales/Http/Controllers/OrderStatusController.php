<?php

namespace Modules\Sales\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Sales\Repositories\InvoiceStatusRepository;
use Modules\Sales\Repositories\OrderStatusRepository;

class OrderStatusController extends Controller
{
    private $invoiceStatusRepository;
    private $orderStatusRepository;
    private $responseRepository;
    public function __construct(InvoiceStatusRepository $invoiceStatusRepository, OrderStatusRepository $orderStatusRepository, ResponseRepository $responseRepository)
    {
        $this->orderStatusRepository = $orderStatusRepository;
        $this->invoiceStatusRepository = $invoiceStatusRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/sales/order-lifecycle/{transaction_id}",
     *     tags={"Order Status"},
     *     summary="Get Order Status By Transaction ID",
     *     description="Get Order Status By Transaction ID",
     *     security={{"bearer": {}}},
     *     operationId="getOrderStatusByTransactionID",
     *     @OA\Parameter(name="transaction_id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response(response=200, description="Get Order Status By Transaction ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getOrderStatusByTransactionID($id)
    {
        try {
            $discount = $this->orderStatusRepository->getOrderStatusByTransaction($id);
            return $this->responseRepository->ResponseSuccess($discount, 'Get Order Status By Transaction ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    /**
     * @OA\GET(
     *     path="/api/v1/sales/invoice-lifecycle/{invoice_id}",
     *     tags={"Order Status"},
     *     summary="Get Invoice Status By Invoice ID",
     *     description="Get Invoice Status By Invoice ID",
     *     security={{"bearer": {}}},
     *     operationId="getInvoiceStatusByInvoiceID",
     *     @OA\Parameter(name="invoice_id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response(response=200, description="Get Invoice Status By Invoice ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getInvoiceStatusByInvoiceID($id)
    {
        try {
            $discount = $this->invoiceStatusRepository->getInvoiceStatusByInvoice($id);
            return $this->responseRepository->ResponseSuccess($discount, 'Get Invoice Status By Invoice ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
