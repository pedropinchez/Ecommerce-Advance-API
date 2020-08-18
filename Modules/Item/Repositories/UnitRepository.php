<?php

namespace Modules\Item\Repositories;

use Modules\Item\Entities\Unit;
use Modules\Item\Interfaces\UnitInterface;

class UnitRepository implements UnitInterface
{
    /**
     * @return mixed
     * get all the units with business
     */
    public function index()
    {
        return Unit::get();
    }

    /**
     * @param $data
     * @return mixed
     * insert unit to db
     */
    public function store($data)
    {
        $unit = Unit::create($data);
        return $unit;
    }

    /**
     * @param $id
     * @return mixed
     * get single unit
     */
    public function show($id)
    {
        return Unit::find($id);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     * update unit
     */
    public function update($id, $data)
    {
        $unit = Unit::find($id);
        $unit->update($data);
        return $unit;
    }

    /**
     * @param $id
     * @return bool
     * delete unit
     */
    public function destroy($id)
    {
        $unit = Unit::find($id);
        if($unit) {
            $unit->delete();
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $businessId
     * @return mixed
     * get all the units of business
     */
    public function getUnitByBusiness($businessId)
    {
        return Unit::where('business_id', $businessId)->get();
    }
}
