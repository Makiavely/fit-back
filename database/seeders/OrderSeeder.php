<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories;

class OrderSeeder extends Seeder
{
    public function run()
    {
        Order::factory()->count(5)->create()
            ->each(function ($order) {
                OrderItem::factory()->count(random_int(1, 5))->create([
                    'order_id' => $order->id,
                ]);
            });

    }

/*    public function run()
    {
        factory(\App\Order::class, 30)->create()
            ->each(function ($order) {
                factory(\App\OrderItem::class, random_int(1, 5))->create([
                    'order_id' => $order->id,
                ]);
            });
    }*/

}


