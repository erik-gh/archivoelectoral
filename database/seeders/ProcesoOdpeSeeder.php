<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcesoOdpeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('proceso_odpes')->truncate();
        $datos = [
            [
                'id_proceso' => 1,
                'id_odpe' => 1,
            ],
            [
                'id_proceso' => 1,
                'id_odpe' => 2,
            ],
            [
                'id_proceso' => 1,
                'id_odpe' => 3,
            ]
        ];
        DB::table('proceso_odpes')->insert($datos);
    }
}
