<?php

namespace Modules\Supplier\Repositories;

use Illuminate\Http\Request;
use App\Interfaces\BasicCrudInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Modules\Supplier\Entities\Supplier;

class SupplierRepository
{
    public function index()
    {
        return Supplier::get();
    }

    public function show($id)
    {
        return Supplier::find($id);
    }

    public function store($data)
    {
        $supplier = Supplier::create($data);
        return $supplier;
    }

    public function update($id, $data)
    {
        $supplier = Supplier::find($id);
        if($supplier) {
            $supplier->update($data);
        }

        return $supplier;
    }

    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        if($supplier) {
            $supplier->delete();
            return true;
        } else {
            return false;
        }
    }

    public function getSupplierByBusiness($businessId)
    {
        $suppliers = Supplier::where('business_id', $businessId)->get();
        return $suppliers;
    }
}
