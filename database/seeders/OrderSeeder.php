<?php

namespace Database\Seeders;

use App\Enums\OrderStatusEnum;
use App\Models\Order;
use App\Models\Sku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $cart = Order::factory()
            ->count(1)
            ->create([
                'session_id' => $session_id ?? Str::uuid(),
                'status' => OrderStatusEnum::CART
            ]);
        
        $cart->each(function($cart){
            $sku = Sku::with('product')->inRandomOrder()->take(random_int(1,15))->get();
        });
    }
}
