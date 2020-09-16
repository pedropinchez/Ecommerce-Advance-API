<?php

namespace Modules\Item\Interfaces;

use Illuminate\Http\Request;

interface ItemInterfaces
{
    public function index();

    public function show($id);

    public function store($data);

    public function update($id, $data);

    public function destroy($id);

    public function getItemByBusiness($sectionId);

    public function getItemByCategory($categoryId);

    public function getItemBySubCategory($subCategoryId);

    public function getItemByBrand($brandId);

    public function updateItemAttribute($id, $data);
}
