<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusOrder extends Model
{
    protected $fillable = [
        'id', 'name'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function order()
    {
        return $this->hasMany(\App\Order::class);
    }
}
