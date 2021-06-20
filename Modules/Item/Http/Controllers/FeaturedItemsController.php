<?php

namespace Modules\Item\Http\Controllers;
use Illuminate\Routing\Controller;

use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Modules\Item\Http\Requests\FeaturedItemRequest;
use Modules\Item\Repositories\FeaturedItemRepository;

class FeaturedItemsController extends Controller
{
    private $featuredItemRepository;
    private $responseRepository;

    public function __construct(FeaturedItemRepository $featuredItemRepository, ResponseRepository $responseRepository)
    {
        $this->featuredItemRepository = $featuredItemRepository;
        $this->responseRepository     = $responseRepository;
    }

    /**
     * @OA\POST(
     *     path="/api/v1/items/featured/toggle",
     *     tags={"Items"},
     *     summary="Toggle Featured Item",
     *     description="Create or Delete a featured item",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="item_id", type="integer", example=2),
     *          ),
     *      ),
     *     @OA\Response( response=200, description="Create or Delete a featured item" ),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function toggleFeaturedItem(FeaturedItemRequest $request)
    {
        $data     = $request->all();
        $response = $this->featuredItemRepository->createOrDelete($data);
        return $response;

        if ( ! $response['status'] )
            return $this->responseRepository->ResponseError(null, $response['message'], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);

        return $this->responseRepository->ResponseSuccess(null, $response['message']);
    }
}
