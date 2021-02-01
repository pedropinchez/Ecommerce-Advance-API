<?php

namespace Modules\Item\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Item\Http\Requests\BrandRequest;
use Modules\Item\Repositories\BrandRepository;
use Intervention\Image\ImageManagerStatic as Image;

class BrandController extends Controller
{
    private $brandRepository;
    private $responseRepository;
    public function __construct(BrandRepository $brandRepository, ResponseRepository $responseRepository)
    {
        $this->brandRepository = $brandRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/brands",
     *     tags={"Brands"},
     *     summary="Get Brand List",
     *     description="Get Brand List",
     *     security={{"bearer": {}}},
     *     @OA\Parameter(name="search", description="search value, eg; 1", required=false, in="query", @OA\Schema(type="string")),
     *     @OA\Parameter(name="isPaginated", description="isPaginated, eg; 0", required=false, in="query", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="paginateNo", description="paginateNo, eg; 0", required=false, in="query", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="status", description="status, eg; 1", required=false, in="query", @OA\Schema(type="integer")),
     *     operationId="index",
     *      @OA\Response( response=200, description="Get Brand List" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index()
    {
        try {
            $brands = $this->brandRepository->index();
            return $this->responseRepository->ResponseSuccess($brands, 'Brand Fetched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\POST(
     *     path="/api/v1/brands",
     *     tags={"Brands"},
     *     summary="Create New Brand",
     *     description="Create New Brand",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="name", type="string"),
     *              @OA\Property(property="business_id", type="int", example=1),
     *              @OA\Property(property="description", type="string", example="A reputaed brand"),
     *              @OA\Property(property="created_by", type="int", example=1),
     *              @OA\Property(property="banner", type="string", format="binary"),
     *              @OA\Property(property="image", type="string", format="binary")
     *          ),
     *      ),
     *     @OA\Response( response=200, description="Create New Brand" ),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param BrandRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {
        try {
            $data = $request->all();
            if ($request->hasFile('banner')) {
                $file = $request->file('banner');;
                $fileName = 'brands/' . time() . '_' . $file->getClientOriginalName();
                $originalImage = Image::make($file);
                $originalImage->save($fileName);
                $data['banner'] = public_path() . '/' . $fileName;
            }

            if ($request->hasFile('image')) {
                $file = $request->file('image');;
                $fileName = 'brands/' . time() . '_' . $file->getClientOriginalName();
                $originalImage = Image::make($file);
                $originalImage->save($fileName);
                $data['image'] = public_path() . '/' . $fileName;
            }
            $brand = $this->brandRepository->store($data);
            return $this->responseRepository->ResponseSuccess($brand, 'Brand Created Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/brands/{id}",
     *     tags={"Brand"},
     *     summary="Get Brand By ID",
     *     description="Get Brand By ID",
     *     security={{"bearer": {}}},
     *     operationId="show",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Brand By ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function show($id)
    {
        try {
            $brand = $this->brandRepository->show($id);
            return $this->responseRepository->ResponseSuccess($brand, 'Brand Details By ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\PUT(
     *     path="/api/v1/brands/{id}",
     *     tags={"Brands"},
     *     summary="Update Brand",
     *     description="Update Brand",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="name", type="string"),
     *              @OA\Property(property="business_id", type="int", example=1),
     *              @OA\Property(property="description", type="string", example="A reputaed brand"),
     *              @OA\Property(property="created_by", type="int", example=1),
     *              @OA\Property(property="banner", type="string", format="binary"),
     *              @OA\Property(property="image", type="string", format="binary")
     *          ),
     *      ),
     *      @OA\Response( response=200, description="Update Brand" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param BrandRequest $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandRequest $request, $id)
    {
        try {
            $data = $request->all();
            if ($request->hasFile('banner')) {
                $file = $request->file('banner');;
                $fileName = 'brands/' . time() . '_' . $file->getClientOriginalName();
                $originalImage = Image::make($file);
                $originalImage->save($fileName);
                $data['banner'] = public_path() . '/' . $fileName;
            }

            if ($request->hasFile('image')) {
                $file = $request->file('image');;
                $fileName = 'brands/' . time() . '_' . $file->getClientOriginalName();
                $originalImage = Image::make($file);
                $originalImage->save($fileName);
                $data['image'] = public_path() . '/' . $fileName;
            }
            $brand = $this->brandRepository->update($id, $data);
            return $this->responseRepository->ResponseSuccess($brand, 'Brand Updated Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\DELETE(
     *     path="/api/v1/brands/{id}",
     *     tags={"Brands"},
     *     summary="Delete Brand",
     *     description="Delete Brand",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     operationId="destroy",
     *      @OA\Response( response=200, description="Delete Brand" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function destroy($id)
    {
        try {
            $brand = $this->brandRepository->destroy($id);
            return $this->responseRepository->ResponseSuccess($brand, 'Brand Deleted Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/brands/business/{business_id}",
     *     tags={"Brands"},
     *     summary="Get Brand List of Business",
     *     description="Get Brand List of Business",
     *     security={{"bearer": {}}},
     *     operationId="getBrandByBusiness",
     *      @OA\Parameter( name="business_id", description="business_id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Brand List of Business"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getBrandByBusiness($businessId)
    {
        try {
            $brand = $this->brandRepository->getBrandByBusiness($businessId);
            return $this->responseRepository->ResponseSuccess($brand, 'Brand By Business ID');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
