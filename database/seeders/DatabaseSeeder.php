<?php

namespace Database\Seeders;

use App\Models\Parameter;
use App\Models\School;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // foreach (Parameter::DEFAULTS as $key => $value ) {
        //     if (Parameter::whereLabel($key)->doesntExist()) {
        //         Parameter::create([
        //             'label' => $key,
        //             'description' => $value[0],
        //             'value' => $value[1],
        //         ]);
        //     }
        // }

        $this->call([UsersTableSeeder::class]);
        $this->call([SchoolsTableSeeders::class]);
        ////role////
        // $this->call(AdminUserSeeder::class);

    }
}
