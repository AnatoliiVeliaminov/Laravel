<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use App\StatusOrder;
use App\User;
use Faker\Generator as Faker;


$factory->define(Order::class, function (Faker $faker) {
    $user_id = User::all('id')->random(1)->toArray();
    $status_id = StatusOrder::all('id')->random(1)->toArray();
    return [
        'user_id' => $user_id[0]['id'],
        'status_id' => $status_id[0]['id'],
        'shipping_data_country' => $faker->country,
        'shipping_data_city' => $faker->city,
        'shipping_data_address' => $faker->address,
        'total_price' => $faker->randomFloat(2, 99,1200)
    ];
});
