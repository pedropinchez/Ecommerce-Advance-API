<?php

namespace Modules\Item\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Item\Repositories\ItemRatingRepository;

class ItemRatingsController extends Controller
{
    private $itemRatingRepository;
    private $responseRepository;

    public function __construct(ItemRatingRepository $itemRatingRepository, ResponseRepository $responseRepository)
    {
        $this->itemRatingRepository = $itemRatingRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/item-review/get-by-item",
     *     tags={"Item Review"},
     *     summary="Get Item Review By Item ID",
     *     description="Get Item Review By Item ID",
     *     operationId="index",
     *     security={{"bearer": {}}},
     *     @OA\Parameter(name="item_id", description="item ID, eg; 1", required=true, in="query", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="user_id", description="user ID, eg; 1", required=false, in="query", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="status", description="eg; 1", required=false, in="query", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Item Review By Item ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index(Request $request)
    {
        $request->validate([
            'item_id' => 'required|numeric'
        ]);

        try {
            $ratings = $this->itemRatingRepository->get_ratings_by_item($request->item_id, $request->user_id, $request->status);
            return $this->responseRepository->ResponseSuccess($ratings, 'Item Ratings Loaded for item.');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    /**
     * @OA\POST(
     *     path="/api/v1/item-review/create",
     *     tags={"Item Review"},
     *     summary="Create New Item Review",
     *     description="Create New Item Review",
     *     operationId="store",
     *     security={{"bearer": {}}},
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="item_id", type="integer", example=1),
     *              @OA\Property(property="rating_value", type="integer", example=4),
     *              @OA\Property(property="comment", type="string", example="Good Product"),
     *              @OA\Property(property="images", type="string", example=""),
     *          ),
     *      ),
     *      @OA\Response( response=200, description="Create New Item Review" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'item_id'      => 'required|numeric',
                'rating_value' => 'required|numeric',
                'comment'      => 'nullable|string',
            ],
            [
                'item_id'      => 'Please select an item',
                'rating_value' => 'Please give a rating',
            ]
        );

        try {
            $data = $request->all();
            $review = $this->itemRatingRepository->store($data);
            return $this->responseRepository->ResponseSuccess($review, 'Successfull. Review Added');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
