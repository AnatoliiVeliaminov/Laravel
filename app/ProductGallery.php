<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    protected $fillable = [
        'id', 'image_path', 'product_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function productie()
    {
        return $this->belongsToMany(\App\Productie::class,
            'product_galleries',
            'image_path',
            'product_id')->withTimestamps();
    }
}
