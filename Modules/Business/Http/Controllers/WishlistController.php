<?php

namespace Modules\Business\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Business\Http\Requests\TaxRequest;
use Modules\Business\Repositories\WishlistRepository;

class WishlistController extends Controller
{
    public $wishlistRepository;
    public $responseRepository;

    public function __construct(WishlistRepository $wishlistRepository, ResponseRepository $responseRepository)
    {
        $this->wishlistRepository = $wishlistRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/wishlist",
     *     tags={"Wishlist"},
     *     summary="Get Wishlist Items",
     *     description="Get Wishlist Items",
     *     security={{"bearer": {}}},
     *     operationId="index",
     *      @OA\Response( response=200, description="Get Wishlist Items" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index()
    {
        try {
            $wishlistes = $this->wishlistRepository->index();
            return $this->responseRepository->ResponseSuccess($wishlistes, 'Wishlist Items Fetched Successfully !');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    /**
     * @OA\POST(
     *     path="/api/v1/wishlist",
     *     tags={"Wishlist"},
     *     summary="Add Wishlist",
     *     description="Add Wishlist",
     *     security={{"bearer": {}}},
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="item_id", type="integer", example=1)
     *          )
     *      ),
     *     operationId="store",
     *      @OA\Response( response=200, description="Create New Tax" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            $wishlist = $this->wishlistRepository->store($data);
            return $this->responseRepository->ResponseSuccess($wishlist, 'Product has been added to wishlist');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
            // return $this->responseRepository->ResponseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\DELETE(
     *     path="/api/v1/wishlist",
     *     tags={"Wishlist"},
     *     summary="Delete Wishlist",
     *     description="Delete Wishlist",
     *     security={{"bearer": {}}},
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="item_id", type="integer", example=1)
     *          )
     *      ),
     *     operationId="store",
     *      @OA\Response( response=200, description="Create New Tax" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function destroy(Request $request, $id)
    {
        try {
            $wishlist = $this->wishlistRepository->store($request->id);
            return $this->responseRepository->ResponseSuccess($wishlist, 'Product has been added to wishlist');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
            // return $this->responseRepository->ResponseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
