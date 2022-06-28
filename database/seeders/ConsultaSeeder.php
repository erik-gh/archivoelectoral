<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('consultas')->truncate();
        $datos = [
            [
                'consulta' => 'RPD',
                'descripcion' => 'Regional - Provincial- Distrital',
                'estado' => 1
            ],
            [
                'consulta' => 'RP',
                'descripcion' => 'Reginal - Provincial',
                'estado' => 1
            ],
            [
                'consulta' => 'PD',
                'descripcion' => 'Provincial - Distrital',
                'estado' => 1
            ],
            [
                'consulta' => 'P',
                'descripcion' => 'Provincial',
                'estado' => 1
            ]
        ];
        DB::table('consultas')->insert($datos);
    }
}
