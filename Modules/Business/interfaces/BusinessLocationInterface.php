<?php

namespace Modules\Business\interfaces;

interface BusinessLocationInterface
{
    public function index();

    public function show($id);

    public function store($data);

    public function update($id, $data);

    public function destroy($id);

    public function findLocationByBusiness($businessId);
}
