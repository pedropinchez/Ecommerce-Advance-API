<?php

namespace Modules\Business\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Business\Http\Requests\BusinessLocationRequest;
use Modules\Business\Http\Requests\LocationRequest;
use Modules\Business\Repositories\BusinessLocationRepository;
use Modules\Business\Repositories\LocationRepository;

class BusinessLocationController extends Controller
{
    public $locationRepository;
    public $responseRepository;

    public function __construct(BusinessLocationRepository $locationRepository, ResponseRepository $responseRepository)
    {
        $this->locationRepository = $locationRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/locations",
     *     tags={"Locations"},
     *     summary="Get Location List",
     *     description="Get Location List",
     *     security={{"bearer": {}}},
     *     operationId="index",
     *      @OA\Response( response=200, description="Get Location List" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index()
    {
        try {
            $locations = $this->locationRepository->index();
            return $this->responseRepository->ResponseSuccess($locations, 'Location List');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    /**
     * @OA\POST(
     *     path="/api/v1/locations",
     *     tags={"Locations"},
     *     summary="Register New Location",
     *     description="Register New Location",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="name", type="string"),
     *              @OA\Property(property="business_id", type="integer"),
     *              @OA\Property(property="country", type="string""),
     *              @OA\Property(property="state", type="string"),
     *              @OA\Property(property="zip_code", type="string"),
     *              @OA\Property(property="landmark", type="string"),
     *              @OA\Property(property="city", type="string"),
     *              @OA\Property(property="mobile", type="string"),
     *              @OA\Property(property="alternate_number", type="string")
     *              @OA\Property(property="email", type="string")
     *          )
     *      ),
     *     operationId="store",
     *      @OA\Response( response=200, description="Create New Location" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function store(BusinessLocationRequest $request)
    {
        try {
            $data = $request->all();
            $location = $this->locationRepository->store($data);
            return $this->responseRepository->ResponseSuccess($location, 'Location Created');
        } catch (\Exception $e) {
            // return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
            return $this->responseRepository->ResponseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/locations/{id}",
     *     tags={"Locations"},
     *     summary="Get Location By ID",
     *     description="Get Location By ID",
     *     security={{"bearer": {}}},
     *     operationId="show",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Location By ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function show($id)
    {
        try {
            $location = $this->locationRepository->show($id);
            return $this->responseRepository->ResponseSuccess($location, 'Location Details By ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\PUT(
     *     path="/api/v1/locations/{id}",
     *     tags={"Locations"},
     *     summary="Update Location",
     *     description="Update Location",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="name", type="string"),
     *              @OA\Property(property="business_id", type="integer"),
     *              @OA\Property(property="country", type="string""),
     *              @OA\Property(property="state", type="string"),
     *              @OA\Property(property="zip_code", type="string"),
     *              @OA\Property(property="landmark", type="string"),
     *              @OA\Property(property="city", type="string"),
     *              @OA\Property(property="mobile", type="string"),
     *              @OA\Property(property="alternate_number", type="string")
     *              @OA\Property(property="email", type="string")
     *          )
     *      ),
     *     operationId="update",
     *      @OA\Response( response=200, description="Update Location" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function update(BusinessLocationRequest $request, $id)
    {
        try {
            $data =  $request->all();
            $location = $this->locationRepository->update($id, $data);
            if (is_null($location)) {
                return $this->responseRepository->ResponseError(null, 'No Location Found', Response::HTTP_NOT_FOUND);
            }
            return $this->responseRepository->ResponseSuccess($location, 'Location Updated');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\DELETE(
     *     path="/api/v1/locations/{id}",
     *     tags={"Locations"},
     *     summary="Delete Location",
     *     description="Delete Location",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     operationId="destroy",
     *      @OA\Response( response=200, description="Delete Location" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function destroy($id)
    {
        try {
            $location = $this->locationRepository->destroy($id);
            if (is_null($location)) {
                return $this->responseRepository->ResponseError(null, 'No Location Found', Response::HTTP_NOT_FOUND);
            }
            return $this->responseRepository->ResponseSuccess($location, 'Location has been deleted successfully');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/locations/business/{business_id}",
     *     tags={"Locations"},
     *     summary="Get Location By Business",
     *     description="Get Location By Business",
     *     security={{"bearer": {}}},
     *     operationId="findLocationByBusiness",
     *     @OA\Parameter( name="business_id", description="business_id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Location By Business" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function findLocationByBusiness($businessId)
    {
        try {
            $location = $this->locationRepository->findLocationByBusiness($businessId);
            return $this->responseRepository->ResponseSuccess($location, 'Location Details By Business');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
