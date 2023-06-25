<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orderItems = DB::connection('old_mysql')
            ->table('order_items')->get();

        foreach ($orderItems as $orderItem) {
            OrderItem::create([
                'id' => $orderItem->id,
                'price' => $orderItem->price,
                'ambassador_revenue' => $orderItem->ambassador_revenue,
                'admin_revenue' => $orderItem->admin_revenue,
                'order_id' => $orderItem->order_id,
                'product_title' => $orderItem->product_title,
                'quantity' => $orderItem->quantity,
                'created_at' => $orderItem->created_at,
                'updated_at' => $orderItem->updated_at,
            ]);
        }
    }
}
