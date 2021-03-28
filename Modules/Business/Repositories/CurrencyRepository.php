<?php

namespace Modules\Business\Repositories;

use Modules\Business\Entities\Currency;
use Modules\Business\interfaces\CurrencyInterface;

class CurrencyRepository implements CurrencyInterface
{
    /**
     * @return mixed
     * get all currency
     */
    public function index()
    {
        $query = Currency::orderBy('id', 'desc');

        if (request()->search) {
            $query->where('country', 'like', '%' . request()->search . '%');
            $query->orWhere('currency', 'like', '%' . request()->search . '%');
            $query->orWhere('code', 'like', '%' . request()->search . '%');
            $query->orWhere('symbol', 'like', '%' . request()->search . '%');
        }

        if (request()->isPaginated) {
            $paginateNo = request()->paginateNo ? request()->paginateNo : 20;
            return $query->paginate($paginateNo);
        } else {
            return $query->get();
        }
    }

    /**
     * @param $id
     * @return mixed
     * get a single currency
     */
    public function show($id)
    {
        return Currency::find($id);
    }

    /**
     * @param $data
     * @return mixed
     * save a currency into db
     */
    public function store($data)
    {
        $currency = Currency::create($data);
        return $currency;
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     * update a currency
     */
    public function update($id, $data)
    {
        $currency = Currency::find($id);
        if($currency) {
            $currency->update($data);
        }

        return $currency;
    }

    /**
     * @param $id
     * @return bool
     * delete a currency
     */
    public function destroy($id)
    {
        $currency = Currency::find($id);
        if($currency) {
            $currency->delete();
            return true;
        } else {
            return false;
        }
    }
}
