<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(ConsultaSeeder::class);
        $this->call(OdpeSeeder::class);
        $this->call(ProcesoSeeder::class);
        $this->call(UbigeoSeeder::class);
        $this->call(ProcesoConsultaSeeder::class);
        $this->call(ProcesoOdpeSeeder::class);
    }
}
