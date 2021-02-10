<?php

namespace Modules\Promotional\Repositories;

use App\Helpers\StringHelper;
use App\Helpers\UploadHelper;
use Exception;
use Modules\Promotional\Entities\Voucher;
use Modules\Promotional\Interfaces\GiftCardInterface;

class VoucherRepository implements GiftCardInterface
{
    /**
     * @return mixed
     * get all the gift cards
     */
    public function index()
    {
        $query = Voucher::orderBy('id', 'desc');
        if (request()->search) {
            $query->where('title', 'like', '%' . request()->search . '%');
            $query->orWhere('slug', 'like', '%' . request()->search . '%');
            $query->orWhere('description', 'like', '%' . request()->search . '%');
        }
        if (request()->isPaginated) {
            $paginateNo = request()->paginateNo ? request()->paginateNo : 20;
            return $query->paginate($paginateNo);
        } else {
            return $query->get();
        }
    }

    /**
     * @param $id
     * @return mixed
     * get a gift card
     */
    public function show($id)
    {
        return Voucher::where('id', $id)
        ->orWhere('slug', $id)
        ->first();
    }

    /**
     * @param $data
     * @return mixed
     * @throws Exception
     * store a gift card
     */
    public function store($data)
    {
        $data['status'] = 1;
        $data['created_by'] = 1;
        if (isset($data['image'])) {
            $data['image'] = UploadHelper::upload('image',  $data['image'], 'vouchers-' . '-' . time(), 'images/vouchers');
        }
        $data['slug'] = $this->generateSlug($data['title']);
        $voucher = Voucher::create($data);
        return $voucher;
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     * update a gift card
     */
    public function update($id, $data)
    {
        $voucher = Voucher::find($id);
        if($voucher) {
            $data['image'] = !isset($data['image']) ? $voucher->image : UploadHelper::update('image',  $data['image'], 'giftCard-' . '-' . time(), 'images/vouchers', $voucher->image);
            $voucher->update($data);
        }

        return $voucher;
    }

    /**
     * @param $id
     * @return bool
     * delete a gift card
     */
    public function destroy($id)
    {
        $voucher = Voucher::find($id);
        if($voucher) {
            $voucher->delete();
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
        return StringHelper::createSlug($value, 'Modules\Promotional\Entities\Voucher', 'slug');
    }
}
