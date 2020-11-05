<?php

namespace Modules\Customer\Repositories;

use Illuminate\Http\Request;
use App\Interfaces\BasicCrudInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Modules\Customer\Entities\Customer;

class CustomerRepository
{

    public function all()
    {
        $customer = DB::table('customers')
            ->join('business', 'customers.business_id', '=', 'business.id')
            ->select('customers.*', 'business.name as  busienssname')
            ->orderBy('id', 'desc')
            ->get();
        return $customer;
    }


    public function store(Request $request)
    {
        $customerId =  DB::table("customers")->insertGetId(
            [
                'business_id' => $request->business_id,
                'bin' => $request->bin,
                'name' => $request->name,
                'tax_number' => $request->tax_number,
                'city' => $request->city,
                'state' => $request->state,
                'country' => $request->country,
                'landmark' => $request->landmark,
                'mobile' => $request->mobile,
                'landline' => $request->landline,
                'alternate_number' => $request->alternate_number,
                'pay_term_number' => $request->pay_term_number,
                'pay_term_type' => $request->pay_term_type,
                'created_by' => $request->created_by,
                'is_default' => $request->is_default,
            ]
        );
        $customer = $this->findCustomerById($customerId);
        return  $customer;
    }


    public function update(Request $request, $intCusID)
    {
        return 'farid';
        DB::table("customers")
            ->where('intCusID', $intCusID)
            ->update(
                [
                    'business_id' => $request->business_id,
                    'bin' => $request->bin,
                    'name' => $request->name,
                    'tax_number' => $request->tax_number,
                    'city' => $request->city,
                    'state' => $request->state,
                    'country' => $request->country,
                    'landmark' => $request->landmark,
                    'mobile' => $request->mobile,
                    'landline' => $request->landline,
                    'alternate_number' => $request->alternate_number,
                    'pay_term_number' => $request->pay_term_number,
                    'pay_term_type' => $request->pay_term_type,
                    'created_by' => $request->created_by,
                    'is_default' => $request->is_default,
                ]
            );

        return $this->findCustomerById($intCusID);
    }

    public function delete($id)
    {
        $customer = $this->findCustomerById($id);
        if (!is_null($customer)) {
            DB::table("customers")->where('id', $id)->delete();
        }
        return $customer;
    }

    public function findCustomerById($id)
    {
        $customer = DB::table("customers")->where('id', $id)->first();
        return $customer;
    }
}
