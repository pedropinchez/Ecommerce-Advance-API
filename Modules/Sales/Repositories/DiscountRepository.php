<?php

namespace Modules\Sales\Repositories;

use Modules\Sales\Entities\DiscountType;

class DiscountRepository
{
    public function index()
    {
        return DiscountType::get();
    }

    public function show($id)
    {
        return DiscountType::find($id);
    }

    public function store($data)
    {
        return DiscountType::create($data);
    }

    public function update($id, $data)
    {
        $discount = DiscountType::find($id);
        if($discount) {
            $discount->update($data);
        }

        return $discount;
    }

    public function destroy($id)
    {
        $discount = DiscountType::find($id);
        if($discount) {
            $discount->delete();
            return true;
        } else {
            return false;
        }
    }

    public function getDiscountByBusiness($businessId)
    {
        return DiscountType::where('business_id', $businessId)->get();
    }
}
