<?php

namespace Modules\Sales\Repositories;

use Illuminate\Support\Facades\DB;
use Modules\Item\Entities\Item;
use Modules\Item\Repositories\ItemRepository;
use Modules\Sales\Entities\Transaction;
use Modules\Sales\Entities\TransactionSellLine;

class TransactionRepository
{
    public function index()
    {
        return Transaction::with(['saleLines'])->paginate(20);
    }

    public function show($id)
    {
        return Transaction::with(['saleLines', 'business'])->find($id);
    }

    public function store($data)
    {
        $invoiceRepo = new InvoiceRepository();
        // return $invoiceRepo->storeInvoice(3);

        $data['transaction_date'] = date('Y-m-d');
        $transaction = Transaction::create($data);
        if($transaction) {
            foreach($data['sale_lines'] as $key => $value) {
                $business_id = Item::where('id', $value['item_id'])->value('business_id');
                $saleLine['business_id'] = $business_id;
                $saleLine['created_by'] = $data['created_by'];
                $saleLine['transaction_id'] = $transaction->id;
                $saleLine['item_id'] = $value['item_id'];
                $saleLine['quantity'] = $value['quantity'];
                $saleLine['unit_price'] = $value['unit_price'];
                $saleLine['unit_price_inc_tax'] = $value['unit_price_inc_tax'];
                $saleLine['discount_amount'] = $value['discount_amount'];
                $saleLine['item_tax'] = $value['item_tax'];
                TransactionSellLine::create($saleLine);
            }
        }

        return $transaction;
    }

    public function destroy($id)
    {
        $transaction = Transaction::find($id);
        if($transaction) {
            $transaction->delete();
            return true;
        } else {
            return false;
        }
    }

    public function getTransactionByBusiness($businessId)
    {
        return Transaction::with(['saleLines', 'business'])->where('business_id', $businessId)->paginate(20);
    }

    /**
     * Get Sales Items By User
     *
     * @return array
     */
    public function getSaleItemsByUser()
    {
        $user = request()->user();

        $transaction_sell_lines_by_user = DB::table('transaction_sell_lines')
        ->where('created_by', $user->id)
        ->pluck('item_id')
        ->toArray();

        $items_ids       = array_unique($transaction_sell_lines_by_user);
        $item_repository = new ItemRepository();
        $items           = $item_repository->get_items_short_info_by_ids($items_ids);

        return $items;
    }
}
