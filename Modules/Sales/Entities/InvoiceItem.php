<?php

namespace Modules\Sales\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Item\Entities\Item;

class InvoiceItem extends Model
{
    protected $fillable = [
        'invoice_id',
        'transaction_id',
        'business_id',
        'item_id',
        'transaction_sell_line_id',
        'qty',
        'amount',
        'discount_amount',
        'grand_total'
    ];

    protected $appends = ['item'];

    public function getItemAttribute()
    {
        $item = Item::select('id', 'name')->where('id', $this->item_id)->first();
        return $item;
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
