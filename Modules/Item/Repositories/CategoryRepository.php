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
        $query = Category::select('*');
       
        if(request()->status){
            if(request()->status == "1"){
                $query->where('deleted_at', null);
            }else if(request()->status == "0"){
                $query->where('deleted_at', '!=', null);
            }else{
                $query->withTrashed();
            }
        }else{
            $query->withTrashed();
        }

        if(request()->searchText){
            $query->where('name', 'like', '%'.request()->searchText.'%');
        }

        $query->orderBy('id', 'desc');
        return $query->get();
    }

    /**
     * @param $data
     * @return mixed
     * insert category to db
     */
    public function store($data)
    {
        if(is_null($data['short_code']) || $data['short_code'] === ""){
            $data['short_code'] = substr(StringHelper::createSlug($data['name'], 'Modules\Item\Entities\Category', 'short_code'), 0, 20);
        }
        $data['is_visible_homepage'] = !$data['is_visible_homepage'] ? 0 : 1;
        $data['banner'] = ImageUploadHelper::upload('banner', $data['banner'], 'category-banner-' .$data['short_code'].'-'. time(), 'images/categories');
        $data['image'] = ImageUploadHelper::upload('image',  $data['image'], 'category-' .$data['short_code'].'-'. time(), 'images/categories');
        
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
        if(is_null($data['short_code']) || $data['short_code'] === ""){
            $data['short_code'] = substr(StringHelper::createSlug($data['name'], 'Modules\Item\Entities\Category', 'short_code'), 0, 20);
        }
        $data['is_visible_homepage'] = !$data['is_visible_homepage'] ? 0 : 1;
        $data['banner'] = is_null($data['banner']) ? $category->banner : ImageUploadHelper::update('banner', $data['banner'], 'category-banner-' .$data['short_code'].'-'. time(), 'images/categories', $category->banner);
        $data['image'] = is_null($data['image']) ? $category->image : ImageUploadHelper::update('image',  $data['image'], 'category-' .$data['short_code'].'-'. time(), 'images/categories', $category->image);
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
        for ($i=1; $i <= count($categories); $i++) { 
            if($i == $categoryNo){
                $category = $categories[$i-1];
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
