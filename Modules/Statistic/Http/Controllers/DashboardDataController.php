<?php

namespace Modules\Statistic\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Sales\Entities\Invoice;
use Modules\Statistic\Repositories\DashboardDataRepository;

class DashboardDataController extends Controller
{
    public $dashboardDataRepository;
    public $responseRepository;

    public function __construct(DashboardDataRepository $dashboardDataRepository, ResponseRepository $responseRepository)
    {
        $this->dashboardDataRepository = $dashboardDataRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/statistics/get-dashboard-data",
     *     tags={"Dashboard"},
     *     summary="Get Dashboard List",
     *     description="Get Dashboard List",
     *     security={{"bearer": {}}},
     *     operationId="getDashboardData",
     *      @OA\Response( response=200, description="Get Dashboard List" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getDashboardData()
    {
        try {
            $data = $this->dashboardDataRepository->getDashboardStatisticsData();
            return $this->responseRepository->ResponseSuccess($data, 'Dashboard Data Fetched Successfully !');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null,  $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
