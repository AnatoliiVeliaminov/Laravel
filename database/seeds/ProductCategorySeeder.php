<?php

use App\ProductGallery;
use Illuminate\Database\Seeder;
use App\Productie;
use App\ProductCategory;
use App\Category;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idProduct = Productie::all('id')->toArray();
        $idCategory = Category::all('id')->toArray();
        foreach ($idProduct as $index => $item) {
            mt_srand(time() * 100000);
            shuffle($idCategory);
            $maxCategory = mt_rand(2, count($idCategory) - 1);
            for ($i = 0; $i < $maxCategory; $i++) {
                factory(ProductCategory::class)
                    ->create([
                        'product_id' => $item['id'],
                        'category_id' => $idCategory[$i]['id']
                    ]);
            }
        }
    }
}
