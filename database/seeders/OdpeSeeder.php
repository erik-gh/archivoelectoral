<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OdpeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('odpes')->truncate();
        $datos = [
            [
                'nombre_odpe' => 'ORC CHACHAPOYAS',
                'estado' => 1
            ],
            [
                'nombre_odpe' => 'ORC HUARAZ',
                'estado' => 1
            ],
            [
                'nombre_odpe' => 'PUNTO FOCAL SANTA',
                'estado' => 1
            ]
        ];
        DB::table('odpes')->insert($datos);
    }
}
