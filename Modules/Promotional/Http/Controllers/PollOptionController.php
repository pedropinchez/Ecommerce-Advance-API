<?php

namespace Modules\Promotional\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Promotional\Http\Requests\PollOptionRequest;
use Modules\Promotional\Http\Requests\PollRequest;
use Modules\Promotional\Repositories\PollRepository;

class PollOptionController extends Controller
{
    private $pollRepository;
    private $responseRepository;
    public function __construct(PollRepository $pollRepository, ResponseRepository $responseRepository)
    {
        $this->pollRepository = $pollRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\POST(
     *     path="/api/v1/poll-options",
     *     tags={"Poll Options"},
     *     summary="Create New Poll Option",
     *     description="Create New Poll Option",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *             @OA\Property(property="value", type="string", example="title"),
     *              @OA\Property(property="item_id", type="integer"),
     *              @OA\Property(property="poll_id", type="integer")
     *          ),
     *      ),
     *      operationId="store",
     *      @OA\Response( response=200, description="Create New Poll Option"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param PollOptionRequest $request
     * @return Response
     */
    public function store(PollOptionRequest $request)
    {
        try {
            $data = $request->all();
            $poll = $this->pollRepository->createPollOption($data);
            return $this->responseRepository->ResponseSuccess($poll, 'Poll Option Created Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/poll-options/{id}",
     *     tags={"Polls"},
     *     summary="Get Poll Option By ID",
     *     description="Get Poll Option By ID",
     *     security={{"bearer": {}}},
     *     operationId="show",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Poll Option By ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function show($id)
    {
        try {
            $poll= $this->pollRepository->getPollOptionRow($id);
            return $this->responseRepository->ResponseSuccess($poll, 'Poll Option Details By ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\PUT(
     *     path="/api/v1/poll-options/{id}",
     *     tags={"Poll Options"},
     *     summary="Update Poll Option",
     *     description="Update Poll Option",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="value", type="string", example="title"),
     *              @OA\Property(property="item_id", type="integer"),
     *              @OA\Property(property="poll_id", type="integer")
     *          ),
     *      ),
     *      operationId="update",
     *      @OA\Response( response=200, description="Update Poll Option" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param PollOptionRequest $request
     * @param $id
     * @return Response
     */
    public function update(PollOptionRequest $request, $id)
    {
        try {
            $data = $request->all();
            $poll = $this->pollRepository->updatePollOption($id, $data);
            return $this->responseRepository->ResponseSuccess($poll, 'Poll Option Updated Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\DELETE(
     *     path="/api/v1/poll-optionss/{id}",
     *     tags={"Poll Opptions"},
     *     summary="Delete Poll Opption",
     *     description="Delete Poll Opption",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     operationId="destroy",
     *      @OA\Response( response=200, description="Delete Poll Option" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            $poll = $this->pollRepository->deletePollOption($id);
            return $this->responseRepository->ResponseSuccess($poll, 'Poll Option Deleted Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
