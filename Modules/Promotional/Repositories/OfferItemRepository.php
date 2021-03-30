<?php

namespace Modules\Promotional\Repositories;

use App\Helpers\StringHelper;
use App\Helpers\UploadHelper;
use Exception;

use Modules\Promotional\Entities\OfferItem;
use Modules\Promotional\Interfaces\OfferItemInterface;

class OfferItemRepository
{
    /**
     * @return mixed
     * get all the gift cards
     */
    public function index()
    {
        $query = OfferItem::orderBy('id', 'desc')
        ->select('offer_items.*', 'items.name as item_name', 'items.sku as item_sku', 'items.featured_image as item_featured_image')
        ->join('items', 'items.id', '=', 'offer_items.item_id');

        if (request()->search) {
            $query->where('items.name', 'like', '%' . request()->search . '%')
            ->orWhere('items.sku', 'like', '%' . request()->search . '%');
        }

        if (request()->type) {
            $query->where('offer_items.offer_type', request()->type);
        }

        if (request()->business_id) {
            $query->where('offer_items.business_id', request()->business_id);
        }

        if (request()->isPaginated) {
            $paginateNo = request()->paginateNo ? request()->paginateNo : 20;
            return $query->paginate($paginateNo);
        } else {
            return $query->get();
        }
    }

    /**
     * show
     *
     * @param $id
     *
     * @return object|OfferItem
     *
     * get a gift card
     */
    public function show($id)
    {
        return OfferItem::find($id);
    }

    /**
     * @param $data
     * @return mixed
     * @throws Exception
     * store a gift card
     */
    public function store($data)
    {
        $user = request()->user();
        $data['is_visible'] = 1;
        $data['offer_percent_discount'] = (float) (($data['current_price'] - $data['offer_price']) * 100 ) / $data['current_price'];
        $data['created_by'] = $user->id;
        $data['business_id'] = $user->business_id;
        return OfferItem::create($data);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     * update a gift card
     */
    public function update($id, $data)
    {
        $offerItem = OfferItem::find($id);

        if($offerItem) {
            $user = request()->user();
            $data['is_visible'] = $data['is_visible'];
            $data['offer_percent_discount'] = (float) (($data['current_price'] - $data['offer_price']) * 100 ) / $data['current_price'];
            $data['updated_by'] = $user->id;
            $offerItem->update($data);
        }

        return $offerItem;
    }

    /**
     * @param $id
     * @return bool
     * delete a gift card
     */
    public function destroy($id)
    {
        $offerItem = OfferItem::find($id);
        if($offerItem) {
            $offerItem->delete();
            return true;
        } else {
            return false;
        }
    }
}
