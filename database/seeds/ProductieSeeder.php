<?php

use App\ProductGallery;
use App\Productie;
use Illuminate\Database\Seeder;

class ProductieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Productie::class, 10)->create();
    }
}
