<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productie extends Model
{
    protected $fillable = [
        'id', 'title', 'description', 'short_description', 'sku',
        'price', 'discount', 'in_stock', 'count', 'thumbnail'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function gallery()
    {
        return $this->belongsToMany(\App\ProductGallery::class,
            'product_galleries',
            'product_id',
            'image_path')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function category()
    {
        return $this->belongsToMany(\App\Category::class,
            'product_categories',
            'product_id',
            'category_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function order()
    {
        return $this->belongsToMany(\App\Order::class);
    }

    /**
     * @param $value
     */
    public function setThumbnailAttribute($value)
    {
        if (is_string($value)) {
            $this->attributes['thumbnail'] =
                str_replace('public/storage/', '', $value);
        }
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        if ($this->in_stock === 0) {
            $price = $this->price;
        } else {
            $price = $this->price - $this->discount;
        }
        return $price;
    }
}
















