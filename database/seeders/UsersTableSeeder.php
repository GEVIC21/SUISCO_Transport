<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('00000000'),
            ],
            [
                'name' => 'Driver',
                'email' => 'driver@gmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('00000000'),
            ],
            [
                'name' => 'Parent',
                'email' => 'parent@gmail.com',
                'role' => 'admin',
                'status' => 'inactive',
                'password' => bcrypt('00000000'),
            ],
        ]);


    }
}
