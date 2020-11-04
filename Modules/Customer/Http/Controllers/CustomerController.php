<?php

namespace Modules\Customer\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Repositories\ResponseRepository;
use Modules\Customer\Entities\Customer;
use Modules\Customer\Repositories\CustomerRepository;

class CustomerController extends Controller
{

    public $customerRepository;
    public $responseRepository;

    public function __construct(CustomerRepository $customerRepository, ResponseRepository $responseRepository)
    {
        $this->customerRepository = $customerRepository;
        $this->responseRepository = $responseRepository;
    }

    /**
     * @OA\GET(
     *     path="/api/v1/customer",
     *     tags={"Customer"},
     *     summary="All Customers",
     *     description="Returns the list of Customers",
     *     operationId="index",
     *     @OA\Response(
     *         response="default",
     *         description="successful operation"
     *     )
     * )
     */

    public function index()
    {
        $customer = Customer::get();
        return $customer;
    }

    /**
     * @OA\POST(
     *     path="/api/v1/customer",
     *     tags={"Customer"},
     *     summary="Create New Customer",
     *     description="Create New Cusotmer",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="business_id", type="integer",example=4),
     *             @OA\Property(property="bin", type="string"),
     *              @OA\Property(property="name", type="string"),
     *              @OA\Property(property="tax_number", type="string"),
     *              @OA\Property(property="city", type="string"),
     *              @OA\Property(property="state", type="string"),
     *              @OA\Property(property="country", type="string"),
     *              @OA\Property(property="landmark", type="string"),
     *              @OA\Property(property="mobile", type="string",example="01961122027"),
     *              @OA\Property(property="landline", type="string"),
     *              @OA\Property(property="alternate_number", type="string"),
     *              @OA\Property(property="pay_term_number", type="integer"),
     *              @OA\Property(property="created_by", type="integer",example=1),
     *              @OA\Property(property="is_default", type="integer",example=0),
     *          )
     *      ),
     *     operationId="store",
     *      @OA\Response( response=200, description="Create New Customer" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function store(Request $request)
    {
        try {
            $customer = $this->customerRepository->store($request);
            return $this->responseRepository->ResponseSuccess($customer, 'Customer created successfully');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }



    /**
     * @OA\GET(
     *     path="/api/v1/customer/{id}",
     *     tags={"Customer"},
     *     summary="Get User Account",
     *     description="Get User Account",
     *     security={{"bearer": {}}},
     *     operationId="show",
     *      @OA\Response( response=200, description="Get Customer" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function show(Request $request, $id)
    {
        try {
            $user = $this->customerRepository->findCustomerById($id);
            return $this->responseRepository->ResponseSuccess($user, 'Customer  Details');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    /**
     * @OA\PUT(
     *     path="/api/v1/customer/{id}",
     *     tags={"Customer"},
     *     summary="Update Customer",
     *     description="Update Customer",
     *     security={{"bearer": {}}},
     *     @OA\Parameter( name="id", description="id, eg; 1", required=true, in="query", @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="business_id", type="integer"),
     *             @OA\Property(property="bin", type="string"),
     *              @OA\Property(property="name", type="string"),
     *              @OA\Property(property="tax_number", type="string"),
     *              @OA\Property(property="city", type="integer"),
     *              @OA\Property(property="state", type="string"),
     *              @OA\Property(property="country", type="integer"),
     *              @OA\Property(property="landmark", type="integer"),
     *              @OA\Property(property="mobile", type="integer"),
     *              @OA\Property(property="landline", type="integer"),
     *              @OA\Property(property="alternate_number", type="integer"),
     *              @OA\Property(property="pay_term_number", type="integer"),
     *              @OA\Property(property="pay_term_type", type="integer"),
     *              @OA\Property(property="created_by", type="integer"),
     *              @OA\Property(property="is_default", type="integer")
     *          )
     *      ),
     *     operationId="update",
     *      @OA\Response( response=200, description="Update New Customer" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function update(Request $request, $id)
    {
        try {
            $user = $request->user();
            $customer = $this->customerRepository->update($request, $id);
            return $this->responseRepository->ResponseSuccess($customer, 'Customer has been updated successfully');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, trans('common.something_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    /**
     * @OA\DELETE(
     *     path="/api/v1/customer/{id}",
     *     tags={"Customer"},
     *     summary="Delete Customer",
     *     description="Delete Account",
     *     security={{"bearer": {}}},
     *     operationId="destroy",
     *      @OA\Response( response=200, description="Deleted Customer Account" ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function destroy(Request $request, $id)
    {
        try {
            $user = $request->user();
            $customer = $this->customerRepository->delete($id);
            if (is_null($customer)) {
                return $this->responseRepository->ResponseError(null, 'Customer Not found', Response::HTTP_NOT_FOUND);
            }
            return $this->responseRepository->ResponseSuccess($customer, 'Customer deleted successfully');
        } catch (\Exception $e) {
            return $this->responseRepository->ResponseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
