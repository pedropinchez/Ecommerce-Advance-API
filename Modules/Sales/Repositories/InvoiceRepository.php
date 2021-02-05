<?php

namespace Modules\Sales\Repositories;

use Modules\Sales\Entities\Invoice;
use Modules\Sales\Entities\InvoiceItem;
use Modules\Sales\Entities\InvoiceSellLine;
use Modules\Sales\Entities\Transaction;

class InvoiceRepository extends TransactionRepository
{
    public function getInvoiceList($request)
    {
        $query = Invoice::orderBy('id', 'desc');

        if ($request->search) {
            $query->where('invoice_no', '=', $request->search);
        }

        if ($request->business_id) {
            $query->where('business_id', $request->business_id);
        }

        if ($request->status) {
            $query->where('status', $request->status);
        }

        if ($request->isPaginated) {
            $paginateNo = $request->paginateNo ? $request->paginateNo : 20;
            return $query->paginate($paginateNo);
        } else {
            return $query->get();
        }
    }

    public function showInvoice($id)
    {
        return Invoice::with(['items', 'business', 'transaction', 'createdBy'])->find($id);
    }

    public function storeInvoice($transaction_id)
    {
        // Get Transaction with it's Details
        $transaction = $this->show($transaction_id);
        if(!is_null($transaction->invoices)){
            return $transaction;
        }

        $details = $transaction->saleLines;
        $saleLinesCollection = collect($details);
        $businesses = $saleLinesCollection->groupBy('business_id')->toArray(); // Segregate business wise transactions

        foreach ($businesses as $business_id => $items) {
            $itemsCollection = collect($items);
            $total_amount = 0;
            $total_discount = 0;
            foreach ($itemsCollection as $key3 => $item) {
                $total_amount += $item['quantity'] * $item['unit_price_inc_tax'];
                $total_discount += $item['discount_amount'];
            }
            $grand_total = $total_amount - $total_discount;
            $paid_total = 0;

            // Create an invoice with caluclated data from transaction
            $invoice = Invoice::create([
                'invoice_no' => $this->getAutoGenerateInvoiceNo($business_id),
                'transaction_id' => $transaction->id,
                'business_id' => $business_id,
                'total_amount' => $total_amount,
                'total_discount' => $total_discount,
                'grand_total' => $grand_total,
                'paid_total' => $paid_total,
                'status' => 'due',
                'created_by' => $transaction->created_by,
                'date' => date('Y-m-d')
            ]);

            // If Invoice is created, then insert these also in invoice_items
            if (!is_null($invoice)) {
                foreach ($itemsCollection as $key3 => $item) {
                    InvoiceItem::create([
                        'invoice_id' => $invoice->id,
                        'transaction_id' => $transaction->id,
                        'business_id' => $item['business_id'],
                        'item_id' => $item['item_id'],
                        'transaction_sell_line_id' => $item['id'],
                        'qty' => $item['quantity'],
                        'amount' => $item['unit_price_inc_tax'],
                        'discount_amount' => $item['discount_amount'],
                        'grand_total' => $item['quantity'] * $item['unit_price_inc_tax'] - $item['discount_amount']
                    ]);
                }
            }
        }
        return $transaction;
    }

    public function getAutoGenerateInvoiceNo($business_id)
    {
        $previousInvoice = Invoice::orderBy('id', 'desc')
            ->where('business_id', $business_id)
            ->value('invoice_no');
        return (int) $previousInvoice + 1;
    }

    public function destroyInvoice($id)
    {
        $invoice = Invoice::find($id);
        if ($invoice) {
            $invoice->delete();
            return true;
        } else {
            return false;
        }
    }

    public function getInvoiceByBusiness($businessId)
    {
        return Invoice::with(['items', 'business'])
            ->where('business_id', $businessId)
            ->paginate(20);
    }
}
