<?php

namespace Modules\Promotional\Repositories;

use Modules\Promotional\Entities\TransactionDetail;

class TransactionDetailsRepository
{
    public function store($data)
    {
        return TransactionDetail::create($data);
    }

    public function updatePaymentStatus($transactionId, $data)
    {
        $transaction = TransactionDetail::where('id', $transactionId)->first();
        if($transaction) {
            $transaction->update($data);
        }
         return $transaction;
    }

    public function getGiftCardByCustomer($customerId)
    {
        return TransactionDetail::with(['giftCard', 'user', 'business'])->where('user_id', $customerId)->get();
    }
}
