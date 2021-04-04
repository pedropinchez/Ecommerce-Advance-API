<?php

namespace Modules\Payment\Repositories;

use Modules\Payment\Entities\PaymentMethod;
use Modules\Sales\Entities\Transaction;

use Stripe;

class PaymentRepository
{

    public function getPaymentMethods()
    {
        return PaymentMethod::get();
    }

    /**
     * Store new payment
     *
     * @param array $data
     * @return void
     */
    public function store($data = [])
    {

        $transaction_id = $data['order_id'];
        $transaction = Transaction::find($transaction_id);

        try {

            if (is_null($transaction)) {
                throw new \Exception('Sorry, Transacton not found for this payment !');
            } else {
                // Set stripe secret key
                Stripe\Stripe::setApiKey('sk_test_kCfiZz6HkYFUvicGovlxWAMS');

                $stripe_payment = Stripe\Charge::create([
                    'amount'      => 1020000,
                    'currency'    => 'bdt',
                    'source'      => $data['payload'],
                    'description' => "Sales Created of Transaction #$transaction_id",
                    'invoice'     => $transaction_id,
                    'billing_details' => [
                        'address' => [
                            'city'        => null,
                            'country'     => null,
                            'line1'       => null,
                            'line2'       => null,
                            'postal_code' => null,
                            'state'       => null
                        ],
                        'email' => null,
                        'name'  => null,
                        'phone' => null
                    ]
                ]);

                return $stripe_payment;
            }
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage);
        }
    }

    public function calculateTransactionPaymentDetail($transaction_id)
    {

    }
}
