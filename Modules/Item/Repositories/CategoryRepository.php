<?php

namespace Modules\Item\Repositories;

use App\Helpers\ImageUploadHelper;
use App\Helpers\StringHelper;
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
        $query = Category::orderBy('id', 'desc');
        if (request()->search) {
            $query->where('name', 'like', '%' . request()->search . '%');
            $query->orWhere('description', 'like', '%' . request()->search . '%');
            $query->orWhere('short_code', 'like', '%' . request()->search . '%');
        }

        if (request()->isPaginated) {
            $paginateNo = request()->paginateNo ? request()->paginateNo : 20;
            return $query->paginate($paginateNo);
        } else {
            return $query->get();
        }

        $query->orderBy('id', 'desc');
        return $query->get();
    }

    public function getSubCategoriesByParentID($parent_id)
    {
        if ($parent_id == "null") $parent_id = null;
        $query = Category::where('parent_id', $parent_id)
            ->select('id', 'name')
            ->orderBy('name', 'asc');
        return $query->get();
    }

    public function categoryListFrontend()
    {
        $data = [];
        $categoriesLabel1 = $this->getCategoriesByParentID(null);
        foreach ($categoriesLabel1 as $key => $category) {
            $data[$key] = $category;
            // get categoriesLabel2 child categories
            $data[$key]['childs'] = $this->getCategoriesByParentID($category->id);
            foreach ($data[$key]['childs'] as $key2 => $categoryLabel2) {
                $categoryLabel2['childs'] = $this->getCategoriesByParentID($categoryLabel2->id);
            }
        }

        return $data;
        // $query = Category::with('childs')->select('id', 'name', 'parent_id', 'short_code');
        // $query->where('deleted_at', null);
        // $query->where('is_visible_homepage', 1);

        // if (request()->searchText) {
        //     $query->where('name', 'like', '%' . request()->searchText . '%');
        // }
        // $query->orderBy('id', 'desc');
        // return $query->get();
    }

    public function getCategoriesByParentID($parent_id)
    {
        if ($parent_id == "null") $parent_id = null;
        return Category::select('id', 'name', 'parent_id', 'short_code')
            ->where('parent_id', $parent_id)
            ->get();
    }

    /**
     * @param $data
     * @return mixed
     * insert category to db
     */
    public function store($data)
    {
        if (is_null($data['short_code']) || $data['short_code'] === "") {
            $data['short_code'] = substr(StringHelper::createSlug($data['name'], 'Modules\Item\Entities\Category', 'short_code'), 0, 20);
        }
        $data['is_visible_homepage'] = !$data['is_visible_homepage'] ? 0 : 1;
        $data['banner'] = ImageUploadHelper::upload('banner', $data['banner'], 'category-banner-' . $data['short_code'] . '-' . time(), 'images/categories');
        $data['image'] = ImageUploadHelper::upload('image',  $data['image'], 'category-' . $data['short_code'] . '-' . time(), 'images/categories');

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
        return Category::with(['childs', 'business', 'parent_category'])->find($id);
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
        if (is_null($data['short_code']) || $data['short_code'] === "") {
            $data['short_code'] = substr(StringHelper::createSlug($data['name'], 'Modules\Item\Entities\Category', 'short_code'), 0, 20);
        }
        $data['is_visible_homepage'] = !$data['is_visible_homepage'] ? 0 : 1;
        $data['banner'] = is_null($data['banner']) ? $category->banner : ImageUploadHelper::update('banner', $data['banner'], 'category-banner-' . $data['short_code'] . '-' . time(), 'images/categories', $category->banner);
        $data['image'] = is_null($data['image']) ? $category->image : ImageUploadHelper::update('image',  $data['image'], 'category-' . $data['short_code'] . '-' . time(), 'images/categories', $category->image);
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
        if ($category) {
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
        return Category::with(['childs', 'business'])->where('business_id', $businessId)->get();
    }

    /**
     * @return mixed
     * get all the categories with business
     */
    public function getCategoryByProductForHomePage($categoryNo)
    {
        $data = [
            'category' => null,
            'products' => [],
        ];

        $categories = Category::where('is_visible_homepage', 1)->get();
        for ($i = 1; $i <= count($categories); $i++) {
            if ($i == $categoryNo) {
                $category = $categories[$i - 1];
                $itemRepo = new ItemRepository();
                $products = $itemRepo->getProductListByCategory($category->id);
                $data = [
                    'category' => $category,
                    'products' => $products,
                ];
                return $data;
            }
        }
        return $data;
    }
}
