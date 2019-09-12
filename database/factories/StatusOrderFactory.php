<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\StatusOrder;
use Faker\Generator as Faker;

$factory->define(StatusOrder::class, function ($statusorder) {
    return [
        'name' => $statusorder
    ];
});
