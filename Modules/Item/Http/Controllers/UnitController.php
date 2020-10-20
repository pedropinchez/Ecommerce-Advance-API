<?php

namespace Modules\Item\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Item\Http\Requests\UnitRequest;
use Modules\Item\Repositories\UnitRepository;

class UnitController extends Controller
{
    private $unitRepository;
    private $responseRepository;
    public function __construct(UnitRepository $unitRepository, ResponseRepository $responseRepository)
    {
        $this->unitRepository = $unitRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/units",
     *     tags={"Units"},
     *     summary="Get Unit List",
     *     description="Get Unit List",
     *     security={{"bearer": {}}},
     *     operationId="index",
     *      @OA\Response( response=200, description="Get Unit List" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index()
    {
        try {
            $units = $this->unitRepository->index();
            return $this->responseRepository->ResponseSuccess($units, 'Unit Fetched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\POST(
     *     path="/api/v1/units",
     *     tags={"Units"},
     *     summary="Create New Unit",
     *     description="Create New Unit",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="actual_name", type="string", example="Kilo gram"),
     *              @OA\Property(property="business_id", type="integer", example=1),
     *              @OA\Property(property="short_name", type="string", example="kg"),
     *              @OA\Property(property="allow_decimal", type="boolean", example="true"),
     *              @OA\Property(property="created_by", type="int", example="1")
     *          ),
     *      ),
     *      @OA\Response( response=200, description="Create New Unit" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function store(UnitRequest $request)
    {
        try {
            $data = $request->all();
            $unit = $this->unitRepository->store($data);
            return $this->responseRepository->ResponseSuccess($unit, 'Unit Created Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/units/{id}",
     *     tags={"Unit"},
     *     summary="Get Unit By ID",
     *     description="Get Unit By ID",
     *     security={{"bearer": {}}},
     *     operationId="show",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Unit By ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function show($id)
    {
        try {
            $unit = $this->unitRepository->show($id);
            return $this->responseRepository->ResponseSuccess($unit, 'Unit Details By ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\PUT(
     *     path="/api/v1/units/{id}",
     *     tags={"Units"},
     *     summary="Update Unit",
     *     description="Update Unit",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="actual_name", type="string", example="Kilo gram"),
     *              @OA\Property(property="business_id", type="integer", example=1),
     *              @OA\Property(property="short_name", type="string", example="kg"),
     *              @OA\Property(property="allow_decimal", type="boolean", example="true"),
     *              @OA\Property(property="created_by", type="int", example="1")
     *          ),
     *      ),
     *      @OA\Response( response=200, description="Update Unit" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function update(UnitRequest $request, $id)
    {
        try {
            $data = $request->all();
            $unit = $this->unitRepository->update($id, $data);
            return $this->responseRepository->ResponseSuccess($unit, 'Unit Updated Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\DELETE(
     *     path="/api/v1/units/{id}",
     *     tags={"Units"},
     *     summary="Delete Unit",
     *     description="Delete Unit",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     operationId="destroy",
     *      @OA\Response( response=200, description="Delete Unit" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function destroy($id)
    {
        try {
            $unit = $this->unitRepository->destroy($id);
            return $this->responseRepository->ResponseSuccess($unit, 'Unit Deleted Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/units/business/{business_id}",
     *     tags={"Units"},
     *     summary="Get Unit List of Business",
     *     description="Get Unit List of Business",
     *     security={{"bearer": {}}},
     *     operationId="getUnitByBusiness",
     *      @OA\Parameter( name="business_id", description="business_id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Unit List of Business"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getUnitByBusiness($businessId)
    {
        try {
            $unit = $this->unitRepository->getUnitByBusiness($businessId);
            return $this->responseRepository->ResponseSuccess($unit, 'Unit By Business ID');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
