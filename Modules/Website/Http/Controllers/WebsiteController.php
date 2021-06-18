<?php

namespace Modules\Website\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Website\Repositories\WebsiteRepository;
use App\Repositories\ResponseRepository;

class WebsiteController extends Controller
{
    public $websiteRepository;
    public $responseRepository;

    public function __construct(WebsiteRepository $websiteRepository, ResponseRepository $responseRepository)
    {
        $this->websiteRepository = $websiteRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/website/info",
     *     tags={"Website Info"},
     *     summary="Get Website Information Data",
     *     description="Get Website Information Data",
     *     operationId="info",
     *     @OA\Parameter( name="short_data", description="short_data ex: 1 or 0", required=false, in="query", @OA\Schema(type="string")),
     *     @OA\Response(response=200,description="Get Website Information Data"),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function info(Request $request)
    {
        $request->validate([
            'short_data' => 'nullable|numeric'
        ]);

        $short_data = isset($request->short_data) ? $request->short_data : true;

        try {
            $data = $this->websiteRepository->show($short_data);
            return $this->responseRepository->ResponseSuccess($data, 'Get Website Information !');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, 'Errors', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
