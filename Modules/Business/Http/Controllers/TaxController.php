<?php

namespace Modules\Business\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Business\Http\Requests\TaxRequest;
use Modules\Business\Repositories\TaxRepository;

class TaxController extends Controller
{
    public $taxRepository;
    public $responseRepository;

    public function __construct(TaxRepository $taxRepository, ResponseRepository $responseRepository)
    {
        $this->taxRepository = $taxRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/tax",
     *     tags={"Tax"},
     *     summary="Get Tax List",
     *     description="Get Tax List",
     *     security={{"bearer": {}}},
     *     operationId="index",
     *      @OA\Response( response=200, description="Get Tax List" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index()
    {
        try {
            $taxes = $this->taxRepository->index();
            return $this->responseRepository->ResponseSuccess($taxes, 'Tax List');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    /**
     * @OA\POST(
     *     path="/api/v1/tax",
     *     tags={"Tax"},
     *     summary="Register New Tax",
     *     description="Register New Tax",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="name", type="string", example="Tax"),
     *              @OA\Property(property="business_id", type="integer"),
     *              @OA\Property(property="start_date", type="string", example="2020-01-01"),
     *              @OA\Property(property="calculation_type", type="string", example="Tax"),
     *              @OA\Property(property="amount", type="string", example="10.00"),
     *              @OA\Property(property="is_tax_group", type="boolean"),
     *              @OA\Property(property="rounding_type", type="string"),
     *              @OA\Property(property="created_by", type="integer", example=1)
     *          )
     *      ),
     *     operationId="store",
     *      @OA\Response( response=200, description="Create New Tax" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function store(TaxRequest $request)
    {
        try {
            $data = $request->all();
            $tax = $this->taxRepository->store($data);
            return $this->responseRepository->ResponseSuccess($tax, 'Tax Created');
        } catch (\Exception $e) {
            // return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
            return $this->responseRepository->ResponseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/tax/{id}",
     *     tags={"Tax"},
     *     summary="Get Tax By ID",
     *     description="Get Tax By ID",
     *     security={{"bearer": {}}},
     *     operationId="show",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Tax By ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function show($id)
    {
        try {
            $tax = $this->taxRepository->show($id);
            return $this->responseRepository->ResponseSuccess($tax, 'Tax Details By ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\PUT(
     *     path="/api/v1/tax/{id}",
     *     tags={"Tax"},
     *     summary="Update Tax",
     *     description="Update Tax",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="name", type="string", example="Tax"),
     *              @OA\Property(property="business_id", type="integer"),
     *              @OA\Property(property="start_date", type="string", example="2020-01-01"),
     *              @OA\Property(property="calculation_type", type="string", example="Tax"),
     *              @OA\Property(property="amount", type="string", example="10.00"),
     *              @OA\Property(property="is_tax_group", type="boolean"),
     *              @OA\Property(property="rounding_type", type="string"),
     *              @OA\Property(property="created_by", type="integer", example=1)
     *          )
     *      ),
     *     operationId="update",
     *      @OA\Response( response=200, description="Update Tax" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function update(TaxRequest $request, $id)
    {
        try {
            $data =  $request->all();
            $tax = $this->taxRepository->update($id, $data);
            if (is_null($tax)) {
                return $this->responseRepository->ResponseError(null, 'No Tax Found', Response::HTTP_NOT_FOUND);
            }
            return $this->responseRepository->ResponseSuccess($tax, 'Tax Updated');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\DELETE(
     *     path="/api/v1/tax/{id}",
     *     tags={"Tax"},
     *     summary="Delete Tax",
     *     description="Delete Tax",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     operationId="destroy",
     *      @OA\Response( response=200, description="Delete Tax" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function destroy($id)
    {
        try {
            $tax = $this->taxRepository->destroy($id);
            if (is_null($tax)) {
                return $this->responseRepository->ResponseError(null, 'No Tax Found', Response::HTTP_NOT_FOUND);
            }
            return $this->responseRepository->ResponseSuccess($tax, 'Tax has been deleted successfully');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/tax/business/{business_id}",
     *     tags={"Tax"},
     *     summary="Get Tax By Business",
     *     description="Get Tax By Business",
     *     security={{"bearer": {}}},
     *     operationId="getTaxByBusiness",
     *     @OA\Parameter( name="business_id", description="business_id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Tax By Business" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getTaxByBusiness($businessId)
    {
        try {
            $tax = $this->taxRepository->getTaxByBusiness($businessId);
            return $this->responseRepository->ResponseSuccess($tax, 'Tax Details By Business');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
