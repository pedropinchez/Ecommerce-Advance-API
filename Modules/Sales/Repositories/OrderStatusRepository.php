<?php

namespace Modules\Sales\Repositories;

use Modules\Sales\Entities\Invoice;
use Modules\Sales\Entities\InvoiceItem;
use Modules\Sales\Entities\InvoiceSellLine;
use Modules\Sales\Entities\OrderStatus;
use Modules\Sales\Entities\Transaction;

class OrderStatusRepository extends TransactionRepository
{

    public function storeOrUpdateOrderStatus($transaction_id)
    {
        $transaction = $this->show($transaction_id);
        if (!is_null($transaction)) {
            $orderStatus = OrderStatus::where('transaction_id', $transaction_id)->first();
            OrderStatus::where('transaction_id', $transaction_id)
            ->updateOrCreate([
                'transaction_id' => $transaction_id,
                'order_create_date' => is_null($orderStatus) ? $transaction->created_at : $orderStatus->order_create_date,
                'confirmed_by_vendor_date' => is_null($orderStatus) ? request()->confirmed_by_vendor_date : $orderStatus->confirmed_by_vendor_date,
                'shipped_by_vendor_date' => is_null($orderStatus) ? request()->shipped_by_vendor_date : $orderStatus->shipped_by_vendor_date,
                'delivery_by_vendor_date' => is_null($orderStatus) ? request()->delivery_by_vendor_date : $orderStatus->delivery_by_vendor_date,
                'received_by_customer_date' => is_null($orderStatus) ? request()->received_by_customer_date : $orderStatus->received_by_customer_date,
                'feedback_by_customer_date' => is_null($orderStatus) ? request()->feedback_by_customer_date : $orderStatus->feedback_by_customer_date,
            ]);
            return $orderStatus;
        }
    }

    public function getOrderStatusByTransaction($transaction_id)
    {
        return OrderStatus::where('transaction_id', $transaction_id)->first();
    }
}
