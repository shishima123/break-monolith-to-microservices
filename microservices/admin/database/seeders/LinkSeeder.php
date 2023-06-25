<?php

namespace Database\Seeders;

use App\Models\Link;
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
        $links = DB::connection('old_mysql')
            ->table('links')->get();

        foreach ($links as $link) {
            Link::create([
                'id' => $link->id,
                'user_id' => $link->user_id,
                'code' => $link->code,
                'created_at' => $link->created_at,
                'updated_at' => $link->updated_at,
            ]);
        }
    }
}
