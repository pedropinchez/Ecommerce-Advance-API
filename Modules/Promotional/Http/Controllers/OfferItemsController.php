<?php

namespace Modules\Promotional\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Promotional\Http\Requests\OfferItemRequest;
use Modules\Promotional\Repositories\OfferItemRepository;

class OfferItemsController extends Controller
{
    private $offerItemRepository;
    private $responseRepository;

    public function __construct(OfferItemRepository $offerItemRepository, ResponseRepository $responseRepository)
    {
        $this->offerItemRepository = $offerItemRepository;
        $this->responseRepository  = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/offers",
     *     tags={"Offer Items"},
     *     summary="Get Offer Items",
     *     description="Get Offer Items",
     *     security={{"bearer": {}}},
     *     operationId="index",
     *     @OA\Parameter(name="search", description="search value, eg; 1", required=false, in="query", @OA\Schema(type="string")),
     *     @OA\Parameter(name="isPaginated", description="isPaginated, eg; 0", required=false, in="query", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="paginateNo", description="paginateNo, eg; 0", required=false, in="query", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="type", description="type, eg; normal_offer", required=false, in="query", @OA\Schema(type="string")),
     *     @OA\Parameter(name="business_id", description="business_id, eg; 1", required=false, in="query", @OA\Schema(type="integer")),
     *     @OA\Response( response=200, description="Get Offer Items" ),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index()
    {
        try {
            $offerItems = $this->offerItemRepository->index();
            return $this->responseRepository->ResponseSuccess($offerItems, 'Offer Item Fetched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\POST(
     *     path="/api/v1/offers",
     *     tags={"Offer Items"},
     *     summary="Create New Offer Item",
     *     description="Create New Offer Item",
     *     security={{"bearer": {}}},
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="item_id", type="integer", example=20),
     *              @OA\Property(property="current_price", type="integer", example=5000),
     *              @OA\Property(property="offer_price", type="integer", example=6500),
     *              @OA\Property(property="offer_type", type="string", example="normal_offer"),
     *              @OA\Property(property="start_date", type="string", example="2021-03-01"),
     *              @OA\Property(property="end_date", type="string", example="2021-05-01"),
     *              @OA\Property(property="is_unlimited", type="integer", example=0),
     *              @OA\Property(property="is_visible", type="integer", example=1)
     *          ),
     *      ),
     *      operationId="store",
     *      @OA\Response( response=200, description="Create New Offer Item" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param OfferItemRequest $request
     * @return Response
     */
    public function store(OfferItemRequest $request)
    {
        try {
            $data      = $request->all();
            $offerItem = $this->offerItemRepository->store($data);
            return $this->responseRepository->ResponseSuccess($offerItem, 'Offer Item Created Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/offers/{id}",
     *     tags={"Offer Items"},
     *     summary="Get Offer Item Detail",
     *     description="Get Offer Item Detail",
     *     security={{"bearer": {}}},
     *     operationId="show",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     @OA\Response( response=200, description="Get Offer Item Detail" ),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function show($id)
    {
        try {
            $offerItem= $this->offerItemRepository->show($id);
            return $this->responseRepository->ResponseSuccess($offerItem, 'Offer Item Details By ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\PUT(
     *     path="/api/v1/offers/{id}",
     *     tags={"Offer Items"},
     *     summary="Update Offer Item",
     *     description="Update Offer Item",
     *     security={{"bearer": {}}},
     *     @OA\Parameter(name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="item_id", type="integer", example=20),
     *              @OA\Property(property="current_price", type="integer", example=5000),
     *              @OA\Property(property="offer_price", type="integer", example=6500),
     *              @OA\Property(property="offer_type", type="string", example="normal_offer"),
     *              @OA\Property(property="start_date", type="string", example="2021-03-01"),
     *              @OA\Property(property="end_date", type="string", example="2021-05-01"),
     *              @OA\Property(property="is_unlimited", type="integer", example=0),
     *              @OA\Property(property="is_visible", type="integer", example=1)
     *          ),
     *      ),
     *     operationId="update",
     *     @OA\Response( response=200, description="Update Offer Item" ),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param OfferItemRequest $request
     * @param $id
     * @return Response
     */
    public function update(OfferItemRequest $request, $id)
    {
        try {
            $offerItem = $this->offerItemRepository->update($id, $request->all());
            return $this->responseRepository->ResponseSuccess($offerItem, 'Offer Item Updated Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\DELETE(
     *     path="/api/v1/offers/{id}",
     *     tags={"Offer Items"},
     *     summary="Delete Offer Item",
     *     description="Delete Offer Item",
     *     @OA\Parameter(name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     operationId="destroy",
     *     @OA\Response( response=200, description="Delete Offer Item" ),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            $offerItem = $this->offerItemRepository->destroy($id);
            return $this->responseRepository->ResponseSuccess($offerItem, 'Offer Item Deleted Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
