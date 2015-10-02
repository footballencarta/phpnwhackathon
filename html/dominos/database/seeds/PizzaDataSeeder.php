<?php

use App\Models\Pizza;
use Illuminate\Database\Seeder;

class PizzaDataSeeder extends Seeder {
    public function run() {
        Pizza::create([
            'order_id' => '12345678',
            'current_order_status' => 3,
            'created_at' => date('Y-m-d H:i:s', strtotime('-13 minutes')),
            'updated_at' => date('Y-m-d H:i:s', strtotime('-2 minutes'))
        ]);

        Pizza::create([
            'order_id' => '45673210',
            'current_order_status' => 5,
            'created_at' => date('Y-m-d H:i:s', strtotime('-35 minutes')),
            'updated_at' => date('Y-m-d H:i:s', strtotime('-3 minutes'))
        ]);

        Pizza::create([
            'order_id' => '67895432',
            'current_order_status' => 5,
            'created_at' => date('Y-m-d H:i:s', strtotime('-40 minutes')),
            'updated_at' => date('Y-m-d H:i:s', strtotime('-5 minutes'))
        ]);

        Pizza::create([
            'order_id' => '98761234',
            'current_order_status' => 1,
            'created_at' => date('Y-m-d H:i:s', strtotime('-4 minutes')),
            'updated_at' => date('Y-m-d H:i:s', strtotime('-4 minutes'))
        ]);

        Pizza::create([
            'order_id' => '23450987',
            'current_order_status' => 4,
            'created_at' => date('Y-m-d H:i:s', strtotime('-25 minutes')),
            'updated_at' => date('Y-m-d H:i:s', strtotime('-30 seconds'))
        ]);

        //... add more quotes if you want!
    }
}
