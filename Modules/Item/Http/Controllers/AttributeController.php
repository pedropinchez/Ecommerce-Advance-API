<?php

namespace Modules\Item\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Business\Entities\Business;
use Modules\Item\Http\Requests\AttributeRequest;
use Modules\Item\Repositories\AttributeRepository;

class AttributeController extends Controller
{
    private $attributeRepository;
    private $responseRepository;
    public function __construct(AttributeRepository $attributeRepository, ResponseRepository $responseRepository)
    {
        $this->attributeRepository = $attributeRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/attributes",
     *     tags={"Attributes"},
     *     summary="Get Attribute List",
     *     description="Get Attribute List",
     *     security={{"bearer": {}}},
     *     operationId="index",
     *     @OA\Parameter(name="search", description="search value, eg; 1", required=false, in="query", @OA\Schema(type="string")),
     *     @OA\Parameter(name="isPaginated", description="isPaginated, eg; 0", required=false, in="query", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="paginateNo", description="paginateNo, eg; 0", required=false, in="query", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="category_id", @OA\Schema(type="integer"), in="query", required=false, example=1),

     *      @OA\Response( response=200, description="Get Attribute List" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index()
    {
        try {
            $attributes = $this->attributeRepository->index();
            return $this->responseRepository->ResponseSuccess($attributes, 'Attribute Fetched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\POST(
     *     path="/api/v1/attributes",
     *     tags={"Attributes"},
     *     summary="Create New Attribute",
     *     description="Create New Attribute",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="name", type="string", example="Color"),
     *              @OA\Property(property="category_id", type="integer", example=21),
     *              @OA\Property(
     *                  property="values",
     *                      type="array",
     *                      @OA\Items(
     *                              @OA\Property(property="code", type="string", example="#902921"),
     *                              @OA\Property(property="value", type="string", example="Yellow")
     *                          ),
     *                  ),
     *              ),
     *      ),
     *     @OA\Response(response=200, description="Create New Attribute"),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function store(AttributeRequest $request)
    {
        try {
            $data = $request->all();
            $attribute = $this->attributeRepository->store($data);
            return $this->responseRepository->ResponseSuccess($attribute, 'Attribute Created Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/attributes/{id}",
     *     tags={"Attributes"},
     *     summary="Get Attribute By ID",
     *     description="Get Attribute By ID",
     *     security={{"bearer": {}}},
     *     operationId="show",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Attribute By ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function show($id)
    {
        try {
            $attribute = $this->attributeRepository->show($id);
            return $this->responseRepository->ResponseSuccess($attribute, 'Attribute Details By ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\PUT(
     *     path="/api/v1/attributes/{id}",
     *     tags={"Attributes"},
     *     summary="Update Attribute",
     *     description="Update Attribute",
     *     @OA\Parameter(name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="name", type="string", example="Color"),
     *              @OA\Property(property="category_id", type="integer", example=21),
     *              @OA\Property(
     *                  property="values",
     *                      type="array",
     *                      @OA\Items(
     *                              @OA\Property(property="code", type="string", example="#902921"),
     *                              @OA\Property(property="value", type="string", example="Yellow")
     *                          ),
     *                  ),
     *              ),
     *      ),
     *      @OA\Response( response=200, description="Update Attribute" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function update(AttributeRequest $request, $id)
    {
        try {
            $data = $request->all();
            $attribute = $this->attributeRepository->update($id, $data);
            return $this->responseRepository->ResponseSuccess($attribute, 'Attribute Updated Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\DELETE(
     *     path="/api/v1/attributes/{id}",
     *     tags={"Attributes"},
     *     summary="Delete Attribute",
     *     description="Delete Attribute",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     operationId="destroy",
     *      @OA\Response( response=200, description="Delete Attribute" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function destroy($id)
    {
        try {
            $attribute = $this->attributeRepository->destroy($id);
            return $this->responseRepository->ResponseSuccess($attribute, 'Attribute Deleted Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/attributes/business/{business_id}",
     *     tags={"Attributes"},
     *     summary="Get Attribute List of Business",
     *     description="Get Attribute List of Business",
     *     security={{"bearer": {}}},
     *     operationId="getAttributeByBusiness",
     *      @OA\Parameter( name="business_id", description="business_id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Attribute List of Business"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getAttributeByBusiness($businessId)
    {
        try {
            $attribute = $this->attributeRepository->getAttributeByBusiness($businessId);
            return $this->responseRepository->ResponseSuccess($attribute, 'Attribute By Business ID');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/attributes/business/category/{category_id}",
     *     tags={"Attributes"},
     *     summary="Get Attribute List of Category",
     *     description="Get Attribute List of Category",
     *     security={{"bearer": {}}},
     *     operationId="getAttributeByCategory",
     *      @OA\Parameter( name="business_id", description="category_id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Attribute List of Category"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getAttributeByCategory($categoryId)
    {
        try {
            $attribute = $this->attributeRepository->getAttributeByCategory($categoryId);
            return $this->responseRepository->ResponseSuccess($attribute, 'Attribute By Category ID');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/attributes/business/{business_id}/{category_id}",
     *     tags={"Attributes"},
     *     summary="Get Attribute List of Business & Category",
     *     description="Get Attribute List of Business & Category",
     *     security={{"bearer": {}}},
     *     operationId="getAttributeByCategoryAndBusiness",
     *      @OA\Parameter( name="business_id", description="business_id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Parameter( name="category_id", description="category_id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Attribute List of Business & Category"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getAttributeByCategoryAndBusiness($businessId, $categoryId)
    {
        try {
            $attribute = $this->attributeRepository->getAttributeByCategoryAndBusiness($businessId, $categoryId);
            return $this->responseRepository->ResponseSuccess($attribute, 'Attribute By Business & Category');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
