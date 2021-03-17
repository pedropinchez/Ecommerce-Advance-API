<?php

namespace Modules\Sales\Repositories;

use Modules\Item\Repositories\ItemRepository;

class CartRepository
{
    public $itemRepository;

    public function __construct(ItemRepository $itemRepository) {
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

        $cart_items   = $this->itemRepository->get_items_short_info_by_ids( $products_ids );

        foreach ($cart_items as $key => $cart) {
            $cart->quantity   = $carts[$key]['quantity'];
            $cart_items[$key] = $cart;
        }

        return $cart_items;
    }
}
