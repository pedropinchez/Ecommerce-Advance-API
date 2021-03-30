<?php

namespace Modules\Analytics\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Analytics\Entities\Country;

class CountriesController extends Controller
{

    private $responseRepository;

    public function __construct( ResponseRepository $responseRepository)
    {
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/countries",
     *     tags={"Countries"},
     *     summary="Get Country Lists",
     *     description="Get Country Lists",
     *     security={{"bearer": {}}},
     *     operationId="index",
     *     @OA\Parameter(name="search", description="search value, eg; 1", required=false, in="query", @OA\Schema(type="string")),
     *     @OA\Response( response=200, description="Get Country Lists" ),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index()
    {
        try {
            $countries = Country::all();
            return $this->responseRepository->ResponseSuccess($countries, 'Countries Fetched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
