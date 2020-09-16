<?php

namespace Modules\Item\Interfaces;

interface BrandInterface
{
    public function index();

    public function store($data);

    public function show($id);

    public function update($id, $data);

    public function destroy($id);

    public function getBrandByBusiness($businessId);
}
