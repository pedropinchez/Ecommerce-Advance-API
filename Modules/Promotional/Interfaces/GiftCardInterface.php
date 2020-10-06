<?php


namespace Modules\Promotional\Interfaces;


interface GiftCardInterface
{
    public function index();

    public function show($id);

    public function store($data);

    public function update($id, $data);

    public function destroy($id);
}
