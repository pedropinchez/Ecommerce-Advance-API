<?php

namespace Modules\Item\Repositories;

use Modules\Item\Entities\Category;
use Modules\Item\Interfaces\CategoryInterface;

class CategoryRepository implements CategoryInterface
{
    /**
     * @return mixed
     * get all the categories with business
     */
    public function index()
    {
        return Category::get();
    }

    /**
     * @param $data
     * @return mixed
     * insert category to db
     */
    public function store($data)
    {
        $category = Category::create($data);
        return $category;
    }

    /**
     * @param $id
     * @return mixed
     * get single category
     */
    public function show($id)
    {
        return Category::with(['childs'])->find($id);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     * update category
     */
    public function update($id, $data)
    {
        $category = Category::find($id);
        $category->update($data);
        return $category;
    }

    /**
     * @param $id
     * @return bool
     * delete category
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if($category) {
            $category->delete();
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $businessId
     * @return mixed
     * get all the categories of business
     */
    public function getCategoryByBusiness($businessId)
    {
        return Category::where('business_id', $businessId)->get();
    }
}
