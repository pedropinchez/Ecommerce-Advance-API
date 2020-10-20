<?php

namespace Modules\Item\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Image;
use Modules\Auth\Repositories\AuthRepository;
use Modules\Item\Http\Requests\ItemAttributeRequest;
use Modules\Item\Http\Requests\ItemRequest;
use Modules\Item\Repositories\ItemRepository;

class ItemController extends Controller
{
    private $itemRepository;
    private $responseRepository;
    public function __construct(ItemRepository $itemRepository, ResponseRepository $responseRepository)
    {
        $this->itemRepository = $itemRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/items",
     *     tags={"Items"},
     *     summary="Get Item List",
     *     description="Get Item List",
     *     security={{"bearer": {}}},
     *     operationId="index",
     *      @OA\Response( response=200, description="Get Item List" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index()
    {
        try {
            $items = $this->itemRepository->index();
            return $this->responseRepository->ResponseSuccess($items, 'Item Fetched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\POST(
     *     path="/api/v1/items",
     *     tags={"Items"},
     *     summary="Create New Item",
     *     description="Create New Item",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="name", type="string"),
     *              @OA\Property(property="business_id", type="integer", example=1),
     *              @OA\Property(property="category_id", type="integer"),
     *              @OA\Property(property="sub_category_id", type="integer"),
     *              @OA\Property(property="brand_id", type="integer"),
     *              @OA\Property(property="unit_id", type="integer"),
     *              @OA\Property(property="tax", type="integer"),
     *              @OA\Property(property="tax_type", type="string"),
     *              @OA\Property(property="enable_stock", type="boolean"),
     *              @OA\Property(property="alert_quantity", type="integer"),
     *              @OA\Property(property="sku", type="string"),
     *              @OA\Property(property="barcode_type", type="string"),
     *              @OA\Property(property="sku_manual", type="string"),
     *              @OA\Property(property="created_by", type="integer", example=1)
     *          ),
     *      ),
     *     @OA\Response( response=200, description="Create New Item" ),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function store(ItemRequest $request)
    {
        try {
            $data = $request->all();

            $imageData = [];
            $files = $request->file('image');
            foreach ($files as $file) {
                $fileName = 'products/'.time().'_'.$file->getClientOriginalName();
                $originalImage = Image::make($file);
                $originalImage->save($fileName);
                $image = public_path().$fileName;
                $imageData[] = $image;
            }

            if($imageData) {
                $data['image_data'] = $imageData;
            }

            $item = $this->itemRepository->store($data);
            return $this->responseRepository->ResponseSuccess($item, 'Item Created Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/items/{id}",
     *     tags={"Item"},
     *     summary="Get Item By ID",
     *     description="Get Item By ID",
     *     security={{"bearer": {}}},
     *     operationId="show",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Item By ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function show($id)
    {
        try {
            $item = $this->itemRepository->show($id);
            return $this->responseRepository->ResponseSuccess($item, 'Item Details By ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\PUT(
     *     path="/api/v1/items/{id}",
     *     tags={"Items"},
     *     summary="Update Item",
     *     description="Update Item",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="name", type="string"),
     *              @OA\Property(property="business_id", type="integer", example=1),
     *              @OA\Property(property="category_id", type="integer"),
     *              @OA\Property(property="sub_category_id", type="integer"),
     *              @OA\Property(property="brand_id", type="integer"),
     *              @OA\Property(property="unit_id", type="integer"),
     *              @OA\Property(property="tax", type="integer"),
     *              @OA\Property(property="tax_type", type="string"),
     *              @OA\Property(property="enable_stock", type="boolean"),
     *              @OA\Property(property="alert_quantity", type="integer"),
     *              @OA\Property(property="sku", type="string"),
     *              @OA\Property(property="barcode_type", type="string"),
     *              @OA\Property(property="sku_manual", type="string"),
     *              @OA\Property(property="created_by", type="integer", example=1)
     *          ),
     *      ),
     *      @OA\Response( response=200, description="Update Item" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function update(ItemRequest $request, $id)
    {
        try {
            $data = $request->all();
            $imageData = [];
            $files = $request->file('image');
            foreach ($files as $file) {
                $fileName = 'products/'.time().'_'.$file->getClientOriginalName();
                $originalImage = Image::make($file);
                $originalImage->save($fileName);
                $image = public_path().$fileName;
                $imageData[] = $image;
            }

            if($imageData) {
                $data['image_data'] = $imageData;
            }

            $item = $this->itemRepository->update($id, $data);
            return $this->responseRepository->ResponseSuccess($item, 'Item Updated Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\DELETE(
     *     path="/api/v1/items/{id}",
     *     tags={"Items"},
     *     summary="Delete Item",
     *     description="Delete Item",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     operationId="destroy",
     *      @OA\Response( response=200, description="Delete Item" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function destroy($id)
    {
        try {
            $item = $this->itemRepository->destroy($id);
            return $this->responseRepository->ResponseSuccess($item, 'Item Deleted Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/items/business/{business_id}",
     *     tags={"Items"},
     *     summary="Get Item List of Business",
     *     description="Get Item List of Business",
     *     security={{"bearer": {}}},
     *     operationId="getItemByBusiness",
     *      @OA\Parameter( name="business_id", description="business_id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Item List of Business"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getItemByBusiness($businessId)
    {
        try {
            $item = $this->itemRepository->getItemByBusiness($businessId);
            return $this->responseRepository->ResponseSuccess($item, 'Item By Business');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\PUT(
     *     path="/api/v1/items/attribute/{id}",
     *     tags={"Items"},
     *     summary="Update Item Attribute",
     *     description="Update Item Attribute",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="item_id", type="integer"),
     *              @OA\Property(property="attribute_id", type="integer", example=1),
     *              @OA\Property(property="business_id", type="integer"),
     *              @OA\Property(property="attribute_values", type="string")
     *          ),
     *      ),
     *      @OA\Response( response=200, description="Update Item Attribute" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function updateItemAttribute(ItemAttributeRequest $request, $id)
    {
        try {
            $data = $request->all();
            $item = $this->itemRepository->updateItemAttribute($id, $data);
            return $this->responseRepository->ResponseSuccess($item, 'Item Updated Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/items/category/{category_id}",
     *     tags={"Items"},
     *     summary="Get Item List of Category",
     *     description="Get Item List of Category",
     *     security={{"bearer": {}}},
     *     operationId="getItemByCategory",
     *      @OA\Parameter( name="category_id", description="category_id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Item List of Category"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getItemByCategory($categoryId)
    {
        try {
            $item = $this->itemRepository->getItemByCategory($categoryId);
            return $this->responseRepository->ResponseSuccess($item, 'Item By Category');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/items/subcategory/{sub_category_id}",
     *     tags={"Items"},
     *     summary="Get Item List of Sub Category",
     *     description="Get Item List of Sub Category",
     *     security={{"bearer": {}}},
     *     operationId="getItemBySubCategory",
     *      @OA\Parameter( name="sub_category_id", description="sub_category_id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Item List of Sub Category"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getItemBySubCategory($subCategoryId)
    {
        try {
            $item = $this->itemRepository->getItemBySubCategory($subCategoryId);
            return $this->responseRepository->ResponseSuccess($item, 'Item By Sub Category');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/items/brand/{brand_id}",
     *     tags={"Items"},
     *     summary="Get Item List of Brand",
     *     description="Get Item List of Brand",
     *     security={{"bearer": {}}},
     *     operationId="getItemByBrand",
     *      @OA\Parameter( name="brand_id", description="brand_id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Item List of Brand"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getItemByBrand($brandId)
    {
        try {
            $item = $this->itemRepository->getItemByBrand($brandId);
            return $this->responseRepository->ResponseSuccess($item, 'Item By Brand');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\POST(
     *     path="/api/v1/items/{id}/upload",
     *     tags={"Items"},
     *     summary="Upload New Image to Item",
     *     description="Upload New Image to Item",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="image[]", type="integer", example=1)
     *          ),
     *      ),
     *     @OA\Response( response=200, description="Upload New Image to Item" ),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function uploadFile(Request $request, $id)
    {
        try {
            $item = null;
            $files = $request->file('image');
            foreach ($files as $file) {
                $fileName = 'products/'.time().'_'.$file->getClientOriginalName();
                $originalImage = Image::make($file);
                $originalImage->save($fileName);
                $image = public_path().$fileName;
                $imageData = array(
                    'item_id' => $id,
                    'file_name'   => $image
                );

                $item = $this->itemRepository->uploadImage($imageData);
            }
            return $this->responseRepository->ResponseSuccess($item, 'Item Image Uploaded Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\DELETE(
     *     path="/api/v1/items/image/{id}/delete",
     *     tags={"Items"},
     *     summary="Delete Item Image",
     *     description="Delete Item Image",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     operationId="destroyImage",
     *      @OA\Response( response=200, description="Delete Item Image" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function destroyImage($id)
    {
        try {
            $item = $this->itemRepository->destroyImage($id);
            return $this->responseRepository->ResponseSuccess($item, 'Item Image Deleted Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
