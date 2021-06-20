<?php

namespace Modules\Item\Repositories;

use Modules\Item\Entities\FeaturedItem;
use Modules\Item\Entities\Item;

class FeaturedItemRepository
{

    /**
     * Toggle Featured Status of an item
     * If created already, then remove otherwise, create new
     *
     * @param array $data
     *
     * @return boolean|object
     */
    public function createOrDelete($data)
    {
        $response = [
            'status' => false,
            'message'=> ''
        ];

        try {
            $is_featured = FeaturedItem::where('item_id', $data['item_id'])->exists();

            if ($is_featured) { // Remove from featured list
                FeaturedItem::where('item_id', $data['item_id'])->delete();

                $response = [
                    'status'  => true,
                    'message' => 'Featured item removed successfully !'
                ];
            } else { // Add to featured list

                // Check if item is exists
                $item = Item::find($data['item_id']);

                if ( is_null( $item ))  return $response;

                if ( ! empty ( $item ) && $item->business_id ) {
                    FeaturedItem::create([
                        'item_id'     => $data['item_id'],
                        'business_id' => $item->business_id
                    ]);

                    $response = [
                        'status'  => true,
                        'message' => 'Featured item added successfully !'
                    ];
                } else {
                    $response = [
                        'status' => false,
                        'message'=> 'No item found !'
                    ];
                }
            }
        } catch (\Exception $e) {
            $response = [
                'status' => false,
                'message'=> $e->getMessage()
            ];
        }

        return $response;
    }
}
