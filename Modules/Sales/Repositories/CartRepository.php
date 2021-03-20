<?php

namespace Modules\Sales\Repositories;

use Illuminate\Support\Facades\DB;
use Modules\Item\Repositories\ItemRepository;

class CartRepository
{
    public $itemRepository;

    public function __construct(ItemRepository $itemRepository)
    {
        $this->itemRepository = $itemRepository;
    }

    /**
     * Get Items Actual Information based on ID
     *
     * @param array $carts
     *
     * @return array cart items
     */
    public function get_cart_details($carts = [])
    {
        $products_ids = [];

        foreach ($carts as $key => $cart) {
            $products_ids[] = $cart['productID'];
        }

        $cart_items   = $this->itemRepository->get_items_short_info_by_ids($products_ids);

        foreach ($cart_items as $key => $cart) {
            $cart->quantity   = $carts[$key]['quantity'];
            $cart_items[$key] = $cart;
        }

        return $cart_items;
    }

    /**
     * Get Shipping Cost for cart items
     *
     * @param array $carts
     *
     * @return int total shipping cost
     */
    public function getShippingCostByCarts($carts = [])
    {
        $products_ids = [];

        foreach ($carts as $key => $cart) {
            $products_ids[] = $cart['productID'];
        }

        $businesses = DB::table('items')
            ->leftJoin('business', 'items.business_id', '=', 'business.id')
            ->select(
                'business.shipping_charge_city as shipping_charge',
                'business.shipping_charge_local as shipping_charge_local',
            )
            ->groupBy('items.business_id')
            ->whereIn('items.id', $products_ids)
            ->get();

        $total_shipping_cost = 0;

        foreach ($businesses as $business) {
            $total_shipping_cost += $business->shipping_charge;
        }

        return $total_shipping_cost;
    }
}
