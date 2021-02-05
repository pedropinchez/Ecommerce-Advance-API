<?php

namespace Modules\Sales\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Sales\Http\Requests\TransactionRequest;
use Modules\Sales\Repositories\InvoiceRepository;

class InvoiceController extends Controller
{
    private $invoiceRepository;
    private $responseRepository;
    public function __construct(InvoiceRepository $invoiceRepository, ResponseRepository $responseRepository)
    {
        $this->invoiceRepository = $invoiceRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/invoices",
     *     tags={"Invoices"},
     *     summary="Get Invoices List",
     *     description="Get Invoices List",
     *     security={{"bearer": {}}},
     *     @OA\Parameter(name="search", description="search value, eg; 1", required=false, in="query", @OA\Schema(type="string")),
     *     @OA\Parameter(name="isPaginated", description="isPaginated, eg; 0", required=false, in="query", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="paginateNo", description="paginateNo, eg; 0", required=false, in="query", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="status", description="status, eg; 1", required=false, in="query", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="invoice_no", description="invoice_no, eg; 1", required=false, in="query", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="business_id", @OA\Schema(type="integer"), in="query", required=false, example=1),
     *     @OA\Parameter(name="status", @OA\Schema(type="integer"), in="query", required=false, example=1),
     *     operationId="index",
     *     @OA\Response( response=200, description="Get Invoices List" ),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index(Request $request)
    {
        try {
            $invoices = $this->invoiceRepository->getInvoiceList($request);
            return $this->responseRepository->ResponseSuccess($invoices, 'Invoice Fetched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\POST(
     *     path="/api/v1/invoices",
     *     tags={"Invoices"},
     *     summary="Create New Invoice",
     *     description="Create New Invoice",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="transaction_id", type="integer", example=1)
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
            $transaction_id = $request->transaction_id;
            $discount = $this->invoiceRepository->storeInvoice($transaction_id);
            return $this->responseRepository->ResponseSuccess($discount, 'Invoice Generated Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/invoices/{id}",
     *     tags={"Invoices"},
     *     summary="Get Invoice By ID",
     *     description="Get Invoice By ID",
     *     security={{"bearer": {}}},
     *     operationId="show",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Invoice By ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function show($id)
    {
        try {
            $discount = $this->invoiceRepository->showInvoice($id);
            return $this->responseRepository->ResponseSuccess($discount, 'Invoice Details By ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\DELETE(
     *     path="/api/v1/invoices/{id}",
     *     tags={"Invoices"},
     *     summary="Delete Invoices",
     *     description="Delete Invoices",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     operationId="destroy",
     *      @OA\Response( response=200, description="Delete Invoices" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            $invoice = $this->invoiceRepository->destroyInvoice($id);
            return $this->responseRepository->ResponseSuccess($invoice, 'Invoice Deleted Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
