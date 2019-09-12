<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(StatusOrderSeeder::class);
        $this->call(ProductieSeeder::class);
        $this->call(ProductGallerySeeder ::class);
        $this->call(ProductCategorySeeder ::class);
        $this->call(OrderSeeder ::class);
//        $this->call(OrderProductSeeder ::class);

    }
}
