<?php

namespace Modules\Business\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Business\Http\Requests\SliderRequest;
use Modules\Business\Repositories\SliderRepository;

class SliderController extends Controller
{
    private $sliderRepository;
    private $responseRepository;
    public function __construct(SliderRepository $sliderRepository, ResponseRepository $responseRepository)
    {
        $this->sliderRepository = $sliderRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/sliders",
     *     tags={"Sliders"},
     *     summary="Get Slider List",
     *     description="Get Slider List",
     *     security={{"bearer": {}}},
     *     @OA\Parameter(name="search", description="search value, eg; 1", required=false, in="query", @OA\Schema(type="string")),
     *     @OA\Parameter(name="isPaginated", description="isPaginated, eg; 0", required=false, in="query", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="paginateNo", description="paginateNo, eg; 0", required=false, in="query", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="status", description="status, eg; 1", required=false, in="query", @OA\Schema(type="integer")),
     *     operationId="index",
     *      @OA\Response( response=200, description="Get Slider List" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index()
    {
        try {
            $sliders = $this->sliderRepository->index();
            return $this->responseRepository->ResponseSuccess($sliders, 'Slider Fetched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    /**
     * @OA\GET(
     *     path="/api/v1/sliders-frontend",
     *     tags={"Sliders"},
     *     summary="Get Slider List For Frontend",
     *     description="Get Slider List For Frontend",
     *     security={{"bearer": {}}},
     *     @OA\Parameter(name="search", description="search value, eg; 1", required=false, in="query", @OA\Schema(type="string")),
     *     @OA\Parameter(name="isPaginated", description="isPaginated, eg; 0", required=false, in="query", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="paginateNo", description="paginateNo, eg; 0", required=false, in="query", @OA\Schema(type="integer")),
     *     @OA\Parameter(name="status", description="status, eg; 1", required=false, in="query", @OA\Schema(type="integer")),
     *     operationId="getAllSliderForFrontend",
     *      @OA\Response( response=200, description="Get Slider List For Frontend" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getAllSliderForFrontend()
    {
        try {
            $sliders = $this->sliderRepository->getAllSliderForFrontend();
            return $this->responseRepository->ResponseSuccess($sliders, 'Slider Fetched Successfully For Website !');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\POST(
     *     path="/api/v1/sliders",
     *     tags={"Sliders"},
     *     summary="Create New Slider",
     *     description="Create New Slider",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="title", type="string", example="Simple Slider"),
     *              @OA\Property(property="business_id", type="integer", example=1),
     *              @OA\Property(property="description", type="string", example="A reputaed brand"),
     *              @OA\Property(property="created_by", type="integer", example=1),
     *              @OA\Property(property="image", type="string", format="binary"),
     *              @OA\Property(property="is_text_enable", type="integer", example=0),
     *              @OA\Property(property="text", type="string", example=""),
     *              @OA\Property(property="text_color", type="string", example=""),
     *              @OA\Property(property="is_button_enable", type="integer", example=1),
     *              @OA\Property(property="button_text", type="string", example=""),
     *              @OA\Property(property="button_link", type="string", example=""),
     *              @OA\Property(property="button_color", type="string", example=""),
     *              @OA\Property(property="status", type="integer", example=1),
     *          ),
     *      ),
     *     @OA\Response( response=200, description="Create New Slider" ),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param SliderRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        try {
            $data = $request->all();
            $brand = $this->sliderRepository->store($data);
            return $this->responseRepository->ResponseSuccess($brand, 'Slider Created Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/sliders/{id}",
     *     tags={"Sliders"},
     *     summary="Get Slider By ID",
     *     description="Get Slider By ID",
     *     security={{"bearer": {}}},
     *     operationId="show",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Slider By ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function show($id)
    {
        try {
            $brand = $this->sliderRepository->show($id);
            return $this->responseRepository->ResponseSuccess($brand, 'Slider Details By ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\PUT(
     *     path="/api/v1/sliders/{id}",
     *     tags={"Sliders"},
     *     summary="Update Slider",
     *     @OA\Parameter(name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     description="Update Slider",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="title", type="string", example="Simple Slider"),
     *              @OA\Property(property="business_id", type="integer", example=1),
     *              @OA\Property(property="description", type="string", example="A reputaed brand"),
     *              @OA\Property(property="created_by", type="integer", example=1),
     *              @OA\Property(property="image", type="string", format="binary"),
     *              @OA\Property(property="is_text_enable", type="integer", example=0),
     *              @OA\Property(property="text", type="string", example=""),
     *              @OA\Property(property="text_color", type="string", example=""),
     *              @OA\Property(property="is_button_enable", type="integer", example=1),
     *              @OA\Property(property="button_text", type="string", example=""),
     *              @OA\Property(property="button_link", type="string", example=""),
     *              @OA\Property(property="button_color", type="string", example=""),
     *              @OA\Property(property="status", type="integer", example=1),
     *          ),
     *      ),
     *      @OA\Response( response=200, description="Update Slider" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param SliderRequest $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, $id)
    {
        try {
            $data = $request->all();
            $brand = $this->sliderRepository->update($id, $data);
            return $this->responseRepository->ResponseSuccess($brand, 'Slider Updated Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\DELETE(
     *     path="/api/v1/sliders/{id}",
     *     tags={"Sliders"},
     *     summary="Delete Slider",
     *     description="Delete Slider",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     operationId="destroy",
     *      @OA\Response( response=200, description="Delete Slider" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function destroy($id)
    {
        try {
            $brand = $this->sliderRepository->destroy($id);
            return $this->responseRepository->ResponseSuccess($brand, 'Slider Deleted Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/sliders/business/{business_id}",
     *     tags={"Sliders"},
     *     summary="Get Slider List of Business",
     *     description="Get Slider List of Business",
     *     security={{"bearer": {}}},
     *     operationId="getSliderByBusiness",
     *      @OA\Parameter( name="business_id", description="business_id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Slider List of Business"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getSliderByBusiness($businessId)
    {
        try {
            $brand = $this->sliderRepository->getSliderByBusiness($businessId);
            return $this->responseRepository->ResponseSuccess($brand, 'Slider By Business ID');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
