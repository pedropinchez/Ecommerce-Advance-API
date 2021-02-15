<?php

namespace Modules\Business\Repositories;

use Illuminate\Http\Request;
use Modules\Business\Entities\Wishlist;

class WishlistRepository
{

    public function index()
    {
        $user = request()->user();
        return Wishlist::where('user_id', $user->id)
            ->with('item')
            ->orderBy('id', 'desc')
            ->get();
    }

    public function store($data)
    {
        $data['user_id'] = request()->user()->id;
        $wishlist = Wishlist::create($data);
        return $wishlist;
    }

    public function delete($id)
    {
        $wishlist = Wishlist::find($id);
        if (!is_null($wishlist)) {
            if(request()->user()->id === $wishlist->user_id){
                $wishlist = $wishlist->delete();
            }else{
                throw new \Exception("You're not permitted to delete other persons wishlist");
            }
           return true;
        }
        return false;
    }
}
