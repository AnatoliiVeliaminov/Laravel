<?php

use Illuminate\Database\Seeder;
use App\Productie;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Order::class,7)->create()->each(
            function ($order){
                $order->product()->attach(\App\Productie::all()->random(3),[
                    'producties_count'=>rand(1,10)
                ]);
            }
        );
    }
}

