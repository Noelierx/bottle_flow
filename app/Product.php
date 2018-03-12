<?php

namespace App;

use Storage;
use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\Contracts\Buyable;

class Product extends Model implements Buyable
{
    protected $fillable = [
        'reference', 'title', 'description', 'picture', 'price', 'tax_rate'
    ];

    protected $with = [
        'type'
    ];

    public static function boot()
    {
        Product::updating(function (Product $product) {
            if($product->picutre != $product->getOriginal('picture')) {
                Storage::disk('public')->delete($product->picture);
            }
        });

        Product::deleting(function (Product $product) {
            Storage::disk('public')->delete($product->picture);
        });

        parent::boot();
    }

    public function type()
    {
        return $this->belongsTo(ProductType::class, 'product_type_id');
    }

    public function modifiers()
    {
        return $this->belongsToMany(MessageModifier::class);
    }

    public function getPictureUrlAttribute()
    {
        return Storage::disk('public')->url($this->picture);
    }

    /**
     * Get the identifier of the Buyable item.
     *
     * @return int|string
     */
    public function getBuyableIdentifier($options = null)
    {
        return $this->id;
    }

    /**
     * Get the description or title of the Buyable item.
     *
     * @return string
     */
    public function getBuyableDescription($options = null)
    {
        return $this->description;
    }

    /**
     * Get the price of the Buyable item.
     *
     * @return float
     */
    public function getBuyablePrice($options = null)
    {
        return $this->price;
    }
}