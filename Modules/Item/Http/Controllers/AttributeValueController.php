<?php

namespace Modules\Item\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Item\Http\Requests\AttributeValueRequest;
use Modules\Item\Repositories\AttributeValueRepository;

class AttributeValueController extends Controller
{
    private $attributeValueRepository;
    private $responseRepository;
    public function __construct(AttributeValueRepository $attributeValueRepository, ResponseRepository $responseRepository)
    {
        $this->attributeValueRepository = $attributeValueRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/attributes/values",
     *     tags={"Attributes"},
     *     summary="Get Attribute Value List",
     *     description="Get Attribute Value List",
     *     security={{"bearer": {}}},
     *     operationId="index",
     *      @OA\Response( response=200, description="Get Attribute Value List" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index()
    {
        try {
            $attributes = $this->attributeValueRepository->index();
            return $this->responseRepository->ResponseSuccess($attributes, 'Attribute Value Fetched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\POST(
     *     path="/api/v1/attributes/values",
     *     tags={"Attributes"},
     *     summary="Create New Attribute Value",
     *     description="Create New Attribute Value",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="code", type="string", example="color"),
     *              @OA\Property(property="value", type="string", example="#ffffff"),
     *              @OA\Property(property="attribute_id", type="integer", example=1)
     *          ),
     *      ),
     *     @OA\Response( response=200, description="Create New Attribute Value" ),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function store(AttributeValueRequest $request)
    {
        try {
            $data = $request->all();
            $attribute = $this->attributeValueRepository->store($data);
            return $this->responseRepository->ResponseSuccess($attribute, 'Attribute Value Created Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/attributes/values/{id}",
     *     tags={"Attribute"},
     *     summary="Get Attribute Value By ID",
     *     description="Get Attribute Value By ID",
     *     security={{"bearer": {}}},
     *     operationId="show",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Attribute Value By ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function show($id)
    {
        try {
            $attribute = $this->attributeValueRepository->show($id);
            return $this->responseRepository->ResponseSuccess($attribute, 'Attribute Value Details By ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\PUT(
     *     path="/api/v1/attributes/values/{id}",
     *     tags={"Attributes"},
     *     summary="Update Attribute Value",
     *     description="Update Attribute Value",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="code", type="string"),
     *              @OA\Property(property="value", type="string"),
     *              @OA\Property(property="attribute_id", type="integer", example=1)
     *          ),
     *      ),
     *      @OA\Response( response=200, description="Update Attribute Value" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function update(AttributeValueRequest $request, $id)
    {
        try {
            $data = $request->all();
            $attribute = $this->attributeValueRepository->update($id, $data);
            return $this->responseRepository->ResponseSuccess($attribute, 'Attribute Value Updated Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\DELETE(
     *     path="/api/v1/attributes/values/{id}",
     *     tags={"Attributes"},
     *     summary="Delete Attribute Value",
     *     description="Delete Attribute Value",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     operationId="destroy",
     *      @OA\Response( response=200, description="Delete Attribute Value" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function destroy($id)
    {
        try {
            $attribute = $this->attributeValueRepository->destroy($id);
            return $this->responseRepository->ResponseSuccess($attribute, 'Attribute Value Deleted Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/attributes/values/{attribute_id}",
     *     tags={"Attributes"},
     *     summary="Get Attribute Value List of Business",
     *     description="Get Attribute Value List of Business",
     *     security={{"bearer": {}}},
     *     operationId="getAttributeValueByAttribute",
     *      @OA\Parameter( name="business_id", description="attribute_id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Attribute Value List of Attribute"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getAttributeValueByAttribute($attributeId)
    {
        try {
            $attribute = $this->attributeValueRepository->getAttributeValueByAttribute($attributeId);
            return $this->responseRepository->ResponseSuccess($attribute, 'Attribute Value By Attribute ID');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
