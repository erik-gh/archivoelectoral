<?php

namespace Database\Seeders;

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
        $datos = [
            'name' => 'EI2022',
            'email' => 'ELECCIONES INTERNAS 2022',
            'password' => bcrypt('qwerty123')
        ];
        DB::table('procesos')->insert($datos);
    }
}
