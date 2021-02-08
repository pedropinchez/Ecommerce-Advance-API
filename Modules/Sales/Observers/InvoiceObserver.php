<?php

namespace Modules\Sales\Observers;

use Modules\Sales\Entities\Invoice;
use Modules\Sales\Repositories\InvoiceRepository;
use Modules\Sales\Repositories\InvoiceStatusRepository;

class InvoiceObserver
{
    /**
     * Handle the Invoice "created" event.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return void
     */
    public function created(Invoice $invoice)
    {
        $invoiceStatusRepo = new InvoiceStatusRepository();
        $invoiceStatusRepo->storeOrUpdateInvoiceStatus($invoice->id);
    }

    /**
     * Handle the Invoice "updated" event.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return void
     */
    public function updated(Invoice $invoice)
    {
        // $invoiceStatusRepo = new InvoiceStatusRepository();
        // $invoiceStatusRepo->storeOrUpdateInvoiceStatus($invoice->id);
    }

    /**
     * Handle the Invoice "deleted" event.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return void
     */
    public function deleted(Invoice $invoice)
    {
        //
    }

    /**
     * Handle the Invoice "forceDeleted" event.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return void
     */
    public function forceDeleted(Invoice $invoice)
    {
        //
    }
}
