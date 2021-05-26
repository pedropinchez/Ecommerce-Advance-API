<?php

namespace Modules\Customer\Repositories;

use Illuminate\Http\Request;
use App\Interfaces\BasicCrudInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Modules\Analytics\Entities\Area;
use Modules\Analytics\Entities\City;
use Modules\Analytics\Entities\Country;
use Modules\Customer\Entities\Address;
use Modules\Customer\Entities\Customer;

class AddressRepository
{

    public function get_address($args = [])
    {
        $defaults = [
            'type'           => null,
            'user_id'        => null,
            'transaction_id' => null,
            'is_default'     => null,
            'is_single'      => false,
        ];

        $args = array_merge($defaults, $args);
        $query = DB::table('addresses');

        if (!empty($args['type'])) {
            $query->where('type', $args['type']);
        }

        if (!empty($args['user_id'])) {
            $query->where('user_id', $args['user_id']);
        }

        if (!empty($args['transaction_id'])) {
            $query->where('transaction_id', $args['transaction_id']);
        }

        if (!empty($args['is_default'])) {
            $query->where('is_default', $args['is_default']);
        }

        if ($args['is_single']) {
            $addresses = $query->first();
        } else {
            $addresses = $query->get();
        }
        return $addresses;
    }

    public function store($data = [])
    {
        try {
            if (empty($data['transaction_id'])) {
                $data['user_id'] = request()->user()->id;
                $data['transaction_id'] = null;
            } else {
                $data['user_id'] = null;
            }

            $address = Address::create([
                'type'           => $data['type'],
                'user_id'        => $data['user_id'] ? $data['user_id'] : null,
                'transaction_id' => $data['transaction_id'] ? $data['transaction_id'] : null,
                'country_id'     => $data['country_id'],
                'country'        => Country::where('id', $data['country_id'])->value('name'),
                'city_id'        => $data['city_id'],
                'city'           => City::where('id', $data['city_id'])->value('name'),
                'area_id'        => $data['area_id'],
                'area'           => Area::where('id', $data['area_id'])->value('name'),
                'street1'        => $data['street1'],
                'street2'        => $data['street2'],
                'is_default'     => $data['is_default']
            ]);

            return  $address;
        } catch (\Exception $e) {
            // throw new \Exception("Please give all data proprperly.");
            throw new \Exception($e->getMessage());
        }
    }

    public function show($id)
    {
        $address = Address::find($id);
        return $address;
    }

    public function update($id)
    {
        try {
            $data = request()->all();
            $address = Address::find($id);

            if ($address) {
                if ($address->user_id !== null) {
                    if (request()->user()->id !== $data['user_id']) {
                        throw new \Exception("You are not permitted to edit other persons data");
                    }
                }

                $address->update([
                    'country_id'     => $data['country_id'],
                    'country'        => Country::where('id', $data['country_id'])->value('name'),
                    'city_id'        => $data['city_id'],
                    'city'           => City::where('id', $data['city_id'])->value('name'),
                    'area_id'        => $data['area_id'],
                    'area'           => Area::where('id', $data['area_id'])->value('name'),
                    'street1'        => $data['street1'],
                    'street2'        => $data['street2'],
                    'is_default'     => $data['is_default']
                ]);
            }

            return $address;
        } catch (\Exception $e) {
            throw $e->getMessage();
        }
    }

    public function delete($id)
    {
        $address = Address::find($id);

        if ($address) {
            if ($address->user_id !== null) {
                if (request()->user()->id !== $address->user_id) {
                    throw new \Exception("You are not permitted to delete other persons data");
                }
            }

            $address->delete();
        }
        return $address;
    }

}
