<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Using to sync old database to microservice database
//        $users = Db::connection('old_mysql')->table('users')->get();
//        foreach ($users as $user) {
//            User::create([
//                'id' => $user->id,
//                'first_name' => $user->first_name,
//                'last_name' => $user->last_name,
//                'email' => $user->email,
//                'password' => $user->password,
//                'is_admin' => $user->is_admin,
//                'created_at' => $user->created_at,
//                'updated_at' => $user->updated_at,
//            ]);
//        }
    }
}
