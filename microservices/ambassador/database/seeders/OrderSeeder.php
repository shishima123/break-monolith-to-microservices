<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Using to sync old database to microservice database
//        $orders = DB::connection('old_mysql')->table('orders')->get();
//        foreach ($orders as $order) {
//            $orderItems = DB::connection('old_mysql')
//                ->table('order_items')->where('order_id', $order->id)->get();
//            Order::create([
//                'id' => $order->id,
//                'user_id' => $order->user_id,
//                'code' => $order->code,
//                'total' => $orderItems->sum(fn($item) => $item->ambassador_revenue),
//                'created_at' => $order->created_at,
//                'updated_at' => $order->updated_at,
//            ]);
//        }
    }
}
