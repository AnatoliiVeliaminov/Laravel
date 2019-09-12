<?php

use App\Role;
use App\StatusOrder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;

class StatusOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = Config::get('constants.db.order_statuses');
        foreach ($statuses as $key => $status) {
            StatusOrder::create(['name' => $status]);

        }

    }
}





















