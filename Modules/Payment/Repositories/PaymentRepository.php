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

    public function store($data = [])
    {
        $transaction_id = $data['order_id'];
        $transaction = Transaction::find($transaction_id);

        if (is_null($transaction)) {
            throw new \Exception('Sorry, Transacton not found for this payment !');
        } else {
            // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            Stripe\Stripe::setApiKey('sk_test_kCfiZz6HkYFUvicGovlxWAMS');

            // $paymentIntent = \Stripe\PaymentIntent::create([
            //     'amount' => 101,
            //     'currency' => 'bdt',
            // ]);

            // $output = [
            //     'clientSecret' => $paymentIntent->client_secret,
            // ];
            $secret_token = "pi_1IaefTC5YyJJKXWL9jwoe8j1_secret_tqj5BRWJSIwEhiNfof7ovE0u3";

            Stripe\Charge::create([
                "amount" => 101,
                "currency" => "bdt",
                "source" => $secret_token,
                "description" => "Test payment from Ecommerce Store."
            ]);
        }
    }
}
