<?php

namespace Modules\Promotional\Http\Controllers;

use App\Repositories\ResponseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Promotional\Http\Requests\GiftCardRequest;
use Modules\Promotional\Repositories\VoucherRepository;

class VoucherController extends Controller
{
    private $voucherRepository;
    private $responseRepository;
    public function __construct(VoucherRepository $voucherRepository, ResponseRepository $responseRepository)
    {
        $this->voucherRepository = $voucherRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/vouchers",
     *     tags={"Vouchers"},
     *     summary="Get voucher List",
     *     description="Get voucher List",
     *     security={{"bearer": {}}},
     *     operationId="index",
     *      @OA\Response( response=200, description="Get voucher List" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function index()
    {
        try {
            $vouchers = $this->voucherRepository->index();
            return $this->responseRepository->ResponseSuccess($vouchers, 'Voucher Fetched Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\POST(
     *     path="/api/v1/vouchers",
     *     tags={"Vouchers"},
     *     summary="Create New voucher",
     *     description="Create New voucher",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="title", type="string", example="Boishakhi Card"),
     *              @OA\Property(property="price_value_for", type="string", example="5000"),
     *              @OA\Property(property="change_price_value", type="string", example="6500"),
     *              @OA\Property(property="card_type", type="string", example="vouchar"),
     *              @OA\Property(property="status", type="boolean", example=1),
     *              @OA\Property(property="created_by", type="integer", example=1),
     *              @OA\Property(property="image", type="string", format="binary")
     *          ),
     *      ),
     *      operationId="store",
     *      @OA\Response( response=200, description="Create New voucher" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param GiftCardRequest $request
     * @return Response
     */
    public function store(GiftCardRequest $request)
    {
        try {
            $data = $request->all();
            if ($request->hasFile('image')){
                $file = $request->file('image');;
                $fileName = 'vouchers/'.time().'_'.$file->getClientOriginalName();
                $originalImage = Image::make($file);
                $originalImage->save($fileName);
                $data['image'] = public_path().'/'.$fileName;
            }
            $voucher = $this->voucherRepository->store($data);
            return $this->responseRepository->ResponseSuccess($voucher, 'Voucher Created Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\GET(
     *     path="/api/v1/vouchers/{id}",
     *     tags={"Vouchers"},
     *     summary="Get Voucher By ID",
     *     description="Get Voucher By ID",
     *     security={{"bearer": {}}},
     *     operationId="show",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *      @OA\Response( response=200, description="Get Voucher By ID" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function show($id)
    {
        try {
            $voucher= $this->voucherRepository->show($id);
            return $this->responseRepository->ResponseSuccess($voucher, 'Voucher Details By ID');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\PUT(
     *     path="/api/v1/vouchers/{id}",
     *     tags={"Vouchers"},
     *     summary="Update voucher",
     *     description="Update voucher",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="title", type="string", example="Boishakhi Card"),
     *              @OA\Property(property="price_value_for", type="string", example="5000"),
     *              @OA\Property(property="change_price_value", type="string", example="6500"),
     *              @OA\Property(property="card_type", type="string", example="vouchar"),
     *              @OA\Property(property="status", type="boolean", example=1),
     *              @OA\Property(property="created_by", type="integer", example=1),
     *              @OA\Property(property="updated_by", type="integer", example=2),
     *              @OA\Property(property="deleted_by", type="integer", example=2),
     *              @OA\Property(property="image", type="string", format="binary")
     *          ),
     *      ),
     *      operationId="update",
     *      @OA\Response( response=200, description="Update voucher" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param GiftCardRequest $request
     * @param $id
     * @return Response
     */
    public function update(GiftCardRequest $request, $id)
    {
        try {
            $data = $request->all();
            if ($request->hasFile('image')){
                $file = $request->file('image');;
                $fileName = 'vouchers/'.time().'_'.$file->getClientOriginalName();
                $originalImage = Image::make($file);
                $originalImage->save($fileName);
                $data['image'] = public_path().'/'.$fileName;
            }
            $voucher = $this->voucherRepository->update($id, $data);
            return $this->responseRepository->ResponseSuccess($voucher, 'Voucher Updated Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @OA\DELETE(
     *     path="/api/v1/vouchers/{id}",
     *     tags={"Vouchers"},
     *     summary="Delete voucher",
     *     description="Delete voucher",
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="path", @OA\Schema(type="integer")),
     *     operationId="destroy",
     *      @OA\Response( response=200, description="Delete voucher" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            $voucher = $this->voucherRepository->destroy($id);
            return $this->responseRepository->ResponseSuccess($voucher, 'Voucher Deleted Successfully');
        } catch (\Exception $exception) {
            return $this->responseRepository->ResponseError(null, $exception->getMessage(), JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
