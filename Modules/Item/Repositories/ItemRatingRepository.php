<?php

namespace Modules\Item\Repositories;

use App\Helpers\Base64Encoder;
use Illuminate\Support\Facades\DB;
use Modules\Item\Entities\Item;
use Modules\Item\Entities\ItemRating;
use Modules\Item\Entities\Unit;

class ItemRatingRepository
{

    /**
     * Get Ratings By Item
     *
     * @param int $item_id
     *
     * @return array Reviews List
     */
    public function get_ratings_by_item($item_id = null, $for_user = null, $status = null)
    {

        $query = DB::table('item_ratings')
            ->join('users', 'users.id', '=', 'item_ratings.user_id')
            ->join('items', 'items.id', '=', 'item_ratings.item_id')
            ->select(
                'users.first_name as rating_by',
                'item_ratings.id',
                'item_ratings.rating_value',
                'item_ratings.status',
                'item_ratings.comment',
                'item_ratings.image',
                'items.name as item_name',
            )
            ->orderBy('item_ratings.id', 'desc');

        if (!is_null($item_id) && $item_id != "0") {
            $query->where('item_id', $item_id);
        }

        if (!is_null($for_user) && $for_user != "0") {
            $user = request()->user();
            $query->where('user_id', $user->id);
        }

        if (!is_null($status)) {
            $query->where('item_ratings.status', intval($status));
        }

        $ratings = $query->get();
        return $ratings;
    }

    /**
     * Store a Review/Rating for item
     *
     * @param array $data
     *
     * @return object|\App\Models\ItemRating
     */
    public function store($data)
    {
        $user = request()->user();

        if (isset($data['images'])) {
            $images         = Base64Encoder::uploadBase64File($data['images'], "/images/products-rating/", 'rating-' . time() . '-' . uniqid(), 'product');
            $data['images'] = $images;
        } else {
            $data['images'] = null;
        }

        $rating = ItemRating::create([
            'item_id'      => $data['item_id'],
            'user_id'      => $user->id,
            'rating_value' => $data['rating_value'],
            'comment'      => $data['comment'],
            'images'       => $data['images'],
            'status'       => 0
        ]);

        // Update items table average_rating column value
        $item = Item::find($data['item_id']);
        if (!is_null($item)) {
            $average_value = $item->ratings()->average('rating_value');
            $item->average_rating = $average_value;
            $item->save();
        }

        return $rating;
    }

    /**
     * Update Rating status
     *
     * Update to true, if it was false, else false
     *
     * @param integer $id
     *
     * @return boolean
     */
    public function updateStatus($id)
    {
        $item_rating = ItemRating::find($id);

        if (!is_null($item_rating)) {
            $item_rating->update([
                'status' => $item_rating->status == 1 ? 0 : 1
            ]);
        }
        return true;
    }

    /**
     * Delete Item Rating
     *
     * @param integer $id
     *
     * @return boolean
     */
    public function deleteItemRating($id)
    {
        $item_rating = ItemRating::find($id);

        if (!is_null($item_rating)) {
            $item_rating->delete();
        }
        return true;
    }
}
