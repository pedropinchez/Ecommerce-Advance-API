<?php

namespace Modules\Item\Http\Controllers;

use App\Helpers\ImageUploadHelper;
use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Item\Http\Requests\CategoryRequest;
use Modules\Item\Repositories\CategoryRepository;
use Image;

class CategoryController extends Controller
{
    private $categoryRepository;
    private $responseRepository;
    public function __construct(CategoryRepository $categoryRepository, ResponseRepository $responseRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/categories",
     *     tags={"Categories"},
     *     summary="Get Category List",
     *     description="Get Category List",
     *     security={{"bearer": {}}},
     *     operationId="index",
     *      @OA\Response( response=200, description="Get Category List" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index()
    {
        try {
            $categories = $this->categoryRepository->index();
            return $this->responseRepository->ResponseSuccess($categories, 'Category Fetched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\POST(
     *     path="/api/v1/categories",
     *     tags={"Categories"},
     *     summary="Create New Category",
     *     description="Create New Category",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="name", type="string", example="Clothing"),
     *              @OA\Property(property="business_id", type="integer", example=1),
     *              @OA\Property(property="short_code", type="string", example="Clothing"),
     *              @OA\Property(property="description", type="string", example="Clothing"),
     *              @OA\Property(property="short_description", type="string", example="Clothing"),
     *              @OA\Property(property="parent_id", type="integer", example=1),
     *              @OA\Property(property="created_by", type="integer", example=1),
     *              @OA\Property(property="priority", type="integer", example=1),
     *              @OA\Property(property="is_visible_homepage", type="integer", example=1),
     *              @OA\Property(property="banner", type="string", format="binary"),
     *              @OA\Property(property="image", type="string", format="binary")
     *          ),
     *      ),
     *      @OA\Response( response=200, description="Create New Category" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function store(CategoryRequest $request)
    {
        try {
            $data = $request->all();
            $category = $this->categoryRepository->store($data);
            return $this->responseRepository->ResponseSuccess($category, 'Category Created Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/categories/{id}",
     *     tags={"Category"},
     *     summary="Get Category By ID",
     *     description="Get Category By ID",
     *     security={{"bearer": {}}},
     *     operationId="show",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Category By ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function show($id)
    {
        try {
            $category = $this->categoryRepository->show($id);
            return $this->responseRepository->ResponseSuccess($category, 'Category Details By ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\PUT(
     *     path="/api/v1/categories/{id}",
     *     tags={"Categories"},
     *     summary="Update Category",
     *     description="Update Category",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="name", type="string", example="Clothing"),
     *              @OA\Property(property="business_id", type="integer", example=1),
     *              @OA\Property(property="short_code", type="string", example="Clothing"),
     *              @OA\Property(property="parent_id", type="int", example="1"),
     *              @OA\Property(property="created_by", type="int", example="1"),
     *              @OA\Property(property="banner", type="string", format="binary"),
     *              @OA\Property(property="image", type="string", format="binary")
     *          ),
     *      ),
     *      @OA\Response( response=200, description="Update Category" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function update(CategoryRequest $request, $id)
    {
        try {
            $data = $request->all();
            if ($request->hasFile('banner')){
                $file = $request->file('banner');;
                $fileName = 'categories/'.time().'_'.$file->getClientOriginalName();
                $originalImage = Image::make($file);
                $originalImage->save($fileName);
                $data['banner'] = public_path().'/'.$fileName;
            }

            if ($request->hasFile('image')){
                $file = $request->file('image');;
                $fileName = 'categories/'.time().'_'.$file->getClientOriginalName();
                $originalImage = Image::make($file);
                $originalImage->save($fileName);
                $data['image'] = public_path().'/'.$fileName;
            }
            $category = $this->categoryRepository->update($id, $data);
            return $this->responseRepository->ResponseSuccess($category, 'Category Updated Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\DELETE(
     *     path="/api/v1/categories/{id}",
     *     tags={"Categories"},
     *     summary="Delete Category",
     *     description="Delete Category",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     operationId="destroy",
     *      @OA\Response( response=200, description="Delete Category" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function destroy($id)
    {
        try {
            $category = $this->categoryRepository->destroy($id);
            return $this->responseRepository->ResponseSuccess($category, 'Category Deleted Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/categories/business/{business_id}",
     *     tags={"Categories"},
     *     summary="Get Category List of Business",
     *     description="Get Category List of Business",
     *     security={{"bearer": {}}},
     *     operationId="getCategoryByBusiness",
     *      @OA\Parameter( name="business_id", description="business_id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Category List of Business"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getCategoryByBusiness($businessId)
    {
        try {
            $category = $this->categoryRepository->getCategoryByBusiness($businessId);
            return $this->responseRepository->ResponseSuccess($category, 'Category By Business ID');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/get-category-products/{no}",
     *     tags={"Frontend Items"},
     *     summary="getCategoryByProductForHomePage",
     *     description="getCategoryByProductForHomePage",
     *     security={{"bearer": {}}},
     *     operationId="getCategoryByProductForHomePage",
     *      @OA\Parameter( name="no", description="no, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="getCategoryByProductForHomePage"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getCategoryByProductForHomePage($no)
    {
        try {
            $category = $this->categoryRepository->getCategoryByProductForHomePage($no);
            return $this->responseRepository->ResponseSuccess($category, 'Category By Product For Home Page');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
