<?php

namespace Modules\Statistic\Repositories;

use Modules\Auth\Entities\User;
use Modules\Item\Entities\Item;
use Modules\Sales\Entities\Invoice;

class DashboardDataRepository
{
    public function getDashboardStatisticsData()
    {
        $count_invoices = Invoice::count();
        $count_users = User::count();
        $count_items = Item::count();

        $data = [
            'total_invoices' => $count_invoices,
            'count_users' => $count_users,
            'count_items' => $count_items,
        ];
        return $data;
    }
}
