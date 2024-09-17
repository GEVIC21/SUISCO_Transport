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
            ['name' => 'Ecole Internationale MAARIF','location'=> '6.223230399600659,1.1946412', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ecole Internationale Mariam','location'=> '6.2190383680220025,1.193255738995788', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'RM','location'=> '6.210313026720577,1.1882663130603677', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Le Jourdain','location'=> '6.2061375477242375,1.1820863992371167', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lycée Français','location'=> '6.126540662955043,1.206001805313481', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ITIYANE','location'=> '6.221588024199672,1.1941213399456598', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MADONE','location'=> '6.192649379858698,1.2071484399821737', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cours lumière','location'=> '6.18714555898389,1.2052437908069675', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Perform bulk insert
        DB::table('schools')->insert($postsData);

    }
}
