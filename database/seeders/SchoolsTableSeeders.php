<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SchoolsTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postsData = [
            ['name' => 'Ecole Internationale MAARIF', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ecole Internationale Mariam', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'RM', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Le Jourdain', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lycée Français', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ITIYANE', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MADONE', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cours lumière', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Perform bulk insert
        DB::table('schools')->insert($postsData);

    }
}
