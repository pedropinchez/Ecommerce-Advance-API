<?php

namespace Modules\Analytics\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Analytics\Entities\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Country::insert([
            [
                'name'       => 'Bangladesh',
                'code'       => 'bd',
                'phone_code' => '+880',
                'flag'       => 'bd.png',
            ],
            [
                'name'       => 'United States of America',
                'code'       => 'usa',
                'phone_code' => '+1',
                'flag'       => 'usa.png',
            ],
            [
                'name'       => 'United Kingdom',
                'code'       => 'uk',
                'phone_code' => '+44',
                'flag'       => 'uk.png',
            ],
            [
                'name'       => 'India',
                'code'       => 'in',
                'phone_code' => '+91',
                'flag'       => 'in.png',
            ],
            [
                'name'       => 'Singapore',
                'code'       => 'sg',
                'phone_code' => '+65',
                'flag'       => 'sg.png'
            ],
        ]);
    }
}
