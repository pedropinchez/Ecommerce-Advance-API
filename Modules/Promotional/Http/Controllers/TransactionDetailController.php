<?php

namespace Modules\Promotional\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Promotional\Http\Requests\GiftCardTransactionRequest;
use Modules\Promotional\Http\Requests\VoucherTransactionRequest;
use Modules\Promotional\Repositories\TransactionDetailsRepository;

class TransactionDetailController extends Controller
{
    private $transactionDetailsRepository;
    private $responseRepository;
    public function __construct(TransactionDetailsRepository $transactionDetailsRepository, ResponseRepository $responseRepository)
    {
        $this->transactionDetailsRepository = $transactionDetailsRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\POST(
     *     path="/api/v1/giftcards/transactions",
     *     tags={"Gift Cards"},
     *     summary="Purchase New Gift Card",
     *     description="Purchase New Gift Card",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="business_id", type="integer"),
     *              @OA\Property(property="user_id", type="integer"),
     *              @OA\Property(property="gift_card_id", type="integer"),
     *              @OA\Property(property="order_quantity", type="string"),
     *              @OA\Property(property="paid_total", type="string"),
     *              @OA\Property(property="payment_status", type="string")
     *          ),
     *      ),
     *      operationId="giftCardStore",
     *      @OA\Response( response=200, description="Purchase New Gift Card " ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param GiftCardTransactionRequest $request
     * @return Response
     */
    public function giftCardStore(GiftCardTransactionRequest $request)
    {
        try {
            $data = $request->all();
            $data['transaction_date'] = date('Y-m-d');
            $data['type'] = 'gift_card';
            $data['created_by'] = $data['user_id'];
            $giftCard = $this->transactionDetailsRepository->giftCardStore($data);
            return $this->responseRepository->ResponseSuccess($giftCard, 'Gift Card Purchased Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\POST(
     *     path="/api/v1/vouchers/transactions",
     *     tags={"Vouchers"},
     *     summary="Purchase New Voucher",
     *     description="Purchase New Voucher",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="business_id", type="integer"),
     *              @OA\Property(property="user_id", type="integer"),
     *              @OA\Property(property="voucher_id", type="integer"),
     *              @OA\Property(property="order_quantity", type="string"),
     *              @OA\Property(property="paid_total", type="string"),
     *              @OA\Property(property="payment_status", type="string")
     *          ),
     *      ),
     *      operationId="voucherStore",
     *      @OA\Response( response=200, description="Purchase New Voucher " ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param VoucherTransactionRequest $request
     * @return Response
     */
    public function voucherStore(VoucherTransactionRequest $request)
    {
        try {
            $data = $request->all();
            $data['transaction_date'] = date('Y-m-d');
            $data['type'] = 'gift_card';
            $data['created_by'] = $data['user_id'];
            $giftCard = $this->transactionDetailsRepository->voucherStore($data);
            return $this->responseRepository->ResponseSuccess($giftCard, 'Voucher Purchased Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/giftcards/user/{id}",
     *     tags={"Gift Cards"},
     *     summary="Get Gift Card By Customer ID",
     *     description="Get Gift Card By Customer ID",
     *     security={{"bearer": {}}},
     *     operationId="getGiftCardByCustomer",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Gift Card By Customer ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param $id
     * @return Response
     */
    public function getGiftCardByCustomer($id)
    {
        try {
            $giftCard= $this->transactionDetailsRepository->getGiftCardByCustomer($id);
            return $this->responseRepository->ResponseSuccess($giftCard, 'Gift Card Details By Customer ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/giftcards/user/{id}",
     *     tags={"Vocuhers"},
     *     summary="Get Voucher By Customer ID",
     *     description="Get Voucher By Customer ID",
     *     security={{"bearer": {}}},
     *     operationId="getVoucherByCustomer",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Voucher By Customer ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param $id
     * @return Response
     */
    public function getVoucherByCustomer($id)
    {
        try {
            $giftCard= $this->transactionDetailsRepository->getVoucherByCustomer($id);
            return $this->responseRepository->ResponseSuccess($giftCard, 'Gift Card Details By Customer ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\PUT(
     *     path="/api/v1/giftcards/transactions/{id}",
     *     tags={"Gift Cards"},
     *     summary="Update Gift Card / Voucher Payment Status",
     *     description="Update Gift Card / Voucher Payment Status",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="payment_status", type="string", example="paid")
     *          ),
     *      ),
     *      operationId="updatePaymentStatus",
     *      @OA\Response( response=200, description="Update Gift Card" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param GiftCardTransactionRequest $request
     * @param $id
     * @return Response
     */
    public function updatePaymentStatus(GiftCardTransactionRequest $request, $id)
    {
        try {
            $data = $request->all();
            $giftCard = $this->transactionDetailsRepository->updatePaymentStatus($id, $data);
            return $this->responseRepository->ResponseSuccess($giftCard, 'Payment Updated Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
