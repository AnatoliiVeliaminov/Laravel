<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductGallery;
use Faker\Generator as Faker;

$factory->define(ProductGallery::class, function (Faker $faker,$product_id) {
    return [
        'image_path' => $faker->image('public/storage/images/products',400,300,null,true),
        'product_id'=>$product_id
    ];
});
