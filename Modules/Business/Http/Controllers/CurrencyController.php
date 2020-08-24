<?php

namespace Modules\Business\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Business\Http\Requests\CurrencyRequest;
use Modules\Business\Repositories\CurrencyRepository;

class CurrencyController extends Controller
{
    public $currencyRepository;
    public $responseRepository;

    public function __construct(CurrencyRepository $currencyRepository, ResponseRepository $responseRepository)
    {
        $this->currencyRepository = $currencyRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/currencies",
     *     tags={"Currency"},
     *     summary="Get Currency List",
     *     description="Get Currency List",
     *     security={{"bearer": {}}},
     *     operationId="index",
     *      @OA\Response( response=200, description="Get Currency List" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index()
    {
        try {
            $currencies = $this->currencyRepository->index();
            return $this->responseRepository->ResponseSuccess($currencies, 'Currency List');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    /**
     * @OA\POST(
     *     path="/api/v1/currencies",
     *     tags={"Currency"},
     *     summary="Register New Currency",
     *     description="Register New Currency",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="country", type="string"),
     *              @OA\Property(property="currency", type="string"),
     *              @OA\Property(property="code", type="string"),
     *              @OA\Property(property="symbol", type="string"),
     *              @OA\Property(property="thousand_separator", type="string"),
     *              @OA\Property(property="decimal_separator", type="string")
     *          )
     *      ),
     *     operationId="store",
     *      @OA\Response( response=200, description="Create New Currency" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function store(CurrencyRequest $request)
    {
        try {
            $data = $request->all();
            $currency = $this->currencyRepository->store($data);
            return $this->responseRepository->ResponseSuccess($currency, 'Currency Created');
        } catch (\Exception $e) {
            // return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
            return $this->responseRepository->ResponseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/currencies/{id}",
     *     tags={"Currency"},
     *     summary="Get Currency By ID",
     *     description="Get Currency By ID",
     *     security={{"bearer": {}}},
     *     operationId="show",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Currency By ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function show($id)
    {
        try {
            $currency = $this->currencyRepository->show($id);
            return $this->responseRepository->ResponseSuccess($currency, 'Currency Details By ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\PUT(
     *     path="/api/v1/currencies/{id}",
     *     tags={"Currency"},
     *     summary="Update Currency",
     *     description="Update Currency",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="country", type="string"),
     *              @OA\Property(property="currency", type="string"),
     *              @OA\Property(property="code", type="string"),
     *              @OA\Property(property="symbol", type="string"),
     *              @OA\Property(property="thousand_separator", type="string"),
     *              @OA\Property(property="decimal_separator", type="string")
     *          )
     *      ),
     *     operationId="update",
     *      @OA\Response( response=200, description="Update Currency" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function update(CurrencyRequest $request, $id)
    {
        try {
            $data =  $request->all();
            $currency = $this->currencyRepository->update($id, $data);
            if (is_null($currency)) {
                return $this->responseRepository->ResponseError(null, 'No Currency Found', Response::HTTP_NOT_FOUND);
            }
            return $this->responseRepository->ResponseSuccess($currency, 'Currency Updated');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\DELETE(
     *     path="/api/v1/currencies/{id}",
     *     tags={"Currency"},
     *     summary="Delete Currency",
     *     description="Delete Currency",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     operationId="destroy",
     *      @OA\Response( response=200, description="Delete Currency" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function destroy($id)
    {
        try {
            $currency = $this->currencyRepository->destroy($id);
            if (is_null($currency)) {
                return $this->responseRepository->ResponseError(null, 'No Currency Found', Response::HTTP_NOT_FOUND);
            }
            return $this->responseRepository->ResponseSuccess($currency, 'Currency has been deleted successfully');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
