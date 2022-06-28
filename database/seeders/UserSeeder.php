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
//        DB::table('users')->truncate();
        $datos = [
            'name' => 'Erik Tecse',
            'email' => 'eriktecse@gmail.com',
            'password' => bcrypt('qwerty123')
        ];
        DB::table('users')->insert($datos);
    }
}
