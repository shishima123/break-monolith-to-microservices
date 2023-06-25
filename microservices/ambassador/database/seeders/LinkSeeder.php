<?php

namespace Database\Seeders;

use App\Models\Link;
use App\Models\LinkProduct;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Link::factory(30)->create()->each(function (Link $link) {
            LinkProduct::create([
                'link_id' => $link->id,
                'product_id' => Product::inRandomOrder()->first()->id
            ]);
        });

        // Using to sync old database to microservice database
//        $links = DB::connection('old_mysql')
//            ->table('links')->get();
//
//        foreach ($links as $link) {
//            Link::create([
//                'id' => $link->id,
//                'user_id' => $link->user_id,
//                'code' => $link->code,
//                'created_at' => $link->created_at,
//                'updated_at' => $link->updated_at,
//            ]);
//        }
    }
}
