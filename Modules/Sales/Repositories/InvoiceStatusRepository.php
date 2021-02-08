<?php

namespace Modules\Sales\Repositories;

use Modules\Sales\Entities\Invoice;
use Modules\Sales\Entities\InvoiceItem;
use Modules\Sales\Entities\InvoiceSellLine;
use Modules\Sales\Entities\InvoiceStatus;
use Modules\Sales\Entities\Transaction;

class InvoiceStatusRepository extends InvoiceRepository
{

    public function storeOrUpdateInvoiceStatus($invoice_id)
    {
        $invoice = $this->showInvoice($invoice_id);
        if (!is_null($invoice)) {
            $invoiceStatus = InvoiceStatus::where('invoice_id', $invoice_id)->first();
            $invoiceStatus->updateOrCreate([
                'invoice_id' => $invoice_id,
                'invoice_create_date' => is_null($invoiceStatus) ? $invoice->created_at : $invoiceStatus->invoice_create_date,
                'confirmed_by_vendor_date' => is_null($invoiceStatus) ? request()->confirmed_by_vendor_date : $invoiceStatus->confirmed_by_vendor_date,
                'shipped_by_vendor_date' => is_null($invoiceStatus) ? request()->shipped_by_vendor_date : $invoiceStatus->shipped_by_vendor_date,
                'delivery_by_vendor_date' => is_null($invoiceStatus) ? request()->delivery_by_vendor_date : $invoiceStatus->delivery_by_vendor_date,
                'received_by_customer_date' => is_null($invoiceStatus) ? request()->received_by_customer_date : $invoiceStatus->received_by_customer_date,
                'feedback_by_customer_date' => is_null($invoiceStatus) ? request()->feedback_by_customer_date : $invoiceStatus->feedback_by_customer_date,
            ]);
            return $invoiceStatus;
        }
    }

    public function getInvoiceStatusByInvoice($invoice_id)
    {
        return InvoiceStatus::where('invoice_id', $invoice_id)->first();
    }
}
