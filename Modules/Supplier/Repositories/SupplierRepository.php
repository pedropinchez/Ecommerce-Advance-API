<?php

namespace Modules\Supplier\Repositories;

use Illuminate\Http\Request;
use App\Interfaces\BasicCrudInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Modules\Supplier\Entities\Supplier;

class SupplierRepository
{


    public function store(Request $request)
    {
        $customerId = DB::table("suppliers")->insertGetId(
            [

                'business_id' => $request->business_id,
                'supplier_business_name' => $request->supplier_business_name,
                'bin' => $request->bin,
                'name' => $request->name,
                'tax_number' => $request->tax_number,
                'email' => $request->email,
                'city' => $request->city,
                'state' => $request->state,
                'country' => $request->country,
                'landmark' => $request->landmark,
                'mobile' => $request->mobile,
                'landline' => $request->landline,
                'alternate_number' => $request->alternate_number,
                'pay_term_number' => $request->pay_term_number,
                'pay_term_type' => $request->pay_term_type,
            ]
        );
        $customer = $this->findSupplierById($customerId);
        return $customer;
    }
    public function update(Request $request, $id)
    {
        DB::table("suppliers")
            ->where('id', $id)
            ->update(
                [
                    'business_id' => $request->business_id,
                    'supplier_business_name' => $request->supplier_business_name,
                    'bin' => $request->bin,
                    'name' => $request->name,
                    'tax_number' => $request->tax_number,
                    'email' => $request->email,
                    'city' => $request->city,
                    'state' => $request->state,
                    'country' => $request->country,
                    'landmark' => $request->landmark,
                    'mobile' => $request->mobile,
                    'landline' => $request->landline,
                    'alternate_number' => $request->alternate_number,
                    'pay_term_number' => $request->pay_term_number,
                    'pay_term_type' => $request->pay_term_type,
                ]
            );

        return $this->findSupplierById($id);
    }

    public function delete($id)
    {
        $customer = $this->findSupplierById($id);
        if (!is_null($customer)) {
            DB::table("suppliers")->where('id', $id)->delete();
        }
        return $customer;
    }

    public function findSupplierById($id)
    {
        $customer = DB::table("suppliers")->where('id', $id)->first();
        return $customer;
    }
}
