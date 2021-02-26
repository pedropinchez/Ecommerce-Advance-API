<?php

namespace Modules\Item\Http\Controllers;

use App\Helpers\ImageUploadHelper;
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
     *     summary="Get Product List",
     *     description="Get Product List",
     *     security={{"bearer": {}}},
     *     @OA\Parameter(name="search", description="search value, eg; 1", required=false, in="query", @OA\Schema(type="string")),
     *     @OA\Parameter(name="isPaginated", description="isPaginated, eg; 0", required=false, in="query", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="paginateNo", description="paginateNo, eg; 0", required=false, in="query", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="status", description="status, eg; 1", required=false, in="query", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="business_id", @OA\Schema(type="integer"), in="query", required=false, example=1),
     *     @OA\Parameter(name="category_id", @OA\Schema(type="integer"), in="query", required=false, example=1),
     *     @OA\Parameter(name="sub_category_id", @OA\Schema(type="integer"), in="query", required=false, example=1),
     *     @OA\Parameter(name="brand_id", @OA\Schema(type="integer"), in="query", required=false, example=1),
     *     @OA\Parameter(name="unit_id", @OA\Schema(type="integer"), in="query", required=false, example=1),
     *     operationId="index",
     *     @OA\Parameter( name="page", description="page, eg; 1", required=false, in="query", @OA\Schema(type="integer")),
     *     @OA\Parameter( name="search", description="search, eg; samsung", required=false, in="query", @OA\Schema(type="string")),
     *      @OA\Response( response=200, description="Get Product List" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index(Request $request)
    {
        $perPage = $request->page;
        try {
            $items = $this->itemRepository->indexByPaginate($perPage);
            return $this->responseRepository->ResponseSuccess($items, 'Item Fetched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/items/all/for-dropdown",
     *     tags={"Items"},
     *     summary="Get Product List For Dropdown",
     *     description="Get Product List For Dropdown",
     *     security={{"bearer": {}}},
     *     operationId="getItemsForDropdown",
     *      @OA\Response( response=200, description="Get Product List For Dropdown" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getItemsForDropdown(Request $request)
    {
        try {
            $items = $this->itemRepository->getItemsForDropdown();
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
     *              @OA\Property(property="sub_category_id2", type="integer"),
     *              @OA\Property(property="brand_id", type="integer"),
     *              @OA\Property(property="unit_id", type="integer"),
     *              @OA\Property(property="tax", type="integer"),
     *              @OA\Property(property="tax_type", type="string"),
     *              @OA\Property(property="enable_stock", type="boolean"),
     *              @OA\Property(property="alert_quantity", type="integer"),
     *              @OA\Property(property="sku", type="string"),
     *              @OA\Property(property="barcode_type", type="string"),
     *              @OA\Property(property="sku_manual", type="string"),
     *              @OA\Property(property="current_stock", type="integer", example=100),
     *              @OA\Property(property="default_selling_price", type="string", example=100),
     *              @OA\Property(property="is_offer_enable", type="integer", example=0),
     *              @OA\Property(property="offer_selling_price", type="string", example=100),
     *              @OA\Property(property="created_by", type="integer", example=1),
     *              @OA\Property(property="featured_image", type="string", format="binary"),
     *              @OA\Property(property="short_resolation_image", type="string", format="binary"),
     *             @OA\Property(property="images", type="array",
     *                  @OA\Items(
     *                      @OA\Property(property="image", type="string", example="base64 image file"),
     *                      @OA\Property(property="image_size", type="omer"),
     *                      @OA\Property(property="image_title", type="string")
     *                  )
     *              ),
     *             @OA\Property(property="attributes", type="array",
     *                  @OA\Items(
     *                      @OA\Property(property="attribute_id", type="string", example="11"),
     *                      @OA\Property(property="attribute_values", type="string", example="[1,2]")
     *                  )
     *              )
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
            $item = $this->itemRepository->store($data);
            return $this->responseRepository->ResponseSuccess($item, 'Product Created Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/items/{id}",
     *     tags={"Items"},
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
     *              @OA\Property(property="name", type="string", example="Test Product"),
     *              @OA\Property(property="business_id", type="integer", example=1),
     *              @OA\Property(property="category_id", type="integer", example=2),
     *              @OA\Property(property="sub_category_id", type="integer", example=7),
     *              @OA\Property(property="sub_category_id2", type="integer", example=20),
     *              @OA\Property(property="brand_id", type="integer", example=2),
     *              @OA\Property(property="unit_id", type="integer", example=1),
     *              @OA\Property(property="tax", type="integer", example=1),
     *              @OA\Property(property="tax_type", type="string", example="inclusive"),
     *              @OA\Property(property="enable_stock", type="integer", example=1),
     *              @OA\Property(property="alert_quantity", type="integer", example=10),
     *              @OA\Property(property="sku", type="string", example="Item100"),
     *              @OA\Property(property="barcode_type", type="string", example="C39"),
     *              @OA\Property(property="sku_manual", type="string"),
     *              @OA\Property(property="created_by", type="integer", example=1),
     *              @OA\Property(property="featured_image", type="string", format="binary"),
     *              @OA\Property(property="short_resolation_image", type="string", format="binary"),
     *              @OA\Property(property="images", type="array",
     *                  @OA\Items(type="string", format="binary")
     *              )
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
            return $this->responseRepository->ResponseSuccess($item, 'Product Deleted Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/items/business/{business_id}",
     *     tags={"Items"},
     *     summary="Get Products List of Business",
     *     description="Get Products List of Business",
     *     security={{"bearer": {}}},
     *     operationId="getItemByBusiness",
     *      @OA\Parameter( name="business_id", description="business_id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Products List of Business"),
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
     *              @OA\Property(property="image", type="array",
     *                  @OA\Items(type="string", format="binary")
     *              )
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
            $itemRow = $this->itemRepository->show($id);
            $files = $request->file('image');
            foreach ($files as $file) {
                $fileName = 'products/' . time() . '_' . $file->getClientOriginalName();
                $originalImage = Image::make($file);
                $originalImage->save($fileName);
                $image = public_path() . '/' . $fileName;
                $imageData = array(
                    'item_id' => $id,
                    'business_id' => $itemRow->business_id,
                    'image'   => $image,
                    'image_title'  => $file->getClientOriginalName(),
                    'image_size'   => $originalImage->filesize(),
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

    /**
     * @OA\GET(
     *      path="/api/v1/get-items",
     *      tags={"Frontend Items"},
     *      summary="Get Item List Frontend",
     *      description="Get Item List Frontend",
     *      operationId="index",
     *      @OA\Parameter(name="search", description="search by anything, sku, name, description", required=false, in="query", @OA\Schema(type="string")),
     *      @OA\Parameter(name="category", description="category, eg; 2", example=2, required=false, in="query", @OA\Schema(type="string")),
     *      @OA\Parameter(name="brand", description="brand, eg; 2", example=2, required=false, in="query", @OA\Schema(type="string")),
     *      @OA\Parameter(name="min_price", description="min_price, eg; 2", example=20, required=false, in="query", @OA\Schema(type="integer")),
     *      @OA\Parameter(name="max_price", description="max_price, eg; 2", example=20, required=false, in="query", @OA\Schema(type="integer")),
     *      @OA\Parameter(name="attributes", description="attributes, eg; 12:12", example=20, required=false, in="query", @OA\Schema(type="integer")),
     *      @OA\Response(response=200, description="Get Item List Frontend" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getProductList(Request $request)
    {
        try {
            $items = $this->itemRepository->getProductList($request->all());
            return $this->responseRepository->ResponseSuccess($items, 'Item Fetched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *      path="/api/v1/get-items/search",
     *      tags={"Frontend Items"},
     *      summary="Get Item Search Frontend",
     *      description="Get Item Search Frontend",
     *      operationId="searchItemFrontend",
     *      @OA\Parameter(name="search", description="search by anything, sku, name, description", required=false, in="query", @OA\Schema(type="string")),
     *      @OA\Response(response=200, description="Get Item Search Frontend" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function searchItemFrontend(Request $request)
    {
        try {
            $items = $this->itemRepository->searchItemFrontend($request->all());
            return $this->responseRepository->ResponseSuccess($items, 'Item Searched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    /**
     * @OA\GET(
     *      path="/api/v1/get-item-detail/{slug}",
     *      tags={"Frontend Items"},
     *      summary="Get Item Detail Frontend",
     *      description="Get Item Detail Frontend",
     *      operationId="getProductDetail",
     *     @OA\Parameter( name="slug", description="slug, eg; shirt-check", example="shirt-check", required=true, in="path", @OA\Schema(type="string")),
     *      @OA\Response( response=200, description="Get Item Detail Frontend" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getProductDetail($slug)
    {
        try {
            $items = $this->itemRepository->showBySlug($slug);
            return $this->responseRepository->ResponseSuccess($items, 'Item Deatils Fetched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *      path="/api/v1/get-flash-sale-items/{sortBy}",
     *      tags={"Frontend Items"},
     *      summary="Get Item List Flash Sale Frontend",
     *      description="Get Item List Flash Sale Frontend",
     *      operationId="getFlashSaleItems",
     *      @OA\Parameter( name="sortBy", description="sortBy, eg; 1", example="asc", required=true, in="path", @OA\Schema(type="string")),
     *      @OA\Response( response=200, description="Get Item List Flash Sale Frontend" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getFlashSaleItems(Request $request)
    {
        try {
            $items = $this->itemRepository->getFlashSaleItems($request->sortBy);
            return $this->responseRepository->ResponseSuccess($items, 'Flash Sales Item Fetched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
