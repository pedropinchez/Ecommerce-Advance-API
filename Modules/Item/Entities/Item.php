<?php

namespace Modules\Item\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Auth\Entities\User;
use Modules\Business\Entities\Business;
use Modules\Business\Entities\TaxRate;

class Item extends Model
{
    use SoftDeletes;
    protected $table = "items";
//    protected $connection = 'DB_iApps';
    protected $primaryKey = 'id';
    protected $fillable = [
        'business_id',
        'name',
        'unit_id',
        'brand_id',
        'category_id',
        'sub_category_id',
        'tax',
        'tax_type',
        'enable_stock',
        'alert_quantity',
        'sku',
        'barcode_type',
        'sku_manual',
        'created_by',
        'featured_image',
        'short_resolation_image'
    ];

    protected $with = ['images'];
    protected $appends = ['average_rating', 'featured_url'];

    public function getFeaturedUrlAttribute()
    {
        return is_null($this->featured_image) ? null : url('/').'/images/products/'.$this->featured_image;
    }

    /**
     * @return BelongsTo
     * get the related business with item
     */
    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    /**
     * @return BelongsTo
     * get the related category with item
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return BelongsTo
     * get the related subCategory with item
     */
    public function subCategory()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return BelongsTo
     * get the related brand with item
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * @return BelongsTo
     * get the related unit with item
     */
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    /**
     * @return BelongsTo
     * get the related tax with item
     */
    public function tax()
    {
        return $this->belongsTo(TaxRate::class);
    }

    /**
     * @return BelongsTo
     * get the user who created item
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return HasMany
     * get the attributes with item
     */
    public function attributes()
    {
        return $this->hasMany(ItemAttribute::class);
    }


    public function ratings()
    {
        return $this->hasMany(ItemRating::class);
    }

    public function getAverageRatingAttribute()
    {
        $rating = $this->ratings()->average('rating_value');

        if(is_null($rating)) return 0;
        return $rating;
    }

    public function images()
    {
        return $this->hasMany(ItemImage::class);
    }
}
