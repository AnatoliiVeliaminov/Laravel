<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Productie;
use Faker\Generator as Faker;
use Faker\Provider\it_IT\Person as FakerPerson;

$factory->define(Productie::class, function (Faker $faker) {

    $sku = FakerPerson::taxId();
    $price = $faker->randomFloat(2, 1, 99);
    $inStock = $faker->randomElement([false, true]);
    $count = 0;
    $discount = 0;
    if ($inStock === true) {
        $count = $faker->randomDigitNotNull;
        $discount = (float)$price / 3;
    }
    return [
        'title' => $faker->sentence(2),
        'description' => $faker->realText(100),
        'short_description' => $faker->realText(22),
        'sku' => $sku,
        'price' => $price,
        'discount' => $discount,
        'in_stock' => $inStock,
        'count' => $count,
        'thumbnail' => $faker->image('public/storage/images/products', 400, 300, null, true)
    ];
});




















