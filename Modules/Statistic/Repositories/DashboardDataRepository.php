<?php

namespace Modules\Statistic\Repositories;

use Illuminate\Support\Facades\DB;
use Modules\Auth\Entities\User;
use Modules\Item\Entities\Item;
use Modules\Sales\Entities\Invoice;
use Modules\Sales\Entities\TransactionSellLine;

class DashboardDataRepository
{
    public function getDashboardStatisticsData()
    {
        $business_id = request()->user()->business_id;
        $count_invoices = Invoice::where('business_id', $business_id)->count();
        $count_users = User::where('business_id', $business_id)->count();
        $count_items = Item::where('business_id', $business_id)->count();

        $data = [
            'total_invoices' => $count_invoices,
            'count_users' => $count_users,
            'count_items' => $count_items
        ];
        return $data;
    }

    public function getBestSellingProducts($limit)
    {
        $business_id = request()->user()->business_id;

        $bestSellingProducts = TransactionSellLine::select(
                'item_id',
                'items.name as item_name',
                'items.sku as item_sku',
                DB::raw('SUM((quantity * unit_price_inc_tax) - discount_amount - item_tax) as total_sale')
            )
            ->leftJoin('items', 'items.id', '=', 'transaction_sell_lines.item_id')
            ->groupBy('item_id')
            ->where('items.business_id', $business_id)
            ->orderBy('total_sale', 'desc')
            ->limit($limit)
            ->get();
        return $bestSellingProducts;
    }
}
