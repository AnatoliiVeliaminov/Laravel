<?php

use App\ProductGallery;
use App\Productie;
use Illuminate\Database\Seeder;

class ProductGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idProducty = Productie::all('id')->toArray();
        foreach ($idProducty as $index => $item) {
            factory(ProductGallery::class, rand(2, 6))->create(['product_id' => $item['id']]);
        }
    }
}
