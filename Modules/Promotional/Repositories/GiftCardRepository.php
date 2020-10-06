<?php

namespace Modules\Promotional\Repositories;

use App\Helpers\StringHelper;
use Exception;
use Modules\Promotional\Entities\GiftCard;
use Modules\Promotional\Interfaces\GiftCardInterface;

class GiftCardRepository implements GiftCardInterface
{
    /**
     * @return mixed
     * get all the gift cards
     */
    public function index()
    {
        return GiftCard::get();
    }

    /**
     * @param $id
     * @return mixed
     * get a gift card
     */
    public function show($id)
    {
        return GiftCard::where('id', $id)->orWhere('slug', $id)->first();
    }

    /**
     * @param $data
     * @return mixed
     * @throws Exception
     * store a gift card
     */
    public function store($data)
    {
        $data['slug'] = $this->generateSlug($data['title']);
        $giftCard = GiftCard::create($data);
        return $giftCard;
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     * update a gift card
     */
    public function update($id, $data)
    {
        $giftCard = GiftCard::find($id);
        if($giftCard) {
            $giftCard->update($data);
        }

        return $giftCard;
    }

    /**
     * @param $id
     * @return bool
     * delete a gift card
     */
    public function destroy($id)
    {
        $giftCard = GiftCard::find($id);
        if($giftCard) {
            $giftCard->delete();
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $value
     * @return string|string[]|null
     * @throws Exception
     * generate slug
     */
    public function generateSlug($value)
    {
        return StringHelper::createSlug($value, 'Modules\Promotional\Entities\GiftCard', 'slug');
    }
}
