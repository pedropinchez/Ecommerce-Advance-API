<?php

namespace Modules\Promotional\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Promotional\Http\Requests\GiftCardRequest;
use Modules\Promotional\Repositories\GiftCardRepository;

class GiftCardController extends Controller
{
    private $giftCardRepository;
    private $responseRepository;
    public function __construct(GiftCardRepository $giftCardRepository, ResponseRepository $responseRepository)
    {
        $this->giftCardRepository = $giftCardRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/gift-cards",
     *     tags={"Gift Cards"},
     *     summary="Get Gift Card List",
     *     description="Get Gift Card List",
     *     security={{"bearer": {}}},
     *     operationId="index",
     *     @OA\Parameter(name="search", description="search value, eg; 1", required=false, in="query", @OA\Schema(type="string")),
     *     @OA\Parameter(name="isPaginated", description="isPaginated, eg; 0", required=false, in="query", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="paginateNo", description="paginateNo, eg; 0", required=false, in="query", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Gift Card List" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index()
    {
        try {
            $giftCards = $this->giftCardRepository->index();
            return $this->responseRepository->ResponseSuccess($giftCards, 'Gift Card Fetched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\POST(
     *     path="/api/v1/gift-cards",
     *     tags={"Gift Cards"},
     *     summary="Create New Gift Card",
     *     description="Create New Gift Card",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="title", type="string", example="Boishakhi Card"),
     *              @OA\Property(property="price_value_for", type="integer", example=5000),
     *              @OA\Property(property="change_price_value", type="integer", example=6500),
     *              @OA\Property(property="description", type="string", example="Simple Description"),
     *              @OA\Property(property="image", type="string", example="Image File", format="binary"),
     *          ),
     *      ),
     *      operationId="store",
     *      @OA\Response( response=200, description="Create New Gift Card" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param GiftCardRequest $request
     * @return Response
     */
    public function store(GiftCardRequest $request)
    {
        try {
            $data = $request->all();
            $giftCard = $this->giftCardRepository->store($data);
            return $this->responseRepository->ResponseSuccess($giftCard, 'Gift Card Created Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/gift-cards/{id}",
     *     tags={"Gift Cards"},
     *     summary="Get Gift Card By ID",
     *     description="Get Gift Card By ID",
     *     security={{"bearer": {}}},
     *     operationId="show",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Gift Card By ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function show($id)
    {
        try {
            $giftCard= $this->giftCardRepository->show($id);
            return $this->responseRepository->ResponseSuccess($giftCard, 'Gift Card Details By ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\PUT(
     *     path="/api/v1/gift-cards/{id}",
     *     tags={"Gift Cards"},
     *     summary="Update Gift Card",
     *     description="Update Gift Card",
     *     @OA\Parameter(name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="title", type="string", example="Boishakhi Card"),
     *              @OA\Property(property="price_value_for", type="integer", example=5000),
     *              @OA\Property(property="change_price_value", type="integer", example=6500),
     *              @OA\Property(property="description", type="string", example="Simple Description"),
     *              @OA\Property(property="image", type="string", example="Image File", format="binary"),
     *          ),
     *      ),
     *      operationId="update",
     *      @OA\Response( response=200, description="Update Gift Card" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param GiftCardRequest $request
     * @param $id
     * @return Response
     */
    public function update(GiftCardRequest $request, $id)
    {
        try {
            $giftCard = $this->giftCardRepository->update($id, $request->all());
            return $this->responseRepository->ResponseSuccess($giftCard, 'Gift Card Updated Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\DELETE(
     *     path="/api/v1/gift-cards/{id}",
     *     tags={"Gift Cards"},
     *     summary="Delete Gift Card",
     *     description="Delete Gift Card",
     *     @OA\Parameter(name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     operationId="destroy",
     *      @OA\Response( response=200, description="Delete Gift Card" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            $giftCard = $this->giftCardRepository->destroy($id);
            return $this->responseRepository->ResponseSuccess($giftCard, 'Gift Card Deleted Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
