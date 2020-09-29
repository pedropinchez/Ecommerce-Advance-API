<?php

namespace Modules\Supplier\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Repositories\ResponseRepository;
use Modules\Supplier\Http\Requests\SupplierRequest;
use Modules\Supplier\Repositories\SupplierRepository;

class SupplierController extends Controller
{

    public $supplierRepository;
    public $responseRepository;

    public function __construct(SupplierRepository $supplierRepository, ResponseRepository $responseRepository)
    {
        $this->supplierRepository = $supplierRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/suppliers",
     *     tags={"Supplier"},
     *     summary="Get Supplier List",
     *     description="Get Supplier List",
     *     security={{"bearer": {}}},
     *     operationId="index",
     *      @OA\Response( response=200, description="Get Supplier List" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index()
    {
        try {
            $items = $this->supplierRepository->index();
            return $this->responseRepository->ResponseSuccess($items, 'Supplier Fetched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */

    /**
     * @OA\POST(
     *     path="/api/v1/supplier/store",
     *     tags={"Supplier"},
     *     summary="Create New Supplier",
     *     description="Create New Cusotmer",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="business_id", type="integer"),
     *             @OA\Property(property="supplier_business_name", type="string"),
     *              @OA\Property(property="bin", type="string"),
     *              @OA\Property(property="name", type="string"),
     *              @OA\Property(property="tax_number", type="string"),
     *              @OA\Property(property="state", type="string"),
     *              @OA\Property(property="country", type="string"),
     *              @OA\Property(property="landmark", type="string"),
     *              @OA\Property(property="mobile", type="string"),
     *              @OA\Property(property="landline", type="string"),
     *              @OA\Property(property="alternate_number", type="string"),
     *              @OA\Property(property="pay_term_number", type="integer"),
     *              @OA\Property(property="pay_term_type", type="string"),
     *              @OA\Property(property="created_by", type="integer")
     *          )
     *      ),
     *     operationId="store",
     *      @OA\Response( response=200, description="Create New Supplier" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param SupplierRequest $request
     * @return Response
     */
    public function store(SupplierRequest $request)
    {
        try {
            $data = $request->all();
            $supplier = $this->supplierRepository->store($data);
            return $this->responseRepository->ResponseSuccess($supplier, 'Supplier created successfully');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    /**
     * @OA\GET(
     *     path="/api/v1/suppliers/{id}",
     *     tags={"Supplier"},
     *     summary="Get Supplier",
     *     description="Get Supplier",
     *     security={{"bearer": {}}},
     *     operationId="show",
     *      @OA\Response( response=200, description="Get Supplier" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param $id
     * @return Response
     */
    public function show($id)
    {
        try {
            $supplier = $this->supplierRepository->show($id);
            return $this->responseRepository->ResponseSuccess($supplier, 'Supplier  Details');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    /**
     * @OA\PUT(
     *     path="/api/v1/suppliers/{id}",
     *     tags={"Supplier"},
     *     summary="Update Supplier",
     *     description="Update Supplier",
     *     security={{"bearer": {}}},
     *     @OA\Parameter( name="intCusID", description="intCusID, eg; 1", required=true, in="query", @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="business_id", type="integer"),
     *             @OA\Property(property="supplier_business_name", type="string"),
     *              @OA\Property(property="bin", type="string"),
     *              @OA\Property(property="name", type="string"),
     *              @OA\Property(property="tax_number", type="string"),
     *              @OA\Property(property="state", type="string"),
     *              @OA\Property(property="country", type="string"),
     *              @OA\Property(property="landmark", type="string"),
     *              @OA\Property(property="mobile", type="string"),
     *              @OA\Property(property="landline", type="string"),
     *              @OA\Property(property="alternate_number", type="string"),
     *              @OA\Property(property="pay_term_number", type="integer"),
     *              @OA\Property(property="pay_term_type", type="string"),
     *              @OA\Property(property="created_by", type="integer")
     *          )
     *      ),
     *     operationId="updateMasterAccount",
     *      @OA\Response( response=200, description="Update New Supplier" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param SupplierRequest $request
     * @param $id
     * @return Response
     */
    public function update(SupplierRequest $request, $id)
    {
        try {
            $data = $request->all();
            $supplier = $this->supplierRepository->update($id, $data);
            return $this->responseRepository->ResponseSuccess($supplier, 'Supplier has been updated successfully');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    /**
     * @OA\DELETE(
     *     path="/api/v1/suppliers/{id}",
     *     tags={"Supplier"},
     *     summary="Delete Supplier",
     *     description="Delete Account",
     *     security={{"bearer": {}}},
     *     operationId="deleteSupplierAccount",
     *      @OA\Response( response=200, description="Deleted Supplier Account" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function destroy($id)
    {
        try {
            $supplier = $this->supplierRepository->destroy($id);
            if (!$supplier) {
                return $this->responseRepository->ResponseError(null, 'Supplier Not found', Response::HTTP_NOT_FOUND);
            }
            return $this->responseRepository->ResponseSuccess($supplier, 'Supplier deleted successfully');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/suppliers/business/{id}",
     *     tags={"Supplier"},
     *     summary="Get Supplier List By Business",
     *     description="Get Supplier List By Business",
     *     security={{"bearer": {}}},
     *     operationId="index",
     *      @OA\Response( response=200, description="Get Supplier List By Business" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param $businessId
     * @return Response
     */
    public function getSupplierByBusiness($businessId)
    {
        try {
            $items = $this->supplierRepository->getSupplierByBusiness($businessId);
            return $this->responseRepository->ResponseSuccess($items, 'Supplier Fetched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
