<?php

namespace Modules\Promotional\Repositories;

use Modules\Promotional\Entities\GiftCardTransaction;
use Modules\Promotional\Entities\TransactionDetail;
use Modules\Promotional\Entities\VoucherTransaction;
use Modules\Sales\Entities\Transaction;

class TransactionDetailsRepository
{
    public function giftCardStore($data)
    {
        $transaction = Transaction::create($data);
        if($transaction) {
            TransactionDetail::create($data);
            $data['transaction_id'] = $transaction->id;
            GiftCardTransaction::create($data);
        }
        return $transaction;
    }

    public function voucherStore($data)
    {
        $transaction = Transaction::create($data);
        if($transaction) {
            TransactionDetail::create($data);
            $data['transaction_id'] = $transaction->id;
            VoucherTransaction::create($data);
        }
        return $transaction;
    }

    public function updatePaymentStatus($transactionId, $data)
    {
        $transaction = Transaction::where('id', $transactionId)->first();
        if($transaction) {
            $transaction->update($data);
        }
         return $transaction;
    }

    public function getGiftCardByCustomer($customerId)
    {
        return GiftCardTransaction::with(['business', 'giftCard'])->where('user_id', $customerId)->get();
    }

    public function getVoucherByCustomer($customerId)
    {
        return VoucherTransaction::with(['business', 'voucher'])->where('user_id', $customerId)->get();
    }
}
