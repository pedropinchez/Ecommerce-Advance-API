<?php

namespace Modules\Promotional\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Promotional\Http\Requests\PollResponseRequest;
use Modules\Promotional\Repositories\PollRepository;

class PollResponseController extends Controller
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
     *     path="/api/v1/polls-response",
     *     tags={"Poll Responses"},
     *     summary="Create New Poll Response",
     *     description="Create New Poll Response",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *             @OA\Property(property="poll_id", type="integer"),
     *              @OA\Property(property="item_id", type="integer"),
     *              @OA\Property(property="user_id", type="integer"),
     *              @OA\Property(property="ip_address", type="string"),
     *              @OA\Property(property="poll_option_id", type="integer")
     *          ),
     *      ),
     *      operationId="store",
     *      @OA\Response( response=200, description="Create New Poll Response"),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param PollResponseRequest $request
     * @return Response
     */
    public function store(PollResponseRequest $request)
    {
        try {
            $data = $request->all();
            $poll = $this->pollRepository->createPollResponse($data);
            return $this->responseRepository->ResponseSuccess($poll, 'Poll Response Created Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
