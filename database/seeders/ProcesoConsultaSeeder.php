<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcesoConsultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('proceso_consultas')->truncate();
        $datos = [
            [
                'id_proceso' => 1,
                'id_consulta' => 1
            ],
            [
                'id_proceso' => 1,
                'id_consulta' => 2
            ],
            [
                'id_proceso' => 1,
                'id_consulta' => 3
            ],
            [
                'id_proceso' => 1,
                'id_consulta' => 4
            ],
        ];
        DB::table('proceso_consultas')->insert($datos);
    }
}
