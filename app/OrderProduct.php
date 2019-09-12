<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $fillable = [
        'id', 'order_id', 'producties_id', 'producties_count'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function order()
    {
        return $this->belongsToMany(\App\Order::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function productie()
    {
        return $this->belongsToMany(\App\Productie::class);
    }
}
