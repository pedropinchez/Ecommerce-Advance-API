<?php

namespace Modules\Business\Repositories;

use Illuminate\Http\Request;
use App\Interfaces\BasicCrudInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Modules\Customer\Entities\Customer;

class CurrenciesRepository
{


    public function store(Request $request)
    {
        $currenciesId = DB::table("currencies")->insertGetId(
            [

                'country' => $request->country,
                'currency' => $request->currency,
                'code' => $request->code,
                'symbol' => $request->symbol,
                'thousand_separator' => $request->thousand_separator,
                'decimal_separator' => $request->decimal_separator,
            ]
        );
        $currencies = $this->findCurreciesById($currenciesId);
        return $currencies;
    }
    public function update(Request $request, $id)
    {
        DB::table("currencies")
            ->where('id', $id)
            ->update(
                [
                    'country' => $request->country,
                    'currency' => $request->currency,
                    'code' => $request->code,
                    'symbol' => $request->symbol,
                    'thousand_separator' => $request->thousand_separator,
                    'decimal_separator' => $request->decimal_separator,
                ]
            );

        return $this->findCurreciesById($id);
    }

    public function delete($id)
    {
        $currencies = $this->findCurreciesById($id);
        if (!is_null($currencies)) {
            DB::table("currencies")->where('id', $id)->delete();
        }
        return $currencies;
    }

    public function findCurreciesById($id)
    {
        $currencies = DB::table("currencies")->where('id', $id)->first();
        return $currencies;
    }
}
