<?php

namespace Modules\Business\Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $faker = Faker::create('Modules\Business\Entities\Business');

        for($i = 1; $i <= 10; $i++){
            DB::table('business')->insert([
                'first_name' => $faker->name,
                'bin' => $faker->name,
                'currency_id' => 1,
                'start_date' => date('Y-m-d'),
                'tax_number_1' => $faker->name,
                'tax_label_1' => $faker->name,
                'tax_number_2' => $faker->name,
                'tax_label_2' => $faker->name,
                'owner_id' => $i,
                'created_at' => \Carbon\Carbon::now(),
                'Updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
