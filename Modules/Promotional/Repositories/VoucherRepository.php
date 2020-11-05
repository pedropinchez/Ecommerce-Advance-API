<?php

namespace Modules\Promotional\Repositories;

use App\Helpers\StringHelper;
use Modules\Promotional\Entities\GiftCard;
use Modules\Promotional\Entities\Voucher;
use Modules\Promotional\Interfaces\GiftCardInterface;

class VoucherRepository implements GiftCardInterface
{
    /**
     * @return mixed
     * get all the voucher
     */
    public function index()
    {
        return Voucher::get();
    }

    /**
     * @param $id
     * @return mixed
     * get a voucher
     */
    public function show($id)
    {
        return Voucher::where('id', $id)->orWhere('slug', $id)->first();
    }

    /**
     * @param $data
     * @return mixed
     * @throws Exception
     * @throws \Exception
     * store a voucher
     */
    public function store($data)
    {
        $data['slug'] = $this->generateSlug($data['title']);
        return Voucher::create($data);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     * update a voucher
     */
    public function update($id, $data)
    {
        $voucher = Voucher::find($id);
        if($voucher) {
            $voucher->update($data);
        }

        return $voucher;
    }

    /**
     * @param $id
     * @return bool
     * delete a voucher
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
     * @throws \Exception
     * generate slug
     */
    public function generateSlug($value)
    {
        return StringHelper::createSlug($value, 'Modules\Promotional\Entities\Voucher', 'slug');
    }
}
