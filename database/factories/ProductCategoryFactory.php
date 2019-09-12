<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductCategory;
use Faker\Generator as Faker;

$factory->define(ProductCategory::class, function ($product_id,$category_id) {
    return [
        'product_id'=>$product_id,
        'category_id'=>$category_id
    ];
});

