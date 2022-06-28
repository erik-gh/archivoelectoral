<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UbigeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('ubigeos')->truncate();
        $datos = [
            [
                'cod_ubigeo' => '010101',
                'departamento_ubigeo' => 'AMAZONAS',
                'provincia_ubigeo' => 'CHACHAPOYAS',
                'distrito_ubigeo' => 'CHACHAPOYAS',
                'id_odpe' =>    1
            ],
            [
                'cod_ubigeo' => '010205',
                'departamento_ubigeo' => 'AMAZONAS',
                'provincia_ubigeo' => 'BAGUA',
                'distrito_ubigeo' => 'BAGUA',
                'id_odpe' =>    1
            ],
            [
                'cod_ubigeo' => '020101',
                'departamento_ubigeo' => 'ANCASH',
                'provincia_ubigeo' => 'HUARAZ',
                'distrito_ubigeo' => 'HUARAZ',
                'id_odpe' =>    2
            ],
            [
                'cod_ubigeo' => '020102',
                'departamento_ubigeo' => 'ANCASH',
                'provincia_ubigeo' => 'HUARAZ',
                'distrito_ubigeo' => 'INDEPENDENCIA',
                'id_odpe' =>    2
            ],
            [
                'cod_ubigeo' => '020501',
                'departamento_ubigeo' => 'ANCASH',
                'provincia_ubigeo' => 'CASMA',
                'distrito_ubigeo' => 'CASMA',
                'id_odpe' =>    3
            ],
            [
                'cod_ubigeo' => '020502',
                'departamento_ubigeo' => 'ANCASH',
                'provincia_ubigeo' => 'CASMA',
                'distrito_ubigeo' => 'BUENA VISTA ALTA',
                'id_odpe' =>    3
            ]

        ];
        DB::table('ubigeos')->insert($datos);
    }
}
