<?php

namespace Modules\Payment\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Payment\Entities\PaymentMethod;

class PaymentMethodSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        PaymentMethod::insert([
            [
                'name'        => 'bKash',
                'code'        => 'bkash',
                'image'       => 'bkash.png',
                'description' => '<p>Send Money throw this bKash No.</p>'
            ],
            [
                'name'        => 'Rocket',
                'code'        => 'rocket',
                'image'       => 'rocket.png',
                'description' => 'Send Money throw this Rocket No.'
            ],
            [
                'name'        => 'Visa / Master Card',
                'code'        => 'card',
                'image'       => 'card.png',
                'description' => 'Click on Confirm Payment button to Card Payment Proceed...'
            ],
            [
                'name'        => 'Cash In Delivery',
                'code'        => 'cash_in',
                'image'       => 'cash_in.png',
                'description' => 'Please click confirm for cash in delivery'
            ],
        ]);
    }
}
