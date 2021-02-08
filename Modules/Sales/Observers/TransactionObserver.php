<?php

namespace Modules\Sales\Observers;

use Modules\Sales\Entities\Transaction;
use Modules\Sales\Repositories\InvoiceRepository;
use Modules\Sales\Repositories\OrderStatusRepository;

class TransactionObserver
{
    private $invoiceRepository;
    private $orderStatusRepository;
    public function __construct(InvoiceRepository $invoiceRepository, OrderStatusRepository $orderStatusRepository)
    {
        $this->invoiceRepository = $invoiceRepository;
        $this->orderStatusRepository = $orderStatusRepository;
    }

    /**
     * Handle the Transaction "created" event.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return void
     */
    public function created(Transaction $transaction)
    {
        $this->invoiceRepository->storeInvoice($transaction->id);
        $this->orderStatusRepository->storeOrUpdateOrderStatus($transaction->id);
    }

    /**
     * Handle the Transaction "updated" event.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return void
     */
    public function updated(Transaction $transaction)
    {
        //
    }

    /**
     * Handle the Transaction "deleted" event.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return void
     */
    public function deleted(Transaction $transaction)
    {
        //
    }

    /**
     * Handle the Transaction "forceDeleted" event.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return void
     */
    public function forceDeleted(Transaction $transaction)
    {
        //
    }
}
