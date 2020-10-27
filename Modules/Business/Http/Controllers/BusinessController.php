<?php

namespace Modules\Business\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Business\Repositories\BusinessRepository;

class BusinessController extends Controller
{
    public $businessRepository;
    public $responseRepository;

    public function __construct(BusinessRepository $businessRepository, ResponseRepository $responseRepository)
    {
        $this->businessRepository = $businessRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/business",
     *     tags={"Business"},
     *     summary="Get Business List",
     *     description="Get Business List",
     *     security={{"bearer": {}}},
     *     operationId="index",
     *      @OA\Response( response=200, description="Get Business List" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index()
    {
        try {
            $businesses = $this->businessRepository->all();
            return $this->responseRepository->ResponseSuccess($businesses, 'Business List');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null,  $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    /**
     * @OA\POST(
     *     path="/api/v1/business",
     *     tags={"Business"},
     *     summary="Register New Business",
     *     description="Register New Business",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="name", type="string"),
     *              @OA\Property(property="bin", type="string"),
     *              @OA\Property(property="start_date", type="string", example="2020-01-01"),
     *              @OA\Property(property="tax_label_1", type="string", example="Tax"),
     *              @OA\Property(property="tax_label_2", type="string", example="Tax"),
     *              @OA\Property(property="tax_number_1", type="string", example="Tax"),
     *              @OA\Property(property="tax_number_2", type="string"),
     *              @OA\Property(property="default_profit_percent", type="integer"),
     *              @OA\Property(property="owner_id", type="string", example=1),
     *              @OA\Property(property="time_zone", type="string"),
     *              @OA\Property(property="fy_start_month", type="integer", example=1),
     *              @OA\Property(property="default_sales_discount", type="integer", example=10),
     *              @OA\Property(property="accounting_method", type="string", example="FIFO"),
     *              @OA\Property(property="sell_price_tax", type="string", example="includes"),
     *              @OA\Property(property="currency_id", type="integer", example=2),
     *              @OA\Property(property="logo", type="string"),
     *              @OA\Property(property="sku_prefix", type="string"),
     *              @OA\Property(property="enable_tooltip", type="boolean", example=true)
     *          )
     *      ),
     *     operationId="store",
     *      @OA\Response( response=200, description="Create New Business" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function store(Request $request)
    {
        try {
            $business = $this->businessRepository->create($request);
            return $this->responseRepository->ResponseSuccess($business, 'Business Created');
        } catch (\Exception $e) {
            // return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
            return $this->responseRepository->ResponseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/business/{id}",
     *     tags={"Business"},
     *     summary="Get Business By ID",
     *     description="Get Business By ID",
     *     security={{"bearer": {}}},
     *     operationId="show",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Business By ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function show($id)
    {
        try {
            $business = $this->businessRepository->findBusinessById($id);
            return $this->responseRepository->ResponseSuccess($business, 'Business Details By ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/business/bin/{bin}",
     *     tags={"Business"},
     *     summary="Get Business By BIN",
     *     description="Get Business By BIN",
     *     security={{"bearer": {}}},
     *     operationId="getBusinessByBin",
     *     @OA\Parameter( name="bin", description="bin, eg; string", required=true, in="path", @OA\Schema(type="string")),
     *      @OA\Response( response=200, description="Get Business By BIN" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getBusinessByBin($BIN)
    {
        try {
            $business = $this->businessRepository->findBusinessByBIN($BIN);
            return $this->responseRepository->ResponseSuccess($business, 'Business Details By BIN');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    /**
     * @OA\PUT(
     *     path="/api/v1/business/{id}",
     *     tags={"Business"},
     *     summary="Update Business",
     *     description="Update Business",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="name", type="string"),
     *              @OA\Property(property="bin", type="string"),
     *              @OA\Property(property="start_date", type="string", example="2020-01-01"),
     *              @OA\Property(property="tax_label_1", type="string", example="Tax"),
     *              @OA\Property(property="tax_label_2", type="string", example="Tax"),
     *              @OA\Property(property="tax_number_1", type="string", example="Tax"),
     *              @OA\Property(property="tax_number_2", type="string"),
     *              @OA\Property(property="default_profit_percent", type="integer"),
     *              @OA\Property(property="owner_id", type="string", example=1),
     *              @OA\Property(property="time_zone", type="string"),
     *              @OA\Property(property="fy_start_month", type="integer", example=1),
     *              @OA\Property(property="default_sales_discount", type="integer", example=10),
     *              @OA\Property(property="accounting_method", type="string", example="FIFO"),
     *              @OA\Property(property="sell_price_tax", type="string", example="includes"),
     *              @OA\Property(property="currency_id", type="integer", example=2),
     *              @OA\Property(property="logo", type="string"),
     *              @OA\Property(property="sku_prefix", type="string"),
     *              @OA\Property(property="enable_tooltip", type="boolean", example=true)
     *          )
     *      ),
     *     operationId="update",
     *      @OA\Response( response=200, description="Update Business" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function update(Request $request, $id)
    {
        try {
            $business = $this->businessRepository->updateBusiness($request, $id);
            if (is_null($business)) {
                return $this->responseRepository->ResponseError(null, 'No Business Found', Response::HTTP_NOT_FOUND);
            }
            return $this->responseRepository->ResponseSuccess($business, 'Business Updated');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
            // return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\DELETE(
     *     path="/api/v1/business/{id}",
     *     tags={"Business"},
     *     summary="Delete Business",
     *     description="Delete Business",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     operationId="destroy",
     *      @OA\Response( response=200, description="Delete Business" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function destroy($id)
    {
        try {
            $business = $this->businessRepository->deleteBusinessAccount($id);
            if (is_null($business)) {
                return $this->responseRepository->ResponseError(null, 'No Business Found', Response::HTTP_NOT_FOUND);
            }
            return $this->responseRepository->ResponseSuccess($business, 'Business has been deleted successfully');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
