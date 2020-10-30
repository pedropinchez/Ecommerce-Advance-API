<?php

namespace Modules\Auth\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class AuthDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $faker = Faker::create('Modules\Auth\Entities\User');

        for($i = 1; $i <= 10; $i++){
            DB::table('users')->insert([
                'first_name' => $faker->name,
                'surname' => $faker->name,
                'last_name' => $faker->name,
                'username' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone_no' => $faker->unique()->randomDigit,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'language' => 'en',
                'remember_token' => Str::random(10),
                'created_at' => \Carbon\Carbon::now(),
                'Updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
