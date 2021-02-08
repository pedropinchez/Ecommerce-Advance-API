<?php

namespace Modules\Sales\Observers;

use Modules\Sales\Entities\InvoiceStatus;
use Modules\Sales\Repositories\InvoiceRepository;

class InvoiceStatusObserver
{
    private $invoiceRepository;
    public function __construct(InvoiceRepository $invoiceRepository)
    {
        $this->invoiceRepository = $invoiceRepository;
    }

    /**
     * Handle the InvoiceStatus "created" event.
     *
     * @param  \App\Models\InvoiceStatus  $transaction
     * @return void
     */
    public function created(InvoiceStatus $transaction)
    {

    }

    /**
     * Handle the InvoiceStatus "updated" event.
     *
     * @param  \App\Models\InvoiceStatus  $transaction
     * @return void
     */
    public function updated(InvoiceStatus $transaction)
    {
        // $this->invoiceRepository->storeInvoice($transaction->id);
    }

    /**
     * Handle the InvoiceStatus "deleted" event.
     *
     * @param  \App\Models\InvoiceStatus  $transaction
     * @return void
     */
    public function deleted(InvoiceStatus $transaction)
    {
        //
    }

    /**
     * Handle the InvoiceStatus "forceDeleted" event.
     *
     * @param  \App\Models\InvoiceStatus  $transaction
     * @return void
     */
    public function forceDeleted(InvoiceStatus $transaction)
    {
        //
    }
}
