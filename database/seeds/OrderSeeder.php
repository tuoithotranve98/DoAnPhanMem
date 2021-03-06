<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Order::class, 15)->create()->each(function ($order) {
            $order->orderdetails()->save(factory(App\OrderDetail::class)->make());
        });
    }
}
