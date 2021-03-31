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
            Stripe\Stripe::setApiKey('sk_test_kCfiZz6HkYFUvicGovlxWAMS');

            $stripe_payment = Stripe\Charge::create([
                "amount"      => 1020000,
                "currency"    => "bdt",
                "source"      => $data['payload'],
                "description" =>  "Test payment from Ecommerce Store."
            ]);

            return $stripe_payment;
        }
    }
}
