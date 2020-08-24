<?php

namespace Modules\Business\Repositories;

use Modules\Business\Entities\BusinessLocation;
use Modules\Business\interfaces\BusinessLocationInterface;

class BusinessLocationRepository implements BusinessLocationInterface
{
    /**
     * @return mixed
     * all business location
     */
    public function index()
    {
        return BusinessLocation::get();
    }

    /**
     * @param $id
     * @return mixed
     * get a single business location
     */
    public function show($id)
    {
        return BusinessLocation::find($id);
    }

    /**
     * @param $data
     * @return mixed
     * save a business location
     */
    public function store($data)
    {
        $location = BusinessLocation::create($data);
        return $location;
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     * update a business location
     */
    public function update($id, $data)
    {
        $location = BusinessLocation::find($id);
        if($location) {
            $location->update($data);
        }

        return $location;
    }

    /**
     * @param $id
     * @return bool
     * delete a business location
     */
    public function destroy($id)
    {
        $location = BusinessLocation::find($id);
        if($location) {
            $location->delete();
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $businessId
     * @return mixed
     * get all the location with business
     */
    public function findLocationByBusiness($businessId)
    {
        $location = BusinessLocation::where('business_id', $businessId)->get();
        return $location;
    }
}
