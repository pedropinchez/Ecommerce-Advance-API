<?php

namespace Modules\Business\Repositories;

use App\Helpers\ImageUploadHelper;
use App\Helpers\UploadHelper;
use Auth;
use Modules\Business\Entities\Slider;

class SliderRepository
{
    /**
     * index()
     * Get all slider items
     *
     * @return mixed
     * get all the sliders with business
     */
    public function index()
    {
        $query = Slider::orderBy('id', 'desc');
        if (request()->search) {
            $query->where('name', 'like', '%' . request()->search . '%');
            $query->orWhere('description', 'like', '%' . request()->search . '%');
        }
        if (request()->isPaginated) {
            $paginateNo = request()->paginateNo ? request()->paginateNo : 20;
            return $query->paginate($paginateNo);
        } else {
            return $query->get();
        }
    }

    /**
     * store()
     * Create New Slider Item
     *
     * @param $data
     * @return mixed
     * insert slider to db
     */
    public function store($data)
    {
        if (isset($data['image'])) {
            $data['image'] = UploadHelper::upload('image',  $data['image'], 'slider-' . '-' . time(), 'images/sliders');
        }

        $slider = Slider::create($data);
        return $slider;
    }

    /**
     * @param $id
     * @return mixed
     * get single slider
     */
    public function show($id)
    {
        return Slider::with(['business'])->find($id);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     * update slider
     */
    public function update($id, $data)
    {
        $slider = Slider::find($id);
        if(isset($data['image'])){
            $data['image'] = is_null($data['image']) ? $slider->image : UploadHelper::update('image',  $data['image'], 'slider-' . '-' . time(), 'images/sliders', $slider->image);
        }
        $slider->update($data);
        return $slider;
    }

    /**
     * @param $id
     * @return bool
     * delete slider
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        if($slider) {
            $slider->delete();
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $businessId
     * @return mixed
     * get all the sliders of business
     */
    public function getSliderByBusiness($businessId)
    {
        return Slider::with(['business'])->where('business_id', $businessId)->get();
    }
}
