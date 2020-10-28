<?php

namespace Modules\Promotional\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Promotional\Http\Requests\GiftCardRequest;
use Modules\Promotional\Http\Requests\PollRequest;
use Modules\Promotional\Repositories\PollRepository;

class PollController extends Controller
{
    private $pollRepository;
    private $responseRepository;
    public function __construct(PollRepository $pollRepository, ResponseRepository $responseRepository)
    {
        $this->pollRepository = $pollRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/polls",
     *     tags={"Polls"},
     *     summary="Get poll List",
     *     description="Get poll List",
     *     security={{"bearer": {}}},
     *     operationId="index",
     *      @OA\Response( response=200, description="Get poll List" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index()
    {
        try {
            $polls = $this->pollRepository->pollList();
            return $this->responseRepository->ResponseSuccess($polls, 'Poll Fetched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\POST(
     *     path="/api/v1/polls",
     *     tags={"Polls"},
     *     summary="Create New poll",
     *     description="Create New poll",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="title", type="string", example="Service"),
     *              @OA\Property(property="image", type="string", example="filename"),
     *              @OA\Property(property="description", type="string"),
     *              @OA\Property(property="type", type="string"),
     *              @OA\Property(property="status", type="boolean", example=1),
     *              @OA\Property(property="enable_item_comparison", type="boolean", example=1),
     *              @OA\Property(property="created_by", type="integer", example=1)
     *          ),
     *      ),
     *      operationId="store",
     *      @OA\Response( response=200, description="Create New poll" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param PollRequest $request
     * @return Response
     */
    public function store(PollRequest $request)
    {
        try {
            $data = $request->all();
            $poll = $this->pollRepository->store($data);
            return $this->responseRepository->ResponseSuccess($poll, 'Poll Created Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/polls/{id}",
     *     tags={"Polls"},
     *     summary="Get Poll By ID",
     *     description="Get Poll By ID",
     *     security={{"bearer": {}}},
     *     operationId="show",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Poll By ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function show($id)
    {
        try {
            $poll= $this->pollRepository->view($id);
            return $this->responseRepository->ResponseSuccess($poll, 'Poll Details By ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\PUT(
     *     path="/api/v1/polls/{id}",
     *     tags={"Polls"},
     *     summary="Update poll",
     *     description="Update poll",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="title", type="string", example="Service"),
     *              @OA\Property(property="image", type="string", example="filename"),
     *              @OA\Property(property="description", type="string"),
     *              @OA\Property(property="type", type="string"),
     *              @OA\Property(property="status", type="boolean", example=1),
     *              @OA\Property(property="enable_item_comparison", type="boolean", example=1),
     *              @OA\Property(property="created_by", type="integer", example=1),
     *              @OA\Property(property="updated_by", type="integer", example=2),
     *              @OA\Property(property="deleted_by", type="integer", example=2)
     *          ),
     *      ),
     *      operationId="update",
     *      @OA\Response( response=200, description="Update poll" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param PollRequest $request
     * @param $id
     * @return Response
     */
    public function update(PollRequest $request, $id)
    {
        try {
            $data = $request->all();
            $poll = $this->pollRepository->update($id, $data);
            return $this->responseRepository->ResponseSuccess($poll, 'Poll Updated Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\DELETE(
     *     path="/api/v1/polls/{id}",
     *     tags={"Polls"},
     *     summary="Delete poll",
     *     description="Delete poll",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     operationId="destroy",
     *      @OA\Response( response=200, description="Delete poll" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            $poll = $this->pollRepository->destroy($id);
            return $this->responseRepository->ResponseSuccess($poll, 'Poll Deleted Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/polls/customer{id}",
     *     tags={"Polls"},
     *     summary="Get Poll By customer id",
     *     description="Get Poll By customer id",
     *     security={{"bearer": {}}},
     *     operationId="getByCustomerId",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Poll By customer id" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function getByCustomerId($id)
    {
        try {
            $poll= $this->pollRepository->getCustomerPolls($id);
            return $this->responseRepository->ResponseSuccess($poll, 'Poll Details By customer id');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
