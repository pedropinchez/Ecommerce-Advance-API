<?php

namespace Modules\Business\Repositories;

use Modules\Business\Entities\TaxRate;
use Modules\Business\interfaces\TaxInterface;

class TaxRepository implements TaxInterface
{
    /**
     * @return mixed
     * get all the taxes
     */
    public function index()
    {
        return TaxRate::get();
    }

    /**
     * @param $id
     * @return mixed
     * get a specific tax
     */
    public function show($id)
    {
        return TaxRate::with(['business'])->find($id);
    }

    /**
     * @param $data
     * @return mixed
     * store new tax into db
     */
    public function store($data)
    {
        $tax = TaxRate::create($data);
        return $tax;
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     * update an existing tax
     */
    public function update($id, $data)
    {
        $tax = TaxRate::find($id);
        if($tax) {
            $tax->update($data);
        }

        return $tax;
    }

    /**
     * @param $id
     * @return bool
     * delete tax from db
     */
    public function destroy($id)
    {
        $tax = TaxRate::find($id);
        if($tax) {
            $tax->delete();
            return true;
        } else {}
        return false;
    }

    /**
     * @param $businessId
     * @return mixed
     * get tax according to business
     */
    public function getTaxByBusiness($businessId)
    {
        return TaxRate::with(['business'])->where('business_id', $businessId)->get();
    }
}
